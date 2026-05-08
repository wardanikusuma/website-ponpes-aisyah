<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seleksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pendaftaran');
            $table->enum('tipe_pendaftaran', ['sma_smp_sd', 'paud']);
            $table->enum('jenjang', ['PAUD', 'SD', 'SMP', 'SMA']);

            // SELEKSI ADMINISTRASI
            $table->decimal('nilai_administrasi', 5, 2)->nullable();
            $table->boolean('status_administrasi')->nullable();

            // SELEKSI AKADEMIK
            $table->string('link_gform')->nullable();
            $table->dateTime('jadwal_akademik')->nullable();
            $table->string('link_gmeet_akademik')->nullable();
            $table->decimal('nilai_akademik', 5, 2)->nullable();
            $table->boolean('status_akademik')->nullable();

            // SELEKSI WAWANCARA
            $table->dateTime('jadwal_wawancara')->nullable();
            $table->string('link_gmeet_wawancara')->nullable();
            $table->decimal('nilai_wawancara', 5, 2)->nullable();
            $table->boolean('status_wawancara')->nullable();

            // SELEKSI TES BACA AL-QURAN
            $table->dateTime('jadwal_alquran')->nullable();
            $table->string('link_gmeet_alquran')->nullable();
            $table->decimal('nilai_alquran', 5, 2)->nullable();
            $table->boolean('status_alquran')->nullable();

            // HASIL AKHIR
            $table->boolean('status_kelulusan')->nullable();

            $table->timestamps();
        });

        Schema::create('tugas_tendik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tendik');
            $table->unsignedBigInteger('id_seleksi');
            $table->enum('jenis_seleksi', ['akademik', 'wawancara', 'alquran']);
            $table->timestamps();

            $table->foreign('id_tendik')->references('id')->on('tendik')->onDelete('cascade');
            $table->foreign('id_seleksi')->references('id')->on('seleksi')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tugas_tendik');
        Schema::dropIfExists('seleksi');
    }
};
