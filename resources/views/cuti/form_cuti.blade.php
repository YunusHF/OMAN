@extends('layouts.tampilan')

@section('konten')
<!-- Form Cuti-->
 <div class="presentation-container">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<div class="form-cuti">
        			<h2><strong>Pengajuan Cuti</strong></h2>
        			<hr>
        			<div class="form-group">
        				<div class="container">
        					<div class="row">
	            				<div class="col-md-2"><p>Nama</p></div>
	            				<div class="col-md-9"><p>
	            					<input type="text" name="nama" value=""><br> <!-- ntar ini autofilled -->
        						</div>	       
        					</div>
        				</div>
	            	</div>	
        			<div class="form-group">
        				<div class="container">
        					<div class="row">
	            				<div class="col-md-2"><p>Perihal Cuti</p></div>
	            				<div class="col-md-9"><p>
	            					<input type="text" name="deskripsi_cuti"><br>
        						</div>	       
        					</div>
        				</div>
	            	</div>			
        			<div class="form-group">
        				<div class="container">
        					<div class="row">
        						<div class="col-md-2"><p>Dari Tanggal</p></div>
	            				<div class="col-md-3"><p>
					                <div class='input-group date' id='datetimepicker1' value="" data-date-format='mm/dd/yyyy'>
				                    	<input type='text' class="form-control" />
				                    	<span class="input-group-addon">
				                        	<span class="glyphicon glyphicon-calendar"></span>
				                    	</span>
					                </div>
       							 </div>
	            				<div class="col-md-2"><p>Hingga Tanggal</p></div>
	            				<div class="col-md-3"><p>			            					
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
 </div>
 @endsection