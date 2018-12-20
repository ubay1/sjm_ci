<style type="text/css">
	.btnrefresh
	{
		border:unset; background:transparent;
	}
	.btn_refresh_reload
	{
		height:40px;
	}
</style>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/indeks_mekanik.css">

<div class="container-fluid"  id="bgrefresh">
	<button class=" btnrefresh" id="refresh">
		<img src="<?= base_url() ?>assets/images/refresh.png" class="btn_refresh_reload">
	</button>
</div>

<div class="jarak-table">

</div>


<script type="text/javascript">
		function loaddata(){
			$(".jarak-table").load('http://localhost/sjm_all_update2/sjm_mekanik/datapesanan',function(callback) {
				$(".jarak-table").html(callback);
			});
		}

		loaddata();

		$("#refresh").click(function(){
			$(".jarak-table").load('http://localhost/sjm_all_update2/sjm_mekanik/datapesanan',function(callback) {
				$(".jarak-table").html(callback);
			});
		});
	
</script>

	