-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 07:04 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kerjain`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lamar`
--

CREATE TABLE `tb_lamar` (
  `id_lamar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `file_lampiran` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lamar`
--

INSERT INTO `tb_lamar` (`id_lamar`, `id_lowongan`, `id_user`, `file_lampiran`, `status`) VALUES
(1, 2, 1, '1871192390_CV AchmadAdam.rar', 'Menunggu Konfirmasi Perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lowongan`
--

CREATE TABLE `tb_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_buka` date NOT NULL,
  `tanggal_tutup` date NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `jenis_pekerjaan` varchar(100) NOT NULL,
  `gaji` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lowongan`
--

INSERT INTO `tb_lowongan` (`id_lowongan`, `id_perusahaan`, `judul`, `deskripsi`, `tanggal_buka`, `tanggal_tutup`, `keahlian`, `jenis_pekerjaan`, `gaji`) VALUES
(2, 4, 'Senior Front-End Web Developer', 'Mulai sebagai web developer front-end menggunakan HTML, JavaScript, jQuery, & Bootstrap! Bergabunglah dengan Jutaan Pembelajar dari Seluruh Dunia yang Telah Belajar di Udemy! Hemat sampai dengan 90%! Download Handphone Kamu. Akses Seumur Hidup.', '2021-01-12', '2021-01-21', 'HTML, CSS', 'fulltime', '4 - 5 Jt');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `industri` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `tentang` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tahun_berdiri` varchar(4) NOT NULL,
  `website` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `id_user`, `nama`, `industri`, `jenis`, `kota`, `tentang`, `foto`, `tahun_berdiri`, `website`, `ukuran`) VALUES
(4, 1, 'PT. Media Kreasi Tritunggal', 'Digital Agency', 'IT', 'Jakarta', 'We are digital agency in Jakarta, Indonesia that serves both local & international companies with passion and integrity.', '1400505979_noid.png', '2012', 'http://www.noid.co.id/', 'ukuran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE `tb_portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` date NOT NULL,
  `tempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `tanggal_lahir`, `email`, `notelp`, `jk`, `foto`) VALUES
(1, 'Achmad Adam Azzuri', 'achmadadam', '1234', '2000-04-09', 'achmadadamazzuri@gmail.com', '085875838753', 'Laki-laki', '1080284215_PP small.jpg'),
(2, 'I Gede Pasek Punia Atmaja', 'alex', '1234', '2021-01-13', 'alex@gmail.com', '08123871284', 'Laki-laki', '1080284215_PP small.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lamar`
--
ALTER TABLE `tb_lamar`
  ADD PRIMARY KEY (`id_lamar`),
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `id_lowongan_2` (`id_lowongan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD PRIMARY KEY (`id_portofolio`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_lamar`
--
ALTER TABLE `tb_lamar`
  MODIFY `id_lamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_lamar`
--
ALTER TABLE `tb_lamar`
  ADD CONSTRAINT `tb_lamar_ibfk_1` FOREIGN KEY (`id_lowongan`) REFERENCES `tb_lowongan` (`id_lowongan`),
  ADD CONSTRAINT `tb_lamar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD CONSTRAINT `tb_lowongan_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`);

--
-- Constraints for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD CONSTRAINT `tb_perusahaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD CONSTRAINT `tb_portofolio_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
