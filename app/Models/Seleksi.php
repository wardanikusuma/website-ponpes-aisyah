<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seleksi extends Model
{
    protected $table = 'seleksi';

    protected $fillable = [
        'id_pendaftaran', 'tipe_pendaftaran', 'jenjang',
        'nilai_administrasi', 'status_administrasi',
        'link_gform', 'jadwal_akademik', 'link_gmeet_akademik', 'nilai_akademik', 'status_akademik',
        'jadwal_wawancara', 'link_gmeet_wawancara', 'nilai_wawancara', 'status_wawancara',
        'jadwal_alquran', 'link_gmeet_alquran', 'nilai_alquran', 'status_alquran',
        'status_kelulusan', 'status_final',
        'id_tendik_akademik', 'id_tendik_wawancara', 'id_tendik_alquran',
        'catatan_akademik', 'catatan_wawancara', 'catatan_alquran'
    ];

    public function pendaftaran()
    {
        return $this->morphTo('pendaftaran', 'tipe_pendaftaran', 'id_pendaftaran');
    }

    public function tugasTendik()
    {
        return $this->hasMany(TugasTendik::class, 'id_seleksi');
    }

    public function recalculateStatusKelulusan()
    {
        if ($this->status_administrasi !== null && 
            $this->nilai_akademik !== null && 
            $this->nilai_wawancara !== null && 
            $this->nilai_alquran !== null) {
            
            $isLulus = $this->status_administrasi && 
                       ($this->status_akademik ?? false) && 
                       ($this->status_wawancara ?? false) && 
                       ($this->status_alquran ?? false);
            
            $this->status_kelulusan = $isLulus;
            $this->status_final = $isLulus ? 'Lulus' : 'Tidak Lulus';
            $this->save();
        }
    }
}
