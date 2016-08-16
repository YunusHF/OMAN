@extends('layouts.tampilan')

@section('konten')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Pengajuan Lembur</h4>
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
	            	<div class="col-md-12">
	            		<hr>
	            	</div>
	            	<div class="col-md-12">
	            		<label for="inputdefault">Jumlah</label>
	            		<input type="text" name="jumlah_barang" value="" placeholder="">
	            	</div>
	            	<div class="col-md-12">
	            		<label for="inputdefault">Umur Ekonomis (bulan)</label>
	            		<input type="text" name="umur_ekonomis" value="" placeholder="">
	            	</div>
	            	<div class="col-md-6">
	            		<label for="inputdefault">Tanggal Pembelian</label>
	            		<input type="date" name="tgl_beli" value="" placeholder="">
	            	</div>
	            	<div class="col-md-6">
	            		<label for="inputdefault">Tanggal Tutup Buku</label>
	            		<input type="date" name="tgl_tutupbuku" value="" placeholder="">
	            	</div>
	            	<div class="col-md-12">
	            		<label for="inputdefault">Asal-Usul Inventaris</label>
	            		<select name="asal_inventaris_id">
	            			<option value="1">Beli</option>
	            			<option value="2">Hibah</option>
	            		</select>
	            	</div>
	            	<div class="col-md-12">
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
@endsection