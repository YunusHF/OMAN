@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading">
	    	<h4>Pengajuan Lembur</h4>
	    </div>
	    <div class="panel-body">
	    	<button type="button" style="background-color: blue;"><a href="{{url('/ajukan_lembur')}}" style="color: #fff;"><i class="fa fa-envelope"></i><br>Ajukan lembur</a></button>
	    </div>
    </div>
</div>
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Rekapan Lembur {{ Auth::user()->nama}}</h4>
        </div>
        <div class="panel-body">
        	<?php $sudah = false; ?>
        	@if($data_lembur->isEmpty())
        		<h4>Anda tidak memiliki rekapan lembur</h4>
        	@elseif(!$data_lembur->isEmpty())
        		@foreach($data_lembur as $daftar_lembur)
        			@if($daftar_lembur->persetujuan_lembur == "sudah disetujui")
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
        			@if($daftar_lembur->persetujuan_lembur == "sudah disetujui")
        				@foreach($data_presensi as $daftar_presensi)
        					@if($daftar_lembur->tanggal_lembur == $daftar_presensi->tanggal_presensi)
        						<tr style="border-style: none">
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
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Rekap Lembur</h4>
        </div>
        <div class="panel-body">
            <button type="button"><a href="{{url('/rekap_lembur')}}" style="color: #fff;"><i class="fa fa-print"></i><br>Lihat Rekapan</a></button>
        </div>
    </div>
</div>
@endsection