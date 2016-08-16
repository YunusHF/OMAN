<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    //
    protected $table = 'inventaris';
    protected $primaryKey = 'id_barang';
    public $timestamps = false;

    protected $fillable = ['nama_barang', 'asal_inventaris_id', 'status_inventaris_id', 'umur_ekonomis', 'tgl_beli', 'tgl_tutupbuku', 'jumlah_barang'];


}
