<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('keluarga', function (Blueprint $table) {
            $table->increments('id_keluarga');
            $table->string('no_kartu_keluarga');
            $table->string('kepala_keluarga');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('keluarga');
    }
}
