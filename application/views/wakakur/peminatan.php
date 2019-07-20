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
					<td><strong>PERNYATAAN</strong></td>
					<td><strong>KELOMPOK MAPEL</strong></td>
					<td><strong>KODE MAPEL</strong></td>
					<td><strong>BOBOT</strong></td>
					<td colspan="2" width="20%"><div onclick="tambahUser()" class="btn btn-sm btn-block btn-primary"><span class="fa fa-user-plus"></span> Tambah</div> </td>
				</tr>
			</thead>
			<tbody>
			<?php $no = 1; foreach ($peminatans as $peminatan){ ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $peminatan['pernyataan'] ?></td>
					<td><?= $peminatan['nama_kelompok'] ?></td>
					<td><?= $peminatan['kode'] ?></td>
					<td><?= $peminatan['bobot'] ?></td>
					<td><div onclick="editUser('<?= $peminatan['id'] ?>')" class="btn btn-sm btn-block btn-warning"><span class="fa fa-user-edit"></span> Edit</div></td>
					<td><div onclick="hapusUser('<?= $peminatan['id'] ?>')" class="btn btn-sm btn-block btn-danger"><span class="fa fa-user-times"></span> Delete</div></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</main>

<?= $footer ?>

<div class="modal fade" id="modalPeminatan" tabindex="-1" role="dialog" aria-labelledby="modalPeminatanLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalPeminatanLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="formPeminatan">
					<input type="hidden" name="id" id="id">
					<table class="table">
						<tr>
							<td><strong>Pernyataan</strong></td>
							<td><textarea name="pernyataan" id="pernyataan" class="form-control"></textarea></td>
						</tr>
						<tr>
							<td><strong>Bobot</strong></td>
							<td><input type="text" name="bobot" id="bobot" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Kelompok</strong></td>
							<td>
								<select name="kelompok" id="kelompok" class="form-control">
									<option selected disabled>-- Pilih Level --</option>
									<?php foreach ($kelompoks as $kelompk){ ?>
										<option value="<?= $kelompk['id'] ?>"><?= $kelompk['nama'] ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><strong>Mapel</strong></td>
							<td>
								<select name="mapel" id="mapel" class="form-control"></select>
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
	$(function () {
		$("#kelompok").change(function () {
			var val = $(this).val();
			$.ajax({
				url: "<?= site_url() ?>wakakur/select_jurusan/" + val,
				type: "GET",
				success: function (data) {
					$("#mapel").html(data);
				}
			});
		})
	});

	function tambahUser() {
		$("#modalPeminatan").modal("show");
	}
	function editUser(id) {
		$.ajax({
			url: "<?= site_url() ?>wakakur/get_peminatan/" + id,
			type: "GET",
			dataType: "JSON",
			success: function (data)
			{
				$("#id").val(data.id);
				$("#pernyataan").val(data.pernyataan);
				$("#bobot").val(data.bobot);
				$("#kelompok").val(data.id_kelompok).change();
				$.ajax({
					url: "<?= site_url() ?>wakakur/select_jurusan/" + data.id_kelompok,
					type: "GET",
					success: function (datas) {
						$("#mapel").html(datas);
						$("#mapel").val(data.id_jurusan).change();
					}
				});
				$("#modalPeminatan").modal("show");
			}
		});
	}
	function insertUser() {
		$.ajax({
			url: '<?= site_url() ?>wakakur/do_peminatan',
			type: 'POST',
			processData: false,
			cache: false,
			contentType: false,
			data: new FormData($("#formPeminatan")[0]),
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
				url: "<?= site_url() ?>wakakur/hapus_peminatan/" + id,
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
