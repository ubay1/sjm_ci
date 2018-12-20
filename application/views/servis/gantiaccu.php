<?php 
date_default_timezone_set('Asia/Jakarta');
?>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/menuservis.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dtpick/jquery.datetimepicker.css">

<div class="servis">
	<div class="bg_img_servis">
		<img src="<?= base_url() ?>assets/images/bg_gantiaccu.jpg" class="img_servis">
	</div>
	<div> <i class="mdi mdi-cash-usd"></i> <a href="<?= base_url() ?>sjm/daftarharga" id="teks_biaya_servis">cek biaya servis </a></div>


	<div class="bg_form_input_servis">

		<?php foreach ($user as $tmp_user) : ?>
		<form action="<?= base_url('sjm/pesananumum') ?>" method="POST" id="form">
			
			<input class="form-control  forms"  name="no_pesanan" id="no_pesanan" type="hidden" value="<?= substr($tmp_user->nama_user,0,2)."-".uniqid()."-UM"; ?>">
			<input type="hidden" name="foto_user" value="<?= $tmp_user->foto_user; ?>">
			<input class="form-control  forms"  name="id_user" id="id_user" type="hidden" value="<?= $tmp_user->id_user; ?>">
			<input class="form-control  forms"  name="waktu_pemesanan" id="waktu_pemesanan" type="hidden" 
			value="<?= date('Y-m-d H:i:s'); ?>">
			<input class="form-control  forms"  name="jenis_pesanan" id="jenis_pesanan" type="hidden" value="Servis Umum">
			<input class="form-control  forms"  name="status" id="foto" type="hidden" value="belum dikerjakan">

				<div class="pembungkus-forminput">
					<div class="teks-forminput">Nama</div>
					<input required placeholder="masukan nama anda" class="form-control  forms"  name="nama_user" id="nama" type="text" value="<?= $tmp_user->nama_user; ?>">
				</div>

				<div class="pembungkus-forminput">
					<div class="teks-forminput">Alamat</div>
					<input required placeholder="masukan alamat anda yang sesuai" class="form-control  forms"  name="alamat_user" id="alamat" type="text"  value="<?= $tmp_user->alamat_user; ?>">
				</div>
			


				<div class="pembungkus-forminput">
					<div class="teks-forminput">Merk Mobil/Motor</div>
					<input  required class="form-control  forms"  name="merk_kendaraan" id="merk_kendaraan" type="text" placeholder="Toyota Avanza, Honda Vario,dll.." autocomplete="off">
				</div>

				<div class="pembungkus-forminput">
					<div class="teks-forminput">Plat Nomor Kendaraan</div>
					<input  required class="form-control  forms"  name="plat_nomor" id="plat_nomor" type="text" placeholder="ex: B3681XXX" autocomplete="off">
				</div>

			
				<div class="pembungkus-forminput">
					<div class="teks-forminput">Waktu Pengerjaan</div>
					<input  required class="form-control  forms"  name="waktu_pengerjaan" id="waktu_pengerjaan" type="text" placeholder="dd-mm-yyyy H:i:s"  autocomplete="off">
				</div>


				<div class="pembungkus-forminput">
					<div class="teks-forminput">Nomor HP</div>
					<input required placeholder="masukan nomor HP yang bisa dihubungi" class="form-control  forms"  name="no_tlp_user" id="nomorhp" type="text"  value="<?= $tmp_user->no_tlp_user; ?>">
				</div>

				<!-- clear float -->
				<div class="clear"></div>
	
				<div class="pembungkus-forminput" id="input_kendala">
					<div class="teks-forminput">Kendala yang dialami</div>
					<textarea rows="3" class="form-control  forms"  name="kendala_kendaraan" id="kendala_kendaraan"  required="required" ></textarea>
				</div>

				<div  class="pembungkus-btn">
					<button type="submit" name="submit" class="btn btn-info btn-block  btn-submit"><span class="mdi mdi-telegram mdi-18px"></span> Kirim </button>
					<button type="reset" name="reset" class="btn btn-danger btn-block  btn-reset"><span class="mdi mdi-eraser mdi-18px"></span> Reset </button>
				</div>	

		</form>
		<?php endforeach; ?>

	</div>
</div>


<script type="text/javascript" src="<?= base_url() ?>assets/dtpick/jquery.datetimepicker.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#waktu_pengerjaan").datetimepicker({format:'d-m-Y H:i:s'});
	});
</script>
	  		
