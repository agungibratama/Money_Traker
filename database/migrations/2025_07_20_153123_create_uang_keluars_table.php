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
        Schema::create('uang_keluars', function (Blueprint $table) {
            $table->id();
            $table->decimal('jumlah', 15, 2); // Assuming 'jumlah' is a decimal field with 15 digits total and 2 decimal places
            $table->string('kategori');
            $table->string('metode_pembayaran');
            $table->date('tanggal');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uang_keluars');
    }
};
