<?php

namespace App\Http\Controllers;
use App\Models\UangKeluar;
use App\Models\UangMasuk;
use Illuminate\Http\Request;


class KeuanganController extends Controller
{
    //
    public function index()
    {
        //menghitung total uang masuk, uang keluar, dan saldo
        $totalMasuk = UangMasuk::sum('jumlah');
        $totalKeluar = UangKeluar::sum('jumlah');
        $totalSaldo = $totalMasuk - $totalKeluar;

        //mengambil data uang masuk dan uang keluar terbaru
        $uangMasuks = UangMasuk::latest()->paginate(5);
        $uangKeluars = UangKeluar::orderBy('created_at', 'desc')->get();

        //mengirim data ke view
        return view('keuangan.MoneyTrack', compact('totalMasuk', 'totalKeluar', 'totalSaldo', 'uangMasuks', 'uangKeluars'));

    }

    // Menampilkan form tambah uang masuk
    public function createUangMasuk()
    {
        return view('keuangan.tambahUangMasuk');
    }

    // Menyimpan data uang masuk
    public function storeUangMasuk(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'kategori' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string|max:500',
        ], [
            'jumlah.required' => 'Jumlah uang masuk harus diisi.',
            'jumlah.numeric' => 'Jumlah uang masuk harus berupa angka.',
            'jumlah.min' => 'Jumlah uang masuk minimal 1.',
            'kategori.required' => 'Kategori harus diisi.',
            'tanggal.required' => 'Tanggal harus diisi.',
            'tanggal.date' => 'Format tanggal tidak valid.',
            'deskripsi.max' => 'Deskripsi tidak boleh lebih dari 500 karakter.',
        ]);
        // Menyimpan data uang masuk
        UangMasuk::create([
            'jumlah' => $request->input('jumlah'),
            'kategori' => $request->input('kategori'),
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Redirect ke halaman MoneyTrack dengan pesan sukses
        return redirect()->route('MoneyTrack')->with('success', 'Uang masuk berhasil ditambahkan.');

    }


}
