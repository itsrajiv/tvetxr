-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for elearning
CREATE DATABASE IF NOT EXISTS `elearning` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `elearning`;

-- Dumping structure for table elearning.class_courses
CREATE TABLE IF NOT EXISTS `class_courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_class` char(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_course` char(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.class_courses: ~7 rows (approximately)
/*!40000 ALTER TABLE `class_courses` DISABLE KEYS */;
INSERT INTO `class_courses` (`id`, `id_class`, `id_course`, `created_at`, `updated_at`) VALUES
	(10, '5', '9', '2020-12-07 08:19:45', '2020-12-07 08:19:45'),
	(11, '5', '10', '2020-12-28 05:12:47', '2020-12-28 05:12:47'),
	(12, '5', '8', '2020-12-28 05:12:51', '2020-12-28 05:12:51'),
	(13, '8', '4', '2021-01-07 15:27:14', '2021-01-07 15:27:14'),
	(19, '14', '4', '2021-01-08 17:34:33', '2021-01-08 17:34:33'),
	(20, '13', '13', '2021-02-05 14:51:05', '2021-02-05 14:51:05'),
	(22, '13', '14', '2021-02-05 14:55:46', '2021-02-05 14:55:46'),
	(23, '13', '15', '2021-02-05 15:17:32', '2021-02-05 15:17:32');
/*!40000 ALTER TABLE `class_courses` ENABLE KEYS */;

-- Dumping structure for table elearning.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_lecturer` int(11) DEFAULT NULL,
  `thumbnail_path` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.courses: ~13 rows (approximately)
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`, `id_lecturer`, `thumbnail_path`) VALUES
	(2, 'Bahasa Indonesia', '2020-11-15 14:48:36', '2020-11-15 14:48:36', 3, NULL),
	(3, 'Bahasa Inggeris', '2020-11-15 15:38:10', '2020-11-15 15:38:10', 3, NULL),
	(4, 'Data Structure & Algorithm', '2020-11-30 06:31:01', '2020-11-30 06:31:01', 3, NULL),
	(5, 'Operating System', '2020-11-30 06:31:28', '2020-11-30 06:31:28', 5, NULL),
	(6, 'Object-oriented Programming', '2020-11-30 06:32:11', '2020-11-30 06:32:11', 5, NULL),
	(7, 'Programming Technique', '2020-12-07 03:48:32', '2020-12-07 03:48:32', 3, NULL),
	(8, 'Discrete Structure', '2020-12-07 03:49:55', '2020-12-07 03:49:55', 3, NULL),
	(9, 'Digital Logic', '2020-12-07 03:50:27', '2020-12-07 03:50:27', 3, NULL),
	(10, 'GSA', '2020-12-09 04:22:42', '2020-12-09 04:22:42', 3, NULL),
	(11, 'Java', '2021-01-08 17:31:30', '2021-01-08 17:31:30', 7, NULL),
	(12, 'Software Engineering', '2021-02-05 14:08:39', '2021-02-05 14:08:39', 3, 'C:\\Users\\User\\AppData\\Local\\Temp\\phpE529.tmp'),
	(13, 'Software Engineering Piji', '2021-02-05 14:50:11', '2021-02-05 14:50:11', 3, '\\storage\\coursethumbnail\\Screenshot (40)_1612536611.png'),
	(14, 'JOHN', '2021-02-05 14:55:38', '2021-02-05 14:55:38', 3, '\\storage\\coursethumbnail\\Screenshot (8)_1612536938.png'),
	(15, 'Korean Language', '2021-02-05 15:17:25', '2021-02-05 15:17:25', 3, '\\storage\\coursethumbnail\\Screenshot (63)_1612538245.png');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Dumping structure for table elearning.course_file
CREATE TABLE IF NOT EXISTS `course_file` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `file_path` text COLLATE utf8mb4_unicode_ci,
  `file_name` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL,
  `file_type` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.course_file: ~52 rows (approximately)
/*!40000 ALTER TABLE `course_file` DISABLE KEYS */;
INSERT INTO `course_file` (`id`, `name`, `file_path`, `file_name`, `created_at`, `updated_at`, `id_course`, `file_type`) VALUES
	(16, '3D Model', '\\storage\\coursefile\\Back SSD_1605682450.jpeg', 'Back SSD_1605682450.jpeg', '2020-11-18 06:54:10', '2020-11-18 06:54:10', 2, 'normalfile'),
	(18, '3D Model', '\\storage\\coursefile\\UTM-Logo-2-lowPoly_1606183382.glb', 'UTM-Logo-2-lowPoly_1606183382.glb', '2020-11-24 02:03:02', '2020-11-24 02:03:02', 3, '3dfile'),
	(19, '3D Model', '\\storage\\coursefile\\Microscope__1606183392.glb', 'Microscope__1606183392.glb', '2020-11-24 02:03:12', '2020-11-24 02:03:12', 3, '3dfile'),
	(20, '3D Model', '\\storage\\coursefile\\house1_1606183404.glb', 'house1_1606183404.glb', '2020-11-24 02:03:24', '2020-11-24 02:03:24', 3, '3dfile'),
	(21, '3D Model', '\\storage\\coursefile\\trex_1606184799.glb', 'trex_1606184799.glb', '2020-11-24 02:26:39', '2020-11-24 02:26:39', 2, '3dfile'),
	(24, 'trex', '\\storage\\coursefile\\trex_1606284636.glb', 'trex_1606284636.glb', '2020-11-25 06:10:37', '2020-11-25 06:10:37', 3, '3dfile'),
	(27, 'Sort', '\\storage\\coursefile\\house1_1607235458.glb', 'house1_1607235458.glb', '2020-12-06 06:17:38', '2020-12-06 06:17:38', 4, '3dfile'),
	(28, 'Algo', '\\storage\\coursefile\\house1_1607241010.glb', 'house1_1607241010.glb', '2020-12-06 07:50:10', '2020-12-06 07:50:10', 4, '3dfile'),
	(29, '11', '\\storage\\coursefile\\trex_1607245463.glb', 'trex_1607245463.glb', '2020-12-06 09:04:23', '2020-12-06 09:04:23', 4, '3dfile'),
	(30, 'ayam', '\\storage\\coursefile\\trex_1607245715.glb', 'trex_1607245715.glb', '2020-12-06 09:08:35', '2020-12-06 09:08:35', 4, '3dfile'),
	(32, 'VC', '\\storage\\coursefile\\trex_1607247879.glb', 'trex_1607247879.glb', '2020-12-06 09:44:39', '2020-12-06 09:44:39', 4, '3dfile'),
	(33, 'VC', '\\storage\\coursefile\\VC_1607304781.glb', 'VC_1607304781.glb', '2020-12-07 01:33:01', '2020-12-07 01:33:01', 4, '3dfile'),
	(34, 'UTM Logo', '\\storage\\coursefile\\UTM-Logo-2-lowPoly_1607304796.glb', 'UTM-Logo-2-lowPoly_1607304796.glb', '2020-12-07 01:33:16', '2020-12-07 01:33:16', 4, '3dfile'),
	(35, 'Microscope', '\\storage\\coursefile\\Microscope__1607304813.glb', 'Microscope__1607304813.glb', '2020-12-07 01:33:33', '2020-12-07 01:33:33', 4, '3dfile'),
	(36, 'Java', '\\storage\\coursefile\\Microscope__1607306674.glb', 'Microscope__1607306674.glb', '2020-12-07 02:04:34', '2020-12-07 02:04:34', 6, '3dfile'),
	(37, '13', '\\storage\\coursefile\\house1_1607323999.glb', 'house1_1607323999.glb', '2020-12-07 06:53:19', '2020-12-07 06:53:19', 2, '3dfile'),
	(38, '15', '\\storage\\coursefile\\house1_1607324024.glb', 'house1_1607324024.glb', '2020-12-07 06:53:44', '2020-12-07 06:53:44', 2, '3dfile'),
	(40, 'Binary', '\\storage\\coursefile\\house1_1607329117.glb', 'house1_1607329117.glb', '2020-12-07 08:18:37', '2020-12-07 08:18:37', 9, '3dfile'),
	(41, 'Microscope', '\\storage\\coursefile\\Microscope__1607329459.glb', 'Microscope__1607329459.glb', '2020-12-07 08:24:19', '2020-12-07 08:24:19', 9, '3dfile'),
	(42, 'VC', '\\storage\\coursefile\\VC_1607329468.glb', 'VC_1607329468.glb', '2020-12-07 08:24:28', '2020-12-07 08:24:28', 9, '3dfile'),
	(43, 'Trex', '\\storage\\coursefile\\trex_1607329478.glb', 'trex_1607329478.glb', '2020-12-07 08:24:38', '2020-12-07 08:24:38', 9, '3dfile'),
	(44, 'UTM logo', '\\storage\\coursefile\\UTM-Logo-2-lowPoly_1607329492.glb', 'UTM-Logo-2-lowPoly_1607329492.glb', '2020-12-07 08:24:52', '2020-12-07 08:24:52', 9, '3dfile'),
	(45, 'Waterfront 360', '\\storage\\coursefile\\2D_Waterfront_1607331410.mp4', '2D_Waterfront_1607331410.mp4', '2020-12-07 08:56:50', '2020-12-07 08:56:50', 9, '360file'),
	(46, '3D Model', '\\storage\\coursefile\\2D_Waterfront_1607484604.mp4', '2D_Waterfront_1607484604.mp4', '2020-12-09 03:30:04', '2020-12-09 03:30:04', 4, '360file'),
	(47, '3D Model', '\\storage\\coursefile\\2D_Waterfront_1607485054.mp4', '2D_Waterfront_1607485054.mp4', '2020-12-09 03:37:34', '2020-12-09 03:37:34', 4, '360file'),
	(53, '34', '\\storage\\coursefile\\nofile_9_1607486093.png', 'nofile_9_1607486093.png', '2020-12-09 03:54:53', '2020-12-09 03:54:53', 9, NULL),
	(54, '33', '\\storage\\coursefile\\nofile_9_1607486104.png', 'nofile_9_1607486104.png', '2020-12-09 03:55:04', '2020-12-09 03:55:04', 9, NULL),
	(78, '35', '\\storage\\coursefile\\nofile_9_1607489756.png', 'nofile_9_1607489756.png', '2020-12-09 04:55:56', '2020-12-09 04:55:56', 9, NULL),
	(79, '37', '\\storage\\coursefile\\nofile_10_1607491042.png', 'nofile_10_1607491042.png', '2020-12-09 05:17:22', '2020-12-09 05:17:22', 10, NULL),
	(80, 'Yang ini', '\\storage\\coursefile\\nofile_10_1607491301.png', 'nofile_10_1607491301.png', '2020-12-09 05:21:41', '2020-12-09 05:21:41', 10, NULL),
	(82, 'Yang ini', '\\storage\\coursefile\\nofile_10_1607491420.png', 'nofile_10_1607491420.png', '2020-12-09 05:23:40', '2020-12-09 05:23:40', 10, NULL),
	(83, '3D Model', '\\storage\\coursefile\\2D_Lookout_1_1607491635.mp4', '2D_Lookout_1_1607491635.mp4', '2020-12-09 05:27:15', '2020-12-09 05:27:15', 10, '360file'),
	(84, '3D Model', '\\storage\\coursefile\\2D_Waterfront_1607497423.mp4', '2D_Waterfront_1607497423.mp4', '2020-12-09 07:03:43', '2020-12-09 07:03:43', 10, '360file'),
	(85, 'Mac', '\\storage\\coursefile\\nofile_3_1607497611.png', 'nofile_3_1607497611.png', '2020-12-09 07:06:51', '2020-12-09 07:06:51', 3, NULL),
	(86, 'Mac', '\\storage\\coursefile\\nofile_3_1607497618.png', 'nofile_3_1607497618.png', '2020-12-09 07:06:58', '2020-12-09 07:06:58', 3, NULL),
	(87, 'Mac', '\\storage\\coursefile\\nofile_2_1607497631.png', 'nofile_2_1607497631.png', '2020-12-09 07:07:11', '2020-12-09 07:07:11', 2, NULL),
	(88, 'Luna', '\\storage\\coursefile\\nofile_5_1607498886.png', 'nofile_5_1607498886.png', '2020-12-09 07:28:06', '2020-12-09 07:28:06', 5, NULL),
	(89, 'Kucing', '\\storage\\coursefile\\2D_Lookout_1_1607499379.mp4', '2D_Lookout_1_1607499379.mp4', '2020-12-09 07:36:20', '2020-12-09 07:36:20', 7, '360file'),
	(90, 'Lipas', '\\storage\\coursefile\\2D_Lookout_1_1607499764.mp4', '2D_Lookout_1_1607499764.mp4', '2020-12-09 07:42:45', '2020-12-09 07:42:45', 5, '360file'),
	(91, 'ohaiyo', '\\storage\\coursefile\\TVETXR_1607499945.jpeg', 'TVETXR_1607499945.jpeg', '2020-12-09 07:45:45', '2020-12-09 07:45:45', 4, 'normalfile'),
	(92, 'ohaiyo', '\\storage\\coursefile\\Gantt Chart Intern_1607500036.jpeg', 'Gantt Chart Intern_1607500036.jpeg', '2020-12-09 07:47:16', '2020-12-09 07:47:16', 4, 'normalfile'),
	(96, 'Kucing', '\\storage\\coursefile\\house1_1607500506.glb', 'house1_1607500506.glb', '2020-12-09 07:55:06', '2020-12-09 07:55:06', 10, '3dfile'),
	(97, 'Kucing1', '\\storage\\coursefile\\Microscope__1607500514.glb', 'Microscope__1607500514.glb', '2020-12-09 07:55:14', '2020-12-09 07:55:14', 10, '3dfile'),
	(98, 'Kucing2', '\\storage\\coursefile\\trex_1607500521.glb', 'trex_1607500521.glb', '2020-12-09 07:55:21', '2020-12-09 07:55:21', 10, '3dfile'),
	(99, 'Kucing3', '\\storage\\coursefile\\UTM-Logo-2-lowPoly_1607500527.glb', 'UTM-Logo-2-lowPoly_1607500527.glb', '2020-12-09 07:55:27', '2020-12-09 07:55:27', 10, '3dfile'),
	(100, 'Kucing4', '\\storage\\coursefile\\VC_1607500534.glb', 'VC_1607500534.glb', '2020-12-09 07:55:34', '2020-12-09 07:55:34', 10, '3dfile'),
	(101, 'Luna', '\\storage\\coursefile\\nofile_6_1607501648.png', 'nofile_6_1607501648.png', '2020-12-09 08:14:08', '2020-12-09 08:14:08', 6, NULL),
	(102, 'Sorting', '\\storage\\coursefile\\nofile_8_1607502704.png', 'nofile_8_1607502704.png', '2020-12-09 08:31:44', '2020-12-09 08:31:44', 8, NULL),
	(103, 'Sorting', '\\storage\\coursefile\\nofile_3_1607505888.png', 'nofile_3_1607505888.png', '2020-12-09 09:24:48', '2020-12-09 09:24:48', 3, NULL),
	(104, 'HafiziYeonwoo', '\\storage\\coursefile\\2D_Waterfront_1607968777.mp4', '2D_Waterfront_1607968777.mp4', '2020-12-14 17:59:37', '2020-12-14 17:59:37', 10, '360file'),
	(105, 'HafiziPanorama', '\\storage\\coursefile\\house1_1607968810.glb', 'house1_1607968810.glb', '2020-12-14 18:00:10', '2020-12-14 18:00:10', 9, '3dfile'),
	(106, 'ayam', '\\storage\\coursefile\\trex_1607971312.glb', 'trex_1607971312.glb', '2020-12-14 18:41:52', '2020-12-14 18:41:52', 9, '3dfile'),
	(108, 'Data Structure', '\\storage\\coursefile\\trex_1610027355.glb', 'trex_1610027355.glb', '2021-01-07 13:49:15', '2021-01-07 13:49:15', 4, '3dfile'),
	(109, 'Data Structure', '\\storage\\coursefile\\house1_1610127179.glb', 'house1_1610127179.glb', '2021-01-08 17:32:59', '2021-01-08 17:32:59', 4, '3dfile');
/*!40000 ALTER TABLE `course_file` ENABLE KEYS */;

-- Dumping structure for table elearning.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table elearning.ipfs_buys
CREATE TABLE IF NOT EXISTS `ipfs_buys` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_ipfs_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_courses` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.ipfs_buys: ~17 rows (approximately)
/*!40000 ALTER TABLE `ipfs_buys` DISABLE KEYS */;
INSERT INTO `ipfs_buys` (`id`, `created_at`, `updated_at`, `id_ipfs_user`, `id_user`, `id_courses`) VALUES
	(5, '2020-12-10 16:15:09', '2020-12-10 16:15:09', 88, 3, 4),
	(6, '2020-12-10 16:19:26', '2020-12-10 16:19:26', 89, 3, 10),
	(7, '2020-12-10 17:59:32', '2020-12-10 17:59:32', 90, 3, 2),
	(8, '2020-12-10 19:09:52', '2020-12-10 19:09:52', 91, 3, 10),
	(9, '2020-12-14 10:15:48', '2020-12-14 10:15:48', 92, 3, 2),
	(10, '2020-12-14 18:01:54', '2020-12-14 18:01:54', 108, 3, 10),
	(11, '2020-12-14 18:03:38', '2020-12-14 18:03:38', 110, 3, 10),
	(13, '2020-12-14 18:21:14', '2020-12-14 18:21:14', 112, 3, 10),
	(14, '2020-12-14 18:36:28', '2020-12-14 18:36:28', 113, 3, 9),
	(15, '2020-12-15 14:14:13', '2020-12-15 14:14:13', 114, 3, 10),
	(16, '2020-12-16 09:33:53', '2020-12-16 09:33:53', 115, 3, 10),
	(17, '2020-12-17 06:57:35', '2020-12-17 06:57:35', 116, 3, 9),
	(18, '2021-01-07 14:53:34', '2021-01-07 14:53:34', 118, 3, 4),
	(19, '2021-01-08 17:33:16', '2021-01-08 17:33:16', 117, 1, 4),
	(20, '2021-02-05 13:30:27', '2021-02-05 13:30:27', 120, 3, 8),
	(21, '2021-02-05 13:42:50', '2021-02-05 13:42:50', 121, 3, 8),
	(22, '2021-02-05 15:31:33', '2021-02-05 15:31:33', 123, 3, 15),
	(23, '2021-02-05 15:31:37', '2021-02-05 15:31:37', 122, 3, 15);
/*!40000 ALTER TABLE `ipfs_buys` ENABLE KEYS */;

-- Dumping structure for table elearning.ipfs_resources
CREATE TABLE IF NOT EXISTS `ipfs_resources` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resources_name` varchar(50) DEFAULT NULL,
  `link_resources` varchar(50) DEFAULT NULL,
  `resources_path` varchar(50) DEFAULT NULL,
  `resources_type` text,
  `link_thumbnail` varchar(50) DEFAULT NULL,
  `thumbnail_path` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- Dumping data for table elearning.ipfs_resources: ~42 rows (approximately)
/*!40000 ALTER TABLE `ipfs_resources` DISABLE KEYS */;
INSERT INTO `ipfs_resources` (`id`, `resources_name`, `link_resources`, `resources_path`, `resources_type`, `link_thumbnail`, `thumbnail_path`, `created_at`, `updated_at`, `created_by`) VALUES
	(12, 'Mac', 'QmPSnW3C4q67oA7jhw9PgcQ8uuZbrbrK7J9FK2xWCqpcyK', NULL, '3dfile', 'QmWub6hkibNjf2DYszRLpZDj1CZiHdxiqJNcFfzPGDwXxu', NULL, '2020-12-07 03:39:10', '2020-12-07 03:39:10', 'admin@mail.com'),
	(13, 'Sorting', 'QmS1uMvrRytTGrAyiBy61y23G3UYbYQUnXYT17So9vR3Kp', NULL, '3dfile', 'QmPLEbkC4EdHt5NNyjCWSZWqAEL6gnFwCPu7bogzmePPTN', NULL, '2020-12-07 03:40:48', '2020-12-07 03:40:48', 'admin@mail.com'),
	(14, 'Introduction to Java', 'QmP2h1SNGZb2eTZTxWphzNoRzr6kS7sf8NoWY38zU3y1pV', NULL, '3dfile', 'Qmdzwfcnxgj2rXVG23GFUcjfdLx2qsAsxb7MnYzbBZoite', NULL, '2020-12-07 03:41:28', '2020-12-07 03:41:28', 'admin@mail.com'),
	(15, 'Bubble Sort', 'QmYqHvaGmjDxUpy1z8GgaCFYeTLkqhQimBN1bCQ82spagP', NULL, '3dfile', 'QmPHbfLcdja66HqxEzHBR56kY5GLMAEskU1yuSj5HHdrqp', NULL, '2020-12-07 03:42:07', '2020-12-07 03:42:07', 'admin@mail.com'),
	(16, 'Windows', 'QmP8HTt93Z2JAaG5daktB5pUQk951HVfFmaikH54aXKHSH', NULL, '3dfile', 'QmVmDzeWYKTdPo7v8DGRRMMor3jApTLG47W5iCXrDfvjeT', NULL, '2020-12-07 03:42:50', '2020-12-07 03:42:50', 'admin@mail.com'),
	(17, 'Waterfront 360', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'Qmer1DvCtuE6KBMULMn1N4NqywZgjfPixzxshtsApsQHz4', NULL, '2020-12-07 08:52:42', '2020-12-07 08:52:42', 'admin@mail.com'),
	(18, 'Lookout 360', '', NULL, '360file', 'QmWD9rxXxVGet8anmJM8YwokyxfMsDRYFcFYFB4pffhxhL', NULL, '2020-12-07 08:55:39', '2020-12-07 08:55:39', 'admin@mail.com'),
	(19, 'Gates', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, '2020-12-09 03:52:46', '2020-12-09 03:52:46', 'hakimlecturer@77gmail.com'),
	(20, 'Gates2', 'QmPSnW3C4q67oA7jhw9PgcQ8uuZbrbrK7J9FK2xWCqpcyK', NULL, '3dfile', 'QmSjqFHZM6fzLRff4fFgmQNiPy8j7EuGRTT8UoMUXYoKVM', NULL, '2020-12-09 03:54:15', '2020-12-09 03:54:15', 'hakimlecturer@77gmail.com'),
	(22, '11', 'QmSLVBPh8zw7BsCw7USgdzHu3zMdAuYrujweF1jtNHi1XK', NULL, 'normalfile', 'QmSjqFHZM6fzLRff4fFgmQNiPy8j7EuGRTT8UoMUXYoKVM', NULL, '2020-12-09 04:24:55', '2020-12-09 04:24:55', 'hakimlecturer@77gmail.com'),
	(25, '3D Model', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, 'normalfile', 'QmTXXh8hBCpke6DSsgYSPE6h9RnMaq5v8o1aezKV9PbnF6', NULL, '2020-12-09 05:13:57', '2020-12-09 05:13:57', 'admin@mail.com'),
	(26, 'Yang ini', 'QmSLVBPh8zw7BsCw7USgdzHu3zMdAuYrujweF1jtNHi1XK', NULL, 'normalfile', 'QmTXXh8hBCpke6DSsgYSPE6h9RnMaq5v8o1aezKV9PbnF6', NULL, '2020-12-09 05:16:52', '2020-12-09 05:16:52', 'admin@mail.com'),
	(27, 'Water', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, '2020-12-09 07:11:47', '2020-12-09 07:11:47', 'admin@mail.com'),
	(30, 'Axe', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, '2020-12-09 07:21:26', '2020-12-09 07:21:26', 'admin@mail.com'),
	(31, 'Luna', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, '2020-12-09 07:22:55', '2020-12-09 07:22:55', 'admin@mail.com'),
	(32, 'WaterBender', '', NULL, '360file', 'QmTXXh8hBCpke6DSsgYSPE6h9RnMaq5v8o1aezKV9PbnF6', NULL, '2020-12-10 16:17:33', '2020-12-10 16:17:33', 'hakimlecturer@77gmail.com'),
	(33, 'Firebender', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmX3zsooDFzs28bbfCp6XyygmLG1rWNfZWXPfsqS1KYKdx', NULL, '2020-12-10 16:18:52', '2020-12-10 16:18:52', 'hakimlecturer@77gmail.com'),
	(34, 'Cheng Xiao', 'QmS1uMvrRytTGrAyiBy61y23G3UYbYQUnXYT17So9vR3Kp', NULL, '3dfile', 'QmWwdBCeEbQAoUZsTBM12uUEvucZfvsg4MSRdC8NonyTa9', NULL, '2020-12-10 17:59:07', '2020-12-10 17:59:07', 'hakimlecturer@77gmail.com'),
	(36, 'Luda', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmTXXh8hBCpke6DSsgYSPE6h9RnMaq5v8o1aezKV9PbnF6', NULL, '2020-12-10 19:09:22', '2020-12-10 19:09:22', 'hakimlecturer@77gmail.com'),
	(37, 'cghfgh', 'QmP2h1SNGZb2eTZTxWphzNoRzr6kS7sf8NoWY38zU3y1pV', NULL, '3dfile', 'QmV9pJYACZ5vLMC2DKbCtyPq2iHiy44eE6mVHVQFmSu8G7', NULL, '2020-12-14 10:09:07', '2020-12-14 10:09:07', 'hakimlecturer@77gmail.com'),
	(38, '3D Model rini', 'QmP2h1SNGZb2eTZTxWphzNoRzr6kS7sf8NoWY38zU3y1pV', NULL, '3dfile', 'QmV9pJYACZ5vLMC2DKbCtyPq2iHiy44eE6mVHVQFmSu8G7', NULL, '2020-12-14 10:14:54', '2020-12-14 10:14:54', 'hakimlecturer@77gmail.com'),
	(39, 'ayam1212', 'QmPSnW3C4q67oA7jhw9PgcQ8uuZbrbrK7J9FK2xWCqpcyK', NULL, '3dfile', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, '2020-12-14 16:03:49', '2020-12-14 16:03:49', 'hakimlecturer@77gmail.com'),
	(40, 'itiksadasds', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmX3zsooDFzs28bbfCp6XyygmLG1rWNfZWXPfsqS1KYKdx', NULL, '2020-12-14 16:05:09', '2020-12-14 16:05:09', 'hakimlecturer@77gmail.com'),
	(41, '3D Model', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmX3zsooDFzs28bbfCp6XyygmLG1rWNfZWXPfsqS1KYKdx', NULL, '2020-12-14 16:06:20', '2020-12-14 16:06:20', 'hakimlecturer@77gmail.com'),
	(42, 'HafiziBlackMamba', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmX3zsooDFzs28bbfCp6XyygmLG1rWNfZWXPfsqS1KYKdx', NULL, '2020-12-14 16:07:57', '2020-12-14 16:07:57', 'hakimlecturer@77gmail.com'),
	(43, 'HafiziSoBAd', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmPxSLZSyrE1DeXRqS3uTDjtS15TbLRYPYRaYdYBYEs6Md', NULL, '2020-12-14 16:15:42', '2020-12-14 16:15:42', 'hakimlecturer@77gmail.com'),
	(44, 'HafiziTrueBeauty', 'QmS1uMvrRytTGrAyiBy61y23G3UYbYQUnXYT17So9vR3Kp', NULL, '3dfile', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, '2020-12-14 18:01:34', '2020-12-14 18:01:34', 'hakimlecturer@77gmail.com'),
	(45, 'HafiziIrene', 'QmWSm9Br2h4a5jqQHJ5qewkQSf1RoxAtybeNyQnhdecMXY', NULL, '360file', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, '2020-12-14 18:03:10', '2020-12-14 18:03:10', 'hakimlecturer@77gmail.com'),
	(46, 'TrexBesar', 'QmP2h1SNGZb2eTZTxWphzNoRzr6kS7sf8NoWY38zU3y1pV', NULL, '3dfile', 'QmWwdBCeEbQAoUZsTBM12uUEvucZfvsg4MSRdC8NonyTa9', NULL, '2020-12-14 18:08:45', '2020-12-14 18:08:45', 'hakimlecturer@77gmail.com'),
	(47, 'weqeqwe', 'QmP8HTt93Z2JAaG5daktB5pUQk951HVfFmaikH54aXKHSH', NULL, '3dfile', 'Qmb9Nw9jkoxCA6iRMpUqvjZ7ZUbHK9aFNJtJyNyL6o7M23', NULL, '2020-12-14 18:20:08', '2020-12-14 18:20:08', 'hakimlecturer@77gmail.com'),
	(48, 'sdgxfchgjvh', 'QmP2h1SNGZb2eTZTxWphzNoRzr6kS7sf8NoWY38zU3y1pV', NULL, '3dfile', 'Qmb9Nw9jkoxCA6iRMpUqvjZ7ZUbHK9aFNJtJyNyL6o7M23', NULL, '2020-12-14 18:36:06', '2020-12-14 18:36:06', 'hakimlecturer@77gmail.com'),
	(49, 'Aespa', 'QmPSnW3C4q67oA7jhw9PgcQ8uuZbrbrK7J9FK2xWCqpcyK', NULL, '3dfile', 'QmX3zsooDFzs28bbfCp6XyygmLG1rWNfZWXPfsqS1KYKdx', NULL, '2020-12-15 14:13:56', '2020-12-15 14:13:56', 'hakimlecturer@77gmail.com'),
	(50, 'ayam', 'QmYqHvaGmjDxUpy1z8GgaCFYeTLkqhQimBN1bCQ82spagP', NULL, '3dfile', 'QmQyoYgQpeeorrtUYfTRQ8L8DETE5J48GjBCEX23JcRtJu', NULL, '2020-12-16 09:33:30', '2020-12-16 09:33:30', 'hakimlecturer@77gmail.com'),
	(51, '3D Model', 'QmV9pJYACZ5vLMC2DKbCtyPq2iHiy44eE6mVHVQFmSu8G7', NULL, '3dfile', 'Qmb9Nw9jkoxCA6iRMpUqvjZ7ZUbHK9aFNJtJyNyL6o7M23', NULL, '2020-12-16 13:55:08', '2020-12-16 13:55:08', 'hakimlecturer@77gmail.com'),
	(52, '1', 'QmPSnW3C4q67oA7jhw9PgcQ8uuZbrbrK7J9FK2xWCqpcyK', NULL, '3dfile', 'QmPxSLZSyrE1DeXRqS3uTDjtS15TbLRYPYRaYdYBYEs6Md', NULL, '2020-12-17 06:54:07', '2020-12-17 06:54:07', 'hakimlecturer@77gmail.com'),
	(53, 'Data Organisation', 'QmP2h1SNGZb2eTZTxWphzNoRzr6kS7sf8NoWY38zU3y1pV', NULL, '3dfile', 'QmUWidBsxxiM3gzj7mi8C9kzzVXzm9h55bmnwSQgdgGCni', NULL, '2021-01-07 13:42:38', '2021-01-07 13:42:38', 'hakimlecturer@77gmail.com'),
	(54, 'Data Organisation', 'QmPSnW3C4q67oA7jhw9PgcQ8uuZbrbrK7J9FK2xWCqpcyK', NULL, '3dfile', 'QmdaxxdGnUg3mKS1kBD11FdXmpDw6abg5Fwi2becCEbQV7', NULL, '2021-01-08 17:32:19', '2021-01-08 17:32:19', 'admin@mail.com'),
	(55, 'SayaSukaMakan', 'QmPSnW3C4q67oA7jhw9PgcQ8uuZbrbrK7J9FK2xWCqpcyK', NULL, '3dfile', 'QmSjqFHZM6fzLRff4fFgmQNiPy8j7EuGRTT8UoMUXYoKVM', NULL, '2021-02-05 13:29:39', '2021-02-05 13:29:39', 'hakimlecturer@77gmail.com'),
	(56, 'SayaSukaTido', '', NULL, '360file', 'QmbLhvgPiCJtbdkowde386iEG42GtonVE1YzWogfGK5GRL', NULL, '2021-02-05 13:34:49', '2021-02-05 13:34:49', 'hakimlecturer@77gmail.com'),
	(57, 'SayaSukaTido', 'QmWSm9Br2h4a5jqQHJ5qewkQSf1RoxAtybeNyQnhdecMXY', NULL, '360file', 'QmXXKh8psKa6tUvf7rL9fvCqjKGMbSEZT4mC6CfgTU526m', NULL, '2021-02-05 13:41:39', '2021-02-05 13:41:39', 'hakimlecturer@77gmail.com'),
	(58, 'Miyeon', 'QmPSnW3C4q67oA7jhw9PgcQ8uuZbrbrK7J9FK2xWCqpcyK', NULL, '3dfile', 'QmRw6YiY95Ym5csgLEqtaeDHJLZNArSQp6esM81kV7mrpU', NULL, '2021-02-05 15:30:07', '2021-02-05 15:30:07', 'hakimlecturer@77gmail.com'),
	(59, 'Shuhua', 'QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG', NULL, '360file', 'QmV9pJYACZ5vLMC2DKbCtyPq2iHiy44eE6mVHVQFmSu8G7', NULL, '2021-02-05 15:31:03', '2021-02-05 15:31:03', 'hakimlecturer@77gmail.com');
/*!40000 ALTER TABLE `ipfs_resources` ENABLE KEYS */;

-- Dumping structure for table elearning.ipfs_users
CREATE TABLE IF NOT EXISTS `ipfs_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_ipfsresource` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.ipfs_users: ~79 rows (approximately)
/*!40000 ALTER TABLE `ipfs_users` DISABLE KEYS */;
INSERT INTO `ipfs_users` (`id`, `created_at`, `updated_at`, `id_user`, `id_ipfsresource`) VALUES
	(31, '2020-12-08 06:55:47', '2020-12-08 06:55:47', 3, 12),
	(32, '2020-12-08 06:56:17', '2020-12-08 06:56:17', 3, 13),
	(33, '2020-12-09 03:54:32', '2020-12-09 03:54:32', 3, 19),
	(34, '2020-12-09 03:54:34', '2020-12-09 03:54:34', 3, 20),
	(35, '2020-12-09 04:55:41', '2020-12-09 04:55:41', 1, 15),
	(36, '2020-12-09 05:15:16', '2020-12-09 05:15:16', 1, 25),
	(37, '2020-12-09 05:17:09', '2020-12-09 05:17:09', 1, 26),
	(38, '2020-12-09 07:27:59', '2020-12-09 07:27:59', 1, 31),
	(39, '2020-12-09 08:14:02', '2020-12-09 08:14:02', 1, 31),
	(40, '2020-12-09 08:35:10', '2020-12-09 08:35:10', 3, 18),
	(41, '2020-12-09 08:41:38', '2020-12-09 08:41:38', 3, 12),
	(42, '2020-12-09 08:42:23', '2020-12-09 08:42:23', 3, 12),
	(43, '2020-12-09 08:43:32', '2020-12-09 08:43:32', 3, 12),
	(44, '2020-12-09 08:44:18', '2020-12-09 08:44:18', 3, 12),
	(45, '2020-12-09 08:46:42', '2020-12-09 08:46:42', 3, 12),
	(46, '2020-12-09 08:47:27', '2020-12-09 08:47:27', 3, 12),
	(47, '2020-12-09 08:47:51', '2020-12-09 08:47:51', 3, 12),
	(48, '2020-12-09 08:48:08', '2020-12-09 08:48:08', 3, 12),
	(49, '2020-12-09 08:52:17', '2020-12-09 08:52:17', 3, 12),
	(50, '2020-12-09 08:52:42', '2020-12-09 08:52:42', 3, 12),
	(51, '2020-12-10 07:52:40', '2020-12-10 07:52:40', 3, 12),
	(52, '2020-12-10 07:56:15', '2020-12-10 07:56:15', 3, 12),
	(53, '2020-12-10 07:56:54', '2020-12-10 07:56:54', 3, 12),
	(54, '2020-12-10 07:57:29', '2020-12-10 07:57:29', 3, 13),
	(55, '2020-12-10 07:57:37', '2020-12-10 07:57:37', 3, 14),
	(56, '2020-12-10 07:57:47', '2020-12-10 07:57:47', 3, 15),
	(57, '2020-12-10 07:58:53', '2020-12-10 07:58:53', 3, 13),
	(58, '2020-12-10 08:13:33', '2020-12-10 08:13:33', 3, 30),
	(59, '2020-12-10 08:13:39', '2020-12-10 08:13:39', 3, 31),
	(60, '2020-12-10 08:16:11', '2020-12-10 08:16:11', 3, 31),
	(61, '2020-12-10 08:19:31', '2020-12-10 08:19:31', 3, 31),
	(62, '2020-12-10 08:19:43', '2020-12-10 08:19:43', 3, 31),
	(63, '2020-12-10 08:20:10', '2020-12-10 08:20:10', 3, 31),
	(64, '2020-12-10 08:20:12', '2020-12-10 08:20:12', 3, 31),
	(65, '2020-12-10 08:20:12', '2020-12-10 08:20:12', 3, 31),
	(66, '2020-12-10 08:20:12', '2020-12-10 08:20:12', 3, 31),
	(67, '2020-12-10 08:20:12', '2020-12-10 08:20:12', 3, 31),
	(68, '2020-12-10 08:20:12', '2020-12-10 08:20:12', 3, 31),
	(69, '2020-12-10 08:20:13', '2020-12-10 08:20:13', 3, 31),
	(70, '2020-12-10 08:20:14', '2020-12-10 08:20:14', 3, 31),
	(71, '2020-12-10 08:20:14', '2020-12-10 08:20:14', 3, 31),
	(72, '2020-12-10 08:20:14', '2020-12-10 08:20:14', 3, 31),
	(73, '2020-12-10 08:20:20', '2020-12-10 08:20:20', 3, 31),
	(74, '2020-12-10 08:45:09', '2020-12-10 08:45:09', 3, 13),
	(75, '2020-12-10 08:45:16', '2020-12-10 08:45:16', 3, 14),
	(76, '2020-12-10 09:08:40', '2020-12-10 09:08:40', 3, 12),
	(77, '2020-12-10 09:08:50', '2020-12-10 09:08:50', 3, 12),
	(78, '2020-12-10 09:08:56', '2020-12-10 09:08:56', 3, 12),
	(79, '2020-12-10 09:09:12', '2020-12-10 09:09:12', 3, 12),
	(80, '2020-12-10 09:10:01', '2020-12-10 09:10:01', 3, 12),
	(81, '2020-12-10 09:11:33', '2020-12-10 09:11:33', 3, 12),
	(82, '2020-12-10 09:11:40', '2020-12-10 09:11:40', 3, 12),
	(83, '2020-12-10 09:20:53', '2020-12-10 09:20:53', 3, 20),
	(84, '2020-12-10 09:20:59', '2020-12-10 09:20:59', 3, 22),
	(85, '2020-12-10 09:21:07', '2020-12-10 09:21:07', 3, 20),
	(86, '2020-12-10 09:25:08', '2020-12-10 09:25:08', 3, 17),
	(87, '2020-12-10 14:13:18', '2020-12-10 14:13:18', 3, 12),
	(88, '2020-12-10 16:14:58', '2020-12-10 16:14:58', 3, 17),
	(89, '2020-12-10 16:19:17', '2020-12-10 16:19:17', 3, 33),
	(90, '2020-12-10 17:59:21', '2020-12-10 17:59:21', 3, 34),
	(91, '2020-12-10 19:09:36', '2020-12-10 19:09:36', 3, 36),
	(92, '2020-12-14 10:15:25', '2020-12-14 10:15:25', 3, 38),
	(93, '2020-12-14 10:21:18', '2020-12-14 10:21:18', 3, 12),
	(94, '2020-12-14 16:18:23', '2020-12-14 16:18:23', 3, 15),
	(95, '2020-12-14 16:18:47', '2020-12-14 16:18:47', 3, 15),
	(96, '2020-12-14 16:24:52', '2020-12-14 16:24:52', 3, 13),
	(97, '2020-12-14 17:41:04', '2020-12-14 17:41:04', 3, 12),
	(98, '2020-12-14 17:41:49', '2020-12-14 17:41:49', 3, 12),
	(99, '2020-12-14 17:42:03', '2020-12-14 17:42:03', 3, 12),
	(100, '2020-12-14 17:42:03', '2020-12-14 17:42:03', 3, 12),
	(101, '2020-12-14 17:42:04', '2020-12-14 17:42:04', 3, 12),
	(102, '2020-12-14 17:42:04', '2020-12-14 17:42:04', 3, 12),
	(103, '2020-12-14 17:42:04', '2020-12-14 17:42:04', 3, 12),
	(104, '2020-12-14 17:43:12', '2020-12-14 17:43:12', 3, 12),
	(105, '2020-12-14 17:43:24', '2020-12-14 17:43:24', 3, 12),
	(106, '2020-12-14 17:43:36', '2020-12-14 17:43:36', 3, 17),
	(107, '2020-12-14 17:44:01', '2020-12-14 17:44:01', 3, 17),
	(108, '2020-12-14 18:01:42', '2020-12-14 18:01:42', 3, 44),
	(109, '2020-12-14 18:03:25', '2020-12-14 18:03:25', 3, 44),
	(110, '2020-12-14 18:03:27', '2020-12-14 18:03:27', 3, 45),
	(111, '2020-12-14 18:08:57', '2020-12-14 18:08:57', 3, 46),
	(112, '2020-12-14 18:21:06', '2020-12-14 18:21:06', 3, 47),
	(113, '2020-12-14 18:36:21', '2020-12-14 18:36:21', 3, 48),
	(114, '2020-12-15 14:14:07', '2020-12-15 14:14:07', 3, 49),
	(115, '2020-12-16 09:33:45', '2020-12-16 09:33:45', 3, 50),
	(116, '2020-12-17 06:54:40', '2020-12-17 06:54:40', 3, 52),
	(117, '2021-01-07 13:56:39', '2021-01-07 13:56:39', 3, 53),
	(118, '2021-01-07 14:51:46', '2021-01-07 14:51:46', 3, 53),
	(119, '2021-01-11 06:58:29', '2021-01-11 06:58:29', 3, 54),
	(120, '2021-02-05 13:30:19', '2021-02-05 13:30:19', 3, 55),
	(121, '2021-02-05 13:42:41', '2021-02-05 13:42:41', 3, 57),
	(122, '2021-02-05 15:31:20', '2021-02-05 15:31:20', 3, 59),
	(123, '2021-02-05 15:31:22', '2021-02-05 15:31:22', 3, 58),
	(124, '2021-02-07 07:58:19', '2021-02-07 07:58:19', 3, 59);
/*!40000 ALTER TABLE `ipfs_users` ENABLE KEYS */;

-- Dumping structure for table elearning.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.migrations: ~15 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2020_05_21_100000_create_teams_table', 1),
	(7, '2020_05_21_200000_create_team_user_table', 1),
	(8, '2020_10_03_105759_create_sessions_table', 1),
	(9, '2020_10_05_022127_add_user_2125654', 1),
	(10, '2020_10_05_135341_create_courses_table', 1),
	(11, '2020_10_05_135942_create_coursefile_2325654', 1),
	(12, '2020_10_06_000749_create_class_courses_table', 1),
	(13, '2020_10_06_034528_add_coursefile_23123123', 1),
	(14, '2020_10_06_064624_add_courselect_23123123', 1),
	(15, '2020_10_19_044107_add_coursefile_12577256', 1),
	(16, '2020_12_01_072040_create_products_table', 2),
	(17, '2020_12_02_030241_create_i_p_f_s_resources_table', 3),
	(18, '2020_12_03_072650_create_ipfs_users_table', 4),
	(19, '2020_12_10_142440_create_ipfs_buys_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table elearning.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table elearning.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table elearning.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.sessions: ~5 rows (approximately)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('9ApFvEAIPYjchODZF08HX2FTdEN7kreRqGIOrbv3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36 Edg/88.0.705.63', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGhZajBnSGt1d0Y5eURrbHB2cDNOV0poakZub0xac0FBdDd4MGZSRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9lbGVhcm5pbmcudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1612710260),
	('EcOJDGWhXwsSHrPqj7OHXMYbQvN4OZcnkoKFP2bk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36 Edg/88.0.705.56', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0FPYUFSd1ZPN2hLdmo4NXZRWHdWb29MbVdnWHJZcnlySUZIV3lkWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZWxlYXJuaW5nLnRlc3QiO319', 1612539289),
	('Gsna3R4OouIChnsHPkhqMSHxpHwERoTnVrxWT3Gm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36 Edg/88.0.705.63', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT2R2ODRYV053ZnVZcVk1d1FDVG9jWlpyVFBxT0RIaENTYXNmOWNXVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZWxlYXJuaW5nLnRlc3QiO319', 1612684942),
	('hDLlP4F2jV9QRgC0BYqGXGmipgGHbvOrcRPmII9D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36 Edg/88.0.705.63', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1EyWnFuMUxSWjBWMTJ1YU5hREtSY1FnZDlYR3BqNGNQdlkxMXh3ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZWxlYXJuaW5nLnRlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1612667947),
	('KOSaAq36z3SChEy9aQ3SQjdEFxCt6e6oCWbOUgF3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36 Edg/88.0.705.63', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1NtQng4NkFaRDRyVnZYS3FlTDFDdnNpZE9VeHZ4aTNWQVJRQ01NTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9lbGVhcm5pbmcudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1612760930),
	('uL7OXYZYTB7dxHb6peW9bF8QBHuxYZ07Pm2rmaaF', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.83 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUW5aUEhiZjJkTlJwc01wTzY5eHY5OFJqSXg5WDlDZ1dIa3FzRXFlMyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ0OiJodHRwczovL2VsZWFybmluZy50ZXN0LzNkX21vZGVsX3ZpZXdfaXBmcy81MyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQzWVN0TVREWlVhMVhmVjJMREF1LlAuekFQejJBRHFWVnFqeGphZHVxZ0trZ0R6SGdhUHAvZSI7fQ==', 1612531895);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table elearning.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.teams: ~8 rows (approximately)
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
	(1, 2, 'hakim\'s Class', 1, '2020-11-10 05:19:09', '2020-11-10 05:19:09'),
	(2, 3, 'hakimlecturer\'s Class', 1, '2020-11-10 05:38:17', '2020-11-10 05:38:17'),
	(6, 3, 'SCSR', 0, '2020-11-29 08:52:30', '2020-11-29 08:52:30'),
	(7, 5, 'SCSV', 0, '2020-11-30 01:30:11', '2020-11-30 01:30:11'),
	(9, 3, 'SECP', 0, '2020-11-30 01:40:18', '2020-11-30 01:40:18'),
	(10, 3, 'Programming Technique ', 0, '2020-12-07 03:46:42', '2020-12-07 03:46:42'),
	(11, 6, 'Dr\'s Class', 1, '2021-01-05 05:27:35', '2021-01-05 05:27:35'),
	(13, 3, 'SCSJ', 0, '2021-01-07 17:59:19', '2021-01-07 17:59:19'),
	(14, 7, 'SCSR1', 0, '2021-01-08 17:34:11', '2021-01-08 17:34:11'),
	(15, 3, 'Software Engineering Piji', 0, '2021-02-05 14:50:35', '2021-02-05 14:50:35');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Dumping structure for table elearning.team_user
CREATE TABLE IF NOT EXISTS `team_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.team_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `team_user` DISABLE KEYS */;
INSERT INTO `team_user` (`id`, `team_id`, `user_id`, `role`, `created_at`, `updated_at`) VALUES
	(1, 13, 2, 'admin', '2021-01-08 17:37:15', '2021-01-08 17:37:15');
/*!40000 ALTER TABLE `team_user` ENABLE KEYS */;

-- Dumping structure for table elearning.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table elearning.users: ~8 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role`) VALUES
	(1, 'Admin', 'admin@mail.com', NULL, '$2y$10$xLJqZAplVQoDskbRtLnHgejJOiv.Kb/X.LcQsajK2.yNcGwgN1Ouu', NULL, NULL, 'CkgjcvRe48oXnAtYikRoLqkXt0ORrNWHXtEH3ckKdcqRbddjnvK9bti39OEM', NULL, NULL, '2020-11-10 05:35:53', '2020-11-10 05:35:53', 'admin'),
	(2, 'hakimstudent', 'hakimstudent77@gmail.com', NULL, '$2y$10$SQK0sJiM3hZ5dg.g7o55iuff4ZHWloxu/SX/Ymg.wMCk05yhoMx5C', NULL, NULL, 'vSbvmT1Q9ksnT7yLLes29pr9Wn5UXgUdrkxAZ9MWPPHSEgSxmHuq9HaQ5XDB', 13, NULL, '2020-11-10 05:37:33', '2021-01-08 17:37:37', 'student'),
	(3, 'hakimlecturer', 'hakimlecturer@77gmail.com', NULL, '$2y$10$3YStMTDZUa1XfV2LDAu.P.zAPz2ADqVVqjxjaduqgKkgDzHgaPp/e', NULL, NULL, 'ShX7h1JXBN5AOWMnYOtnOmgY0MJGyp2nZPNu94RE9Z9jPhzaeok2ZAa1dRGx', 13, NULL, '2020-11-10 05:38:17', '2021-01-07 17:59:24', 'lecturer'),
	(4, 'Hafizistudent', 'hafizistudent77@mail.com', NULL, '$2y$10$4Ve6BqZ6WGwKxu9OEDcaYeRHiEopYs.2u0WI0Ka5C36RX1NQ9Fp2a', NULL, NULL, NULL, NULL, NULL, '2020-11-29 08:53:22', '2020-11-29 08:53:22', 'student'),
	(5, 'Hafizilecturer', 'hafizilecturer77@mail.com', NULL, '$2y$10$I/JZgGOGWOUBjvXd4MRxWuz96ey1Z4v4kxWtwtCN0m2PDU0Wa9pf2', NULL, NULL, NULL, NULL, NULL, '2020-11-29 08:53:41', '2020-11-29 08:53:41', 'lecturer'),
	(6, 'Dr John', 'johnlecturer77@gmail.com', NULL, '$2y$10$pgl.CVoyo.i94YiIQFL7wuxIyUvk2wW.ZxnpMvPZEJ2uKEwbUcEzq', NULL, NULL, NULL, NULL, NULL, '2021-01-05 05:27:35', '2021-01-05 05:27:35', 'lecturer'),
	(7, 'En Ahmad', 'Ahmad@77gmail.com', NULL, '$2y$10$PjCt7uE4KZNXwUcXqjrCYutzey379q0yamJMZcuJ2zBpU3P5Bz4Ci', NULL, NULL, NULL, NULL, NULL, '2021-01-08 17:26:54', '2021-01-08 17:26:54', 'lecturer'),
	(8, 'Asri', 'asri@77gmail.com', NULL, '$2y$10$xVFWZzeiTXp9XT7Pg.V7Yexic7oeYdNyHnJX9Hpza12gNFXntFXaW', NULL, NULL, NULL, NULL, NULL, '2021-01-08 17:30:27', '2021-01-08 17:30:27', 'lecturer');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
