<?php

namespace App\Providers;
use Validator;
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
        Validator::extend('telefono', function ($attribute, $value, $parameters, $validator) {
            return preg_match('%^[0-9]{8}$%', $value);
        });
    }
}
