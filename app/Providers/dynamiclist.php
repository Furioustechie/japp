<?php

namespace App\Providers;
use App\District;
use App\Doctype;

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
        view()->composer('*',function($view){
            $view->with('docname', Doctype::all());

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
