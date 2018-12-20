<style>
	#btn_tambah_mekanik{cursor:pointer; position:absolute; bottom:30px; right:20px;}
	#btn_tambah_mekanik:hover{text-decoration:none;}
	#btn_edit_mekanik:hover{text-decoration:none;}
</style>

<a title="tambah" data-toggle="modal" data-target="#tambahMekanik" id="btn_tambah_mekanik" >
	<img src="<?= base_url() ?>assets/images/creates.png" height="50">
</a>

<div id="content">
<div class=" table table-responsive jarak-table">
	<table id="table_id">
		<thead>
		<tr>
			<th class="text-center">no</th>
			<th class="text-center">id mekanik</th>
			<th class="text-center">username</th>
			<th class="text-center">password</th>
			<th class="text-center">nama lengkap</th>
			<th class="text-center">nomor HP</th>
			<th class="text-center">foto</th>
			<th class="text-center">Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php $no = 1; ?>
		<?php foreach($user as $tmp_user) :?>
		
			<tr>
				<td><?= $no; ?></td>
				<td><?= $tmp_user->id_mekanik; ?></td>
				<td><?= $tmp_user->username_mekanik; ?></td>
				<td><?= $tmp_user->password_mekanik; ?></td>
				<td><?= $tmp_user->nama_mekanik; ?></td>
				<td><?= $tmp_user->kontak_mekanik; ?></td>
				<td><img id="img_profiluser" height="40" width="auto" class="img_profil" src="<?= base_url() ?>uploads/<?= $tmp_user->foto_mekanik; ?>"></td>
				<td>
					<a id="btn_edit_mekanik" title="edit" href="<?= base_url() ?>/sjm_admin/edit_mekanik?id=<?= $tmp_user->id_mekanik; ?>">
						<img src="<?= base_url() ?>assets/images/updates.png" height="22">
					</a>
					<a title="hapus" class="btn_hapus_mekanik" href="<?= base_url() ?>/sjm_admin/hapus_mekanik?id=<?= $tmp_user->id_mekanik; ?>">
						<img src="<?= base_url() ?>assets/images/deletes.png" height="22">
					</a>
				</td>
			</tr>
		<?php $no++; ?>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
</div>

<!-- Modal tambah mekanik-->
<div id="tambahMekanik" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal"><span style="color:#fff;">&times;</span></button>
        <h4 class="modal-title text-center">Tambah mekanik</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <form  action="<?= base_url('sjm_admin/do_upload'); ?>" method="post" enctype="multipart/form-data">

        	<input type="hidden" name="uniq_id" value="MK_<?= uniqid(); ?>">
        	<div class="form-group">
        		<label for="username">username</label>
        		<input type="text" name="username" id="username" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="password">password</label>
        		<input type="password" name="password" id="password" class="form-control">
        		<span class="mdi mdi-eye-off mdi-18px"></span> 
        		<span id="matatutup" class="mdi mdi-eye mdi-18px"></span>
        	</div>
        	<div class="form-group">
        		<label for="nama_mekanik">nama_mekanik</label>
        		<input type="text" name="nama_mekanik" id="nama_mekanik" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="kontak_mekanik">kontak_mekanik</label>
        		<input type="text" name="kontak_mekanik" id="kontak_mekanik" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="foto">foto</label>
        		<input type="file" name="userfile" id="foto" class="form-control">
        	</div> <br>
        	<div class="form-group">
        		<button type="submit" class="btn btn-primary"><span class="mdi mdi-telegram mdi-18px"></span> Kirim</button>
        	</div>
        </form>
        </div>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
	$("#table_id").DataTable();	
</script>

<script type="text/javascript">
	$("#matatutup").css('display', 'none');

	$(".mdi-eye-off").click(function(){
		$(".mdi-eye-off").hide();
		$("#matatutup").show();
		$("#password").attr('type', 'text');
	});

	$("#matatutup").click(function(){
		$(".mdi-eye-off").show();
		$("#matatutup").hide();
		$("#password").attr('type', 'password');
	});


	$("#btn_tambah_mekanik").mouseenter(function(){
		$("#btn_tambah_mekanik").css('transition', '0s');
		$("#btn_tambah_mekanik").css('borderRadius', '0');
		$("#textmekanik").append("Tambah mekanik");
	});
	$("#btn_tambah_mekanik").mouseleave(function(){
		$("#btn_tambah_mekanik").css('borderRadius', '100%');
		$("#textmekanik").empty();
	});
</script>

<!-- <script type="text/javascript">
		setTimeout(function(){
			window.location.reload()
		},10000);
</script> -->