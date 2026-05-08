<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('super_admin', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->enum('jenjang', ['PAUD', 'SD', 'SMP', 'SMA']);
            $table->string('nip', 30)->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::create('tendik', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->enum('jenjang', ['PAUD', 'SD', 'SMP', 'SMA']);
            $table->string('nip', 30)->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tendik');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('super_admin');
    }
};
