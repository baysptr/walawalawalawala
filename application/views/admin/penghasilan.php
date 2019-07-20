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
					<td><strong>BOBOT</strong></td>
					<td><strong>RANGE</strong></td>
					<td colspan="2" width="20%"><div onclick="tambahUser()" class="btn btn-sm btn-block btn-primary"><span class="fa fa-user-plus"></span> Tambah</div> </td>
				</tr>
			</thead>
			<tbody>
			<?php $no = 1; foreach ($penghasilans as $penghasilan){ ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $penghasilan['bobot'] ?></td>
					<td><?= $penghasilan['ranges'] ?></td>
					<td><div onclick="editUser('<?= $penghasilan['id'] ?>')" class="btn btn-sm btn-block btn-warning"><span class="fa fa-user-edit"></span> Edit</div></td>
					<td><div onclick="hapusUser('<?= $penghasilan['id'] ?>')" class="btn btn-sm btn-block btn-danger"><span class="fa fa-user-times"></span> Delete</div></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</main>

<?= $footer ?>

<div class="modal fade" id="modalPenghasilan" tabindex="-1" role="dialog" aria-labelledby="modalPenghasilanLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalPenghasilanLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="formPenghasilan">
					<input type="hidden" name="id" id="id">
					<table class="table">
						<tr>
							<td><strong>Range</strong></td>
							<td><textarea name="range" id="range" class="form-control"></textarea></td>
						</tr>
						<tr>
							<td><strong>Bobot</strong></td>
							<td><input type="text" name="bobot" id="bobot" class="form-control"></td>
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
		$("#modalPenghasilan").modal("show");
	}
	function editUser(id) {
		$.ajax({
			url: "<?= site_url() ?>admin/get_penghasilan/" + id,
			type: "GET",
			dataType: "JSON",
			success: function (data)
			{
				$("#id").val(data.id);
				$("#range").val(data.ranges);
				$("#bobot").val(data.bobot);
				$("#modalPenghasilan").modal("show");
			}
		});
	}
	function insertUser() {
		$.ajax({
			url: '<?= site_url() ?>admin/do_penghasilan',
			type: 'POST',
			processData: false,
			cache: false,
			contentType: false,
			data: new FormData($("#formPenghasilan")[0]),
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
				url: "<?= site_url() ?>admin/hapus_penghasilan/" + id,
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
