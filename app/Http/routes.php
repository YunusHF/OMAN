<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/', 'HomeController');

Route::get('contoh', function() {
	return view('contoh');
});


Route::auth();


// Route::get('/home', 'HomeController@index');

Route::get('halamanutama', 'HomeController@index');

Route::get('jajal', function(){
	// $orders = \App\Order::all();
	// foreach($orders as $order){
	// 	echo $order->nama . ". Ordered by" . $order->customer->nama . "<br />";
	// }
	$jajal = \App\Divisi::all();
	foreach($jajal as $jajal){
	echo $jajal->divisi;
	// echo $jajal->karyawan->email;
	}
});


Route::resource('biodata', 'BiodataController');

Route::post('inputbiodata', 'BiodataController@store');

Route::get('coba', function(){
	// $orders = \App\Order::all();
	// foreach($orders as $order){
	// 	echo $order->nama . ". Ordered by" . $order->customer->nama . "<br />";
	// }
	$coba = \App\Keluarga::all();
	foreach($coba as $coba){
	echo $coba->kepala_keluarga;
	echo $coba->karyawan->email;
	}
});

Route::get('relasi/{id_karyawan}', function($id_karyawan){
	$relasi = App\Karyawan::find($id_karyawan);
	echo $relasi->nama . '<br>';
	 foreach($relasi as $relasi){
	echo $relasi->nama . ". No KK nya : " . $relasi->keluarga->id_keluarga . "<br>";
	 }
	//echo $relasi->nama .  "<br>";
});

Route::get('relasi2/{id_keluarga}', function($id_keluarga){
	$relasi = App\Keluarga::find($id_keluarga);
	echo $relasi->no_kartu_keluarga . '<br>';
	// foreach($relasi as $relasi){
	// 	echo $relasi->nama . ". No KK nya : " . $relasi->keluarga->no_kartu_keluarga . "<br>";
	// }
	echo $relasi->no_kartu_keluarga .  "<br>";
});

Route::get('datadiri', 'BiodataController@datadiri');


Route::get('cetakbiodata', function(){
	$auth = Auth::user()->email;
       

        $datadiri = App\Karyawan::where('email', '=', $auth)->get();
        if($datadiri->isEmpty()){
            $adadata = false;
            $datadiri = "";
        }else{
            $adadata = true;
        }

       

        $divisi = App\Divisi::all();
        $pendidikan_terakhir = App\PendidikanTerakhir::all();
        $status_perkawinan = App\StatusPerkawinan::all();
        $jabatan = App\Jabatan::all();
        $anggota_keluarga = App\AnggotaKeluarga::all();
        $keluarga = App\Keluarga::all();
         if($keluarga->isEmpty()){
            $adakeluarga = false;
        }else{
            $adakeluarga = true;
        }
	$pdf_biodata = PDF::loadview('biodata.datadiri',  array('datadiri' => $datadiri, 'adadata' => $adadata, 'divisi' => $divisi,
                        'pendidikan_terakhir' => $pendidikan_terakhir, 'status_perkawinan' => $status_perkawinan, 'jabatan' => $jabatan, 'anggota_keluarga' => $anggota_keluarga, 'keluarga' => $keluarga, 'adakeluarga' => $adakeluarga));
	return $pdf_biodata->download('biodata.pdf');
});

Route::get('createkeluarga', 'BiodataController@createkeluarga');

Route::post('inputkeluarga', 'BiodataController@store_keluarga');

Route::resource('kartukeluarga', 'KartuKeluargaController');

Route::resource('tambahkeluarga', 'TambahKeluargaController');

Route::resource('todolist', 'TodoListController');






Route::get('portofolio', function() {
	return view('pengembangan');
});

Route::get('proyek', function() {
	return view('pengembangan');
});

Route::get('penugasan', function() {
	return view('pengembangan');
});

Route::get('gaji', function() {
	return view('pengembangan');
});

Route::get('cuti', function() {
	return view('pengembangan');
});

Route::get('manajemen_rapat', function() {
	return view('pengembangan');
});

Route::get('manajemen_proyek', function() {
	return view('pengembangan');
});

Route::get('to_do_list', function() {
	return view('pengembangan');
});

Route::get('penilaian_kinerja', function() {
	return view('pengembangan');
});

Route::get('inventaris', function() {
	return view('pengembangan');
});

Route::get('cetak_pdf', function() {
	return view('pengembangan');
});






























Route::get('presensi', 'PresensiController@index');

Route::post('tampil_presensi', 'PresensiController@TampilPresensi');

Route::post('presensi/masuk', 'SubmitPresensiController@PresensiMasuk');

Route::put('presensi/pulang/{email}', 'PresensiPulangController@PresensiPulang');

Route::get('lembur', 'LemburController@index');

Route::get('ajukan_lembur', 'LemburController@lembar_pengajuan');

Route::post('ajukan_lembur', 'LemburController@pengajuan');

Route::get('lembur_admin', 'LemburController@index');

Route::put('lembur_admin', 'LemburController@persetujuan_admin');

Route::get('rekap_lembur', 'LemburController@rekapan');


Route::get('penilaian_kinerja', 'PenilaianKinerjaController@index');

Route::get('penilaian_kinerja/ubah_nilai/{email}', 'PenilaianKinerjaController@ubah_nilai');

Route::put('penilaian_kinerja/ubah_nilai/{email}/{id}', 'PenilaianKinerjaController@simpan_nilai');

Route::post('penilaian_kinerja/ubah_nilai/buat_nilai/{email}', 'PenilaianKinerjaController@buat_nilai');







Route::resource('inventaris', 'InventarisController');

Route::post('inventaris/store', 'InventarisController@store');

Route::get('inventaris/show', 'InventarisController@show');