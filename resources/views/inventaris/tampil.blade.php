@extends('layouts.tampilan')

@section('konten')
@if($show)
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Daftar Inventaris</h4>
        </div>
        <div class="panel-body">
        	<button type="button" style="background-color:blue;"><a href="{{url('/inventaris/create')}}" style="color: #fff;"><i class="fa fa-table"></i><br>Tambah Inventaris</a></button>
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Daftar Inventaris</h4>
        </div>
        <div class="panel-body">
        	<table class="table table-responsive" style="text-align: left;">
        	    <thead>
        			<tr>
        				<th>No</th>
        				<th>Nama Barang</th>
        				<th>Jumlah</th>
        				<th>Umur Ekonomis</th>
        				<th>Asal Usul Barang</th>
        				<th>Tanggal Beli</th>
        				<th>Tanggal Tutup Buku</th>
        				<th>Keadaan Barang</th>
        			</tr>
        		</thead>
        		<tbody>
        			@foreach ($data as $tampil)
        				<tr>
        					<td></td>
        					<td>{{ $tampil['nama_barang'] }}</td>
        					<td>{{ $tampil['jumlah_barang'] }}</td>
        					<td>{{ $tampil['umur_ekonomis'] }}</td>
        					<td>{{ $tampil['asal_inventaris_id'] }}</td>
        					<td>{{ $tampil['tgl_beli'] }}</td>
        					<td>{{ $tampil['tgl_tutupbuku'] }}</td>
        					<td>{{ $tampil['status_inventaris_id'] }}</td>
        				</tr>
        			@endforeach
        		</tbody>
        	</table>
        </div>
    </div>
</div>
@else 

@endif
@endsection
