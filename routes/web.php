<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\HardWardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComputerController::class, 'index']);
Route::get('/hardware', [HardWardController::class, 'hardware']);
// page details
Route::get('/computers/{id}', [ComputerController::class, 'show']);