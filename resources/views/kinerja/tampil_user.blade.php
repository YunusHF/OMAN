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
	        	<table class="table table-responsive" style="text-align: center">
	        		<thead>
	        			<tr style='border-style: none;'>
	        				<th style="text-align: center;">Nomor</th>
	        				<th style="text-align: left;">Bulan</th>
	        					@foreach ($data_aspek as $aspek)
	        						<th style="text-align: center;">{{ $aspek->aspek_kinerja }}<br>({{$aspek->bobot_nilai}}%)</th>
	        					@endforeach
	        				<th style="text-align: center;">Skor Total</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			<?php
	        				$nomor = 0;
	        				$skor_total = 0;
	        			?>
        				@for($i=1; $i<=12; $i++)
	        			<tr style='border-style: none;'>
	        				<td>{{ $nomor+=1 }}</td>
       						<td style="text-align: left;">{{ BulanIndo($i) }}</td>
	        				@foreach($data_aspek as $aspek)
	        					<td>
	        						<?php $ada_nilai = false ?>
	        						@foreach ($data_nilai as $nilai)
	        							<?php $tanggal = strtotime($nilai->tanggal_kinerja); ?>
	        							@if ($nilai->aspek_kinerja_id == $aspek->id_aspek_kinerja && BulanIndoDate(date("m", $tanggal)) == BulanIndo($i) && date("Y", $tanggal) == $tahun)
	        								
	        								{{ $nilai->nilai_kinerja }}
	        								<?php
	        									$ada_nilai = true;
	        									$skor_total += $aspek->bobot_nilai/100*$nilai->nilai_kinerja ;
	        								?>
	        							@endif
	        						@endforeach
	        						@if ($ada_nilai == false)
	        							Kosong
	        						@endif
	        					</td>
	        				@endforeach
	        				<td>{{$skor_total}}</td>
	        				<?php $skor_total = 0; ?>
	        			</tr>
        				@endfor
	        		</tbody>
	        	</table>
        	</div>
        </div>
    </div>
</div>
@endsection