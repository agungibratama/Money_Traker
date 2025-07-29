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
        $uangKeluars = UangKeluar::latest()->paginate(5);

        //mengirim data ke view
        return view('keuangan.moneyTrack', compact('totalMasuk', 'totalKeluar', 'totalSaldo', 'uangMasuks', 'uangKeluars'));

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

        // Redirect ke halaman moneyTrack dengan pesan sukses
        return redirect()->route('moneyTrack')->with('success', 'Uang masuk berhasil ditambahkan.');

    }

    // Menampilkan form tambah uang keluar
    public function createUangKeluar()
    {
        return view('keuangan.tambahUangKeluar');
    }

    //meyimpan data uang keluar
    public function storeUangKeluar(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'kategori' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string|max:500',
            'metode_pembayaran' => 'required|string|max:50',
        ], [
            'jumlah.required' => 'Jumlah uang keluar harus diisi.',
            'jumlah.numeric' => 'Jumlah uang keluar harus berupa angka.',
            'jumlah.min' => 'Jumlah uang keluar minimal 1.',
            'kategori.required' => 'Kategori harus diisi.',
            'tanggal.required' => 'Tanggal harus diisi.',
            'tanggal.date' => 'Format tanggal tidak valid.',
            'deskripsi.max' => 'Deskripsi tidak boleh lebih dari 500 karakter.',
            'metode_pembayaran.required' => 'Metode pembayaran harus diisi.',
        ]);

        // Menyimpan data uang keluar
        UangKeluar::create([
            'jumlah' => $request->input('jumlah'),
            'kategori' => $request->input('kategori'),
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'metode_pembayaran' => $request->input('metode_pembayaran'),
        ]);

        // Redirect ke halaman moneyTrack dengan pesan sukses
        return redirect()->route('moneyTrack')->with('success', 'Uang keluar berhasil ditambahkan.');
    }

    // Menghapus uang masuk
    public function destroyUangMasuk($id)
    {
        $uangMasuk = UangMasuk::findOrFail($id);
        $uangMasuk->delete();

        return redirect()->route('moneyTrack')->with('success', 'Uang masuk berhasil dihapus.');
    }


    // Menghapus uang keluar
    public function destroyUangKeluar($id)
    {
        $uangKeluar = UangKeluar::findOrFail($id);
        $uangKeluar->delete();

        return redirect()->route('moneyTrack')->with('success', 'Uang keluar berhasil dihapus.');
    }


    // Menampilkan form edit uang masuk
    public function editUangMasuk($id)
    {
        $uangMasuk = UangMasuk::findOrFail($id);
        return view('keuangan.editUangMasuk', compact('uangMasuk'));
    }

    // Memperbarui data uang masuk
    public function updateUangMasuk(Request $request, $id)
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

        $uangMasuk = UangMasuk::findOrFail($id);
        $uangMasuk->update($request->all());

        return redirect()->route('moneyTrack')->with('success', 'Uang masuk berhasil diperbarui.');
    }


    // Menampilkan form edit uang keluar
    public function editUangKeluar($id)
    {
        $uangKeluar = UangKeluar::findOrFail($id);
        return view('keuangan.editUangKeluar', compact('uangKeluar'));
    }

    // Memperbarui data uang keluar
    public function updateUangKeluar(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'kategori' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string|max:500',
            'metode_pembayaran' => 'required|string|max:50',
        ], [
            'jumlah.required' => 'Jumlah uang keluar harus diisi.',
            'jumlah.numeric' => 'Jumlah uang keluar harus berupa angka.',
            'jumlah.min' => 'Jumlah uang keluar minimal 1.',
            'kategori.required' => 'Kategori harus diisi.',
            'tanggal.required' => 'Tanggal harus diisi.',
            'tanggal.date' => 'Format tanggal tidak valid.',
            'deskripsi.max' => 'Deskripsi tidak boleh lebih dari 500 karakter.',
            'metode_pembayaran.required' => 'Metode pembayaran harus diisi.',
        ]);

        $uangKeluar = UangKeluar::findOrFail($id);
        $uangKeluar->update($request->all());

        return redirect()->route('moneyTrack')->with('success', 'Uang keluar berhasil diperbarui.');

    }



}
