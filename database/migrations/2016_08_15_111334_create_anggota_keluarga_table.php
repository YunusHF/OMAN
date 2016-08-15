<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_keluarga', function (Blueprint $table) {
            $table->increments('id_anggota_keluarga');
            $table->string('nama_anggota_keluarga');
            $table->integer('status_keluarga_id')->unsigned();
            $table->foreign('status_keluarga_id')->references('id_status_keluarga')->on('ref.status_keluarga');
            $table->string('nmr_kartu_keluarga')->unsigned();
            $table->foreign('nmr_kartu_keluarga')->references('no_kartu_keluarga')->on('keluarga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anggota_keluarga');
    }
}
