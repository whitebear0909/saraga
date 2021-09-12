<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Validator;

class PromoController extends Controller
{
    public function list(Request $request){
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        $category_data = $client->request('GET', config('app.api_url')."/sports", [
        ]);
        $promo_data = $client->request('GET', config('app.api_url')."/promos", [
        ]);
        // print_r(json_decode($promo_data->getBody())->data);
        return view('classimax.promo')->with('promos', json_decode($promo_data->getBody())->data)->with('categories', json_decode($category_data->getBody())->data);
    }

    public function detail(Request $request){
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        $promo_data = $client->request('GET', config('app.api_url')."/promos", [
        ]);
        $data = json_decode($promo_data->getBody())->data;
        foreach ($data as $d) {
            if($d->id == $request->id){
                return view('classimax.promo-detail')->with('detail', $d);
            }
        }
        return view('classimax.404');
    }
}
