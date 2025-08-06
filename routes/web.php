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

// Route untuk menghapus uang masuk
Route::delete('/moneyTrack/masuk/{id}', [KeuanganController::class, 'destroyUangMasuk'])->name('moneyTrack.masuk-destroy');

// Route untuk menghapus uang keluar
Route::delete('/moneyTrack/keluar/{id}', [KeuanganController::class, 'destroyUangKeluar'])->name('moneyTrack.keluar-destroy');



//route untuk menampilkan form edit uang masuk
Route::get('/moneyTrack/masuk/{id}/edit', [KeuanganController::class, 'editUangMasuk'])->name('moneyTrack.masuk-edit');

//route untuk update uang masuk
Route::put('/moneyTrack/masuk/{id}', [KeuanganController::class, 'updateUangMasuk'])->name('moneyTrack.masuk-update');


//route untuk menampilkan form edit uang keluar
Route::get('/moneyTrack/keluar/{id}/edit', [KeuanganController::class, 'editUangKeluar'])->name('moneyTrack.keluar-edit');

//route untuk update uang keluar
Route::put('/moneyTrack/keluar/{id}', [KeuanganController::class, 'updateUangKeluar'])->name('moneyTrack.keluar-update');


// Route untuk menampilkan form login
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');

// Route untuk menampilkan form register
Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');

Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.store');


