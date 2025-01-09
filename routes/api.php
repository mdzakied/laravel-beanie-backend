<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeanController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

// Catch-all route for undefined routes
Route::fallback(function () {
    return response()->json(['message' => 'Route not found'], 404);
});

Route::get('/', function () {
    return response()->json(['message' => 'Route not found'], 404);
});

// API routes
Route::get('/beans', [BeanController::class, 'getAll']);

Route::get('/articles', [ArticleController::class, 'getAll']);

Route::get('/comments', [CommentController::class, 'getAll']);


