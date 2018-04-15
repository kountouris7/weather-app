<?php

namespace App\Providers;

use App\City;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('city', 'name');
       // View::composer('*', function ($view) {
       //     $city = \Cache::rememberForever('name', function () {
       //         return City::all();
       //     });
//
       //     $view->with('name', $city);
       // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
