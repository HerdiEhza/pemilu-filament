<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDataTpsTable extends Migration
{
    public function up()
    {
        Schema::table('data_tps', function (Blueprint $table) {
            $table->unsignedBigInteger('provinsi_id')->nullable();
            $table->foreign('provinsi_id', 'provinsi_fk_8515336')->references('id')->on('indonesia_provinces');
            $table->unsignedBigInteger('kabupaten_kota_id')->nullable();
            $table->foreign('kabupaten_kota_id', 'kabupaten_kota_fk_8515337')->references('id')->on('indonesia_cities');
            $table->unsignedBigInteger('kecamatan_id')->nullable();
            $table->foreign('kecamatan_id', 'kecamatan_fk_8515338')->references('id')->on('indonesia_districts');
            $table->unsignedBigInteger('kelurahan_desa_id')->nullable();
            $table->foreign('kelurahan_desa_id', 'kelurahan_desa_fk_8515339')->references('id')->on('indonesia_villages');
        });
    }
}