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

    Route::get('/blogs', 'BlogController@index');
    Route::get('/blogs/{slug}', 'BlogController@getblogDetail');
    Route::get('/blogstocategory/{id}', 'BlogController@blogstocategory');
    Route::post('/blogstopublish', 'BlogController@publish');

}); # end of Api namespace
