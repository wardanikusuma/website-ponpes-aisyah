<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendaftaranPaud;
use App\Models\PendaftaranSmaSmpSd;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function generate(Request $request)
    {
        $jenjang = $request->query('jenjang');
        
        $data = collect();

        if (!$jenjang || $jenjang == 'PAUD') {
            $paud = PendaftaranPaud::all()->map(function($item) {
                $item->kategori = 'PAUD';
                return $item;
            });
            $data = $data->concat($paud);
        }

        if (!$jenjang || in_array($jenjang, ['SD', 'SMP', 'SMA'])) {
            $query = PendaftaranSmaSmpSd::query();
            if ($jenjang && $jenjang != 'ALL') {
                $query->where('jenjang', $jenjang);
            }
            $school = $query->get()->map(function($item) {
                $item->kategori = $item->jenjang;
                return $item;
            });
            $data = $data->concat($school);
        }

        $pdf = Pdf::loadView('admin.laporan.pdf', [
            'data' => $data,
            'jenjang' => $jenjang ?? 'SEMUA JENJANG',
            'tanggal' => date('d F Y')
        ]);

        return $pdf->download('Laporan_Pendaftaran_' . ($jenjang ?? 'SEMUA') . '_' . date('Ymd') . '.pdf');
    }
}
