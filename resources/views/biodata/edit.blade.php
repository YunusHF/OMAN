
	            			
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
	            		<form action="/biodata/{{$biodata->id_karyawan}}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
	            				<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nama</p></div>
	            						<div class="col-md-10">
	            							<input type="text" name="nama_karyawan" value="{{$biodata->nama_karyawan}}"><br>
	            						</div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Tempat Lahir</p></div>
			            				<div class="col-md-10">
			            					<input type="text" name="tempat_lahir" value="{{$biodata->tempat_lahir}}"><br><br>
			            				</div>
			            			</div>
			            		</div>
			            	</div>

			            	<div class="form-group">
	            				<div class="container">
	            					<div class="row">
			            				<div class="col-md-2"><p>Tanggal Lahir</p></div>
			            				<div class="col-md-8">
			            					<div class='input-group date' id='datetimepicker1'>
						                    <input type="date" name="tanggal_lahir" value="{{$biodata->tanggal_lahir}}"><br><br>
						                    

	            						</div>	       
		        					</div>
		        				</div>
			            	</div>
			            	<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Alamat</p></div>
	            						<div class="col-md-10"><input type="text" name="alamat" value="{{$biodata->alamat}}"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nomor Handphone</p></div>
			            				<div class="col-md-10"><p><input type="text" name="nomor_hp" value="{{$biodata->nomor_hp}}"><br><br></p></div>
			            			</div>
			            		</div>
			            	</div>

			            	<div class="form-group">
	            				<div class="container">
	            					<div class="row">
			            				<div class="col-md-2"><p>Email</p></div>
			            				<div class="col-md-10"><p><input type="text" name="email" value="{{$biodata->email}}"><br></p></div>
	            					</div>
	            				</div>	            			
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Pendidikan Terakhir</p></div>
	            						<div class="col-md-8">
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
			            				<div class="col-md-8"><p>
			            					<div class='input-group date' id='datetimepicker1'>
						                    <input type="date" name="tanggal_ijazah" value="{{$biodata->tanggal_ijazah}}">
						                    
	            						</div>	       
	            					</div>
	            				</div>	            			
	            			</div>

	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Status Perkawinan</p></div>
	            						<div class="col-md-10">
	            							<select name="status_perkawinan">
	            								@foreach($status_perkawinan as $status_perkawinan)
	            									<option value="{{ $status_perkawinan->id_status_perkawinan }}">{{ $status_perkawinan->status_perkawinan }}</option>
	            								@endforeach
	            							</select><br><br>
	            						</div>
	            					</div>
	            				</div>
	            			</div>
	            			
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nomor Kartu Keluarga</p></div>
	            						<div class="col-md-10"><input type="text" name="nomor_kartu_keluarga" value="{{$biodata->nomor_kartu_keluarga}}"><br><br></div>
	            					</div>
	            				</div>
	            			</div>

	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Divisi</p></div>
	            						<div class="col-md-10">
	            							<select name="divisi_id">
	            								@foreach($divisi as $divisi)
	            									<option value="{{ $divisi->id_divisi }}">{{ $divisi->divisi }}</option>
	            								@endforeach
	            							</select><br><br>
	            						</div>
	            					</div>
	            				</div>
	            			</div>

	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Jabatan</p></div>
	            						<div class="col-md-10">
	            							<select name="divisi_id">
	            								@foreach($jabatan as $jabatan)
	            									<option value="{{ $jabatan->id_jabatan }}">{{ $jabatan->jabatan }}</option>
	            								@endforeach
	            							</select><br><br>
	            						</div>
	            					</div>
	            				</div>
	            			</div>

	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Tanggal Mulai Kerja</p></div>
	            						<div class="col-md-8">
	            							<div class='input-group date' id='datetimepicker1'>
						                    <input type="date" name="tanggal_mulai_kerja" value="{{$biodata->tanggal_mulai_kerja}}">
						                   
	            						</div>
	            					</div>
	            				</div>
	            			</div>

	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Tanggal Berhenti Kerja</p></div>
	            						<div class="col-md-8">
	            							<div class='input-group date' id='datetimepicker1'>
						                    <input type="date" name="tanggal_berhenti_kerja" value="{{$biodata->tanggal_berhenti_kerja}}">
						                    
	            						</div>
	            					</div>
	            				</div>
	            			</div>

			            	<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Akun Skype</p></div>
	            						<div class="col-md-10"><input type="text" name="akun_skype" value="{{$biodata->akun_skype}}"><br><br></div>
	            					</div>
	            				</div>
	            			</div>

	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Nomor KTP</p></div>
	            						<div class="col-md-10"><input type="text" name="nomor_ktp" value="{{$biodata->nomor_ktp}}"><br><br></div>
	            					</div>
	            				</div>
	            			</div>

	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>NPWP</p></div>
	            						<div class="col-md-10"><input type="text" name="npwp" value="{{$biodata->npwp}}"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	        
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Foto</p></div>
	            						<div class="col-md-10"><input type="file" name="foto" value="{{$biodata->foto}}"><br><br></div>
	            					</div>
	            				</div>
	            			</div>
	            			
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
	            			<hr>
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

     

