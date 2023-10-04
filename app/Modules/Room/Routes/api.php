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
    Route::get('/rooms', 'RoomController@index');
    Route::get('/gethouse/{address}', 'RoomController@gethouse');
    Route::get('/roomsfeature/{id}', 'RoomController@roomsfeature');
    Route::get('/featureOptionwithissue/{id}', 'RoomController@featureOptionwithissue');
    Route::get('/roomsfeatureissue/{id}', 'RoomController@roomsfeatureissue');
    Route::get('/featureOptions/{id}', 'RoomController@featureOptions');
    Route::get('/featureoptionlist/{id}', 'RoomController@featureoptionlist');
    Route::get('/featureoissueslist/{id}', 'RoomController@featureoissueslist');
    Route::post('/featureOptionswithissue', 'RoomController@featureOptionswithissue');

});
