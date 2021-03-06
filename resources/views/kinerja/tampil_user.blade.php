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
        	<a href="penilaian_kinerja/rekap_nilai/{{$email}}/{{$tahun}}"><button type="button" class="btn"><i class="fa fa-print"></i><br>Lihat Rekapan</button></a>
			<a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h3>Penilaian Kinerja Bulan {{ bulanIndo($bulan) }} {{ $tahun }}</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
	        	<table class="table table-responsive" style="text-align: center; font-size: 20px;">
	        		<thead>
	        			<tr style='border-style: none;'>
        					@foreach ($data_aspek as $aspek)
        						<th style="text-align: center;">{{ $aspek->aspek_kinerja }}<br>({{$aspek->bobot_nilai}}%)</th>
        					@endforeach
	        				<th style="text-align: center;">Skor Total<br>&nbsp</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			<?php
	        				$nomor = 0;
	        				$skor_total = 0;
	        			?>
	        			<tr style='border-style: none;'>
	        				@foreach($data_aspek as $aspek)
	        					<td>
	        						<?php $ada_nilai = false ?>
	        						@foreach ($data_nilai as $nilai)
	        							<?php $tanggal = strtotime($nilai->tanggal_kinerja); ?>
	        							@if ($nilai->aspek_kinerja_id == $aspek->id_aspek_kinerja && date("m", $tanggal) == $bulan && date("Y", $tanggal) == $tahun)
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
	        		</tbody>
	        	</table>
        	</div>
        </div>
    </div>
</div>
@endsection