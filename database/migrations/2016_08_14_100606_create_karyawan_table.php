<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id_karyawan');
            $table->string('nama');
            $table->string('no_induk_pegawai');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_perkawinan');
            $table->string('jumlah_anak');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('foto');
            $table->string('divisi');
            $table->date('tanggal_mulai_kerja');
            $table->date('tanggal_keluar');
            $table->string('skype')->nullable();
            $table->string('npwp')->nullable();
            $table->string('no_ktp');
            $table->string('pendidikan_terakhir');
            $table->date('tanggal_ijazah');
            $table->string('no_kartu_keluarga')->unsigned();
            $table->foreign('no_kartu_keluarga')->references('no_kartu_keluarga')->on('keluarga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('karyawan');
    }

}
