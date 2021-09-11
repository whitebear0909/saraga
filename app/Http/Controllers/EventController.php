<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class EventController extends Controller
{
    public function list(Request $request){
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        $category_data = $client->request('GET', config('app.api_url')."/sports", [
        ]);
        $promo_data = $client->request('GET', config('app.api_url')."/events", [
        ]);
        // print_r(json_decode($promo_data->getBody())->data);
        return view('classimax.events')->with('events', json_decode($promo_data->getBody())->data)->with('categories', json_decode($category_data->getBody())->data);
    }

    public function detail(Request $request){
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        try{
	        $promo_data = $client->request('GET', config('app.api_url')."/banners/$request->id", [
	        ]);
	        $data = json_decode($promo_data->getBody())->data[0];
	        return view('classimax.event-detail')->with('event', $data);
		} catch (RequestException $e) {
			return view('classimax.404');
		}
    }
}
