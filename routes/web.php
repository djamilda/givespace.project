<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/campaign', [DashboardController::class, 'campaign']);

Route::get('/donasi', [DashboardController::class, 'donasi']);

Route::get('/user', [DashboardController::class, 'user']);

Route::get('/laporan', [DashboardController::class, 'laporan']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', function () {
        return view('auth.admin-login');
    })->name('admin.login');
});

Route::middleware('auth')->group(function () {
    Route::resource('campaigns', CampaignController::class)->except(['show']);
});

require __DIR__.'/auth.php';
