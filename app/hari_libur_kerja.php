<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hari_libur_kerja extends Model
{
    protected $table = 'hari_libur_kerja';
	protected $primaryKey = 'id_libur';
	public $timestamps = false;
	public $fillable = [
		'tanggal_libur', 
		'keterangan_libur'
	];
}
