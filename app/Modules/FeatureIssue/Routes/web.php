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
    Route::get('/feature-issues/data', 'FeatureIssueController@jsonData')->name('feature-issues.json');
    Route::resource('/feature-issues', 'FeatureIssueController');
    Route::get('/get_feature_options/{id}', 'FeatureIssueController@get_feature_options')->name('get_feature_options');
}); # end of Api namespace
