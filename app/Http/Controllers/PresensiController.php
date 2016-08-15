<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\presensi;
use App\user;
use App\hari_libur_kerja;
use App\lembur;

class PresensiController extends Controller
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
        // set timezone indonesia
        date_default_timezone_set("Asia/Jakarta");

        // bikin versi harian sendiri
        if (date("l") == "Sunday") $hari = "Minggu";
        elseif (date("l") == "Monday") $hari = "Senin";
        elseif (date("l") == "Tuesday") $hari = "Selasa";
        elseif (date("l") == "Wednesday") $hari = "Rabu";
        elseif (date("l") == "Thursday") $hari = "Kamis";
        elseif (date("l") == "Friday") $hari = "Jumat";
        elseif (date("l") == "Saturday") $hari = "Sabtu";

        // untuk menampilkan tanggal hari ini
        $tanggal = $hari.", ".date("d-m-Y");

        // untuk menentukan jam dan tanggal presensi yang akan dimasukan ke database
        $jam_masuk = date("h:i:s");
        $jam_pulang = date("h:i:s");
        $date = date("Y-m-d");

        // untuk ambil bulan dan tahun agar bisa dioper ke tampil_presensi
        $tahun = date("Y");
        $bulan = date("m");

        // untuk mengambil nama si User(karena belum ada tabel karyawan, jadi saya pakai tabel user dulu)
        $data = user::where('email','=', Auth::user()->email)->get();

        //cek kalau user sudah melakukan presensi
        $sekali_presensi = presensi::where('email', '=', Auth::user()->email)->get();
        $id_presensi = 0;
        $jam_sudah_masuk = '';
        $jam_sudah_pulang = '';
        foreach ($sekali_presensi as $cek) {
            if ($cek['tanggal_presensi'] == $date) {
                $id_presensi = $cek['id_presensi'];
                $jam_sudah_masuk = $cek['jam_masuk'];
                if ($cek['jam_pulang'] != null) {
                    $jam_sudah_pulang = $cek['jam_pulang'];
                }
                else $jam_sudah_pulang = '--:--:--';
            }
        }

        // untuk mengecek hari libur
        $hari_libur = hari_libur_kerja::where('tanggal_libur', '=', $date)->get();
        $keterangan_libur = '';
        foreach ($hari_libur as $keterangan) {
            $keterangan_libur = $keterangan['keterangan_libur'];
        }

        return view('presensi.create', array(
            'email'=>Auth::user()->email, 
            'tanggal'=>$tanggal, 
            'tahun'=>$tahun, 
            'bulan'=>$bulan, 
            'hari_presensi' => $hari, 
            'tanggal_presensi'=>$date, 
            'jam_masuk'=>$jam_masuk, 
            'jam_pulang'=>$jam_pulang, 
            'data'=>$data, 
            'id_presensi'=>$id_presensi, 
            'libur'=>$keterangan_libur, 
            'jam_sudah_masuk'=>$jam_sudah_masuk, 
            'jam_sudah_pulang'=>$jam_sudah_pulang)
        );
    }

    public function TampilPresensi(Request $request) {
        // untuk ambil bulan dan tahun agar bisa dioper ke tampil_presensi
        $tahun = $request['tahun'];
        $bulan = $request['bulan'];

        // untuk mengambil data lembur
        $query = ["email"=>Auth::user()->email, "persetujuan_lembur"=>"sudah disetujui"];
        $data_lembur = lembur::where($query)->get();

        // untuk mengecek hari libur
        $hari_libur = hari_libur_kerja::all();

        $tampilPresensi = presensi::where('email', '=', Auth::user()->email)->get();
        return view('presensi.tampil', array('tampil'=>$tampilPresensi, 'tahun'=>$tahun, 'bulan'=>$bulan, 'hari_libur'=>$hari_libur, 'data_lembur'=>$data_lembur));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
