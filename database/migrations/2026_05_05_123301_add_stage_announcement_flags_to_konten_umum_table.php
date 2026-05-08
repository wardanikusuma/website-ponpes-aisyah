<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('konten_umum', function (Blueprint $table) {
            $jenjangs = ['paud', 'sd', 'smp', 'sma'];
            $stages = ['akademik', 'wawancara', 'alquran'];

            foreach ($jenjangs as $jenjang) {
                foreach ($stages as $stage) {
                    $table->boolean('is_announced_' . $stage . '_' . $jenjang)->default(false);
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konten_umum', function (Blueprint $table) {
            $jenjangs = ['paud', 'sd', 'smp', 'sma'];
            $stages = ['akademik', 'wawancara', 'alquran'];

            foreach ($jenjangs as $jenjang) {
                foreach ($stages as $stage) {
                    $table->dropColumn('is_announced_' . $stage . '_' . $jenjang);
                }
            }
        });
    }
};
