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

Route::group(['namespace' => 'Api', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
    Route::get('/languages/data', 'LanguageController@jsonData')->name('languages.json');
    Route::resource('/languages', 'LanguageController');
}); # end of Api namespace
