<?php

namespace App\Http\Controllers\Tendik;

use App\Http\Controllers\Controller;
use App\Models\Seleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tendikId = Auth::id();
        
        $query = Seleksi::where(function($q) use ($tendikId) {
            $q->where('id_tendik_akademik', $tendikId)
              ->orWhere('id_tendik_wawancara', $tendikId);
        });

        $seleksiList = $query->get();
        $tasks = collect();

        foreach ($seleksiList as $seleksi) {
            // Cek tugas akademik
            if ($seleksi->id_tendik_akademik == $tendikId) {
                if ($request->query('status') != 'pending' || $seleksi->nilai_akademik === null) {
                    $tasks->push((object)[
                        'seleksi' => $seleksi,
                        'type' => 'akademik',
                        'jadwal' => $seleksi->jadwal_akademik,
                        'nilai' => $seleksi->nilai_akademik,
                        'status' => $seleksi->status_akademik
                    ]);
                }
            }

            // Cek tugas wawancara
            if ($seleksi->id_tendik_wawancara == $tendikId) {
                if ($request->query('status') != 'pending' || $seleksi->nilai_wawancara === null) {
                    $tasks->push((object)[
                        'seleksi' => $seleksi,
                        'type' => 'wawancara',
                        'jadwal' => $seleksi->jadwal_wawancara,
                        'nilai' => $seleksi->nilai_wawancara,
                        'status' => $seleksi->status_wawancara
                    ]);
                }
            }

            // Cek tugas alquran
            if ($seleksi->id_tendik_alquran == $tendikId) {
                if ($request->query('status') != 'pending' || $seleksi->nilai_alquran === null) {
                    $tasks->push((object)[
                        'seleksi' => $seleksi,
                        'type' => 'alquran',
                        'jadwal' => $seleksi->jadwal_alquran,
                        'nilai' => $seleksi->nilai_alquran,
                        'status' => $seleksi->status_alquran
                    ]);
                }
            }
        }

        return view('tendik.tasks.index', compact('tasks'));
    }

    public function inputNilai($id, $type)
    {
        $seleksi = Seleksi::findOrFail($id);
        $tendikId = Auth::id();

        // Pastikan tendik ini memang ditugaskan untuk tipe seleksi ini
        if ($type == 'akademik' && $seleksi->id_tendik_akademik != $tendikId) {
            abort(403, 'Anda tidak ditugaskan untuk seleksi akademik santri ini.');
        }
        if ($type == 'wawancara' && $seleksi->id_tendik_wawancara != $tendikId) {
            abort(403, 'Anda tidak ditugaskan untuk seleksi wawancara santri ini.');
        }
        if ($type == 'alquran' && $seleksi->id_tendik_alquran != $tendikId) {
            abort(403, 'Anda tidak ditugaskan untuk seleksi baca Al-Quran santri ini.');
        }
        
        $pendaftar = $seleksi->pendaftaran;

        return view('tendik.tasks.input_nilai', compact('seleksi', 'pendaftar', 'type'));
    }

    public function storeNilai(Request $request, $id, $type)
    {
        $seleksi = Seleksi::findOrFail($id);
        $tendikId = Auth::id();

        $request->validate([
            'nilai' => 'required|numeric|min:0|max:100',
            'catatan' => 'nullable|string'
        ]);

        if ($type == 'akademik' && $seleksi->id_tendik_akademik == $tendikId) {
            $seleksi->update([
                'nilai_akademik' => $request->nilai,
                'status_akademik' => $request->nilai >= 70 ? 1 : 0,
                'catatan_akademik' => $request->catatan
            ]);
        } elseif ($type == 'wawancara' && $seleksi->id_tendik_wawancara == $tendikId) {
            $seleksi->update([
                'nilai_wawancara' => $request->nilai,
                'status_wawancara' => $request->nilai >= 70 ? 1 : 0,
                'catatan_wawancara' => $request->catatan
            ]);
        } elseif ($type == 'alquran' && $seleksi->id_tendik_alquran == $tendikId) {
            $seleksi->update([
                'nilai_alquran' => $request->nilai,
                'status_alquran' => $request->nilai >= 70 ? 1 : 0,
                'catatan_alquran' => $request->catatan
            ]);
        }

        $seleksi->recalculateStatusKelulusan();

        return redirect()->route('tendik.tugas.index')->with('success', 'Nilai ' . $type . ' berhasil disimpan.');
    }
}
