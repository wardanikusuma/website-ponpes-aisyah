<?php

use App\Models\Seleksi;

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$seleksis = Seleksi::all();
$count = 0;

foreach ($seleksis as $seleksi) {
    if ($seleksi->status_administrasi !== null && 
        $seleksi->nilai_akademik !== null && 
        $seleksi->nilai_wawancara !== null && 
        $seleksi->nilai_alquran !== null) {
        
        $isLulus = $seleksi->status_administrasi && 
                   ($seleksi->status_status_akademik ?? true) && // assuming if status is not set but value is, it might be legacy
                   ($seleksi->status_status_wawancara ?? true) && 
                   ($seleksi->status_status_alquran ?? true);
        
        // Wait, I should use the threshold logic if status is missing
        $isLulus = $seleksi->status_administrasi && 
                   ($seleksi->status_akademik !== null ? $seleksi->status_akademik : ($seleksi->nilai_akademik >= 70)) &&
                   ($seleksi->status_wawancara !== null ? $seleksi->status_wawancara : ($seleksi->nilai_wawancara >= 70)) &&
                   ($seleksi->status_alquran !== null ? $seleksi->status_alquran : ($seleksi->nilai_alquran >= 70));

        $seleksi->status_kelulusan = $isLulus;
        $seleksi->status_final = $isLulus ? 'Lulus' : 'Tidak Lulus';
        $seleksi->save();
        $count++;
    }
}

echo "Updated $count records.\n";
