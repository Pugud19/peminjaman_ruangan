-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 10:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_ruangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `keterangan`) VALUES
(2, 'Spa', 'Berbayar'),
(6, 'Private Swiming ', 'Free'),
(9, 'Bar Drinks', 'Free'),
(10, 'Swimming Pool', 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id`, `kode`, `nama`, `alamat`) VALUES
(1, 'G001', 'Gedung 1', 'Jl. margonda 1 Depok'),
(2, 'G002', 'Gedung 2', 'Jl. margonda 2 Depok'),
(3, 'G003', 'Gedung 3', 'Jl. margonda 3 Depok'),
(10, 'G004', 'Gedung 4', 'Jl. margonda IV Depok');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_ruangan`
--

CREATE TABLE `kategori_ruangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_ruangan`
--

INSERT INTO `kategori_ruangan` (`id`, `nama`, `keterangan`) VALUES
(18, 'Double Bed', 'Large'),
(19, 'Family', 'Large'),
(20, 'Private sm', 'Small'),
(21, 'Private ', 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','manager','staff','peminjam') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `username`, `password`, `role`, `foto`) VALUES
(1, 'Pugud', 'pugudbj19@gmail.com', 'admin', '67771da7cef164702710b6803ea0b099bce5b0ce', 'admin', NULL),
(2, 'Nadaa Khoirun ', 'nadaa21@gmail.com', 'nadaa', 'b5847716758c9d997e77db72ef08b6e647f5f21a', 'manager', NULL),
(8, 'Fajar Sukmana', 'fajar123@gmail.com', 'fajar1007', '15bd53f1079d99bec2595dbdad6b0267c472eaa4', 'staff', NULL),
(9, 'Raihan Erlianti', 'erlianti1@gmail.com', 'erli1220', 'd1482892698a2b9a50060af7cdcdc51c6198068b', 'peminjam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `hp` varchar(45) NOT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `peminjaman_id` int(11) NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `keperluan` varchar(45) NOT NULL,
  `status` enum('Diajukan','Diterima','Ditolak') NOT NULL,
  `dokumen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gedung_id` int(11) NOT NULL,
  `lantai` int(11) NOT NULL,
  `kategori_ruangan_id` int(11) NOT NULL,
  `fasilitas_id` int(11) NOT NULL,
  `status` enum('Tersedia','Tidak_tersedia') NOT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama`, `gedung_id`, `lantai`, `kategori_ruangan_id`, `fasilitas_id`, `status`, `foto`) VALUES
(2, 'Kelas 101', 2, 2, 19, 6, 'Tersedia', NULL),
(3, 'Kelas 102', 3, 3, 21, 2, 'Tersedia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `waktu_peminjaman`
--

CREATE TABLE `waktu_peminjaman` (
  `id` int(11) NOT NULL,
  `peminjaman_id` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `keterangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_ruangan`
--
ALTER TABLE `kategori_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peminjaman_has_gedung_has_kategori_ruangan_peminjaman1` (`peminjaman_id`),
  ADD KEY `fk_peminjaman_has_gedung_has_kategori_ruangan_gedung_has_kate1` (`ruangan_id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gedung_has_kategori_ruangan_gedung` (`gedung_id`),
  ADD KEY `fk_gedung_has_kategori_ruangan_kategori_ruangan1` (`kategori_ruangan_id`),
  ADD KEY `fk_gedung_has_kategori_ruangan_fasilitas1` (`fasilitas_id`);

--
-- Indexes for table `waktu_peminjaman`
--
ALTER TABLE `waktu_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_waktu_peminjaman_peminjaman1` (`peminjaman_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_ruangan`
--
ALTER TABLE `kategori_ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `waktu_peminjaman`
--
ALTER TABLE `waktu_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_peminjaman_has_gedung_has_kategori_ruangan_gedung_has_kate1` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peminjaman_has_gedung_has_kategori_ruangan_peminjaman1` FOREIGN KEY (`peminjaman_id`) REFERENCES `peminjam` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `fk_gedung_has_kategori_ruangan_fasilitas1` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gedung_has_kategori_ruangan_gedung` FOREIGN KEY (`gedung_id`) REFERENCES `gedung` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gedung_has_kategori_ruangan_kategori_ruangan1` FOREIGN KEY (`kategori_ruangan_id`) REFERENCES `kategori_ruangan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `waktu_peminjaman`
--
ALTER TABLE `waktu_peminjaman`
  ADD CONSTRAINT `fk_waktu_peminjaman_peminjaman1` FOREIGN KEY (`peminjaman_id`) REFERENCES `peminjaman` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
