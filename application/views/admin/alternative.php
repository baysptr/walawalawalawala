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
					<td><strong>KODE</strong></td>
					<td><strong>NAMA</strong></td>
					<td colspan="2" width="20%"><div onclick="tambahUser()" class="btn btn-sm btn-block btn-primary"><span class="fa fa-user-plus"></span> Tambah</div> </td>
				</tr>
			</thead>
			<tbody>
			<?php $no = 1; foreach ($alternatives as $alternative){ ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $alternative['kode'] ?></td>
					<td><?= $alternative['nama'] ?></td>
					<td><div onclick="editUser('<?= $alternative['id'] ?>')" class="btn btn-sm btn-block btn-warning"><span class="fa fa-user-edit"></span> Edit</div></td>
					<td><div onclick="hapusUser('<?= $alternative['id'] ?>')" class="btn btn-sm btn-block btn-danger"><span class="fa fa-user-times"></span> Delete</div></td>
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
							<td><strong>Nama</strong></td>
							<td><input type="text" name="nama" id="nama" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Kode</strong></td>
							<td><input type="text" name="kode" id="kode" class="form-control"></td>
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
		$("#modalAlternative").modal("show");
	}
	function editUser(id) {
		$.ajax({
			url: "<?= site_url() ?>admin/get_alternative/" + id,
			type: "GET",
			dataType: "JSON",
			success: function (data)
			{
				$("#id").val(data.id);
				$("#nama").val(data.nama);
				$("#kode").val(data.kode);
				$("#modalAlternative").modal("show");
			}
		});
	}
	function insertUser() {
		$.ajax({
			url: '<?= site_url() ?>admin/do_alternative',
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
				url: "<?= site_url() ?>admin/hapus_alternative/" + id,
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
