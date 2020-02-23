-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 01:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `firstname`, `lastname`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Joseph', 'Ragadio', '09171477875', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Admin', 'admin', 'Admin', 'admin@argon.com', '2020-02-15 10:15:47', '$2y$10$u7EWtSPpNmUGKnbnneZp4OVPlC8HqwtM7ThMfdgpip8OBMpByj.nS', '4ew2wrFChmTDcMXoPgRw5eClFJSM4OiISfydotqJ89KaWRCd6TbQHEWli61T', '2020-02-15 10:15:47', '2020-02-15 10:15:47'),
(7, 'Eunil', 'prog', 'Client', 'jheehann2598@gmail.com', NULL, '$2y$10$heHGoqeVB40EfvNxI/Za3eKkGTFweRE3qsxBCq1fBRuNEVscR4oMS', NULL, '2020-02-15 10:45:06', '2020-02-15 10:45:06'),
(8, 'bubuyug', 'ragadio', 'Technician', 'asap@gmail.com', NULL, '$2y$10$c6vDo0lmrmaUmkYfCiogPeWLZdCXVB506kbHeIXVR1yV34CBjG0nK', NULL, '2020-02-15 10:57:26', '2020-02-15 10:57:26'),
(9, 'stata', '123qweq', 'Secretary', 'asap@yahoo.com', NULL, '$2y$10$OcFa1ytQgO0Flv07ZUzcweKNWv1BRT7k9XSifcQd0yEIEMw7FfXhO', NULL, '2020-02-15 11:00:45', '2020-02-15 11:00:45'),
(11, 'EUNIL', 'DUTERTE', 'Client', 'neilduterte@yahoo.com', NULL, '$2y$10$/m882zbVPX.tmGW1YADTzeRbPz8GyxItFg6OVXyz4pK5Zjqm3dVou', NULL, '2020-02-15 18:13:48', '2020-02-15 18:13:48'),
(12, 'Jasmine Alyssa', 'Ragadio', 'Client', 'jasmine_alyssa96@yahoo.com', NULL, '$2y$10$ARWfNb7Hb92cRgJoyvlPCOn66ZnuF220RakragbK1k7tStrnVR2DO', NULL, '2020-02-16 15:09:13', '2020-02-16 15:09:13'),
(16, 'Joseph', 'Ragadio', 'Client', 'bubuy.jpeg@gmail.com', NULL, '$2y$10$D5g9vDM3Vft.Iv44DIu.4.0zHVdI0k27rEU4xH3DFN6qK/uMwf3mW', NULL, '2020-02-19 08:10:19', '2020-02-19 08:10:19'),
(17, 'bubuy', 'gwapo', 'Client', 'bubuy.jpeg@yahoo.com', NULL, '$2y$10$dXNw5JTxgIS795e8mik28OEXgdv7hMM6kMtR7AWEUPjE5Z4Bwhcd2', NULL, '2020-02-19 08:12:17', '2020-02-19 08:12:17');

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
-- Indexes for table `technician`
--
ALTER TABLE `technician`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
