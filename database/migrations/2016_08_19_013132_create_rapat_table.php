<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rapat', function (Blueprint $table) {
            $table->increments('id_rapat');
            $table->string('nama_rapat', 255);
            $table->string('lokasi_rapat', 255);
            $table->string('peserta_rapat', 255);
            $table->date('tanggal_rapat');
            $table->time('jam_rapat');
            $table->text('agenda_rapat');
            $table->text('hasil_rapat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('rapat');
    }
}