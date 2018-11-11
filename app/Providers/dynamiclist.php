<?php

namespace App\Providers;
use App\District;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class dynamiclist extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('dname', District::all());

        });
        Schema::defaultStringLength(191);

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
