@extends('layouts.tampilan')

@section('konten')
<div class="presentation-container">
    <div class="container">
        <div class="row">
        	<div class="panel panel-default">
                <div class="panel-heading"><h4>Masukan Keluarga</h4></div>
                <div class="panel-body">
                	<form action="{{ url('/inputkeluarga') }}" method="post" accept-charset="utf-8">
                		<div class="row">
	            			<div class="col-md-2"><p>Nomor Kartu Keluarga</p></div>
	            			<div class="col-md-10">
	            				<input type="text" name="no_kartu_keluarga" value=""><br>
	            			</div>
	            		</div>

	            		<div class="row">
	            			<div class="col-md-2"><p>Kepala Keluarga</p></div>
	            			<div class="col-md-10">
	            				<input type="text" name="kepala_keluarga" value=""><br>
	            			</div>
	            		</div>

	            		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            			<button type="submit">Submit</button>

                	</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection