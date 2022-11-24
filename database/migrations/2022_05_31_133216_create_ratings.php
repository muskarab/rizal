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
            $table->integer('aksesibilitas_jalan_utama');
            $table->integer('aksesibilitas_sekolah');
            $table->integer('aksesibilitas_rumah_sakit');
            $table->integer('aksesibilitas_pusat_perbelanjaan');
            $table->integer('lebar_jalan');
            $table->integer('kelebihan_tanah');
            $table->integer('fasilitas_umum');
            $table->integer('harga');
            $table->integer('jaringan_listrik');
            $table->integer('keamanan');
            $table->integer('kenyamanan');
            $table->integer('luast_tanah');
            $table->integer('tipe_rumah');
            $table->integer('bukan_daerah_banjir');
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
