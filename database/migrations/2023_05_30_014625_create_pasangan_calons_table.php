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
            // $table->json('data_partai_id')->nullable();
            $table->unsignedBigInteger('data_partai_id');
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_tinggal')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('data_partai_id')->references('id')->on('data_partais')->onDelete('cascade');
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
