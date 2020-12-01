<?php
// koneksi ke database
require_once 'config/config.php';

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// pesan
function Pesan($data)
{
    global $koneksi;
    $nama_lengkap            = htmlspecialchars(ucwords(stripcslashes($data["nama_lengkap"])));
    $telepon                 = htmlspecialchars(stripcslashes($data["telepon"]));
    $email                   = htmlspecialchars(strtolower(stripslashes($data["email"])));
    $perusahaan              = htmlspecialchars(strtolower(stripslashes($data["perusahaan"])));
    $pesan                   = htmlspecialchars(ucwords(stripslashes($data["pesan"])));
    $kirim                   = htmlspecialchars(ucwords(stripslashes($data["kirim"])));

    mysqli_query($koneksi, "INSERT INTO tbl_pesan VALUES('','$nama_lengkap','$telepon','$email','$perusahaan','$pesan','$kirim','0')");
    return mysqli_affected_rows($koneksi);
}
