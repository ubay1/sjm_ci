<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#2196f3">
	<title>Login Page</title>

	<link rel="manifest" href="<?= base_url() ?>assets/manifest.json">

	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/logo/logo.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/BS/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/mdi/css/mdi.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/SA/ubay.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login.css">

	<!-- JS -->
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/SA/sweetalert-dev.js"></script>
	
</head>

<body>

<?php  
	// mengambil dari data dinamik
	if (isset($error)) {
		echo $error;
	}
?>

<div class="main">
	<div id="fieldset">
		<form method="POST" action="<?= base_url(); ?>"  id="form-submit">

			<div class="text-center sjm">Slamet Jaya Motor 
				<span class="mdi mdi-car-connected"></span>
			</div> <br>
			
			<div id="form_input_login">
				<?= form_error('username'); ?>
				<label class="txt">username</label>
				<input type="text" name="username" class="form-control" placeholder="username:xxxx" value="<?= set_value('username'); ?>">

				<?= form_error('password'); ?>
				<label class="txt">password</label>
				<div class="input-group">
				    <input type="password" id="password" name="password" class="form-control" placeholder="password:xxxx" value="<?= set_value('password'); ?>">
				    <div class="input-group-btn">
				      <a class="btn btn-default btn1" style=" border-radius:0px 5px 5px 0px; box-shadow:0px 3px 0px rgba(0,0,0, .5); padding:3.5px 10px;">
				        <i class="mdi mdi-eye-off mdi-18px"></i>
				      </a>
				      <a class="btn btn-default btn2" style=" border-radius:0px 5px 5px 0px; box-shadow:0px 3px 0px rgba(0,0,0, .5); padding:3.5px 10px; display:none;">
				        <i class="mdi mdi-eye mdi-18px"></i>
				      </a>
				    </div>
				</div> <br>

				<?= form_error('hakakses'); ?>
				<label class="txt">hak akses</label>
				<select class="form-control" required name="hakakses">
					<option disabled selected>--- pilih hak akses ---</option>
					<option value="cs">Customer</option>
					<option value="adm">Admin</option>
					<option value="mk">Mekanik</option>
				</select>

				<button class="btn btn-login" type="submit" name="submit"><span class="mdi mdi-key-variant"></span> 

				<img id="loader" style="display:none;" height="18" src="<?= base_url('assets/images/loader/loading2.gif'); ?>"> 

				Masuk</button>
				
				<a id="link-daftar" href="<?= base_url() ?>daftar" class="pull-right btn btn-link"> <span class="mdi mdi-account-plus mdi-18px"></span> Daftar Disini</a> <br><br>

			</div>
		</form>	
	</div>
</div>

<script type="text/javascript">

	$(".btn1").click(function(){
		$(".btn1").hide();
		$(".btn2").show();
		$("#password").attr('type', 'text');
	});

	$(".btn2").click(function(){
		$(".btn1").show();
		$(".btn2").hide();
		$("#password").attr('type', 'password');
	});
</script>

</body>
</html>