<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
   protected $table = 'ref.jabatan';

    public function karyawan(){
    	return $this->hasMany('App\Karyawan');
    }
}
