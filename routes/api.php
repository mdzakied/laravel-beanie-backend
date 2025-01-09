<?php

use Illuminate\Support\Facades\Route;

// Catch-all route for undefined routes
Route::fallback(function () {
    return response()->json(['message' => 'Route not found'], 404);
});

Route::get('/', function () {
    return response()->json(['message' => 'Route not found'], 404);
});

// API routes
Route::get('/beans', function () {
    return response()->json(['message' => 'API Beanies is working']);
});

Route::get('/articles', function () {
    return response()->json(['message' => 'API Articles is working']);
});


