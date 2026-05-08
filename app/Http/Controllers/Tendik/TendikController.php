<?php

namespace App\Http\Controllers\Tendik;

use App\Http\Controllers\Controller;
use App\Models\TugasTendik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TendikController extends Controller
{
    public function index()
    {
        $tendikId = Auth::id();
        
        $seleksiList = \App\Models\Seleksi::where('id_tendik_akademik', $tendikId)
            ->orWhere('id_tendik_wawancara', $tendikId)
            ->get();

        $total_tugas = 0;
        $tugas_selesai = 0;
        $upcoming_tasks = collect();

        foreach ($seleksiList as $seleksi) {
            if ($seleksi->id_tendik_akademik == $tendikId) {
                $total_tugas++;
                if ($seleksi->nilai_akademik !== null) $tugas_selesai++;
                
                $upcoming_tasks->push((object)[
                    'seleksi' => $seleksi,
                    'type' => 'akademik',
                    'jadwal' => $seleksi->jadwal_akademik
                ]);
            }

            if ($seleksi->id_tendik_wawancara == $tendikId) {
                $total_tugas++;
                if ($seleksi->nilai_wawancara !== null) $tugas_selesai++;
                
                $upcoming_tasks->push((object)[
                    'seleksi' => $seleksi,
                    'type' => 'wawancara',
                    'jadwal' => $seleksi->jadwal_wawancara
                ]);
            }

            if ($seleksi->id_tendik_alquran == $tendikId) {
                $total_tugas++;
                if ($seleksi->nilai_alquran !== null) $tugas_selesai++;
                
                $upcoming_tasks->push((object)[
                    'seleksi' => $seleksi,
                    'type' => 'alquran',
                    'jadwal' => $seleksi->jadwal_alquran
                ]);
            }
        }

        $upcoming_tasks = $upcoming_tasks->sortByDesc(function($task) {
            return $task->seleksi->created_at;
        })->take(5);

        return view('tendik.dashboard', compact('total_tugas', 'tugas_selesai', 'upcoming_tasks'));
    }
}
