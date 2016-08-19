@extends('layouts.tampilan')

@section('konten')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Rekap Gaji Karyawan</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-12" style="text-align:left;">
        	@foreach($data_user as $user)
        		<p style="font-size:18px;"><strong>{{ $user->nama }}&nbsp;&nbsp;</strong><a href="{{url('/gaji/ubah_jumlah',$email)}}" class="btn btn-info" type="submit" style="margin-top: 0px; background-color: #2e7144; color: white; padding-right: 10px;">Ubah</a></p>
        	@endforeach
        	</div>
        	<div class="col-md-5" style="text-align:left;">
        		<table class="table table-responsive" style="width:70%;">
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
        	</div>
        	<div class="col-md-5" style="text-align:left;">
        		<table class="table table-responsive" style="width:70%;">
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
	        					@if($gaji->uraian_gaji_id == $uraian->id_uraian_gaji)
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
        	</div>
        	<div class="col-md-2">
        		
        	</div>
        	<div class="col-md-12" style="text-align:left;">
        		<p style="font-size:16px;">Total Penerimaan :<strong>Rp. {{ $total_penerimaan }}</strong></p>
				<p style="font-size:16px;">Total Potongan :<strong>Rp. {{ $total_potongan }}</strong></p>
				<p style="font-size:16px;">Gaji Bersih :<strong>Rp. {{ $total_penerimaan - $total_potongan }}</strong></p>
				<br><br><br><br>
        	<hr>
        	</div>
        </div>
    </div>
</div>
@endsection