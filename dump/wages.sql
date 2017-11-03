-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2017 at 04:51 PM
-- Server version: 5.7.20-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wages`
--

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
(3, '2017_10_16_134849_create_wages_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Djordje Maric', 'maric989@gmail.com', '$2y$10$N96Jz90jyZIW5c03AbtP1.RAAl13baqlooO0NaoJKi0yFdCB5NRN.', NULL, '2017-10-16 11:51:26', '2017-10-16 11:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `wages`
--

CREATE TABLE `wages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tips` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wages`
--

INSERT INTO `wages` (`id`, `user_id`, `tips`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1500, NULL, '2017-10-16 13:55:38', '2017-10-16 13:55:39'),
(6, 1, 12222, NULL, '2017-10-16 12:24:59', '2017-10-16 12:24:59'),
(7, 1, 4000, NULL, '2017-10-16 12:25:54', '2017-10-16 12:25:54'),
(8, 1, 888, NULL, '2017-10-16 12:31:08', '2017-10-16 12:31:08'),
(9, 1, 90, NULL, '2017-10-16 12:31:19', '2017-10-16 12:31:19'),
(10, 1, 5000, NULL, '2017-10-16 12:31:38', '2017-10-16 12:31:38'),
(11, 1, 5555, NULL, '2017-10-16 12:31:48', '2017-10-16 12:31:48'),
(12, 1, 3344, NULL, '2017-10-14 22:00:00', '2017-10-16 12:32:44'),
(13, 1, 5000, NULL, '2017-11-02 23:00:00', '2017-11-03 10:11:58'),
(14, 1, 7200, NULL, '2017-11-01 23:00:00', '2017-11-03 10:29:39'),
(15, 1, 9000, NULL, '2016-12-31 23:00:00', '2017-11-03 10:54:42'),
(16, 1, 48000, NULL, '2017-02-02 23:00:00', '2017-11-03 10:54:52'),
(17, 1, 14000, NULL, '2017-03-02 23:00:00', '2017-11-03 10:55:02'),
(18, 1, 27000, NULL, '2017-05-07 22:00:00', '2017-11-03 10:55:13'),
(19, 1, 54000, NULL, '2017-06-08 22:00:00', '2017-11-03 10:55:28'),
(20, 1, 34522, NULL, '2017-06-15 22:00:00', '2017-11-03 10:55:37'),
(21, 1, 18545, NULL, '2017-04-06 22:00:00', '2017-11-03 11:01:53'),
(22, 1, 56789, NULL, '2017-07-14 22:00:00', '2017-11-03 11:02:22'),
(23, 1, 56210, NULL, '2017-08-15 22:00:00', '2017-11-03 11:02:31'),
(24, 1, 42980, NULL, '2017-09-15 22:00:00', '2017-11-03 11:02:48'),
(25, 1, 5100, NULL, '2017-11-16 23:00:00', '2017-11-03 11:31:08'),
(26, 1, 2400, NULL, '2017-11-01 23:00:00', '2017-11-03 12:15:57'),
(27, 1, 7000, NULL, '2017-11-01 23:00:00', '2017-11-03 13:16:09'),
(28, 1, 23444, NULL, '2017-10-30 23:00:00', '2017-11-03 13:16:43');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wages`
--
ALTER TABLE `wages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wages`
--
ALTER TABLE `wages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
