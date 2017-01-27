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
    Route::post('/', 'PostController@addNewPost');
    Route::get('term/relationships', 'PostController@termRelationships');
    Route::get('{id}/meta/{key}', 'PostController@viewMeta');
    Route::get('publisher/cron', 'PostController@publishMissed');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('/', 'UserController@viewAll');
});

Route::group(['prefix' => 'anime', 'middleware' => 'cors'], function() {
    Route::get('review', 'AnimeController@viewReviewing');
    Route::get('scheduled', 'AnimeController@viewScheduled');
    Route::get('scheduled/approve', 'AnimeController@approveScheduled');
    Route::post('approve', 'AnimeController@approve');
});