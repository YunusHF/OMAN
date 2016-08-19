<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $table = 'ref.divisi';

    public function karyawan(){
    	return $this->belongsTo('App\Karyawan');
    }
}
