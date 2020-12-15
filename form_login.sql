-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 06:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nm_admin`, `username`, `password`, `level`) VALUES
(1, 'andra ', 'admin', 'admin', 'admin'),
(2, 'botol', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_stt`
--

CREATE TABLE `anggota_stt` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(50) NOT NULL,
  `Tempat_lahir` varchar(50) NOT NULL,
  `Tanggal_lahir` varchar(50) NOT NULL,
  `Nomer_Hp` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_stt`
--

INSERT INTO `anggota_stt` (`id`, `Nama`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Nomer_Hp`, `Email`, `Alamat`, `Status`) VALUES
(60, 'Gusde Widiane', 'Laki-laki', 'Singaraja', '1997-05-15', '0982137', 'gusde@gmail.com', 'liligundi', 'KETUA'),
(62, 'Taragita Sandre', 'Laki-laki', 'Singaraja', '1997-06-10', '0982137', 'taragita@gmail.com', 'liligundi', 'WAKIL KETUA');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_piket`
--

CREATE TABLE `jadwal_piket` (
  `id` int(11) NOT NULL,
  `Senin` varchar(50) NOT NULL,
  `Selasa` varchar(50) NOT NULL,
  `Rabu` varchar(50) NOT NULL,
  `Kamis` varchar(50) NOT NULL,
  `Jumat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_piket`
--

INSERT INTO `jadwal_piket` (`id`, `Senin`, `Selasa`, `Rabu`, `Kamis`, `Jumat`) VALUES
(1, 'andra', 'elvis', 'adit', 'lanang', 'krisna'),
(2, 'uky', 'rai', 'gusde', 'botol', 'dode'),
(3, 'loik', 'aak', 'komang', 'de budi', 'tatak'),
(4, 'Aku', 'dia', 'mereka', 'menjadi', 'satu');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(50) NOT NULL,
  `Tempat_lahir` varchar(50) NOT NULL,
  `Tanggal_lahir` varchar(50) NOT NULL,
  `Nomer_Hp` char(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Status_pengurus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `Nama`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Nomer_Hp`, `Email`, `Alamat`, `Status_pengurus`) VALUES
(14, 'Gusde Widiane wow', 'Laki-laki', 'Singaraja', '2020-12-15', '0982137', 'gusde@gmail.com', 'liligundi', 'KETUA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota_stt`
--
ALTER TABLE `anggota_stt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_piket`
--
ALTER TABLE `jadwal_piket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota_stt`
--
ALTER TABLE `anggota_stt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `jadwal_piket`
--
ALTER TABLE `jadwal_piket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
