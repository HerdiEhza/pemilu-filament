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
        Schema::create('tps_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tps_id');
            $table->unsignedBigInteger('tps_provinsi_id');
            $table->unsignedBigInteger('tps_kab_id');
            $table->unsignedBigInteger('tps_kec_id');
            $table->unsignedBigInteger('tps_kel_id');
            $table->unsignedBigInteger('pasangan_calon_id');
            $table->string('nama_pasangan_calon');
            $table->string('perolehan_suara')->default('0');
            $table->unsignedBigInteger('tps_input_id');
            // $table->unsignedBigInteger('data_partai_id');
            $table->json('data_partai_id');
            $table->boolean('is_active')->default(1);
            $table->unsignedBigInteger('data_dapil_id')->nullable();
            $table->unsignedBigInteger('kategori_pemilu_id')->nullable();
            $table->timestamps();

            $table->foreign('tps_id')->references('id')->on('data_tps')->onDelete('cascade');
            $table->foreign('tps_provinsi_id')->references('id')->on('indonesia_provinces')->onDelete('cascade');
            $table->foreign('tps_kab_id')->references('id')->on('indonesia_cities')->onDelete('cascade');
            $table->foreign('tps_kec_id')->references('id')->on('indonesia_districts')->onDelete('cascade');
            $table->foreign('tps_kel_id')->references('id')->on('indonesia_villages')->onDelete('cascade');
            $table->foreign('pasangan_calon_id')->references('id')->on('pasangan_calons')->onDelete('cascade');
            $table->foreign('tps_input_id')->references('id')->on('tps_inputs')->onDelete('cascade');
            // $table->foreign('data_partai_id')->references('id')->on('data_partais')->onDelete('cascade');
            $table->foreign('data_dapil_id', 'dapil_fk_897643')->references('data_dapil_id')->on('pasangan_calons');
            $table->foreign('kategori_pemilu_id', 'dapil_fk_89896743')->references('id')->on('kategori_pemilus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tps_results');
    }
};
