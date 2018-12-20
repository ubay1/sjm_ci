<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $title ?></title>

  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/logo/logo.png">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/BS/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/mdi/css/mdi.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/SA/ubay.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/view_admin.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dtable/datatables.css">

  <!-- JS -->
  <script type="text/javascript" src="<?= base_url() ?>assets/BS/js/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/BS/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/SA/sweetalert-dev.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/dtable/datatables.js"></script>
 
 
</head>

<body>

<div class="maincontainer">

  <div id="header">

    <div id="icon-hamburger">
      <div id="nav1"></div>
      <div id="nav2"></div>
      <div id="nav3"></div>
    </div>

    <a href="<?= base_url() ?>sjm_admin" class="logo"><span>SJM ADMIN <i class="mdi mdi-motorbike"></i></span></a>

    <a class="bg_logout" href="<?= base_url() ?>sjm_admin/logout">
      <img height="25" src="<?= base_url() ?>assets/images/logout.png">
    </a>
  </div>

  <div  id="drawer">
    <div id="bg-img-drawer">
      <img src="<?= base_url() ?>assets/images/bgdrawer2.jpg " id="img-drawer">
      <div class="bg-fotouser">
        <img src="<?= base_url() ?>assets/images/team1.jpg " id="fotouser">
      </div>
      <span id="txt_nama">Admin 1 (Sulistiawati)</span>
    </div>
    
    <a href="<?= base_url() ?>sjm_admin/data_pelanggan"><img src="<?= base_url() ?>assets/images/cs.png " class="icon_listmenu">Data User </a>
    <a href="<?= base_url() ?>sjm_admin/data_mekanik"><img src="<?= base_url() ?>assets/images/mekanik.png " class="icon_listmenu">Data Mekanik </a>
    <a href="<?= base_url() ?>sjm_admin/riwayat_pesanan"><img src="<?= base_url() ?>assets/images/riwayat.png " class="icon_listmenu">Riwayat Pesanan </a>

    

    <footer>
      &copy <?= date('Y'); ?> - slamet jaya motor
    </footer>
  </div>

</div>
 <script type="text/javascript" src="<?= base_url() ?>assets/css/view.js"></script>

<!-- Navbar -->
<!-- <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle='collapse' data-target='#menu' type="button">
        <div class="fas fa-bars"></div>
      </button>
      <a href="<'?= base_url() ?>sjm_admin" class="navbar-brand brand-logo">
        <div class="mdi mdi-motorbike iconmenu">
        <b>SJM ADMIN</b>
        </div> 
      </a>
    </div>
    <div class="collapse navbar-collapse " id="menu">
        <ul class="nav navbar-nav navbar-right ">
         <li>
            <a style="cursor:pointer;"  id="tutorial" href="<'?= base_url('sjm_admin/data_pelanggan'); ?>"><i class="mdi mdi-18px mdi-account iconmenu" title="tutorial" ></i> Data Pelanggan</a>
          </li>
          <li>
            <a style="cursor:pointer;"  id="tutorial" href="<'?= base_url('sjm_admin/data_mekanik') ?>"><i class="mdi mdi-18px mdi-worker iconmenu" title="tutorial" ></i> Data Mekanik</a>
          </li>
         
          <li>
            <a style="cursor:pointer;"  id="tutorial" href="<'?= base_url('sjm_admin/riwayat_pesanan'); ?>"><i class="mdi mdi-wrench mdi-18px iconmenu" title="tutorial" ></i> Riwayat pesanan</a>
          </li>
          <li>
            <a href="<'?= base_url('sjm_admin/logout'); ?>" class="" id="logout"><i class="mdi mdi-18px mdi-power iconmenu"></i> Logout</a>
          </li>
        </ul>
    </div>
  </div>
</div> -->
<!-- En Navbar -->


<!-- navbar admin -->
<!-- <ul class="nav navbar-nav navbar-right ">
          <li>
            <a href="" class="" id="tutorial"><i class="mdi mdi-account-box-outline  iconmenu" title="tutorial"></i> Data Pelanggan</a>
          </li>
          <li>
            <a href="" class="" id="notifikasi"><i class="mdi mdi-account-box-outline  iconmenu"></i> Data Mekanik</a>
          </li>
          <li>
            <a href="" class="" id="profil"><i class="mdi mdi-paper-cut-vertical  iconmenu"></i> Data Pesanan</a>
          </li>
          <li>
            <a href="" class="" id="profil"><i class="mdi mdi-history  iconmenu"></i> Riwayat Pesanan</a>
          </li>
          <li>
            <a href="<'?= base_url() ?>index.php/sjm_admin/halaman2/tai-kucing-manis" class="" id="profil"><i class="mdi mdi-history  iconmenu"></i> Halaman 2</a>
          </li>
        </ul> -->
