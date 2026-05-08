<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenUmum extends Model
{
    protected $table = 'konten_umum';
    protected $fillable = [
        'akreditasi', 'label_akreditasi', 'deskripsi_akreditasi', 'foto_struktur_organisasi',
        'jumlah_santri', 'jumlah_pengajar', 'lama_berdiri',
        'kontak_telpon', 'kontak_email', 'kontak_instagram', 'kontak_youtube', 'kontak_facebook',
        'is_announced_paud', 'is_announced_sd', 'is_announced_smp', 'is_announced_sma',
        'is_announced_akademik_paud', 'is_announced_akademik_sd', 'is_announced_akademik_smp', 'is_announced_akademik_sma',
        'is_announced_wawancara_paud', 'is_announced_wawancara_sd', 'is_announced_wawancara_smp', 'is_announced_wawancara_sma',
        'is_announced_alquran_paud', 'is_announced_alquran_sd', 'is_announced_alquran_smp', 'is_announced_alquran_sma',
        'is_announced_administrasi_paud', 'is_announced_administrasi_sd', 'is_announced_administrasi_smp', 'is_announced_administrasi_sma',
        'is_registration_open_paud', 'is_registration_open_sd', 'is_registration_open_smp', 'is_registration_open_sma',
        'ppdb_bank_name', 'ppdb_bank_account', 'ppdb_bank_owner', 'ppdb_nominal'
    ];
}
