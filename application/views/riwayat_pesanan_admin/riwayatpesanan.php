<style>
	#btn-cetak{cursor:pointer; position:fixed; bottom:20px; right:20px; z-index: 1;}
	#btn-cetak:hover{text-decoration:none;}
</style>

<a title="print" id="btn-cetak" >
	<img src="<?= base_url() ?>assets/images/print.png" height="50">
</a>


<div id="content" style="margin-bottom:80px;">
<div class=" table table-responsive jarak-table">
	<table id="table_id">
		<thead>
		<tr>
			<th class="text-center">no</th>
			<th class="text-center">no. pesanan</th>
			<th class="text-center">nama lengkap</th>
			<th class="text-center">merk kendaraan</th>
			<th class="text-center">plat nomor</th>
			<th class="text-center">jenis pesanan</th>
			<th class="text-center">waktu pemesanan</th>
			<th class="text-center">waktu pengerjaan</th>
			<th class="text-center">kendala kendaraan</th>
		</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php foreach($riwayat as $tmp_riwayat) :?>
				<tr>
				<td><?= $no; ?></td>
				<td><?= $tmp_riwayat->no_pesanan; ?></td>
				<td><?= $tmp_riwayat->nama_user; ?> <br>(<?= $tmp_riwayat->no_tlp_user; ?>)</td>
				<td><?= $tmp_riwayat->merk_kendaraan; ?></td>
				<td><?= $tmp_riwayat->plat_nomor; ?></td>
				<td><?= $tmp_riwayat->jenis_pesanan; ?></td>
				<td><?= date('d M Y H:i:s', strtotime(  $tmp_riwayat->waktu_pemesanan)); ?></td>
				<td><?= date('d M Y H:i:s', strtotime(  $tmp_riwayat->waktu_pengerjaan)); ?></td>
				<td>
					<details>
						<summary>cek kendala</summary>	
						<?= $tmp_riwayat->kendala_kendaraan; ?></td>
					</details>
			</tr>
			<?php $no++; ?>
			<?php endforeach; ?>
		
		</tbody>
	</table>
</div>


<script type="text/javascript">
	$("#table_id").DataTable();	
</script>

</div>