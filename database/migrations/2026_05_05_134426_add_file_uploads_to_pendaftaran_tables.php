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
        Schema::table('pendaftaran_sma_smp_sd', function (Blueprint $table) {
            $table->string('file_akta_lahir')->nullable();
            $table->string('file_kk')->nullable();
            $table->string('file_nisn')->nullable();
            $table->string('file_ktp_ayah')->nullable();
            $table->string('file_ktp_ibu')->nullable();
            $table->string('file_rapor')->nullable();
            $table->string('file_prestasi')->nullable();
            $table->string('file_ijazah')->nullable();
        });

        Schema::table('pendaftaran_paud', function (Blueprint $table) {
            $table->string('file_akta_lahir')->nullable();
            $table->string('file_kk')->nullable();
            $table->string('file_nisn')->nullable();
            $table->string('file_ktp_ayah')->nullable();
            $table->string('file_ktp_ibu')->nullable();
            $table->string('file_rapor')->nullable(); // Optional for PAUD but added for consistency
            $table->string('file_prestasi')->nullable();
            $table->string('file_ijazah')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pendaftaran_sma_smp_sd', function (Blueprint $table) {
            $table->dropColumn(['file_akta_lahir', 'file_kk', 'file_nisn', 'file_ktp_ayah', 'file_ktp_ibu', 'file_rapor', 'file_prestasi', 'file_ijazah']);
        });

        Schema::table('pendaftaran_paud', function (Blueprint $table) {
            $table->dropColumn(['file_akta_lahir', 'file_kk', 'file_nisn', 'file_ktp_ayah', 'file_ktp_ibu', 'file_rapor', 'file_prestasi', 'file_ijazah']);
        });
    }
};
