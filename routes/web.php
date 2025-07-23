<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('app');
});

Route::get('/MoneyTrack', function () {
    return view('moneytrack');
});
Route::get('/tambahMasuk', function () {
    return view('tambahUangMasuk');
});

Route::get('/tambahKeluar', function () {
    return view('tambahUangKeluar');
});


