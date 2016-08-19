@extends('layouts.tampilan')

@section('konten')
<div class="presentation-container">
    <div class="container">
        <div class="row">
        	<div class="panel panel-default">
                <div class="panel-heading"><h4>Masukan Nomor Keluarga</h4></div>
                <div class="panel-body">
                	<form action="" method="post" accept-charset="utf-8">
                		<div class="row">
                        <div class="col-md-12">
                        <table width="100%">
	            			<tr>
                                <td>Nama</td>
                                <td>Status Keluarga</td>
                                <td>Nomor Kartu Keluarga</td>
                                 
                            </tr>

                            <tr>
                                <td>
                                    <input type="text" name="nama_anggota_keluarga">
                                </td>
                                <td>
                                        <select name="status_keluarga_id">
                                                @foreach($statuskeluarga as $statuskeluarga)
                                                   
                                                <option value="{{ $statuskeluarga->id_status_keluarga }}">{{ $statuskeluarga->status_keluarga }}</option>
                                                @endforeach
                                                
                                            </select><br><br>

                                    
                                </td>
                                <td>Nomor Kartu Keluarga</td>
                                 
                            </tr>
	            		</table>
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