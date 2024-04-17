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
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'THT (Telinga, Hidung, Tenggorokan)', '{\"status\":\"active\",\"poliklinik\":\"THT (Telinga, Hidung, Tenggorokan)\",\"deskripsi\":\"Dokter spesialis THT adalah dokter yang memiliki keahlian khusus dalam mengobati penyakit yang berkaitan dengan telinga, hidung, dan tenggorokan. Selain itu, dokter spesialis ini juga bertugas untuk mengatasi sejumlah penyakit yang terjadi di kepala dan leher.\",\"konten\":\"<div>Ada beberapa jenis penyakit yang dapat ditangani oleh dokter spesialis THT, antara lain :<\\/div><div><strong>1. Gangguan Telinga<\\/strong><\\/div><div><strong>2. Gangguan Hidung<\\/strong><\\/div><div><strong>3. Gangguan Tenggorokan<\\/strong><\\/div><div><strong>4. Gangguan Tidur<\\/strong><\\/div><div><strong>5. Gangguan Di Leher &amp; Kepala<\\/strong><\\/div>\",\"images\":\"1709948963_477f9ff0a2df273206f8.jpg\"}', '2024-03-09 01:49:23', '2024-04-17 05:29:52', '0000-00-00 00:00:00'),
(2, 'Kejiwaan', '{\"status\":\" \",\"poliklinik\":\"Kejiwaan\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1709949435_3707e98ddf37370d3c2b.jpg\"}', '2024-03-09 01:57:15', '2024-03-12 02:06:32', '0000-00-00 00:00:00'),
(3, 'Rehab Medis', '{\"status\":\"\",\"poliklinik\":\"Rehab Medis\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209398_984409dbf1679ef1ccf4.jpg\"}', '2024-03-12 02:09:58', '2024-03-12 02:09:58', '0000-00-00 00:00:00'),
(4, 'Saraf', '{\"status\":\"\",\"poliklinik\":\"Saraf\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209412_260230892b560ec6cc28.jpg\"}', '2024-03-12 02:10:12', '2024-03-12 02:10:12', '0000-00-00 00:00:00'),
(5, 'Gigi', '{\"status\":\"\",\"poliklinik\":\"Gigi\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209434_73434cd39811f268ef38.jpg\"}', '2024-03-12 02:10:34', '2024-03-12 02:10:34', '0000-00-00 00:00:00'),
(6, 'Anak', '{\"status\":\"\",\"poliklinik\":\"Anak\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209447_fac31ff707bf23c1bf8d.jpg\"}', '2024-03-12 02:10:47', '2024-03-12 02:10:47', '0000-00-00 00:00:00'),
(7, 'Penyakit Dalam', '{\"status\":\"\",\"poliklinik\":\"Penyakit Dalam\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209458_9eabe2d23ec63254f00d.jpg\"}', '2024-03-12 02:10:58', '2024-03-12 02:10:58', '0000-00-00 00:00:00'),
(8, 'Urologi', '{\"status\":\"\",\"poliklinik\":\"Urologi\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209480_6ce9c116a4537dcf7fca.jpg\"}', '2024-03-12 02:11:20', '2024-03-12 02:11:20', '0000-00-00 00:00:00'),
(9, 'Ortopedi', '{\"status\":\"\",\"poliklinik\":\"Ortopedi\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209489_19e5d88e4dcf9ba98690.jpg\"}', '2024-03-12 02:11:29', '2024-03-12 02:11:29', '0000-00-00 00:00:00'),
(10, 'Kandungan', '{\"status\":\"\",\"poliklinik\":\"Kandungan\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209500_dad0dccc226ed8d37960.jpg\"}', '2024-03-12 02:11:40', '2024-03-12 02:11:40', '0000-00-00 00:00:00'),
(11, 'Bedah Umum', '{\"status\":\"\",\"poliklinik\":\"Bedah Umum\",\"deskripsi\":\" \",\"konten\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"images\":\"1710209512_c2ee98f788c23fd378a6.jpg\"}', '2024-03-12 02:11:52', '2024-03-12 02:11:52', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
