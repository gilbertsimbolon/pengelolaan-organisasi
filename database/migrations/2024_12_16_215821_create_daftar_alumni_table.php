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
        Schema::create('daftar_alumni', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('jenis_kelamin');
            $table->string('tempat_tanggal_lahir');
            $table->string('asal');
            $table->string('stambuk');
            $table->string('tahun_bergabung');
            $table->string('program_studi');
            $table->string('fakultas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_alumni');
    }
};
