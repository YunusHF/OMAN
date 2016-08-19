<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusKeluarga extends Model
{
     protected $table = 'ref.status_keluarga';

    public function anggota_keluarga(){
    	return $this->hasMany('App\AnggotaKeluarga');
    }
}
