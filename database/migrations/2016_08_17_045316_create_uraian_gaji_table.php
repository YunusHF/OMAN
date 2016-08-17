<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUraianGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref.uraian_gaji', function (Blueprint $table) {
            $table->increments('id_uraian_gaji');
            $table->string('nama_uraian_gaji');
            $table->string('status_uraian_gaji');
            $table->string('jenis_uraian_gaji');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ref.uraian_gaji');
    }
}
