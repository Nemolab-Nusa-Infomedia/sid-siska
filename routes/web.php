<?php

use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConfigController::class, 'config'])->name('config');
Route::get('/form-database', [ConfigController::class, 'configDatabase'])->name('config-database');

