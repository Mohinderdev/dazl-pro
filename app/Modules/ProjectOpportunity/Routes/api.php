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

Route::group(['namespace' => 'Api', 'middleware' => 'auth:professional'], function () {

    Route::get('/project-opportunities/professionals/{page}', 'ProjectOpportunityController@getProjectOpportunitiesForPros');
    Route::patch('/project-opportunities/{id}' ,'ProjectOpportunityController@create');
}); # end of Api namespace
