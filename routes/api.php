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

Route::group(['prefix' => 'post', 'middleware' => 'cors'], function() {
    Route::get('/{postsPerPage?}', 'PostController@viewAll');
    Route::get('/published/{postsPerPage?}', 'PostController@viewPublished');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('/', 'UserController@viewAll');
});
