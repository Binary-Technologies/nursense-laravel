
-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_pno_unique` (`pno`),
  UNIQUE KEY `users_inst_id_unique` (`inst_id`),
  UNIQUE KEY `users_std_id_unique` (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
