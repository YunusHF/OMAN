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
        	<h4>Lembur</h4>
        </div>
        <div class="panel-body">
        	<?php $belum = false; ?>
        	@foreach($cek_lembur as $lembur)
        		@if($lembur->persetujuan_lembur == "belum disetujui")
        			<?php $belum = true; ?>
        		@endif
        	@endforeach

        	@if($belum == false)
        		<h4>Tidak ada pengajuan lembur</h4>
        	@else
        		<h4>Ada pengajuan lembur yang belum disetujui</h4>
        	@endif

        	@foreach($cek_lembur as $lembur)
        		@if($belum == true)
        			@if($lembur->persetujuan_lembur == "belum disetujui")
	        			<div class="col-md-6">
	        				<table class="table" style="text-align: left; border-style: none">
	        					<caption><h4>{{ $lembur->uraian_lembur }}</h4></caption>
	        					<tbody>
		        					<form action="lembur_admin" method="post" accept-charset="utf-8">
	        						<tr style="border-style: none">
	        							<td>Tanggal</td>
	        							<td>: <input type="date" name="tanggal_lembur" value="{{ $lembur->tanggal_lembur }}" placeholder=""></td>
	        						</tr>
	        						<tr style="border-style: none">
	        							<td>Jam Mulai</td>
	        							<td>: <input type="time" name="jam_mulai" value="{{ $lembur->jam_mulai }}" placeholder=""></td>
	        						</tr>
	        						<tr style="border-style: none">
	        							<td>Jam Selesai</td>
	        							<td>: <input type="time" name="jam_selesai" value="{{ $lembur->jam_selesai }}" placeholder=""></td>
	        						</tr>
	        					</tbody>
	        				</table>
	        			</div>
	        			<div class="col-md-6">
	        				<div class="col-md-6">
				            			<input type="hidden" name="_method" value="PUT">
				            			<input type="hidden" name="id_lembur" value="{{ $lembur->id_lembur }}">
				            			<input type="hidden" name="persetujuan_admin" value="true">
			    						<input type="hidden" name="_token" value="{{ csrf_token() }}">
				            			<button style="background:green; min-height: 70px;">DISETUJUI</button>
				            		</form>
	        				</div>
	        				<div class="col-md-6">
	        					<form action="lembur_admin" method="post" accept-charset="utf-8">
			            			<input type="hidden" name="_method" value="PUT">
			            			<input type="hidden" name="id_lembur" value="{{ $lembur->id_lembur }}">
			            			<input type="hidden" name="persetujuan_admin" value="false">
		    						<input type="hidden" name="_token" value="{{ csrf_token() }}">
			            			<button style="background:red; min-height: 70px;">TIDAK DISETUJUI</button>
			            		</form>
	        				</div>
	        			</div>
	        			<div class="col-md-12">
	        				
	        			</div>
	        		@endif
        		@endif
        	@endforeach
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