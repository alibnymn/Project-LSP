-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 05:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satgas_smknegeri4padalarang`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Panggil Siswa` (IN `id_sw` INT(20))  SELECT tb_siswa.nama, tb_siswa.kelas FROM tb_siswa WHERE id_siswa = id_sw$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `hitung_siswa` () RETURNS INT(11) RETURN (SELECT COUNT(*) AS tb_siswa FROM tb_siswa WHERE id_siswa)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `status` varchar(112) NOT NULL,
  `nama` varchar(112) NOT NULL,
  `new_nama` varchar(115) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `status`, `nama`, `new_nama`, `time`) VALUES
(14, 'TAMBAH NAMA', 'Rezki', '', '2022-04-10 03:18:32'),
(25, 'HAPUS NAMA', 'Rezki', '', '2022-04-10 03:25:57'),
(27, 'HAPUS NAMA', 'Gabi', '', '2022-04-10 03:42:32'),
(29, 'HAPUS NAMA', 'Egi Abdul', '', '2022-04-21 04:34:11'),
(30, 'TAMBAH NAMA', 'ali', '', '2022-04-21 04:50:49'),
(31, 'UPDATE NAMA', 'ali', 'ali', '2022-04-21 05:02:27'),
(32, 'UPDATE NAMA', 'Abdul', 'Alex s.pd', '2022-04-21 05:03:06'),
(33, 'UPDATE NAMA', 'ali', 'ali', '2022-04-21 05:03:54'),
(34, 'HAPUS NAMA', 'ali', '', '2022-04-21 05:10:36'),
(35, 'HAPUS NAMA', 'Alex s.pd', '', '2022-04-21 05:10:36'),
(36, 'TAMBAH NAMA', 'abdul', '', '2022-04-21 08:38:46'),
(37, 'UPDATE NAMA', 'Edo B', 'Edo B', '2022-04-21 08:39:04'),
(38, 'HAPUS NAMA', 'Edo B', '', '2022-04-21 08:40:52'),
(39, 'UPDATE NAMA', 'Candika', 'Candika', '2022-04-21 14:46:05'),
(40, 'TAMBAH NAMA', 'udin', '', '2022-04-21 15:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_guru` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_guru`, `username`, `nama`, `password`) VALUES
(1, 'admin', 'Alex s.pd', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `kelas`) VALUES
(1, 'abdul', '12 ACP'),
(2, 'Ali', '12 OA'),
(3, 'Budi', '12 ACP'),
(4, 'Candika', '12 OA'),
(6, 'udin', '12 ACP');

--
-- Triggers `tb_siswa`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `tb_siswa` FOR EACH ROW INSERT INTO log (status, nama) VALUES ('HAPUS NAMA', old.nama)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `tb_siswa` FOR EACH ROW INSERT INTO log (status, nama) VALUES ('TAMBAH NAMA', new.nama)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update` AFTER UPDATE ON `tb_siswa` FOR EACH ROW INSERT INTO log (status, nama, new_nama, time) VALUES ('UPDATE NAMA', old.nama,new.nama, CURRENT_TIMESTAMP)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_suhu`
--

CREATE TABLE `tb_suhu` (
  `id_suhu` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `suhu` int(3) NOT NULL,
  `keterangan` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_suhu`
--

INSERT INTO `tb_suhu` (`id_suhu`, `id_siswa`, `suhu`, `keterangan`) VALUES
(2, 2, 34, 'normal'),
(9, 4, 35, 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_suhu`
--
ALTER TABLE `tb_suhu`
  ADD PRIMARY KEY (`id_suhu`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_suhu`
--
ALTER TABLE `tb_suhu`
  MODIFY `id_suhu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_suhu`
--
ALTER TABLE `tb_suhu`
  ADD CONSTRAINT `tb_suhu_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
