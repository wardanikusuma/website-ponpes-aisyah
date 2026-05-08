<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konten_yayasan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala_yayasan', 150)->nullable();
            $table->string('foto_kepala_yayasan')->nullable();
            $table->text('quotes_kepala_yayasan')->nullable();
            $table->text('sambutan_kepala_yayasan')->nullable();
            $table->text('deskripsi_kepala_yayasan')->nullable();
            $table->timestamps();
        });

        Schema::create('konten_berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 200)->nullable();
            $table->date('tanggal')->nullable();
            $table->text('narasi')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::create('konten_prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 200)->nullable();
            $table->date('tanggal')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::create('konten_eskul', function (Blueprint $table) {
            $table->id();
            $table->string('jenis', 100)->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });

        Schema::create('konten_kurikulum', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 150)->nullable();
            $table->string('foto')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('lembaga', 150)->nullable();
            $table->timestamps();
        });

        Schema::create('konten_umum', function (Blueprint $table) {
            $table->id();
            $table->string('akreditasi', 50)->nullable();
            $table->string('label_akreditasi', 100)->nullable();
            $table->text('deskripsi_akreditasi')->nullable();
            $table->string('foto_struktur_organisasi')->nullable();
            $table->integer('jumlah_santri')->nullable();
            $table->integer('jumlah_pengajar')->nullable();
            $table->integer('lama_berdiri')->nullable();
            $table->string('kontak_telpon', 20)->nullable();
            $table->string('kontak_email', 100)->nullable();
            $table->string('kontak_instagram', 100)->nullable();
            $table->string('kontak_youtube', 100)->nullable();
            $table->string('kontak_facebook', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('konten_umum');
        Schema::dropIfExists('konten_kurikulum');
        Schema::dropIfExists('konten_eskul');
        Schema::dropIfExists('konten_prestasi');
        Schema::dropIfExists('konten_berita');
        Schema::dropIfExists('konten_yayasan');
    }
};
