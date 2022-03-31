-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 11:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qh_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_ldetails` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_sdetails` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`about_id`, `about_image`, `about_details`, `about_ldetails`, `about_sdetails`, `created_at`, `updated_at`) VALUES
(1, 'about_1623673009.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', '2021-06-14 11:49:13', '2021-06-21 04:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `ban_id` bigint(20) UNSIGNED NOT NULL,
  `ban_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_button` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_publish` int(11) NOT NULL DEFAULT 0,
  `ban_slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`ban_id`, `ban_title`, `ban_details`, `ban_button`, `ban_url`, `ban_image`, `ban_publish`, `ban_slug`, `ban_status`, `created_at`, `updated_at`) VALUES
(1, 'Hygiene Extra Care', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'View more', '#', 'banner_1_1623658930.jpg', 0, 'BAN2060c711b282d2d', 1, '2021-06-14 08:22:10', '2021-06-21 04:50:49'),
(2, 'Hygiene Extra Care', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'View more', '#', 'banner_2_1624251098.jpg', 0, 'BAN2060d01ada1af0c', 0, '2021-06-21 04:51:38', '2021-06-21 04:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `basic_id` bigint(20) UNSIGNED NOT NULL,
  `basic_company` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_title` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_flogo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_contactpik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`basic_id`, `basic_company`, `basic_title`, `basic_logo`, `basic_favicon`, `basic_flogo`, `basic_contactpik`, `basic_status`, `created_at`, `updated_at`) VALUES
(1, 'Creative-Shaper', '..::Hygiene Extra Care::..', 'logo_1623734250.png', 'favicon_1623734250.png', 'flogo_1623734250.png', 'contactpik_1623929329.png', 1, '2021-06-14 09:29:28', '2021-06-21 06:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `cont_id` bigint(20) UNSIGNED NOT NULL,
  `cont_phone1` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_phone2` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_phone3` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_phone4` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_email1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_email2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_email3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_email4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_add1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_add2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_add3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_add4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`cont_id`, `cont_phone1`, `cont_phone2`, `cont_phone3`, `cont_phone4`, `cont_email1`, `cont_email2`, `cont_email3`, `cont_email4`, `cont_add1`, `cont_add2`, `cont_add3`, `cont_add4`, `cont_status`, `created_at`, `updated_at`) VALUES
(1, '01911194724', '017324588', '019151651724', '0187634534', 'muajjam.imu@gmail.com', 'muajjam.imu@gmail.com', 'muajjam.imu@gmail.com', 'muajjam.imu@gmail.com', 'Dhanmondi, Dhaka, Bangladesh', 'Gulshan, Dhaka, Bangladesh', 'Dhanmondi, Dhaka, Bangladesh', 'Dhanmondi, Dhaka, Bangladesh', 1, '2021-06-15 05:26:43', '2021-06-21 07:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `con_id` bigint(20) UNSIGNED NOT NULL,
  `con_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`con_id`, `con_name`, `con_email`, `con_phone`, `con_subject`, `con_message`, `con_status`, `created_at`, `updated_at`) VALUES
(1, 'Muajjam Hossain', 'muajja@gmail.com', '01911194724', 'test', 'nai', 1, NULL, NULL),
(3, 'Muajjam Hossain', 'muajjam.@gmail.com', '01541267524', 'Addmission', 'Web Development', 0, NULL, '2021-06-21 05:21:07'),
(4, 'Muajjam Hossain', 'mm@gmail.com', '01911194724', 'Addmission', '----------', 0, NULL, '2021-06-21 05:18:57'),
(5, 'Muajjam Hossain', 'muajjam.imu@gmail.com', '01911194724', 'test', 'sasdwqwq', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `con_id` bigint(20) UNSIGNED NOT NULL,
  `con_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`con_id`, `con_title`, `con_subtitle`, `status`, `created_at`, `updated_at`) VALUES
(1, 'WELCOME TO', 'About Us', 1, '2021-06-14 09:29:57', '2021-06-14 11:41:25'),
(2, 'OUR PRODUCTS', 'What We Offer', 1, '2021-06-14 09:46:22', '2021-06-14 11:02:41'),
(3, 'OUR NEWS', 'Our Latest News', 1, NULL, '2021-06-14 11:42:41'),
(4, 'Let‘s Get In Touch', 'Lorem ipsum  amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2021-06-15 10:29:42', '2021-06-21 04:58:36'),
(5, 'Hygiene Extra Care', 'lll-Lorem ipsum dolor sit amconsectetur adipiscing elsed do eiusmod tempor incididunt ut labore.', 1, '2021-06-17 10:26:59', NULL);

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
(4, '2021_06_14_134914_create_banners_table', 2),
(5, '2021_06_14_154215_create_contents_table', 3),
(6, '2021_06_14_172421_create_abouts_table', 4),
(7, '2021_06_14_184006_create_basics_table', 5),
(8, '2021_06_14_184021_create_social_media_table', 5),
(9, '2021_06_14_184037_create_contact_information_table', 5),
(10, '2021_06_15_113417_create_privacy_policies_table', 6),
(11, '2021_06_15_123016_create_contact_us_table', 7),
(12, '2021_06_15_171932_create_products_table', 8),
(16, '2021_06_17_124912_create_news_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_date` date DEFAULT NULL,
  `news_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_slug` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_publish` int(11) NOT NULL DEFAULT 0,
  `news_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `news_image`, `news_slug`, `news_publish`, `news_status`, `created_at`, `updated_at`) VALUES
(1, 'New Libresse Ultra Thin-15pads', '2021-06-12', 'news_1_1623914768.png', 'N4124l', 0, 1, '2021-06-17 07:26:08', '2021-06-21 06:54:34'),
(2, 'Hygiene Extra Care', '2021-06-19', 'news_2_1623915328.png', 'N2060cafb4047807', 1, 1, '2021-06-17 07:35:28', '2021-06-21 06:53:37'),
(3, 'Hygiene Extra Care-15', '2021-06-22', 'news_3_1624256400.png', 'N2060d02f905e9cf', 1, 1, '2021-06-21 06:20:00', '2021-06-21 06:54:25');

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
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `privacy_id` bigint(20) UNSIGNED NOT NULL,
  `privacy_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_publish` int(11) NOT NULL DEFAULT 0,
  `privacy_slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`privacy_id`, `privacy_title`, `privacy_details`, `privacy_publish`, `privacy_slug`, `privacy_status`, `created_at`, `updated_at`) VALUES
(1, 'What Personal Information Do We Collect From You And How?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 'Privacy2060c84419477a0', 0, '2021-06-15 06:09:29', '2021-06-15 06:13:11'),
(2, 'What Personal Information Do We Collect From You And How?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'Privacy2060c844ea9fd28', 1, '2021-06-15 06:12:58', '2021-06-21 05:02:15'),
(3, 'What Personal Information Do We Collect From You And How?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 'Privacy2060cb2a92e9388', 1, '2021-06-17 10:57:22', '2021-06-21 05:02:29'),
(4, 'What Personal Information Do We Collect From You And How??', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 'Privacy2060d01fed73880', 0, '2021-06-21 05:13:17', '2021-06-21 05:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_feature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_publish` int(11) NOT NULL DEFAULT 0,
  `product_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_title`, `product_description`, `product_feature`, `product_image`, `product_slug`, `product_publish`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'New Libresse Ultra Thin-15pads', 'New Libresse Ultra Thin-15pads.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'New Whisper Ultra Clean-15pads.,Ultra thin pads about 300+mm long and high absorbency,,Soft and comfortable for use.,Made in China', 'product_3_1623848053.png', 'product_viewe', 0, 1, NULL, NULL),
(2, 1, 'New Libresse Ultra Thin-15pads', 'New Libresse Ultra Thin-15pads.', 'New Libresse Ultra Thin-15pads New Libresse Ultra Thin-15pads New Libresse Ultra Thin-15pads New Libresse Ultra Thin-15pads New Libresse Ultra Thin-15pads', 'New Libresse Ultra Thin-15pads', 'product_2_1623921461.png', 'P1060c9f454a8ecf', 0, 1, NULL, '2021-06-17 09:17:41'),
(3, 1, 'New Libresse Ultra Thin-15pads', 'New Libresse Ultra Thin-15pads.', 'New Libresse Ultra Thin-15pads New Libresse Ultra Thin-15pads New Libresse Ultra Thin-15pads New Libresse Ultra Thin-15pads New Libresse Ultra Thin-15pads', 'New Libresse Ultra Thin-15pads,123456#', 'product_3_1623848053.png', 'P1060c9f475db151', 1, 1, NULL, '2021-06-17 06:45:07'),
(4, 2, 'Up to date Product', 'Upcoming', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'New Libresse Ultra Thin-15pads,New Libresse Ultra Thin-30pads,Soft and comfortable for use.,Made in China,#01456125845', 'product_4_1623930729.png', 'P1060cb3768e533b', 0, 1, NULL, '2021-06-17 11:52:09'),
(5, 2, 'Extra Care', 'Hygiene Extra Care 0011', 'Hygiene Extra Care Hygiene Extra Care Hygiene Extra Care', '#01456125845,#01456125845,Soft and comfortable for use.,New Libresse Ultra Thin-15pads', 'product_5_1623930813.png', 'P1060cb37bd2eda6', 0, 1, NULL, '2021-06-21 06:06:13'),
(6, 1, 'New Libresse Ultra Thin-15pads.', 'New Libresse Ultra Thin-15pads.', 'New Libresse Ultra Thin-15pads. New Libresse Ultra Thin-15pads. New Libresse Ultra Thin-15pads.', 'New Libresse Ultra Thin-15pads,New Libresse Ultra Thin-,Soft and comfortable for use.,New Libresse Ultra Thin-22', 'product_6_1623930893.png', 'P1060cb380d1cd7b', 0, 1, NULL, '2021-06-17 11:54:53'),
(7, 2, 'New Libresse Ultra Thin', 'New Libresse Ultra Thin-15pads.', 'New Libresse Ultra Thin-15pads. New Libresse Ultra Thin-15pads. New Libresse Ultra Thin-15pads.', '#01456125845,New Libresse Ultra Thin-15pads,Soft and comfortable for use.', 'product_7_1623931045.png', 'P1060cb38a5a3cab', 0, 0, NULL, '2021-06-21 07:05:25'),
(8, 1, 'New Libresse Ultra Thin-15', 'New Libresse Ultra Thin-15pads.', 'New Libresse Ultra Thin-15pads. New Libresse Ultra Thin-15pads. New Libresse Ultra Thin-15pads.', 'New Libresse Ultra Thin-15pads,New Libresse Ultra Thin-15pads', 'product_8_1623931161.png', 'P1060cb3919887f0', 0, 0, NULL, '2021-06-21 05:59:16'),
(9, 1, 'Hygiene Extra Care', 'Hygiene Extra Care 0011', 'Hygiene Extra Care 0011 Hygiene Extra Care 0011 Hygiene Extra Care 0011', 'New Whisper Ultra Clean-15pads.,New Libresse Ultra Thin-15pads,Soft and comfortable for use.,New Libresse Ultra Thin-22,#01456125845', 'product_9_1624254650.png', 'P1060d028ba6aba4', 0, 0, NULL, '2021-06-21 06:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `sm_id` bigint(20) UNSIGNED NOT NULL,
  `sm_facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_google` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_pinterest` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_flickr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_vimeo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_skype` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_rss` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`sm_id`, `sm_facebook`, `sm_twitter`, `sm_linkedin`, `sm_google`, `sm_youtube`, `sm_pinterest`, `sm_flickr`, `sm_vimeo`, `sm_skype`, `sm_rss`, `sm_status`, `created_at`, `updated_at`) VALUES
(1, 'facebook', NULL, 'linkedin', 'google', 'youtube', NULL, NULL, NULL, 'skype', NULL, 1, NULL, '2021-06-21 06:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muajjam Hossain', 'admin@gmail.com', 1, NULL, '$2y$10$BR7.s0Kd5gVSSqIKYiuiH.fg941ce9zZOUQDFyqzmHkW9alJ13TNq', NULL, '2021-06-14 00:31:19', '2021-06-14 00:31:19'),
(2, 'Muajjam', 'admin1@gmail.com', 1, NULL, '$2y$10$stZIH7A0u0nrZSGvF7FYPu8ktCObRpcwD90FFpRzox9BZdQDujwFe', NULL, '2021-06-14 00:40:48', '2021-06-14 00:40:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`privacy_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`sm_id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `about_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `ban_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `basic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `cont_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `con_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `con_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `privacy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `sm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
