-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2020 pada 03.03
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `jenis_buku` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_buku` char(10) NOT NULL,
  `keterangan_simpan` text NOT NULL,
  `image_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `kode_buku`, `nama_buku`, `jenis_buku`, `deskripsi`, `jumlah_buku`, `keterangan_simpan`, `image_buku`) VALUES
(3, '222343', 'BUKU KOLABORASI FLASH, DREAMWEAVER DAN PHP UNTUK APLIKASI WEBSITE', 'BUKU KOMPUTER', '<p>sdsdsd asdsasadsss</p>\r\n', '8', '<p>aasdds</p>\r\n', '5fb8f12dd12e9.jpg'),
(4, '121', 'BUKU PEMROGRAMAN MUDAH MEMBUAT WEBSITE MENGGUNAKAN CODEIGNITER', 'CODEIGNITER', '<p>sss</p>\r\n', '1', '<p>asd</p>\r\n', '5fb932972551d.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `kirim` datetime NOT NULL,
  `notif_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `nama_lengkap`, `telepon`, `email`, `perusahaan`, `pesan`, `kirim`, `notif_status`) VALUES
(4, 'Tes', '2323', 'tess@gmail.com', 'tes', 'Tesa', '2020-11-23 17:07:00', 1),
(5, 'Sss', '3', 's@gmail.com', 'ss', 'Ss', '2020-11-23 17:24:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjambuku`
--

CREATE TABLE `tbl_pinjambuku` (
  `id_pinjambuku` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `kartu_mahasiswa` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(2) NOT NULL,
  `status_pinjaman` enum('Buku Belum Dikembalikan','Buku Sudah Dikembalikan') NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembalian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pinjambuku`
--

INSERT INTO `tbl_pinjambuku` (`id_pinjambuku`, `id_buku`, `kartu_mahasiswa`, `nama`, `jumlah`, `status_pinjaman`, `tgl_pinjam`, `tgl_kembalian`) VALUES
(29, 3, '2222', 'asd', '1', 'Buku Belum Dikembalikan', '2020-11-25 13:41:00', '0000-00-00 00:00:00'),
(30, 3, '23', 'sss', '1', 'Buku Belum Dikembalikan', '2020-11-25 13:41:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nama`, `email`, `password`, `image`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$djHt/u/CdMQQuhUirgVtX.5uwa/PzCCyLo.PX2kk7vCjEpsbgqsHe', 'default.png', 'admin'),
(2, 'Akbarron Official', 'akbar@gmail.com', '$2y$10$PDG1YdCiKsNmNcI3zhvx8Ol7GxMkeOAk..BPaGhp1cgBV7nG/Qog.', 'default.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tbl_pinjambuku`
--
ALTER TABLE `tbl_pinjambuku`
  ADD PRIMARY KEY (`id_pinjambuku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pinjambuku`
--
ALTER TABLE `tbl_pinjambuku`
  MODIFY `id_pinjambuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pinjambuku`
--
ALTER TABLE `tbl_pinjambuku`
  ADD CONSTRAINT `tbl_pinjambuku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `tbl_buku` (`id_buku`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
