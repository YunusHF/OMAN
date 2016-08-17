<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penilaian_kinerja extends Model
{
    protected $table = 'penilaian_kinerja';
	protected $primaryKey = 'id_kinerja';
	public $timestamps = false;
    protected $fillable = ['email', 'aspek_kinerja_id', 'tanggal_kinerja', 'nilai_kinerja', 'keterangan_kinerja'];
}
