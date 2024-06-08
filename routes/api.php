<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\UserController;

Route::get('/user', [UserController::class, 'getUser'])->middleware('auth:api');
