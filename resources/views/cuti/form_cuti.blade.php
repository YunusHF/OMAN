@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
            <h4>Menu</h4>
        </div>
        <div class="panel-body">
            <a href="{{url('/')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
</div>
        	<div class="col-md-10">
        		<div class="form-cuti">

        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #b0e0a1;"><h4>Pengajuan Cuti</h4></div>
                <div class="panel-body">
        			<div class="form-group">
        				<div class="container">
        					<div class="row">
	            				<div class="col-md-2"><p>Nama</p></div>
	            				<div class="col-md-9">
	            					<input type="text" name="nama" value=""><br> <!-- ntar ini autofilled -->
        						</div>	       
        					</div>
        				</div>
	            	</div>	
        			<div class="form-group">
        				<div class="container">
        					<div class="row">
	            				<div class="col-md-2"><p>Perihal Cuti</p></div>
	            				<div class="col-md-9">
	            					<input type="text" name="deskripsi_cuti"><br>
        						</div>	       
        					</div>
        				</div>
	            	</div>			
        			<div class="form-group">
        				<div class="container">
        					<div class="row">
        						<div class="col-md-2"><p>Dari Tanggal</p></div>
	            				<div class="col-md-3">
					                <div class='input-group date' id='datetimepicker1' value="" data-date-format='mm/dd/yyyy'>
				                    	<input type='text' class="form-control" />
				                    	<span class="input-group-addon">
				                        	<span class="glyphicon glyphicon-calendar"></span>
				                    	</span>
					                </div>
       							 </div>
	            				<div class="col-md-2"><p>Hingga Tanggal</p></div>
	            				<div class="col-md-3">			            					
					                <div class='input-group date' id='datetimepicker1' value="" data-date-format='mm/dd/yyyy'>
				                    	<input type='text' class="form-control" />
				                    	<span class="input-group-addon">
				                        	<span class="glyphicon glyphicon-calendar"></span>
				                    	</span>
					                </div>
       							 </div>
        					</div>
        				</div>	            			
        			</div>
        			<button>Submit</button>
        		</div>
            </div>
        </div>
        	</div>

 @endsection