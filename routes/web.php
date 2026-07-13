<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/campaign', [DashboardController::class, 'campaign']);

Route::get('/donasi', [DashboardController::class, 'donasi']);

Route::get('/user', [DashboardController::class, 'user']);

Route::get('/laporan', [DashboardController::class, 'laporan']);