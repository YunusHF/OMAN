<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
{
    protected $table = 'anggota_keluarga';
    protected $primaryKey = 'id_anggota_keluarga';

    protected $fillable = ['nama_anggota_keluarga', 'status_keluarga_id', 'nomor_kartu_keluarga'];

    public $timestamps = false;

    public function keluarga() {
		return $this->belongsTo('App\Keluarga');
	}

	public function statuskeluarga() {
		return $this->belongsTo('App\StatusKeluarga');
	}
}
