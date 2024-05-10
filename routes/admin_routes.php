<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserManagemetController;
use App\Http\Controllers\Admin\CompanyController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // User Management Routes
    Route::get('/all_users', [UserManagemetController::class, 'all_users'])->name('admin.all_users');
    Route::get('/add_user', [UserManagemetController::class, 'add_user'])->name('admin.add_user');
    Route::post('/create_user', [UserManagemetController::class, 'create_user'])->name('admin.create_user');
    Route::get('/update_user/{id}', [UserManagemetController::class, 'update_user'])->name('admin.update_user');
    Route::post('/edit_user/{id}', [UserManagemetController::class, 'edit_user'])->name('admin.edit_user');
    Route::get('/delete_user/{id}', [UserManagemetController::class, 'delete_user'])->name('admin.delete_user');
    
    // Company Routes
    Route::get('/all_companies', [CompanyController::class, 'all_companies'])->name('admin.all_companies');
    Route::get('/add_company', [CompanyController::class, 'add_company'])->name('admin.add_company');
    Route::post('/create_company', [CompanyController::class, 'create_company'])->name('admin.create_company');
    Route::get('/update_company/{id}', [CompanyController::class, 'update_company'])->name('admin.update_company');
    Route::post('/edit_company/{id}', [CompanyController::class, 'edit_company'])->name('admin.edit_company');
    Route::get('/delete_company/{id}', [CompanyController::class, 'delete_company'])->name('admin.delete_company');

});