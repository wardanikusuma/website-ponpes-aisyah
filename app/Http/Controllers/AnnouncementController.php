<?php

namespace App\Http\Controllers;

use App\Models\Seleksi;
use App\Models\PendaftaranPaud;
use App\Models\PendaftaranSmaSmpSd;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function show($jenjang)
    {
        $kontenUmum = \App\Models\KontenUmum::first();
        $jenjangLower = strtolower($jenjang);
        
        $is_announced = $kontenUmum ? $kontenUmum->{'is_announced_' . $jenjangLower} : false;
        $is_announced_akademik = $kontenUmum ? $kontenUmum->{'is_announced_akademik_' . $jenjangLower} : false;
        $is_announced_wawancara = $kontenUmum ? $kontenUmum->{'is_announced_wawancara_' . $jenjangLower} : false;
        $is_announced_alquran = $kontenUmum ? $kontenUmum->{'is_announced_alquran_' . $jenjangLower} : false;
        $is_announced_administrasi = $kontenUmum ? $kontenUmum->{'is_announced_administrasi_' . $jenjangLower} : false;

        // Jika salah satu tahap diumumkan, kita tampilkan halaman pengumuman
        if (!$is_announced && !$is_announced_akademik && !$is_announced_wawancara && !$is_announced_alquran && !$is_announced_administrasi) {
            return view('public.pengumuman_not_available', compact('jenjang'));
        }

        $results_final = [];
        if ($is_announced) {
            $results_final = Seleksi::with('pendaftaran')
                ->where('jenjang', $jenjang)
                ->whereNotNull('status_kelulusan')
                ->get();
        }

        $results_administrasi = [];
        if ($is_announced_administrasi) {
            $results_administrasi = Seleksi::with('pendaftaran')
                ->where('jenjang', $jenjang)
                ->where('status_administrasi', 1)
                ->get();
        }

        $results_akademik = [];
        if ($is_announced_akademik) {
            $results_akademik = Seleksi::with('pendaftaran')
                ->where('jenjang', $jenjang)
                ->where('status_akademik', 1)
                ->get();
        }

        $results_wawancara = [];
        if ($is_announced_wawancara) {
            $results_wawancara = Seleksi::with('pendaftaran')
                ->where('jenjang', $jenjang)
                ->where('status_wawancara', 1)
                ->get();
        }

        $results_alquran = [];
        if ($is_announced_alquran) {
            $results_alquran = Seleksi::with('pendaftaran')
                ->where('jenjang', $jenjang)
                ->where('status_alquran', 1)
                ->get();
        }

        return view('public.pengumuman', compact(
            'jenjang', 
            'results_final', 
            'results_administrasi',
            'results_akademik', 
            'results_wawancara', 
            'results_alquran',
            'is_announced',
            'is_announced_administrasi',
            'is_announced_akademik',
            'is_announced_wawancara',
            'is_announced_alquran'
        ));
    }
}
