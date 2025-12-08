<?php

// database/migrations/2025_12_08_000002_create_pelatih_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pelatih', function (Blueprint $table) {
            $table->id('id_pelatih');
            $table->string('nama_pelatih');
            $table->string('email')->unique();
            $table->string('no_hp', 20)->nullable();
            $table->string('pekerjaan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pelatih');
    }
};

