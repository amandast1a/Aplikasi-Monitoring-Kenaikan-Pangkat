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
        Schema::create('form_fungsional', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->String('periode');
            $table->String('nama');
            $table->String('status');
            $table->String('nip');
            $table->String('golongan');
            $table->String('jabatan');
            $table->date('date');
            $table->datetime('time');
            $table->string('nomor_wa');
            $table->String('doc_suratPengantar');
            $table->String('doc_skPangkat');
            $table->String('doc_pakKonvensional');
            $table->String('doc_pakIntegrasi');
            $table->String('doc_pakKonversi');
            $table->String('doc_penilaian2022');
            $table->String('doc_penilaian2023');
            $table->String('doc_jabatanAtasan');
            $table->String('doc_jabatanLama');
            $table->String('doc_jabatanTerakhir');
            $table->String('doc_pendidik');
            $table->String('doc_uji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_fungsional');
    }
};
