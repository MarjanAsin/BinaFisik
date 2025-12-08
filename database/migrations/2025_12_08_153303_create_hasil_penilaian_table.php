<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hasil_penilaian', function (Blueprint $table) {
            $table->id('id_hasil');

            // relasi ke users (peserta)
            $table->foreignId('user_id')
                  ->constrained('users')   // -> references('id')->on('users')
                  ->onDelete('cascade');

            $table->string('hasil')->nullable();      // misal "12 menit", "45x", dsb
            $table->date('tanggal_tes');
            $table->text('keterangan')->nullable();
            $table->integer('nilai')->nullable();     // nilai numerik, bisa diubah ke decimal kalau perlu

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hasil_penilaian');
    }
};
