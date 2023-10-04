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

    Route::group(['namespace' => 'Auth'], function () {

        Route::post('auth/login', 'AuthController@login');
        Route::post('auth/register', 'AuthController@register');
        Route::get('users/verify/{access_token}', 'AuthController@verifyAccount');
        Route::post('users/check/{type}', 'AuthController@checkUserExistence');

    }); # end of auth prefix

    Route::group(['prefix' => 'reset-passwords', 'namespace' => 'ResetPassword'], function () {

        Route::post('/email', 'ResetPasswordController@sendEmail');
        Route::post('/check-code', 'ResetPasswordController@checkResetCode');
        Route::patch('/reset', 'ResetPasswordController@resetPassword');

    }); # end of reset passwords prefix

    Route::group(['middleware' => 'auth:api'], function () {

        Route::group(['prefix' => 'profile', 'namespace' => 'Profile'], function () {

            Route::get('/', 'ProfileController@getProfile');
            Route::patch('/update-password', 'ProfileController@updatePassword');
            Route::post('/update', 'ProfileController@updateProfile');

        }); # end of profile namespace & prefix

        Route::group(['prefix' => 'agents', 'namespace' => 'Agent'], function () {

//            Route::get('/', 'AgentController@index');
//            Route::post('/', 'AgentController@store');

        }); # end of agents namespace & prefix

    }); # end of api middleware

}); # end of Api namespace
