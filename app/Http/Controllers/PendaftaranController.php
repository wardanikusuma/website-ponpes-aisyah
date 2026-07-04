<?php

namespace App\Http\Controllers;

use App\Mail\NotifikasiPendaftaranBerhasil;
use App\Models\PendaftaranPaud;
use App\Models\PendaftaranSmaSmpSd;
use App\Models\Seleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PendaftaranController extends Controller
{
    public function landing()
    {
        $kontenUmum = \App\Models\KontenUmum::first();
        return view('public.ppdb_landing', compact('kontenUmum'));
    }

    public function createPaud()
    {
        $kontenUmum = \App\Models\KontenUmum::first();
        if ($kontenUmum && !$kontenUmum->is_registration_open_paud) {
            return view('public.pendaftaran_closed', ['jenjang' => 'PAUD']);
        }
        return view('public.pendaftaran_paud', compact('kontenUmum'));
    }

    public function storePaud(Request $request)
    {
        $kontenUmum = \App\Models\KontenUmum::first();
        if ($kontenUmum && !$kontenUmum->is_registration_open_paud) {
            return redirect()->route('ppdb.landing')->with('error', 'Pendaftaran PAUD saat ini sudah ditutup.');
        }

        $rules = [
            'email' => 'required|email',
            'nama_lengkap' => 'required|string|max:150',
            'jenis_kelamin' => 'required|boolean',
            'nik' => 'required|string|max:20',
            'no_kk' => 'required|string|max:20',
            'no_registrasi_akta' => 'required|string|max:50',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'tinggal_bersama' => 'required|string|max:20',
            'anak_ke' => 'required|integer',
            'jumlah_saudara' => 'required|integer',
            'alamat' => 'required|string',
            'rt_rw' => 'required|string|max:20',
            'dusun' => 'nullable|string|max:100',
            'kelurahan' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kabupaten' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'nama_ayah' => 'required|string|max:150',
            'nik_ayah' => 'required|string|max:20',
            'no_hp_ayah' => 'required|string|max:20',
            'pekerjaan_ayah' => 'nullable|string|max:100',
            'pendidikan_ayah' => 'nullable|string|max:50',
            'penghasilan_ayah' => 'nullable|string|max:50',
            'nama_ibu' => 'required|string|max:150',
            'nik_ibu' => 'required|string|max:20',
            'no_hp_ibu' => 'required|string|max:20',
            'pendidikan_ibu' => 'nullable|string|max:50',
            'pekerjaan_ibu' => 'nullable|string|max:100',
            'penghasilan_ibu' => 'nullable|string|max:50',
            'golongan_darah' => 'nullable|string|max:5',
            'berat_badan' => 'nullable|integer',
            'tinggi_badan' => 'nullable|integer',
            'ukuran_pakaian' => 'nullable|string|max:20',
            'riwayat_penyakit' => 'nullable|string|max:255',
            'persetujuan' => 'required|accepted',
        ];

        // Add file rules
        $fileFields = ['file_akta_lahir', 'file_kk', 'file_nisn', 'file_ktp_ayah', 'file_ktp_ibu', 'file_rapor', 'file_prestasi', 'file_ijazah', 'file_bukti_bayar'];
        foreach ($fileFields as $field) {
            $rules[$field] = 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048';
        }

        $validated = $request->validate($rules);
        
        // Handle file uploads
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $this->uploadFile($request->file($field), 'berkas');
            }
        }
        
        $pendaftaran = null;
        $noPendaftaran = '';

        DB::transaction(function() use ($validated, &$pendaftaran, &$noPendaftaran) {
            $pendaftaran = PendaftaranPaud::create($validated);
            
            $noPendaftaran = 'PAUD-' . date('Ymd') . '-' . str_pad($pendaftaran->id, 4, '0', STR_PAD_LEFT);
            
            Seleksi::create([
                'id_pendaftaran' => $pendaftaran->id,
                'tipe_pendaftaran' => 'paud',
                'jenjang' => 'PAUD',
                'no_pendaftaran' => $noPendaftaran
            ]);

            // Reset status pengumuman kembali menjadi abu-abu untuk pendaftar baru
            $kontenUmum = \App\Models\KontenUmum::first();
            if ($kontenUmum) {
                $kontenUmum->update([
                    'is_announced_paud' => false,
                    'is_announced_administrasi_paud' => false,
                    'is_announced_akademik_paud' => false,
                    'is_announced_wawancara_paud' => false,
                    'is_announced_alquran_paud' => false,
                ]);
            }
        });

        // Kirim Email di luar transaksi agar data sudah masuk ke DB
        if ($pendaftaran) {
            try {
                Mail::to($pendaftaran->email)->send(new NotifikasiPendaftaranBerhasil($pendaftaran, $noPendaftaran));
            } catch (\Exception $e) {
                logger()->error('Gagal kirim email pendaftaran PAUD: ' . $e->getMessage());
            }
        }

        return redirect()->route('ppdb.success')->with('message', 'Pendaftaran PAUD berhasil dikirim.');
    }

    public function createSekolah()
    {
        $kontenUmum = \App\Models\KontenUmum::first();
        
        $openJenjangs = [];
        if ($kontenUmum) {
            if ($kontenUmum->is_registration_open_sd) $openJenjangs[] = 'SD';
            if ($kontenUmum->is_registration_open_smp) $openJenjangs[] = 'SMP';
            if ($kontenUmum->is_registration_open_sma) $openJenjangs[] = 'SMA';
        } else {
            $openJenjangs = ['SD', 'SMP', 'SMA'];
        }

        if (empty($openJenjangs)) {
            return view('public.pendaftaran_closed', ['jenjang' => 'SD, SMP, dan SMA']);
        }

        return view('public.pendaftaran_sekolah', compact('openJenjangs', 'kontenUmum'));
    }

    public function storeSekolah(Request $request)
    {
        $kontenUmum = \App\Models\KontenUmum::first();
        $jenjang = $request->jenjang;

        if (!in_array($jenjang, ['SD', 'SMP', 'SMA'])) {
            return back()->withErrors([
                'jenjang' => 'Jenjang yang dipilih tidak valid.'
            ])->withInput();
        }

        $column = 'is_registration_open_' . strtolower($jenjang);
        
        if ($kontenUmum && !$kontenUmum->$column) {
            return redirect()->route('ppdb.landing')->with('error', 'Pendaftaran jenjang ' . $jenjang . ' saat ini sudah ditutup.');
        }

        $rules = [
            'jenjang' => 'required|in:SD,SMP,SMA',
            'email' => 'required|email',
            'nama_lengkap' => 'required|string|max:150',
            'jenis_kelamin' => 'required|boolean',
            'nisn' => 'required|string|max:20',
            'nik' => 'required|string|max:20',
            'no_kk' => 'required|string|max:20',
            'no_registrasi_akta' => 'required|string|max:50',
            'nama_sekolah_asal' => 'required|string|max:150',
            'npsn_sekolah_asal' => 'nullable|string|max:20',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'tinggal_bersama' => 'required|string|max:20',
            'anak_ke' => 'required|integer',
            'jumlah_saudara' => 'required|integer',
            'alamat' => 'required|string',
            'rt_rw' => 'required|string|max:20',
            'dusun' => 'nullable|string|max:100',
            'kelurahan' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kabupaten' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'no_kks' => 'nullable|string|max:30',
            'no_kps' => 'nullable|string|max:30',
            'no_kip' => 'nullable|string|max:30',
            'nama_ayah' => 'required|string|max:150',
            'nik_ayah' => 'required|string|max:20',
            'no_hp_ayah' => 'required|string|max:20',
            'pekerjaan_ayah' => 'nullable|string|max:100',
            'pendidikan_ayah' => 'nullable|string|max:50',
            'penghasilan_ayah' => 'nullable|string|max:50',
            'nama_ibu' => 'required|string|max:150',
            'nik_ibu' => 'required|string|max:20',
            'no_hp_ibu' => 'required|string|max:20',
            'pendidikan_ibu' => 'nullable|string|max:50',
            'pekerjaan_ibu' => 'nullable|string|max:100',
            'penghasilan_ibu' => 'nullable|string|max:50',
            'golongan_darah' => 'nullable|string|max:5',
            'berat_badan' => 'nullable|integer',
            'tinggi_badan' => 'nullable|integer',
            'ukuran_pakaian' => 'nullable|string|max:20',
            'riwayat_penyakit' => 'nullable|string|max:255',
            'nilai_rapor1' => 'required_if:jenjang,SMP,SMA|numeric',
            'nilai_rapor2' => 'required_if:jenjang,SMP,SMA|numeric',
            'prestasi' => 'nullable|string',
            'persetujuan' => 'required|accepted',
        ];

        if (in_array($jenjang, ['SMP', 'SMA'])) {
            $rules['nilai_rapor1'] = 'required|numeric';
            $rules['nilai_rapor2'] = 'required|numeric';
        } else {
            $rules['nilai_rapor1'] = 'nullable';
            $rules['nilai_rapor2'] = 'nullable';
        }

        // Add file rules
        $fileFields = ['file_akta_lahir', 'file_kk', 'file_nisn', 'file_ktp_ayah', 'file_ktp_ibu', 'file_rapor', 'file_prestasi', 'file_ijazah', 'file_bukti_bayar'];
        foreach ($fileFields as $field) {
            $rules[$field] = 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048';
        }

        $validated = $request->validate($rules);

        if ($validated['jenjang'] === 'SD') {
            $validated['nilai_rapor1'] = null;
            $validated['nilai_rapor2'] = null;
        }
        
        // Handle file uploads
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $this->uploadFile($request->file($field), 'berkas');
            }
        }
        
        $pendaftaran = null;
        $noPendaftaran = '';

        DB::transaction(function() use ($validated, &$pendaftaran, &$noPendaftaran) {
            $pendaftaran = PendaftaranSmaSmpSd::create($validated);
            
            $noPendaftaran = $validated['jenjang'] . '-' . date('Ymd') . '-' . str_pad($pendaftaran->id, 4, '0', STR_PAD_LEFT);
            
            Seleksi::create([
                'id_pendaftaran' => $pendaftaran->id,
                'tipe_pendaftaran' => 'sma_smp_sd',
                'jenjang' => $validated['jenjang'],
                'no_pendaftaran' => $noPendaftaran
            ]);

            // Reset status pengumuman kembali menjadi abu-abu untuk pendaftar baru
            $jenjangLower = strtolower($validated['jenjang']);
            $kontenUmum = \App\Models\KontenUmum::first();
            if ($kontenUmum) {
                $kontenUmum->update([
                    "is_announced_{$jenjangLower}" => false,
                    "is_announced_administrasi_{$jenjangLower}" => false,
                    "is_announced_akademik_{$jenjangLower}" => false,
                    "is_announced_wawancara_{$jenjangLower}" => false,
                    "is_announced_alquran_{$jenjangLower}" => false,
                ]);
            }
        });

        // Kirim Email di luar transaksi
        if ($pendaftaran) {
            try {
                Mail::to($pendaftaran->email)->send(new NotifikasiPendaftaranBerhasil($pendaftaran, $noPendaftaran));
            } catch (\Exception $e) {
                logger()->error('Gagal kirim email pendaftaran Sekolah: ' . $e->getMessage());
            }
        }

        return redirect()->route('ppdb.success')->with('message', 'Pendaftaran ' . $request->jenjang . ' berhasil dikirim.');
    }

    public function success()
    {
        return view('public.pendaftaran_success');
    }

    private function uploadFile($file, $folder)
    {
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        return $file->storeAs($folder, $filename, 'public');
    }
}