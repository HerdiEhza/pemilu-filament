<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('laravolt.indonesia.table_prefix').'villages', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->char('code', 10)->unique()->nullable();
            // $table->char('district_code', 7);
            $table->unsignedBigInteger('indonesia_districts_id')->nullable();
            $table->string('name', 255);
            $table->text('meta')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('indonesia_districts_id', 'indonesia_districts_id_fk_8515337')->references('id')->on('indonesia_districts');

            // $table->foreign('district_code')
            //     ->references('id')
            //     ->on(config('laravolt.indonesia.table_prefix').'districts')
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
        Schema::drop(config('laravolt.indonesia.table_prefix').'villages');
    }
}
