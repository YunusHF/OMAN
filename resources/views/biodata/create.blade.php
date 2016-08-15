<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SI OMAN</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/media-queries.css">
        <link rel="stylesheet" href="../assets/css/jquery-ui.css">
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script type="text/javascript">
	        $(function () {
	            $('#datetimepicker1').datetimepicker();
	        });
		</script>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        
        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Office Management PT. Nufaza</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="portfolio.html"><i class="fa fa-user"></i><br>Profil Karyawan</a>
						</li>
						<li>
							<a href="services.html"><i class="fa fa-tasks"></i><br>Proyek Yang Dikerjakan</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

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
	            								<option value="volvo">SD</option>
	            								<option value="volvo">SMP</option>
	            								<option value="volvo">SMA</option>
	            								<option value="volvo">D1</option>
	            								<option value="volvo">D2</option>
	            								<option value="volvo">D3</option>
	            								<option value="volvo">D4</option>
	            								<option value="volvo">S1</option>
	            								<option value="volvo">S2</option>
	            								<option value="volvo">S3</option>
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
	            								<option value="volvo">Kawin</option>
	            								<option value="volvo">Belum Kawin</option>
	            								<option value="volvo">Janda</option>
	            								<option value="volvo">Duda</option>
	            							</select>
	            						</div>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="form-group">
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
	            			</div>
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
			            				<div class="col-md-3"><p><input type="text" name="divisi"><br></p></div>
			            				<div class="col-md-2"><p>Jabatan</p></div>
			            				<div class="col-md-4"><p><input type="text" name="jabatan"></p></div>
	            					</div>
	            				</div>	            			
	            			</div>
	            			<div class="form-group">
	            				<div class="container">
	            					<div class="row">
	            						<div class="col-md-2"><p>Tanggal Mulai Kerja</p></div>
			            				<div class="col-md-4"><p>
			            					<div class='input-group date' id='datetimepicker1'>
						                    <input type="text" name="tangal_mulai_kerja">
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

        <!-- Javascript -->

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

