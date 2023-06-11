<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTpsTable extends Migration
{
    public function up()
    {
        Schema::create('data_tps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_tps')->nullable();

            $table->unsignedBigInteger('data_dapil_id');
            $table->foreign('data_dapil_id')->references('id')->on('data_dapils')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }
}
