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
            $table->integer('jabatan_id')->unsigned();
            $table->foreign('jabatan_id')->references('id_jabatan')->on('ref.jabatan');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('foto');
            $table->integer('divisi_id')->unsigned();
            $table->foreign('divisi_id')->references('id_divisi')->on('ref.divisi');
            $table->date('tanggal_mulai_kerja');
            $table->date('tanggal_keluar');
            $table->string('skype')->nullable();
            $table->string('npwp')->nullable();
            $table->string('no_ktp');
            $table->integer('pendidikan_terakhir_id')->unsigned();
            $table->foreign('pendidikan_terakhir_id')->references('id_pendidikan_terakhir')->on('ref.pendidikan_terakhir');
            $table->date('tanggal_ijazah');
            $table->string('nomor_kartu_keluarga')->unsigned();
            $table->foreign('nomor_kartu_keluarga')->references('no_kartu_keluarga')->on('keluarga');
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
