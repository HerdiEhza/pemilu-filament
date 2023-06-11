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
        Schema::create('pasangan_calons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor_urut')->nullable();
            $table->string('foto_path')->nullable();
            $table->string('nama_pasangan_calon');
            $table->json('nama_partai_id')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_tinggal')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasangan_calons');
    }
};
