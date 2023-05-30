<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('laravolt.indonesia.table_prefix').'districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->char('code', 7)->unique()->nullable();
            // $table->char('city_code', 4);
            $table->unsignedBigInteger('indonesia_cities_id')->nullable();
            $table->string('name', 255);
            $table->text('meta')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('indonesia_cities_id', 'indonesia_cities_id_fk_8515337')->references('id')->on('indonesia_cities');

            // $table->foreign('city_code')
            //     ->references('id')
            //     ->on(config('laravolt.indonesia.table_prefix').'cities')
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
        Schema::drop(config('laravolt.indonesia.table_prefix').'districts');
    }
}
