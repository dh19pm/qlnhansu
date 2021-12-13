-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 07:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlns`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangcap`
--

CREATE TABLE `bangcap` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenbc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bangcap`
--

INSERT INTO `bangcap` (`id`, `tenbc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tiến Sĩ', '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(2, 'Thạc Sĩ', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(3, 'Cử Nhân', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(4, 'Đại Học', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(5, 'Cao Đẳng', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `baohiem`
--

CREATE TABLE `baohiem` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `loaibaohiem_id` int(10) UNSIGNED NOT NULL,
  `maso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noicap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycap` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `mucdong` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baohiem`
--

INSERT INTO `baohiem` (`id`, `nhanvien_id`, `loaibaohiem_id`, `maso`, `noicap`, `ngaycap`, `ngayhethan`, `mucdong`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 23, 1, '123123213123123', '123213123213213', '2021-11-02', '2021-11-10', 1.20, '2021-11-01 20:55:59', '2021-11-29 19:41:57', NULL),
(2, 23, 1, '123123213123123', '123213123213213', '2021-11-02', '2021-11-10', 1.20, '2021-11-01 20:57:11', '2021-11-01 20:57:11', NULL),
(3, 23, 3, '123213213', '123213213213123', '2021-11-02', '2021-11-11', 2.30, '2021-11-01 21:00:33', '2021-11-29 19:42:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chamcong`
--

CREATE TABLE `chamcong` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chamcong`
--

INSERT INTO `chamcong` (`id`, `nhanvien_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2021-11-01 17:00:00', '2021-11-01 20:33:32', NULL),
(2, 2, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(3, 3, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(4, 4, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(5, 5, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(6, 6, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(7, 7, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(8, 8, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(9, 9, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(10, 10, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(11, 11, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(12, 12, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(13, 13, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(14, 14, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(15, 15, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(16, 16, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(17, 17, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(18, 18, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(19, 19, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(20, 20, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(21, 21, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(22, 22, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(23, 23, '2021-11-01 17:00:00', '2021-11-01 20:33:33', NULL),
(24, 1, '2021-10-31 17:00:00', '2021-11-01 20:33:58', NULL),
(25, 2, '2021-10-31 17:00:00', '2021-11-01 20:33:58', NULL),
(26, 3, '2021-10-31 17:00:00', '2021-11-01 20:33:58', NULL),
(27, 4, '2021-10-31 17:00:00', '2021-11-01 20:33:58', NULL),
(28, 5, '2021-10-31 17:00:00', '2021-11-01 20:33:58', NULL),
(29, 6, '2021-10-31 17:00:00', '2021-11-01 20:33:58', NULL),
(30, 7, '2021-10-31 17:00:00', '2021-11-01 20:33:58', NULL),
(31, 8, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(32, 9, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(33, 10, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(34, 11, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(35, 12, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(36, 13, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(37, 14, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(38, 15, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(39, 16, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(40, 17, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(41, 18, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(42, 19, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(43, 20, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(44, 21, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(45, 22, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(46, 23, '2021-10-31 17:00:00', '2021-11-01 20:33:59', NULL),
(47, 1, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(48, 2, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(49, 3, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(50, 4, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(51, 5, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(52, 6, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(53, 7, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(54, 8, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(55, 9, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(56, 10, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(57, 11, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(58, 12, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(59, 13, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(60, 14, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(61, 15, '2021-11-02 17:00:00', '2021-11-01 20:34:14', NULL),
(62, 16, '2021-11-02 17:00:00', '2021-11-01 20:34:15', NULL),
(63, 17, '2021-11-02 17:00:00', '2021-11-01 20:34:15', NULL),
(64, 18, '2021-11-02 17:00:00', '2021-11-01 20:34:15', NULL),
(65, 19, '2021-11-02 17:00:00', '2021-11-01 20:34:15', NULL),
(66, 20, '2021-11-02 17:00:00', '2021-11-01 20:34:15', NULL),
(67, 21, '2021-11-02 17:00:00', '2021-11-01 20:34:15', NULL),
(68, 22, '2021-11-02 17:00:00', '2021-11-01 20:34:15', NULL),
(69, 23, '2021-11-02 17:00:00', '2021-11-01 20:34:15', NULL),
(70, 1, '2021-11-03 17:00:00', '2021-11-01 20:34:20', NULL),
(71, 2, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(72, 3, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(73, 4, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(74, 5, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(75, 6, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(76, 7, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(77, 8, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(78, 9, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(79, 10, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(80, 11, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(81, 12, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(82, 13, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(83, 14, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(84, 15, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(85, 16, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(86, 17, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(87, 18, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(88, 19, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(89, 20, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(90, 21, '2021-11-03 17:00:00', '2021-11-01 20:34:21', NULL),
(91, 22, '2021-11-03 17:00:00', '2021-11-01 20:34:22', NULL),
(92, 23, '2021-11-03 17:00:00', '2021-11-01 20:34:22', NULL),
(93, 1, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(94, 2, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(95, 3, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(96, 4, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(97, 5, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(98, 6, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(99, 7, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(100, 8, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(101, 9, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(102, 10, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(103, 11, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(104, 12, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(105, 13, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(106, 14, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(107, 15, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(108, 16, '2021-11-04 17:00:00', '2021-11-01 20:34:32', NULL),
(109, 17, '2021-11-04 17:00:00', '2021-11-01 20:34:33', NULL),
(110, 18, '2021-11-04 17:00:00', '2021-11-01 20:34:33', NULL),
(111, 19, '2021-11-04 17:00:00', '2021-11-01 20:34:33', NULL),
(112, 20, '2021-11-04 17:00:00', '2021-11-01 20:34:33', NULL),
(113, 21, '2021-11-04 17:00:00', '2021-11-01 20:34:33', NULL),
(114, 22, '2021-11-04 17:00:00', '2021-11-01 20:34:33', NULL),
(115, 23, '2021-11-04 17:00:00', '2021-11-01 20:34:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(10) UNSIGNED NOT NULL,
  `tencv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`id`, `tencv`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Trưởng Phòng', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(2, 'Trưởng Phòng', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(3, 'Phó Phòng', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(4, 'Marketing', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(5, 'Nhân Viên', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmon`
--

CREATE TABLE `chuyenmon` (
  `id` int(10) UNSIGNED NOT NULL,
  `tencm` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chuyenmon`
--

INSERT INTO `chuyenmon` (`id`, `tencm`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Programmer', '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(2, 'Tester', '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(3, 'Front-end', '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(4, 'Back-end', '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(5, 'Full-Stack', '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dantoc`
--

CREATE TABLE `dantoc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dantoc`
--

INSERT INTO `dantoc` (`id`, `tendt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kinh', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(2, 'Thái', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(3, 'Mường', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(4, 'Khmer', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(5, 'Hoa', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(6, 'Nùng', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(7, 'H\'Mông', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heso`
--

CREATE TABLE `heso` (
  `id` int(10) UNSIGNED NOT NULL,
  `luongcb` bigint(20) NOT NULL,
  `bac1` double(5,2) NOT NULL,
  `bac2` double(5,2) NOT NULL,
  `bac3` double(5,2) NOT NULL,
  `bac4` double(5,2) NOT NULL,
  `bac5` double(5,2) NOT NULL,
  `bac6` double(5,2) NOT NULL,
  `bac7` double(5,2) NOT NULL,
  `bac8` double(5,2) NOT NULL,
  `bac9` double(5,2) NOT NULL,
  `bac10` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heso`
--

INSERT INTO `heso` (`id`, `luongcb`, `bac1`, `bac2`, `bac3`, `bac4`, `bac5`, `bac6`, `bac7`, `bac8`, `bac9`, `bac10`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1500000, 1.00, 1.20, 1.40, 1.60, 1.80, 1.90, 2.00, 2.20, 2.40, 2.60, '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `ngaybd` date NOT NULL,
  `ngaykt` date DEFAULT NULL,
  `loaihopdong` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khautru`
--

CREATE TABLE `khautru` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `loaibaohiem_id` int(10) UNSIGNED NOT NULL,
  `mucdong` double(5,2) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khautru`
--

INSERT INTO `khautru` (`id`, `nhanvien_id`, `loaibaohiem_id`, `mucdong`, `thang`, `nam`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 23, 1, 1.33, 11, 2021, '2021-11-01 20:57:11', '2021-12-12 23:21:59', NULL),
(2, 23, 3, 1.30, 11, 2021, '2021-11-01 21:00:33', '2021-11-01 21:00:33', NULL),
(3, 23, 3, 2.30, 11, 2021, '2021-11-01 21:08:43', '2021-11-01 21:08:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loaibaohiem`
--

CREATE TABLE `loaibaohiem` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenbh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaibaohiem`
--

INSERT INTO `loaibaohiem` (`id`, `tenbh`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bảo Hiểm Xã Hội', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(2, 'Bảo Hiểm Y Tế', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(3, 'Bảo Hiểm Tai Nạn', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(4, 'Bảo Hiểm Thất Nghiệp', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL);

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
(139, '2020_01_01_000001_create_password_resets_table', 1),
(140, '2020_01_01_000002_create_failed_jobs_table', 1),
(141, '2021_09_16_110111_create_sessions_table', 1),
(142, '2021_09_25_115514_create_chucvu_table', 1),
(143, '2021_09_25_115518_create_phongban_table', 1),
(144, '2021_09_25_115522_create_bangcap_table', 1),
(145, '2021_09_25_115526_create_chuyenmon_table', 1),
(146, '2021_09_25_125819_create_phucap_table', 1),
(147, '2021_09_25_135933_create_dantoc_table', 1),
(148, '2021_09_25_135933_create_tongiao_table', 1),
(149, '2021_09_25_135934_create_ngoaingu_table', 1),
(150, '2021_09_25_145217_create_nhanvien_table', 1),
(151, '2021_09_25_145218_create_users_table', 1),
(152, '2021_09_25_145248_create_thuongphat_table', 1),
(153, '2021_09_25_145259_create_chamcong_table', 1),
(154, '2021_09_25_154734_create_ungluong_table', 1),
(155, '2021_09_27_023923_create_hopdong_table', 1),
(156, '2021_10_03_040135_create_nghiviec_table', 1),
(157, '2021_10_07_122524_create_loaibaohiem_table', 1),
(158, '2021_10_07_122913_create_baohiem_table', 1),
(159, '2021_10_07_122932_create_nhanluong_table', 1),
(160, '2021_10_15_085345_create_khautru_table', 1),
(161, '2021_10_25_122809_create_heso_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nghiviec`
--

CREATE TABLE `nghiviec` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `ngaybd` date NOT NULL,
  `ngaykt` date NOT NULL,
  `lydo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `huongluong` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nghiviec`
--

INSERT INTO `nghiviec` (`id`, `nhanvien_id`, `ngaybd`, `ngaykt`, `lydo`, `huongluong`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 8, '2021-11-11', '2021-11-18', '123', 1, '2021-11-15 09:25:30', '2021-11-15 09:25:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngoaingu`
--

CREATE TABLE `ngoaingu` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngoaingu`
--

INSERT INTO `ngoaingu` (`id`, `tenng`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sơ cấp - Bậc 1 (A1)', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(2, 'Sơ cấp - Bậc 2 (A2)', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(3, 'Trung cấp - Bậc 1 (B1)', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(4, 'Trung cấp - Bậc 2 (B2)', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(5, 'Cao cấp - Bậc 1 (C1)', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(6, 'Cao cấp - Bậc 2 (C2)', '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhanluong`
--

CREATE TABLE `nhanluong` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `heso` double(5,2) NOT NULL,
  `hsphucap` double(5,2) NOT NULL,
  `khautru` bigint(20) NOT NULL,
  `luongcb` bigint(20) NOT NULL,
  `mucluong` bigint(20) NOT NULL,
  `phucap` bigint(20) NOT NULL,
  `ngaycongchuan` int(11) NOT NULL,
  `ngaycong` int(11) NOT NULL,
  `nghihl` int(11) NOT NULL,
  `nghikhl` int(11) NOT NULL,
  `thuong` bigint(20) NOT NULL,
  `phat` bigint(20) NOT NULL,
  `tamung` bigint(20) NOT NULL,
  `thuclinh` bigint(20) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanluong`
--

INSERT INTO `nhanluong` (`id`, `nhanvien_id`, `heso`, `hsphucap`, `khautru`, `luongcb`, `mucluong`, `phucap`, `ngaycongchuan`, `ngaycong`, `nghihl`, `nghikhl`, `thuong`, `phat`, `tamung`, `thuclinh`, `thang`, `nam`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 23, 1.80, 1.50, 1, 1500000, 2700000, 40500, 26, 0, 0, 0, 1, 1, 1, 0, 11, 2021, '2021-11-01 08:03:07', '2021-11-01 20:37:47', '2021-11-01 20:37:47'),
(2, 23, 1.80, 1.50, 1, 1500000, 2700000, 40500, 25, 5, 0, 20, 100000009999, 0, 1, 100000558098, 11, 2021, '2021-11-01 20:36:42', '2021-11-01 20:37:53', '2021-11-01 20:37:53'),
(3, 1, 1.80, 1.50, 0, 1500000, 2700000, 40500, 26, 5, 0, 21, 999, 0, 0, 528018, 11, 2021, '2021-11-15 19:46:51', '2021-11-15 19:46:51', NULL),
(4, 1, 1.80, 1.50, 0, 1500000, 2700000, 40500, 26, 0, 0, 26, 0, 0, 0, 0, 12, 2021, '2021-11-15 19:47:27', '2021-11-15 19:47:27', NULL),
(5, 23, 1.80, 1.50, 129600, 1500000, 2700000, 40500, 26, 5, 0, 21, 9999, 0, 1, 407417, 11, 2021, '2021-12-12 23:16:48', '2021-12-12 23:16:48', NULL),
(6, 23, 1.80, 1.50, 132300, 1500000, 2700000, 40500, 26, 5, 0, 21, 9999, 0, 1, 404717, 11, 2021, '2021-12-12 23:18:08', '2021-12-12 23:18:08', NULL),
(7, 23, 1.80, 1.50, 133110, 1500000, 2700000, 40500, 26, 5, 0, 21, 9999, 0, 1, 403907, 11, 2021, '2021-12-12 23:22:07', '2021-12-12 23:22:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `phucap_id` int(10) UNSIGNED NOT NULL,
  `bangcap_id` int(10) UNSIGNED NOT NULL,
  `chuyenmon_id` int(10) UNSIGNED NOT NULL,
  `ngoaingu_id` int(10) UNSIGNED NOT NULL,
  `dantoc_id` int(10) UNSIGNED NOT NULL,
  `tongiao_id` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL DEFAULT 0,
  `ngaysinh` date NOT NULL,
  `cmnd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quequan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0,
  `ngaynghilam` date DEFAULT NULL,
  `bacluong` tinyint(4) NOT NULL,
  `hesoluong` double(5,2) NOT NULL,
  `photo_path` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `phucap_id`, `bangcap_id`, `chuyenmon_id`, `ngoaingu_id`, `dantoc_id`, `tongiao_id`, `hovaten`, `gioitinh`, `ngaysinh`, `cmnd`, `sdt`, `diachi`, `quequan`, `trangthai`, `ngaynghilam`, `bacluong`, `hesoluong`, `photo_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 13, 1, 3, 2, 2, 1, 'Đặng Tiến Sĩ', 0, '1985-09-21', '224212229', '0944430146', '8134 King Mews', 'Schowaltertown', 1, NULL, 5, 1.00, 'users/xEqTWY7r56cOYtFog4DzMzRliWJ0R44tFMfsB7Vx.jpg', '2021-11-01 07:58:57', '2021-11-29 19:39:49', NULL),
(2, 18, 3, 5, 2, 2, 2, 'Mai Tấn Lộc', 0, '1986-04-05', '451682907', '0934343444', '88730 Strosin Viaduct', 'Fisherhaven', 1, NULL, 5, 1.00, NULL, '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(3, 3, 3, 4, 1, 5, 1, 'Lê Quang Vinh', 0, '1991-11-18', '239415984', '09343430156', '92873 Stella Isle Apt. 951', 'New Johnnieville', 1, NULL, 7, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(4, 13, 2, 5, 5, 5, 6, 'Deonte Schinner', 0, '1995-10-11', '627948088', '(855) 692-7392', '994 Lynn Centers Apt. 136', 'Heidenreichside', 1, NULL, 8, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(5, 11, 5, 5, 5, 5, 3, 'Lela Kihn', 1, '1989-06-03', '808548889', '1-855-892-9444', '47280 Breitenberg Isle', 'Lake Cindyfurt', 1, NULL, 5, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(6, 10, 3, 5, 5, 3, 6, 'Everardo Beier', 1, '1989-03-11', '322656910', '844-542-4561', '4207 Effie Center Suite 777', 'Kiehnborough', 1, NULL, 8, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(7, 9, 1, 1, 6, 6, 6, 'Lenny Walsh', 0, '1988-03-29', '841717928', '(866) 504-0661', '735 Alden Course Suite 512', 'Jeannechester', 1, NULL, 7, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(8, 10, 5, 5, 1, 5, 1, 'Aiden Olson', 1, '1990-01-07', '560466896', '(800) 478-0361', '579 Padberg Pike Apt. 159', 'East Kimhaven', 1, NULL, 4, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(9, 13, 4, 2, 4, 1, 3, 'Kathryne Lemke', 0, '1994-05-02', '320028722', '855.544.9229', '7400 Predovic Shoals', 'Ronborough', 1, NULL, 6, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(10, 2, 1, 2, 4, 5, 3, 'Brandy Senger', 0, '1987-09-17', '882439618', '1-844-505-3634', '3511 Reilly Gateway Apt. 234', 'North Tanya', 1, NULL, 6, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(11, 5, 1, 5, 2, 6, 1, 'Martine Bailey', 0, '1991-01-17', '176003263', '(855) 664-1050', '4458 Levi Spur Suite 127', 'Port Myriamshire', 1, NULL, 4, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(12, 7, 5, 2, 5, 7, 3, 'Bryce Cartwright', 0, '1991-07-24', '219815231', '(844) 612-5325', '2118 Zella Land Apt. 634', 'Cornelltown', 1, NULL, 8, 1.00, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(13, 9, 4, 4, 1, 7, 4, 'Berenice Paucek', 0, '1990-03-26', '739958702', '(800) 544-8260', '35663 Mante Haven', 'North Carlottaburgh', 1, NULL, 4, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(14, 15, 4, 3, 6, 4, 4, 'Torey Gutmann', 0, '1992-12-21', '556672667', '1-844-228-5593', '2427 Eliseo Via Suite 854', 'North Dillontown', 1, NULL, 9, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(15, 16, 3, 1, 6, 3, 1, 'Palma Buckridge', 0, '1995-04-09', '135058487', '844.372.3460', '532 Greenfelder Knoll', 'Raulchester', 1, NULL, 6, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(16, 5, 3, 5, 4, 7, 2, 'Lafayette Nolan', 0, '1988-12-18', '450380112', '(855) 452-9769', '988 Walter Grove Suite 264', 'New Janis', 1, NULL, 4, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(17, 4, 3, 2, 6, 2, 6, 'Alysson Cummerata', 0, '1987-09-26', '739808690', '1-855-633-0623', '62462 Camila Shores Suite 532', 'Walshmouth', 1, NULL, 4, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(18, 5, 5, 3, 5, 2, 3, 'Kimberly Ratke', 1, '1994-12-14', '995033256', '(888) 747-0539', '43416 Crooks Ways Suite 455', 'Anitachester', 1, NULL, 7, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(19, 4, 1, 4, 5, 3, 5, 'Virginie Feest', 1, '1989-07-31', '987094137', '866-655-8480', '1979 Granville Isle', 'Lockmanside', 1, NULL, 8, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(20, 17, 2, 4, 4, 7, 3, 'Lenna Parker', 0, '1995-09-03', '432119342', '(855) 500-7956', '23990 Vinnie Knolls', 'Pfannerstillborough', 1, NULL, 7, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(21, 2, 3, 3, 3, 5, 1, 'Jackeline Reichert', 1, '1987-09-18', '202218450', '1-877-264-7858', '59696 Adams Field', 'West Imogeneville', 1, NULL, 7, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(22, 10, 5, 4, 5, 2, 5, 'Dortha Hessel', 1, '1990-06-02', '690008218', '855-452-4252', '548 Mervin Hill', 'Melynaview', 1, NULL, 5, 1.00, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(23, 16, 4, 5, 4, 3, 4, 'Karine Jakubowski', 1, '1993-12-12', '294164258', '1-855-855-0679', '24418 Margarett Garden Apt. 290', 'Lake Williechester', 1, NULL, 1, 1.00, NULL, '2021-11-01 07:59:00', '2021-11-01 07:59:00', NULL);

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
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenpb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`id`, `tenpb`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ban Giám Đốc', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(2, 'Phòng Kinh Doanh', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(3, 'Phòng Phân Tích', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(4, 'Phòng Thiết Kế', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(5, 'Phòng Lập Trình', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(6, 'Phòng Hành Chính', '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phucap`
--

CREATE TABLE `phucap` (
  `id` int(10) UNSIGNED NOT NULL,
  `phongban_id` int(10) UNSIGNED NOT NULL,
  `chucvu_id` int(10) UNSIGNED NOT NULL,
  `hsphucap` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phucap`
--

INSERT INTO `phucap` (`id`, `phongban_id`, `chucvu_id`, `hsphucap`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 2.50, '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(2, 1, 3, 2.00, '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(3, 2, 2, 1.50, '2021-11-01 07:58:54', '2021-11-01 07:58:54', NULL),
(4, 2, 3, 1.20, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(5, 2, 4, 1.00, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(6, 2, 5, 1.00, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(7, 3, 2, 1.50, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(8, 3, 3, 1.20, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(9, 3, 5, 1.00, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(10, 4, 2, 1.50, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(11, 4, 3, 1.20, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(12, 4, 5, 1.00, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(13, 5, 2, 1.50, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(14, 5, 3, 1.20, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(15, 5, 5, 1.00, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(16, 6, 2, 1.50, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(17, 6, 3, 1.20, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL),
(18, 6, 5, 1.00, '2021-11-01 07:58:55', '2021-11-01 07:58:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('u1ameUuKLvfkDizAtmhKb9XCJgWCMemGUeuSIOwn', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRE5HWlRqS3RRdEo5UlA3Sm1CNFhhVlRSMWIxSkNkRVpxOU1IY1poNyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjczOiJodHRwczovL2xvY2FsaG9zdC9uaGFubHVvbmcvdGluaGx1b25nP2lkPTIzJm5hbT0yMDIxJm5nYXljb25nPTI2JnRoYW5nPTExIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1639376528);

-- --------------------------------------------------------

--
-- Table structure for table `thuongphat`
--

CREATE TABLE `thuongphat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `loai` tinyint(1) NOT NULL DEFAULT 0,
  `sotien` bigint(20) NOT NULL,
  `lydo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuongphat`
--

INSERT INTO `thuongphat` (`id`, `nhanvien_id`, `loai`, `sotien`, `lydo`, `thang`, `nam`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 23, 1, 100000000000, 'test', 11, 2021, '2021-11-01 20:17:49', '2021-11-01 20:39:22', '2021-11-01 20:39:22'),
(2, 1, 1, 999, '123213213213', 11, 2021, '2021-11-01 20:21:40', '2021-11-01 20:21:40', NULL),
(3, 23, 1, 9999, '12343', 11, 2021, '2021-11-01 20:22:27', '2021-11-01 20:22:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tongiao`
--

CREATE TABLE `tongiao` (
  `id` int(10) UNSIGNED NOT NULL,
  `tentg` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tongiao`
--

INSERT INTO `tongiao` (`id`, `tentg`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Phật giáo', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(2, 'Công giáo', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(3, 'Tin Lành', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(4, 'Hồi giáo', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(5, 'Cao Đài', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL),
(6, 'Hoà Hảo', '2021-11-01 07:58:56', '2021-11-01 07:58:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ungluong`
--

CREATE TABLE `ungluong` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `sotien` bigint(20) NOT NULL,
  `lydo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ungluong`
--

INSERT INTO `ungluong` (`id`, `nhanvien_id`, `sotien`, `lydo`, `thang`, `nam`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 23, 1, '123', 11, 2021, '2021-11-01 20:31:19', '2021-11-01 20:31:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhanvien_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nhanvien_id`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'admin@email.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 2, NULL, '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(2, 2, 'quanly@email.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 1, NULL, '2021-11-01 07:58:57', '2021-11-01 07:58:57', NULL),
(3, 3, 'nhanvien@email.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(4, 4, 'pparker@example.org', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(5, 5, 'doconner@example.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(6, 6, 'kiana.daugherty@example.org', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(7, 7, 'qwhite@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(8, 8, 'bgutmann@example.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(9, 9, 'damaris.reinger@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(10, 10, 'weissnat.yasmin@example.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(11, 11, 'schmidt.doug@example.org', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:58', '2021-11-01 07:58:58', NULL),
(12, 12, 'ivory88@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(13, 13, 'labadie.kevon@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(14, 14, 'olaf04@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(15, 15, 'janae.torp@example.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(16, 16, 'josie51@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(17, 17, 'krau@example.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(18, 18, 'damore.jules@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(19, 19, 'roob.jessika@example.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(20, 20, 'qgreenfelder@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(21, 21, 'george70@example.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(22, 22, 'harber.martina@example.com', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:58:59', '2021-11-01 07:58:59', NULL),
(23, 23, 'ansel.pacocha@example.net', NULL, '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK', 0, NULL, '2021-11-01 07:59:00', '2021-11-01 07:59:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangcap`
--
ALTER TABLE `bangcap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baohiem`
--
ALTER TABLE `baohiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_baohiem_nhanvien_id` (`nhanvien_id`),
  ADD KEY `fk_baohiem_loaibaohiem_id` (`loaibaohiem_id`);

--
-- Indexes for table `chamcong`
--
ALTER TABLE `chamcong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chamcong_nhanvien_id` (`nhanvien_id`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chuyenmon`
--
ALTER TABLE `chuyenmon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dantoc`
--
ALTER TABLE `dantoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `heso`
--
ALTER TABLE `heso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hopdong_nhanvien_id` (`nhanvien_id`);

--
-- Indexes for table `khautru`
--
ALTER TABLE `khautru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_khautru_nhanvien_id` (`nhanvien_id`),
  ADD KEY `fk_khautru_loaibaohiem_id` (`loaibaohiem_id`);

--
-- Indexes for table `loaibaohiem`
--
ALTER TABLE `loaibaohiem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nghiviec`
--
ALTER TABLE `nghiviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nghiviec_nhanvien_id` (`nhanvien_id`);

--
-- Indexes for table `ngoaingu`
--
ALTER TABLE `ngoaingu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanluong`
--
ALTER TABLE `nhanluong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nhanluong_nhanvien_id` (`nhanvien_id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nhanvien_phucap_id` (`phucap_id`),
  ADD KEY `fk_nhanvien_bangcap_id` (`bangcap_id`),
  ADD KEY `fk_nhanvien_chuyenmon_id` (`chuyenmon_id`),
  ADD KEY `fk_nhanvien_ngoaingu_id` (`ngoaingu_id`),
  ADD KEY `fk_nhanvien_dantoc_id` (`dantoc_id`),
  ADD KEY `fk_nhanvien_tongiao_id` (`tongiao_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phucap`
--
ALTER TABLE `phucap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phucap_phongban_id` (`phongban_id`),
  ADD KEY `fk_phucap_chucvu_id` (`chucvu_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `thuongphat`
--
ALTER TABLE `thuongphat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_thuongphat_nhanvien_id` (`nhanvien_id`);

--
-- Indexes for table `tongiao`
--
ALTER TABLE `tongiao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ungluong`
--
ALTER TABLE `ungluong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ungluong_nhanvien_id` (`nhanvien_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nhanvien_id_unique` (`nhanvien_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangcap`
--
ALTER TABLE `bangcap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `baohiem`
--
ALTER TABLE `baohiem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chamcong`
--
ALTER TABLE `chamcong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chuyenmon`
--
ALTER TABLE `chuyenmon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dantoc`
--
ALTER TABLE `dantoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heso`
--
ALTER TABLE `heso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khautru`
--
ALTER TABLE `khautru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaibaohiem`
--
ALTER TABLE `loaibaohiem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `nghiviec`
--
ALTER TABLE `nghiviec`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ngoaingu`
--
ALTER TABLE `ngoaingu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhanluong`
--
ALTER TABLE `nhanluong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phucap`
--
ALTER TABLE `phucap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `thuongphat`
--
ALTER TABLE `thuongphat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tongiao`
--
ALTER TABLE `tongiao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ungluong`
--
ALTER TABLE `ungluong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baohiem`
--
ALTER TABLE `baohiem`
  ADD CONSTRAINT `fk_baohiem_loaibaohiem_id` FOREIGN KEY (`loaibaohiem_id`) REFERENCES `loaibaohiem` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_baohiem_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `chamcong`
--
ALTER TABLE `chamcong`
  ADD CONSTRAINT `fk_chamcong_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `fk_hopdong_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `khautru`
--
ALTER TABLE `khautru`
  ADD CONSTRAINT `fk_khautru_loaibaohiem_id` FOREIGN KEY (`loaibaohiem_id`) REFERENCES `loaibaohiem` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_khautru_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `nghiviec`
--
ALTER TABLE `nghiviec`
  ADD CONSTRAINT `fk_nghiviec_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `nhanluong`
--
ALTER TABLE `nhanluong`
  ADD CONSTRAINT `fk_nhanluong_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `fk_nhanvien_bangcap_id` FOREIGN KEY (`bangcap_id`) REFERENCES `bangcap` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nhanvien_chuyenmon_id` FOREIGN KEY (`chuyenmon_id`) REFERENCES `chuyenmon` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nhanvien_dantoc_id` FOREIGN KEY (`dantoc_id`) REFERENCES `dantoc` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nhanvien_ngoaingu_id` FOREIGN KEY (`ngoaingu_id`) REFERENCES `ngoaingu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nhanvien_phucap_id` FOREIGN KEY (`phucap_id`) REFERENCES `phucap` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nhanvien_tongiao_id` FOREIGN KEY (`tongiao_id`) REFERENCES `tongiao` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `phucap`
--
ALTER TABLE `phucap`
  ADD CONSTRAINT `fk_phucap_chucvu_id` FOREIGN KEY (`chucvu_id`) REFERENCES `chucvu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_phucap_phongban_id` FOREIGN KEY (`phongban_id`) REFERENCES `phongban` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `thuongphat`
--
ALTER TABLE `thuongphat`
  ADD CONSTRAINT `fk_thuongphat_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `ungluong`
--
ALTER TABLE `ungluong`
  ADD CONSTRAINT `fk_ungluong_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_nhanvien_id` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
