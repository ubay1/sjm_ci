<style type="text/css">
	.form-control{margin-bottom:30px; border:inset; border-width:1.5px;}
	.jarak-form{margin-top:70px; display:flex; justify-content:center;}
}
</style>

<div id="content">
<div class="container jarak-form">
	<div class="bg_edit_form">
	<form action="<?= base_url('sjm_admin/prosesedit_pelanggan'); ?>" method="POST">
		<?php foreach ($user as $tmp_user) : ?>

			<input class="form-control" type="text" name="id_user" value="<?= $tmp_user->id_user; ?>">
			<input class="form-control" type="text" name="username_user" value="<?= $tmp_user->username_user; ?>">
			<input class="form-control" type="text" name="password_user" value="<?= $tmp_user->password_user; ?>">
			<input class="form-control" type="text" name="nama_user" value="<?= $tmp_user->nama_user; ?>">
			<input class="form-control" type="text" name="alamat_user" value="<?= $tmp_user->alamat_user; ?>">
			<input class="form-control" type="text" name="no_tlp_user" value="<?= $tmp_user->no_tlp_user; ?>">

			<button class="btn btn-primary" type="submit" name="submit"><span class="mdi mdi-telegram"></span> Kirim</button>

		<?php endforeach; ?>

	</form>
	</div>
</div>
</div>