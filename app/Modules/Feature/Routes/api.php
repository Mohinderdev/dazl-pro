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

    Route::get('/features', 'FeatureController@index');
    Route::get('/room/features', 'FeatureController@getRoomFeatures');
    Route::post('/room/featuresoptions', 'FeatureController@getFeaturesoptions');

}); # end of Api namespace
