<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/campaign', [DashboardController::class, 'campaign']);
Route::get('/donasi', [DashboardController::class, 'donasi'])->name('donasi');
Route::get('/user', [DashboardController::class, 'user'])->name('user');
Route::get('/laporan', [DashboardController::class, 'laporan']);
Route::get('/user/create', [UserManagementController::class, 'create'])->name('user.create');
Route::post('/user', [UserManagementController::class, 'store'])->name('user.store');

/*
|--------------------------------------------------------------------------
| Route tambahan untuk halaman donasi
|--------------------------------------------------------------------------
*/

Route::get('/campaigns', [DashboardController::class, 'campaign'])->name('campaigns.explore');

Route::get('/campaigns/{id}', function ($id) {
    return redirect('/campaign');
})->name('campaigns.show');

Route::post('/donasi', [DonationController::class, 'store'])->name('donate');

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Login Admin
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', function () {
        return view('auth.admin-login');
    })->name('admin.login');
});

require __DIR__.'/auth.php';