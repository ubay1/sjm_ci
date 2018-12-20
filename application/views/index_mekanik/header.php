<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $title ?></title>

  <link rel="manifest" href="<?= base_url() ?>/assets/manifest.json">
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/logo/logo.png">

   <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/BS/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/mdi/css/mdi.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/SA/ubay.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/header_mekanik.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dtable/datatables.css">

  <!-- JS -->
  <script type="text/javascript" src="<?= base_url() ?>assets/BS/js/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/BS/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/SA/sweetalert-dev.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/dtable/datatables.js"></script>
</head>

<body>

<!-- Navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle='collapse' data-target='#menu' type="button">
        <div class="mdi mdi-menu"></div>
      </button>
      <a href="<?= base_url('sjm_mekanik') ?>" class="navbar-brand brand-logo">
        <!-- <img src="assets/images/logo/logo.png" id="img-logo"> -->
        <div class="iconmenu">
        <b>SJM MEKANIK <i  class="mdi mdi-motorbike "></i></b>
        </div> 
      </a>
    </div>
    <div class="collapse navbar-collapse " id="menu">
        <ul class="nav navbar-nav navbar-right ">
         <li>
            <a style="cursor:pointer;"  id="tutorial" href="<?= base_url('sjm_mekanik/profil_mekanik'); ?>"><i class="mdi mdi-18px mdi-account iconmenu" title="profil" ></i> Profil</a>
          </li>
          <li>
            <a href="<?= base_url('sjm_mekanik/logout'); ?>" class="" id="logout"><i class="mdi mdi-18px mdi-power iconmenu"></i> Logout</a>
          </li>
        </ul>
    </div>
  </div>
</div>
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
            <a href="<'?= base_url() ?>index.php/sjm/halaman2/tai-kucing-manis" class="" id="profil"><i class="mdi mdi-history  iconmenu"></i> Halaman 2</a>
          </li>
        </ul> -->
