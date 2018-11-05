<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/profil.css">

<?php foreach ($user as $tmp_user) : ?>
<div class="profil">
<div class="bg_foto_profil ">
	
	<img src="<?= base_url() ?>assets/images/bgprofil.jpg" class=" hidden-xs bg-img-profil" width="100%">
	<img src="<?= base_url() ?>assets/images/bgprofil-xs.jpg" class="img-responsive hidden-sm hidden-md hidden-lg" id="bg_img_xs">

	<div class="foto_profil">
		<img src="<?= base_url('uploads/'.$tmp_user->foto); ?>" class="img-responsive img-circle">
			
		<div id="bg_icon_gantifoto">
			<a data-toggle="modal" data-target="#modalfotoprofil" class=" icon_gantifoto" title="ubah foto">
				<span class="mdi mdi-camera-party-mode mdi-24px"></span>
			</a>
		</div>

		<!-- Modal Cara Kerja-->
		<div id="modalfotoprofil" class="modal fade" role="dialog">
		  	<div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header bg-primary">
			        <button type="button" class="close" data-dismiss="modal">
			        	<span style="color:#fff;">&times;</span>
			        </button>

			        <h4 class="modal-title">Ubah Foto Profil</h4>
			      </div>

			      <div class="modal-body">
			        <img src="<?= base_url('uploads/'.$tmp_user->foto); ?>" class="img-responsive img-circle"> <br>

			        <form action="<?= base_url('sjm/ubahfoto_user'); ?>" method="POST" enctype="multipart/form-data">
			        	<input type="file" name="userfile" class="form-control"> <br>
			        	<button type="submit" class="btn btn-primary btn-block"> <span class="mdi mdi-telegram"></span> Kirim</button>
			        </form>

			      </div>

			    </div>

		  	</div>
		</div>
		<!-- End Modal -->

	</div>

	<div class="nama_user"><?= $tmp_user->namalengkap; ?></div>

	<div id="setelan_akun">
	<a href="<?= base_url('sjm/ubahdata_user') ?>">
		<span class="mdi mdi-settings mdi-24px icon-setelan"></span>
	</a>
	</div>
</div>
</div>
<?php endforeach; ?>

<div class="container-fluid bg-riwayat-pesanan">

<div id="teks-riwayatanda">Riwayat Pesanan Anda</div> 

	
	<!-- pilihan tgl,bln,thn -->
	<?php 
		$bulan = ['januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember'];
	?>
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-info"  id="bg_form_pilih_bulan" style="">
		<form action="" method="post" id="form_pilih_bulan">	

				<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<select class="form-control form_select">
					<option value="" disabled selected>BLN</option>
					<?php foreach ($bulan as $bulan_key) : ?>
						<option value="<?= $bulan_key; ?>"><?= strtoupper($bulan_key); ?></option>
					<?php endforeach; ?>
				</select>
				</div>

				<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<select class="form-control form_select">
					<option value="" disabled selected>THN</option>
					<?php for($thn=2000; $thn<=date('Y'); $thn++) : ?>
						<option value="<?= $thn; ?>"><?= $thn; ?></option>
					<?php endfor; ?>
				</select>
				</div>
		</form>
	</div>

	<?php if($pesanan == null) : ?>
			<div class="text-center">
				<img src="<?= base_url() ?>assets/images/emot.png" id="img_empty_order">
				<div id="teks_empty_order">Anda belum pernah order</div>
			</div>
	<?php else : ?>
		<?php foreach ($pesanan as $tmp_pesanan) : ?>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="panel">
						<div class="panel-heading text-center">
							<?= $tmp_pesanan->jenis_pesanan; ?></div>
						<div class="panel-body">
							<table class="table text-center">
								<tr>
									<td>
										<div class="jarak-iconteks">
											<span class="mdi mdi-clock mdi-24px"></span> 
											<span class="jarak-teks">waktu pesanan</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
											<?= date('d M Y H:i:s', strtotime($tmp_pesanan->waktu_pemesanan)); ?></b>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="jarak-iconteks">
										<span class="mdi mdi-calendar-clock mdi-24px"></span>
										<span class="jarak-teks">waktu pengerjaan</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
										<?= date('d M Y H:i:s', strtotime($tmp_pesanan->waktu_pengerjaan)); ?>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="jarak-iconteks">
										<span class="mdi mdi-car mdi-24px"></span>
										<span class="jarak-teks">merk kendaraan</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
										<?= $tmp_pesanan->merk_kendaraan; ?>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="jarak-iconteks">
										<span class="mdi mdi-cube-send mdi-24px"></span>
										<span class="jarak-teks ">jenis pesanan</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
											<p  class="teks-kendala"><?= $tmp_pesanan->jenis_pesanan; ?></p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="jarak-iconteks">
										<span class="mdi mdi-alert-circle-outline mdi-24px" ></span>
										<span class="jarak-teks ">kendala</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
											<p  class="teks-kendala"><i>"<?= $tmp_pesanan->kendala_kendaraan; ?>"</i></p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="jarak-iconteks">
										<span class="mdi mdi-account-outline mdi-24px"></span>
										<span class="jarak-teks">nama mekanik</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
											<?php if( $tmp_pesanan->nama_mekanik == null) : ?>
												<span class="fas fa-question"></span>
											<?php else : ?>
												<?= $tmp_pesanan->nama_mekanik; ?>
											<?php endif; ?>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="jarak-iconteks">
										<span class="mdi mdi-phone mdi-24px"></span>
										<span class="jarak-teks">kontak mekanik</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
											<?php if($tmp_pesanan->kontak_mekanik ==null) : ?>
												<span class="fas fa-question"></span>
											<?php else : ?>
												<?= $tmp_pesanan->kontak_mekanik; ?>
											<?php endif; ?>
										<div class="jarak-iconteks2">
									</td>
								</tr>
								<tr>
									<td>
										<div class="jarak-iconteks">
										<span class="mdi mdi-comment-question-outline mdi-24px"></span>
										<span class="jarak-teks">status</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
										<?= $tmp_pesanan->status; ?>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-info btn-block btn-cancel">
											<span class="mdi mdi-close"></span> CANCEL
										</button>
						</div>
					</div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>

</div>
</div>
