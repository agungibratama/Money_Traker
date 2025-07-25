<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('uang_keluars')->insert([
            [
                'tanggal' => '2025-07-20',
                'jumlah' => 50000,
                'deskripsi' => 'Pembelian bahan baku',
                'kategori' => 'Pengeluaran',
                'metode_pembayaran' => 'Tunai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => '2025-07-21',
                'jumlah' => 30000,
                'deskripsi' => 'Pembayaran listrik',
                'kategori' => 'Tagihan',
                'metode_pembayaran' => 'Transfer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
