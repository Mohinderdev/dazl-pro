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

Route::group(['namespace' => 'Admin\Auth', 'prefix' => 'admin'], function () {

    Route::get('/login', 'AuthController@showLoginForm');
    Route::post('/login', 'AuthController@login')->name('admin.login');

    Route::get('/logout', 'AuthController@logout')->name('admin.logout');

}); # end of Api namespace


Route::group(['namespace' => 'Api', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {

//    Route::prefix('settings')->group(function () {
//        Route::resource('emails', 'EmailsController');
//    });


}); # end of Api namespace


