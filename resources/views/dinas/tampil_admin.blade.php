@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #b0e0a1;">
	    	<h4>Menu</h4>
	    </div>
	    <div class="panel-body">
            <button type="button"><a href="#" style="color: #fff;"><i class="fa fa-print"></i><br>Lihat Rekapan</a></button>
            <a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h4>Dinas</h4>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
        		<h4>Tidak ada jadwal dinas</h4>
        	</div>
        </div>
    </div>
</div>
@endsection