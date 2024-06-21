<?php

use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConfigController::class, 'config'])->name('config');
Route::get('/form-database', [ConfigController::class, 'configDatabase'])->name('config-database');
Route::get('/confirm-database', [ConfigController::class, 'confirmDatabase'])->name('confirm-database');
Route::get('/form-akun', [ConfigController::class, 'configAkun'])->name('config-akun');

