<?php
function BulanIndo($i) {
		if($i == 1) $bulanIndo = "Januari";
		elseif($i == 2) $bulanIndo = "Februari";
		elseif($i == 3) $bulanIndo = "Maret";
		elseif($i == 4) $bulanIndo = "April";
		elseif($i == 5) $bulanIndo = "Mei";
		elseif($i == 6) $bulanIndo = "Juni";
		elseif($i == 7) $bulanIndo = "Juli";
		elseif($i == 8) $bulanIndo = "Agustus";
		elseif($i == 9) $bulanIndo = "September";
		elseif($i == 10) $bulanIndo = "Oktober";
		elseif($i == 11) $bulanIndo = "November";
		elseif($i == 12) $bulanIndo = "Desember";
		return $bulanIndo;
	}
?>
@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
	<div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h3>Menu</h3>
        </div>
        <div class="panel-body">
			<a href="{{url('/penilaian_kinerja')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h3>Ubah Penilaian</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
        		<h5>{{ $nama_user }}</h5>
        		<h5>{{ BulanIndo($bulan)." ".$tahun }}</h5>
	        	<table class="table table-responsive" style="text-align: left">
	        		<thead>
	        			<tr style='border-style: none;'>
	        				<th>Nomor</th>
	        				<th>Aspek</th>
	        				<th>Bobot</th>
	        				<th>Nilai</th>
	        				<th>Keterangan</th>
	        				<th>Simpan</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			<?php $nomor = 0; $skor_total = 0;?>
	        			@foreach($data_aspek as $aspek)
	        				<tr style='border-style: none;'>
		        				<td>{{ $nomor+=1 }}</td>
		        				<td>
		        					<p style="font-size: 15px;">{{ $aspek->aspek_kinerja }}</p>
		        				</td>
		        				<td><p style="font-size: 15px;">{{$aspek->bobot_nilai}}%</p></td>
		        				<?php $ada_nilai = false; ?>
	        					@foreach($data_nilai as $nilai)
	        						<?php $bulan_tahun_kinerja = strtotime($nilai->tanggal_kinerja); $tanggal_kinerja = date("Y-m", $bulan_tahun_kinerja); ?>
			        				@if ($aspek->id_aspek_kinerja == $nilai->aspek_kinerja_id && $tanggal_kinerja == $bulan_tahun)
			        					<form action="{{$email}}/{{$nilai->id_kinerja}}" method="post" accept-charset="utf-8">
			        						<td><input class="form-control" type="number" name="nilai_kinerja" value="{{ $nilai->nilai_kinerja }}" placeholder="nilai" style="width: 70px;"></td>
			        						<td><textarea class="form-control vresize" name="keterangan_kinerja" placeholder="keterangan">{{ $nilai->keterangan_kinerja }}</textarea></td>
			        						<input type="hidden" name="tanggal_kinerja" value="<?php echo date("Y-m-d"); ?>">
			        						<input type="hidden" name="_method" value="PUT">
			        						<input type="hidden" name="_token" value="{{ csrf_token() }}">
			        						<td><button class="btn btn-info" type="submit" style="margin-top: 0px;">Simpan</button></td>
			        					</form>
			        					<?php $ada_nilai = true; $skor_total += $aspek->bobot_nilai/100*$nilai->nilai_kinerja;?>
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
			        					<td><button class="btn btn-info" type="submit" style="margin-top: 0px;">Simpan</button></td>
				        			</form>
				        		@endif
			        		</tr>
		        		@endforeach
	        		</tbody>
	        	</table>
        	</div>
	        <div class="col-md-2" style="margin-top: -50px;">
	        	<h3>Total: {{ $skor_total }}</h3>
			</div>
        </div>
    </div>
</div>
@endsection