<?php


use App\Http\Controllers\KeuanganController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('app');
});


Route::get('/MoneyTrack', [KeuanganController::class, 'index'])->name('MoneyTrack');

Route::get('/moneyTrack/masuk/create', [KeuanganController::class, 'createUangMasuk'])
    ->name('moneyTrack.masuk-create');
Route::post('/moneyTract/masuk', [KeuanganController::class, 'storeUangMasuk'])
    ->name('moneyTrack.masuk-store');

Route::get('/MoneyTrack', function () {
    return view('moneytrack');
});
Route::get('/tambahMasuk', function () {
    return view('tambahUangMasuk');
});

Route::get('/tambahKeluar', function () {
    return view('tambahUangKeluar');
});



