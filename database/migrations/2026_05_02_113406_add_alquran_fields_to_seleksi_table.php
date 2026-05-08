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
            $table->unsignedBigInteger('id_tendik_alquran')->nullable()->after('status_alquran');
            $table->text('catatan_alquran')->nullable()->after('id_tendik_alquran');
        });
    }

    public function down(): void
    {
        Schema::table('seleksi', function (Blueprint $table) {
            $table->dropColumn(['id_tendik_alquran', 'catatan_alquran']);
        });
    }
};
