<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aspek_kinerja extends Model
{
    protected $table = 'aspek_kinerja';
	protected $primaryKey = 'id_aspek_kinerja';
	public $timestamps = false;

	public function penilaian_kinerja() {
		return $this->hasMany('App/penilaian_kinerja');
	}
}
