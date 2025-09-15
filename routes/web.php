<?php

use App\Http\Controllers\AccessorieController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\HardWardController;
use App\Http\Controllers\PeripheralsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComputerController::class, 'index']);
Route::get('/hardware', [HardWardController::class, 'hardware']);

Route::get('/hardware/{id}', [HardWardController::class, 'show']);
// page details
Route::get('/computers/{id}', [ComputerController::class, 'show']);
Route::get('/peripherals', [PeripheralsController::class, 'index']);


Route::get('/accessories', [AccessorieController::class, 'index']);

Route::get('/pcset', [AccessorieController::class, 'index']);

