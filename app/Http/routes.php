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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('contoh', function() {
	return view('contoh');
});


Route::auth();


// Route::get('/home', 'HomeController@index');

Route::get('halamanutama', 'HomeController@index');

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
















































Route::get('presensi', 'PresensiController@index');

Route::post('tampil_presensi', 'PresensiController@TampilPresensi');

Route::post('presensi/masuk', 'SubmitPresensiController@PresensiMasuk');

Route::put('presensi/pulang/{email}', 'PresensiPulangController@PresensiPulang');

Route::get('cetak_pdf', function() {
	return view('/home');
});

Route::get('lembur', 'LemburController@index');

Route::get('ajukan_lembur', 'LemburController@lembar_pengajuan');

Route::post('ajukan_lembur', 'LemburController@pengajuan');

Route::get('lembur_admin', 'LemburController@index');

Route::put('lembur_admin', 'LemburController@persetujuan_admin');

Route::get('rekap_lembur', 'LemburController@rekapan');

Route::get('penilaian_kinerja', 'PenilaianKinerjaController@index');
