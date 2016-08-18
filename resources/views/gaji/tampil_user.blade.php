@extends('layouts.tampilan')

@section('konten')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Rekap Gaji Karyawan</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-10" style="text-align:left;">
        		<p style="font-size:18px;"><strong>{{ Auth::user()->nama }}</strong></p>
        		<table style="width:50%;">
        			<caption>Penerimaan</caption>
        			<thead>
        				<tr>
        					<th>Uraian Gaji</th>
        					<th>Jumlah</th>
        				</tr>
        			</thead>
        			<tbody>
        				<?php $total_penerimaan = 0; ?>
        				@foreach($data_uraian as $uraian)
	        				@if($uraian->jenis_uraian_gaji == 'Penerimaan')
	        					<?php 
	        						$terisi = false;
	        					?>
		        				@foreach($data_gaji as $gaji)
			        				@if($gaji->uraian_gaji_id == $uraian->id_uraian_gaji)
				        				<tr>
				        					<td style="font-size:14px;">{{$uraian->nama_uraian_gaji}}</td>
				        					<td style="font-size:14px;">Rp. {{$gaji->jumlah}}</td>
				        				</tr>
				        				<?php 
					        				$terisi = true;
					        				$total_penerimaan += $gaji->jumlah;
				        				?>
			        				@endif
			        			@endforeach
			        			@if(!$terisi)
			        				<tr>
			        					<td style="font-size:14px;">{{$uraian->nama_uraian_gaji}}</td>
			        					<td style="font-size:14px;"></td>
			        				</tr>
		        				@endif
		        			@endif
	        			@endforeach
        			</tbody>
        		</table>

        		<table style="width:50%;">
					<caption>Potongan</caption>
					<thead>
						<tr>
        					<th>Uraian Gaji</th>
        					<th>Jumlah</th>
        				</tr>
        			</thead>
        			<tbody>
        				<?php $total_potongan = 0; ?>
        				@foreach($data_uraian as $uraian)
							@if($uraian->jenis_uraian_gaji == 'Potongan')
		    					<?php 
		    						$terisi = false;
		    					?>
		        				@foreach($data_gaji as $gaji)
		        					@if($gaji->uraian_gaji_id == $uraian->id_uraian_gaji && $gaji->email == $user->email)
				        				<tr>
				        					<td style="font-size:14px;">{{$uraian->nama_uraian_gaji}}</td>
				        					<td style="font-size:14px;">Rp. {{$gaji->jumlah}}</td>
				        				</tr>
				        				<?php 
					        				$terisi = true;
											$total_potongan += $gaji->jumlah;
				        				?>
		        					@endif
			        			@endforeach
			        			@if(!$terisi)
			        				<tr>
			        					<td style="font-size:14px;">{{$uraian->nama_uraian_gaji}}</td>
			        					<td style="font-size:14px;"></td>
			        				</tr>
		        				@endif
		        			@endif
		        		@endforeach
					</tbody>
				</table>
				<p style="font-size:16px;">Total Penerimaan :<strong>Rp. {{ $total_penerimaan }}</strong></p>
				<p style="font-size:16px;">Total Potongan :<strong>Rp. {{ $total_potongan }}</strong></p>
				<p style="font-size:16px;">Gaji Bersih :<strong>Rp. {{ $total_penerimaan - $total_potongan }}</strong></p>
				<br><br><br><br>
        	</div>
        	<hr>
        </div>
    </div>
</div>
@endsection