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
        Schema::create('data_partais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor_urut')->nullable();
            $table->string('nama_partai');
            $table->string('singkatan')->nullable();
            $table->string('pemimpin_partai')->nullable();
            $table->string('logo_partai')->nullable();
            $table->boolean('is_partai_nasional')->default(1)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_partais');
    }
};
