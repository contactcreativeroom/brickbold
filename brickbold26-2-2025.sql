-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 07:24 AM
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
-- Database: `brickbold`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 2 COMMENT '1 = admin,  2 = sub admin',
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `phone`, `image`, `level`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'testingrakesh1@mailinator.com', '2024-12-09 10:07:18', NULL, NULL, 1, '$2y$10$1sHWsCqQv1kUw1gcqfJJEewmmV7OatsuTnge6fNlfekg5eAJw/qOa', 1, 'eaf1Hk0h8E19SOjCs1QPOpgKV3Do4yXGFYb8nrNiVkKvXLAd6fv7Pg9dqmBj', '2024-12-09 10:07:19', '2024-12-13 12:34:40'),
(2, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', NULL, '09874563251', 'd79ad9bbbcb774d334ceb80532baf36a.jpg', 2, '$2y$10$5whlR0uot92CbBw.RFvPA.uNRXnhkK6jwErQm/9zkA1pPfSisswri', 1, NULL, '2024-12-10 11:39:56', '2024-12-10 12:08:17'),
(5, 'Rakesh gupta11', 'testing@gmail.com', NULL, '09874563250', 'e40628102e22c409733e93bac105966a.jpg', 2, '$2y$10$lUISU51RxjCunDk97DNQH.Ii1t0pO1ZGJlc9CNFstZvzeXeLohieK', 1, 'u7FcHJW8ELOMliJGRqBwpbJi2hCKNpPdNLIjkpcp1NJJOKZqBJ7W8bTNqmde', '2025-01-06 12:31:34', '2025-01-07 06:32:23'),
(6, 'Rakesh sub admin', 'contactmytechregion@gmail.com', NULL, '2582582582', 'd13caa6b834b895a2ee221670af70c3e.png', 2, '$2y$10$Nhh2OtTfXNehAAU3Ho6uqurEmXDs.thpPl.nPkpMY8AhWIVlAT3F2', 1, NULL, '2025-01-27 10:55:03', '2025-01-27 10:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `interest` varchar(100) DEFAULT NULL,
  `tenure` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `priority` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `interest`, `tenure`, `image`, `status`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'SBI', '8', '30', '22a4e115bb28b7cf829e2d40c3785c44.png', 1, 0, '2025-01-27 11:09:30', '2025-01-27 11:11:19'),
(2, 'HDFC Bank Ltd', '8.7', '30', '1729320995hdfc.png', 1, 0, '2024-10-18 19:56:35', '2024-10-18 19:56:35'),
(3, 'Bank OF Indian', '9.25', '30', '1729321107bank if indian.png', 1, 0, '2024-10-18 19:58:27', '2024-10-18 19:58:27'),
(4, 'Canara Bank', '8.4', '30', '1729333243canara.jpg', 1, 0, '2024-10-18 23:20:43', '2024-10-18 23:20:43'),
(5, 'Punjab National Bank', '8.75', '30', '1729333711pnb.png', 1, 0, '2024-10-18 23:28:31', '2024-10-18 23:28:31'),
(6, 'ICICI Bank Ltd', '8.7', '30', '1729335832download (1).png', 1, 0, '2024-10-19 00:03:52', '2024-10-19 00:03:52'),
(7, 'Union Bank of India', '8.45', '30', '1729336147download.jpg', 1, 0, '2024-10-19 00:09:07', '2024-10-19 00:09:07'),
(8, 'Axis Bank Ltd.', '8.75', '30', '1729336195305_Logo.png', 1, 0, '2024-10-19 00:09:55', '2024-10-19 00:09:55'),
(9, 'Kotak Mahindra Bank Ltd.', '8.7', '30', '1729336495307_Logo.png', 1, 0, '2024-10-19 00:14:55', '2024-10-19 00:14:55'),
(10, 'Federal Bank Ltd.', '10.15', '30', '1729336550133_Logo.png', 1, 0, '2024-10-19 00:15:50', '2024-10-19 00:15:50'),
(11, 'IDFC First Bank Ltd.', '8.85', '30', '172933680319_Logo.png', 1, 0, '2024-10-19 00:20:03', '2024-10-19 00:20:03'),
(12, 'DCB Bank Ltd.', '9.5', '20', '1729336877111_Logo.png', 1, 0, '2024-10-19 00:21:17', '2024-10-19 00:21:17'),
(13, 'Bandhan Bank Ltd.', '9.15', '30', '172933694889_Logo.png', 1, 0, '2024-10-19 00:22:28', '2024-10-19 00:22:28'),
(14, 'YES Bank Ltd.', '9.15', '35', '1729336985249_Logo.png', 1, 0, '2024-10-19 00:23:05', '2024-10-19 00:23:05'),
(15, 'IDBI Bank Ltd.', '9.5', '30', '1729337085157_Logo.png', 1, 0, '2024-10-19 00:24:45', '2024-10-19 00:24:45'),
(16, 'RBL Bank Ltd.', '11.6', '25', '1729337278203_Logo.png', 1, 0, '2024-10-19 00:27:58', '2024-10-19 00:27:58'),
(17, 'Au Small Finance Bank Limited', '9.5', '20', '172933734087_Logo.png', 1, 0, '2024-10-19 00:29:00', '2024-10-19 00:29:00'),
(18, 'Capital Small Finance Bank Ltd.', '9.25', '20', '1729337516269_Logo.png', 1, 0, '2024-10-19 00:31:56', '2024-10-19 00:31:56'),
(19, 'Dhanlaxmi Bank Ltd.', '10.50', '30', '1729337725download (1).jpg', 1, 0, '2024-10-19 00:35:25', '2024-10-19 00:35:25'),
(20, 'ICICI Home Finance Ltd.', '8.75', '30', '1729337829download (2).jpg', 1, 0, '2024-10-19 00:37:09', '2024-10-19 00:37:09'),
(21, 'Equitas Small Finance Bank Ltd.', '9.5', '20', '1729338443125_Logo.png', 1, 0, '2024-10-19 00:47:23', '2024-10-19 00:47:23'),
(22, 'Ujjivan Small Finance Bank Limited', '13.75', '20', '1729338589241_Logo.png', 1, 0, '2024-10-19 00:49:49', '2024-10-19 00:49:49'),
(23, 'Utkarsh Small Finance Bank Limited', '9.5', '30', '1729338672245_Logo.png', 1, 0, '2024-10-19 00:51:12', '2024-10-19 00:51:12'),
(24, 'Jana Small Finance Bank Limited', '9.75', '30', '1729338707167_Logo.png', 1, 0, '2024-10-19 00:51:47', '2024-10-19 00:51:47'),
(25, 'Aadhar Housing Finance Ltd.', '11.75', '20', '1729488761download (2).png', 1, 0, '2024-10-20 18:32:41', '2024-10-20 18:32:41'),
(26, 'AAVAS FINANCIERS LIMITED', '8.50', '30', '1729488837download (3).png', 1, 0, '2024-10-20 18:33:57', '2024-10-20 18:33:57'),
(27, 'ADITYA BIRLA FINANCE LTD.', '8.60', '30', '1729489761download (3).jpg', 1, 0, '2024-10-20 18:49:21', '2024-10-20 18:49:21'),
(28, 'Bank of Baroda', '8.6', '30', '1729489878313_Logo.png', 1, 0, '2024-10-20 18:51:18', '2024-10-20 18:51:18'),
(29, 'Bank of Maharashtra', '8.5', '30', '172948995093_Logo.png', 1, 0, '2024-10-20 18:52:30', '2024-10-20 18:52:30'),
(30, 'TATA CAPITAL HOUSING FINANCE', '8.75', '30', '1729490197317_Logo.png', 1, 0, '2024-10-20 18:56:37', '2024-10-20 18:56:37'),
(31, 'INDIAINFOLINE HOUSING FINANCE LIMITED  (IIHFL)', '8.75', '30', '1729490315download (5).png', 1, 0, '2024-10-20 18:58:35', '2024-10-20 18:58:35'),
(32, 'HINDUJA HOUSING FINANCE LTD.', '13.50', '30', '1729490421download (4).jpg', 1, 0, '2024-10-20 19:00:21', '2024-10-20 19:00:21'),
(33, 'BAJAJ HOUSING FINANCE LTD.', '8.50', '30', '1729490526311_Logo.png', 1, 0, '2024-10-20 19:02:06', '2024-10-20 19:02:06'),
(34, 'Axis Bank Finance', '8.75', '30', '1729490654download (6).png', 1, 0, '2024-10-20 19:04:14', '2024-10-20 19:04:14'),
(35, 'ART Affordable Housing', '13', '30', '1729491160download (7).png', 1, 0, '2024-10-20 19:12:40', '2024-10-20 19:12:40'),
(36, 'CENTRAL BANK OF INDIA', '8.45', '30', '1729499472download (9).png', 1, 0, '2024-10-20 21:31:12', '2024-10-20 21:31:12'),
(37, 'DEUTSCHE BANK AG', '8.50', '30', '1729499566download (10).png', 1, 0, '2024-10-20 21:32:46', '2024-10-20 21:32:46'),
(38, 'EDELWEISS HOUSING FINANCE LTD.', '10', '20', '1729499654download (5).jpg', 1, 0, '2024-10-20 21:34:14', '2024-10-20 21:34:14'),
(39, 'FULLERTON INDIA HOME FINANCE CO. LTD.', '10.25', '30', '1729499756download (11).png', 1, 0, '2024-10-20 21:35:56', '2024-10-20 21:35:56'),
(40, 'GRIHUM HOUSING FINANCE LTD.', '9.9', '30', '1729511471download (12).png', 1, 0, '2024-10-21 00:51:11', '2024-10-21 00:51:11'),
(41, 'HSBC', '8.6', '25', '1729511661155_Logo.png', 1, 0, '2024-10-21 00:54:21', '2024-10-21 00:54:21'),
(42, 'HERO HOUSING FINANCE LTD.', '9.5', '30', '1729511779download (13).png', 1, 0, '2024-10-21 00:56:19', '2024-10-21 00:56:19'),
(43, 'INDIABULLS HOUSING FINANCE', '9.3', '30', '1729511888download (14).png', 1, 0, '2024-10-21 00:58:08', '2024-10-21 00:58:08'),
(44, 'PNB HOUSING FINANCE LTD.', '8.75', '30', '172951194953_Logo.png', 1, 0, '2024-10-21 00:59:09', '2024-10-21 00:59:09'),
(45, 'PIRAMAL CAPITAL & HOUSING FINANCE LTD./PIRAMAL HOUSING FINANCE', '11', '25', '172951199631_Logo.png', 1, 0, '2024-10-21 00:59:56', '2024-10-21 00:59:56'),
(46, 'STANDARD CHARTERED BANK', '8.25', '30', '1729512086download (6).jpg', 1, 0, '2024-10-21 01:01:26', '2024-10-21 01:01:26'),
(47, 'VASTU HOUSING FINANCE LTD.', '12.5', '20', '1729512149247_Logo.png', 1, 0, '2024-10-21 01:02:29', '2024-10-21 01:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 1,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active,0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `priority`, `title`, `sub_title`, `description`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Search Luxury Homes', 'Thousands of luxury home enthusiasts just like you visit our website.', 'Thousands of luxury home enthusiasts just like you visit our website.', 'ca0741960a1b2066a0cab916b35ebf63.jpg', NULL, 1, '2024-12-09 11:13:34', '2025-01-06 11:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_category` varchar(255) DEFAULT '0',
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dark_image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `interest`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rakesh gupta', 'testing@gmail.com', '9876543210', 'Rent', 'loream ispsum is dummy contant', 1, '2024-12-30 09:43:25', '2024-12-30 09:43:25'),
(2, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 11:29:08', '2024-12-30 11:29:08'),
(3, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 11:30:10', '2024-12-30 11:30:10'),
(4, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 11:33:54', '2024-12-30 11:33:54'),
(5, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 11:34:39', '2024-12-30 11:34:39'),
(6, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 11:35:24', '2024-12-30 11:35:24'),
(7, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 11:36:57', '2024-12-30 11:36:57'),
(8, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 11:37:47', '2024-12-30 11:37:47'),
(9, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 11:37:55', '2024-12-30 11:37:55'),
(10, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 12:06:20', '2024-12-30 12:06:20'),
(11, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 12:06:33', '2024-12-30 12:06:33'),
(12, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'Buy', 'loream ipsum is dummy content', 1, '2024-12-30 12:09:26', '2024-12-30 12:09:26'),
(13, 'brickbold', 'testingrakesh1@mailinator.com', '9632587412', 'Rent', 'this is for testing message', 1, '2025-01-15 07:31:49', '2025-01-15 07:31:49'),
(14, 'brickbold2', 'testingrakesh1@mailinator.com', '9632587412', 'Others', 'sdfsdsdfsdfsd', 1, '2025-01-15 07:40:12', '2025-01-15 07:40:12'),
(15, 'brickbold2', 'testingrakesh1@mailinator.com', '9632587412', 'Others', 'sdfsdsdfsdfsd', 1, '2025-01-15 07:42:34', '2025-01-15 07:42:34'),
(16, 'brickbold2', 'testingrakesh1@mailinator.com', '9632587412', 'Others', 'asdfsdfsdf', 1, '2025-01-15 07:51:39', '2025-01-15 07:51:39'),
(17, 'brickbold2', 'testingrakesh1@mailinator.com', '9632587412', 'Others', 'sdfsdfds', 1, '2025-01-15 07:56:47', '2025-01-15 07:56:47'),
(18, 'brickbold2', 'testingrakesh1@mailinator.com', '9632587412', 'Buy', 'tttttttttttttttttttttttttttttttttttttttt', 1, '2025-01-15 08:01:25', '2025-01-15 08:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `property_id`, `status`, `created_at`, `updated_at`) VALUES
(8, 1, 4, 1, '2024-12-26 09:54:20', '2024-12-26 09:54:20'),
(9, 1, 3, 1, '2024-12-26 11:51:47', '2024-12-26 11:51:47'),
(10, 1, 2, 1, '2024-12-28 11:42:07', '2024-12-28 11:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_enquiries`
--

CREATE TABLE `home_loan_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `finalized` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_loan_enquiries`
--

INSERT INTO `home_loan_enquiries` (`id`, `amount`, `phone`, `city`, `finalized`, `status`, `created_at`, `updated_at`) VALUES
(1, '500000000', '963258741', 'ludhiana', 'No', 1, '2025-02-12 06:54:08', '2025-02-12 06:54:08'),
(2, '5000000000000', '6985232585', 'Ludhiana', 'Yes', 1, '2025-02-12 07:10:06', '2025-02-12 07:10:06'),
(3, '59999998', '9876543210', 'Mysuru', 'Yes', 1, '2025-02-12 07:12:32', '2025-02-12 07:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `meta_details`
--

CREATE TABLE `meta_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `related_id` int(11) NOT NULL,
  `related_type` varchar(255) NOT NULL COMMENT '1=product,2=category,..',
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_05_02_080918_create_meta_details_table', 1),
(11, '2024_10_09_074925_create_categories_table', 1),
(12, '2024_10_09_084518_create_admins_table', 1),
(13, '2024_10_09_101202_create_banners_table', 1),
(14, '2024_11_27_105254_create_pages_table', 1),
(16, '2024_12_11_111111_create_user_types_table', 3),
(17, '2014_10_12_000000_create_users_table', 4),
(18, '2024_12_23_105220_create_properties_table', 5),
(20, '2024_12_23_172506_create_property_images_table', 6),
(21, '2024_12_26_104041_create_favorites_table', 7),
(22, '2024_12_30_141823_create_contacts_table', 8),
(23, '2024_12_31_133155_create_property_enquiries_table', 9),
(24, '2024_12_31_155257_create_newsletters_table', 10),
(25, '2025_01_03_120546_create_property_histories_table', 11),
(26, '2025_01_04_105116_create_packages_table', 11),
(27, '2025_01_06_120148_create_package_fields_table', 12),
(29, '2025_01_06_173046_create_testimonials_table', 13),
(30, '2025_01_07_153425_create_settings_table', 14),
(32, '2025_01_09_125208_create_otp_codes_table', 15),
(34, '2025_01_09_160143_payment', 17),
(35, '2025_01_08_111806_create_orders_table', 18),
(37, '2025_01_13_162051_create_user_subscriptions_table', 19),
(38, '2025_01_15_165450_create_seos_table', 20),
(39, '2025_01_27_104013_create_banks_table', 21),
(40, '2025_02_12_120843_create_home_loan_enquiries_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `mobile`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'preetindersingh1996@gmail.com', 1, '2024-12-31 10:46:26', '2024-12-31 10:46:26'),
(3, '9780520529', NULL, 1, '2025-01-24 12:25:58', '2025-01-24 12:25:58'),
(4, '9780520529', NULL, 1, '2025-01-24 12:26:16', '2025-01-24 12:26:16'),
(5, '9780520529', NULL, 1, '2025-01-24 12:27:21', '2025-01-24 12:27:21'),
(6, '9780520529', NULL, 1, '2025-01-24 12:28:45', '2025-01-24 12:28:45'),
(8, '7626905388', NULL, 1, '2025-01-27 10:00:41', '2025-01-27 10:00:41'),
(9, '9888858343', NULL, 1, '2025-01-27 10:02:31', '2025-01-27 10:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `razorpay_order_id` varchar(255) DEFAULT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `package_type` varchar(150) DEFAULT NULL,
  `package_price` double(8,2) DEFAULT 0.00,
  `discount` double(8,2) DEFAULT 0.00,
  `grand_price` double(8,2) DEFAULT 0.00,
  `package_value` longtext DEFAULT NULL,
  `post_property` int(11) DEFAULT 1,
  `contacts` int(11) DEFAULT 1,
  `days` int(11) DEFAULT 1,
  `status` int(11) DEFAULT 1,
  `adminorder_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `package_id`, `razorpay_order_id`, `package_name`, `package_type`, `package_price`, `discount`, `grand_price`, `package_value`, `post_property`, `contacts`, `days`, `status`, `adminorder_date`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'order_PipZ8nsZHkU7re', 'Commercial RENT Gold1', NULL, 3000.00, 15.00, 2552.00, 'a:0:{}', 1, 10, 15, 0, NULL, '2025-01-13 06:35:25', '2025-01-13 06:35:26'),
(2, 1, 5, 'order_Pipb2Ga6z7Fi1C', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4501.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 0, NULL, '2025-01-13 06:37:13', '2025-01-13 06:37:14'),
(3, 1, 5, 'order_PipbPI8RfevFMX', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4501.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 0, NULL, '2025-01-13 06:37:34', '2025-01-13 06:37:35'),
(4, 1, 4, 'order_PipfaXbKqWSHtO', 'Commercial RENT Gold', NULL, 3000.00, 15.00, 2551.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"15 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:2:\"no\";s:24:\"Capping on property lead\";s:9:\"Upto - 10\";s:15:\"Email Promotion\";s:2:\"no\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 10, 15, 0, NULL, '2025-01-13 06:41:32', '2025-01-13 06:41:32'),
(5, 1, 4, 'order_PipxG1JvS5lMaO', 'Commercial RENT Gold', NULL, 3000.00, 15.00, 2551.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"15 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:2:\"no\";s:24:\"Capping on property lead\";s:9:\"Upto - 10\";s:15:\"Email Promotion\";s:2:\"no\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 10, 15, 0, NULL, '2025-01-13 06:58:15', '2025-01-13 06:58:16'),
(6, 1, 5, 'order_PiqBwh814ZFUFj', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4501.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 0, NULL, '2025-01-13 07:12:10', '2025-01-13 07:12:10'),
(7, 1, 4, 'order_PiqGTtAZUgPPXn', 'Commercial RENT Gold', NULL, 3000.00, 15.00, 2551.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"15 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:2:\"no\";s:24:\"Capping on property lead\";s:9:\"Upto - 10\";s:15:\"Email Promotion\";s:2:\"no\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 10, 15, 1, NULL, '2025-01-13 07:16:27', '2025-01-13 07:16:51'),
(8, 1, 4, 'order_PiqLz7gIUcghQF', 'Commercial RENT Gold', NULL, 3000.00, 15.00, 2551.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"15 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:2:\"no\";s:24:\"Capping on property lead\";s:9:\"Upto - 10\";s:15:\"Email Promotion\";s:2:\"no\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 10, 15, 1, NULL, '2025-01-13 07:21:40', '2025-01-13 07:22:04'),
(9, 1, 5, 'order_PiqMPtdhrWDWKd', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4501.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 0, NULL, '2025-01-13 07:22:05', '2025-01-13 07:22:05'),
(10, 1, 5, 'order_PiqMxwt8PhVieE', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4501.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 1, NULL, '2025-01-13 07:22:36', '2025-01-13 07:23:02'),
(11, 1, 5, 'order_PiqNTqzcA6McEz', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4501.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 0, NULL, '2025-01-13 07:23:05', '2025-01-13 07:23:05'),
(12, 1, 4, 'order_PiqgDoSwiu6RYH', 'Commercial RENT Gold', NULL, 3000.00, 15.00, 2551.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"15 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:2:\"no\";s:24:\"Capping on property lead\";s:9:\"Upto - 10\";s:15:\"Email Promotion\";s:2:\"no\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 10, 15, 1, NULL, '2025-01-13 07:40:49', '2025-01-13 07:46:50'),
(13, 1, 5, 'order_PiuUseikvJNh3g', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4500.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 1, NULL, '2025-01-13 11:24:51', '2025-01-13 11:25:16'),
(14, 1, 5, 'order_PjJ2zdPZk8j1Ul', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4500.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 1, NULL, '2025-01-14 11:25:47', '2025-01-14 11:26:11'),
(15, 1, 5, 'order_PjJ7ZtzHOtnMBK', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4500.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 1, NULL, '2025-01-14 11:30:09', '2025-01-14 11:30:30'),
(16, 1, 4, 'order_PjJCEBhQYTiVHR', 'Commercial RENT Gold', NULL, 3000.00, 15.00, 2550.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"15 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:2:\"no\";s:24:\"Capping on property lead\";s:9:\"Upto - 10\";s:15:\"Email Promotion\";s:2:\"no\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 10, 15, 1, NULL, '2025-01-14 11:34:33', '2025-01-14 11:34:55'),
(17, 1, 5, 'order_Pjgjadt0ixiNQL', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4500.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 1, NULL, '2025-01-15 10:36:03', '2025-01-15 10:36:27'),
(18, 1, 5, 'order_Pk7YJpCvCIQVwi', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4500.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 0, NULL, '2025-01-16 12:50:07', '2025-01-16 12:50:08'),
(19, 1, 5, 'order_Pk7YKpneGy6uzF', 'Commercial RENT Platinum', NULL, 5000.00, 10.00, 4500.00, 'a:7:{s:24:\"Listing of accommodation\";s:1:\"1\";s:24:\"Validity of your package\";s:7:\"30 Days\";s:26:\"Visibility of your listing\";s:3:\"Yes\";s:29:\"Priority Relationship Manager\";s:3:\"Yes\";s:24:\"Capping on property lead\";s:9:\"Upto - 20\";s:15:\"Email Promotion\";s:3:\"Yes\";s:21:\"Customer care support\";s:3:\"Yes\";}', 1, 20, 30, 1, NULL, '2025-01-16 12:50:09', '2025-01-16 12:50:31'),
(20, 1, 6, 'order_PzqdBxH49AQyjK', 'Residential BUY GOLD', 'BUY', 1000.00, 25.00, 750.00, 'a:6:{s:25:\"Search Listing property\'s\";s:9:\"Unlimited\";s:24:\"Validity of your package\";s:7:\"90 Days\";s:28:\"Instant alert at new listing\";s:2:\"No\";s:22:\"No. of Owner\'s contact\";s:7:\"Upto 15\";s:25:\"Priority customer support\";s:2:\"No\";s:18:\"Home loan facility\";s:3:\"Yes\";}', 0, 15, 90, 1, NULL, '2025-02-25 06:40:59', '2025-02-25 06:41:20'),
(21, 1, 4, 'order_Pzs9PcExfjXp8E', 'Residential BUY SILVER', 'BUY', 800.00, 25.00, 600.00, 'a:6:{s:25:\"Search Listing property\'s\";s:9:\"Unlimited\";s:24:\"Validity of your package\";s:7:\"60 Days\";s:28:\"Instant alert at new listing\";s:2:\"No\";s:22:\"No. of Owner\'s contact\";s:7:\"Upto 10\";s:25:\"Priority customer support\";s:2:\"No\";s:18:\"Home loan facility\";s:3:\"Yes\";}', 0, 10, 60, 1, NULL, '2025-02-25 08:10:10', '2025-02-25 08:10:44'),
(22, 1, 4, 'order_PzsCABaWZSicN4', 'Residential BUY SILVER', 'BUY', 800.00, 25.00, 600.00, 'a:6:{s:25:\"Search Listing property\'s\";s:9:\"Unlimited\";s:24:\"Validity of your package\";s:7:\"60 Days\";s:28:\"Instant alert at new listing\";s:2:\"No\";s:22:\"No. of Owner\'s contact\";s:7:\"Upto 10\";s:25:\"Priority customer support\";s:2:\"No\";s:18:\"Home loan facility\";s:3:\"Yes\";}', 0, 10, 60, 1, NULL, '2025-02-25 08:12:47', '2025-02-25 08:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `otp_codes`
--

CREATE TABLE `otp_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `expires_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otp_codes`
--

INSERT INTO `otp_codes` (`id`, `mobile`, `otp`, `expires_at`, `created_at`, `updated_at`) VALUES
(5, '7626905388', '814050', '2025-01-11 06:39:46', '2025-01-11 06:11:13', '2025-01-11 06:29:46'),
(10, '9041092240', '811998', '2025-01-16 12:31:37', '2025-01-16 12:18:07', '2025-01-16 12:21:37'),
(30, '9874563250', '756371', '2025-02-25 07:46:15', '2025-02-25 07:36:15', '2025-02-25 07:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) DEFAULT '''SELL''',
  `name` varchar(255) DEFAULT NULL,
  `profile` varchar(100) DEFAULT '''OWNER''',
  `property_type` varchar(255) DEFAULT NULL,
  `unit` int(11) DEFAULT 1,
  `days` int(11) DEFAULT 1,
  `post_property` int(11) DEFAULT 1,
  `price` double(8,2) DEFAULT 0.00,
  `discount` double(8,2) DEFAULT 0.00,
  `grand_price` double(8,2) DEFAULT 0.00,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `type`, `name`, `profile`, `property_type`, `unit`, `days`, `post_property`, `price`, `discount`, `grand_price`, `status`, `created_at`, `updated_at`) VALUES
(4, 'BUY', 'SILVER', 'Owner', 'Residential', 10, 60, 0, 800.00, 25.00, 600.00, 1, '2025-01-06 02:34:54', '2025-02-24 07:50:23'),
(5, 'SELL', 'PLATINUM', 'Owner', 'Residential', 35, 120, 1, 4200.00, 25.00, 3150.00, 1, '2025-01-06 02:40:08', '2025-02-24 07:45:22'),
(6, 'BUY', 'GOLD', 'Owner', 'Residential', 15, 90, 0, 1000.00, 25.00, 750.00, 1, '2025-01-06 02:34:54', '2025-02-24 07:52:25'),
(7, 'SELL', 'Diamond', 'Owner', 'Residential', 50, 180, 1, 5500.00, 25.00, 4125.00, 1, '2025-01-06 02:40:08', '2025-02-24 07:47:24'),
(8, 'SELL', 'GOLD', 'Owner', 'Residential', 20, 90, 1, 3100.00, 25.00, 2325.00, 1, '2025-02-10 04:04:45', '2025-02-24 07:42:34'),
(9, 'SELL', 'SILVER', 'Owner', 'Residential', 10, 60, 1, 2000.00, 25.00, 1500.00, 1, '2025-02-10 05:24:51', '2025-02-24 07:40:26'),
(10, 'BUY', 'PLATINUM', 'Owner', 'Residential', 25, 120, 0, 2100.00, 25.00, 1575.00, 1, '2025-02-24 07:54:45', '2025-02-24 07:54:45'),
(11, 'BUY', 'DIAMOND', 'Owner', 'Residential', 40, 180, 0, 3500.00, 25.00, 2625.00, 1, '2025-02-24 07:57:07', '2025-02-24 07:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `package_fields`
--

CREATE TABLE `package_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_fields`
--

INSERT INTO `package_fields` (`id`, `package_id`, `heading`, `value`, `status`, `created_at`, `updated_at`) VALUES
(153, 9, 'Number of listing property\'s', '1', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(154, 9, 'Validity of your property ads', '60 Days', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(155, 9, 'No. of buyer\'s contact', 'Upto 10', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(156, 9, 'Email promotion', 'No', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(157, 9, 'Buyer inquiry against posted property', 'Yes', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(158, 9, 'Verified tag on property', 'No', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(159, 9, 'Priority customer support', 'No', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(160, 9, 'Home loan facility', 'Yes', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(161, 9, 'Notification to buyer', 'No', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(162, 9, 'Response rate', 'Low', 1, '2025-02-24 07:40:26', '2025-02-24 07:40:26'),
(163, 8, 'Number of listings', '1', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(164, 8, 'Validity of your property ads', '90 Days', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(165, 8, 'No. of buyer\'s contact', 'Upto 20', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(166, 8, 'Email promotion', 'No', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(167, 8, 'Buyer inquiry against posted property', 'Yes', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(168, 8, 'Verified tag on property', 'No', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(169, 8, 'Priority customer support', 'No', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(170, 8, 'Home loan facility', 'Yes', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(171, 8, 'Notification to buyer', 'No', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(172, 8, 'Response rate', 'Medium', 1, '2025-02-24 07:42:34', '2025-02-24 07:42:34'),
(173, 5, 'Number of listings', '1', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(174, 5, 'Validity of your property ads', '120 Days', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(175, 5, 'No. of buyer\'s contact', 'Upto 35', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(176, 5, 'Email promotion', 'Yes', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(177, 5, 'Buyer inquiry against posted property', 'Yes', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(178, 5, 'Verified tag on property', 'No', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(179, 5, 'Priority customer support', 'Yes', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(180, 5, 'Home loan facility', 'Yes', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(181, 5, 'Notification to buyer', 'No', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(182, 5, 'Response rate', 'High', 1, '2025-02-24 07:45:22', '2025-02-24 07:45:22'),
(183, 7, 'Number of listings', '1', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(184, 7, 'Validity of your property ads', '180 Days', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(185, 7, 'No. of buyer\'s contact', 'Upto 50', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(186, 7, 'Email promotion', 'Yes', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(187, 7, 'Buyer inquiry against posted property', 'Yes', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(188, 7, 'Verified tag on property', 'Yes', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(189, 7, 'Priority customer support', 'Yes', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(190, 7, 'Home loan facility', 'Yes', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(191, 7, 'Notification to buyer', 'Yes', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(192, 7, 'Response rate', 'High', 1, '2025-02-24 07:47:24', '2025-02-24 07:47:24'),
(193, 4, 'Search Listing property\'s', 'Unlimited', 1, '2025-02-24 07:50:23', '2025-02-24 07:50:23'),
(194, 4, 'Validity of your package', '60 Days', 1, '2025-02-24 07:50:23', '2025-02-24 07:50:23'),
(195, 4, 'Instant alert at new listing', 'No', 1, '2025-02-24 07:50:23', '2025-02-24 07:50:23'),
(196, 4, 'No. of Owner\'s contact', 'Upto 10', 1, '2025-02-24 07:50:23', '2025-02-24 07:50:23'),
(197, 4, 'Priority customer support', 'No', 1, '2025-02-24 07:50:23', '2025-02-24 07:50:23'),
(198, 4, 'Home loan facility', 'Yes', 1, '2025-02-24 07:50:23', '2025-02-24 07:50:23'),
(199, 6, 'Search Listing property\'s', 'Unlimited', 1, '2025-02-24 07:52:25', '2025-02-24 07:52:25'),
(200, 6, 'Validity of your package', '90 Days', 1, '2025-02-24 07:52:25', '2025-02-24 07:52:25'),
(201, 6, 'Instant alert at new listing', 'No', 1, '2025-02-24 07:52:25', '2025-02-24 07:52:25'),
(202, 6, 'No. of Owner\'s contact', 'Upto 15', 1, '2025-02-24 07:52:25', '2025-02-24 07:52:25'),
(203, 6, 'Priority customer support', 'No', 1, '2025-02-24 07:52:25', '2025-02-24 07:52:25'),
(204, 6, 'Home loan facility', 'Yes', 1, '2025-02-24 07:52:25', '2025-02-24 07:52:25'),
(205, 10, 'Search Listing property\'s', 'Unlimited', 1, '2025-02-24 07:54:45', '2025-02-24 07:54:45'),
(206, 10, 'Validity of your package', '120 Days', 1, '2025-02-24 07:54:45', '2025-02-24 07:54:45'),
(207, 10, 'Instant alert at new listing', 'No', 1, '2025-02-24 07:54:45', '2025-02-24 07:54:45'),
(208, 10, 'No. of Owner\'s contact', 'Upto 25', 1, '2025-02-24 07:54:45', '2025-02-24 07:54:45'),
(209, 10, 'Priority customer support', 'No', 1, '2025-02-24 07:54:45', '2025-02-24 07:54:45'),
(210, 10, 'Home loan facility', 'Yes', 1, '2025-02-24 07:54:45', '2025-02-24 07:54:45'),
(211, 11, 'Search Listing property\'s', 'Unlimited', 1, '2025-02-24 07:57:07', '2025-02-24 07:57:07'),
(212, 11, 'Validity of your package', '180 Days', 1, '2025-02-24 07:57:07', '2025-02-24 07:57:07'),
(213, 11, 'Instant alert at new listing', 'Yes', 1, '2025-02-24 07:57:07', '2025-02-24 07:57:07'),
(214, 11, 'No. of Owner\'s contact', 'Upto 40', 1, '2025-02-24 07:57:07', '2025-02-24 07:57:07'),
(215, 11, 'Priority customer support', 'Yes', 1, '2025-02-24 07:57:07', '2025-02-24 07:57:07'),
(216, 11, 'Home loan facility', 'Yes', 1, '2025-02-24 07:57:07', '2025-02-24 07:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `icon` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `sub_title`, `slug`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `status`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Terms and Conditions', '', 'terms-and-conditions', '<p>By using or visiting website, mobile applications, software, data feeds, and services provided to you (collectively the&nbsp;&quot;Service&quot;) you signify your agreement to these terms and conditions (the&nbsp;&quot;Terms of Service&quot;) and privacy policy (the &ldquo;Privacy Policy&rdquo;) of the Company. If you do not agree to any of these terms, please do not use the Service.</p>\r\n\r\n<p>Welcome to Brick Bold!&nbsp;We are a digital real estate advertising / marketing and information services platform connecting people with the real estate market. Brick Bold and our subsidiaries and affiliates provide you with access to a variety of services, including but not limited to the www.brickbold.com website mobile applications (the &ldquo;Mobile App&rdquo;) and all the products and services available through our Website and Mobile App. These Terms and Conditions (&quot;Terms&quot;) govern your use of [Brick Bold] (&quot;Portal&quot;), including its website and any associated applications. By accessing or using our Portal, you agree to these Terms. If you do not agree to these Terms, please do not use our Portal.</p>\r\n\r\n<h6>Defined Terms:</h6>\r\n\r\n<ul>\r\n	<li>&quot;Brick Bold &quot; is defined as the internet website or mobile application of the Company at www.brickbold.com.</li>\r\n	<li>&quot;My Subscriptions&quot; contains time to time information and description of the Services for the User provided by the Company in writing or contained in the website www.brickbold.com.</li>\r\n	<li>Registration Data&quot; is the database of all the particulars and information supplied by the User on initial application and subscription, including but without limiting to the User&#39;s name, telephone number, mailing address, account and email address.</li>\r\n	<li>Affiliate means an entity that controls, is controlled by or is under common control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</li>\r\n</ul>\r\n\r\n<h6>Services:</h6>\r\n\r\n<p>Company provides a number of internet-based services through its platform and shall include:</p>\r\n\r\n<ul>\r\n	<li>Posting User profile or listing for the purpose of sale/rental of property, and related property services etc.</li>\r\n	<li>Find a property through www.brickbold.com and its internet links.</li>\r\n	<li>Place a print advertisement in any of the group publications through the www.brickbold.com site.</li>\r\n	<li>Post your property to advertisements on www.brickbold.com.</li>\r\n	<li>Send advertisements and promotional messages through emails and messages.</li>\r\n</ul>\r\n\r\n<h6>1.Use of the Portal</h6>\r\n\r\n<p>Account Registration: To access certain features, you may be required to create an account. You agree to provide accurate and complete information and to keep your account information updated.</p>\r\n\r\n<p>Prohibited Activities: You agree not to engage in any activities that are illegal, unethical, or that may harm the Portal or its users. Prohibited activities include, but are not limited to:</p>\r\n\r\n<ul>\r\n	<li>Unauthorized access to other users&#39; accounts.</li>\r\n	<li>Posting false or misleading information.</li>\r\n</ul>\r\n\r\n<h6>Content</h6>\r\n\r\n<p>User-Generated Content: You retain ownership of any content you submit to the Portal, including property listings, reviews, and comments. By submitting content, you grant [Brick Bold] a non-exclusive, royalty-free, perpetual, and worldwide license to use, display, and distribute your content.</p>\r\n\r\n<p><strong>Portal Content:</strong></p>\r\n\r\n<p>All content provided by [Brick Bold], including text, graphics, logos, and software, is the property of [Brick Bold] or its licensors and is protected by intellectual property laws. You may not reproduce, distribute, or modify this content without permission.</p>\r\n\r\n<p><strong>Eligibility:</strong></p>\r\n\r\n<p>Our Service does not address anyone under the age of 18. We do not knowingly collect personally identifiable information from anyone under the age of 18. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 18 without verification of parental consent, We take steps to remove that information from Our servers.</p>\r\n\r\n<h6>Payment &amp; Refund clause</h6>\r\n\r\n<p>When you choose any subscription or paid service provided as part of our Services, we or our payment gateway provider may collect your purchase, address or billing information, including your credit card number and expiration date etc. If you cancel your subscription its charges will not refunded.</p>\r\n\r\n<h6>Listings and Transactions</h6>\r\n\r\n<p><strong>Accuracy of Listings:</strong></p>\r\n\r\n<p>While we strive to provide accurate and up-to-date information, [Brick Bold] does not guarantee the accuracy, completeness, or reliability of property listings or other information provided on the Portal. It is your responsibility to verify all information before making any decisions.</p>\r\n\r\n<p><strong>Transactions:</strong></p>\r\n\r\n<p>Any transactions or agreements made between users (e.g., buyers and sellers) are solely between the parties involved. [Brick Bold] is not a party to such transactions and does not assume any responsibility or liability for them.</p>\r\n\r\n<h6>Links to Other Websites</h6>\r\n\r\n<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p>\r\n\r\n<p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party&#39;s site. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>\r\n\r\n<p><strong>Privacy</strong></p>\r\n\r\n<p>Privacy Policy: Your use of the Portal is governed by our Privacy Policy, which is incorporated into these Terms by reference. Please review our Privacy Policy to understand how we collect, use, and protect your personal information</p>\r\n\r\n<h6>Changes to Terms</h6>\r\n\r\n<p>We reserve the right to modify these Terms at any time. Any changes will be effective immediately upon posting on the Portal. Your continued use of the Portal after changes are made constitutes your acceptance of the revised Terms.</p>\r\n\r\n<h6>Contact Us</h6>\r\n\r\n<p>If you have any questions about this Privacy Policy, You can contact us:</p>\r\n\r\n<ul>\r\n	<li>By email:&nbsp;<a href=\"mailto:support@brickbold.com\">Support@brickbold.com</a></li>\r\n	<li>By visiting this page on our website:&nbsp;www.brickbold.com</li>\r\n	<li>By phone number:<a href=\"tel:+919878182240\">+91 98781 82240</a></li>\r\n</ul>', 'SEO Title', 'SEO Description', 'SEO Keywords', 1, 'fa-file-contract', NULL, '2024-12-27 10:39:06', '2025-01-15 11:06:01'),
(2, 'Privacy Policy', '', 'privacy-policy', '<p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>\r\n\r\n<p>Brick Bold respects the privacy of its users and is committed to protect it in all respects. With a view to offer most enriching and holistic internet experience to its users Brick Bold offers a vast repository of Online Sites and variety of community services. We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. The information about the user as collected by Brick Bold is: (a) information supplied by users and (b) information automatically tracked while navigation (Information).</p>\r\n\r\n<h6>Interpretation and Definitions</h6>\r\n\r\n<p><strong>Interpretation</strong></p>\r\n\r\n<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\r\n\r\n<p><strong>Definitions</strong></p>\r\n\r\n<p>For the purposes of this Privacy Policy:</p>\r\n\r\n<ul>\r\n	<li>Account means a unique account created for You to access our Service or parts of our Service.</li>\r\n	<li>Company (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Brick Bold, SCO 18, 2nd floor cabin No.208 Feroze Gandhi Market, Ludhiana.</li>\r\n	<li>Cookies are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</li>\r\n	<li>Country refers to: Punjab, India.</li>\r\n	<li>Device means any device that can access the Service such as a computer, a cellphone or a digital tablet.</li>\r\n	<li>Personal Data is any information that relates to an identified or identifiable individual.</li>\r\n	<li>Service Provider means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</li>\r\n	<li>Usage data refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>\r\n	<li>Website refers to Brickbold, accessible from www.brickbold.com</li>\r\n	<li>You means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>\r\n</ul>\r\n\r\n<h6>Collecting and Using Your Personal Data</h6>\r\n\r\n<p><strong>Types of Data Collected</strong><strong>Personal Data</strong></p>\r\n\r\n<ul>\r\n	<li>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. We collect information you provide to us directly when you use our Platforms (like when you sign-up/ register an account, or post a property listings). We may also collect this information over calls, emails, messages, or other communications established with you to create, update or maintain your details on the Platform. Further, We may also collect this information when you provide it by filling out relevant forms to express your interest in availing our Services. This information includes:\r\n	<ul>\r\n		<li>Personal Details: This includes your First name and last name, contact information (like addresses, e-mail addresses, phone number), and login information (like username).</li>\r\n		<li>Property Details: This includes the details of the property such as nature of property (like commercial, residential, etc), location details, property profile (like area, dimensions, road connectivity), photographs of your property (if any), pricing details and details of the amenities.</li>\r\n		<li>State, Province, ZIP/Postal code, City</li>\r\n		<li>Usage Data</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h6>Usage Data is collected automatically when using the Service.</h6>\r\n\r\n<p>Usage Data may include information such as Your Device&#39;s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>\r\n\r\n<p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>\r\n\r\n<h6>Subscription or Paid Service Data</h6>\r\n\r\n<p>When you choose any subscription or paid service provided as part of our Services, we or our payment gateway provider may collect your purchase, address or billing information, including your credit card number and expiration date etc.</p>\r\n\r\n<p>All payments on our real estate website must be made in full using accepted methods such as credit/debit cards, bank transfers, or other specified payment options. Payments are required to secure reservations, deposits, or purchases and are processed securely in [specify currency, e.g., INR , USD ]. Please note that the payment terms may vary depending on the type of transaction, such as property reservations, application fees, or service charges.</p>\r\n\r\n<p>For reservations and deposits, refunds are generally not available once the payment is processed, as these funds are used to secure the property or service. If you cancel your subscription its charges will not refunded.</p>\r\n\r\n<h6>Tracking Technologies and Cookies</h6>\r\n\r\n<p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>\r\n\r\n<ul>\r\n	<li>Cookies or Browser Cookies.&nbsp;A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>\r\n	<li>Web Beacons.&nbsp;Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>\r\n</ul>\r\n\r\n<p>Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. You can learn more about cookies on&nbsp;&nbsp;<a href=\"https://www.termsfeed.com/blog/cookies/\">Terms Feed website</a>&nbsp;article.</p>\r\n\r\n<p>We use both Session and Persistent Cookies for the purposes set out below:</p>\r\n\r\n<p><strong>Necessary / Essential Cookies</strong></p>\r\n\r\n<p>Type: Session Cookies</p>\r\n\r\n<p>Administered by: Us</p>\r\n\r\n<p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent</p>\r\n\r\n<p>fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>\r\n\r\n<p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>\r\n\r\n<p>Type: Persistent Cookies</p>\r\n\r\n<p>Administered by: Us</p>\r\n\r\n<p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>\r\n\r\n<p><strong>Functionality Cookies</strong></p>\r\n\r\n<p>Type: Persistent Cookies</p>\r\n\r\n<p>Administered by: Us</p>\r\n\r\n<p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>\r\n\r\n<p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>\r\n\r\n<h6>Use of Your Personal Data</h6>\r\n\r\n<p>The Company may use Personal Data for the following purposes:</p>\r\n\r\n<ul>\r\n	<li>To provide and maintain our Service, including to monitor the usage of our Service.</li>\r\n	<li>To manage Your Account: to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</li>\r\n	<li>For the performance of a contract: the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</li>\r\n	<li>To contact You:&nbsp;To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application&#39;s push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</li>\r\n	<li>To provide You&nbsp;with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</li>\r\n	<li>To manage Your requests:&nbsp;To attend and manage Your requests to Us.</li>\r\n	<li>For business transfers:&nbsp;We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</li>\r\n	<li>For other purposes: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</li>\r\n</ul>\r\n\r\n<p>We may share Your personal information in the following situations:</p>\r\n\r\n<ul>\r\n	<li>With Service Providers:&nbsp;We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li>\r\n	<li>For business transfers:&nbsp;We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>\r\n	<li>With Affiliates:&nbsp;We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>\r\n	<li>With business partners:&nbsp;We may share Your information with Our business partners to offer You certain products, services or promotions.</li>\r\n	<li>With other users:&nbsp;when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li>\r\n	<li>With Your consent: We may disclose Your personal information for any other purpose with Your consent.</li>\r\n</ul>\r\n\r\n<h6>Retention of Your Personal Data</h6>\r\n\r\n<p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws),resolve disputes, and enforce our legal agreements and policies.</p>\r\n\r\n<p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>\r\n\r\n<h6>Transfer of Your Personal Data</h6>\r\n\r\n<p>Your information, including Personal Data, is processed at the Company&#39;s operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to &mdash; and maintained on &mdash; computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>\r\n\r\n<p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>\r\n\r\n<p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information. If you do not want us to share your information with other companies or organizations, please let us know by emailing us at&nbsp;<a href=\"mailto:support@Brickbold.com\">support@Brickbold.com</a>. In case you wish to delete your information from our website, please let us know by emailing us at&nbsp;<a href=\"mailto:support@Brickbold.com\">support@Brickbold.com</a>.</p>\r\n\r\n<h6>Business Transactions</h6>\r\n\r\n<p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>\r\n\r\n<h6>Law enforcement</h6>\r\n\r\n<p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>\r\n\r\n<h6>Other legal requirements</h6>\r\n\r\n<p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>\r\n\r\n<ul>\r\n	<li>Comply with a legal obligation</li>\r\n	<li>Protect and defend the rights or property of the Company</li>\r\n	<li>Prevent or investigate possible wrongdoing in connection with the Service</li>\r\n	<li>Protect the personal safety of Users of the Service or the public</li>\r\n	<li>Protect against legal liability</li>\r\n</ul>\r\n\r\n<h6>Security of Your Personal Data</h6>\r\n\r\n<p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>\r\n\r\n<h6>Children&#39;s Privacy</h6>\r\n\r\n<p>Our Service does not address anyone under the age of 18. We do not knowingly collect personally identifiable information from anyone under the age of 18. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 18 without verification of parental consent, We take steps to remove that information from Our servers.</p>\r\n\r\n<p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent&#39;s consent before We collect and use that information.</p>\r\n\r\n<h6>Links to Other Websites</h6>\r\n\r\n<p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party&#39;s site. We strongly advise You to review the Privacy Policy of every site You visit. Data collected by third parties is subject to their own privacy policies and privacy practices such as the&nbsp;<a href=\"https://policies.google.com/privacy\">Privacy Policy of Google</a>. You may control the display of your content by using settings available at&nbsp;<a href=\"https://myaccount.google.com/connections?filters=3,4&amp;hl=en&amp;pli=1\">Google&#39;s security settings</a>&nbsp;page.</p>\r\n\r\n<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>\r\n\r\n<h6>Changes to this Privacy Policy</h6>\r\n\r\n<p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>\r\n\r\n<p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>\r\n\r\n<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>\r\n\r\n<h6>Contact Us</h6>\r\n\r\n<p>If you have any questions about this Privacy Policy, You can contact us:</p>\r\n\r\n<ul>\r\n	<li>By email:&nbsp;Support@brickbold.com</li>\r\n	<li>By visiting this page on our website:&nbsp;www.brickbold.com</li>\r\n	<li>By phone number:<a href=\"tel:+919878182240\">+91 98781 82240</a></li>\r\n</ul>', '', '', '', 1, 'fa-user-shield', NULL, '2024-12-27 10:42:20', '2024-12-27 10:42:20'),
(3, 'Refund and Return Policy', '', 'refund-and-return-policy', '<p>Payments for the Services offered by brickbold.com shall be on a 100% advance basis. The payment for service once subscribed to by the subscriber is not refundable. Please note that the payment terms may vary depending on the type of transaction, such as property reservations, application fees, or service charges. If you cancel your subscription, its amount will not refunded.</p>\r\n\r\n<p>VFS Alliance private limited/brickbold.com does not store or keep credit/debit card data, for online transactions involving payments a user is directed to a Payment Gateway. So, the transaction happens on a third-party network not controlled by VFS Alliance private limited. Once a credit/debit card transaction has been completed, the payment information is not accessible to anyone at VFS Alliance private limited. after completion of the on-line transaction at the Payment Gateway.</p>\r\n\r\n<p>VFS Alliance Private Limited shall not be liable for any loss or damage sustained by reason of any disclosure of any information concerning the user&#39;s account and / or information relating to or regarding online transactions. using credit cards / debit cards and / or their verification process and particulars nor for any error or inaccuracy with respect to any information.</p>\r\n\r\n<p>Though VFS Alliance private limited payment acceptance team works on a priority basis, if transaction is failed, VFS alliance private limited offers no guarantees for the accuracy or timeliness of the refunds reaching the Subscribers card/bank accounts.</p>', '', '', '', 1, 'fa-ban', NULL, '2024-12-27 10:44:52', '2024-12-27 10:44:52');
INSERT INTO `pages` (`id`, `title`, `sub_title`, `slug`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `status`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Elite Services', 'Elite Services', 'elite-services', '<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">Connect with Vastu Experts for personalized advice</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Experienced &amp; Verified Professionals</span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">On-location &amp; Telephonic Consultations</span></span></span></span></span></p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#002060\">Vastu Shatra Consultation</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Vastu Shastra is an ancient Indian architectural science that discloses layout, design, measurements, ground preparation and spatial geometry of buildings to balance them with the natural environment and cosmic energies</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><em><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#002060\">Vastu Shastra Consultation</span></span></span></em></strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"> refers to seeking professional guidance based on the ancient Indian science of architecture, which aims to create spaces that are in harmony with natural energies.&nbsp; A Vastu Shastra consultation focuses on the arrangement, design, and placement of various elements in a home, office, or building to optimize positive energy flow and improve the well-being of the occupants.</span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">&quot; <em><span style=\"color:#002060\">Brickbold offer online Vastu consultation services, providing you with methods and guidelines to make your infrastructure in line with Vastu-Principles. Our Vastu experts deliver customized solutions tailored to meet your modern needs! With every consultation, we aim to foster positive energy and ensure a prosperous and harmonious development.&quot;</span></em></span></span></span></span></p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Vastu consultation is sought for several reasons, primarily to create a harmonious and balanced living or working environment. Here are some key reasons why people seek Vastu consultation:</span></span></span></p>\n\n<ol>\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Enhancing Positive Energy:</span></strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"> Vastu helps align spaces with natural forces, promoting positive energy, peace, and well-being in your home or office.</span></span></span></li>\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Improved Health and Prosperity:</span></strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"> By following Vastu principles, individuals believe they can improve their physical and mental health, as well as increase wealth and success.</span></span></span></li>\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Emotional Balance:</span></strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"> Proper alignment of spaces can lead to reduced stress, improved relationships, and a more positive atmosphere.</span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Optimizing Space Utilization:</span></span></strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"> Vastu experts help in arranging spaces in a way that maximizes their potential, making them more functional and efficient.</span></span></span></span></li>\n</ol>\n\n<p style=\"margin-left:48px\">&nbsp;</p>\n\n<div style=\"border-bottom:solid windowtext 1.0pt; padding:0cm 0cm 1.0pt 0cm\">\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:15.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Our Esteemed Partners</span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:15.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Top of Form</span></span></span></span></p>\n</div>\n\n<div style=\"border-top:solid windowtext 1.0pt; padding:1.0pt 0cm 0cm 0cm\">\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:15.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Bottom of Form</span></span></span></span></p>\n</div>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"background-color:white\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Consulting Packages &amp; Fees Structure</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Trial Pack</span></span></span></strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:9.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">50% off</span></span></span></span></span></span></span></p>\n\n<p style=\"text-align:right\"><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">Starting from</span></span></span></span></span></span></p>\n\n<p style=\"text-align:right\"><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:15.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">₹599</span></span></span></strong><s><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#919191\">₹1199</span></span></span></s></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Telephonic Consultation</span></span></span></strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:9.0pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">50% off</span></span></span></span></span></span></span></p>\n\n<p style=\"text-align:right\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">Starting from</span></span></span></span></span></span></p>\n\n<p style=\"text-align:right\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:15.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">₹4999</span></span></span></strong><s><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#919191\">₹9999</span></span></span></s></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Site Visit with Report</span></span></span></strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:9.0pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">50% off</span></span></span></span></span></span></span></p>\n\n<p style=\"text-align:right\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">Starting from</span></span></span></span></span></span></p>\n\n<p style=\"text-align:right\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:15.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">₹14999</span></span></span></strong><s><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#919191\">₹29999</span></span></span></s></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Trial Pack</span></span></span></strong></span></span></span></p>\n\n<ul>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">15 Min Call</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">Ask upto 3 Questions</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">Scheduled call anytime</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">No report included</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">No follow up call</span></span></span></span></span></span></li>\n</ul>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Details Required</span></span></span></strong></span></span></span></p>\n\n<ul>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">Property Type Villa/Apartment/Plot</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">Property Entrance facing</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:#ffefd1\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#666666\">Property size/Bhk&#39;s</span></span></span></span></span></span></li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">What is Vastu Shastra?</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Vastu Shastra is an ancient Indian architectural science that discloses layout, design, measurements, ground preparation and spatial geometry of buildings to balance them with the natural environment and cosmic energies. The word Vastu refers to habitat or dwelling, while Shastra denotes science. It is and ancient science that proposes hypotheses based on directions, architecture, astronomy, and even astrology. The science of direction is combined with all five essential elements of life to ensure harmony and progress every day.</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">History of Vastu Shastra</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#3a2c39\">Vastu Shastra dates back to the times when the sages lived &ndash; probably 6,000 and 3,000 BC.&nbsp; </span></span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">As per mythology, the origin of Vastu Shastra is prescribed in the holy texts like Atharvaveda, </span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#3a2c39\">Rigveda, Ramayana, Mahabharata, Mayamatam, Manasa saar, etc</span></span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\"> &nbsp;which contains references to spatial arrangements and architectural principles. According to modern historians Ferguson, Havell and Cunningham, this science developed during&nbsp; the period&nbsp; of 600 BC and 3000 BC. Gradually, Vastu Shastra evolved as an intricate science that managed the design and construction of buildings in a way that harmonized with natural forces and divine energies. In these texts, one finds detailed guidelines, rules, and rituals related to Vastu Shastra, offering insights into the importance of different elements, directions, and spatial arrangements.&nbsp;</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">Origin of Vastu Shastra</span></span></span></strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">The Vastu&nbsp;</span></span></span></span><a href=\"https://dictionary.cambridge.org/dictionary/english/scripture\" style=\"color:blue; text-decoration:underline\" target=\"_blank\"><span style=\"font-size:12.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">scriptures</span></span></span></span></a><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">&nbsp;date from a time about 5,000 years ago and carry the earliest known descriptions of these universal laws of nature. Scarcely any other architectural tradition lasted 5,000 years while staying unaltered and still being applied today </span></span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">As per Hindu mythology, Lord Brahma is given the credit for the origin of Vastu Shastra. It is said that this knowledge of Vastu Shastra was developed and refined from time to time and passed by scholars and sages for generations. Today, Vastu Shastra is admired and practiced as an ancient science that helps align energies and facilitate balance, prosperity, and well-being. As per ancient Indian beliefs, the universe consists of five elements, namely earth, water, fire, air, and space, harmonizing which is possible by Vastu Shastra.</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">Five Elements of Vastu Shastra</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">To ensure a harmonious space for living, Vastu Shastra considers balancing&nbsp;</span></span></span><a href=\"https://www.mpanchang.com/articles/vastu/five-elements-of-vastu-shastra/\" style=\"color:blue; text-decoration:underline\" target=\"_blank\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#0070c0\">the five elements of vastu</span></span></span></strong></a><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">&nbsp;or Panchabhutas, namely the earth, water, fire, air, and space. These elements influence the energy flow within an environment, thus developing spaces that promote harmony, prosperity, and energy.</span></span></span></span></span></span></p>\n\n<p>&nbsp;</p>\n\n<table cellspacing=\"0\" class=\"Table\" style=\"background:#fef6f5; border-collapse:collapse; width:743px\">\n	<tbody>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Element</span></span></span></strong></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Direction Associated</span></span></span></strong></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Representation</span></span></span></strong></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Details</span></span></span></strong></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Earth (Prithvi)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Southwest</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Stability, support, fertility</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Governs the foundation and structure of buildings, providing grounding and security.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Water (Jal)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Northeast</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Purity, fluidity, abundance</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Presence in ponds, wells, or water features fosters prosperity and vitality.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Fire (Agni)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Southeast</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Energy, transformation, illumination</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Fire elements like fireplaces or stoves promote vitality, warmth, and growth.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Air (Vayu)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Northwest</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Movement, circulation, freshness</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Proper ventilation and airflow maintain a healthy environment, removing stagnant energy.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Space (Akasha)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Center (Brahmasthan)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Openness, expansion, spirituality</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Central space should be unobstructed to facilitate energy flow and spiritual well-being.</span></span></span></span></span></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">By harmonizing the five elements of Vastu Shastra, one can create living spaces that echo with the natural forces of the universe, facilitating balance and well-being for its natives.</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">Directions in Vastu Shastra</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">While constructing any building adhering to Vastu Shastra principles, the directions hold a vital role as they are the key indicators that help determine the placement of the various elements within them. Each of the directions of Vaastu Shastra is associated with specific energies and attributes. Let us understand them through the given table -&nbsp;</span></span></span></span></span></span></p>\n\n<p>&nbsp;</p>\n\n<table cellspacing=\"0\" class=\"Table\" style=\"background:#fef6f5; border-collapse:collapse; width:743px\">\n	<tbody>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Direction</span></span></span></strong></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Representation</span></span></span></strong></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">North (Uttara)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Prosperity, Wealth, Career growth</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">East (Purva)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Health, Vitality, &amp; Growth</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">South (Dakshina)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Stability, Strength, &amp; Protection</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">West (Paschima)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Creativity, Happiness, &amp; Fulfillment</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Northeast (Ishaan)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Spiritual growth, Wisdom, &amp; Enlightenment</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Southeast (Agneya)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Prosperity, Abundance, &amp; Success</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Southwest (Nairutya)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Stability, Longevity, &amp; Family happiness</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Northwest (Vayavya)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Social connections, Travel, &amp; Opportunities</span></span></span></span></span></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">Importance of Vastu Shastra</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Several reasons sum up to the importance of Vastu Shastra -</span></span></span></span></span></span></p>\n\n<ul>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">When any space is built in a way that aligns divine energies and natural forces, a harmonious environment facilitative to the physical, emotional, and spiritual well-being of individuals gets created.</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Construction in adherence to Vastu principles helps attract abundance and positive energies, further promoting success and financial growth.</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Vastu-compliant buildings are considered more stable and resilient, presenting inhabitants with security and stability.</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">As per Vastu Shastra, optimizing the energy flow and assuring proper ventilation and sunlight contributes to better energy and physical health.</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Vastu-compliant spaces support individuals in their attempts at career, education, personal growth, or other aspects of life by aligning the environment with their objectives and aspirations.</span></span></span></span></span></span></li>\n</ul>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">Benefits of Vastu Shastra</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">The benefits of Vastu Shastra are:-</span></span></span></span></span></span></p>\n\n<ul>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">By aligning and placing the elements properly as per Vastu principles, one can enhance the flow </span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#0070c0\">of positive energy</span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"> and promote overall well-being.</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Vastu-compliant spaces help improve the </span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#0070c0\">relationships </span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">among family members and cultivate unity and cooperation.</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#333333\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Another benefit of Vastu Shastra is that it attracts </span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#0070c0\">financial stability </span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">and prosperity when aligned with auspicious energies.</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#0070c0\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Vastu-compliant buildings furnish </span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">natural light, ventilation</span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">, and </span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">proper space utilization, yielding better health, both physical </span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">and</span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"> mental.</span></span></span></span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#0070c0\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Living in such a space helps reduce </span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">anxiety, stress</span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#00b0f0\">,</span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\"> and </span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">conflicts, fostering emotional balance</span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\"> as well as </span></span></span><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:10.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">peace of mind.</span></span></span></span></span></span></li>\n</ul>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">Different Directions of Vaastu Shastra &amp; Their Effects</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#333333\">Classical proponents of Vastu Shastra suggest different directions for different activities. All these allocations of space is based on the movement of the sun, air, and earth, qualities of that particular direction, rainfall, topography, seasons, and space utilization.</span></span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Now let us learn about the directions, their association, the spaces they are meant for, and other related details.&nbsp;</span></span></span></span></span></span></p>\n\n<p>&nbsp;</p>\n\n<table cellspacing=\"0\" class=\"Table\" style=\"background:#fef6f5; border-collapse:collapse; width:743px\">\n	<tbody>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Direction</span></span></span></strong></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Association</span></span></span></strong></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Favored for Spaces</span></span></span></strong></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Other Details</span></span></span></strong></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">North (Uttar)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Wealth, prosperity, career growth</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Treasury, study, reception area</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Represents Kubera - the deity of wealth. Auspicious for financial endeavors.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">East (Poorva)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Power, Position Health, and Prosperity </span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Puja room, living room, meditation room</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Related to the rising sun. Symbolizes vitality and positivity. Ideal for starting new ventures.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">South (Dakshin)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Stability, strength, security</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Master bedroom, main entrance</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Represents Yama - the deity of death. Provides stability &amp; security to the occupants.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">West (Pashchim)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Creativity, satisfaction, happiness</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Dining room, entertainment room, children&#39;s room</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Associated with the setting sun, denotes completion and relaxation. Encourages creativity and family bonding.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Northeast (Ishaan)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Wisdom, spiritual growth, enlightenment</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Puja room, meditation room, study</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Sacred corner of the house. Represents the intersection of positive energies. Ideal for spiritual &amp; intellectual pursuits.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Southeast (Aagneya)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Prosperity, success, abundance</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Kitchen, office, business area</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Associated with Agni - the deity of fire. Boosts financial growth &amp; prosperity.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Southwest (Nairritya)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">longevity, family happiness, stability</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Master bedroom, family room</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Represents Niruthi - the deity of protection. Supports stability &amp; harmony in family life.</span></span></span></span></span></p>\n			</td>\n		</tr>\n		<tr>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Northwest (Vayavya)</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Social connections, travel, growth</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Guest room, study, children&#39;s play area</span></span></span></span></span></p>\n			</td>\n			<td style=\"background-color:#fef6f5; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; vertical-align:top\">\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Associated with Vayu - the deity of air. Favors social interactions, learning, and personal growth.</span></span></span></span></span></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">How does Vastu Shastra Work?</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">As per the definition of Vastu Shastra, it works on the principle that harmonizes the energies in an environment to build a positive and balanced space. Vastu Shastra regards various factors such as the building layout, placement of rooms, direction of doors/windows, and utilization of the natural elements. Aligning the spaces as per the directions of Vastu Shastra and its elements helps influence the energy flow as well as the physical, emotional, and spiritual well-being of the natives, thus leading to a fulfilling and harmonious lifestyle.&nbsp;</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#17365d\">Vastu Shastra and Astrology</span></span></span></strong></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">While both Vastu Shastra and astrology are ancient Indian sciences dealing with cosmic influences on human life, they are also separate domains with their individual principles and practices.</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">The question of what Vastu Shastra is responds by indicating its focus on the design and layout of buildings, harmonizing with natural forces and cosmic energies. It highlights the orientation of structures, placement of rooms, and utilization of five elements of Vastu Shastra to create a balanced environment.</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Alternatively, astrology is the study of celestial bodies and focuses on the impact of these bodies on individual personalities, circumstances, and destinies. It examines the planetary positions and stars during the birth of an individual to provide insights into their personality, character, behavior, and life events.</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span dir=\"ltr\" lang=\"EN-US\" style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#1e1d39\">Many agree that Vastu Shastra and astrology complement each other in some contexts, though they function on different principles applied in distinct ways. While constructing a harmonious space, some individuals may incorporate both Vastu Shastra and astrological considerations to optimize the energies and influences around them.</span></span></span></span></span></span></p>', '', '', '', 1, '', '2025-02-21 06:08:18', '2025-02-17 05:53:38', '2025-02-21 06:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('testingrakesh1@mailinator.com', '$2y$10$5Bvv3xuB1Y0k/wDfEV6S5udOOF4sphZ53oW8hADcxxmHaBq2.9m2q', '2024-12-28 06:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `r_payment_id` varchar(255) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `json_response` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `r_payment_id`, `order_id`, `package_id`, `method`, `currency`, `email`, `phone`, `amount`, `json_response`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'pay_PipxT9zMl3K69f', NULL, NULL, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 2551.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PipxT9zMl3K69f\",\"entity\":\"payment\",\"amount\":255100,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PipxG1JvS5lMaO\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Gold package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736751509,\"reward\":null,\"authorized_at\":1736751509,\"auto_captured\":false,\"captured_at\":1736751525,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-13 06:58:46', '2025-01-13 06:58:46'),
(2, 1, 'pay_PiqGa6bB9D17Zn', 7, 4, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 2551.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PiqGa6bB9D17Zn\",\"entity\":\"payment\",\"amount\":255100,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PiqGTtAZUgPPXn\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Gold package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736752594,\"reward\":null,\"authorized_at\":1736752594,\"auto_captured\":false,\"captured_at\":1736752611,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-13 07:16:51', '2025-01-13 07:16:51'),
(3, 1, 'pay_PiqM5UpwVaNZuj', 8, 4, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 2551.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PiqM5UpwVaNZuj\",\"entity\":\"payment\",\"amount\":255100,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PiqLz7gIUcghQF\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Gold package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736752907,\"reward\":null,\"authorized_at\":1736752907,\"auto_captured\":false,\"captured_at\":1736752923,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-13 07:22:04', '2025-01-13 07:22:04'),
(4, 1, 'pay_PiqN5g8PzNz4Pc', 10, 5, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 4501.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PiqN5g8PzNz4Pc\",\"entity\":\"payment\",\"amount\":450100,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PiqMxwt8PhVieE\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Platinum package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736752964,\"reward\":null,\"authorized_at\":1736752964,\"auto_captured\":false,\"captured_at\":1736752981,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-13 07:23:02', '2025-01-13 07:23:02'),
(5, 1, 'pay_PiqmDYQ7Q6624u', 12, 4, 'card', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 2603.69, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PiqmDYQ7Q6624u\",\"entity\":\"payment\",\"amount\":260369,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PiqgDoSwiu6RYH\",\"invoice_id\":null,\"international\":false,\"method\":\"card\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Gold package.\",\"card_id\":\"card_PiqmEAyrt42JHy\",\"card\":{},\"bank\":null,\"wallet\":null,\"vpa\":null,\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":5269,\"tax\":804,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736754392,\"reward\":null,\"authorized_at\":1736754397,\"auto_captured\":false,\"captured_at\":1736754411,\"late_authorized\":false}}', 1, '2025-01-13 07:46:52', '2025-01-13 07:46:52'),
(6, 1, 'pay_PiuV1MdCWIyoGQ', 13, 5, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 4500.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PiuV1MdCWIyoGQ\",\"entity\":\"payment\",\"amount\":450000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PiuUseikvJNh3g\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Platinum package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736767501,\"reward\":null,\"authorized_at\":1736767501,\"auto_captured\":false,\"captured_at\":1736767517,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-13 11:25:18', '2025-01-13 11:25:18'),
(7, 1, 'pay_PjJ36LJwn6N8on', 14, 5, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 4500.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PjJ36LJwn6N8on\",\"entity\":\"payment\",\"amount\":450000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PjJ2zdPZk8j1Ul\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Platinum package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736853955,\"reward\":null,\"authorized_at\":1736853955,\"auto_captured\":false,\"captured_at\":1736853971,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-14 11:26:12', '2025-01-14 11:26:12'),
(8, 1, 'pay_PjJ7fSXcjGEqUm', 15, 5, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 4500.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PjJ7fSXcjGEqUm\",\"entity\":\"payment\",\"amount\":450000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PjJ7ZtzHOtnMBK\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Platinum package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736854215,\"reward\":null,\"authorized_at\":1736854215,\"auto_captured\":false,\"captured_at\":1736854231,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-14 11:30:32', '2025-01-14 11:30:32'),
(9, 1, 'pay_PjJCJrtAcexCLQ', 16, 4, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 2550.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PjJCJrtAcexCLQ\",\"entity\":\"payment\",\"amount\":255000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PjJCEBhQYTiVHR\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Gold package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736854479,\"reward\":null,\"authorized_at\":1736854479,\"auto_captured\":false,\"captured_at\":1736854495,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-14 11:34:56', '2025-01-14 11:34:56'),
(10, 1, 'pay_PjgjhpnqF9phLy', 17, 5, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 4500.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PjgjhpnqF9phLy\",\"entity\":\"payment\",\"amount\":450000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_Pjgjadt0ixiNQL\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Platinum package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1736937372,\"reward\":null,\"authorized_at\":1736937373,\"auto_captured\":false,\"captured_at\":1736937389,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-15 10:36:29', '2025-01-15 10:36:29'),
(11, 1, 'pay_Pk7YQpUu48k7Hr', 19, 5, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 4500.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_Pk7YQpUu48k7Hr\",\"entity\":\"payment\",\"amount\":450000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_Pk7YKpneGy6uzF\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the Platinum package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1737031816,\"reward\":null,\"authorized_at\":1737031816,\"auto_captured\":false,\"captured_at\":1737031832,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-01-16 12:50:32', '2025-01-16 12:50:32'),
(12, 1, 'pay_PzqdRIBG2DzV3f', 20, 6, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 750.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PzqdRIBG2DzV3f\",\"entity\":\"payment\",\"amount\":75000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PzqdBxH49AQyjK\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the GOLD package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1740465674,\"reward\":null,\"authorized_at\":1740465675,\"auto_captured\":false,\"captured_at\":1740465681,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-02-25 06:41:22', '2025-02-25 06:41:22'),
(13, 1, 'pay_Pzs9YdSYCvlhIm', 21, 4, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 600.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_Pzs9YdSYCvlhIm\",\"entity\":\"payment\",\"amount\":60000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_Pzs9PcExfjXp8E\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the SILVER package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1740471020,\"reward\":null,\"authorized_at\":1740471021,\"auto_captured\":false,\"captured_at\":1740471046,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-02-25 08:10:46', '2025-02-25 08:10:46'),
(14, 1, 'pay_PzsCGVV4I4AE3g', 22, 4, 'upi', 'INR', 'testingrakesh3@mailinator.com', '+919632587410', 600.00, '{\"\\u0000*\\u0000attributes\":{\"id\":\"pay_PzsCGVV4I4AE3g\",\"entity\":\"payment\",\"amount\":60000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_PzsCABaWZSicN4\",\"invoice_id\":null,\"international\":false,\"method\":\"upi\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":\"Upgrade to the SILVER package.\",\"card_id\":null,\"bank\":null,\"wallet\":null,\"vpa\":\"success@razorpay\",\"email\":\"testingrakesh3@mailinator.com\",\"contact\":\"+919632587410\",\"notes\":{},\"fee\":0,\"tax\":0,\"error_code\":null,\"error_description\":null,\"error_source\":null,\"error_step\":null,\"error_reason\":null,\"acquirer_data\":{},\"created_at\":1740471174,\"reward\":null,\"authorized_at\":1740471174,\"auto_captured\":false,\"captured_at\":1740471194,\"late_authorized\":false,\"upi\":{}}}', 1, '2025-02-25 08:13:15', '2025-02-25 08:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `location` longtext DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `token_amount` int(11) DEFAULT 0,
  `is_negotiable` varchar(150) DEFAULT 'negotiable',
  `availability` varchar(150) DEFAULT 'ready-to-move',
  `ownership` varchar(150) DEFAULT 'free-hold',
  `build_year` int(11) DEFAULT 1,
  `type` varchar(255) DEFAULT 'residential',
  `property_detail` varchar(255) DEFAULT NULL,
  `for_type` varchar(255) DEFAULT 'for-sell',
  `plot_area` varchar(255) DEFAULT NULL,
  `plot_type` varchar(255) DEFAULT NULL,
  `carpet_area` varchar(255) DEFAULT NULL,
  `builtup_area` varchar(255) DEFAULT NULL,
  `floors` text DEFAULT NULL,
  `bathroom` text DEFAULT NULL,
  `bedroom` text DEFAULT NULL,
  `balcony` text DEFAULT NULL,
  `facing` varchar(255) DEFAULT NULL,
  `furnished` varchar(255) DEFAULT NULL,
  `approved_by` varchar(255) DEFAULT NULL,
  `additional` varchar(255) DEFAULT NULL,
  `amenities` longtext DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `is_verified` int(11) DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `is_luxury` int(11) DEFAULT 0,
  `is_premium` int(11) DEFAULT 0,
  `sold_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `slug`, `title`, `description`, `state`, `city`, `zip_code`, `location`, `latitude`, `longitude`, `price`, `token_amount`, `is_negotiable`, `availability`, `ownership`, `build_year`, `type`, `property_detail`, `for_type`, `plot_area`, `plot_type`, `carpet_area`, `builtup_area`, `floors`, `bathroom`, `bedroom`, `balcony`, `facing`, `furnished`, `approved_by`, `additional`, `amenities`, `video_link`, `status`, `is_verified`, `views`, `is_luxury`, `is_premium`, `sold_date`, `created_at`, `updated_at`) VALUES
(2, 1, 'gorgeous-apartment-building', 'Gorgeous Apartment Building', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Punjab', 'Dad', 142022, 'Basant City Chowk, Green Avenue Colony, Dad, Punjab 142022', '30.86592289999999', '75.8019637', 4999989, 122, 'negotiable', 'ready-to-move', 'free-hold', 2, 'residential', 'villa', 'for-sell', '900', NULL, '1600', '1600', '3', '2', '2', '2', 'North-East', 'un-furnished', 'greater-ludhiana-area-development-authority', 'Servent Room,Study Room,Gym Room,Store Room', 'Fingerprint access,Extra pillows & blankets,TV with standard cable,Air Conditioner,Dishwasher,Microwave,Piped Gas,Ro Water System,Lift,Swimming Pool,Internet/Wifi Community,Laundry Service,Car Parking Facility,Visitors Parking', 'https://www.youtube.com/watch?v=LXb3EKWsInQ', 1, NULL, 53, 0, NULL, NULL, '2024-12-23 11:27:26', '2025-02-21 06:27:26'),
(3, 1, 'mountain-mist-retreat-aspen', 'Mountain Mist Retreat, Aspen', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Karnataka', 'Mysuru', 570001, 'Railway Station, Medar Block, Yadavagiri, Mysuru, Karnataka 570001, India', '12.3161982', '76.6456575', 10000000, 122, 'negotiable', 'under-construction', 'lease-hold', 2, 'commercial', 'villa', 'for-sell', '900', NULL, '1600', '1600', '3', '2', '2', '2', 'North-East', 'un-furnished', 'greater-ludhiana-area-development-authority', 'Puja Room,Servent Room', 'Smoke alarm,Self check-in with lockbox,Carbon monoxide alarm,Security cameras,Fingerprint access,Lift,Swimming Pool', 'https://www.youtube.com/watch?v=r5-WbBJBkSo', 1, NULL, 0, 0, NULL, NULL, '2024-12-24 06:03:44', '2025-01-03 06:20:34'),
(4, 1, 'lakeview-haven-lake-tahoe', 'Lakeview Haven, Lake Tahoe', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Punjab', 'Sahnewal', 141120, 'VX24+J22, Sahnewal, Punjab 141120, India', '30.8505923', '75.9563355', 100000000, 122, 'negotiable', 'under-construction', 'free-hold', 2, 'commercial', 'villa', 'for-sell', '900', NULL, '1600', '1600', '3', '2', '2', '2', 'North-East', 'un-furnished', 'greater-ludhiana-area-development-authority', 'Puja Room', 'Carbon monoxide alarm', NULL, 1, NULL, 0, 0, NULL, NULL, '2024-12-24 06:03:59', '2025-02-20 09:13:31'),
(5, 1, 'coastal-serenity-cottage', 'Coastal Serenity Cottage', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Punjab', 'Ludhiana', 141009, 'Moti Nagar, Ludhiana, Punjab 141009, India', '30.8963935', '75.88970290000002', 10250000, 122, 'negotiable', 'under-construction', 'free-hold', 2, 'commercial', 'villa', 'for-sell', '900', NULL, '1600', '1600', '3', '2', '2', '2', 'North-East', 'un-furnished', 'greater-ludhiana-area-development-authority', 'Puja Room', 'Carbon monoxide alarm', NULL, 2, NULL, 0, 0, NULL, NULL, '2024-12-24 06:04:01', '2025-01-02 05:37:53'),
(6, 1, 'sunset-heights-estate', 'Sunset Heights Estate', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Punjab', 'Ludhiana', 141009, 'Sherpur Chowk, Dholewal Chowk, Ludhiana, Punjab 141009, India', '30.8851294', '75.88707339999999', 100000, 122, 'negotiable', 'under-construction', 'free-hold', 2, 'commercial', 'villa', 'for-sell', '900', NULL, '1600', '1600', '3', '2', '2', '2', 'North-East', 'semi-furnished', 'punjab-urban-development-authority', 'Puja Room', 'Carbon monoxide alarm', NULL, 1, NULL, 12, 0, NULL, NULL, '2024-12-24 06:04:02', '2025-02-20 11:12:43'),
(7, 1, 'thirthankar-abode-residency', 'Thirthankar Abode Residency', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Punjab', 'Ludhiana', 141014, 'Giaspura Chowk, Industrial Area C, Dhandari Kalan, Ludhiana, Punjab 141014', '30.8725782', '75.8979255', 100000, 122, 'negotiable', 'under-construction', 'free-hold', 2, 'commercial', 'villa', 'for-sell', '900', 'SqFt', '1500', '1600', '3', '2', '2', '2', 'North-East', 'semi-furnished', 'punjab-urban-development-authority', 'Puja Room', 'Carbon monoxide alarm', NULL, 1, NULL, 9, 0, NULL, NULL, '2024-12-24 06:04:03', '2025-02-20 11:24:26'),
(8, 1, 'amg-palm-garden', 'AMG Palm Garden', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Punjab', 'Ludhiana', 141003, '362, Urban Estate Phase 1 Rd., Phase 1, Duggri, Urban Estate Dugri, Ludhiana, Punjab 141003, India', '30.87131520000001', '75.8411866', 100000, 122, 'negotiable', 'under-construction', 'free-hold', 2, 'commercial', 'villa', 'for-sell', '900', NULL, '1600', '1600', '3', '2', '2', '2', 'North-East', 'semi-furnished', 'punjab-urban-development-authority', 'Puja Room', 'Carbon monoxide alarm', NULL, 3, 1, 33, 0, NULL, NULL, '2024-12-24 06:06:42', '2025-02-20 10:25:44'),
(12, 1, 'garden-city', 'Garden City', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Maharashtra', 'Mumbai', 400003, 'Shop No:86,Near Central Restaurant,Opp: Delhi Darbar, Mohammed Ali Rd, Near Crawford Market, Koliwada, Lohar Chawl, Kalbadevi, Mumbai, Maharashtra 400003, India', '18.9495808', '72.83491939999999', 1000000, 1000, 'negotiable', 'ready-to-move', 'free-hold', 2, 'commercial', 'house', 'for-sell', '900', NULL, '1600', '1600', '4', '4', '2', '4', 'North-East', 'furnished', 'city-municipal-corporation', 'Puja Room', 'Smoke alarm', NULL, 1, NULL, 42, 0, NULL, NULL, '2024-12-24 06:32:46', '2025-02-20 08:08:38'),
(13, 6, '4bhk-residential-house-for-sell-in-ludhiana-punjab', 'Elegant studio flat', '02 Ingraham St, Brooklyn, NY 11237', 'Punjab', 'Ludhiana', 141003, 'WV24+9WJ, Vishwakarma Chowk, Sant Pura, Miller Ganj, Ludhiana, Punjab 141003, India', '30.900965', '75.8572758', 5000000, 1000000, 'fixed-price', 'plot-land', 'free-hold', 2, 'residential', 'house', 'for-sell', '900', 'SqFt', '1600', '1600', '4', '5', '4', '4', 'North-West', 'furnished', 'city-municipal-corporation', 'Puja Room,Study Room,Store Room,Servent Room,Gym Room', 'Lift,Internet/Wifi Community,Swimming Pool', 'https://www.youtube.com/watch?v=LXb3EKWsInQ', 3, NULL, 17, 0, NULL, NULL, '2024-12-28 10:48:17', '2025-02-24 08:01:07'),
(14, 1, 'rent-in-budget', 'Rent in budget', 'sdfds', 'Punjab', 'Ludhiana', 141003, 'WV24+9WJ, Vishwakarma Chowk, Sant Pura, Miller Ganj, Ludhiana, Punjab 141003, India', '30.900965', '75.8572758', 15000, 1000, 'negotiable', 'ready-to-move', 'free-hold', 1, 'commercial', 'office', 'for-rent', '900', NULL, '1600', '1600', '3', '2', '3', '2', 'North-East', 'furnished', 'city-municipal-corporation', 'Puja Room,Servent Room', 'Fingerprint access,Lift', NULL, 1, NULL, 45, 0, NULL, NULL, '2024-12-31 05:10:38', '2025-02-20 08:06:00'),
(15, 1, 'sdfds', 'sdfds', 'fsdfsdf', 'Maharashtra', 'Mumbai', 410401, '4,2ND FLOOR, SAVANI HOUSE, KURVANDE LONAVALA, Lower Parel, Friends Colony, Hallow Pul, Kurla, Mumbai, Maharashtra 410401, India', '19.0759837', '72.8776559', 10000, NULL, 'negotiable', 'under-construction', 'free-hold', 2, 'apartment', 'office', 'for-rent', '900', NULL, '1600', '1600', '4', '3', '1', '2', 'North', 'furnished', 'city-municipal-corporation', 'Study Room,Gym Room', 'Hangers,Extra pillows & blankets', NULL, 3, NULL, 32, 0, NULL, NULL, '2024-12-31 05:21:46', '2025-02-21 05:33:53'),
(16, 1, 'sdfsd', 'sdfsd', 'fsdfsdf', 'Punjab', 'Ludhiana', 141001, 'Near Ghanta Ghar, Jagraon bridge entry gate, railway station, Kamla Nehru Market, Old Ludhiana, Ludhiana, Punjab 141001, India', '30.9112579', '75.8505134', 10000, 9000, 'negotiable', 'under-construction', 'free-hold', 2, 'commercial', 'office', 'for-rent', '900', NULL, '1600', '1600', '1', '1', '2', '1', 'West', 'furnished', 'rwa-cooperative-housing-society', 'Puja Room,Servent Room', 'Self check-in with lockbox,Carbon monoxide alarm', NULL, 3, NULL, 6, 0, NULL, '2025-01-08', '2024-12-31 05:45:44', '2025-02-14 05:37:12'),
(17, NULL, 'gorgeous-apartment-building11', 'Gorgeous Apartment Building11', '3 Units in North Hollywood with upside potential through construction of an ADU (buyer to verify). Unit mix consists of (3) 3+1 bath units. The building is a total of 2, 660 square feet and situated on a 6, 001 square foot lot. Easy access to the 101, 170, and 134 freeways. The building is separately metered for gas and electricity.', 'Punjab', 'Ludhiana', 141009, 'Moti Nagar Rd, Block A, Moti Nagar, Ludhiana, Punjab 141009, India', '30.8982591', '75.887017', 4999989, 122, 'negotiable', 'ready-to-move', 'free-hold', 2, 'residential', 'villa', 'for-sell', '900', 'Sqft', '1600', '1600', '3', '2', '2', '2', 'North-East', 'un-furnished', 'greater-ludhiana-area-development-authority', 'Study Room,Store Room,Servent Room,Gym Room', 'Air Conditioner,Lift,Piped Gas,Ro Water System,Internet/Wifi Community,Extra pillows & blankets,Fingerprint access,TV with standard cable,Laundry Service,Microwave,Dishwasher,Swimming Pool,Car Parking Facility,Visitors Parking', 'https://www.youtube.com/watch?v=LXb3EKWsInQ', 0, 0, 18, 0, 0, NULL, '2025-01-02 12:39:04', '2025-02-21 05:33:40'),
(18, NULL, 'sdfsd-1', 'sdfsd', 'sdfsdf', 'Delhi', 'New Delhi', 110010, 'J467+9X8, Kirby Place, Delhi Cantonment, New Delhi, Delhi 110010, India', '28.6109026', '77.1149472', 10000000, 10000, 'negotiable', 'under-construction', 'free-hold', 1, 'commercial', 'house', 'for-sell', '900', 'SqFt', '1600', '1600', '5+', '5', '5', '5', 'West', 'furnished', 'punjab-urban-development-authority', 'Puja Room,Study Room,Store Room,Servent Room,Gym Room,Theater Room', 'Air Conditioner,Security,Lift,Piped Gas,Power Backup,Ro Water System,Internet/Wifi Community,Extra pillows & blankets,Fingerprint access,TV with standard cable,Fire Alarm,Laundry Service,Microwave,Dishwasher,Rain Water Harvesting,Swimming Pool,Car Parking Facility,Visitors Parking', NULL, 0, 0, 26, 0, 0, NULL, '2025-01-03 06:07:06', '2025-02-21 05:28:09'),
(19, NULL, 'sdasd', 'sdasd', 'asdas', 'Maharashtra', 'Ichalkaranji', 416115, 'PC4V+934, Indira Housing Society, Kabnur, Ichalkaranji, Maharashtra 416115, India', '16.7058923', '74.442713', 22000000, 1000, 'negotiable', 'under-construction', 'free-hold', 1, 'commercial', 'villa', 'for-sell', '900', 'Marla', '1600', '1600', '2', '2', '2', '2', 'West', 'un-furnished', 'greater-ludhiana-area-development-authority', '', '', NULL, 3, 0, 14, 0, 0, NULL, '2025-01-03 06:09:39', '2025-02-21 06:27:39'),
(20, 1, 'sdfsd-2', 'sdfsd', 'dsfsd', 'Tamil Nadu', 'Chennai', 600059, '108, Bharathamadha St, Vinayakarpuram, East Tambaram, Tambaram, Chennai, Tamil Nadu 600059, India', '12.93063', '80.1275584', 2000000000, 2000, 'negotiable', 'under-construction', 'free-hold', 1, 'apartment', 'house', 'for-rent', '900', 'SqFt', '1600', '1600', '5+', '5+', '2', '5+', 'West', 'furnished', 'greater-ludhiana-area-development-authority', '', '', NULL, 3, 0, 26, 0, 0, NULL, '2025-01-03 06:12:40', '2025-02-21 06:24:57'),
(21, 1, 'south-city-star', 'South city Star', 'sdfsd', 'Karnataka', 'Bengaluru', 560023, 'Gopalapura, Binnipete, Bengaluru, Karnataka 560023, India', '12.9816875', '77.5638125', 10000000, 1000000, 'negotiable', 'under-construction', 'lease-hold', 2, 'apartment', 'villa', 'for-sell', '500', 'SqYd', '1600', '1600', '2', '2', '2', '1', 'North', 'un-furnished', 'greater-ludhiana-area-development-authority', 'Puja Room,Store Room,Servent Room,Gym Room,Theater Room', 'Extra pillows & blankets,Microwave,Dishwasher', NULL, 1, 0, 59, 0, 0, NULL, '2024-12-18 07:07:00', '2025-02-24 06:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `property_enquiries`
--

CREATE TABLE `property_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `interested_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_enquiries`
--

INSERT INTO `property_enquiries` (`id`, `user_id`, `property_id`, `interested_user_id`, `name`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 15, NULL, 'Rakesh gupta', 'testingemail@gmail.com', '09874563211', 'this is for the testing mail', 1, '2024-12-31 08:42:44', '2024-12-31 08:42:44'),
(2, NULL, 17, NULL, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', 'sdfdAdmin', 1, '2025-01-09 05:09:00', '2025-01-09 05:09:00'),
(3, 1, 12, NULL, 'Rakesh gupta', 'ludhianaaitechnologyff@gmail.com', '09874563250', 'dfgdfgf', 1, '2025-01-14 06:48:48', '2025-01-14 06:48:48'),
(4, 1, 21, NULL, 'Rakesh gupta33', 'ludhianaaitechnology33@gmail.com', '09874563203', 'dfsdfsdf', 1, '2025-01-14 06:49:51', '2025-01-14 06:49:51'),
(5, 1, 21, NULL, 'Rakesh gupta44', 'ludhianaaitechnology44@gmail.com', '09874563254', 'fgfghfg', 1, '2025-01-14 06:50:03', '2025-01-14 06:50:03'),
(6, 1, 15, NULL, 'Rakesh gupta', 'testingemail@gmail.com', '09874563211', 'this is for the testing mail', 1, '2024-12-31 03:12:44', '2024-12-31 03:12:44'),
(7, 1, 12, NULL, 'Rakesh gupta', 'ludhianaaitechnologyff@gmail.com', '09874563250', 'dfgdfgf', 1, '2025-01-14 01:18:48', '2025-01-14 01:18:48'),
(8, 1, 21, NULL, 'Rakesh gupta33', 'ludhianaaitechnology33@gmail.com', '09874563203', 'dfsdfsdf', 1, '2025-01-14 01:19:51', '2025-01-14 01:19:51'),
(9, 1, 21, NULL, 'Rakesh gupta44', 'ludhianaaitechnology44@gmail.com', '09874563254', 'fgfghfg', 1, '2025-01-14 01:20:03', '2025-01-14 01:20:03'),
(10, 1, 15, NULL, 'Rakesh gupta', 'testingemail@gmail.com', '09874563211', 'this is for the testing mail', 1, '2024-12-31 03:12:44', '2024-12-31 03:12:44'),
(11, 1, 12, NULL, 'Rakesh gupta', 'ludhianaaitechnologyff@gmail.com', '09874563250', 'dfgdfgf', 1, '2025-01-14 01:18:48', '2025-01-14 01:18:48'),
(12, 1, 21, NULL, 'Rakesh gupta33', 'ludhianaaitechnology33@gmail.com', '09874563203', 'dfsdfsdf', 1, '2025-01-14 01:19:51', '2025-01-14 01:19:51'),
(13, 1, 21, NULL, 'Rakesh gupta44', 'ludhianaaitechnology44@gmail.com', '09874563254', 'fgfghfg', 1, '2025-01-14 01:20:03', '2025-01-14 01:20:03'),
(14, 1, 15, NULL, 'Rakesh gupta', 'testingemail@gmail.com', '09874563211', 'this is for the testing mail', 1, '2024-12-31 03:12:44', '2024-12-31 03:12:44'),
(15, 1, 12, NULL, 'Rakesh gupta', 'ludhianaaitechnologyff@gmail.com', '09874563250', 'dfgdfgf', 1, '2025-01-14 01:18:48', '2025-01-14 01:18:48'),
(16, 1, 21, NULL, 'Rakesh gupta33', 'ludhianaaitechnology33@gmail.com', '09874563203', 'dfsdfsdf', 1, '2025-01-14 01:19:51', '2025-01-14 01:19:51'),
(17, 1, 21, NULL, 'Rakesh gupta44', 'ludhianaaitechnology44@gmail.com', '09874563254', 'fgfghfg', 1, '2025-01-14 01:20:03', '2025-01-14 01:20:03'),
(18, 1, 15, NULL, 'Rakesh gupta', 'testingemail@gmail.com', '09874563211', 'this is for the testing mail', 1, '2024-12-31 03:12:44', '2024-12-31 03:12:44'),
(19, 1, 12, NULL, 'Rakesh gupta', 'ludhianaaitechnologyff@gmail.com', '09874563250', 'dfgdfgf', 1, '2025-01-14 01:18:48', '2025-01-14 01:18:48'),
(20, 1, 21, NULL, 'Rakesh gupta33', 'ludhianaaitechnology33@gmail.com', '09874563203', 'dfsdfsdf', 1, '2025-01-14 01:19:51', '2025-01-14 01:19:51'),
(21, 1, 21, NULL, 'Rakesh gupta44', 'ludhianaaitechnology44@gmail.com', '09874563254', 'fgfghfg', 1, '2025-01-14 01:20:03', '2025-01-14 01:20:03'),
(22, 1, 15, NULL, 'Rakesh gupta', 'testingemail@gmail.com', '09874563211', 'this is for the testing mail', 1, '2024-12-31 03:12:44', '2024-12-31 03:12:44'),
(23, 1, 12, NULL, 'Rakesh gupta', 'ludhianaaitechnologyff@gmail.com', '09874563250', 'dfgdfgf', 1, '2025-01-14 01:18:48', '2025-01-14 01:18:48'),
(24, 1, 21, NULL, 'Rakesh gupta33', 'ludhianaaitechnology33@gmail.com', '09874563203', 'dfsdfsdf', 1, '2025-01-14 01:19:51', '2025-01-14 01:19:51'),
(25, 1, 21, NULL, 'Rakesh gupta44', 'ludhianaaitechnology44@gmail.com', '09874563254', 'fgfghfg', 1, '2025-01-14 01:20:03', '2025-01-14 01:20:03'),
(26, 1, 15, NULL, 'Rakesh gupta', 'testingemail@gmail.com', '09874563211', 'this is for the testing mail', 1, '2024-12-31 03:12:44', '2024-12-31 03:12:44'),
(27, 1, 12, NULL, 'Rakesh gupta', 'ludhianaaitechnologyff@gmail.com', '09874563250', 'dfgdfgf', 1, '2025-01-14 01:18:48', '2025-01-14 01:18:48'),
(28, 1, 21, NULL, 'Rakesh gupta33', 'ludhianaaitechnology33@gmail.com', '09874563203', 'dfsdfsdf', 1, '2025-01-14 01:19:51', '2025-01-14 01:19:51'),
(29, 1, 21, NULL, 'Rakesh gupta44', 'ludhianaaitechnology44@gmail.com', '09874563254', 'fgfghfg', 1, '2025-01-14 01:20:03', '2025-01-14 01:20:03'),
(30, 1, 15, NULL, 'Rakesh gupta', 'testingemail@gmail.com', '09874563211', 'this is for the testing mail', 1, '2024-12-31 03:12:44', '2024-12-31 03:12:44'),
(31, 1, 12, NULL, 'Rakesh gupta', 'ludhianaaitechnologyff@gmail.com', '09874563250', 'dfgdfgf', 1, '2025-01-14 01:18:48', '2025-01-14 01:18:48'),
(32, 1, 21, NULL, 'Rakesh gupta33', 'ludhianaaitechnology33@gmail.com', '09874563203', 'dfsdfsdf', 1, '2025-01-14 01:19:51', '2025-01-14 01:19:51'),
(33, 1, 21, NULL, 'Rakesh gupta44', 'ludhianaaitechnology44@gmail.com', '09874563254', 'fgfghfg', 1, '2025-01-14 01:20:03', '2025-01-14 01:20:03'),
(34, 1, 21, NULL, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '09874563250', NULL, 1, '2025-01-28 13:28:59', '2025-01-28 13:28:59'),
(35, 1, 14, NULL, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '9874563250', NULL, 1, '2025-01-29 06:05:56', '2025-01-29 06:05:56'),
(36, 1, 14, NULL, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '9874563250', NULL, 1, '2025-01-29 06:06:33', '2025-01-29 06:06:33'),
(37, 1, 15, NULL, 'Rake Gupta', 'sdfsdfsd@gmail.com', '9632589630', NULL, 1, '2025-02-12 07:33:58', '2025-02-12 07:33:58'),
(38, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-21 12:47:47', '2025-02-21 12:47:47'),
(39, 1, 14, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-21 13:00:55', '2025-02-21 13:00:55'),
(40, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-24 05:22:02', '2025-02-24 05:22:02'),
(41, 1, 20, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-24 07:32:04', '2025-02-24 07:32:04'),
(42, 1, 20, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-24 07:32:10', '2025-02-24 07:32:10'),
(43, 1, 20, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-24 07:34:16', '2025-02-24 07:34:16'),
(44, 1, 20, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-24 07:41:44', '2025-02-24 07:41:44'),
(45, 1, 20, 1, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '9780520529', NULL, 1, '2025-02-25 04:54:45', '2025-02-25 04:54:45'),
(46, NULL, 19, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 04:55:01', '2025-02-25 04:55:01'),
(47, 1, 15, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 04:56:01', '2025-02-25 04:56:01'),
(48, 1, 21, 1, 'Rakesh gupta', 'creativeroominc@gmail.com', '9780520529', NULL, 1, '2025-02-25 06:53:36', '2025-02-25 06:53:36'),
(49, 1, 20, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 06:53:49', '2025-02-25 06:53:49'),
(50, NULL, 19, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 06:53:52', '2025-02-25 06:53:52'),
(51, 1, 21, 26, 'Rakesh gupta', 'ludhianaaitechnology11111@gmail.com', '7009790608', NULL, 1, '2025-02-25 07:33:12', '2025-02-25 07:33:12'),
(52, 1, 21, 30, 'Adesh', 'contactcreativeroom111@gmail.com', '7009790608', NULL, 1, '2025-02-25 08:06:38', '2025-02-25 08:06:38'),
(53, 1, 21, 1, 'Rakesh gupta', 'ludhianaaitechnology@gmail.com', '9780520529', NULL, 1, '2025-02-25 08:08:31', '2025-02-25 08:08:31'),
(54, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 08:57:35', '2025-02-25 08:57:35'),
(55, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 08:58:55', '2025-02-25 08:58:55'),
(56, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 10:03:55', '2025-02-25 10:03:55'),
(57, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 10:04:17', '2025-02-25 10:04:17'),
(58, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 10:12:04', '2025-02-25 10:12:04'),
(59, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 10:12:21', '2025-02-25 10:12:21'),
(60, 1, 21, 1, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '9780520529', NULL, 1, '2025-02-25 10:13:32', '2025-02-25 10:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `property_histories`
--

CREATE TABLE `property_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `current_status` varchar(255) DEFAULT NULL COMMENT '0:Inactive, 1:Approved, 2:Pending, 3:Sold',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_values` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_histories`
--

INSERT INTO `property_histories` (`id`, `user_id`, `admin_id`, `property_id`, `current_status`, `meta_key`, `meta_values`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 21, '1', 'admin', 'Updated to 1 By Admin', 1, '2025-01-08 11:27:07', '2025-01-08 11:27:07'),
(2, 1, 1, 21, '0', 'admin', 'Updated to Inactive By Admin', 1, '2025-01-08 11:36:24', '2025-01-08 11:36:24'),
(3, 1, 2, 21, '1', 'admin', 'Updated to Approved By Rakesh gupta', 1, '2025-01-08 11:37:29', '2025-01-08 11:37:29'),
(4, NULL, 2, 19, '0', 'admin', 'Updated to Inactive By Rakesh gupta', 1, '2025-01-08 11:45:58', '2025-01-08 11:45:58'),
(5, 1, 2, 21, '3', 'admin', 'Updated property to Sold by Rakesh gupta', 1, '2025-01-08 11:48:29', '2025-01-08 11:48:29'),
(6, 1, 2, 12, '1', 'admin', 'Updated to Approved By Rakesh gupta', 1, '2025-01-08 11:49:27', '2025-01-08 11:49:27'),
(7, 1, 2, 12, '0', 'admin', 'Updated to Inactive By Rakesh gupta', 1, '2025-01-08 11:49:41', '2025-01-08 11:49:41'),
(8, 6, 2, 13, '0', 'admin', 'Updated to Inactive By Rakesh gupta', 1, '2025-01-08 11:53:05', '2025-01-08 11:53:05'),
(9, 1, NULL, 20, '3', 'user', 'Updated to sold', 1, '2025-01-08 12:03:31', '2025-01-08 12:03:31'),
(10, 1, NULL, 16, '3', 'user', 'Updated to sold', 1, '2025-01-08 12:07:10', '2025-01-08 12:07:10'),
(11, 1, 1, 21, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-08 12:10:45', '2025-01-08 12:10:45'),
(12, 1, NULL, 21, '2', 'user', 'Updated property', 1, '2025-01-14 12:07:01', '2025-01-14 12:07:01'),
(13, NULL, 1, 17, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-16 06:58:26', '2025-01-16 06:58:26'),
(14, NULL, 1, 17, '0', 'admin', 'Updated to Inactive By Admin', 1, '2025-01-16 06:58:52', '2025-01-16 06:58:52'),
(15, 1, NULL, 21, '2', 'user', 'Updated property', 1, '2025-01-16 12:47:32', '2025-01-16 12:47:32'),
(16, 1, 1, 21, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-16 12:48:27', '2025-01-16 12:48:27'),
(17, 1, 1, 21, '1', 'admin', 'Updated property to Approved by Admin', 1, '2025-01-16 12:48:38', '2025-01-16 12:48:38'),
(18, NULL, 1, 19, '0', 'admin', 'Updated property to Inactive by Admin', 1, '2025-01-17 06:50:15', '2025-01-17 06:50:15'),
(19, 1, NULL, 7, '2', 'user', 'Updated property', 1, '2025-01-17 06:51:21', '2025-01-17 06:51:21'),
(20, 6, 1, 13, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-17 06:51:42', '2025-01-17 06:51:42'),
(21, 1, 1, 12, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-17 06:51:44', '2025-01-17 06:51:44'),
(22, 1, 1, 8, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-17 06:51:45', '2025-01-17 06:51:45'),
(23, NULL, 1, 19, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-29 08:47:50', '2025-01-29 08:47:50'),
(24, NULL, 1, 18, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-01-29 08:52:00', '2025-01-29 08:52:00'),
(25, NULL, 1, 18, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-29 08:52:11', '2025-01-29 08:52:11'),
(26, NULL, 1, 19, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-29 08:52:13', '2025-01-29 08:52:13'),
(27, NULL, 1, 19, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-01-29 08:52:15', '2025-01-29 08:52:15'),
(28, NULL, 1, 19, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-01-29 08:52:17', '2025-01-29 08:52:17'),
(29, 6, 1, 13, '1', 'admin', 'Updated property to Approved by Admin', 1, '2025-01-29 11:09:23', '2025-01-29 11:09:23'),
(30, 6, 1, 13, '1', 'admin', 'Updated property to Approved by Admin', 1, '2025-01-29 11:10:05', '2025-01-29 11:10:05'),
(31, NULL, 1, 18, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 07:37:29', '2025-02-20 07:37:29'),
(32, NULL, 1, 18, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 07:38:30', '2025-02-20 07:38:30'),
(33, 1, 1, 15, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 07:58:56', '2025-02-20 07:58:56'),
(34, 1, 1, 20, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 07:59:08', '2025-02-20 07:59:08'),
(35, 1, 1, 20, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 07:59:17', '2025-02-20 07:59:17'),
(36, 1, 1, 8, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 07:59:40', '2025-02-20 07:59:40'),
(37, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 09:07:36', '2025-02-20 09:07:36'),
(38, 1, 1, 7, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 09:08:30', '2025-02-20 09:08:30'),
(39, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 09:08:52', '2025-02-20 09:08:52'),
(40, 1, 1, 7, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 09:09:02', '2025-02-20 09:09:02'),
(41, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 09:09:05', '2025-02-20 09:09:05'),
(42, 1, 1, 7, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 09:09:07', '2025-02-20 09:09:07'),
(43, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 09:09:08', '2025-02-20 09:09:08'),
(44, 1, 1, 7, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 09:09:41', '2025-02-20 09:09:41'),
(45, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 09:09:42', '2025-02-20 09:09:42'),
(46, 1, 1, 7, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 09:10:38', '2025-02-20 09:10:38'),
(47, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 09:12:24', '2025-02-20 09:12:24'),
(48, 1, 1, 2, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 09:13:01', '2025-02-20 09:13:01'),
(49, 1, 1, 4, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 09:13:31', '2025-02-20 09:13:31'),
(50, NULL, 1, 19, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 10:02:57', '2025-02-20 10:02:57'),
(51, NULL, 1, 19, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 10:03:01', '2025-02-20 10:03:01'),
(52, NULL, 1, 19, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 10:03:06', '2025-02-20 10:03:06'),
(53, 1, 1, 20, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 10:03:16', '2025-02-20 10:03:16'),
(54, 6, 1, 13, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 10:25:19', '2025-02-20 10:25:19'),
(55, 1, 1, 6, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 10:25:33', '2025-02-20 10:25:33'),
(56, 1, 1, 8, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 10:25:45', '2025-02-20 10:25:45'),
(57, 1, 1, 21, '3', 'admin', 'Updated property to Sold by Admin', 1, '2025-02-20 10:37:26', '2025-02-20 10:37:26'),
(58, 1, 1, 21, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 10:37:37', '2025-02-20 10:37:37'),
(59, 1, 1, 20, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 10:37:48', '2025-02-20 10:37:48'),
(60, 1, 1, 7, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 10:39:17', '2025-02-20 10:39:17'),
(61, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 10:39:18', '2025-02-20 10:39:18'),
(62, 1, 1, 20, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 10:41:23', '2025-02-20 10:41:23'),
(63, 1, 1, 20, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 10:50:31', '2025-02-20 10:50:31'),
(64, 1, 1, 6, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 11:08:29', '2025-02-20 11:08:29'),
(65, 1, 1, 6, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 11:08:33', '2025-02-20 11:08:33'),
(66, 1, 1, 6, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 11:09:20', '2025-02-20 11:09:20'),
(67, 1, 1, 6, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 11:09:25', '2025-02-20 11:09:25'),
(68, 1, 1, 6, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 11:09:27', '2025-02-20 11:09:27'),
(69, 1, 1, 6, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 11:09:29', '2025-02-20 11:09:29'),
(70, 1, 1, 6, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 11:10:12', '2025-02-20 11:10:12'),
(71, 1, 1, 6, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 11:10:15', '2025-02-20 11:10:15'),
(72, 1, 1, 6, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 11:10:17', '2025-02-20 11:10:17'),
(73, 1, 1, 6, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 11:10:18', '2025-02-20 11:10:18'),
(74, 1, 1, 7, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 11:12:09', '2025-02-20 11:12:09'),
(75, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 11:12:10', '2025-02-20 11:12:10'),
(76, 1, 1, 7, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 11:12:11', '2025-02-20 11:12:11'),
(77, 1, 1, 20, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 11:12:21', '2025-02-20 11:12:21'),
(78, 1, 1, 20, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 11:12:22', '2025-02-20 11:12:22'),
(79, 1, 1, 20, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 11:12:23', '2025-02-20 11:12:23'),
(80, 1, 1, 20, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 11:12:23', '2025-02-20 11:12:23'),
(81, 1, 1, 20, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 11:12:24', '2025-02-20 11:12:24'),
(82, 1, 1, 20, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 11:12:25', '2025-02-20 11:12:25'),
(83, 1, 1, 20, '2', 'admin', 'Updated to Pending By Admin', 1, '2025-02-20 11:12:25', '2025-02-20 11:12:25'),
(84, 1, 1, 20, '3', 'admin', 'Updated to Sold By Admin', 1, '2025-02-20 11:12:26', '2025-02-20 11:12:26'),
(85, 1, 1, 6, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-20 11:12:43', '2025-02-20 11:12:43'),
(86, 1, 1, 6, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 11:12:43', '2025-02-20 11:12:43'),
(87, 1, 1, 7, '1', 'admin', 'Updated to Approved By Admin', 1, '2025-02-20 11:24:26', '2025-02-20 11:24:26'),
(88, NULL, 1, 18, '0', 'admin', 'Updated to Declined By Admin', 1, '2025-02-21 05:28:09', '2025-02-21 05:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `user_id`, `property_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 12, '9dd410975f27ccd047d91f15ded7192f.jpg', 1, '2024-12-24 06:32:46', '2024-12-24 06:32:46'),
(2, NULL, 12, '356eb2c0601e20dccc4c30e504254fb9.png', 1, '2024-12-24 06:32:46', '2024-12-24 06:32:46'),
(9, NULL, 3, 'f4f66edcf19e0b7c07708dcd086c8e87.jpg', 1, '2024-12-24 10:46:42', '2024-12-24 10:46:42'),
(10, NULL, 3, '887f1e16abc6c3da6e3d4b2cb2ba6afd.jpg', 1, '2024-12-24 10:46:42', '2024-12-24 10:46:42'),
(11, NULL, 3, '522248ad314d6496bb57c794b92e4aa8.jpg', 1, '2024-12-24 10:46:42', '2024-12-24 10:46:42'),
(12, NULL, 4, '747d22b0d1f89acdb8b315bf4be4a2c6.jpg', 1, '2024-12-24 10:47:07', '2024-12-24 10:47:07'),
(13, NULL, 4, 'e913a50e2ef1954a28be21920f0fe46a.jpg', 1, '2024-12-24 10:47:07', '2024-12-24 10:47:07'),
(14, NULL, 5, '3a648f8584e8f01e06275a1b70409941.jpg', 1, '2024-12-24 10:49:59', '2024-12-24 10:49:59'),
(15, NULL, 5, 'f33b096884c3d2b519224806802dfa99.jpg', 1, '2024-12-24 10:49:59', '2024-12-24 10:49:59'),
(17, NULL, 2, '5e1b5023e7ad609cb382d55436c7b42b.jpg', 1, '2024-12-26 05:39:18', '2024-12-26 05:39:18'),
(19, NULL, 2, '14ac424dc8bdb15419ed71d90542b996.jpg', 1, '2024-12-26 05:57:36', '2024-12-26 05:57:36'),
(21, NULL, 3, '338eea14dacb0142cbc94d1612b730bd.jpg', 1, '2024-12-28 06:31:01', '2024-12-28 06:31:01'),
(22, NULL, 13, '6328cca3b0890a2e6cad3fecff15802e.jpg', 1, '2024-12-28 10:48:17', '2024-12-28 10:48:17'),
(23, NULL, 13, '0b2c7fce362234f86def1750d40a67df.jpg', 1, '2024-12-28 10:48:17', '2024-12-28 10:48:17'),
(24, NULL, 13, '27a361867f07dad488936f754f7b36f6.jpg', 1, '2024-12-28 10:48:17', '2024-12-28 10:48:17'),
(26, NULL, 14, '7b77ea3e7e2604e506db25e1209e03e1.jpg', 1, '2024-12-31 05:10:38', '2024-12-31 05:10:38'),
(27, NULL, 14, '5ed3d70199516b1de3b9ff56448cd6cb.jpg', 1, '2024-12-31 05:10:38', '2024-12-31 05:10:38'),
(28, NULL, 14, 'fb94aedaa4bd64826f4e8e77f76641c8.jpg', 1, '2024-12-31 05:10:38', '2024-12-31 05:10:38'),
(29, NULL, 14, '89b8b30889651f46f12a6bfa82db05d6.jpg', 1, '2024-12-31 05:10:38', '2024-12-31 05:10:38'),
(30, NULL, 15, '31c6a95a01023d2f8e6128773379a0e3.jpg', 1, '2024-12-31 05:21:46', '2024-12-31 05:21:46'),
(31, NULL, 6, 'c4026647eb7612ec58a921b6ce862abc.jpg', 1, '2025-01-02 05:38:19', '2025-01-02 05:38:19'),
(32, NULL, 7, '35084240405020c143877ffcb1cf731e.jpg', 1, '2025-01-02 05:38:44', '2025-01-02 05:38:44'),
(33, NULL, 8, 'a096e86d0e6d40aa803d588a1506c3d7.jpg', 1, '2025-01-02 05:39:19', '2025-01-02 05:39:19'),
(34, NULL, 2, '9857a088ec7ad213e17e2a95ba14ae1f.jpg', 1, '2025-01-02 12:48:39', '2025-01-02 12:48:39'),
(35, NULL, 18, '1b4cf8a931564d33c7a87a2a3401abeb.jpg', 1, '2025-01-03 06:07:07', '2025-01-03 06:07:07'),
(36, NULL, 18, '360b648b68d8c87ff14eee0d446e3b58.jpg', 1, '2025-01-03 06:07:07', '2025-01-03 06:07:07'),
(37, NULL, 18, '7e59359a4fa48f9f61ba20ad65c0b730.jpg', 1, '2025-01-03 06:07:07', '2025-01-03 06:07:07'),
(38, NULL, 19, '63f205ada2869fe9b51768682ab0cb92.jpg', 1, '2025-01-03 06:09:39', '2025-01-03 06:09:39'),
(39, NULL, 21, 'd7164f0882d7e220b62ac058a08d0546.jpg', 1, '2025-01-08 07:07:01', '2025-01-08 07:07:01'),
(40, NULL, 21, 'ccd6fadb29859c73789678410206bff3.jpg', 1, '2025-01-08 07:07:01', '2025-01-08 07:07:01'),
(41, NULL, 21, 'c17a7e5e6c7764d8239dee61138fd7e4.jpg', 1, '2025-01-08 07:07:01', '2025-01-08 07:07:01'),
(42, NULL, 21, '4e2947cbbcf59869f6e4f9a78eb1f374.jpg', 1, '2025-01-08 07:07:01', '2025-01-08 07:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `page`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 'contact', 'contact title', 'contact descriptions123', 'contact Keywords123', '2025-01-15 11:36:58', '2025-01-15 12:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'facebook_social', '', NULL, '2025-01-07 11:22:10', '2025-01-15 12:39:15'),
(2, 'instagram_social', '', NULL, '2025-01-07 11:22:11', '2025-01-07 11:22:11'),
(3, 'twitter_social', '', NULL, '2025-01-07 11:22:11', '2025-01-07 11:22:11'),
(4, 'pinterest_social', '', NULL, '2025-01-07 11:22:11', '2025-01-07 11:22:11'),
(5, 'youtube_social', '', NULL, '2025-01-07 11:22:11', '2025-01-07 11:22:11'),
(6, 'address', 'SCO-18, 2nd Floor, Cabin No. 208, Feroze Gandhi Market, Ludhiana, Punjab, India, 141001', NULL, '2025-01-15 12:01:46', '2025-01-15 12:07:17'),
(7, 'phone', '9041132240', NULL, '2025-01-15 12:01:46', '2025-01-15 12:07:18'),
(8, 'whatsapp', '9041132240', NULL, '2025-01-15 12:01:46', '2025-01-15 12:07:18'),
(9, 'email', 'support@brickbold.com', NULL, '2025-01-15 12:01:46', '2025-01-15 12:07:18'),
(10, 'light_logo', '', NULL, '2025-01-15 12:01:46', '2025-01-15 12:07:18'),
(11, 'dark_logo', '', NULL, '2025-01-15 12:01:47', '2025-02-06 11:05:15'),
(12, 'favicon', '64e05a4f045e7079a2468f7e83372ad0.svg', NULL, '2025-01-15 12:01:47', '2025-01-15 12:07:18'),
(13, 'seo_title', 'Seo Title default', NULL, '2025-01-15 12:01:47', '2025-01-15 12:02:21'),
(14, 'seo_description', 'dxsdfsdfsdffd', NULL, '2025-01-15 12:01:47', '2025-01-15 12:01:47'),
(15, 'seo_keywords', 'sdfsdf', NULL, '2025-01-15 12:01:47', '2025-01-15 12:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `descriptions` longtext DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `priority`, `name`, `position`, `image`, `descriptions`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rohit Jain', 'CEO ABC', 'avt-png4.png', 'I recently explored Brick Bold, and I am genuinely impressed by its standout features and user-centric design. From the moment I accessed the portal, I was greeted with a modern, clean interface that made navigation intuitive and straightforward. The well-organized layout and user-friendly controls ensure that even those unfamiliar with real estate platforms can find what they need with ease, creating a seamless browsing experience.', 1, NULL, NULL),
(2, 2, 'Amandeep Kaur', 'CEO ABC company', 'testimonials-1.jpg', 'BrickBold offers a user-friendly interface with robust search functionality, allowing me to filter properties by various criteria such as price, location, and different amenities. Detailed property listings feature high-quality images and comprehensive descriptions, enhancing decision-making. Based on these features of Brick Bold, I have easily shortlisted properties according to my requirements. I genuinely recommend this website for searching for a dream and sweet home.', 1, NULL, NULL),
(3, 3, 'Vipan Dewra', 'CEO ABC', 'avt-png5.png', 'I recently had the opportunity to use Brick Bold , and I must commend its exceptional user experience. The portal\'s interface is both sleek and intuitive, making it incredibly easy to navigate. The clean design ensures that users can quickly find what they\'re looking for without feeling overwhelmed, which is a significant plus for both first-time users and seasoned property seekers.', 1, NULL, NULL),
(4, 4, 'Gurmeet Singh', 'CEO ABC company', 'testimonials-4.jpg', 'I truly appreciate the professionalism and in-depth knowledge of the brokerage team. They not only helped me find the perfect home but also assisted with legal and financial aspects, making me feel confident and secure in my decision. ', 1, NULL, NULL),
(5, 5, 'Rohit Jain', 'CEO ABC', 'avt-png7.png', 'I recently explored Brick Bold, and I am genuinely impressed by its standout features and user-centric design. From the moment I accessed the portal, I was greeted with a modern, clean interface that made navigation intuitive and straightforward. The well-organized layout and user-friendly controls ensure that even those unfamiliar with real estate platforms can find what they need with ease, creating a seamless browsing experience.', 1, NULL, NULL),
(6, 6, 'Amandeep Kaur', 'CEO ABC company', 'testimonials-2.jpg', 'BrickBold offers a user-friendly interface with robust search functionality, allowing me to filter properties by various criteria such as price, location, and different amenities. Detailed property listings feature high-quality images and comprehensive descriptions, enhancing decision-making. Based on these features of Brick Bold, I have easily shortlisted properties according to my requirements. I genuinely recommend this website for searching for a dream and sweet home.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) DEFAULT NULL,
  `user_type` varchar(150) DEFAULT NULL,
  `for_type` varchar(150) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `landline_number` varchar(150) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `gstin` varchar(150) DEFAULT NULL,
  `rera_number` varchar(150) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `google_id` varchar(255) DEFAULT NULL,
  `verify_account` tinyint(1) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `user_type`, `for_type`, `name`, `email`, `email_verified_at`, `profile_image`, `dob`, `phone`, `landline_number`, `description`, `business_name`, `address`, `city`, `state`, `country`, `postal_code`, `gstin`, `rera_number`, `website`, `password`, `status`, `google_id`, `verify_account`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Owner', NULL, 'Rakesh gupta', 'contactcreativeroom@gmail.com', '2025-02-14 08:06:07', 'a5faeccf0928c1abbdd685fa3787c995.jpg', NULL, '9780520529', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'Ludhiana, Sherpur,  main market', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$T23kneEFp3tvz1sNWUFMJOGlrsi4zAvhMzBjw5Fa7cfRH8Q13rZOG', 1, '107013915290598074714', 0, 'Qghqt6NnSYLsoRaQ7v18LxcifDVLxejTUJMVxBARkZTQ65cnSLBUO6ST74pZ', '2024-12-11 07:39:16', '2025-02-14 08:06:07'),
(2, NULL, 'Agent', NULL, 'Rakesh gupta2', 'testingrakesh2@mailinator.com', NULL, NULL, NULL, '9876543210', '0161-6986665', NULL, 'Ludhiana AI Technology', 'Ludhiana, Sherpur,  main market', NULL, NULL, NULL, NULL, 'API14522', 'awraraer', 'google.com', '$2y$10$JTmVh0uBRTnggBe/L8l71.12llnB/fYrxWKXdqZbGFPZ6k.Z0ZILi', 1, NULL, 0, NULL, '2024-12-27 06:54:54', '2025-01-08 10:04:52'),
(5, NULL, '', NULL, 'Rakesh gupta', 'testingrakesh3@mailinator.com', NULL, 'ce2532e41ed9a2f8fd8cb78731ecd6d5.jpeg', NULL, '09874563250', '', 'sdfsdfsd', NULL, 'Ludhiana, Sherpur,  main market', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$b3vtak2Wx/E2SxGNMqZy8uMc2a4hJqKjFxSw6dqaOIAY50mH5K71i', 1, NULL, 0, '4QrcjmVygIHgyHKb6lUmq7vI9KkweA3ceD6O1jQuBPOCwWXITIcKmICIXkBr', '2024-12-27 07:08:36', '2025-01-06 11:38:16'),
(6, NULL, '', NULL, 'Rakesh gupta3', 'testingrakesh44@mailinator.com', NULL, 'fb4fc31f7dcbeb2b1be4e14a3187b3aa.jpg', NULL, '9876543210', '', 'loream ispsum is dummy content', NULL, 'Ludhiana, Sherpur,  main market', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$f3Efqhx9uyrXbfXnksB67.ab5g27aqcfDGWhYGS4VwO6pvsi1dFVm', 1, NULL, 0, NULL, '2024-12-28 10:31:10', '2025-01-03 06:32:04'),
(8, NULL, 'Owner', NULL, 'Ludhiana AI Technology', 'ludhianaaitechnology@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$BqJRnGNZZ4BR/.kjOXG83eso/2vulhdxNho0S6M6SNkwq8YZCQzQC', 1, NULL, 0, NULL, '2025-01-08 10:39:24', '2025-01-08 10:39:24'),
(11, NULL, NULL, NULL, 'Creative Room', 'testingrakesh1@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$7UwUhsS5qWE3OeKEOVGkG.KlBlDRY5VvmQVmN9yUb1wrbshJ2BXy.', 1, NULL, 0, 'eovwSIN1dbTICkEdupXVYAzGJz78TJJK84pCj1xi2XzxbB8tWogwLZNFpVFT', '2025-01-11 04:40:09', '2025-01-11 04:40:09'),
(12, NULL, 'Owner', NULL, 'Rakesh gupta', 'admin@gmail.com', NULL, NULL, NULL, '9874321456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Xfz0gsIpQXNVdXorhQN3xeP3QY6BFbdHvDdu8Zv/PMJrsA9NJ7OjC', 1, NULL, 0, NULL, '2025-01-11 06:51:56', '2025-01-11 06:51:56'),
(13, NULL, NULL, NULL, 'Brick Bold', 'brickbold25@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$l7EAoT3jevTNAzPgdbmd/.HC4K/Rfx30g5aU8lGJ.EHPtFCBtQQTO', 1, '103916341031876347453', 0, NULL, '2025-01-15 07:23:34', '2025-01-15 07:23:34'),
(15, NULL, 'Agent', 'for-sell', 'Johan', 'johan@gmail.com', NULL, NULL, NULL, '9874566540', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$d6nEebFgPCkclVzliNyem.z/PcIQyDUSkYx96KzubcPXEdrp893eW', 1, NULL, 0, NULL, '2025-01-17 08:15:45', '2025-01-17 08:15:45'),
(19, NULL, 'Agent', 'for-sell', NULL, 'testingrakesh4@mailinator.com', NULL, NULL, NULL, '9039632287', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$jUb99Oyo0qW8bkctg9UBkeoltAx2kZNCdVa09jb8wxQJu.VMxupdO', 1, NULL, 0, NULL, '2025-01-24 08:34:07', '2025-01-24 08:34:07'),
(20, NULL, 'Builder', 'for-rent', NULL, 'preetindersingh2222@gmail.com', NULL, NULL, NULL, '3698521470', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$WR.dh4GcvhXpqGR6D01ScOH9kE4.o05DdHo8XA97/vNcVj9ULakuO', 0, NULL, 0, NULL, '2025-01-28 11:09:20', '2025-01-29 08:52:30'),
(21, NULL, 'Owner', 'for-rent', 'Rakesh gupta33', 'ludhianaakjlitechnology@gmail.com', NULL, NULL, NULL, '9874443250', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$wz1ZtW1sv48elG6ceKJEjO2nycWnsVeThUToUzmrJJ5OE3UIeuxba', 1, NULL, 0, NULL, '2025-01-31 11:03:37', '2025-01-31 11:03:37'),
(24, NULL, 'Agent', 'for-rent', NULL, NULL, NULL, NULL, NULL, '7009790608111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ukWikGwZc4zIDzPkOARgC.VnTn.PKB04PYh0SUyH/.ovmZ5RZu6Te', 1, NULL, 0, NULL, '2025-02-11 08:26:44', '2025-02-11 08:26:44'),
(25, NULL, NULL, NULL, 'Mytechregion', 'contactmytechregion@gmail.com', '2025-02-13 12:25:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$WFKZmpfJnvIr6HdEHXZz9eY43EHoBEwOW0uiAfBVv6wbKFzyesQIS', 1, '110867689546254340521', 0, NULL, '2025-02-13 12:25:34', '2025-02-13 12:25:34'),
(30, NULL, NULL, NULL, 'Adesh', 'contactcreativeroom111@gmail.com', NULL, NULL, NULL, '7009790608', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$eHJ.Rd2C9.dLo4i4rljLyu8N0iUFQc3s6z3JjiwZNZ/ixZcp746Fq', 1, NULL, 0, NULL, '2025-02-25 08:06:38', '2025-02-25 08:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` int(11) DEFAULT 1,
  `property_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `package_type` varchar(150) DEFAULT NULL,
  `post_property` int(11) DEFAULT 1,
  `contacts` int(11) DEFAULT 1,
  `days` int(11) DEFAULT 1,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_subscriptions`
--

INSERT INTO `user_subscriptions` (`id`, `user_id`, `order_id`, `property_id`, `package_id`, `package_type`, `post_property`, `contacts`, `days`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 12, NULL, NULL, 1, 20, 30, '2025-01-13 16:55:18', '2025-02-12 16:55:18', 1, '2025-01-13 11:25:18', '2025-01-13 11:25:18'),
(2, 1, 12, 15, NULL, NULL, 1, 10, 30, '2025-01-13 16:55:18', '2025-02-12 16:55:18', 1, '2025-01-13 11:25:18', '2025-01-13 11:25:18'),
(3, 1, 13, 21, NULL, NULL, 1, 20, 30, '2025-01-13 16:55:18', '2025-02-12 16:55:18', 1, '2025-01-13 11:25:18', '2025-01-13 11:25:18'),
(4, 1, 14, 5, 5, NULL, 1, 20, 30, '2025-01-14 16:56:12', '2025-02-13 16:56:12', 1, '2025-01-14 11:26:12', '2025-01-15 06:21:52'),
(5, 1, 15, 14, 5, NULL, 1, 20, 30, '2025-01-14 17:00:32', '2025-02-13 17:00:32', 1, '2025-01-14 11:30:32', '2025-01-15 06:21:26'),
(6, 1, 16, 7, 4, NULL, 1, 10, 15, '2025-01-14 17:04:56', '2025-01-29 17:04:56', 1, '2025-01-14 11:34:56', '2025-01-15 05:47:14'),
(7, 1, 17, 21, 5, NULL, 1, 20, 30, '2025-01-15 16:06:29', '2025-02-14 16:06:29', 1, '2025-01-15 10:36:29', '2025-01-16 12:47:32'),
(8, 1, 19, 7, 5, NULL, 1, 20, 30, '2025-01-16 18:20:33', '2025-02-15 18:20:33', 1, '2025-01-16 12:50:33', '2025-01-17 06:51:21'),
(9, 1, 20, NULL, 6, 'BUY', 0, 15, 90, '2025-02-25 12:11:22', '2025-05-26 12:11:22', 1, '2025-02-25 06:41:22', '2025-02-25 06:41:22'),
(10, 1, 21, NULL, 4, 'BUY1', 0, 10, 60, '2025-02-25 13:40:47', '2025-04-26 13:40:47', 1, '2025-02-25 08:10:47', '2025-02-25 08:10:47'),
(11, 1, 22, NULL, 4, 'BUY1', 0, 10, 60, '2025-02-25 13:43:15', '2025-04-26 13:43:15', 1, '2025-02-25 08:13:15', '2025-02-25 08:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL COMMENT '1=Owner,2=Agent,3=Builder,4=Buyer',
  `looking` varchar(255) DEFAULT NULL COMMENT '1=Sell,2=Rent',
  `company_name` varchar(255) DEFAULT NULL,
  `company_number` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_index` (`user_id`);

--
-- Indexes for table `home_loan_enquiries`
--
ALTER TABLE `home_loan_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_details`
--
ALTER TABLE `meta_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_index` (`user_id`);

--
-- Indexes for table `otp_codes`
--
ALTER TABLE `otp_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_fields`
--
ALTER TABLE `package_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_r_payment_id_unique` (`r_payment_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_user_id_index` (`user_id`);

--
-- Indexes for table `property_enquiries`
--
ALTER TABLE `property_enquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_enquiries_user_id_index` (`user_id`);

--
-- Indexes for table `property_histories`
--
ALTER TABLE `property_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_histories_user_id_index` (`user_id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_images_user_id_index` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_unique_id_unique` (`unique_id`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_subscriptions_user_id_index` (`user_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_types_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_loan_enquiries`
--
ALTER TABLE `home_loan_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meta_details`
--
ALTER TABLE `meta_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `otp_codes`
--
ALTER TABLE `otp_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package_fields`
--
ALTER TABLE `package_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `property_enquiries`
--
ALTER TABLE `property_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `property_histories`
--
ALTER TABLE `property_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
