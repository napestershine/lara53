<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return realpath(base_path('resources/views'));
});

Route::get('users', [UsersController::class, 'index']);
Route::get('users/create', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'showPath']);