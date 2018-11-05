

<div class="container-fluid" style="margin-top:100px;">

	<h1 class="text-center">Latihan Upload Ke Database</h1> <br>

	<?php echo form_open_multipart('upload/do_upload');?>

	<input required type="text" name="username_pelanggan" class="form-control" placeholder="username"> <br>
	<input required type="password" name="password_pelanggan" class="form-control" placeholder="password"> <br>
	<input required type="text" name="namalengkap" class="form-control" placeholder="namalengkap"> <br>
	<input required type="text" name="alamat" class="form-control" placeholder="alamat"> <br>
	<input required type="text" name="no_tlp" class="form-control" placeholder="no_tlp"> <br>
	<input required type="file" name="userfile" size="20" class="form-control" />

	<br /><br />

	<input type="submit" value="upload" class="btn btn-danger btn-block" />

	</form>

</div>