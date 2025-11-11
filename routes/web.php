<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\DataDiri;
use App\Http\Controllers\Kontak;
use App\Http\Controllers\AktivitasController;

// admin
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [Beranda::class, 'index'])->name('beranda');
Route::get('/datadiri', [DataDiri::class, 'index'])->name('datadiri');

Route::get('/aktivitas', [AktivitasController::class, 'index'])->name('aktivitas');
Route::resource('aktivitas', AktivitasController::class)->except(['index']);

Route::get('/kontak', [Kontak::class, 'index'])->name('kontak');
Route::post('/kontak/kirim', [Kontak::class, 'kirim'])->name('kontak.kirim');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Public admin routes (tidak perlu login)
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // Protected admin routes (harus login + admin)
    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');       
        Route::resource('users', App\Http\Controllers\Admin\UserController::class)->names([
            'index' => 'users.index',
            'create' => 'users.create',
            'store' => 'users.store',
            'edit' => 'users.edit',
            'update' => 'users.update',
            'destroy' => 'users.destroy',
        ]);
    });
});