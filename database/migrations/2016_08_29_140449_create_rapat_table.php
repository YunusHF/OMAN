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
        Schema::create('rapat', function (Blueprint $table) {
            $table->increments('id_rapat');
            $table->string('nama_rapat');
            $table->text('peserta_rapat');
            $table->integer('lokasi_rapat_id');
            $table->date('tanggal_rapat');
            $table->time('jam_mulai');
            $table->text('jam_selesai')->nullable();
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
        Schema::drop('rapat');
    }
}
