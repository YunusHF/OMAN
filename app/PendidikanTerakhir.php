<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanTerakhir extends Model
{
     protected $table = 'ref.pendidikan_terakhir';

    public function karyawan(){
    	return $this->hasMany('App\Karyawan');
    }
}
