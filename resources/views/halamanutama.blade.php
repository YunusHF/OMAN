@extends('layouts.tampilan')


@section('konten')
@if ($aktivasi == "aktif")
	<div class="presentation-container">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
            		<div class="tampil-hasil">
            			<div class="container">
				            <div class="row">
				            	<h2>Selamat Datang di<br>Office Management Application PT. Nufaza</h2>
				            	<hr>
				            	<div class="col-md-2">
						            <div class="icon-bundar">
						            	<a href="datadiri">
						            		<div class="icon">
						            			<i class="fa fa-user"></i><br>Profil
						            		</div>
						            	</a>
						            </div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="presensi">
						            		<div class="icon">
				            					<i class="fa fa-check-square"></i><br>Presensi
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="penugasan">
						            		<div class="icon">
				            					<i class="fa fa-plane"></i><br>Penugasan
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="gaji">
						            		<div class="icon">
				            					<i class="fa fa-money"></i><br>Gaji
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="cuti">
						            		<div class="icon">
				            					<i class="fa fa-calendar-o"></i><br>Cuti
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="lembur">
						            		<div class="icon">
				            					<i class="fa fa-coffee"></i><br>Lembur
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="rapat">
						            		<div class="icon">
				            					<i class="fa fa-users"></i><br>Manajemen<br>Rapat
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="manajemen_proyek">
						            		<div class="icon">
				            					<i class="fa fa-table"></i><br>Manajemen<br>Proyek
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="to_do_list">
						            		<div class="icon">
				            					<i class="fa fa-list-ul"></i><br>To-do-list
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="penilaian_kinerja">
						            		<div class="icon">
				            					<i class="fa fa-trophy"></i><br>Penilaian<br>Kinerja
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="inventaris">
						            		<div class="icon">
				            					<i class="fa fa-book"></i><br>Inventaris
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            	<div class="col-md-2">
				            		<div class="icon-bundar">
				            			<a href="http://kb.nufaza.com/">
						            		<div class="icon">
				            					<i class="fa fa-user"></i><br>LMS
				            				</div>
				            			</a>
				            		</div>
				            	</div>
				            </div>
				        </div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
@else
<div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #b0e0a1;">
			<h1>Anda Belom Aktif</h1>
		</div>
</div>
@endif
@endsection
