<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 後台管理頁面 (需要認證)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
});
