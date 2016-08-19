<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodolistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('todolist', function (Blueprint $table) {
            $table->increments('id_todolist');
            $table->string('todolist');
             $table->integer('karyawan_id')->unsigned();
            $table->foreign('karyawan_id')->references('id_karyawan')->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todolist');
    }
}
