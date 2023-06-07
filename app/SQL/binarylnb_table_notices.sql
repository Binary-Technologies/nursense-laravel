
-- --------------------------------------------------------

--
-- වගුවක් සඳහා වගු සැකිල්ල `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_exposure` tinyint(4) NOT NULL DEFAULT 0,
  `exposure` tinyint(4) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
