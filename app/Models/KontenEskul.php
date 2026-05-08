<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenEskul extends Model
{
    protected $table = 'konten_eskul';
    protected $fillable = ['nama_eskul', 'deskripsi', 'jenis', 'gambar'];
}
