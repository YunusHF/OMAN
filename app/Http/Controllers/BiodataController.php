<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Keluarga;
use App\Http\Requests;
use App\Divisi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{


    public function ceklogin(){
        if(!Auth::guest()){
             $aktivasi = Auth::user()->aktivasi;
             return view('halamanutama', array('aktivasi'=>$aktivasi));
            //return view('halamanutama');
        }else{
            return view('auth.login');
        }
        // $aktivasi = Auth::user()->aktivasi;
        // // dd($aktivasi);
        // return view('halamanutama', array('aktivasi'=>$aktivasi));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisi = \App\Divisi::all();
        return view('biodata.create')->withDivisi($divisi);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Keluarga::create([
                'kepala_keluarga' => $request->get('kepala_keluarga'),
                'no_kartu_keluarga' => $request->get('no_kartu_keluarga')

            ]);
    
        Karyawan::create([
                'nama' => $request->get('nama'),
                'tempat_lahir' => $request->get('tempat_lahir'),
                'tanggal_lahir' => $request->get('tanggal_lahir'),
                 'alamat' => $request->get('alamat'),
                'no_hp' => $request->get('no_hp'),
                'email' => $request->get('email'),
                'pendidikan_terakhir' => $request->get('pendidikan_terakhir'),
                'tanggal_ijazah' => $request->get('tanggal_ijazah'),
                'status_perkawinan' => $request->get('status_perkawinan'),
                'nomor_kartu_keluarga' => $request->get('no_kartu_keluarga'),
                'jumlah_anak' => $request->get('jumlah_anak'),
                'divisi' => $request->get('divisi'),
                'jabatan' => $request->get('jabatan'),
                'tanggal_mulai_kerja' => $request->get('tanggal_mulai_kerja'),
                'tanggal_keluar' => $request->get('tanggal_keluar'),
                'skype' => $request->get('skype'),
                'no_ktp' => $request->get('no_ktp'),
                'npwp' => $request->get('npwp'),
                'foto' => $request->get('foto'),
            ]);
         return redirect('home');   
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
}
