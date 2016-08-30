@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #b0e0a1;">
	    	<h4>Menu</h4>
	    </div>
	    <div class="panel-body">
            <a href="{{url('/ajukan_lembur')}}"><button type="button" class="btn btn-info" style="color: #fff;"><i class="fa fa-envelope"></i><br>Ajukan lembur</button></a>
            <a href="{{url('/lembur')}}"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h4>Rekapan Lembur {{ Auth::user()->nama}}</h4>
        </div>
        <div class="panel-body">
        	<?php $sudah = false; $nomor = 0;?>
        	@if($data_lembur->isEmpty())
        		<h4>Anda tidak memiliki rekapan lembur</h4>
        	@elseif(!$data_lembur->isEmpty())
        		@foreach($data_lembur as $daftar_lembur)
        			@if($daftar_lembur->persetujuan_id == 2)
        				@foreach($data_presensi as $daftar_presensi)
        					@if($daftar_lembur->tanggal_lembur == $daftar_presensi->tanggal_presensi)
        						<?php $sudah = true; ?>
        					@endif
        				@endforeach
        			@endif
        		@endforeach

        		@if($sudah == true)
        			<div class="col-md-12">
        				<table class="table" style="text-align: left;">
        					<thead>
        						<tr style="border-style: none">
                                    <th>Nomor</th>
        							<th>Uraian</th>
        							<th>Tanggal</th>
        							<th>Mulai</th>
        							<th>Selesai</th>
        						</tr>
        					</thead>
        					<tbody>
        		@else
        			<h4>Anda tidak memiliki pengajuan lembur yang disetujui</h4>
        		@endif

        		@foreach($data_lembur as $daftar_lembur)
        			@if($daftar_lembur->persetujuan_id == 2)
        				@foreach($data_presensi as $daftar_presensi)
        					@if($daftar_lembur->tanggal_lembur == $daftar_presensi->tanggal_presensi)
        						<tr style="border-style: none">
                                    <td>{{ $nomor+=1 }}</td>
        							<td>{{ $daftar_lembur->uraian_lembur }}</td>
        							<td>{{ $daftar_lembur->tanggal_lembur }}</td>
        							<td>{{ $daftar_lembur->jam_mulai }}</td>
        							<td>{{ $daftar_lembur->jam_selesai }}</td>
        						</tr>
        					@endif
        				@endforeach
        			@endif
        		@endforeach

        		@if($sudah == true)
        					</tbody>
        				</table>
        			</div>
        		@endif
        	@endif
        </div>
    </div>
</div>
@endsection