<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Rapat;

class RapatController extends Controller
{
    //
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
        return redirect('rapat/show');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $peran = Auth::user()->id_peran;
        if ($peran == 1 or $peran == 2) {
            $show = true;
        }
        else{
            $show = false;
        }
        $email = Auth::user()->email;
        return view('rapat.form', array('email' => $email, 'show' => $show));
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
        $email = Auth::user()->email;
        $data = $request->all();
        Rapat::create($data);
        return view('rapat.form', array('email' => $email));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

	public function show()
    {
        //
        $peran = Auth::user()->id_peran;
        if ($peran == 1 or $peran == 2) {
            $show = true;
        }
        else{
            $show = false;
        }
        $data = Rapat::get()->all();
        return view('rapat.tampil', array('show' => $show))->with('data', $data);
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

    public function lihat_detail($request, $email, $id)
    {
        //
        $email = Auth::user()->email;
        $data = $request->all();
        Rapat::create($data);
        return view('rapat.detail_rapat', array('email' => $email));
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
