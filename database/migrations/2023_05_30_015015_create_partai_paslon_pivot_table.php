<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartaiPaslonPivotTable extends Migration
{
    public function up()
    {
        Schema::create('data_partai_pasangan_calon', function (Blueprint $table) {
            $table->unsignedBigInteger('nama_pasangan_calon_id');
            $table->foreign('nama_pasangan_calon_id', 'paslon_id_fk_8515093')->references('id')->on('pasangan_calons')->onDelete('cascade');
            $table->unsignedBigInteger('data_partai_id');
            $table->foreign('data_partai_id', 'partai_id_fk_8515093')->references('id')->on('data_partais')->onDelete('cascade');
        });
    }
}
