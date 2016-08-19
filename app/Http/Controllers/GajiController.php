<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gaji;
use App\uraian_gaji;

class GajiController extends Controller
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
        //
        if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2){
            $data_user = user::all();
            $data_gaji = Gaji::all();
            $data_uraian = uraian_gaji::all();
            return view('gaji.gaji_karyawan', array('data_user' => $data_user, 'data_gaji'=>$data_gaji, 'data_uraian'=>$data_uraian));
        }
        else{
            $query = ['email'=>Auth::user()->email];
            $data_user = user::find(Auth::user()->id_user);
            $data_gaji = Gaji::where($query)->get();
            $data_uraian = uraian_gaji::all();
            return view('gaji.tampil_user', array('data_gaji' => $data_gaji, 'data_uraian' => $data_uraian, 'user'=>$data_user));
        }
    }

    public function lihat_detail($email)
    {
        if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {
            $data_user = user::where('email', '=', $email)->get();
            $data_gaji = Gaji::where('email', '=', $email)->get();
            $data_uraian = uraian_gaji::all();
            return view('gaji.tampil_admin', array('email'=> $email, 'data_user' => $data_user, 'data_gaji'=>$data_gaji, 'data_uraian'=>$data_uraian));
        }
        else {
            $query = ['email'=>Auth::user()->email];
            $data_gaji = Gaji::where($query)->get();
            $data_uraian = uraian_gaji::all();
            return view('gaji.tampil_user',  array('data_gaji'=>$data_gaji, 'data_uraian'=>$data_uraian));
        }
    }

    public function ubah_nilai($email)
    {
        if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {
            $query = ['email'=>$email];
            $data_gaji = Gaji::where($query)->get();
            $data_uraian = uraian_gaji::all();
            // dd($data_gaji);
            return view('gaji.ubah_admin', array('email'=>$email, 'data_gaji'=>$data_gaji, 'data_uraian'=>$data_uraian));
        }
        else {
            $query = ['email'=>Auth::user()->email];
            $data_gaji = Gaji::where($query)->get();
            $data_uraian = uraian_gaji::all();
            return view('gaji.tampil_user',  array('data_gaji'=>$data_gaji, 'data_uraian'=>$data_uraian));
        }
    }

    public function simpan_nilai(Request $request, $email, $id)
    {
        if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {
            $gaji = Gaji::find($id);
            $gaji->tanggal_gaji = $request['tanggal_gaji'];
            $gaji->jumlah = $request['jumlah'];
            $gaji->update();
            return redirect('/gaji/ubah_jumlah/'.$email);
        }
        else {
            $query = ['email'=>Auth::user()->email];
            $data_gaji = Gaji::where($query)->get();
            $data_uraian = uraian_gaji::all();
            return view('gaji.tampil_user',  array('data_gaji'=>$data_gaji, 'data_uraian'=>$data_uraian));
        }
    }

    public function buat_nilai(Request $request, $email, $id)
    {
        if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {
            $data = $request->all();
            // Gaji::create($data);
            Gaji::insert(['email' => $email, 'uraian_gaji_id' => $id, 'jumlah' => $data['jumlah'], 'tanggal_gaji' => $data['tanggal_gaji']]);
            return redirect('/gaji/ubah_jumlah/'.$email);
        }
        else {
            $query = ['email'=>Auth::user()->email];
            $data_gaji = Gaji::where($query)->get();
            $data_uraian = uraian_gaji::all();
            return view('gaji.tampil_user',  array('data_gaji'=>$data_gaji, 'data_uraian'=>$data_uraian));
        }
    }
}