-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 12:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jailapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appealresults`
--

CREATE TABLE `appealresults` (
  `id` int(10) UNSIGNED NOT NULL,
  `resultsname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appeals`
--

CREATE TABLE `appeals` (
  `id` int(10) UNSIGNED NOT NULL,
  `caseno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sentencetype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prisonname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sharokno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appealto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc` tinyint(1) DEFAULT NULL,
  `file_app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_bj` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isgrant` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appeals`
--

INSERT INTO `appeals` (`id`, `caseno`, `sentencetype`, `prisonname`, `gender`, `options`, `sharokno`, `appealto`, `remarks`, `cc`, `file_app`, `file_bj`, `isgrant`, `created_at`, `updated_at`) VALUES
(1, 'NAR202/1', 'Life Sentence', 'Narsingdi Jail', 'TG', '0', 'BJ001/2018/1', 'High Court', 'Granted', 0, NULL, NULL, 1, '2018-11-05 04:33:00', '2018-11-14 04:39:00'),
(2, 'NAR202/2', 'Death Sentence', 'Narsingdi Jail', 'F', '0', 'BJ001/2018/2', 'High Court', 'aweasd', 0, NULL, NULL, 0, '2018-11-05 04:33:00', '2018-11-08 00:48:00'),
(3, 'DHK181/002', '< 5 Years', 'Dhaka Jail', 'M', '1', 'BJ001/2018/3', 'High Court', 'noman', 0, NULL, NULL, 0, '2018-11-07 21:52:00', '2018-11-11 00:51:00'),
(4, 'DHK181/004', '< 5 Years', 'Dhaka Jail', 'F', '1', 'BJ001/2018/4', 'High Court', 'remarks changed', 0, NULL, NULL, 0, '2018-11-07 21:54:00', '2018-11-08 01:04:00'),
(5, 'DHK181/002000', 'Death Sentence', 'Dhaka Jail', 'M', '1', 'BJ001/2018/5', 'High Court', NULL, 0, '03.MS Word_1541916216.pdf', NULL, 0, '2018-11-11 00:03:00', '2018-11-11 00:03:00'),
(6, 'DHK181/002000', 'Life Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/6', 'High Court', NULL, 0, NULL, '03.MS Word_1541923918.pdf', 0, '2018-11-11 02:11:00', '2018-11-11 02:11:00'),
(7, 'CHI181/002', '> 5 Years', 'Chittagong Jail', 'M', '1', 'BJ001/2018/7', 'High Court', NULL, 0, '03.MS Word_1541924078.pdf', 'MyPDF (15)_1541924078.pdf', 0, '2018-11-11 02:14:00', '2018-11-11 02:14:00'),
(8, 'CHI181/0021', '> 5 Years', 'Chittagong Jail', 'TG', '1', 'BJ001/2018/8', 'High Court', NULL, 1, 'MyPDF (1)_1541924639.pdf', 'MyPDF (2)_1541924639.pdf', 0, '2018-11-11 02:23:00', '2018-11-11 02:23:00'),
(9, 'CHI181/004', 'Life Sentence', 'Chittagong Jail', 'F', '0', 'BJ001/2018/9', 'High Court', 'accepted', 1, 'MyPDF (3)_1541924795.pdf', 'MyPDF (4)_1541924795.pdf', 0, '2018-11-11 02:26:00', '2018-11-13 01:23:00'),
(10, 'CHI181/002', 'Life Sentence', 'Chittagong Jail', 'F', '1', 'BJ001/2018/10', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(11, 'CHI181/000', 'Life Sentence', 'Chittagong Jail', 'F', '0', 'BJ001/2018/11', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(12, 'CHI181/002', 'Life Sentence', 'Chittagong Jail', 'F', '0', 'BJ001/2018/12', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(13, 'CHI181/004', 'Life Sentence', 'Chittagong Jail', 'M', '1', 'BJ001/2018/13', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(14, 'CHI181/006', 'Life Sentence', 'Chittagong Jail', 'M', '1', 'BJ001/2018/14', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(15, 'CHI181/008', '< 5 Years', 'Chittagong Jail', 'M', '1', 'BJ001/2018/15', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(16, 'CHI181/010', '< 5 Years', 'Chittagong Jail', 'M', '0', 'BJ001/2018/16', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(17, 'CHI181/012', '< 5 Years', 'Chittagong Jail', 'M', '0', 'BJ001/2018/17', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(18, 'CHI181/014', '< 5 Years', 'Chittagong Jail', 'M', '0', 'BJ001/2018/18', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(19, 'CHI181/016', 'Life Sentence', 'Chittagong Jail', 'M', '0', 'BJ001/2018/19', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(20, 'CHI181/018', 'Life Sentence', 'Chittagong Jail', 'F', '0', 'BJ001/2018/20', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(21, 'DHK181/013', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/21', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(22, 'DHK181/014', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/22', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(23, 'DHK181/015', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/23', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(24, 'DHK181/016', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/24', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(25, 'DHK181/017', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/25', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(26, 'DHK181/018', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/26', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(27, 'DHK181/019', '> 5 Years', 'Dhaka Jail', 'TG', '1', 'BJ001/2018/27', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(28, 'DHK181/020', '> 5 Years', 'Dhaka Jail', 'TG', '1', 'BJ001/2018/28', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(29, 'DHK181/021', '> 5 Years', 'Dhaka Jail', 'TG', '1', 'BJ001/2018/29', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(30, 'DHK181/022', '> 5 Years', 'Dhaka Jail', 'TG', '0', 'BJ001/2018/30', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(31, 'DHK181/023', '> 5 Years', 'Dhaka Jail', 'TG', '0', 'BJ001/2018/31', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(32, 'DHK181/024', '> 5 Years', 'Dhaka Jail', 'TG', '0', 'BJ001/2018/32', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(33, 'DHK181/025', 'Death Sentence', 'Dhaka Jail', 'F', '0', 'BJ001/2018/33', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(34, 'DHK181/026', 'Death Sentence', 'Dhaka Jail', 'F', '0', 'BJ001/2018/34', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(35, 'DHK181/027', 'Death Sentence', 'Dhaka Jail', 'F', '0', 'BJ001/2018/35', 'High Court', 'Granted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(36, 'NAR181/028', 'Life Sentence', 'Narsingdi Jail', 'F', '0', 'BJ001/2018/36', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(37, 'NAR181/029', 'Death Sentence', 'Narsingdi Jail', 'F', '0', 'BJ001/2018/37', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(38, 'DHK181/030', '< 5 Years', 'Dhaka Jail', 'F', '1', 'BJ001/2018/38', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(39, 'DHK181/031', '< 5 Years', 'Dhaka Jail', 'F', '1', 'BJ001/2018/39', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(40, 'DHK181/032', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/40', 'High Court', 'Granted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(41, 'DHK181/033', 'Life Sentence', 'Dhaka Jail', 'F', '0', 'BJ001/2018/41', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(42, 'CHI181/034', '> 5 Years', 'Chittagong Jail', 'TG', '0', 'BJ001/2018/42', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(43, 'CHI181/035', '> 5 Years', 'Chittagong Jail', 'TG', '0', 'BJ001/2018/43', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(44, 'CHI181/036', 'Life Sentence', 'Chittagong Jail', 'TG', '0', 'BJ001/2018/44', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(45, 'CHI181/037', 'Life Sentence', 'Chittagong Jail', 'TG', '0', 'BJ001/2018/45', 'High Court', 'Granted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(46, 'CHI181/038', 'Life Sentence', 'Chittagong Jail', 'TG', '0', 'BJ001/2018/46', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(47, 'CHI181/039', 'Life Sentence', 'Chittagong Jail', 'TG', '0', 'BJ001/2018/47', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(48, 'CHI181/040', 'Life Sentence', 'Chittagong Jail', 'F', '0', 'BJ001/2018/48', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(49, 'CHI181/041', 'Life Sentence', 'Chittagong Jail', 'F', '0', 'BJ001/2018/49', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(50, 'CHI181/042', '< 5 Years', 'Chittagong Jail', 'F', '0', 'BJ001/2018/50', 'High Court', 'Granted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(51, 'CHI181/043', '< 5 Years', 'Chittagong Jail', 'F', '0', 'BJ001/2018/51', 'High Court', 'accepted', 0, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(52, 'CHI181/044', '< 5 Years', 'Chittagong Jail', 'F', '1', 'BJ001/2018/52', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(53, 'CHI181/045', '< 5 Years', 'Chittagong Jail', 'F', '1', 'BJ001/2018/53', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(54, 'CHI181/046', 'Life Sentence', 'Chittagong Jail', 'F', '1', 'BJ001/2018/54', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(55, 'CHI181/047', 'Life Sentence', 'Chittagong Jail', 'F', '0', 'BJ001/2018/55', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(56, 'DHK181/048', 'Death Sentence', 'Dhaka Jail', 'F', '0', 'BJ001/2018/56', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(57, 'DHK181/049', 'Death Sentence', 'Dhaka Jail', 'TG', '0', 'BJ001/2018/57', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(58, 'DHK181/050', 'Death Sentence', 'Dhaka Jail', 'TG', '0', 'BJ001/2018/58', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(59, 'DHK181/051', 'Death Sentence', 'Dhaka Jail', 'TG', '0', 'BJ001/2018/59', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(60, 'DHK181/052', 'Death Sentence', 'Dhaka Jail', 'TG', '0', 'BJ001/2018/60', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 1, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(61, 'DHK181/053', 'Death Sentence', 'Dhaka Jail', 'TG', '1', 'BJ001/2018/61', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(62, 'DHK181/054', '> 5 Years', 'Dhaka Jail', 'TG', '1', 'BJ001/2018/62', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(63, 'DHK181/055', '> 5 Years', 'Dhaka Jail', 'F', '1', 'BJ001/2018/63', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(64, 'DHK181/056', '> 5 Years', 'Dhaka Jail', 'F', '0', 'BJ001/2018/64', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(65, 'DHK181/057', '> 5 Years', 'Dhaka Jail', 'F', '0', 'BJ001/2018/65', 'High Court', 'Granted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(66, 'DHK181/058', '> 5 Years', 'Dhaka Jail', 'F', '1', 'BJ001/2018/66', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(67, 'DHK181/059', '> 5 Years', 'Dhaka Jail', 'F', '1', 'BJ001/2018/67', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(68, 'DHK181/060', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/68', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `appealstatus`
--

CREATE TABLE `appealstatus` (
  `id` int(10) UNSIGNED NOT NULL,
  `statusid` int(10) UNSIGNED NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laststatusupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `caseno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `divid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `prefix`, `created_at`, `updated_at`, `divid`) VALUES
(1, 'Barguna', 'BRG', NULL, NULL, 1),
(2, 'Barisal', 'BAR', NULL, NULL, 1),
(3, 'Bhola', 'BHO', NULL, NULL, 1),
(4, 'Jhalokati', 'JHL', NULL, NULL, 1),
(5, 'Patuakhali', 'PAT', NULL, NULL, 1),
(6, 'Pirojpur', 'PIR', NULL, NULL, 1),
(7, 'Bandarban', 'BAN', NULL, NULL, 2),
(8, 'Brahmanbaria', 'BRA', NULL, NULL, 2),
(9, 'Chandpur', 'CHP', NULL, NULL, 2),
(10, 'Chittagong', 'CTG', NULL, NULL, 2),
(11, 'Comilla', 'COM', NULL, NULL, 2),
(12, 'Cox\'s Bazar', 'CXZ', NULL, NULL, 2),
(13, 'Feni', 'FEN', NULL, NULL, 2),
(14, 'Khagrachhari', 'KHG', NULL, NULL, 2),
(15, 'Lakshmipur', 'LAK', NULL, NULL, 2),
(16, 'Noakhali', 'NHK', NULL, NULL, 2),
(17, 'Rangamati', 'RGM', NULL, NULL, 2),
(18, 'Dhaka', 'DHK', NULL, NULL, 3),
(19, 'Faridpur', 'FRD', NULL, NULL, 3),
(20, 'Gazipur', 'GZP', NULL, NULL, 3),
(21, 'Gopalganj', 'GPG', NULL, NULL, 3),
(22, 'Kishoreganj', 'KSG', NULL, NULL, 3),
(23, 'Madaripur', 'MDP', NULL, NULL, 3),
(24, 'Manikganj', 'MNG', NULL, NULL, 3),
(25, 'Munshiganj', 'MSG', NULL, NULL, 3),
(26, 'Narayangonj', 'NRG', NULL, NULL, 3),
(27, 'Narsingdi', 'NSD', NULL, NULL, 3),
(28, 'Rajbari', 'RJB', NULL, NULL, 3),
(29, 'Shariatpur', 'SRP', NULL, NULL, 3),
(30, 'Tangail', 'TNG', NULL, NULL, 3),
(31, 'Bagerhat', 'BGH', NULL, NULL, 4),
(32, 'Chuadanga', 'CHD', NULL, NULL, 4),
(33, 'Jessore', 'JSR', NULL, NULL, 4),
(34, 'Jhenaidah', 'JHD', NULL, NULL, 4),
(35, 'Khulna', 'KHL', NULL, NULL, 4),
(36, 'Kushtia', 'KHT', NULL, NULL, 4),
(37, 'Magura', 'MGR', NULL, NULL, 4),
(38, 'Meherpur', 'MHP', NULL, NULL, 4),
(39, 'Narail', 'NAR', NULL, NULL, 4),
(40, 'Satkhira', 'SKH', NULL, NULL, 4),
(41, 'Jamalpur', 'JAM', NULL, NULL, 5),
(42, 'Mymensingh', 'MYM', NULL, NULL, 5),
(43, 'Netrakona', 'NET', NULL, NULL, 5),
(44, 'Sherpur', 'SHE', NULL, NULL, 5),
(45, 'Bogra', 'BOG', NULL, NULL, 6),
(46, 'Joypurhat', 'JOY', NULL, NULL, 6),
(47, 'Naogaon', 'NAO', NULL, NULL, 6),
(48, 'Natore', 'NAT', NULL, NULL, 6),
(49, 'Chapainawabganj', 'CPG', NULL, NULL, 6),
(50, 'Pabna', 'PAB', NULL, NULL, 6),
(51, 'Rajshahi', 'RAJ', NULL, NULL, 6),
(52, 'Sirajganj', 'SIR', NULL, NULL, 6),
(53, 'Dinajpur', 'DIN', NULL, NULL, 7),
(54, 'Gaibandha', 'GAI', NULL, NULL, 7),
(55, 'Kurigram', 'KUR', NULL, NULL, 7),
(56, 'Lalmonirhat', 'LAL', NULL, NULL, 7),
(57, 'Nilphamari', 'NIL', NULL, NULL, 7),
(58, 'Panchagarh', 'PAN', NULL, NULL, 7),
(59, 'Rangpur', 'RAN', NULL, NULL, 7),
(60, 'Thakurgaon', 'THA', NULL, NULL, 7),
(61, 'Habiganj', 'HAB', NULL, NULL, 8),
(62, 'Moulvibazar', 'MOU', NULL, NULL, 8),
(63, 'Sunamganj', 'SUN', NULL, NULL, 8),
(64, 'Sylhet', 'SYL', NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Barisal', NULL, NULL),
(2, 'Chittagong', NULL, NULL),
(3, 'Dhaka', NULL, NULL),
(4, 'Khulna', NULL, NULL),
(5, 'Mymensingh', NULL, NULL),
(6, 'Rajshahi', NULL, NULL),
(7, 'Rangpur', NULL, NULL),
(8, 'Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctype`
--

CREATE TABLE `doctype` (
  `id` int(10) UNSIGNED NOT NULL,
  `docname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctype`
--

INSERT INTO `doctype` (`id`, `docname`, `created_at`, `updated_at`) VALUES
(1, 'BJ_Form', '2018-11-25 10:55:29', '2018-11-25 10:55:33'),
(2, 'APP_Form', '2018-11-25 10:55:45', '2018-11-25 10:55:48'),
(3, 'Letter for CC not Found', '2018-11-25 10:56:03', '2018-11-25 10:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `appealid` int(10) UNSIGNED NOT NULL,
  `doctypeid` int(10) UNSIGNED NOT NULL,
  `attached` tinyint(1) NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requestedcourt` int(10) UNSIGNED NOT NULL,
  `requesteddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_05_102351_create_appeals_table', 1),
(4, '2018_11_11_034847_create_district_table', 2),
(5, '2018_11_11_035530_create_districts_table', 3),
(6, '2018_11_11_040655_create_prisons_table', 4),
(8, '2018_11_22_075802_create_divisions_table', 5),
(9, '2018_11_22_075916_create_districts_table', 6),
(10, '2018_11_22_080017_add_divid_to_districts_table', 7),
(11, '2018_11_22_084518_add_disid_to_prisons_table', 8),
(12, '2018_11_22_085319_create_courts_table', 9),
(13, '2018_11_22_085704_create_prisoner_table', 10),
(14, '2018_11_22_090241_create_cases_table', 11),
(15, '2018_11_22_090348_create_offences_table', 12),
(16, '2018_11_22_090508_create_sentences_table', 13),
(17, '2018_11_22_091023_create_appealstatus_table', 14),
(18, '2018_11_22_091606_create_status_table', 15),
(19, '2018_11_22_091945_create_newappeals_table', 16),
(20, '2018_11_25_084315_add_resultid_to_newappeals', 17),
(21, '2018_11_25_090424_status', 18),
(22, '2018_11_25_090706_appealstatus', 19),
(23, '2018_11_25_091029_documents', 20);

-- --------------------------------------------------------

--
-- Table structure for table `newappeals`
--

CREATE TABLE `newappeals` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateofsentence` datetime NOT NULL,
  `dateofpetitionforcc` datetime NOT NULL,
  `dateofccreceipt` datetime NOT NULL,
  `dateoforderonappeal` datetime NOT NULL,
  `dateoforderreceipt` datetime NOT NULL,
  `dateofticketnotes` datetime NOT NULL,
  `dateofappeal` datetime NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `prisonid` int(10) UNSIGNED NOT NULL,
  `prisonerid` int(10) UNSIGNED NOT NULL,
  `courtid` int(10) UNSIGNED NOT NULL,
  `caseid` int(10) UNSIGNED NOT NULL,
  `offenceid` int(10) UNSIGNED NOT NULL,
  `sentenceid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `resultsid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offences`
--

CREATE TABLE `offences` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `id` int(10) UNSIGNED NOT NULL,
  `prisonerno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prisonername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prisonergender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prisons`
--

CREATE TABLE `prisons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prisons`
--

INSERT INTO `prisons` (`id`, `name`, `created_at`, `updated_at`, `disid`) VALUES
(1, 'Barisal Central Jail', NULL, NULL, 2),
(2, 'Bogra District Jail', NULL, NULL, 45),
(3, 'Chandpur District Jail', NULL, NULL, 9),
(4, 'Chittagong Central Jail', NULL, NULL, 10),
(5, 'Comilla Central Jail', NULL, NULL, 11),
(6, 'Dhaka Central Jail', NULL, NULL, 18),
(7, 'Dinajpur District Jail', NULL, NULL, 53),
(8, 'Faridpur District Jail', NULL, NULL, 19),
(9, 'Gaibandha District Jail', NULL, NULL, 54),
(10, 'Gazipur District Jail', NULL, NULL, 20),
(11, 'Gopalganj District Jail', NULL, NULL, 21),
(12, 'Jessore Central Jail', NULL, NULL, 33),
(13, 'Jhenaidah District Jail', NULL, NULL, 34),
(14, 'Kashimpur Central Jail-I', NULL, NULL, 18),
(15, 'Kashimpur Central Jail-II', NULL, NULL, 18),
(16, 'Kashimpur Central Jail-III', NULL, NULL, 18),
(17, 'Khulna District Jail', NULL, NULL, 35),
(18, 'Kishoreganj District Jail', NULL, NULL, 22),
(19, 'Kushtia District Jail', NULL, NULL, 36),
(20, 'Madaripur District Jail', NULL, NULL, 23),
(21, 'Manikganj District Jail', NULL, NULL, 24),
(22, 'Moulvibazar District Jail', NULL, NULL, 62),
(23, 'Narsingdi District Jail', NULL, NULL, 27),
(24, 'Pabna District Jail', NULL, NULL, 50),
(25, 'Patuakhali District Jail', NULL, NULL, 5),
(26, 'Rajshahi Central Jail', NULL, NULL, 51),
(27, 'Satkhira District Jail', NULL, NULL, 40),
(28, 'Shariatpur District Jail', NULL, NULL, 29),
(29, 'Sirajganj District Jail', NULL, NULL, 52),
(30, 'Sylhet Central Jail', NULL, NULL, 64),
(31, 'Thakurgaon District Jail', NULL, NULL, 60),
(32, 'Rangpur Central Jail', NULL, NULL, 59),
(33, 'Mymensingh Central Jail', NULL, NULL, 42),
(34, 'Sunamganj District Jail', NULL, NULL, 63),
(35, 'Noakhali District Jail', NULL, NULL, 16),
(36, 'Tangail District Jail', NULL, NULL, 30),
(37, 'Naogaon District Jail', NULL, NULL, 47),
(38, 'Munshiganj District Jail', NULL, NULL, 25),
(39, 'Brahmanbaria District Jail', NULL, NULL, 8),
(40, 'Narayangonj District Jail', NULL, NULL, 26),
(41, 'Natore District Jail', NULL, NULL, 48),
(42, 'Netrakona District Jail', NULL, NULL, 43),
(43, 'Sherpur District Jail', NULL, NULL, 44);

-- --------------------------------------------------------

--
-- Table structure for table `sentences`
--

CREATE TABLE `sentences` (
  `id` int(10) UNSIGNED NOT NULL,
  `sentencename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `statusname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appealresults`
--
ALTER TABLE `appealresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appealstatus`
--
ALTER TABLE `appealstatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appealstatus_statusid_foreign` (`statusid`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courts_disid_foreign` (`disid`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_divid_foreign` (`divid`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctype`
--
ALTER TABLE `doctype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_appealid_foreign` (`appealid`),
  ADD KEY `documents_doctypeid_foreign` (`doctypeid`),
  ADD KEY `documents_requestedcourt_foreign` (`requestedcourt`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newappeals`
--
ALTER TABLE `newappeals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newappeals_prisonid_foreign` (`prisonid`),
  ADD KEY `newappeals_prisonerid_foreign` (`prisonerid`),
  ADD KEY `newappeals_courtid_foreign` (`courtid`),
  ADD KEY `newappeals_caseid_foreign` (`caseid`),
  ADD KEY `newappeals_offenceid_foreign` (`offenceid`),
  ADD KEY `newappeals_sentenceid_foreign` (`sentenceid`),
  ADD KEY `newappeals_resultsid_foreign` (`resultsid`);

--
-- Indexes for table `offences`
--
ALTER TABLE `offences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisons`
--
ALTER TABLE `prisons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prisons_disid_foreign` (`disid`);

--
-- Indexes for table `sentences`
--
ALTER TABLE `sentences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appealresults`
--
ALTER TABLE `appealresults`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `appealstatus`
--
ALTER TABLE `appealstatus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courts`
--
ALTER TABLE `courts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctype`
--
ALTER TABLE `doctype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `newappeals`
--
ALTER TABLE `newappeals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offences`
--
ALTER TABLE `offences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prisoner`
--
ALTER TABLE `prisoner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prisons`
--
ALTER TABLE `prisons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `sentences`
--
ALTER TABLE `sentences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appealstatus`
--
ALTER TABLE `appealstatus`
  ADD CONSTRAINT `appealstatus_statusid_foreign` FOREIGN KEY (`statusid`) REFERENCES `status` (`id`);

--
-- Constraints for table `courts`
--
ALTER TABLE `courts`
  ADD CONSTRAINT `courts_disid_foreign` FOREIGN KEY (`disid`) REFERENCES `districts` (`id`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_divid_foreign` FOREIGN KEY (`divid`) REFERENCES `divisions` (`id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_appealid_foreign` FOREIGN KEY (`appealid`) REFERENCES `newappeals` (`id`),
  ADD CONSTRAINT `documents_doctypeid_foreign` FOREIGN KEY (`doctypeid`) REFERENCES `doctype` (`id`),
  ADD CONSTRAINT `documents_requestedcourt_foreign` FOREIGN KEY (`requestedcourt`) REFERENCES `courts` (`id`);

--
-- Constraints for table `newappeals`
--
ALTER TABLE `newappeals`
  ADD CONSTRAINT `newappeals_caseid_foreign` FOREIGN KEY (`caseid`) REFERENCES `cases` (`id`),
  ADD CONSTRAINT `newappeals_courtid_foreign` FOREIGN KEY (`courtid`) REFERENCES `courts` (`id`),
  ADD CONSTRAINT `newappeals_offenceid_foreign` FOREIGN KEY (`offenceid`) REFERENCES `offences` (`id`),
  ADD CONSTRAINT `newappeals_prisonerid_foreign` FOREIGN KEY (`prisonerid`) REFERENCES `prisoner` (`id`),
  ADD CONSTRAINT `newappeals_prisonid_foreign` FOREIGN KEY (`prisonid`) REFERENCES `prisons` (`id`),
  ADD CONSTRAINT `newappeals_resultsid_foreign` FOREIGN KEY (`resultsid`) REFERENCES `appealresults` (`id`),
  ADD CONSTRAINT `newappeals_sentenceid_foreign` FOREIGN KEY (`sentenceid`) REFERENCES `sentences` (`id`);

--
-- Constraints for table `prisons`
--
ALTER TABLE `prisons`
  ADD CONSTRAINT `prisons_disid_foreign` FOREIGN KEY (`disid`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;