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

	$tahun_awal = 9999;
    foreach($data_nilai as $_nilai){
        $tahun_nilai = strtotime($_nilai->tanggal_kinerja);
        if($tahun_awal > date("Y", $tahun_nilai)) {
            $tahun_awal = date("Y", $tahun_nilai);
        }
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
        	<div class="dropdown">
				<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">{{ $tahun }}<span class="caret"></span></button>
				<ul class="dropdown-menu">
				@for($i=date("Y"); $i>=$tahun_awal; $i--)
                    <li><a href="{{$i}}">{{$i}}</a></li>
                @endfor
				</ul>
			</div>
			<a href="{{url('/penilaian_kinerja')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h3>Penilaian Kinerja</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
 		       	<h4>{{ $nama_user }}</h4>
        		<h4>{{ $tahun }}</h4>
	        	<table class="table table-responsive" style="text-align: center">
	        		<thead>
	        			<tr style='border-style: none;'>
	        				<th style="text-align: center;">Nomor<br>&nbsp</th>
	        				<th style="text-align: left;">Bulan<br>&nbsp</th>
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
        				@for($i=1; $i<=12; $i++)
	        			<tr style='border-style: none;'>
	        				<td>{{ $nomor+=1 }}</td>
       						<td style="text-align: left;">{{ BulanIndo($i) }}</td>
	        				@foreach($data_aspek as $aspek)
	        					<td>
	        						<?php $ada_nilai = false ?>
	        						@foreach ($data_nilai as $nilai)
	        							<?php $tanggal = strtotime($nilai->tanggal_kinerja); ?>
	        							@if ($nilai->aspek_kinerja_id == $aspek->id_aspek_kinerja && BulanIndo(date("m", $tanggal)) == BulanIndo($i) && date("Y", $tanggal) == $tahun)
	        								
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