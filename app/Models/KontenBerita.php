<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenBerita extends Model
{
    protected $table = 'konten_berita';
    protected $fillable = ['judul', 'slug', 'penulis', 'tanggal', 'narasi', 'foto'];
}
