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
    Route::group(['middleware' => 'jwt:realtor'], function () {
        Route::post('/realtor/logout', 'RealtorController@logout');
        Route::patch('/realtor/update', 'RealtorController@update');
        Route::post('/realtor/change_password' , 'RealtorController@change_password');
    });
    Route::post('/realtor/register', 'RealtorController@register');
    Route::post('/realtor/login', 'RealtorController@login');
    Route::get('/realtor', 'RealtorController@getRealtorById');
    Route::get('/filter_project', 'RealtorController@filterProject');
    Route::post('/sendvalue-email', 'RealtorController@sendNewEmail');
});
