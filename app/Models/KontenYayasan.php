<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenYayasan extends Model
{
    protected $table = 'konten_yayasan';
    protected $fillable = ['nama_kepala_yayasan', 'foto_kepala_yayasan', 'quotes_kepala_yayasan', 'sambutan_kepala_yayasan', 'deskripsi_kepala_yayasan'];
}
