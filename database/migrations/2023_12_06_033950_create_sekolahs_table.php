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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('namasekolah');
            $table->string('kepsek');
            $table->string('akre');
            $table->string('npsn');
            $table->string('visi');
            $table->string('misi');
            $table->string('ekskul');
            $table->string('nohp');
            $table->string('lokasi');
            $table->string('berdiri');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
