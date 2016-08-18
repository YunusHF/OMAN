<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uraian_gaji extends Model
{
    protected $table = 'ref.uraian_gaji';
    protected $primaryKey = 'id_uraian_gaji';
	public $timestamps = false;

	public function gaji() {
		return $this->belongsTo('App/Gaji');
	}
}