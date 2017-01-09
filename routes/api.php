<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'post'], function() {
    Route::get('/', 'PostController@viewAll');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('/', 'UserController@viewAll');
});
