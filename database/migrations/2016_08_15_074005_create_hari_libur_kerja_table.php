<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHariLiburKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hari_libur_kerja', function (Blueprint $table) {
            $table->increments('id_libur');
            $table->date('tanggal_libur');
            $table->string('keterangan_libur', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hari_libur_kerja');
    }
}
