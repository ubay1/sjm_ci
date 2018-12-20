<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/profil.css">

<?php foreach ($user as $tmp_user) : ?>
<div class="profil">

	<div id="bg_foto_profil">
		<img src="<?= base_url() ?>assets/images/bgprofil-xs2.jpg" id="img_background">
	</div>

	<div class="foto_profil">
		<img src="<?= base_url('uploads/'.$tmp_user->foto_user); ?>" id="fotouser">
			
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
			      	<div class="text-center">
			        <img src="<?= base_url('uploads/'.$tmp_user->foto_user); ?>" id="foto_modal">
			        </div>

			        <form action="<?= base_url('sjm/ubahfoto_user'); ?>" method="POST" enctype="multipart/form-data">
			        	<input type="file" name="userfile" class="form-control"> <br>
			        	<button type="submit" class="btn btn-primary btn-block"> <span class="mdi mdi-telegram"></span> Kirim</button>
			        </form>

			      </div>

			    </div>

		  	</div>
		</div>
		<!-- End Modal -->

		<div class="nama_user"><?= $tmp_user->nama_user; ?></div>

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

	<!-- btn refresh -->
	<button style=" margin-bottom:20px;" id="refreshdata" class="btn btn-success"> <span class="mdi mdi-refresh"></span> Refresh data</button>

	<!-- menampung data -->
	<div class="datapesanan-ajax">
		
	</div>

	<script type="text/javascript">
		function loaddata(){
			$('.datapesanan-ajax').load('http://localhost/sjm_all_update2/sjm/datapesananuser',function(callback) {
				$(".datapesanan-ajax").html(callback);
			});
		}

		loaddata();

		$('#refreshdata').click(function(){
			$('.datapesanan-ajax').load('http://localhost/sjm_all_update2/sjm/datapesananuser',function(callback) {
				$(".datapesanan-ajax").html(callback);
			});
		});

	</script>

</div>
</div>
