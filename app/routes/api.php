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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::prefix('/freelancer')->group(function(){
    Route::get('/','FreelancerController@index');
    Route::get('/{id}','FreelancerController@one')->where(['id'=>'[0-9]+']);
    Route::post('/','FreelancerController@createFreelancer');
    Route::put('/{id}','FreelancerController@updateFreelancer')->where(['id'=>'[0-9]+']);
    Route::delete('/{id}','FreelancerController@delete')->where(['id'=>'[0-9]+']);
});
Route::prefix('/customers')->group(function(){
    Route::get('/','CustomerController@index');
    Route::get('/{id}','CustomerController@one');
    Route::post('/','CustomerController@createCustomers');
    Route::put('/{id}','CustomerController@updateCustomers')->where(['id'=>'[0-9]+']);
    Route::delete('/{id}','CustomerController@delete')->where(['id'=>'[0-9]+']);
});
Route::prefix('/orders')->group(function(){
    Route::get('/','OrderController@index');
    Route::get('/{id}','OrderController@one')->where(['id'=>'[0-9]+']);
    Route::post('/','OrderController@createOrders');
    Route::put('/{id}','OrderController@updaterders')->where(['id'=>'[0-9]+']);
    Route::delete('/{id}','OrderController@delete')->where(['id'=>'[0-9]+']);
});
Route::prefix('/applications')->group(function(){
    Route::get('/','ApplicationController@index');
    Route::get('/{id}','ApplicationController@one')->where(['id'=>'[0-9]+']);
    Route::post('/','ApplicationController@createApplications');
    Route::put('/{id}','ApplicationController@updateApplications')->where(['id'=>'[0-9]+']);
    Route::delete('/{id}','ApplicationController@delete')->where(['id'=>'[0-9]+']);
});
