<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DBSetupController;
use App\Http\Controllers\PendudukController;


Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/kependudukan-penduduk', [PendudukController::class, 'indexPenduduk'])->name('kependudukan-penduduk');
Route::get('/kependudukan-penduduk-tambah', [PendudukController::class, 'buatPenduduk'])->name('kependudukan-penduduk-tambah');
Route::get('/kependudukan-penduduk-detail', [PendudukController::class, 'detailPenduduk'])->name('kependudukan-penduduk-detail');
Route::get('/kependudukan-penduduk-cetakDetail', [PendudukController::class, 'cetakDetailPenduduk'])->name('kependudukan-penduduk-cetakDetail');
Route::get('/kependudukan-penduduk-edit', [PendudukController::class, 'ubahPenduduk'])->name('kependudukan-penduduk-edit');
Route::get('/kependudukan-penduduk-hapus', [PendudukController::class, 'hapusPenduduk'])->name('kependudukan-penduduk-hapus');

Route::get('/config', [ConfigController::class, 'config'])->name('config');
Route::get('/form-database', [ConfigController::class, 'configDatabase'])->name('config-database');
Route::get('/confirm-database', [ConfigController::class, 'confirmDatabase'])->name('confirm-database');
Route::get('/form-akun', [ConfigController::class, 'configAkun'])->name('config-akun');

Route::post('/install-db', [DBSetupController::class, 'getDB'])->name('install-db');
Route::get('/install-db-next', [DBSetupController::class, 'migrateDB'])->name('install-db-next');

Route::post('/create-acc', [AccountController::class, 'createAcc'])->name('create-acc');



