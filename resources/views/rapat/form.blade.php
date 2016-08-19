@extends('layouts.tampilan')

@section('konten')
@if($show)
	<div class="col-md-2">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	        	<h4>Menu</h4>
	        </div>
	        <div class="panel-body">
		    	<button type="button" style="background-color: blue;"><a href="{{url('/rapat/show')}}" style="color: #fff;"><i class="fa fa-table"></i><br>Lihat Daftar Rapat</a></button>
		    </div>
	    </div>
	</div>
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading">
	        	<h4>Form Rapat</h4>
	        </div>
	        <div class="panel-body">
	        	<form action="store" method="post" accept-charset="utf-8" role="form">
	        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        		<div class="form-group">
	        			<div class="col-md-10">
		            		<input type="hidden" name="email" value="{{ $email }}">
		            	</div>
		            	<div class="col-md-10">
		            		<label for="inputdefault">Nama</label>
		            		<input type="text" name="nama_rapat" value="" placeholder="">
	            		</div>
	            		<div class="col-md-10">
		            		<label for="inputdefault">Lokasi</label>
		            		<input type="text" name="lokasi_rapat" value="" placeholder="">
	            		</div>
	            		<div class="col-md-5">
	            			<label for="inputdefault">Tanggal</label>
	              			<input type="date" name="tanggal_rapat" value="" placeholder="Tanggal">
		            	</div>
		            	<div class="col-md-5">
		            		<label for="inputdefault">Pukul</label>
		              		<input type="time" name="jam_rapat" value="" placeholder="Jam">
		            	</div>
		            	<div class="col-md-10">
		            		<label for="inputdefault">Peserta</label>
		            		<input type="text" name="peserta_rapat" value="" placeholder="">
	            		</div>
	            		<div class="col-md-10">
		            		<label for="inputdefault">Agenda</label>
		            		<textarea name="agenda_rapat"></textarea>
	            		</div>
	            		<div class="col-md-10">
		            		<label for="inputdefault">Hasil</label>
		            		<textarea name="hasil_rapat"></textarea>
	            		</div>
	            		<div class="col-md-10">
	              			<button type="submit">Submit</button>
	            		</div>
		            </div>
	        	</form>
	        </div>
		</div>
	</div>
@endif
@endsection