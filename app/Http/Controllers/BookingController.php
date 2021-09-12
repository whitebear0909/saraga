<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Cookie\SessionCookieJar;

use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Arr;

class BookingController extends Controller
{


    public function confirmation(Request $request){
    	// return $request->all();
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        $res = $client->request('GET', config('app.api_url')."/spots/".$request->slug);

        $data = json_decode($res->getBody())->data;
        $spot = $data->spot;
        $court = Arr::first($data->courts, function ($value, $key) use ($request){
		    return $value->id==$request->court_id;
		});

        $input_time = json_decode($request->input_time);
        $input_time_ids = [];

        // Get selected timeslot ids from selected court for API requirements.
        foreach ($court->timeslots as $key => $ts) {
            foreach ($input_time as $key => $input) {
                if($ts->time_slot == $input){
                    $input_time_ids[] = $ts->id;
                }
            }
        };

        // Create order details object for API request.
        $order_detail = new \stdClass();
        $order_detail->court_id = $court->id;
        $order_detail->court_timeslot_ids = $input_time_ids;

        session([
            'booking_data'=>json_encode([
                'spot'        => $spot,
                'court'       => $court,
                'input'       => $request->all(),
                'order_detail' => $order_detail
            ])
        ]);

        return view('classimax.booking-confirmation')->with('spot', $spot)->with('court', $court)->with('input', $request->all())->with('time', $input_time);  
    }

    public function apply_coupon(Request $request){
        $booking_data = json_decode(session('booking_data'));

        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);

        try {
            $res = $client->request('POST', config('app.api_url')."/order/apply", [
                'form_params' => [
                    'id'      => $booking_data->court->id,
                    'order_date'    => date("Y-m-d H:i:s", strtotime($booking_data->input->input_date)),
                    'order_details' => json_encode([$booking_data->order_detail]),
                    'code'          => $request->code ? $request->code : null,
                ]
            ]);
            $res_data = json_decode($res->getBody())->data;

            if(json_decode($res->getBody())->status_code=="200" && $request->code != ""){
                $request->session()->put('promo_code', json_encode($request->code));
                return response()->json([
                        'status' => 'true',
                        'data'  => $res_data
                    ]);
            }
            else{
                $request->session()->put('promo_code', null);
                return response()->json([
                        'status' => 'false',
                        'errors'  => 'Promo Invalid',
                    ]);
            }
        } catch (RequestException $e) {
            $request->session()->put('promo_code', null);
            return response()->json([
                    'status' => 'false',
                    'errors'  => 'Promo Invalid',
                ]);
        }        
    }

    public function get_snap_url(Request $request){
        $order_id = null;  
        $booking_data = json_decode(session('booking_data'));
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        $discount = 0;

        $price = $booking_data->court->discount_price ? $booking_data->court->discount_price : $booking_data->court->price; 
        // Get Order ID from API
        try{
            $res = $client->request('POST', config('app.api_url')."/order/generate/id", [
                'form_params' => [
                    'spot_id'      => $booking_data->spot->id,
                    'webuser_id'    => session('auth_data')->id,
                ]
            ]);
            $order_id = json_decode($res->getBody())->data;
        }
        catch (RequestException $e) {
            $order_id = "BASIC-".str_random(8);
        }

        $gross_amount = 0;
        // Apply Confirmed Order to API
        try{
            $res = $client->request('POST', config('app.api_url')."/order/create-test", [
                'form_params' => [
                        'id'      => $booking_data->court->id,
                        'order_date'    => date("Y-m-d H:i:s", strtotime($booking_data->input->input_date)),
                        'order_details' => json_encode([$booking_data->order_detail]),
                        'code'          => $request->voucher_code
                ]
            ]);
            $res_data = json_decode($res->getBody())->data;
            $gross_amount = $res_data->grand_total;
        } catch (RequestException $e) {
            // return view('classimax.404');
            return response()->json([
                    'status' => 'false',
                    'errors'  => 'Lapangan sudah habis.',
                ], 412);
        }    

       
        // return response()->json($gross_amount);
        $input_time = json_decode($request->input_time);

        $transaction = new class{};
        $transaction->order_id = $order_id;
        $transaction->gross_amount = $gross_amount;

        $customer        = new class{};
        $auth_user       = session('auth_data');
        $customer->first_name = $auth_user->name;
        $customer->email = $auth_user->email;
        $customer->phone = $auth_user->telephone;

        $expiry             = new class{};
        $expiry->start_time = date("Y-m-d H:i:s O");

        $input_time = json_decode($booking_data->input->input_time);
        $input_time = explode(" - ", $input_time[0])[0];
        $end_time           = date("Y-m-d H:i:s O", strtotime($booking_data->input->input_date." ".$input_time.":00"));
        $duration           = strtotime ( $end_time ) - strtotime ( $expiry->start_time );
        // return $input_time;
        // return $booking_data->input->input_date." ".$input_time.":00";

        $expiry->duration = 20;
        $expiry->unit = "minutes";
        // $expiry->duration   = 2;
        // $expiry->unit       = "hours";

        // $gopay = new class{};
        // $gopay->enable_callback = true;
        // $gopay->callback_url = "http://saraga.esy.es/payment/finish";

        $client = new Client();
        $snapres = $client->request('POST', config('app.snap_url')."/v1/transactions", [
            'headers' => [
                'Content-Type'  => 'application/json', 
                'Accept'        => 'application/json',
                'Authorization'   => 'Basic '.base64_encode(config('app.server_key'))
            ],
            'json' => [
                // 'gopay'               => $gopay,
                'transaction_details' => $transaction,
                'customer_details'    => $customer,
                'expiry'              => $expiry
            ]
        ]);
        $request->session()->put('snap_token', json_decode($snapres->getBody())->token);
        $request->session()->put('order_id', json_encode($transaction->order_id));
        // return session('snapres');
        return $snapres->getBody();
    }

    public function create(Request $request){
        $booking_data = json_decode(session('booking_data'));
        $snap_token = session('snap_token');
        $order_id = json_decode(session('order_id'));
        $promo_code = json_decode(session('promo_code'));
        
        // return dd($booking_data);
        // return $snap_token;
        $status = "pending";
        if($request->transaction_status == 'settlement'){
            $status = "settlement";
        }
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        try {
            $res = $client->request('POST', config('app.api_url')."/order/create", [
                'form_params' => [
                    'id'            => $order_id,
                    'order_date'    => date("Y-m-d H:i:s", strtotime($booking_data->input->input_date)),
                    'order_details' => json_encode([$booking_data->order_detail]),
                    'token'         => $snap_token,
                    'code'          => $promo_code
                    // 'pdf_url'       => $request->data['pdf_url']
                ]
            ]);
            $request->session()->forget('booking_data');
            $request->session()->forget('snap_token');
            $request->session()->forget('order_id');
            $request->session()->forget('promo_code');

            return redirect(route('booking-list'));
            // return $res->getBody();
        } catch (RequestException $e) {
            return view('classimax.412');
            return $e;
        }
    }

    public function show(Request $request){
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);

        // $dateFilter = [$request->get('custom-range')];
        switch ($request->get('date-filter')) {
            case 'lastMonth':
                $time = mktime(0, 0, 0, date("m")-1, 1,   date("Y"));
                $dateFilter = [date("Y-m-d",$time), date("Y-m-t",$time)];
                break;
            case 'thisMonth':
                $time = mktime(0, 0, 0, date("m"), 1,   date("Y"));
                $dateFilter = [date("Y-m-d",$time), date("Y-m-t",$time)];
                break;
            default:
                $dateFilter = explode(",",$request->get('custom-range'));
                break;
        }

        $filters = [];
        if($request->get('type-filter')){
            $filters['status'] = $request->get('type-filter');
        }
        if($request->get('date-filter')){
            $filters['order_date'] = $dateFilter;
        }
        if($request->get('cat-filter')){
            $filters['sport_id'] = $request->get('cat-filter');
        }
        // print_r(request()->all());
        // return;
        try {
            $res = $client->request('POST', config('app.api_url')."/order",[
                'json' => [
                    'filters' => $filters,
                    'sort'    => "desc"
                ],
                // 'debug' => true
            ]);
        } catch (RequestException $e) {
            return $e;
        }

        $res_booking = json_decode($res->getBody())->data;
        $booking_list = new Class{};

        foreach ($res_booking as $booking) {
            if($booking->status == "expire" ){
                $booking_list->past[] = $booking;
            }
            else{
                $booking_list->active[] = $booking;
            }
        }

        $req_category = $client->request('GET', config('app.api_url')."/sports");
        $category_data = json_decode($req_category->getBody())->data;

        view()->share('categories', $category_data);
        return view('classimax.booking-list')->with('booking_list', $booking_list)->with('requests', $request->all());
    }

    public function detail(Request $request){

        $client = new Client();
        $midtrans_res = $client->request('GET', config('app.midtrans_api_url')."/v2/" . $request->id."/status", [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Accept'        => 'application/json',
                'Authorization'   => 'Basic '.base64_encode(config('app.server_key'))
            ]
        ]);

        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        try {
            $res = $client->request('POST', config('app.api_url')."/order", [
                'form_params' => [
                    'id'            => $request->id
                ]
            ]);
        } catch (RequestException $e) {
            return $e;
            // return view('classimax.booking-list')->withErrors(json_decode($e->getResponse()->getBody()->getContents())->data);
        }

        $res_booking = json_decode($res->getBody())->data;
        if(isset($res_booking[0])){
            return view('classimax.booking-detail')->with('data', $res_booking[0])->with('midtrans', json_decode($midtrans_res->getBody()));
        }
        return view('classimax.404');
    }
}
