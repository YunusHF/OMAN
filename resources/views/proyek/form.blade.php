@extends('layouts.tampilan')

@section('konten')
<div class="presentation-container">
    <div class="container">
        <div class="row">
			    <div class="col-md-10">
			        <div class="panel panel-default">
                		<div class="panel-heading"><h4>Form Proyek</h4></div>
                			<div class="panel-body">
			            		<div class="form-group">
		            				<div class="container">
		            					<div class="row">
		            						<div class="col-md-2"><p>Nama Proyek</p></div>
		            						<div class="col-md-8"><input type="text" name="nama_proyek"><br><br></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="form-group">
		            				<div class="container">
		            					<div class="row">
		            						<div class="col-md-2"><p>Keuaran Proyek</p></div>
		            						<div class="col-md-8"><input type="text" name="output_proyek"><br><br></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="form-group">
		            				<div class="container">
		            					<div class="row">
		            						<div class="col-md-2"><p>Project Manager</p></div>
		            						<div class="col-md-8"><input type="text" name="output_proyek"><br><br></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="form-group">
		            				<div class="container">
		            					<div class="row">
		            						<div class="col-md-2"><p>Anggota Tim</p></div>
		            						<div class="col-md-8"><input type="text" name="output_proyek"><br><br></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="form-group">
		            				<div class="container">
		            					<div class="row">
		            						<div class="col-md-2"><p>Mulai</p></div>
				            				<div class="col-md-2">
								                <div class='input-group date' id='datetimepicker1' value="" data-date-format='mm/dd/yyyy'>
							                    	<input type='text' class="form-control" />
							                    	<span class="input-group-addon">
							                        	<span class="glyphicon glyphicon-calendar"></span>
							                    	</span>
								                </div>
	               							 </div>
				            				<div class="col-md-2"><p>Berakhir</p></div>
				            				<div class="col-md-2">			            					
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
			            		<div class="form-group">
		            				<div class="container">
		            					<div class="row">
		            						<div class="col-md-2"><p>Item Anggaran</p></div>
				            				<div class="col-md-2"><p><input type="text" name="item_anggaran"><br><br></p></div>
				            				<div class="col-md-2"><p>Jumlah</p></div>
				            				<div class="col-md-2"><p><input type="text" name="jumlah_anggaran"><br></p></div>
		            					</div>
		            				</div>	            			
		            			</div>
			            		<button>Submit</button>
			            	</div>
			            </div>
			        </div>
			            	</div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
@endsection