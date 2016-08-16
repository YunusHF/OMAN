<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';

    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_hp', 'email',
    						'pendidikan_terakhir', 'tanggal_ijazah', 'status_perkawinan', 'nomor_kartu_keluarga', 'jumlah_anak', 'divisi', 'jabatan',
    						'tanggal_mulai_kerja', 'tanggal_keluar', 'skype', 'no_ktp', 'npwp', 'foto'];

    public $timestamps = false;

    public function keluarga() {
		return $this->hasOne('App\Keluarga', 'nomor_kartu_keluarga');
	}

	public function divisi() {
		return $this->belongsTo('App\Divisi');
	}
}
