@extends('layouts.tampilan')
  @section('konten')
@if ($adadata == true)
	@foreach($datadiri as $datadiri)
    	<div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-12">
	            		 <div class="row">
        					<div class="panel panel-default">
               						 <div class="panel-heading">
	            						<a href="cetakbiodata"><i class="fa fa-print"></i><br>Cetak Biodata</a>
	            						<a href="/biodata/{{$datadiri->id_karyawan}}/edit"></i><br>Edit Biodata</a>
	            						<a href=""><br>Tambah Data Keluarga</a>
	            					</div>
	            			</div>
	            		</div>
	            		<div id="user-biodata">
	            			<div class="user-summary">
	            				<div class="container">
	            					<div class="row">
	            					
	            						<div class="col-md-3 col-sm-12">
	            							<img src="uploads/{{ $datadiri->foto }}">
	            						</div>
	            						
	            						<div class="col-md-9">
	            							<div class="col-md-12 col-sm-12" ><h1><strong>{{$datadiri->nama_karyawan}}</strong></h1></div>
	            							
	            						</div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="user-data">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-9">
				            				<div class="col-md-5 col-sm-5"><p>Nama Lengkap</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6 col-sm-6"><p>{{$datadiri->nama_karyawan}}</p></div>
				            			</div>

				            			<div class="col-md-9">
				            				<div class="col-md-5 col-sm-5"><p>Nomor Induk Pegawai (NIP)</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6 col-sm-6"><p>{{$datadiri->nip}}</p></div>
				            			</div>
				            			
				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Tempat dan Tanggal Lahir</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->tempat_lahir}}, {{$datadiri->tanggal_lahir}}</p></div>
				            			</div>

				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Alamat</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->alamat}}</p></div>
				            			</div>

				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Nomor Handphone</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->nomor_hp}}</p></div>
				            			</div>

				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Email</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->email}}</p></div>
				            			</div>

				            			<div class="col-md-9">
				            				@foreach($status_perkawinan as $status_perkawinan)
				            				
				            				@if ($status_perkawinan->id_status_perkawinan == $datadiri->status_perkawinan_id)
				            					<div class="col-md-5"><p>Status Perkawinan</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$status_perkawinan->status_perkawinan}}</p></div>
				            				@endif
				            				
				     
				            				@endforeach	
										</div>


				            			<div class="col-md-9">
				            				@foreach($jabatan as $jabatan)
				            				
				            				@if ($jabatan->id_jabatan == $datadiri->jabatan_id)
				            					<div class="col-md-5"><p>Jabatan</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$jabatan->jabatan}}</p></div>
				            				@endif
				            				
				     
				            			@endforeach
				            			</div>
				            			
				            			<div class="col-md-9">
				            				@foreach($divisi as $divisi)
				            				
				            				@if ($divisi->id_divisi == $datadiri->divisi_id)
				            					<div class="col-md-5"><p>Divisi</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$divisi->divisi}}</p></div>
				            				@endif
				            				
				     
				            			@endforeach
				            			</div>

				            			

				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Tanggal Mulai Kerja</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->tanggal_mulai_kerja}}</p></div>	
				            			</div>

				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Tanggal Keluar</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->tanggal_berhenti_kerja}}</p></div>	
				            			</div>

				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Skype</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->akun_skype}}</p></div>	
				            			</div>

				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>NPWP</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->npwp}}</p></div>	
				            			</div>

				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>No KTP (NIK)</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->nomor_ktp}}</p></div>	
				            			</div>

				            			<div class="col-md-9">
				            			@foreach($pendidikan_terakhir as $pendidikan_terakhir)			            				
				            				@if ($pendidikan_terakhir->id_pendidikan_terakhir == $datadiri->pendidikan_terakhir_id)
				            					<div class="col-md-5"><p>Pendidikan Terakhir</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$pendidikan_terakhir->pendidikan_terakhir}}</p></div>
				            				@endif				     
				            			@endforeach
				            			</div>
				        				
				        				<div class="col-md-9">
				            				<div class="col-md-5"><p>Tanggal Ijazah</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->tanggal_ijazah}}</p></div>	
				            			</div>
				            			

				            			
					            		
					            		@if ($adakeluarga == true)
					            		@foreach ($keluarga as $keluarga)
					            		@if ($keluarga->no_kartu_keluarga == $datadiri->nomor_kartu_keluarga)
					        				<div class="col-md-9">
					            				<div class="col-md-5"><p>Nomor Kartu Keluarga</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$datadiri->nomor_kartu_keluarga}}</p></div>
					            			</div>
					            			<div class="col-md-9">
					            				<div class="col-md-5"><p>Nama Kepala Keluarga</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>{{$keluarga->kepala_keluarga}}</p></div>
					            			</div>
					            				@else

					            				<h4>Tambah Anggota Keluarga</h4>
					            				<h5><a href="/kartukeluarga/{{$datadiri->id_karyawan}}/edit">Klik Disini</a></h5>
					            				
					            				@endif
					            				
					            			@endforeach
					            		@else
					            			<h4>Buat Biodata Keluarga</h4>
					            			<h5><a href="createkeluarga">Klik Disini</a></h5>
					            		@endif

				            			<!-- <div class="col-md-9">
				            				<div class="col-md-5"><p>Istri</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>Milladina Noer Hanifah</p></div>
				            			</div>
				            			<div class="col-md-9">
				            				<div class="col-md-5"><p>Anak</p></div><div class="col-md-1"><p>:</p></div><div class="col-md-6"><p>Azinudin Achzab</p><p>Raka Pratama Tiyarno</p><p>Muhammad Rasyid Hidayat</p></div>		            			
					            		</div> -->
				            			<div class="col-md-9">
				            			@foreach($anggota_keluarga as $anggota_keluarga)
				            				@if($anggota_keluarga->status_keluarga_id == '1')
				            				<div class="col-md-5"><p>Suami</p></div>
				            				<div class="col-md-1"><p>:</p></div>	
				            				<div class="col-md-6"><p>{{$anggota_keluarga->nama_anggota_keluarga}}</p></div>

				            				@elseif($anggota_keluarga->status_keluarga_id == '2')
				            				<div class="col-md-5"><p>Istri</p></div>
				            				<div class="col-md-1"><p>:</p></div>	
				            				<div class="col-md-6"><p>{{$anggota_keluarga->nama_anggota_keluarga}}</p></div>

				            				@elseif($anggota_keluarga->status_keluarga_id == '3')
				            				<div class="col-md-5"><p>Anak</p></div>
				            				<div class="col-md-1"><p>:</p></div>	
				            				<div class="col-md-6"><p>{{$anggota_keluarga->nama_anggota_keluarga}}</p></div>

				            				@endif
				            			@endforeach
				            			</div>

					            		
					            		<div class="col-md-10">
					            			<hr>
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
	     @endforeach
@else
<div class="presentation-container">
    <div class="container">
        <div class="row">
        	<div class="panel panel-default">
                <div class="panel-heading"><h4><strong>Anda Belum Mengisi Biodata</strong></h4></div>

                <div class="panel-body">
                    <div class="col-md-12">
                    	<h3>Silahkan Mengisi Biodata Anda Terlebih Dahulu</h3>
                    	<h2><a href="biodata/create"><i class="fa fa-hand-o-down" aria-hidden="true"></i><br>Klik Disini</a></h2>
                    </div>
                    
		            </div>

	            	<div class="col-md-6">
	            		
	            	</div>
	            </div>
	        </div>
        </div>
    </div>
</div>
@endif
@endsection

	 