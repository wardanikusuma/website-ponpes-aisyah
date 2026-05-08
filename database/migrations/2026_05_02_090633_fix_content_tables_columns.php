<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Prestasi
        Schema::table('konten_prestasi', function (Blueprint $table) {
            if (!Schema::hasColumn('konten_prestasi', 'kategori')) {
                $table->string('kategori')->nullable()->after('judul');
            }
            if (!Schema::hasColumn('konten_prestasi', 'tahun')) {
                $table->integer('tahun')->nullable()->after('kategori');
            }
        });

        // 2. Eskul
        Schema::table('konten_eskul', function (Blueprint $table) {
            if (!Schema::hasColumn('konten_eskul', 'nama_eskul')) {
                $table->string('nama_eskul')->nullable()->after('id');
            }
            if (!Schema::hasColumn('konten_eskul', 'deskripsi')) {
                $table->text('deskripsi')->nullable()->after('nama_eskul');
            }
        });

        // 3. Kurikulum
        Schema::table('konten_kurikulum', function (Blueprint $table) {
            if (!Schema::hasColumn('konten_kurikulum', 'nama_kurikulum')) {
                $table->string('nama_kurikulum')->nullable()->after('id');
            }
            if (!Schema::hasColumn('konten_kurikulum', 'target_capaian')) {
                $table->text('target_capaian')->nullable()->after('deskripsi');
            }
            if (!Schema::hasColumn('konten_kurikulum', 'urutan')) {
                $table->integer('urutan')->default(0)->after('target_capaian');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konten_prestasi', function (Blueprint $table) {
            $table->dropColumn(['kategori', 'tahun']);
        });
        Schema::table('konten_eskul', function (Blueprint $table) {
            $table->dropColumn(['nama_eskul', 'deskripsi']);
        });
        Schema::table('konten_kurikulum', function (Blueprint $table) {
            $table->dropColumn(['nama_kurikulum', 'target_capaian', 'urutan']);
        });
    }
};
