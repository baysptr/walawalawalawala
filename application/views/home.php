<html lang="en">
<head>
	<title>SMK. XXXX</title>
	<link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">SMK. Ketintang Sby.</a>
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
		<img class="masthead-avatar mb-5" src="<?= base_url() ?>assets/img/avataaars.svg" alt="">

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
		<p class="masthead-subheading font-weight-light mb-0">Selamat datang di Sistem Pengambilan Keputusan SMK. Ketintang SBY</p>

	</div>
</header>

<!-- About Section -->
<section class="page-section bg-info text-white mb-0" id="about">
	<div class="container">

		<!-- About Section Heading -->
		<h2 class="page-section-heading text-center text-uppercase text-white">Sistem Peminatan Jurusan SMK Ketintang Sby.</h2>

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
				<p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
			</div>
			<div class="col-lg-4 mr-auto">
				<p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
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
				ddjasd akjdsdjadk kdh kdh sadkjh ksdjdh kjh dkjh kdjs hskjhds kdsha kdjh kjsadh kjshd kjhsakjdh ksjdh kjsdh kjsah dcxk
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
				ddjasd akjdsdjadk kdh kdh sadkjh ksdjdh kjh dkjh kdjs hskjhds kdsha kdjh kjsadh kjshd kjhsakjdh ksjdh kjsdh kjsah dcxk
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
			<a class="btn btn-xl btn-outline-dark" href="#sarpras">
				<i class="fas fa-angle-double-down mr-2"></i>
				Next
			</a>
			<a class="btn btn-xl btn-outline-dark" href="#contact">
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
				ddjasd akjdsdjadk kdh kdh sadkjh ksdjdh kjh dkjh kdjs hskjhds kdsha kdjh kjsadh kjshd kjhsakjdh ksjdh kjsdh kjsah dcxk
				<hr/>
				<table class="table table-striped">
					<thead class="table-info">
					<tr>
						<td><strong>NO</strong></td>
						<td><strong>KOMPETENSI KEAHLIAN</strong></td>
						<td><strong>BOBOT</strong></td>
					</tr>
					</thead>
					<tbody>
					<?php $no = 1; foreach ($saranas as $sarana){ ?>
						<tr>
							<td style="text-align: center"><?= $no++ ?></td>
							<td><?= $sarana['nama'] ?></td>
							<td style="text-align: center"><?= $sarana['jumlah'] ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-info" href="#">
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

<!-- Footer -->
<footer class="footer text-center">
	<div class="container">
		<div class="row">

			<!-- Footer Location -->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Location</h4>
				<p class="lead mb-0">2215 John Daniel Drive
					<br>Clark, MO 65243</p>
			</div>

			<!-- Footer Social Icons -->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Around the Web</h4>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-facebook-f"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-twitter"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-linkedin-in"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-dribbble"></i>
				</a>
			</div>

			<!-- Footer About Text -->
			<div class="col-lg-4">
				<h4 class="text-uppercase mb-4">About Freelancer</h4>
				<p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by
					<a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
			</div>

		</div>
	</div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
	<div class="container">
		<small>Copyright &copy; Your Website 2019</small>
	</div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>

<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/img/portfolio/cabin.png" alt="">
							<!-- Portfolio Modal - Text -->
							<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#" data-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/img/portfolio/cake.png" alt="">
							<!-- Portfolio Modal - Text -->
							<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#" data-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/img/portfolio/circus.png" alt="">
							<!-- Portfolio Modal - Text -->
							<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#" data-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/img/portfolio/game.png" alt="">
							<!-- Portfolio Modal - Text -->
							<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#" data-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/img/portfolio/safe.png" alt="">
							<!-- Portfolio Modal - Text -->
							<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#" data-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/img/portfolio/submarine.png" alt="">
							<!-- Portfolio Modal - Text -->
							<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#" data-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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

</body>

</html>
