<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CobaController extends Controller
{
    public function coba($id)
    {
        $divisi = Divisi::find($id);
        // return view('biodata.create')->withDivisi($divisi);
        echo $divisi->divisi;


    }

}
