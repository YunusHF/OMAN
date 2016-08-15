@extends('layouts.tampilan')

@section('konten')
<div class="presentation-container">
    <div class="container">
        <div class="row">
        	<div class="panel panel-default">
                <div class="panel-heading"><h4>Absensi</h4></div>

                <div class="panel-body">
                    @if ($id_presensi == 0)
                    <div class="col-md-12">
                    	<div class="col-md-6">				            		
		            		@foreach($data as $data)
		            		<h4>{{ $data->name }}</h4>
		            		@endforeach
		            		<h4>Maaf, anda</h4>
		            		<h3 style="color:red;"><strong>BELUM ABSEN</strong></h3>
		            		<p>silahkan menekan tombol "masuk"</p>
		            	</div>
		            	<div class="col-md-6">
			            	@if($libur == '')
		            			<h4><strong>Selamat Bekerja!</strong></h4>
		            		@else
		            			<h4><strong>Libur, {{ $libur }}</strong></h4>
		            		@endif
		            		<h4>{{ $tanggal }}</h4>
		                </div>
                    </div>
                    <div class="col-md-12">
		            	<div class="col-md-6">
		            		<form action="presensi/masuk" method="post" accept-charset="utf-8">
		            			<input type="hidden" class="form-control" name="tanggal_presensi" value="{{ $tanggal_presensi }}" placeholder="Tanggal Masuk">
		            			<input type="hidden" class="form-control" name="jam_masuk" value="{{ $jam_masuk }}" placeholder="Jam Masuk">
		            			<input type="hidden" name="email" value="{{ $email }}" placeholder="">
		            			<input type="hidden" name="status_presensi" value="hadir">
        						<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            			<button type="submit">MASUK</button>
		            		</form>
		                </div>
		            	<div class="col-md-6">
		            		<form action="tampil_presensi" method="post" accept-charset="utf-8">
			            		<input type="hidden" name="tahun" value="{{ $tahun }}">
			            		<input type="hidden" name="bulan" value="{{ $bulan }}">
        						<input type="hidden" name="_token" value="{{ csrf_token() }}">
				            	<button type="submit" style="background-color: #1f9e0e">Lihat Absensi</button>
			            	</form>
		            	</div>
		            </div>
		            @else
		            <div class="col-md-12">
                    	<div class="col-md-6">				            		
		            		@foreach($data as $data)
		            		<h4>{{ $data->name }}</h4>
		            		@endforeach
		            		<h3 style="color:green;"><strong>SUDAH ABSEN</strong></h3>
		            		<h4>Masuk Jam {{ $jam_sudah_masuk }}</h4>
		            		<h4>Pulang Jam {{ $jam_sudah_pulang }}</h4>
		            	</div>
		            	<div class="col-md-6">
			            	@if($libur == '')
		            			<h4><strong>Selamat Bekerja!</strong></h4>
		            		@else
		            			<h4><strong>Libur, {{ $libur }}</strong></h4>
		            		@endif
		            		<h4>{{ $tanggal }}</h4>
		                </div>
                    </div>
                    <div class="col-md-12">
		            	<div class="col-md-6">
		            		<form action="presensi/pulang/{{ $email }}" method="post" accept-charset="utf-8">
		            			<input type="hidden" name="_method" value="PUT">
		            			<input type="hidden" name="id_presensi" value="{{ $id_presensi }}">
		            			<input type="hidden" class="form-control" name="jam_pulang" value="{{ $jam_pulang }}" placeholder="Jam Keluar">
        						<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            			<button style="background:red;">PULANG</button>
		            		</form>
		                </div>
		            	<div class="col-md-6">
		            		<form action="tampil_presensi" method="post" accept-charset="utf-8">
			            		<input type="hidden" name="tahun" value="{{ $tahun }}">
			            		<input type="hidden" name="bulan" value="{{ $bulan }}">
        						<input type="hidden" name="_token" value="{{ csrf_token() }}">
				            	<button type="submit" style="background-color: #1f9e0e">Lihat Absensi</button>
			            	</form>
		            	</div>
		            </div>
	            	@endif
	            	<div class="col-md-6">
	            		
	            	</div>
	            </div>
	        </div>
        </div>
    </div>
</div>
@endsection



