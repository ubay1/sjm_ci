
<div id="bg_riwayat_kerja">
<?php foreach ($riwayat as $tmp_riwayat) : ?>

		<div class="riwayatkerja">
			<table class="table table-responsive table-striped" style="border:1px solid #5593CC;">
				<tr style="background:#5593CC; color:#fff;">
					<td>id pesanan</td>
					<td> : </td>
					<td><?= $tmp_riwayat->id_pesanan; ?></td>
				</tr>
				<tr>
					<td>nomor.pesanan </td>
					<td> : </td>
					<td><?= $tmp_riwayat->no_pesanan; ?></td>
				</tr>
				<tr> 
					<td>nama pemesan   </td>  
					<td> : </td>
					<td><?= $tmp_riwayat->nama_user; ?></td> 
				</tr>
				<tr> 
					<td>waktu pemesanan </td> 
					<td> : </td> 
					<td> <?= date('d M Y H:i:s', strtotime($tmp_riwayat->waktu_pemesanan)); ?></td> 
				</tr>
				<tr>
					<td>waktu pengerjaan  </td>
					<td> : </td>
					<td><?= date('d M Y H:i:s', strtotime($tmp_riwayat->waktu_pengerjaan)); ?></td>
				</tr>
				<tr>
					<td>merk kendaraan </td>
					<td> : </td>
					<td><?= $tmp_riwayat->merk_kendaraan." (".$tmp_riwayat->plat_nomor.")"; ?></td>
				</tr>
				<tr>
					<td>kendala :</td>
					<td> : </td>
					<td><?= $tmp_riwayat->kendala_kendaraan; ?></td>
				</tr>
			</table>
		</div>

<?php endforeach; ?>
</div>