-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 11, 2019 at 12:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fruitteaworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu`
--

CREATE TABLE `cms_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `kat_menu` int(11) NOT NULL,
  `user_role` enum('Administrator','Admin','User','') NOT NULL,
  `perurutan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_menu`
--

INSERT INTO `cms_menu` (`id_menu`, `nama_menu`, `icon`, `link`, `kat_menu`, `user_role`, `perurutan`, `status`) VALUES
(2, 'User', '', 'UserloginController', 1, 'Admin', 4, 1),
(4, 'Menu', '', 'MenuController', 1, 'Admin', 3, 1),
(5, 'Dashboard', '', 'DashboardController', 1, 'User', 0, 1),
(13, 'Master Game', '', 'MastergameController', 1, 'Administrator', 0, 1),
(14, 'Master Maker', '', 'MastermarkerController', 1, 'Administrator', 0, 1),
(15, 'Leaderboard', '', 'LeaderboardController', 1, 'User', 0, 1),
(16, 'Player', '', 'PlayerController', 1, 'User', 2, 1),
(17, 'Version', '', 'Version', 1, 'User', 2, 1),
(18, 'Sponsor', '', 'SponsorController', 1, 'User', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_user`
--

CREATE TABLE `cms_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Admin','User') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_user`
--

INSERT INTO `cms_user` (`user_id`, `name`, `username`, `password`, `level`, `created_at`) VALUES
(1, 'radhitka', 'raditor', 'radit', 'Admin', '2018-09-18 03:30:30'),
(2, 'Indosat Admin', 'indosatadmin2019', '09bb706fa2ee81f71e95ca7247fbf783', 'User', '2018-09-18 03:39:44'),
(3, 'asd', 'asd', '7815696ecbf1c96e6894b779456d330e', 'Admin', '2018-09-18 03:44:50'),
(6, 'danur123', 'danur', 'danur', 'User', '2018-09-26 01:56:47'),
(7, 'Radhitka', 'radit', '79a91412ad3792662aaa310214572592', 'User', '2019-05-24 06:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `tm_balancing_eventfiture`
--

CREATE TABLE `tm_balancing_eventfiture` (
  `balancing_eventfiture_id` int(11) NOT NULL,
  `radius_scan` int(1) NOT NULL,
  `scan_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_balancing_eventfiture`
--

INSERT INTO `tm_balancing_eventfiture` (`balancing_eventfiture_id`, `radius_scan`, `scan_point`) VALUES
(1, 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `tm_balancing_photoarfiture`
--

CREATE TABLE `tm_balancing_photoarfiture` (
  `balancing_photoar_id` int(11) NOT NULL,
  `scanperdana_point` int(11) NOT NULL,
  `scanberikutnya_point` int(11) NOT NULL,
  `scanmarkernaura_point` int(11) NOT NULL,
  `sharephoto_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_balancing_photoarfiture`
--

INSERT INTO `tm_balancing_photoarfiture` (`balancing_photoar_id`, `scanperdana_point`, `scanberikutnya_point`, `scanmarkernaura_point`, `sharephoto_point`) VALUES
(1, 100, 25, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tm_banner`
--

CREATE TABLE `tm_banner` (
  `banner_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(75) NOT NULL,
  `detail` text NOT NULL,
  `link` varchar(75) NOT NULL,
  `position` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_banner`
--

INSERT INTO `tm_banner` (`banner_id`, `name`, `img`, `detail`, `link`, `position`, `status`, `created_at`, `modified_at`) VALUES
(1, 'Banner Nidji', 'banner-1.png', 'Ini event nidji', 'fruittea.com', 1, 1, '2019-06-19 10:52:54', '2019-06-19 17:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `tm_event`
--

CREATE TABLE `tm_event` (
  `event_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `detail` text NOT NULL,
  `location` varchar(75) NOT NULL,
  `period_start` datetime NOT NULL,
  `period_end` datetime NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_event`
--

INSERT INTO `tm_event` (`event_id`, `name`, `detail`, `location`, `period_start`, `period_end`, `latitude`, `longitude`, `status`, `created_at`, `modified_at`) VALUES
(1, 'Fruit Tea Festival', 'Event Development Process', 'WIR HUB', '2019-07-11 00:00:00', '2019-07-31 00:00:00', '-6.1931953', '106.7690001', 1, '2019-07-11 04:20:20', '2019-07-11 10:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `tm_games`
--

CREATE TABLE `tm_games` (
  `games_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_games`
--

INSERT INTO `tm_games` (`games_id`, `name`, `detail`, `created_at`, `modified_at`) VALUES
(1, 'Music Sensation', 'Game perhitungan poin dari client', '2019-06-13 06:12:10', '2019-06-13 13:12:01'),
(2, 'Event Game', 'Game mencari marker berdasarkan lokasi user, marker hanya bisa discan apabila user berada di lokasi yang ditentukan dan marker hanya bisa discan selama periode berlangsung', '2019-06-13 06:12:13', '2019-06-13 13:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `tm_location`
--

CREATE TABLE `tm_location` (
  `location_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `markerevent_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_location`
--

INSERT INTO `tm_location` (`location_id`, `event_id`, `markerevent_id`, `status`, `created_at`, `modified_at`) VALUES
(1, 1, 1, 1, '2019-07-11 07:03:04', '2019-07-11 14:03:04'),
(2, 1, 2, 1, '2019-07-11 07:03:04', '2019-07-11 14:03:04'),
(3, 1, 3, 1, '2019-07-11 07:03:24', '2019-07-11 14:03:24'),
(4, 1, 4, 1, '2019-07-11 07:03:24', '2019-07-11 14:03:24'),
(5, 1, 5, 1, '2019-07-11 07:03:40', '2019-07-11 14:03:40'),
(6, 1, 6, 1, '2019-07-11 07:03:40', '2019-07-11 14:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `tm_markerevent`
--

CREATE TABLE `tm_markerevent` (
  `markerevent_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `detail` text NOT NULL,
  `marker_img` varchar(75) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_markerevent`
--

INSERT INTO `tm_markerevent` (`markerevent_id`, `name`, `detail`, `marker_img`, `created_at`, `modified_at`) VALUES
(1, 'Marker 1', '-', 'marker-1.jpg', '2019-07-11 04:25:00', '2019-06-13 13:12:51'),
(2, 'Marker 2', '-', 'marker-2.jpg', '2019-06-13 06:13:00', '2019-06-13 13:12:51'),
(3, 'Marker 3', '-', 'marker-3.jpg', '2019-07-11 04:25:41', '2019-07-11 11:25:17'),
(4, 'Marker 4', '-', 'marker-4.jpg', '2019-07-11 04:26:06', '2019-07-11 11:25:17'),
(5, 'Marker 5', '-', 'marker-5.jpg', '2019-07-11 04:26:26', '2019-07-11 11:25:17'),
(6, 'Marker 6', '-', 'marker-6.jpg', '2019-07-11 04:26:30', '2019-07-11 11:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `tm_markerproduct`
--

CREATE TABLE `tm_markerproduct` (
  `markerproduct_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `category` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_markerproduct`
--

INSERT INTO `tm_markerproduct` (`markerproduct_id`, `name`, `img`, `category`, `created_at`, `modified_at`) VALUES
(1, 'Apel AOV Mina', 'aov-1.jpg', 1, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(2, 'Apel AOV Astrid', 'aov-2.jpg', 1, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(3, 'Apel AOV Maloch', 'aov-3.jpg', 1, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(4, 'Blackcurrant AOV Airi', 'aov-4.jpg', 1, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(5, 'Blackcurrant AOV Liliana', 'aov-5.jpg', 1, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(6, 'Blackcurrant AOV Xeniel', 'aov-6.jpg', 1, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(7, 'Apel Free Fire Kelly', 'freefire-1.jpg', 2, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(8, 'Apel Free Fire Kla', 'freefire-2.jpg', 2, '2019-07-03 09:52:03', '2019-06-24 15:51:39'),
(9, 'Apel Free Fire Paloma', 'freefire-3.jpg', 2, '2019-07-03 09:51:59', '2019-06-24 15:51:39'),
(10, 'Blackcurrant Free Fire Nikita', 'freefire-4.jpg', 2, '2019-07-03 09:53:47', '2019-06-24 15:51:39'),
(11, 'Blackcurrant Free Fire Hayato', 'freefire-5.jpg', 2, '2019-07-03 09:53:58', '2019-06-24 15:51:39'),
(12, 'Blackcurrant Free Fire Andrew', 'freefire-6.jpg', 2, '2019-07-03 09:54:01', '2019-06-24 15:51:39'),
(13, 'Freeze Free Fire Misha', 'freefire-7.jpg', 2, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(14, 'Freeze Free Fire Ford', 'freefire-8.jpg', 2, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(15, 'Freeze Free Fire Maxim', 'freefire-9.jpg', 2, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(16, 'Apel Naura', 'naura-1.jpg', 3, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(17, 'Blackcurrant Naura', 'naura-2.jpg', 3, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(18, 'Freeze Naura', 'naura-3.jpg', 3, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(19, 'Jambu Klutuk Naura', 'naura-4.jpg', 3, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(20, 'Stroberi Naura', 'naura-5.jpg', 3, '2019-06-24 08:51:46', '2019-06-24 15:51:39'),
(21, 'X-Treme Naura', 'naura-6.jpg', 3, '2019-06-24 08:51:46', '2019-06-24 15:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `tm_menu-apps`
--

CREATE TABLE `tm_menu-apps` (
  `menu-apps_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(75) NOT NULL,
  `position` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_menu-apps`
--

INSERT INTO `tm_menu-apps` (`menu-apps_id`, `name`, `img`, `position`, `status`) VALUES
(1, 'AR Fun Photo', 'MK_1.png', 1, 1),
(2, 'Banjir Hadiah', 'MK_2.png', 3, 1),
(3, 'Music Sensation', 'MK_3.png', 2, 1),
(4, 'Fun of Events', 'MK_4.png', 4, 1),
(5, 'Kreasi Fruit Tea', 'MK_5.png', 5, 1),
(6, 'Sponsorship Form', 'MK_6.png', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_sourcepoint`
--

CREATE TABLE `tm_sourcepoint` (
  `sourcepoint_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_sourcepoint`
--

INSERT INTO `tm_sourcepoint` (`sourcepoint_id`, `name`, `status`) VALUES
(1, 'Scan for AR Fun Photo', 1),
(2, 'Share AR Fun Photo', 1),
(3, 'Games Music Sensation', 1),
(4, 'Games Events', 1),
(5, 'Scan Bottle Code', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_version`
--

CREATE TABLE `tm_version` (
  `version_id` int(11) NOT NULL,
  `version` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `wording_detail` text NOT NULL,
  `change_log` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_version`
--

INSERT INTO `tm_version` (`version_id`, `version`, `status`, `wording_detail`, `change_log`, `created_at`) VALUES
(1, '1.0', 1, 'Development process', '-', '2019-06-13 06:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `ttr_eventscan`
--

CREATE TABLE `ttr_eventscan` (
  `eventscan_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `mypoint_id` int(11) NOT NULL,
  `distance_scan` int(11) NOT NULL COMMENT 'jarak scan dalam meter',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttr_eventscan`
--

INSERT INTO `ttr_eventscan` (`eventscan_id`, `location_id`, `mypoint_id`, `distance_scan`, `created_at`) VALUES
(1, 1, 25, 82, '2019-07-10 09:51:07'),
(3, 2, 27, 82, '2019-07-11 09:57:42'),
(4, 6, 28, 82, '2019-07-11 09:58:13'),
(5, 4, 29, 284, '2019-07-11 10:01:22'),
(6, 1, 30, 284, '2019-07-11 10:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `ttr_gamescore`
--

CREATE TABLE `ttr_gamescore` (
  `gamescore_id` int(11) NOT NULL,
  `mypoint_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttr_gamescore`
--

INSERT INTO `ttr_gamescore` (`gamescore_id`, `mypoint_id`, `score`, `created_at`) VALUES
(1, 23, 15000, '2019-07-02 10:24:18'),
(2, 24, 15000, '2019-07-09 04:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `ttr_mypoint`
--

CREATE TABLE `ttr_mypoint` (
  `mypoint_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sourcepoint_id` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `my_point_now` int(11) NOT NULL DEFAULT '0',
  `code` varchar(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttr_mypoint`
--

INSERT INTO `ttr_mypoint` (`mypoint_id`, `user_id`, `sourcepoint_id`, `point`, `my_point_now`, `code`, `created_at`) VALUES
(2, 15, 1, 100, 100, 'CR', '2019-07-01 08:40:13'),
(3, 15, 1, 5, 105, 'CR', '2019-07-01 08:40:15'),
(4, 15, 1, 100, 205, 'CR', '2019-07-01 08:40:20'),
(5, 15, 1, 100, 305, 'CR', '2019-07-01 08:40:23'),
(6, 15, 1, 100, 405, 'CR', '2019-07-01 08:40:26'),
(7, 15, 1, 100, 505, 'CR', '2019-07-01 08:40:29'),
(8, 15, 1, 100, 605, 'CR', '2019-07-01 08:40:33'),
(10, 15, 2, 50, 655, 'CR', '2019-07-01 08:40:35'),
(11, 15, 2, 50, 705, 'CR', '2019-07-01 08:40:54'),
(12, 15, 1, 0, 705, 'CR', '2019-07-01 08:40:57'),
(13, 15, 2, 50, 755, 'CR', '2019-07-01 08:41:01'),
(14, 15, 1, 100, 855, 'CR', '2019-07-01 09:02:38'),
(15, 15, 2, 50, 905, 'CR', '2019-07-01 09:07:01'),
(16, 15, 2, 50, 955, 'CR', '2019-07-01 09:07:28'),
(17, 15, 1, 100, 1055, 'CR', '2019-07-01 09:07:43'),
(18, 15, 1, 5, 1060, 'CR', '2019-07-01 09:07:54'),
(19, 15, 1, 5, 1065, 'CR', '2019-07-01 09:47:20'),
(20, 15, 1, 100, 1165, 'CR', '2019-07-01 09:47:35'),
(21, 15, 2, 50, 1215, 'CR', '2019-07-01 09:47:48'),
(22, 15, 2, 50, 1265, 'CR', '2019-07-01 09:48:28'),
(23, 15, 3, 15, 1280, 'CR', '2019-07-02 10:24:18'),
(24, 15, 3, 15, 1295, 'CR', '2019-07-09 04:02:02'),
(25, 15, 4, 500, 1795, 'CR', '2019-07-11 09:51:07'),
(27, 15, 4, 500, 2295, 'CR', '2019-07-11 09:57:42'),
(28, 15, 4, 500, 2795, 'CR', '2019-07-11 09:58:13'),
(29, 15, 4, 500, 3295, 'CR', '2019-07-11 10:01:22'),
(30, 15, 4, 500, 3795, 'CR', '2019-07-11 10:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `ttr_productcollection`
--

CREATE TABLE `ttr_productcollection` (
  `productcollection_id` int(11) NOT NULL,
  `markerproduct_id` int(11) NOT NULL,
  `mypoint_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttr_productcollection`
--

INSERT INTO `ttr_productcollection` (`productcollection_id`, `markerproduct_id`, `mypoint_id`, `created_at`) VALUES
(2, 5, 2, '2019-06-25 08:52:00'),
(3, 5, 3, '2019-06-26 08:56:19'),
(4, 3, 4, '2019-06-26 08:56:56'),
(5, 1, 5, '2019-06-26 09:40:46'),
(6, 2, 6, '2019-06-27 03:48:17'),
(7, 13, 7, '2019-06-27 03:50:46'),
(8, 8, 8, '2019-06-27 04:10:55'),
(9, 19, 9, '2019-06-27 04:11:06'),
(10, 19, 12, '2019-06-27 09:53:37'),
(11, 12, 14, '2019-07-01 09:01:59'),
(12, 7, 17, '2019-07-01 09:07:44'),
(13, 1, 18, '2019-07-01 09:07:54'),
(14, 2, 19, '2019-07-01 09:47:20'),
(15, 6, 20, '2019-07-01 09:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `ttr_productshare`
--

CREATE TABLE `ttr_productshare` (
  `productshare_id` int(11) NOT NULL,
  `markerproduct_id` int(11) NOT NULL,
  `mypoint_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttr_productshare`
--

INSERT INTO `ttr_productshare` (`productshare_id`, `markerproduct_id`, `mypoint_id`, `created_at`) VALUES
(1, 1, 10, '2019-06-27 09:26:40'),
(2, 3, 11, '2019-06-27 09:27:11'),
(3, 5, 13, '2019-06-27 09:54:16'),
(4, 5, 15, '2019-07-01 09:07:01'),
(5, 3, 16, '2019-07-01 09:07:29'),
(6, 2, 21, '2019-07-01 09:47:48'),
(7, 8, 22, '2019-07-01 09:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `ttr_sponsorship`
--

CREATE TABLE `ttr_sponsorship` (
  `sponsorship_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(75) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `address` varchar(175) NOT NULL,
  `description` text NOT NULL,
  `attachment` varchar(75) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttr_sponsorship`
--

INSERT INTO `ttr_sponsorship` (`sponsorship_id`, `user_id`, `name`, `hp`, `email`, `school_name`, `address`, `description`, `attachment`, `created_at`) VALUES
(6, 9, 'Siswa 1', '087881387340', 'myevent@gmail.com', 'Sekolahku', '', 'Ini adalah contoh proposal event di sekolahku', '9-20190514-111019.pdf', '2019-05-14 04:10:19'),
(7, 1, 'Siswa 1', '087881387340', 'myevent@gmail.com', 'Sekolahku', '', 'Ini adalah contoh proposal event di sekolahku', '1-20190523-142932.pdf', '2019-05-23 07:29:32'),
(8, 8, 'Siswa 1', '087881387340', 'myevent@gmail.com', 'Sekolahku', '', 'Ini adalah contoh proposal event di sekolahku', '8-20190523-144628.pdf', '2019-05-23 07:46:28'),
(9, 9, 'Siswa 1', '087881387340', 'myevent@gmail.com', 'Sekolahku', '', 'Ini adalah contoh proposal event di sekolahku', '9-20190529-160646.pdf', '2019-05-29 09:06:46'),
(10, 9, 'Siswa 1', '087881387340', 'myevent@gmail.com', 'Sekolahku', '', 'Ini adalah contoh proposal event di sekolahku', '9-20190529-160936.pdf', '2019-05-29 09:09:36'),
(19, 1, 'Siswa Teladan', '087881387340', 'gilang@ar-innovation.com', 'Sekolahku', '', 'Ini adalah contoh proposal event di sekolahku', '1-20190618-135011.pdf', '2019-06-18 06:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `tu_log_auth`
--

CREATE TABLE `tu_log_auth` (
  `log_auth_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity` varchar(75) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tu_log_auth`
--

INSERT INTO `tu_log_auth` (`log_auth_id`, `user_id`, `activity`, `detail`, `created_at`) VALUES
(29, 8, 'Registration', 'Success registration via facebook account.', '2019-05-10 08:06:34'),
(30, 8, 'Login', 'Success login via facebook account.', '2019-05-10 08:06:46'),
(31, 8, 'Banned', 'Indicated cheating when login via 3rd party.', '2019-05-10 08:07:07'),
(32, 8, 'Banned', 'Indicated cheating when login via 3rd party.', '2019-05-10 08:10:42'),
(33, 8, 'Login', 'Success login via facebook account.', '2019-05-10 08:10:59'),
(34, 8, 'Banned', 'Indicated cheating when login via 3rd party.', '2019-05-10 08:11:14'),
(35, 9, 'Registration', 'Success registration via default.', '2019-05-10 08:11:26'),
(36, 9, 'Email Verification', 'Success verification email.', '2019-05-10 08:11:46'),
(37, 9, 'Login', 'Success login via default account.', '2019-05-10 08:11:54'),
(38, 9, 'Login', 'Success login via facebook account.', '2019-05-10 08:12:26'),
(39, 9, 'Login', 'Success login via google account.', '2019-05-10 08:12:40'),
(40, 8, 'Login', 'Success login via facebook account.', '2019-05-10 08:30:27'),
(41, 8, 'Login', 'Success login via google account.', '2019-05-10 08:32:37'),
(42, 8, 'Login', 'Success login via facebook account.', '2019-05-10 08:32:42'),
(43, 9, 'Login', 'Success login via default account.', '2019-05-13 08:12:47'),
(44, 9, 'Logout', 'Success logout', '2019-05-13 08:44:54'),
(45, 9, 'Logout', 'Success logout', '2019-05-13 08:45:15'),
(46, 9, 'Login', 'Success login via default account.', '2019-05-13 08:45:38'),
(47, 9, 'Logout', 'Success logout', '2019-05-13 08:45:49'),
(48, 9, 'Login', 'Success login via default account.', '2019-05-13 08:50:24'),
(49, 9, 'Login', 'Success login via default account.', '2019-05-13 08:50:31'),
(50, 9, 'Login', 'Success login via default account.', '2019-05-13 08:54:51'),
(51, 9, 'Logout', 'Success logout', '2019-05-13 08:54:55'),
(52, 9, 'Logout', 'Success logout', '2019-05-13 08:58:14'),
(53, 9, 'Login', 'Success login via default account.', '2019-05-13 09:02:36'),
(54, 9, 'Logout', 'Success logout', '2019-05-13 09:03:34'),
(55, 9, 'Login', 'Success login via default account.', '2019-05-13 09:05:45'),
(56, 9, 'Logout', 'Success logout', '2019-05-13 09:07:05'),
(57, 9, 'Login', 'Success login via default account.', '2019-05-13 09:09:31'),
(58, 9, 'Login', 'Success login via default account.', '2019-05-13 09:10:34'),
(59, 9, 'Logout', 'Success logout', '2019-05-13 09:13:12'),
(60, 9, 'Login', 'Success login via default account.', '2019-05-13 09:14:39'),
(61, 9, 'Logout', 'Success logout', '2019-05-13 09:14:45'),
(62, 9, 'Login', 'Success login via default account.', '2019-05-14 04:08:13'),
(63, 8, 'Login', 'Success login via facebook account.', '2019-05-14 07:20:56'),
(64, 8, 'Login', 'Success login via facebook account.', '2019-05-14 07:21:12'),
(65, 8, 'Banned', 'Indicated cheating when login via 3rd party.', '2019-05-14 07:21:22'),
(66, 8, 'Login', 'Success login via google account.', '2019-05-14 08:24:46'),
(67, 8, 'Banned', 'Indicated cheating when login via 3rd party.', '2019-05-14 08:24:57'),
(68, 8, 'Login', 'Success login via facebook account.', '2019-05-14 08:26:21'),
(69, 8, 'Login', 'Success login via facebook account.', '2019-05-14 08:26:26'),
(70, 8, 'Login', 'Success login via google account.', '2019-05-14 08:26:32'),
(71, 8, 'Login', 'Success login via facebook account.', '2019-05-14 08:26:39'),
(72, 8, 'Login', 'Success login via google account.', '2019-05-14 09:47:08'),
(81, 8, 'Logout', 'Success logout', '2019-05-14 09:53:42'),
(82, 9, 'Login', 'Success login via default account.', '2019-05-14 09:53:53'),
(83, 9, 'Login', 'Success login via default account.', '2019-05-14 09:54:23'),
(84, 8, 'Login', 'Success login via google account.', '2019-05-14 09:54:37'),
(85, 8, 'Login', 'Success login via google account.', '2019-05-14 09:54:47'),
(86, 8, 'Login', 'Success login via google account.', '2019-05-23 07:45:26'),
(87, 9, 'Login', 'Success login via default account.', '2019-05-29 08:58:45'),
(88, 10, 'Registration', 'Success registration via default.', '2019-06-18 06:55:36'),
(89, 11, 'Registration', 'Success registration via default.', '2019-06-18 06:58:44'),
(90, 12, 'Registration', 'Success registration via default.', '2019-06-18 07:16:28'),
(91, 13, 'Registration', 'Success registration via default.', '2019-06-18 07:19:10'),
(92, 14, 'Registration', 'Success registration via default.', '2019-06-18 07:22:39'),
(93, 14, 'Email Verification', 'Success verification email.', '2019-06-19 10:23:26'),
(94, 15, 'Registration', 'Success registration via default.', '2019-06-24 03:12:30'),
(95, 15, 'Email Verification', 'Success verification email.', '2019-06-25 08:04:30'),
(96, 15, 'Login', 'Success login via default account.', '2019-06-25 08:04:36'),
(97, 15, 'Login', 'Success login via default account.', '2019-06-25 08:11:22'),
(98, 15, 'Login', 'Success login via default account.', '2019-06-25 08:11:23'),
(99, 15, 'Login', 'Success login via default account.', '2019-06-26 03:16:55'),
(100, 15, 'Login', 'Success login via default account.', '2019-07-02 09:11:52'),
(101, 16, 'Registration', 'Success registration via default.', '2019-07-04 04:14:44'),
(102, 16, 'Login', 'Success login via default account.', '2019-07-04 04:15:10'),
(103, 17, 'Registration', 'Success registration via default.', '2019-07-04 04:18:15'),
(104, 20, 'Login', 'Success login via default account.', '2019-07-04 06:59:22'),
(105, 15, 'Login', 'Success login via default account.', '2019-07-04 10:26:06'),
(106, 15, 'Login', 'Failed login, entered wrong password.', '2019-07-04 11:31:52'),
(107, 15, 'Login', 'Failed login, entered wrong password.', '2019-07-04 11:35:25'),
(108, 15, 'Login', 'Failed login, entered wrong password.', '2019-07-05 03:30:30'),
(109, 15, 'Login', 'Success login via default account.', '2019-07-05 03:30:35'),
(110, 22, 'Registration', 'Success registration via default.', '2019-07-05 03:59:26'),
(111, 15, 'Login', 'Success login via default account.', '2019-07-05 04:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `tu_status`
--

CREATE TABLE `tu_status` (
  `status_u_id` int(11) NOT NULL,
  `my_points` int(11) NOT NULL DEFAULT '0',
  `regis_type` int(11) NOT NULL,
  `token` varchar(250) NOT NULL,
  `account_verif` varchar(125) NOT NULL,
  `status_regis_email_send` int(1) NOT NULL,
  `reset_passwd_verif` varchar(125) DEFAULT NULL,
  `status_c_id` int(11) NOT NULL,
  `failed_login_attempt` int(1) NOT NULL,
  `blocked_time` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tu_status`
--

INSERT INTO `tu_status` (`status_u_id`, `my_points`, `regis_type`, `token`, `account_verif`, `status_regis_email_send`, `reset_passwd_verif`, `status_c_id`, `failed_login_attempt`, `blocked_time`, `created_at`, `modified_at`) VALUES
(8, 0, 2, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjgiLCJlbWFpbCI6InRlc3RlckBhci1pbm5vdmF0aW9uLmNvbSIsInR1X3N0YXR1cyI6IjMiLCJpYXQiOjE1NTg1OTc1MjcsImV4cCI6MTU5MDIxOTkyN30.wtpteZx-HVBHCHxajcRUoFTwNKhKDYqZfbAn2lp8VuE', '', 1, NULL, 1, 0, '0000-00-00 00:00:00', '2019-05-23 07:45:27', '2019-05-10 15:06:34'),
(9, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjkiLCJlbWFpbCI6ImdpbGFuZ0Bhci1pbm5vdmF0aW9uLmNvbSIsInR1X3N0YXR1cyI6IjEiLCJpYXQiOjE1NTkxMjAzMjYsImV4cCI6MTU5MDc0MjcyNn0.QZqfscqo4WVUdC_UVXvCVb8WRCm2aWpJWid1oOgoCN8', '', 1, NULL, 1, 0, '0000-00-00 00:00:00', '2019-05-29 08:58:46', '2019-05-10 15:11:22'),
(14, 0, 1, '', '', 1, NULL, 1, 0, '0000-00-00 00:00:00', '2019-06-19 10:23:26', '2019-06-18 14:22:39'),
(15, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjE1IiwiZW1haWwiOiJnaWxhbmdAYXItaW5ub3ZhdGlvbi5jb20iLCJ0dV9zdGF0dXMiOiIxIiwiaWF0IjoxNTYyMzAwODY1LCJleHAiOjE1OTM5MjMyNjV9.bzAC33NdwbctIhmQqx6_cUjq-TCVXhK_1TEDkr78mrU', '', 1, '7a763c054a604205b9e1d29e97a036ed', 1, 0, '0000-00-00 00:00:00', '2019-07-05 04:27:54', '2019-06-24 10:12:27'),
(19, 0, 1, '', '1148c5b6286308bd3856f3ea96af9bad', 0, NULL, 1, 0, '0000-00-00 00:00:00', '2019-07-04 04:20:58', '2019-07-04 11:20:58'),
(20, 0, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjIwIiwiZW1haWwiOiJnaWxhbmcxMkBhci1pbm50aW9uLmNvbSIsInR1X3N0YXR1cyI6IjEiLCJpYXQiOjE1NjIyMjM1NjMsImV4cCI6MTU5Mzg0NTk2M30.66NZd2A2a9aqcfwPpYjwPKcWsvmGn9HxHIXQTlGzjbw', 'd20d438980ab97ed6c3ebcdec604a564', 0, NULL, 1, 0, '0000-00-00 00:00:00', '2019-07-04 06:59:23', '2019-07-04 13:55:23'),
(21, 0, 1, '', '1b53ec22d4d329424d78dd7fdeee0708', 0, NULL, 1, 0, '0000-00-00 00:00:00', '2019-07-05 03:58:22', '2019-07-05 10:58:22'),
(22, 0, 1, '', 'cd4d7fb76fcb25126e7b5ce5cc3873dd', 1, NULL, 1, 0, '0000-00-00 00:00:00', '2019-07-05 03:59:26', '2019-07-05 10:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `tu_user`
--

CREATE TABLE `tu_user` (
  `user_id` int(11) NOT NULL,
  `status_u_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `passwd` varchar(125) NOT NULL,
  `hp` varchar(13) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tu_user`
--

INSERT INTO `tu_user` (`user_id`, `status_u_id`, `name`, `email`, `passwd`, `hp`, `created_at`, `modified_at`) VALUES
(8, 8, 'tester', 'tester@ar-innovation.com', '774636aec194cff45c4798288588488a', '-', '2019-05-14 08:24:57', '2019-05-10 15:06:34'),
(9, 9, 'My Account', 'gilang2@ar-innovation.com', '6d8f8a1a4837f099459ec46a72660f30', '082213190180', '2019-06-18 06:55:02', '2019-05-10 15:11:22'),
(14, 14, 'Gils', 'oldgilang@ar-innovation.com', '6d8f8a1a4837f099459ec46a72660f30', '082213190185', '2019-06-24 03:12:02', '2019-06-18 14:22:39'),
(15, 15, 'Gils', 'gilang@ar-innovation.com', 'a2d0b614c098d5a435fb6cbfd05c5f93', '082213190170', '2019-07-04 11:31:30', '2019-06-24 10:12:28'),
(19, 19, 'Gils', 'gilang12@ar-innovation.com', '6d8f8a1a4837f099459ec46a72660f30', '', '2019-07-04 04:20:59', '2019-07-04 11:20:59'),
(20, 20, 'Gils', 'gilang12@ar-inntion.com', '6d8f8a1a4837f099459ec46a72660f30', '', '2019-07-04 06:55:23', '2019-07-04 13:55:23'),
(21, 21, 'Gils', 'gilang12@ar-inontion.com', '6d8f8a1a4837f099459ec46a72660f30', '', '2019-07-05 03:58:22', '2019-07-05 10:58:22'),
(22, 22, 'Gils', 'gilang12@aqr-inontion.com', '6d8f8a1a4837f099459ec46a72660f30', '', '2019-07-05 03:59:26', '2019-07-05 10:59:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_menu`
--
ALTER TABLE `cms_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tm_balancing_eventfiture`
--
ALTER TABLE `tm_balancing_eventfiture`
  ADD PRIMARY KEY (`balancing_eventfiture_id`);

--
-- Indexes for table `tm_balancing_photoarfiture`
--
ALTER TABLE `tm_balancing_photoarfiture`
  ADD PRIMARY KEY (`balancing_photoar_id`);

--
-- Indexes for table `tm_banner`
--
ALTER TABLE `tm_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tm_event`
--
ALTER TABLE `tm_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tm_games`
--
ALTER TABLE `tm_games`
  ADD PRIMARY KEY (`games_id`);

--
-- Indexes for table `tm_location`
--
ALTER TABLE `tm_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tm_markerevent`
--
ALTER TABLE `tm_markerevent`
  ADD PRIMARY KEY (`markerevent_id`);

--
-- Indexes for table `tm_markerproduct`
--
ALTER TABLE `tm_markerproduct`
  ADD PRIMARY KEY (`markerproduct_id`);

--
-- Indexes for table `tm_menu-apps`
--
ALTER TABLE `tm_menu-apps`
  ADD PRIMARY KEY (`menu-apps_id`);

--
-- Indexes for table `tm_sourcepoint`
--
ALTER TABLE `tm_sourcepoint`
  ADD PRIMARY KEY (`sourcepoint_id`);

--
-- Indexes for table `tm_version`
--
ALTER TABLE `tm_version`
  ADD PRIMARY KEY (`version_id`);

--
-- Indexes for table `ttr_eventscan`
--
ALTER TABLE `ttr_eventscan`
  ADD PRIMARY KEY (`eventscan_id`);

--
-- Indexes for table `ttr_gamescore`
--
ALTER TABLE `ttr_gamescore`
  ADD PRIMARY KEY (`gamescore_id`);

--
-- Indexes for table `ttr_mypoint`
--
ALTER TABLE `ttr_mypoint`
  ADD PRIMARY KEY (`mypoint_id`);

--
-- Indexes for table `ttr_productcollection`
--
ALTER TABLE `ttr_productcollection`
  ADD PRIMARY KEY (`productcollection_id`);

--
-- Indexes for table `ttr_productshare`
--
ALTER TABLE `ttr_productshare`
  ADD PRIMARY KEY (`productshare_id`);

--
-- Indexes for table `ttr_sponsorship`
--
ALTER TABLE `ttr_sponsorship`
  ADD PRIMARY KEY (`sponsorship_id`);

--
-- Indexes for table `tu_log_auth`
--
ALTER TABLE `tu_log_auth`
  ADD PRIMARY KEY (`log_auth_id`);

--
-- Indexes for table `tu_status`
--
ALTER TABLE `tu_status`
  ADD PRIMARY KEY (`status_u_id`);

--
-- Indexes for table `tu_user`
--
ALTER TABLE `tu_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_menu`
--
ALTER TABLE `cms_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tm_balancing_eventfiture`
--
ALTER TABLE `tm_balancing_eventfiture`
  MODIFY `balancing_eventfiture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_balancing_photoarfiture`
--
ALTER TABLE `tm_balancing_photoarfiture`
  MODIFY `balancing_photoar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_banner`
--
ALTER TABLE `tm_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_event`
--
ALTER TABLE `tm_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_games`
--
ALTER TABLE `tm_games`
  MODIFY `games_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_location`
--
ALTER TABLE `tm_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tm_markerevent`
--
ALTER TABLE `tm_markerevent`
  MODIFY `markerevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tm_markerproduct`
--
ALTER TABLE `tm_markerproduct`
  MODIFY `markerproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tm_menu-apps`
--
ALTER TABLE `tm_menu-apps`
  MODIFY `menu-apps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tm_sourcepoint`
--
ALTER TABLE `tm_sourcepoint`
  MODIFY `sourcepoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tm_version`
--
ALTER TABLE `tm_version`
  MODIFY `version_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ttr_eventscan`
--
ALTER TABLE `ttr_eventscan`
  MODIFY `eventscan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ttr_gamescore`
--
ALTER TABLE `ttr_gamescore`
  MODIFY `gamescore_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ttr_mypoint`
--
ALTER TABLE `ttr_mypoint`
  MODIFY `mypoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ttr_productcollection`
--
ALTER TABLE `ttr_productcollection`
  MODIFY `productcollection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ttr_productshare`
--
ALTER TABLE `ttr_productshare`
  MODIFY `productshare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ttr_sponsorship`
--
ALTER TABLE `ttr_sponsorship`
  MODIFY `sponsorship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tu_log_auth`
--
ALTER TABLE `tu_log_auth`
  MODIFY `log_auth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tu_status`
--
ALTER TABLE `tu_status`
  MODIFY `status_u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tu_user`
--
ALTER TABLE `tu_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
