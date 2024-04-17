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
-- Table structure for table `logofa`
--

CREATE TABLE `logofa` (
  `id` int(11) UNSIGNED NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `logofa`
--

INSERT INTO `logofa` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, '{\"logo\":\"Hospital User\",\"value\":\"fas fa-hospital-user\"}', '2024-03-08 02:09:53', '2024-03-08 02:09:53'),
(2, '{\"logo\":\"Cat\",\"value\":\"fas fa-cat\"}', '2024-03-08 03:26:09', '2024-03-08 03:26:09'),
(3, '{\"logo\":\"Address Book\",\"value\":\"fas fa-address-book\"}', '2024-03-08 02:15:44', '2024-03-08 02:15:44'),
(4, '{\"logo\":\"Address Card\",\"value\":\"fas fa-address-card\"}', '2024-03-08 02:15:58', '2024-03-08 02:15:58'),
(5, '{\"logo\":\"Ambulance\",\"value\":\"fas fa-ambulance\"}', '2024-03-08 02:16:27', '2024-03-08 02:16:27'),
(6, '{\"logo\":\"Baby\",\"value\":\"fas fa-baby\"}', '2024-03-08 02:17:24', '2024-03-08 02:17:24'),
(7, '{\"logo\":\"Baby Carriage\",\"value\":\"fas fa-baby-carriage\"}', '2024-03-08 02:17:38', '2024-03-08 02:17:38'),
(8, '{\"logo\":\"Bath\",\"value\":\"fas fa-bath\"}', '2024-03-08 02:18:15', '2024-03-08 02:18:15'),
(9, '{\"logo\":\"Bed\",\"value\":\"fas fa-bed\"}', '2024-03-08 02:18:31', '2024-03-08 02:18:31'),
(10, '{\"logo\":\"Biohazard\",\"value\":\"fas fa-biohazard\"}', '2024-03-08 02:19:21', '2024-03-08 02:19:21'),
(11, '{\"logo\":\"Blind\",\"value\":\"fas fa-blind\"}', '2024-03-08 02:20:04', '2024-03-08 02:20:15'),
(12, '{\"logo\":\"Bolt\",\"value\":\"fas fa-bolt\"}', '2024-03-08 02:52:25', '2024-03-08 02:52:25'),
(13, '{\"logo\":\"Book Medical\",\"value\":\"fas fa-book-medical\"}', '2024-03-08 02:52:44', '2024-03-08 02:52:50'),
(14, '{\"logo\":\"Briefcase Medical\",\"value\":\"fas fa-briefcase-medical\"}', '2024-03-08 03:24:03', '2024-03-08 03:24:03'),
(15, '{\"logo\":\"Brain\",\"value\":\"fas fa-brain\"}', '2024-03-08 03:24:03', '2024-03-08 03:24:22'),
(16, '{\"logo\":\"Building\",\"value\":\"fas fa-building\"}', '2024-03-08 03:24:33', '2024-03-08 03:24:33'),
(17, '{\"logo\":\"Bullhorn\",\"value\":\"fas fa-bullhorn\"}', '2024-03-08 03:24:40', '2024-03-08 03:24:40'),
(18, '{\"logo\":\"Bus\",\"value\":\"fas fa-bus-alt\"}', '2024-03-08 03:24:48', '2024-03-08 03:24:48'),
(19, '{\"logo\":\"Calendar\",\"value\":\"fas fa-calendar-alt\"}', '2024-03-08 03:25:07', '2024-03-08 03:25:07'),
(20, '{\"logo\":\"Calendar Plus\",\"value\":\"fas fa-calendar-plus\"}', '2024-03-08 03:25:15', '2024-03-08 03:25:15'),
(21, '{\"logo\":\"Camera\",\"value\":\"fas fa-camera\"}', '2024-03-08 03:25:23', '2024-03-08 03:25:30'),
(22, '{\"logo\":\"Capsules\",\"value\":\"fas fa-capsules\"}', '2024-03-08 03:25:45', '2024-03-08 03:25:45'),
(23, '{\"logo\":\"Car\",\"value\":\"fas fa-car\"}', '2024-03-08 03:25:51', '2024-03-08 03:25:51'),
(24, '{\"logo\":\"Cart Plus\",\"value\":\"fas fa-cart-plus\"}', '2024-03-08 03:25:58', '2024-03-08 03:25:58'),
(25, '{\"logo\":\"Cash Register\",\"value\":\"fas fa-cash-register\"}', '2024-03-08 03:26:04', '2024-03-08 03:26:04'),
(27, '{\"logo\":\"Visa\",\"value\":\"fab fa-cc-visa\"}', '2024-03-08 03:26:14', '2024-03-08 03:26:14'),
(28, '{\"logo\":\"Child\",\"value\":\"fas fa-child\"}', '2024-03-08 03:26:19', '2024-03-08 03:26:19'),
(29, '{\"logo\":\"Clinic Medical\",\"value\":\"fas fa-clinic-medical\"}', '2024-03-08 03:26:29', '2024-03-08 03:26:29'),
(30, '{\"logo\":\"Clipboard Check\",\"value\":\"fas fa-clipboard-check\"}', '2024-03-08 03:26:44', '2024-03-08 03:26:44'),
(31, '{\"logo\":\"Clipboard List\",\"value\":\"fas fa-clipboard-list\"}', '2024-03-08 03:26:51', '2024-03-08 03:26:51'),
(32, '{\"logo\":\"Coffee\",\"value\":\"fas fa-coffee\"}', '2024-03-08 03:26:57', '2024-03-08 03:26:57'),
(33, '{\"logo\":\"Comment Medical\",\"value\":\"fas fa-comment-medical\"}', '2024-03-08 03:27:04', '2024-03-08 03:27:07'),
(34, '{\"logo\":\"Diagnoses\",\"value\":\"fas fa-diagnoses\"}', '2024-03-08 03:27:54', '2024-03-08 03:27:54'),
(35, '{\"logo\":\"DNA\",\"value\":\"fas fa-dna\"}', '2024-03-08 03:28:01', '2024-03-08 03:28:01'),
(36, '{\"logo\":\"Eye\",\"value\":\"fas fa-eye\"}', '2024-03-08 03:28:07', '2024-03-08 03:28:07'),
(37, '{\"logo\":\"Female\",\"value\":\"fas fa-female\"}', '2024-03-08 03:28:13', '2024-03-08 03:28:13'),
(38, '{\"logo\":\"File Medical\",\"value\":\"fas fa-file-medical\"}', '2024-03-08 03:28:20', '2024-03-08 03:28:20'),
(39, '{\"logo\":\"First Aid\",\"value\":\"fas fa-first-aid\"}', '2024-03-08 03:28:25', '2024-03-08 03:28:25'),
(40, '{\"logo\":\"Holding Medical\",\"value\":\"fas fa-hand-holding-medical\"}', '2024-03-08 03:28:37', '2024-03-08 03:28:37'),
(41, '{\"logo\":\"Hand Sparkles\",\"value\":\"fas fa-hand-sparkles\"}', '2024-03-08 03:28:43', '2024-03-08 03:28:43'),
(42, '{\"logo\":\"Hands\",\"value\":\"fas fa-hands\"}', '2024-03-08 03:28:48', '2024-03-08 03:28:48'),
(43, '{\"logo\":\"Hand Helping\",\"value\":\"fas fa-hands-helping\"}', '2024-03-08 03:28:55', '2024-03-08 03:29:08'),
(44, '{\"logo\":\"Hand Wash\",\"value\":\"fas fa-hands-wash\"}', '2024-03-08 03:29:02', '2024-03-08 03:29:02'),
(45, '{\"logo\":\"Handshake\",\"value\":\"fas fa-handshake\"}', '2024-03-08 03:29:17', '2024-03-08 03:29:17'),
(46, '{\"logo\":\"Side Cough\",\"value\":\"fas fa-head-side-cough\"}', '2024-03-08 03:29:27', '2024-03-08 03:29:27'),
(47, '{\"logo\":\"Head Side Mask\",\"value\":\"fas fa-head-side-mask\"}', '2024-03-08 03:29:37', '2024-03-08 03:29:37'),
(48, '{\"logo\":\"Head Side Virus\",\"value\":\"fas fa-head-side-virus\"}', '2024-03-08 03:29:51', '2024-03-08 03:29:51'),
(49, '{\"logo\":\"Heartbeat\",\"value\":\"fas fa-heartbeat\"}', '2024-03-08 03:29:59', '2024-03-08 03:29:59'),
(50, '{\"logo\":\"Hospital\",\"value\":\"fas fa-hospital\"}', '2024-03-08 03:30:07', '2024-03-08 03:30:07'),
(51, '{\"logo\":\"Hospital Alt\",\"value\":\"fas fa-hospital-alt\"}', '2024-03-08 03:30:15', '2024-03-08 03:30:15'),
(52, '{\"logo\":\"Laptop Medical\",\"value\":\"fas fa-laptop-medical\"}', '2024-03-08 03:30:24', '2024-03-08 03:30:24'),
(53, '{\"logo\":\"Male\",\"value\":\"fas fa-male\"}', '2024-03-08 03:30:30', '2024-03-08 03:30:30'),
(54, '{\"logo\":\"Medkit\",\"value\":\"fas fa-medkit\"}', '2024-03-08 03:30:37', '2024-03-08 03:30:41'),
(55, '{\"logo\":\"Medrt\",\"value\":\"fab fa-medrt\"}', '2024-03-08 03:30:55', '2024-03-08 03:30:55'),
(56, '{\"logo\":\"Notes Medical\",\"value\":\"fas fa-notes-medical\"}', '2024-03-08 03:31:01', '2024-03-08 03:31:01'),
(57, '{\"logo\":\"Phone Volume\",\"value\":\"fas fa-phone-volume\"}', '2024-03-08 03:31:08', '2024-03-08 03:31:08'),
(58, '{\"logo\":\"Pills\",\"value\":\"fas fa-pills\"}', '2024-03-08 03:31:13', '2024-03-08 03:31:13'),
(59, '{\"logo\":\"Plus Circle\",\"value\":\"fas fa-plus-circle\"}', '2024-03-08 03:31:20', '2024-03-08 03:31:25'),
(60, '{\"logo\":\"Plus Square\",\"value\":\"fas fa-plus-square\"}', '2024-03-08 03:31:32', '2024-03-08 03:31:32'),
(61, '{\"logo\":\"Pray\",\"value\":\"fas fa-pray\"}', '2024-03-08 03:31:37', '2024-03-08 03:31:37'),
(62, '{\"logo\":\"Praying Hands\",\"value\":\"fas fa-praying-hands\"}', '2024-03-08 03:31:44', '2024-03-08 03:31:44'),
(63, '{\"logo\":\"Bottle Alt\",\"value\":\"fas fa-prescription-bottle-alt\"}', '2024-03-08 03:31:56', '2024-03-08 03:31:56'),
(64, '{\"logo\":\"Procedures\",\"value\":\"fas fa-procedures\"}', '2024-03-08 03:32:03', '2024-03-08 03:32:03'),
(65, '{\"logo\":\"Pump Medical\",\"value\":\"fas fa-pump-medical\"}', '2024-03-08 03:32:15', '2024-03-08 03:32:15'),
(66, '{\"logo\":\"Pump Soap\",\"value\":\"fas fa-pump-soap\"}', '2024-03-08 03:32:22', '2024-03-08 03:32:22'),
(67, '{\"logo\":\"Radiation\",\"value\":\"fas fa-radiation\"}', '2024-03-08 03:32:29', '2024-03-08 03:32:29'),
(68, '{\"logo\":\"Radiation Alt\",\"value\":\"fas fa-radiation-alt\"}', '2024-03-08 03:32:36', '2024-03-08 03:32:36'),
(69, '{\"logo\":\"Restroom\",\"value\":\"fas fa-restroom\"}', '2024-03-08 03:32:44', '2024-03-08 03:32:44'),
(70, '{\"logo\":\"Running\",\"value\":\"fas fa-running\"}', '2024-03-08 03:32:51', '2024-03-08 03:32:57'),
(71, '{\"logo\":\"Skull\",\"value\":\"fas fa-skull\"}', '2024-03-08 03:33:32', '2024-03-08 03:33:32'),
(72, '{\"logo\":\"Skull Crossbones\",\"value\":\"fas fa-skull-crossbones\"}', '2024-03-08 03:33:44', '2024-03-08 03:33:44'),
(73, '{\"logo\":\"Sleigh\",\"value\":\"fas fa-sleigh\"}', '2024-03-08 03:33:52', '2024-03-08 03:33:52'),
(74, '{\"logo\":\"Smoking\",\"value\":\"fas fa-smoking\"}', '2024-03-08 03:33:59', '2024-03-08 03:33:59'),
(75, '{\"logo\":\"Smoking Ban\",\"value\":\"fas fa-smoking-ban\"}', '2024-03-08 03:34:06', '2024-03-08 03:34:06'),
(76, '{\"logo\":\"Street View\",\"value\":\"fas fa-street-view\"}', '2024-03-08 03:34:12', '2024-03-08 03:34:12'),
(77, '{\"logo\":\"Swimmer\",\"value\":\"fas fa-swimmer\"}', '2024-03-08 03:34:21', '2024-03-08 03:34:21'),
(78, '{\"logo\":\"Tablets\",\"value\":\"fas fa-tablets\"}', '2024-03-08 03:34:21', '2024-03-08 03:34:36'),
(79, '{\"logo\":\"Taxi\",\"value\":\"fas fa-taxi\"}', '2024-03-08 03:34:44', '2024-03-08 03:34:44'),
(80, '{\"logo\":\"Tooth\",\"value\":\"fas fa-tooth\"}', '2024-03-08 03:34:49', '2024-03-08 03:34:49'),
(81, '{\"logo\":\"Vial\",\"value\":\"fas fa-vial\"}', '2024-03-08 03:34:54', '2024-03-08 03:34:54'),
(82, '{\"logo\":\"Vials\",\"value\":\"fas fa-vials\"}', '2024-03-08 03:35:11', '2024-03-08 03:35:11'),
(83, '{\"logo\":\"Virus\",\"value\":\"fas fa-virus\"}', '2024-03-08 03:35:16', '2024-03-08 03:35:16'),
(84, '{\"logo\":\"Viruses\",\"value\":\"fas fa-viruses\"}', '2024-03-08 03:35:21', '2024-03-08 03:35:21'),
(85, '{\"logo\":\"Walking\",\"value\":\"fas fa-walking\"}', '2024-03-08 03:35:30', '2024-03-08 03:35:30'),
(86, '{\"logo\":\"Weight\",\"value\":\"fas fa-weight\"}', '2024-03-08 03:35:34', '2024-03-08 03:35:39'),
(87, '{\"logo\":\"Wheel Chair\",\"value\":\"fas fa-wheelchair\"}', '2024-03-08 03:35:48', '2024-03-08 03:36:05'),
(88, '{\"logo\":\"Wrench\",\"value\":\"fas fa-wrench\"}', '2024-03-08 03:35:58', '2024-03-08 03:35:58'),
(89, '{\"logo\":\"Wifi\",\"value\":\"fas fa-wifi\"}', '2024-03-08 03:36:12', '2024-03-08 03:36:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logofa`
--
ALTER TABLE `logofa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logofa`
--
ALTER TABLE `logofa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
