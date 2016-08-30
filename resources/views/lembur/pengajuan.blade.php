@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #b0e0a1;">
	    	<h4>Menu</h4>
	    </div>
	    <div class="panel-body">
	    	<a href="{{url('/rekap_lembur')}}"><button type="button" class="btn" style="color: #fff;"><i class="fa fa-print"></i><br>Lihat Rekapan</button></a>
            <a href="{{url('/lembur')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h4>Pengajuan Lembur</h4>
        </div>
        <div class="panel-body">
            <form action="ajukan_lembur" method="post" accept-charset="utf-8" role="form">
            	<div class="form-group">
	            	<div class="col-md-2">
	            		<input type="hidden" name="email" value="{{ $email }}">
	            	</div>
	            	<div class="col-md-8">
		            	<label for="inputdefault">Kegiatan lembur anda</label>
		              	<input type="text" name="uraian_lembur" value="" placeholder="">	            		
	            	</div>
	            	<div class="col-md-2">
	            		
	            	</div>
	            	<div class="col-md-12">
	            		<hr>
	            	</div>
	            	<div class="col-md-4">
	            		<label for="inputdefault">Tanggal</label>
	              		<input type="date" name="tanggal_lembur" value="" placeholder="Tanggal">
	            	</div>
	            	<div class="col-md-4">
	            		<label for="inputdefault">Jam Mulai</label>
	              		<input type="time" name="jam_mulai" value="" placeholder="Jam Mulai">
	            	</div>
	            	<div class="col-md-4">
	            		<label for="inputdefault">Jam Selesai</label>
	            		<input type="time" name="jam_selesai" value="" placeholder="Jam Selesai">
	            	</div>
	            	<div class="col-md-4">
	            		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            	</div>
	            	<div class="col-md-4">
	              		<button type="submit" class="btn">Submit</button>
	            	</div>
	            	<div class="col-md-4">
	            		<!--  -->
	            	</div>
	        	</div>
	        </form>
        </div>
    </div>
</div>
@endsection