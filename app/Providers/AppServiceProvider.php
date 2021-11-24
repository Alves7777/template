<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app['validator']->extend('value_percentage', function ($attribute, $value, $parameters) {

            if ($value > 100) {
                return false;
            }
            return true;

        });

        $this->app['validator']->extend('test_test', function ($attribute, $value, $parameters) {

            dd($value);


        });
    }
}
