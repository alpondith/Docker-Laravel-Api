<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;


Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('tags', TagController::class);

    Route::post('/logout', [LoginController::class, 'logout' ]);
});


Route::post('/register', [ RegisterController::class , 'register' ]);
Route::post('/login', [LoginController::class, 'login' ]);




Route::fallback(function(){
    return response()->json([
        'message' => 'Link not found. Please contact us by sending email here : contact@insoulit.com'], 404);
});
