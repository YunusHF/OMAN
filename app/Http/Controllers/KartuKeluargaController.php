<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Karyawan;
use App\Keluarga;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KartuKeluargaController extends Controller
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
        $keluarga = Keluarga::all();

        $kartukeluarga = Karyawan::find($id);

        if(!$kartukeluarga){
            abort(503);
        }

        return view('biodata.tambahkartukeluarga', array('kartukeluarga' => $kartukeluarga, 'keluarga' => $keluarga));
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
        
        $kartukeluarga = Karyawan::find($id);
        $kartukeluarga->nomor_kartu_keluarga = $request->nomor_kartu_keluarga;

        $kartukeluarga->save();
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
}
