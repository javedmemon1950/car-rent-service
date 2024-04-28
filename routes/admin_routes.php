<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserManagemetController;


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    
    Route::get('/users', function () {
        return view('admin.users');
    });

    // User Management Routes
    Route::get('/all_users', [UserManagemetController::class, 'all_users'])->name('admin.all_users');
    Route::post('/create_user', [UserManagemetController::class, 'create_user'])->name('admin.create_user');
    Route::post('/edit_user', [UserManagemetController::class, 'edit_user'])->name('admin.edit_user');
    Route::get('/delete_user/{id}', [UserManagemetController::class, 'delete_user'])->name('admin.delete_user');

});