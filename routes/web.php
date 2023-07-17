<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StatesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;

Route::get('/ping', function(): JsonResponse {
    return response()->json(['pong' => true]);
});

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/states', [StatesController::class, 'index']);
