<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo site_url('assets/bootswatch-5/docs/_assets/img/logo.svg'); ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
      .action-buttons button {
    margin-right: 2px; 
    margin-bottom: 5px;
}
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-lg ">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= site_url('beranda') ?>">
  <img width="60" height="54" src="<?php echo site_url('assets/img/paintshop2.png'); ?>">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link <?php echo $active_menu == 'home' ? 'active' : ''; ?>" href="<?= site_url('beranda') ?>">Beranda</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php echo $active_menu == 'data_barang' ? 'active' : ''; ?>" href="<?= site_url('barang/data_barang') ?>">Data Barang</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php echo $active_menu == 'about' ? 'active' : ''; ?>" href="<?= site_url('about') ?>">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container mt-5 mb-5">
        <?php echo $content; ?>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-2 text-center">
    <div class="col-md-4 d-flex align-items-center justify-content-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img width="40" height="44" src="<?php echo site_url('assets/img/paintshop2.png'); ?>">
        </a>
        <span class="text-muted">©2024 Praktikum TIF, <b>Husni Muzadi </b>1412220019</span>
    </div>
</footer>
    </div>
<script src="<?= base_url('assets/css/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
</body>

</html>