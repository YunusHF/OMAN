<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';

    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'nomor_hp', 'email',
    						'pendidikan_terakhir_id', 'tanggal_ijazah', 'status_perkawinan_id', 'nomor_kartu_keluarga', 'jumlah_anak', 'divisi_id', 'jabatan_id',
    						'tanggal_mulai_kerja', 'akun_skype', 'nomor_ktp', 'npwp', 'foto'];

    public $timestamps = false;

    public function keluarga() {
		return $this->belongsTo('App\Keluarga');
	}

	public function divisi() {
		return $this->belongsTo('App\Divisi');
	}

    public function jabatan() {
        return $this->belongsTo('App\Jabatan');
    }

    public function pendidikan_terakhir() {
        return $this->belongsTo('App\PendidikanTerakhir');
    }

     public function status_perkawinan() {
        return $this->belongsTo('App\StatusPerkawinan');
    }

    public function todolist() {
        return $this->hasMany('App\TodoList');
    }


}
