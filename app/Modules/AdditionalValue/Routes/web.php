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

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
    Route::get('/additional-values/data', 'AdditionalValueController@jsonData')->name('additional-values.json');
    Route::resource('/additional-values', 'AdditionalValueController');
}); # end of Api namespace
