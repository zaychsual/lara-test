<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

// Route::apiResource('/product', ProductController::class);
Route::resource('/kendaraan', KendaraanController::class);
