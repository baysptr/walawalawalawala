<html lang="en">
<head>
	<title>SPKSKETSA</title>
	<link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/css/freelancer.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/logoSMK.png">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body id="page-top" onload="$('#summary').hide();$('#c_table').hide();$('#c_error').hide();$('#cariPeminatan')[0].reset();">
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">SPKSKETSA</a>
		<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item mx-0 mx-lg-1">
					<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
					<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Kelulusan</a>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
					<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#kerja">Dunia Kerja</a>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
					<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#sarpras">Sarana</a>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
					<a class="nav-link py-3 px-0 px-lg-3 rounded bg-danger" href="<?= site_url() ?>auth">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
	<div class="container d-flex align-items-center flex-column">

		<!-- Masthead Avatar Image -->
		<img class="masthead-avatar mb-5" src="<?= base_url() ?>assets/img/logoSMK.png" alt="">

		<!-- Masthead Heading -->
		<h1 class="masthead-heading text-uppercase mb-0">Selamat datang</h1>

		<!-- Icon Divider -->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Masthead Subheading -->
		<p class="masthead-subheading font-weight-light mb-0">Selamat datang di Sistem Pengambilan Keputusan SMK KETINTANG SURABAYA</p>

	</div>
</header>

<!-- About Section -->
<section class="page-section bg-info text-white mb-0" id="about">
	<div class="container">

		<!-- About Section Heading -->
		<h2 class="page-section-heading text-center text-uppercase text-white">Sistem Peminatan Jurusan SMK KETINTANG SURABAYA</h2>

		<!-- Icon Divider -->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- About Section Content -->
		<div class="row">
			<div class="col-lg-4 ml-auto">
				<p class="lead">Sistem Penunjang SMK Ketintang adalah Progam yang ditujukan untuk calon siswa untuk memilih kompetensi keahlian
					sesuai dengan minat dan bakatnya.</p>
			</div>
			<div class="col-lg-4 mr-auto">
				<p class="lead">Metode yang digunakan adalah Multi Factor Evaluation Process dimana metode ini memberikan bobot nilai kepada
					kriteria yang dianggap penting dalam mempengaruhi alternatif pilihan kompetensi keahlian</p>
			</div>
		</div>

		<!-- About Section Button -->
		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-light" href="#contact">
				<i class="fas fa-angle-double-down mr-2"></i>
				Mulai
			</a>
		</div>

	</div>
</section>

<!-- Contact Section -->
<section class="page-section" id="contact">
	<div class="container">

		<!-- Contact Section Heading -->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kriteria Kelulusan</h2>

		<!-- Icon Divider -->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Contact Section Form -->
		<div class="row">
			<div class="col-lg-8 mx-auto">
				Kriteria Kelulusan di SMK Ketintang telah terinput otomatis dari sistem dan tidak perlu memilih.
				Silahkan klik tombol "Next" untuk melanjutkan progam.
				<hr/>
				<table class="table table-striped">
					<thead class="table-info">
					<tr>
						<td><strong>NO</strong></td>
						<td><strong>KOMPETENSI KEAHLIAN</strong></td>
						<td><strong>PRESENTASE KELULUSAN</strong></td>
						<td><strong>BOBOT</strong></td>
					</tr>
					</thead>
					<tbody>
					<?php $no = 1; foreach ($kelulusans as $kelulusan){ ?>
						<tr>
							<td style="text-align: center"><?= $no++ ?></td>
							<td><?= $kelulusan['nama'] ?></td>
							<td style="text-align: center"><?= $kelulusan['persentase'] ?>%</td>
							<td style="text-align: center"><?= $kelulusan['bobot'] ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-info" href="#kerja">
				<i class="fas fa-angle-double-down mr-2"></i>
				Next
			</a>
			<a class="btn btn-xl btn-outline-info" href="#about">
				<i class="fas fa-angle-double-up mr-2"></i>
				Back
			</a>
		</div>
	</div>
</section>

<section class="page-section bg-primary text-white mb-0" id="kerja">
	<div class="container">

		<!-- Contact Section Heading -->
		<h2 class="page-section-heading text-center text-uppercase text-white mb-0">Kriteria Penyerapan Dunia Kerja</h2>

		<!-- Icon Divider -->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Contact Section Form -->
		<div class="row">
			<div class="col-lg-8 mx-auto">
				Kriteria Penyerapan Dunia Kerja di SMK Ketintang telah terinput otomatis dari sistem dan tidak perlu memilih.
				Silahkan klik tombol "Next" untuk melanjutkan progam.
				<hr/>
				<table class="table table-striped">
					<thead class="table-info">
					<tr>
						<td><strong>NO</strong></td>
						<td><strong>KOMPETENSI KEAHLIAN</strong></td>
						<td><strong>JUMLAH PENYERAPAN KERJA</strong></td>
						<td><strong>BOBOT</strong></td>
					</tr>
					</thead>
					<tbody style="color: white">
					<?php $no = 1; foreach ($kerjas as $kerja){ ?>
						<tr>
							<td style="text-align: center"><?= $no++ ?></td>
							<td><?= $kerja['nama'] ?></td>
							<td style="text-align: center"><?= $kerja['jml_kerja'] ?></td>
							<td style="text-align: center"><?= $kelulusan['bobot'] ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-light" href="#sarpras">
				<i class="fas fa-angle-double-down mr-2"></i>
				Next
			</a>
			<a class="btn btn-xl btn-outline-light" href="#contact">
				<i class="fas fa-angle-double-up mr-2"></i>
				Back
			</a>
		</div>
	</div>
</section>


<section class="page-section" id="sarpras">
	<div class="container">

		<!-- Contact Section Heading -->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kriteria Sarana dan Prasarana</h2>

		<!-- Icon Divider -->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Contact Section Form -->
		<div class="row">
			<div class="col-lg-8 mx-auto">
				Kriteria Sarana Prasaran di SMK Ketintang telah terinput otomatis dari sistem dan tidak perlu memilih.
				Silahkan klik tombol "Next" untuk melanjutkan progam.
				<hr/>
				<table class="table table-striped">
					<thead class="table-info">
					<tr>
						<td><strong>NO</strong></td>
						<td><strong>NAMA SARPRAS</strong></td>
						<td><strong>BOBOT</strong></td>
					</tr>
					</thead>
					<tbody>
					<?php $no = 1; foreach ($saranas as $sarana){ ?>
						<tr>
							<td style="text-align: center"><?= $no++ ?></td>
							<td><?= $sarana['nama'] ?></td>
							<td style="text-align: center"><?= $sarana['bobot'] ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-info" href="#penghasilan">
				<i class="fas fa-angle-double-down mr-2"></i>
				Next
			</a>
			<a class="btn btn-xl btn-outline-info" href="#kerja">
				<i class="fas fa-angle-double-up mr-2"></i>
				Back
			</a>
		</div>
	</div>
</section>

<form id="myForm" action="<?= site_url() ?>welcome/do_peminatan" method="post">
	<section class="page-section bg-info text-white mb-0" id="penghasilan">
		<div class="container">

			<!-- Contact Section Heading -->
			<h2 class="page-section-heading text-center text-uppercase text-white mb-0">Kriteria Penghasilan Orang Tua</h2>

			<!-- Icon Divider -->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Contact Section Form -->
			<div class="row">
				<div class="col-lg-8 mx-auto">
					Kriteria Penghasilan Orang Tua, Calon Siswa bisa memilih beberapa kriteria pengahasilan yang telah ada dengan memilih box dibawah ini.
					Penghasilan Orang Tua merupakan hasil bagi dari Penghasiilan Bapak dan Penghasilan Ibu.
					Jika 1 Orang saja yang berpenghasilan silahkan langsung memilih tanpa perlu dibagi.
					Lalu klik logo simpan.
					<hr/>
					<div class="form-group">
						<label>Penghasilan Orang Tua</label>
						<select name="penghasilan" id="penghasilan" class="form-control" onchange="myPenghasilan(this.value)">
							<option selected disabled>-- Pilih Penghasilan Orang Tua --</option>
							<?php foreach ($penghasilans as $penghasilan){ ?>
								<option value="<?= $penghasilan['id'] ?>"><?= $penghasilan['ranges'] ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>

			<div class="text-center mt-4">
				<a class="btn btn-xl btn-outline-light" href="#pelajaran">
					<i class="fas fa-angle-double-down mr-2"></i>
					Save and Next
				</a>
				<a class="btn btn-xl btn-outline-light" href="#sarpras">
					<i class="fas fa-angle-double-up mr-2"></i>
					Back
				</a>
			</div>
		</div>
	</section>

	<section class="page-section" id="pelajaran">
		<div class="container">

			<!-- Contact Section Heading -->
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kriteria Nilai Mata Pelajaran</h2>

			<!-- Icon Divider -->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Contact Section Form -->
			<div class="row">
				<div class="col-lg-8 mx-auto">
					Kriteria Nilai, Calon Siswa menginputkan nilai yang ada di Ijazah / SKHUN Sementara diambil dari Nilai Rata-Rata Rapor.
					Lalu klik tombol "Simpan".
					<hr/>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Matematika</label>
							<input type="text" name="mat" id="mat" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>TIK</label>
							<input type="text" name="tik" id="tik" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Bhs. Inggris</label>
							<input type="text" name="inggris" id="inggris" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>Desain Gambar</label>
							<input type="text" name="desain" id="desain" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Bhs. Indonesia</label>
							<input type="text" name="indo" id="indo" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div class="text-center mt-4">
				<a class="btn btn-xl btn-outline-info" href="#pengenalan">
					<i class="fas fa-angle-double-down mr-2"></i>
					Save and Next
				</a>
				<a class="btn btn-xl btn-outline-info" href="#penghasilan">
					<i class="fas fa-angle-double-up mr-2"></i>
					Back
				</a>
			</div>
		</div>
	</section>

	<section class="masthead bg-primary text-white text-center" id="pengenalan">
		<div class="container d-flex align-items-center flex-column">

			<!-- Masthead Heading -->
			<h1 class="masthead-heading text-uppercase mb-0">KRITERIA PEMINATAN</h1>

			<!-- Icon Divider -->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Masthead Subheading -->
			<p class="masthead-subheading font-weight-light mb-0">Kriteria Peminatan, Calon Siswa akan diberi pertanyaan dan memilih jawaban
				sesuai dengan minat dan kepercayaan dirinya pada suatu kompetensi keahlian yang ada di SMK Ketintang Surabaya.
				Klik "Mulai" untuk memulai pertanyaan dan pada akhir pertanyaan muncul hasil dari Sistem Peminatan</p>

			<div class="text-center mt-4">
				<a class="btn btn-xl btn-outline-light" href="#pernyataan">
					<i class="fas fa-angle-double-down mr-2"></i>
					Mulai
				</a>
			</div>

		</div>
	</section>

	<section class="page-section" id="pernyataan">
		<div class="container">

			<!-- Contact Section Heading -->
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sistem Peminatan Jurusan</h2>

			<!-- Icon Divider -->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Contact Section Form -->
			<div class="row">
				<div class="col-lg-8 mx-auto">
					Isilah dan nyatakan minat bakat anda
					<hr/>
					<?php
					$f=5;
					for($i=0;$i<12;$i++){
						echo "<div class='form-group'><label>Pernyataan ke - ".($i+1)."</label><br/><select name='pernyataan[]' id='pernyataan[]' class='form-control' onchange='myPenghasilan(this.value)'><option selected disabled>-- Silahkan pilih pernyataan --</option>";
						for($k=($f-5);$k<$f;$k++){
							echo "<option value='".$peminatan[$k]['id']."'>".$peminatan[$k]['pernyataan']."</option>";
//						echo "<br/>pertanyaan ke - ".$k;
						}
						$f += 5;
						echo "</select></div>";
					}
					?>
				</div>
			</div>

			<div class="text-center mt-4">
				<!--			<button type="submit" class="btn btn-xl btn-outline-info">-->
				<!--				<i class="fas fa-angle-double-down mr-2"></i>-->
				<!--				Summary Results-->
				<!--			</button>-->
				<a class="btn btn-xl btn-outline-info" href="javascript:;" onclick="insertPeminatan()">
					<i class="fas fa-angle-double-down mr-2"></i>
					Summary Results
				</a>
				<a class="btn btn-xl btn-outline-info" href="#pengenalan">
					<i class="fas fa-angle-double-up mr-2"></i>
					Back
				</a>
			</div>
		</div>
	</section>
</form>

<section class="page-section bg-secondary text-white mb-0" id="summary">
	<div class="container">

		<!-- Contact Section Heading -->
		<h2 class="page-section-heading text-center text-uppercase text-white mb-0">Summary</h2>

		<!-- Icon Divider -->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Contact Section Form -->
		<div class="row">
			<div class="col-lg-8 mx-auto">
				Penentuan ini sifat nya tidak mutlak. Semua aktifitas ini akan tersimpan dalam sistem dan data baru direcord ini mempunyai kode sebagai berikut <strong id="kode"></strong>
				<hr style="background-color: white"/>
				<div id="piechart" style="width: 900px; height: 500px;"></div>
				<table class="table" style="color: white;">
					<tr>
						<td>Akuntansi dan Keuangan Lembaga</td>
						<td id="akl"></td>
					</tr>
					<tr>
						<td>Otomatisasi dan Tata Kelola Perkantoran</td>
						<td id="otkp"></td>
					</tr>
					<tr>
						<td>Bisnis Daring dan Pemasaran</td>
						<td id="bdp"></td>
					</tr>
					<tr>
						<td>Teknik Komputer dan Jaringan</td>
						<td id="tkj"></td>
					</tr>
					<tr>
						<td>Multimedia</td>
						<td id="mm"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section class="page-section bg-primary text-white" id="hasil">
	<div class="container">

		<!-- Contact Section Heading -->
		<h2 class="page-section-heading text-center text-white text-uppercase mb-0">Check Data Peminatan</h2>

		<!-- Icon Divider -->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Contact Section Form -->
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<p class="text-center">Pada Halaman ini dibuat untuk anda yang akan melakukan chect hasil peminatan yang sudah anda lakukan sebelumnya</p>
				<hr/>
				<div class="form-row">
					<div class="form-group col-md-10">
						<label>Kode Hasil Peminatan Anda?</label>
						<form id="cariPeminatan"><input type="text" name="kode" id="kode" class="form-control"></form>
					</div>
					<div class="form-group col-md-2">
						<label>&nbsp;</label><br/>
						<input type="button" onclick="cariPeminatan()" class="btn btn-warning btn-outline-light" value="Cari!">
					</div>
				</div>
				<div id="c_error"><h2 class="text-warning text-center">MAAF DATA YANG ANDA CARI TIDAK KAMI TEMUKAN!</h2></div>
				<div id="c_table">
					Penentuan ini sifat nya tidak mutlak. Semua aktifitas ini akan tersimpan dalam sistem dan data baru direcord ini mempunyai kode sebagai berikut <strong id="kode"></strong>
					<br/><br/>
					<table class="table" style="color: white;">
						<tr>
							<td>Akuntansi dan Keuangan Lembaga</td>
							<td id="c_akl"></td>
						</tr>
						<tr>
							<td>Otomatisasi dan Tata Kelola Perkantoran</td>
							<td id="c_otkp"></td>
						</tr>
						<tr>
							<td>Bisnis Daring dan Pemasaran</td>
							<td id="c_bdp"></td>
						</tr>
						<tr>
							<td>Teknik Komputer dan Jaringan</td>
							<td id="c_tkj"></td>
						</tr>
						<tr>
							<td>Multimedia</td>
							<td id="c_mm"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-light" href="#about" onclick="$('#summary').hide();$('#c_table').hide();$('#c_error').hide();$('#cariPeminatan')[0].reset();">
				<i class="fas fa-angle-double-down mr-2"></i>
				Mulai Lagi?
			</a>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="footer text-center">
	<div class="container">
		<div class="row">

			<!-- Footer Location -->
			<div class="col-lg-6 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Location</h4>
				<p class="lead mb-0">SMK KETINTANG SURABAYA
					<br>Jl. Ketintang No. 147 - 151 Surabaya
					<br> (031) 8284121 - 82937398</p>
			</div>

			<!-- Footer Social Icons -->
			<div class="col-lg-6 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Around the Web</h4>
				<a class="btn btn-outline-light btn-social mx-1" href="#www.facebook.com">
					<i class="fab fa-fw fa-facebook-f"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#www.twitter.com">
					<i class="fab fa-fw fa-twitter"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#www.instgram.com">
					<i class="fab fa-fw fa-linkedin-in"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-dribbble"></i>
				</a>
			</div>

		</div>
	</div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
	<div class="container">
		<small>Copyright &copy; SPKSKETSA 2019</small>
	</div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?= base_url() ?>assets/js/jqBootstrapValidation.js"></script>
<script src="<?= base_url() ?>assets/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="<?= base_url() ?>assets/js/freelancer.min.js"></script>
<script>
	function myPenghasilan(val) {
		console.log("Bobot Penghasilan: "+val);
	}
	function insertPeminatan() {
		$.ajax({
			url: '<?= site_url() ?>welcome/do_peminatan',
			type: 'POST',
			processData: false,
			cache: false,
			contentType: false,
			data: new FormData($("#myForm")[0]),
			success: function (data) {
				if(confirm("Apakah anda ingin menampilkan data kesimpulan?")===true){
					console.log(data);
					var mydata = JSON.parse(data);
					$("#akl").html(mydata.akl + "%");
					$("#otkp").html(mydata.otkp + "%");
					$("#bdp").html(mydata.bdp + "%");
					$("#tkj").html(mydata.tkj + "%");
					$("#mm").html(mydata.mm + "%");
					$("#kode").html(mydata.kode);
					google.charts.load('current', {'packages':['corechart']});
					google.charts.setOnLoadCallback(drawChart);
					function drawChart() {
						var data = google.visualization.arrayToDataTable([
							['Task', 'Hours per Day'],
							['AKL', mydata.akl],
							['OTKP', mydata.otkp],
							['BDP', mydata.bdp],
							['TKJJ', mydata.tkj],
							['MM', mydata.mm]
						]);
						var options = {'title':'Summary Data Peminatan Jurusan'};

						// Display the chart inside the <div> element with id="piechart"
						var chart = new google.visualization.PieChart(document.getElementById('piechart'));
						chart.draw(data, options);
					}
					$("#summary").show();
					location.href = "#summary";
				}else{
					var mydata = JSON.parse(data);
					if(confirm("Perhatikan!. Ingat atau simpan kode hasil peminatan anda?["+mydata.kode+"]")===true){
						$("#myForm")[0].reset();
						$("#summary").hide();
						location.href = "#about";
					}
				}
			}
		});
	}

	function cariPeminatan() {
		$.ajax({
			url: '<?= site_url() ?>welcome/get_kode',
			type: 'POST',
			processData: false,
			cache: false,
			contentType: false,
			data: new FormData($("#cariPeminatan")[0]),
			success: function (data) {
				var mydata = JSON.parse(data);
				if(mydata===null){
					$("#cariPeminatan")[0].reset();
					$("#c_error").show();
				}else{
					$("#c_error").hide();
					$("#c_akl").html(mydata.akl+"%");
					$("#c_otkp").html(mydata.otkp+"%");
					$("#c_bdp").html(mydata.bdp+"%");
					$("#c_tkj").html(mydata.tkj+"%");
					$("#c_mm").html(mydata.mm+"%");
					$("#c_table").show();
				}
			}
		});
	}

</script>

</body>

</html>
