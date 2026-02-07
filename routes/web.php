<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


// Route untuk halaman welcome (default Laravel)
Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswa', MahasiswaController::class);

