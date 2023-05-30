<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInputDataPaslonsTable extends Migration
{
    public function up()
    {
        Schema::table('pasangan_calons', function (Blueprint $table) {
            $table->unsignedBigInteger('kategori_pemilu_id')->nullable();
            $table->foreign('kategori_pemilu_id', 'kategori_pemilu_fk_8515255')->references('id')->on('kategori_pemilus');
            // $table->unsignedBigInteger('nama_partai_id')->nullable();
            // $table->foreign('nama_partai_id', 'nama_partai_fk_8515261')->references('id')->on('data_partais');
        });
    }
}