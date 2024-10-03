<?php

use App\Http\Controllers\Api\HomepageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/home/fetch', [HomepageController::class, 'index']);
