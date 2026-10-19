<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::put('tasks/{task}/complete', [
    TaskController::class,'complete'
]);

Route::apiResource('tasks', TaskController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
