@extends('layouts.tampilan')

@section('konten')
<div class="col-md-12">
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
	        				<td>{{$user->nama}}</td>
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
	        				<td><a href="penilaian_kinerja/ubah_nilai/{{$user->email}}" class="btn btn-info" type="submit" style="margin-top: 0px; background-color: #2e7144; color: white; padding-right: 10px;">Ubah</a></td>
	        			</tr>
		        		@endforeach
	        		</tbody>
	        	</table>
        	</div>
        </div>
    </div>
</div>
@endsection