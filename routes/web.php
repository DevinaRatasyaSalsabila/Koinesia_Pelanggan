<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FormatController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/pesanan/format', [FormatController::class, 'index'])->name('pesananFormat');
