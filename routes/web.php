<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [AdminController::class, 'index'])->name('index');


Route::get('/config', [ConfigController::class, 'config'])->name('config');
Route::get('/form-database', [ConfigController::class, 'configDatabase'])->name('config-database');
Route::get('/confirm-database', [ConfigController::class, 'confirmDatabase'])->name('confirm-database');
Route::get('/form-akun', [ConfigController::class, 'configAkun'])->name('config-akun');

