
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#2196f3">
	<title>Regist Page</title>

	<link rel="manifest" href="<?= base_url() ?>assets/manifest.json">

	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/logo/logo.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/BS/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/mdi/css/mdi.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fa/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/SA/ubay.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/daftar.css">

	<!-- JS -->
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/SA/sweetalert-dev.js"></script>
	
</head>

<body>

<div class="main">
<div id="fieldset">
	<form action="<?= base_url() ?>daftar/do_upload" method="POST" enctype="multipart/form-data">
			<div class="text-center sjm">Slamet Jaya Motor <span class="mdi mdi-car-connected"></span></div> <br>
		
		<div id="form_input_daftar">
			<label class="txt">Username</label>
			<input required type="text"  name="username_user" class="form-control" placeholder="username:xxxx">

			<label class="txt">Password</label>
			<input required type="password" name="password_user" class="form-control" placeholder="password:xxxx">

			<label class="txt">Nama Lengkap</label>
			<input required type="text" name="nama_user" class="form-control" placeholder="nama lengkap:xxxx">

			<label class="txt">Alamat Lengkap</label>
			<input required type="text" name="alamat_user" class="form-control" placeholder="cth:kp.buaran rt.xx/xx no.2a, Serpong">

			<label class="txt">Nomor Telepon</label><br>
			<small><i>*nomor whatsapp anda</i></small>
			<input required type="text" name="no_tlp_user" class="form-control" placeholder="nomor hp:xxxx">

			<label class="txt">Foto Profil</label>
			<input required type="file" name="userfile" id="file-upload" class="form-control form_setelan" placeholder="pilih foto">

			<button class="btn btn-daftar" type="submit" name="submit"><span class="mdi mdi-telegram"></span> Kirim</button>

			<a id="link-daftar" href="<?= base_url() ?>login" class="pull-right btn btn-link"> <span class="mdi mdi-key mdi-18px"></span> Masuk</a>
		</div>
	</form>
</div>
</div>

</body>
</html>