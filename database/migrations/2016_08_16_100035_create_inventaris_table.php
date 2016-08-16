<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('inventaris', function (Blueprint $table){
            $table->increments('id_barang');
            $table->string('nama_barang');
            $table->integer('asal_inventaris_id');
            $table->integer('status_inventaris_id');
            $table->integer('umur_ekonomis');
            $table->date('tgl_beli');
            $table->date('tgl_tutupbuku');
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
        Schema::drop('inventaris');
    }
}
