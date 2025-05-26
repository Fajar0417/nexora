<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('landing');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin hanya bisa akses halaman ini
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
});

// Karyawan hanya bisa akses halaman ini
Route::middleware(['auth', 'role:karyawan'])->group(function () {
    Route::get('/karyawan/dashboard', [KaryawanController::class, 'index'])->name('karyawan.index');
});

// routes/web.php
Route::get('/layanan/jasadesain', function () { return view('layanan.jasadesain');})->name('layanan.jasadesain');
Route::get('/layanan/jasaweb', function () { return view('layanan.jasaweb');})->name('layanan.jasaweb');
Route::get('/profile', function () { return view('profile');})->name('profile');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
