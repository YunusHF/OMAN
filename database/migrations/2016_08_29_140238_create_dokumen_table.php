<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->increments('id_dokumen');
            $table->integer('jenis_dokumen_id');
            $table->integer('lokasi_dokumen_id');
            $table->integer('karyawan_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dokumen');
    }
}
