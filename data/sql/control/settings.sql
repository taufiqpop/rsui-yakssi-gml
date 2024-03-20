-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 03:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsuiyakssi`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `nama`, `owner`, `telepon`, `author`, `alamat`, `jadwal`, `email`, `fax`, `instagram`, `facebook`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'RSUI YAKSSI', 'RSUI YAKSSI Gemolong', '+622716811336', 'RSUI YAKSSI', 'Jl. Raya Solo - Purwodadi KM. 20, Gemolong, Kabayanan II, Kragilan, Kec. Gemolong, Kabupaten Sragen, Jawa Tengah (57274)', 'Senin - Sabtu : 07:00 - 20:00 WIB || UGD 24 Jam', 'rsuiyakssi_gml@yahoo.co.id', '+62 271 6811 336', 'rsuiyakssi', 'rsuiyakssi.gml', '2024-03-06 11:01:02', '2024-03-12 02:43:26', '2024-03-06 11:01:02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
