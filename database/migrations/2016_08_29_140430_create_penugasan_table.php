<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenugasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('penugasan', function (Blueprint $table) {
            $table->increments('id_tugas');
            $table->string('perihal_tugas');
            $table->string('nama_kegiatan');
            $table->integer('penghasilan_tugas');
            $table->date('tanggal_berangkat_tugas');
            $table->date('tanggal_pulang_tugas');
            $table->integer('lokasi_tugas_id');
            $table->integer('pemberi_tugas_id');
             $table->string('email');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penugasan');
    }
}
