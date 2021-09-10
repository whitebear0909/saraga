<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Cookie\CookieJarInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // To inite the same session jar request for each session.
        $jar = new \GuzzleHttp\Cookie\CookieJar;
        session(['jar'=>$jar]);
        Schema::defaultStringLength(191);

        // $client = new Client(['cookies' => $jar]);
        // $req_category = $client->request('GET', config('app.api_url')."/sports");
        // $category_data = json_decode($req_category->getBody())->data;

        // view()->share('categories', $category_data);
    }
}
