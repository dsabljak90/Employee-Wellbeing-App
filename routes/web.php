<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    
    
    return view('welcome');
});
Route::get('/', 'MainpageController@index');

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/test', 'TestController@index');
Route::get('/recommendations/{param?}', 'RecommendationsController@reactApp')->where('param', '.*')->name('recommendations');
//Route::get('/recommendations', 'RecommendationsController@index');
Route::post('/test', 'TestController@store');
Route::get('/statistics/{param?}', 'StatisticsController@reactApp')->where('param', '.*')->name('statistics');
Route::get('/info', 'InfoController@index');