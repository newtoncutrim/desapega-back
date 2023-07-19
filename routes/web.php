<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\CategoriesController;

Route::get('/ping', function(): JsonResponse {
    return response()->json(['pong' => true]);
});

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/states', [StatesController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);
