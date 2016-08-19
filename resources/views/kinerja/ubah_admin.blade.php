@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
	<div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Menu</h3>
        </div>
        <div class="panel-body">
			<a href="{{url('/penilaian_kinerja', date('Y'))}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Ubah Penilaian</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
	        	<table class="table table-responsive" style="text-align: left">
	        		<thead>
	        			<tr style='border-style: none;'>
	        				<th>Nomor</th>
	        				<th>Aspek</th>
	        				<th>Nilai</th>
	        				<th>Keterangan</th>
	        				<th>Simpan</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			<?php $nomor = 0; ?>
	        			@foreach($data_aspek as $aspek)
	        				<tr style='border-style: none;'>
		        				<td>{{ $nomor+=1 }}</td>
		        				<td>
		        					<p style="font-size: 15px;">{{ $aspek->aspek_kinerja }} ({{$aspek->bobot_nilai}})</p>
		        				</td>
		        				<?php $ada_nilai = false; ?>
	        					@foreach($data_nilai as $nilai)
			        				@if ($aspek->id_aspek_kinerja == $nilai->aspek_kinerja_id)
			        					<form action="{{$email}}/{{$nilai->id_kinerja}}" method="post" accept-charset="utf-8">
			        						<td><input class="form-control" type="number" name="nilai_kinerja" value="{{ $nilai->nilai_kinerja }}" placeholder="nilai" style="width: 70px;"></td>
			        						<td><textarea class="form-control vresize" name="keterangan_kinerja" placeholder="keterangan">{{ $nilai->keterangan_kinerja }}</textarea></td>
			        						<input type="hidden" name="tanggal_kinerja" value="<?php echo date("Y-m-d"); ?>">
			        						<input type="hidden" name="_method" value="PUT">
			        						<input type="hidden" name="_token" value="{{ csrf_token() }}">
			        						<td><button class="btn btn-info" type="submit" style="margin-top: 0px;">Simpan</button></td>
			        					</form>
			        					<?php $ada_nilai = true; ?>
			        				@endif
				        		@endforeach
				        		@if (!$ada_nilai)
				        			<form action="buat_nilai/{{ $email }}" method="post" accept-charset="utf-8">
				        				<td><input class="form-control" type="number" name="nilai_kinerja" value="" placeholder="nilai" style="width: 70px;"></td>
				        				<td><textarea class="form-control vresize" name="keterangan_kinerja" placeholder="keterangan"></textarea></td>
				        				<input type="hidden" name="tanggal_kinerja" value="<?php echo date("Y-m-d"); ?>">
				        				<input type="hidden" name="aspek_kinerja_id" value="{{ $aspek->id_aspek_kinerja }}">
				        				<input type="hidden" name="email" value="{{ $email }}">
				        				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			        					<td><button class="btn btn-info" type="submit" style="margin-top: 0px;">Masukan</button></td>
				        			</form>
				        		@endif
			        		</tr>
		        		@endforeach
	        		</tbody>
	        	</table>
        	</div>
	        <div class="col-md-2">
				<a href="/penilaian_kinerja/{{date('Y')}}" style="color: white;"><button class="btn btn-primary" type="button" style="margin-top: 0px;">Kembali</button></a>
			</div>
        </div>
    </div>
</div>
@endsection