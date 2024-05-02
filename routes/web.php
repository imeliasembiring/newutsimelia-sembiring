<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', function () {
    return view('index');
});

Route::get('produk',function() {
    $kode = [3110,3345];
    $nama = ['Pena','Buku'];
    $jenis = count($kode);
    $harga = ['3.000','1.000'];
    return view('produk',compact('kode','nama','jenis','harga'));
});