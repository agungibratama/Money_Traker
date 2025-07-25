<?php


use App\Http\Controllers\KeuanganController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('app');
});


Route::get('/moneyTrack', [KeuanganController::class, 'index'])->name('moneyTrack');

// Route untuk menampilkan form tambah uang masuk

Route::get('/moneyTrack/masuk/create', [KeuanganController::class, 'createUangMasuk'])->name('moneyTrack.masuk-create');

Route::post('/moneyTract/masuk', [KeuanganController::class, 'storeUangMasuk'])->name('moneyTrack.masuk-store');

// Route untuk menampilkan form tambah uang keluar
Route::get('/moneyTrack/keluar/create', [KeuanganController::class, "createUangKeluar"])->name('moneyTrack.keluar-create');
Route::post('/moneyTrack/keluar', [KeuanganController::class, 'storeUangKeluar'])->name('moneyTrack.keluar-store');








