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
            $table->string('ppdb_bank_name')->nullable();
            $table->string('ppdb_bank_account')->nullable();
            $table->string('ppdb_bank_owner')->nullable();
            $table->string('ppdb_nominal')->nullable();
        });

        Schema::table('pendaftaran_paud', function (Blueprint $table) {
            $table->string('file_bukti_bayar')->nullable();
        });

        Schema::table('pendaftaran_sma_smp_sd', function (Blueprint $table) {
            $table->string('file_bukti_bayar')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('konten_umum', function (Blueprint $table) {
            $table->dropColumn(['ppdb_bank_name', 'ppdb_bank_account', 'ppdb_bank_owner', 'ppdb_nominal']);
        });

        Schema::table('pendaftaran_paud', function (Blueprint $table) {
            $table->dropColumn('file_bukti_bayar');
        });

        Schema::table('pendaftaran_sma_smp_sd', function (Blueprint $table) {
            $table->dropColumn('file_bukti_bayar');
        });
    }
};
