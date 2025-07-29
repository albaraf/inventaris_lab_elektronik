<?php

use App\Http\Controllers\BarangElektronikController;

Route::get('/', fn() => redirect()->route('barang.index'));
Route::resource('barang', BarangElektronikController::class);
