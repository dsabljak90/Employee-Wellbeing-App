<?php

use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/answers', 'Api\StatisticsController@show');
Route::get('/managersanswers', 'Api\ManagersStatisticsController@show')->middleware(['can:manager']);
   