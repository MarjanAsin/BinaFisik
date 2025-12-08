<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// database/migrations/2025_12_08_000003_create_jadwal_latihan_table.php
return new class extends Migration {
    public function up(): void
    {
        Schema::create('jadwal_latihan', function (Blueprint $table) {
            $table->id('id_jadwal');

            // relasi ke users (peserta)
            $table->foreignId('user_id')
                  ->constrained('users')   // references id on users
                  ->onDelete('cascade');

            $table->text('data_diri')->nullable();
            $table->date('tanggal_mulai');
            $table->string('lokasi')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_latihan');
    }
};
