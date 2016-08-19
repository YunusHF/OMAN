@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #b0e0a1;">
	    	<h4>Menu</h4>
	    </div>
	    <div class="panel-body">
	    	<button type="button" style="background-color: blue;"><a href="{{url('/ajukan_lembur')}}" style="color: #fff;"><i class="fa fa-envelope"></i><br>Ajukan lembur</a></button>
	    	<button type="button"><a href="{{url('/rekap_lembur')}}" style="color: #fff;"><i class="fa fa-print"></i><br>Lihat Rekapan</a></button>
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
        	<div class="col-md-12">
				<table class="table" style="text-align: left;">
					<thead>
						<tr style="border-style: none">
							<th>Nama</th>
							<th>Uraian</th>
							<th>Tanggal Selesai</th>
							<th>Jam Mulai</th>
							<th>Jam Selesai</th>
							<th>Action</th>
						</tr>
					</thead>
		        	<?php $belum = false; ?>
		        	@foreach($cek_lembur as $lembur)
		        		@if($lembur->persetujuan_id == 1)
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
		        			@if($lembur->persetujuan_id == 1)
	        					<tbody>
		        					<form action="lembur_admin" method="post" accept-charset="utf-8">
	        						<tr style="border-style: none">
	        							<td>
	        							@foreach($user as $pengguna)
        									@if($pengguna->email == $lembur->email)
        										{{ $pengguna->nama }}
        									@endif
	        							@endforeach
	        							</td>
	        							<td>{{ $lembur->uraian_lembur }}</td>
	        							<td><input type="date" name="tanggal_lembur" value="{{ $lembur->tanggal_lembur }}" placeholder=""></td>
	        							<td><input type="time" name="jam_mulai" value="{{ $lembur->jam_mulai }}" placeholder=""></td>
	        							<td><input type="time" name="jam_selesai" value="{{ $lembur->jam_selesai }}" placeholder=""></td>
	        							<td>
	        								<input type="hidden" name="_method" value="PUT">
					            			<input type="hidden" name="id_lembur" value="{{ $lembur->id_lembur }}">
					            			<input type="hidden" name="persetujuan_admin" value="true">
				    						<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        								<button type="submit"><span class="fa fa-check"></span></button>
	        								</form>
	        								<form action="lembur_admin" method="post" accept-charset="utf-8">
						            			<input type="hidden" name="_method" value="PUT">
						            			<input type="hidden" name="id_lembur" value="{{ $lembur->id_lembur }}">
						            			<input type="hidden" name="persetujuan_admin" value="false">
					    						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						            			<button type="button"><span class="fa fa-times"></span></button>
						            		</form>
	        							</td>		
	        						</tr>
	        					</tbody>
			        		@endif
		        		@endif
		        	@endforeach
        		</table>
	        </div>
        </div>
    </div>
</div>
@endsection