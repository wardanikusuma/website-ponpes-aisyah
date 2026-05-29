<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Database\Eloquent\Relations\Relation::morphMap([
            'paud' => \App\Models\PendaftaranPaud::class,
            'sma_smp_sd' => \App\Models\PendaftaranSmaSmpSd::class,
        ]);

        // Auto-create storage symlink jika belum ada atau rusak (misal setelah copy folder)
        $link = public_path('storage');
        $target = storage_path('app/public');

        if (!is_link($link)) {
            // Hapus folder/file biasa yang menghalangi, jika ada
            if (file_exists($link) || is_dir($link)) {
                if (is_dir($link)) {
                    rmdir($link);
                } else {
                    unlink($link);
                }
            }

            // Buat symlink (Windows & Linux compatible)
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                exec('mklink /D "' . $link . '" "' . $target . '"');
            } else {
                symlink($target, $link);
            }
        }
    }
}