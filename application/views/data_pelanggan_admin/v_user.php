
<div id="content">
<div class=" table table-responsive jarak-table">
	<table id="table_id">
		<thead>
		<tr>
			<th class="text-center">id user</th>
			<th class="text-center">username</th>
			<th class="text-center">password</th>
			<th class="text-center">nama lengkap</th>
			<th class="text-center">alamat</th>
			<th class="text-center">nomor HP</th>
			<th class="text-center">foto profil</th>
			<th class="text-center">Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($user as $tmp_user) :?>
		
			<tr>
				<td><?= $tmp_user->id_user; ?></td>
				<td><?= $tmp_user->username_user; ?></td>
				<td><?= $tmp_user->password_user; ?></td>
				<td><?= $tmp_user->nama_user; ?></td>
				<td><?= $tmp_user->alamat_user; ?></td>
				<td><?= $tmp_user->no_tlp_user; ?></td>
				<td><img id="img_profiluser" class="img_profil" height="40" width="auto" src="<?= base_url() ?>uploads/<?= $tmp_user->foto_user; ?>"></td>
				<td>
					<a class="btn_crud" title="edit" href="<?= base_url()  ?>sjm_admin/edit_pelanggan?id=<?= $tmp_user->id_user; ?>">
						<img src="<?= base_url() ?>assets/images/updates.png" height="22">
					</a>
					<a class="btn_crud btn_hapus_user" title="hapus" href="<?= base_url() ?>sjm_admin/hapus_pelanggan?id=<?= $tmp_user->id_user; ?>">
						<img src="<?= base_url() ?>assets/images/deletes.png" height="22">
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
</div>

<script type="text/javascript">
	$("#table_id").DataTable();	
</script>

<!-- <script type="text/javascript">
		setTimeout(function(){
			window.location.reload()
		},10000);
</script> -->