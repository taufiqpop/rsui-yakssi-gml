-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 03:31 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About Us', '{\"header\":\"About Us\",\"deskripsi\":\"<p style=\\\"text-align: justify;\\\">&nbsp; &nbsp; &nbsp; RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong. RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI. Berawal mula dari sebuah klinik kesehatan di Gemolong, Rumah Sakit Umum YAKSSI selalu mengalami perubahan besar maupun kecil dalam upayanya melayani masyarakat. Berbagai tantangan dan halangan berhasil dilewati dalam keberlangsungan rumah sakit. RSUI YAKSSI masih sadar bahwasanya pelayanan kepada masyarakat tiada hentinya, dan selamanya RSUI YAKSSI tidak bisa sempurna. Namun, itu tidak menghentikan upaya RSUI YAKSSI untuk selalu berbenah diri.<\\/p>\",\"konten\":\"<p><img class=\\\"n1ed--selected\\\" src=\\\"https:\\/\\/fm.n1ed.com\\/files\\/all-england-2024-1779367935.jpg\\\" alt=\\\"\\\"><\\/p><script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1709958696_e7203875ac4a76bee20a.png\"}', '2024-03-09 05:12:51', '2024-03-20 02:00:02', '2024-03-09 05:12:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
