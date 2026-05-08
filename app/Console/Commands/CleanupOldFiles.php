<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PendaftaranPaud;
use App\Models\PendaftaranSmaSmpSd;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class CleanupOldFiles extends Command
{
    protected $signature = 'cleanup:old-files';
    protected $description = 'Hapus berkas pendaftaran yang sudah lebih dari 1 tahun untuk menghemat storage';

    public function handle()
    {
        $threshold = Carbon::now()->subYear();
        $count = 0;

        // Cleanup PAUD
        $pauds = PendaftaranPaud::where('created_at', '<', $threshold)->get();
        foreach ($pauds as $paud) {
            $this->deleteFiles($paud);
            $paud->delete();
            $count++;
        }

        // Cleanup Sekolah
        $sekolahs = PendaftaranSmaSmpSd::where('created_at', '<', $threshold)->get();
        foreach ($sekolahs as $sekolah) {
            $this->deleteFiles($sekolah);
            $sekolah->delete();
            $count++;
        }

        $this->info("Cleanup berhasil. $count data lama dihapus.");
    }

    private function deleteFiles($model)
    {
        $fileFields = ['file_akta_lahir', 'file_kk', 'file_nisn', 'file_ktp_ayah', 'file_ktp_ibu', 'file_rapor', 'file_prestasi', 'file_ijazah'];
        foreach ($fileFields as $field) {
            if ($model->$field && Storage::disk('public')->exists($model->$field)) {
                Storage::disk('public')->delete($model->$field);
            }
        }
    }
}
