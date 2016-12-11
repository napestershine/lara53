<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return realpath(base_path('resources/views'));
    return view('welcome');
});

Route::get('users', ['uses' => 'UsersController@index']);

Route::get('users/create', ['uses' => 'UsersController@create']);

Route::post('users', ['uses' => 'UsersController@store']);
