-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 01:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `brunch_id` int(11) DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes 0=>no',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `access_block` text DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `contact_no`, `role_id`, `password`, `image`, `company_id`, `brunch_id`, `full_access`, `status`, `remember_token`, `access_block`, `token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mojahid', 'mojahidjouel@yahoo.com', '01814', 1, '$2y$12$BqjrsxaIstgNZOlfB58m0OeECHeg2qgIFLmsU3SgPBgBOd3tsYp5u', '2811702871693.jpg', NULL, NULL, 1, 1, NULL, NULL, NULL, '2023-12-17 21:38:31', '2023-12-17 21:54:53', NULL),
(2, 'Kamal', 'kamal@gmail.com', '0181', 4, '$2y$12$.sI2QdpgchtL.5ApNlIbKecTNkcygTcR7IfkIM82.VcWrIwQ/fEhe', NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '2023-12-17 22:53:28', '2023-12-17 22:53:28', NULL),
(3, 'Kaiser', 'kaiser@gmail.com', '0182', 4, '$2y$12$YZZx46UZZanjUD8HShyUtOWKOSjix/u9GhqZAwPDnEnbyHM9jCENa', NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '2023-12-17 22:53:52', '2023-12-17 22:53:52', NULL),
(4, 'Jasim', 'jasim@gmail.com', '0183', 4, '$2y$12$PrSH9JWzIiNHCcpK/OFo4uT1.rWbQtJquURAgL28WIvMJeS50izuW', NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '2023-12-17 22:54:11', '2023-12-17 22:54:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `registration_card` varchar(255) DEFAULT NULL,
  `gml` decimal(8,2) NOT NULL DEFAULT 1.00,
  `cml` decimal(8,2) NOT NULL DEFAULT 1.00,
  `hml` decimal(8,2) NOT NULL DEFAULT 1.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `branch_email` varchar(255) NOT NULL,
  `branch_phone` varchar(255) NOT NULL,
  `branch_address` text DEFAULT NULL,
  `branch_city` text DEFAULT NULL,
  `branch_state` text DEFAULT NULL,
  `branch_pin` text DEFAULT NULL,
  `branch_country` text DEFAULT NULL,
  `logo_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Chattogram', '101', '2023-12-17 22:00:10', '2023-12-17 22:00:10'),
(2, 'Dhaka', '102', '2023-12-17 22:00:25', '2023-12-17 22:00:25'),
(3, 'Rajshahi', '103', '2023-12-17 22:01:28', '2023-12-17 22:01:28'),
(4, 'Sylhet', '104', '2023-12-17 22:01:48', '2023-12-17 22:01:48'),
(5, 'Mymensingh', '105', '2023-12-17 22:02:01', '2023-12-17 22:02:01'),
(6, 'Barisal', '106', '2023-12-17 22:02:19', '2023-12-17 22:02:19'),
(7, 'Rangpur', '107', '2023-12-17 22:02:50', '2023-12-17 22:02:50'),
(8, 'Khulna', '108', '2023-12-17 22:03:10', '2023-12-17 22:03:10'),
(9, 'Cox\'s Bazar', '109', '2023-12-17 22:05:28', '2023-12-17 22:14:42'),
(10, 'Rangamati', '110', '2023-12-17 22:13:02', '2023-12-17 22:15:24'),
(11, 'Comilla', '111', '2023-12-17 22:16:01', '2023-12-17 22:16:01'),
(12, 'Noakhali', '112', '2023-12-17 22:16:39', '2023-12-17 22:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `company_city` text DEFAULT NULL,
  `company_state` text DEFAULT NULL,
  `company_pin` text DEFAULT NULL,
  `company_country` text DEFAULT NULL,
  `logo_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `couriar_information`
--

CREATE TABLE `couriar_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_branch_id` int(11) DEFAULT NULL,
  `tracking_no` varchar(255) DEFAULT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_phone` varchar(255) DEFAULT NULL,
  `sender_address` text DEFAULT NULL,
  `sender_city` varchar(255) DEFAULT NULL,
  `sender_state` varchar(255) DEFAULT NULL,
  `sender_pin` varchar(255) DEFAULT NULL,
  `sender_country` varchar(255) DEFAULT NULL,
  `sender_branch_staff_id` varchar(255) DEFAULT NULL,
  `receiver_name` varchar(255) DEFAULT NULL,
  `receiver_email` varchar(255) DEFAULT NULL,
  `receiver_phone` varchar(255) DEFAULT NULL,
  `receiver_address` text DEFAULT NULL,
  `receiver_city` varchar(255) DEFAULT NULL,
  `receiver_state` varchar(255) DEFAULT NULL,
  `receiver_pin` varchar(255) DEFAULT NULL,
  `receiver_country` varchar(255) DEFAULT NULL,
  `receiver_branch_staff_id` varchar(255) DEFAULT NULL,
  `couriar_description` text DEFAULT NULL,
  `payment_receiver_id` varchar(255) DEFAULT NULL,
  `payment_branch_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_method_name` varchar(255) DEFAULT NULL,
  `payment_transaction_id` varchar(255) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_balance` decimal(8,2) DEFAULT NULL,
  `payment_transaction_image` varchar(255) DEFAULT NULL,
  `payment_note` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `from_location` varchar(255) DEFAULT NULL,
  `to_location` varchar(255) DEFAULT NULL,
  `package_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `header_title` varchar(255) DEFAULT NULL,
  `header_subtitle` varchar(255) DEFAULT NULL,
  `testimonial_title` varchar(255) DEFAULT NULL,
  `search_courier_title` varchar(255) DEFAULT NULL,
  `search_courier_details` text DEFAULT NULL,
  `about_keyword` varchar(255) DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_details` text DEFAULT NULL,
  `gallery_title` varchar(255) DEFAULT NULL,
  `gallery_details` text DEFAULT NULL,
  `service_sitle` varchar(255) DEFAULT NULL,
  `service_details` text DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `contact_title` varchar(255) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `color_code` varchar(255) DEFAULT NULL,
  `email_notification` tinyint(1) NOT NULL,
  `email_template` text DEFAULT NULL,
  `sms_api` varchar(255) DEFAULT NULL,
  `departure_courier` int(11) DEFAULT NULL,
  `upcoming_courier` int(11) DEFAULT NULL,
  `total_deliver` int(11) DEFAULT NULL,
  `sms_notification` tinyint(1) NOT NULL,
  `registration_verification` tinyint(1) NOT NULL,
  `email_verification` tinyint(1) NOT NULL,
  `Sms_Verification` tinyint(1) NOT NULL,
  `base_currency` varchar(255) DEFAULT NULL,
  `base_currency_symbol` varchar(255) DEFAULT NULL,
  `Created_by` bigint(20) UNSIGNED NOT NULL,
  `Updated_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
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
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_11_09_062426_create_companies_table', 1),
(18, '2023_11_09_062453_create_branches_table', 1),
(19, '2023_11_09_062453_create_cities_table', 1),
(20, '2023_11_09_062453_create_prices_table', 1),
(21, '2023_11_09_062453_create_shipments_table', 1),
(22, '2023_11_09_070019_create_assets_table', 1),
(24, '2023_11_12_034411_create_users_table', 1),
(25, '2023_11_12_043129_create_permissions_table', 1),
(26, '2023_11_12_060037_create_admin_users_table', 1),
(27, '2023_11_19_034901_couriar_information_table', 1),
(28, '2023_11_19_034901_create_general_settings_table', 1),
(29, '2023_12_04_065622_create_messages_table', 1),
(30, '2023_12_04_065622_create_ordertracks_table', 1),
(33, '2023_11_11_034205_create_roles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ordertracks`
--

CREATE TABLE `ordertracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `shipment_id` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to_city` bigint(20) UNSIGNED NOT NULL,
  `from_city` bigint(20) UNSIGNED NOT NULL,
  `base_price` double DEFAULT NULL,
  `unit_size` varchar(255) DEFAULT NULL,
  `unit_price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `to_city`, `from_city`, `base_price`, `unit_size`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 50, '0-5', 5.00, '2023-12-17 22:17:05', '2023-12-17 22:17:05'),
(2, 1, 1, 48, '6-20', 4.50, '2023-12-17 22:17:42', '2023-12-17 22:17:42'),
(3, 1, 1, 40, '21-50', 4.00, '2023-12-17 22:18:16', '2023-12-17 22:18:16'),
(4, 1, 1, 38, '51-500', 3.80, '2023-12-17 22:18:55', '2023-12-17 22:26:18'),
(5, 2, 1, 50, '0-5', 5.00, '2023-12-17 22:20:46', '2023-12-17 22:20:46'),
(6, 2, 1, 48, '6-20', 4.50, '2023-12-17 22:24:39', '2023-12-17 22:24:39'),
(7, 2, 1, 40, '21-50', 4.00, '2023-12-17 22:25:36', '2023-12-17 22:25:36'),
(8, 2, 1, 38, '51-500', 3.80, '2023-12-17 22:26:56', '2023-12-17 22:26:56'),
(9, 11, 1, 50, '0-5', 5.00, '2023-12-17 22:27:20', '2023-12-17 22:27:20'),
(10, 11, 1, 48, '6-20', 4.50, '2023-12-17 22:27:49', '2023-12-17 22:27:49'),
(11, 11, 1, 40, '21-50', 4.00, '2023-12-17 22:28:20', '2023-12-17 22:28:20'),
(12, 11, 1, 38, '21-500', 3.80, '2023-12-17 22:28:47', '2023-12-17 22:28:47'),
(13, 3, 1, 50, '0-5', 5.00, '2023-12-17 22:29:07', '2023-12-17 22:29:07'),
(14, 3, 1, 48, '6-20', 4.50, '2023-12-17 22:29:31', '2023-12-17 22:30:11'),
(15, 3, 1, 40, '21-50', 4.00, '2023-12-17 22:30:44', '2023-12-17 22:30:44'),
(16, 3, 1, 38, '21-500', 3.80, '2023-12-17 22:31:06', '2023-12-17 22:31:06'),
(17, 4, 1, 50, '0-5', 5.00, '2023-12-17 22:31:33', '2023-12-17 22:31:33'),
(18, 4, 1, 48, '6-20', 4.50, '2023-12-17 22:32:01', '2023-12-17 22:32:01'),
(19, 4, 1, 40, '21-50', 4.00, '2023-12-17 22:32:29', '2023-12-17 22:32:29'),
(20, 4, 1, 38, '21-500', 3.80, '2023-12-17 22:32:46', '2023-12-17 22:32:46'),
(21, 5, 1, 50, '0-5', 5.00, '2023-12-17 22:33:05', '2023-12-17 22:33:05'),
(22, 5, 1, 48, '6-20', 4.50, '2023-12-17 22:33:31', '2023-12-17 22:33:31'),
(23, 5, 1, 40, '21-50', 4.00, '2023-12-17 22:34:02', '2023-12-17 22:34:02'),
(24, 5, 1, 38, '51-500', 3.80, '2023-12-17 22:34:36', '2023-12-17 22:34:36'),
(25, 6, 1, 50, '0-5', 5.00, '2023-12-17 22:34:55', '2023-12-17 22:34:55'),
(26, 6, 1, 48, '6-20', 4.50, '2023-12-17 22:35:15', '2023-12-17 22:35:15'),
(27, 6, 1, 40, '21-50', 4.00, '2023-12-17 22:35:33', '2023-12-17 22:35:33'),
(28, 6, 1, 38, '51-500', 3.80, '2023-12-17 22:35:58', '2023-12-17 22:35:58'),
(29, 7, 1, 50, '0-5', 5.00, '2023-12-17 22:36:17', '2023-12-17 22:36:17'),
(30, 7, 1, 48, '6-20', 4.50, '2023-12-17 22:36:35', '2023-12-17 22:36:35'),
(31, 7, 1, 48, '6-20', 4.50, '2023-12-17 22:37:18', '2023-12-17 22:37:18'),
(32, 7, 1, 40, '21-50', 4.00, '2023-12-17 22:37:46', '2023-12-17 22:37:46'),
(33, 7, 1, 38, '21-500', 3.80, '2023-12-17 22:38:09', '2023-12-17 22:38:09'),
(34, 8, 1, 50, '0-5', 5.00, '2023-12-17 22:38:31', '2023-12-17 22:38:31'),
(35, 8, 1, 48, '6-20', 4.50, '2023-12-17 22:38:45', '2023-12-17 22:38:45'),
(36, 8, 1, 40, '21-50', 4.00, '2023-12-17 22:39:10', '2023-12-17 22:39:10'),
(37, 8, 1, 38, '21-500', 3.80, '2023-12-17 22:39:29', '2023-12-17 22:39:29'),
(38, 9, 1, 50, '0-5', 5.00, '2023-12-17 22:39:49', '2023-12-17 22:39:49'),
(39, 9, 1, 48, '6-20', 4.50, '2023-12-17 22:40:11', '2023-12-17 22:40:11'),
(40, 9, 1, 40, '21-50', 4.00, '2023-12-17 22:40:31', '2023-12-17 22:40:31'),
(41, 9, 1, 38, '21-500', 3.80, '2023-12-17 22:40:45', '2023-12-17 22:40:45'),
(42, 10, 1, 50, '0-5', 5.00, '2023-12-17 22:41:04', '2023-12-17 22:41:04'),
(43, 10, 1, 48, '6-20', 4.50, '2023-12-17 22:41:22', '2023-12-17 22:41:22'),
(44, 10, 1, 40, '21-50', 4.00, '2023-12-17 22:41:44', '2023-12-17 22:42:18'),
(45, 10, 1, 38, '21-500', 3.80, '2023-12-17 22:42:45', '2023-12-17 22:42:45'),
(46, 11, 1, 50, '0-5', 5.00, '2023-12-17 22:43:00', '2023-12-17 22:43:00'),
(47, 11, 1, 48, '6-20', 4.50, '2023-12-17 22:43:18', '2023-12-17 22:43:18'),
(48, 11, 1, 40, '21-50', 4.00, '2023-12-17 22:43:35', '2023-12-17 22:43:35'),
(49, 11, 1, 38, '21-500', 3.80, '2023-12-17 22:43:48', '2023-12-17 22:43:48'),
(50, 12, 1, 50, '0-5', 5.00, '2023-12-17 22:44:05', '2023-12-17 22:44:05'),
(51, 12, 1, 48, '6-20', 4.50, '2023-12-17 22:44:19', '2023-12-17 22:44:19'),
(52, 12, 1, 40, '21-50', 4.00, '2023-12-17 22:44:36', '2023-12-17 22:44:36'),
(53, 12, 1, 38, '21-500', 3.80, '2023-12-17 22:44:52', '2023-12-17 22:44:52'),
(54, 1, 2, 50, '0-5', 5.00, '2023-12-17 22:46:12', '2023-12-17 22:46:12'),
(55, 1, 2, 48, '6-20', 4.50, '2023-12-17 22:46:26', '2023-12-17 22:46:26'),
(56, 1, 2, 40, '21-50', 4.00, '2023-12-17 22:46:43', '2023-12-17 22:46:43'),
(57, 1, 2, 38, '21-500', 3.80, '2023-12-17 22:46:57', '2023-12-17 22:46:57'),
(58, 2, 2, 50, '0-5', 5.00, '2023-12-17 22:47:22', '2023-12-17 22:47:22'),
(59, 2, 2, 48, '6-20', 4.50, '2023-12-17 22:47:37', '2023-12-17 22:47:37'),
(60, 2, 2, 40, '21-50', 4.00, '2023-12-17 22:47:50', '2023-12-17 22:47:50'),
(61, 2, 2, 38, '21-500', 3.80, '2023-12-17 22:48:09', '2023-12-17 22:48:09'),
(62, 3, 2, 50, '0-5', 5.00, '2023-12-17 22:48:25', '2023-12-17 22:48:25'),
(63, 3, 2, 48, '6-20', 4.50, '2023-12-17 22:48:43', '2023-12-17 22:48:43'),
(64, 3, 2, 40, '21-50', 4.00, '2023-12-17 22:49:00', '2023-12-17 22:49:00'),
(65, 3, 2, 38, '21-500', 3.80, '2023-12-17 22:49:19', '2023-12-17 22:49:19'),
(66, 4, 2, 50, '0-5', 5.00, '2023-12-17 22:49:33', '2023-12-17 22:49:33'),
(67, 3, 2, 48, '6-20', 4.50, '2023-12-17 22:49:48', '2023-12-17 22:49:48'),
(68, 4, 2, 40, '21-50', 4.00, '2023-12-17 22:50:02', '2023-12-17 22:50:02'),
(69, 4, 2, 38, '21-500', 3.80, '2023-12-17 22:50:15', '2023-12-17 22:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-12-18 00:00:09', NULL),
(2, 'Admin', 'admin', '2023-12-18 00:00:09', NULL),
(3, 'Deliver Manager', 'delivermanager', '2023-12-18 00:00:09', NULL),
(4, 'Delivery Man', 'deliveryman', '2023-12-18 00:00:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `from_city` bigint(20) UNSIGNED NOT NULL,
  `to_city` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_weight` decimal(8,2) DEFAULT NULL,
  `receiver_address` varchar(255) DEFAULT NULL,
  `sender_address` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `base_price` decimal(10,2) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `shipping_cost` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=Pending,1=picked up,2=delivered',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `invoice_no`, `from_city`, `to_city`, `product_name`, `product_description`, `product_weight`, `receiver_address`, `sender_address`, `contact_name`, `contact_number`, `base_price`, `unit_price`, `shipping_cost`, `total_cost`, `user_id`, `customer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '120231218', 1, 2, 'Cloths', 'Some of Cloths', 5.00, '2 no Gate', 'Oshkain, Village+Post- Oshkain', 'MOJAHID', '01814415108', 50.00, 5.00, 25.00, 55.00, 4, 1, 1, '2023-12-17 23:01:43', '2023-12-18 01:33:26'),
(2, '220231218', 1, 1, 'Stationary', 'Some of Stationary', 40.00, 'Bahaddarhat', 'Anwara', 'Kaiser', '015545455', 40.00, 4.00, 160.00, 44.00, 3, 1, 0, '2023-12-17 23:03:32', '2023-12-18 05:37:00'),
(3, '320231218', 1, 3, 'Panjabi', 'Some of Panjabies', 3.00, 'Rupgong', 'Halishohor', 'Ibrahim', '01817555', 50.00, 5.00, 15.00, 55.00, 2, 4, 1, '2023-12-18 04:25:51', '2023-12-18 04:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) NOT NULL,
  `bank_account_no` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `brunch_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `contact_no`, `bank_account_no`, `bank_name`, `bank_branch_name`, `password`, `image`, `company_id`, `brunch_id`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Noman Uddin', 'Sholoshohor', 'noman@gmail.com', '01815', NULL, NULL, NULL, '$2y$12$Iy5X8D/gJejtcfPobkjl7OsBF56OpoaDxCF29myMpJ5a2DAN0vgF2', '6461702884349.jpg', NULL, NULL, 0, NULL, '2023-12-17 21:39:33', '2023-12-18 04:14:18'),
(2, 'Safayat', NULL, 'safayat@gmail.com', '01816', NULL, NULL, NULL, '$2y$12$qhh7AG/x9d8Pxwc.YomQG.21Vg1NNNf9mYTMrT6dZMfSGfh2pXG5y', NULL, NULL, NULL, 1, NULL, '2023-12-17 21:56:27', '2023-12-17 21:56:27'),
(3, 'Kamal', NULL, 'kamal@gmail.com', '01817', NULL, NULL, NULL, '$2y$12$lDy0n0p/VIxYZUQkDozkxuVjVx.lAEyTkK3kqLkMhJ9seCkyBXCYi', NULL, NULL, NULL, 1, NULL, '2023-12-17 21:56:49', '2023-12-17 21:56:49'),
(4, 'Ibrahim', NULL, 'ibrahim@gmail.com', '01813', NULL, NULL, NULL, '$2y$12$b0tNMFvAoE5CVaiFlWXnAOBZ6X2ocbJfnJzRIYPN4.6WyipWQwNTO', NULL, NULL, NULL, 1, NULL, '2023-12-18 04:23:00', '2023-12-18 04:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_contact_no_unique` (`contact_no`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`),
  ADD KEY `admin_users_role_id_index` (`role_id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branches_branch_email_unique` (`branch_email`),
  ADD UNIQUE KEY `branches_branch_phone_unique` (`branch_phone`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couriar_information`
--
ALTER TABLE `couriar_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `couriar_information_sender_email_unique` (`sender_email`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `messages_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertracks`
--
ALTER TABLE `ordertracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_to_city_index` (`to_city`),
  ADD KEY `prices_from_city_index` (`from_city`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_from_city_index` (`from_city`),
  ADD KEY `shipments_to_city_index` (`to_city`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_unique` (`contact_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `couriar_information`
--
ALTER TABLE `couriar_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ordertracks`
--
ALTER TABLE `ordertracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD CONSTRAINT `admin_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_from_city_foreign` FOREIGN KEY (`from_city`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prices_to_city_foreign` FOREIGN KEY (`to_city`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_from_city_foreign` FOREIGN KEY (`from_city`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipments_to_city_foreign` FOREIGN KEY (`to_city`) REFERENCES `cities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
