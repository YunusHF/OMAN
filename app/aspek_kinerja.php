<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aspek_kinerja extends Model
{
    protected $table = 'ref.aspek_kinerja';
	public $timestamps = false;

	public function penilaian_kinerja() {
		return $this->belongsTo('App/penilaian_kinerja');
	}
}
