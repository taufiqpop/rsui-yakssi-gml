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
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Walter White', '{\"nama\":\"Walter White\",\"spesialis\":\"Chief Medical Officer\",\"photo\":\"1709792516_2ec63d4eee5085951718.jpg\"}', '2024-03-07 06:21:56', '2024-03-07 06:21:56', '0000-00-00 00:00:00'),
(2, 'Sarah Jhonson', '{\"nama\":\"Sarah Jhonson\",\"spesialis\":\"Anesthesiologist\",\"photo\":\"1709792534_a95d5179dfb03af56b1c.jpg\"}', '2024-03-07 06:22:14', '2024-03-07 06:22:14', '0000-00-00 00:00:00'),
(3, 'William Anderson', '{\"nama\":\"William Anderson\",\"spesialis\":\"Cardiology\",\"photo\":\"1709792550_bd0677f84d7243631a97.jpg\"}', '2024-03-07 06:22:30', '2024-03-07 06:22:30', '0000-00-00 00:00:00'),
(4, 'Amanda Jepson', '{\"nama\":\"Amanda Jepson\",\"spesialis\":\"Neurosurgeon\",\"photo\":\"1709792564_9e685c949f670a99d8c3.jpg\"}', '2024-03-07 06:22:44', '2024-04-17 04:41:05', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
