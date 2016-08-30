<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('ref.lokasi', function (Blueprint $table) {
            $table->increments('id_lokasi');
            $table->string('nama_lokasi');
            $table->string('status_lokasi');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ref.lokasi');
    }
}
