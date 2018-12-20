<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= $title ?></title>

	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/logo/logo.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/BS/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/mdi/css/mdi.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fa/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/SA/ubay.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/style.css">

	<!-- JS -->
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/SA/sweetalert-dev.js"></script>
</head>

<body>

<?php  
	
	if (isset($sukses)) {
		echo $sukses;
	}
	else{
		echo $gagal;
	}

?>

</body>
</html>