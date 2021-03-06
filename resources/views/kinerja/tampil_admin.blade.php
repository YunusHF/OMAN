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
			<a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h3>Penilaian Kinerja Bulan {{ BulanIndo($bulan)}}  {{ $tahun }}</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
	        	<table class="table table-responsive" style="text-align: left">
	        		<thead>
	        			<tr style='border-style: none;'>
	        				<th>Nomor<br>&nbsp</th>
	        				<th>Nama<br>&nbsp</th>
	        					@foreach ($data_aspek as $aspek)
	        						<th>{{ $aspek->aspek_kinerja }}<br>( {{$aspek->bobot_nilai}}% )</th>
	        					@endforeach
	        			</tr>
	        		</thead>
	        		<tbody>
	        			<?php $nomor = 0; ?>
	        			@foreach($data_user as $user)
	        			<tr style='border-style: none;'>

	        				<td>{{ $nomor+=1 }}</td>
	        				<td>{{ $user->nama }}</td>
	        				@foreach ($data_aspek as $aspek)
	        					<td>
	        						<?php $ada_nilai = false ?>
	        						@foreach ($data_nilai as $nilai)
	        							<?php $bulan_tahun_kinerja = strtotime($nilai->tanggal_kinerja); $tanggal_kinerja = date("Y-m", $bulan_tahun_kinerja); ?>
	        							@if ($nilai->aspek_kinerja_id == $aspek->id_aspek_kinerja && $nilai->email == $user->email && $tanggal_kinerja == $bulan_tahun)
	        								{{ $nilai->nilai_kinerja }}
	        								<?php $ada_nilai = true ?>
	        							@endif
	        						@endforeach
	        						@if ($ada_nilai == false)
	        							Kosong
	        						@endif
	        					</td>
	        				@endforeach
	        				<!-- <td><button class="btn btn-info" type="submit" style="margin-top: 0px; background-color: #2e7144; color: white; padding-right: 10px;">Ubah</button></td> -->
	        				<td><a href="penilaian_kinerja/ubah_nilai/{{$user->email}}" class="btn btn-info" type="submit" style="margin-top: 0px; background-color: #2e7144; color: white; padding-right: 10px;">Ubah</a></td>
	        				<td><a href="penilaian_kinerja/rekap_nilai/{{$user->email}}/{{$tahun}}" class="btn btn-info" type="submit" style="margin-top: 0px; background-color: #2e7144; color: white; padding-right: 10px;">Rekap</a></td>
	        			</tr>
		        		@endforeach
	        		</tbody>
	        	</table>
        	</div>
        </div>
    </div>
</div>
@endsection