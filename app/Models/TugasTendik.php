<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasTendik extends Model
{
    protected $table = 'tugas_tendik';

    protected $fillable = [
        'id_tendik', 'id_seleksi', 'jenis_seleksi'
    ];

    public function tendik()
    {
        return $this->belongsTo(Tendik::class, 'id_tendik');
    }

    public function seleksi()
    {
        return $this->belongsTo(Seleksi::class, 'id_seleksi');
    }
}
