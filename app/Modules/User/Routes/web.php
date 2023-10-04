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

    Route::get('/users', 'UserController@users')->name('users.index');
    Route::get('/users/data', 'UserController@jsonUsersData')->name('users.json');
    Route::get('/users/{id}', 'UserController@showUser')->name('users.show');
    Route::get('/users/update-status/{id}', 'UserController@updateUserStatus')->name('users.update-status');

}); # end of Api namespace
