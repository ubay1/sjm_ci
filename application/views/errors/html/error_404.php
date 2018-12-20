<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	text-align:center;
	margin: 10px;
/*	border: 1px solid #D0D0D0;*/
	/*box-shadow: 0 0 8px #D0D0D0;*/
}

.error-page {
	margin: 15px;
}

.img-responsive{height:200px; width:auto;}

</style>
</head>
<body>
	<div id="container">
		<img src="assets/images/404.gif"  class="img-responsive">
		<div class="error-page"><?php echo "Halaman yang  anda akses tidak ditemukan pada direktori kami" ?>
		</div>
	</div>
</body>
</html>