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
            // $query = ['email'=>Auth::user()->email];
            $data_nilai = penilaian_kinerja::all();
            $data_aspek = aspek_kinerja::all();
            $bulan_tahun = date("Y-m");
            $bulan = date("m");
            $tahun = date("Y");
            return view('kinerja.tampil_admin', array('data_user'=>$data_user, 'data_nilai'=>$data_nilai, 'data_aspek'=>$data_aspek, 'bulan_tahun'=>$bulan_tahun, 'bulan'=>$bulan, 'tahun'=>$tahun));
        }
        else {
        	$query = ['email'=>Auth::user()->email];
        	$data_nilai = penilaian_kinerja::where($query)->get();
            $data_aspek = aspek_kinerja::all();
            $email = Auth::user()->email;
            $bulan = date("m");
            $tahun = date("Y");
            return view('kinerja.tampil_user',  array('data_nilai'=>$data_nilai, 'data_aspek'=>$data_aspek, 'tahun'=>$tahun, 'bulan'=>$bulan, 'email'=>$email));
        }
    }

    public function rekap_admin($email, $tahun)
    {
        if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {
            $query = [ 'email'=>$email ];
            $data_nilai = penilaian_kinerja::where($query)->get();
            $data_aspek = aspek_kinerja::all();
            $user = user::where($query)->get();
            foreach($user as $pengguna) {
                $nama_user = $pengguna->nama;
            }
            // dd($nama_user);
            return view('kinerja.tampil_user_admin', array('data_nilai'=>$data_nilai, 'data_aspek'=>$data_aspek, 'tahun'=>$tahun, 'nama_user'=>$nama_user));
        }
        elseif(Auth::user()->email == $email) {
            $query = ['email'=>Auth::user()->email];
            $data_nilai = penilaian_kinerja::where($query)->get();
            $data_aspek = aspek_kinerja::all();
            return view('kinerja.rekap_user',  array('data_nilai'=>$data_nilai, 'data_aspek'=>$data_aspek, 'tahun'=>$tahun));
        }
        else {
            return redirect('/');
        }
    }

    public function ubah_nilai($email)
    {
    	if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {
            $query = ['email'=>$email];
            $data_nilai = penilaian_kinerja::where($query)->get();
            $data_aspek = aspek_kinerja::all();
            $bulan_tahun = date("Y-m");
            $bulan = date("m");
            $tahun = date("Y");
            $user = user::where($query)->get();
            foreach($user as $pengguna) {
                $nama_user = $pengguna->nama;
            }
            return view('kinerja.ubah_admin', array('email'=>$email, 'data_nilai'=>$data_nilai, 'data_aspek'=>$data_aspek, 'bulan_tahun'=>$bulan_tahun, 'bulan'=>$bulan, 'tahun'=>$tahun, 'nama_user'=>$nama_user));
        }
        else {
            $query = ['email'=>Auth::user()->email];
        	$data_nilai = penilaian_kinerja::where($query)->get();
            $data_aspek = aspek_kinerja::all();
            return view('kinerja.tampil_user',  array('data_nilai'=>$data_nilai, 'data_aspek'=>$data_aspek));
        }
    }

    public function simpan_nilai(Request $request, $email, $id)
    {
    	if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {

	        $penilaian_kinerja = penilaian_kinerja::find($id);

	        $penilaian_kinerja->tanggal_kinerja = $request['tanggal_kinerja'];

	        $penilaian_kinerja->keterangan_kinerja = $request['keterangan_kinerja'];

	        $penilaian_kinerja->nilai_kinerja = $request['nilai_kinerja'];

	        // dd($penilaian_kinerja);
	        $penilaian_kinerja->update();

	        return redirect('/penilaian_kinerja/ubah_nilai/'.$email);
        }
        else {
            $query = ['email'=>Auth::user()->email];
        	$data_nilai = penilaian_kinerja::where($query)->get();
            $data_aspek = aspek_kinerja::all();
            return view('kinerja.tampil_user',  array('data_nilai'=>$data_nilai, 'data_aspek'=>$data_aspek));
        }
    }

    public function buat_nilai(Request $request, $email)
    {
        if(Auth::user()->id_peran == 1 or Auth::user()->id_peran == 2) {
            $data = $request->all();
            penilaian_kinerja::create($data);
            return redirect('/penilaian_kinerja/ubah_nilai/'.$email);
        }
        else {
            $query = ['email'=>Auth::user()->email];
        	$data_nilai = penilaian_kinerja::where($query)->get();
            $data_aspek = aspek_kinerja::all();
            return view('kinerja.tampil_user',  array('data_nilai'=>$data_nilai, 'data_aspek'=>$data_aspek));
        }
    }
}
