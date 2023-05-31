-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- දායකයා: 127.0.0.1
-- උත්පාදන වේලාව: මැයි 30, 2023 දින 01:13 PM ට
-- සේවාදායකයේ අනුවාදය: 10.4.21-MariaDB
-- PHP අනුවාදය: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- දත්තගබඩාව: `binarylnb`
--

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- වගු සඳහා නික්ෂේප දත්ත `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dilshan', 'dilshan@gmail.com', NULL, '$2y$10$TB8KEtxCoQjKEc.BCtSCbuMLnzPEBRfskZ25DOPdFOHO98Cjd/NAq', NULL, '2023-05-23 07:05:35', '2023-05-23 07:05:35');

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- වගු සඳහා නික්ෂේප දත්ත `banners`
--

INSERT INTO `banners` (`id`, `status`, `name`, `title`, `content`, `link`, `sequence`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dilshan', 'abc', 'qbc', 'banner link', '1', 'banner/RuoO8VQ4QcdfhkriHdQU126pVCZq8PiZbkW0QBkc.jpg', '2023-05-30 04:31:22', '2023-05-30 04:31:22'),
(2, 0, 'Dilshan', 'Banner', 'Banner 2', 'banner link 2', '3', 'banner/qMLZxhrzDLQeystb6IK0bbv2a0FfhH3dUFAilCJ4.jpg', '2023-05-30 04:36:59', '2023-05-30 04:36:59');

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `failed_jobs`
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
-- වගුවක් සඳහා වගු සැකිල්ල `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- වගු සඳහා නික්ෂේප දත්ත `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_10_144954_create_news_table', 1),
(6, '2023_05_10_145009_create_notices_table', 1),
(7, '2023_05_15_110414_create_admins_table', 1),
(8, '2023_05_30_083308_create_banners_table', 1);

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_exposure` tinyint(4) NOT NULL DEFAULT 0,
  `exposure` tinyint(4) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- වගු සඳහා නික්ෂේප දත්ත `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `main_exposure`, `exposure`, `views`, `created_at`, `updated_at`) VALUES
(1, '2023년도 하반기 교육과정 업데이트 안내', '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.', 1, 0, 1, NULL, NULL),
(2, '동영상 재생 안 될 경우 조치 사항', '동영상 재생 안 될 경우 조치 사항', 0, 1, 0, NULL, NULL),
(3, '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', 0, 1, 0, NULL, NULL),
(4, '2023년도 하반기 교육과정 업데이트 안내', '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.', 1, 0, 1, NULL, NULL),
(5, '동영상 재생 안 될 경우 조치 사항', '동영상 재생 안 될 경우 조치 사항', 0, 1, 0, NULL, NULL),
(6, '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', 0, 1, 0, NULL, NULL),
(7, '2023년도 하반기 교육과정 업데이트 안내', '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.', 1, 0, 1, NULL, NULL),
(8, '동영상 재생 안 될 경우 조치 사항', '동영상 재생 안 될 경우 조치 사항', 0, 1, 0, NULL, NULL),
(9, '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', 0, 1, 0, NULL, NULL),
(10, '2023년도 하반기 교육과정 업데이트 안내', '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.', 1, 0, 1, NULL, NULL),
(11, '동영상 재생 안 될 경우 조치 사항', '동영상 재생 안 될 경우 조치 사항', 0, 1, 0, NULL, NULL),
(12, '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', 0, 1, 0, NULL, NULL),
(13, '2023년도 하반기 교육과정 업데이트 안내', '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.', 1, 0, 1, NULL, NULL),
(14, '동영상 재생 안 될 경우 조치 사항', '동영상 재생 안 될 경우 조치 사항', 0, 1, 0, NULL, NULL),
(15, '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', 0, 1, 0, NULL, NULL),
(16, '2023년도 하반기 교육과정 업데이트 안내', '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.', 1, 0, 1, NULL, NULL),
(17, '동영상 재생 안 될 경우 조치 사항', '동영상 재생 안 될 경우 조치 사항', 0, 1, 0, NULL, NULL),
(18, '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', 0, 1, 0, NULL, NULL),
(19, '2023년도 하반기 교육과정 업데이트 안내', '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.', 1, 0, 1, NULL, NULL),
(20, '동영상 재생 안 될 경우 조치 사항', '동영상 재생 안 될 경우 조치 사항', 0, 1, 0, NULL, NULL),
(21, '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내', 0, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_exposure` tinyint(4) NOT NULL DEFAULT 0,
  `exposure` tinyint(4) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- වගු සඳහා නික්ෂේප දත්ත `notices`
--

INSERT INTO `notices` (`id`, `title`, `content`, `main_exposure`, `exposure`, `views`, `created_at`, `updated_at`) VALUES
(1, '디지털스마트교육센터 2023년도 상반기 우수사업 선정', '안녕하세요 디지털스마트교육센터입니다. 디지털스마트교육센터가 2023년도 우수사업에 선정되었습니다. 디지털스마트교육센터는 보건간호교육의 핵심역량을 강화하고 새로운 패러다임을 확보하고자 하는 디지털 교육 플랫폼입니다.', 1, 0, 1, NULL, NULL),
(2, '2023년 디지털스마트교육센터 홍보 영상', '2023년 디지털스마트교육센터 홍보 영상', 0, 1, 0, NULL, NULL),
(3, '고령층 스마트폰 활용 교육 우수사례 소개', '고령층 스마트폰 활용 교육 우수사례 소개', 0, 1, 0, NULL, NULL),
(4, '디지털스마트교육센터 2023년도 상반기 우수사업 선정', '안녕하세요 디지털스마트교육센터입니다. 디지털스마트교육센터가 2023년도 우수사업에 선정되었습니다. 디지털스마트교육센터는 보건간호교육의 핵심역량을 강화하고 새로운 패러다임을 확보하고자 하는 디지털 교육 플랫폼입니다.', 1, 0, 1, NULL, NULL),
(5, '2023년 디지털스마트교육센터 홍보 영상', '2023년 디지털스마트교육센터 홍보 영상', 0, 1, 0, NULL, NULL),
(6, '고령층 스마트폰 활용 교육 우수사례 소개', '고령층 스마트폰 활용 교육 우수사례 소개', 0, 1, 0, NULL, NULL),
(7, '디지털스마트교육센터 2023년도 상반기 우수사업 선정', '안녕하세요 디지털스마트교육센터입니다. 디지털스마트교육센터가 2023년도 우수사업에 선정되었습니다. 디지털스마트교육센터는 보건간호교육의 핵심역량을 강화하고 새로운 패러다임을 확보하고자 하는 디지털 교육 플랫폼입니다.', 1, 0, 1, NULL, NULL),
(8, '2023년 디지털스마트교육센터 홍보 영상', '2023년 디지털스마트교육센터 홍보 영상', 0, 1, 0, NULL, NULL),
(9, '고령층 스마트폰 활용 교육 우수사례 소개', '고령층 스마트폰 활용 교육 우수사례 소개', 0, 1, 0, NULL, NULL),
(10, '디지털스마트교육센터 2023년도 상반기 우수사업 선정', '안녕하세요 디지털스마트교육센터입니다. 디지털스마트교육센터가 2023년도 우수사업에 선정되었습니다. 디지털스마트교육센터는 보건간호교육의 핵심역량을 강화하고 새로운 패러다임을 확보하고자 하는 디지털 교육 플랫폼입니다.', 1, 0, 1, NULL, NULL),
(11, '2023년 디지털스마트교육센터 홍보 영상', '2023년 디지털스마트교육센터 홍보 영상', 0, 1, 0, NULL, NULL),
(12, '고령층 스마트폰 활용 교육 우수사례 소개', '고령층 스마트폰 활용 교육 우수사례 소개', 0, 1, 0, NULL, NULL),
(13, '디지털스마트교육센터 2023년도 상반기 우수사업 선정', '안녕하세요 디지털스마트교육센터입니다. 디지털스마트교육센터가 2023년도 우수사업에 선정되었습니다. 디지털스마트교육센터는 보건간호교육의 핵심역량을 강화하고 새로운 패러다임을 확보하고자 하는 디지털 교육 플랫폼입니다.', 1, 0, 1, NULL, NULL),
(14, '2023년 디지털스마트교육센터 홍보 영상', '2023년 디지털스마트교육센터 홍보 영상', 0, 1, 0, NULL, NULL),
(15, '고령층 스마트폰 활용 교육 우수사례 소개', '고령층 스마트폰 활용 교육 우수사례 소개', 0, 1, 0, NULL, NULL),
(16, '디지털스마트교육센터 2023년도 상반기 우수사업 선정', '안녕하세요 디지털스마트교육센터입니다. 디지털스마트교육센터가 2023년도 우수사업에 선정되었습니다. 디지털스마트교육센터는 보건간호교육의 핵심역량을 강화하고 새로운 패러다임을 확보하고자 하는 디지털 교육 플랫폼입니다.', 1, 0, 1, NULL, NULL),
(17, '2023년 디지털스마트교육센터 홍보 영상', '2023년 디지털스마트교육센터 홍보 영상', 0, 1, 0, NULL, NULL),
(18, '고령층 스마트폰 활용 교육 우수사례 소개', '고령층 스마트폰 활용 교육 우수사례 소개', 0, 1, 0, NULL, NULL),
(19, '디지털스마트교육센터 2023년도 상반기 우수사업 선정', '안녕하세요 디지털스마트교육센터입니다. 디지털스마트교육센터가 2023년도 우수사업에 선정되었습니다. 디지털스마트교육센터는 보건간호교육의 핵심역량을 강화하고 새로운 패러다임을 확보하고자 하는 디지털 교육 플랫폼입니다.', 1, 0, 1, NULL, NULL),
(20, '2023년 디지털스마트교육센터 홍보 영상', '2023년 디지털스마트교육센터 홍보 영상', 0, 1, 0, NULL, NULL),
(21, '고령층 스마트폰 활용 교육 우수사례 소개', '고령층 스마트폰 활용 교육 우수사례 소개', 0, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inst_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `std_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('instructor','student') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `pno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uni_id` int(11) DEFAULT NULL,
  `major_id` int(11) DEFAULT NULL,
  `scl_id` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `active_status` tinyint(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completion_status` tinyint(1) DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `resident_reg` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_pno_unique` (`pno`),
  ADD UNIQUE KEY `users_inst_id_unique` (`inst_id`),
  ADD UNIQUE KEY `users_std_id_unique` (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
