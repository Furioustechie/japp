-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 07:37 AM
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
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Dhaka', '2018-11-10 22:13:37', '2018-11-10 22:13:37'),
(5, 'Chittagong', '2018-11-10 22:14:00', '2018-11-10 22:14:00'),
(6, 'Barisal', '2018-11-10 22:14:13', '2018-11-10 22:14:13');

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
(7, '2018_11_11_044623_create_newtab_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newtab`
--

CREATE TABLE `newtab` (
  `id` int(10) UNSIGNED NOT NULL,
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
-- Table structure for table `prisons`
--

CREATE TABLE `prisons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prisons`
--

INSERT INTO `prisons` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka  Jail', '2018-11-10 22:09:19', '2018-11-10 22:09:19'),
(2, 'Chittagong  Jail', '2018-11-10 22:10:32', '2018-11-10 22:10:32'),
(3, 'Narshingdi  Jail', '2018-11-10 22:10:48', '2018-11-10 22:10:48');

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
-- Indexes for table `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newtab`
--
ALTER TABLE `newtab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prisons`
--
ALTER TABLE `prisons`
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
-- AUTO_INCREMENT for table `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newtab`
--
ALTER TABLE `newtab`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prisons`
--
ALTER TABLE `prisons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
