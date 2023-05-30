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
            $table->timestamps();
            $table->softDeletes();
        });
    }
}