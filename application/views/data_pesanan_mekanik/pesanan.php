
<link rel="stylesheet" href="<?= base_url() ?>assets/css/datapesanan_mekanik.css">

<?php if($user == null) : ?>
			<div id="bg_belumorder">
				<img src="<?= base_url() ?>assets/images/obeng.png" id="img_empty_order">
				<div id="teks_empty_order">belum ada orderan masuk</div>
			</div>
<?php else : ?>
<?php foreach($user as $tmp_user) :?>
	<div class="pull-right input_search">
		<input type="text" class="form-control" placeholder="cari data">
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:60px;">
		<section class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div  class="bg_pesanan">
				<header class="bg_profil_pesanan">
					<div class="profil_pemesan">
						<img src="<?= base_url() ?>uploads/<?= $tmp_user->foto_user; ?>" alt="" class="foto_profil">
						<span class="nama_pemesan">
							<?= $tmp_user->nama_user; ?>
							<a title="kirim pesan" href="https://wa.me/62<?= substr($tmp_user->no_tlp_user, 1, 11); ?>/?text=hallo saya mekanik slamet jaya motor">
								<img src="<?= base_url() ?>assets/images/wa2.png" height="20">
							</a>
							<a href="tel:<?= $tmp_user->no_tlp_user; ?>">
								<img src="<?= base_url() ?>assets/images/phone.png" height="20">
							</a>
						</span>
						<span class="no_pemesanan">
							<?= $tmp_user->no_pesanan; ?>
						</span>
					</div>
				</header>
				<article class="isi_pesanan">
					<table class="table">
						<tr>
							<td>Alamat</td> <td>:</td>
							<td><?= $tmp_user->alamat_user; ?></td>
						</tr>
						
						<tr>
							<td>Merk</td> <td>:</td>
							<td><?= $tmp_user->merk_kendaraan; ?></td>
						</tr>
						<tr>
							<td>Jenis Pesanan</td> <td>:</td>
							<td><?= $tmp_user->jenis_pesanan; ?></td>
						</tr>
						<tr>
							<td>Kendala</td> <td>:</td>
							<td><i><?= $tmp_user->kendala_kendaraan; ?></i></td>
						</tr>
					</table>
				</article>
				<footer>
					<?php if($tmp_user->status == 'belum dikerjakan') : ?>
					<form method="post" action="<?= base_url('sjm_mekanik/proses_pekerjaanselesai'); ?>">
						<input type="hidden" name="id_pesanan" value="<?= $tmp_user->id_pesanan; ?>">
						<input type="hidden" name="no_pesanan" value="<?= $tmp_user->no_pesanan; ?>">
						<input type="hidden" name="nama_mekanik" value="<?= $_SESSION['nama_mekanik']; ?>">
						<input type="hidden" name="nama_user" value="<?= $tmp_user->nama_user; ?>">
						<input type="hidden" name="waktu_pemesanan" value="<?= $tmp_user->waktu_pemesanan; ?>">
						<input type="hidden" name="waktu_pengerjaan" value="<?= $tmp_user->waktu_pengerjaan; ?>">
						<input type="hidden" name="merk_kendaraan" value="<?= $tmp_user->merk_kendaraan; ?>">
						<input type="hidden" name="plat_nomor" value="<?= $tmp_user->plat_nomor; ?>">
						<input type="hidden" name="kendala" value="<?= $tmp_user->kendala_kendaraan; ?>">
						<input type="hidden" name="status" value="telah dikerjakan">
						<button type="submit" id="submitproses" class="btn btn-primary btn-block btn_selesai"><span class="mdi mdi-telegram"></span> selesai</button>
					</form>
					<?php elseif($tmp_user->status != 'belum dikerjakan') : ?>
						<button class="btn btn-primary btn-block btn_selesai"><span class="mdi mdi-check-all"></span> telah dikerjakan</button>
					<?php endif; ?>
				</footer>
			</div>
		</section>
	</div>
<?php endforeach; ?>
<?php endif; ?>







<!-- <div class=" table table-responsive" id="jarak-table">
	<table id="table_id" >
		<thead>
		<tr>
			<th class="text-center">no.pesanan</th>
			<th class="text-center">foto</th>
			<th class="text-center">nama pemesan</th>
			<th class="text-center">alamat</th>
			<th class="text-center">jenis pesanan</th>
			<th class="text-center">merk kendaraan</th>
			<th class="text-center">waktu pemesanan</th>
			<th class="text-center">waktu pengerjaan</th>
			<th class="text-center">kendala kendaraan</th>
			<th class="text-center">status</th>
		</tr>
		</thead>
		<tbody>
			<'?php foreach($user as $tmp_user) :?>
			<tr>
				<td><'?= $tmp_user->no_pesanan; ?></td>
				<td>
					<a  target="_blank" href="<'?= base_url() ?>uploads/<'?= $tmp_user->foto_user; ?>">
						<img class="img_profil" height="40" width="auto"  src="<'?= base_url() ?>uploads/<'?= $tmp_user->foto_user; ?>">
					</a>
				</td>
				<td><'?= $tmp_user->nama_user; ?>
					<a title="kirim pesan" href="https://wa.me/62<'?= substr($tmp_user->no_tlp_user, 1, 11); ?>/?text=hallo saya admin slmet jaya motor">
						<img src="<'?= base_url() ?>assets/images/wa2.png" height="20">
					</a>
				</td>
				<td><'?= $tmp_user->alamat_user; ?>
					<a title="petunjuk jalan" href="https://www.google.co.id/maps/dir/-6.3412431,106.6927583/Homeschooling+Kak+Seto,+Jl.+Raya+Perigi+Lama+No.3A,+Parigi,+Pondok+Aren,+South+Tangerang+City,+Banten+15227/@-6.3043865,106.6627799,13z/data=!3m1!4b1!4m16!1m6!3m5!1s0x2e69faedd95ba653:0x812f5fd78d1be54!2sHomeschooling+Kak+Seto!8m2!3d-6.274229!4d106.694346!4m8!1m1!4e1!1m5!1m1!1s0x2e69faedd95ba653:0x812f5fd78d1be54!2m2!1d106.694346!2d-6.274229">
						<img src="<'?= base_url() ?>assets/images/maps.png" height="20">
					</a>
				</td>
				<td><'?= $tmp_user->jenis_pesanan; ?></td>
				<td><'?= $tmp_user->merk_kendaraan."<br>"."(".$tmp_user->plat_nomor.")"; ?></td>
				<td><'?= date('d M Y H:i:s', strtotime(  $tmp_user->waktu_pemesanan)); ?></td>
				<td><'?= date('d M Y H:i:s', strtotime(  $tmp_user->waktu_pengerjaan)); ?></td>
				<td>
					<details>
							<summary><u><b>cek kendala</b></u></summary>
							<p class="isikendala"><'?= $tmp_user->kendala_kendaraan; ?></p>
						</details>
				</td>

				<'?php if($tmp_user->status == 'belum dikerjakan') : ?>
				<td>
					<form method="post" action="<'?= base_url('sjm_mekanik/proses_pekerjaanselesai'); ?>">
						<input type="hidden" name="id_pesanan" value="<'?= $tmp_user->id_pesanan; ?>">
						<input type="hidden" name="no_pesanan" value="<'?= $tmp_user->no_pesanan; ?>">
						<input type="hidden" name="nama_mekanik" value="<'?= $_SESSION['nama_mekanik']; ?>">
						<input type="hidden" name="nama_user" value="<'?= $tmp_user->nama_user; ?>">
						<input type="hidden" name="waktu_pemesanan" value="<'?= $tmp_user->waktu_pemesanan; ?>">
						<input type="hidden" name="waktu_pengerjaan" value="<'?= $tmp_user->waktu_pengerjaan; ?>">
						<input type="hidden" name="merk_kendaraan" value="<'?= $tmp_user->merk_kendaraan; ?>">
						<input type="hidden" name="plat_nomor" value="<'?= $tmp_user->plat_nomor; ?>">
						<input type="hidden" name="kendala" value="<'?= $tmp_user->kendala_kendaraan; ?>">
						<input type="hidden" name="status" value="telah dikerjakan">
						<button type="submit" id="submitproses" class="btn btn-primary"><span class="mdi mdi-telegram"></span> selesai</button>
					</form>
				</td>
				<'?php elseif($tmp_user->status != 'belum dikerjakan') : ?>
					<td><'?= $tmp_user->status; ?></td>
				<'?php endif; ?>
			</tr>
			<'?php endforeach; ?>
		
		</tbody>
	</table>
</div> -->
<!-- <script type="text/javascript">
	$("#table_id").DataTable();	
</script>	 -->



<!-- <script type="text/javascript">

	$('#form-prosespesanan').submit(function(e)
	{
		e.preventDefault();
		$.ajax({
			url: 'http://localhost/sjm_all/sjm_mekanik/pesanan_selesai',
			method: 'POST',
			data: $(this).serialize(),
			beforeSend:function()
			{
				$("#loader").show();
				$('.submitproses').attr('disabled', 'true');
				$('.table').css('opacity', '0.5');
				$('.table').attr('disabled', 'true');
			},
			success:function()
			{	
				setInterval(function(){
					$(".loader").hide();
				},5000);
				
			}
		});
		
	});

</script> -->


