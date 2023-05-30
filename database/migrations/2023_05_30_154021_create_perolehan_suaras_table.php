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
        Schema::create('perolehan_suaras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('result')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('kategori_pemilu_id')->nullable();

            $table->foreign('user_id', 'user_fk_8515344')->references('id')->on('users');
            $table->foreign('kategori_pemilu_id', 'kategori_pemilu_fk_8515345')->references('id')->on('kategori_pemilus');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perolehan_suaras');
    }
};
