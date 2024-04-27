<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login_form'])->name('login_form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register_form'])->name('register_form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
