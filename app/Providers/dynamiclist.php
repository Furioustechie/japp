<?php

namespace App\Providers;
use App\District;
use App\Doctype;
use App\Sentence;
use App\Court;
use App\Offence;
use App\Status;
use App\Application;
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
        view()->composer('*',function($view){
            $view->with('sents_name', Sentence::all());

        });
        view()->composer('*',function($view){
            $view->with('courts_name', Court::all());

        });
        view()->composer('*',function($view){
            $view->with('offence_name', Offence::all());

        });
        view()->composer('*',function($view){
            $view->with('status_name', Status::all());

        });
        view()->composer('*',function($view){
            $view->with('appealDetails', Application::all());

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
