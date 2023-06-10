<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Problem1Controller;
use App\Http\Controllers\Problem2Controller;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route to Problem 1
Route::any('/problem-1', [Problem1Controller::class, 'solveProblem1']);

// Route to Problem 2
Route::any('/problem-2', [Problem2Controller::class, 'solveProblem2']);
