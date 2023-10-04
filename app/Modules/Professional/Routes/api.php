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
    Route::group(['middleware' => 'jwt:professional'], function () {
        Route::post('/professional/logout', 'ProfessionalController@logout');
    });
    Route::post('/professional/register', 'ProfessionalController@register');
    Route::post('/professional/login', 'ProfessionalController@login');
});
