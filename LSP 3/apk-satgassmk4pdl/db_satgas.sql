-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 01:59 AM
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `Panggil Siswa` (IN `id_sw` INT(20))  SELECT siswas.nama, siswas.kelas FROM siswas WHERE id_siswa = id_sw$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `hitung_siswa` () RETURNS INT(11) RETURN (SELECT COUNT(*) AS siswas FROM siswas WHERE id_siswa)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(40, 'TAMBAH NAMA', 'udin', '', '2022-04-21 15:05:27'),
(41, 'TAMBAH NAMA', 'Tedi ', '', '2022-04-22 01:44:38'),
(42, 'TAMBAH NAMA', 'Tejo', '', '2022-05-23 11:20:10'),
(43, 'TAMBAH NAMA', 'SETI', '', '2022-05-23 11:30:26'),
(44, 'HAPUS NAMA', 'Tejo', '', '2022-05-23 11:31:39'),
(45, 'HAPUS NAMA', 'SETI', '', '2022-05-23 11:31:39'),
(46, 'TAMBAH NAMA', 'Seti', '', '2022-05-23 11:32:01'),
(47, 'TAMBAH NAMA', 'suteo', '', '2022-05-23 11:34:52'),
(48, 'UPDATE NAMA', 'suteo', 'suteo', '2022-05-23 11:51:45'),
(49, 'HAPUS NAMA', 'suteo', '', '2022-05-23 11:52:48'),
(50, 'TAMBAH NAMA', 'egi andika', '', '2022-05-23 14:15:46'),
(51, 'UPDATE NAMA', 'egi andika', 'egi', '2022-05-23 14:16:00'),
(52, 'HAPUS NAMA', 'egi', '', '2022-05-23 14:16:08'),
(53, 'TAMBAH NAMA', 'sdj', '', '2022-05-24 01:17:12'),
(54, 'UPDATE NAMA', 'sdj', 'sdw', '2022-05-24 01:17:42'),
(55, 'TAMBAH NAMA', 'azis aril', '', '2022-05-24 06:29:20'),
(56, 'HAPUS NAMA', 'sdw', '', '2022-05-24 11:44:26'),
(57, 'HAPUS NAMA', 'azis aril', '', '2022-05-24 11:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id_siswa`, `nama`, `kelas`) VALUES
(1, 'abdul', '12 ACP'),
(2, 'Ali', '12 OA'),
(3, 'Budi', '12 ACP'),
(4, 'Candika', '12 OA'),
(6, 'udin', '12 ACP'),
(7, 'Tedi ', '12 RPL'),
(10, 'Seti', '12 RPL');

--
-- Triggers `siswas`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `siswas` FOR EACH ROW INSERT INTO log (status, nama) VALUES ('HAPUS NAMA', old.nama)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `siswas` FOR EACH ROW INSERT INTO log (status, nama) VALUES ('TAMBAH NAMA', new.nama)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update` AFTER UPDATE ON `siswas` FOR EACH ROW INSERT INTO log (status, nama, new_nama, time) VALUES ('UPDATE NAMA', old.nama,new.nama, CURRENT_TIMESTAMP)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `suhusiswas`
--

CREATE TABLE `suhusiswas` (
  `id_suhu` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `suhu` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suhusiswas`
--

INSERT INTO `suhusiswas` (`id_suhu`, `id_siswa`, `suhu`, `created_at`, `updated_at`) VALUES
(2, 2, 34, '2022-05-24 02:22:29', NULL),
(9, 4, 35, '2022-05-24 02:22:29', NULL),
(34, 7, 40, '2022-05-23 19:28:09', '2022-05-24 02:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ali', 'admin', 'admin@gmail.com', NULL, '$2y$10$pFIl3hOHXWJTmkaecoMVXO2UHSwinGanmQovlhqxixtInUEoGgRmu', 'aluTZbhVF6xsHOgmFYb6CiCEHNsizsptKqWC6ePphvBgH5ODr00ujv1gDkWl', '2022-05-24 15:59:08', '2022-05-24 15:59:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `nama` (`nama`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `suhusiswas`
--
ALTER TABLE `suhusiswas`
  ADD PRIMARY KEY (`id_suhu`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suhusiswas`
--
ALTER TABLE `suhusiswas`
  MODIFY `id_suhu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `suhusiswas`
--
ALTER TABLE `suhusiswas`
  ADD CONSTRAINT `suhusiswas_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
