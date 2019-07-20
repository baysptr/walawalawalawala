<html lang="en" class="h-100">
<head>
	<?= $head ?>
</head>
<body class="d-flex flex-column h-100">
<?= $header ?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0"><br/>
	<div class="container">
		<table class="table">
			<thead class="table-dark">
				<tr>
					<td><strong>NO</strong></td>
					<td><strong>JURUSAN</strong></td>
					<td><strong>TAHUN</strong></td>
					<td><strong>KERJA</strong></td>
					<td><strong>WIRAUSAHA</strong></td>
					<td><strong>BELUM KERJA</strong></td>
					<td><strong>KULIAH</strong></td>
					<td><strong>AKUMULATIF</strong></td>
					<td><strong>BOBOT</strong></td>
					<td colspan="2" width="20%"><div onclick="tambahUser()" class="btn btn-sm btn-block btn-primary"><span class="fa fa-user-plus"></span> Tambah</div> </td>
				</tr>
			</thead>
			<tbody>
			<?php $no = 1; foreach ($kerjas as $kerja){ ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $kerja['kode'] ?></td>
					<td><?= $kerja['tahun'] ?></td>
					<td><?= $kerja['jml_kerja'] ?></td>
					<td><?= $kerja['jml_wirausaha'] ?></td>
					<td><?= $kerja['jml_blmkerja'] ?></td>
					<td><?= $kerja['jml_kuliah'] ?></td>
					<td><?= $kerja['total'] ?></td>
					<td><?= $kerja['bobot'] ?></td>
					<td><div onclick="editUser('<?= $kerja['id'] ?>')" class="btn btn-sm btn-block btn-warning"><span class="fa fa-user-edit"></span> Edit</div></td>
					<td><div onclick="hapusUser('<?= $kerja['id'] ?>')" class="btn btn-sm btn-block btn-danger"><span class="fa fa-user-times"></span> Delete</div></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</main>

<?= $footer ?>

<div class="modal fade" id="modalAlternative" tabindex="-1" role="dialog" aria-labelledby="modalAlternativeLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalAlternativeLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="formAlternative">
					<input type="hidden" name="id" id="id">
					<table class="table">
						<tr>
							<td><strong>Jurusan</strong></td>
							<td><select name="jurusan" id="jurusan" class="form-control">
									<option disabled selected>-- Pilih Jurusan --</option>
									<?php foreach ($alternatives as $alternative){ ?>
										<option value="<?= $alternative['id'] ?>"><?= $alternative['nama'] ?></option>
									<?php } ?>
								</select></td>
						</tr>
						<tr>
							<td><strong>Tahun</strong></td>
							<td><input type="text" name="tahun" id="tahun" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Bobot</strong></td>
							<td><input type="text" name="bobot" id="bobot" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Yang Kerja</strong></td>
							<td><input type="text" name="kerja" id="kerja" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Yang Wirausaha</strong></td>
							<td><input type="text" name="wirausaha" id="wirausaha" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Yang Belum Kerja</strong></td>
							<td><input type="text" name="blm_kerja" id="blm_kerja" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Kuliah</strong></td>
							<td><input type="text" name="kuliah" id="kuliah" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Akumulatif</strong></td>
							<td><input type="text" name="total" id="total" class="form-control" readonly></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" onclick="hitung()">Hitung</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="insertUser()">Save changes</button>
			</div>
		</div>
	</div>
</div>

<?= $javascript; ?>

<script>
	function tambahUser() {
		$("#modalAlternative").modal("show");
	}
	function hitung() {
		var total = (Number($("#kerja").val()) + Number($("#wirausaha").val()) + Number($("#kuliah").val())) - Number($("#blm_kerja").val());
		$("#total").val(total);
	}
	function editUser(id) {
		$.ajax({
			url: "<?= site_url() ?>kabkk/get_dunia_kerja/" + id,
			type: "GET",
			dataType: "JSON",
			success: function (data)
			{
				$("#id").val(data.id);
				$("#jurusan").val(data.id_jurusan).change();
				$("#tahun").val(data.tahun);
				$("#bobot").val(data.bobot);
				$("#kerja").val(data.jml_kerja);
				$("#wirausaha").val(data.jml_wirausaha);
				$("#blm_kerja").val(data.jml_blmkerja);
				$("#kuliah").val(data.jml_kuliah);
				$("#total").val(data.total);
				$("#modalAlternative").modal("show");
			}
		});
	}
	function insertUser() {
		$.ajax({
			url: '<?= site_url() ?>kabkk/do_dunia_kerja',
			type: 'POST',
			processData: false,
			cache: false,
			contentType: false,
			data: new FormData($("#formAlternative")[0]),
			success: function (data) {
				// console.log(data);
				if (data === "TRUE") {
					window.location.reload();
				} else {
					alert("Data Gagal Input !!!");
					window.location.reload();
				}
			}
		});
	}

	function hapusUser(id) {
		if(confirm("apakah anda yakin untuk menghapus bari data ini?")===true){
			$.ajax({
				url: "<?= site_url() ?>kabkk/hapus_dunia_kerja/" + id,
				type: "GET",
				success: function (data)
				{
					window.location.reload();
				}
			});
		}
	}
</script>

</body>
</html>
