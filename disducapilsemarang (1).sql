-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Sep 2019 pada 13.46
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disducapilsemarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `email`, `username`, `password`) VALUES
(1, 'kepo amat', 'qwerty@gmail.com', 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(2, 'DWIDJO HADI MISHANDOY', 'bca@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nik`, `kk`, `nama_lengkap`, `email`, `username`, `password`) VALUES
(2, '16670003', '16670010', 'Ahmad Setiawan', 'abc@gmail.com', 'aji', '8d045450ae16dc81213a75b725ee2760'),
(3, '3273190707610003', '3374111412053351', 'DWIDJO HADI MISHANDOY', 'bca@gmail.com', 'hadi', '76671d4b83f6e6f953ea2dfb75ded921'),
(11, '3273190707650003', '3374111412053351', 'adytya kharisma hartanto', 'adytyakharismahartanto@gmail.c', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(12, '16670009', '16670010', 'adit', 'web@gmail.com', 'web', '2567a5ec9705eb7ac2c984033e06189d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadiri`
--

CREATE TABLE `datadiri` (
  `id` int(50) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `ttl` varchar(35) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `pos` int(10) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `statuskawin` varchar(30) NOT NULL,
  `jenis_pekerjaan` varchar(20) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(35) NOT NULL,
  `create` varchar(30) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `datadiri`
--

INSERT INTO `datadiri` (`id`, `kk`, `nik`, `nama_lengkap`, `ttl`, `tmp_lahir`, `jk`, `alamat`, `rt`, `rw`, `dusun`, `pos`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `statuskawin`, `jenis_pekerjaan`, `agama`, `kewarganegaraan`, `create`, `gambar`) VALUES
(1, '16670010', '16670009', 'adytya kharisma hartanto', 'Pati', '', 'Laki-laki', 'pati', '2', '1', 'semilir', 59184, 'JawaTengah', 'Pati', 'Semarang Barat', 'Kembangarum', 'Blum Menikah', '', 'Islam', 'WNI', '14 Agustus 2019', ''),
(3, '3374111412053351', '3273190707610003', 'DWIDJO HADI MISHANDOYO', '07-07-1961', 'PASURUHAN', 'LAKI-LAKI', 'JL.KEPONG TIMUR III BLOK B-121', '4', '12', '', 50265, 'JAWA TENGAH', 'KOTA SEMARANG', 'BANYUMANIK', 'PUDAKPAYUNG', 'KAWIN', 'TNI', 'ISLAM', 'WNI', '', ''),
(6, '3374111412053351', '3273190707650003', 'DWI YULI BERDIKARIWATI', '08-07-1965', 'PASURUHAN', 'PEREMPUAN', 'JL.KEPONG TIMUR III BLOK B-121', '4', '12', '', 50265, 'JAWA TENGAH', 'KOTA SEMARANG', 'BANYUMANIK', 'PUDAKPAYUNG', 'KAWIN', 'PENGURUS RUMAH TANGG', 'ISLAM', 'WNI', '', ''),
(7, '3374111412053351', '3274112203010003', 'HANTARUNA CATUR WAHYU WILOKO', '22-03-2001', 'PASURUHAN', 'LAKI-LAKI', 'JL.KEPONG TIMUR III BLOK B-121', '4', '12', '', 50265, 'JAWA TENGAH', 'KOTA SEMARANG', 'BANYUMANIK', 'PUDAKPAYUNG', 'KAWIN', 'PELAJAR/MAHASISWA', 'ISLAM', 'WNI', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataektp`
--

CREATE TABLE `dataektp` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `id_akun` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `pos` varchar(10) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `statuskawin` varchar(30) NOT NULL,
  `jenis_pekerjaan` varchar(20) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `create` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `dataektp`
--

INSERT INTO `dataektp` (`id`, `nik`, `kk`, `id_akun`, `nama_lengkap`, `ttl`, `tmp_lahir`, `jk`, `alamat`, `rt`, `rw`, `dusun`, `pos`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `statuskawin`, `jenis_pekerjaan`, `agama`, `create`, `gambar`, `status`) VALUES
(2, '16670009', '16670010', '', 'adytya kharisma hartanto', 'Pati', '', 'Laki-laki', 'pati', '2', '1', 'semilir', '59184', 'JawaTengah', 'Pati', 'Semarang Barat', 'Kembangarum', 'Blum Menikah', '', 'Islam', '14 Agustus 2019', '', '0'),
(3, '16670003', '16670010', '', 'Ahmad Aji', 'rembang', '', 'laki-laki', 'REambang', '3', '2', 'semilir', '50912', 'JawaTengah', 'Rembang', 'Semarang Barat', 'Kembangarum', 'Blum Menikah', '', 'Islam', '14/8/2019', 'abc.jpg', '0'),
(17, '3273190707610003', '3374111412053351', '', 'DWIDJO HADI MISHANDOYO', ' 07-07-1961', 'PASURUHAN', 'LAKI-LAKI', 'JL.KEPONG TIMUR III BLOK B-121', '4 ', ' 12', '', '', 'JAWA TENGAH', 'KOTA SEMARANG', 'BANYUMANIK', 'PUDAKPAYUNG', 'KAWIN', 'TNI', 'ISLAM', '19 September 2019', '', '0'),
(18, '3273190707650003', '3374111412053351', '', 'DWI YULI BERDIKARIWATI', ' 08-07-1965', 'PASURUHAN', 'PEREMPUAN', 'JL.KEPONG TIMUR III BLOK B-121', '4 ', ' 12', '', '', 'JAWA TENGAH', 'KOTA SEMARANG', 'BANYUMANIK', 'PUDAKPAYUNG', 'KAWIN', 'PENGURUS RUMAH TANGG', 'ISLAM', '19 September 2019', '', '0'),
(19, '3274112203010003', '3374111412053351', '', 'HANTARUNA CATUR WAHYU WILOKO', ' 22-03-2001', 'PASURUHAN', 'LAKI-LAKI', 'JL.KEPONG TIMUR III BLOK B-121', '4 ', ' 12', '', '', 'JAWA TENGAH', 'KOTA SEMARANG', 'BANYUMANIK', 'PUDAKPAYUNG', 'KAWIN', 'PELAJAR/MAHASISWA', 'ISLAM', '19 September 2019', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataektp`
--
ALTER TABLE `dataektp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `datadiri`
--
ALTER TABLE `datadiri`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dataektp`
--
ALTER TABLE `dataektp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
