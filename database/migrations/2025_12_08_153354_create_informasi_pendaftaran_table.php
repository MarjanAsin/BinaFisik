<?php

// database/migrations/2025_12_08_000006_create_informasi_pendaftaran_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('informasi_pendaftaran', function (Blueprint $table) {
            $table->id('id_informasi');
            $table->string('judul_informasi');
            $table->text('isi_informasi');
            $table->string('sumber_informasi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi_pendaftaran');
    }
};

