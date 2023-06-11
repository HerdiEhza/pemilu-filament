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
            $table->unsignedBigInteger('pasangan_calon_id');
            $table->string('nama_pasangan_calon');
            $table->string('perolehan_suara')->default('0');
            $table->unsignedBigInteger('tps_input_id');
            $table->boolean('is_active')->default(1);
            $table->unsignedBigInteger('data_dapil_id')->nullable();
            $table->timestamps();

            $table->foreign('pasangan_calon_id')->references('id')->on('pasangan_calons')->onDelete('cascade');
            $table->foreign('tps_input_id')->references('id')->on('tps_inputs')->onDelete('cascade');
            $table->foreign('data_dapil_id', 'dapil_fk_8515445')->references('id')->on('data_dapils');
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
