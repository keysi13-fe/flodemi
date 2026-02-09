<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    // ===== Login =====
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');

    // ===== Protected Admin Area =====
    Route::middleware('auth:admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard'); // lebih aman daripada string
        })->name('dashboard');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');
    });

});
