<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        \Blade::directive('br', function () {
            return "<br>";
        });

        \Blade::directive('addName', function ($arg) {
            return "Sayın...: ".$arg;
        });

        \Blade::directive('custom', function ($arg) {
            return "<".$arg.">";
        });



    }
}
