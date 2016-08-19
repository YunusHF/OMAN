@extends('layouts.tampilan')

@section('konten')
<div class="presentation-container">
    <div class="container">
        <div class="row">
        	<div class="panel panel-default">
                <div class="panel-heading"><h4>Masukan Nomor Keluarga</h4></div>
                <div class="panel-body">
                	<form action="/kartukeluarga/{{$kartukeluarga->id_karyawan}}" method="post" accept-charset="utf-8">
                		<div class="row">
	            			<div class="col-md-2"><p>Nomor Kartu Keluarga</p></div>
	            			<div class="col-md-10">
                                <select name="nomor_kartu_keluarga">
                                    @foreach($keluarga as $keluarga)
                                        <option value="{{ $keluarga->no_kartu_keluarga }}">{{ $keluarga->no_kartu_keluarga }}</option>
                                    @endforeach
                                </select><br><br>
	            				
	            			</div>
	            		</div>
	            		<input type="hidden" name="_method" value="put">
	            		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            		<button type="submit">Submit</button>

                	</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection