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
 Route::post('/editsettings/modals', 'SettingsController@modals');//test
 Route::post('/editsettings/offence', 'SettingsController@offence'); //Add Offence Name
 Route::post('/editsettings/add_prisonname', 'SettingsController@add_prisonname'); // Add Prison Name
 Route::post('/editsettings/add_courtname', 'SettingsController@add_courtname'); //Add Courts Name
 Route::post('/editsettings/add_status', 'SettingsController@add_status'); // Add Status

 Route::post('/appealForm', 'PagesController@appealForm');

 Route::get('/editsettings', 'SettingsController@edit_settings');// Load Update setings page
 Route::post('/editsettings/update/{id}', 'SettingsController@update');  // Update Prison Name
 Route::get('/editsettings/prison_name_destroy/{id}', 'SettingsController@prison_name_destroy'); //Delete Prison Name

 Route::post('/editsettings/modals', 'SettingsController@update_sentence'); //test
 Route::post('/editsettings/update_sentence/{id}', 'SettingsController@update_sentence'); // Update Sentence Name
 Route::get('/editsettings/sentence_name_destroy/{id}', 'SettingsController@sentence_name_destroy'); //Delete Sentence Name

 Route::post('/editsettings/update_court/{id}', 'SettingsController@update_court');  // Update Courts Name
 Route::get('/editsettings/court_name_destroy/{id}', 'SettingsController@court_name_destroy'); //Delete Courts Name

 Route::post('/editsettings/update_offence/{id}', 'SettingsController@update_offence');  // Update Offence Name
 Route::get('/editsettings/offence_name_destroy/{id}', 'SettingsController@offence_name_destroy'); //Delete Offence Name

 Route::post('/editsettings/update_status/{id}', 'SettingsController@update_status');  // Update Status Name
 Route::get('/editsettings/status_name_destroy/{id}', 'SettingsController@status_name_destroy'); //Delete Status Name

//Route::get('appeals/create', 'AppealsController@create');
//Route::post('appeals/store', 'AppealsController@store');
Route::get('appeals/modals', 'SettingsController@view');


