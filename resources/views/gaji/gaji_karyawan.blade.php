@extends('layouts.tampilan')

@section('konten')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Rekap Gaji Karyawan</h3>
        </div>
        <div class="panel-body" style="text-align:left;">
        	<table class="table table-responsive" style="font-size:16px;">
    				<thead>
    					<tr>
    						<th>Nama</th>
    						<th>Penerimaan</th>
    						<th>Potongan</th>
    						<th>Lihat Detail</th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach($data_user as $user)
    						<?php 
    							$total_penerimaan = 0; 
    							$total_potongan = 0; 
    						?>
    						@foreach($data_uraian as $uraian)
    							@if($uraian->jenis_uraian_gaji == 'Penerimaan')
    							@foreach($data_gaji as $gaji)
		        					@if($gaji->uraian_gaji_id == $uraian->id_uraian_gaji && $gaji->email == $user->email)
		        					<?php 
		        						$total_penerimaan += $gaji->jumlah;
		        					?>
		        					@endif
		        				@endforeach
		        				@endif
		        			@endforeach
		        			@foreach($data_uraian as $uraian)
    							@if($uraian->jenis_uraian_gaji == 'Potongan')
    							@foreach($data_gaji as $gaji)
		        					@if($gaji->uraian_gaji_id == $uraian->id_uraian_gaji && $gaji->email == $user->email)
		        					<?php 
		        						$total_potongan += $gaji->jumlah;
		        					?>
		        					@endif
		        				@endforeach
		        				@endif
		        			@endforeach
    					<tr>
    						<td>{{ $user->nama }}</td>
    						<td>{{ $total_penerimaan }}</td>
    						<td>{{ $total_potongan }}</td>
    						<td><a href="gaji/tampil_admin/{{$user->email}}" class="btn btn-info" type="submit" style="margin-top: 0px; background-color: #2e7144; color: white; padding-right: 10px;">Lihat Detail</a></td>
    					</tr>
    					@endforeach	
    				</tbody>
    			</table>
        </div>
    </div>
</div>
@endsection