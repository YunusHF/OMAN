<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    //
    protected $table = 'rapat';
    protected $primaryKey = 'id_rapat';
    public $timestamps = false;

    protected $fillable = ['nama_rapat', 'lokasi_rapat', 'peserta_rapat', 'tanggal_rapat', 'jam_rapat', 'agenda_rapat', 'hasil_rapat'];
}
