<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        /* Crear una validación de rol */
        Blade::if('admin', function () {            
            if (auth()->user() && auth()->user()->rol=='admin') {
                return 1;
            }
            return 0;
        });
    }
}
