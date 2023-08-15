<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController ;
use App\Http\Controllers\AuthController ;

Route::post('signUp', [AuthController::class, 'signUp']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::resource('posts', PostsController::class);

    Route::post('/logout', [AuthController::class, 'logout']);


});
