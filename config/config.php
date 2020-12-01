<?php
$server         = 'localhost';
$username       = 'root';
$password       = '';
$database       = 'aplikasi_perpustakaan';

$koneksi = mysqli_connect($server, $username, $password, $database);
if ($koneksi) {
    //echo "Database terhubung";
} else {
    //echo "Database tidak terhubung";
}
