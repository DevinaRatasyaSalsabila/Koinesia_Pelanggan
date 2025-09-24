<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', [PelangganController::class, 'beranda'])->name('beranda'); 
Route::get('/keranjang', [PelangganController::class, 'keranjang'])->name('keranjang');
Route::get('/keranjang/pesanan', [PelangganController::class, 'format'])->name('format');
