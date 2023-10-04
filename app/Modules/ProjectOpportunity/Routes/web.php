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
    Route::get('/project-opportunities/data', 'ProjectOpportunityController@jsonData')->name('project-opportunities.json');
    Route::resource('/project-opportunities', 'ProjectOpportunityController');
}); # end of Api namespace
