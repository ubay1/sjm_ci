<style type="text/css">
	.form-control{margin-bottom:30px; border:inset; border-width:1.5px;}
	.jarak-form{margin-top:70px; display:flex; justify-content:center;}
}
</style>

<div id="content">
<div class="container jarak-form">
	<div class="bg_edit_form">
	<form action="<?= base_url('sjm_admin/prosesedit_mekanik'); ?>" method="POST">
		<?php foreach ($mekanik as $tmp_mekanik) : ?>

			<input class="form-control" type="text" name="id_mekanik" value="<?= $tmp_mekanik->id_mekanik; ?>">
			<input class="form-control" type="text" name="username_mekanik" value="<?= $tmp_mekanik->username_mekanik; ?>">
			<input class="form-control" type="text" name="password_mekanik" value="<?= $tmp_mekanik->password_mekanik; ?>">
			<input class="form-control" type="text" name="nama_mekanik" value="<?= $tmp_mekanik->nama_mekanik; ?>">
			
			<input class="form-control" type="text" name="kontak_mekanik" value="<?= $tmp_mekanik->kontak_mekanik; ?>">

			<button class="btn btn-primary" type="submit" name="submit"><span class="mdi mdi-telegram"></span> Kirim</button>

		<?php endforeach; ?>

	</form>
	</div>
</div>
</div>