@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading">
	    	<h4>Pengajuan Dinas</h4>
	    </div>
	    <div class="panel-body">
	    	<button type="button" style="background-color: blue;"><a href="{{url('/ajukan_dinas')}}" style="color: #fff;"><i class="fa fa-envelope"></i><br>Ajukan dinas</a></button>
	    </div>
    </div>
</div>
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Dinas</h4>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
        		<h4>Tidak ada pengajuan dinas</h4>
        	</div>
        </div>
    </div>
</div>
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Rekap Dinas</h4>
        </div>
        <div class="panel-body">
            <button type="button"><a href="{{url('/rekap_dinas')}}" style="color: #fff;"><i class="fa fa-print"></i><br>Lihat Rekapan</a></button>
        </div>
    </div>
</div>
@endsection