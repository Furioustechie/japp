<?php

namespace App\Providers;
use App\Prison;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class prisonlist extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('pname', Prison::all());

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
