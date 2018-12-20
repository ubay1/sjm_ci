
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="theme-color" content="#2196f3">
	<title><?= $title ?></title>

	<link rel="manifest" href="<?= base_url() ?>assets/manifest.json">

	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/logo/logo.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/BS/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/mdi/css/mdi.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/SA/ubay.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/header_cs.css">

	

	<!-- JS -->
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/BS/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/SA/sweetalert-dev.js"></script>
</head>

<body>

<!-- Navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle='collapse' data-target='#menu' type="button">
				<div class="mdi mdi-menu"></div>
			</button>
			<a href="<?= base_url() ?>" class="navbar-brand brand-logo">
				<!-- <img src="assets/images/logo/logo.png" id="img-logo"> -->
				<div class="iconmenu">
				<b>SJM CS <i  class="mdi mdi-motorbike "></i></b>
				</div> 
			</a>
		</div>
		<div class="collapse navbar-collapse " id="menu">
				<ul class="nav navbar-nav navbar-right ">
					<li>
						<a style="cursor:pointer;"  id="tutorial" href="<?= base_url() ?>sjm/peraturansjm"><i class="mdi mdi-alert-circle-outline iconmenu" title="tutorial" ></i> Peraturan</a>
					</li>
					<li>
						<a style="cursor:pointer;" id="visimisi"  data-toggle="modal" data-target="#modalvisimisi"><i class="mdi mdi-rocket iconmenu"></i> Visi Misi</a>
					</li>
					<li class="hidden-xs">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                <span class="label label-pill label-danger count"></span>
		                <span class="mdi mdi-bell iconmenu"></span> Notifikasi
		                </a>
		                <ul class="dropdown-menu">
		                </ul>
					</li>
					<!-- <li>
						<a href="<'?= base_url() ?>sjm/pesan" class="hidden-xs" id="notifikasi"><i class="mdi mdi-comment-text-outline  iconmenu"></i> Pesan</a>
					</li> -->
					<li>
						<a href="<?= base_url() ?>sjm/profil" class="hidden-xs" id="profil"><i class="mdi mdi-account iconmenu"></i> Profil</a>
					</li>
          <!-- <li>
            <a href="<'?= base_url() ?>sjm/vueintro" > <i class="mdi mdi-vuejs iconmenu"></i> Vue Intro</a>
          </li> -->
					<li>
						<a href="<?= base_url() ?>sjm/logout" class="" id="logout"><i class="mdi mdi-power iconmenu"></i> Logout</a>
					</li>
				</ul>
		</div>
	</div>
</div>
<!-- En Navbar -->

<!-- Modal Cara Kerja-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal"><span style="color:#fff;">&times;</span></button>
        <h4 class="modal-title text-center">Cara Menggunakan Aplikasi</h4>
      </div>
      <div class="modal-body">
        <p>1. Anda diharuskan login terlebih dahulu, jika anda belum mempunyai akun silahkan daftar terlebih dahulu</p>
        <p>2. jika anda telah login, dan berhasil masuk anda akan melihat pilihan menu dibawah teks <i>"apa yang anda butuhkan"</i></p>
        <p>3. terdapat 4 menu yaitu : servis umum, servis darurat, ganti sparepart, dan konsultasi. saya akan menjelaskan 1 per 1 dari menu tersebut.</p>
        <p>4. <b>servis umum</b>, servis ini berisi tentang servis-servis umum seperti rem blong, suara mesin berisik, dll.</p>
        <p>5. <b>servis darurat</b>, servis ini bertujuan untuk melakukan servis hari itu juga, seperti mobil mati tiba" dijalan saat sedang mau pergi kekantor.</p>
        <p>6. <b>Ganti sparepart</b>, jika anda ingin ganti oli, ganti accu, dan lainnya. anda bisa pilih menu ini </p>
        <p>7. <b>Konsultasi</b>, anda bisa bertanya disini seputar keluhan-keluhan, insyaallah akan diberikan solusi dari staff kami.</p>
        <p>8. Notifikasi, menu ini adalah notifikasi dari admin bengkel bahwa pesanan anda langsung dapat di proses atau anda diharuskan menunggu.</p>
        <p>9. Profil, menu ini adalah menu profil anda. anda dapat merubah foto profil anda, melihat riwayat orderan" anda yang telah anda pesan.</p>
      </div>
      <div class="modal-footer bg-primary">
        <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal Visi Misi-->
<div id="modalvisimisi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal"><span style="color:#fff;">&times;</span></button>
        <h4 class="modal-title">VISI MISI KAMI</h4>
      </div>
      <div class="modal-body">
      	<h4 class="text-center">VISI</h4>
        <p>1. Ingin memudahkan para pelanggan lama kami maupun pelanggan baru.</p>
        <p>2. Dengan adanya aplikasi ini, kami berharap tidak ada lagi orderan yang terlewatkan</p>
        <p>3. Dengan adanya aplikasi ini, kami ingin memanjakan pelanggan kami agar tidak membuang-buang pulsa untuk proses pengorderan seperti sebelumnya.</p>

        <hr>
        <h4 class="text-center">MISI</h4>
        <p><blockquote>Kami ingin menjadi manusia yang bermanfaat bagi orang lain</blockquote></p>
      </div>
      <div class="modal-footer bg-primary">
        <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
	$(document).ready(function() 
	{
			function load_unseen_notification(view = '') 
            {
                $.ajax({
                    url: "http://localhost/sjm_all_update2/sjm/getnotif",
                    method: "POST",
                    data: {view:view},
                    dataType: "json",
                    success: function(data) 
                    {
                        $('.dropdown-menu').html(data.notification);
                        if(data.unseen_notification > 0)
                        {
                            $('.count').html(data.unseen_notification);
                            $("#notif").show();
                        }
                    }
                });   
            }

            load_unseen_notification();

            
            $(document).on('click', '.dropdown-toggle', function(){
             
             	$('.count').html('');
             	load_unseen_notification('yes');
              $("#notif").hide();
            });

            setInterval(function(){
            	load_unseen_notification();
            },5000);
	});
</script>

