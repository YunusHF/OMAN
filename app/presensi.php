<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    protected $table = 'presensi';
	protected $primaryKey = 'id_presensi';
	public $timestamps = false;
    protected $fillable = [
	    'email', 
	    'tanggal', 
	    'jam_masuk', 
	    'jam_keluar', 
	    'status_presensi'
    ];
}
