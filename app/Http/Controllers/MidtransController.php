<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Cookie\SessionCookieJar;

class MidtransController extends Controller
{
	public function notif(Request $request){
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        try {
			$params = array(
			            'id' => $request->order_id,
			            'status' => $request->transaction_status
			);
            $res = $client->request('GET', config('app.api_url')."/order/status?".http_build_query($params));
            return $res->getBody();
        } catch (RequestException $e) {
            return $e;
        }
	}
}
