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
            $table->boolean('is_registration_open_paud')->default(true);
            $table->boolean('is_registration_open_sd')->default(true);
            $table->boolean('is_registration_open_smp')->default(true);
            $table->boolean('is_registration_open_sma')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('konten_umum', function (Blueprint $table) {
            $table->dropColumn([
                'is_registration_open_paud', 
                'is_registration_open_sd', 
                'is_registration_open_smp', 
                'is_registration_open_sma'
            ]);
        });
    }
};
