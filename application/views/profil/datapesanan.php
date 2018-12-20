
<?php if($pesanan == null) : ?>
			<div id="bg_belumorder">
				<img src="<?= base_url() ?>assets/images/obeng.png" id="img_empty_order">
				<div id="teks_empty_order">Anda belum order</div>

			</div>
<?php else : ?>
<?php foreach ($pesanan as $tmp_pesanan) : ?>
		
			<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="panel">
						<div class="panel-heading text-center">
							<?= $tmp_pesanan->jenis_pesanan; ?></div>
						<div class="panel-body">
							<table class="table text-center">
								<tr>
									<td>
										<div class="jarak-iconteks">
											<span class="mdi mdi-ticket mdi-24px"></span> 
											<span class="jarak-teks">Nomor pesanan</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
											<?= $tmp_pesanan->no_pesanan; ?>
										</div>
									</td>
								</tr>
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
												<a target="_blank" href="https://wa.me/62<?= substr($tmp_pesanan->kontak_mekanik, 1, 11); ?>/?text="><i class="mdi mdi-whatsapp mdi-24px" style="color:green;"></i></a>
												<a href="tel:<?= $tmp_pesanan->kontak_mekanik; ?>"><i class="mdi mdi-phone mdi-24px" style="color:blue;"></i></a>
											<?php endif; ?>
										<div class="jarak-iconteks2">
									</td>
								</tr>
								<tr>
									<td>
										<div class="jarak-iconteks">
										<span class="mdi mdi-rotate-3d mdi-24px"></span>
										<span class="jarak-teks">respon admin</span>
										</div>
									</td>
									<td>
										<div class="jarak-iconteks2">
										<?php if ($tmp_pesanan->respon_admin == null) :?>
											<span class="fas fa-question"></span>
										<?php else : ?>
											<?= $tmp_pesanan->respon_admin; ?>
										<?php endif; ?>
										</div>
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
											<?php if($tmp_pesanan->status == 'belum dikerjakan') :?>
												<div class="btn btn-danger"><?= $tmp_pesanan->status; ?></div>
											<?php else: ?>
												<div class="btn btn-success"><?= $tmp_pesanan->status; ?></div>
											<?php endif; ?>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<div class="text-center">
							<?php if($tmp_pesanan->status == 'belum dikerjakan') :?>
								<a  class="btn btn-info btn-block btn-cancel" href="<?= base_url() ?>sjm/hapus_pesananuser?id_pesanan=<?= $tmp_pesanan->id_pesanan; ?>">
									<span class="mdi mdi-close"></span> Batalkan Pesanan
								</a>
							<?php else: ?>
								<button type="button" class="btn btn-info btn-block btn-sukses">
									<span class="mdi mdi-check-all"></span> Telah Dikerjakan
								</button>
							<?php endif; ?>
						</div>
					</div>
			</div>
		
<?php endforeach; ?>
<?php endif; ?>


		<!-- <script type="text/javascript">
		$(".btn-cancel").click(function() {	

			// var confirmm = confirm("Apa anda yakin ingin membatalkan pesanan anda ? jika iya maka anda akan dikenakan biaya transportasi sebesar Rp.100.000 untuk mobil dan Rp.75.000 untuk motor"); 
			swal({
				title:'',
				text:'Apa anda yakin ingin membatalkan pesanan anda ? jika iya maka anda akan dikenakan biaya transportasi sebesar Rp.100.000 untuk mobil dan Rp.75.000 untuk motor',
				type:'info',
				showConfirmButton: true,
	  			showCancelButton: true,
				confirmButtonColor: '#1F79CD',
				cancelButtonText: 'cancel',
			},
				function()
				{
					setTimeout(function(){
						window.location.href = 'http://localhost/sjm_all_update2/sjm/hapus_pesananuser?id_pesanan=<'?= $tmp_pesanan->id_pesanan; ?>';
					}, 2000);
				}
			);

		}); 

		</script> -->