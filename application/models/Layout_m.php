<?php


class Layout_m extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function head(){
		$html = '<meta charset="utf-8">
				<title>Shidiq</title>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<link href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
				<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">';
		echo $html;
	}
	public function header($level){
		if($this->session->userdata['id_level'] == '1'){
			$html = '<header>
					<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
						<a class="navbar-brand" href="#">SPK SMK. XXXX</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'admin">| Home |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'admin/user">| User |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'admin/alternative">| Alternative |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'admin/penghasilan">| Penghasilan Orang Tua |</a>
								</li>
							</ul>
							<h4 class="my-2 my-sm-0" style="color: white;">'.$level.' &nbsp;</h4>
							<button onclick="if(confirm(\'Apakah anda yakin akan logout?\')===true){ window.location = \''.site_url('auth/do_logout').'\'; }" class="btn btn-outline-danger my-2 my-sm-0" type="button">Log Out</button>
						</div>
					</nav>
				</header>';
		}elseif($this->session->userdata['id_level'] == '2'){
			$html = '<header>
					<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
						<a class="navbar-brand" href="#">SPK SMK. XXXX</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'wakakur">| Home |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'wakakur/peminatan">| Peminatan |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'wakakur/kelompok">| Kelompok Mapel |</a>
								</li>
							</ul>
							<h4 class="my-2 my-sm-0" style="color: white;">'.$level.' &nbsp;</h4>
							<button onclick="if(confirm(\'Apakah anda yakin akan logout?\')===true){ window.location = \''.site_url('auth/do_logout').'\'; }" class="btn btn-outline-danger my-2 my-sm-0" type="button">Log Out</button>
						</div>
					</nav>
				</header>';
		}elseif($this->session->userdata['id_level'] == '3'){
			$html = '<header>
					<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
						<a class="navbar-brand" href="#">SPK SMK. XXXX</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'Kakom">| Home |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'kakom/perbobotan">| Perbobotan |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'kakom/kelulusan">| Data Kelulusan |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'kakom/summary">| Data Summary |</a>
								</li>
							</ul>
							<h4 class="my-2 my-sm-0" style="color: white;">'.$level.' &nbsp;</h4>
							<button onclick="if(confirm(\'Apakah anda yakin akan logout?\')===true){ window.location = \''.site_url('auth/do_logout').'\'; }" class="btn btn-outline-danger my-2 my-sm-0" type="button">Log Out</button>
						</div>
					</nav>
				</header>';
		}elseif($this->session->userdata['id_level'] == '4'){
			$html = '<header>
					<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
						<a class="navbar-brand" href="#">SPK SMK. XXXX</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'kabkk">| Home |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'kabkk/dunia_kerja">| Penyerapan Dunia Kerja |</a>
								</li>
							</ul>
							<h4 class="my-2 my-sm-0" style="color: white;">'.$level.' &nbsp;</h4>
							<button onclick="if(confirm(\'Apakah anda yakin akan logout?\')===true){ window.location = \''.site_url('auth/do_logout').'\'; }" class="btn btn-outline-danger my-2 my-sm-0" type="button">Log Out</button>
						</div>
					</nav>
				</header>';
		}elseif($this->session->userdata['id_level'] == '5'){
			$html = '<header>
					<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
						<a class="navbar-brand" href="#">SPK SMK. XXXX</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'sarpras">| Home |</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="'.site_url().'sarpras/sarpras">| Saran dan Prasarana |</a>
								</li>
							</ul>
							<h4 class="my-2 my-sm-0" style="color: white;">'.$level.' &nbsp;</h4>
							<button onclick="if(confirm(\'Apakah anda yakin akan logout?\')===true){ window.location = \''.site_url('auth/do_logout').'\'; }" class="btn btn-outline-danger my-2 my-sm-0" type="button">Log Out</button>
						</div>
					</nav>
				</header>';
		}
		echo $html;
	}
	public function footer(){
		$html = '<footer class="footer mt-auto py-3">
					<div class="container">
						<span class="text-muted">SPK SMK. XXXX &copy; 2019 - 2020</span>
					</div>
				</footer>';
		return $html;
	}
	public function javascript(){
		$html = '<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>';
		echo $html;
	}
}
