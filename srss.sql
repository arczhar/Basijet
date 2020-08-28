-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 08:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srss`
--

-- --------------------------------------------------------

--
-- Table structure for table `approves`
--

CREATE TABLE `approves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `completions`
--

CREATE TABLE `completions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2020_03_04_005218_create_requests_table', 1),
(4, '2020_03_04_005250_create_approves_table', 1),
(5, '2020_03_04_005302_create_completions_table', 1),
(6, '2020_03_04_005316_create_open_disputes_table', 1),
(7, '2020_03_04_005328_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `open_disputes`
--

CREATE TABLE `open_disputes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `rmno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertynumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `date`, `rmno`, `college`, `equipment`, `propertynumber`, `quantity`, `service`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-03-14', '214', 'CTE', 'Aircon-Samsung', '4355', 1, 'repair', 'Pending', '2020-03-14 06:50:37', '2020-03-14 06:50:37'),
(2, '2020-08-13', '23232', 'CET', 'eeeeeeeeee', '432434', 7, 'repair', 'Pending', '2020-08-03 16:34:17', '2020-08-03 16:34:17'),
(3, '2020-08-06', '55555', 'CLA', 'Aircon-Samsung', '23213213', 2, 'repair', 'Pending', '2020-08-03 16:59:09', '2020-08-03 16:59:09'),
(4, '2020-08-06', 'RM 13', 'CAIS', 'Aircon-Samsung', 'E-15-2012', 2, 'cleaning', 'Pending', '2020-08-03 22:22:07', '2020-08-03 22:22:07'),
(5, '2020-08-07', '343333', 'CTE', 'Aircon-Samsungdfds', '43555', 6, 'repair', 'Pending', '2020-08-03 22:23:07', '2020-08-03 22:23:07'),
(6, '2020-08-07', '23', 'CET', 'gbfvdgbfdg', '43243433', 3, 'repair', 'Pending', '2020-08-03 22:24:06', '2020-08-03 22:24:06'),
(7, '2020-08-14', '232', 'fdsdfdf', 'dsadsadasd', 'dsasdasdas', 2, 'repair', 'Pending', '2020-08-03 22:24:36', '2020-08-03 22:24:36'),
(8, '2020-08-07', '23232323', 'sdsadasdasdasdasd', 'dasdasdasdsadsadsadsadasdasdasdasdasdasd', 'sadsad', 1, 'wiring', 'Pending', '2020-08-03 22:24:58', '2020-08-03 22:24:58'),
(9, '2020-08-27', '432432', 'fdsfsdf', 'dfsdfsdf', 'dsfdsfsdf', 2, 'cleaning', 'Pending', '2020-08-03 22:25:37', '2020-08-03 22:25:37'),
(10, '2020-08-20', '23234', 'sdasdas', 'Aircon-Samsungdfdsdsadasd', '432434sadasdsa', 4, 'cleaning', 'Pending', '2020-08-03 22:26:01', '2020-08-03 22:26:01'),
(11, '2020-08-12', '234324', 'dsffdsfdsf', 'hgjhgjhgj', 'fgdfg drgd gv', 4, 'cleaning', 'Pending', '2020-08-03 22:26:41', '2020-08-03 22:26:41'),
(12, '2020-08-08', '324', 'ffgf', 'fgdgdfg', '434gfg', 4, 'repair', 'Pending', '2020-08-03 22:27:02', '2020-08-03 22:27:02'),
(13, '2020-08-13', '343', 'gddfdf', 'fdhfgjhgf', 'jgfhjhgjhgj', 1, 'wiring', 'Pending', '2020-08-04 20:25:54', '2020-08-04 20:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Client',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@argon.com', 'Admin', '2020-03-14 06:52:21', '$2y$10$t/XUF0UQKTGChqSzFmrSUuVYUYfwBqeLFahuzzyKDUAjzrxOye1je', NULL, '2020-03-14 06:52:22', '2020-03-14 06:52:22'),
(2, 'Bubuy', 'Ragadio', 'bubuy@gmail.com', 'Client', '2020-03-14 06:52:22', '$2y$10$VUacvIBm41zu8c0wTCUkXuJuv.6ENBDYOUj8tArxuY.Ht8A5SRdEa', NULL, '2020-03-14 06:52:22', '2020-03-14 06:52:22'),
(4, 'Arczhar', 'Mummuh', 'arczhar@gmai.com', 'Client', NULL, '$2y$10$qwnnqPcjvojSH6gmwRdQIOyYV9EA0bhWybuCtIAv4E5n/4mxxKLkm', NULL, '2020-08-03 04:54:49', '2020-08-03 04:54:49'),
(5, 'Jhet', 'Arczhar', 'jhet@gmali.com', 'Client', NULL, '$2y$10$h4brEBt8KT8MldyL/j8GCOUMiMP.CWULoUWGAXb9.ouifJ.SZ7JyK', NULL, '2020-08-03 22:28:37', '2020-08-03 22:28:37'),
(6, 'WInd', 'Ranger', 'wind@gmail.com', 'Secretary', NULL, '$2y$10$l7xJ.9WHhMd4U1Iu/1KGmeel/SDSACj8mAYI.2lTdzLlKCa4Pujqi', NULL, '2020-08-03 22:29:16', '2020-08-03 22:29:16'),
(7, 'Mirana', 'Moon', 'mirana@gmail.com', 'Technician', NULL, '$2y$10$6ORsxn0WkOULDD/Mybjxa.12h3kvKf8oFCV7qu13GZi/uMGGL9w32', NULL, '2020-08-03 22:29:46', '2020-08-03 22:29:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approves`
--
ALTER TABLE `approves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completions`
--
ALTER TABLE `completions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `open_disputes`
--
ALTER TABLE `open_disputes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
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
-- AUTO_INCREMENT for table `approves`
--
ALTER TABLE `approves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `completions`
--
ALTER TABLE `completions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `open_disputes`
--
ALTER TABLE `open_disputes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
