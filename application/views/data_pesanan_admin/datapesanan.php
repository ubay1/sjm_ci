<style>
	#loader{position:absolute; z-index:1000; left:50%; height:30px; display:none;}
	.isikendala{text-align:left; border:1px solid #000; padding:3px;}
</style>

<img id='loader' height='18'  src='<?= base_url("assets/images/loader/loading2.gif"); ?>'>


<div class=" table table-responsive" id="jarak-tablepesanan">
	<table id="table_id" >
		<thead>
		<tr>
			<th  class="text-center">no. pesanan</th>
			<th  class="text-center">foto</th>
			<th  class="text-center">nama lengkap</th>
			<th  class="text-center">alamat</th>
			<th  class="text-center">jenis pesanan</th>
			<th  class="text-center">merk kendaraan</th>
			<th  class="text-center">waktu pemesanan</th>
			<th  class="text-center">waktu pengerjaan</th>
			<th  class="text-center">kendala kendaraan</th>
			<th  class="text-center">mekanik</th>
			<th  class="text-center">Proses</th>
			<th  class="text-center">status</th>
			<th  class="text-center">aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php foreach($admin as $tmp_admin) :?>
				<tr>
				<td><?= $tmp_admin->no_pesanan; ?></td>
				<td>
					<a target="_blank" href="<?= base_url() ?>uploads/<?= $tmp_admin->foto_user; ?>">
						<img height="40" width="auto" class="img_profil" src="<?= base_url() ?>uploads/<?= $tmp_admin->foto_user; ?>">
					</a>
				</td>
				<td><?= $tmp_admin->nama_user; ?> <br>
					<a title="kirim pesan" href="https://wa.me/62<?= substr($tmp_admin->no_tlp_user, 1, 11); ?>/?text=hallo saya admin slmet jaya motor">
						<img src="<?= base_url() ?>assets/images/wa2.png" height="20">
					</a>
				</td>
				<td><?= $tmp_admin->alamat_user; ?></td>
				<td><?= $tmp_admin->jenis_pesanan; ?></td>
				<td><?= $tmp_admin->merk_kendaraan."<br>"."(".$tmp_admin->plat_nomor.")"; ?></td>
				<td><?= date('d M Y H:i:s', strtotime(  $tmp_admin->waktu_pemesanan)); ?></td>
				<td><?= date('d M Y H:i:s', strtotime(  $tmp_admin->waktu_pengerjaan)); ?></td>
				<td>
				
						<details>
							<summary><u><b>cek kendala</b></u></summary>
							<p class="isikendala"><?= $tmp_admin->kendala_kendaraan; ?></p>
						</details>
					
				</td>
				<td>
					<?php if($tmp_admin->nama_mekanik == null) : ?>
						<a title="pilih mekanik" class="btn_crud" href="<?= base_url() ?>sjm_admin/edit_pesananuser?id=<?= $tmp_admin->no_pesanan; ?>">
							<img src="<?= base_url() ?>assets/images/workers.png" height="40">
						</a>
					<?php else : ?>
					<?= $tmp_admin->nama_mekanik;?> <br>
					<a title="kirim pesan" href="https://wa.me/62<?= substr($tmp_admin->kontak_mekanik, 1, 11); ?>/?text=hallo saya admin slmet jaya motor">
						<img src="<?= base_url() ?>assets/images/wa2.png" height="20">
					</a>
					<?php endif; ?>
				
				</td>

				<td id="td-proses">
						<?php if ($tmp_admin->respon_admin == "telah diproses") {
							echo "telah diproses";
						} 
						else{
							echo "
							<form method='post' class='form-prosespesanan'>
							<input type='hidden' name='id_pesanan' value='".$tmp_admin->id_pesanan."'>
							<input type='hidden' name='id_user' value='".$tmp_admin->id_user."'>
							<input type='hidden' name='nama_user' value='".$tmp_admin->nama_user."'>
							<input type='hidden' name='waktu_pemesanan' value='".$tmp_admin->waktu_pemesanan."'>
							<input type='hidden' name='waktu_pengerjaan' value='".$tmp_admin->waktu_pengerjaan."'>
							<input type='hidden' name='proses' value='telah diproses'>
							<button type='submit' name='submit' class='btn btn-primary submitproses'> <i class='mdi mdi-telegram mdi-18px'></i>	
							</button>
							</form>";
						}
						?>
				</td>

				<td><?= substr($tmp_admin->status, 0, 31); ?></td>
				<td>
				
				<a  title="hapus" class="btn_crud btn_hapus" href="<?= base_url() ?>sjm_admin/hapus_pesananuser?id=<?= $tmp_admin->no_pesanan; ?>">
					<img src="<?= base_url() ?>assets/images/deletes.png" height="30">
				</a>

				</td>
			</tr>
			<?php endforeach; ?>
		
		</tbody>
	</table>
</div>



<script type="text/javascript">
	$("#table_id").DataTable();	
</script>	

<script type="text/javascript">

	$('.form-prosespesanan').submit(function(e)
	{
		e.preventDefault();
		$.ajax({
			url: 'http://localhost/sjm_all_update2/sjm_admin/butonprosespesanan',
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
					$("#loader").hide();
				},2000);

				if ($("#loader").hide()) 
					{
						swal({
							title:'',
							text: 'pesanan telah diproses',
							type: 'success',
							showCancelButton: false,
							closeOnConfirm: false,
							showLoaderOnConfirm: true,
					},
					function(){
						setTimeout(function()
						{ window.location.href = 'http://localhost/sjm_all_update2/sjm_admin'; 
						}, 1000);
					});
					}
				
				
			}
		});
		
	});

</script>
