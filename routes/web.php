<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('{page}', [IndexController::class, '__invoke'])->where('page', '.*');
