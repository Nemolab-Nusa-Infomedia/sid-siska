<?php

use App\Connection\DBConnector;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PendudukController;


Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/kependudukan-penduduk', [PendudukController::class, 'indexPenduduk'])->name('kependudukan-penduduk');
Route::get('/kependudukan-penduduk-tambah', [PendudukController::class, 'buatPenduduk'])->name('kependudukan-penduduk-tambah');
Route::get('/kependudukan-penduduk-edit', [PendudukController::class, 'ubahPenduduk'])->name('kependudukan-penduduk-edit');

Route::get('/config', [ConfigController::class, 'config'])->name('config');
Route::get('/form-database', [ConfigController::class, 'configDatabase'])->name('config-database');
Route::get('/confirm-database', [ConfigController::class, 'confirmDatabase'])->name('confirm-database');
Route::get('/form-akun', [ConfigController::class, 'configAkun'])->name('config-akun');

Route::post('/install-db', [DBConnector::class, 'getDB'])->name('install-db');
Route::get('/install-db-next', [DBConnector::class, 'migrateDB'])->name('install-db-next');
Route::post('/create-acc', [AccountController::class, 'createAcc'])->name('create-acc');



