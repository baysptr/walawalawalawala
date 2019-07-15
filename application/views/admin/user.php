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
					<td><strong>LEVEL</strong></td>
					<td><strong>NAMA</strong></td>
					<td><strong>USER</strong></td>
					<td colspan="2" width="20%"><div onclick="tambahUser()" class="btn btn-sm btn-block btn-primary"><span class="fa fa-user-plus"></span> Tambah</div> </td>
				</tr>
			</thead>
			<tbody>
			<?php $no = 1; foreach ($users as $user){ ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $user['kode'] ?></td>
					<td><?= $user['nama'] ?></td>
					<td><?= $user['user'] ?></td>
					<td><div onclick="editUser('<?= $user['id'] ?>')" class="btn btn-sm btn-block btn-warning"><span class="fa fa-user-edit"></span> Edit</div></td>
					<td><div onclick="hapusUser('<?= $user['id'] ?>')" class="btn btn-sm btn-block btn-danger"><span class="fa fa-user-times"></span> Delete</div></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</main>

<?= $footer ?>

<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="modalUserLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalUserLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="formUser">
					<input type="hidden" name="id" id="id">
					<table class="table">
						<tr>
							<td><strong>Nama</strong></td>
							<td><input type="text" name="nama" id="nama" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>No. Telp</strong></td>
							<td><input type="text" name="telp" id="telp" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>e-Mail</strong></td>
							<td><input type="email" name="email" id="email" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>User</strong></td>
							<td><input type="text" name="user" id="user" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Password</strong></td>
							<td><input type="password" name="pass" id="pass" class="form-control"></td>
						</tr>
						<tr>
							<td><strong>Level</strong></td>
							<td>
								<select name="level" id="level" class="form-control">
									<option selected disabled>-- Pilih Level --</option>
									<?php foreach ($level as $data){ ?>
										<option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
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
		$("#modalUser").modal("show");
	}
	function editUser(id) {
		$.ajax({
			url: "<?= site_url() ?>admin/get_user/" + id,
			type: "GET",
			dataType: "JSON",
			success: function (data)
			{
				$("#id").val(data.id);
				$("#nama").val(data.nama);
				$("#telp").val(data.no_telp);
				$("#email").val(data.email);
				$("#user").val(data.user);
				$("#pass").val("");
				$("#level").val(data.id_level).change();
				$("#modalUser").modal("show");
			}
		});
	}
	function insertUser() {
		$.ajax({
			url: '<?= site_url() ?>admin/do_user',
			type: 'POST',
			processData: false,
			cache: false,
			contentType: false,
			data: new FormData($("#formUser")[0]),
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
				url: "<?= site_url() ?>admin/hapus_user/" + id,
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
