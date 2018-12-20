<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/profilmekanik.css'); ?>">

<?php foreach ($profil as $tmp_profil) :?>
<div class="profil">

	<div id="bg_foto_profil">
		<img src="<?= base_url() ?>assets/images/bgprofil-xs2.jpg" id="img_background">
	</div>

	<div class="foto_profil">
		<img src="<?= base_url('uploads/'.$tmp_profil->foto_mekanik); ?>" id="fotouser">

		<div class="nama_user"><?= $tmp_profil->nama_mekanik; ?></div>
	</div>

</div>
<?php endforeach; ?>

<div class="container-fluid bg-riwayat-pesanan">

<div id="teks-riwayatanda">Riwayat Pekerjaan Saya</div> 

<button class="btnrefresh">
	<img src="<?= base_url() ?>assets/images/refresh.png" class="btn_refresh_cetak">
</button>
<button class="btncetak">
	<img src="<?= base_url() ?>assets/images/print.png" class="btn_refresh_cetak">
</button>

<br><br>
<!-- ambil data riwayat pkerjaan -->
<div id="tampil_data_riwayat"></div>


<script>
	$(document).ready(function() {

		function loaddata() 
		{
			$("#tampil_data_riwayat").load('http://localhost/sjm_all_update2/sjm_mekanik/riwayat_pekerjaan', 
				function(callback){ 
				$("#tampil_data_riwayat").html(callback);
			});
		}

		loaddata();

		$(".btnrefresh").click(function(){
			$("#tampil_data_riwayat").load('http://localhost/sjm_all_update2/sjm_mekanik/riwayat_pekerjaan', 
				function(callback){ 
				$("#tampil_data_riwayat").html(callback);
			});
		});

	});
</script>