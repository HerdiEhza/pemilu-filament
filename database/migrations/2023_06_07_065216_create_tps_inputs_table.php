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
        Schema::create('tps_inputs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('tps_id');
            $table->string('kategori_pemilu_id');
            $table->string('jumlah_suara_sah')->nullable();
            $table->string('jumlah_suara_tidak_sah')->nullable();
            $table->boolean('is_active')->default(1);
            $table->unsignedBigInteger('data_dapil_id')->nullable();
            $table->timestamps();

            $table->foreign('data_dapil_id', 'dapil_fk_8873445')->references('id')->on('data_dapils');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tps_inputs');
    }
};
