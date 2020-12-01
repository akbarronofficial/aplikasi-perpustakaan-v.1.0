<?php
require_once 'config/config.php';
require_once 'functions.php';
date_default_timezone_set('Asia/Jakarta');
$hariwaktu = new DateTime();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Selamat Datang di Aplikasi Perpustakaan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">PERPUSTAKAAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Sejarah Perpustakaan</a>
                        <a class="dropdown-item" href="#">Visi dan Misi</a>
                        <a class="dropdown-item" href="#">Struktur Organisasi</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-5" href="#kontak">Hubungi Kami</a>
                </li>
                <li>
                    <a href="login.php" class="btn btn-danger">Login</a>
                </li>
            </ul>
        </div>
    </nav>