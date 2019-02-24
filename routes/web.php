<?php
use App\Notifications\jappNotification;
use App\User;
use App\Notification;
use Carboon\Carbon;
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
Route::get('/prisonDashboard', 'AppealsController@prisonDashboardData');// pagesController->dashboard method
Route::get('/appealForm', 'PagesController@appealForm'); //AppealNow->appealsController->create method->appealForm

 Route::resource('appeals', 'AppealsController'); //For Appeal Data Insert Update Delete and Retrieve 
 Route::get('/hcDetails', 'AppealsController@hcDetails'); //For HcDashboard 
 Route::post('appeals/update/{id}', 'AppealsController@update');
 //Route::get('appeals', 'AppealsController@show');//index page dataSet
 Route::post('appeals/modals', 'SettingsController@modals');
 Route::post('/editsettings/add_sentence', 'SettingsController@add_sentence');//Add Sentence Name
 Route::post('/editsettings/add_offence', 'SettingsController@add_offence'); //Add Offence Name
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
 Route::get('/editsettings/uaccount_destroy/{id}', 'SettingsController@uaccount_destroy'); //Delete User infomation

//Route::get('appeals/create', 'AppealsController@create');
//Route::post('appeals/store', 'AppealsController@store');
Route::get('appeals/modals', 'SettingsController@view');
Route::get('/testpage', 'SettingsController@testpage'); //Delete Sentence Name
Route::get('/testedit/{id}', 'SettingsController@testedit');
Route::post('/testedit/{id}', 'SettingsController@update_court');  // Update Courts Name

Route::get('my-datatables/court_name_destroy/{id}', 'SettingsController@court_name_destroy');
Route::get('my-datatables/prison_name_destroy/{id}', 'SettingsController@prison_name_destroy');

Route::get('my-datatables', 'MyDatatablesController@index');

// get Settings Data
Route::get('/editsettings_Courts', ['as'=>'get.data','uses'=>'SettingsController@getCourtsData']);
Route::get('/editsettings_Prisons', ['as'=>'get.data1','uses'=>'SettingsController@getPrisonData']);
Route::get('/editsettings_Sentences', ['as'=>'get.data2','uses'=>'SettingsController@getSentenceData']);
Route::get('/editsettings_Offences', ['as'=>'get.data3','uses'=>'SettingsController@getOffenceData']);
Route::get('/editsettings_Status', ['as'=>'get.data4','uses'=>'SettingsController@getStatusData']);
Route::get('/editsettings_uaccount', ['as'=>'get.data5','uses'=>'SettingsController@getuaccount']);
// test
Route::get('/prisonDashboard_data', 'AppealsController@getPrisonDB');
Route::get('/prisonDashboard_data1', 'AppealsController@getAppealHistory');
//Update Settings Data
Route::post('editsettings/update_court/{id}', 'SettingsController@update_court');
Route::post('editsettings/update_prison/{id}', 'SettingsController@update_prison');
Route::post('editsettings/update_sentence/{id}', 'SettingsController@update_sentence');
Route::post('editsettings/update_offence/{id}', 'SettingsController@update_offence');
Route::post('editsettings/update_status/{id}', 'SettingsController@update_status');
Route::post('editsettings/update_accountName/{id}', 'SettingsController@update_accountName');


Route::get('/rotate', 'SettingsController@rotate');
Route::get('services/upload', 'settingsController@upload');
Route::get('/mail', 'mailController@firemail');
Route::get('/sms', 'mailController@firesms');
Route::post('send/mail', 'mailController@sendemail');
Route::post('send/sms', 'mailController@sendsms');
Route::get('/notify', 'notifyController@notifyme');
Route::get('/readnotify', 'notifyController@readnotify');
Route::get('/read', 'pagesController@readnotify');
//Route::get('/editsettings', ['as'=>'get.data','uses'=>'MyDatatablesController@getData']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'PagesController@dashboard');
Auth::routes();
Route::post('editsettings/add_userAccount', 'SettingsController@add_userAccount');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/testlogin', 'loginController@testlogin');
Route::get('/testforgot', 'loginController@testforgot');

//test route page for master blade
Route::get('/master', 'pagesController@masterpage');
Route::get('/profile/{username}', 'AppealsController@user');
Route::get('/abc/{id}', 'AppealsController@abc');