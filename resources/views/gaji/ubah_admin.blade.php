@extends('layouts.tampilan')

@section('konten')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Ubah Gaji</h3>
        </div>
     	<div class="panel-body">
     	@foreach($data_uraian as $uraian)
	     	@if(!$data_gaji->isEmpty())
		     		<?php $terisi = false ?>
	     		@foreach($data_gaji as $gaji)
		     		@if ($uraian->id_uraian_gaji == $gaji->uraian_gaji_id)
			     		<form action="{{$email}}/{{$gaji->id_gaji}}" method="post" accept-charset="utf-8">
				        	<div class="col-md-2">
				        		<p style="font-size: 15px;">{{ $uraian->nama_uraian_gaji }}</p>
				        	</div>
				        	<div class="col-md-8">
				        		<input class="form-control" type="number" name="jumlah" value="{{ $gaji->jumlah }}" placeholder="jumlah">
				        		<input type="hidden" name="_method" value="PUT">
				        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        		<input type="hidden" name="tanggal_gaji" value="<?php echo date("Y-m-d"); ?>">
				        	</div>
				        	<div class="col-md-2">
				        		<button class="btn btn-info" type="submit" style="margin-top: 0px;">Simpan</button>
				        	</div>
				        </form>
				        <?php $terisi = true ?>
					@endif
			    @endforeach
			    @if(!$terisi)
			    	<form action="buat_nilai/{{$email}}/{{$uraian->id_uraian_gaji}}" method="post" accept-charset="utf-8">
			        	<div class="col-md-2">
			        		<p style="font-size: 15px;">{{ $uraian->nama_uraian_gaji }}</p>
			        	</div>
			        	<div class="col-md-8">
			        		<input type="hidden" name="tanggal_gaji" value="<?php echo date("Y-m-d"); ?>">
			        		<input class="form-control" type="number" name="jumlah" value="" placeholder="jumlah">
			        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			        	</div>
			        	<div class="col-md-2">
			        		<button class="btn btn-info" type="submit" style="margin-top: 0px;">Masukkan</button>
			        	</div>
			    	</form>
			    @endif
			@else
				<form action="buat_nilai/{{$email}}/{{$uraian->id_uraian_gaji}}" method="post" accept-charset="utf-8">
		        	<div class="col-md-2">
		        		<p style="font-size: 15px;">{{ $uraian->nama_uraian_gaji }}</p>
		        	</div>
		        	<div class="col-md-8">
		        		<input type="hidden" name="tanggal_gaji" value="<?php echo date("Y-m-d"); ?>">
		        		<input class="form-control" type="number" name="jumlah" value="" placeholder="jumlah">
		        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		        	</div>
		        	<div class="col-md-2">
		        		<button class="btn btn-info" type="submit" style="margin-top: 0px;">Masukkan</button>
		        	</div>
			    </form>
		    @endif
        @endforeach
	        <div class="col-md-2">
					<a href="{{url('gaji')}}" style="color: white;"><button class="btn btn-primary" type="button" style="margin-top: 0px;">Kembali</button></a>
				</div>
	        </div>
	    </div>
    </div>
</div>
@endsection