<style type="text/css">
	.btnrefresh
	{
		border:unset; background:transparent;
	}
	.btn_refresh_data
	{
		height:40px;
	}
</style>

<div id="content">
      
</div>

<div id="bgrefresh">
	<button class=" btnrefresh" id="refresh">
		<img src="<?= base_url() ?>assets/images/refresh.png" class="btn_refresh_data">
	</button>
</div>

<script type="text/javascript">
		function loaddata(){
			$("#content").load('http://localhost/sjm_all_update2/sjm_admin/datapesanan',function(callback) {
				$("#content").html(callback);
			});
		}

		loaddata();

		$("#refresh").click(function(){
			$("#content").load('http://localhost/sjm_all_update2/sjm_admin/datapesanan',function(callback) {
				$("#content").html(callback);
			});
		});

		// setInterval(function(){
		// 	loaddata();
		// }, 5000);
	
</script>
	