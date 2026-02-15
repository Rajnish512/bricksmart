-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022 at 10:18 PM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i8731842_lara2`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertises`
--

INSERT INTO `advertises` (`id`, `name`, `cname`, `email`, `number`, `city`, `created_at`, `updated_at`) VALUES
(2, 'nomi', 'ssdsdsds', 'admin@sinoxfx.com', '23323232', 'dsdsdsd', '2022-08-30 12:10:49', '2022-08-30 12:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `become_sellers`
--

CREATE TABLE `become_sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Authorised` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Distributor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dealer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` json NOT NULL,
  `Mobile` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Company` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Additional` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `become_sellers`
--

INSERT INTO `become_sellers` (`id`, `Manufacturer`, `Authorised`, `Distributor`, `Dealer`, `category`, `Mobile`, `Company`, `Contact`, `Email`, `Additional`, `created_at`, `updated_at`) VALUES
(7, 'Manufacturer', NULL, NULL, NULL, '[\"Cement\", \"Sand & Aggregates\", \"Electrical\", \"Plumbing\"]', '08299032047', 'qwer', 'Rajnish Mishra', 'rajnishm4112@gmail.com', 'gh', '2022-08-31 17:17:39', '2022-08-31 17:17:39'),
(8, 'Authorised Dealer', NULL, NULL, NULL, '[\"Cement\", \"Sand & Aggregates\", \"Bricks & Blocks\"]', '08299032047', 'qwer', 'Rajnish Mishra', 'rajnishm411@gmail.com', 'rf', '2022-08-31 17:35:00', '2022-08-31 17:35:00'),
(10, NULL, NULL, NULL, NULL, '{\"9\": \"Cement\"}', '2222', '2345', 'qwfg', 'nomi887933@gmail.com', '22222', '2022-09-09 12:38:46', '2022-09-09 12:38:46'),
(11, NULL, NULL, NULL, NULL, '{\"9\": \"Cement\"}', '31323', '2sdb', 'sss', 'sinox1@gmail.com', 'ssssssss', '2022-09-09 12:43:37', '2022-09-09 12:43:37'),
(12, NULL, NULL, NULL, NULL, '{\"9\": \"Cement\"}', '7895555', 'aaD', 'AsA', 'AAS@GMAIL.COM', 'SDSFC', '2022-09-12 13:20:25', '2022-09-12 13:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companydetails` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `appartment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `created_at`, `updated_at`, `user_id`, `fname`, `lname`, `companydetails`, `address`, `appartment`, `city`, `state`, `zip`, `email`, `phone`, `shipping`) VALUES
(1, '2022-09-07 16:38:29', '2022-09-07 16:38:29', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(2, '2022-09-07 16:39:05', '2022-09-07 16:39:05', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(3, '2022-09-07 16:40:36', '2022-09-07 16:40:36', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(4, '2022-09-07 16:43:03', '2022-09-07 16:43:03', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(5, '2022-09-07 16:44:49', '2022-09-07 16:44:49', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(6, '2022-09-07 16:50:22', '2022-09-07 16:50:22', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(7, '2022-09-07 16:58:23', '2022-09-07 16:58:23', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(8, '2022-09-07 18:07:38', '2022-09-07 18:07:38', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(9, '2022-09-07 18:08:27', '2022-09-07 18:08:27', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(10, '2022-09-07 18:12:33', '2022-09-07 18:12:33', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'apartment', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(11, '2022-09-07 18:14:50', '2022-09-07 18:14:50', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(12, '2022-09-07 18:17:30', '2022-09-07 18:17:30', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(13, '2022-09-07 18:21:11', '2022-09-07 18:21:11', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(14, '2022-09-07 18:24:38', '2022-09-07 18:24:38', 17, 'Rajnish', 'Mishra', 'qwefg', 'Ansal', 'qwefg', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(15, '2022-09-07 18:25:25', '2022-09-07 18:25:25', 17, 'Rajnish', 'Mishra', 'qwefg', 'Ansal', 'qwefg', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(16, '2022-09-07 18:25:47', '2022-09-07 18:25:47', 17, 'Rajnish', 'Mishra', 'qwefg', 'Ansal', 'qwefg', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(17, '2022-09-07 18:32:16', '2022-09-07 18:32:16', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(18, '2022-09-07 18:36:15', '2022-09-07 18:36:15', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(19, '2022-09-07 18:55:19', '2022-09-07 18:55:19', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'Ansal', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(20, '2022-09-10 11:37:45', '2022-09-10 11:37:45', 17, 'Rajnish', 'Mishra', 'qwefg', 'Ansal', 'sky line', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(21, '2022-09-10 11:38:24', '2022-09-10 11:38:24', 17, 'Rajnish', 'Mishra', 'qwefg', 'Ansal', 'sky line', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(22, '2022-09-10 13:02:20', '2022-09-10 13:02:20', 17, 'Rajnish', 'Mishra', NULL, 'Ansal', 'sdfgh', 'LUCKNOW', 'UP', '226002', 'rajnishm411@gmail.com', '08299032047', NULL),
(23, '2022-09-12 12:50:04', '2022-09-12 12:50:04', 34, 'asad', 'asad', NULL, 'lko', 'lko', 'lko', 'lko', '1224688', 'lko@gmail.com', '789456123', 'dcvdfv'),
(24, '2022-09-14 14:23:45', '2022-09-14 14:23:45', 35, 'niaj', 'fdhgd', NULL, 'lucknow', 'lucknow', 'lucknoew', 'utter pradesh', '224164', 'niyaj.ahamad31@gmail.com', '9454218562', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(112) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(210) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `created_at`, `updated_at`, `name`, `logo`, `category`) VALUES
(4, '2022-08-18 17:18:39', '2022-08-18 17:18:39', 'Ultra Tech', '1660817919.png', 9),
(5, '2022-08-18 17:19:21', '2022-08-18 17:19:21', 'Urban Concrete', '1660817961.png', 0),
(6, '2022-08-18 17:20:32', '2022-08-18 17:20:32', 'ACC', '1660818032.png', 9),
(7, '2022-08-19 12:03:49', '2022-08-19 12:03:49', 'Ambuja-Cement', '1660885429.jpg', 9),
(8, '2022-08-19 12:04:14', '2022-08-19 12:04:14', 'asianpaints', '1660885454.jpg', 0),
(9, '2022-08-19 12:04:34', '2022-08-19 12:04:34', 'Bondit', '1660885474.png', 0),
(10, '2022-08-19 12:20:59', '2022-08-19 12:20:59', 'century', '1660886459.jpg', 0),
(11, '2022-08-19 12:21:14', '2022-08-19 12:21:14', 'crompton', '1660886474.png', 0),
(12, '2022-08-19 12:21:32', '2022-08-19 12:21:32', 'godrej', '1660886492.jpg', 0),
(13, '2022-08-19 12:23:02', '2022-08-19 12:23:02', 'Greenstone', '1660886582.png', 0),
(14, '2022-08-19 12:23:40', '2022-08-19 12:23:40', 'Havells', '1660886620.jpg', 0),
(15, '2022-08-19 12:24:04', '2022-08-19 12:24:04', 'Hindware', '1660886644.jpg', 0),
(16, '2022-08-19 12:24:41', '2022-08-19 12:24:41', 'HomeSaint Gobain', '1660886681.png', 0),
(17, '2022-08-19 12:25:20', '2022-08-19 12:25:20', 'Jaquar', '1660886720.jpg', 0),
(18, '2022-08-19 12:25:41', '2022-08-19 12:25:41', 'Jindal', '1660886741.jpg', 0),
(19, '2022-08-19 12:26:10', '2022-08-19 12:26:10', 'kajaria', '1660886770.jpg', 0),
(20, '2022-08-19 12:26:31', '2022-08-19 12:26:31', 'Somany', '1660886791.jpg', 0),
(21, '2022-08-19 12:26:46', '2022-08-19 12:26:46', 'vizag', '1660886806.jpg', 0),
(22, '2022-08-31 14:16:15', '2022-08-31 14:16:15', 'fdvfg', '1661930175.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `buy_now_pay_laters`
--

CREATE TABLE `buy_now_pay_laters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `n1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n5` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n6` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n7` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n8` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n9` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n10` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n11` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n12` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n13` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n14` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n15` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n16` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n17` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n18` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n19` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n20` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_now_pay_laters`
--

INSERT INTO `buy_now_pay_laters` (`id`, `name`, `email`, `number`, `city`, `credit`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `n11`, `n12`, `n13`, `n14`, `n15`, `n16`, `n17`, `n18`, `n19`, `n20`, `created_at`, `updated_at`) VALUES
(2, '', '', '100', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL),
(3, 'Asad', 'asad@gmail.com', '7894561222', 'Lucknow', 100, 'Cement', 'Sand & Aggregates', 'TMT Steel Bars', 'Bricks & Blocks', 'Electrical', 'Plumbing', 'Wooden Products', 'Tiles', 'Bathroom Accessories', 'Bathroom Accessories', 'Paints & Finishes', 'Lighting & Fixtures', 'RMC', 'Natural Stones', 'Home Decor', 'UPVC Doors & Windows', 'Modular Kitchen', 'Roofing Solutions', 'Construction Chemicals', 'Glass Hardware', '2022-08-30 16:10:57', '2022-08-30 16:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selleruser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`c_id`, `created_at`, `updated_at`, `p_id`, `ip_add`, `user_id`, `qty`, `selleruser_id`) VALUES
(44, '2022-08-31 14:11:18', '2022-08-31 14:11:18', 12, '45.251.48.138', 22, '1000', 0),
(77, '2022-09-06 19:47:49', '2022-09-07 14:25:55', 12, '103.77.3.178', 18, '1001', 0),
(93, '2022-09-07 18:52:33', '2022-09-07 18:52:33', 11, '45.251.51.190', 18, '100', 0),
(97, '2022-09-09 12:37:01', '2022-09-09 12:37:01', 13, '45.251.51.115', 24, '1', 0),
(101, '2022-09-12 12:42:26', '2022-09-12 12:42:26', 14, '116.206.158.163', 31, '1000', 17),
(106, '2022-09-12 15:51:48', '2022-09-12 16:14:17', 14, '103.176.141.98', 17, '1090', 17),
(107, '2022-09-12 15:51:54', '2022-09-12 16:15:02', 19, '103.176.141.98', 17, '1000', 17),
(108, '2022-09-12 15:52:04', '2022-09-12 16:15:12', 12, '103.176.141.98', 17, '1000', 17),
(109, '2022-09-12 16:11:29', '2022-09-12 16:15:09', 12, '103.176.141.98', 34, '12000', 17),
(110, '2022-09-12 16:15:42', '2022-09-12 16:15:42', 13, '103.176.141.98', 34, '1', 17),
(112, '2022-09-14 14:27:10', '2022-09-14 14:27:10', 11, '47.15.1.172', 35, '100', 17);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`, `updated_at`, `created_at`) VALUES
(9, 'Cement', '1660887188.jpg', '2022-08-25 10:53:23', '2022-08-19 05:33:08'),
(10, 'Bricks & Blocks', '1661422705.PNG', '2022-08-25 11:20:02', '2022-08-25 10:18:25'),
(13, 'mohan', '1661423334.PNG', '2022-08-25 10:47:29', '2022-08-25 10:28:54'),
(14, 'ceement', '1661930090.jpg', '2022-08-31 07:14:50', '2022-08-31 07:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compares`
--

CREATE TABLE `compares` (
  `co_id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compares`
--

INSERT INTO `compares` (`co_id`, `p_id`, `ip_add`, `user_id`, `created_at`, `updated_at`) VALUES
(36, 13, '45.251.51.115', 24, '2022-09-09 12:37:05', '2022-09-09 12:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `created_at`, `updated_at`, `name`, `email`, `message`) VALUES
(2, '2022-08-27 14:20:42', '2022-08-27 14:20:42', 'testuserasad@gmail.com', 'asad@gmail.com', 'hello i am test user'),
(3, '2022-09-01 12:37:02', '2022-09-01 12:37:02', 'test', 'test@gmail.com', 'this is test'),
(4, '2022-09-13 13:03:17', '2022-09-13 13:03:17', 'Rajnish Mishra', 'rajnishm411@gmail.com', '2rh'),
(5, '2022-09-13 13:04:15', '2022-09-13 13:04:15', 'Rajnish Mishra', 'rajnishm411@gmail.com', '2rh');

-- --------------------------------------------------------

--
-- Table structure for table `customs`
--

CREATE TABLE `customs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Plot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Floors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elevation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customs`
--

INSERT INTO `customs` (`id`, `Package`, `name`, `Phone`, `Email`, `City`, `Plot`, `Floors`, `Budget`, `elevation`, `created_at`, `updated_at`) VALUES
(3, 'Luxury Package', 'nomi', 'sssssss', 'test01@gmail.com', 'Hyderabad', '22', 'Bungalows', 'Upto 20 Lakhs', 'Yes', '2022-09-01 16:37:01', '2022-09-01 16:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'awadhgroups.pooja@gmail.com', '2022-08-31 14:20:37', '2022-08-31 14:20:37'),
(3, 'asad@gmail.com', '2022-09-01 12:35:54', '2022-09-01 12:35:54');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `category`, `brand`, `created_at`, `updated_at`) VALUES
(2, '1662713988.jpg', '10', '17', '2022-09-09 15:59:48', '2022-09-09 15:59:48');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(6, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(7, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(8, '2016_06_01_000004_create_oauth_clients_table', 2),
(9, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(10, '2022_08_17_053139_creat_categorys_tabel', 3),
(11, '2022_08_17_071229_create_products_table', 4),
(12, '2022_08_18_045956_create_brands_table', 5),
(13, '2022_08_22_044520_create-news-table', 6),
(14, '2022_08_24_070001_create-carts-table', 7),
(15, '2022_08_25_045848_create_quotes_table', 8),
(16, '2022_08_25_101525_create_compares_table', 9),
(17, '2022_08_26_082134_create_billings_table', 10),
(18, '2022_08_26_111911_create_emails_table', 11),
(19, '2022_08_27_051849_create_contact_uses_table', 11),
(20, '2022_08_29_055653_create_buy_now_pay_laters_table', 12),
(21, '2022_08_29_095003_create_advertises_table', 12),
(22, '2022_08_31_051150_create_pricechecks_table', 13),
(23, '2022_08_31_055322_create_become_sellers_table', 14),
(24, '2022_08_31_105032_create_requirements_table', 15),
(25, '2022_09_01_050825_create_customs_table', 16),
(26, '2022_09_03_063250_create_ratings_table', 17),
(27, '2022_09_07_062158_create_orders_table', 18),
(28, '2022_09_09_080054_create_galleries_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `sno` int(11) NOT NULL,
  `news_image` varchar(111) NOT NULL,
  `news_heading` varchar(300) NOT NULL,
  `uploaded_by` varchar(300) NOT NULL,
  `news_description` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`sno`, `news_image`, `news_heading`, `uploaded_by`, `news_description`, `created_at`, `updated_at`) VALUES
(1, '1661233010.webp', '123', '23', 'Make a deposit to your trading account with SinoxFX and we will reimburse you for the deposit fee under the promotion of ZERO Fees.', '2022-08-23 12:36:50', '2022-08-23 12:36:50'),
(2, '1661233020.PNG', 'eded', 'wwww', 'We help Forex traders make the most profitable and efficient trading decisions. Experience it for yourself.', '2022-08-23 12:37:00', '2022-08-23 12:37:00'),
(3, '1661233182.PNG', 'eded', 'wwww', 'We help Forex traders make the most profitable and efficient trading decisions. Experience it for yourself.', '2022-08-23 12:39:42', '2022-08-23 12:39:42'),
(4, '1662009822.jpg', 'my name is test', 'asad', 'asdfgjksaddfghjksfdgjksfdghjk', '2022-09-01 12:23:42', '2022-09-01 12:23:42'),
(5, '1662010022.jpg', 'aascds', 'zxz', 'zx', '2022-09-01 12:27:02', '2022-09-01 12:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('ac2773eb6385d9b66c469f5fcf4a95aa5dfa4554568ca85bb109d29017c0a119f29689cd06a0b8d9', 5, 1, 'authToken', '[]', 0, '2022-08-09 16:09:46', '2022-08-09 16:09:46', '2023-08-09 09:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'FNsUGDgETOg5Vu9B7nc7Zsni6KDe4hSj5KNi7haa', NULL, 'http://localhost', 1, 0, 0, '2022-08-09 14:11:38', '2022-08-09 14:11:38'),
(2, NULL, 'Laravel Password Grant Client', 'v3WQC3FoLe6QrX8JyEPqZcXGiUxXKp0xbYzS1jus', 'users', 'http://localhost', 0, 1, 0, '2022-08-09 14:11:38', '2022-08-09 14:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-08-09 14:11:38', '2022-08-09 14:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `billing_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status_track` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Order Pending',
  `selleruser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `user_id`, `product_id`, `method`, `quantity`, `order_id`, `order_status`, `billing_id`, `created_at`, `updated_at`, `transaction_id`, `order_status_track`, `selleruser_id`) VALUES
(1, 17, 12, 'Cash', '1000', 'ORDS79048054', 'Pending', 16, '2022-09-07 18:25:47', '2022-09-09 15:28:29', '12345', 'Order confirmed', 0),
(2, 17, 13, 'Cash', '1', 'ORDS79048054', 'Pending', 16, '2022-09-07 18:25:47', '2022-09-07 18:25:47', '2345678', 'Order Pending', 0),
(3, 17, 12, 'Cash', '1000', 'ORDS5358199', 'Pending', 17, '2022-09-07 18:32:16', '2022-09-09 15:46:56', '', 'Order confirmed', 0),
(4, 17, 11, 'Cash', '100', 'ORDS23035840', 'Pending', 18, '2022-09-07 18:36:15', '2022-09-09 15:47:01', '', 'Order delivered', 0),
(5, 17, 11, 'Pytam', '100', 'ORDS5683955', 'TXN_FAILURE', 19, '2022-09-07 18:55:19', '2022-09-09 15:47:10', '', 'Picked by courier', 0),
(6, 17, 11, 'Pytam', '100', 'ORDS98088653', 'TXN_FAILURE', 21, '2022-09-10 11:38:24', '2022-09-10 13:23:57', '20220910111212800110168258882799896', 'Order Pending', 0),
(7, 17, 12, 'Pytam', '1000', 'ORDS98088653', 'TXN_FAILURE', 21, '2022-09-10 11:38:24', '2022-09-10 13:23:57', '20220910111212800110168258882799896', 'Order Pending', 0),
(8, 17, 13, 'Pytam', '1', 'ORDS98088653', 'TXN_FAILURE', 21, '2022-09-10 11:38:24', '2022-09-10 13:23:57', '20220910111212800110168258882799896', 'Order Pending', 0),
(9, 17, 12, 'Pytam', '1000', 'ORDS6863979', 'TXN_FAILURE', 22, '2022-09-10 13:02:20', '2022-09-10 13:02:27', '20220910111212800110168767283990783', 'Order Pending', 17),
(10, 34, 13, 'Cash', '1', 'ORDS58951870', 'Pending', 23, '2022-09-12 12:50:04', '2022-09-12 12:50:04', NULL, 'Order Pending', 17),
(11, 34, 18, 'Cash', '1', 'ORDS58951870', 'Pending', 23, '2022-09-12 12:50:04', '2022-09-12 12:50:04', NULL, 'Order Pending', 17),
(12, 34, 20, 'Cash', '150', 'ORDS58951870', 'Pending', 23, '2022-09-12 12:50:04', '2022-09-12 12:50:04', NULL, 'Order Pending', 17),
(13, 35, 17, 'Cash', '1000', 'ORDS92486547', 'Pending', 24, '2022-09-14 14:23:45', '2022-09-14 14:23:45', NULL, 'Order Pending', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nomi@gmail.com', 'UJ49SnJtrDtIOco9jJBSu3wp5aFCCQPFUU29SZR31tEBRMvER35HxSmqQKyu4MHL', '2022-09-06 12:24:40'),
('nomi887933@gmail.com', 'IR8Yd3Rs8FqHzMvb6Zc8uAHMn6DqIGsb31PrFzblWWf32qcmIZeSlWZIpGjeCuoe', '2022-09-06 12:25:36'),
('marayeen45@gmail.com', 'uQUpLc2H909gyfiM10awQkqRtl2mYokv1nDBM8x50Zm0d7Rav6uEjx4cJEaQkKMu', '2022-09-06 12:34:09'),
('rajnishm411@gmail.com', 'P2F0BYHxe85BDDHRfSg8BBVteLruBcTL4PwESBmv2udNozkd2rajljlXQazfZAI5', '2022-09-06 12:37:07'),
('marayeen45@gmail.com', 'eOiNu95g7oQYd2tIsQP5PKrUbKZpwSwt3Y1wqSzi3vFlFZwPQhtbTmLiT0eVzqup', '2022-09-06 12:45:39'),
('rajnishm411@gmail.com', '2y6vua5GnTv4IGKtPtb3BCGsgFLF5XJLamTAHZigiywr7CdCi4H9enUkZ9EijnNI', '2022-09-06 12:46:34'),
('rajnishm411@gmail.com', '797rxPlipz2zi49ea8cL1qUi6ZY6lB0LFMg35MLmO2FpxdK6Amfz6yZHRwrWZicL', '2022-09-06 12:46:40'),
('techmishra277@gmail.com', 'q6HWqR1XLUy8SbCofAdRzxsxSGcqGZAh3VcoPTPqmqhptjobCMb7RZnuzykwZhK3', '2022-09-06 13:01:48'),
('nomi887933@gmail.com', 'uwignfpOiCww6VBoY18t3IlByVYczRELS4VS4eGYFRvYyCr4WUP9P7ZVEVaKp3rg', '2022-09-06 13:04:56'),
('techmishra277@gmail.com', '2COXek5KFfV8OmupUSe9Rw1leAShO2JqKvHgD6uTtbqVKQTNGMBQgJYcUoSwsiM6', '2022-09-06 13:05:42'),
('nomi887933@gmail.com', 'lNCEkqbGFUT7XXH58OoNQ0r3jirJwDAEgaNfrrOmOINnFtcwzV185cUzOJRVlMQm', '2022-09-06 13:07:29'),
('techmishra277@gmail.com', 'veTKaBsFSGgOTfBmXC3a9H2IwSDZzMPPXCmav6My91PGkGpT7jV7XXFm3pMDFfSC', '2022-09-06 13:14:48'),
('rajnishm411@gmail.com', 'enDq7SStN626hDLonRdrQitDBroQXuDhyCtcpD9wriE4FroeIuV5HbPhIaAQnv2k', '2022-09-06 14:42:41'),
('techmishra277@gmail.com', 'qK2uhLWd2100dR5oAIgek5Mhnbdtj1vOh6cQ2rWvuGUg7ipjTEz6viP85TxbDRol', '2022-09-06 14:43:48'),
('rajnishm411@gmail.com', '8gQ0yfypj1ub1NS6xY9PJKC675ohL9peO2FgT1jZ6GFJWKwMKf97JYQoLzD1G7Pt', '2022-09-06 16:31:33'),
('nomi887933@gmail.com', 'E3pe8482tAhNPBByG9qnoLrleCDvBHaAi9iXzi9H4ksPq0q606cU1BDHuGBPuyki', '2022-09-14 15:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 4, 'authToken', '631a1793915b87c19367d18f79dbb5650e3945ece9d5142f65885e3b0982a2fa', '[\"*\"]', NULL, '2022-08-09 16:07:50', '2022-08-09 16:07:50'),
(2, 'App\\Models\\User', 8, 'authToken', 'c0c88af48399eb38f09277f40e7bccebf8ea42ac17aaba741ae594f5107e9cc4', '[\"*\"]', NULL, '2022-08-16 14:22:29', '2022-08-16 14:22:29'),
(3, 'App\\Models\\User', 7, 'authToken', 'ed4a9539d516e5ac9b98563b285f0b55159fdca11b17b7778e46a427e030964f', '[\"*\"]', NULL, '2022-08-16 14:24:29', '2022-08-16 14:24:29'),
(4, 'App\\Models\\User', 9, 'authToken', 'bd3673b687fcf53ecbc02f2b0c68faa5abe65138627b45ed0ab792877ae3de5f', '[\"*\"]', NULL, '2022-08-16 15:03:39', '2022-08-16 15:03:39'),
(5, 'App\\Models\\User', 7, 'authToken', 'e50badbc5cb15d6c56a5cb1b746c75582c386ed63c95dd35494eb79a00c0a241', '[\"*\"]', NULL, '2022-08-16 15:16:30', '2022-08-16 15:16:30'),
(6, 'App\\Models\\User', 10, 'authToken', 'c842ad9c4c82838603c647d91251b374388e12e8dc82cf67f0bf7ab3a0ee54e7', '[\"*\"]', NULL, '2022-08-16 15:25:05', '2022-08-16 15:25:05'),
(7, 'App\\Models\\User', 10, 'authToken', '1411853b2f148daf7e480400a812fbd7274ab9a4fd5727ecc80c2d24d33aa848', '[\"*\"]', NULL, '2022-08-16 15:26:04', '2022-08-16 15:26:04'),
(8, 'App\\Models\\User', 10, 'authToken', '3b050fa50271e76daaec0cf7ddeacdabd8d4d989d13c0afc7be1d4a6260de509', '[\"*\"]', NULL, '2022-08-16 15:26:20', '2022-08-16 15:26:20'),
(9, 'App\\Models\\User', 10, 'authToken', '6ff33e19f95d02a9ddb12f691c9761cc01828228d1042f7973c0ed726d73f100', '[\"*\"]', NULL, '2022-08-16 15:26:35', '2022-08-16 15:26:35'),
(10, 'App\\Models\\User', 13, 'authToken', '3b858b073b5b0ae788cb086e16b76f99188d81d7088934f7f8906941a29577c2', '[\"*\"]', NULL, '2022-08-22 17:45:29', '2022-08-22 17:45:29'),
(11, 'App\\Models\\User', 14, 'authToken', '07006f73ff92389bf118238118457c2ae43011c9d0424a4003335c447cabcc95', '[\"*\"]', NULL, '2022-08-22 18:30:19', '2022-08-22 18:30:19'),
(12, 'App\\Models\\User', 15, 'authToken', '3cdb4f2dc6f94d8b1b7086570c8c0cd0def4e81a55a8ae9635da2a09da5de7cd', '[\"*\"]', NULL, '2022-08-22 18:42:20', '2022-08-22 18:42:20'),
(13, 'App\\Models\\User', 14, 'authToken', '8f9ee824cce39234801b88e99a0d5eeb97b405a3922ca4d47530596af9b35143', '[\"*\"]', NULL, '2022-08-23 15:51:50', '2022-08-23 15:51:50'),
(14, 'App\\Models\\User', 14, 'authToken', '22f25901804ebf1c175273b691787287ef5d25f66985b182fce015a24a427ac2', '[\"*\"]', NULL, '2022-08-23 15:55:03', '2022-08-23 15:55:03'),
(15, 'App\\Models\\User', 14, 'authToken', '7e7a9ae89ef43ce67b5aa619aa5bc13d431deb3ab98ed69a88b4906f0ccb371d', '[\"*\"]', NULL, '2022-08-23 15:56:19', '2022-08-23 15:56:19'),
(16, 'App\\Models\\User', 14, 'authToken', '306b8ce9648dde5d6fddd3980b177e28cce5f497350a584e186d16ad427643e8', '[\"*\"]', NULL, '2022-08-23 15:56:54', '2022-08-23 15:56:54'),
(17, 'App\\Models\\User', 14, 'authToken', 'e038a5ac0c9a359612247cf186394b41cd89af6a43432154a44d18b6468c8867', '[\"*\"]', NULL, '2022-08-23 16:04:58', '2022-08-23 16:04:58'),
(18, 'App\\Models\\User', 14, 'authToken', '0c4b8b22608ceb14f523b41cbe87707939ec3e6e3721b6b986173ff16202c3ce', '[\"*\"]', NULL, '2022-08-23 16:31:24', '2022-08-23 16:31:24'),
(19, 'App\\Models\\User', 14, 'authToken', '53df1f543811593d9e183d6c8d2034191274ad320bfbda919b68def1b098eeac', '[\"*\"]', NULL, '2022-08-23 16:35:25', '2022-08-23 16:35:25'),
(20, 'App\\Models\\User', 14, 'authToken', 'ed0a47e92efb58bc6c5a29725d268e86f70706290e7f6b5835ae9f39b061bced', '[\"*\"]', NULL, '2022-08-23 16:46:23', '2022-08-23 16:46:23'),
(21, 'App\\Models\\User', 14, 'authToken', 'b762e1d7a177d78b44b26da33637366172b7fd621c33f678352a548a015c95ed', '[\"*\"]', NULL, '2022-08-23 16:50:17', '2022-08-23 16:50:17'),
(22, 'App\\Models\\User', 14, 'authToken', '749fccb46189b5946058843555dc85676e42b51e6ece322fc797969f1fcd2465', '[\"*\"]', NULL, '2022-08-23 16:51:17', '2022-08-23 16:51:17'),
(23, 'App\\Models\\User', 14, 'authToken', '5b73af7bab826372484eef5638436e87ac329bb57d6795ff67c023fbecd450ec', '[\"*\"]', NULL, '2022-08-23 16:51:48', '2022-08-23 16:51:48'),
(24, 'App\\Models\\User', 14, 'authToken', 'ac3c2041d2e8dc13637d5abd129e81d34fcf71b21235e44eab2bb27b7bee20c4', '[\"*\"]', NULL, '2022-08-23 16:54:23', '2022-08-23 16:54:23'),
(25, 'App\\Models\\User', 14, 'authToken', '553fef1a3441c7a78aed7848e8e0aedc8dd9be200717adc9c2c1986fd63d741d', '[\"*\"]', NULL, '2022-08-23 17:29:27', '2022-08-23 17:29:27'),
(26, 'App\\Models\\User', 14, 'authToken', '1702b2233cbc086f5aa4d8d05b3d86a20b82ff30d3ca9f2f6f48573c607d6e9d', '[\"*\"]', NULL, '2022-08-23 17:38:01', '2022-08-23 17:38:01'),
(27, 'App\\Models\\User', 14, 'authToken', '9a1baf832a13f4a0b221c445b8b113456470751d32e2ac82f056be7941114086', '[\"*\"]', NULL, '2022-08-23 17:38:49', '2022-08-23 17:38:49'),
(28, 'App\\Models\\User', 14, 'authToken', '4133553dfe1029f198fc1d6817f370ea89177ff36480aea302ee8e5e2f68e65b', '[\"*\"]', NULL, '2022-08-23 17:41:14', '2022-08-23 17:41:14'),
(29, 'App\\Models\\User', 14, 'authToken', '2d53191b20fa0a86fe8961e41650d4f0780ef1288dcd9ff355b73e7456a86445', '[\"*\"]', NULL, '2022-08-23 17:41:28', '2022-08-23 17:41:28'),
(30, 'App\\Models\\User', 14, 'authToken', 'a93146d14cb9b41232c69ddd00823ca3e0cc448dedd9a5c7e3aae77c582df40b', '[\"*\"]', NULL, '2022-08-23 17:42:09', '2022-08-23 17:42:09'),
(31, 'App\\Models\\User', 13, 'authToken', 'ce2ff7154c0b500f171757f8648b9a34f8653c91e8c440dbb3db11f0cb78cc4e', '[\"*\"]', NULL, '2022-08-23 17:42:22', '2022-08-23 17:42:22'),
(32, 'App\\Models\\User', 13, 'authToken', '7bfdbb034359b745bbb98fbdca3c3812890d39aafa0f1593895ae7e44058c1de', '[\"*\"]', NULL, '2022-08-23 17:46:09', '2022-08-23 17:46:09'),
(33, 'App\\Models\\User', 13, 'authToken', '73e49500d64e1cdf45754f88b6f69469aa079776ffcb2582158a228f2bef345b', '[\"*\"]', NULL, '2022-08-23 18:02:13', '2022-08-23 18:02:13'),
(34, 'App\\Models\\User', 13, 'authToken', '45824988bfb93b7c762092247b1a4cd2a78b2cac39ad09d5035187b57bbec999', '[\"*\"]', NULL, '2022-08-23 18:05:51', '2022-08-23 18:05:51'),
(35, 'App\\Models\\User', 13, 'authToken', 'a2af25c86f73672ec8ee62233e8be8df224ce553aa8b3f55ad6463c3e1984a5a', '[\"*\"]', NULL, '2022-08-23 18:07:50', '2022-08-23 18:07:50'),
(36, 'App\\Models\\User', 13, 'authToken', '492b96d103289e863168e0d2ca68a27100a938ee05a5c830eac32b762b6e0ddc', '[\"*\"]', NULL, '2022-08-23 19:50:46', '2022-08-23 19:50:46'),
(37, 'App\\Models\\User', 16, 'authToken', '9587207a070c1aa675f8f7f21bf370c2aa3f8d47fa7f1b608a3122fc704afa45', '[\"*\"]', NULL, '2022-08-23 23:55:12', '2022-08-23 23:55:12'),
(38, 'App\\Models\\User', 13, 'authToken', '10a0319f32b1800ebf2bac3d047e1d17bd76fc1e6b40885d70da230055f47090', '[\"*\"]', NULL, '2022-08-25 13:17:42', '2022-08-25 13:17:42'),
(39, 'App\\Models\\User', 13, 'authToken', '98f55fd7f5bc543ef2d2e413786100e667863fd193797dc9e1c24343196d92b6', '[\"*\"]', NULL, '2022-08-25 13:27:19', '2022-08-25 13:27:19'),
(40, 'App\\Models\\User', 13, 'authToken', 'f22a1977b13b5085c603b59b806df4993d6aa9e94adc9ee5ddec80826b7151a6', '[\"*\"]', NULL, '2022-08-25 13:27:22', '2022-08-25 13:27:22'),
(41, 'App\\Models\\User', 13, 'authToken', '50e279aaf5c17cc2c64805cec24aa28423fa50fbab8b1bf2e895de7282ba601c', '[\"*\"]', NULL, '2022-08-25 13:36:00', '2022-08-25 13:36:00'),
(42, 'App\\Models\\User', 13, 'authToken', '7f6a04ae0e594929d2c555422a67863f21fa564dfe87d747edaa05ad9ff96e9c', '[\"*\"]', NULL, '2022-08-25 13:44:34', '2022-08-25 13:44:34'),
(43, 'App\\Models\\User', 13, 'authToken', '82feacd0768727cd23ccbc00dc93df842e25925f25eee90d87b614e67bf0eaca', '[\"*\"]', NULL, '2022-08-25 13:45:52', '2022-08-25 13:45:52'),
(44, 'App\\Models\\User', 17, 'authToken', '6914380c01321eb1a999e741cacd1ea61b3030818e02941f4f77d3a960c897f0', '[\"*\"]', NULL, '2022-08-26 18:06:35', '2022-08-26 18:06:35'),
(45, 'App\\Models\\User', 17, 'authToken', '777caafb673e0285761e5bd713f952963e3f91dea44d06603eaf7c81b3256a7d', '[\"*\"]', NULL, '2022-08-26 18:06:39', '2022-08-26 18:06:39'),
(46, 'App\\Models\\User', 17, 'authToken', '29b39c2cd7ab4f4c782dcaa8a8cd11039588225cba753946e0a6cf5cfe871a1e', '[\"*\"]', NULL, '2022-08-26 18:10:25', '2022-08-26 18:10:25'),
(47, 'App\\Models\\User', 19, 'authToken', '9dc19ce9b2a706891d6b7b808132ae3db4c079914143c435fd095ec652795b22', '[\"*\"]', NULL, '2022-08-27 16:30:27', '2022-08-27 16:30:27'),
(48, 'App\\Models\\User', 20, 'authToken', 'a328b6add3a4ac292307c0a1984247ea165aaf10e1c59ac5dc73af4ccc33bfb4', '[\"*\"]', NULL, '2022-08-27 16:32:37', '2022-08-27 16:32:37'),
(49, 'App\\Models\\User', 20, 'authToken', '46011fda2ec3377c3b1e464dcd3fa657f177862ceb5c4ccfa2975f2d14394b1e', '[\"*\"]', NULL, '2022-08-27 16:33:23', '2022-08-27 16:33:23'),
(50, 'App\\Models\\User', 21, 'authToken', 'c8124d55181f869f1fc11690e507e16d82960eaed0f803f5b7c27707d941920a', '[\"*\"]', NULL, '2022-08-27 16:35:10', '2022-08-27 16:35:10'),
(51, 'App\\Models\\User', 21, 'authToken', 'dcbf59d1ed58285affab6f32dc02c206a58eb052a6ae9f11699f5d6128d4c601', '[\"*\"]', NULL, '2022-08-27 16:38:36', '2022-08-27 16:38:36'),
(52, 'App\\Models\\User', 20, 'authToken', 'ad71d6ab17431db614a57ec68f8be7f0b111a9bf7c777dbe8d59d94e706be2d1', '[\"*\"]', NULL, '2022-08-30 11:48:35', '2022-08-30 11:48:35'),
(53, 'App\\Models\\User', 20, 'authToken', '51abde6a143cf194ff53a3c763adaa4f49f758965499558d350eb8cbf62b1ca7', '[\"*\"]', NULL, '2022-08-31 16:15:26', '2022-08-31 16:15:26'),
(54, 'App\\Models\\User', 20, 'authToken', '5baeaa7288c12f473c336056e50b97a6c53486fcdd4edab27b33d380f9e8603d', '[\"*\"]', NULL, '2022-08-31 16:16:57', '2022-08-31 16:16:57'),
(55, 'App\\Models\\User', 13, 'authToken', '735a80f8bb8ec27354118703ef4ff48849fdab51da3848f65c2ffd16335985e5', '[\"*\"]', NULL, '2022-08-31 16:18:45', '2022-08-31 16:18:45'),
(56, 'App\\Models\\User', 13, 'authToken', '9794fd81e22e4a5d64e0db5b68a179b27aecb9dbfc96fc8f421c5dbe863c6fa8', '[\"*\"]', NULL, '2022-08-31 16:19:28', '2022-08-31 16:19:28'),
(57, 'App\\Models\\User', 13, 'authToken', '3f1d60a807d07ce3e14055e6a57d86566368e5ccb8953bedaf8682577f0520b5', '[\"*\"]', NULL, '2022-08-31 16:43:41', '2022-08-31 16:43:41'),
(58, 'App\\Models\\User', 23, 'authToken', 'd350de69872280d928bf8b76852727533e45eb1e44207f82722f400dca6f5cfb', '[\"*\"]', NULL, '2022-08-31 20:00:18', '2022-08-31 20:00:18'),
(59, 'App\\Models\\User', 18, 'authToken', '5f503223112e05fc8492e0dfe9b6233b86d33cd708c1317c7ec38f31b61e6c14', '[\"*\"]', NULL, '2022-09-05 12:54:49', '2022-09-05 12:54:49'),
(60, 'App\\Models\\User', 18, 'authToken', 'dfea463bbc921f5eb50001d89dcf96830f46a4fd398058e82803bd780cb818ae', '[\"*\"]', NULL, '2022-09-05 12:56:08', '2022-09-05 12:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `pricechecks`
--

CREATE TABLE `pricechecks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products` json DEFAULT NULL,
  `quantity` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricechecks`
--

INSERT INTO `pricechecks` (`id`, `fname`, `lname`, `phone`, `email`, `products`, `quantity`, `created_at`, `updated_at`) VALUES
(16, 'Rajnish', 'Mishra', '08299032047', 'rajnishm411@gmail.com', '{\"1\": \"Leo\'s AAC Blocks - 4\", \"2\": \"ACC Suraksha Cement\"}', '{\"1\": \"100\", \"2\": \"150\"}', '2022-08-31 19:06:51', '2022-08-31 19:16:49'),
(18, 'Rajnish', 'Mishra', '08299032047', 'rajnishm411@gmail.com', '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-02 14:51:32', '2022-09-02 14:55:25'),
(19, NULL, NULL, NULL, NULL, '{\"1\": \"ACB Grey Fly Ash Cement Brick - 9in x 3in x 2in\"}', '{\"1\": \"1000\"}', '2022-09-12 13:04:59', '2022-09-12 13:05:02'),
(20, NULL, NULL, NULL, NULL, '{\"1\": \"Raasi Gold PPC Cement\"}', '{\"1\": \"1\"}', '2022-09-12 13:08:02', '2022-09-12 13:08:02'),
(21, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-12 13:08:05', '2022-09-12 13:08:13'),
(22, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-12 13:08:32', '2022-09-12 13:08:32'),
(23, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-12 13:10:52', '2022-09-12 13:10:52'),
(24, NULL, NULL, NULL, NULL, '{\"1\": \"ACC Suraksha Cement\"}', '{\"1\": \"150\"}', '2022-09-12 13:13:41', '2022-09-12 13:13:41'),
(25, 'asa', 'sds', '789456130', 'aas@gmail.com', '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-12 13:14:37', '2022-09-12 13:15:06'),
(26, NULL, NULL, NULL, NULL, '{\"1\": \"Raasi Gold PPC Cement\"}', '{\"1\": \"1\"}', '2022-09-12 13:18:02', '2022-09-12 13:18:02'),
(27, NULL, NULL, NULL, NULL, '{\"1\": \"Raasi Gold PPC Cement\"}', '{\"1\": \"1\"}', '2022-09-12 13:19:53', '2022-09-12 13:19:53'),
(28, 'Rajnish', 'Mishra', '08299032047', 'rajnishm411@gmail.com', '{\"1\": \"Raasi Gold PPC Cement\"}', '{\"1\": \"1\"}', '2022-09-12 13:20:12', '2022-09-12 13:20:23'),
(29, NULL, NULL, NULL, NULL, '{\"1\": \"Raasi Gold PPC Cement\"}', '{\"1\": \"1\"}', '2022-09-12 13:20:44', '2022-09-12 13:20:44'),
(30, NULL, NULL, NULL, NULL, '{\"1\": \"ACC Suraksha Cement\"}', '{\"1\": \"150\"}', '2022-09-12 13:26:32', '2022-09-12 13:26:32'),
(31, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-12 13:31:30', '2022-09-12 13:31:30'),
(32, NULL, NULL, NULL, NULL, '{\"1\": \"ACC Suraksha Cement\"}', '{\"1\": \"150\"}', '2022-09-12 13:33:34', '2022-09-12 13:33:34'),
(33, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-12 13:44:52', '2022-09-12 13:44:52'),
(34, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-12 13:48:45', '2022-09-12 13:48:45'),
(35, NULL, NULL, NULL, NULL, '{\"1\": \"Raasi Gold PPC Cement\"}', '{\"1\": \"1\"}', '2022-09-14 14:24:45', '2022-09-14 14:24:45'),
(36, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-14 14:27:49', '2022-09-14 14:27:49'),
(37, 'niaj', 'fdhgd', '9454218562', 'niyaj.ahamad31@gmail.com', '{\"1\": \"ACC Suraksha Cement\"}', '{\"1\": \"150\"}', '2022-09-14 14:28:30', '2022-09-14 14:28:53'),
(38, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-14 14:28:55', '2022-09-14 14:28:55'),
(39, NULL, NULL, NULL, NULL, '{\"1\": \"Leo\'s AAC Blocks - 4\"}', '{\"1\": \"100\"}', '2022-09-15 15:00:58', '2022-09-15 15:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_name` varchar(121) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(121) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci,
  `product_mrp` int(11) NOT NULL,
  `product_minimumorder` int(11) NOT NULL,
  `product_offer` int(11) NOT NULL,
  `product_by` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_availability` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_unit` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_brand` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `product_name`, `product_price`, `product_image`, `product_category`, `product_description`, `product_mrp`, `product_minimumorder`, `product_offer`, `product_by`, `product_availability`, `product_unit`, `product_brand`, `status`) VALUES
(11, '2022-08-19 17:28:06', '2022-08-19 17:28:06', 'Leo\'s AAC Blocks - 4', 30, '1660904886.jpg', 10, '100% green building material as they do not have any toxic substances nor does it emit odour', 60, 100, 50, '17', 'in stock', 'per piece', 6, 1),
(12, '2022-08-19 17:34:00', '2022-08-19 17:34:00', 'UttarPradhesh Red Brick - 9 x 4 x 3', 6, '1660905240.jpg', 10, 'Size is in Inches Unloading Extra as applicable', 10, 1000, 40, '17', 'in stock', 'per piece', 0, 1),
(13, '2022-08-19 17:38:21', '2022-08-19 17:38:21', 'Raasi Gold PPC Cement', 368, '1660905501.jpg', 9, 'Prices Displayed are per 50 KG Bag. Free shipping for orders above 50 Bags.', 460, 1, 20, '17', 'in stock', 'per beg', 4, 1),
(14, '2022-08-19 17:42:13', '2022-08-19 17:42:13', 'Greenstone\'s AAC Brick - 600mmX200mmX100mm (4\")', 32, '1660905733.png', 10, 'by Greenstone BEST IN CLASS AAC BLOCKS BY GREENSTONE BUILDING PRODUCTS PVT LTD', 40, 1000, 20, '17', 'in stock', 'per piece', 13, 1),
(16, '2022-08-19 17:48:21', '2022-09-09 12:05:14', 'ACB Grey Fly Ash Cement Brick - 9in x 3in x 2in', 9, '1660906101.jpg', 10, 'Used in - Side Walls, Partition Walls, Roof, Floor Resistance Durability - Fire Resistant, Heat Resistant, Water Resistant, Seepage Resistant Color - Grey Automation Grade - Semi-Automatic Shape Available - Cuboid, Pairler, Rectangle Unloading Charges Extra (To be borne by coustomer)', 12, 1000, 25, '17', 'in stock', 'per piece', 4, 1),
(17, '2022-08-19 17:52:12', '2022-09-09 12:05:19', 'Sugna TMT Fe-550 Grade - 16mm', 62800, '1660906332.jpg', 0, 'Prices Displayed are per Ton, Transpotation & Unloading Extra as applicable Transpotation and Hamali Extra', 92115, 1, 31, '17', 'in stock', 'per ton', 18, 1),
(18, '2022-08-19 17:54:33', '2022-09-09 12:05:21', 'Birla.A1 StrongCrete', 385, '1660906473.png', 9, 'Bira A1 StrongCrete Cement Price Prices Displayed are per 50 KG Bag. Free shipping for orders above 50 Bags Unloading Charges Extra as applicable (to be paid at the site )', 470, 1, 18, '17', 'in stock', 'per bag', 20, 1),
(19, '2022-08-19 17:58:29', '2022-09-09 12:05:23', 'Brown Garnet - 60x120cm', 95, '1660906709.jpg', 10, 'by Kajaria Ceramics Limited Prices displayed are per Sq. Feet Transpotation and Unloading Extra', 100, 1000, 5, '17', 'in stock', 'per piece sqft', 19, 1),
(20, '2022-08-19 18:00:38', '2022-09-09 12:09:49', 'ACC Suraksha Cement', 350, '1660906838.png', 9, 'Prices Displayed are per 50 KG Bag. Free shipping for orders above 50 Bags.', 500, 150, 30, '17', 'in stock', 'per bag', 6, 1),
(21, '2022-08-19 18:03:22', '2022-09-12 11:46:22', '3011 Ceramic Wall Tile - 100mm x 150mm', 30, '1660907002.jpg', 10, '3011 Ceramic Wall Tile - 100mm x 150mm price displayed is per Sft', 75, 1000, 60, '17', 'in stock', 'per piece', 16, 1),
(22, '2022-09-01 12:12:54', '2022-09-01 12:12:54', 'asad', 50, '1662009174.jpg', 14, 'asdfscdc', 100, 100, 10, '17', 'in stock', 'per bag', 4, 0),
(23, '2022-09-08 16:50:13', '2022-09-08 16:50:13', 'sidebar.php', 234, '1662630613.jfif', 9, 'dgh', 2345, 33, 12, '31', 'in stock', '34', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `pname`, `name`, `uom`, `min`, `location`, `apartment`, `city`, `zip`, `email`, `phone`, `discription`, `created_at`, `updated_at`) VALUES
(4, 'fghj', 'nomi', 'dsds', 'fghjkl;', 'United country', 'gvhbjnkml', 'Kovalam', 'bhjkl;\'', 'blogs@sinoxfx.com', 'dsfsfsfsf', 'ASDFGH', '2022-08-25 12:44:49', '2022-08-25 12:44:49'),
(5, 'fghj', 'nomi', 'dsds', 'fghjkl;', 'United country', 'gvhbjnkml', 'Kovalam', 'bhjkl;\'', 'blogs@sinoxfx.com', 'dsfsfsfsf', 'ASDFGH', '2022-08-25 12:45:38', '2022-08-25 12:45:38'),
(7, 'fghj', 'nomi', 'dsds', 'fghjkl;', 'France', 'ddd', 'Lucknow, Uttar Pradesh', 'bhjkl;\'', 'blogs@sinoxfx.com', 'dsfsfsfsf', 'dwwwwwwwwwwww', '2022-08-25 12:49:01', '2022-08-25 12:49:01'),
(8, 'fghj', 'nomi', 'dsds', 'fghjkl;', 'Germany', 'gvhbjnkml', 'Lucknow', 'bhjkl;\'', 'info@awadhtechnology.com', 'dsfsfsfsf', 'ASFADFSGDHFJGKH.LJ.,KMNHGFD', '2022-08-25 12:51:26', '2022-08-25 12:51:26'),
(9, 'fghj', 'nomi', 'dsds', 'fghjkl;', 'Germany', 'gvhbjnkml', 'Lucknow', 'bhjkl;\'', 'info@awadhtechnology.com', 'dsfsfsfsf', 'ASFADFSGDHFJGKH.LJ.,KMNHGFD', '2022-08-25 12:52:52', '2022-08-25 12:52:52'),
(10, 'asad', 'asds', 'asdf', '10', 'United country', 'asdf', 'assdfg', 'dsfgnhn', 'asdfbgf@', '854245', 'gfbnhcn', '2022-08-25 14:07:07', '2022-08-25 14:07:07'),
(11, 'asdf', 'asdf', 'asd', 'asd', 'Ukraine', 'sadsf', 'asd', 'asd', 'asd', 'as', 'ZASDfvb', '2022-08-26 16:37:19', '2022-08-26 16:37:19'),
(12, 'pooja', 'khushi', 'dtty', 'fgk', 'France', 'wesrdtfyguhjkl;.\'/', 'vnbmn,m,./', '226030', 'sinoxtechnology@gmail.com', '07527976345', 'Cement Sand & Aggregates, TMT Steel Bars, ,Bricks & Blocks, Electrical, Plumbing, Wooden Products, Tiles, Bathroom Accessories, Bathroom Accessories, Paints & Finishes, Lighting & Fixtures, RMC, Natural Stones, Home Decor, UPVC Doors & Windows, Modular Kitchen, Roofing Solutions, Construction Chemicals, Glass Hardware,', '2022-08-31 14:19:37', '2022-08-31 14:19:37'),
(13, 'asad', 'asad', '10100', '1000', 'Russia', 'dfghj', 'fghjk', '78541236', 'asad@gmail.com', '78541521', 'xdfcghjkl', '2022-09-06 19:58:36', '2022-09-06 19:58:36'),
(14, 'wr', 'Rajnish Mishra', 'wer', '5', 'italy', 'er', 'LUCKNOW', '226002', 'rajnishm411@gmail.com', '08299032047', 'wa', '2022-09-12 13:03:32', '2022-09-12 13:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `product_id`, `rating`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, 11, 1, 'amazing productdxgdfcghvhbrtjygkhfchgvjbk', 1, '2022-09-05 17:56:44', '2022-09-06 12:15:44'),
(3, 17, 12, 4, 'werg', 1, '2022-09-05 19:13:54', '2022-09-05 19:13:54'),
(4, 17, 11, 4, 'Rah', 1, '2022-09-05 19:20:50', '2022-09-05 19:20:50'),
(5, 18, 12, 5, 'ddd', 1, '2022-09-06 12:15:57', '2022-09-06 12:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` json DEFAULT NULL,
  `products` json NOT NULL,
  `quantity` json NOT NULL,
  `select` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Additional` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `category`, `products`, `quantity`, `select`, `phone`, `location`, `name`, `email`, `Additional`, `created_at`, `updated_at`) VALUES
(2, '[\"Sand & Aggregates\"]', '[\"UttarPradhesh Red Brick - 9 x 4 x 3\"]', '[\"1000\"]', '12', '8887933130', 'public_html/assets/test', 'nomi', '123@123', 'wwwwwwwwwwwwwwwwww', '2022-08-31 18:43:32', '2022-08-31 18:43:32'),
(3, '[\"Cement\"]', '[\"Nagarjuna PPC 43 Grade Cement\"]', '[\"11243567\"]', '15', '134654', 'public_html', 'fghjklkjhg', 'dfghjkl2345678o@34567io', 'qewrertykuliljrtyui', '2022-08-31 18:44:55', '2022-08-31 18:44:55'),
(4, '[\"Cement\"]', '[\"UttarPradhesh Red Brick - 9 x 4 x 3\"]', '[\"1000\"]', '12', '2345682357', 'wdefthkj', 'nomi', 'nomi@gmail.com', 'qwertyuiopi;ljk.mhgfdsa', '2022-08-31 19:05:57', '2022-08-31 19:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `role`, `seller_id`) VALUES
(10, 'rajnish', NULL, 'rajerdfnishm4311@gmail.com', NULL, '$2y$10$c1/6sMeaYc0AM2fMhfd6ruZuI2371SiIaWPQMvyaWck/N9AQ2yEbu', NULL, '2022-08-16 15:25:05', '2022-08-16 15:25:05', NULL, NULL, 0),
(12, 'saffu', NULL, 'khan.shafqat.93@gmail.com', NULL, '$2y$10$/uziaF8t9HAF1InMsxo7s.gni/aJUKeoFaHvw146vUDEVEyASWOhO', NULL, '2022-08-17 12:26:33', '2022-08-17 12:26:33', 'saffu', NULL, 0),
(13, 'sohan', NULL, 'sohan@gmail.com', NULL, '$2y$10$KXZEYxrcZ4V3wEPQkyp4beZGKmRkGXon8zmdIwf.dwRiCwJNh/hOG', NULL, '2022-08-22 17:45:29', '2022-08-22 17:45:29', NULL, NULL, 0),
(14, 'shaan', NULL, 'shaan@gmail.com', NULL, '$2y$10$zTfE/2DmvIjj7.eJQQ2/LuVoituWKXMAaEwTNQGjdEAWZiO1habqa', NULL, '2022-08-22 18:30:19', '2022-08-22 18:30:19', NULL, NULL, 0),
(15, 'shaan', NULL, 'sohanchauhan139@gmail.com', NULL, '$2y$10$qb1zhSftV1cHTAwm9fmcB.EYImoZ8NhKVxNts2/uqjAPdlMu07C56', NULL, '2022-08-22 18:42:20', '2022-08-22 18:42:20', NULL, NULL, 0),
(16, 'shaan', NULL, 's@gmail.com', NULL, '$2y$10$0RDPd/FayrosZ6p.Fex6BexVRobtx2FchbmvIRv2AKIs6gdx2PZBC', NULL, '2022-08-23 23:55:12', '2022-08-23 23:55:12', NULL, NULL, 0),
(17, 'Rajnish', '8299032047', 'rajnishm411@gmail.com', NULL, '$2y$10$HFAFkucez1K9T.aqyXisE.MzqLC1EtZPI6Sb2n2hK17C/AR5cOVIu', NULL, '2022-08-24 14:53:30', '2022-09-06 12:26:33', 'Rajnish', 'admin', 0),
(18, 'demoUser', NULL, '123@gmail.com', NULL, '$2y$10$/op1Gi1jmh/wRPe3PvZxUu/gJBLCvMB6Y.S1EQ3nhNl5eNSmmAFRm', NULL, '2022-08-24 17:12:08', '2022-08-26 17:42:44', 'TestUser', NULL, 0),
(19, 'sohan', '7373883883838', 'g@gmail.com', NULL, '$2y$10$/XmOseH6tiFkZDezkisSpOcjhfLoi4nuStcDwkUNAyl.tTj4yKheO', NULL, '2022-08-27 16:30:27', '2022-08-27 16:30:27', NULL, NULL, 0),
(20, 'rajnish', '8173', 'etc@gmail.com', NULL, '$2y$10$royCVoovliTwyDh3uywiPOQcq.KxP5PkKBB3XG7bYV5VwnXLjln6W', NULL, '2022-08-27 16:32:37', '2022-08-27 16:32:37', NULL, NULL, 0),
(21, 'raj', '1234567890', 'raj@gmail.com', NULL, '$2y$10$G/mlLmcEqFsMkhsn1mXl9eTACp3e.5aaGRham6Ly02QOFRyYU8BYu', NULL, '2022-08-27 16:35:10', '2022-08-27 16:35:10', NULL, NULL, 0),
(22, 'Mohd Anawar', NULL, 'sinoxtechnology@gmail.com', NULL, '$2y$10$V9p4YWJ5Hlfr5E8DcUo1WuKnkKyFEAALBvdtW/ZJx2ZJ9rAH56JyC', NULL, '2022-08-31 14:08:18', '2022-08-31 14:08:18', NULL, NULL, 0),
(23, 'noman', '44455263636', 'nomaan@gmail.com', NULL, '$2y$10$MjlAichB9P.2qBHKu5PrzO.Yt9XKU/WnrZk4hUD6TogZYKxPtqh5C', NULL, '2022-08-31 20:00:18', '2022-08-31 20:00:18', NULL, NULL, 0),
(24, 'nomi', NULL, 'nomi@gmail.com', NULL, '$2y$10$4bZ6LZFCGIq8vdKL/OLMCeDwZAfTP95eMblqzk6QE1N2hQmMRYLUK', NULL, '2022-09-03 12:14:20', '2022-09-03 12:14:20', NULL, 'seller', 0),
(25, 'nomi', NULL, 'nomi887933@gmail.com', NULL, '$2y$10$mb82SIFrPPxeQWKG4Xfy8.GaWbYISC/TnThGA.SbZxf2fZbwQe4hG', NULL, '2022-09-06 12:25:27', '2022-09-06 12:25:27', NULL, NULL, 0),
(26, 'asad', NULL, 'marayeen45@gmail.com', NULL, '$2y$10$4HuC6Jc6JwPVnhUW2Jd6K.FKc5WAr4Q5AeRE4cdvmJJ3QhDZbV7Le', NULL, '2022-09-06 12:30:36', '2022-09-06 12:30:36', NULL, NULL, 0),
(27, 'mishra', NULL, 'techmishra277@gmail.com', NULL, '$2y$10$7M0nWiXMwU8zKDb2Ju7UWuMkANmOz7k4sOLkZe2KzDinMJ1GiBWCi', NULL, '2022-09-06 12:35:42', '2022-09-06 12:48:57', NULL, NULL, 0),
(28, 'Rajnish Mishra', NULL, 'rajnishm4@gmail.com', NULL, '$2y$10$YO8iC9WInZ4pLmTN9jTcW.h2vIhnJExJKS29WX2sbmQy7Rzz5c/bW', NULL, '2022-09-06 15:09:08', '2022-09-06 15:09:08', NULL, NULL, 0),
(31, 'Rajnish Mishra', '08299032047', 'rajnishm4112@gmail.com', NULL, '$2y$10$L9iB4AuHdjWEGp0laxOBc.rjZ7ubBD0s3UbhRB4Ny9c0FwIxzP2T6', NULL, '2022-09-08 16:34:29', '2022-09-08 16:34:29', NULL, 'seller', 7),
(32, 'Sahil', NULL, 'sahil@gmail.com', NULL, '$2y$10$uOc2kmjEt99PY5PGqunlx.dBt0PbAH0qkh/B.cPrXN/yov/.oqb46', NULL, '2022-09-12 12:38:46', '2022-09-12 12:38:46', NULL, NULL, NULL),
(33, 'Rajnish Mishra', NULL, 'rajnishm4113@gmail.com', NULL, '$2y$10$.jAa6OzMzvGbhFRp5xXJ/eg.GR62Uxco94W.Kvzp.lARgiWohZW/6', NULL, '2022-09-12 12:44:45', '2022-09-12 12:44:45', NULL, NULL, NULL),
(34, 'test', NULL, 'test@gmail.com', NULL, '$2y$10$Nj8LbrinaY4PaA5p3oPGMuwwBWL6Nf/Y.hijU81LgsJoZT7zgzu5y', NULL, '2022-09-12 12:46:24', '2022-09-12 12:46:24', NULL, NULL, NULL),
(35, 'niyaj ahamad', NULL, 'niyaj.ahamad31@gmail.com', NULL, '$2y$10$YHfM2XPcHOdbRQ3GA5vh6e6GT8djRkkETbAsLy7zOjYtwobYMHpX.', NULL, '2022-09-14 13:58:52', '2022-09-14 13:58:52', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `become_sellers`
--
ALTER TABLE `become_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_now_pay_laters`
--
ALTER TABLE `buy_now_pay_laters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_3` (`name`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`);

--
-- Indexes for table `compares`
--
ALTER TABLE `compares`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customs`
--
ALTER TABLE `customs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pricechecks`
--
ALTER TABLE `pricechecks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
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
-- AUTO_INCREMENT for table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `become_sellers`
--
ALTER TABLE `become_sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `buy_now_pay_laters`
--
ALTER TABLE `buy_now_pay_laters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `c_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `compares`
--
ALTER TABLE `compares`
  MODIFY `co_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customs`
--
ALTER TABLE `customs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pricechecks`
--
ALTER TABLE `pricechecks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
