<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenKurikulum extends Model
{
    protected $table = 'konten_kurikulum';
    protected $fillable = ['nama_kurikulum', 'judul', 'deskripsi', 'target_capaian', 'urutan', 'foto', 'lembaga'];
}
