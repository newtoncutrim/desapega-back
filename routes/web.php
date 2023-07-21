<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Middleware\VerifyCsrfToken;

Route::get('/ping', function(): JsonResponse {
    return response()->json(['pong' => true]);
});

Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/states', [StatesController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);

Route::post('/user/signup', [UserController::class, 'signup']);
Route::post('/user/signin', [UserController::class, 'signin']);
Route::get('/user/data', [UserController::class, 'data'])->withoutMiddleware(VerifyCsrfToken::class);
/* metodo de exemplo crf token */
