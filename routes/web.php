<?php

use App\Http\Controllers\AccessorieController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\HardWardController;
use App\Http\Controllers\PCsetController;
use App\Http\Controllers\PeripheralsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComputerController::class, 'index']);
Route::get('/computers/{id}', [ComputerController::class, 'show']);

Route::get('/hardware', [HardWardController::class, 'hardware']);
Route::get('/hardware/{id}', [HardWardController::class, 'show']);
// page details

Route::get('/peripherals', [PeripheralsController::class, 'index']);
Route::get('/peripherals/{id}', [PeripheralsController::class, 'show']);

Route::get('/accessories', [AccessorieController::class, 'acessories']);
Route::get('/accessories/{id}', [AccessorieController::class, 'show']);

Route::get('/pcset', [PCsetController::class, 'index']);
Route::get('/pcset/{id}', [PCsetController::class, 'show']);
