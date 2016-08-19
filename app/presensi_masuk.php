<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presensi_masuk extends Model
{
    protected $table = 'presensi';
	protected $primaryKey = 'id_presensi';
	public $timestamps = false;
    protected $fillable = [
    	'email', 
    	'tanggal_presensi', 
    	'jam_masuk', 
    	'status_presensi_id'
    ];
}
