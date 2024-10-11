<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarProdukController;

Route::get('/', function () {
    return view('products/dashboard', ['title' => 'Dashboard']);
});

Route::resource('daftar-produk', DaftarProdukController::class);
