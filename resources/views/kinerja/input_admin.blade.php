@extends('layouts.tampilan')

@section('konten')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h3>Penilaian Kinerja</h3>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
	        	<table class="table table-responsive">
	        		<tbody>
	        		@foreach($data_user as $user)
	        			@foreach
	        			<tr style='border-style: none;'>
	        				<td>{{$user->name}}</td>
	        				
	        				<td><a href="penilaian_kinerja/{{$user->email}}" class="btn btn-info" role="button"">Edit Penilaian</a></td>
	        			</tr>
	        		<@endforeach
	        		@endforeach
	        		</tbody>
	        	</table>
        	</div>
        </div>
    </div>
</div>
@endsection