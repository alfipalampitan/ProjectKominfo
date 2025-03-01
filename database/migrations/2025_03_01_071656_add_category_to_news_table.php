<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->string('category')->after('description')->default('Umum'); // Tambah kolom category
        });
    }

    public function down(): void
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->dropColumn('category'); // Hapus kolom jika rollback
        });
    }
};

