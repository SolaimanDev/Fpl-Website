-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 08:09 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mailuses`
--

CREATE TABLE `mailuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailuses`
--

INSERT INTO `mailuses` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Solaiman Ahmed', 'kaushikrahman@gmail.com', 'Hello', 'Testing', '2019-02-18 01:02:40', '2019-02-18 01:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'পোষাকরীতি', 'solaiman. ahmed', '2019-02-17 00:49:09', '2019-02-17 00:49:09'),
(2, 'পাঠ পরিকল্পনা', 'solaiman-ahmed', '2019-02-17 00:58:27', '2019-02-17 00:58:27'),
(3, 'পরিচিতি', 'solaiman-ahmed', '2019-02-17 01:41:47', '2019-02-17 01:41:47'),
(4, 'Services', 'services', '2019-02-17 01:45:22', '2019-02-19 03:00:55'),
(5, 'অর্জন ও সাফল্য', 'solaiman-ahmed', '2019-02-17 01:46:55', '2019-02-17 01:46:55'),
(6, 'একাডেমিক', 'aca-demy', '2019-02-19 02:44:44', '2019-02-19 02:44:44'),
(7, 'Privacy Policy', 'solaiman-ahmed', '2019-02-19 04:05:01', '2019-02-19 04:05:01');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_02_16_114417_create_settings_table', 1),
(8, '2019_02_16_175742_create_menus_table', 1),
(9, '2019_02_17_094123_create_submenus_table', 2),
(10, '2019_02_18_055321_create_mailuses_table', 2),
(11, '2019_02_18_084028_create_sliders_table', 3);

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `app_title`, `app_email`, `phone`, `mobile`, `facebook_url`, `logo`, `address`, `map`, `created_at`, `updated_at`) VALUES
(1, 'New Uttara', 'Welcome TO New Uttara Website', 'newuttara@gmail.com', '0168**********', '0168**********', 'facebook.com', 'E:\\xampp\\tmp\\php24EA.tmp', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3064.617936167395!2d89.25731748684423!3d24.014646241571455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe84cf5f3d909f%3A0x3bc0fe17ddc50211!2sPabna+Railway+Station!5e0!3m2!1sen!2sbd!4v1550474561907\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, '2019-02-18 01:23:15'),
(2, 'Comapnay Name', 'Welcome TO New Uttara Website', 'newuttara@gmail.com', '0168**********888', '0168**********555', 'facebook.com', 'E:\\xampp\\tmp\\phpB07F.tmp', 'Dhaka', 'hgahsgihasdghasgas', '2019-02-17 04:21:05', '2019-02-17 04:21:05'),
(3, 'Comapnay Name', 'Welcome TO New Uttara Website', 'newuttara@gmail.com', '0168**********888', '0168**********555', 'facebook.com', 'E:\\xampp\\tmp\\php7B7.tmp', 'Dhaka', 'hgahsgihasdghasgas', '2019-02-17 04:43:19', '2019-02-17 04:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_num` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_image`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Slider Section', 'banner (1).jpg', 1, 1, '2019-02-19 00:47:51', '2019-02-19 00:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `submenu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `submenu_name`, `submenu_slug`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'solaiman', 'solai-man', 3, '2019-02-19 23:21:29', '2019-02-19 23:21:29'),
(2, 'Academic', 'acade-my', 5, '2019-02-19 23:42:49', '2019-02-19 23:42:49'),
(3, 'Academic', 'acade-my', 5, '2019-02-19 23:43:05', '2019-02-19 23:43:05'),
(4, 'praivacy', 'privacy-policy', 7, '2019-02-19 23:46:30', '2019-02-19 23:46:30');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Solaiman Ahmed', 'admin@gmail.com', NULL, '$2y$10$gYr0ck/.vAUyQLbtiP/VF.lwxPSjq36n.a0sE9F.U8tFCBzskQVqC', NULL, '2019-02-17 00:31:22', '2019-02-17 00:31:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mailuses`
--
ALTER TABLE `mailuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
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
-- AUTO_INCREMENT for table `mailuses`
--
ALTER TABLE `mailuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
