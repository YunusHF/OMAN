<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanTerakhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('ref.pendidikan_terakhir', function (Blueprint $table) {
            $table->increments('id_pendidikan_terakhir');
            $table->string('pendidikan_terakhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ref.pendidikan_terakhir');
    }
}
