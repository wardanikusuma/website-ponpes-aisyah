<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seleksi;
use App\Models\PendaftaranPaud;
use App\Models\PendaftaranSmaSmpSd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UndanganSeleksi;
use App\Mail\NotifikasiLolosTahap;
use App\Models\KontenUmum;
use Illuminate\Support\Facades\Log;

class SeleksiController extends Controller
{
    public function administrasi(Request $request, $id)
    {
        $jenjang = Auth::user()->jenjang;
        $tipe = ($jenjang === 'PAUD') ? 'paud' : 'sma_smp_sd';

        $seleksi = Seleksi::where('id_pendaftaran', $id)->where('tipe_pendaftaran', $tipe)->first();
        
        if (!$seleksi) {
            $seleksi = new Seleksi();
            $seleksi->id_pendaftaran = $id;
            $seleksi->tipe_pendaftaran = $tipe;
            $seleksi->jenjang = $jenjang;
            $seleksi->no_pendaftaran = $jenjang . '-' . date('Ymd') . '-' . str_pad($id, 4, '0', STR_PAD_LEFT);
        }

        $seleksi->nilai_administrasi = $request->nilai_administrasi;
        $seleksi->status_administrasi = $request->status_administrasi;
        $seleksi->save();
        $seleksi->recalculateStatusKelulusan();

        return back()->with('success', 'Hasil seleksi administrasi berhasil disimpan.');
    }

    public function setupAkademik(Request $request, $id)
    {
        $seleksi = Seleksi::where('id_pendaftaran', $id)->firstOrFail();
        $seleksi->update([
            'link_gform' => $request->link_gform,
            'jadwal_akademik' => $request->jadwal_akademik,
            'link_gmeet_akademik' => $request->link_gmeet_akademik,
            'id_tendik_akademik' => $request->id_tendik_akademik,
        ]);

        // Kirim email undangan
        if ($seleksi->pendaftaran && $seleksi->pendaftaran->email) {
            try {
                Mail::to($seleksi->pendaftaran->email)->queue(new UndanganSeleksi($seleksi, 'akademik'));
            } catch (\Exception $e) {
                Log::error('Gagal mengirim email undangan akademik ke ' . $seleksi->pendaftaran->email . ': ' . $e->getMessage());
            }
        }

        return back()->with('success', 'Setup seleksi akademik berhasil disimpan dan email undangan telah dikirim.');
    }

    public function setupWawancara(Request $request, $id)
    {
        $seleksi = Seleksi::where('id_pendaftaran', $id)->firstOrFail();
        $seleksi->update([
            'jadwal_wawancara' => $request->jadwal_wawancara,
            'link_gmeet_wawancara' => $request->link_gmeet_wawancara,
            'id_tendik_wawancara' => $request->id_tendik_wawancara,
        ]);

        // Kirim email undangan
        if ($seleksi->pendaftaran && $seleksi->pendaftaran->email) {
            try {
                Mail::to($seleksi->pendaftaran->email)->queue(new UndanganSeleksi($seleksi, 'wawancara'));
            } catch (\Exception $e) {
                Log::error('Gagal mengirim email undangan wawancara ke ' . $seleksi->pendaftaran->email . ': ' . $e->getMessage());
            }
        }

        return back()->with('success', 'Setup seleksi wawancara berhasil disimpan dan email undangan telah dikirim.');
    }
    public function setupAlquran(Request $request, $id)
    {
        $seleksi = Seleksi::where('id_pendaftaran', $id)->firstOrFail();
        $seleksi->update([
            'jadwal_alquran' => $request->jadwal_alquran,
            'link_gmeet_alquran' => $request->link_gmeet_alquran,
            'id_tendik_alquran' => $request->id_tendik_alquran,
        ]);

        // Kirim email undangan
        if ($seleksi->pendaftaran && $seleksi->pendaftaran->email) {
            try {
                Mail::to($seleksi->pendaftaran->email)->queue(new UndanganSeleksi($seleksi, 'alquran'));
            } catch (\Exception $e) {
                Log::error('Gagal mengirim email undangan alquran ke ' . $seleksi->pendaftaran->email . ': ' . $e->getMessage());
            }
        }

        return back()->with('success', 'Setup seleksi baca Al-Quran berhasil disimpan dan email undangan telah dikirim.');
    }

    public function nilaiAkademik(Request $request, $id)
    {
        $seleksi = Seleksi::where('id_pendaftaran', $id)->firstOrFail();
        $seleksi->update([
            'nilai_akademik' => $request->nilai_akademik,
            'status_akademik' => $request->nilai_akademik >= 70 ? 1 : 0, // Example logic
        ]);
        $seleksi->recalculateStatusKelulusan();
        return back()->with('success', 'Nilai akademik berhasil disimpan.');
    }

    public function nilaiWawancara(Request $request, $id)
    {
        $seleksi = Seleksi::where('id_pendaftaran', $id)->firstOrFail();
        $seleksi->update([
            'nilai_wawancara' => $request->nilai_wawancara,
            'status_wawancara' => $request->nilai_wawancara >= 70 ? 1 : 0,
        ]);
        $seleksi->recalculateStatusKelulusan();
        return back()->with('success', 'Nilai wawancara berhasil disimpan.');
    }

    public function nilaiAlquran(Request $request, $id)
    {
        $seleksi = Seleksi::where('id_pendaftaran', $id)->firstOrFail();
        $seleksi->update([
            'nilai_alquran' => $request->nilai_alquran,
            'status_alquran' => $request->nilai_alquran >= 70 ? 1 : 0,
        ]);
        $seleksi->recalculateStatusKelulusan();
        return back()->with('success', 'Nilai baca Al-Quran berhasil disimpan.');
    }

    public function kelulusanAkhir(Request $request, $id)
    {
        $seleksi = Seleksi::where('id_pendaftaran', $id)->firstOrFail();
        $seleksi->update([
            'status_final' => $request->status_final,
            'status_kelulusan' => $request->status_final === 'Lulus' ? 1 : 0,
        ]);
        return back()->with('success', 'Status kelulusan akhir berhasil diperbarui.');
    }

    public function umumkanHasil()
    {
        $jenjang = Auth::user()->jenjang;
        $column = 'is_announced_' . strtolower($jenjang);
        
        $kontenUmum = \App\Models\KontenUmum::first();
        if (!$kontenUmum) {
            $kontenUmum = \App\Models\KontenUmum::create([]);
        }
        
        $kontenUmum->update([$column => true]);

        // Kirim email ke semua pendaftar di jenjang ini yang sudah memiliki status kelulusan
        $seleksis = Seleksi::where('jenjang', $jenjang)->whereNotNull('status_kelulusan')->get();
        
        foreach ($seleksis as $seleksi) {
            if ($seleksi->pendaftaran && $seleksi->pendaftaran->email) {
                try {
                    \Illuminate\Support\Facades\Mail::to($seleksi->pendaftaran->email)
                        ->queue(new \App\Mail\PengumumanHasilSeleksi($seleksi));
                } catch (\Exception $e) {
                    // Log error but continue
                    \Illuminate\Support\Facades\Log::error('Gagal mengirim email pengumuman ke ' . $seleksi->pendaftaran->email . ': ' . $e->getMessage());
                }
            }
        }

        return back()->with('success', 'Hasil PPDB jenjang ' . $jenjang . ' berhasil diumumkan ke publik dan email notifikasi sedang dikirim.');
    }

    public function umumkanTahap(Request $request)
    {
        $jenjang = Auth::user()->jenjang;
        $stage = $request->stage; // akademik, wawancara, alquran
        $column = 'is_announced_' . $stage . '_' . strtolower($jenjang);
        
        $kontenUmum = KontenUmum::first();
        if (!$kontenUmum) {
            $kontenUmum = KontenUmum::create([]);
        }
        
        $kontenUmum->update([$column => true]);

        // Kirim email ke pendaftar yang lolos di tahap ini
        $statusColumn = 'status_' . $stage;
        $seleksis = Seleksi::where('jenjang', $jenjang)
            ->where($statusColumn, 1)
            ->get();
        
        foreach ($seleksis as $seleksi) {
            if ($seleksi->pendaftaran && $seleksi->pendaftaran->email) {
                try {
                    Mail::to($seleksi->pendaftaran->email)
                        ->queue(new NotifikasiLolosTahap($seleksi, $stage));
                } catch (\Exception $e) {
                    Log::error('Gagal mengirim email lolos tahap ' . $stage . ' ke ' . $seleksi->pendaftaran->email . ': ' . $e->getMessage());
                }
            }
        }

        $stageName = [
            'administrasi' => 'Administrasi',
            'akademik' => 'Akademik',
            'wawancara' => 'Wawancara',
            'alquran' => 'Baca Al-Quran'
        ][$stage] ?? 'Seleksi';

        return back()->with('success', 'Hasil seleksi ' . $stageName . ' jenjang ' . $jenjang . ' berhasil diumumkan ke publik dan email notifikasi sedang dikirim.');
    }

    public function bulkSetup(Request $request)
    {
        $jenjang = Auth::user()->jenjang;
        $stage = $request->stage; // akademik, wawancara, alquran
        $selectedIds = $request->ids; // Array of pendaftaran IDs

        if (!$selectedIds || count($selectedIds) == 0) {
            return back()->with('error', 'Silakan pilih pendaftar terlebih dahulu.');
        }
        
        $data = [];
        if ($stage === 'akademik') {
            $data = [
                'jadwal_akademik' => $request->jadwal_akademik,
                'link_gform' => $request->link_gform,
                'link_gmeet_akademik' => $request->link_gmeet_akademik,
                'id_tendik_akademik' => $request->id_tendik_akademik,
            ];
        } elseif ($stage === 'wawancara') {
            $data = [
                'jadwal_wawancara' => $request->jadwal_wawancara,
                'link_gmeet_wawancara' => $request->link_gmeet_wawancara,
                'id_tendik_wawancara' => $request->id_tendik_wawancara,
            ];
        } elseif ($stage === 'alquran') {
            $data = [
                'jadwal_alquran' => $request->jadwal_alquran,
                'link_gmeet_alquran' => $request->link_gmeet_alquran,
                'id_tendik_alquran' => $request->id_tendik_alquran,
            ];
        }

        // Tipe pendaftaran
        $tipe = ($jenjang === 'PAUD') ? 'paud' : 'sma_smp_sd';

        // Update records based on selected IDs and type
        $affectedRows = Seleksi::whereIn('id_pendaftaran', $selectedIds)
            ->where('tipe_pendaftaran', $tipe)
            ->update($data);

        // Kirim email massal (Queue)
        $updatedSeleksis = Seleksi::whereIn('id_pendaftaran', $selectedIds)
            ->where('tipe_pendaftaran', $tipe)
            ->get();

        foreach ($updatedSeleksis as $s) {
            if ($s->pendaftaran && $s->pendaftaran->email) {
                try {
                    Mail::to($s->pendaftaran->email)->queue(new UndanganSeleksi($s, $stage));
                } catch (\Exception $e) {
                    Log::error('Gagal mengirim email bulk invitation ' . $stage . ' ke ' . $s->pendaftaran->email . ': ' . $e->getMessage());
                }
            }
        }

        return back()->with('success', 'Setup massal ' . $stage . ' berhasil diterapkan ke ' . $affectedRows . ' pendaftar pilihan.');
    }
}
