<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [AntrianController::class, 'index'])->name('list-antrian');

    Route::get('/ngantri', [AntrianController::class, 'antrianForm'])->name('ngantri');

    Route::post('/create-antri', [AntrianController::class, 'create_antrian'])->name('create-antri');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-attempt', [AuthController::class, 'loginAttempt'])->name('login-attempt');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');
