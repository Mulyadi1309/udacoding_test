<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});
// Rute untuk Login dan Register
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rute yang dilindungi middleware auth
Route::middleware('auth')->group(function () {
    // CRUD Staff
    Route::get('staff', [StaffController::class, 'index'])->name('staff.index'); // Halaman Index Staff
    Route::get('staff/create', [StaffController::class, 'create'])->name('staff.create'); // Halaman Create Staff
    Route::post('staff', [StaffController::class, 'store'])->name('staff.store'); // Menyimpan data Staff

    Route::get('staff/{staff}/edit', [StaffController::class, 'edit'])->name('staff.edit'); // Edit Staff
    Route::put('staff/{staff}', [StaffController::class, 'update'])->name('staff.update'); // Update Staff
    Route::delete('staff/{staff}', [StaffController::class, 'destroy'])->name('staff.destroy'); // Hapus Staff
});


