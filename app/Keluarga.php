<?php

namespace App;

use App\Keluarga;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';
    protected $primaryKey = 'id_keluarga';

    protected $fillable = ['kepala_keluarga', 'no_kartu_keluarga'];

    public $timestamps = false;

    public function karyawan() {
		return $this->hasMany('App\Karyawan');
	}

	public function anggota_keluarga() {
		return $this->hasMany('App\AnggotaKeluarga');
	}
}
