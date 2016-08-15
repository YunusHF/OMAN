<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';

    public function keluarga() {
		return $this->hasOne('App\Keluarga', 'id_karyawan');
	}
}
