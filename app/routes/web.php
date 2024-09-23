<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ConfigurationController;

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Маршруты для управления пользователями
Route::middleware('auth')->group(function () {
    Route::get('add-user', [UserController::class, 'showAddUserForm'])->name('add-user');
    Route::post('add-user', [UserController::class, 'addUser']);

    // Дополнительные маршруты, например, для удаления и редактирования пользователей
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');//->middleware('roles:dashboard');
Route::get('/reports', [ReportsController::class, 'index'])->name('reports');//->middleware('roles:reports');
Route::get('/configuration', [ConfigurationController::class, 'index'])->name('configuration');//->middleware('roles:configuration');

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


