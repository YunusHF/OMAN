@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h4>Menu</h4>
        </div>
        <div class="panel-body">
        	<button type="button" style="background-color:blue;"><a href="{{url('/rapat/create')}}" style="color: #fff;"><i class="fa fa-table"></i><br>Form Rapat</a></button>
            <a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
	<div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h4>Daftar Rapat</h4>
        </div>
        <div class="panel-body">
        	<table class="table table-responsive">
        		<thead>
        			<tr>
        				<th>Nama</th>
        				<th>Lokasi</th>
        				<th>Waktu</th>
        				<th>Lihat Detail</th>
        			</tr>
        		</thead>
        		<tbody>
        			@if(!$data)
        				<td colspan="4" style="text-align:center">Maaf, belum ada data</td>
        			@else
        		    @foreach ($data as $tampil)
	        			<tr style="width:100%">
	        				<td style="width:40%">{{ $tampil['nama_rapat'] }}</td>
	        				<td style="width:30%">{{ $tampil['lokasi_rapat'] }}</td>
	        				<td style="width:20%">{{ $tampil['tanggal_rapat'] }} {{ $tampil['jam_rapat'] }}</td>
	        				<td style="width:10%"><a href="rapat/detail_rapat/{{$data->id_rapat}}" class="btn btn-info" type="submit" style="margin-top: 0px; background-color: #2e7144; color: white; padding-right: 10px;">Lihat Detail</a></td>
	        			</tr>
	        			@endforeach
        			@endif
        		</tbody>
        	</table>
        </div>
    </div>
</div>
@endsection