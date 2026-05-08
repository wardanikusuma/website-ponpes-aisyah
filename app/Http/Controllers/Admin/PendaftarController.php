<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendaftaranPaud;
use App\Models\PendaftaranSmaSmpSd;
use App\Models\Seleksi;
use App\Models\Tendik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftarController extends Controller
{
    public function index(Request $request)
    {
        $jenjang = Auth::user()->jenjang;
        $step = $request->query('step');

        if ($jenjang === 'PAUD') {
            $query = PendaftaranPaud::query();
        } else {
            $query = PendaftaranSmaSmpSd::where('jenjang', $jenjang);
        }

        $pendaftars = $query->with('seleksi')->latest()->get();
        $tendik = \App\Models\Tendik::where('jenjang', $jenjang)->get();

        return view('admin.pendaftar.index', compact('pendaftars', 'jenjang', 'step', 'tendik'));
    }

    public function show($id)
    {
        $jenjang = Auth::user()->jenjang;
        if ($jenjang === 'PAUD') {
            $pendaftar = PendaftaranPaud::findOrFail($id);
        } else {
            $pendaftar = PendaftaranSmaSmpSd::findOrFail($id);
        }

        $seleksi = Seleksi::where('id_pendaftaran', $id)
            ->where('tipe_pendaftaran', $jenjang === 'PAUD' ? 'paud' : 'sma_smp_sd')
            ->first();
            
        $tendik = Tendik::where('jenjang', $jenjang)->get();

        return view('admin.pendaftar.show', compact('pendaftar', 'seleksi', 'jenjang', 'tendik'));
    }
}
