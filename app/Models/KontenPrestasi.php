<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenPrestasi extends Model
{
    protected $table = 'konten_prestasi';
    protected $fillable = ['judul', 'kategori', 'tahun', 'tanggal', 'deskripsi', 'foto'];
}
