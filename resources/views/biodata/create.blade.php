@extends('layouts.tampilan')

@section('konten')
		<!-- Form Login-->
		 <div class="presentation-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-12">
	            		<div class="form-edit-bio">
	            			<h2><strong>Masukkan Data Profil Karyawan</strong></h2>
	            			<hr>
	            		<form action="{{ url('/inputbiodata') }}" method="post" accept-charset="utf-8">
	            				<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nama</p></div>
	            						<div class="col-md-10">
	            							<input type="text" name="nama" value=""><br>
	            						</div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Tempat Lahir</p></div>
			            				<div class="col-md-3">
			            					<input type="text" name="tempat_lahir"><br><br>
			            				</div>
			            				<div class="col-md-2"><p>Tanggal Lahir</p></div>
			            				<div class="col-md-4">
			            					<div class='input-group date' id='datetimepicker1'>
						                    <input type="text" name="tanggal_lahir"><br><br>
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>

	            						</div>	       
		        					</div>
		        				</div>
			            	</div>
			            	<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Alamat</p></div>
	            						<div class="col-md-10"><input type="text" name="alamat"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nomor Handphone</p></div>
			            				<div class="col-md-3"><p><input type="text" name="no_hp"><br><br></p></div>
			            				<div class="col-md-2"><p>Email</p></div>
			            				<div class="col-md-4"><p><input type="text" name="email"><br></p></div>
	            					</div>
	            				</div>	            			
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Pendidikan Terakhir</p></div>
	            						<div class="col-md-10">
	            							<select name="pendidikan_terakhir">
	            								@foreach($pendidikan_terakhir as $pendidikan_terakhir)
	            									<option value="{{ $pendidikan_terakhir->id_pendidikan_terakhir }}">{{$pendidikan_terakhir->pendidikan_terakhir }}</option>
	            								@endforeach
	            							</select><br><br>
	            						</div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Tanggal Ijazah</p></div>
			            				<div class="col-md-4"><p>
			            					<div class='input-group date' id='datetimepicker1'>
						                    <input type="text" name="tanggal_ijazah">
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>
	            						</div>	       
	            					</div>
	            				</div>	            			
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Status Perkawinan <small>(harus diisi)</small></p></div>
	            						<div class="col-md-9">
	            							<select name="status_perkawinan">
	            								<option value="kawin">Kawin</option>
	            								<option value="belumkawin">Belum Kawin</option>
	            								<option value="janda">Janda</option>
	            								<option value="janda">Duda</option>
	            							</select>
	            						</div>
	            					</div>
	            				</div>
	            			</div>
	            			<!-- <div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>No Kartu Keluarga</p></div>
	            						<div class="col-md-10"><input type="text" name="no_kartu_keluarga"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nama Kepala Keluarga</p></div>
	            						<div class="col-md-10"><input type="text" name="kepala_keluarga"><br><br></div>
	            					</div>
	            				</div>
	            			</div> -->
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Jumlah Anak</p></div>
	            						<div class="col-md-10"><input type="text" name="jumlah_anak"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			<!-- <div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nama Istri</p></div>
	            						<div class="col-md-10"><input type="text" name="nama_istri"><br><br></div>
	            					</div>
	            				</div>
	            			</div> -->
	            			<!-- <div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nama Anak</p></div>
	            						<div class="col-md-10"><input type="text" name="nama_anak"><br><br></div>
	            					</div>
	            				</div>
	            			</div> -->
			            	<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Divisi</p></div>
			            				<div class="col-md-9">
	            							<select name="divisi_id">
	            								@foreach($divisi as $divisi)
	            									<option value="{{ $divisi->id_divisi }}">{{ $divisi->divisi }}</option>
	            								@endforeach
	            							</select>
	            						</div>
			            				<!-- <div class="col-md-2"><p>Jabatan</p></div>
			            				<div class="col-md-4"><p><input type="text" name="jabatan"></p></div> -->
	            					</div>
	            				</div>	            			
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Tanggal Mulai Kerja</p></div>
			            				<div class="col-md-4"><p>
			            					<div class='input-group date' id='datetimepicker1'>
						                    <input type="text" name="tanggal_mulai_kerja">
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>
	            						</div>	 
			            				<div class="col-md-2"><p>Tanggal Keluar</p></div>
			            				<div class="col-md-4"><p>
			            					<div class='input-group date' id='datetimepicker1'>
						                    <input type="text" name="tanggal_keluar">
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>
	            						</div>	       
		        					</div>
		        				</div>
			            	</div>
			            	<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Skype</p></div>
	            						<div class="col-md-10"><input type="text" name="skype"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>No KTP</p></div>
	            						<div class="col-md-10"><input type="text" name="no_ktp"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>No NPWP</p></div>
	            						<div class="col-md-10"><input type="text" name="npwp"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			<hr>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Foto</p></div>
	            						<div class="col-md-10"><input type="text" name="foto" value=""><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			<hr>
	            			<!-- <div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Username</p></div>
			            				<div class="col-md-3"><p><input type="text" name="username"><br></p></div>
			            				<div class="col-md-2"><p>Password</p></div>
			            				<div class="col-md-4"><p><input type="password" name="password"><br></p></div>
	            					</div>
	            				</div>	            			
	            			</div> -->
	            			<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            			<button type="submit">Submit</button>
	            		</form>
	            		</div>
	            	</div>
	            </div>
	        </div>
	     </div>
@endsection

     
