<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('residence_id');
            $table->integer('aksesibilitas');
            $table->integer('fasilitas_umum');
            $table->integer('keamanan');
            $table->integer('harga');
            $table->integer('lebar_jalan');
            $table->integer('overall');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('residence_id')->references('id')->on('residences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
