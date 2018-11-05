

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/indeks.css">

<div class="container-fluid">	

	<!-- BODY -->
	<div class="container-fluid">

		<div class="row"  style="float:left;">		
				<div class="col-lg-7 col-md-8 col-sm-12  col-xs-12">
					<img id="img-atas" src="assets/images/bg-atas.jpg" class="img-responsive">
					<!-- <object id="img-atas" type="image/svg+xml" data="<'?= base_url() ?>assets/images/bg-atas2.svg">This browser sucks</object> -->
				</div>
				<div class="col-lg-5 col-md-4 col-sm-12 col-xs-12" id="teks-bgatas">
				Mobil/motor anda mengalami kerusakan dijalan ?
				tetapi anda bingung karena bengkel jauh dari tempat anda.
				jangan khawatir, karna kami dapat membantu anda.
				untuk melihat ketentuan layanan kami, anda bisa melihat pada menu <b>peraturan SJM</b>.
				unutk melihat daftar harga dari layanan Slamet jaya Motor anda bisa klik button dibawah ini. 
				<a  class="btn btn-block btn-info" id="btn-daftar-bgatas" href="<?= base_url()?>sjm/daftarharga">Daftar Harga</a>
				</div>
		</div>

		<div class="cleafloat" style="clear:both;"></div>

		<div class="text-center" id="teks-apayangdibutuhkan">
			Apa yang anda butuhkan ? 
		</div>

		<?php
			// mengakses library buatan sendiri
			// $this->profil->nama_saya(); echo br();
			// $this->profil->alamat_saya("jl.kodiklat TNI buaran serpong");
			$username   = $_SESSION['username_pelanggan'];
			$namalengkp = $_SESSION['namalengkap'];
			$id_user    = $_SESSION['id_user'];
			// echo "hasil dari session = ".$username .", ".$namalengkp.", ".$id_user;
		?>

		<div class="row">
				<div class="jarak-menu col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<img class="img-menu" src="assets/images/servisumum.svg"></img>
					<a href="<?= base_url() ?>sjm/servisumum" class="btn btn-info btn-block btn-pilihmenu">PILIH</a>
				</div>
				<div class="jarak-menu col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<img class="img-menu" src="assets/images/servisdarurat.svg"></img>
					<a href="<?= base_url() ?>sjm/servisdarurat" class="btn btn-info btn-block btn-pilihmenu">PILIH</a>
				</div>
				<div class="jarak-menu col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<img class="img-menu" src="assets/images/gantisparepart.svg"></img>
					<a href="" class="btn btn-info btn-block btn-pilihmenu">PILIH</a>
				</div>
				<div class="jarak-menu col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
					<img class="img-menu" src="assets/images/konsultasi.svg"></img>
					<a href="#" class="btn btn-info btn-block btn-pilihmenu">PILIH</a>
				</div>

		</div>
		<br><br>
	</div>
	
</div>