<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->increments('id_cuti');
            $table->string('email');
             $table->string('alasan_cuti');
              $table->date('tanggal_mulai_cuti');
               $table->date('tanggal_selesai_cuti');
                $table->integer('persutujuan_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cuti');
    }
}
