<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPerkawinan extends Model
{
     protected $table = 'ref.status_perkawinan';

    public function karyawan(){
    	return $this->hasMany('App\Karyawan');
    }
}
