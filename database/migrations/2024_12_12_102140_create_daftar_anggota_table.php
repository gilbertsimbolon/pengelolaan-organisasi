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
        Schema::create('daftar_anggota', function (Blueprint $table) {
            $table->id();
            $table->string('foto_anggota');
            $table->string('nama');
            $table->string('asal');
            $table->string('tempat_tanggal_lahir');
            $table->string('tahun_masuk_universitas');
            $table->string('tahun_masuk_organisasi');
            $table->string('program_studi');
            $table->string('fakultas');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('instagram');
            $table->enum('jabatan', ['anggota', 'pendiri']);
            $table->string('prestasi_organisasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_anggota');
    }
};
