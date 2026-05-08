<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftaranPaud extends Model
{
    protected $table = 'pendaftaran_paud';

    protected $fillable = [
        'email', 'nama_lengkap', 'jenis_kelamin',
        'nik', 'no_kk', 'no_registrasi_akta',
        'tempat_lahir', 'tanggal_lahir',
        'tinggal_bersama', 'anak_ke', 'jumlah_saudara',
        'alamat', 'rt_rw', 'dusun', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi',
        'nama_ayah', 'nik_ayah', 'no_hp_ayah', 'pekerjaan_ayah', 'pendidikan_ayah', 'penghasilan_ayah',
        'nama_ibu', 'nik_ibu', 'no_hp_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu',
        'golongan_darah', 'berat_badan', 'tinggi_badan', 'ukuran_pakaian', 'riwayat_penyakit',
        'persetujuan',
        'file_akta_lahir', 'file_kk', 'file_nisn', 'file_ktp_ayah', 'file_ktp_ibu', 'file_rapor', 'file_prestasi', 'file_ijazah',
        'file_bukti_bayar'
    ];

    public function seleksi()
    {
        return $this->morphOne(Seleksi::class, 'pendaftaran', 'tipe_pendaftaran', 'id_pendaftaran');
    }
}
