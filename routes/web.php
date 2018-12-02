<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
Route::get('/about', function () {
    return view('about');
});});

*/
Route::get('/index', 'PagesController@index');//AppealList->index method
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/form', 'PagesController@form');
Route::get('/dashboard', 'PagesController@dashboard');// pagesController->dashboard method
Route::get('/appealForm', 'PagesController@appealForm'); //AppealNow->appealsController->create method->appealForm

 Route::resource('appeals', 'AppealsController'); //For Appeal Data Insert Update Delete and Retrieve 
 Route::post('appeals/update/{id}', 'AppealsController@update');
 Route::post('appeals/modals', 'SettingsController@modals');

 Route::post('appeals/offence', 'SettingsController@offence');
 Route::post('appeals/add_prisonname', 'SettingsController@add_prisonname');
 Route::post('appeals/add_courtname', 'SettingsController@add_courtname');
 Route::post('appeals/add_status', 'SettingsController@add_status');

 Route::post('/appealForm', 'PagesController@appealForm');

 Route::get('/editsettings', 'SettingsController@edit_settings');// pagesController->dashboard method
//Route::get('appeals/create', 'AppealsController@create');
//Route::post('appeals/store', 'AppealsController@store');


