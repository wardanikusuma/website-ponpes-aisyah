<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftaran_sma_smp_sd', function (Blueprint $table) {
            $table->id();
            $table->enum('jenjang', ['SD', 'SMP', 'SMA']);
            $table->string('email', 100)->nullable();
            $table->string('nama_lengkap', 150)->nullable();
            $table->boolean('jenis_kelamin')->nullable(); // 0: Perempuan, 1: Laki-laki

            $table->string('nisn', 20)->nullable();
            $table->string('nik', 20)->nullable();
            $table->string('no_kk', 20)->nullable();
            $table->string('no_registrasi_akta', 50)->nullable();

            $table->string('nama_sekolah_asal', 150)->nullable();
            $table->string('npsn_sekolah_asal', 20)->nullable();

            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();

            $table->string('tinggal_bersama', 20)->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('jumlah_saudara')->nullable();

            $table->text('alamat')->nullable();
            $table->string('rt_rw', 20)->nullable();
            $table->string('dusun', 100)->nullable();
            $table->string('kelurahan', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kabupaten', 100)->nullable();
            $table->string('provinsi', 100)->nullable();

            $table->string('no_kks', 30)->nullable();
            $table->string('no_kps', 30)->nullable();
            $table->string('no_kip', 30)->nullable();

            $table->string('nama_ayah', 150)->nullable();
            $table->string('nik_ayah', 20)->nullable();
            $table->string('no_hp_ayah', 20)->nullable();
            $table->string('pekerjaan_ayah', 100)->nullable();
            $table->string('pendidikan_ayah', 50)->nullable();
            $table->string('penghasilan_ayah', 50)->nullable();

            $table->string('nama_ibu', 150)->nullable();
            $table->string('nik_ibu', 20)->nullable();
            $table->string('no_hp_ibu', 20)->nullable();
            $table->string('pendidikan_ibu', 50)->nullable();
            $table->string('pekerjaan_ibu', 100)->nullable();
            $table->string('penghasilan_ibu', 50)->nullable();

            $table->string('golongan_darah', 5)->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->string('ukuran_pakaian', 20)->nullable();
            $table->string('riwayat_penyakit', 255)->nullable();

            $table->decimal('nilai_rapor1', 5, 2)->nullable();
            $table->decimal('nilai_rapor2', 5, 2)->nullable();
            $table->text('prestasi')->nullable();

            $table->boolean('persetujuan')->default(false);
            $table->timestamps();
        });

        Schema::create('pendaftaran_paud', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->nullable();
            $table->string('nama_lengkap', 150)->nullable();
            $table->boolean('jenis_kelamin')->nullable();

            $table->string('nik', 20)->nullable();
            $table->string('no_kk', 20)->nullable();
            $table->string('no_registrasi_akta', 50)->nullable();

            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();

            $table->string('tinggal_bersama', 20)->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('jumlah_saudara')->nullable();

            $table->text('alamat')->nullable();
            $table->string('rt_rw', 20)->nullable();
            $table->string('dusun', 100)->nullable();
            $table->string('kelurahan', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kabupaten', 100)->nullable();
            $table->string('provinsi', 100)->nullable();

            $table->string('nama_ayah', 150)->nullable();
            $table->string('nik_ayah', 20)->nullable();
            $table->string('no_hp_ayah', 20)->nullable();
            $table->string('pekerjaan_ayah', 100)->nullable();
            $table->string('pendidikan_ayah', 50)->nullable();
            $table->string('penghasilan_ayah', 50)->nullable();

            $table->string('nama_ibu', 150)->nullable();
            $table->string('nik_ibu', 20)->nullable();
            $table->string('no_hp_ibu', 20)->nullable();
            $table->string('pendidikan_ibu', 50)->nullable();
            $table->string('pekerjaan_ibu', 100)->nullable();
            $table->string('penghasilan_ibu', 50)->nullable();

            $table->string('golongan_darah', 5)->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->string('ukuran_pakaian', 20)->nullable();
            $table->string('riwayat_penyakit', 255)->nullable();

            $table->boolean('persetujuan')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_paud');
        Schema::dropIfExists('pendaftaran_sma_smp_sd');
    }
};
