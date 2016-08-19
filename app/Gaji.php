<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    //
    protected $table = 'gaji';
    protected $primaryKey = 'id_gaji';
    public $timestamps = false;

    protected $fillable = ['email', 'uraian_gaji_id', 'jumlah', 'tanggal_gaji'];

    public function uraian_gaji() {
    	return $this->hasOne('App/uraian_gaji');
    }
}
