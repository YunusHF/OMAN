<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('ref.jenis_dokumen', function (Blueprint $table) {
            $table->increments('id_jenis_dokumen');
            $table->string('jenis_dokumen');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ref.jenis_dokumen');
    }
}
