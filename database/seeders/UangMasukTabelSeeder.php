<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UangMasukTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //table uangmasuk
        DB::table('uang_masuks')->insert([
            [
                'tanggal' => '2025-07-20',
                'jumlah' => 100000,
                'deskripsi' => 'Setoran awal',
                'kategori' => 'Setoran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => '2025-07-21',
                'jumlah' => 50000,
                'deskripsi' => 'Penjualan produk A',
                'kategori' => 'Penjualan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        // --- IGNORE ---
    }
}
