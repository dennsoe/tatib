-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 08:05 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelanggaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Waktu'),
(2, 'Kelengkapan Kendaraan'),
(3, 'Kelengkapan Atribut'),
(4, 'Kerapian'),
(5, 'Prokes');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nm_kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nm_kelas`) VALUES
(1, 'X RPL 1'),
(2, 'X RPL 2'),
(3, 'X MM 1'),
(4, 'X MM 2'),
(5, 'X TKJ 1'),
(6, 'X TKJ 2'),
(7, 'X AKEUL 1'),
(8, 'X AKEUL 2'),
(9, 'X AKEUL 2'),
(10, 'X OTKP 1'),
(11, 'X OTKP 2'),
(12, 'X BDPM 1'),
(13, 'X BDPM 2'),
(14, 'X PH 1'),
(15, 'X PH 2'),
(16, 'X PH 3'),
(17, 'X DKV 1'),
(18, 'X DKV 2'),
(19, 'X TR '),
(20, 'X TB'),
(21, 'XI RPL 1'),
(22, 'XI RPL 2'),
(23, 'XI MM 1'),
(24, 'XI MM 2'),
(25, 'XI TKJ 1'),
(26, 'XI TKJ 2'),
(27, 'XI AKEUL 1'),
(28, 'XI AKEUL 2'),
(29, 'XI AKEUL 2'),
(30, 'XI OTKP 1'),
(31, 'XI OTKP 2'),
(32, 'XI BDPM 1'),
(33, 'XI BDPM 2'),
(34, 'XI PH 1'),
(35, 'XI PH 2'),
(36, 'XI PH 3'),
(37, 'XI DKV 1'),
(38, 'XI DKV 2'),
(39, 'XI TR '),
(40, 'XII RPL 1'),
(41, 'XII RPL 2'),
(42, 'XII MM 1'),
(43, 'XII MM 2'),
(44, 'XII TKJ 1'),
(45, 'XII TKJ 2'),
(46, 'XII AKEUL 1'),
(47, 'XII AKEUL 2'),
(48, 'XII AKEUL 2'),
(49, 'XII OTKP 1'),
(50, 'XII OTKP 2'),
(51, 'XII BDPM 1'),
(52, 'XII BDPM 2'),
(53, 'XII PH 1'),
(54, 'XII PH 2'),
(55, 'XII PH 3'),
(56, 'XII DKV 1'),
(57, 'XII DKV 2'),
(58, 'XII TR 1'),
(59, 'XII TR 2');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `pelanggaran` text NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `poin` int(11) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `pelanggaran`, `id_jenis`, `poin`, `pic`) VALUES
(1, 'Terlambat datang ke Sekolah', 1, 20, 'terlambat.png'),
(2, 'Spion tidak lengkap', 2, 20, 'spion.jpg'),
(3, 'Knalpot tidak sesuai standart pabrikan', 2, 20, 'knalpot.jpg'),
(4, 'Body tidak sesuai standart pabrikan', 2, 20, 'motor.jpg'),
(5, 'Berbonceng lebih dari 2 orang', 2, 20, 'bonceng3.jpg'),
(6, 'Tidak memakai Helm', 2, 20, 'helm.jpg'),
(7, 'Tidak memakai dasi / hasduk', 3, 20, 'dasi.jpg'),
(8, 'Sepatu tidak sesuai', 3, 20, 'sepatu.jpg'),
(9, 'Kaos kaki tidak sesuai', 3, 20, 'kaoskaki.jpg'),
(10, 'Baju dan celana tidak rapi', 4, 20, 'tidak rapi.jpg'),
(11, 'Rambut panjang (gondrong)', 4, 20, 'gondrong.jpg'),
(12, 'Kuku jari panjang', 4, 20, 'kuku.jpg'),
(13, 'Tidak patuh Protokol Kesehatan', 5, 25, 'prokes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran_siswa`
--

CREATE TABLE `pelanggaran_siswa` (
  `id_pel_siswa` int(11) NOT NULL,
  `tgl` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`id_pel_siswa`, `tgl`, `id_siswa`, `id_pelanggaran`) VALUES
(4, 1632119561, 2, 10),
(6, 1632210365, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `id_kelas`) VALUES
(1, '001', 'JAENURI', 1),
(2, '002', 'DWI DEDI SUSANDI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin Ketertiban SMKN 1 Banyuwangi', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD PRIMARY KEY (`id_pel_siswa`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  MODIFY `id_pel_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
