<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lembur extends Model
{
    protected $table = 'lembur';
	protected $primaryKey = 'id_lembur';
	public $timestamps = false;
	protected $fillable = [
		'email', 
		'tanggal_lembur', 
		'jam_mulai', 
		'jam_selesai', 
		'persetujuan_id', 
		'uraian_lembur'
	];
}
