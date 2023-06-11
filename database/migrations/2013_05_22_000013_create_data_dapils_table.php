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
        Schema::create('data_dapils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_dapil');

            $table->unsignedBigInteger('kategori_pemilu_id')->nullable();
            $table->foreign('kategori_pemilu_id')->references('id')->on('kategori_pemilus');

            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on(config('laravolt.indonesia.table_prefix').'provinces')->onDelete('cascade');
            $table->unsignedBigInteger('cities_id')->nullable();
            $table->foreign('cities_id')->references('id')->on(config('laravolt.indonesia.table_prefix').'cities')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_dapils');
    }
};
