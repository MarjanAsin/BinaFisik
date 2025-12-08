<?php

// database/migrations/2025_12_08_000004_create_program_latihan_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('program_latihan', function (Blueprint $table) {
            $table->id('id_program');

            // relasi ke jadwal
            $table->unsignedBigInteger('id_jadwal');

            $table->string('nama_latihan');
            $table->text('deskripsi')->nullable();
            $table->integer('durasi')->nullable(); // misal: menit

            $table->timestamps();

            $table->foreign('id_jadwal')
                  ->references('id_jadwal')
                  ->on('jadwal_latihan')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_latihan');
    }
};
