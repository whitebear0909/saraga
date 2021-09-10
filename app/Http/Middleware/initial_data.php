<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Cookie\SessionCookieJar;

class initial_data
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        try {
            $res = $client->request('GET', config('app.api_url')."/initialData");
            $user_info = json_decode($res->getBody()); // { "type": "User", ..
            if($res->getStatusCode() == 200){ // 200 = Success
                session(['auth_data'=>$user_info->data]);
            }
        } catch (RequestException $e) {
            if(!session('auth_data'))
                return redirect()->guest('login')->withErrors(['warning' => 'Silahkan login terlebih dahulu untuk melanjutkan.']);

            $client->request('POST', config('app.api_url') . "/login/nopass", [
                'form_params' => ['email' => session('auth_data')->email]
            ]);

            return $this->handle($request, $next);
        }
        return $next($request);
    }
}
