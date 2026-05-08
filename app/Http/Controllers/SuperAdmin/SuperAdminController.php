<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\PendaftaranPaud;
use App\Models\PendaftaranSmaSmpSd;
use App\Models\Seleksi;
use App\Models\Tendik;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        $total_admin = Admin::count();
        $total_tendik = Tendik::count();
        
        $total_pendaftar = PendaftaranSmaSmpSd::count() + PendaftaranPaud::count();
        $total_lulus = Seleksi::where('status_kelulusan', true)->count();

        $counts = [
            'PAUD' => PendaftaranPaud::count(),
            'SD' => PendaftaranSmaSmpSd::where('jenjang', 'SD')->count(),
            'SMP' => PendaftaranSmaSmpSd::where('jenjang', 'SMP')->count(),
            'SMA' => PendaftaranSmaSmpSd::where('jenjang', 'SMA')->count(),
        ];

        $kontenUmum = \App\Models\KontenUmum::first();

        return view('superadmin.dashboard', compact(
            'total_admin', 'total_tendik', 'total_pendaftar', 'total_lulus', 'counts', 'kontenUmum'
        ));
    }

    public function toggleRegistration($jenjang)
    {
        $column = 'is_registration_open_' . strtolower($jenjang);
        $kontenUmum = \App\Models\KontenUmum::first();
        
        if (!$kontenUmum) {
            $kontenUmum = \App\Models\KontenUmum::create([]);
        }

        $kontenUmum->update([
            $column => !$kontenUmum->$column
        ]);

        $status = $kontenUmum->$column ? 'dibuka' : 'ditutup';
        return back()->with('success', 'Pendaftaran jenjang ' . strtoupper($jenjang) . ' berhasil ' . $status . '.');
    }
}
