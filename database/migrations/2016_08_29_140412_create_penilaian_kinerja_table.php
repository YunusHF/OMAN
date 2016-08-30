<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaianKinerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('penilaian_kinerja', function (Blueprint $table) {
            $table->increments('id_kinerja');
            $table->string('email');
            $table->string('aspek_kinerja_id');
            $table->date('tanggal_kinerja');
            $table->integer('nilai_kinerja');
            $table->text('keterangan_kinerja')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penilaian_kinerja');
    }
}
