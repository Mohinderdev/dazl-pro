<?php

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

Route::group(['namespace' => 'Api'], function () {
    Route::group(['middleware' => 'jwt:customer'],function (){
        Route::post('/customer/logout' , 'CustomerController@logout');
        Route::post('/customer/update/{id}' , 'CustomerController@update');
        Route::post('/customer/change_password' , 'CustomerController@change_password');
    });
    Route::post('/customer/register' , 'CustomerController@register');
    Route::post('/customer/login' , 'CustomerController@login');
}); # end of Api namespace
