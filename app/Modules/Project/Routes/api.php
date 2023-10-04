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

Route::group(['namespace' => 'Api' ,'middleware' => 'jwt:customer'], function () {

    Route::get('/projects', 'ProjectController@index');
    Route::post('/projects' , 'ProjectController@store');
    Route::get('/project/{id}' , 'ProjectController@show');
    Route::get('/projects/customers' , 'ProjectController@getProjectsForCustomer');
     Route::post('/projectImages' , 'ProjectController@projectImages');
    Route::patch('/update-report/{project_id}', 'ProjectController@updatePhpreport');
    Route::delete('/delete-report/{project_id}', 'ProjectController@deletePhpreport');
    Route::patch('/project/{id}' , 'ProjectController@updateProjectStatusAndSendSmsToPros');

});
Route::group(['namespace' => 'Api'], function () {
    Route::post('/getImage' , 'ProjectController@getimage');

});
Route::group(['namespace' => 'Api' ,'middleware' =>'jwt:realtor'], function () {

    Route::get('/customer_list' , 'ProjectController@list');
    Route::get('/realtorprojects', 'ProjectController@index');
    Route::post('/realtorprojects' , 'ProjectController@store');
//    Route::get('/realtorprojects/{id}' , 'ProjectController@show');
    Route::get('/realtorprojects/customers' , 'ProjectController@getProjectsForCustomer');
    Route::post('/realtorprojectsImages' , 'ProjectController@projectImages');
    Route::patch('/realtorprojects/{id}' , 'ProjectController@updateProjectStatusAndSendSmsToPros');
    Route::patch('/statusUpdate/{id}' , 'ProjectController@statusUpdate');

});
Route::group(['namespace' => 'Api' ,'middleware' => 'auth:customer,auth:professional'], function () {
    Route::delete('/project/{id}','ProjectController@delete');
});
