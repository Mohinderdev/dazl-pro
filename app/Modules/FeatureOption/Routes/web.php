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
    Route::get('/feature-options/data', 'FeatureOptionController@jsonData')->name('feature-options.json');
    Route::resource('/feature-options', 'FeatureOptionController');
    Route::get('/deleteIssue/{id}', 'FeatureOptionController@deleteIssue')->name('deleteIssue');
}); # end of Api namespace
