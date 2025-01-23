<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ResetPasswordController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', fn(Request $request) => $request->user());

    Route::controller(AuthController::class)->group(function () {
        Route::post('/logout', 'logout');
        Route::get('/profile', 'profile');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');

    Route::post('/login', 'login');
});

Route::prefix('/countries')->controller(CountryController::class)->group(function () {
    Route::get('/', 'index');

    Route::get('/{id}/languages', 'languages');
});


Route::controller(ResetPasswordController::class)->group(function () {
    Route::post('/forgot-password', 'sendPasswordResetLink');

    Route::post('/reset-password', 'resetPassword');
});
