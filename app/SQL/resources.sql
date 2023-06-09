/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `resources` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `resources` (`id`, `status`, `title`, `path`, `views`, `details`, `created_at`, `updated_at`) VALUES
(30, 1, 'Update', '[\"public\\/files\\/resources\\/30\\/Nirupama.pdf\"]', 0, 'update', '2023-06-06 10:14:09', '2023-06-06 10:40:52');
INSERT INTO `resources` (`id`, `status`, `title`, `path`, `views`, `details`, `created_at`, `updated_at`) VALUES
(31, 1, 'new', '[\"public\\/files\\/resources\\/31\\/offer.pdf\"]', 0, 'dasd', '2023-06-06 10:41:09', '2023-06-06 11:20:32');
INSERT INTO `resources` (`id`, `status`, `title`, `path`, `views`, `details`, `created_at`, `updated_at`) VALUES
(32, 1, 'asdasdadasd', '[\"public\\/files\\/resources\\/32\\/offer.pdf\"]', 0, 'dasddasda', '2023-06-06 11:16:19', '2023-06-06 11:20:25');
INSERT INTO `resources` (`id`, `status`, `title`, `path`, `views`, `details`, `created_at`, `updated_at`) VALUES
(33, 0, 'das', '[\"public\\/files\\/resources\\/33\\/offer.pdf\"]', 0, 'dasda', '2023-06-07 03:53:46', '2023-06-07 03:53:46'),
(34, 0, 'adsd', '[\"public\\/files\\/resources\\/34\\/Nirupama.pdf\"]', 1, 'dasd', '2023-06-07 03:53:55', '2023-06-08 10:03:26'),
(35, 0, 'dasd', '[\"public\\/files\\/resources\\/35\\/Nirupama.pdf\"]', 0, 'dasd', '2023-06-07 04:14:30', '2023-06-08 09:43:16'),
(36, 0, 'dasd', '[\"public\\/files\\/resources\\/36\\/The Android Execution Environment \\u2013 Day6.pdf\"]', 4, 'das', '2023-06-08 09:44:56', '2023-06-08 10:03:59');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;