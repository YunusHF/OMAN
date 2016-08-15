<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presensi_pulang extends Model
{
    protected $table = 'presensi';
	protected $primaryKey = 'id_presensi';
	public $timestamps = false;
}
