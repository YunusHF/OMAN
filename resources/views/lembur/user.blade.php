@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #b0e0a1;">
	    	<h4>Menu</h4>
	    </div>
	    <div class="panel-body">
	    	<a href="{{url('/ajukan_lembur')}}"><button type="button" class="btn btn-info" style="color: #fff;"><i class="fa fa-envelope"></i><br>Ajukan lembur</button></a>
	    	<a href="{{url('/rekap_lembur')}}"><button type="button" class="btn" style="color: #fff;"><i class="fa fa-print"></i><br>Lihat Rekapan</button></a>
	    	<a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
	    </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h4>Lembur</h4>
        </div>
        <div class="panel-body">
        	<?php $ada = 0; $belum = 0; ?>
        	@if($ada_lembur->isEmpty())
        		<h4>Anda tidak memiliki jadwal lembur</h4>
        	@elseif(!$ada_lembur->isEmpty())
        		@foreach($ada_lembur as $daftar_lembur)
        			@if($daftar_lembur->tanggal_lembur >= $tanggal_sekarang)
        				<?php $ada = 1; ?>
        			@elseif($daftar_lembur->persetujuan_id == 1)
        				<?php $belum = 1; ?>
        			@endif
        		@endforeach

        		@if($ada == 1)
        			<h4>Anda memiliki jadwal lembur</h4>
        		@elseif($belum == 1)
        			<h4>Anda memiliki pengajuan lembur yang belum disetujui</h4>
        		@elseif($ada == 1 && $belum == 1)
        			<h4>Anda memiliki jadwal lembur</h4>
        			<h4>Anda memiliki pengajuan lembur yang belum disetujui</h4>
        		@endif

        		@foreach($ada_lembur as $daftar_lembur)
        			@if($daftar_lembur->tanggal_lembur >= $tanggal_sekarang)
	        			@if($daftar_lembur->persetujuan_id == 2)
		        			<div class="col-md-6">
		        				<table class="table" style="text-align: left; border-style: none">
		        					<caption><h4>{{ $daftar_lembur->uraian_lembur }}</h4></caption>
		        					<tbody>
		        						<tr style="border-style: none">
		        							<td>Tanggal</td>
		        							<td>: {{ $daftar_lembur->tanggal_lembur }}</td>
		        						</tr>
		        						<tr style="border-style: none">
		        							<td>Jam Mulai</td>
		        							<td>: {{ $daftar_lembur->jam_mulai }}</td>
		        						</tr>
		        						<tr style="border-style: none">
		        							<td>Jam Selesai</td>
		        							<td>: {{ $daftar_lembur->jam_selesai }}</td>
		        						</tr>
		        					</tbody>
		        				</table>
		        			</div>
		        			<div class="col-md-6">
		        				<h2 style="color: green"><strong>SUDAH DISETUJUI</strong></h2>
		        				<h1><i class="fa fa-check" style="color: green"></i></h1>
		        			</div>
		        			<div class="col-md-12">
		        				
		        			</div>
	        			@elseif($daftar_lembur->persetujuan_id == 3)
		        			<div class="col-md-6">
		        				<table class="table" style="text-align: left; border-style: none">
		        					<caption><h4>{{ $daftar_lembur->uraian_lembur }}</h4></caption>
		        					<tbody>
		        						<tr style="border-style: none">
		        							<td>Tanggal</td>
		        							<td>: {{ $daftar_lembur->tanggal_lembur }}</td>
		        						</tr>
		        						<tr style="border-style: none">
		        							<td>Jam Mulai</td>
		        							<td>: {{ $daftar_lembur->jam_mulai }}</td>
		        						</tr>
		        						<tr style="border-style: none">
		        							<td>Jam Selesai</td>
		        							<td>: {{ $daftar_lembur->jam_selesai }}</td>
		        						</tr>
		        					</tbody>
		        				</table>
		        			</div>
		        			<div class="col-md-6">
		        				<h2 style="color: red"><strong>TIDAK DISETUJUI</strong></h2>
		        				<h1><i class="fa fa-close" style="color: red"></i></h1>
		        			</div>
		        			<div class="col-md-12">
		        				
		        			</div>
		        		@elseif($daftar_lembur->persetujuan_id == 1)
		        			<div class="col-md-6">
		        				<table class="table" style="text-align: left; border-style: none">
		        					<caption><h4>{{ $daftar_lembur->uraian_lembur }}</h4></caption>
		        					<tbody>
		        						<tr style="border-style: none">
		        							<td>Tanggal</td>
		        							<td>: {{ $daftar_lembur->tanggal_lembur }}</td>
		        						</tr>
		        						<tr style="border-style: none">
		        							<td>Jam Mulai</td>
		        							<td>: {{ $daftar_lembur->jam_mulai }}</td>
		        						</tr>
		        						<tr style="border-style: none">
		        							<td>Jam Selesai</td>
		        							<td>: {{ $daftar_lembur->jam_selesai }}</td>
		        						</tr>
		        					</tbody>
		        				</table>
		        			</div>
		        			<div class="col-md-6">
		        				<h2 style="color: #F0AD4E"><strong>BELUM DISETUJUI</strong></h2>
		        				<h4 style="color: #F0AD4E">Harap menghubungi admin untuk persetujuan</h4>
		        			</div>
		        			<div class="col-md-12">
		        				
		        			</div>
		        		@endif
		        	@elseif($daftar_lembur->tanggal_lembur < $tanggal_sekarang)
		        		@if($daftar_lembur->persetujuan_id == 1)
		        			<div class="col-md-6">
		        				<table class="table" style="text-align: left; border-style: none">
		        					<caption><h4>{{ $daftar_lembur->uraian_lembur }}</h4></caption>
		        					<tbody>
		        						<tr style="border-style: none">
		        							<td>Tanggal</td>
		        							<td>: {{ $daftar_lembur->tanggal_lembur }}</td>
		        						</tr>
		        						<tr style="border-style: none">
		        							<td>Jam Mulai</td>
		        							<td>: {{ $daftar_lembur->jam_mulai }}</td>
		        						</tr>
		        						<tr style="border-style: none">
		        							<td>Jam Selesai</td>
		        							<td>: {{ $daftar_lembur->jam_selesai }}</td>
		        						</tr>
		        					</tbody>
		        				</table>
		        			</div>
		        			<div class="col-md-6">
		        				<h2 style="color: #F0AD4E"><strong>BELUM DISETUJUI</strong></h2>
		        				<h4 style="color: #F0AD4E">Harap menghubungi admin untuk persetujuan</h4>
		        			</div>
		        			<div class="col-md-12">
		        				
		        			</div>
		        		@endif
	        		@endif
        		@endforeach
        	@endif
        </div>
    </div>
</div>
@endsection