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
            $table->boolean('is_announced_paud')->default(false);
            $table->boolean('is_announced_sd')->default(false);
            $table->boolean('is_announced_smp')->default(false);
            $table->boolean('is_announced_sma')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('konten_umum', function (Blueprint $table) {
            $table->dropColumn(['is_announced_paud', 'is_announced_sd', 'is_announced_smp', 'is_announced_sma']);
        });
    }
};
