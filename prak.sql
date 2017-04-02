-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 03:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nip`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(8, 'bangs', 'K002', 'jalanin aja dulu', 1, '2017-03-15 22:30:27', '2017-03-25 00:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_matakuliyah`
--

CREATE TABLE `dosen_matakuliyah` (
  `id` int(10) UNSIGNED NOT NULL,
  `Dosen_id` int(10) UNSIGNED NOT NULL,
  `Matakuliyah_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen_matakuliyah`
--

INSERT INTO `dosen_matakuliyah` (`id`, `Dosen_id`, `Matakuliyah_id`, `created_at`, `updated_at`) VALUES
(23, 8, 2, '2017-03-15 23:20:54', '2017-03-15 23:20:54'),
(24, 8, 2, '2017-03-15 23:21:32', '2017-03-15 23:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_matakuliyah`
--

CREATE TABLE `jadwal_matakuliyah` (
  `id` int(10) UNSIGNED NOT NULL,
  `Mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `Ruangan_id` int(10) UNSIGNED NOT NULL,
  `Dosen_Matakuliyah_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jadwal_matakuliyah`
--

INSERT INTO `jadwal_matakuliyah` (`id`, `Mahasiswa_id`, `Ruangan_id`, `Dosen_Matakuliyah_id`, `created_at`, `updated_at`) VALUES
(1, 16, 1, 23, '2017-03-15 23:28:50', '2017-03-15 23:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nim` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(16, 'bams', 'K0001', 'jalan jalan men', 1, '2017-03-15 22:32:31', '2017-03-15 22:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliyah`
--

CREATE TABLE `matakuliyah` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matakuliyah`
--

INSERT INTO `matakuliyah` (`id`, `title`, `keterang`, `created_at`, `updated_at`) VALUES
(2, 'Biologi', 'Wajib', '2017-03-15 22:25:15', '2017-03-24 23:57:21'),
(3, 'Fisiknya', 'wajib', '2017-03-24 23:02:22', '2017-03-24 23:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_03_09_011346_buat_table_pengguna', 1),
('2017_03_10_094925_Buat_table_Mahasiswa', 2),
('2017_03_10_100126_Buat_table_Dosen', 3),
('2017_03_10_103820_Buat_table_Ruangan', 4),
('2017_03_10_104049_Buat_table_Matakuliyah', 5),
('2017_03_10_104342_Buat_table_Dosen_Matakuliyah', 6),
('2017_03_10_105028_Buat_table_Jadwal_Matakuliyah', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `Username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bambangpra71@gmail.com', 'udin56', NULL, '2017-03-15 17:00:43', '2017-03-24 18:44:20'),
(6, 'bambang', 'apakah', NULL, '2017-03-24 18:50:30', '2017-03-24 18:50:30'),
(7, 'yomari', 'yomara', NULL, '2017-03-24 19:53:55', '2017-03-24 19:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Bahagia', '2017-03-15 22:07:50', '2017-03-24 21:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `dosen_matakuliyah`
--
ALTER TABLE `dosen_matakuliyah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_matakuliyah_dosen_id_foreign` (`Dosen_id`),
  ADD KEY `dosen_matakuliyah_matakuliyah_id_foreign` (`Matakuliyah_id`);

--
-- Indexes for table `jadwal_matakuliyah`
--
ALTER TABLE `jadwal_matakuliyah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_matakuliyah_mahasiswa_id_foreign` (`Mahasiswa_id`),
  ADD KEY `jadwal_matakuliyah_ruangan_id_foreign` (`Ruangan_id`),
  ADD KEY `jadwal_matakuliyah_dosen_matakuliyah_id_foreign` (`Dosen_Matakuliyah_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `matakuliyah`
--
ALTER TABLE `matakuliyah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
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
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `dosen_matakuliyah`
--
ALTER TABLE `dosen_matakuliyah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `jadwal_matakuliyah`
--
ALTER TABLE `jadwal_matakuliyah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `matakuliyah`
--
ALTER TABLE `matakuliyah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`);

--
-- Constraints for table `dosen_matakuliyah`
--
ALTER TABLE `dosen_matakuliyah`
  ADD CONSTRAINT `dosen_matakuliyah_dosen_id_foreign` FOREIGN KEY (`Dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `dosen_matakuliyah_matakuliyah_id_foreign` FOREIGN KEY (`Matakuliyah_id`) REFERENCES `matakuliyah` (`id`);

--
-- Constraints for table `jadwal_matakuliyah`
--
ALTER TABLE `jadwal_matakuliyah`
  ADD CONSTRAINT `jadwal_matakuliyah_dosen_matakuliyah_id_foreign` FOREIGN KEY (`Dosen_Matakuliyah_id`) REFERENCES `dosen_matakuliyah` (`id`),
  ADD CONSTRAINT `jadwal_matakuliyah_mahasiswa_id_foreign` FOREIGN KEY (`Mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `jadwal_matakuliyah_ruangan_id_foreign` FOREIGN KEY (`Ruangan_id`) REFERENCES `ruangan` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
