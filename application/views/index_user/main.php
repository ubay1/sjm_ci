

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/indeks.css">

	<!-- BODY -->
	<div>

		<div class="bg_halaman">
			
			<div id="bg_img_atas">
				<img id="img_atas" src="assets/images/bg-atas.jpg">
			</div>
			<div id="teks_atas">
				Mobil/motor anda mengalami kerusakan dijalan ?
				tetapi anda bingung karena bengkel jauh dari tempat anda.
				jangan khawatir, karna kami dapat membantu anda.
				untuk melihat ketentuan layanan kami, anda bisa melihat pada menu <b>peraturan SJM</b>.
				unutk melihat daftar harga dari layanan Slamet jaya Motor anda bisa klik button dibawah ini. 
				<a  class="btn btn-block btn-info" id="btn-daftar-bgatas" href="<?= base_url()?>sjm/daftarharga">LIST HARGA SERVICE</a>
			</div>

			<div id="bg_teks_atas">
				<a  class="btn btn-block btn-info " id="btn-daftar-bgatas" href="<?= base_url()?>sjm/daftarharga">LIST HARGA SERVICE</a>
			</div>
			
			<div id="teks_atas2">
				<div>Apa yang anda butuhkan ? </div>
			</div>

			<div id="menu_service1">
				<img class="img-menu" src="assets/images/servisumum.svg"></img>
				<a href="<?= base_url() ?>sjm/servisumum" 
					class="btn btn-info btn-block btn-pilihmenu">PILIH
				</a>
			</div>

			<div id="menu_service2">
				<img class="img-menu" src="assets/images/servisdarurat.svg"></img>
				<a href="<?= base_url() ?>sjm/servisdarurat" 
					class="btn btn-info btn-block btn-pilihmenu">PILIH
				</a>
			</div>

			<div id="menu_service3">
				<img class="img-menu" src="assets/images/gantisparepart.svg"></img>
				<a href="<?= base_url() ?>sjm/gantiaccu" class="btn btn-info btn-block btn-pilihmenu">PILIH</a>
			</div>

		</div>

		

		<?php
			// mengakses library buatan sendiri
			// $this->profil->nama_saya(); echo br();
			// $this->profil->alamat_saya("jl.kodiklat TNI buaran serpong");
			// $username   = $_SESSION['username_pelanggan'];
			// $namalengkp = $_SESSION['namalengkap'];
			// $id_user    = $_SESSION['id_user'];
			// echo "hasil dari session = ".$username .", ".$namalengkp.", ".$id_user;
		?>
		
	</div>