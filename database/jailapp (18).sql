-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 12:17 PM
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
-- Stand-in structure for view `all_appeals`
-- (See below for the actual view)
--
CREATE TABLE `all_appeals` (
`id` int(10) unsigned
,`prison_id` int(10) unsigned
,`prison_name` varchar(191)
,`prisoner_name` varchar(191)
,`case_no` varchar(191)
,`offence_name` varchar(191)
,`court_name` varchar(191)
,`privacy` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `appdetails`
-- (See below for the actual view)
--
CREATE TABLE `appdetails` (
`id` int(10) unsigned
,`prison_id` int(10) unsigned
,`prison_name` varchar(191)
,`prisoner_name` varchar(191)
,`case_no` varchar(191)
,`offence_name` varchar(191)
,`court_name` varchar(191)
,`privacy` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `appealresolved_prison`
-- (See below for the actual view)
--
CREATE TABLE `appealresolved_prison` (
`id` int(10) unsigned
,`prison_id` int(10) unsigned
,`prison_name` varchar(191)
,`prisoner_name` varchar(191)
,`case_no` varchar(191)
,`offence_name` varchar(191)
,`court_name` varchar(191)
,`privacy` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `appealresults`
--

CREATE TABLE `appealresults` (
  `id` int(10) UNSIGNED NOT NULL,
  `results_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'NAR202/1', 'Life Sentence', 'Narsingdi Jail', 'TG', '0', 'BJ001/2018/1', 'High Court', 'dsfdsf', 0, NULL, NULL, 0, '2018-11-05 04:33:00', '2018-12-02 23:43:29'),
(2, 'NAR202/2', 'Death Sentence', 'Narsingdi Jail', 'F', '0', 'BJ001/2018/2', 'High Court', 'dsds', 0, NULL, NULL, 1, '2018-11-05 04:33:00', '2018-12-01 21:47:21'),
(3, 'DHK181/002', '< 5 Years', 'Dhaka Jail', 'M', '1', 'BJ001/2018/3', 'High Court', 'wewe', 0, NULL, NULL, 1, '2018-11-07 21:52:00', '2018-12-01 22:21:22'),
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
(68, 'DHK181/060', 'Death Sentence', 'Dhaka Jail', 'F', '1', 'BJ001/2018/68', 'High Court', 'accepted', 1, 'Download File (2)_1542191720.pdf', 'MyPDF (5)_1542191720.pdf', 0, '2018-11-14 04:35:00', '2018-11-14 04:42:00'),
(69, 'dha121', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"3.PNG\",\"4.PNG\"]', NULL, '2018-11-26 03:45:35', '2018-11-26 03:45:35'),
(70, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"11.PNG\"]', NULL, '2018-11-27 21:54:10', '2018-11-27 21:54:10'),
(71, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"11.PNG\"]', NULL, '2018-11-27 22:09:30', '2018-11-27 22:09:30'),
(72, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"12.PNG\"]', NULL, '2018-11-27 22:27:09', '2018-11-27 22:27:09'),
(73, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"11.PNG\"]', NULL, '2018-11-27 22:29:35', '2018-11-27 22:29:35'),
(74, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"12.PNG\"]', NULL, '2018-11-27 22:31:31', '2018-11-27 22:31:31'),
(75, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"11.PNG\"]', NULL, '2018-11-27 22:57:44', '2018-11-27 22:57:44'),
(76, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-28 02:15:29', '2018-11-28 02:15:29'),
(77, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-28 02:20:25', '2018-11-28 02:20:25'),
(78, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-28 02:21:19', '2018-11-28 02:21:19'),
(79, 'NAR181/002000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-28 02:33:24', '2018-11-28 02:33:24');

-- --------------------------------------------------------

--
-- Stand-in structure for view `appealsbygender`
-- (See below for the actual view)
--
CREATE TABLE `appealsbygender` (
`prisoner_gender` varchar(191)
,`appID` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `appealsbysentence`
-- (See below for the actual view)
--
CREATE TABLE `appealsbysentence` (
`sentence_name` varchar(191)
,`totalAppeals` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `appealsbystatus`
-- (See below for the actual view)
--
CREATE TABLE `appealsbystatus` (
`id` int(10) unsigned
,`status_name` varchar(191)
,`totalAppeals` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `appealstatus`
--

CREATE TABLE `appealstatus` (
  `id` int(10) UNSIGNED NOT NULL,
  `statusid` int(10) UNSIGNED NOT NULL,
  `newappeals_id` int(10) UNSIGNED NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_status_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appealstatus`
--

INSERT INTO `appealstatus` (`id`, `statusid`, `newappeals_id`, `state`, `remarks`, `last_status_update`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 'yellowgreen', 'xyz zyz zye', '2019-05-12 12:03:00', '2019-04-01 12:43:55', '2019-03-01 12:43:55'),
(13, 1, 6, 'yellowgreen', 'xyz xyz xyz ', '2019-05-12 12:10:51', '2019-04-01 01:06:52', '2019-03-06 04:53:15'),
(19, 1, 1, 'yellowgreen', NULL, NULL, '2019-04-01 03:11:24', '2019-04-01 03:11:24'),
(23, 1, 3, 'yellowgreen', NULL, NULL, '2019-04-01 04:59:05', '2019-04-01 04:59:05'),
(24, 2, 3, 'yellowgreen', NULL, NULL, '2019-04-01 04:56:07', '2019-04-01 04:56:07'),
(25, 3, 3, 'yellowgreen', NULL, NULL, '2019-04-01 04:02:21', '2019-04-01 04:02:21'),
(26, 4, 3, 'yellowgreen', NULL, NULL, '2019-04-01 04:25:23', '2019-04-01 04:25:23'),
(36, 2, 1, 'yellowgreen', NULL, NULL, '2019-04-02 01:57:02', '2019-04-02 01:57:02'),
(37, 3, 1, 'yellowgreen', NULL, NULL, '2019-04-02 01:19:03', '2019-04-02 01:19:03'),
(38, 4, 1, 'yellowgreen', NULL, NULL, '2019-04-02 01:38:03', '2019-04-02 01:38:03'),
(39, 5, 1, 'yellowgreen', NULL, '2019-04-02 13:39:50', '2019-04-02 01:54:03', '2019-04-02 01:50:39'),
(40, 2, 6, 'yellowgreen', 'xyz xyz xyz xyx', '2019-05-12 12:11:04', '2019-04-02 01:47:18', '2019-04-02 01:47:18'),
(41, 3, 6, 'yellowgreen', NULL, '2019-04-18 15:15:35', '2019-04-02 01:56:18', '2019-04-02 01:56:18'),
(42, 4, 6, 'yellowgreen', NULL, NULL, '2019-04-02 01:09:19', '2019-04-02 01:09:19'),
(44, 5, 6, 'yellowgreen', NULL, NULL, '2019-04-02 01:05:30', '2019-04-02 01:05:30'),
(45, 6, 6, 'yellowgreen', 'asdfghkjiuy bgfd', '2019-05-12 12:11:11', '2019-04-02 01:35:30', '2019-03-01 01:35:30'),
(47, 1, 5, 'yellowgreen', NULL, '2019-04-02 15:21:18', '2019-04-02 01:26:47', '2019-04-02 01:44:47'),
(54, 5, 5, 'yellowgreen', NULL, '2019-04-10 15:15:17', '2019-04-02 03:53:34', '2019-04-02 03:53:34'),
(55, 4, 5, 'yellowgreen', NULL, '2019-04-02 15:39:53', '2019-04-02 03:43:35', '2019-04-02 03:53:39'),
(56, 2, 5, 'yellowgreen', NULL, '2019-04-10 15:14:59', '2019-04-02 03:26:40', '2019-04-02 04:42:05'),
(61, 6, 1, 'yellowgreen', NULL, '2019-04-02 16:37:11', '2019-04-02 04:07:36', '2019-04-02 04:11:37'),
(62, 7, 1, 'yellowgreen', NULL, '2019-04-02 16:39:26', '2019-04-02 04:20:37', '2019-04-02 04:26:39'),
(63, 8, 1, 'yellowgreen', NULL, NULL, '2019-04-02 04:34:39', '2019-04-02 04:34:39'),
(66, 1, 4, 'yellowgreen', NULL, NULL, '2019-04-02 04:15:48', '2019-04-02 04:15:48'),
(67, 2, 4, 'yellowgreen', NULL, NULL, '2019-04-02 04:30:49', '2019-04-02 04:30:49'),
(69, 3, 4, 'yellowgreen', NULL, NULL, '2019-04-04 02:55:47', '2019-04-04 02:55:47'),
(70, 2, 2, 'yellowgreen', NULL, NULL, '2019-04-04 02:32:48', '2019-04-04 02:32:48'),
(71, 5, 3, 'yellowgreen', NULL, NULL, '2019-04-04 02:52:59', '2019-04-04 02:52:59'),
(72, 3, 5, 'yellowgreen', NULL, '2019-04-10 15:15:11', '2019-04-04 03:23:44', '2019-04-04 03:23:44'),
(73, 6, 5, 'yellowgreen', NULL, NULL, '2019-04-10 03:11:16', '2019-04-10 03:11:16'),
(74, 7, 5, 'yellowgreen', NULL, NULL, '2019-04-10 03:22:16', '2019-04-10 03:22:16'),
(75, 8, 5, 'yellowgreen', NULL, NULL, '2019-04-10 03:31:16', '2019-04-10 03:31:16'),
(76, 9, 5, 'yellowgreen', NULL, NULL, '2019-04-10 03:51:16', '2019-04-10 03:51:16'),
(80, 10, 5, 'yellowgreen', NULL, '2019-07-01 16:40:22', '2019-04-15 02:59:32', '2019-07-01 04:22:40'),
(81, 1, 7, 'yellowgreen', NULL, '2019-04-18 15:08:34', '2019-04-15 02:03:44', '2019-04-15 02:03:44'),
(82, 4, 4, 'yellowgreen', NULL, '2019-05-13 10:11:56', '2019-04-16 10:48:32', '2019-04-16 10:48:32'),
(83, 7, 6, 'yellowgreen', NULL, NULL, '2019-04-16 03:30:45', '2019-04-16 03:30:45'),
(84, 8, 6, 'yellowgreen', NULL, NULL, '2019-04-16 03:43:45', '2019-04-16 03:43:45'),
(85, 9, 6, 'yellowgreen', NULL, NULL, '2019-04-16 03:59:45', '2019-04-16 03:59:45'),
(86, 1, 10, 'yellowgreen', NULL, '2019-04-18 15:11:19', '2019-04-18 03:28:10', '2019-04-18 03:28:10'),
(87, 10, 6, 'yellowgreen', NULL, NULL, '2019-05-05 09:24:56', '2019-05-05 09:24:56'),
(88, 2, 10, 'yellowgreen', NULL, NULL, '2019-05-07 02:38:25', '2019-05-07 02:38:25'),
(89, 1, 11, 'yellowgreen', NULL, NULL, '2019-05-12 10:08:38', '2019-05-12 10:08:38'),
(90, 2, 11, 'yellowgreen', NULL, '2019-07-03 13:48:36', '2019-05-12 10:20:38', '2019-07-03 01:36:48'),
(91, 1, 14, 'yellowgreen', 'Thanks for your application', NULL, '2019-05-12 12:07:17', '2019-05-12 12:07:17'),
(92, 3, 10, 'yellowgreen', 'Granted', NULL, '2019-05-13 09:16:55', '2019-05-13 09:16:55'),
(93, 9, 1, 'yellowgreen', 'Granted', '2019-06-12 09:29:57', '2019-05-13 10:47:06', '2019-06-12 09:57:29'),
(94, 1, 8, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:13:07', '2019-05-13 12:13:07'),
(95, 2, 8, 'yellowgreen', 'Granted', '2019-05-13 12:09:24', '2019-05-13 12:50:08', '2019-05-13 12:24:09'),
(96, 3, 8, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:37:10', '2019-05-13 12:37:10'),
(97, 4, 8, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:30:12', '2019-05-13 12:30:12'),
(98, 5, 8, 'yellowgreen', 'Granted', '2019-07-03 10:15:27', '2019-05-13 12:14:13', '2019-06-01 05:13:16'),
(104, 4, 10, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:10:22', '2019-05-13 12:10:22'),
(105, 5, 10, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:35:22', '2019-05-13 12:35:22'),
(106, 6, 10, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:13:23', '2019-05-13 12:13:23'),
(107, 7, 10, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:46:23', '2019-05-13 12:46:23'),
(108, 8, 10, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:04:24', '2019-05-13 12:04:24'),
(109, 9, 10, 'yellowgreen', 'Granted', NULL, '2019-05-13 12:24:24', '2019-05-13 12:24:24'),
(110, 10, 10, 'yellowgreen', 'Granted', '2019-05-13 12:26:23', '2019-05-13 12:41:24', '2019-05-13 12:23:26'),
(112, 3, 2, 'yellowgreen', 'Granted', NULL, '2019-05-14 12:32:20', '2019-05-14 12:32:20'),
(113, 4, 2, 'yellowgreen', 'Granted', '2019-06-12 09:19:04', '2019-06-12 09:00:19', '2019-06-12 09:04:19'),
(114, 5, 2, 'yellowgreen', 'Granted', NULL, '2019-06-12 09:21:30', '2019-06-12 09:21:30'),
(115, 1, 15, 'yellowgreen', 'Granted', NULL, '2019-06-12 10:17:01', '2019-06-12 10:17:01'),
(116, 5, 4, 'yellowgreen', 'Granted', NULL, '2019-07-01 12:13:44', '2019-07-01 12:13:44'),
(117, 2, 14, 'yellowgreen', 'Granted', '2019-07-08 13:27:12', '2019-07-01 12:45:44', '2019-07-08 01:12:27'),
(118, 1, 9, 'yellowgreen', 'Granted', NULL, '2019-07-01 12:36:45', '2019-07-01 12:36:45'),
(119, 10, 1, 'yellowgreen', 'Granted', NULL, '2019-07-01 12:53:46', '2019-07-01 12:53:46'),
(120, 1, 12, 'yellowgreen', 'Granted', NULL, '2019-07-01 01:15:12', '2019-07-01 01:15:12'),
(121, 6, 4, 'yellowgreen', 'Granted', NULL, '2019-07-01 01:53:15', '2019-07-01 01:53:15'),
(122, 7, 4, 'yellowgreen', 'Granted', NULL, '2019-07-01 04:44:38', '2019-07-01 04:44:38'),
(123, 8, 4, 'yellowgreen', 'Granted', NULL, '2019-07-01 04:33:55', '2019-07-01 04:33:55'),
(124, 6, 2, 'yellowgreen', 'Granted', NULL, '2019-07-02 01:15:35', '2019-07-02 01:15:35'),
(125, 9, 4, 'yellowgreen', 'Granted', NULL, '2019-07-02 02:00:19', '2019-07-02 02:00:19'),
(126, 3, 14, 'yellowgreen', 'Granted', NULL, '2019-07-02 04:48:21', '2019-07-02 04:48:21'),
(127, 2, 12, 'yellowgreen', 'Granted', NULL, '2019-07-02 04:09:22', '2019-07-02 04:09:22'),
(128, 4, 14, 'yellowgreen', 'Granted', NULL, '2019-07-02 04:43:56', '2019-07-02 04:43:56'),
(129, 10, 4, 'yellowgreen', 'Granted', NULL, '2019-07-02 05:15:02', '2019-07-02 05:15:02'),
(130, 2, 15, 'yellowgreen', 'Granted', NULL, '2019-07-03 10:33:10', '2019-07-03 10:33:10'),
(131, 2, 9, 'yellowgreen', 'Granted', NULL, '2019-07-03 10:14:13', '2019-07-03 10:14:13'),
(132, 7, 2, 'yellowgreen', 'Granted', NULL, '2019-07-03 11:49:47', '2019-07-03 11:49:47'),
(133, 3, 11, 'yellowgreen', 'Granted', NULL, '2019-07-03 01:04:57', '2019-07-03 01:04:57'),
(134, 4, 11, 'yellowgreen', 'Granted', NULL, '2019-07-03 02:15:09', '2019-07-03 02:15:09'),
(137, 3, 15, 'yellowgreen', NULL, NULL, '2019-07-07 04:24:12', '2019-07-07 04:24:12'),
(138, 4, 15, 'yellowgreen', NULL, NULL, '2019-07-07 04:48:14', '2019-07-07 04:48:14'),
(145, 3, 12, 'yellowgreen', NULL, NULL, '2019-07-07 04:20:24', '2019-07-07 04:20:24'),
(146, 1, 13, 'yellowgreen', NULL, '2019-07-08 13:29:55', '2019-07-07 04:47:24', '2019-07-07 04:47:24'),
(147, 4, 12, 'yellowgreen', NULL, NULL, '2019-07-07 04:47:24', '2019-07-07 04:47:24'),
(149, 2, 13, 'yellowgreen', NULL, '2019-07-08 13:30:00', '2019-07-07 04:45:36', '2019-07-07 04:45:36'),
(150, 2, 7, 'yellowgreen', NULL, NULL, '2019-07-08 11:23:54', '2019-07-08 11:23:54'),
(151, 3, 7, 'yellowgreen', NULL, NULL, '2019-07-08 01:09:03', '2019-07-08 01:09:03'),
(152, 4, 7, 'yellowgreen', NULL, NULL, '2019-07-08 01:54:03', '2019-07-08 01:54:03'),
(153, 5, 7, 'yellowgreen', NULL, NULL, '2019-07-08 01:00:06', '2019-07-08 01:00:06'),
(154, 6, 7, 'yellowgreen', NULL, NULL, '2019-07-08 01:46:10', '2019-07-08 01:46:10'),
(155, 7, 7, 'yellowgreen', NULL, NULL, '2019-07-08 01:01:15', '2019-07-08 01:01:15'),
(156, 8, 7, 'yellowgreen', NULL, NULL, '2019-07-08 01:18:17', '2019-07-08 01:18:17'),
(157, 9, 7, 'yellowgreen', NULL, NULL, '2019-07-08 01:24:21', '2019-07-08 01:24:21'),
(158, 10, 7, 'yellowgreen', NULL, NULL, '2019-07-08 01:01:23', '2019-07-08 01:01:23'),
(160, 3, 9, 'yellowgreen', NULL, NULL, '2019-07-08 01:49:24', '2019-07-08 01:49:24'),
(161, 4, 9, 'yellowgreen', NULL, NULL, '2019-07-08 01:21:25', '2019-07-08 01:21:25'),
(163, 3, 13, 'yellowgreen', NULL, '2019-07-08 13:30:05', '2019-07-08 01:12:27', '2019-07-08 01:12:27'),
(166, 4, 13, 'yellowgreen', NULL, '2019-07-08 13:47:44', '2019-07-08 01:36:32', '2019-07-08 01:44:47'),
(167, 5, 13, 'yellowgreen', NULL, NULL, '2019-07-08 01:58:48', '2019-07-08 01:58:48'),
(168, 6, 13, 'yellowgreen', NULL, NULL, '2019-07-08 01:12:50', '2019-07-08 01:12:50'),
(169, 7, 13, 'yellowgreen', NULL, NULL, '2019-07-08 01:45:52', '2019-07-08 01:45:52'),
(170, 8, 13, 'yellowgreen', NULL, NULL, '2019-07-08 01:04:56', '2019-07-08 01:04:56'),
(171, 9, 13, 'yellowgreen', NULL, NULL, '2019-07-08 01:33:56', '2019-07-08 01:33:56'),
(172, 10, 13, 'yellowgreen', NULL, NULL, '2019-07-08 02:54:38', '2019-07-08 02:54:38'),
(173, 5, 9, 'yellowgreen', NULL, NULL, '2019-07-08 02:28:48', '2019-07-08 02:28:48'),
(174, 5, 12, 'yellowgreen', NULL, NULL, '2019-07-08 04:20:21', '2019-07-08 04:20:21'),
(175, 6, 12, 'yellowgreen', NULL, NULL, '2019-07-08 04:13:25', '2019-07-08 04:13:25'),
(177, 7, 12, 'yellowgreen', NULL, '2019-07-09 12:53:05', '2019-07-08 04:34:26', '2019-07-09 12:05:53'),
(178, 8, 12, 'yellowgreen', NULL, NULL, '2019-07-08 04:02:27', '2019-07-08 04:02:27'),
(179, 5, 11, 'yellowgreen', NULL, NULL, '2019-07-09 11:28:53', '2019-07-09 11:28:53'),
(180, 6, 11, 'yellowgreen', NULL, NULL, '2019-07-09 11:35:54', '2019-07-09 11:35:54'),
(181, 7, 11, 'yellowgreen', NULL, NULL, '2019-07-09 12:04:53', '2019-07-09 12:04:53'),
(182, 8, 11, 'yellowgreen', NULL, NULL, '2019-07-09 02:07:58', '2019-07-09 02:07:58'),
(183, 1, 16, 'yellowgreen', NULL, NULL, '2019-07-10 10:42:33', '2019-07-10 10:42:33'),
(184, 2, 16, 'yellowgreen', NULL, NULL, '2019-07-10 10:03:34', '2019-07-10 10:03:34'),
(185, 5, 14, 'yellowgreen', NULL, NULL, '2019-07-10 10:19:34', '2019-07-10 10:19:34'),
(186, 8, 2, 'yellowgreen', NULL, NULL, '2019-07-10 04:57:05', '2019-07-10 04:57:05'),
(187, 6, 3, 'yellowgreen', NULL, NULL, '2019-07-10 04:01:13', '2019-07-10 04:01:13');

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

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `caseno`, `created_at`, `updated_at`) VALUES
(1, 'sdefr', '2019-03-31 04:24:58', '2019-03-31 04:24:58'),
(2, 'fgfh', '2019-03-31 05:53:03', '2019-03-31 05:53:03'),
(3, 'sdefr', '2019-03-31 05:55:05', '2019-03-31 05:55:05'),
(4, 'reter', '2019-03-31 05:13:11', '2019-03-31 05:13:11'),
(5, 'sdsd', '2019-03-31 05:48:23', '2019-03-31 05:48:23'),
(6, 'sdfsdf', '2019-03-31 05:10:37', '2019-03-31 05:10:37'),
(7, 'test-002', '2019-04-14 20:13:43', '2019-04-14 20:13:43'),
(8, 'estt-98', '2019-04-14 21:56:20', '2019-04-14 21:56:20'),
(9, 'dfsdf', '2019-04-14 21:46:27', '2019-04-14 21:46:27'),
(10, 'q', '2019-04-16 04:37:06', '2019-04-16 04:37:06'),
(11, 'q', '2019-04-16 04:56:09', '2019-04-16 04:56:09'),
(12, 'dfdf', '2019-04-16 04:24:38', '2019-04-16 04:24:38'),
(13, 'dfdf', '2019-04-16 04:37:40', '2019-04-16 04:37:40'),
(14, 'dfdf', '2019-04-16 04:23:41', '2019-04-16 04:23:41'),
(15, 'sdefr', '2019-04-16 04:53:41', '2019-04-16 04:53:41'),
(16, 'sdefr', '2019-04-16 04:42:42', '2019-04-16 04:42:42'),
(17, 'sdefr', '2019-04-16 04:59:43', '2019-04-16 04:59:43'),
(18, 'KHUL001', '2019-05-06 20:52:37', '2019-05-06 20:52:37'),
(19, 'KHUL002', '2019-05-06 21:31:10', '2019-05-06 21:31:10'),
(20, 'sdefrdfd', '2019-05-07 20:19:06', '2019-05-07 20:19:06'),
(21, 'test-001', '2019-06-12 03:32:58', '2019-06-12 03:32:58'),
(22, 'ABC', '2019-06-29 22:54:30', '2019-06-29 22:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`id`, `name_bn`, `name_en`, `disid`, `created_at`, `updated_at`) VALUES
(1, 'জেলা জজ আদালত', 'District Judge Court12', 42, '2019-07-02 22:14:20', '2019-07-02 22:14:20'),
(5, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -5', 41, '2019-06-12 03:16:49', '2019-06-12 03:16:49'),
(74, 'জেলা জজ আদালত', 'District Judge Court1', 41, '2019-04-29 19:18:44', '2019-04-29 19:18:44'),
(76, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 41, NULL, NULL),
(78, 'সহকারী জজ, মেলান্দহ', 'Assistant Judge, Melandou', 41, NULL, NULL),
(79, 'সহকারী জজ, ইসলামপুর', 'Assistant Judge, Islampur', 41, NULL, NULL),
(80, 'সহকারী জজ, মাদারগঞ্জ', 'Assistant Judge, Madarganj', 41, NULL, NULL),
(82, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 41, NULL, NULL),
(83, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 41, NULL, NULL),
(84, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -11', 41, '2019-01-17 04:29:22', '2019-01-17 04:29:22'),
(86, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 41, NULL, NULL),
(87, 'শিশু আদালত', 'Children\'s Court', 41, NULL, NULL),
(88, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 41, NULL, NULL),
(89, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 41, NULL, NULL),
(90, 'সহকারী জজ , বকশীগঞ্জ', 'Assistant Judge , Bakshiganj', 41, NULL, NULL),
(91, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 41, NULL, NULL),
(92, 'বিশেষ জজ ', 'Special Judge ', 41, NULL, NULL),
(93, 'সিনিয়র সহকারী জজ, সরিষাবাড়ি', 'Senior Assistant Judge, Sarishbari', 41, NULL, NULL),
(94, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 41, NULL, NULL),
(95, 'অর্থঋণ আদালত ', 'Money court', 41, NULL, NULL),
(96, 'সহকারী জজ , দেওয়ানগঞ্জ', 'Assistant Judge , Dewanganj', 41, NULL, NULL),
(97, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 41, NULL, NULL),
(98, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 41, NULL, NULL),
(99, 'সহকারী জজ -৬', 'Assistant Judge -6', 41, NULL, NULL),
(100, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 41, NULL, NULL),
(102, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 41, NULL, NULL),
(103, 'জেলা জজ আদালত', 'District Judge Court', 4, NULL, NULL),
(104, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 4, NULL, NULL),
(105, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 4, NULL, NULL),
(107, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 4, NULL, NULL),
(108, 'সহকারী জজ -১', 'Assistant Judge -1', 4, NULL, NULL),
(109, 'সহকারী জজ -২', 'Assistant Judge -2', 4, NULL, NULL),
(110, 'সহকারী জজ -৩', 'Assistant Judge -3', 4, NULL, NULL),
(111, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 4, NULL, NULL),
(112, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 4, NULL, NULL),
(113, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 4, NULL, NULL),
(114, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 4, NULL, NULL),
(115, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 4, NULL, NULL),
(116, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 4, NULL, NULL),
(117, 'শিশু আদালত', 'Children\'s Court', 4, NULL, NULL),
(118, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 4, NULL, NULL),
(119, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 4, NULL, NULL),
(120, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 4, NULL, NULL),
(121, 'জেলা জজ আদালত', 'District Judge Court', 43, NULL, NULL),
(122, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 43, NULL, NULL),
(123, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 43, NULL, NULL),
(124, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 43, NULL, NULL),
(125, 'সহকারী জজ -১', 'Assistant Judge -1', 43, NULL, NULL),
(126, 'সহকারী জজ -২', 'Assistant Judge -2', 43, NULL, NULL),
(127, 'সহকারী জজ -৩', 'Assistant Judge -3', 43, NULL, NULL),
(128, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 43, NULL, NULL),
(129, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 43, NULL, NULL),
(130, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 43, NULL, NULL),
(131, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 43, NULL, NULL),
(132, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 43, NULL, NULL),
(133, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 43, NULL, NULL),
(134, 'শিশু আদালত', 'Children\'s Court', 43, NULL, NULL),
(135, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 43, NULL, NULL),
(136, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 43, NULL, NULL),
(137, 'সহকারী জজ -৪', 'Assistant Judge -4', 43, NULL, NULL),
(138, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 43, NULL, NULL),
(139, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 43, NULL, NULL),
(140, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 43, NULL, NULL),
(141, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 43, NULL, NULL),
(142, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 43, NULL, NULL),
(143, 'সহকারী জজ -৫', 'Assistant Judge -5', 43, NULL, NULL),
(144, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 43, NULL, NULL),
(145, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 43, NULL, NULL),
(146, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 43, NULL, NULL),
(147, 'জেলা জজ আদালত', 'District Judge Court', 5, NULL, NULL),
(148, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 5, NULL, NULL),
(149, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 5, NULL, NULL),
(150, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 5, NULL, NULL),
(151, 'সহকারী জজ -১', 'Assistant Judge -1', 5, NULL, NULL),
(152, 'সহকারী জজ -২', 'Assistant Judge -2', 5, NULL, NULL),
(153, 'সহকারী জজ -৩', 'Assistant Judge -3', 5, NULL, NULL),
(154, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 5, NULL, NULL),
(155, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 5, NULL, NULL),
(156, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 5, NULL, NULL),
(157, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 5, NULL, NULL),
(158, ' সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -মির্জাগঞ্জ ', ' Senior Judicial Magistrate -Mirzaganj ', 5, NULL, NULL),
(159, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -কলাপাড়া ', 'Senior Judicial Magistrate -Kalapara ', 5, NULL, NULL),
(160, 'শিশু আদালত', 'Children\'s Court', 5, NULL, NULL),
(161, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 5, NULL, NULL),
(162, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 5, NULL, NULL),
(163, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 5, NULL, NULL),
(164, 'বিশেষ জজ -১', 'Special Judge -1', 5, NULL, NULL),
(165, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-২', 'Women and Children Repression Repression Tribunal No.-2', 5, NULL, NULL),
(166, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 5, NULL, NULL),
(167, 'সহকারী জজ -৪', 'Assistant Judge -4', 5, NULL, NULL),
(168, 'সহকারী জজ -৫', 'Assistant Judge -5', 5, NULL, NULL),
(169, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -গলাচিপা', 'Senior Judicial Magistrate - Galachipa', 5, NULL, NULL),
(170, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -দশমিনা ', 'Senior judicial magistrate - Dasamina', 5, NULL, NULL),
(171, 'সহকারী জজ -৬', 'Assistant Judge -6', 5, NULL, NULL),
(172, 'জেলা জজ আদালত', 'District Judge Court', 44, NULL, NULL),
(173, 'অতিরিক্ত জেলা ও দায়রা আদালত', 'Additional District and Sessions Court', 44, NULL, NULL),
(174, 'যুগ্ম জেলা ও দায়রা জজ ১ম আদালত', '1st District and Sessions Judge 1st Court', 44, NULL, NULL),
(175, 'সিনিয়র সহকারী জজ আদালত, শেরপুর সদর', 'Senior Assistant Judge Court, Sherpur Sadar', 44, NULL, NULL),
(176, 'সহকারী জজ আদালত, শ্রীবর্দী', 'Assistant Judge Court, Shrivardi', 44, NULL, NULL),
(177, 'সহকারী জজ আদালত, নকলা', 'Assistant Judge Court, Nokla', 44, NULL, NULL),
(178, 'সহকারী জজ আদালত, ঝিনাইগাতী', 'Assistant Judge Court, Jhenaidati', 44, NULL, NULL),
(179, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল', 'Women and Children Repression Retention Tribunal', 44, NULL, NULL),
(180, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 44, NULL, NULL),
(181, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 44, NULL, NULL),
(182, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 44, NULL, NULL),
(183, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 44, NULL, NULL),
(184, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 44, NULL, NULL),
(185, 'শিশু আদালত', 'Children\'s Court', 44, NULL, NULL),
(186, 'যুগ্ম জেলা ও দায়রা জজ ২য় আদালত', 'Joint District and Sessions Judge 2nd Court', 44, NULL, NULL),
(187, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 44, NULL, NULL),
(188, 'সহকারী জজ -৪', 'Assistant Judge -4', 44, NULL, NULL),
(189, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 44, NULL, NULL),
(192, 'সহকারী জজ -৬', 'Assistant Judge -6', 44, NULL, NULL),
(193, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 44, NULL, NULL),
(194, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 44, NULL, NULL),
(195, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 44, NULL, NULL),
(196, 'জেলা জজ আদালত', 'District Judge Court', 35, NULL, NULL),
(197, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 35, NULL, NULL),
(198, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট, কয়রা', 'Senior Judicial Magistrate, Kayra', 35, NULL, NULL),
(199, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট, পাইকগাছা', 'Senior Judicial Magistrate, Paikgacha', 35, NULL, NULL),
(200, 'জুডিসিয়াল ম্যাজিস্ট্রেট', 'Judicial magistrate', 35, NULL, NULL),
(201, 'জুডিসিয়াল ম্যাজিস্ট্রেট', 'Judicial magistrate', 35, NULL, NULL),
(202, 'জুডিসিয়াল ম্যাজিস্ট্রেট ', 'Judicial magistrate ', 35, NULL, NULL),
(203, ' জুডিসিয়াল ম্যাজিস্ট্রেট', 'Judicial magistrate', 35, NULL, NULL),
(204, 'স্পেশাল ম্যাজিস্ট্রেট', 'Special magistrates', 35, NULL, NULL),
(205, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 35, NULL, NULL),
(206, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 35, NULL, NULL),
(207, 'অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3', 35, NULL, NULL),
(208, 'অতিরিক্ত জেলা ও দায়রা জজ -৪', 'Additional District and Sessions Judge -4', 35, NULL, NULL),
(209, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 35, NULL, NULL),
(210, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 35, NULL, NULL),
(211, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 35, NULL, NULL),
(212, 'যুগ্ম জেলা ও দায়রা জজ -৪', 'Joint District and Sessions Judge -4', 35, NULL, NULL),
(213, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 35, NULL, NULL),
(214, 'অর্থঋণ আদালত নং-১', 'Money laundering court no-1', 35, NULL, NULL),
(215, 'সিনিয়র সহকারী জজ আদালত দৌলতপুর', 'Senior Assistant Judge Court Dowlatpur', 35, NULL, NULL),
(216, 'সিনিয়র সহকারী জজ আদালত বটিয়াঘাটা', 'Senior Assistant Judge Court Batiaghata', 35, NULL, NULL),
(217, 'সিনিয়র সহকারী জজ আদালত সদর', 'Senior Assistant Judge Court Sadar', 35, NULL, NULL),
(218, 'সিনিয়র সহকারী জজ আদালত ডুমুরিয়া', 'Senior Assistant Judge Court Dumuria', 35, NULL, NULL),
(219, 'সহকারী জজ আদালত দাকোপ', 'Assistant Judge Court Dakop', 35, NULL, NULL),
(220, 'পারিবারিক আদালত (রূপসা) খুলনা', 'Family Court (Rupsa) Khulna', 35, NULL, NULL),
(221, 'সহকারী জজ আদালত তেরখাদা', 'Assistant Judge Court Tarikhada', 35, NULL, NULL),
(222, 'সহকারী জজ আদালত ফুলতলা', 'Assistant Judge Court Fulton', 35, NULL, NULL),
(223, 'সিনিয়র সহকারী জজ আদালত পাইকগাছা', 'Senior Assistant Judge Court Paikgacha', 35, NULL, NULL),
(224, 'দ্রুত বিচার ট্রাইব্যুনাল নং-১', 'Speedy Trial Tribunal No.-1', 35, NULL, NULL),
(225, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 35, NULL, NULL),
(226, 'জননিরাপত্তা বিঘ্নকারী অপরাধ দমন ট্রাইব্যুনাল', 'Public safety prevention crime prevention tribunal', 35, NULL, NULL),
(227, 'বিভাগীয় বিশেষ জজ', 'Departmental Special Judge', 35, NULL, NULL),
(228, 'প্রশাসনিক ট্রাইব্যুনাল-১', 'Administrative Tribunal-1', 35, NULL, NULL),
(229, '১ম শ্রম আদালত', '1st Labor Court', 35, NULL, NULL),
(230, 'অতিঃ চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 35, NULL, NULL),
(231, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 35, NULL, NULL),
(232, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট-২ ', 'Senior Judicial Magistrate-2 ', 35, NULL, NULL),
(233, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 35, NULL, NULL),
(234, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 35, NULL, NULL),
(235, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 35, NULL, NULL),
(236, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 35, NULL, NULL),
(237, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 35, NULL, NULL),
(238, 'জুডিসিয়াল ম্যাজিস্ট্রেট ', 'Judicial magistrate ', 35, NULL, NULL),
(239, 'জেলা জজ আদালত', 'District Judge Court', 6, NULL, NULL),
(240, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 6, NULL, NULL),
(241, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 6, NULL, NULL),
(242, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 6, NULL, NULL),
(243, 'সহকারী জজ -১', 'Assistant Judge -1', 6, NULL, NULL),
(244, 'সহকারী জজ -২', 'Assistant Judge -2', 6, NULL, NULL),
(245, 'সহকারী জজ -৩', 'Assistant Judge -3', 6, NULL, NULL),
(246, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 6, NULL, NULL),
(247, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 6, NULL, NULL),
(248, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 6, NULL, NULL),
(249, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 6, NULL, NULL),
(250, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 6, NULL, NULL),
(251, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 6, NULL, NULL),
(252, 'শিশু আদালত', 'Children\'s Court', 6, NULL, NULL),
(253, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 6, NULL, NULL),
(254, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 6, NULL, NULL),
(255, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 6, NULL, NULL),
(256, 'সহকারী জজ -৪', 'Assistant Judge -4', 6, NULL, NULL),
(257, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 6, NULL, NULL),
(258, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 6, NULL, NULL),
(259, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 6, NULL, NULL),
(260, 'সহকারী জজ -৫', 'Assistant Judge -5', 6, NULL, NULL),
(261, 'জেলা জজ আদালত', 'District Judge Court', 3, NULL, NULL),
(262, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 3, NULL, NULL),
(263, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 3, NULL, NULL),
(264, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 3, NULL, NULL),
(265, 'সহকারী জজ -১', 'Assistant Judge -1', 3, NULL, NULL),
(266, 'সহকারী জজ -২', 'Assistant Judge -2', 3, NULL, NULL),
(267, 'সহকারী জজ -৩', 'Assistant Judge -3', 3, NULL, NULL),
(268, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 3, NULL, NULL),
(269, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 3, NULL, NULL),
(270, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 3, NULL, NULL),
(271, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 3, NULL, NULL),
(272, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 3, NULL, NULL),
(273, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 3, NULL, NULL),
(274, 'শিশু আদালত', 'Children\'s Court', 3, NULL, NULL),
(275, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 3, NULL, NULL),
(276, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 3, NULL, NULL),
(277, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 3, NULL, NULL),
(278, 'সহকারী জজ -৪', 'Assistant Judge -4', 3, NULL, NULL),
(279, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 3, NULL, NULL),
(280, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 3, NULL, NULL),
(281, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 3, NULL, NULL),
(282, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 3, NULL, NULL),
(283, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 3, NULL, NULL),
(284, 'জেলা জজ আদালত', 'District Judge Court', 1, NULL, NULL),
(285, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 1, NULL, NULL),
(286, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 1, NULL, NULL),
(287, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 1, NULL, NULL),
(288, 'সহকারী জজ -১', 'Assistant Judge -1', 1, NULL, NULL),
(289, 'সহকারী জজ -২', 'Assistant Judge -2', 1, NULL, NULL),
(290, 'সহকারী জজ -৩', 'Assistant Judge -3', 1, NULL, NULL),
(291, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 1, NULL, NULL),
(292, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 1, NULL, NULL),
(293, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 1, NULL, NULL),
(294, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 1, NULL, NULL),
(295, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 1, NULL, NULL),
(296, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 1, NULL, NULL),
(297, 'শিশু আদালত', 'Children\'s Court', 1, NULL, NULL),
(298, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 1, NULL, NULL),
(299, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 1, NULL, NULL),
(300, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 1, NULL, NULL),
(301, 'সহকারী জজ -৪', 'Assistant Judge -4', 1, NULL, NULL),
(302, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 1, NULL, NULL),
(303, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 1, NULL, NULL),
(304, 'জেলা জজ আদালত', 'District Judge Court', 31, NULL, NULL),
(305, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 31, NULL, NULL),
(306, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 31, NULL, NULL),
(307, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 31, NULL, NULL),
(308, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 31, NULL, NULL),
(309, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 31, NULL, NULL),
(310, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 31, NULL, NULL),
(311, 'সহকারী জজ -১', 'Assistant Judge -1', 31, NULL, NULL),
(312, 'সহকারী জজ -২', 'Assistant Judge -2', 31, NULL, NULL),
(313, 'সহকারী জজ -৩', 'Assistant Judge -3', 31, NULL, NULL),
(314, 'সহকারী জজ -৪', 'Assistant Judge -4', 31, NULL, NULL),
(315, 'সহকারী জজ -৫', 'Assistant Judge -5', 31, NULL, NULL),
(316, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 31, NULL, NULL),
(317, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 31, NULL, NULL),
(318, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 31, NULL, NULL),
(319, 'সহকারী জজ -৬', 'Assistant Judge -6', 31, NULL, NULL),
(320, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 31, NULL, NULL),
(321, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 31, NULL, NULL),
(322, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 31, NULL, NULL),
(323, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 31, NULL, NULL),
(324, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 31, NULL, NULL),
(325, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 31, NULL, NULL),
(326, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 31, NULL, NULL),
(327, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 31, NULL, NULL),
(328, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 31, NULL, NULL),
(329, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 31, NULL, NULL),
(330, 'শিশু আদালত', 'Children\'s Court', 31, NULL, NULL),
(331, 'জেলা জজ আদালত', 'District Judge Court', 32, NULL, NULL),
(332, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 32, NULL, NULL),
(333, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 32, NULL, NULL),
(334, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 32, NULL, NULL),
(335, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 32, NULL, NULL),
(336, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 32, NULL, NULL),
(337, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 32, NULL, NULL),
(338, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 32, NULL, NULL),
(339, 'সহকারী জজ -১', 'Assistant Judge -1', 32, NULL, NULL),
(340, 'সহকারী জজ -২', 'Assistant Judge -2', 32, NULL, NULL),
(341, 'সহকারী জজ -৩', 'Assistant Judge -3', 32, NULL, NULL),
(342, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 32, NULL, NULL),
(343, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 32, NULL, NULL),
(344, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 32, NULL, NULL),
(345, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 32, NULL, NULL),
(346, 'শিশু আদালত', 'Children\'s Court', 32, NULL, NULL),
(347, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 32, NULL, NULL),
(348, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 32, NULL, NULL),
(349, 'জেলা জজ আদালত', 'District Judge Court', 33, NULL, NULL),
(350, 'বিশেষ জজ -১', 'Special Judge -1', 33, NULL, NULL),
(351, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 33, NULL, NULL),
(352, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 33, NULL, NULL),
(353, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 33, NULL, NULL),
(354, 'অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3', 33, NULL, NULL),
(355, 'অতিরিক্ত জেলা ও দায়রা জজ -৪', 'Additional District and Sessions Judge -4', 33, NULL, NULL),
(356, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 33, NULL, NULL),
(357, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 33, NULL, NULL),
(358, 'যুগ্ম জেলা ও দায়রা জজ অতিরিক্ত আদালত', 'Joint District and Sessions Judge Additional court', 33, NULL, NULL),
(359, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 33, NULL, NULL),
(360, 'সহকারী জজ -১ (কেশবপুর)', 'Assistant Judge -1', 33, NULL, NULL),
(361, 'সহকারী জজ -২ (শার্শা)', 'Assistant Judge -2', 33, NULL, NULL),
(362, 'সহকারী জজ -৩ (ঝিকরগাছা)', 'Assistant Judge -3', 33, NULL, NULL),
(363, 'সহকারী জজ -৪ (বাঘারপাড়া)', 'Assistant Judge -4', 33, NULL, NULL),
(364, 'সিনিয়র সহকারী জজ আদালত -সদর ', 'Senior Assistant Judge Court -Sadar ', 33, NULL, NULL),
(365, 'সিনিয়র সহকারী জজ -২ (মনিরামপুর)', 'Senior Assistant Judge -2', 33, NULL, NULL),
(366, 'সিনিয়র সহকারী জজ -৩ (অভয়নগর) ', 'Senior Assistant Judge -3 ', 33, NULL, NULL),
(367, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 33, NULL, NULL),
(368, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 33, NULL, NULL),
(369, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 33, NULL, NULL),
(370, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 33, NULL, NULL),
(371, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 33, NULL, NULL),
(372, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 33, NULL, NULL),
(373, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 33, NULL, NULL),
(374, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 33, NULL, NULL),
(375, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 33, NULL, NULL),
(376, 'শিশু আদালত', 'Children\'s Court', 33, NULL, NULL),
(377, 'জেলা জজ আদালত', 'District Judge Court', 34, NULL, NULL),
(378, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 34, NULL, NULL),
(379, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 34, NULL, NULL),
(380, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 34, NULL, NULL),
(381, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 34, NULL, NULL),
(382, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 34, NULL, NULL),
(383, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 34, NULL, NULL),
(384, 'সহকারী জজ -১', 'Assistant Judge -1', 34, NULL, NULL),
(385, 'সহকারী জজ -২', 'Assistant Judge -2', 34, NULL, NULL),
(386, 'সহকারী জজ -৩', 'Assistant Judge -3', 34, NULL, NULL),
(387, 'সিনিয়র সহকারী জজ -১ ', 'Senior Assistant Judge -1 ', 34, NULL, NULL),
(388, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 34, NULL, NULL),
(389, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 34, NULL, NULL),
(390, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 34, NULL, NULL),
(391, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 34, NULL, NULL),
(392, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 34, NULL, NULL),
(393, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 34, NULL, NULL),
(394, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 34, NULL, NULL),
(395, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 34, NULL, NULL),
(396, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 34, NULL, NULL),
(397, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 34, NULL, NULL),
(398, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 34, NULL, NULL),
(399, 'শিশু আদালত', 'Children\'s Court', 34, NULL, NULL),
(400, 'জেলা জজ আদালত', 'District Judge Court', 36, NULL, NULL),
(401, 'বিশেষ জজ আদালত', 'Special Judge Court', 36, NULL, NULL),
(402, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল ', 'Women and Children Repression Retention Tribunal', 36, NULL, NULL),
(403, 'অতিরিক্ত জেলা ও দায়রা জজ, ১ম আদালত', 'Additional District and Sessions Judge, 1st Court', 36, NULL, NULL),
(404, 'যুগ্ম জেলা ও দায়রা জজ, ১ম আদালত', 'Joint District and Sessions Judge, 1st Court', 36, NULL, NULL),
(405, 'যুগ্ম জেলা ও দায়রা জজ, ২য় আদালত', 'Joint District and Sessions Judge, 2nd Court', 36, NULL, NULL),
(406, 'সহকারী জজ, অতিরিক্ত আদালত', 'Assistant Judge, Additional court', 36, NULL, NULL),
(407, 'যুগ্ম জেলা ও দায়রা জজ, অতিরিক্ত আদালত', 'Joint District and Sessions Judge, Additional court', 36, NULL, NULL),
(408, 'অতিরিক্ত জেলা ও দায়রা জজ, ২য় আদালত', 'Additional District and Sessions Judge, 2nd Court', 36, NULL, NULL),
(409, 'সহকারী জজ আদালত, ভেড়ামারা', 'Assistant Judge Court, Bheramara', 36, NULL, NULL),
(410, 'সহকারী জজ আদালত, মিরপুর', 'Assistant Judge Court, Mirpur', 36, NULL, NULL),
(411, 'সহকারী জজ আদালত, কুমারখালী', 'Assistant Judge Court, Kumarkhali', 36, NULL, NULL),
(412, 'সিনিয়র সহকারী জজ আদালত, দৌলতপুর', 'Senior Assistant Judge Court, Daulatpur', 36, NULL, NULL),
(413, 'সিনিয়র সহকারী জজ আদালত, সদর', 'Senior Assistant Judge Court,Sadar', 36, NULL, NULL),
(414, 'সহকারী জজ আদালত, খোকসা', 'Assistant Judge Court, Khosa', 36, NULL, NULL),
(415, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 36, NULL, NULL),
(416, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 36, NULL, NULL),
(417, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 36, NULL, NULL),
(418, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 36, NULL, NULL),
(419, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 36, NULL, NULL),
(420, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 36, NULL, NULL),
(421, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 36, NULL, NULL),
(422, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 36, NULL, NULL),
(423, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 36, NULL, NULL),
(424, 'শিশু আদালত', 'Children\'s Court', 36, NULL, NULL),
(425, 'জেলা জজ আদালত', 'District Judge Court', 37, NULL, NULL),
(426, 'অতিরিক্ত জেলা ও দায়রা জজ ', 'Additional District and Sessions Judge ', 37, NULL, NULL),
(427, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 37, NULL, NULL),
(428, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 37, NULL, NULL),
(429, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 37, NULL, NULL),
(430, 'সহকারী জজ -শ্রীপুর', 'Assistant Judge -Sreepur', 37, NULL, NULL),
(431, 'সহকারী জজ -শালিখা', 'Assistant Judge -Sandal', 37, NULL, NULL),
(432, 'সিনিয়র সহকারী জজ -সদর', 'Senior Assistant Judge -Sadar', 37, NULL, NULL),
(433, 'সিনিয়র সহকারী জজ -মহম্মদপুর', 'Senior Assistant Judge -Mohammedpur', 37, NULL, NULL),
(434, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 37, NULL, NULL),
(435, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 37, NULL, NULL),
(436, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 37, NULL, NULL),
(437, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 37, NULL, NULL),
(438, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 37, NULL, NULL),
(439, 'শিশু আদালত', 'Children\'s Court', 37, NULL, NULL),
(440, 'জেলা জজ আদালত', 'District Judge Court', 38, NULL, NULL),
(441, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 38, NULL, NULL),
(442, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 38, NULL, NULL),
(443, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 38, NULL, NULL),
(444, 'সহকারী জজ -১', 'Assistant Judge -1', 38, NULL, NULL),
(445, 'সহকারী জজ -২', 'Assistant Judge -2', 38, NULL, NULL),
(446, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 38, NULL, NULL),
(447, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 38, NULL, NULL),
(448, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 38, NULL, NULL),
(449, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 38, NULL, NULL),
(450, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 38, NULL, NULL),
(451, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 38, NULL, NULL),
(452, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 38, NULL, NULL),
(453, 'শিশু আদালত', 'Children\'s Court', 38, NULL, NULL),
(454, 'জেলা জজ আদালত', 'District Judge Court', 39, NULL, NULL),
(455, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 39, NULL, NULL),
(456, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 39, NULL, NULL),
(457, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 39, NULL, NULL),
(458, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 39, NULL, NULL),
(459, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 39, NULL, NULL),
(460, 'সহকারী জজ -১', 'Assistant Judge -1', 39, NULL, NULL),
(461, 'সহকারী জজ -২', 'Assistant Judge -2', 39, NULL, NULL),
(462, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 39, NULL, NULL),
(463, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 39, NULL, NULL),
(464, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 39, NULL, NULL),
(465, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 39, NULL, NULL),
(466, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 39, NULL, NULL),
(467, 'শিশু আদালত', 'Children\'s Court', 39, NULL, NULL),
(468, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 40, NULL, NULL),
(469, 'জেলা জজ আদালত', 'District Judge Court', 40, NULL, NULL),
(470, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 40, NULL, NULL),
(471, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 40, NULL, NULL),
(472, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 40, NULL, NULL),
(473, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 40, NULL, NULL),
(474, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 40, NULL, NULL),
(475, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 40, NULL, NULL),
(476, 'সহকারী জজ -৩', 'Assistant Judge -3', 40, NULL, NULL),
(477, 'সহকারী জজ -২', 'Assistant Judge -2', 40, NULL, NULL),
(478, 'সহকারী জজ -১', 'Assistant Judge -1', 40, NULL, NULL),
(479, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 40, NULL, NULL),
(480, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 40, NULL, NULL),
(481, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 40, NULL, NULL),
(482, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 40, NULL, NULL),
(483, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 40, NULL, NULL),
(484, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 40, NULL, NULL),
(485, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 40, NULL, NULL),
(486, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 40, NULL, NULL),
(487, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 40, NULL, NULL),
(488, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 40, NULL, NULL),
(489, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 40, NULL, NULL),
(490, 'শিশু আদালত', 'Children\'s Court', 40, NULL, NULL),
(491, 'মহানগর দায়রা জজ আদালত', 'Metropolitan Sessions Judge Court', 18, NULL, NULL),
(492, 'যুগ্ম মহানগর দায়রা জজ -১', 'Joint Metropolitan Sessions Judge -1', 18, NULL, NULL),
(493, 'যুগ্ম মহানগর দায়রা জজ -২', 'Joint Metropolitan Sessions Judge -2', 18, NULL, NULL),
(494, 'যুগ্ম মহানগর দায়রা জজ -৩', 'Joint Metropolitan Sessions Judge -3', 18, NULL, NULL),
(495, 'যুগ্ম মহানগর দায়রা জজ -৪', 'Joint Metropolitan Sessions Judge -4', 18, NULL, NULL),
(496, 'যুগ্ম মহানগর দায়রা জজ -৫', 'Joint Metropolitan Sessions Judge -5', 18, NULL, NULL),
(497, 'যুগ্ম মহানগর দায়রা জজ -৬', 'Joint Metropolitan Sessions Judge -6', 18, NULL, NULL),
(498, 'যুগ্ম মহানগর দায়রা জজ -৭', 'Joint Metropolitan Sessions Judge -7', 18, NULL, NULL),
(499, 'চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত', 'Chief Metropolitan Magistrate Court', 18, NULL, NULL),
(500, 'অতিরিক্ত চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট -১, আদালত নং -২', 'Additional Chief Metropolitan Magistrate -1, Court No. -2', 18, NULL, NULL),
(501, 'অতিরিক্ত চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট -২, আদালত নং -৩', 'Additional Chief Metropolitan Magistrate -2, Court No. -3', 18, NULL, NULL),
(502, 'অতিরিক্ত মহানগর দায়রা জজ -১', 'Additional Metropolitan Sessions Judge -1', 18, NULL, NULL),
(503, 'অতিরিক্ত চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট -৩, আদালত নং -৪ ', 'Additional Chief Metropolitan Magistrate -3, Court No. -4 ', 18, NULL, NULL),
(504, 'অতিরিক্ত চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট -৪, আদালত নং -৫ ', 'Additional Chief Metropolitan Magistrate -4, Court No. -5 ', 18, NULL, NULL),
(505, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত নং -৬ ', 'Metropolitan Magistrate Court No. -6 ', 18, NULL, NULL),
(506, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩৫', 'Metropolitan Magistrate Court -35', 18, NULL, NULL),
(507, '.', '.', 18, NULL, NULL),
(508, '.', '.', 18, NULL, NULL),
(509, '.', '.', 18, NULL, NULL),
(510, '.', '.', 18, NULL, NULL),
(511, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৭', 'Metropolitan Magistrate Court -7', 18, NULL, NULL),
(512, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৮', 'Metropolitan Magistrate Court -8', 18, NULL, NULL),
(513, 'অতিরিক্ত মহানগর দায়রা জজ -২', 'Additional Metropolitan Sessions Judge -2', 18, NULL, NULL),
(514, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৯', 'Metropolitan Magistrate Court -9', 18, NULL, NULL),
(515, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১০', 'Metropolitan Magistrate Court -10', 18, NULL, NULL),
(516, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১১', 'Metropolitan Magistrate Court -11', 18, NULL, NULL),
(517, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১২', 'Metropolitan Magistrate Court -12', 18, NULL, NULL),
(518, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১৩', 'Metropolitan Magistrate Court -13', 18, NULL, NULL),
(519, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১৪', 'Metropolitan Magistrate Court -14', 18, NULL, NULL),
(520, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১৫', 'Metropolitan Magistrate Court -15', 18, NULL, NULL),
(521, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১৬', 'Metropolitan Magistrate Court -16', 18, NULL, NULL),
(522, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১৭', 'Metropolitan Magistrate Court -17', 18, NULL, NULL),
(523, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১৮', 'Metropolitan Magistrate Court -18', 18, NULL, NULL),
(524, 'অতিরিক্ত মহানগর দায়রা জজ -৩', 'Additional Metropolitan Sessions Judge -3', 18, NULL, NULL),
(525, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১৯', 'Metropolitan Magistrate Court -19', 18, NULL, NULL),
(526, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২০', 'Metropolitan Magistrate Court -20', 18, NULL, NULL),
(527, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২১', 'Metropolitan Magistrate Court -21', 18, NULL, NULL),
(528, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২২', 'Metropolitan Magistrate Court -22', 18, NULL, NULL),
(529, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২৩', 'Metropolitan Magistrate Court -23', 18, NULL, NULL),
(530, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২৪', 'Metropolitan Magistrate Court -24', 18, NULL, NULL),
(531, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২৫', 'Metropolitan Magistrate Court -25', 18, NULL, NULL),
(532, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২৬', 'Metropolitan Magistrate Court -26', 18, NULL, NULL),
(533, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২৭', 'Metropolitan Magistrate Court -27', 18, NULL, NULL),
(534, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২৮', 'Metropolitan Magistrate Court -28', 18, NULL, NULL),
(535, 'অতিরিক্ত মহানগর দায়রা জজ -৪', 'Additional Metropolitan Sessions Judge -4', 18, NULL, NULL),
(536, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২৯', 'Metropolitan Magistrate Court -29', 18, NULL, NULL),
(537, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩০', 'Metropolitan Magistrate Court -30', 18, NULL, NULL),
(538, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩১', 'Metropolitan Magistrate Court -31', 18, NULL, NULL),
(539, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩২', 'Metropolitan Magistrate Court -32', 18, NULL, NULL),
(540, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩৩', 'Metropolitan Magistrate Court -33', 18, NULL, NULL),
(541, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩৪', 'Metropolitan Magistrate Court -34', 18, NULL, NULL),
(542, 'স্পেশাল ম্যাজিস্ট্রেট, ডিপিডিসি', 'Special magistrates, DPDC', 18, NULL, NULL),
(543, 'স্পেশাল ম্যাজিস্ট্রেট, ডিপিডিসি', 'Special magistrates, DPDC', 18, NULL, NULL),
(544, 'স্পেশাল ম্যাজিস্ট্রেট, ডিপিডিসি', 'Special magistrates, DPDC', 18, NULL, NULL),
(545, 'স্পেশাল ম্যাজিস্ট্রেট, ডিপিডিসি', 'Special magistrates, DPDC', 18, NULL, NULL),
(546, 'অতিরিক্ত মহানগর দায়রা জজ -৫', 'Additional Metropolitan Sessions Judge -5', 18, NULL, NULL),
(547, 'স্পেশাল ম্যাজিস্ট্রেট, পল্লী বিদ্যুৎ', 'Special magistrates, rural electricity', 18, NULL, NULL),
(548, 'স্পেশাল ম্যাজিস্ট্রেট, পল্লী বিদ্যুৎ', 'Special magistrates, rural electricity', 18, NULL, NULL),
(549, 'স্পেশাল ম্যাজিস্ট্রেট, মেরিন আদালত', 'Special Magistrate, Marine Court', 18, NULL, NULL),
(550, 'স্পেশাল ম্যাজিস্ট্রেট, ডেসকো আদালত', 'Special Magistrate, DESCO Court', 18, NULL, NULL),
(551, 'অতিরিক্ত মহানগর দায়রা জজ -৬', 'Additional Metropolitan Sessions Judge -6', 18, NULL, NULL),
(552, 'অতিরিক্ত মহানগর দায়রা জজ -৭', 'Additional Metropolitan Sessions Judge -7', 18, NULL, NULL),
(553, 'অতিরিক্ত মহানগর দায়রা জজ -৮', 'Additional Metropolitan Sessions Judge -8', 18, NULL, NULL),
(554, 'জেলা জজ আদালত', 'District Judge Court', 52, NULL, NULL),
(555, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 52, NULL, NULL),
(556, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 52, NULL, NULL),
(557, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 52, NULL, NULL),
(558, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 52, NULL, NULL),
(559, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 52, NULL, NULL),
(560, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 52, NULL, NULL),
(561, 'অর্থঋণ আদালত নং-১', 'Money laundering court no-1', 52, NULL, NULL),
(562, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 52, NULL, NULL),
(563, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 52, NULL, NULL),
(564, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 52, NULL, NULL),
(565, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 52, NULL, NULL),
(566, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 52, NULL, NULL),
(567, 'সহকারী জজ -১', 'Assistant Judge -1', 52, NULL, NULL),
(568, 'সহকারী জজ -২', 'Assistant Judge -2', 52, NULL, NULL),
(569, 'সহকারী জজ -৩', 'Assistant Judge -3', 52, NULL, NULL),
(570, 'সহকারী জজ -৪', 'Assistant Judge -4', 52, NULL, NULL),
(571, 'সহকারী জজ -৫', 'Assistant Judge -5', 52, NULL, NULL),
(572, 'সহকারী জজ -৬', 'Assistant Judge -6', 52, NULL, NULL),
(573, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 52, NULL, NULL),
(574, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 52, NULL, NULL),
(575, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 52, NULL, NULL),
(576, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 52, NULL, NULL),
(577, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 52, NULL, NULL),
(578, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 52, NULL, NULL),
(579, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 52, NULL, NULL),
(580, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 52, NULL, NULL),
(581, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 52, NULL, NULL),
(582, 'শিশু আদালত', 'Children\'s Court', 52, NULL, NULL),
(583, 'বিশেষ জজ -১', 'Special Judge -1', 59, NULL, NULL),
(584, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 59, NULL, NULL),
(585, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 59, NULL, NULL),
(586, 'জেলা জজ আদালত', 'District Judge Court', 59, NULL, NULL),
(587, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 59, NULL, NULL),
(588, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 59, NULL, NULL),
(589, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 59, NULL, NULL),
(590, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 59, NULL, NULL),
(591, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 59, NULL, NULL),
(592, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 59, NULL, NULL),
(593, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 59, NULL, NULL),
(594, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 59, NULL, NULL),
(595, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 59, NULL, NULL),
(596, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 59, NULL, NULL),
(597, 'সহকারী জজ -১', 'Assistant Judge -1', 59, NULL, NULL),
(598, 'সহকারী জজ -২', 'Assistant Judge -2', 59, NULL, NULL),
(599, 'সহকারী জজ -৩', 'Assistant Judge -3', 59, NULL, NULL),
(600, 'সহকারী জজ -৪', 'Assistant Judge -4', 59, NULL, NULL),
(601, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 59, NULL, NULL),
(602, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 59, NULL, NULL),
(603, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 59, NULL, NULL),
(604, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 59, NULL, NULL),
(605, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 59, NULL, NULL),
(606, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 59, NULL, NULL),
(607, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 59, NULL, NULL),
(608, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 59, NULL, NULL),
(609, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 59, NULL, NULL),
(610, 'শিশু আদালত', 'Children\'s Court', 59, NULL, NULL),
(611, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 50, NULL, NULL),
(612, 'জেলা জজ আদালত', 'District Judge Court', 50, NULL, NULL),
(613, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 50, NULL, NULL),
(614, 'বিশেষ জজ -১', 'Special Judge -1', 50, NULL, NULL),
(615, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 50, NULL, NULL),
(616, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 50, NULL, NULL),
(617, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 50, NULL, NULL),
(618, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 50, NULL, NULL),
(619, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 50, NULL, NULL),
(620, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 50, NULL, NULL),
(621, 'অর্থঋণ আদালত নং-১', 'Money laundering court no-1', 50, NULL, NULL),
(622, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 50, NULL, NULL),
(623, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 50, NULL, NULL),
(624, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 50, NULL, NULL),
(625, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 50, NULL, NULL),
(626, 'সহকারী জজ -১', 'Assistant Judge -1', 50, NULL, NULL),
(627, 'সহকারী জজ -২', 'Assistant Judge -2', 50, NULL, NULL),
(628, 'সহকারী জজ -৩', 'Assistant Judge -3', 50, NULL, NULL),
(629, 'সহকারী জজ -৪', 'Assistant Judge -4', 50, NULL, NULL),
(630, 'সহকারী জজ -৫', 'Assistant Judge -5', 50, NULL, NULL),
(631, 'সহকারী জজ -৬', 'Assistant Judge -6', 50, NULL, NULL),
(632, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 50, NULL, NULL),
(633, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 50, NULL, NULL),
(634, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 50, NULL, NULL),
(635, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 50, NULL, NULL),
(636, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 50, NULL, NULL),
(637, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 50, NULL, NULL),
(638, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 50, NULL, NULL),
(639, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 50, NULL, NULL),
(640, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 50, NULL, NULL),
(641, 'শিশু আদালত', 'Children\'s Court', 50, NULL, NULL),
(642, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 50, NULL, NULL),
(643, 'শিশু আদালত', 'Children\'s Court', 35, NULL, NULL),
(644, 'মহানগর দায়রা জজ আদালত', 'Metropolitan Sessions Judge Court', 35, NULL, NULL),
(645, 'যুগ্ম মহানগর দায়রা জজ -১', 'Joint Metropolitan Sessions Judge -1', 35, NULL, NULL),
(646, 'যুগ্ম মহানগর দায়রা জজ -২', 'Joint Metropolitan Sessions Judge -2', 35, NULL, NULL),
(647, 'অতিরিক্ত মহানগর দায়রা জজ -১', 'Additional Metropolitan Sessions Judge -1', 35, NULL, NULL),
(648, 'চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত', 'Chief Metropolitan Magistrate Court', 35, NULL, NULL),
(649, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১', 'Metropolitan Magistrate Court -1', 35, NULL, NULL),
(650, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২', 'Metropolitan Magistrate Court -2', 35, NULL, NULL),
(651, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩', 'Metropolitan Magistrate Court -3', 35, NULL, NULL),
(652, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৪', 'Metropolitan Magistrate Court -4', 35, NULL, NULL),
(653, 'অতিরিক্ত চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১', 'Additional Chief Metropolitan Magistrate Court -1', 35, NULL, NULL),
(654, 'জেলা জজ আদালত', 'District Judge Court', 49, NULL, NULL),
(655, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 49, NULL, NULL),
(656, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 49, NULL, NULL),
(657, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 49, NULL, NULL),
(658, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 49, NULL, NULL),
(659, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 49, NULL, NULL),
(660, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 49, NULL, NULL),
(661, 'সহকারী জজ -১', 'Assistant Judge -1', 49, NULL, NULL),
(662, 'সহকারী জজ -২', 'Assistant Judge -2', 49, NULL, NULL),
(663, 'সহকারী জজ -৩', 'Assistant Judge -3', 49, NULL, NULL),
(664, 'সহকারী জজ -৪', 'Assistant Judge -4', 49, NULL, NULL),
(665, 'শিশু আদালত', 'Children\'s Court', 49, NULL, NULL),
(666, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 49, NULL, NULL),
(667, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 49, NULL, NULL),
(668, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 49, NULL, NULL),
(669, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 49, NULL, NULL),
(670, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 49, NULL, NULL),
(671, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 49, NULL, NULL),
(672, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 49, NULL, NULL),
(673, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 49, NULL, NULL),
(674, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 49, NULL, NULL),
(675, 'জেলা জজ আদালত', 'District Judge Court', 60, NULL, NULL),
(676, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 60, NULL, NULL),
(677, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 60, NULL, NULL),
(678, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 60, NULL, NULL),
(679, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 60, NULL, NULL),
(680, 'সিনিয়র সহকারী জজ, সদর', 'Senior Assistant Judge,Sadar', 60, NULL, NULL),
(681, 'সহকারী জজ, হরিপুর', 'Assistant Judge, Haripur', 60, NULL, NULL),
(682, 'সহকারী জজ, বালিয়াডাঙ্গি', 'Assistant Judge, Baliadangi', 60, NULL, NULL);
INSERT INTO `courts` (`id`, `name_bn`, `name_en`, `disid`, `created_at`, `updated_at`) VALUES
(683, 'সহকারী জজ, পীরগঞ্জ', 'Assistant Judge, Pirganj', 60, NULL, NULL),
(684, 'সহকারী জজ, রানিসঙ্কাইল', 'Assistant Judge, Runisankile', 60, NULL, NULL),
(685, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 60, NULL, NULL),
(686, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 60, NULL, NULL),
(687, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 60, NULL, NULL),
(688, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 60, NULL, NULL),
(689, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট - ৩', 'Senior Judicial Magistrate - 3', 60, NULL, NULL),
(690, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 60, NULL, NULL),
(691, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 60, NULL, NULL),
(692, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 60, NULL, NULL),
(693, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 60, NULL, NULL),
(694, 'শিশু আদালত', 'Children\'s Court', 60, NULL, NULL),
(695, 'মহানগর দায়রা জজ আদালত', 'Metropolitan Sessions Judge Court', 64, NULL, NULL),
(696, 'যুগ্ম মহানগর দায়রা জজ -১', 'Joint Metropolitan Sessions Judge -1', 64, NULL, NULL),
(697, 'যুগ্ম মহানগর দায়রা জজ -২', 'Joint Metropolitan Sessions Judge -2', 64, NULL, NULL),
(698, 'অতিরিক্ত মহানগর দায়রা জজ -১', 'Additional Metropolitan Sessions Judge -1', 64, NULL, NULL),
(699, 'চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত', 'Chief Metropolitan Magistrate Court', 64, NULL, NULL),
(700, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১', 'Metropolitan Magistrate Court -1', 64, NULL, NULL),
(701, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২', 'Metropolitan Magistrate Court -2', 64, NULL, NULL),
(702, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩', 'Metropolitan Magistrate Court -3', 64, NULL, NULL),
(703, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৪', 'Metropolitan Magistrate Court -4', 64, NULL, NULL),
(704, 'অতিরিক্ত চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১', 'Additional Chief Metropolitan Magistrate Court -1', 64, NULL, NULL),
(705, 'শিশু আদালত', 'Children\'s Court', 64, NULL, NULL),
(706, 'জেলা জজ আদালত', 'District Judge Court', 47, NULL, NULL),
(707, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 47, NULL, NULL),
(708, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 47, NULL, NULL),
(709, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 47, NULL, NULL),
(710, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 47, NULL, NULL),
(711, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 47, NULL, NULL),
(712, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 47, NULL, NULL),
(713, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 47, NULL, NULL),
(714, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 47, NULL, NULL),
(715, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 47, NULL, NULL),
(716, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 47, NULL, NULL),
(717, 'সহকারী জজ -১', 'Assistant Judge -1', 47, NULL, NULL),
(718, 'সহকারী জজ -২', 'Assistant Judge -2', 47, NULL, NULL),
(719, 'সহকারী জজ -৩', 'Assistant Judge -3', 47, NULL, NULL),
(720, 'সহকারী জজ -৪', 'Assistant Judge -4', 47, NULL, NULL),
(721, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 47, NULL, NULL),
(722, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 47, NULL, NULL),
(723, 'শিশু আদালত', 'Children\'s Court', 47, NULL, NULL),
(724, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 47, NULL, NULL),
(725, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 47, NULL, NULL),
(726, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 47, NULL, NULL),
(727, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 47, NULL, NULL),
(728, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 47, NULL, NULL),
(729, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 47, NULL, NULL),
(730, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 47, NULL, NULL),
(731, 'শিশু আদালত', 'Children\'s Court', 10, NULL, NULL),
(732, 'যুগ্ম মহানগর দায়রা জজ -৭', 'Joint Metropolitan Sessions Judge -7', 10, NULL, NULL),
(733, 'মহানগর দায়রা জজ আদালত', 'Metropolitan Sessions Judge Court', 10, NULL, NULL),
(734, 'অতিরিক্ত মহানগর দায়রা জজ -১', 'Additional Metropolitan Sessions Judge -1', 10, NULL, NULL),
(735, 'অতিরিক্ত মহানগর দায়রা জজ -২', 'Additional Metropolitan Sessions Judge -2', 10, NULL, NULL),
(736, 'অতিরিক্ত মহানগর দায়রা জজ -৩', 'Additional Metropolitan Sessions Judge -3', 10, NULL, NULL),
(737, 'অতিরিক্ত মহানগর দায়রা জজ -৪', 'Additional Metropolitan Sessions Judge -4', 10, NULL, NULL),
(738, 'অতিরিক্ত মহানগর দায়রা জজ -৫', 'Additional Metropolitan Sessions Judge -5', 10, NULL, NULL),
(739, 'যুগ্ম মহানগর দায়রা জজ -১', 'Joint Metropolitan Sessions Judge -1', 10, NULL, NULL),
(740, 'যুগ্ম মহানগর দায়রা জজ -২', 'Joint Metropolitan Sessions Judge -2', 10, NULL, NULL),
(741, 'যুগ্ম মহানগর দায়রা জজ -৩', 'Joint Metropolitan Sessions Judge -3', 10, NULL, NULL),
(742, 'যুগ্ম মহানগর দায়রা জজ -৪', 'Joint Metropolitan Sessions Judge -4', 10, NULL, NULL),
(743, 'যুগ্ম মহানগর দায়রা জজ -৫', 'Joint Metropolitan Sessions Judge -5', 10, NULL, NULL),
(744, 'যুগ্ম মহানগর দায়রা জজ -৬', 'Joint Metropolitan Sessions Judge -6', 10, NULL, NULL),
(745, 'চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত', 'Chief Metropolitan Magistrate Court', 10, NULL, NULL),
(746, 'অতিরিক্ত চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১', 'Additional Chief Metropolitan Magistrate Court-1', 10, NULL, NULL),
(747, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১', 'Metropolitan Magistrate Court -1', 10, NULL, NULL),
(748, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২', 'Metropolitan Magistrate Court -2', 10, NULL, NULL),
(749, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩', 'Metropolitan Magistrate Court -3', 10, NULL, NULL),
(750, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৪', 'Metropolitan Magistrate Court -4', 10, NULL, NULL),
(751, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৫', 'Metropolitan Magistrate Court -5', 10, NULL, NULL),
(752, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৬', 'Metropolitan Magistrate Court -6', 10, NULL, NULL),
(753, 'দ্রুত বিচার আদালত', 'Quick trial court', 48, NULL, NULL),
(754, 'জেলা জজ আদালত', 'District Judge Court', 48, NULL, NULL),
(755, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 48, NULL, NULL),
(756, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 48, NULL, NULL),
(757, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 48, NULL, NULL),
(758, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 48, NULL, NULL),
(759, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 48, NULL, NULL),
(760, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 48, NULL, NULL),
(761, 'সহকারী জজ -১', 'Assistant Judge -1', 48, NULL, NULL),
(762, 'সহকারী জজ -২', 'Assistant Judge -2', 48, NULL, NULL),
(763, 'সহকারী জজ -৩', 'Assistant Judge -3', 48, NULL, NULL),
(764, 'সহকারী জজ -৪', 'Assistant Judge -4', 48, NULL, NULL),
(765, 'শিশু আদালত', 'Children\'s Court', 48, NULL, NULL),
(766, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 48, NULL, NULL),
(767, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 48, NULL, NULL),
(768, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 48, NULL, NULL),
(769, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 48, NULL, NULL),
(770, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 48, NULL, NULL),
(771, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 48, NULL, NULL),
(772, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 48, NULL, NULL),
(773, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 48, NULL, NULL),
(774, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 48, NULL, NULL),
(775, 'সহকারী জজ -৫', 'Assistant Judge -5', 48, NULL, NULL),
(776, 'সহকারী জজ -৪', 'Assistant Judge -4', 18, NULL, NULL),
(777, 'সহকারী জজ -৫', 'Assistant Judge -5', 18, NULL, NULL),
(778, 'সহকারী জজ, পারিবারিক আদালত', 'Assistant Judge, Family Court', 18, NULL, NULL),
(779, 'দ্রুত বিচার ট্রাইব্যুনাল নং-১', 'Speedy Trial Tribunal No.-1', 18, NULL, NULL),
(780, 'দ্রুত বিচার ট্রাইব্যুনাল নং-২', 'Speedy Trial Tribunal No.-2', 18, NULL, NULL),
(781, 'দ্রুত বিচার ট্রাইব্যুনাল নং-৩', 'Speedy Trial Tribunal No.-3', 18, NULL, NULL),
(782, 'দ্রুত বিচার ট্রাইব্যুনাল নং-৪', 'Speedy Trial Tribunal No.-4', 18, NULL, NULL),
(783, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 18, NULL, NULL),
(784, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-২', 'Women and Children Repression Repression Tribunal No.-2', 18, NULL, NULL),
(785, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-৩ ', 'Women and Children Repression Repression Tribunal No.-3 ', 18, NULL, NULL),
(786, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-৪ ', 'Women and Children Repression Repression Tribunal No.-4 ', 18, NULL, NULL),
(787, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-৫ ', 'Women and Children Repression Repression Tribunal No.-5 ', 18, NULL, NULL),
(788, 'জননিরাপত্তা বিঘ্নকারী অপরাধ দমন ট্রাইব্যুনাল', 'Public safety prevention crime prevention tribunal', 18, NULL, NULL),
(789, 'বিভাগীয় বিশেষ জজ', 'Departmental Special Judge', 18, NULL, NULL),
(790, 'বিশেষ জজ -১', 'Special Judge -1', 18, NULL, NULL),
(791, 'বিশেষ জজ -২', 'Special Judge -2', 18, NULL, NULL),
(792, 'বিশেষ জজ -৩', 'Special Judge -3', 18, NULL, NULL),
(793, 'বিশেষ জজ -৪', 'Special Judge -4', 18, NULL, NULL),
(794, 'বিশেষ জজ -৫', 'Special Judge -5', 18, NULL, NULL),
(795, 'বিশেষ জজ -৬', 'Special Judge -6', 18, NULL, NULL),
(796, 'বিশেষ জজ -৭', 'Special Judge -7', 18, NULL, NULL),
(797, 'বিশেষ জজ -৮', 'Special Judge -8', 18, NULL, NULL),
(798, 'বিশেষ জজ -৯', 'Special Judge -9', 18, NULL, NULL),
(799, 'বিশেষ জজ -১০', 'Special Judge -10', 18, NULL, NULL),
(800, 'পরিবেশ আপীল আদালত', 'Environment Court of Appeal', 18, NULL, NULL),
(801, 'পরিবেশ আদালত', 'Environment Court', 18, NULL, NULL),
(802, 'সাইবার ট্রাইব্যুনাল', 'Cyber tribunal', 18, NULL, NULL),
(803, 'প্রশাসনিক আপীলেট ট্রাইব্যুনাল', 'Administrative Appeal Tribunal', 18, NULL, NULL),
(804, 'প্রশাসনিক ট্রাইব্যুনাল-১,', 'Administrative Tribunal-1,', 18, NULL, NULL),
(805, 'প্রশাসনিক ট্রাইব্যুনাল-২', 'Administrative Tribunal-2', 18, NULL, NULL),
(806, 'প্রশাসনিক ট্রাইব্যুনাল-৩', 'Administrative Tribunal-3', 18, NULL, NULL),
(807, 'প্রথম কোর্ট অফ সেটেলমেন্ট ', 'First Court of Settlement', 18, NULL, NULL),
(808, 'দ্বিতীয় কোর্ট অফ সেটেলমেন্ট ', 'Second Court of Settlement', 18, NULL, NULL),
(809, 'শ্রম আপীল ট্রাইব্যুনাল', 'Labor Appeals Tribunal', 18, NULL, NULL),
(810, '১ম শ্রম আদালত', '1st Labor Court', 18, NULL, NULL),
(811, '২য় শ্রম আদালত', '2nd Labor Court', 18, NULL, NULL),
(812, '৩য় শ্রম আদালত', '3rd  Labor Court', 18, NULL, NULL),
(813, 'কাস্টমস এক্সাইজ এন্ড ভ্যাট আপীলেট ট্রাইব্যুনাল', 'Customs Excise and VAT Appellate Tribunal', 18, NULL, NULL),
(814, 'ট্যাক্সেস আপীলেট ট্রাইব্যুনাল', 'Taxes Appellate Tribunal', 18, NULL, NULL),
(815, 'স্পেশাল ট্রাইব্যুনাল, সিকিউরিতিজ এন্ড এক্সচেঞ্জ কমিশন', 'Special Tribunal, Securities and Exchange Commission', 18, NULL, NULL),
(816, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 18, NULL, NULL),
(817, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 18, NULL, NULL),
(818, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 18, NULL, NULL),
(819, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 18, NULL, NULL),
(820, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 18, NULL, NULL),
(821, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 18, NULL, NULL),
(822, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 18, NULL, NULL),
(823, 'শিশু আদালত', 'Children\'s Court', 18, NULL, NULL),
(824, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 18, NULL, NULL),
(825, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 18, NULL, NULL),
(826, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 18, NULL, NULL),
(827, 'জেলা জজ আদালত', 'District Judge Court', 18, NULL, NULL),
(828, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 18, NULL, NULL),
(829, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 18, NULL, NULL),
(830, 'অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3', 18, NULL, NULL),
(831, 'অতিরিক্ত জেলা ও দায়রা জজ -৪', 'Additional District and Sessions Judge -4', 18, NULL, NULL),
(832, 'অতিরিক্ত জেলা ও দায়রা জজ -৫', 'Additional District and Sessions Judge -5', 18, NULL, NULL),
(833, 'অতিরিক্ত জেলা ও দায়রা জজ -৬', 'Additional District and Sessions Judge -6', 18, NULL, NULL),
(834, 'অতিরিক্ত জেলা ও দায়রা জজ -৭', 'Additional District and Sessions Judge -7', 18, NULL, NULL),
(835, 'অতিরিক্ত জেলা ও দায়রা জজ -৮', 'Additional District and Sessions Judge -8', 18, NULL, NULL),
(836, 'অতিরিক্ত জেলা ও দায়রা জজ, দেউলিয়া বিষয়ক', 'Additional District and Sessions Judge, Bankruptcy matters', 18, NULL, NULL),
(837, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 18, NULL, NULL),
(838, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 18, NULL, NULL),
(839, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 18, NULL, NULL),
(840, 'যুগ্ম জেলা ও দায়রা জজ -৪', 'Joint District and Sessions Judge -4', 18, NULL, NULL),
(841, 'যুগ্ম জেলা ও দায়রা জজ -৫', 'Joint District and Sessions Judge -5', 18, NULL, NULL),
(842, 'যুগ্ম জেলা ও দায়রা জজ, অতিরিক্ত আদালত', 'Joint District and Sessions Judge, Additional court', 18, NULL, NULL),
(843, 'যুগ্ম জেলা ও দায়রা জজ, আরবিট্রেশন আদালত', 'Joint District and Sessions Judge, Arbitration Court', 18, NULL, NULL),
(844, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 18, NULL, NULL),
(845, 'অর্থঋণ আদালত নং-১', 'Money laundering court no-1', 18, NULL, NULL),
(846, 'অর্থঋণ আদালত নং-২', 'Money laundering court no-2', 18, NULL, NULL),
(847, 'অর্থঋণ আদালত নং-৩', 'Money laundering court no-3', 18, NULL, NULL),
(848, 'অর্থঋণ আদালত নং-৪', 'Money laundering court no-4', 18, NULL, NULL),
(849, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 18, NULL, NULL),
(850, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 18, NULL, NULL),
(851, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 18, NULL, NULL),
(852, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 18, NULL, NULL),
(853, 'সিনিয়র সহকারী জজ -৫', 'Senior Assistant Judge -5', 18, NULL, NULL),
(854, 'সিনিয়র সহকারী জজ -৬', 'Senior Assistant Judge -6', 18, NULL, NULL),
(855, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 18, NULL, NULL),
(856, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 18, NULL, NULL),
(857, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 18, NULL, NULL),
(858, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 18, NULL, NULL),
(859, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 18, NULL, NULL),
(860, 'সহকারী জজ -১', 'Assistant Judge -1', 18, NULL, NULL),
(861, 'সহকারী জজ -২', 'Assistant Judge -2', 18, NULL, NULL),
(862, 'সহকারী জজ -৩', 'Assistant Judge -3', 18, NULL, NULL),
(863, 'জেলা জজ আদালত', 'District Judge Court', 58, NULL, NULL),
(864, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 58, NULL, NULL),
(865, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 58, NULL, NULL),
(866, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 58, NULL, NULL),
(867, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 58, NULL, NULL),
(868, 'সহকারী জজ -১', 'Assistant Judge -1', 58, NULL, NULL),
(869, 'সহকারী জজ -২', 'Assistant Judge -2', 58, NULL, NULL),
(870, 'সহকারী জজ -৩', 'Assistant Judge -3', 58, NULL, NULL),
(871, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 58, NULL, NULL),
(872, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 58, NULL, NULL),
(873, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 58, NULL, NULL),
(874, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 58, NULL, NULL),
(875, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 58, NULL, NULL),
(876, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 58, NULL, NULL),
(877, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 58, NULL, NULL),
(878, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 58, NULL, NULL),
(879, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 58, NULL, NULL),
(880, 'শিশু আদালত', 'Children\'s Court', 58, NULL, NULL),
(881, 'শিশু আদালত', 'Children\'s Court', 46, NULL, NULL),
(882, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 46, NULL, NULL),
(883, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 46, NULL, NULL),
(884, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 46, NULL, NULL),
(885, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 46, NULL, NULL),
(886, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 46, NULL, NULL),
(887, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 46, NULL, NULL),
(888, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 46, NULL, NULL),
(889, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 46, NULL, NULL),
(890, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 46, NULL, NULL),
(891, 'জেলা জজ আদালত', 'District Judge Court', 46, NULL, NULL),
(892, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 46, NULL, NULL),
(893, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 46, NULL, NULL),
(894, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 46, NULL, NULL),
(895, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 46, NULL, NULL),
(896, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 46, NULL, NULL),
(897, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 46, NULL, NULL),
(898, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 46, NULL, NULL),
(899, 'সহকারী জজ -১', 'Assistant Judge -1', 46, NULL, NULL),
(900, 'সহকারী জজ -২', 'Assistant Judge -2', 46, NULL, NULL),
(901, 'সহকারী জজ -৩', 'Assistant Judge -3', 46, NULL, NULL),
(902, 'সহকারী জজ -৪', 'Assistant Judge -4', 46, NULL, NULL),
(903, 'জেলা জজ আদালত', 'District Judge Court', 51, NULL, NULL),
(904, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 51, NULL, NULL),
(905, 'দ্রুত বিচার ট্রাইব্যুনাল নং-১', 'Speedy Trial Tribunal No.-1', 51, NULL, NULL),
(906, 'বিভাগীয় বিশেষ জজ', 'Departmental Special Judge', 51, NULL, NULL),
(907, 'জননিরাপত্তা বিঘ্নকারী অপরাধ দমন ট্রাইব্যুনাল', 'Public safety prevention crime prevention tribunal', 51, NULL, NULL),
(908, '১ম শ্রম আদালত', '1st Labor Court', 51, NULL, NULL),
(909, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 51, NULL, NULL),
(910, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-২', 'Women and Children Repression Repression Tribunal No.-2', 51, NULL, NULL),
(911, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 51, NULL, NULL),
(912, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 51, NULL, NULL),
(913, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 51, NULL, NULL),
(914, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 51, NULL, NULL),
(915, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 51, NULL, NULL),
(916, 'অর্থঋণ আদালত নং-১', 'Money laundering court no-1', 51, NULL, NULL),
(917, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 51, NULL, NULL),
(918, 'সিনিয়র সহকারী জজ -২ Mohammad Manirojjaman', 'Senior Assistant Judge -2 Mohammad Manirojjaman', 51, NULL, NULL),
(919, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 51, NULL, NULL),
(920, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 51, NULL, NULL),
(921, 'সিনিয়র সহকারী জজ -৫', 'Senior Assistant Judge -5', 51, NULL, NULL),
(922, 'সিনিয়র সহকারী জজ -৬', 'Senior Assistant Judge -6', 51, NULL, NULL),
(923, 'সহকারী জজ -১', 'Assistant Judge -1', 51, NULL, NULL),
(924, 'সহকারী জজ -২', 'Assistant Judge -2', 51, NULL, NULL),
(925, 'সহকারী জজ -৩', 'Assistant Judge -3', 51, NULL, NULL),
(926, 'সহকারী জজ -৪', 'Assistant Judge -4', 51, NULL, NULL),
(927, 'সহকারী জজ -৫', 'Assistant Judge -5', 51, NULL, NULL),
(928, 'সহকারী জজ -৬', 'Assistant Judge -6', 51, NULL, NULL),
(929, 'সহকারী জজ -৭', 'Assistant Judge -7', 51, NULL, NULL),
(930, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 51, NULL, NULL),
(931, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 51, NULL, NULL),
(932, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 51, NULL, NULL),
(933, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 51, NULL, NULL),
(934, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 51, NULL, NULL),
(935, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 51, NULL, NULL),
(936, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 51, NULL, NULL),
(937, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 51, NULL, NULL),
(938, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 51, NULL, NULL),
(939, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 51, NULL, NULL),
(940, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 51, NULL, NULL),
(941, 'শিশু আদালত', 'Children\'s Court', 51, NULL, NULL),
(942, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 51, NULL, NULL),
(943, 'মহানগর দায়রা জজ আদালত', 'Metropolitan Sessions Judge Court', 51, NULL, NULL),
(944, 'অতিরিক্ত মহানগর দায়রা জজ -১', 'Additional Metropolitan Sessions Judge -1', 51, NULL, NULL),
(945, 'যুগ্ম মহানগর দায়রা জজ -১', 'Joint Metropolitan Sessions Judge -1', 51, NULL, NULL),
(946, 'যুগ্ম মহানগর দায়রা জজ -২', 'Joint Metropolitan Sessions Judge -2', 51, NULL, NULL),
(947, 'চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত', 'Chief Metropolitan Magistrate Court', 51, NULL, NULL),
(948, 'অতিরিক্ত চীফ মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত ', 'Additional Chief Metropolitan Magistrate Court ', 51, NULL, NULL),
(949, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -১', 'Metropolitan Magistrate Court -1', 51, NULL, NULL),
(950, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -২', 'Metropolitan Magistrate Court -2', 51, NULL, NULL),
(951, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৩', 'Metropolitan Magistrate Court -3', 51, NULL, NULL),
(952, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৪', 'Metropolitan Magistrate Court -4', 51, NULL, NULL),
(953, 'মেট্রোপলিটন ম্যাজিস্ট্রেট আদালত -৫', 'Metropolitan Magistrate Court -5', 51, NULL, NULL),
(954, 'শিশু আদালত', 'Children\'s Court', 51, NULL, NULL),
(955, 'জেলা জজ আদালত', 'District Judge Court', 57, NULL, NULL),
(956, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 57, NULL, NULL),
(957, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 57, NULL, NULL),
(958, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 57, NULL, NULL),
(959, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 57, NULL, NULL),
(960, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 57, NULL, NULL),
(961, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 57, NULL, NULL),
(962, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 57, NULL, NULL),
(963, 'সহকারী জজ -১', 'Assistant Judge -1', 57, NULL, NULL),
(964, 'সহকারী জজ -২', 'Assistant Judge -2', 57, NULL, NULL),
(965, 'সহকারী জজ -৩', 'Assistant Judge -3', 57, NULL, NULL),
(966, 'সহকারী জজ -৪', 'Assistant Judge -4', 57, NULL, NULL),
(967, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 57, NULL, NULL),
(968, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 57, NULL, NULL),
(969, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 57, NULL, NULL),
(970, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 57, NULL, NULL),
(971, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 57, NULL, NULL),
(972, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 57, NULL, NULL),
(973, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 57, NULL, NULL),
(974, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 57, NULL, NULL),
(975, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 57, NULL, NULL),
(976, 'শিশু আদালত', 'Children\'s Court', 57, NULL, NULL),
(977, 'জেলা জজ আদালত', 'District Judge Court', 45, NULL, NULL),
(978, '   জনাব মোহাঃ ইমদাদুল হক, অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1 (Mr. Mohammed Imdadul Haque)', 45, NULL, NULL),
(979, 'বেগম ইসরাত জাহান, অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2 (Begum Israt Jahan)', 45, NULL, NULL),
(980, 'জনাব মোঃ গোলাম ফারক, অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3 (Mr. Md. Golam Farak)', 45, NULL, NULL),
(981, 'অর্থঋণ আদালত নং-১', 'Money laundering court no-1', 45, NULL, NULL),
(982, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 45, NULL, NULL),
(983, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 45, NULL, NULL),
(984, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 45, NULL, NULL),
(985, 'জনাব কৌশিক আহাম্মদ খোন্দকার, সহকারী জজ, সদর প্রথম সিনিয়র সহকারী জজ আদালত', 'Mr. Kaushik Ahmed Khondker, Assistant Judge, First Senior Assistant Judge Court', 45, NULL, NULL),
(986, 'জনাব কৌশিক আহাম্মদ খোন্দকার, সহকারী জজ, সদর ২য় সিনিয়র সহকারী জজ আদালত ', 'Mr. Kaushik Ahmad Khandker, Assistant Judge, Second Senior Assistant Judge Court', 45, NULL, NULL),
(987, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 45, NULL, NULL),
(988, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 45, NULL, NULL),
(989, 'সিনিয়র সহকারী জজ -৫', 'Senior Assistant Judge -5', 45, NULL, NULL),
(990, 'সহকারী জজ আদালত, কাহালু', 'Assistant Judge Court, Kahalu', 45, NULL, NULL),
(991, 'জনাব কে এম শাহরিয়ার শহীদ বাপ্পী,, সহকারী জজ, ধুপচাচিয়া  ', 'Mr. KM Shahriar Shahid Bappi, Assistant Judge, Dupchanchia', 45, NULL, NULL),
(992, 'জনাব মিলন চন্দ্র পাল, সহকারী জজ, ধুনট', 'Mr. Milon Chandra Pal, Assistant Judge, Dhunat', 45, NULL, NULL),
(993, 'বেগম মোছাঃ আসমা মাহমুদ, সহকারী জজ, আদমদীঘী ', 'Begum Mashah: Asma Mahmud, Assistant Judge, Adamdighi', 45, NULL, NULL),
(994, 'নন্দীগ্রাম সহকারী জজ আদালত ', 'Nandigram Assistant Judge Court', 45, NULL, NULL),
(995, 'বেগম মোছাঃ রেশমা খাতুন, সহকারী জজ, গাবতলী', 'Begum Mukesh: Reshma Khatun, Assistant Judge, Gabtali', 45, NULL, NULL),
(996, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 45, NULL, NULL),
(997, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 45, NULL, NULL),
(998, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 45, NULL, NULL),
(999, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 45, NULL, NULL),
(1000, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 45, NULL, NULL),
(1001, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 45, NULL, NULL),
(1002, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 45, NULL, NULL),
(1003, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 45, NULL, NULL),
(1004, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 45, NULL, NULL),
(1005, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 45, NULL, NULL),
(1006, 'শিশু আদালত', 'Children\'s Court', 45, NULL, NULL),
(1007, 'জেলা জজ আদালত', 'District Judge Court', 56, NULL, NULL),
(1008, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 56, NULL, NULL),
(1009, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 56, NULL, NULL),
(1010, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 56, NULL, NULL),
(1011, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 56, NULL, NULL),
(1012, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 56, NULL, NULL),
(1013, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 56, NULL, NULL),
(1014, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 56, NULL, NULL),
(1015, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 56, NULL, NULL),
(1016, 'সহকারী জজ -১', 'Assistant Judge -1', 56, NULL, NULL),
(1017, 'সহকারী জজ -২', 'Assistant Judge -2', 56, NULL, NULL),
(1018, 'সহকারী জজ -৩', 'Assistant Judge -3', 56, NULL, NULL),
(1019, 'সহকারী জজ -৪', 'Assistant Judge -4', 56, NULL, NULL),
(1020, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 56, NULL, NULL),
(1021, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 56, NULL, NULL),
(1022, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 56, NULL, NULL),
(1023, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 56, NULL, NULL),
(1024, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 56, NULL, NULL),
(1025, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 56, NULL, NULL),
(1026, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 56, NULL, NULL),
(1027, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 56, NULL, NULL),
(1028, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 56, NULL, NULL),
(1029, 'শিশু আদালত', 'Children\'s Court', 56, NULL, NULL),
(1030, 'জেলা জজ আদালত', 'District Judge Court', 19, NULL, NULL),
(1031, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 19, NULL, NULL),
(1032, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 19, NULL, NULL),
(1033, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 19, NULL, NULL),
(1034, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 19, NULL, NULL),
(1035, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 19, NULL, NULL),
(1036, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 19, NULL, NULL),
(1037, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 19, NULL, NULL),
(1038, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 19, NULL, NULL),
(1039, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 19, NULL, NULL),
(1040, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 19, NULL, NULL),
(1041, 'সহকারী জজ -১', 'Assistant Judge -1', 19, NULL, NULL),
(1042, 'সহকারী জজ -২', 'Assistant Judge -2', 19, NULL, NULL),
(1043, 'সহকারী জজ -৩', 'Assistant Judge -3', 19, NULL, NULL),
(1044, 'সহকারী জজ -৪', 'Assistant Judge -4', 19, NULL, NULL),
(1045, 'সহকারী জজ -৫', 'Assistant Judge -5', 19, NULL, NULL),
(1046, 'বিশেষ জজ -১', 'Special Judge -1', 19, NULL, NULL),
(1047, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 19, NULL, NULL),
(1048, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 19, NULL, NULL),
(1049, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 19, NULL, NULL),
(1050, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 19, NULL, NULL),
(1051, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 19, NULL, NULL),
(1052, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 19, NULL, NULL),
(1053, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 19, NULL, NULL),
(1054, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 19, NULL, NULL),
(1055, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 19, NULL, NULL),
(1056, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 19, NULL, NULL),
(1057, 'শিশু আদালত', 'Children\'s Court', 19, NULL, NULL),
(1058, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 19, NULL, NULL),
(1059, 'জেলা জজ আদালত', 'District Judge Court', 55, NULL, NULL),
(1060, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 55, NULL, NULL),
(1061, 'প্রশাসনিক আপীল ট্রাইব্যুনাল', 'Administrative Appeal Tribunal', 0, NULL, NULL),
(1062, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 55, NULL, NULL),
(1063, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 55, NULL, NULL),
(1064, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 55, NULL, NULL),
(1065, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 55, NULL, NULL),
(1066, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 55, NULL, NULL),
(1067, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 55, NULL, NULL),
(1068, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 55, NULL, NULL),
(1069, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 55, NULL, NULL),
(1070, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 55, NULL, NULL),
(1071, 'সহকারী জজ -১', 'Assistant Judge -1', 55, NULL, NULL),
(1072, 'সহকারী জজ -২', 'Assistant Judge -2', 55, NULL, NULL),
(1073, 'সহকারী জজ -৩', 'Assistant Judge -3', 55, NULL, NULL),
(1074, 'সহকারী জজ -৪', 'Assistant Judge -4', 55, NULL, NULL),
(1075, 'সহকারী জজ -৫', 'Assistant Judge -5', 55, NULL, NULL),
(1076, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 55, NULL, NULL),
(1077, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 55, NULL, NULL),
(1078, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 55, NULL, NULL),
(1079, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 55, NULL, NULL),
(1080, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 55, NULL, NULL),
(1081, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 55, NULL, NULL),
(1082, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 55, NULL, NULL),
(1083, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 55, NULL, NULL),
(1084, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 55, NULL, NULL),
(1085, 'শিশু আদালত', 'Children\'s Court', 55, NULL, NULL),
(1086, 'জেলা জজ আদালত', 'District Judge Court', 54, NULL, NULL),
(1087, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 54, NULL, NULL),
(1088, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 54, NULL, NULL),
(1089, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 54, NULL, NULL),
(1090, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 54, NULL, NULL),
(1091, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 54, NULL, NULL),
(1092, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 54, NULL, NULL),
(1093, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 54, NULL, NULL),
(1094, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 54, NULL, NULL),
(1095, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 54, NULL, NULL),
(1096, 'সহকারী জজ -১', 'Assistant Judge -1', 54, NULL, NULL),
(1097, 'সহকারী জজ -২', 'Assistant Judge -2', 54, NULL, NULL),
(1098, 'সহকারী জজ -৩', 'Assistant Judge -3', 54, NULL, NULL),
(1099, 'সহকারী জজ -৪', 'Assistant Judge -4', 54, NULL, NULL),
(1100, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 54, NULL, NULL),
(1101, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 54, NULL, NULL),
(1102, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 54, NULL, NULL),
(1103, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 54, NULL, NULL),
(1104, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 54, NULL, NULL),
(1105, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 54, NULL, NULL),
(1106, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 54, NULL, NULL),
(1107, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 54, NULL, NULL),
(1108, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 54, NULL, NULL),
(1109, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 54, NULL, NULL),
(1110, 'শিশু আদালত', 'Children\'s Court', 54, NULL, NULL),
(1111, 'জেলা জজ আদালত', 'District Judge Court', 28, NULL, NULL),
(1112, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 28, NULL, NULL),
(1113, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 28, NULL, NULL),
(1114, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 28, NULL, NULL),
(1115, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 28, NULL, NULL),
(1116, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 28, NULL, NULL),
(1117, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 28, NULL, NULL),
(1118, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 28, NULL, NULL),
(1119, 'সহকারী জজ -১', 'Assistant Judge -1', 28, NULL, NULL),
(1120, 'সহকারী জজ -২', 'Assistant Judge -2', 28, NULL, NULL),
(1121, 'সহকারী জজ -৩', 'Assistant Judge -3', 28, NULL, NULL),
(1122, 'সহকারী জজ -৪', 'Assistant Judge -4', 28, NULL, NULL),
(1123, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 28, NULL, NULL),
(1124, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 28, NULL, NULL),
(1125, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 28, NULL, NULL),
(1126, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 28, NULL, NULL),
(1127, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 28, NULL, NULL),
(1128, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 28, NULL, NULL),
(1129, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 28, NULL, NULL),
(1130, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 28, NULL, NULL),
(1131, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 28, NULL, NULL),
(1132, 'শিশু আদালত', 'Children\'s Court', 28, NULL, NULL),
(1133, 'জেলা জজ আদালত', 'District Judge Court', 21, NULL, NULL),
(1134, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 21, NULL, NULL),
(1135, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 21, NULL, NULL),
(1136, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 21, NULL, NULL),
(1137, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 21, NULL, NULL),
(1138, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 21, NULL, NULL),
(1139, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 21, NULL, NULL),
(1140, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 21, NULL, NULL),
(1141, 'সহকারী জজ -১', 'Assistant Judge -1', 21, NULL, NULL),
(1142, 'সহকারী জজ -২', 'Assistant Judge -2', 21, NULL, NULL),
(1143, 'সহকারী জজ -৩', 'Assistant Judge -3', 21, NULL, NULL),
(1144, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 21, NULL, NULL),
(1145, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 21, NULL, NULL),
(1146, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 21, NULL, NULL),
(1147, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 21, NULL, NULL),
(1148, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 21, NULL, NULL),
(1149, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 21, NULL, NULL),
(1150, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 21, NULL, NULL),
(1151, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 21, NULL, NULL),
(1152, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 21, NULL, NULL),
(1153, 'শিশু আদালত', 'Children\'s Court', 21, NULL, NULL),
(1154, 'জেলা জজ আদালত', 'District Judge Court', 53, NULL, NULL),
(1155, 'অতিরিক্ত জেলা ও দায়রা জজ, ২য় আদালত', 'Additional District and Sessions Judge, 2nd Court', 53, NULL, NULL),
(1156, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল', 'Women and Children Repression Retention Tribunal', 53, NULL, NULL),
(1157, 'অতিরিক্ত জেলা ও দায়রা জজ, ৩য় আদালত ', 'Additional District and Sessions Judge, 3rd  Court ', 53, NULL, NULL),
(1158, 'যুগ্ম জেলা ও দায়রা জজ, ১ম আদালত', 'Joint District and Sessions Judge, 1st Court', 53, NULL, NULL),
(1159, 'যুগ্ম জেলা ও দায়রা জজ, ২য় আদালত ', 'Joint District and Sessions Judge, 2nd Court ', 53, NULL, NULL),
(1160, 'যুগ্ম জেলা ও দায়রা জজ, ৩য় আদালত ', 'Joint District and Sessions Judge, 3rd  Court ', 53, NULL, NULL),
(1161, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল(এখনো প্রতিষ্ঠিত হয় নি)', 'Land Survey Tribunal (not yet established)', 53, NULL, NULL),
(1162, 'সদর সিনিয়র সহকারী জজ আদালত ', 'Sadar Senior Assistant Judge Court ', 53, NULL, NULL),
(1163, 'পার্বতীপুর সিনিয়র সহকারী জজ আদালত ', 'Parbatipur Senior Assistant Judge Court ', 53, NULL, NULL),
(1164, 'চিরিরবন্দর সিনিয়র সহকারী জজ আদালত', 'Chirirbandar Senior Assistant Judge Court', 53, NULL, NULL),
(1165, 'বিরল সিনিয়র সহকারী জজ আদালত', 'বিরল Senior Assistant Judge Court', 53, NULL, NULL),
(1166, 'বোচাগঞ্জ সহকারী জজ আদালত', 'Bochaganj Assistant Judge Court', 53, NULL, NULL),
(1167, 'ফুলবাড়ি সহকারী জজ আদালত', 'Phulbari Assistant Judge Court', 53, NULL, NULL),
(1168, 'বিরামপুর সহকারী জজ আদালত ', 'Birampur Assistant Judge Court ', 53, NULL, NULL),
(1169, 'নবাবগঞ্জ সহকারী জজ আদালত', 'Nawabganj Assistant Judge Court', 53, NULL, NULL),
(1170, 'কাহারোল সহকারী জজ আদালত', 'Kahorol Assistant Judge Court', 53, NULL, NULL),
(1171, 'ঘোড়াঘাট সহকারী জজ আদালত', 'Ghoraghat Assistant Judge Court', 53, NULL, NULL),
(1172, 'হাকিমপুর সহকারী জজ আদালত', 'Hakimpur Assistant Judge Court', 53, NULL, NULL),
(1173, 'খানসামা সহকারী জজ আদালত', 'Khansama Assistant Judge Court', 53, NULL, NULL),
(1174, 'বীরগঞ্জ সহকারী জজ আদালত', 'Birgajin Assistant Judge Court', 53, NULL, NULL),
(1175, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 53, NULL, NULL),
(1176, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 53, NULL, NULL),
(1177, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 53, NULL, NULL),
(1178, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 53, NULL, NULL),
(1179, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 53, NULL, NULL),
(1180, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 53, NULL, NULL),
(1181, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 53, NULL, NULL),
(1182, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 53, NULL, NULL),
(1183, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 53, NULL, NULL),
(1184, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 53, NULL, NULL),
(1185, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 53, NULL, NULL),
(1186, 'শিশু আদালত', 'Children\'s Court', 53, NULL, NULL),
(1187, 'বিশেষ জজ  আদালত', 'Special Judge  Court', 53, NULL, NULL),
(1188, 'সিনিয়র সহকারী জজ-৫', 'Senior Assistant Judge-5', 53, NULL, NULL),
(1189, 'সহকারী জজ -১০', 'Assistant Judge -10', 53, NULL, NULL),
(1190, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৬', 'Judicial magistrate -6', 53, NULL, NULL),
(1191, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৭', 'Judicial magistrate -7', 53, NULL, NULL),
(1192, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 53, NULL, NULL),
(1193, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 53, NULL, NULL),
(1194, 'জেলা জজ আদালত', 'District Judge Court', 29, NULL, NULL),
(1195, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 29, NULL, NULL),
(1196, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 29, NULL, NULL),
(1197, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 29, NULL, NULL),
(1198, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 29, NULL, NULL),
(1199, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 29, NULL, NULL),
(1200, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 29, NULL, NULL),
(1201, 'সহকারী জজ -১', 'Assistant Judge -1', 29, NULL, NULL),
(1202, 'সহকারী জজ -২', 'Assistant Judge -2', 29, NULL, NULL),
(1203, 'সহকারী জজ -৩', 'Assistant Judge -3', 29, NULL, NULL),
(1204, 'সহকারী জজ -৪', 'Assistant Judge -4', 29, NULL, NULL),
(1205, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 29, NULL, NULL),
(1206, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 29, NULL, NULL),
(1207, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 29, NULL, NULL),
(1208, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 29, NULL, NULL),
(1209, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 29, NULL, NULL),
(1210, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 29, NULL, NULL),
(1211, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 29, NULL, NULL),
(1212, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 29, NULL, NULL),
(1213, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 29, NULL, NULL),
(1214, 'শিশু আদালত', 'Children\'s Court', 29, NULL, NULL),
(1215, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 29, NULL, NULL),
(1216, 'জেলা জজ আদালত', 'District Judge Court', 23, NULL, NULL),
(1217, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 23, NULL, NULL),
(1218, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 23, NULL, NULL),
(1219, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 23, NULL, NULL),
(1220, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 23, NULL, NULL),
(1221, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 23, NULL, NULL),
(1222, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 23, NULL, NULL),
(1223, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 23, NULL, NULL),
(1224, 'সহকারী জজ -১', 'Assistant Judge -1', 23, NULL, NULL),
(1225, 'সহকারী জজ -২', 'Assistant Judge -2', 23, NULL, NULL),
(1226, 'সহকারী জজ -৩', 'Assistant Judge -3', 23, NULL, NULL),
(1227, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 23, NULL, NULL),
(1228, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 23, NULL, NULL),
(1229, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 23, NULL, NULL),
(1230, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 23, NULL, NULL),
(1231, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 23, NULL, NULL),
(1232, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 23, NULL, NULL),
(1233, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 23, NULL, NULL),
(1234, 'শিশু আদালত', 'Children\'s Court', 23, NULL, NULL),
(1235, 'জেলা জজ আদালত', 'District Judge Court', 27, NULL, NULL),
(1236, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 27, NULL, NULL),
(1237, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 27, NULL, NULL),
(1238, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 27, NULL, NULL),
(1239, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 27, NULL, NULL),
(1240, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 27, NULL, NULL),
(1241, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 27, NULL, NULL),
(1242, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 27, NULL, NULL),
(1243, 'সহকারী জজ -১', 'Assistant Judge -1', 27, NULL, NULL),
(1244, 'সহকারী জজ -২', 'Assistant Judge -2', 27, NULL, NULL),
(1245, 'সহকারী জজ -৩', 'Assistant Judge -3', 27, NULL, NULL),
(1246, 'সহকারী জজ -৪', 'Assistant Judge -4', 27, NULL, NULL),
(1247, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 27, NULL, NULL),
(1248, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 27, NULL, NULL),
(1249, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 27, NULL, NULL),
(1250, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 27, NULL, NULL),
(1251, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 27, NULL, NULL),
(1252, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 27, NULL, NULL),
(1253, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 27, NULL, NULL),
(1254, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 27, NULL, NULL),
(1255, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 27, NULL, NULL),
(1256, 'শিশু আদালত', 'Children\'s Court', 27, NULL, NULL),
(1257, 'জেলা জজ আদালত', 'District Judge Court', 7, NULL, NULL),
(1258, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 7, NULL, NULL),
(1259, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 7, NULL, NULL),
(1260, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 7, NULL, NULL),
(1261, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 7, NULL, NULL),
(1262, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 7, NULL, NULL),
(1263, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 7, NULL, NULL),
(1264, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট, লামা', 'Senior Judicial Magistrate, Lama', 7, NULL, NULL),
(1265, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 7, NULL, NULL),
(1266, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 7, NULL, NULL),
(1267, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 7, NULL, NULL),
(1268, 'শিশু আদালত', 'Children\'s Court', 7, NULL, NULL),
(1269, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 7, NULL, NULL),
(1270, 'ম্যাজিস্ট্রেট, বন আদালত', 'Magistrate, forest court', 7, NULL, NULL),
(1271, 'বিশুদ্ধ খাদ্য আদালত', 'Pure Food Court', 7, NULL, NULL),
(1272, 'দ্রুত বিচার আদালত', 'Quick trial court', 7, NULL, NULL),
(1273, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 7, NULL, NULL),
(1274, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 7, NULL, NULL),
(1275, 'জেলা জজ আদালত', 'District Judge Court', 30, NULL, NULL),
(1276, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 30, NULL, NULL),
(1277, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 30, NULL, NULL),
(1278, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 30, NULL, NULL),
(1279, 'সিনিয়র সহকারী জজ অাদালত, সদর', 'Senior Assistant Judge Court, Sadar', 30, NULL, NULL),
(1280, 'সিনিয়র সহকারী জজ অাদালত,  মির্জাপুর', 'Senior Assistant Judge Adalat, Mirzapur', 30, NULL, NULL),
(1281, 'সিনিয়র সহকারী জজ অাদালত, কালিহাতি', 'Senior Assistant Judge Adalat, Kalihati', 30, NULL, NULL),
(1282, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 30, NULL, NULL),
(1283, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 30, NULL, NULL),
(1284, 'যুগ্ম জেলা ও দায়রা জজ -৪', 'Joint District and Sessions Judge -4', 30, NULL, NULL);
INSERT INTO `courts` (`id`, `name_bn`, `name_en`, `disid`, `created_at`, `updated_at`) VALUES
(1285, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 30, NULL, NULL),
(1286, 'সিনিয়র সহকারী জজ অাদালত, মধুপুর', 'Senior Assistant Judge Court, Madhupur', 30, NULL, NULL),
(1287, 'সিনিয়র সহকারী জজ অাদালত, নাগরপুর', 'Senior Assistant Judge Court, Nagarpur', 30, NULL, NULL),
(1288, 'সহকারী জজ অাদালত, ঘাটাইল', 'Assistant Judge Court, Ghatail', 30, NULL, NULL),
(1289, 'সহকারী জজ অাদালত, ভুয়াপুর ', 'Assistant Judge Court, Bhuapur', 30, NULL, NULL),
(1290, 'সহকারী জজ অাদালত, গোপালপুর', 'Assistant Judge Court, Gopalpur', 30, NULL, NULL),
(1291, 'সহকারী জজ অাদালত, সখিপুর', 'Assistant Judge Court, Sakhipur.', 30, NULL, NULL),
(1292, 'সহকারী জজ অাদালত, দেলদুয়ার', 'Assistant Judge Court, Delduar', 30, NULL, NULL),
(1293, 'সহকারী জজ অাদালত, বাসাইল ', 'Assistant Judge Court, Basile', 30, NULL, NULL),
(1294, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 30, NULL, NULL),
(1295, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 30, NULL, NULL),
(1296, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 30, NULL, NULL),
(1297, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 30, NULL, NULL),
(1298, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 30, NULL, NULL),
(1299, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 30, NULL, NULL),
(1300, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Senior Judicial Magistrate -5', 30, NULL, NULL),
(1301, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 30, NULL, NULL),
(1302, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 30, NULL, NULL),
(1303, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 30, NULL, NULL),
(1304, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 30, NULL, NULL),
(1305, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 30, NULL, NULL),
(1306, 'বিশেষ জজ -১', 'Special Judge -1', 30, NULL, NULL),
(1307, 'শিশু আদালত', 'Children\'s Court', 30, NULL, NULL),
(1308, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 30, NULL, NULL),
(1309, 'ম্যাজিস্ট্রেট বন আদালত ১', 'Magistrates Forest Court 1', 30, NULL, NULL),
(1310, 'জেলা জজ আদালত', 'District Judge Court', 8, NULL, NULL),
(1311, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 8, NULL, NULL),
(1312, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 8, NULL, NULL),
(1313, 'অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3', 8, NULL, NULL),
(1314, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 8, NULL, NULL),
(1315, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 8, NULL, NULL),
(1316, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 8, NULL, NULL),
(1317, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 8, NULL, NULL),
(1318, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 8, NULL, NULL),
(1319, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 8, NULL, NULL),
(1320, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 8, NULL, NULL),
(1321, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 8, NULL, NULL),
(1322, 'সহকারী জজ -১', 'Assistant Judge -1', 8, NULL, NULL),
(1323, 'সহকারী জজ -২', 'Assistant Judge -2', 8, NULL, NULL),
(1324, 'সহকারী জজ -৩', 'Assistant Judge -3', 8, NULL, NULL),
(1325, 'সহকারী জজ -৪', 'Assistant Judge -4', 8, NULL, NULL),
(1326, 'সহকারী জজ -৫', 'Assistant Judge -5', 8, NULL, NULL),
(1327, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 8, NULL, NULL),
(1328, 'বিশেষ জজ -১', 'Special Judge -1', 8, NULL, NULL),
(1329, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 8, NULL, NULL),
(1330, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 8, NULL, NULL),
(1331, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 8, NULL, NULL),
(1332, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 8, NULL, NULL),
(1333, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 8, NULL, NULL),
(1334, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 8, NULL, NULL),
(1335, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 8, NULL, NULL),
(1336, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 8, NULL, NULL),
(1337, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 8, NULL, NULL),
(1338, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 8, NULL, NULL),
(1339, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 8, NULL, NULL),
(1340, 'শিশু আদালত', 'Children\'s Court', 8, NULL, NULL),
(1341, 'জেলা জজ আদালত', 'District Judge Court', 9, NULL, NULL),
(1342, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 9, NULL, NULL),
(1343, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 9, NULL, NULL),
(1344, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 9, NULL, NULL),
(1345, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 9, NULL, NULL),
(1346, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 9, NULL, NULL),
(1347, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 9, NULL, NULL),
(1348, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 9, NULL, NULL),
(1349, 'সহকারী জজ -১', 'Assistant Judge -1', 9, NULL, NULL),
(1350, 'সহকারী জজ -২', 'Assistant Judge -2', 9, NULL, NULL),
(1351, 'সহকারী জজ -৩', 'Assistant Judge -3', 9, NULL, NULL),
(1352, 'সহকারী জজ -৪', 'Assistant Judge -4', 9, NULL, NULL),
(1353, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 9, NULL, NULL),
(1354, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 9, NULL, NULL),
(1355, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 9, NULL, NULL),
(1356, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 9, NULL, NULL),
(1357, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 9, NULL, NULL),
(1358, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 9, NULL, NULL),
(1359, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 9, NULL, NULL),
(1360, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 9, NULL, NULL),
(1361, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 9, NULL, NULL),
(1362, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 9, NULL, NULL),
(1363, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 9, NULL, NULL),
(1364, 'শিশু আদালত', 'Children\'s Court', 9, NULL, NULL),
(1365, 'জেলা জজ আদালত', 'District Judge Court', 11, NULL, NULL),
(1366, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 11, NULL, NULL),
(1367, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 11, NULL, NULL),
(1368, 'অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3', 11, NULL, NULL),
(1369, 'অতিরিক্ত জেলা ও দায়রা জজ -৪', 'Additional District and Sessions Judge -4', 11, NULL, NULL),
(1370, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 11, NULL, NULL),
(1371, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 11, NULL, NULL),
(1372, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 11, NULL, NULL),
(1373, 'যুগ্ম জেলা ও দায়রা জজ -৪', 'Joint District and Sessions Judge -4', 11, NULL, NULL),
(1374, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 11, NULL, NULL),
(1375, 'সিনিয়র সহকারী জজ -সদর ', 'Senior Assistant Judge -Sadar ', 11, NULL, NULL),
(1376, 'সিনিয়র সহকারী জজ -দাউদকান্দি ', 'Senior Assistant Judge -Daudkandi', 11, NULL, NULL),
(1377, 'সিনিয়র সহকারী জজ -মুরাদনগর ', 'Senior Assistant Judge -Muradnagar', 11, NULL, NULL),
(1378, 'সহকারী জজ -হোমনা ', 'Assistant Judge -Homa', 11, NULL, NULL),
(1379, 'সহকারী জজ -নাংগলকোট', 'Assistant Judge -Nangalkot', 11, NULL, NULL),
(1380, 'সহকারী জজ -বুড়িচং ', 'Assistant Judge -Burichang', 11, NULL, NULL),
(1381, 'সহকারী জজ -দেবিদ্বার ', 'Assistant Judge -Lewdbara', 11, NULL, NULL),
(1382, 'সহকারী জজ -বরুড়া ', 'Assistant Judge -Barura', 11, NULL, NULL),
(1383, 'সহকারী জজ -চান্দিনা ', 'Assistant Judge -Chandina', 11, NULL, NULL),
(1384, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 11, NULL, NULL),
(1385, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 11, NULL, NULL),
(1386, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 11, NULL, NULL),
(1387, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 11, NULL, NULL),
(1388, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 11, NULL, NULL),
(1389, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 11, NULL, NULL),
(1390, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 11, NULL, NULL),
(1391, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 11, NULL, NULL),
(1392, 'শিশু আদালত', 'Children\'s Court', 11, NULL, NULL),
(1393, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 11, NULL, NULL),
(1394, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 11, NULL, NULL),
(1395, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 11, NULL, NULL),
(1396, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 11, NULL, NULL),
(1397, 'বিশেষ জজ -১', 'Special Judge -1', 11, NULL, NULL),
(1398, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 11, NULL, NULL),
(1399, 'জননিরাপত্তা বিঘ্নকারী অপরাধ দমন ট্রাইব্যুনাল', 'Public safety prevention crime prevention tribunal', 11, NULL, NULL),
(1400, 'সিনিয়র সহকারী জজ -লাকসাম ', 'Senior Assistant Judge -Laksam', 11, NULL, NULL),
(1401, 'সিনিয়র সহকারী জজ -চৌদ্দগ্রাম ', 'Senior Assistant Judge -Chauddagram', 11, NULL, NULL),
(1402, 'সহকারী জজ -ব্রাহ্মণপাড়া ', 'Assistant Judge -Brahmanpara', 11, NULL, NULL),
(1403, 'জেলা জজ আদালত', 'District Judge Court', 64, NULL, NULL),
(1404, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 64, NULL, NULL),
(1405, 'অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3', 64, NULL, NULL),
(1406, 'অতিরিক্ত জেলা ও দায়রা জজ -৪', 'Additional District and Sessions Judge -4', 64, NULL, NULL),
(1407, 'অতিরিক্ত জেলা ও দায়রা জজ -৫', 'Additional District and Sessions Judge -5', 64, NULL, NULL),
(1408, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 64, NULL, NULL),
(1409, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 64, NULL, NULL),
(1410, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 64, NULL, NULL),
(1411, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 64, NULL, NULL),
(1412, 'যুগ্ম জেলা ও দায়রা জজ, অতিরিক্ত আদালত', 'Joint District and Sessions Judge, Additional court', 64, NULL, NULL),
(1413, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 64, NULL, NULL),
(1414, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 64, NULL, NULL),
(1415, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 64, NULL, NULL),
(1416, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 64, NULL, NULL),
(1417, 'সহকারী জজ আদালত, কানাইঘাট, সিলেট।', 'Assistant Judge Court, Kanaighat', 64, NULL, NULL),
(1418, 'সহকারী জজ আদালত, জকিগঞ্জ, সিলেট', 'Assistant Judge Court, Zakiganj', 64, NULL, NULL),
(1419, 'সহকারী জজ -৩', 'Assistant Judge -3', 64, NULL, NULL),
(1420, 'সহকারী জজ -৪', 'Assistant Judge -4', 64, NULL, NULL),
(1421, 'সহকারী জজ -৫', 'Assistant Judge -5', 64, NULL, NULL),
(1422, 'দ্রুত বিচার ট্রাইব্যুনাল নং-১', 'Speedy Trial Tribunal No.-1', 64, NULL, NULL),
(1423, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 64, NULL, NULL),
(1424, 'জননিরাপত্তা বিঘ্নকারী অপরাধ দমন ট্রাইব্যুনাল', 'Public safety prevention crime prevention tribunal', 64, NULL, NULL),
(1425, 'বিভাগীয় বিশেষ জজ', 'Departmental Special Judge', 64, NULL, NULL),
(1426, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 64, NULL, NULL),
(1427, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 64, NULL, NULL),
(1428, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 64, NULL, NULL),
(1429, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 64, NULL, NULL),
(1430, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 64, NULL, NULL),
(1431, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -জকিগঞ্জ ', 'Senior Judicial Magistrate -Zakiganj ', 64, NULL, NULL),
(1432, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 64, NULL, NULL),
(1433, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 64, NULL, NULL),
(1434, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 64, NULL, NULL),
(1435, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 64, NULL, NULL),
(1436, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 64, NULL, NULL),
(1437, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 64, NULL, NULL),
(1438, 'শিশু আদালত', 'Children\'s Court', 64, NULL, NULL),
(1439, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 64, NULL, NULL),
(1440, 'জেলা জজ আদালত', 'District Judge Court', 13, NULL, NULL),
(1441, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 13, NULL, NULL),
(1442, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 13, NULL, NULL),
(1443, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 13, NULL, NULL),
(1444, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 13, NULL, NULL),
(1445, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 13, NULL, NULL),
(1446, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 13, NULL, NULL),
(1447, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 13, NULL, NULL),
(1448, 'সহকারী জজ -১', 'Assistant Judge -1', 13, NULL, NULL),
(1449, 'সহকারী জজ -২', 'Assistant Judge -2', 13, NULL, NULL),
(1450, 'সহকারী জজ -৩', 'Assistant Judge -3', 13, NULL, NULL),
(1451, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 13, NULL, NULL),
(1452, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 13, NULL, NULL),
(1453, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 13, NULL, NULL),
(1454, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 13, NULL, NULL),
(1455, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 13, NULL, NULL),
(1456, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 13, NULL, NULL),
(1457, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 13, NULL, NULL),
(1458, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 13, NULL, NULL),
(1459, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 13, NULL, NULL),
(1460, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 13, NULL, NULL),
(1461, 'শিশু আদালত', 'Children\'s Court', 13, NULL, NULL),
(1462, 'জেলা জজ আদালত', 'District Judge Court', 12, NULL, NULL),
(1463, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 12, NULL, NULL),
(1464, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 12, NULL, NULL),
(1465, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 12, NULL, NULL),
(1466, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 12, NULL, NULL),
(1467, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 12, NULL, NULL),
(1468, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 12, NULL, NULL),
(1469, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 12, NULL, NULL),
(1470, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 12, NULL, NULL),
(1471, 'সহকারী জজ -১', 'Assistant Judge -1', 12, NULL, NULL),
(1472, 'সহকারী জজ -২', 'Assistant Judge -2', 12, NULL, NULL),
(1473, 'সহকারী জজ -৩', 'Assistant Judge -3', 12, NULL, NULL),
(1474, 'সহকারী জজ -৪', 'Assistant Judge -4', 12, NULL, NULL),
(1475, 'সহকারী জজ -৫', 'Assistant Judge -5', 12, NULL, NULL),
(1476, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 12, NULL, NULL),
(1477, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 12, NULL, NULL),
(1478, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 12, NULL, NULL),
(1479, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 12, NULL, NULL),
(1480, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 12, NULL, NULL),
(1481, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 12, NULL, NULL),
(1482, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 12, NULL, NULL),
(1483, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 12, NULL, NULL),
(1484, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 12, NULL, NULL),
(1485, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 12, NULL, NULL),
(1486, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 12, NULL, NULL),
(1487, 'শিশু আদালত', 'Children\'s Court', 12, NULL, NULL),
(1488, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 12, NULL, NULL),
(1489, 'জেলা জজ আদালত', 'District Judge Court', 22, NULL, NULL),
(1490, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 22, NULL, NULL),
(1491, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 22, NULL, NULL),
(1492, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 22, NULL, NULL),
(1493, 'অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3', 22, NULL, NULL),
(1494, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 22, NULL, NULL),
(1495, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 22, NULL, NULL),
(1496, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 22, NULL, NULL),
(1497, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 22, NULL, NULL),
(1498, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 22, NULL, NULL),
(1499, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 22, NULL, NULL),
(1500, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 22, NULL, NULL),
(1501, 'সহকারী জজ -১', 'Assistant Judge -1', 22, NULL, NULL),
(1502, 'সহকারী জজ -২', 'Assistant Judge -2', 22, NULL, NULL),
(1503, 'সহকারী জজ -৩', 'Assistant Judge -3', 22, NULL, NULL),
(1504, 'সহকারী জজ -৪', 'Assistant Judge -4', 22, NULL, NULL),
(1505, 'সিনিয়র সহকারী জজ -৫', 'Senior Assistant Judge -5', 22, NULL, NULL),
(1506, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 22, NULL, NULL),
(1507, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 22, NULL, NULL),
(1508, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 22, NULL, NULL),
(1509, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 22, NULL, NULL),
(1510, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 22, NULL, NULL),
(1511, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 22, NULL, NULL),
(1512, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Senior Judicial Magistrate -5', 22, NULL, NULL),
(1513, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 22, NULL, NULL),
(1514, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 22, NULL, NULL),
(1515, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 22, NULL, NULL),
(1516, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 22, NULL, NULL),
(1517, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 22, NULL, NULL),
(1518, 'শিশু আদালত', 'Children\'s Court', 22, NULL, NULL),
(1519, 'সহকারী জজ -৫', 'Assistant Judge -5', 22, NULL, NULL),
(1520, 'জেলা জজ আদালত', 'District Judge Court', 26, NULL, NULL),
(1521, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 26, NULL, NULL),
(1522, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 26, NULL, NULL),
(1523, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 26, NULL, NULL),
(1524, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 26, NULL, NULL),
(1525, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 26, NULL, NULL),
(1526, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 26, NULL, NULL),
(1527, 'যুগ্ম জেলা ও দায়রা জজ -৪', 'Joint District and Sessions Judge -4', 26, NULL, NULL),
(1528, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 26, NULL, NULL),
(1529, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 26, NULL, NULL),
(1530, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 26, NULL, NULL),
(1531, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 26, NULL, NULL),
(1532, 'সহকারী জজ -১', 'Assistant Judge -1', 26, NULL, NULL),
(1533, 'সহকারী জজ -২', 'Assistant Judge -2', 26, NULL, NULL),
(1534, 'সহকারী জজ -৩', 'Assistant Judge -3', 26, NULL, NULL),
(1535, 'সহকারী জজ -৪', 'Assistant Judge -4', 26, NULL, NULL),
(1536, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 26, NULL, NULL),
(1537, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 26, NULL, NULL),
(1538, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 26, NULL, NULL),
(1539, 'সহকারী জজ -৫', 'Assistant Judge -5', 26, NULL, NULL),
(1540, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 26, NULL, NULL),
(1541, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 26, NULL, NULL),
(1542, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 26, NULL, NULL),
(1543, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 26, NULL, NULL),
(1544, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 26, NULL, NULL),
(1545, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 26, NULL, NULL),
(1546, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 26, NULL, NULL),
(1547, 'শিশু আদালত', 'Children\'s Court', 26, NULL, NULL),
(1548, 'জেলা জজ আদালত', 'District Judge Court', 20, NULL, NULL),
(1549, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 20, NULL, NULL),
(1550, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 20, NULL, NULL),
(1551, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 20, NULL, NULL),
(1552, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 20, NULL, NULL),
(1553, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 20, NULL, NULL),
(1554, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 20, NULL, NULL),
(1555, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 20, NULL, NULL),
(1556, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 20, NULL, NULL),
(1557, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 20, NULL, NULL),
(1558, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 20, NULL, NULL),
(1559, 'সহকারী জজ -১', 'Assistant Judge -1', 20, NULL, NULL),
(1560, 'সহকারী জজ -২', 'Assistant Judge -2', 20, NULL, NULL),
(1561, 'সহকারী জজ -৩', 'Assistant Judge -3', 20, NULL, NULL),
(1562, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 20, NULL, NULL),
(1563, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 20, NULL, NULL),
(1564, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 20, NULL, NULL),
(1565, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 20, NULL, NULL),
(1566, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 20, NULL, NULL),
(1567, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 20, NULL, NULL),
(1568, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 20, NULL, NULL),
(1569, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 20, NULL, NULL),
(1570, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 20, NULL, NULL),
(1571, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 20, NULL, NULL),
(1572, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 20, NULL, NULL),
(1573, 'শিশু আদালত', 'Children\'s Court', 20, NULL, NULL),
(1574, 'স্পেশাল ম্যাজিস্ট্রেট', 'Special magistrates', 20, NULL, NULL),
(1575, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 20, NULL, NULL),
(1576, 'জেলা জজ আদালত', 'District Judge Court', 14, NULL, NULL),
(1577, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 14, NULL, NULL),
(1578, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 14, NULL, NULL),
(1579, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 14, NULL, NULL),
(1580, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 14, NULL, NULL),
(1581, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 14, NULL, NULL),
(1582, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 14, NULL, NULL),
(1583, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 14, NULL, NULL),
(1584, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 14, NULL, NULL),
(1585, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 14, NULL, NULL),
(1586, 'শিশু আদালত', 'Children\'s Court', 14, NULL, NULL),
(1587, 'দ্রুত বিচার আদালত', 'Quick trial court', 14, NULL, NULL),
(1588, 'ম্যাজিস্ট্রেট বন আদালত ১', 'Magistrates Forest Court 1', 14, NULL, NULL),
(1589, 'জেলা জজ আদালত', 'District Judge Court', 15, NULL, NULL),
(1590, 'অতিরিক্ত জেলা ও দায়রা জজ ', 'Additional District and Sessions Judge ', 15, NULL, NULL),
(1591, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 15, NULL, NULL),
(1592, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 15, NULL, NULL),
(1593, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 15, NULL, NULL),
(1594, 'সিনিয়র সহকারী জজ আদালত, সদর', 'Senior Assistant Judge Court,Sadar', 15, NULL, NULL),
(1595, 'সহকারী জজ আদালত, রায়পুর', 'Assistant Judge Court, Raipur', 15, NULL, NULL),
(1596, 'সহকারী জজ, অতিরিক্ত আদালত ', 'Assistant Judge, Additional court ', 15, NULL, NULL),
(1597, 'সহকারী জজ আদালত, রামগঞ্জ', 'Assistant Judge Court, Ramganj', 15, NULL, NULL),
(1598, 'সহকারী জজ আদালত,রামগতি', 'Assistant Judge Court, Ramgati', 15, NULL, NULL),
(1599, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 15, NULL, NULL),
(1600, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 15, NULL, NULL),
(1601, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Additional Chief Judicial Magistrate Court', 15, NULL, NULL),
(1602, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট আদালত-১', 'Senior Judicial Magistrate Court-1', 15, NULL, NULL),
(1603, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট আদালত-২', 'Senior Judicial Magistrate Court-2', 15, NULL, NULL),
(1604, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট আদালত -৩', 'Senior Judicial Magistrate Court -3', 15, NULL, NULL),
(1605, 'জুডিসিয়াল ম্যাজিস্ট্রেট আদালত-১', 'Judicial magistrate Court-1', 15, NULL, NULL),
(1606, 'জুডিসিয়াল ম্যাজিস্ট্রেট আদালত -২', 'Judicial magistrate Court -2', 15, NULL, NULL),
(1607, 'জুডিসিয়াল ম্যাজিস্ট্রেট আদালত-৩', 'Judicial magistrate Court-3', 15, NULL, NULL),
(1608, 'জুডিসিয়াল ম্যাজিস্ট্রেট আদালত-৪', 'Judicial magistrate Court-4', 15, NULL, NULL),
(1609, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 15, NULL, NULL),
(1610, 'শিশু আদালত', 'Children\'s Court', 15, NULL, NULL),
(1611, 'জেলা জজ আদালত', 'District Judge Court', 24, NULL, NULL),
(1612, 'অতিরিক্ত জেলা ও দায়রা জজ আদালত', 'Additional District and Sessions Judge Court', 24, NULL, NULL),
(1613, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল', 'Women and Children Repression Retention Tribunal', 24, NULL, NULL),
(1614, 'যুগ্ম জেলা ও দায়রা জজ আদালত-১', 'Joint District and Sessions Judge Court-1', 24, NULL, NULL),
(1615, 'যুগ্ম জেলা ও দায়রা জজ আদালত -২', 'Joint District and Sessions Judge Court -2', 24, NULL, NULL),
(1616, 'সিনিয়র সহকারী জজ আদালত-১, সদর', 'Senior Assistant Judge Court-1, Sadar', 24, NULL, NULL),
(1617, 'সিনিয়র সহকারী জজ আদালত-২, সিংগাইর', 'Senior Assistant Judge Court-2, Singair', 24, NULL, NULL),
(1618, 'সিনিয়র সহকারী জজ আদালত-৩, সাটুরিয়া', 'Senior Assistant Judge Court-3, Saturia', 24, NULL, NULL),
(1619, 'সিনিয়র সহকারী জজ আদালত-৪, শিবালয়', 'Senior Assistant Judge Court-4, Shivalaya', 24, NULL, NULL),
(1620, 'সহকারী জজ আদালত-১, হরিরামপুর', 'Assistant Judge Court-1, Harirampur', 24, NULL, NULL),
(1621, 'সহকারী জজ আদালত-২, দৌলতপুর', 'Assistant Judge Court-2, Daulatpur', 24, NULL, NULL),
(1622, 'সহকারী জজ আদালত-৩, ঘিওর', 'Assistant Judge Court-3, Ghior', 24, NULL, NULL),
(1623, 'সহকারী জজ -৪', 'Assistant Judge -4', 24, NULL, NULL),
(1624, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 24, NULL, NULL),
(1625, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 24, NULL, NULL),
(1626, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 24, NULL, NULL),
(1627, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 24, NULL, NULL),
(1628, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 24, NULL, NULL),
(1629, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 24, NULL, NULL),
(1630, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 24, NULL, NULL),
(1631, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 24, NULL, NULL),
(1632, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 24, NULL, NULL),
(1633, 'শিশু আদালত', 'Children\'s Court', 24, NULL, NULL),
(1634, 'জেলা জজ আদালত', 'District Judge Court', 25, NULL, NULL),
(1635, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 25, NULL, NULL),
(1636, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 25, NULL, NULL),
(1637, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 25, NULL, NULL),
(1638, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 25, NULL, NULL),
(1639, 'সিনিয়র সহকারী জজ -সদর', 'Senior Assistant Judge -Sadar', 25, NULL, NULL),
(1640, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 25, NULL, NULL),
(1641, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 25, NULL, NULL),
(1642, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 25, NULL, NULL),
(1643, 'সহকারী জজ -১', 'Assistant Judge -1', 25, NULL, NULL),
(1644, 'সহকারী জজ -২', 'Assistant Judge -2', 25, NULL, NULL),
(1645, 'সহকারী জজ -৩', 'Assistant Judge -3', 25, NULL, NULL),
(1646, 'সহকারী জজ -৪', 'Assistant Judge -4', 25, NULL, NULL),
(1647, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 25, NULL, NULL),
(1648, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 25, NULL, NULL),
(1649, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 25, NULL, NULL),
(1650, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 25, NULL, NULL),
(1651, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 25, NULL, NULL),
(1652, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 25, NULL, NULL),
(1653, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 25, NULL, NULL),
(1654, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 25, NULL, NULL),
(1655, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 25, NULL, NULL),
(1656, 'শিশু আদালত', 'Children\'s Court', 25, NULL, NULL),
(1657, 'জেলা জজ আদালত', 'District Judge Court', 62, NULL, NULL),
(1658, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 62, NULL, NULL),
(1659, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 62, NULL, NULL),
(1660, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 62, NULL, NULL),
(1661, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 62, NULL, NULL),
(1662, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 62, NULL, NULL),
(1663, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 62, NULL, NULL),
(1664, 'সহকারী জজ -১', 'Assistant Judge -1', 62, NULL, NULL),
(1665, 'সহকারী জজ -২', 'Assistant Judge -2', 62, NULL, NULL),
(1666, 'সহকারী জজ -৩', 'Assistant Judge -3', 62, NULL, NULL),
(1667, 'সহকারী জজ -৪', 'Assistant Judge -4', 62, NULL, NULL),
(1668, 'সহকারী জজ -৫', 'Assistant Judge -5', 62, NULL, NULL),
(1669, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 62, NULL, NULL),
(1670, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 62, NULL, NULL),
(1671, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 62, NULL, NULL),
(1672, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 62, NULL, NULL),
(1673, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 62, NULL, NULL),
(1674, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট, বন আদালত ', 'Senior Judicial Magistrate, Forest Court ', 62, NULL, NULL),
(1675, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩, বড়লেখা', 'Senior Judicial Magistrate -3, Barelekha', 62, NULL, NULL),
(1676, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 62, NULL, NULL),
(1677, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 62, NULL, NULL),
(1678, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 62, NULL, NULL),
(1679, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 62, NULL, NULL),
(1680, 'শিশু আদালত', 'Children\'s Court', 62, NULL, NULL),
(1681, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 62, NULL, NULL),
(1682, 'জেলা জজ আদালত', 'District Judge Court', 16, NULL, NULL),
(1683, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 16, NULL, NULL),
(1684, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 16, NULL, NULL),
(1685, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 16, NULL, NULL),
(1686, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 16, NULL, NULL),
(1687, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 16, NULL, NULL),
(1688, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 16, NULL, NULL),
(1689, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 16, NULL, NULL),
(1690, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 16, NULL, NULL),
(1691, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 16, NULL, NULL),
(1692, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 16, NULL, NULL),
(1693, 'সহকারী জজ -১', 'Assistant Judge -1', 16, NULL, NULL),
(1694, 'সহকারী জজ -২', 'Assistant Judge -2', 16, NULL, NULL),
(1695, 'সহকারী জজ -৩', 'Assistant Judge -3', 16, NULL, NULL),
(1696, 'সহকারী জজ -৪', 'Assistant Judge -4', 16, NULL, NULL),
(1697, 'সহকারী জজ -৫', 'Assistant Judge -5', 16, NULL, NULL),
(1698, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 16, NULL, NULL),
(1699, 'বিশেষ জজ -১', 'Special Judge -1', 16, NULL, NULL),
(1700, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 16, NULL, NULL),
(1701, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 16, NULL, NULL),
(1702, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 16, NULL, NULL),
(1703, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 16, NULL, NULL),
(1704, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 16, NULL, NULL),
(1705, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 16, NULL, NULL),
(1706, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 16, NULL, NULL),
(1707, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 16, NULL, NULL),
(1708, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 16, NULL, NULL),
(1709, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 16, NULL, NULL),
(1710, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 16, NULL, NULL),
(1711, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 16, NULL, NULL),
(1712, 'শিশু আদালত', 'Children\'s Court', 16, NULL, NULL),
(1713, 'জেলা জজ আদালত', 'District Judge Court', 17, NULL, NULL),
(1714, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 17, NULL, NULL),
(1715, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 17, NULL, NULL),
(1716, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 17, NULL, NULL),
(1717, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 17, NULL, NULL),
(1718, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 17, NULL, NULL),
(1719, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 17, NULL, NULL),
(1720, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 17, NULL, NULL),
(1721, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 17, NULL, NULL),
(1722, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 17, NULL, NULL),
(1723, 'শিশু আদালত', 'Children\'s Court', 17, NULL, NULL),
(1724, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 17, NULL, NULL),
(1725, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 17, NULL, NULL),
(1726, 'জেলা জজ আদালত', 'District Judge Court', 10, NULL, NULL),
(1727, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 10, NULL, NULL),
(1728, 'অতিরিক্ত জেলা ও দায়রা জজ -২', 'Additional District and Sessions Judge -2', 10, NULL, NULL),
(1729, 'অতিরিক্ত জেলা ও দায়রা জজ -৩', 'Additional District and Sessions Judge -3', 10, NULL, NULL),
(1730, 'অতিরিক্ত জেলা ও দায়রা জজ -৪', 'Additional District and Sessions Judge -4', 10, NULL, NULL),
(1731, 'অতিরিক্ত জেলা ও দায়রা জজ -৫', 'Additional District and Sessions Judge -5', 10, NULL, NULL),
(1732, 'অতিরিক্ত জেলা ও দায়রা জজ -৬', 'Additional District and Sessions Judge -6', 10, NULL, NULL),
(1733, 'অতিরিক্ত জেলা ও দায়রা জজ -৭', 'Additional District and Sessions Judge -7', 10, NULL, NULL),
(1734, 'অতিরিক্ত জেলা ও দায়রা জজ, দেউলিয়া বিষয়ক', 'Additional District and Sessions Judge, Bankruptcy matters', 10, NULL, NULL),
(1735, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 10, NULL, NULL),
(1736, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 10, NULL, NULL),
(1737, 'যুগ্ম জেলা ও দায়রা জজ -৩', 'Joint District and Sessions Judge -3', 10, NULL, NULL),
(1738, 'যুগ্ম জেলা ও দায়রা জজ -৪', 'Joint District and Sessions Judge -4', 10, NULL, NULL),
(1739, 'যুগ্ম জেলা ও দায়রা জজ -৫', 'Joint District and Sessions Judge -5', 10, NULL, NULL),
(1740, 'যুগ্ম জেলা ও দায়রা জজ, অতিরিক্ত আদালত', 'Joint District and Sessions Judge, Additional court', 10, NULL, NULL),
(1741, 'অর্থঋণ আদালত নং-১', 'Money laundering court no-1', 10, NULL, NULL),
(1742, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 10, NULL, NULL),
(1743, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 10, NULL, NULL),
(1744, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 10, NULL, NULL),
(1745, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 10, NULL, NULL),
(1746, 'সিনিয়র সহকারী জজ -৫', 'Senior Assistant Judge -5', 10, NULL, NULL),
(1747, 'সিনিয়র সহকারী জজ -৬', 'Senior Assistant Judge -6', 10, NULL, NULL),
(1748, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 10, NULL, NULL),
(1749, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 10, NULL, NULL),
(1750, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 10, NULL, NULL),
(1751, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 10, NULL, NULL),
(1752, 'সিনিয়র সহকারী জজ', 'Senior Assistant Judge', 10, NULL, NULL),
(1753, 'সহকারী জজ -১', 'Assistant Judge -1', 10, NULL, NULL),
(1754, 'সহকারী জজ -২', 'Assistant Judge -2', 10, NULL, NULL),
(1755, 'সহকারী জজ -৩', 'Assistant Judge -3', 10, NULL, NULL),
(1756, 'সহকারী জজ -৪', 'Assistant Judge -4', 10, NULL, NULL),
(1757, 'সহকারী জজ -৫', 'Assistant Judge -5', 10, NULL, NULL),
(1758, 'সহকারী জজ, পারিবারিক আদালত', 'Assistant Judge, Family Court', 10, NULL, NULL),
(1759, 'দ্রুত বিচার ট্রাইব্যুনাল নং-১', 'Speedy Trial Tribunal No.-1', 10, NULL, NULL),
(1760, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 10, NULL, NULL),
(1761, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-২', 'Women and Children Repression Repression Tribunal No.-2', 10, NULL, NULL),
(1762, 'জননিরাপত্তা বিঘ্নকারী অপরাধ দমন ট্রাইব্যুনাল', 'Public safety prevention crime prevention tribunal', 10, NULL, NULL),
(1763, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-৩ ', 'Women and Children Repression Repression Tribunal No.-3 ', 10, NULL, NULL),
(1764, 'বিভাগীয় বিশেষ জজ', 'Departmental Special Judge', 10, NULL, NULL),
(1765, 'প্রশাসনিক ট্রাইব্যুনাল-১', 'Administrative Tribunal-1', 10, NULL, NULL),
(1766, '১ম শ্রম আদালত', '1st Labor Court', 10, NULL, NULL),
(1767, '২য় শ্রম আদালত', '2nd Labor Court', 10, NULL, NULL),
(1768, 'সহকারী জজ -৬', 'Assistant Judge -6', 10, NULL, NULL),
(1769, 'সহকারী জজ -৭', 'Assistant Judge -7', 10, NULL, NULL),
(1770, 'সহকারী জজ -৮', 'Assistant Judge -8', 10, NULL, NULL),
(1771, 'সহকারী জজ -৯', 'Assistant Judge -9', 10, NULL, NULL),
(1772, 'সহকারী জজ -১০', 'Assistant Judge -10', 10, NULL, NULL),
(1773, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 10, NULL, NULL),
(1774, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 10, NULL, NULL),
(1775, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 10, NULL, NULL),
(1776, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 10, NULL, NULL),
(1777, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 10, NULL, NULL),
(1778, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 10, NULL, NULL),
(1779, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Senior Judicial Magistrate -5', 10, NULL, NULL),
(1780, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 10, NULL, NULL),
(1781, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 10, NULL, NULL),
(1782, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 10, NULL, NULL),
(1783, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 10, NULL, NULL),
(1784, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 10, NULL, NULL),
(1785, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট (বিদ্যুৎ)', 'Senior Judicial Magistrate (Electricity)', 10, NULL, NULL),
(1786, 'শিশু আদালত', 'Children\'s Court', 10, NULL, NULL),
(1787, 'জেলা জজ আদালত', 'District Judge Court', 61, NULL, NULL),
(1788, 'অতিরিক্ত জেলা ও দায়রা জজ ', 'Additional District and Sessions Judge ', 61, NULL, NULL),
(1789, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 61, NULL, NULL),
(1790, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 61, NULL, NULL),
(1791, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 61, NULL, NULL),
(1792, 'সিনিয়র সহকারী জজ -সদর', 'Senior Assistant Judge -Sadar', 61, NULL, NULL),
(1793, 'সিনিয়র সহকারী জজ -বানিয়াচং', 'Senior Assistant Judge -Banychang', 61, NULL, NULL),
(1794, 'সহকারী জজ -নবীগঞ্জ', 'Assistant Judge -Nabiganj', 61, NULL, NULL),
(1795, ' সহকারী জজ -চুনারুঘাট', ' Assistant Judge -Chunarughat', 61, NULL, NULL),
(1796, 'সহকারী জজ -মাধবপুর', 'Assistant Judge -Madhabpur', 61, NULL, NULL),
(1797, 'সহকারী জজ -বাহুবল', 'Assistant Judge -Bahubal', 61, NULL, NULL),
(1798, 'সহকারী জজ -লাখাই', 'Assistant Judge -Likai', 61, NULL, NULL),
(1799, 'সহকারী জজ -আজমিরিগঞ্জ', 'Assistant Judge - Azmiriganj', 61, NULL, NULL),
(1800, 'সহকারী জজ -অতিরিক্ত আদালত', 'Assistant Judge -Additional court', 61, NULL, NULL),
(1801, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 61, NULL, NULL),
(1802, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 61, NULL, NULL),
(1803, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 61, NULL, NULL),
(1804, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 61, NULL, NULL),
(1805, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 61, NULL, NULL),
(1806, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 61, NULL, NULL),
(1807, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 61, NULL, NULL),
(1808, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 61, NULL, NULL),
(1809, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 61, NULL, NULL),
(1810, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 61, NULL, NULL),
(1811, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 61, NULL, NULL),
(1812, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 61, NULL, NULL),
(1813, 'শিশু আদালত', 'Children\'s Court', 61, NULL, NULL),
(1814, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 61, NULL, NULL),
(1815, 'ম্যাজিস্ট্রেট বন আদালত - ১', 'Magistrates Forest Court - 1', 61, NULL, NULL),
(1816, 'ম্যাজিস্ট্রেট বন আদালত ২', 'Magistrates Forest Court 2', 61, NULL, NULL),
(1817, 'জেলা জজ আদালত', 'District Judge Court', 63, NULL, NULL),
(1818, 'অতিরিক্ত জেলা ও দায়রা জজ ', 'Additional District and Sessions Judge ', 63, NULL, NULL),
(1819, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 63, NULL, NULL),
(1820, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 63, NULL, NULL),
(1821, 'ল্যান্ড সার্ভে ট্রাইব্যুনাল', 'Land Survey Tribunal', 63, NULL, NULL),
(1822, 'সদর সিনিয়র সহকারী জজ আদালত, সুনামগঞ্জ', 'Sadar Senior Assistant Judge Court, Sunamganj', 63, NULL, NULL),
(1823, ' সহকারী জজ আদালত, ছাতক', ' Assistant Judge Court, Chadak', 63, NULL, NULL),
(1824, 'সহকারী জজ, জগন্নাথপুর', 'Assistant Judge, Jagannathpur', 63, NULL, NULL),
(1825, 'সহকারী জজ আদালত, দিরাই', 'Assistant Judge Court, Dirai', 63, NULL, NULL),
(1826, 'সহকারী জজ আদালত, জামালগঞ্জ', 'Assistant Judge Court, Jamalganj', 63, NULL, NULL),
(1827, 'সহকারী জজ আদালত, তাহিরপুর', 'Assistant Judge Court, Tahirpur', 63, NULL, NULL),
(1828, 'সহকারী জজ আদালত, বিশ্বম্ভরপুর', 'Assistant Judge Court, Vishvabhavpur', 63, NULL, NULL),
(1829, 'চীফ জুডিসিয়াল ম্যাজিস্ট্রেট আদালত', 'Chief Judicial Magistrate Court', 63, NULL, NULL),
(1830, 'অতিরিক্ত চীফ জুডিসিয়াল ম্যাজিস্ট্রেট', 'Additional Chief Judicial Magistrate', 63, NULL, NULL),
(1831, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Senior Judicial Magistrate -1', 63, NULL, NULL),
(1832, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Senior Judicial Magistrate -2', 63, NULL, NULL),
(1833, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Senior Judicial Magistrate -3', 63, NULL, NULL),
(1834, 'সিনিয়র জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Senior Judicial Magistrate -4', 63, NULL, NULL),
(1835, 'জুডিসিয়াল ম্যাজিস্ট্রেট -১', 'Judicial magistrate -1', 63, NULL, NULL),
(1836, 'জুডিসিয়াল ম্যাজিস্ট্রেট -২', 'Judicial magistrate -2', 63, NULL, NULL),
(1837, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৩', 'Judicial magistrate -3', 63, NULL, NULL),
(1838, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৪', 'Judicial magistrate -4', 63, NULL, NULL),
(1839, 'শিশু আদালত', 'Children\'s Court', 63, NULL, NULL),
(1840, 'জেলা লিগ্যাল এইড অফিস', 'District Legal Aid Office', 63, NULL, NULL),
(1841, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল ', 'Women and Children Repression Retention Tribunal', 63, NULL, NULL),
(1842, 'সহকারী জজ - দোয়ারাবাজার', 'Assistant Judge - Doorabazar', 63, NULL, NULL),
(1843, 'সহকারী জজ -শাল্লা', 'Assistant Judge -Shalla', 63, NULL, NULL),
(1844, 'সহকারী জজ -ধর্মপাশা', 'Assistant Judge -Dharmapasa', 63, NULL, NULL),
(1845, 'জুডিসিয়াল ম্যাজিস্ট্রেট -৫', 'Judicial magistrate -5', 63, NULL, NULL),
(1846, 'অতিরিক্ত জেলা ও দায়রা জজ -১', 'Additional District and Sessions Judge -1', 24, NULL, NULL),
(1847, 'নারী ও শিশু নির্যাতন দমন ট্রাইব্যুনাল নং-১', 'Women and Children Repression Repression Tribunal No.-1', 24, NULL, NULL),
(1848, 'যুগ্ম জেলা ও দায়রা জজ -১', 'Joint District and Sessions Judge -1', 24, NULL, NULL),
(1849, 'যুগ্ম জেলা ও দায়রা জজ -২', 'Joint District and Sessions Judge -2', 24, NULL, NULL),
(1850, 'সিনিয়র সহকারী জজ -১', 'Senior Assistant Judge -1', 24, NULL, NULL),
(1851, 'সিনিয়র সহকারী জজ আদালত, সদর', 'Senior Assistant Judge Court,Sadar', 24, NULL, NULL),
(1852, 'সিনিয়র সহকারী জজ -২', 'Senior Assistant Judge -2', 24, NULL, NULL),
(1853, 'সিনিয়র সহকারী জজ আদালত, সিংগাইর', 'Senior Assistant Judge Court, Singair', 24, NULL, NULL),
(1854, 'সিনিয়র সহকারী জজ -৩', 'Senior Assistant Judge -3', 24, NULL, NULL),
(1855, 'সিনিয়র সহকারী জজ আদালত, সাটুরিয়া', 'Senior Assistant Judge Court, Saturia', 24, NULL, NULL),
(1856, 'সিনিয়র সহকারী জজ -৪', 'Senior Assistant Judge -4', 24, NULL, NULL),
(1857, 'সহকারী জজ আদালত, ঘিওর', 'Assistant Judge Court, Ghior', 24, NULL, NULL),
(1858, 'সহকারী জজ -১', 'Assistant Judge -1', 24, NULL, NULL),
(1859, 'সহকারী জজ আদালত, হরিরামপুর', 'Assistant Judge Court, Harirampur', 24, NULL, NULL),
(1860, 'সহকারী জজ -২', 'Assistant Judge -2', 24, NULL, NULL),
(1861, 'সহকারী জজ আদালত, দৌলতপুর', 'Assistant Judge Court, Daulatpur', 24, NULL, NULL),
(1862, 'সহকারী জজ -৩', 'Assistant Judge -3', 24, NULL, NULL),
(1863, 'সহকারী জজ আদালত, ঘিওর', 'Assistant Judge Court, Ghior', 24, NULL, NULL),
(1864, 'সহকারী জজ আদালত, শিবালয়', 'Assistant Judge Court, Shivalaya', 24, NULL, NULL),
(1865, NULL, 'CJM CVD', 1, '2019-02-04 22:18:18', '2019-02-04 22:18:18');

-- --------------------------------------------------------

--
-- Stand-in structure for view `datatotakeaction`
-- (See below for the actual view)
--
CREATE TABLE `datatotakeaction` (
`id` int(10) unsigned
,`date_of_sentence` datetime
,`caseno` varchar(191)
,`name` varchar(191)
);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'BJ_Form', '2018-11-26 18:00:00', '2018-11-26 18:00:00'),
(2, 'APP_Form', '2018-11-26 18:00:00', '2018-11-26 18:00:00'),
(3, 'ACK Letter', '2018-10-09 18:00:00', '2018-10-09 18:00:00');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `appealid`, `doctypeid`, `attached`, `filename`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '3.PNG1554008304', '2019-03-31 04:24:58', '2019-03-31 04:24:58'),
(2, 2, 3, 1, '3.PNG1554008633', '2019-03-31 05:53:03', '2019-03-31 05:53:03'),
(3, 3, 1, 1, '3.PNG1554008755', '2019-03-31 05:55:05', '2019-03-31 05:55:05'),
(4, 4, 1, 1, '15540090733.PNG', '2019-03-31 05:13:11', '2019-03-31 05:13:11'),
(5, 5, 3, 1, '123edited.jpg', '2019-03-31 05:48:23', '2019-03-31 05:48:23'),
(6, 6, 3, 1, '5ca052066f0ad11.PNG', '2019-03-31 05:10:37', '2019-03-31 05:10:37'),
(7, 7, 1, 1, '5cb4442191aab4.PNG', '2019-04-14 20:13:43', '2019-04-14 20:13:43'),
(8, 8, 1, 1, '5cb44cf896f393.PNG', '2019-04-14 21:56:20', '2019-04-14 21:56:20'),
(9, 9, 2, 1, '5cb44e92bb67f3.PNG', '2019-04-14 21:46:27', '2019-04-14 21:46:27'),
(10, 10, 1, 1, '5cb55c40c466c4.PNG', '2019-04-16 04:25:38', '2019-04-16 04:25:38'),
(11, 12, 1, 1, '5cd143e031f97sms.pdf', '2019-05-06 20:52:37', '2019-05-06 20:52:37'),
(12, 13, 1, 1, '5cd14b877c6a0sms.pdf', '2019-05-06 21:31:10', '2019-05-06 21:31:10'),
(13, 14, 1, 1, '5cd28dfb21b06sms.pdf', '2019-05-07 20:19:06', '2019-05-07 20:19:06'),
(14, 15, 1, 1, '5d007868817d7Japp_Schema (1).pdf', '2019-06-12 03:32:58', '2019-06-12 03:32:58'),
(15, 16, 1, 1, '5d188f5e85bc8sms.pdf', '2019-06-29 22:54:30', '2019-06-29 22:54:30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `forhearing`
-- (See below for the actual view)
--
CREATE TABLE `forhearing` (
`id` int(10) unsigned
,`statusid` int(10) unsigned
,`newappeals_id` int(10) unsigned
,`state` varchar(191)
,`updated_at` datetime
,`mydate` int(7)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hc_incomplete`
-- (See below for the actual view)
--
CREATE TABLE `hc_incomplete` (
`id` int(10) unsigned
,`date_of_sentence` datetime
,`caseno` varchar(191)
,`name` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `longtimepending`
-- (See below for the actual view)
--
CREATE TABLE `longtimepending` (
`id` int(10) unsigned
,`statusid` int(10) unsigned
,`newappeals_id` int(10) unsigned
,`state` varchar(191)
,`updated_at` datetime
,`mydate` int(7)
);

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
(23, '2018_11_25_091029_documents', 20),
(24, '2019_01_30_120427_create_notifications_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `newappeals`
--

CREATE TABLE `newappeals` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_of_sentence` datetime DEFAULT NULL,
  `date_of_petition_for_cc` datetime DEFAULT NULL,
  `date_of_cc_receipt` datetime DEFAULT NULL,
  `date_of_order_on_appeal` datetime DEFAULT NULL,
  `dateoforderreceipt` datetime DEFAULT NULL,
  `date_of_ticket_notes` datetime DEFAULT NULL,
  `date_of_appeal` datetime DEFAULT NULL,
  `privacy` tinyint(1) DEFAULT NULL,
  `prisonid` int(10) UNSIGNED NOT NULL,
  `prisonerid` int(10) UNSIGNED NOT NULL,
  `courtid` int(10) UNSIGNED NOT NULL,
  `appeals_to_courtid` int(11) NOT NULL,
  `caseid` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `offenceid` int(10) UNSIGNED NOT NULL,
  `sentenceid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `resultsid` int(10) UNSIGNED DEFAULT NULL,
  `appeal_number` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newappeals`
--

INSERT INTO `newappeals` (`id`, `date_of_sentence`, `date_of_petition_for_cc`, `date_of_cc_receipt`, `date_of_order_on_appeal`, `dateoforderreceipt`, `date_of_ticket_notes`, `date_of_appeal`, `privacy`, `prisonid`, `prisonerid`, `courtid`, `appeals_to_courtid`, `caseid`, `user_id`, `offenceid`, `sentenceid`, `created_at`, `updated_at`, `resultsid`, `appeal_number`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 76, 1, 1, 2, 2, 42, '2018-12-14 04:24:58', '2019-03-31 04:24:58', 1, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 88, 1, 2, 2, 1, 56, '2019-03-31 05:53:03', '2019-03-31 05:53:03', 1, 0),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 78, 1, 3, 2, 1, 1, '2019-03-31 05:55:05', '2019-04-01 10:21:02', 1, 0),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, 4, 76, 3, 4, 2, 1, 42, '2019-03-31 05:13:11', '2019-03-31 05:13:11', 1, 123),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, 74, 3, 5, 2, 2, 42, '2019-03-31 05:48:23', '2019-04-02 06:50:44', 1, 1),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 6, 74, 3, 6, 15, 2, 42, '2019-03-31 05:10:37', '2019-04-02 06:34:42', 1, 1),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, 74, 3, 7, 18, 1, 42, '2019-04-14 20:13:43', '2019-04-14 20:13:43', 1, 0),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 8, 76, 3, 8, 2, 1, 43, '2019-04-14 21:57:20', '2019-04-14 21:57:20', 1, 0),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 9, 1, 3, 9, 18, 1, 42, '2019-04-14 21:46:27', '2019-04-14 21:46:27', 1, 0),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 15, 74, 3, 15, 2, 1, 42, '2019-04-16 04:53:41', '2019-04-16 04:53:41', 1, 0),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 17, 74, 3, 17, 2, 1, 42, '2018-04-16 04:59:43', '2019-04-16 04:59:43', 1, 0),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 18, 5, 3, 18, 23, 1, 1, '2019-05-06 20:52:37', '2019-05-06 20:52:37', 1, 0),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 19, 1342, 3, 19, 23, 1, 1, '2019-05-07 21:31:10', '2019-05-06 21:31:10', 1, 0),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 20, 287, 3, 20, 2, 2, 42, '2019-05-07 20:19:06', '2019-05-07 20:19:06', 1, 0),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 21, 734, 3, 21, 2, 1, 49, '2019-06-12 03:32:58', '2019-06-12 03:32:58', 1, 0),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 22, 733, 3, 22, 2, 2, 42, '2019-06-29 22:54:30', '2019-06-29 22:54:30', 1, 0);

--
-- Triggers `newappeals`
--
DELIMITER $$
CREATE TRIGGER `tr_pr_history` AFTER UPDATE ON `newappeals` FOR EACH ROW insert into prisoner_transfer_history
values(null,OLD.id,OLD.caseid,OLD.prisonid,OLD.prisonerid,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `appeal_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `user_id`, `data`, `read_at`, `created_at`, `updated_at`, `appeal_id`) VALUES
('0115ac06-9de8-4e07-a4f8-541dce1c196b', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Lawyer Requested (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-07-10 10:05:57', '2019-07-10 10:05:57', 2),
('0131392d-e5f4-4fe3-b42a-e65efff33612', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Lawyer Requested (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-18 09:45:43', '2019-04-16 09:45:43', '2019-04-18 09:45:43', 6),
('02053f20-5980-46e2-b7e6-a0f65f55882e', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 07:15:02', '2019-07-08 07:15:02', 7),
('031b994f-ed04-4f12-a51a-9397890040ee', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-03 07:57:04', '2019-07-03 07:57:04', 11),
('03536601-d8ea-4a33-b758-7b86ec6951c3', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Comilla Central Jail x\",\"appeal_id\":6}', '2019-04-15 07:59:54', '2019-03-31 05:37:10', '2019-04-15 07:59:54', 6),
('05c95034-b93a-4ed3-9035-12b7ee10ca4d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:19', '2019-04-01 06:57:47', '2019-04-01 10:07:19', 2),
('064088d0-5e7e-412f-bf88-afe78f1b1727', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Requested (ON sdefr)\",\"appeal_id\":3}', NULL, '2019-07-10 10:13:01', '2019-07-10 10:13:01', 3),
('064ca2b2-9fe9-46eb-9c3c-0d21683e86e2', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:20', '2019-04-01 06:56:49', '2019-04-01 10:07:20', 2),
('06940b5c-0a7c-42cc-876c-7b426cf54549', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Outcome Received (ON sdsd)\",\"appeal_id\":5}', NULL, '2019-07-01 10:39:47', '2019-07-01 10:39:47', 5),
('06c68bbc-f568-402a-a32b-7d9b5a5d7f3c', 'App\\Notifications\\jappNotification', 'App\\User', 3, 23, '{\"data\":\"New Appeals From Khulna District Jail\",\"appeal_id\":12}', '2019-05-08 04:17:22', '2019-05-07 08:37:52', '2019-05-08 04:17:22', 12),
('07a1ec2f-78c1-45f2-b67e-80bfdf0724e4', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Requested (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-07-02 07:35:15', '2019-07-02 07:35:15', 2),
('09cb3d34-a035-4224-8a07-ed9bf030c3ef', 'App\\Notifications\\jappNotification', 'App\\User', 7, 3, '{\"data\":\"Update : Outcome Received (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-04-02 10:52:01', '2019-04-02 10:52:01', 1),
('0a3e283d-70ca-4c1d-8852-24d03d4fc9d6', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 09:11:22', '2019-04-02 14:53:03', 5),
('0b198cab-18fd-4907-8d18-c9ed74199283', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Outcome Received (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-07-01 06:46:53', '2019-07-01 06:46:53', 1),
('0bae5658-22b0-4f7a-969c-6d4ae75b6c5a', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Outcome Received (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-07-08 07:23:01', '2019-07-08 07:23:01', 2),
('0d714bb6-7bdf-4e6f-a32e-7433f48f699a', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON estt-98)\",\"appeal_id\":8}', NULL, '2019-07-01 11:16:13', '2019-07-01 11:16:13', 8),
('0e834f36-59ee-42ef-a2fc-0e1cfed2cf25', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Received (ON sdefr)\",\"appeal_id\":3}', '2019-04-01 10:07:19', '2019-04-01 10:05:59', '2019-04-01 10:07:19', 3),
('10d81fb5-03e0-4486-ab63-7ef7b7c7168f', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Acknowledged (ON test-001)\",\"appeal_id\":15}', NULL, '2019-06-12 04:01:17', '2019-06-12 04:01:17', 15),
('10ebb1b9-03e3-4df9-b06e-18abe428f76d', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-08 10:21:20', '2019-07-08 10:21:20', 12),
('11c64069-23a4-4239-80a4-46ef5f2f92c3', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:03', '2019-06-12 03:19:03', 2),
('14adc08e-899a-4b20-b797-698741a21628', 'App\\Notifications\\jappNotification', 'App\\User', 3, 3, '{\"data\":\"Update : Application Acknowledged (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-07 10:36:45', '2019-07-07 10:36:45', 13),
('153c6484-a09c-4dd0-8792-e02bda69877b', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Case Docket Received (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 05:47:27', '2019-04-02 05:47:27', 6),
('178aa248-262d-4501-b5d5-62b2552e11cd', 'App\\Notifications\\jappNotification', 'App\\User', 18, 3, '{\"data\":\"Update \",\"appeal_id\":9}', NULL, '2019-04-15 09:29:46', '2019-04-15 09:29:46', 9),
('18bca865-4bfd-4b78-a341-e6f658649096', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 06:39:49', '2019-04-02 14:53:03', 5),
('18d51b36-7d87-4e86-95bc-8bd6aa766cfa', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Comilla Central Jail x\",\"appeal_id\":8}', '2019-05-08 04:17:22', '2019-04-15 09:20:57', '2019-05-08 04:17:22', 8),
('19fb3fc6-54a0-40ce-941e-d723c65cec47', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-18 09:45:44', '2019-04-16 09:45:30', '2019-04-18 09:45:44', 6),
('1a0dbd28-f85a-438b-b740-8ce947894619', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Outcome Received (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 06:26:23', '2019-05-13 06:26:23', 10),
('1a77ad42-28d0-4f9f-81f9-dbc96ac0b69a', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-03 09:53:01', '2019-07-03 09:53:01', 14),
('1b11f1fa-142b-4c95-ac47-8dec58479666', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Received (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:20', '2019-04-01 06:55:43', '2019-04-01 10:07:20', 2),
('1bc2fe8d-4027-45cb-b915-6d966e8f9649', 'App\\Notifications\\jappNotification', 'App\\User', 3, 3, '{\"data\":\"Update : Lawyer Requested (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-07 10:35:26', '2019-07-07 10:35:26', 14),
('1ee43e01-1180-43f2-8ec9-1a41c4d9bb6a', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 07:30:05', '2019-04-02 07:30:05', 6),
('1ef3523f-bde8-4ba0-8365-32a82b63c77d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Outcome Received (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-18 09:45:43', '2019-04-16 09:46:26', '2019-04-18 09:45:43', 6),
('20ef69f1-80e6-467e-a88a-a4c8ddcf563b', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 10:08:07', '2019-04-02 14:53:03', 5),
('2169c5bb-2b92-453b-8c64-0393be8dc7d1', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:19', '2019-04-01 06:57:04', '2019-04-01 10:07:19', 2),
('218e8087-3cb8-4298-bccf-b673af1dc5dd', 'App\\Notifications\\jappNotification', 'App\\User', 17, 3, '{\"data\":\"Update : Case Docket Requested (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-04-02 10:37:11', '2019-04-02 10:37:11', 1),
('22ef933e-f910-457f-afb2-75abb4f80550', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Acknowledged (ON ABC)\",\"appeal_id\":16}', NULL, '2019-07-10 04:33:43', '2019-07-10 04:33:43', 16),
('234f392e-8afb-4fb8-a723-b1dd5ed10f28', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:30:21', '2019-06-12 03:30:21', 2),
('23f3a177-73b4-4f2c-adc9-cdb65efaf1e4', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:32:36', '2019-07-08 07:32:36', 13),
('263ccc42-a6c0-4286-944b-b28be7a01783', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:47:44', '2019-07-08 07:47:44', 13),
('27f15ed1-b174-48ae-9465-6737137acb52', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Received (ON reter)\",\"appeal_id\":4}', '2019-04-02 14:53:03', '2019-04-02 10:48:15', '2019-04-02 14:53:03', 4),
('28675c58-af86-41ed-be4d-ce78a72eb79b', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:03', '2019-06-12 03:19:03', 2),
('288dedde-d68a-43bb-88f9-e3a3c9793740', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"Update : Application Complete (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-06-30 10:50:12', '2019-06-30 10:50:12', 11),
('2a37bfea-c033-4503-92bc-e79bdaf7d5f6', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:03', '2019-06-12 03:19:03', 2),
('2cd13a50-8c85-4f75-b19e-cfe28900393c', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 09:21:35', '2019-04-02 14:53:03', 5),
('2d3e97d9-647e-4d69-a0ff-772d12b1f8c4', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:04', '2019-06-12 03:19:04', 2),
('2dadf72d-9de0-4e56-b311-88c0c3c1b80d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 07:21:24', '2019-07-08 07:21:24', 7),
('2f4c6658-adcc-4184-9f3b-73daeb1d6ce6', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Lawyer Requested (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 08:57:42', '2019-04-02 14:53:03', 5),
('328120ad-d919-42e3-b2c9-627c46e01fbe', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-05-12 04:38:20', '2019-05-12 04:38:20', 11),
('35ad3119-9334-481b-8a80-5c7abd30f988', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-03 08:09:15', '2019-07-03 08:09:15', 11),
('362665cc-1367-4282-b17b-91833d5751b3', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Received (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-08 10:26:34', '2019-07-08 10:26:34', 12),
('3639ca8b-29c6-479a-a40e-62377bed0b71', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-02 10:56:43', '2019-07-02 10:56:43', 14),
('38394b5d-13a0-4d22-ad69-9a18ff2ac6e5', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Application Complete (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 05:54:24', '2019-07-08 05:54:24', 7),
('396ad800-702e-4fa9-ba32-f3ccf041631b', 'App\\Notifications\\jappNotification', 'App\\User', 6, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-16 09:45:59', '2019-04-16 09:45:59', 6),
('3c160d02-cf96-4931-bda2-05672980a185', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-09 05:53:28', '2019-07-09 05:53:28', 11),
('3dd922f4-1c48-49de-8e6b-e2c61ee4b123', 'App\\Notifications\\jappNotification', 'App\\User', 17, 3, '{\"data\":\"Update : Case Docket Requested (ON sdsd)\",\"appeal_id\":5}', NULL, '2019-04-02 07:49:42', '2019-04-02 07:49:42', 5),
('3ea552b7-a8bf-4bd5-8fe8-151241789705', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 06:22:10', '2019-05-13 06:22:10', 10),
('3ed24637-3c1d-4a8b-a288-1048313cc947', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Application Sent to Bench (ON dfsdf)\",\"appeal_id\":9}', NULL, '2019-07-08 07:24:49', '2019-07-08 07:24:49', 9),
('3f556381-6c86-4017-a786-9a86d30f5a0b', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 10:05:43', '2019-04-02 14:53:03', 5),
('40ee2c37-45b9-4f03-a595-4d69957da65a', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Lawyer Requested (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:19', '2019-04-01 06:58:13', '2019-04-01 10:07:19', 2),
('44497fcd-0d54-47e6-b0af-607501faafdd', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-01 10:07:19', '2019-04-01 08:09:41', '2019-04-01 10:07:19', 6),
('44d49ec4-59f0-4cec-a755-d33a37065ca1', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-06-12 03:29:58', '2019-06-12 03:29:58', 1),
('463b7dcf-4e7d-4afd-a10f-82a52107a59d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 06:45:35', '2019-04-02 14:53:03', 5),
('49c7befd-6607-4351-bb71-324bb349e26c', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:31:41', '2019-07-08 07:31:41', 13),
('4af4d84c-2bff-4e1a-a00f-3561662584c2', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:39:50', '2019-04-02 14:53:03', 1),
('4d6608fe-4616-49e4-ac6a-407d23c5a4ec', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON sdefr)\",\"appeal_id\":3}', '2019-04-02 14:53:03', '2019-04-01 10:23:25', '2019-04-02 14:53:03', 3),
('4e815cd7-55dc-46a7-81fe-4a04bb22299c', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Lawyer Requested (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 06:18:43', '2019-04-02 06:18:43', 6),
('4ea79aa3-65c7-48b0-9edd-0efedc1134f9', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Outcome Received (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 08:38:54', '2019-07-08 08:38:54', 13),
('51daf10d-2524-45a3-b231-3e43fc41fcbb', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 08:54:12', '2019-04-02 14:53:03', 5),
('535513db-b41f-48db-9ffb-6c23a912aacd', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON dfsdf)\",\"appeal_id\":9}', NULL, '2019-07-08 08:48:28', '2019-07-08 08:48:28', 9),
('54505d68-48a2-4587-93b4-3f1b2e6b5361', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Outcome Received (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:19', '2019-04-01 06:58:56', '2019-04-01 10:07:19', 2),
('562c3757-c170-44de-8f5d-fe7ef2e7904d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-08 10:25:13', '2019-07-08 10:25:13', 12),
('562c476a-77c8-490f-8bf5-5ddf454ad505', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Application Complete (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-08 07:27:12', '2019-07-08 07:27:12', 14),
('579e22fd-d6c3-4928-9737-39cb08d12812', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Received (ON sdefr)\",\"appeal_id\":10}', '2019-04-18 09:45:43', '2019-04-18 09:10:29', '2019-04-18 09:45:43', 10),
('57d3e2bc-b6dd-436d-b335-85f370060ded', 'App\\Notifications\\jappNotification', 'App\\User', 17, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdsd)\",\"appeal_id\":5}', NULL, '2019-04-02 08:59:54', '2019-04-02 08:59:54', 5),
('581cc496-5960-4fe9-837a-232792a8f231', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Requested (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 07:10:46', '2019-07-08 07:10:46', 7),
('59125ffd-135c-48b9-b78b-b1baa4d67f1f', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON sdsd)\",\"appeal_id\":5}', '2019-04-01 10:07:19', '2019-04-01 09:23:42', '2019-04-01 10:07:19', 5),
('5922e2c6-1fef-488f-b980-5d4e483e55b5', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Outcome Received (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 06:24:41', '2019-05-13 06:24:41', 10),
('5a3c7306-ade9-4fcf-8f95-f696135ded2f', 'App\\Notifications\\jappNotification', 'App\\User', 6, 3, '{\"data\":\"Update : Application Received (ON reter)\",\"appeal_id\":4}', NULL, '2019-04-02 10:48:16', '2019-04-02 10:48:16', 4),
('5ab1afb6-f632-4881-a3db-ede0924df554', 'App\\Notifications\\jappNotification', 'App\\User', 3, 18, '{\"data\":\"New Appeals From Rangpur Central Jail\",\"appeal_id\":9}', '2019-05-08 04:17:22', '2019-04-15 09:27:47', '2019-05-08 04:17:22', 9),
('5bc17be1-8d51-444f-b0a3-8d570d81a884', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-01 10:07:19', '2019-04-01 09:28:07', '2019-04-01 10:07:19', 6),
('5db47d07-9905-4ffe-b9bd-2b89a1925156', 'App\\Notifications\\jappNotification', 'App\\User', 17, 3, '{\"data\":\"Update : Outcome Received (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-04-02 10:52:01', '2019-04-02 10:52:01', 1),
('5eb911ae-3ef5-4be4-b9dc-6f3e59f9b648', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:02:57', '2019-04-02 14:53:03', 1),
('5f1bdf81-88db-4cd1-940c-238104b11255', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Received (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-07-03 05:47:49', '2019-07-03 05:47:49', 2),
('607bd605-3de2-47ae-8f4a-349bd26621a8', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Lawyer Requested (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-09 08:58:07', '2019-07-09 08:58:07', 11),
('609f5b54-d60c-4ac2-a391-1cb83ffbefd7', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 06:38:36', '2019-04-02 14:53:03', 5),
('60a49de9-7e2e-4b1d-b3bf-3468b8082581', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Requested (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 06:23:13', '2019-05-13 06:23:13', 10),
('627ef87c-5211-4c1d-ab4b-96cb0ad20aec', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:31:42', '2019-07-08 07:31:42', 13),
('629859c4-13da-49ec-a251-788eb8f15dcb', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:19', '2019-04-01 06:57:21', '2019-04-01 10:07:19', 2),
('639ab591-d84d-40b5-ab43-4d7ff58138b0', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Comilla Central Jail x\",\"appeal_id\":1}', '2019-03-31 05:11:37', '2019-03-31 04:58:24', '2019-03-31 05:11:37', 1),
('649a2af9-01e6-4e45-816e-c9c0df526b1e', 'App\\Notifications\\jappNotification', 'App\\User', 3, 18, '{\"data\":\"New Appeals From Rangpur Central Jail\",\"appeal_id\":7}', '2019-05-08 04:17:22', '2019-04-15 08:43:15', '2019-05-08 04:17:22', 7),
('6986124f-2ed9-41a9-a2eb-fbdd32352809', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 06:39:16', '2019-04-02 14:53:03', 5),
('69e1a8a1-da91-4e34-9a2c-a5be89d3b796', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-01 06:44:45', '2019-07-01 06:44:45', 14),
('6a3a36b5-3e97-429c-aa12-22d36df378e5', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 10:20:10', '2019-04-02 14:53:03', 5),
('6c9baca8-2e26-4929-874d-222d11efa2fe', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 07:19:42', '2019-04-02 07:19:42', 6),
('6ca13950-0b0f-4a5e-81d9-1351b3bac89c', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Bogra District Jail\",\"appeal_id\":5}', '2019-04-15 07:59:54', '2019-03-31 05:23:48', '2019-04-15 07:59:54', 5),
('6eba8957-1055-4036-b6bf-2841a4203d7c', 'App\\Notifications\\jappNotification', 'App\\User', 6, 3, '{\"data\":\"Update : Application Complete (ON reter)\",\"appeal_id\":4}', NULL, '2019-04-02 10:49:30', '2019-04-02 10:49:30', 4),
('7018a5c8-4439-4bbe-aef7-d23016a92440', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Received (ON sdefr)\",\"appeal_id\":1}', '2019-04-01 10:07:20', '2019-03-31 05:13:35', '2019-04-01 10:07:20', 1),
('7039e0f9-0973-43e4-8055-ac5b80e3c330', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Lawyer Requested (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 08:58:04', '2019-04-02 14:53:03', 5),
('70f6631f-665b-43bc-a1b5-6ef6d8659d76', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:04:46', '2019-04-02 14:53:03', 1),
('76fa9c88-51f1-4d76-a302-ff7f24146bce', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:02', '2019-06-12 03:19:02', 2),
('770b9bd3-ba61-4929-8cfd-3515109eb291', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Received (ON sdefr)\",\"appeal_id\":1}', '2019-04-01 10:07:19', '2019-04-01 09:24:11', '2019-04-01 10:07:19', 1),
('772bfa4a-5a2c-4117-b925-1240fb41eb68', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 09:34:53', '2019-04-02 14:53:03', 5),
('7731ecc0-567e-46ee-877c-cc1177d752af', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 06:36:31', '2019-04-02 06:36:31', 6),
('773a5610-77ba-4368-97ed-0813b7e3910b', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:30:43', '2019-07-08 07:30:43', 13),
('7798f92f-53cf-4201-97de-6c920e58d876', 'App\\Notifications\\jappNotification', 'App\\User', 18, 3, '{\"data\":\"Update \",\"appeal_id\":9}', NULL, '2019-04-15 09:31:02', '2019-04-15 09:31:02', 9),
('78245c2d-88f1-4e0b-802b-46a9784af31d', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:01', '2019-06-12 03:19:01', 2),
('7aec1b2e-655c-48ef-9441-cc78858446a5', 'App\\Notifications\\jappNotification', 'App\\User', 6, 3, '{\"data\":\"Update : Lawyer Requested (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-16 09:45:43', '2019-04-16 09:45:43', 6),
('7beab135-e4b5-4f17-8e8e-38fcee75b6b0', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Lawyer Requested (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 06:24:04', '2019-05-13 06:24:04', 10),
('7e30eccb-eeb5-4432-ad9d-e116f973ae3d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON sdsd)\",\"appeal_id\":5}', '2019-04-01 10:07:19', '2019-04-01 09:40:38', '2019-04-01 10:07:19', 5),
('7ea9a6b9-99dd-457b-a194-2138591617dc', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Bogra District Jail\",\"appeal_id\":4}', '2019-03-31 05:11:37', '2019-03-31 05:11:13', '2019-03-31 05:11:37', 4),
('7f8ea61a-2b8f-4685-bb48-7ded27245df6', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 06:35:34', '2019-04-02 06:35:34', 6),
('7ff2a381-487a-4503-b0a3-7f67fdbbcc71', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Bogra District Jail\",\"appeal_id\":14}', NULL, '2019-05-08 08:06:19', '2019-05-08 08:06:19', 14),
('800f8bfb-4937-43ba-a6ad-e5ea914aa572', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:04:17', '2019-04-02 14:53:03', 1),
('8144be5b-20c1-4425-be2a-19cdb5e5cbc9', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-08 07:26:04', '2019-07-08 07:26:04', 14),
('8321d15f-5d10-43f0-89c4-8c61eaaeeae0', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 07:19:09', '2019-04-02 07:19:09', 6),
('86270c7c-64c3-45ed-8143-2c2071ae6756', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Outcome Received (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 09:13:09', '2019-04-02 14:53:03', 5),
('87b20d31-d41a-4ebf-a5a2-ef26085df004', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-05-13 04:06:47', '2019-05-13 04:06:47', 1),
('87d792e2-e0d5-4a44-a6a5-c87194967a09', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Application Complete (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 07:18:47', '2019-04-02 07:18:47', 6),
('8a56a424-c9de-40b6-a12c-6700ceb210e4', 'App\\Notifications\\jappNotification', 'App\\User', 23, 3, '{\"data\":\"Update : Application Complete (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-02 10:22:09', '2019-07-02 10:22:09', 12),
('8aaebfd1-42b0-429a-918b-2afd1ed239ff', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Outcome Received (ON estt-98)\",\"appeal_id\":8}', NULL, '2019-05-13 06:29:42', '2019-05-13 06:29:42', 8),
('8be6a176-1fdd-4db5-bace-b93d32173e0c', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 10:08:17', '2019-04-02 14:53:03', 5),
('8e1e2a2f-dba5-48d4-b8ba-430e3a9f179b', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON dfsdf)\",\"appeal_id\":9}', NULL, '2019-07-08 07:25:22', '2019-07-08 07:25:22', 9),
('9179826c-0b62-4564-83ef-68a60219aaaa', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdsd)\",\"appeal_id\":5}', '2019-04-01 10:07:19', '2019-04-01 09:39:30', '2019-04-01 10:07:19', 5),
('944ffa6a-8161-47f8-badb-1c46fc18ebc2', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:56:33', '2019-07-08 07:56:33', 13),
('950396a0-eb6d-40d0-8bb2-27cf67f7ecd0', 'App\\Notifications\\jappNotification', 'App\\User', 1, 2, '{\"data\":\"New Appeals From Comilla Central Jail x\",\"appeal_id\":3}', NULL, '2019-03-31 05:05:55', '2019-03-31 05:05:55', 3),
('977bb38e-ad0a-4e08-9f0e-70c074820b32', 'App\\Notifications\\jappNotification', 'App\\User', 6, 3, '{\"data\":\"Update : Application Received (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-04-18 09:10:29', '2019-04-18 09:10:29', 10),
('97d3ae01-e2a8-437b-97de-c1497e6a3d3f', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:20', '2019-04-01 06:56:40', '2019-04-01 10:07:20', 2),
('97d65cd0-4d88-4afb-b0a5-3038975402e1', 'App\\Notifications\\jappNotification', 'App\\User', 17, 3, '{\"data\":\"Update : Case Docket Received (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-04-02 10:39:26', '2019-04-02 10:39:26', 1),
('988d02e4-4d8a-494d-a3c8-f752a01c3e38', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Outcome Received (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 10:41:39', '2019-04-02 14:53:03', 5),
('992d1e9c-9a38-41ae-a16b-2800096fa3ad', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:02', '2019-06-12 03:19:02', 2),
('9c2cf8b9-0703-4464-9bce-b5908c62e984', 'App\\Notifications\\jappNotification', 'App\\User', 6, 3, '{\"data\":\"Update : Outcome Received (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-16 09:46:26', '2019-04-16 09:46:26', 6),
('9e6edc37-fb26-43d3-8bee-2bed15440909', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Outcome Received (ON sdsd)\",\"appeal_id\":5}', NULL, '2019-07-01 10:40:22', '2019-07-01 10:40:22', 5),
('a01a77b0-4f79-4cf4-bb79-06530b086120', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Lawyer Requested (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-08 10:27:02', '2019-07-08 10:27:02', 12),
('a19f893d-28e0-4c0c-904b-0a75461a348d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-09 06:53:05', '2019-07-09 06:53:05', 12),
('a1dead7f-205b-4216-9b5f-a6e19a92e38e', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-02 10:21:48', '2019-07-02 10:21:48', 14),
('a31a3bfb-9098-46dc-a00f-130df7f988e4', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:20', '2019-04-01 06:56:24', '2019-04-01 10:07:20', 2),
('a408f177-8a15-415c-88f5-6ce2f755d040', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Received (ON test-001)\",\"appeal_id\":15}', NULL, '2019-07-08 07:27:53', '2019-07-08 07:27:53', 15),
('a4af5d89-87c7-4dbf-b4cf-4346ab46dbd5', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-09 06:53:05', '2019-07-09 06:53:05', 11),
('aa52f8de-b9b3-40f3-862b-0f03de7d9558', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:03', '2019-06-12 03:19:03', 2),
('aa7dbdbd-414c-482a-b8ad-32c0b5e23de5', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:02', '2019-06-12 03:19:02', 2),
('acc1d8a4-d910-4096-8b21-061edd1d0c14', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Case Docket Requested (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 07:30:35', '2019-04-02 07:30:35', 6),
('ad9f5ee5-ac28-4812-a288-28109d05a2d6', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 06:22:35', '2019-05-13 06:22:35', 10),
('ae0e3982-0247-45e4-8f8c-ed28cc0586aa', 'App\\Notifications\\jappNotification', 'App\\User', 18, 3, '{\"data\":\"Update : Application Received (ON test-002)\",\"appeal_id\":7}', '2019-04-15 09:28:42', '2019-04-15 08:44:04', '2019-04-15 09:28:42', 7),
('ae635322-385b-4002-b13c-0826f3fa4f96', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:03:19', '2019-04-02 14:53:03', 1),
('afd090f4-cf34-4585-bef5-3f11c2b89189', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 06:40:11', '2019-04-02 14:53:03', 5),
('b0453fb3-a1ae-40a2-be56-ece5725a5e44', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Lawyer Requested (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 10:12:16', '2019-04-02 14:53:03', 5),
('b1da450f-29ac-4749-82f3-00595c14ebaa', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON test-001)\",\"appeal_id\":15}', NULL, '2019-07-03 04:10:34', '2019-07-03 04:10:34', 15),
('b2ca4f95-8ffd-4cbb-9d5c-8ae084fa403e', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"Update : Application Complete (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-01 06:09:15', '2019-07-01 06:09:15', 11),
('b3f235da-4ada-49bc-bc0c-0860553faed8', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:19', '2019-04-01 06:58:20', '2019-04-01 10:07:19', 2),
('b4635b6a-b8b7-4f5d-95ae-a2426f3fd84d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 07:03:09', '2019-07-08 07:03:09', 7),
('b49bb5a1-0eec-4d68-b03d-214b1f9b5820', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-18 09:45:43', '2019-04-16 09:45:59', '2019-04-18 09:45:43', 6),
('b669d4ef-ca71-4c6a-8dd6-7dff6ab5b60c', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Bogra District Jail\",\"appeal_id\":16}', NULL, '2019-06-30 10:30:55', '2019-06-30 10:30:55', 16),
('b7efe456-928b-4c16-9392-5cd7cc70b02d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-08 10:25:13', '2019-07-08 10:25:13', 12),
('b952fbff-d083-4887-ba35-454fb6de94a5', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Acknowledged (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-05-12 06:17:07', '2019-05-12 06:17:07', 14),
('b9675d9b-a50f-403b-8770-3b7b18c46b18', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 08:52:41', '2019-04-02 14:53:03', 5),
('b985569d-a1e4-406e-a148-b0c961dd8fea', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-05-15 07:42:20', '2019-05-15 07:42:20', 1),
('ba6ad68c-7e89-4116-b2af-98695a2231e0', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Application Sent to Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-05-14 06:20:32', '2019-05-14 06:20:32', 2),
('bb0cb56a-a831-423e-96c5-b59a7b6cc2de', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Bogra District Jail\",\"appeal_id\":15}', NULL, '2019-06-12 03:58:32', '2019-06-12 03:58:32', 15),
('bcf6cb79-14f0-4c96-94f0-3015c2e7052c', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-09 05:54:35', '2019-07-09 05:54:35', 11),
('bd54c96a-f6a3-4df0-8406-fd0f3c462128', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Application Complete (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:27:12', '2019-07-08 07:27:12', 13),
('bd77dad2-d72f-4f91-b5d4-605efe5d3a32', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:04', '2019-06-12 03:19:04', 2),
('bf957632-da7d-40cc-9e2e-5b62ce9eb249', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Requested (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:50:12', '2019-07-08 07:50:12', 13),
('c0b53f50-b2f3-4176-bc00-27fcc5013567', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Lawyer Requested (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 07:17:18', '2019-07-08 07:17:18', 7),
('c1a5b119-5be1-49bb-9b45-8d69d66cf421', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 06:34:43', '2019-04-02 06:34:43', 6),
('c2af5a02-64aa-4040-aedc-a53056644d4f', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:19', '2019-04-01 06:58:05', '2019-04-01 10:07:19', 2),
('c38cdd5c-2ecf-4c01-a621-95d0e146c6c6', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 07:03:54', '2019-07-08 07:03:54', 7),
('c55feef6-1a22-43c9-8dd0-0d0e9004b981', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:03:54', '2019-04-02 14:53:03', 1),
('c58f6179-b2cf-46cd-ac27-7652035cf245', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Received (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 06:23:46', '2019-05-13 06:23:46', 10),
('c67c901d-8470-43e3-8e46-0368b326c32a', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:03', '2019-06-12 03:19:03', 2),
('c7e7e12f-3734-4a60-86b3-f23ce75b5c24', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:48:58', '2019-07-08 07:48:58', 13),
('c82cef08-d8b4-4967-b316-c25a831ff098', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Lawyer Requested (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 06:32:56', '2019-04-02 06:32:56', 6),
('c867c872-9c54-4ed0-be27-256b1618552d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-01 10:07:19', '2019-04-01 08:07:55', '2019-04-01 10:07:19', 6),
('c87fd811-9c1e-4394-8540-dc2175064fce', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 07:47:44', '2019-04-02 14:53:03', 5),
('c94547ba-9de3-4707-a69a-f8a10f77975d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON sdefr)\",\"appeal_id\":3}', '2019-04-02 14:53:03', '2019-04-01 10:07:56', '2019-04-02 14:53:03', 3),
('ca38c713-2702-4d82-b204-4741cb09f7d6', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Received (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:52:45', '2019-07-08 07:52:45', 13),
('cbee13b2-3da7-40d3-9c6c-4520e5f173b9', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"New Appeals From Bogra District Jail\",\"appeal_id\":11}', '2019-05-08 04:17:22', '2019-04-16 04:44:00', '2019-05-08 04:17:22', 11),
('cc53735a-06fb-4f90-a07e-e79dc6e262a6', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 06:24:24', '2019-05-13 06:24:24', 10),
('ccb0b376-1e18-49f7-adef-b9bedc3d491d', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON fgfh)\",\"appeal_id\":2}', '2019-04-01 10:07:19', '2019-04-01 06:57:57', '2019-04-01 10:07:19', 2),
('ccfe8fad-903d-4542-bb16-81a68ac68c28', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON ABC)\",\"appeal_id\":16}', NULL, '2019-07-10 04:34:03', '2019-07-10 04:34:03', 16),
('cdcb9ee8-3ed3-4529-a76d-981b47090e75', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Lawyer Requested (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 06:48:49', '2019-04-02 14:53:03', 5),
('ced05981-651d-4930-8903-8655ad2af679', 'App\\Notifications\\jappNotification', 'App\\User', 6, 3, '{\"data\":\"Update : Outcome Received (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-05-05 03:56:24', '2019-05-05 03:56:24', 6),
('d27ee0a0-0d72-466a-8e6a-8ea350c4de18', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Acknowledged (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-05-12 04:38:08', '2019-05-12 04:38:08', 11),
('d30078d6-ca63-49ce-875c-073808deada3', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"Update : Application Complete (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-01 05:17:14', '2019-07-01 05:17:14', 11),
('d358c07a-c2a9-48f1-a929-a7a44b6abc23', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 07:06:00', '2019-07-08 07:06:00', 7),
('d41c76c0-f3dd-47bd-8a01-71b5e3f791aa', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 06:37:43', '2019-04-02 14:53:03', 5),
('d5e48776-0888-4449-a184-521c3608ecee', 'App\\Notifications\\jappNotification', 'App\\User', 6, 3, '{\"data\":\"Update : Case Docket Received (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-16 09:45:30', '2019-04-16 09:45:30', 6),
('d6e85aa6-8af3-42ea-8039-aa7a073ff673', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:02', '2019-06-12 03:19:02', 2),
('d8f1b87a-afa7-40fe-a341-783c69bfda70', 'App\\Notifications\\jappNotification', 'App\\User', 17, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdefr)\",\"appeal_id\":1}', NULL, '2019-04-02 10:46:00', '2019-04-02 10:46:00', 1),
('d90f1369-2d2d-481e-9bf2-f8e2f89dbe31', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-08 10:25:13', '2019-07-08 10:25:13', 12),
('d916f2ed-27f2-450b-adee-f315ec10a8d6', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON fgfh)\",\"appeal_id\":2}', NULL, '2019-06-12 03:19:04', '2019-06-12 03:19:04', 2),
('d956ed46-2b02-42c9-9188-11403aebdc42', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdefr)\",\"appeal_id\":3}', '2019-04-02 14:53:03', '2019-04-01 10:21:02', '2019-04-02 14:53:03', 3),
('dcdcac34-4050-412b-a78f-d169b30f084c', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Received (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-01 10:07:19', '2019-04-01 07:51:41', '2019-04-01 10:07:19', 6),
('dec2d4c4-3030-4464-9499-1b31a350d7d2', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 07:18:56', '2019-04-02 07:18:56', 6),
('e33e5d06-9bb6-4afa-b82b-275ea4de8b9c', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Case Docket Requested (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-07 06:18:09', '2019-07-07 06:18:09', 14),
('e41fd466-6062-42ce-a87e-3b958aa51309', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Appeal sent to Bench for Hearing (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 06:36:50', '2019-04-02 06:36:50', 6),
('e5911777-3f08-4cf8-b2d5-06fb36eb0bf6', 'App\\Notifications\\jappNotification', 'App\\User', 1, 2, '{\"data\":\"New Appeals From Manikganj District Jail\",\"appeal_id\":2}', NULL, '2019-03-31 05:03:53', '2019-03-31 05:03:53', 2),
('e6f5108c-2eef-4791-85ba-e066690e4a3c', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Outcome Received (ON sdfsdf)\",\"appeal_id\":6}', '2019-05-12 04:27:56', '2019-05-05 03:56:24', '2019-05-12 04:27:56', 6),
('e8049212-a4a8-46d1-8d45-ae7ecdfeaef8', 'App\\Notifications\\jappNotification', 'App\\User', 23, 3, '{\"data\":\"Update : Application Acknowledged (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-01 07:12:15', '2019-07-01 07:12:15', 12),
('e8854a14-d552-4db8-a75a-f72705671626', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-07-03 07:48:36', '2019-07-03 07:48:36', 11),
('ea17cdc9-69eb-455d-bbf9-48fe4fa3fb4c', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefrdfd)\",\"appeal_id\":14}', NULL, '2019-07-10 04:34:19', '2019-07-10 04:34:19', 14),
('eebe8729-85b0-4d20-b52b-2a50efa6fb35', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:05:50', '2019-04-02 14:53:03', 1),
('eefc3e9e-1d61-4c67-96ba-cb8f9b806539', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 07:43:45', '2019-04-02 14:53:03', 5),
('f120590d-c4d3-4433-93ae-1a1a6db1fea8', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Outcome Received (ON test-002)\",\"appeal_id\":7}', NULL, '2019-07-08 07:23:01', '2019-07-08 07:23:01', 7),
('f314fba2-4d0e-48ec-add2-f41a6d88c4cc', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Application Complete (ON reter)\",\"appeal_id\":4}', '2019-04-02 14:53:03', '2019-04-02 10:49:30', '2019-04-02 14:53:03', 4),
('f35cf09d-842a-4246-80ac-5cdbab65df58', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Case Docket Requested (ON KHUL001)\",\"appeal_id\":12}', NULL, '2019-07-08 10:25:13', '2019-07-08 10:25:13', 12),
('f3623dfd-43bd-4ff9-ab0f-ead2580a6472', 'App\\Notifications\\jappNotification', 'App\\User', 3, 23, '{\"data\":\"New Appeals From Khulna District Jail\",\"appeal_id\":13}', '2019-05-08 04:17:22', '2019-05-07 09:10:31', '2019-05-08 04:17:22', 13),
('f6be2c0b-33f9-4492-8086-38f023166987', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Case Docket Received (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 05:44:10', '2019-04-02 05:44:10', 6),
('f6d1e8ea-22e8-437c-904e-efaa1d4c0041', 'App\\Notifications\\jappNotification', 'App\\User', 3, 2, '{\"data\":\"Update : Application Complete (ON sdefr)\",\"appeal_id\":11}', NULL, '2019-06-30 10:52:45', '2019-06-30 10:52:45', 11),
('f7d91994-5797-48af-880c-2e9836422595', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdfsdf)\",\"appeal_id\":6}', '2019-04-01 10:07:19', '2019-04-01 09:21:18', '2019-04-01 10:07:19', 6);
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `user_id`, `data`, `read_at`, `created_at`, `updated_at`, `appeal_id`) VALUES
('f9977e9d-9cf0-4725-bdd0-ec285b2a12e4', 'App\\Notifications\\jappNotification', 'App\\User', 15, 3, '{\"data\":\"Update : Case Docket Received (ON sdfsdf)\",\"appeal_id\":6}', NULL, '2019-04-02 05:49:47', '2019-04-02 05:49:47', 6),
('fa1eaf47-bced-4ca2-a0f7-86741a096eeb', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Appeal Admitted by Bench (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:03:38', '2019-04-02 14:53:03', 1),
('fa93add4-6909-43fb-80a4-e4fbd17a4792', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Application Sent to Bench (ON sdefr)\",\"appeal_id\":10}', NULL, '2019-05-13 03:55:16', '2019-05-13 03:55:16', 10),
('fe954798-dd50-42a2-989a-9888b6cddedb', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Jail Appeal NO Assigned (ON sdefr)\",\"appeal_id\":1}', '2019-04-02 14:53:03', '2019-04-02 07:06:19', '2019-04-02 14:53:03', 1),
('ffe3b480-8892-4fa3-8260-68a8ccbaf678', 'App\\Notifications\\jappNotification', 'App\\User', 2, 3, '{\"data\":\"Update : Outcome Received (ON sdsd)\",\"appeal_id\":5}', '2019-04-02 14:53:03', '2019-04-02 09:17:12', '2019-04-02 14:53:03', 5),
('fffec435-7a74-4d31-8b0b-0459b806979e', 'App\\Notifications\\jappNotification', 'App\\User', 21, 3, '{\"data\":\"Update : Lawyer Requested (ON KHUL002)\",\"appeal_id\":13}', NULL, '2019-07-08 07:56:04', '2019-07-08 07:56:04', 13);

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

--
-- Dumping data for table `offences`
--

INSERT INTO `offences` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Offence 1', '2019-05-12 05:42:14', '2019-05-12 05:42:14'),
(2, 'Offence 2', '2019-05-12 05:42:25', '2019-05-12 05:42:25'),
(6, 'Offence 3', '2019-05-12 05:42:38', '2019-05-12 05:42:38'),
(8, 'Offence 4', '2019-05-12 05:42:48', '2019-05-12 05:42:48');

-- --------------------------------------------------------

--
-- Stand-in structure for view `onhearingdetails`
-- (See below for the actual view)
--
CREATE TABLE `onhearingdetails` (
`id` int(10) unsigned
,`date_of_sentence` datetime
,`caseno` varchar(191)
,`name` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `overdue_hc`
-- (See below for the actual view)
--
CREATE TABLE `overdue_hc` (
`id` int(10) unsigned
,`prison_id` int(10) unsigned
,`prison_name` varchar(191)
,`prisoner_name` varchar(191)
,`case_no` varchar(191)
,`offence_name` varchar(191)
,`court_name` varchar(191)
,`privacy` tinyint(1)
,`states` varchar(191)
,`statusid` int(10) unsigned
,`mydate` int(7)
);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('aalnoman@outlook.com', '$2y$10$x/NMT10fOhy1TDE.jxScM.CvBgEFqbqi1bratpOypxG9FeazXe08W', '2019-02-03 11:19:42'),
('arifur.rahman@giz.de', '$2y$10$.ZM.XqPFr0hF/2vsEIVD.u5EdyAJI7rUBasRggFlSal4FVsUZhvr.', '2019-02-03 11:24:11'),
('abdullah.noman@giz.de', '$2y$10$T28VwgSIl0QAtCCsjBxBoeZhoX/qXsjuSQrj/fBkBlo6LRsONC5E.', '2019-05-06 06:40:25');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pendingforcc_prison`
-- (See below for the actual view)
--
CREATE TABLE `pendingforcc_prison` (
`id` int(10) unsigned
,`prison_id` int(10) unsigned
,`prison_name` varchar(191)
,`prisoner_name` varchar(191)
,`case_no` varchar(191)
,`offence_name` varchar(191)
,`court_name` varchar(191)
,`privacy` tinyint(1)
,`states` varchar(191)
);

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `id` int(10) UNSIGNED NOT NULL,
  `prisoner_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prisoner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prisoner_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`id`, `prisoner_no`, `prisoner_name`, `prisoner_gender`, `dob`, `created_at`, `updated_at`) VALUES
(1, 'sdefr', 'ss', 'M', 20, '2019-03-31 04:24:58', '2019-03-31 04:24:58'),
(2, 'fgfh', 'ddd', 'F', 30, '2019-03-31 05:53:03', '2019-03-31 05:53:03'),
(3, 'sdefr', 'ddd', 'M', 25, '2019-03-31 05:55:05', '2019-03-31 05:55:05'),
(4, 'reter', 'fdgdsg', 'F', 35, '2019-03-31 05:13:11', '2019-03-31 05:13:11'),
(5, 'sdsd', 'sdsd', 'F', 45, '2019-03-31 05:47:23', '2019-03-31 05:47:23'),
(6, 'sdfsdf', 'dfsfsd', 'M', 50, '2019-03-31 05:10:37', '2019-03-31 05:10:37'),
(7, 'test-002', 'test', 'M', NULL, '2019-04-14 20:13:43', '2019-04-14 20:13:43'),
(8, 'estt-98', 'tettstr', 'M', NULL, '2019-04-14 21:56:20', '2019-04-14 21:56:20'),
(9, 'dfsdf', 'sdfds', 'TG', NULL, '2019-04-14 21:46:27', '2019-04-14 21:46:27'),
(15, 'sdefr', 'ss', 'TG', NULL, '2019-04-16 04:53:41', '2019-04-16 04:53:41'),
(17, 'sdefr', 'ss', 'M', NULL, '2019-04-16 04:59:43', '2019-04-16 04:59:43'),
(18, 'KHUL001', 'MR XYZ', 'M', NULL, '2019-05-06 20:52:37', '2019-05-06 20:52:37'),
(19, 'KHUL002', 'ABCD', 'M', NULL, '2019-05-06 21:31:10', '2019-05-06 21:31:10'),
(20, 'sdefrdfd', 'aa', 'M', NULL, '2019-05-07 20:19:06', '2019-05-07 20:19:06'),
(21, 'test-001', 'Mr.Xyz', 'M', NULL, '2019-06-12 03:32:58', '2019-06-12 03:32:58'),
(22, 'ABC', 'MR. XYZ', 'M', NULL, '2019-06-29 22:54:30', '2019-06-29 22:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner_transfer_history`
--

CREATE TABLE `prisoner_transfer_history` (
  `id` int(10) NOT NULL,
  `appeal_no` int(10) NOT NULL,
  `case_no` int(10) NOT NULL,
  `prison_id` int(10) NOT NULL,
  `prisoner_id` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Information on prisoner transfer';

--
-- Dumping data for table `prisoner_transfer_history`
--

INSERT INTO `prisoner_transfer_history` (`id`, `appeal_no`, `case_no`, `prison_id`, `prisoner_id`, `updated_at`) VALUES
(1, 16, 22, 2, 0, '2019-07-14 04:28:45'),
(2, 16, 22, 5, 0, '2019-07-14 04:29:14'),
(3, 16, 22, 2, 22, '2019-07-14 04:30:54'),
(4, 16, 22, 10, 22, '2019-07-15 07:03:40'),
(5, 16, 22, 2, 22, '2019-07-15 07:28:29'),
(11, 16, 22, 2, 22, '2019-07-15 07:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `prisons`
--

CREATE TABLE `prisons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `disid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prisons`
--

INSERT INTO `prisons` (`id`, `name`, `created_at`, `updated_at`, `disid`) VALUES
(1, 'Barisal Central Jail', '2019-04-24 12:33:59', '2019-04-24 12:33:59', 2),
(2, 'Bogra District Jail', NULL, NULL, 45),
(5, 'Comilla Central Jail xyz', '2019-07-09 03:27:39', '2019-07-09 03:27:39', 31),
(7, 'Dinajpur District Jail', NULL, NULL, 53),
(8, 'Faridpur District Jail1', '2019-01-17 12:19:10', '2019-01-17 12:19:10', 19),
(13, 'Jhenaidah District Jail', NULL, NULL, 34),
(14, 'Kashimpur Central Jail-I', NULL, NULL, 18),
(15, 'Kashimpur Central Jail-II', NULL, NULL, 18),
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
(30, 'Sylhet Central Jail', NULL, NULL, 64),
(31, 'Thakurgaon District Jail', NULL, NULL, 60),
(32, 'Rangpur Central Jail', NULL, NULL, 59),
(33, 'Mymensingh Central Jail', '2019-01-17 10:56:01', '2019-01-17 10:56:01', 42),
(34, 'Test Bargunaa', '2018-12-06 01:35:26', '2018-12-06 01:35:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sentences`
--

CREATE TABLE `sentences` (
  `id` int(10) UNSIGNED NOT NULL,
  `sentence_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sentences`
--

INSERT INTO `sentences` (`id`, `sentence_name`, `created_at`, `updated_at`) VALUES
(1, 'Sentence 1', '2019-07-09 02:41:06', '2019-07-09 02:41:06'),
(42, 'Sentence 2', '2019-05-12 11:43:13', '2019-05-12 11:43:13'),
(43, 'Sentence 3', '2019-05-12 11:43:23', '2019-05-12 11:43:23'),
(49, 'Sentence 4', '2019-05-12 11:43:30', '2019-05-12 11:43:30'),
(52, 'Sentence 5', '2019-05-12 11:43:40', '2019-05-12 11:43:40'),
(53, 'Sentence 6', '2019-05-12 11:43:47', '2019-05-12 11:43:47'),
(55, 'Sentence 7', '2019-05-12 11:44:00', '2019-05-12 11:44:00'),
(56, 'sentence 88', '2019-07-09 02:41:12', '2019-07-09 02:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_in_days` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sequence_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`, `expire_in_days`, `created_at`, `updated_at`, `sequence_no`) VALUES
(1, 'Application Acknowledged', NULL, '2019-04-24 20:44:58', '2019-04-24 20:44:58', NULL),
(2, 'Application Complete', NULL, '2019-03-25 04:23:03', '2019-03-25 04:23:37', NULL),
(3, 'Application Sent to Bench', NULL, '2019-03-25 04:23:06', '2019-03-25 04:23:40', NULL),
(4, 'Appeal Admitted by Bench', NULL, '2019-03-25 04:23:09', '2019-03-25 04:23:44', NULL),
(5, 'Jail Appeal NO Assigned', NULL, '2019-03-25 04:23:12', '2019-03-25 04:23:47', NULL),
(6, 'Case Docket Requested', NULL, '2019-03-25 04:23:15', '2019-03-25 04:23:52', NULL),
(7, 'Case Docket Received', NULL, '2019-03-25 04:23:19', '2019-03-25 04:23:56', NULL),
(8, 'Lawyer Requested', NULL, '2019-03-25 04:23:22', '2019-03-25 04:23:58', NULL),
(9, 'Appeal sent to Bench for Hearing', NULL, '2019-03-25 04:23:25', '2019-03-25 04:24:02', NULL),
(10, 'Outcome Received', NULL, '2019-03-25 04:23:27', '2019-03-25 04:24:06', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `takeaction`
-- (See below for the actual view)
--
CREATE TABLE `takeaction` (
`vid` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `thisyearappealforprison`
-- (See below for the actual view)
--
CREATE TABLE `thisyearappealforprison` (
`id` int(10) unsigned
,`prison_id` int(10) unsigned
,`prison_name` varchar(191)
,`prisoner_name` varchar(191)
,`case_no` varchar(191)
,`offence_name` varchar(191)
,`court_name` varchar(191)
,`privacy` tinyint(1)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `totalappealbyprison`
-- (See below for the actual view)
--
CREATE TABLE `totalappealbyprison` (
`name` varchar(191)
,`prisonsId` decimal(10,0)
,`totalsByPrison` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `totalonhearing`
-- (See below for the actual view)
--
CREATE TABLE `totalonhearing` (
`statusid` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prison_id` int(5) NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `prison_id`, `user_type`, `phone`, `email`, `email_verified_at`, `password`, `district_id`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Prison User', 2, 'user', '01812370702', 'test@outlook.com', '2019-01-29 18:00:00', '$2y$10$EUJb9/Gr7yV0kUeLblENVeEuKRVltRZQkgrZ0q/WcLMXoI9KJcvqS', 31, 'p7t3oF8oOildZQYfoRRtVOzjqCewHDo7wH7CnbzLweRFNKPnQHRC57A2UBs5', 0, '2019-05-05 05:32:42', '2019-05-07 08:17:51'),
(3, 'High Court User', 0, 'admin', NULL, 'user@outlook.com', NULL, '$2y$10$85X3udmGrekuUoGVyRFOWOz.aWxEXFGyOj.MmQC7zBLrsDUsoGvJW', NULL, 'AW2fERiWxxUuYBbsofFv8FSI2ml4UTMjez2pB12f2jsAOwH7PFt4iXskM1Qo', 0, '2019-02-05 06:31:38', '2019-02-05 06:31:38'),
(21, 'barisal prison', 1, 'user', '01812370702', 'barisal@test.com', NULL, '$2y$10$Y49ZhKFDucWWNWEUjlzf8uMbNjVefJGTBpRvD.TLWwjzGks9Y7Z0G', NULL, NULL, 0, '2019-05-06 20:30:10', '2019-05-07 08:33:14'),
(22, 'Khustia Prison', 19, 'user', '1812370702', 'kushtia@test.com', NULL, '$2y$10$IdLwUpla3xl.fNXmPt81w.yfpQzZGdBtL.A166SVscM.iZ1ef3IMW', NULL, NULL, 0, '2019-05-06 20:31:21', '2019-05-07 08:33:19'),
(23, 'Khulna Prison', 17, 'user', '018123707002', 'khulna@test.com', NULL, '$2y$10$INyd/PYjHsqdIpJZvy2Y2up2xvpVm.ZXV.Zc.eifBS57.KERKmW06', NULL, NULL, 0, '2019-05-06 20:32:12', '2019-05-07 08:33:22');

-- --------------------------------------------------------

--
-- Structure for view `all_appeals`
--
DROP TABLE IF EXISTS `all_appeals`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all_appeals`  AS  (select `na`.`id` AS `id`,`prisons`.`id` AS `prison_id`,`prisons`.`name` AS `prison_name`,`prisoner`.`prisoner_name` AS `prisoner_name`,`cases`.`caseno` AS `case_no`,`offences`.`name` AS `offence_name`,`courts`.`name_en` AS `court_name`,`na`.`privacy` AS `privacy` from (((((`newappeals` `na` join `prisons` on((`na`.`prisonid` = `prisons`.`id`))) join `offences` on((`na`.`offenceid` = `offences`.`id`))) join `courts` on((`na`.`courtid` = `courts`.`id`))) join `prisoner` on((`na`.`prisonerid` = `prisoner`.`id`))) join `cases` on((`cases`.`id` = `na`.`caseid`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `appdetails`
--
DROP TABLE IF EXISTS `appdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appdetails`  AS  select `na`.`id` AS `id`,`p`.`id` AS `prison_id`,`p`.`name` AS `prison_name`,`pr`.`prisoner_name` AS `prisoner_name`,`ca`.`caseno` AS `case_no`,`o`.`name` AS `offence_name`,`c`.`name_en` AS `court_name`,`na`.`privacy` AS `privacy` from ((((((`newappeals` `na` join `prisons` `p` on((`na`.`prisonid` = `p`.`id`))) join `offences` `o` on((`na`.`offenceid` = `o`.`id`))) join `courts` `c` on((`c`.`id` = `na`.`courtid`))) join `prisoner` `pr` on((`pr`.`id` = `na`.`prisonerid`))) join `cases` `ca` on((`ca`.`id` = `na`.`caseid`))) join `appealstatus` `ap` on((`ap`.`newappeals_id` = `na`.`id`))) group by `na`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `appealresolved_prison`
--
DROP TABLE IF EXISTS `appealresolved_prison`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appealresolved_prison`  AS  select `na`.`id` AS `id`,`prisons`.`id` AS `prison_id`,`prisons`.`name` AS `prison_name`,`prisoner`.`prisoner_name` AS `prisoner_name`,`cases`.`caseno` AS `case_no`,`offences`.`name` AS `offence_name`,`courts`.`name_en` AS `court_name`,`na`.`privacy` AS `privacy` from (((((((`newappeals` `na` join `prisons` on((`na`.`prisonid` = `prisons`.`id`))) join `offences` on((`na`.`offenceid` = `offences`.`id`))) join `courts` on((`na`.`courtid` = `courts`.`id`))) join `prisoner` on((`na`.`prisonerid` = `prisoner`.`id`))) join `cases` on((`cases`.`id` = `na`.`caseid`))) join `appealstatus` on((`appealstatus`.`newappeals_id` = `na`.`id`))) join `status` on((`status`.`id` = `appealstatus`.`statusid`))) where (`appealstatus`.`statusid` = (select `status`.`id` from `status` order by `status`.`id` desc limit 1)) ;

-- --------------------------------------------------------

--
-- Structure for view `appealsbygender`
--
DROP TABLE IF EXISTS `appealsbygender`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appealsbygender`  AS  select `prisoner`.`prisoner_gender` AS `prisoner_gender`,count(`newappeals`.`id`) AS `appID` from (`prisoner` join `newappeals` on((`prisoner`.`id` = `newappeals`.`prisonerid`))) group by `prisoner`.`prisoner_gender` ;

-- --------------------------------------------------------

--
-- Structure for view `appealsbysentence`
--
DROP TABLE IF EXISTS `appealsbysentence`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appealsbysentence`  AS  select `s`.`sentence_name` AS `sentence_name`,ifnull((select count(`newappeals`.`sentenceid`) from `newappeals` where (`newappeals`.`sentenceid` = `s`.`id`)),0) AS `totalAppeals` from `sentences` `s` ;

-- --------------------------------------------------------

--
-- Structure for view `appealsbystatus`
--
DROP TABLE IF EXISTS `appealsbystatus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appealsbystatus`  AS  select `s`.`id` AS `id`,`s`.`status_name` AS `status_name`,ifnull((select count(`appealstatus`.`statusid`) from `appealstatus` where (`appealstatus`.`statusid` = `s`.`id`)),0) AS `totalAppeals` from `status` `s` ;

-- --------------------------------------------------------

--
-- Structure for view `datatotakeaction`
--
DROP TABLE IF EXISTS `datatotakeaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datatotakeaction`  AS  select `newappeals`.`id` AS `id`,`newappeals`.`date_of_sentence` AS `date_of_sentence`,`cases`.`caseno` AS `caseno`,`prisons`.`name` AS `name` from (((`newappeals` join `cases` on((`newappeals`.`caseid` = `cases`.`id`))) join `documents` on((`newappeals`.`id` = `documents`.`appealid`))) join `prisons` on((`newappeals`.`prisonid` = `prisons`.`id`))) where `newappeals`.`id` in (select `longtimepending`.`newappeals_id` from `longtimepending` where (`longtimepending`.`mydate` > 10)) ;

-- --------------------------------------------------------

--
-- Structure for view `forhearing`
--
DROP TABLE IF EXISTS `forhearing`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `forhearing`  AS  select `longtimepending`.`id` AS `id`,`longtimepending`.`statusid` AS `statusid`,`longtimepending`.`newappeals_id` AS `newappeals_id`,`longtimepending`.`state` AS `state`,`longtimepending`.`updated_at` AS `updated_at`,`longtimepending`.`mydate` AS `mydate` from `longtimepending` where (`longtimepending`.`statusid` = 8) ;

-- --------------------------------------------------------

--
-- Structure for view `hc_incomplete`
--
DROP TABLE IF EXISTS `hc_incomplete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hc_incomplete`  AS  select `newappeals`.`id` AS `id`,`newappeals`.`date_of_sentence` AS `date_of_sentence`,`cases`.`caseno` AS `caseno`,`prisons`.`name` AS `name` from (((`newappeals` join `cases` on((`newappeals`.`caseid` = `cases`.`id`))) join `prisons` on((`newappeals`.`prisonid` = `prisons`.`id`))) join `appealstatus` on((`newappeals`.`id` = `appealstatus`.`newappeals_id`))) where (`appealstatus`.`state` = 'red') ;

-- --------------------------------------------------------

--
-- Structure for view `longtimepending`
--
DROP TABLE IF EXISTS `longtimepending`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `longtimepending`  AS  select `appealstatus`.`id` AS `id`,`appealstatus`.`statusid` AS `statusid`,`appealstatus`.`newappeals_id` AS `newappeals_id`,`appealstatus`.`state` AS `state`,`appealstatus`.`updated_at` AS `updated_at`,(to_days(curdate()) - to_days(`appealstatus`.`updated_at`)) AS `mydate` from `appealstatus` group by `appealstatus`.`newappeals_id` desc ;

-- --------------------------------------------------------

--
-- Structure for view `onhearingdetails`
--
DROP TABLE IF EXISTS `onhearingdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `onhearingdetails`  AS  select `newappeals`.`id` AS `id`,`newappeals`.`date_of_sentence` AS `date_of_sentence`,`cases`.`caseno` AS `caseno`,`prisons`.`name` AS `name` from (((`newappeals` join `cases` on((`newappeals`.`caseid` = `cases`.`id`))) join `documents` on((`newappeals`.`id` = `documents`.`appealid`))) join `prisons` on((`newappeals`.`prisonid` = `prisons`.`id`))) where `newappeals`.`id` in (select `forhearing`.`newappeals_id` from `forhearing`) ;

-- --------------------------------------------------------

--
-- Structure for view `overdue_hc`
--
DROP TABLE IF EXISTS `overdue_hc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `overdue_hc`  AS  select `na`.`id` AS `id`,`p`.`id` AS `prison_id`,`p`.`name` AS `prison_name`,`pr`.`prisoner_name` AS `prisoner_name`,`ca`.`caseno` AS `case_no`,`o`.`name` AS `offence_name`,`c`.`name_en` AS `court_name`,`na`.`privacy` AS `privacy`,`ap`.`state` AS `states`,max(`ap`.`statusid`) AS `statusid`,(to_days(curdate()) - to_days(max(`ap`.`updated_at`))) AS `mydate` from ((((((`newappeals` `na` join `prisons` `p` on((`na`.`prisonid` = `p`.`id`))) join `offences` `o` on((`na`.`offenceid` = `o`.`id`))) join `courts` `c` on((`c`.`id` = `na`.`courtid`))) join `prisoner` `pr` on((`pr`.`id` = `na`.`prisonerid`))) join `cases` `ca` on((`ca`.`id` = `na`.`caseid`))) join `appealstatus` `ap` on((`ap`.`newappeals_id` = `na`.`id`))) group by `na`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `pendingforcc_prison`
--
DROP TABLE IF EXISTS `pendingforcc_prison`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pendingforcc_prison`  AS  select `na`.`id` AS `id`,`prisons`.`id` AS `prison_id`,`prisons`.`name` AS `prison_name`,`prisoner`.`prisoner_name` AS `prisoner_name`,`cases`.`caseno` AS `case_no`,`offences`.`name` AS `offence_name`,`courts`.`name_en` AS `court_name`,`na`.`privacy` AS `privacy`,`appealstatus`.`state` AS `states` from ((((((`newappeals` `na` join `prisons` on((`na`.`prisonid` = `prisons`.`id`))) join `offences` on((`na`.`offenceid` = `offences`.`id`))) join `courts` on((`na`.`courtid` = `courts`.`id`))) join `prisoner` on((`na`.`prisonerid` = `prisoner`.`id`))) join `cases` on((`cases`.`id` = `na`.`caseid`))) join `appealstatus` on((`appealstatus`.`newappeals_id` = `na`.`id`))) where (`appealstatus`.`state` = 'red') ;

-- --------------------------------------------------------

--
-- Structure for view `takeaction`
--
DROP TABLE IF EXISTS `takeaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `takeaction`  AS  select count(`longtimepending`.`id`) AS `vid` from `longtimepending` where (`longtimepending`.`mydate` > 10) ;

-- --------------------------------------------------------

--
-- Structure for view `thisyearappealforprison`
--
DROP TABLE IF EXISTS `thisyearappealforprison`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `thisyearappealforprison`  AS  select `na`.`id` AS `id`,`prisons`.`id` AS `prison_id`,`prisons`.`name` AS `prison_name`,`prisoner`.`prisoner_name` AS `prisoner_name`,`cases`.`caseno` AS `case_no`,`offences`.`name` AS `offence_name`,`courts`.`name_en` AS `court_name`,`na`.`privacy` AS `privacy`,`na`.`created_at` AS `created_at` from (((((`newappeals` `na` join `prisons` on((`na`.`prisonid` = `prisons`.`id`))) join `offences` on((`na`.`offenceid` = `offences`.`id`))) join `courts` on((`na`.`courtid` = `courts`.`id`))) join `prisoner` on((`na`.`prisonerid` = `prisoner`.`id`))) join `cases` on((`cases`.`id` = `na`.`caseid`))) where ((`na`.`created_at` <> 0) and (now() - interval 1 month)) ;

-- --------------------------------------------------------

--
-- Structure for view `totalappealbyprison`
--
DROP TABLE IF EXISTS `totalappealbyprison`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `totalappealbyprison`  AS  select `prisons`.`name` AS `name`,ifnull((select `newappeals`.`prisonid` from `newappeals` where (`newappeals`.`prisonid` = `prisons`.`id`) group by `newappeals`.`prisonid`),0) AS `prisonsId`,ifnull((select count(`newappeals`.`id`) from `newappeals` where (`newappeals`.`prisonid` = `prisons`.`id`)),0) AS `totalsByPrison` from `prisons` ;

-- --------------------------------------------------------

--
-- Structure for view `totalonhearing`
--
DROP TABLE IF EXISTS `totalonhearing`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `totalonhearing`  AS  select count(`onhearingdetails`.`id`) AS `statusid` from `onhearingdetails` ;

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
  ADD KEY `appealstatus_statusid_foreign` (`statusid`),
  ADD KEY `fk_appealstatus_newappeals1_idx` (`newappeals_id`);

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
  ADD KEY `documents_doctypeid_foreign` (`doctypeid`);

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
  ADD KEY `newappeals_sentenceid_foreign` (`sentenceid`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `prisoner_transfer_history`
--
ALTER TABLE `prisoner_transfer_history`
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
  ADD KEY `dis_id` (`id`) USING BTREE;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `appealstatus`
--
ALTER TABLE `appealstatus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `courts`
--
ALTER TABLE `courts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1866;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `newappeals`
--
ALTER TABLE `newappeals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `offences`
--
ALTER TABLE `offences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prisoner`
--
ALTER TABLE `prisoner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `prisoner_transfer_history`
--
ALTER TABLE `prisoner_transfer_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prisons`
--
ALTER TABLE `prisons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sentences`
--
ALTER TABLE `sentences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appealstatus`
--
ALTER TABLE `appealstatus`
  ADD CONSTRAINT `appealstatus_statusid_foreign` FOREIGN KEY (`statusid`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `fk_appealstatus_newappeals1` FOREIGN KEY (`newappeals_id`) REFERENCES `newappeals` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_divid_foreign` FOREIGN KEY (`divid`) REFERENCES `divisions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
