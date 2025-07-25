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
        Schema::table('uang_masuks', function (Blueprint $table) {
            //ubah tipe kolom deskripsi dari string ke text
            $table->text('deskripsi')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('uang_masuks', function (Blueprint $table) {
            //untuk rollback, ubah kembali tipe kolom deskripsi ke string
            $table->string('deskripsi')->nullable()->change();
        });
    }
};
