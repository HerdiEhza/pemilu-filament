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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('locale')->nullable();
            $table->string('akun_google')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('nomor_hp')->nullable()->unique();
            $table->string('nomor_ktp')->nullable()->unique();
            $table->unsignedBigInteger('tps_id')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tps_id', 'tps_fk_8515445')->references('id')->on('data_tps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
