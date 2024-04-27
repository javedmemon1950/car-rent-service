<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    
    Route::get('/users', function () {
        return view('admin.users');
    });
});