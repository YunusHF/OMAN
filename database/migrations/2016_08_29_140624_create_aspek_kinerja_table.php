<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspekKinerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('ref.aspek_kinerja', function (Blueprint $table) {
            $table->increments('id_aspek_kinerja');
            $table->string('aspek_kinerja');
            $table->integer('bobot_nilai');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ref.aspek_kinerja');
    }
}
