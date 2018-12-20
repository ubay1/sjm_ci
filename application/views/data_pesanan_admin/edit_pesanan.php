<style type="text/css">
	.form-control{margin-bottom:30px; border:inset; border-width:1.5px;}
	.jarak-form{margin-top:70px; display:flex; justify-content:center;}
}
</style>

<?php $uniq_id = $_GET['id'];?>

<div id="content">
<div class="container jarak-form">
	<div class="bg_edit_form">
	<form action="<?= base_url('sjm_admin/prosesedit_pesanan'); ?>" method="POST">
		<?php foreach ($user as $tmp_user) : ?>

			<input type="hidden" name="uniq_id" value="<?= $uniq_id; ?>">
			<input type="hidden" name="waktu_pemesanan" value="<?= $tmp_user->waktu_pemesanan; ?>">
			<input type="hidden" name="waktu_pengerjaan" value="<?= $tmp_user->waktu_pengerjaan; ?>">

			<input required type="hidden" name="nama_user" value="<?= $tmp_user->nama_user; ?>">

			<?php $jsArray = "var nama_mekanik = new Array();\n";   ?>

			<label class="txt">Pilih Mekanik</label>
			<select class="form-control" name="nama_mekanik" id="mekanik" onchange="changeValue(this.value)">
				<option disabled selected>-- pilih mekanik --</option>

				<?php foreach ($mekanik as $tmp_mekanik) : ?>
					<option value="<?= $tmp_mekanik->nama_mekanik; ?>">
						<?= $tmp_mekanik->nama_mekanik; ?> 
					</option>
				
				<?= $jsArray .= " nama_mekanik['" . $tmp_mekanik->nama_mekanik . "'] 
						= { kontak :'" . addslashes($tmp_mekanik->kontak_mekanik) . "'}; "; 
				?>

				<?php endforeach;; ?>
				
			</select>

			<label class="txt">Kontak Mekanik</label>
			<input readonly="true" type="text" name="kontak_mekanik" class="form-control" id="kontak_mekanik">
			<script type="text/javascript">  
				<?php echo $jsArray; ?>
				function changeValue(id){
				 	document.getElementById('kontak_mekanik').value = nama_mekanik[id].kontak;
				}
			</script>

			<button class="btn btn-primary" type="submit" name="submit"><span class="mdi mdi-telegram"></span> Kirim</button>

		<?php endforeach; ?>

	</form>
	</div>
</div>
</div>