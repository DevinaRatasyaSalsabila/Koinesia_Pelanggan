<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
