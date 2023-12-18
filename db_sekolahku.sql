-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 04:25 PM
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
-- Database: `db_sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `dftrjurusan`
--

CREATE TABLE `dftrjurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idsekolah` bigint(20) UNSIGNED NOT NULL,
  `idjurusan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nmjurusan` varchar(255) NOT NULL,
  `idsekolah` bigint(20) UNSIGNED DEFAULT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `prospek` varchar(255) NOT NULL,
  `tersedia` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `nmjurusan`, `idsekolah`, `deskripsi`, `prospek`, `tersedia`, `created_at`, `updated_at`) VALUES
(25, 'tkj', 23, 'Jurusan Teknik Komputer dan Jaringan (TKJ) merupakan program keahlian yang fokus pada pengembangan dan penerapan teknologi informasi dan jaringan komputer. Program ini dirancang untuk membekali siswa dengan pengetahuan dan keterampilan dalam mengelola perangkat keras, perangkat lunak, serta jaringan komputer. Para siswa TKJ akan mempelajari berbagai aspek teknologi informasi, mulai dari pemrograman, administrasi jaringan, hingga keamanan sistem.', 'lapeh disawah s\r\nsawah panjang', 'smk1, smk 8', '2023-12-10 23:35:37', '2023-12-12 21:13:14'),
(29, 'tsm', 22, 'motor', 'bengkel motor', 'smk 3, smk 2', '2023-12-11 13:56:10', '2023-12-12 20:37:35'),
(31, 'multimedia', 23, 'bismillah api bisaa', '34tertf', 'smk 3, smk 2', '2023-12-12 20:35:12', '2023-12-12 20:35:12'),
(33, 'akuntansi', 23, 'uang', 'akuntan', 'dimanamana', '2023-12-12 20:45:19', '2023-12-12 20:45:19'),
(34, 'multimedia', 22, 'bismillah api bisaa', 'bengkel', 'smk1, smk2', '2023-12-12 21:18:00', '2023-12-12 21:18:00'),
(35, 'PETERNAKAN', 26, 'salman', 'ternak hewan', 'aslam', '2023-12-14 02:14:01', '2023-12-14 02:14:01'),
(36, 'rekayasa perangkat lunak', 26, 'kesempatan lain', 'asal aja kok', 'gatauu', '2023-12-15 13:31:57', '2023-12-15 13:31:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_01_153128_create_sekolah_table', 1),
(7, '2023_12_01_153209_create_jurusan_table', 1),
(8, '2023_12_01_153221_create_dftarjurusan_table', 1),
(9, '2023_12_06_002125_create_status_table', 2),
(10, '2023_12_06_003135_create_status_table', 3),
(11, '2023_12_06_032033_create_sekolah_table', 4),
(12, '2023_12_06_033950_create_sekolahs_table', 5),
(13, '2023_12_06_233428_create_jurusans_table', 6),
(14, '2023_12_12_035306_create_dftrjurusan_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `sekolahs`
--

CREATE TABLE `sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namasekolah` varchar(255) NOT NULL,
  `kepsek` varchar(255) NOT NULL,
  `akre` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `npsn` varchar(255) NOT NULL,
  `ekskul` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `berdiri` date NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolahs`
--

INSERT INTO `sekolahs` (`id`, `namasekolah`, `kepsek`, `akre`, `visi`, `misi`, `npsn`, `ekskul`, `nohp`, `lokasi`, `berdiri`, `logo`, `created_at`, `updated_at`) VALUES
(22, 'smk negeri 3 batam', 'rahmi sefrial dayanti', 'A (Unggul)', 'semoga bisa kerja yang bagus dan bisa kejepang', 'belajar yang bener dan tidak mudah ngantuk', '09876543', 'basket balet', '1234567854', 'tanjung piayu gmp deket masjid pokoknya', '2016-12-14', '8UU8P2uo2RG7uwjX0A6CbviQPxSjyFqdiKPmxRMO.jpg', '2023-12-06 03:45:27', '2023-12-13 22:54:50'),
(25, 'SMK NEGERI 5', 'otman paris', 'A (Unggul)', 'semakin didepan', 'dipercaya', '654322345', 'basket, renang, bultang', '1121212121212', 'jl.padang air', '2023-12-11', 'pMQzoE9so3h08WEjLCFQa8Q1zGsbs7PYiOxJGEqG.jpg', '2023-12-13 22:33:31', '2023-12-13 22:33:31'),
(26, 'SMK NEGERI 7', 'prabowo', 'B (Baik)', 'semangat juang', 'biar lulus semua', '09876543', 'basket, bola, renang, dkk', '1234567898760', 'jl.belibis', '2023-10-09', 'wJdoUzzOHYb5lbcJiiIDo6XQ9QjWbClJNAHoaVvm.png', '2023-12-13 22:44:52', '2023-12-13 22:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$CeMn6KICuuxA938bEvZwe.ka.Motj3OTvLEOJWugP3fjVMnSKBxC6', NULL, '2023-12-03 21:43:56', '2023-12-03 21:43:56'),
(2, 'admin', 'admindk@gmail.com', NULL, '$2y$12$mlhJTtbr9hGpYm.Ui911ee7YuIKU4d.7iMlsJQ6X47nEwhSs5RVXm', NULL, '2023-12-09 21:31:08', '2023-12-09 21:31:08'),
(3, 'sensei', 'sensei@gmail.com', NULL, '$2y$12$Z8d5zEEoAr.CVeL4pzKige26XLgsmrubatVcYOOjgRnyMoB4yDV4C', NULL, '2023-12-10 15:07:34', '2023-12-10 15:07:34'),
(4, 'mimin', 'min@gmail.com', NULL, '$2y$12$itimkV32fZBDOmMnP5jjeOBVvQj.BjMukphlDgmzQdsRgOwaMzio.', NULL, '2023-12-10 15:12:19', '2023-12-10 15:12:19'),
(5, 'met', 'met@gmail.com', NULL, '$2y$12$djNsckJL2GhFOXSETw2wyejpGDnPDhp95Muqi712wGJBoWJLMJuOa', NULL, '2023-12-13 01:53:57', '2023-12-13 01:53:57'),
(6, 'ami', 'ami@gmail.com', NULL, '$2y$12$IkkQpbQttE95VONKnWIVXOi.ztwUi53d0B3VYq7EE6hH.dar3FwiC', NULL, '2023-12-14 01:53:42', '2023-12-14 01:53:42'),
(7, 'rahmisd-admin@gmail.com', 'badu@gmail.com', NULL, '$2y$12$4Gogt/IAtjnBmYxTnEPJB.DFxwkCq7265KEBKY82fWs06j7gsSyMW', NULL, '2023-12-14 03:01:48', '2023-12-14 03:01:48'),
(8, 'rahmisd', 'zuzy@gmail.com', NULL, '$2y$12$A/CklKQVFUcoK/egCq/CtO62DHQ/vVFUlgbmShY6X956Y7dzHFF.G', NULL, '2023-12-14 03:02:36', '2023-12-14 03:02:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dftrjurusan`
--
ALTER TABLE `dftrjurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sekolahs`
--
ALTER TABLE `sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `dftrjurusan`
--
ALTER TABLE `dftrjurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolahs`
--
ALTER TABLE `sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
