<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index');

    Route::resource('house', 'HouseController');


    Route::put('post/{id}/vote', 'PostController@vote');
    Route::put('post/{id}/accept', 'PostController@accept');
    Route::get('post/{id}/answer', 'PostController@answer')->name('answer');
    Route::resource('post', 'PostController');


    Route::resource('comment', 'CommentController');

});
