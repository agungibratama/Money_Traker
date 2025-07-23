<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('uang_masuks', function (Blueprint $table) {
            $table->id();
            $table->decimal('jumlah', 15, 2); //untuk menyimpan jumlah uang masuk dengan 2 digit desimal
            $table->string('kategori');
            $table->date('tanggal');
            $table->string('deskripsi')->nullable(); //menyimpan deskripsi opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uang_masuks');
    }
};
