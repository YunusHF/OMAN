<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penugasan extends Model
{
    protected $table = 'penugasan';
	protected $primaryKey = 'id_penugasan';
	public $timestamps = false;
    protected $fillable = [
	    'email', 
	    'tanggal', 
	    'jam_masuk', 
	    'jam_keluar', 
	    'status_presensi'
    ];
}
