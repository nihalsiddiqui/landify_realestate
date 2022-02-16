<?php

namespace App\Providers;

use App\Models\City;
use Illuminate\Support\ServiceProvider;

class SubscribeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $cities = City::all();
        view()->share([
            'cities_provider'=>$cities,
        ]);

    }
}
