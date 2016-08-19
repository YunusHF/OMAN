<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Karyawan;
use App\Keluarga;
use App\User;
use App\PendidikanTerakhir;
use App\Http\Requests;
use App\Divisi;
use App\Jabatan;
use App\StatusPerkawinan;
use App\StatusKeluarga;
use App\AnggotaKeluarga;

use App\Http\Controllers\Controller;

class BiodataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function ceklogin(){
    //     if(!Auth::guest()){
    //          $aktivasi = Auth::user()->aktivasi;
    //          return view('halamanutama', array('aktivasi'=>$aktivasi));
    //         //return view('halamanutama');
    //     }else{
    //         return view('auth.login');
    //     }
        // $aktivasi = Auth::user()->aktivasi;
        // // dd($aktivasi);
        // return view('halamanutama', array('aktivasi'=>$aktivasi));
    

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
        $pendidikan_terakhir = \App\PendidikanTerakhir::all();
        $jabatan = \App\Jabatan::all();
        $status_perkawinan = \App\StatusPerkawinan::all();
        $keluarga = \App\Keluarga::all();

        return view('biodata.create')->withDivisi($divisi)->withPendidikanTerakhir($pendidikan_terakhir)->withJabatan($jabatan)->withStatusPerkawinan($status_perkawinan)->withKeluarga($keluarga);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function createkeluarga()
    {
        return view('biodata.keluarga');
    }

    public function store_keluarga(Request $request){
         $post_keluarga = new Keluarga;

        $post_keluarga->no_kartu_keluarga = $request->no_kartu_keluarga;
         $post_keluarga->kepala_keluarga = $request->kepala_keluarga;

        $post_keluarga->save();



        return redirect('datadiri');
    }

    public function store(Request $request)
    {
       
       // $this->validate($request, array(
       //          'nama' => 'required',
       //          'tempat_lahir' => 'required',
       //          'tanggal_lahir' => 'required',
       //          'alamat' => 'required',
       //          'no_hp' => 'required',
       //           'email' => 'required',
       //           'pendidikan_terakhir_id' => 'required',
       //           'tanggal_ijazah' => 'required',
       //          'status_perkawinan' => 'required',
       //           'divisi_id' => 'required',
       //          'tanggal_mulai_kerja' => 'required',
       //          'no_ktp' => 'required',
       //         'foto' => 'required|mimes:jpeg,jpg,png|max:500',
               
                
       //      )); 

        // Keluarga::create([
        //         'kepala_keluarga' => $request->get('kepala_keluarga'),
        //         'no_kartu_keluarga' => $request->get('no_kartu_keluarga')
        // 'nomor_kartu_keluarga' => $request->get('no_kartu_keluarga'),

        //     ]);

        $data = $request->all();


        $post = new Karyawan;

        $post->nama_karyawan = $request->nama_karyawan;
        $post->tempat_lahir = $request->tempat_lahir;
        $post->tanggal_lahir = $request->tanggal_lahir;
        $post->alamat = $request->alamat;
        $post->nomor_hp = $request->nomor_hp;
        $post->email = $request->email;
        $post->pendidikan_terakhir_id = $request->pendidikan_terakhir;
         $post->tanggal_ijazah = $request->tanggal_ijazah;
        $post->status_perkawinan_id = $request->status_perkawinan;
        $post->tanggal_mulai_kerja = $request->tanggal_mulai_kerja;
         // $post->tanggal_keluar = $request->tanggal_keluar;
        $post->nomor_kartu_keluarga = $request->nomor_kartu_keluarga;
         $post->akun_skype = $request->akun_skype;
        $post->nomor_ktp = $request->nomor_ktp;
         $post->npwp = $request->npwp;
         $foto = $request->file('foto')->getClientOriginalName();
         $destination = base_path() . '/public/uploads';
         $request->file('foto')->move($destination, $foto);
        $post->foto = $foto;
        $post->divisi_id = $request->divisi_id;
         $post->jabatan_id = $request->jabatan;

        $post->save();

        // $post_keluarga = new Keluarga;

        // $post_keluarga->no_kartu_keluarga = $request->no_kartu_keluarga;
        //  $post_keluarga->kepala_keluarga = $request->kepala_keluarga;

        // $post_keluarga->save();

        


        return redirect('datadiri');


        // Karyawan::create([
        //         'nama' => $request->get('nama'),
        //         'tempat_lahir' => $request->get('tempat_lahir'),
        //         'tanggal_lahir' => $request->get('tanggal_lahir'),
        //          'alamat' => $request->get('alamat'),
        //         'no_hp' => $request->get('no_hp'),
        //         'email' => $request->get('email'),
        //         'pendidikan_terakhir_id' => $request->get('pendidikan_terakhir'),
        //         'tanggal_ijazah' => $request->get('tanggal_ijazah'),
        //         'status_perkawinan' => $request->get('status_perkawinan'),
                
        //         'jumlah_anak' => $request->get('jumlah_anak'),
        //         'divisi_id' => $request->get('divisi_id'),
        //         // 'jabatan_id' => $request->get('jabatan'),
        //         'tanggal_mulai_kerja' => $request->get('tanggal_mulai_kerja'),
        //         'tanggal_keluar' => $request->get('tanggal_keluar'),
        //         'skype' => $request->get('skype'),
        //         'no_ktp' => $request->get('no_ktp'),
        //         'npwp' => $request->get('npwp'),
        //        $photo = 'foto' => $request->file('foto')->getClientOriginalName(),
        //         $request->file('foto')->move


        //     ]);


        //  return redirect('/');   
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
        $biodata = Karyawan::find($id);
         $divisi = Divisi::all();
        $pendidikan_terakhir = PendidikanTerakhir::all();
        $status_perkawinan = StatusPerkawinan::all();
        $jabatan = Jabatan::all();

        if(!$biodata){
            abort(503);
        }

        return view('biodata.edit', array('biodata' => $biodata, 'divisi' => $divisi, 
                        'pendidikan_terakhir' => $pendidikan_terakhir, 'status_perkawinan' => $status_perkawinan, 'jabatan' => $jabatan));
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
       
          $biodata = Karyawan::find($id);

        $biodata->nama_karyawan = $request->nama_karyawan;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->alamat = $request->alamat;
        $biodata->nomor_hp = $request->nomor_hp;
        $biodata->email = $request->email;
        $biodata->pendidikan_terakhir_id = $request->pendidikan_terakhir;
         $biodata->tanggal_ijazah = $request->tanggal_ijazah;
        $biodata->status_perkawinan_id = $request->status_perkawinan;
        $biodata->tanggal_mulai_kerja = $request->tanggal_mulai_kerja;
         // $post->tanggal_keluar = $request->tanggal_keluar;
        $biodata->nomor_kartu_keluarga = $request->nomor_kartu_keluarga;
         $biodata->akun_skype = $request->akun_skype;
        $biodata->nomor_ktp = $request->nomor_ktp;
         $biodata->npwp = $request->npwp;
         $foto = $request->file('foto')->getClientOriginalName();
         $destination = base_path() . '/public/uploads';
         $request->file('foto')->move($destination, $foto);
        $biodata->foto = $foto;
        $biodata->divisi_id = $request->divisi_id;
         $biodata->jabatan_id = $request->jabatan;

        $biodata->save();
        return redirect('datadiri');
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



     public function datadiri(){
        $auth = Auth::user()->email;
       

        $datadiri = Karyawan::where('email', '=', $auth)->get();
        if($datadiri->isEmpty()){
            $adadata = false;
            $datadiri = "";
        }else{
            $adadata = true;
        }

        $divisi = Divisi::all();
        $pendidikan_terakhir = PendidikanTerakhir::all();
        $jabatan = Jabatan::all();
        $status_perkawinan = StatusPerkawinan::all();
        $keluarga = Keluarga::all();
        $status_keluarga = StatusKeluarga::all();
        $anggota_keluarga = AnggotaKeluarga::all();

        if($keluarga->isEmpty()){
            $adakeluarga = false;
        }else{
            $adakeluarga = true;
        }
        
       
        //$datadiri = Karyawan::all();
        // return view('biodata.datadiri', array('data' => $data))
        return view('biodata.datadiri', array('datadiri' => $datadiri, 'adadata' => $adadata, 'divisi' => $divisi,
                        'pendidikan_terakhir' => $pendidikan_terakhir, 'jabatan' => $jabatan, 'status_perkawinan' => $status_perkawinan, 'keluarga' => $keluarga, 'adakeluarga' => $adakeluarga, 'status_keluarga' => $status_keluarga, 'anggota_keluarga' => $anggota_keluarga, ));
        // echo $datadiri->divisi->divisi;
        // echo $auth;
        // echo $datadiri;
        // echo Auth::user()->email;
         //dd($datadiri);
    }

    // public function kartukeluarga($id){
    //     $kartukeluarga = Karyawan::find($id_karyawan);

    //     return view('biodata.tambahkartukeluarga')->with('kartukeluarga', $kartukeluarga);
        
    // }

    //  public function inputkartukeluarga(Request $request)
    // {
        
    //     $ubah_data_kk = Karyawan::find($request['id_karyawan']);

    //      $ubah_data_kk->nomor_kartu_keluarga = $request['nomor_kartu_keluarga'];

    //     $ubah_data_kk->update();

    //     return redirect('/datadiri');
    // }
}
