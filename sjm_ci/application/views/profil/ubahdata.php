
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ubahdata_user.css'); ?>">

<div class="text-center h3 alert alert-info">Setelan Profil</div>

<div class="container jarak_form">

<?php foreach ($data_user as $tmp_user) :?>
<form action="proses_ubahdatauser" method="POST" enctype="multipart/form-data">
	
	<!-- <div class="h4">Id</div> -->
	<input  required  class="form-control form_setelan"  name="id" id="id_user" type="hidden" value="<?= $tmp_user->id_user; ?>">

	<input type="hidden" name="gambarlama" value="<?= $tmp_user->foto; ?>">

	<div class="h4">Nama lengkap</div>
	<input required  class="form-control form_setelan"  name="namalengkap" id="namalengkap" type="text" value="<?= $tmp_user->namalengkap; ?>">

	<div class="h4">Alamat</div>
	<input required  class="form-control form_setelan"  name="alamat" id="alamat" type="text" value="<?= $tmp_user->alamat; ?>">

	<div class="h4">Nomor Telepon</div>
	<input required  class="form-control form_setelan"  name="no_tlp" id="no_tlp" type="text" value="<?= $tmp_user->no_tlp;; ?>">

	<br><br>

	<button type="submit" name="submit" id="btn_upload" class="btn btn-primary btn-block form-control">Update</button>
</form>

<?php endforeach; ?>

</div>