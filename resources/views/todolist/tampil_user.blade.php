@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
	<div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h3>Menu</h3>
        </div>
        <div class="panel-body">
			<a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h3>To Do List {{ $nama }}</h3>
        </div>
        <div class="panel-body">
	        <table class="table table-responsive">
	        	<thead style="text-align: left">
	        		<tr style="border-style: none">
	        			<th>Nomor</th>
	        			<th>Kegiatan</th>
	        			<th>Tanggal</th>
	        		</tr>
	        	</thead>
	        	<tbody style="text-align: left">
	        		<tr style="border-style: none">
	        			<td>1</td>
	        			<td>Menemui Client</td>
	        			<td>2016-08-30</td>
	        		</tr>
	        		<tr style="border-style: none">
	        			<td>2</td>
	        			<td>Dinas ke Jakarta</td>
	        			<td>2016-09-06</td>
	        		</tr>
	        		<tr style="border-style: none">
	        			<td>3</td>
	        			<td>Menyelesaikan aplikasi MA****R</td>
	        			<td>2016-09-30</td>
	        		</tr>
	        		<tr style="border-style: none">
	        			<td>4</td>
	        			<td>Dinas ke Lampung</td>
	        			<td>2016-10-01</td>
	        		</tr>
	        	</tbody>
	        </table>
        </div>
    </div>
</div>
@endsection