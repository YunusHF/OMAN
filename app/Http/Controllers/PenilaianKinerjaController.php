<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\penilaian_kinerja;
use App\aspek_kinerja;

class PenilaianKinerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {
            $data_user = user::all();
            $data_aspek = aspek_kinerja::all();
            dd($data_aspek);
            return view('penilaian_kinerja_admin', array('data_user'=>$data_user, 'data_aspek'=>$data_aspek));
        }
        else {
            return view('penilaian_kinerja_user');
        }
    }

    public function get($email)
    {
        if(Auth::user()->admin) {
            $query = ['email'=>$email];
            $query2 = ['email_kinerja'=>$email];
            $data_user = user::where($query)->get();
            $kinerja = penilaian_kinerja::where($query2)->get();
            return view('ubah_penilaian_kinerja_admin', array('data_user'=>$data_user, 'kinerja'=>$kinerja));
        }
        else {
            return view('penilaian_kinerja_user');
        }
    }
}
