<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;


Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/kependudukan-penduduk', [PendudukController::class, 'indexPenduduk'])->name('kependudukan-penduduk');
Route::post('/kependudukan-penduduk-tambah', [PendudukController::class, 'tambahPenduduk'])->name('kependudukan-penduduk-tambah');
Route::get('/kependudukan-penduduk-edit', [PendudukController::class, 'editPenduduk'])->name('kependudukan-penduduk-edit');

Route::get('/config', [ConfigController::class, 'config'])->name('config');
Route::get('/form-database', [ConfigController::class, 'configDatabase'])->name('config-database');
Route::get('/confirm-database', [ConfigController::class, 'confirmDatabase'])->name('confirm-database');
Route::get('/form-akun', [ConfigController::class, 'configAkun'])->name('config-akun');

