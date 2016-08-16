<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'ref.divisi';

    public function karyawan(){
    	return $this->hasMany('App\Karyawan');
    }
}
