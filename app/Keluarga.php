<?php

namespace App;

use App\Keluarga;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';
    protected $primaryKey = 'no_kartu_keluarga';

    protected $fillable = ['kepala_keluarga', 'no_kartu_keluarga'];

    public $timestamps = false;

    public function karyawan() {
		return $this->belongsTo('App\Karyawan', 'nomor_kartu_keluarga');
	}
}
