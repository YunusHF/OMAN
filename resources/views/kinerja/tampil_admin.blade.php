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
	function BulanIndoDate($i) {
		if($i == "01") $bulanIndo = "Januari";
		elseif($i == "02") $bulanIndo = "Februari";
		elseif($i == "03") $bulanIndo = "Maret";
		elseif($i == "04") $bulanIndo = "April";
		elseif($i == "05") $bulanIndo = "Mei";
		elseif($i == "06") $bulanIndo = "Juni";
		elseif($i == "07") $bulanIndo = "Juli";
		elseif($i == "08") $bulanIndo = "Agustus";
		elseif($i == "09") $bulanIndo = "September";
		elseif($i == "10") $bulanIndo = "Oktober";
		elseif($i == "11") $bulanIndo = "November";
		elseif($i == "12") $bulanIndo = "Desember";
		return $bulanIndo;
	}

	$arr_tahun = array("Pilih Tahun");
	$i = 0;
    foreach($data_nilai as $nilai){
		$tahun_kinerja = strtotime($nilai->tanggal_kinerja);
		if($arr_tahun[$i] != date("Y", $tahun_kinerja)) {
			$arr_tahun[$i+1] = date("Y", $tahun_kinerja);
			$i++;
		}
	}
?>
@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
	<div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Menu</h3>
        </div>
        <div class="panel-body">
        	<div class="dropdown">
				<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">{{$arr_tahun[0]}}<span class="caret"></span></button>
				<ul class="dropdown-menu">
					@foreach(array_slice($arr_tahun, 1) as $year)
	        			<li><a href="{{$year}}">{{ $year }}</a></li>
	        		@endforeach
				</ul>
			</div>
			<a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Penilaian Kinerja</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
	        	<table class="table table-responsive" style="text-align: left">
	        		<thead>
	        			<tr style='border-style: none;'>
	        				<th>Nomor</th>
	        				<th>Nama</th>
	        					@foreach ($data_aspek as $aspek)
	        						<th>{{ $aspek->aspek_kinerja }} ({{$aspek->bobot_nilai}})</th>
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
	        							@if ($nilai->aspek_kinerja_id == $aspek->id_aspek_kinerja && $nilai->email == $user->email)
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
	        				<td><a href="ubah_nilai/{{$user->email}}" class="btn btn-info" type="submit" style="margin-top: 0px; background-color: #2e7144; color: white; padding-right: 10px;">Ubah</a></td>
	        			</tr>
		        		@endforeach
	        		</tbody>
	        	</table>
        	</div>
        </div>
    </div>
</div>
@endsection