<?php

use App\Http\Controllers\PostController;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('posts',PostController::class);




// Route::get('/', function () {
//         return 'API';
//     });
    
   