<html lang="en">
<head>
	<title>Login Panel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
</head>
<body class="text-center">
<form class="form-signin" style="text-align: left" action="<?= site_url() ?>Auth/do_daftar" method="post">
	<h1 class="h3 mb-3 font-weight-normal">Daftar</h1>
	<label style="text-align: left">Nama</label>
	<input type="text" id="nama" name="nama" class="form-control" required autofocus>
	<label style="text-align: left">No. Telp</label>
	<input type="text" id="telp" name="telp" class="form-control" required>
	<label style="text-align: left">e-Mail</label>
	<input type="text" id="email" name="email" class="form-control" required>
	<label style="text-align: left">Username</label>
	<input type="text" id="user" name="user" class="form-control" required>
	<label style="text-align: left">Password</label>
	<input type="password" id="pass" name="pass" class="form-control" required>
	<hr/>
	<button class="btn btn-sm btn-primary btn-block" type="submit">Daftar</button>
	<a href="<?= site_url() ?>auth" class="btn btn-sm btn-info btn-block">Login!</a>
	<a href="<?= base_url() ?>" class="btn btn-sm btn-warning btn-block">Back!</a>
	<p class="mt-5 mb-3 text-muted">SPK SMK. xxxx &copy; 2019-2020</p>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
