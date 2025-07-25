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
        //
        Schema::table('uang_masuks', function (Blueprint $table) {
            //ubah kolom deskripsi menjadi nullable
            $table->text('deskripsi')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('uang_masuks', function (Blueprint $table) {
            //untuk rollback, ubah kembali kolom deskripsi menjadi tidak nullable
            $table->text('deskripsi')->change();
        });
    }
};
