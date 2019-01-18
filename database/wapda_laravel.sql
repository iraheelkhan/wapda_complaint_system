-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 07:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wapda_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Look, I logged something', NULL, NULL, 1, 'App\\User', '[]', '2019-01-11 00:36:04', '2019-01-11 00:36:04'),
(2, 'default', 'Look, I logged something the satatus', 31, 'App\\Complaint', 1, 'App\\User', '{\"customProperty\":\"customValue\"}', '2019-01-11 00:37:57', '2019-01-11 00:37:57'),
(4, 'default', 'Look,raheel khan logged  solve the satatus', 31, 'App\\Complaint', 1, 'App\\User', '{\"customProperty\":\"customValue\"}', '2019-01-11 00:41:52', '2019-01-11 00:41:52'),
(5, 'default', 'Look,raheel khan logged  open the satatus', 31, 'App\\Complaint', 1, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-11 00:43:40', '2019-01-11 00:43:40'),
(6, 'default', 'Look,raheel khan logged  open the satatus', 30, 'App\\Complaint', 1, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-11 00:44:01', '2019-01-11 00:44:01'),
(7, 'complaint_module', 'Look,raheel khan logged  solve the satatus', 30, 'App\\Complaint', 1, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-11 00:47:20', '2019-01-11 00:47:20'),
(8, 'complaint_module', 'Look,raheel khan logged  solve the satatus', 31, 'App\\Complaint', 1, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 04:13:38', '2019-01-16 04:13:38'),
(9, 'complaint_module', 'Look,officer clerk logged  open the satatus', 31, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 04:49:24', '2019-01-16 04:49:24'),
(10, 'complaint_module', 'Look,officer clerk logged  open the satatus', 30, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 04:49:31', '2019-01-16 04:49:31'),
(11, 'complaint_module', 'Look,officer clerk logged  open the satatus', 29, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 04:49:37', '2019-01-16 04:49:37'),
(12, 'complaint_module', 'Look,officer clerk logged  open the satatus', 28, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 04:49:42', '2019-01-16 04:49:42'),
(13, 'complaint_module', 'Look,officer clerk logged  solve the satatus', 28, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 05:11:33', '2019-01-16 05:11:33'),
(14, 'complaint_module', 'Look,officer clerk logged  solve the satatus', 31, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 05:17:59', '2019-01-16 05:17:59'),
(15, 'complaint_module', 'Look,officer clerk logged  solve the satatus', 29, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 05:24:39', '2019-01-16 05:24:39'),
(16, 'complaint_module', 'Look,officer clerk logged  solve the satatus', 30, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 05:31:49', '2019-01-16 05:31:49'),
(17, 'complaint_module', 'Look,officer clerk logged  open the satatus', 30, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 05:32:00', '2019-01-16 05:32:00'),
(18, 'complaint_module', 'Look,officer clerk logged  open the satatus', 29, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 05:32:09', '2019-01-16 05:32:09'),
(19, 'complaint_module', 'Look,officer clerk logged  solve the satatus', 31, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 05:36:13', '2019-01-16 05:36:13'),
(20, 'complaint_module', 'Look,officer clerk logged  solve the satatus', 30, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 05:49:20', '2019-01-16 05:49:20'),
(21, 'complaint_module', 'Look,officer clerk logged  solve the satatus', 30, 'App\\Complaint', 3, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 05:49:21', '2019-01-16 05:49:21'),
(22, 'complaint_module', 'Look,division offier logged  open the satatus', 31, 'App\\Complaint', 4, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 06:53:25', '2019-01-16 06:53:25'),
(23, 'complaint_module', 'Look,division offier logged  solve the satatus', 31, 'App\\Complaint', 4, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 06:53:47', '2019-01-16 06:53:47'),
(24, 'complaint_module', 'Look,division offier logged  open the satatus', 31, 'App\\Complaint', 4, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 06:53:50', '2019-01-16 06:53:50'),
(25, 'complaint_module', 'Look,division offier logged  solve the satatus', 31, 'App\\Complaint', 4, 'App\\User', '{\"status_to\":\"solve\"}', '2019-01-16 06:54:36', '2019-01-16 06:54:36'),
(26, 'complaint_module', 'Look,division offier logged  open the satatus', 31, 'App\\Complaint', 4, 'App\\User', '{\"status_to\":\"open\"}', '2019-01-16 06:54:40', '2019-01-16 06:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `authentication_log`
--

CREATE TABLE `authentication_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authenticatable_id` int(10) UNSIGNED NOT NULL,
  `authenticatable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `login_at` timestamp NULL DEFAULT NULL,
  `logout_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentication_log`
--

INSERT INTO `authentication_log` (`id`, `authenticatable_id`, `authenticatable_type`, `ip_address`, `user_agent`, `login_at`, `logout_at`) VALUES
(1, 1, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 04:38:12', NULL),
(2, 1, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 04:38:48', '2018-12-28 06:55:00'),
(3, 2, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 04:39:16', '2018-12-28 04:45:41'),
(4, 2, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 04:45:48', '2018-12-28 06:52:55'),
(5, 2, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 06:53:45', NULL),
(6, 2, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 06:53:55', NULL),
(7, 2, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 06:54:22', NULL),
(8, 2, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 06:54:42', NULL),
(9, 1, 'App\\User', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '2018-12-28 06:55:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` text NOT NULL,
  `city_description` text NOT NULL,
  `city_code` text NOT NULL,
  `province_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `city_description`, `city_code`, `province_id`, `created_at`, `updated_at`) VALUES
(2, 'asdf', 'asdf', 'asdf', 3, '2018-12-18 06:26:26', '2018-12-18 06:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `c_title` text NOT NULL,
  `c_description` text NOT NULL,
  `c_email` text NOT NULL,
  `c_address` text NOT NULL,
  `c_phone` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `subdivision_id` int(11) NOT NULL,
  `c_reference_no` int(11) NOT NULL,
  `c_tracking_no` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `c_title`, `c_description`, `c_email`, `c_address`, `c_phone`, `user_id`, `division_id`, `subdivision_id`, `c_reference_no`, `c_tracking_no`, `status`, `created_at`, `updated_at`) VALUES
(27, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'this is the very bvasic issuei in our society. so please compalint the tfoldsdafjklasd flsadkfjsad f', 'sdlakfjklsda@gmail.com', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', '1212134444', 2, 3, 11, 2535, '4DVdG6kY', 'open', '2019-01-15 03:47:08', '2018-12-26 04:42:12'),
(28, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'this is the very bvasic issuei in our society. so please compalint the tfoldsdafjklasd flsadkfjsad f', 'sdlakfjklsda@gmail.com', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', '1212134444', 2, 3, 11, 2535, 'ZM7ex3nf', 'open', '2019-01-08 19:00:00', '2019-01-16 05:11:32'),
(29, 'test for the complaints in the title.', 'why i s there an issue in paksiatan for the wpada. there akdsfja fsdak sjfsdis snf kjei anv sajfeioas sdifj \r\nsfkasjkl safwpada. have to ttake care of it. pakistan will g', 'sdlakfjklsda@gmail.com', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', '123123132132', 2, 6, 11, 2535, '1Iz7uaS6', 'open', '2019-01-15 19:00:00', '2019-01-16 05:32:09'),
(30, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjksdf asdflsdkajf sdla;fjsdl;afj sl;adfjksdf asdflsdkajf sdla;fjsdl;afj sl;adfjksdf asdflsdkajf sdla;fjsdl;afj sl;adfjksdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'sdlakfjklsda@gmail.com', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', '123123132132', 1, 6, 12, 2535, '8U7r86O4', 'solve', '2019-01-15 19:00:00', '2019-01-16 05:49:20'),
(31, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'asf sda fsadfsad fasdfasdfasdfsd afasdfasdfasfdasdfasfsadfasf a', 'sdlakfjklsda@gmail.com', 'sa fsdafa fsdafasf', '12100000000', 1, 3, 11, 2535, 'cjF1LpNZ', 'open', '2019-01-16 11:54:40', '2019-01-16 06:54:40'),
(32, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'sdf asfasdf asdfsfas dfsadfasdfasf safasdf saf as fsadfasd fasdf asdf', 'khan@khan.com', 'sdf asdflsdk', '19999999999', 3, 3, 11, 2535, 'afsynmjh', 'open', '2019-01-15 21:57:06', '2019-01-16 06:57:06'),
(33, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjksadf', 'ds fsdflsdkajf sdla;fjsdl;afj sl;adfjksadfsdflsdkajf sdla;fjsdl;afj sl;adfjksadfsdflsdkajf sdla;fjsdl;afj sl;adfjksadfsdflsdkajf sdla;fjsdl;afj sl;adfjksadfsdflsdkajf sdla;fjsdl;afj sl;adfjksadf', 'sdlakfjklsda@gmail.com', 'sa fsdafa fsdafasf', '1212134444', 1, 6, 12, 2535, 'ixdeon3x', 'open', '2019-01-18 01:35:58', '2019-01-18 01:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `division_name` text NOT NULL,
  `division_description` text NOT NULL,
  `division_code` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `division_description`, `division_code`, `created_at`, `updated_at`) VALUES
(3, 'ISB Division', 'islamabad division, which is the federal of the country.', 'ISB', '2018-12-24 00:13:46', '2018-12-24 00:13:46'),
(6, 'ds1111zxcxzc', 'as dfasfasfasf', 'dfaa', '2018-12-24 14:00:54', '2018-12-24 09:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'customer', 'public customer account role');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED NOT NULL,
  `to` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:11:46', '2018-12-28 05:11:46'),
(2, 2, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:11:52', '2018-12-28 05:11:52'),
(3, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:12:22', '2018-12-28 05:12:22'),
(4, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:12:26', '2018-12-28 05:12:26'),
(5, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:12:37', '2018-12-28 05:12:37'),
(6, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:13:58', '2018-12-28 05:13:58'),
(7, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:18:38', '2018-12-28 05:18:38'),
(8, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:21:16', '2018-12-28 05:21:16'),
(9, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:22:02', '2018-12-28 05:22:02'),
(10, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:22:27', '2018-12-28 05:22:27'),
(11, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 05:23:35', '2018-12-28 05:23:35'),
(12, 2, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:24:32', '2018-12-28 05:24:32'),
(13, 2, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:27:52', '2018-12-28 05:27:52'),
(14, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:34:11', '2018-12-28 05:34:11'),
(15, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:37:34', '2018-12-28 05:37:34'),
(16, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:38:01', '2018-12-28 05:38:01'),
(17, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:39:45', '2018-12-28 05:39:45'),
(18, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:42:16', '2018-12-28 05:42:16'),
(19, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:42:54', '2018-12-28 05:42:54'),
(20, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:43:18', '2018-12-28 05:43:18'),
(21, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:43:49', '2018-12-28 05:43:49'),
(22, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 05:44:18', '2018-12-28 05:44:18'),
(23, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 06:41:15', '2018-12-28 06:41:15'),
(24, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:00:21', '2018-12-28 07:00:21'),
(25, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:06:15', '2018-12-28 07:06:15'),
(26, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:06:46', '2018-12-28 07:06:46'),
(27, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:07:29', '2018-12-28 07:07:29'),
(28, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:11:40', '2018-12-28 07:11:40'),
(29, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:12:22', '2018-12-28 07:12:22'),
(30, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:13:02', '2018-12-28 07:13:02'),
(31, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:13:08', '2018-12-28 07:13:08'),
(32, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:13:20', '2018-12-28 07:13:20'),
(33, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:13:40', '2018-12-28 07:13:40'),
(34, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:13:46', '2018-12-28 07:13:46'),
(35, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:13:52', '2018-12-28 07:13:52'),
(36, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:19:14', '2018-12-28 07:19:14'),
(37, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:19:41', '2018-12-28 07:19:41'),
(38, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:52:05', '2018-12-28 07:52:05'),
(39, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 07:59:22', '2018-12-28 07:59:22'),
(40, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 08:09:38', '2018-12-28 08:09:38'),
(41, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 08:27:05', '2018-12-28 08:27:05'),
(42, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 08:39:05', '2018-12-28 08:39:05'),
(43, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 08:40:27', '2018-12-28 08:40:27'),
(44, 1, 1, 'Demo message from user 2 to user 1.', '2018-12-28 08:41:28', '2018-12-28 08:41:28'),
(45, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 08:41:57', '2018-12-28 08:41:57'),
(46, 1, 2, 'Demo message from user 2 to user 1.', '2018-12-28 08:46:22', '2018-12-28 08:46:22');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2017_09_01_000000_create_authentication_log_table', 2),
(3, '2018_12_28_095652_create_messages_table', 3),
(4, '2019_01_11_053111_create_activity_log_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `province_name` text NOT NULL,
  `province_description` text NOT NULL,
  `province_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`, `province_description`, `province_code`) VALUES
(1, 'Punjab', 'big province of pakistan', 'PB'),
(3, 'Khyber Pukhtoon Khwa', 'afjklsdafjkl', 'KPK'),
(4, 'Sindh', 'karachi wala', 'SND'),
(7, 'Balochistan', 'Quetta wala', 'BLN'),
(8, 'Gilgit Baltistan', 'Chitral wala', 'GLT');

-- --------------------------------------------------------

--
-- Table structure for table `subdivisions`
--

CREATE TABLE `subdivisions` (
  `id` int(11) NOT NULL,
  `subdivision_name` text NOT NULL,
  `subdivision_code` text NOT NULL,
  `division_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdivisions`
--

INSERT INTO `subdivisions` (`id`, `subdivision_name`, `subdivision_code`, `division_id`, `created_at`, `updated_at`) VALUES
(11, '12300000aaaaa', 'fsdaf', 3, '2018-12-24 05:14:40', '2018-12-24 00:14:40'),
(12, 'sub divison 1', 'pak123aa', 3, '2018-12-24 05:13:57', '2018-12-24 00:13:57'),
(13, 'sub divison 12222', 'sub1', 3, '2018-12-24 08:13:48', '2018-12-24 08:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'raheel khan', 'irahilkhan@gmail.com', 'raheel', '$2y$10$/CdL/iWOVYMFcqRacGbgL.Txk2mUxMjzx5AVJGdPvEOXqDVTn90rK', 'V22vXpNfJdSWa9FCniXkbPdnGS1ZuBqft2r9jX10QV2G5prL9fV0h1tVwhPW', 'admin', '2018-12-22 01:38:02', '2018-12-22 01:38:02'),
(2, 'mazhar kokhar', 'mazhar@gmail.com', 'mazhar', '$2y$10$e/4lOYoiNUt1OxTMTiVcdO1fNGtfQPGFrIsp2lvIjYVPn8hJuipCy', 'mTUzWiCYoS4It5XBeyIK0Qucd5T3wE468ju4WUjxPejZwoRSVIOXHwugxgRK', 'user', '2018-12-24 02:56:15', '2018-12-24 02:56:15'),
(3, 'officer clerk', 'clerk@wapda.com', 'clerkkhan', '$2y$10$8jGh8zizAkQ61./H/G6tVuRbrmOP9OpZ18GlyHnfDQ./IVevd9K.C', NULL, 'clerk', '2019-01-16 04:47:44', '2019-01-16 04:47:44'),
(4, 'division offier', 'divison@wapda.com', 'divisionofficer', '$2y$10$/0AFB2IGJ2xfN9HmIEuM7uBZgYkhRtzhonMEnn65j99Gr6EA2kCNu', NULL, 'd_officer', '2019-01-16 05:58:46', '2019-01-16 05:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 2),
(6, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `authentication_log`
--
ALTER TABLE `authentication_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authentication_log_authenticatable_id_authenticatable_type_index` (`authenticatable_id`,`authenticatable_type`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdivisions`
--
ALTER TABLE `subdivisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `authentication_log`
--
ALTER TABLE `authentication_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subdivisions`
--
ALTER TABLE `subdivisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
