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
            $table->integer('kondisi_inventaris_id');
            $table->integer('umur_ekonomis');
            $table->date('tanggal_perolehan');
            $table->date('tanggal_tutupbuku');
            $table->integer('jumlah_barang');
            $table->integer('nilai_perolehan');
            $table->text('spesifikasi_inventaris');
            $table->integer('lokasi_invetaris_id');
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
