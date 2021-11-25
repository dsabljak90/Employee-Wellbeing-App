<?php

use Illuminate\Support\Facades\Route;
// use for mailing
use App\Mail\WelcomeMail;
use  Illuminate\Http\Request;  
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
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    
    
    return view('welcome');
});
Route::get('/', 'MainpageController@index');
Route::get('/layouts/user-main', 'MainpageController@indexUser');

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/test', 'TestController@index');


Route::get('/recommendations', 'RecommendationsController@index');
//Route::get('/statistics', 'StatisticsController@index');
Route::post('/test', 'TestController@store');
//email
Route::get('/email', 'EmailController@send');
Route::post('/email', 'EmailController@send');
//enrollment notifications
Route::get('/send-enrollment', [EnrollmentController::class, 'sendEnrollmentNotification']);
Route::get('/recommendations/{param?}', 'RecommendationsController@reactApp')->where('param', '.*')->name('recommendations');
// Route::get('/recommendations', 'RecommendationsController@index');
Route::post('/test', 'TestController@store');

//Route::get('/statistics', 'ResponseController@total_response'); 
Route::get('/statistics/{param?}', 'StatisticsController@reactApp')->where('param', '.*')->name('statistics');
Route::get('/info', 'InfoController@index');
//Route::get('/statistics', 'ResponseController@total_response'); 
