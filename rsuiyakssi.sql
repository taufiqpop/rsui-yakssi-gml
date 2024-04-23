-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:11 AM
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
(1, 'About Us', '{\"header\":\"About Us\",\"deskripsi\":\"<div>&nbsp; &nbsp; &nbsp;RSUI YAKSSI Gemolong merupakan salah satu rumah sakit umum di wilayah Sragen yang berkedudukan di Jl Raya Solo-Purwodadi Km 20 Gemolong. RSUI YAKSSI Gemolong merupakan Rumah Sakit yang berada dibawah PT. YAKSSI. Berawal mula dari sebuah klinik kesehatan di Gemolong, Rumah Sakit Umum YAKSSI selalu mengalami perubahan besar maupun kecil dalam upayanya melayani masyarakat. Berbagai tantangan dan halangan berhasil dilewati dalam keberlangsungan rumah sakit. RSUI YAKSSI masih sadar bahwasanya pelayanan kepada masyarakat tiada hentinya, dan selamanya RSUI YAKSSI tidak bisa sempurna. Namun, itu tidak menghentikan upaya RSUI YAKSSI untuk selalu berbenah diri.<\\/div>\",\"konten\":\"\",\"images\":\"1709958696_e7203875ac4a76bee20a.png\"}', '2024-03-09 05:12:51', '2024-04-17 05:02:31', '2024-03-09 05:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'taufiqpop@gmail.com', 1, '2024-04-17 06:07:10', 1),
(2, '::1', 'user@gmail.com', 2, '2024-04-17 06:13:44', 1),
(3, '::1', 'taufiqpop@gmail.com', 1, '2024-04-17 06:15:47', 1),
(4, '::1', 'user@gmail.com', 2, '2024-04-17 06:20:11', 1),
(5, '::1', 'taufiqpop@gmail.com', 1, '2024-04-17 06:30:21', 1),
(6, '::1', 'taufiqpop99', NULL, '2024-04-23 01:02:03', 0),
(7, '::1', 'taufiqpop@gmail.com', 1, '2024-04-23 01:02:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logofa`
--

CREATE TABLE `logofa` (
  `id` int(11) UNSIGNED NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(86, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1713333628, 1),
(87, '2024-03-01-033310', 'App\\Database\\Migrations\\Settings', 'default', 'App', 1713333628, 1),
(88, '2024-03-01-033634', 'App\\Database\\Migrations\\Dokter', 'default', 'App', 1713333628, 1),
(89, '2024-03-01-090955', 'App\\Database\\Migrations\\Pasien', 'default', 'App', 1713333628, 1),
(90, '2024-03-02-005315', 'App\\Database\\Migrations\\Poliklinkik', 'default', 'App', 1713333628, 1),
(91, '2024-03-02-005329', 'App\\Database\\Migrations\\Pelayanan', 'default', 'App', 1713333628, 1),
(92, '2024-03-02-005344', 'App\\Database\\Migrations\\Gallery', 'default', 'App', 1713333628, 1),
(93, '2024-03-02-005355', 'App\\Database\\Migrations\\Faq', 'default', 'App', 1713333628, 1),
(94, '2024-03-02-012719', 'App\\Database\\Migrations\\Pesan', 'default', 'App', 1713333628, 1),
(95, '2024-03-08-011356', 'App\\Database\\Migrations\\Logofa', 'default', 'App', 1713333628, 1),
(96, '2024-03-09-023458', 'App\\Database\\Migrations\\Beranda', 'default', 'App', 1713333628, 1),
(97, '2024-03-09-035853', 'App\\Database\\Migrations\\About', 'default', 'App', 1713333628, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `name`, `subject`, `email`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pop', 'Halo', 'pop@gmail.com', 'Apa Kabar?', '2024-04-17 06:29:00', '2024-04-17 06:29:00', '0000-00-00 00:00:00');

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
(1, 'THT', '{\"status\":\"active\",\"poliklinik\":\"THT\",\"deskripsi\":\"Dokter spesialis THT adalah dokter yang memiliki keahlian khusus dalam mengobati penyakit yang berkaitan dengan telinga, hidung, dan tenggorokan. Selain itu, dokter spesialis ini juga bertugas untuk mengatasi sejumlah penyakit yang terjadi di kepala dan leher.\",\"konten\":\"<div>Ada beberapa jenis penyakit yang dapat ditangani oleh dokter spesialis THT, antara lain :<\\/div><div><strong>1. Gangguan Telinga<\\/strong><\\/div><div><strong>2. Gangguan Hidung<\\/strong><\\/div><div><strong>3. Gangguan Tenggorokan<\\/strong><\\/div><div><strong>4. Gangguan Tidur<\\/strong><\\/div><div><strong>5. Gangguan Di Leher &amp; Kepala<\\/strong><\\/div>\",\"images\":\"1709948963_477f9ff0a2df273206f8.jpg\"}', '2024-03-09 01:49:23', '2024-04-17 06:36:36', '0000-00-00 00:00:00'),
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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `nama`, `owner`, `telepon`, `author`, `alamat`, `jadwal`, `email`, `fax`, `instagram`, `facebook`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RSUI YAKSSI Gemolong', 'RSUI YAKSSI Gemolong', '+622716811336', 'RSUI YAKSSI', 'Jl. Raya Solo - Purwodadi KM. 20, Gemolong, Kabayanan II, Kragilan, Kec. Gemolong, Kabupaten Sragen, Jawa Tengah (57274)', 'Senin - Sabtu : 07:00 - 20:00 WIB || UGD 24 Jam', 'rsuiyakssi_gml@yahoo.co.id', '+62 271 6811 336', 'rsuiyakssi', 'rsuiyakssi.gml', '2024-03-06 11:01:02', '2024-04-17 06:30:45', '2024-03-06 11:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'taufiqpop@gmail.com', 'taufiqpop', 'Taufiq Pop', '1709691471_130157a4b6030fe9b13d.png', '$2y$10$0PU2PnhC.c0nzWosmdVwQefb7MePnm.wDDgkVM.MdKBeyGGiDla4u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 14:40:37', '2024-04-17 06:12:40', '0000-00-00 00:00:00'),
(2, 'user@gmail.com', 'user', 'User', '1713334524_9076320b05ebd9112a81.png', '$2y$10$2XAdViMFHMCnJDgAWJPrX.9EE5/GBVLaPRBIfTM/kxPPWyPYrPHIG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-04-17 06:13:34', '2024-04-17 06:15:24', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logofa`
--
ALTER TABLE `logofa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logofa`
--
ALTER TABLE `logofa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
