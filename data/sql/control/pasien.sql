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
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pasien Umum', '{\"jenis\":\"Pasien Umum\",\"deskripsi\":\"Pasien umum adalah pasien yang berobat membayar sendiri segala biaya perobatan dan perawatan sesuai dengan ketentuan ketentuan yang berlaku.\",\"images\":\"1709782194_dfc14b218e01133e9612.png\"}', '2024-03-07 03:29:54', '2024-03-07 03:29:54', '0000-00-00 00:00:00'),
(2, 'Pasien BPJS Kesehatan', '{\"jenis\":\"Pasien BPJS Kesehatan\",\"deskripsi\":\"Badan Penyelenggara Jaminan Sosial (BPJS) Kesehatan adalah badan hukum yang dibentuk untuk menyelenggarakan program jaminan kesehatan.\",\"images\":\"1709782213_d10d0391ba4111d346b1.png\"}', '2024-03-07 03:30:13', '2024-03-07 03:30:13', '0000-00-00 00:00:00'),
(3, 'BPJS Ketenagakerjaan', '{\"jenis\":\"BPJS Ketenagakerjaan\",\"deskripsi\":\"BPJS Ketenagakerjaan adalah singkatan dari Badan Penyelenggara Jaminan Sosial yang merupakan badan hukum publik yang bertugas melindungi seluruh pekerja melalaui 4 program jaminan sosial ketenagakerjaan.\",\"images\":\"1709782231_8b2cd9f3a70cfbc49b6d.png\"}', '2024-03-07 03:30:31', '2024-03-07 03:30:31', '0000-00-00 00:00:00'),
(4, 'Jasa Raharja', '{\"jenis\":\"Jasa Raharja\",\"deskripsi\":\"Asuransi Jasa Raharja adalah asuransi sosial milik negara (BUMN) yang bertanggung jawab mengelola asuransi kecelakaan lalu lintas bagi penumpang baik angkutan umum, kendaraan pribadi, maupun pejalan kaki.\",\"images\":\"1709782257_50411a5824a1c3766caf.png\"}', '2024-03-07 03:30:57', '2024-03-07 04:53:45', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
