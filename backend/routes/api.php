<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('posts',PostController::class);

Route::post('/register',[AuthController::class,'register']);

Route::post('/login',[AuthController::class,'login']);

// protected route because logged user  can only logout
Route::post('/logout',[AuthController::class,'logout'])
->middleware('auth:sanctum');;
// Route::get('/', function () {
//         return 'API';
//     });
    
   