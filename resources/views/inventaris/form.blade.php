@extends('layouts.tampilan')

@section('konten')
@if ($show)
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Menu</h4>
        </div>
        <div class="panel-body">
	    	<button type="button" style="background-color: blue;"><a href="{{url('/inventaris/show')}}" style="color: #fff;"><i class="fa fa-table"></i><br>Lihat Daftar Inventaris</a></button>
	    </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Form Inventaris</h4>
        </div>
        <div class="panel-body">
        	<form action="store" method="post" accept-charset="utf-8" role="form">
        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        		<div class="form-group">
        			<div class="col-md-2">
	            		<input type="hidden" name="email" value="{{ $email }}">
	            	</div>
	            	<div class="col-md-8">
	            		<label for="inputdefault">Nama Barang</label>
	            		<input type="text" name="nama_barang" value="" placeholder="">
	            	</div>
	            	<div class="col-md-2">

	            	</div>
	            	<div class="col-md-8">
	            		<hr>
	            	</div>
	            	<div class="col-md-8">
	            		<label for="inputdefault">Jumlah</label>
	            		<input type="text" name="jumlah_barang" value="" placeholder="">
	            	</div>
	            	<div class="col-md-8">
	            		<label for="inputdefault">Umur Ekonomis (bulan)</label>
	            		<input type="text" name="umur_ekonomis" value="" placeholder="">
	            	</div>
	            	<div class="col-md-4">
	            		<label for="inputdefault">Tanggal Pembelian</label>
	            		<input type="date" name="tgl_beli" value="" placeholder="">
	            	</div>
	            	<div class="col-md-4">
	            		<label for="inputdefault">Tanggal Tutup Buku</label>
	            		<input type="date" name="tgl_tutupbuku" value="" placeholder="">
	            	</div>
	            	<div class="col-md-8">
	            		<label for="inputdefault">Asal-Usul Inventaris</label>
	            		<select name="asal_inventaris_id">
	            			<option value="1">Beli</option>
	            			<option value="2">Hibah</option>
	            		</select>
	            	</div>
	            	<div class="col-md-8">
	            		<label for="inputdefault">Keadaan Inventaris</label>
	            		<select name="status_inventaris_id">
	            			<option value="1">Baik</option>
	            			<option value="2">Rusak Ringan</option>
	            			<option value="3">Rusak Berat</option>
	            		</select>
	            	</div>
	            	<div class="col-md-4">
	              		<button type="submit">Submit</button>
	            	</div>
        		</div>
        	</form>
        </div>
    </div>
</div>
@else 
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Form Inventaris</h4>
        </div>
        <div class="panel-body">
	    	<button type="button" style="background-color:red;"><a href="{{url('/inventaris/show')}}" style="color: #fff;"><i class="fa fa-table"></i><br>Kembali ke Daftar Inventaris</a></button>
	    </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Menu</h4>
        </div>
        <div class="panel-body">
	    	<h1 style="color:yellow">Maaf Anda Diperbolehkan Mengakses Modul Ini</h1>
	    </div>
    </div>
</div>
@endif
@endsection