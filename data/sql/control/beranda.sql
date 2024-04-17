-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 07:55 AM
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
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Welcome To RSUI YAKSSI Gemolong', '{\"status\":\" active\",\"header\":\"Welcome To RSUI YAKSSI Gemolong\",\"deskripsi\":\"RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong. RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI.\",\"images\":\"1709953174_87c02ff6e4bc2bbb58fe.png\"}', '2024-03-09 02:59:34', '2024-03-09 02:59:34', '0000-00-00 00:00:00'),
(2, 'Welcome To RSUI YAKSSI Gemolong', '{\"status\":\"\",\"header\":\"Welcome To RSUI YAKSSI Gemolong\",\"deskripsi\":\"RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong. RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI.\",\"images\":\"1709953193_e0bb5dbba675e503699f.jpg\"}', '2024-03-09 02:59:53', '2024-03-09 02:59:53', '0000-00-00 00:00:00'),
(3, 'Welcome To RSUI YAKSSI Gemolong', '{\"status\":\"\",\"header\":\"Welcome To RSUI YAKSSI Gemolong\",\"deskripsi\":\"RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong. RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI.\",\"images\":\"1709953201_26b136877d5b0df8f1e5.jpg\"}', '2024-03-09 03:00:01', '2024-03-09 03:00:01', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
