<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendaftaranPaud;
use App\Models\PendaftaranSmaSmpSd;
use App\Models\Seleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $jenjang = Auth::user()->jenjang;

        if ($jenjang === 'PAUD') {
            $total_pendaftar = PendaftaranPaud::count();
        } else {
            $total_pendaftar = PendaftaranSmaSmpSd::where('jenjang', $jenjang)->count();
        }

        $lulus_administrasi = Seleksi::where('jenjang', $jenjang)->where('status_administrasi', true)->count();
        $total_lulus = Seleksi::where('jenjang', $jenjang)->where('status_kelulusan', true)->count();
        
        $kontenUmum = \App\Models\KontenUmum::first();
        $jenjangLower = strtolower($jenjang);
        $column = 'is_announced_' . $jenjangLower;
        $is_announced = $kontenUmum ? $kontenUmum->$column : false;

        $is_announced_akademik = $kontenUmum ? $kontenUmum->{'is_announced_akademik_' . $jenjangLower} : false;
        $is_announced_wawancara = $kontenUmum ? $kontenUmum->{'is_announced_wawancara_' . $jenjangLower} : false;
        $is_announced_alquran = $kontenUmum ? $kontenUmum->{'is_announced_alquran_' . $jenjangLower} : false;
        $is_announced_administrasi = $kontenUmum ? $kontenUmum->{'is_announced_administrasi_' . $jenjangLower} : false;

        return view('admin.dashboard', compact(
            'total_pendaftar', 'lulus_administrasi', 'total_lulus', 'is_announced',
            'is_announced_akademik', 'is_announced_wawancara', 'is_announced_alquran', 'is_announced_administrasi'
        ));
    }
}
