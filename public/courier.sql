-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 08:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
(1, 'Mojahid', 'mojahidjouel@yahoo.com', '01814415108', 1, '$2y$12$umtrEe1X/MKRztX9Wf9S7eLpseXZcunZ1Tx7vC7ginpnVuSrJaTxC', '9561701660191.jpg', NULL, NULL, 1, 1, NULL, NULL, NULL, '2023-12-03 21:21:04', '2023-12-03 21:23:11', NULL);

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
(1, 'Chattogram', '101', '2023-12-03 21:21:55', '2023-12-03 21:21:55'),
(2, 'Dhaka', '102', '2023-12-03 21:22:08', '2023-12-03 21:22:08'),
(3, 'Comilla', '103', '2023-12-03 21:22:19', '2023-12-03 21:22:19'),
(4, 'Rajshai', '104', '2023-12-03 21:22:31', '2023-12-03 21:22:31'),
(5, 'Sylhet', '105', '2023-12-03 21:22:44', '2023-12-03 21:22:44'),
(6, 'Borishal', '106', '2023-12-03 21:56:50', '2023-12-03 21:56:50'),
(7, 'Dinajpur', '107', '2023-12-03 21:57:09', '2023-12-03 21:57:09'),
(8, 'Rongpur', '108', '2023-12-03 21:57:22', '2023-12-03 21:57:22');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_09_062426_create_companies_table', 1),
(3, '2023_11_09_062453_create_branches_table', 1),
(4, '2023_11_09_062453_create_cities_table', 1),
(5, '2023_11_09_062453_create_prices_table', 1),
(6, '2023_11_09_062453_create_shipments_table', 1),
(7, '2023_11_09_070019_create_assets_table', 1),
(8, '2023_11_11_034205_create_roles_table', 1),
(9, '2023_11_12_034411_create_users_table', 1),
(10, '2023_11_12_043129_create_permissions_table', 1),
(11, '2023_11_12_060037_create_admin_users_table', 1),
(12, '2023_11_19_034901_couriar_information_table', 1),
(13, '2023_11_19_034901_create_general_settings_table', 1),
(14, '2023_12_04_065622_create_ordertracks_table', 2);

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
(3, 1, 1, 50, '0-5', '5.00', '2023-12-03 21:59:50', '2023-12-03 21:59:50'),
(4, 1, 2, 50, '0-5', '5.00', '2023-12-03 22:00:16', '2023-12-03 22:00:16'),
(5, 2, 1, 50, '0-5', '5.00', '2023-12-03 22:00:31', '2023-12-03 22:00:31');

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
(1, 'Super Admin', 'superadmin', '2023-12-03 21:20:15', NULL),
(2, 'Admin', 'admin', '2023-12-03 21:20:15', NULL),
(3, 'Sales Manager', 'salesmanager', '2023-12-03 21:20:15', NULL),
(4, 'Sales Man', 'salesman', '2023-12-03 21:20:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `unit_size` decimal(10,2) DEFAULT NULL,
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

INSERT INTO `shipments` (`id`, `from_city`, `to_city`, `product_name`, `product_description`, `product_weight`, `receiver_address`, `sender_address`, `contact_name`, `contact_number`, `base_price`, `unit_size`, `shipping_cost`, `total_cost`, `user_id`, `customer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Cloths', 'Some of Cloths', '5.00', 'def', 'abc', 'noman', '01815', '50.00', NULL, '25.00', '55.00', NULL, 1, 2, '2023-12-04 00:08:13', '2023-12-04 00:48:14');

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
(1, 'Noman', NULL, 'noman@gmail.com', '01815', NULL, NULL, NULL, '$2y$12$D29FCnSWD.vcEvscuHcuD.EWyVHOqgNmCoyj9RTpa9X.ekQQDuDfS', NULL, NULL, NULL, 1, NULL, '2023-12-03 21:29:35', '2023-12-03 21:29:35');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ordertracks`
--
ALTER TABLE `ordertracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
