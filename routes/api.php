<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/person/{person}', 'PersonController@show');

Route::group(['prefix' => 'v1'], function(){
  Route::apiResource('person', 'Api\v1\PersonController')->except('index');
  Route::apiResource('people', 'Api\v1\PersonController')->only('index');
});
Route::group(['prefix' => 'v2'], function(){
  Route::apiResource('person', 'Api\v2\PersonController')->only('show');
});
