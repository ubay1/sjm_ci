
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/logo/logo.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/BS/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/mdi/css/mdi.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fa/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/SA/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login.css">

	<!-- JS -->
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/SA/sweetalert.min.js"></script>
	
</head>

<body>

<?php  
	// mengambil dari data dinamik
	if (isset($error)) {
		echo $error;
	}
?>

<main class="main">
<div id="fieldset">
		<form method="POST" action="<?= base_url()?>">
			<div class="text-center sjm">Slamet Jaya Motor <span class="mdi mdi-car-connected"></span></div> <br>

			<?= form_error('username'); ?>
			<label class="txt">username</label>
			<input type="text" name="username" class="form-control" placeholder="username:xxxx" value="<?= set_value('username'); ?>">

			<?= form_error('password'); ?>
			<label class="txt">password</label>
			<input type="password" name="password" class="form-control" placeholder="password:xxxx" value="<?= set_value('password'); ?>">

			<button class="btn btn-primary" type="submit" name="submit"><span class="mdi mdi-key-variant"></span> Masuk</button>

			<a id="link-daftar" href="<?= base_url() ?>daftar" class="pull-right btn btn-link"> <span class="mdi mdi-account-plus mdi-18px"></span> Daftar Disini</a>
		</form>
</div>
</main>

</body>
</html>