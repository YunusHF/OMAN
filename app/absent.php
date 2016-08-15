<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absent extends Model
{
    protected $table = 'presensi';
	protected $primaryKey = 'id_presensi';
	public $timestamps = false;
    protected $fillable = [
    	'email', 
    	'tanggal', 
    	'status_presensi'
    ];
}
