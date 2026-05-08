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
            foreach ($jenjangs as $jenjang) {
                $table->boolean('is_announced_administrasi_' . $jenjang)->default(false);
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
            foreach ($jenjangs as $jenjang) {
                $table->dropColumn('is_announced_administrasi_' . $jenjang);
            }
        });
    }
};
