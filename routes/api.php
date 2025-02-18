<?php

use App\Http\Controllers\API\AutController;
use App\Http\Controllers\API\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('signup',[AutController::class, 'signup']);
Route::post('login',[AutController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout',[AutController::class, 'logout']);
    Route::apiResource('posts',PostController::class);

});
