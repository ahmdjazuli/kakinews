<?php require('../kon.php'); require('config.php'); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php title(); ?>
  <link rel="icon" type="image/png" href="../assets/img/logo.png"/>
  <link rel="stylesheet" href="../assets/css/googleFont.css">
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="../assets/plugins/pace-progress/themes/green/pace-theme-flat-top.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark">
    <div class="container-fluid">
      <a href="../index" target="_blank" class="navbar-brand">
        <img src="../assets/img/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">KakiNews (Informasi Aktual)</span>
      </a>
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="kategori" class="nav-link" title="Data Kategori" data-toggle="tooltip" data-placement="bottom">
            <i class="fas fa-layer-group"></i> Data Kategori</a> 
          </li>
          <li class="nav-item"><a href="konten" class="nav-link" title="Konten" data-toggle="tooltip" data-placement="bottom">
            <i class="fas fa-book-open"></i> Data Konten</a>
          </li>
          <li class="nav-item"><a href="iklan" class="nav-link" title="Iklan" data-toggle="tooltip" data-placement="bottom">
            <i class="fas fa-book-open"></i> Data Iklan</a>
          </li>
        </ul>
      </div>
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item mr-1">
          <button class='btn bg-green text-white' type='button' title="Profil Pengguna" data-toggle="tooltip" data-placement="bottom" onclick='window.location="profil?id=<?= $_SESSION['id'] ?>"'><?= $_SESSION['level'] ?> </button>
        </li>
        <li class="nav-item">
          <?= zero() ?>
        </li>
      </ul>
    </div>
  </nav>