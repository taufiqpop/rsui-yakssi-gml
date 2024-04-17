-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 07:54 AM
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
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IGD (24 Jam)', '{\"jenis\":\"IGD (24 Jam)\",\"logo\":\"fas fa-hospitalfas fa-hand-holding-medical\",\"deskripsi\":\"IGD kami selalu siaga 24 jam\"}', '2024-03-08 02:09:27', '2024-03-12 01:53:23', '0000-00-00 00:00:00'),
(2, 'Radiologi/Rontgen (24 Jam)', '{\"jenis\":\"Radiologi\\/Rontgen (24 Jam)\",\"logo\":\"fas fa-radiation-alt\",\"deskripsi\":\"Radiologi\\/Rontgen (24 Jam)\"}', '2024-03-09 04:41:36', '2024-03-12 01:47:09', '0000-00-00 00:00:00'),
(3, 'Ruang Bersalin (24 Jam)', '{\"jenis\":\"Ruang Bersalin (24 Jam)\",\"logo\":\"fas fa-baby\",\"deskripsi\":\"Ruang Bersalin (24 Jam)\"}', '2024-03-09 04:41:52', '2024-03-12 01:46:30', '0000-00-00 00:00:00'),
(4, 'Instalasi Farmasi (24 Jam)', '{\"jenis\":\"Instalasi Farmasi (24 Jam)\",\"logo\":\"fas fa-capsules\",\"deskripsi\":\"Instalasi Farmasi (24 Jam)\"}', '2024-03-09 04:42:05', '2024-03-12 01:46:42', '0000-00-00 00:00:00'),
(5, 'Laboratorium (24 Jam)', '{\"jenis\":\"Laboratorium (24 Jam)\",\"logo\":\"fas fa-vial\",\"deskripsi\":\"Laboratorium (24 Jam)\"}', '2024-03-09 04:42:14', '2024-03-12 01:47:26', '0000-00-00 00:00:00'),
(6, 'Fisioterapi', '{\"jenis\":\"Fisioterapi\",\"logo\":\"fas fa-wheelchair\",\"deskripsi\":\"Fisioterapi\"}', '2024-03-09 04:42:24', '2024-03-12 01:48:44', '0000-00-00 00:00:00'),
(7, 'ICU, PICU, & NICU', '{\"jenis\":\"ICU, PICU, & NICU\",\"logo\":\"fas fa-hospital-user\",\"deskripsi\":\"ICU, PICU, & NICU\"}', '2024-03-09 04:42:31', '2024-03-12 01:50:10', '0000-00-00 00:00:00'),
(8, 'Kamar Operasi', '{\"jenis\":\"Kamar Operasi\",\"logo\":\"fas fa-clinic-medical\",\"deskripsi\":\"Kamar Operasi\"}', '2024-03-09 04:42:38', '2024-03-12 01:52:52', '0000-00-00 00:00:00'),
(9, 'Rawat Inap', '{\"jenis\":\"Rawat Inap\",\"logo\":\"fas fa-procedures\",\"deskripsi\":\"Rawat Inap\"}', '2024-03-09 04:42:45', '2024-03-12 02:05:20', '0000-00-00 00:00:00'),
(10, 'USG', '{\"jenis\":\"USG\",\"logo\":\"fas fa-baby-carriage\",\"deskripsi\":\"USG\"}', '2024-03-09 04:42:50', '2024-03-12 01:50:57', '0000-00-00 00:00:00'),
(11, 'Layanan Bank Darah', '{\"jenis\":\"Layanan Bank Darah\",\"logo\":\"fab fa-medrt\",\"deskripsi\":\"Layanan Bank Darah\"}', '2024-03-09 04:42:58', '2024-03-12 01:52:21', '0000-00-00 00:00:00'),
(12, 'Endoskopi THT', '{\"jenis\":\"Endoskopi THT\",\"logo\":\"fas fa-head-side-cough\",\"deskripsi\":\"Endoskopi THT\"}', '2024-03-09 04:43:06', '2024-03-12 01:52:31', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
