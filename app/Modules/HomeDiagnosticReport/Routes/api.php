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

Route::group(['namespace' => 'Api', 'middleware' => 'jwt:realtor'], function () {

    Route::get('/home-diagnostic-reports/for-realtor', 'HomeDiagnosticReportController@getPHDForRealtor');
    Route::get('/home-diagnostic-reports/for-realtor/{home_diagnostic_reportId}', 'HomeDiagnosticReportController@getOnePHDForRealtor');
    Route::post('/home-diagnostic-reports', 'HomeDiagnosticReportController@store');
    Route::get('/home-diagnostic-reports/house-data', 'HomeDiagnosticReportController@getHouseData');

}); # end of Api namespace
