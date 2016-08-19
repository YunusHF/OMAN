<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\hari_libur_kerja;
use App\lembur;
use App\presensi;

class LemburController extends Controller
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
        // untuk mengambil nama si User(karena belum ada tabel karyawan, jadi saya pakai tabel user dulu)
        $data_user = user::where('email','=', Auth::user()->email)->get();
        $user = user::all();

        //cek kalau user sudah melakukan presensi
        $ada_lembur = lembur::where('email', '=', Auth::user()->email)->get();
        // if ($ada_lembur->isEmpty()) echo "tidak ada lembur";
        // else dd($ada_lembur);

        // ngambil semua data lembur buat disetujui admin
        $cek_lembur = lembur::all();

        // ambil tanggal sekarang
        $tanggal_sekarang = date("Y-m-d");
        if(Auth::user()->id_peran == 3)
            return view('lembur.user', array('ada_lembur'=>$ada_lembur, 'data_user'=>$data_user, 'tanggal_sekarang'=>$tanggal_sekarang));
        elseif(Auth::user()->id_peran == 1 OR Auth::user()->id_peran == 2)
            return view('lembur.admin',  array('cek_lembur'=>$cek_lembur, 'user'=>$user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lembar_pengajuan()
    {
        $email = Auth::user()->email;
        return view('lembur.pengajuan', array('email'=>$email));
    }

    // $data = $request->find('email');
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pengajuan(Request $request)
    {
        $this->validate($request, [
            'email' => 'required', 
            'tanggal_lembur' => 'required', 
            'jam_mulai' => 'required', 
            'jam_selesai' => 'required',
            'uraian_lembur' => 'required',
            // 'persetujuan_id' => 'required'
        ]);

        // ngisi ke table lembur lewat model App\lembur
        lembur::create([
            'email' => $request->get('email'), 
            'tanggal_lembur' => $request->get('tanggal_lembur'), 
            'jam_mulai' => $request->get('jam_mulai'), 
            'jam_selesai' => $request->get('jam_selesai'),
            'uraian_lembur' => $request->get('uraian_lembur'),
            'persetujuan_id' => 1
        ]);
        return redirect('lembur');
    }

    public function persetujuan_admin(Request $request)
    {
        $this->validate($request, [
            'id_lembur'=>'required',
            'persetujuan_admin'=>'required'
        ]);

        $persetujuan = lembur::find($request['id_lembur']);

        if($request['persetujuan_admin'] == "true") {
            $persetujuan->tanggal_lembur = $request['tanggal_lembur'];
            $persetujuan->jam_mulai = $request['jam_mulai'];
            $persetujuan->jam_selesai = $request['jam_selesai'];
            $persetujuan->persetujuan_id = 2;
        }
        else
            $persetujuan->persetujuan_id = 3;

        $persetujuan->update();

        return redirect('/lembur_admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rekapan()
    {
        if(Auth::user()->id_peran == 3) {
            $query = ["status_presensi_id"=>1, "email"=>Auth::user()->email];
            $data_presensi = presensi::where($query)->get();
            $data_lembur = lembur::where("email", "=", Auth::user()->email)->get();
            return view('lembur.rekap_user', array('data_lembur'=>$data_lembur, 'data_presensi'=>$data_presensi));
        }
        elseif(Auth::user()->id_peran == 1 OR Auth::user()->id_peran == 2) {
            $query = ["status_presensi_id"=>1];
            $data_presensi = presensi::where($query)->get();
            $data_user = user::all();
            $data_lembur = lembur::all();
            return view('lembur.rekap_admin', array('data_lembur'=>$data_lembur, 'data_user'=>$data_user, 'data_presensi'=>$data_presensi));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
