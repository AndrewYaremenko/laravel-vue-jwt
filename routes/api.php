<?php

use App\Http\Controllers\Fruit\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
    Route::post('/', [StoreController::class, 'index']);
});

Route::group(['namespace' => 'Fruit', 'prefix' => 'fruits'], function () {
    Route::get('/', [IndexController::class, 'index']);
});