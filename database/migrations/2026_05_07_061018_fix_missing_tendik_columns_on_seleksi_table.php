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
        Schema::table('seleksi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tendik_akademik')->nullable()->after('status_akademik');
            $table->text('catatan_akademik')->nullable()->after('id_tendik_akademik');
            $table->unsignedBigInteger('id_tendik_wawancara')->nullable()->after('status_wawancara');
            $table->text('catatan_wawancara')->nullable()->after('id_tendik_wawancara');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('seleksi', function (Blueprint $table) {
            $table->dropColumn(['id_tendik_akademik', 'catatan_akademik', 'id_tendik_wawancara', 'catatan_wawancara']);
        });
    }
};
