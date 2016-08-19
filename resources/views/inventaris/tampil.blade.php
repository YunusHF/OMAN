@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h4>Menu</h4>
        </div>
        <div class="panel-body">
            @if($show)
        	   <button type="button" style="background-color:blue;"><a href="{{url('/inventaris/create')}}" style="color: #fff;"><i class="fa fa-table"></i><br>Tambah Inventaris</a></button>
            @endif
            <a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
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
                    @if(!$data)
                        <tr>
                            <td colspan="8" style="text-align:center;">Maaf, Belum ada data</td>
                        </tr>
                    @else
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
                    @endif
        		</tbody>
        	</table>
        </div>
    </div>
</div>
@endsection
