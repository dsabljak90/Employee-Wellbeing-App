<?php

use Illuminate\Support\Facades\Route;
//use for mailing
use App\Mail\WelcomeMail;
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

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/test', 'TestController@index');
Route::get('/recommendations', 'RecommendationsController@index');
Route::get('/statistics', 'StatisticsController@index');
Route::post('/test', 'TestController@store');
//email
Route::get('/email', 'EmailController@send');
Route::post('/email', 'EmailController@send');
//enrollment notifications
Route::get('/send-enrollment', [EnrollmentController::class, 'sendEnrollmentNotification']);