<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemberiTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('pemberi_tugas', function (Blueprint $table) {
            $table->increments('id_pemberi_tugas');
            $table->string('nama_pemberi_tugas');
            $table->string('status_pemberi_tugas');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pemberi_tugas');
    }
}
