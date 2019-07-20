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
					<td><strong>KELOMPOK MAPEL</strong></td>
					<td><strong>JURUSAN</strong></td>
					<td><strong>KODE MAPEL</strong></td>
					<td colspan="2" width="20%"><div onclick="tambahUser()" class="btn btn-sm btn-block btn-primary"><span class="fa fa-user-plus"></span> Tambah</div> </td>
				</tr>
			</thead>
			<tbody>
			<?php $no = 1; foreach ($kelompoks as $kelompok){ ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $kelompok['nama'] ?></td>
					<td><?= $kelompok['nama_jurusan'] ?></td>
					<td><?= $kelompok['kode'] ?></td>
					<td><div onclick="editUser('<?= $kelompok['id'] ?>')" class="btn btn-sm btn-block btn-warning"><span class="fa fa-user-edit"></span> Edit</div></td>
					<td><div onclick="hapusUser('<?= $kelompok['id'] ?>')" class="btn btn-sm btn-block btn-danger"><span class="fa fa-user-times"></span> Delete</div></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</main>

<?= $footer ?>

<div class="modal fade" id="modalKelompok" tabindex="-1" role="dialog" aria-labelledby="modalKelompokLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalKelompokLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="formKelompok">
					<input type="hidden" name="id" id="id">
					<table class="table">
						<tr>
							<td><strong>Nama Kelompok</strong></td>
							<td><input type="text" name="nama" id="nama" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Mapel</strong></td>
							<td>
								<select name="mapel" id="mapel" class="form-control">
									<option selected disabled>-- Pilih Level --</option>
									<?php foreach ($jurusans as $jurusan){ ?>
										<option value="<?= $jurusan['id'] ?>"><?= $jurusan['nama'] ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="insertUser()">Save changes</button>
			</div>
		</div>
	</div>
</div>

<?= $javascript; ?>

<script>
	function tambahUser() {
		$("#modalKelompok").modal("show");
	}
	function editUser(id) {
		$.ajax({
			url: "<?= site_url() ?>wakakur/get_kelompok/" + id,
			type: "GET",
			dataType: "JSON",
			success: function (data)
			{
				$("#id").val(data.id);
				$("#nama").val(data.nama);
				$("#mapel").val(data.id_alternative).change();
				$("#modalKelompok").modal("show");
			}
		});
	}
	function insertUser() {
		$.ajax({
			url: '<?= site_url() ?>wakakur/do_kelompok',
			type: 'POST',
			processData: false,
			cache: false,
			contentType: false,
			data: new FormData($("#formKelompok")[0]),
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
				url: "<?= site_url() ?>wakakur/hapus_kelompok/" + id,
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
