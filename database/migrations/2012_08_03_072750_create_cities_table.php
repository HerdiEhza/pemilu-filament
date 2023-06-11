<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('laravolt.indonesia.table_prefix').'cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->char('code', 4)->unique()->nullable();
            // $table->char('province_code', 2);
            $table->unsignedBigInteger('indonesia_provinces_id')->nullable();
            $table->string('name', 255);
            $table->text('meta')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('indonesia_provinces_id', 'indonesia_provinces_id_fk_8515336')->references('id')->on('indonesia_provinces');

            // $table->foreign('province_code')
            //     ->references('id')
            //     ->on(config('laravolt.indonesia.table_prefix').'provinces')
            //     ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('laravolt.indonesia.table_prefix').'cities');
    }
}
