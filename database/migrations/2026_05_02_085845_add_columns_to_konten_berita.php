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
        Schema::table('konten_berita', function (Blueprint $blueprint) {
            if (!Schema::hasColumn('konten_berita', 'penulis')) {
                $blueprint->string('penulis', 100)->nullable()->after('judul');
            }
            if (!Schema::hasColumn('konten_berita', 'slug')) {
                $blueprint->string('slug', 200)->nullable()->after('judul');
            }
            // Map existing columns if they are named differently than what I used
            // but for now I'll just keep the existing ones and handle them in code
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konten_berita', function (Blueprint $blueprint) {
            $blueprint->dropColumn(['penulis', 'slug']);
        });
    }
};
