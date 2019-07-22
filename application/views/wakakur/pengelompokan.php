<html lang="en" class="h-100">
<head>
	<?= $head ?>
</head>
<body class="d-flex flex-column h-100">
<?= $header ?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0"><br/>
	<div class="container">
		<h1><strong>Kelompok: <?= $data->nama ?></strong></h1>
		<form action="<?= site_url() ?>wakakur/do_pengelompokan" method="post">
			<input type="hidden" name="id" id="id" value="<?= $data->id ?>">
			<table class="table">
				<tr>
					<td>Alternative</td>
					<td><select class="form-control" name="jurusan" id="jurusan">
							<option disabled selected>-- Silahkan Pilih Alternative --</option>
							<?php foreach ($jurusans as $jurusan){ ?>
								<option value="<?= $jurusan['id'] ?>"><?= $jurusan['nama'] ?></option>
							<?php } ?>
						</select></td>
					<td><button type="submit" class="btn btn-sm btn-primary">Tambah</button> </td>
				</tr>
			</table>
		</form>
		<table class="table">
			<thead class="table-dark">
				<tr>
					<td><strong>NO</strong></td>
					<td><strong>KODE ALTERNATIVE</strong></td>
					<td><strong>ALTERNATIVE</strong></td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ($details as $detail){ ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $detail['kode'] ?></td>
						<td><?= $detail['nama'] ?></td>
						<td><div class="btn btn-sm btn-block btn-danger" onclick="if(confirm('Apakah anda yakin akan hapus data ini?')===true){ window.location='<?= site_url() ?>wakakur/do_hapus_pengelompokan/<?= $detail['id_detail'] ?>'; }">Hapus</div> </td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</main>

<?= $footer ?>

<?= $javascript; ?>

</body>
</html>
