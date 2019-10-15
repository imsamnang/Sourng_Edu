-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2019 at 06:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourng_edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_infos`
--

DROP TABLE IF EXISTS `academic_infos`;
CREATE TABLE IF NOT EXISTS `academic_infos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `institution` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol_no` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` int(11) NOT NULL,
  `division_grade` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_subjects` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `sorting_order` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addressinfos`
--

DROP TABLE IF EXISTS `addressinfos`;
CREATE TABLE IF NOT EXISTS `addressinfos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_state` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` tinyint(4) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `commune_id` int(11) DEFAULT NULL,
  `village` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addressinfos`
--

INSERT INTO `addressinfos` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `students_id`, `address`, `state`, `country`, `temp_address`, `temp_state`, `temp_country`, `home_phone`, `mobile_1`, `mobile_2`, `province_id`, `district_id`, `commune_id`, `village`, `status`) VALUES
(1, '2019-01-24 19:24:03', '2019-08-02 09:38:25', 1, NULL, 1, 'សៀមរាប', 'CAMBODIA', 'CAMBODIA', 'សៀមរាប', 'CAMBODIA', 'CAMBODIA', '092771244', '093771244', NULL, NULL, NULL, NULL, NULL, 1),
(2, '2019-04-27 11:51:12', '2019-04-27 13:05:15', 1, NULL, 2, 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', '0977719665', '0977719665', NULL, NULL, NULL, NULL, NULL, 1),
(3, '2019-04-27 12:27:57', '2019-08-03 06:14:20', 1, NULL, 3, 'ជ្រាវ', 'សៀមរាប', 'កម្ពុជា', 'ជ្រាវ', 'សៀមរាប', 'កម្ពុជា', '090362079', '090362079', NULL, NULL, NULL, NULL, NULL, 1),
(4, '2019-04-27 12:37:28', '2019-04-27 12:53:37', 1, NULL, 4, 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', 'NA', '010564222', 'NAK', NULL, NULL, NULL, NULL, 1),
(5, '2019-04-27 12:37:54', '2019-04-27 13:35:53', 1, NULL, 5, 'SIEMREAP', 'NA', 'CAMBODIA', 'SIEMREAP', 'NA', 'CAMBODIA', NULL, '017961632', NULL, NULL, NULL, NULL, NULL, 1),
(6, '2019-04-27 12:37:59', '2019-04-27 12:42:39', 1, NULL, 6, 'SIEM REAP', 'NA', 'CAMBODIAN', 'SIEM REAP', 'NA', 'CAMBODIAN', NULL, '0963542376', NULL, NULL, NULL, NULL, NULL, 1),
(7, '2019-04-27 12:48:41', '2019-04-27 12:48:41', 1, NULL, 7, 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', NULL, '0963542376', NULL, NULL, NULL, NULL, NULL, 1),
(8, '2019-04-27 12:49:25', '2019-04-27 13:08:47', 1, NULL, 8, 'KDEA RON', 'SIEM REAP', 'CAMBODIA', 'KDEA RON', 'SIEM REAP', 'CAMBODIA', '060631808', '060631808', NULL, NULL, NULL, NULL, NULL, 1),
(9, '2019-04-27 12:55:34', '2019-04-27 12:55:34', 1, NULL, 9, 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', NULL, '0975252712', NULL, NULL, NULL, NULL, NULL, 1),
(10, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 10, 'SIEM, REAP', 'NA', 'CAMBODIAN', 'HEAP HAT 1996@GMAIL.COM', 'NA', 'NA', NULL, '098727562', 'Na', NULL, NULL, NULL, NULL, 1),
(11, '2019-07-15 01:17:25', '2019-07-15 01:17:25', 1, NULL, 11, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក', 'ខេត្តសៀមរាប', 'កម្ពុជា', '0', '0', '0', '0977719665', '0964442376', NULL, NULL, NULL, NULL, NULL, 1),
(12, '2019-07-22 07:48:21', '2019-07-22 07:48:21', 1, NULL, 12, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក', 'ខេត្តសៀមរាប', NULL, NULL, NULL, NULL, '078343143', '078343143', '078343143', 4, 28, 179, 'Angkor Thom', 1),
(13, '2019-07-22 07:48:21', '2019-07-22 07:48:21', 1, NULL, 13, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក', 'ខេត្តសៀមរាប', NULL, NULL, NULL, NULL, '078343143', '078343143', '078343143', 4, 28, 179, 'Angkor Thom', 1),
(14, '2019-07-22 07:48:21', '2019-07-22 07:48:21', 1, NULL, 14, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក', 'ខេត្តសៀមរាប', NULL, NULL, NULL, NULL, '078343143', '078343143', '078343143', 4, 28, 179, 'Angkor Thom', 1),
(15, '2019-07-22 07:48:21', '2019-07-22 07:48:21', 1, NULL, 15, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក', 'ខេត្តសៀមរាប', NULL, NULL, NULL, NULL, '078343143', '078343143', '078343143', 4, 28, 179, 'Angkor Thom', 1),
(16, '2019-07-22 07:48:21', '2019-07-22 07:48:21', 1, NULL, 16, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក', 'ខេត្តសៀមរាប', NULL, NULL, NULL, NULL, '078343143', '078343143', '078343143', 4, 28, 179, 'Angkor Thom', 1),
(17, '2019-07-22 07:48:21', '2019-07-22 07:48:21', 1, NULL, 17, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក', 'ខេត្តសៀមរាប', NULL, NULL, NULL, NULL, '078343143', '078343143', '078343143', 4, 28, 179, 'Angkor Thom', 1),
(18, '2019-07-22 07:48:21', '2019-07-22 07:48:21', 1, NULL, 18, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក', 'ខេត្តសៀមរាប', NULL, NULL, NULL, NULL, '078343143', '078343143', '078343143', 4, 28, 179, 'Angkor Thom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alert_settings`
--

DROP TABLE IF EXISTS `alert_settings`;
CREATE TABLE IF NOT EXISTS `alert_settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms` tinyint(1) NOT NULL DEFAULT '1',
  `email` tinyint(1) NOT NULL DEFAULT '1',
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alert_settings`
--

INSERT INTO `alert_settings` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `event`, `sms`, `email`, `subject`, `template`, `status`) VALUES
(1, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'BirthdayWish', 0, 0, 'Wish Your Birthday', '', 1),
(2, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'StudentRegistration', 0, 0, 'Registration Information', 'Dear {first_name}, you are successfully registered in our institution with RegNo.{reg_no}. Thank You.', 1),
(3, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'StudentTransfer', 0, 0, 'Transfer Information', '\'Dear Student, we would like to inform you are successfully transferring to {semester}. Thank You.', 1),
(4, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'FeeReceive', 0, 0, 'Fees Receive Information', 'Dear Student, we would like to inform you. we received {amount} on {date}. Thank You.', 1),
(5, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'BalanceFees', 0, 0, 'Balance Fees Information', 'Dear Student, you have some due fees. please deposit on time. contact account for more information. Thank You.', 1),
(6, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'AttendanceConfirmation', 0, 0, 'Attendance Information', 'Dear Guardian, This is to inform you that {{first_name}} is {{status}} on {{date}}.', 1),
(7, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'LibraryRegistration', 0, 0, 'Library Registration Information', '', 1),
(8, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'LibraryReturnPeriodOver', 0, 0, 'Library Clearance Alert', '', 1),
(9, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'HostelRegistration', 0, 0, 'Hostel Registration Information', '', 1),
(10, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'HostelShift', 0, 0, 'Hostel Shift Information', '', 1),
(11, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'HostelLeave', 0, 0, 'Hostel Leave Information', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(10) UNSIGNED NOT NULL,
  `option_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_question_id_foreign` (`question_id`),
  KEY `answers_option_id_foreign` (`option_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `option_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2019-07-20 08:30:41', '2019-07-20 08:30:41'),
(2, 2, 5, 1, '2019-07-20 08:30:46', '2019-07-20 08:30:46'),
(3, 3, 9, 1, '2019-07-20 08:30:52', '2019-07-20 08:30:52'),
(10, 10, 28, 1, '2019-10-08 04:58:14', '2019-10-08 04:58:14'),
(11, 10, 29, 1, '2019-10-08 04:58:14', '2019-10-08 04:58:14'),
(12, 10, 32, 1, '2019-10-08 04:58:14', '2019-10-08 04:58:14'),
(13, 11, 34, 1, '2019-10-09 13:28:40', '2019-10-09 13:28:40'),
(14, 11, 35, 1, '2019-10-09 13:28:40', '2019-10-09 13:28:40'),
(15, 12, 39, 1, '2019-10-09 14:28:21', '2019-10-09 14:28:21'),
(16, 13, 42, 1, '2019-10-09 20:21:50', '2019-10-09 20:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `semesters_id` int(10) UNSIGNED NOT NULL,
  `subjects_id` int(10) UNSIGNED NOT NULL,
  `publish_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `years_id`, `semesters_id`, `subjects_id`, `publish_date`, `end_date`, `title`, `description`, `file`, `status`) VALUES
(1, '2019-08-02 09:31:25', '2019-10-09 16:10:06', 1, NULL, 2, 1, 1, '2019-08-02 00:00:00', '2019-08-25 00:00:00', 'FM Approvals Certification Marks', '<p>FM Approvals Certification Marks<br></p>', '5415_fm-approvals-certification-marks.pdf', 1),
(2, '2019-08-02 09:32:13', '2019-10-09 16:14:52', 1, 1, 2, 1, 1, '2019-10-10 00:00:00', '2019-10-17 00:00:00', 'Laravel 5.5 Trying to get property', '<p><span style=\"color: inherit; font-size: 18px; text-decoration-line: underline;\">Laravel 5.5 Trying to get property</span><br><a href=\"https://stackoverflow.com/questions/48422199/laravel-5-5-trying-to-get-property-id-of-non-object\" ping=\"/url?sa=t&source=web&rct=j&url=https://stackoverflow.com/questions/48422199/laravel-5-5-trying-to-get-property-id-of-non-object&ved=2ahUKEwjOxtavzOTjAhUDcCsKHR_MDkkQFjAAegQIBBAB\" style=\"color: rgb(102, 0, 153); text-decoration-line: underline; font-family: arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);\"></a></p>', '8195_laravel-55-trying-to-get-property.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignment_answers`
--

DROP TABLE IF EXISTS `assignment_answers`;
CREATE TABLE IF NOT EXISTS `assignment_answers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `assignments_id` int(10) UNSIGNED NOT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `answer_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci,
  `approve_status` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `association_kh` char(250) DEFAULT NULL,
  `association_en` char(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Member of Professional Association';

--
-- Dumping data for table `association`
--

INSERT INTO `association` (`id`, `association_kh`, `association_en`) VALUES
(1, 'គ្មាន', 'NONE'),
(2, 'សមាគមបុគ្គលិកសិក្សាខ្មែរ', 'Cambodia Teacher Association'),
(3, 'គណៈវិស្វករកម្ពុជា (BEC)', 'Board of Engineers Cambodia (BEC)');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

DROP TABLE IF EXISTS `attendances`;
CREATE TABLE IF NOT EXISTS `attendances` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `attendees_type` int(11) NOT NULL,
  `link_id` int(10) UNSIGNED NOT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `months_id` int(10) UNSIGNED NOT NULL,
  `day_1` int(11) NOT NULL DEFAULT '0',
  `day_2` int(11) NOT NULL DEFAULT '0',
  `day_3` int(11) NOT NULL DEFAULT '0',
  `day_4` int(11) NOT NULL DEFAULT '0',
  `day_5` int(11) NOT NULL DEFAULT '0',
  `day_6` int(11) NOT NULL DEFAULT '0',
  `day_7` int(11) NOT NULL DEFAULT '0',
  `day_8` int(11) NOT NULL DEFAULT '0',
  `day_9` int(11) NOT NULL DEFAULT '0',
  `day_10` int(11) NOT NULL DEFAULT '0',
  `day_11` int(11) NOT NULL DEFAULT '0',
  `day_12` int(11) NOT NULL DEFAULT '0',
  `day_13` int(11) NOT NULL DEFAULT '0',
  `day_14` int(11) NOT NULL DEFAULT '0',
  `day_15` int(11) NOT NULL DEFAULT '0',
  `day_16` int(11) NOT NULL DEFAULT '0',
  `day_17` int(11) NOT NULL DEFAULT '0',
  `day_18` int(11) NOT NULL DEFAULT '0',
  `day_19` int(11) NOT NULL DEFAULT '0',
  `day_20` int(11) NOT NULL DEFAULT '0',
  `day_21` int(11) NOT NULL DEFAULT '0',
  `day_22` int(11) NOT NULL DEFAULT '0',
  `day_23` int(11) NOT NULL DEFAULT '0',
  `day_24` int(11) NOT NULL DEFAULT '0',
  `day_25` int(11) NOT NULL DEFAULT '0',
  `day_26` int(11) NOT NULL DEFAULT '0',
  `day_27` int(11) NOT NULL DEFAULT '0',
  `day_28` int(11) NOT NULL DEFAULT '0',
  `day_29` int(11) NOT NULL DEFAULT '0',
  `day_30` int(11) NOT NULL DEFAULT '0',
  `day_31` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `attendees_type`, `link_id`, `years_id`, `months_id`, `day_1`, `day_2`, `day_3`, `day_4`, `day_5`, `day_6`, `day_7`, `day_8`, `day_9`, `day_10`, `day_11`, `day_12`, `day_13`, `day_14`, `day_15`, `day_16`, `day_17`, `day_18`, `day_19`, `day_20`, `day_21`, `day_22`, `day_23`, `day_24`, `day_25`, `day_26`, `day_27`, `day_28`, `day_29`, `day_30`, `day_31`, `status`) VALUES
(1, '2019-03-14 03:52:56', '2019-03-17 19:48:39', 1, 1, 2, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(2, '2019-03-14 04:54:14', '2019-03-17 19:48:39', 1, 1, 2, 2, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(3, '2019-03-14 04:54:14', '2019-03-17 19:48:39', 1, 1, 2, 3, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(4, '2019-03-14 04:54:14', '2019-03-17 19:48:39', 1, 1, 2, 4, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(5, '2019-03-14 05:04:35', '2019-03-14 05:04:35', 3, NULL, 1, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(6, '2019-04-05 01:38:59', '2019-04-05 01:38:59', 1, NULL, 2, 1, 2, 4, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(7, '2019-04-05 01:38:59', '2019-04-05 01:38:59', 1, NULL, 2, 2, 2, 4, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(8, '2019-04-05 01:38:59', '2019-04-05 01:38:59', 1, NULL, 2, 3, 2, 4, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(9, '2019-04-05 01:38:59', '2019-04-05 01:38:59', 1, NULL, 2, 4, 2, 4, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(10, '2019-04-27 13:14:21', '2019-04-27 13:14:21', 1, NULL, 1, 2, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(11, '2019-04-27 13:14:21', '2019-04-27 13:14:21', 1, NULL, 1, 3, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(12, '2019-04-27 13:14:21', '2019-04-27 13:14:21', 1, NULL, 1, 4, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(13, '2019-04-27 13:14:21', '2019-04-27 13:14:21', 1, NULL, 1, 5, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(14, '2019-04-27 13:14:21', '2019-04-27 13:14:21', 1, NULL, 1, 7, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(15, '2019-04-27 13:14:21', '2019-04-27 13:14:21', 1, NULL, 1, 8, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(16, '2019-04-27 13:14:21', '2019-04-27 13:14:21', 1, NULL, 1, 9, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(17, '2019-04-27 13:14:21', '2019-04-27 13:14:21', 1, NULL, 1, 10, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(18, '2019-05-03 18:10:58', '2019-05-10 17:54:10', 1, 1, 1, 2, 2, 5, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(19, '2019-05-03 18:10:58', '2019-05-10 17:54:10', 1, 1, 1, 3, 2, 5, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(20, '2019-05-03 18:10:58', '2019-05-10 17:54:10', 1, 1, 1, 4, 2, 5, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(21, '2019-05-03 18:10:58', '2019-05-10 17:54:10', 1, 1, 1, 5, 2, 5, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22, '2019-05-03 18:10:58', '2019-05-10 17:54:10', 1, 1, 1, 7, 2, 5, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(23, '2019-05-03 18:10:58', '2019-05-10 17:54:10', 1, 1, 1, 8, 2, 5, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(24, '2019-05-03 18:10:58', '2019-05-10 17:54:10', 1, 1, 1, 9, 2, 5, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(25, '2019-05-03 18:10:58', '2019-05-10 17:54:10', 1, 1, 1, 10, 2, 5, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(26, '2019-08-02 06:16:21', '2019-08-02 06:16:21', 1, NULL, 1, 11, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(27, '2019-08-02 06:16:21', '2019-08-02 06:16:21', 1, NULL, 1, 12, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(28, '2019-08-02 06:16:21', '2019-08-02 06:16:21', 1, NULL, 1, 13, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(29, '2019-08-02 06:16:41', '2019-08-02 06:16:41', 1, NULL, 1, 1, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(30, '2019-08-02 06:16:41', '2019-08-02 06:16:41', 1, NULL, 1, 15, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(31, '2019-08-02 06:16:41', '2019-08-02 06:16:41', 1, NULL, 1, 16, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(32, '2019-08-02 06:16:41', '2019-08-02 06:16:41', 1, NULL, 1, 19, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(33, '2019-08-02 06:17:27', '2019-08-02 06:17:27', 1, NULL, 1, 8, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(34, '2019-08-02 06:17:27', '2019-08-02 06:17:27', 1, NULL, 1, 9, 2, 8, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(35, '2019-08-02 06:17:27', '2019-08-02 06:17:27', 1, NULL, 1, 10, 2, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_masters`
--

DROP TABLE IF EXISTS `attendance_masters`;
CREATE TABLE IF NOT EXISTS `attendance_masters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  `month` int(10) UNSIGNED NOT NULL,
  `day_in_month` int(11) NOT NULL,
  `holiday` int(11) NOT NULL,
  `open` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_statuses`
--

DROP TABLE IF EXISTS `attendance_statuses`;
CREATE TABLE IF NOT EXISTS `attendance_statuses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_class` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `attendance_statuses_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance_statuses`
--

INSERT INTO `attendance_statuses` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `display_class`, `status`) VALUES
(1, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'PRESENT', 'btn-primary', 1),
(2, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'ABSENT', 'btn-danger', 1),
(3, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'LATE', 'btn-warning', 1),
(4, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'LEAVE', 'btn-success', 1),
(5, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'HOLIDAY', 'btn-info', 1);

-- --------------------------------------------------------

--
-- Table structure for table `average_scores`
--

DROP TABLE IF EXISTS `average_scores`;
CREATE TABLE IF NOT EXISTS `average_scores` (
  `avgid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `test_type_id` int(10) UNSIGNED NOT NULL,
  `avg_score` decimal(5,2) NOT NULL,
  `appear_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`avgid`),
  KEY `average_scores_user_id_foreign` (`user_id`),
  KEY `average_scores_subject_id_foreign` (`subject_id`),
  KEY `test_type_id` (`test_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `average_scores`
--

INSERT INTO `average_scores` (`avgid`, `user_id`, `subject_id`, `test_type_id`, `avg_score`, `appear_count`, `created_at`, `updated_at`) VALUES
(1, 13, 1, 0, '3.00', 1, '2019-07-20 08:38:43', '2019-07-20 08:38:43'),
(2, 13, 2, 0, '2.00', 1, '2019-07-20 08:40:24', '2019-07-20 08:40:24'),
(3, 13, 3, 0, '1.00', 1, '2019-07-20 08:40:59', '2019-07-20 08:40:59'),
(4, 15, 1, 2, '0.50', 2, '2019-09-18 08:08:31', '2019-09-18 08:12:25'),
(5, 15, 3, 2, '1.00', 1, '2019-09-18 08:10:27', '2019-09-18 08:10:27'),
(6, 15, 2, 2, '0.00', 1, '2019-09-18 08:12:57', '2019-09-18 08:12:57'),
(7, 1, 2, 2, '2.00', 1, '2019-09-18 08:16:29', '2019-09-18 08:16:29'),
(8, 1, 1, 1, '1.00', 1, '2019-09-18 08:20:38', '2019-09-18 08:20:38'),
(9, 2, 3, 2, '1.00', 1, '2019-10-08 05:01:13', '2019-10-08 05:01:13'),
(10, 2, 1, 1, '1.00', 1, '2019-10-08 06:33:18', '2019-10-08 06:33:18'),
(11, 15, 4, 1, '2.50', 2, '2019-10-09 13:29:36', '2019-10-09 14:31:14'),
(12, 9, 4, 1, '1.00', 1, '2019-10-09 20:27:10', '2019-10-09 20:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

DROP TABLE IF EXISTS `beds`;
CREATE TABLE IF NOT EXISTS `beds` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `rooms_id` int(10) UNSIGNED NOT NULL,
  `bed_number` int(11) NOT NULL,
  `bed_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `hostels_id`, `rooms_id`, `bed_number`, `bed_status`) VALUES
(1, '2019-09-19 04:33:12', '2019-09-18 21:35:02', 2, NULL, 1, 2, 1, 2),
(2, '2019-09-19 04:33:12', '2019-09-18 21:39:55', 2, NULL, 1, 1, 2, 2),
(3, '2019-09-19 04:33:12', '2019-09-18 21:38:32', 2, NULL, 1, 10, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bed_statuses`
--

DROP TABLE IF EXISTS `bed_statuses`;
CREATE TABLE IF NOT EXISTS `bed_statuses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_class` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `bed_statuses_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bed_statuses`
--

INSERT INTO `bed_statuses` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `display_class`, `status`) VALUES
(1, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Available', 'btn-success', 1),
(2, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Occupied', 'btn-primary', 1),
(3, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Damage', 'btn-danger', 1),
(4, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'UnderConstruction', 'btn-default', 1),
(5, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'UnderMaintinance', 'btn-default', 1),
(6, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'NeedMaintinance', 'btn-default', 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `institute_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `book_masters_id` int(10) UNSIGNED NOT NULL,
  `book_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_status` int(10) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `books_book_code_unique` (`book_code`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `institute_id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `book_masters_id`, `book_code`, `book_status`) VALUES
(15, 0, '2019-10-09 15:59:58', '2019-10-09 16:12:01', 1, NULL, 3, 'JAP0131', 2),
(16, 0, '2019-10-09 15:59:58', '2019-10-09 16:02:52', 1, NULL, 3, 'JAP0132', 2),
(17, 0, '2019-10-09 15:59:58', '2019-10-09 15:59:58', 1, NULL, 3, 'JAP0133', 1),
(18, 0, '2019-10-09 15:59:58', '2019-10-09 16:03:49', 1, NULL, 3, 'JAP0134', 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

DROP TABLE IF EXISTS `book_categories`;
CREATE TABLE IF NOT EXISTS `book_categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `institute_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `book_categories_title_unique` (`title`),
  UNIQUE KEY `book_categories_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `institute_id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `slug`, `status`) VALUES
(1, 1, '2019-02-20 23:10:02', '2019-02-20 23:10:02', 1, NULL, 'C++ Programming Book', 'C++-Programming-Book', 1),
(2, 1, '2019-02-20 23:10:15', '2019-02-20 23:10:15', 1, NULL, 'JAVA PROGRAMMING', 'JAVA-PROGRAMMING', 1),
(3, 1, '2019-02-20 23:11:03', '2019-06-21 03:06:29', 1, NULL, 'WEB DESIGN', 'WEB-DESIGN', 1),
(4, 1, '2019-02-20 23:12:38', '2019-02-20 23:12:38', 1, NULL, 'សុខភាពបន្តពូជ', 'សុខភាពបន្តពូជ', 1),
(5, 1, '2019-08-03 06:08:04', '2019-08-03 06:08:04', 5, NULL, 'TEXT', 'TEXT', 1),
(6, 1, '2019-08-03 06:08:18', '2019-08-03 06:08:18', 5, NULL, 'NOVEL', 'NOVEL', 1),
(7, 1, '2019-08-03 06:08:28', '2019-08-03 06:08:28', 5, NULL, 'REFERENCE', 'REFERENCE', 1),
(8, 1, '2019-08-03 06:08:37', '2019-08-03 06:08:37', 5, NULL, 'MANUAL', 'MANUAL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_issues`
--

DROP TABLE IF EXISTS `book_issues`;
CREATE TABLE IF NOT EXISTS `book_issues` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `issued_on` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `return_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_issues`
--

INSERT INTO `book_issues` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `member_id`, `book_id`, `issued_on`, `due_date`, `return_date`, `status`) VALUES
(1, '2019-10-09 16:02:52', '2019-10-09 16:02:52', 1, NULL, 4, 16, '2019-10-09 23:02:52', '2019-10-13 23:02:52', NULL, 1),
(2, '2019-10-09 16:03:49', '2019-10-09 16:03:49', 1, NULL, 4, 18, '2019-10-09 23:03:49', '2019-10-13 23:03:49', NULL, 1),
(3, '2019-10-09 16:12:01', '2019-10-09 16:12:01', 1, NULL, 1, 15, '2019-10-09 23:12:01', '2019-10-13 23:12:01', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_masters`
--

DROP TABLE IF EXISTS `book_masters`;
CREATE TABLE IF NOT EXISTS `book_masters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `institute_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `isbn_number` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edition` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edition_year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `series` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rack_location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pages` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_masters`
--

INSERT INTO `book_masters` (`id`, `institute_id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `isbn_number`, `code`, `title`, `sub_title`, `image`, `language`, `editor`, `categories`, `edition`, `edition_year`, `publisher`, `publish_year`, `series`, `author`, `rack_location`, `price`, `total_pages`, `source`, `notes`, `status`) VALUES
(3, 1, '2019-10-09 15:59:58', '2019-10-09 15:59:58', 1, NULL, 'ISBN0002', 'JAP013', 'C++ Programming 3rd Edition', 'C++ Programming 3rd Edition', '9756.png', 'Khmer', NULL, '1', '3nd', '2019', '2019', '2019', '2nd', 'Seng Sourng', 'R2', '20', '230', 'RUPP', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_statuses`
--

DROP TABLE IF EXISTS `book_statuses`;
CREATE TABLE IF NOT EXISTS `book_statuses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_class` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `book_statuses_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_statuses`
--

INSERT INTO `book_statuses` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `display_class`, `status`) VALUES
(1, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Available', 'btn-success', 1),
(2, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Issued', 'btn-primary', 1),
(3, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Damage', 'btn-danger', 1),
(4, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Lost', 'btn-default', 1);

-- --------------------------------------------------------

--
-- Table structure for table `communes`
--

DROP TABLE IF EXISTS `communes`;
CREATE TABLE IF NOT EXISTS `communes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=912 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communes`
--

INSERT INTO `communes` (`id`, `district_id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
(1, 1, 'Svay Pak', '', NULL, NULL),
(2, 1, 'Russey Keo', '', NULL, NULL),
(3, 1, 'Toul Sangke', '', NULL, NULL),
(4, 1, 'Kilometr Lek 6', '', NULL, NULL),
(5, 1, 'Chrang Chamreh 1', '', NULL, NULL),
(6, 1, 'Chrang Chamreh 2', '', NULL, NULL),
(7, 2, 'Krang Thnong', '', NULL, NULL),
(8, 2, 'Khmuonh', '', NULL, NULL),
(9, 2, 'Phnom Penh Thmei', '', NULL, NULL),
(10, 2, 'Tuek Thla', '', NULL, NULL),
(11, 2, 'Obek Kaom', '', NULL, NULL),
(12, 3, 'Ovlaok', '', NULL, NULL),
(13, 3, 'Kamboul', '', NULL, NULL),
(14, 3, 'Kantaok', '', NULL, NULL),
(15, 3, 'Boeng Thum', '', NULL, NULL),
(16, 3, 'Phleung Chheh Roteh', '', NULL, NULL),
(17, 3, 'Chaom Chau', '', NULL, NULL),
(18, 3, 'Trapeang Krasang', '', NULL, NULL),
(19, 3, 'Kakab', '', NULL, NULL),
(20, 3, 'Samraong Kraom', '', NULL, NULL),
(21, 3, 'Snaor', '', NULL, NULL),
(22, 4, 'Bak Kheng', '', NULL, NULL),
(23, 4, 'Praek Leab', '', NULL, NULL),
(24, 4, 'Praek Ta Sek', '', NULL, NULL),
(25, 4, 'Chrouy Changvar', '', NULL, NULL),
(26, 4, 'Kaoh Dach', '', NULL, NULL),
(27, 5, 'Ponsang', '', NULL, NULL),
(28, 5, 'Kouk Roka', '', NULL, NULL),
(29, 5, 'Ponhea Pon', '', NULL, NULL),
(30, 5, 'Samraong', '', NULL, NULL),
(31, 5, 'Praek Phnov', '', NULL, NULL),
(32, 6, 'Veal Sbov', '', NULL, NULL),
(33, 6, 'Praek Aeng', '', NULL, NULL),
(34, 6, 'Chbar Ampov 1', '', NULL, NULL),
(35, 6, 'Chbar Ampov 2', '', NULL, NULL),
(36, 6, 'Nirouth', '', NULL, NULL),
(37, 6, 'Praek Pra', '', NULL, NULL),
(38, 6, 'Praek Thmei', '', NULL, NULL),
(39, 6, 'Kbal Kaoh', '', NULL, NULL),
(40, 7, 'Psar Thmei1', '', NULL, NULL),
(41, 7, 'Psar Thmei2', '', NULL, NULL),
(42, 7, 'Psar Thmei3', '', NULL, NULL),
(43, 7, 'Boeung Reang', '', NULL, NULL),
(44, 7, 'Psar Kandal1', '', NULL, NULL),
(45, 7, 'Psar Kandal2', '', NULL, NULL),
(46, 7, 'Chaktomukh', '', NULL, NULL),
(47, 7, 'Chey Chumneah', '', NULL, NULL),
(48, 7, 'Psar Chas', '', NULL, NULL),
(49, 7, 'Srah Chork', '', NULL, NULL),
(50, 7, 'Vat Phnum', '', NULL, NULL),
(51, 8, 'O Reussei 1', '', NULL, NULL),
(52, 8, 'O Reussei 2', '', NULL, NULL),
(53, 8, 'O Reussei 3', '', NULL, NULL),
(54, 8, 'O Reussei 4', '', NULL, NULL),
(55, 8, 'Monorom', '', NULL, NULL),
(56, 8, 'Mittapheap', '', NULL, NULL),
(57, 8, 'Vealvong', '', NULL, NULL),
(58, 8, 'Beung Prolit', '', NULL, NULL),
(59, 9, 'Psar Depot1', '', NULL, NULL),
(60, 9, 'Psar Depot2', '', NULL, NULL),
(61, 9, 'Psar Depot3', '', NULL, NULL),
(62, 9, 'Teuk Laork1', '', NULL, NULL),
(63, 9, 'Teuk Laork2', '', NULL, NULL),
(64, 9, 'Teuk Laork3', '', NULL, NULL),
(65, 9, 'Beung Kok1', '', NULL, NULL),
(66, 9, 'Beung Kok2', '', NULL, NULL),
(67, 9, 'Psar Deumkor', '', NULL, NULL),
(68, 9, 'Beung Salang', '', NULL, NULL),
(69, 10, 'Dangkor', '', NULL, NULL),
(70, 10, 'Prey Sa', '', NULL, NULL),
(71, 10, 'Cheung Aek', '', NULL, NULL),
(72, 10, 'Spean Thma', '', NULL, NULL),
(73, 10, 'Prey Vaeng', '', NULL, NULL),
(74, 10, 'Pong Tuek', '', NULL, NULL),
(75, 10, 'Prateah Lang', '', NULL, NULL),
(76, 10, 'Sak Sampov', '', NULL, NULL),
(77, 10, 'Krang Pongro', '', NULL, NULL),
(78, 10, 'Kong Noy', '', NULL, NULL),
(79, 10, 'Tien', '', NULL, NULL),
(80, 10, 'Praek Kampues', '', NULL, NULL),
(81, 11, 'Stung Meanchey', '', NULL, NULL),
(82, 11, 'Boeng Tompun', '', NULL, NULL),
(83, 11, 'Chak Angrae Leu', '', NULL, NULL),
(84, 11, 'Chak Angrae Kroam', '', NULL, NULL),
(85, 12, 'Tonle Bassac', '', NULL, NULL),
(86, 12, 'Beung Kengkang1', '', NULL, NULL),
(87, 12, 'Beung Kengkang2', '', NULL, NULL),
(88, 12, 'Beung Kengkang3', '', NULL, NULL),
(89, 12, 'Olympic', '', NULL, NULL),
(90, 12, 'Toul Svayprey1', '', NULL, NULL),
(91, 12, 'Toul Svayprey2', '', NULL, NULL),
(92, 12, 'Tomnub Teuk', '', NULL, NULL),
(93, 12, 'Toul Tompung1', '', NULL, NULL),
(94, 12, 'Toul Tompung2', '', NULL, NULL),
(95, 12, 'Beung Trabaek', '', NULL, NULL),
(96, 12, 'Psar Deumtkov', '', NULL, NULL),
(97, 13, 'Sangkat 1', '', NULL, NULL),
(98, 13, 'Sangkat 2', '', NULL, NULL),
(99, 13, 'Sangkat 3', '', NULL, NULL),
(100, 13, 'Sangkat 4', '', NULL, NULL),
(101, 13, 'Koh Rong', '', NULL, NULL),
(102, 14, 'Andong Thmar', '', NULL, NULL),
(103, 14, 'Beung Taprum', '', NULL, NULL),
(104, 14, 'Bet Trang', '', NULL, NULL),
(105, 14, 'Cheung Koar', '', NULL, NULL),
(106, 14, 'Ou Chrov', '', NULL, NULL),
(107, 14, 'Ou Oknha Heng', '', NULL, NULL),
(108, 14, 'Prey Nob', '', NULL, NULL),
(109, 14, 'Ream', '', NULL, NULL),
(110, 14, 'Sammaki', '', NULL, NULL),
(111, 14, 'Somrong', '', NULL, NULL),
(112, 14, 'Teuk Laork', '', NULL, NULL),
(113, 14, 'Teuk Tla', '', NULL, NULL),
(114, 14, 'Toul Toteung', '', NULL, NULL),
(115, 14, 'Veal Rinh', '', NULL, NULL),
(116, 15, 'Kompenh', '', NULL, NULL),
(117, 15, 'Ou Treh', '', NULL, NULL),
(118, 15, 'Tomnob Rolork', '', NULL, NULL),
(119, 15, 'Keo Phos', '', NULL, NULL),
(120, 16, 'Chomkar Loung', '', NULL, NULL),
(121, 16, 'Kampong Seila', '', NULL, NULL),
(122, 16, 'Ou Bak Roteh', '', NULL, NULL),
(123, 16, 'Steung Chhay', '', NULL, NULL),
(124, 17, 'Boeng Kok', '', NULL, NULL),
(125, 17, 'Kampong Cham', '', NULL, NULL),
(126, 17, 'Sambuor Meas', '', NULL, NULL),
(127, 17, 'Veal Vong', '', NULL, NULL),
(128, 18, 'Ampil', '', NULL, NULL),
(129, 18, 'Hann Chey', '', NULL, NULL),
(130, 18, 'Kien Chrey', '', NULL, NULL),
(131, 18, 'Kokor', '', NULL, NULL),
(132, 18, 'Kaoh Mitt', '', NULL, NULL),
(133, 18, 'Kaoh Roka', '', NULL, NULL),
(134, 18, 'Kaoh Samraong', '', NULL, NULL),
(135, 18, 'Kaoh Tontuem', '', NULL, NULL),
(136, 18, 'Krala', '', NULL, NULL),
(137, 18, 'Ou Svay', '', NULL, NULL),
(138, 18, 'Ro any', '', NULL, NULL),
(139, 18, 'Rumchek', '', NULL, NULL),
(140, 18, 'Srak', '', NULL, NULL),
(141, 18, 'Trean', '', NULL, NULL),
(142, 18, 'Vihear Thum', '', NULL, NULL),
(143, 19, 'Angkor Ban', '', NULL, NULL),
(144, 19, 'Kong Taneung', '', NULL, NULL),
(145, 19, 'Khchau', '', NULL, NULL),
(146, 19, 'Peam Chikong', '', NULL, NULL),
(147, 19, 'Prek Koy', '', NULL, NULL),
(148, 19, 'Prek Krabau', '', NULL, NULL),
(149, 19, 'Reay Pay', '', NULL, NULL),
(150, 19, 'Roka-a', '', NULL, NULL),
(151, 19, 'Roka-koy', '', NULL, NULL),
(152, 19, 'Sdau', '', NULL, NULL),
(153, 19, 'Sor Korng', '', NULL, NULL),
(154, 20, 'Kampong Reab', '', NULL, NULL),
(155, 20, 'Koh Sotin', '', NULL, NULL),
(156, 20, 'Tve', '', NULL, NULL),
(157, 20, 'Mohaleap', '', NULL, NULL),
(158, 20, 'Moha Knhoung', '', NULL, NULL),
(159, 20, 'Peam Brothnous', '', NULL, NULL),
(160, 20, 'Pongro', '', NULL, NULL),
(161, 20, 'Prek Tanung', '', NULL, NULL),
(162, 21, 'Baray', '', NULL, NULL),
(163, 21, 'Beung Nay', '', NULL, NULL),
(164, 21, 'Chrey Vean', '', NULL, NULL),
(165, 21, 'Mean', '', NULL, NULL),
(166, 21, 'Trapeang Preah', '', NULL, NULL),
(167, 21, 'Khvet Thum', '', NULL, NULL),
(168, 21, 'Kor', '', NULL, NULL),
(169, 21, 'Krouch', '', NULL, NULL),
(170, 21, 'Lvea', '', NULL, NULL),
(171, 21, 'Prey Chor', '', NULL, NULL),
(172, 21, 'Sor Sen', '', NULL, NULL),
(173, 21, 'Somrorng', '', NULL, NULL),
(174, 21, 'Sro Ngae', '', NULL, NULL),
(175, 21, 'Thma Poun', '', NULL, NULL),
(176, 21, 'Tong Rong', '', NULL, NULL),
(177, 22, 'Baray', '', NULL, NULL),
(178, 22, 'Chibal', '', NULL, NULL),
(179, 22, 'Khnar Sor', '', NULL, NULL),
(180, 22, 'Koh Andet', '', NULL, NULL),
(181, 22, 'Mean Chey', '', NULL, NULL),
(182, 22, 'Phteas Kandal', '', NULL, NULL),
(183, 22, 'Bram Yam', '', NULL, NULL),
(184, 22, 'Prek Dombok', '', NULL, NULL),
(185, 22, 'Prek Por', '', NULL, NULL),
(186, 22, 'Prek Romdeng', '', NULL, NULL),
(187, 22, 'Russey Srok', '', NULL, NULL),
(188, 22, 'Svay Por', '', NULL, NULL),
(189, 22, 'Svay Ksach Phnom', '', NULL, NULL),
(190, 22, 'Torng Trolach', '', NULL, NULL),
(191, 23, 'Areak Tnort', '', NULL, NULL),
(192, 23, 'Dorng Kdar', '', NULL, NULL),
(193, 23, 'Kpob Tangoun', '', NULL, NULL),
(194, 23, 'Mesar Chrey', '', NULL, NULL),
(195, 23, 'Or Mlou', '', NULL, NULL),
(196, 23, 'Peam Koh Sna', '', NULL, NULL),
(197, 23, 'Preah Andong', '', NULL, NULL),
(198, 23, 'Prek Kork', '', NULL, NULL),
(199, 23, 'Sopheas', '', NULL, NULL),
(200, 23, 'Toul Preahkhleang', '', NULL, NULL),
(201, 23, 'Toul Sombor', '', NULL, NULL),
(202, 24, 'Batheay', '', NULL, NULL),
(203, 24, 'Chbar Ampov', '', NULL, NULL),
(204, 24, 'Chealea', '', NULL, NULL),
(205, 24, 'Cheung Prey', '', NULL, NULL),
(206, 24, 'Me Pring', '', NULL, NULL),
(207, 24, 'Phav', '', NULL, NULL),
(208, 24, 'Sambour', '', NULL, NULL),
(209, 24, 'Sandaek', '', NULL, NULL),
(210, 24, 'Tang Krang', '', NULL, NULL),
(211, 24, 'Prasat', '', NULL, NULL),
(212, 24, 'Tang Krasang', '', NULL, NULL),
(213, 24, 'Trab Roung', '', NULL, NULL),
(214, 24, 'Tumnob', '', NULL, NULL),
(215, 25, 'Bos Khnaor', '', NULL, NULL),
(216, 25, 'Chamkar Andoung', '', NULL, NULL),
(217, 25, 'Cheyyou', '', NULL, NULL),
(218, 25, 'Lvea Leu', '', NULL, NULL),
(219, 25, 'Spueu', '', NULL, NULL),
(220, 25, 'Svay Teab', '', NULL, NULL),
(221, 25, 'Ta Ong', '', NULL, NULL),
(222, 25, 'Ta Prok', '', NULL, NULL),
(223, 26, 'Khnaor Dambang', '', NULL, NULL),
(224, 26, 'Kouk Rovieng', '', NULL, NULL),
(225, 26, 'Phdau Chum', '', NULL, NULL),
(226, 26, 'Prey Char', '', NULL, NULL),
(227, 26, 'Pring Chrum', '', NULL, NULL),
(228, 26, 'Sampong Chey', '', NULL, NULL),
(229, 26, 'Sdaeung Chey', '', NULL, NULL),
(230, 26, 'Soutip', '', NULL, NULL),
(231, 26, 'Srama', '', NULL, NULL),
(232, 26, 'Trapeang Kor', '', NULL, NULL),
(233, 27, 'Char Chhouk', 'ចារឈូក', NULL, NULL),
(234, 27, 'Daun Peng', 'ដូនពេង', NULL, NULL),
(235, 27, 'Koak Daung', 'គោកដូង', NULL, NULL),
(236, 27, 'Koal', 'គោល', NULL, NULL),
(237, 27, 'Nokor Pheas', 'នគរភាស', NULL, NULL),
(238, 27, 'Srae Khvav', 'ស្រែខ្វាវ', NULL, NULL),
(239, 27, 'Tasoam', 'តាសោម', NULL, NULL),
(240, 28, 'Chub Tatrav', 'ជប់តាត្រាវ', NULL, NULL),
(241, 28, 'Leang Dai', 'លាងដៃ', NULL, NULL),
(242, 28, 'Peak Snaeng', 'ពាក់ស្នែង', NULL, NULL),
(243, 28, 'Svay Chek', 'ស្វាយចេក', NULL, NULL),
(244, 29, 'Khnar Sanday', 'ខ្នារសណ្តាយ', NULL, NULL),
(245, 29, 'Khun Ream', 'ឃុនរាម', NULL, NULL),
(246, 29, 'Preak Dak', 'ព្រះដាក់', NULL, NULL),
(247, 29, 'Romchek', 'រំចេក', NULL, NULL),
(248, 29, 'Run Ta Aek', 'រុនតាឯក', NULL, NULL),
(249, 29, 'Tbaeng', 'ត្បែង', NULL, NULL),
(250, 30, 'Anlong Samnor', 'អន្លង់សំណរ', NULL, NULL),
(251, 30, 'Chi Kraeng', 'ជីក្រែង', NULL, NULL),
(252, 30, 'Kampong Kdei', 'កំពង់ក្តី', NULL, NULL),
(253, 30, 'Khvav', 'ខ្វាវ', NULL, NULL),
(254, 30, 'Koak Thlok Krom', 'គោកធ្លកក្រោម', NULL, NULL),
(255, 30, 'Koak Thlok Leu', 'គោកធ្លកលើ', NULL, NULL),
(256, 30, 'Lveng Russei', 'ល្វែងឫស្សី', NULL, NULL),
(257, 30, 'Pongro Krom', 'ពង្រក្រោម', NULL, NULL),
(258, 30, 'Pongro Leu', 'ពង្រលើ', NULL, NULL),
(259, 30, 'Russei Lok', 'ឫស្សីលក', NULL, NULL),
(260, 30, 'Songveuy', 'សង្វើយ', NULL, NULL),
(261, 30, 'Spean Tnoat', 'ស្ពានត្នោត', NULL, NULL),
(262, 31, 'Chonleas Dai', 'ជន្លាស់ដៃ', NULL, NULL),
(263, 31, 'Kampong Thkov', 'កំពង់ថ្កូវ', NULL, NULL),
(264, 31, 'Kralanh', 'ក្រឡាញ់', NULL, NULL),
(265, 31, 'Krouch Kor', 'ក្រូចគរ', NULL, NULL),
(266, 31, 'Roang Koar', 'រោងគោ', NULL, NULL),
(267, 31, 'Sambour', 'សំបួរ', NULL, NULL),
(268, 31, 'Sen Sok', 'សែនសុខ', NULL, NULL),
(269, 31, 'Snoul', 'ស្នួល', NULL, NULL),
(270, 31, 'Sronal', 'ស្រណាល', NULL, NULL),
(271, 31, 'Ta An', 'តាអាន', NULL, NULL),
(272, 32, 'Sosor Sdom', 'សសរស្តម្', NULL, NULL),
(273, 32, 'Daun Keo', 'ដូនកែវ', NULL, NULL),
(274, 32, 'Kdei Run', 'ក្តីរុន', NULL, NULL),
(275, 32, 'Keo Por', 'កែវពណ៌', NULL, NULL),
(276, 32, 'Khnat', 'ខ្នាត', NULL, NULL),
(277, 32, 'Lvea', 'ល្វា', NULL, NULL),
(278, 32, 'Mukh Paen', 'មុខប៉ែន', NULL, NULL),
(279, 32, 'Pou Treay', 'ពោធិទ្រាយ', NULL, NULL),
(280, 32, 'Pouk', 'ពួក', NULL, NULL),
(281, 32, 'Prey Chrouk', 'ព្រៃជ្រូក', NULL, NULL),
(282, 32, 'Reul', 'រើស', NULL, NULL),
(283, 32, 'Somroang Yea', 'សំរោងយា', NULL, NULL),
(284, 32, 'Treu Nhoar', 'ត្រីញ័រ', NULL, NULL),
(285, 32, 'Yeang', 'យាង', NULL, NULL),
(286, 32, 'Tuek Vil', 'ទឹកវិល', NULL, NULL),
(287, 32, 'Krabei Riel', 'ក្របីរៀល', NULL, NULL),
(288, 33, 'Bakong', 'បាគង', NULL, NULL),
(289, 33, 'Balangk', 'បល្ល័ង្គ', NULL, NULL),
(290, 33, 'Kampong Phluk', 'កំពង់ភ្លុក', NULL, NULL),
(291, 33, 'Kantreang', 'កន្ទ្រាំង', NULL, NULL),
(292, 33, 'Kandaek', 'កណ្តែក', NULL, NULL),
(293, 33, 'Meanchey', 'មានជ័យ', NULL, NULL),
(294, 33, 'Rolous', 'រលួស', NULL, NULL),
(295, 33, 'Trapeang Thom', 'ត្រពាំងធំ', NULL, NULL),
(296, 33, 'Ampil', 'អំពិល', NULL, NULL),
(297, 34, 'Slor Kram', 'ស្លក្រាម', NULL, NULL),
(298, 34, 'Svay Dongkum', 'ស្វាយដង្គំ', NULL, NULL),
(299, 34, 'Koak Chork', 'គោកចក', NULL, NULL),
(300, 34, 'Sala Komreuk', 'សាលាកំរើក', NULL, NULL),
(301, 34, 'Nokor Thom', 'នគរធំ', NULL, NULL),
(302, 34, 'Chreav', 'ជ្រាវ', NULL, NULL),
(303, 34, 'Chong Khneas', 'ចុងឃ្នៀស', NULL, NULL),
(304, 34, 'Sambour', 'សំបួរ', NULL, NULL),
(305, 34, 'Seam Reap', 'សៀមរាប', NULL, NULL),
(306, 34, 'Sragnae', 'ស្រង៉ែ', NULL, NULL),
(307, 34, 'Ampil', 'អំពិល', NULL, NULL),
(308, 34, 'Krabei Real', 'ក្របីរៀល', NULL, NULL),
(309, 34, 'Teuk Vil', 'ទឹកវិល', NULL, NULL),
(310, 35, 'Chan Sor', 'ចាន់ស', NULL, NULL),
(311, 35, 'Dom Daek', 'ដំដែក', NULL, NULL),
(312, 35, 'Danrun', 'ដានរុន', NULL, NULL),
(313, 35, 'Kampong Khleang', 'កំពង់ឃ្លាំង', NULL, NULL),
(314, 35, 'Kean Sangke', 'កៀនសង្កែ', NULL, NULL),
(315, 35, 'Khchas', 'ខ្ចាស់', NULL, NULL),
(316, 35, 'Khnar Pou', 'ខ្នារពោធិ៍', NULL, NULL),
(317, 35, 'Popel', 'ពពេល', NULL, NULL),
(318, 35, 'Samroang', 'សំរោង', NULL, NULL),
(319, 35, 'Ta Yaek', 'តាយ៉ែក', NULL, NULL),
(320, 36, 'Chroy Neang Ngoun', 'ជ្រោយនាងងួន', NULL, NULL),
(321, 36, 'Klang Hay', 'ក្លាំងហាយ', NULL, NULL),
(322, 36, 'Tram Sosor', 'ត្រាំសសរ', NULL, NULL),
(323, 36, 'Moang', 'មោង', NULL, NULL),
(324, 36, 'Brey', 'ប្រីយ៍', NULL, NULL),
(325, 36, 'Slaeng Spean', 'ស្លែងស្ពាន', NULL, NULL),
(326, 37, 'Beung Mealea', 'បឹងមាលា', NULL, NULL),
(327, 37, 'Kantout', 'កន្ទួត', NULL, NULL),
(328, 37, 'Khnorng Phnum', 'ខ្នងភ្នំ', NULL, NULL),
(329, 37, 'Svay Leu', 'ស្វាយលើ', NULL, NULL),
(330, 37, 'Ta Seam', 'តាសៀម', NULL, NULL),
(331, 38, 'Brasat', 'ប្រាសាទ', NULL, NULL),
(332, 38, 'Lvea Krang', 'ល្វាក្រាំង', NULL, NULL),
(333, 38, 'Srae Noy', 'ស្រែណូយ', NULL, NULL),
(334, 38, 'Svay Sor', 'ស្វាយស', NULL, NULL),
(335, 38, 'Varin', 'វ៉ារិន', NULL, NULL),
(336, 39, 'Kantueu Muoy', 'កន្ទឺ ១', NULL, NULL),
(337, 39, 'Kantueu Pir', 'កន្ទឺ ២', NULL, NULL),
(338, 39, 'Bay Damram', 'បាយដំរាំ', NULL, NULL),
(339, 39, 'Chheu Teal', '	ឈើទាល', NULL, NULL),
(340, 39, 'Chaeng Mean Chey', 'ចែងមានជ័យ', NULL, NULL),
(341, 39, 'Phnum Sampov', 'ភ្នំសំពៅ', NULL, NULL),
(342, 39, 'Snoeng', 'ស្នឹង', NULL, NULL),
(343, 39, 'Ta Kream', 'តាគ្រាម', NULL, NULL),
(344, 40, 'Ta Pung', 'តាពូង', NULL, NULL),
(345, 40, 'តាម៉ឺន', 'Ta Meun', NULL, NULL),
(346, 40, 'Ou Ta Ki', 'អូរតាគី', NULL, NULL),
(347, 40, 'Chrey', 'ជ្រៃ', NULL, NULL),
(348, 40, 'Anlong Run', 'អន្លង់រុន', NULL, NULL),
(349, 40, 'Chrouy Sdau', 'ជ្រោយស្តៅ', NULL, NULL),
(350, 40, 'Boeng Pring', 'បឹងព្រីង', NULL, NULL),
(351, 40, 'Kouk Khmum', 'គោកឃ្មុំ', NULL, NULL),
(352, 40, 'Bansay Traeng', 'បន្សាយត្រែង', NULL, NULL),
(353, 40, 'Rung Chrey', 'រូងជ្រៃ', NULL, NULL),
(354, 41, 'Tuol Ta Aek', 'ទួលតាឯក', NULL, NULL),
(355, 41, 'Preaek Preah Sdach', 'ព្រែកព្រះស្តេច', NULL, NULL),
(356, 41, 'Rotanak', 'រតនៈ', NULL, NULL),
(357, 41, 'Chamkar Samraong', 'ចំការសំរោង', NULL, NULL),
(358, 41, 'Sla Kaet', 'ស្លាកែត', NULL, NULL),
(359, 41, 'Kdol Doun Teav', 'ក្តុលដូនទាវ', NULL, NULL),
(360, 41, 'Ou Mal', 'អូរម៉ាល់', NULL, NULL),
(361, 41, 'Voat Kor', 'វត្តគរ', NULL, NULL),
(362, 41, 'Ou Char', 'អូរចារ', NULL, NULL),
(363, 41, 'Svay Pao', 'ស្វាយប៉ោ', NULL, NULL),
(364, 42, 'Bavel', 'បវេល', NULL, NULL),
(365, 42, 'Khnach Romeas', 'ខ្នាចរមាស', NULL, NULL),
(366, 42, 'Lvea', 'ល្វា', NULL, NULL),
(367, 42, 'Prey Khpos', 'ព្រៃខ្ពស់', NULL, NULL),
(368, 42, 'Ampil Pram Daeum', 'អំពិលប្រាំដើម', NULL, NULL),
(369, 42, 'Kdol Tahen', 'ក្តុលតាហែន', NULL, NULL),
(370, 42, 'Khlang meas', 'ខ្លាំងមាស', NULL, NULL),
(371, 42, 'Boeng pram', 'បឹងប្រាំ', NULL, NULL),
(372, 43, 'Preaek Norint', 'ព្រែកនរិន្ទ', NULL, NULL),
(373, 43, 'Samraong Knong', 'សំរោងក្នុង', NULL, NULL),
(374, 43, 'Preaek Khpob', 'ព្រែកខ្ពប', NULL, NULL),
(375, 43, 'Preaek Luong', 'ព្រែកហ្លួង', NULL, NULL),
(376, 43, 'Peam Aek', 'ពាមឯក', NULL, NULL),
(377, 43, 'Prey Chas', 'ព្រៃចាស់', NULL, NULL),
(378, 43, 'Kaoh Chiveang Thvang', 'កោះជីវាំង', NULL, NULL),
(379, 44, 'Moung', 'មោង', NULL, NULL),
(380, 44, 'Kear', 'គារ', NULL, NULL),
(381, 44, 'Prey Svay', 'ព្រៃស្វាយ', NULL, NULL),
(382, 44, 'Ruessei Krang', 'ឫស្សីក្រាំង', NULL, NULL),
(383, 44, 'Chrey', 'ជ្រៃ', NULL, NULL),
(384, 44, 'Ta Loas', 'តាលាស់', NULL, NULL),
(385, 44, 'Kakaoh', 'កកោះ', NULL, NULL),
(386, 44, 'Prey Touch', 'ព្រៃតូច', NULL, NULL),
(387, 44, 'Robas Mongkol', 'របស់មង្គល', NULL, NULL),
(388, 44, 'Break Chek', 'ព្រែកជីក', NULL, NULL),
(389, 44, 'Prey Trolach', 'ព្រៃត្រឡាច', NULL, NULL),
(390, 45, 'Sdau', 'ស្តៅ', NULL, NULL),
(391, 45, 'Andaeuk Haeb', 'អណ្តើកហែប', NULL, NULL),
(392, 45, 'Phlov Meas', 'ផ្លូវមាស', NULL, NULL),
(393, 45, 'Traeng', 'ត្រែង', NULL, NULL),
(394, 45, 'Reaksmey Sangha', 'រស្មីសង្ហារ', NULL, NULL),
(395, 46, 'Anlong Vil', 'អន្លង់វិល', NULL, NULL),
(396, 46, 'Norea', 'នរា', NULL, NULL),
(397, 46, 'Ta Pon', 'តាប៉ុន', NULL, NULL),
(398, 46, 'Roka', 'រកា', NULL, NULL),
(399, 46, 'Kampong Preah', 'កំពង់ព្រះ', NULL, NULL),
(400, 46, 'Kampong Prieng', 'កំពង់ព្រៀង', NULL, NULL),
(401, 46, 'Reang Kesei', 'រាំងកេសី', NULL, NULL),
(402, 46, 'Ou Dambang Muoy', 'អូរដំបង ១', NULL, NULL),
(403, 46, 'Ou Dambang Pir', 'អូរដំបង ២', NULL, NULL),
(404, 46, 'Vaot Ta Muem', 'វត្តតាមិម', NULL, NULL),
(405, 47, 'Ta Taok', 'តាតោក', NULL, NULL),
(406, 47, 'Kampong Lpou', 'កំពង់ល្ពៅ', NULL, NULL),
(407, 47, 'Ou Samrel', 'អូរសំរិល', NULL, NULL),
(408, 47, 'Sung', 'ស៊ុង', NULL, NULL),
(409, 47, 'Samlout', 'សំឡូត', NULL, NULL),
(410, 47, 'Mean Cheay', 'មានជ័យ', NULL, NULL),
(411, 47, 'Ta Sanh', 'តាសាញ', NULL, NULL),
(412, 48, 'Sampou Lun', 'សំពៅលូន', NULL, NULL),
(413, 48, 'Angkor Ban', 'អង្គរបាន', NULL, NULL),
(414, 48, 'Ta Sda', 'តាសា្ត', NULL, NULL),
(415, 48, 'Santepheap', 'សន្តិភាព', NULL, NULL),
(416, 48, 'Serei Maen Cheay', 'សិរីមានជ័យ', NULL, NULL),
(417, 48, 'Chrey Sema', 'ជ្រៃសីមា', NULL, NULL),
(418, 49, 'Phnum Proek', 'ភ្នំព្រឹក', NULL, NULL),
(419, 49, 'Pech Chenda', 'ពេជ្រចិន្តា', NULL, NULL),
(420, 49, 'Bou', 'បួរ', NULL, NULL),
(421, 49, 'Barang Thleak', 'បារាំងធ្លាក់', NULL, NULL),
(422, 49, 'Ou Rumduol', 'អូររំដួល', NULL, NULL),
(423, 50, 'Kamrieng', 'កំរៀង', NULL, NULL),
(424, 50, 'Boeng Reang', 'បឹងរាំង', NULL, NULL),
(425, 50, 'Ou Da', 'អូរដា', NULL, NULL),
(426, 50, 'Trang', 'ត្រាង', NULL, NULL),
(427, 50, 'Ta Saen', 'តាសែន', NULL, NULL),
(428, 50, 'Ta Krai', 'តាក្រី', NULL, NULL),
(429, 51, 'Thipakdei', 'ធិបតី', NULL, NULL),
(430, 51, 'Koas Krala', 'គាស់ក្រឡ', NULL, NULL),
(431, 51, 'Hab', 'ហប់', NULL, NULL),
(432, 51, 'Preah Phos', 'ព្រះផុស', NULL, NULL),
(433, 51, 'Doun Ba', 'ដូនបា', NULL, NULL),
(434, 51, 'Chhnal Moan', 'ឆ្នាល់មាន់', NULL, NULL),
(435, 52, 'Prek chik', 'ព្រែកជីក', NULL, NULL),
(436, 52, 'prey trolach', 'ព្រៃត្រឡាច', NULL, NULL),
(437, 52, 'Basak', 'បាសាក', NULL, NULL),
(438, 52, 'Mukrea', 'មុគគ្រា', NULL, NULL),
(439, 52, 'Sduk Provek', 'ស្តុកផ្រូវិក', NULL, NULL),
(440, 53, 'Ampov Prey', 'អំពៅព្រៃ', NULL, NULL),
(441, 53, 'Anlong Romiet', 'អន្លង់រមៀត', NULL, NULL),
(442, 53, 'Barku', 'បាគូ', NULL, NULL),
(443, 53, 'Boeng Khyang', 'បឹងខ្យាង', NULL, NULL),
(444, 53, 'Cheung Kaeub', 'ជើងកើប', NULL, NULL),
(445, 53, 'Daeum Rues', 'ដើមឫស', NULL, NULL),
(446, 53, 'Kandaok', 'កណ្តោក', NULL, NULL),
(447, 53, 'Thmei', 'ថ្មី', NULL, NULL),
(448, 53, 'Kouk Trab', 'គោកត្រប់', NULL, NULL),
(449, 53, 'Preah Putth', 'ព្រះពុទ្ធ', NULL, NULL),
(450, 53, 'Preaek Roka', 'ព្រែករកា', NULL, NULL),
(451, 53, 'Preaek Slaeng', 'ព្រែកស្លែង', NULL, NULL),
(452, 53, 'Roka', 'រកា', NULL, NULL),
(453, 53, 'Roleang Kaen', 'រលាំងកែន', NULL, NULL),
(454, 53, 'Siem Reab', 'សៀមរាប', NULL, NULL),
(455, 53, 'Tbaeng', 'ត្បែងទៀន', NULL, NULL),
(456, 53, 'Trapeang Veaeng', 'ត្រពាំងវែង', NULL, NULL),
(457, 53, 'Trea', 'ទ្រា', NULL, NULL),
(458, 54, 'Chheu Kmau', 'ឈើខ្មៅ', NULL, NULL),
(459, 54, 'Chrouy Ta Kae', 'ជ្រោយតាកែវ', NULL, NULL),
(460, 54, 'Kampong Kong', 'កំពង់កុង', NULL, NULL),
(461, 54, 'Kaoh Thum Ka', 'កោះធំ ក', NULL, NULL),
(462, 54, 'Kaoh Thum Kha', 'កោះធំ ខ', NULL, NULL),
(463, 54, 'Leuk Daek', 'លើកដែក', NULL, NULL),
(464, 54, 'Pouthi Ban', 'ពោធិ៍បាន', NULL, NULL),
(465, 54, 'Prea​ek Chrey', 'ព្រែកជ្រៃ', NULL, NULL),
(466, 54, 'Preaek Sdei', 'ព្រែកស្ដី', NULL, NULL),
(467, 54, 'Preaek Thmei', 'ព្រែកថ្មី', NULL, NULL),
(468, 54, 'Sampeou Poun', 'សំពៅពូន', NULL, NULL),
(469, 55, 'Praek Anchanh', 'ព្រែកអញ្ចាញ', NULL, NULL),
(470, 55, 'Praek Dombong', 'ព្រែកដំបង', NULL, NULL),
(471, 55, 'Rokakoang Ti Mouy', 'រកាកោងទី១', NULL, NULL),
(472, 55, 'Rokakoang Ti Pir', 'រកាកោងទី២', NULL, NULL),
(473, 55, 'Russei Chroay', 'ឫស្សីជ្រោយ', NULL, NULL),
(474, 55, 'Sambour Meas', 'សំបួរមាស', NULL, NULL),
(475, 55, 'Svay Ampear', 'ស្វាយអំពារ', NULL, NULL),
(476, 56, 'Khpob', 'ខ្ពប', NULL, NULL),
(477, 56, 'Kaoh Anlong Chen', 'កោះអន្លង់ចិន', NULL, NULL),
(478, 56, 'Kaoh Khael', 'កោះខែល', NULL, NULL),
(479, 56, 'Kaoh Khsach Tonlea', 'កោះខ្សាច់ទន្លា', NULL, NULL),
(480, 56, 'Krang Yov', 'ក្រាំងយ៉ូវ', NULL, NULL),
(481, 56, 'Prasat', 'ប្រាសាទ', NULL, NULL),
(482, 56, 'Preaek Ambel', 'ព្រែអំបិល', NULL, NULL),
(483, 56, 'Preaek Koy', 'ព្រែកគយ', NULL, NULL),
(484, 56, 'Roka Khpos', 'រកាខ្ពស់', NULL, NULL),
(485, 56, 'Sa ang Phnum', 'ស្អាងភ្នំ', NULL, NULL),
(486, 56, 'Setbou', 'សិត្បូ', NULL, NULL),
(487, 56, 'Svay Prateal', 'ស្វាយប្រទាល', NULL, NULL),
(488, 56, 'Svay Rolum', 'ស្វាយរលំ', NULL, NULL),
(489, 56, 'Ta Lon', 'តាលន់', NULL, NULL),
(490, 56, 'Traeuy Sla', 'ត្រើយស្លា', NULL, NULL),
(491, 56, 'Tuek Vil', 'ទឹកវិល', NULL, NULL),
(492, 57, 'Kampong Phnum', 'កំពង់ភ្នំ', NULL, NULL),
(493, 57, 'K am Samnar', 'ក្អមសំណ', NULL, NULL),
(494, 57, 'Khpob Ateav', 'ខ្ពបអាទាវ', NULL, NULL),
(495, 57, 'Peam Reang ', 'ពាមរាំង', NULL, NULL),
(496, 57, 'Preaek Dach', 'ព្រែកដាច់', NULL, NULL),
(497, 57, 'Preaek Tonloab', 'ព្រែកទន្លាប់', NULL, NULL),
(498, 57, 'Sandar', 'សណ្ដារ', NULL, NULL),
(499, 58, 'Ta Kdol', 'តាក្ដុល', NULL, NULL),
(500, 58, 'Prek Ruessey', 'ព្រែកឫស្សី', NULL, NULL),
(501, 58, 'Doeum Mien', 'ដើមមៀន', NULL, NULL),
(502, 58, 'Ta Khmao', 'តាខ្មៅ', NULL, NULL),
(503, 58, 'Prek Ho', 'ព្រែកហូរ', NULL, NULL),
(504, 58, 'Kampong Samnanh', 'កំពង់សំណាញ់', NULL, NULL),
(505, 58, 'Svay Rolum', 'ស្វាយរលំ', NULL, NULL),
(506, 58, 'Setbou', 'សិត្បូ', NULL, NULL),
(507, 58, 'Roka Kpos', 'រកាខ្ពស់', NULL, NULL),
(508, 58, 'Khosh Anlong Chien', 'កោះអន្លង់ចិន', NULL, NULL),
(509, 59, 'Banteay Daek', 'បន្ទាយដែក', NULL, NULL),
(510, 59, 'Chheu Teal', 'ឈើទាល', NULL, NULL),
(511, 59, 'Dei Edth', 'ដីឥដ្ឋ', NULL, NULL),
(512, 59, 'Kampong Svay', 'កំពង់ស្វាយ', NULL, NULL),
(513, 59, 'Kokir', 'គគីរ', NULL, NULL),
(514, 59, 'Kokir Thum', 'គគីរធំ', NULL, NULL),
(515, 59, 'Phum Thum', 'ភូមិធំ', NULL, NULL),
(516, 59, 'Samraong Thum', 'សំរោងធំ', NULL, NULL),
(517, 60, 'Chhveang', 'ឈ្វាំង', NULL, NULL),
(518, 60, 'Chrey Loas', 'ជ្រៃលាស់', NULL, NULL),
(519, 60, 'Kampong Luong', 'កំពង់ហ្លួង', NULL, NULL),
(520, 60, 'Kampong Os', 'កំពង់អុស', NULL, NULL),
(521, 60, 'Kaoh Chen', 'កោះចិន', NULL, NULL),
(522, 60, 'Phnum Bat', 'ភ្នំបាត', NULL, NULL),
(523, 60, 'Ponhea Lueu', 'ពញាឮ', NULL, NULL),
(524, 60, 'Preaek Ta Teaen', 'ព្រែកតាទែន', NULL, NULL),
(525, 60, 'Vihear Luong', 'ផ្សារដែក', NULL, NULL),
(526, 60, 'Tumnob Thum', 'ទំនប់ធំ', NULL, NULL),
(527, 60, 'Vihear Luong', 'វិហារហ្លួង', NULL, NULL),
(528, 61, 'Ariyaksatr', 'អរិយក្សត្រ', NULL, NULL),
(529, 61, 'Barong', 'បារុង', NULL, NULL),
(530, 61, 'Beung Krum', 'បឹងគ្រំ', NULL, NULL),
(531, 61, 'Koh Keo', 'កោះកែវ', NULL, NULL),
(532, 61, 'Koh Reah', 'កោះរះ', NULL, NULL),
(533, 61, 'Lvea Sor', 'ល្វាសរ', NULL, NULL),
(534, 61, 'Peam Okhna Ong', 'ពាមឧកញ៉ាអុង', NULL, NULL),
(535, 61, 'Phum Thom', 'ភូមិធំ', NULL, NULL),
(536, 61, 'Praek Kmeng', 'ព្រែកក្មេង', NULL, NULL),
(537, 61, 'Praek Rey', 'ព្រែករៃ', NULL, NULL),
(538, 61, 'Praek Russei', 'ព្រែកឫស្សី', NULL, NULL),
(539, 61, 'Sombour', 'សំបួរ', NULL, NULL),
(540, 61, 'Sarikakeo', 'សារិកាកែវ', NULL, NULL),
(541, 61, 'Thma Kor', 'ថ្មគរ', NULL, NULL),
(542, 61, 'Teuk Khleang', 'ទឹកឃ្លាំង', NULL, NULL),
(543, 62, 'Bak Dav', 'បាក់ដាវ', NULL, NULL),
(544, 62, 'Chey Thum', 'ជ័យធំ', NULL, NULL),
(545, 62, 'Kampong Chamlang', 'កំពង់ចំលង', NULL, NULL),
(546, 62, 'Kaoh Chouram', 'កោះចូរ៉ាម', NULL, NULL),
(547, 62, 'Kaoh Oknha Tei', 'កោះឧកញ៉ាតី', NULL, NULL),
(548, 62, 'Preah Prasab', 'ព្រះប្រសប់', NULL, NULL),
(549, 62, 'Preaek Ampil', 'ព្រែកអំពិល', NULL, NULL),
(550, 62, '	Preaek Luong', 'ព្រែកលួង', NULL, NULL),
(551, 62, 'Preaek Ta Kov', 'ព្រែកតាកូវ', NULL, NULL),
(552, 62, 'Preaek Ta Meak', 'ព្រែកតាមាក់', NULL, NULL),
(553, 62, 'Puk Ruessei', 'ពុកឫស្សី', NULL, NULL),
(554, 62, 'Roka Chonlueng', 'រកាជន្លឹង', NULL, NULL),
(555, 62, 'Sanlung', 'សន្លុង', NULL, NULL),
(556, 62, 'Sithor', 'ស៊ីធរ', NULL, NULL),
(557, 62, 'Svay Chrum', 'ស្វាយជ្រុំ', NULL, NULL),
(558, 62, 'Svay Romiet', 'ស្វាយរមៀត', NULL, NULL),
(559, 62, 'Ta Aek', 'តាឯក', NULL, NULL),
(560, 62, 'Vihear Suork', 'វិហារសួគ៌', NULL, NULL),
(561, 88, 'Bak Sna', 'បាក់ស្នា', NULL, NULL),
(562, 88, 'Ballangk', 'បល្ល័ង្ក', NULL, NULL),
(563, 88, 'Baray', 'បារាយណ៍', NULL, NULL),
(564, 88, 'Boeng', 'បឹង', NULL, NULL),
(565, 88, 'Chaeung Daeung', 'ចើងដើង', NULL, NULL),
(566, 88, 'Chraneang', 'ច្រនាង', NULL, NULL),
(567, 88, 'Chhuk Khsach', 'ឈូកខ្សាច់', NULL, NULL),
(568, 88, 'Chong Doung', 'ចុងដូង', NULL, NULL),
(569, 88, 'Chrolong', 'ជ្រលង', NULL, NULL),
(570, 88, 'Kokir Thum ', 'គគីធំ', NULL, NULL),
(571, 88, 'Krava', 'ក្រវ៉ា', NULL, NULL),
(572, 88, 'Andoung Pou', 'អណ្ដូងពោធិ៍', NULL, NULL),
(573, 88, 'Pongro', 'ពង្រ', NULL, NULL),
(574, 88, 'Sou Young', 'សូយោង', NULL, NULL),
(575, 88, 'Sralau', 'ស្រឡៅ', NULL, NULL),
(576, 88, 'Svay Phleung', 'ស្វាយភ្លើង', NULL, NULL),
(577, 88, 'Tnaot Chum', 'ត្នោតជុំ', NULL, NULL),
(578, 88, 'Triel', 'ទ្រៀល', NULL, NULL),
(579, 89, 'Damrei Choan Khla', 'ដំរីជាន់ខ្លា', NULL, NULL),
(580, 89, 'Kampong Thum', 'កំពង់ធំ', NULL, NULL),
(581, 89, 'Kampong Roteh', 'កំពង់រទេះ', NULL, NULL),
(582, 89, 'Ou Kanthor', 'អូរកន្ធរ', NULL, NULL),
(583, 89, 'Kampong', 'កំពង់ក្របៅ', NULL, NULL),
(584, 89, 'Prey Ta Hu', 'ព្រៃតាហ៊ូ', NULL, NULL),
(585, 89, 'Achar Leak', 'អាចារ្យលាក់', NULL, NULL),
(586, 89, 'Srayov', 'ស្រយ៉ូវ', NULL, NULL),
(587, 90, 'Chheu Teal ', 'ឈើទាល', NULL, NULL),
(588, 90, 'Dang Kambet', 'ដងកាំបិត', NULL, NULL),
(589, 90, 'Klaeng ', 'ក្លែង', NULL, NULL),
(590, 90, 'Mean Rith', 'មានរិទ្ធ', NULL, NULL),
(591, 90, 'Mean Chey', 'មានជ័យ', NULL, NULL),
(592, 90, 'Ngan ', 'ងន', NULL, NULL),
(593, 90, 'Sandan', 'សណ្ដាន់', NULL, NULL),
(594, 90, 'Sochet', 'សុចិត្រ', NULL, NULL),
(595, 90, 'Tum Ring', 'ទំរីង', NULL, NULL),
(596, 91, 'Banteay Stoung', 'បន្ទាយស្ទោង', NULL, NULL),
(597, 91, 'Chamna Kraom', 'ចំណាក្រោម', NULL, NULL),
(598, 91, 'Chamna Leu', 'ចំណាលើ', NULL, NULL),
(599, 91, 'Kampong Chen Cheung', 'កំពង់ចិនជើង', NULL, NULL),
(600, 91, 'Msa Krang', 'ម្សាក្រង', NULL, NULL),
(601, 91, 'Peam Bang', 'ពាមបាង', NULL, NULL),
(602, 91, 'Pralay', 'ប្រឡាយ', NULL, NULL),
(603, 91, 'Preah Damrei', 'ព្រះដំរី', NULL, NULL),
(604, 91, 'Rung Roeang', 'រុងរឿង', NULL, NULL),
(605, 91, 'Samprouch', 'សំព្រោជ', NULL, NULL),
(606, 91, 'Trea', 'ទ្រា', NULL, NULL),
(607, 92, 'Doung ', 'ដូង', NULL, NULL),
(608, 92, 'Kraya ', 'ក្រយា', NULL, NULL),
(609, 92, 'Phan Nheum', 'ផាន់ញើម', NULL, NULL),
(610, 92, 'Sakream ', 'សាគ្រាម', NULL, NULL),
(611, 92, 'Sala Visai', 'សាលាវិស័យ', NULL, NULL),
(612, 92, 'Sameakki', 'សាមគ្គី', NULL, NULL),
(613, 92, 'Tuol Kreul', 'ទួលគ្រើល', NULL, NULL),
(614, 93, 'Boeng Lvea', 'បឹងល្វា', NULL, NULL),
(615, 93, 'Chroab ', 'ជ្រាប់', NULL, NULL),
(616, 93, 'Kampong Thma ', 'កំពង់ថ្ម', NULL, NULL),
(617, 93, '	Kakaoh ', 'កកោះ', NULL, NULL),
(618, 93, 'Kraya ', 'ក្រយា', NULL, NULL),
(619, 93, 'Pnov ', 'ព្នៅ', NULL, NULL),
(620, 93, 'Prasat ', 'ប្រាសាទ', NULL, NULL),
(621, 93, 'Tang Krasang', 'តាំងក្រសាំង', NULL, NULL),
(622, 93, 'Ti Pou', 'ទីពោ', NULL, NULL),
(623, 93, 'Tboung Krapeu', 'ត្បូងក្រពើ', NULL, NULL),
(624, 94, 'Chhuk', 'ឈូក', NULL, NULL),
(625, 94, 'Koul', 'គោល', NULL, NULL),
(626, 94, 'Sambour', 'សំបូរណ៍', NULL, NULL),
(627, 94, 'Sraeung', 'ស្រើង', NULL, NULL),
(628, 94, 'Tang Krasau', 'តាំងក្រសៅ', NULL, NULL),
(629, 95, 'Chey', 'ជ័យ', NULL, NULL),
(630, 95, 'Damrei Slab', 'ដំរីស្លាប់', NULL, NULL),
(631, 95, 'Kampong Kou', 'កំពង់គោ', NULL, NULL),
(632, 95, 'Kampong Svay', 'កំពង់ស្វាយ', NULL, NULL),
(633, 95, 'Nipech', 'នីពេជ', NULL, NULL),
(634, 95, 'Phat Sanday', 'ផាត់សណ្ដាយ', NULL, NULL),
(635, 95, 'San Kor', 'សាន់គ', NULL, NULL),
(636, 95, 'Tbaeng', 'ត្បែង', NULL, NULL),
(637, 95, 'Trapeang', 'ត្រពាំងឫស្សី', NULL, NULL),
(638, 95, 'Kdei Doung', 'ក្ដីដូង', NULL, NULL),
(639, 95, 'Prey Kuy', 'ព្រៃគុយ', NULL, NULL),
(640, 114, 'Chhlong', 'ឆ្លូង', NULL, NULL),
(641, 114, 'Domrei Phong', 'ដំរីផុង', NULL, NULL),
(642, 114, 'Han Chey', 'ហាន់ជ័យ', NULL, NULL),
(643, 114, 'Kampong Domrei', 'កំពង់ដំរី', NULL, NULL),
(644, 114, 'Kanhchor', 'កញ្ជរ', NULL, NULL),
(645, 114, 'Ksach Andaet', 'ខ្សាច់អណ្ដែត', NULL, NULL),
(646, 114, 'Pongro', 'ពង្រ', NULL, NULL),
(647, 114, 'Praek Samann', 'ព្រែកសាម៉ាន់', NULL, NULL),
(648, 115, 'Kantout', 'កន្ទួត', NULL, NULL),
(649, 115, 'Thma Andeuk', 'ថ្មអណ្តើក', NULL, NULL),
(650, 115, 'Koh Chraeng', 'កោះច្រែង', NULL, NULL),
(651, 115, 'Sambok', 'សំបុក', NULL, NULL),
(652, 115, 'Kou Lorb', 'គោលាប់', NULL, NULL),
(653, 115, 'Thmei', 'ថ្មី', NULL, NULL),
(654, 115, 'Dar', 'ដា', NULL, NULL),
(655, 115, 'Bos Leav', 'បុសលាវ', NULL, NULL),
(656, 115, 'Changkrorng', 'ចង្ក្រង់', NULL, NULL),
(657, 115, 'Thma Krae', 'ថ្មគ្រែ', NULL, NULL),
(658, 116, 'Koh Trorng', 'កោះត្រង់', NULL, NULL),
(659, 116, 'Krokor', 'ក្រកូរ', NULL, NULL),
(660, 116, 'Kratie', 'ក្រចេះ', NULL, NULL),
(661, 116, 'Ou Russei', 'អូរឬស្សី', NULL, NULL),
(662, 116, 'Roka Kandal', 'រកាកណ្តាល', NULL, NULL),
(663, 117, 'Kbal Domrei', 'ក្បាលដំរី', NULL, NULL),
(664, 117, 'Koh Knhae', 'កោះខ្ញែរ', NULL, NULL),
(665, 117, 'Ou Kreang', 'អូរគ្រៀង', NULL, NULL),
(666, 117, 'Rolous Meanchey', 'រលួសមានជ័យ', NULL, NULL),
(667, 117, 'Kampong Cham', 'កំពង់ចាម', NULL, NULL),
(668, 117, 'Beung Char', 'បឹងចារ', NULL, NULL),
(669, 117, 'Sombo', 'សំបូរ', NULL, NULL),
(670, 117, 'Sandann', 'សណ្តាន់', NULL, NULL),
(671, 117, 'Srae Chis', 'ស្រែជិះ', NULL, NULL),
(672, 117, 'Vadhnak', 'វឌ្ឍនៈ', NULL, NULL),
(673, 118, 'Chambok', 'ចំបក់', NULL, NULL),
(674, 118, 'Chroy Banteay', 'ជ្រោយបន្ទាយ', NULL, NULL),
(675, 118, 'Kampong Kor', 'កំពង់គរ', NULL, NULL),
(676, 118, 'Praek Brosop', 'ព្រែកប្រសព្', NULL, NULL),
(677, 118, 'Russei Keo', 'ឫស្សីកែវ', NULL, NULL),
(678, 118, 'Soab', 'សោប', NULL, NULL),
(679, 118, 'Tamao', 'តាម៉ៅ', NULL, NULL),
(680, 119, 'Khseum', 'ឃ្សឹម', NULL, NULL),
(681, 119, 'Pir Thnou', 'ពីរធ្នូ', NULL, NULL),
(682, 119, 'Snoul', 'ស្នួល', NULL, NULL),
(683, 119, 'Srae Char', 'ស្រែចារ', NULL, NULL),
(684, 119, 'Svay Chreas', 'ស្វាយជ្រះ', NULL, NULL),
(685, 133, 'Sa ang', 'ស្អាង', NULL, NULL),
(686, 133, 'Tor Sou', 'តស៊ូ', NULL, NULL),
(687, 133, 'Kchorng', 'ខ្យង', NULL, NULL),
(688, 133, 'Chrach', 'ច្រាច់', NULL, NULL),
(689, 133, 'Thmea', 'ធ្មា', NULL, NULL),
(690, 133, 'Putrea', 'ពុទ្រា', NULL, NULL),
(691, 134, 'ស្រអែម', 'ជាំក្សាន្ត', NULL, NULL),
(692, 134, 'Teuk Krahorm', 'ទឹកក្រហម', NULL, NULL),
(693, 134, 'Pring Thom', 'ព្រីងធំ', NULL, NULL),
(694, 134, 'Romdoh Srae', 'រំដោះស្រែ', NULL, NULL),
(695, 134, 'Yeang', 'យាង', NULL, NULL),
(696, 134, 'Kantout', 'កន្ទួត', NULL, NULL),
(697, 134, 'Sraem', 'ស្រអែម', NULL, NULL),
(698, 134, 'Morodok', 'មរតក', NULL, NULL),
(699, 135, 'Robeab', 'របៀប', NULL, NULL),
(700, 135, 'Reaksmey', 'រស្មី', NULL, NULL),
(701, 135, 'Rohas', 'រហ័ស', NULL, NULL),
(702, 135, 'Rong Reung', 'រុងរឿង', NULL, NULL),
(703, 135, 'Rik Reay', 'រីករាយ', NULL, NULL),
(704, 135, 'Rous Roan', 'រួសរាន់', NULL, NULL),
(705, 135, 'Ratanak', 'រតនៈ', NULL, NULL),
(706, 135, 'Reab Roay', 'រៀបរយ', NULL, NULL),
(707, 135, 'Reaksa', 'រក្សា', NULL, NULL),
(708, 135, 'Romdors', 'រំដោះ', NULL, NULL),
(709, 135, 'Rumtum', 'រមទម', NULL, NULL),
(710, 135, 'Romniy', 'រម្មណីយ', NULL, NULL),
(711, 136, 'Ro ang', 'រអាង', NULL, NULL),
(712, 136, 'Phnom Tbeng Mouy', 'ភ្នំត្បែងមួយ', NULL, NULL),
(713, 136, 'Sdao', 'ស្តៅ', NULL, NULL),
(714, 136, 'Ranakseh', 'រណសិរ្ស', NULL, NULL),
(715, 136, 'Chomreun', 'ចំរើន', NULL, NULL),
(716, 137, 'Chhaeb Mouy', 'ឆែបមួយ', NULL, NULL),
(717, 137, 'Chhaeb Pir', 'ឆែបពីរ', NULL, NULL),
(718, 137, 'Sangke Mouy', 'សង្កែមួយ', NULL, NULL),
(719, 137, 'Sangke Pir', 'សង្កែពីរ', NULL, NULL),
(720, 137, 'Mlouprey Mouy', 'ម្លូព្រៃមួយ', NULL, NULL),
(721, 137, 'Mlouprey Pir', 'ម្លូព្រៃពីរ', NULL, NULL),
(722, 137, 'Kampong Sralao Mouy', 'កំពង់ស្រឡៅមួយ', NULL, NULL),
(723, 137, 'Kampong Sralao Pir', 'កំពង់ស្រឡៅពីរ', NULL, NULL),
(724, 138, 'Kulen Tbong', 'គូលែនត្បូង', NULL, NULL),
(725, 138, 'Kulen Cheung', 'គូលែនជើង', NULL, NULL),
(726, 138, 'Thmei', 'ថ្មី', NULL, NULL),
(727, 138, 'Phnom Penh', 'ភ្នំពេញ', NULL, NULL),
(728, 138, 'Phnom Tbeng Pir', 'ភ្នំត្បែងពីរ', NULL, NULL),
(729, 138, 'Sroyong', 'ស្រយង់', NULL, NULL),
(730, 139, 'Kompong bronouk', 'កំពង់ប្រណោក', NULL, NULL),
(731, 139, 'Bal Hal', 'ប៉ាលហាល', NULL, NULL),
(732, 139, 'Chhean Mukh', 'ឈានមុខ', NULL, NULL),
(733, 139, 'Pou', 'ពោធិ៍', NULL, NULL),
(734, 139, 'Bromeru', 'ប្រមេរុ', NULL, NULL),
(735, 139, 'Preah Khleang', 'ព្រះឃ្លាំង', NULL, NULL),
(736, 177, 'Komphun', 'កំភុន', NULL, NULL),
(737, 177, 'Kbal Romeas', 'ក្បាលរមាស', NULL, NULL),
(738, 177, 'Phluk', 'ភ្លុក', NULL, NULL),
(739, 177, 'Sam Khouy', 'សាមឃួយ', NULL, NULL),
(740, 177, 'Sdau', 'ស្ដៅ', NULL, NULL),
(741, 177, 'Srae Kor', 'ស្រែគរ', NULL, NULL),
(742, 177, 'Ta Lat', 'តាឡាត', NULL, NULL),
(743, 178, 'Koh Preah', 'កោះព្រះ', NULL, NULL),
(744, 178, 'Koh Sompeay', 'កោះសំពាយ', NULL, NULL),
(745, 178, 'Koh Srolay', 'កោះស្រឡាយ', NULL, NULL),
(746, 178, 'Ou Mreah', 'អូរម្រះ', NULL, NULL),
(747, 178, 'Ou Russei Kandal', 'អូរឫស្សីកណ្តាល', NULL, NULL),
(748, 178, 'Siem Bouk', 'សៀមបូក', NULL, NULL),
(749, 178, 'Srae Krasang', 'ស្រែក្រសាំង', NULL, NULL),
(750, 178, 'Praek Meas', 'ព្រែកមាស', NULL, NULL),
(751, 178, 'Sekong', 'សេកុង', NULL, NULL),
(752, 178, 'Santipheap', 'សន្តិភាព', NULL, NULL),
(753, 178, 'Srae Sombo', 'ស្រែសំបូរ', NULL, NULL),
(754, 178, 'Thma Keo', 'ថ្មកែវ', NULL, NULL),
(755, 179, 'Anlong Phe', 'អន្លង់ភេ', NULL, NULL),
(756, 179, 'Chomkar Leu', 'ចំការលើ', NULL, NULL),
(757, 179, 'Kang Cham', 'កាំងចាម', NULL, NULL),
(758, 179, 'Koh Snaeng', 'កោះស្នែង', NULL, NULL),
(759, 179, 'Ou Rai', 'អូររៃ', NULL, NULL),
(760, 179, 'Ou Svay', 'អូរស្វាយ', NULL, NULL),
(761, 179, 'Preah Romkel', 'ព្រះរំកិល', NULL, NULL),
(762, 179, 'Som Ang', 'សំអាង', NULL, NULL),
(763, 179, 'Srae Russei', 'ស្រែឫស្សី', NULL, NULL),
(764, 179, 'Thala Borivat', 'ថាឡាបរិវ៉ាត់', NULL, NULL),
(765, 179, 'Anlong Chrey', 'អន្លង់ជ្រៃ', NULL, NULL),
(766, 180, 'Stung Trang', 'ស្ទឹងត្រែង', NULL, NULL),
(767, 180, 'Srah Russei', 'ស្រះឫស្សី', NULL, NULL),
(768, 180, 'Preah Bat', 'ព្រះបាទ', NULL, NULL),
(769, 180, 'Sammaki', 'សាមគ្គី', NULL, NULL),
(770, 63, 'Banteay Neang', 'បន្ទាយនាង', NULL, NULL),
(771, 63, 'Bat Trang', 'បត់ត្រង់', NULL, NULL),
(772, 63, 'Chamnaom', 'ចំណោម', NULL, NULL),
(773, 63, 'Kouk Ballangk', 'គោកបល្ល័ង្គ', NULL, NULL),
(774, 63, 'Koy Maeng', 'គយម៉ែង', NULL, NULL),
(775, 63, 'Ou Prasat', 'អូរប្រាសាទ', NULL, NULL),
(776, 63, 'Phnum Touch', 'ភ្នំតូច', NULL, NULL),
(777, 63, 'Rohat Tuek', 'រហាត់ទឹក', NULL, NULL),
(778, 63, 'Ruessei Kraok', 'ឫស្សីក្រោក', NULL, NULL),
(779, 63, 'Sambuor', 'សំបួរ', NULL, NULL),
(780, 63, 'Soea', 'សឿ', NULL, NULL),
(781, 63, 'Srah Reang ', 'ស្រះរាំង', NULL, NULL),
(782, 63, 'Ta Lam', 'តាឡំ', NULL, NULL),
(783, 64, 'Chhnuor Mean Chey', 'ឈ្នួរមានជ័យ', NULL, NULL),
(784, 64, 'Chob Veari', 'ជប់វារី', NULL, NULL),
(785, 64, 'Phnum Lieb', 'ភ្នំលៀប', NULL, NULL),
(786, 64, 'Prasat', 'ប្រាសាទ', NULL, NULL),
(787, 64, 'Preah Netr Preah', 'ព្រះនេត្រព្រះ', NULL, NULL),
(788, 64, 'Rohal', 'រហាល', NULL, NULL),
(789, 64, 'Tean Kam', 'ទានកាំ', NULL, NULL),
(790, 64, 'Tuek Chour', 'ទឹកជោរ', NULL, NULL),
(791, 65, 'Bos Sbov', 'បុស្បូវ', NULL, NULL),
(792, 65, 'Kampong Svay', 'កំពង់ស្វាយ', NULL, NULL),
(793, 65, 'Kaoh Pong Satv', 'កោះពងសត្វ', NULL, NULL),
(794, 65, 'Mkak', 'ម្កាក់', NULL, NULL),
(795, 65, 'Ou Ambel', 'អូរអំបិល', NULL, NULL),
(796, 65, 'Phniet', 'ភ្នៀត', NULL, NULL),
(797, 65, 'Preah Ponlea', 'ព្រះពន្លា', NULL, NULL),
(798, 65, 'Tuek Thla', 'ទឹកថ្លា', NULL, NULL),
(799, 66, 'Phkoam', 'ផ្គាំ', NULL, NULL),
(800, 66, 'Sarongk', 'សារង្គ', NULL, NULL),
(801, 66, 'Sla Kram', 'ស្លក្រាម', NULL, NULL),
(802, 66, 'Svay Chek', 'ស្វាយចេក', NULL, NULL),
(803, 66, 'Ta Baen', 'តាបែន', NULL, NULL),
(804, 66, 'Ta Phou', 'តាផូ', NULL, NULL),
(805, 66, 'Treas', 'ទ្រាស', NULL, NULL),
(806, 66, 'Roluos', 'រលួស', NULL, NULL),
(807, 67, 'Changha', 'ចង្ហា', NULL, NULL),
(808, 67, 'Koub', 'កូប', NULL, NULL),
(809, 67, 'Kuttasat', 'គុត្តសត', NULL, NULL),
(810, 67, 'Nimitt', 'និមិត្ត', NULL, NULL),
(811, 67, 'Samraong', 'សំរោង', NULL, NULL),
(812, 67, 'Souphi', 'សូភី', NULL, NULL),
(813, 67, 'Soengh', 'សឹង្ហ', NULL, NULL),
(814, 67, 'Paoy Paet', 'ប៉ោយប៉ែត', NULL, NULL),
(815, 67, 'Ou Bei Choan', 'អូរបីជាន់', NULL, NULL),
(816, 68, 'Banteay Chhmar', 'បន្ទាយឆ្មារ', NULL, NULL),
(817, 68, 'Kouk Romiet', 'គោករមៀត', NULL, NULL),
(818, 68, 'Phum Thmei', 'ថ្មពួក', NULL, NULL),
(819, 68, 'Thma Puok', 'គោកកឋិន', NULL, NULL),
(820, 68, 'Kouk Kakthen', 'គំរូ', NULL, NULL),
(821, 68, 'Kumru', 'ភូមិថ្មី', NULL, NULL),
(822, 69, 'Boeng Beng', 'បឹងបេង', NULL, NULL),
(823, 69, 'Malai', 'ម៉ាឡៃ', NULL, NULL),
(824, 69, 'Ou Sampor', 'អូរសំព័រ', NULL, NULL),
(825, 69, 'Ou Sralau', 'អូរស្រឡៅ', NULL, NULL),
(826, 69, 'Tuol Pongro', 'ទួលពង្រ', NULL, NULL),
(827, 69, 'Ta Kong', 'តាគង់', NULL, NULL),
(828, 70, 'Changha', 'ចង្ហា', NULL, NULL),
(829, 70, 'Koub', 'កូប', NULL, NULL),
(830, 70, 'Kuttasat', 'គុត្តសត', NULL, NULL),
(831, 70, 'Nimitt', 'និមិត្ត', NULL, NULL),
(832, 70, 'Samraong', 'សំរោង', NULL, NULL),
(833, 70, 'Souphi', 'សូភី', NULL, NULL),
(834, 70, 'Soengh', 'សឹង្ហ', NULL, NULL),
(835, 70, 'Paoy Paet', 'ប៉ោយប៉ែត', NULL, NULL),
(836, 70, 'Ou Bei Choan', 'អូរបីជាន់', NULL, NULL),
(837, 71, 'Nam Tau', 'ណាំតៅ', NULL, NULL),
(838, 71, 'Paoy Char', 'ប៉ោយចារ', NULL, NULL),
(839, 71, 'Ponley', 'ពន្លៃ', NULL, NULL),
(840, 71, 'Spean Sraeng', 'ស្ពានស្រែង', NULL, NULL),
(841, 71, 'Srah Chik', 'ស្រះជីក', NULL, NULL),
(842, 71, 'Phnum Dei', 'ភ្នំដី', NULL, NULL),
(843, 72, 'Anhchanh Rung', 'អញ្ចាញរូង', NULL, NULL),
(844, 72, 'Chhnok Tru', 'ឆ្នុកទ្រូ', NULL, NULL),
(845, 72, 'Chak', 'ចក', NULL, NULL),
(846, 72, 'Khon Rang', 'ខុនរ៉ង', NULL, NULL),
(847, 72, 'Kampong Preah Kokir', 'កំពង់ព្រះគគីរ', NULL, NULL),
(848, 72, 'Melum', 'មេលំ', NULL, NULL),
(849, 72, 'Phsar', 'ផ្សារ', NULL, NULL),
(850, 72, 'Pech Changvar', 'ពេជ្រចង្វារ', NULL, NULL),
(851, 72, 'Popel', 'ពពេល', NULL, NULL),
(852, 72, 'Ponley', 'ពន្លៃ', NULL, NULL),
(853, 72, 'Trapeang Chan', 'ត្រពាំងចាន់', NULL, NULL),
(854, 73, 'Phsar Chhnang', 'ផ្សារឆ្នាំង', NULL, NULL),
(855, 73, 'Kampong Chhnang', 'កំពង់ឆ្នាំង', NULL, NULL),
(856, 73, 'Pha er', 'ប្អេរ', NULL, NULL),
(857, 73, 'Khsam', 'ខ្សាម', NULL, NULL),
(858, 74, 'Ampil Tuek', 'អំពិលទឹក', NULL, NULL),
(859, 74, 'Chhuk Sa', 'ឈូកស', NULL, NULL),
(860, 74, 'Chres', 'ច្រេស', NULL, NULL),
(861, 74, 'Kampong Tralach', 'កំពង់ត្រឡាច', NULL, NULL),
(862, 74, 'Longveaek', 'លង្វែក', NULL, NULL),
(863, 74, 'Ou Ruessei', 'អូរឬស្សី', NULL, NULL),
(864, 74, 'Peani', 'ពានី', NULL, NULL),
(865, 74, 'Saeb', 'សែប', NULL, NULL),
(866, 74, 'Ta Ches', 'តាជេស', NULL, NULL),
(867, 74, 'Thma Edth', 'ថ្មឥដ្ឋ', NULL, NULL),
(868, 75, 'Chhean Laeung', 'ឈានឡើង', NULL, NULL),
(869, 75, 'Khnar Chhmar', 'ខ្នាឆ្មារ', NULL, NULL),
(870, 75, 'Krang Lvea', 'រាំល្វា', NULL, NULL),
(871, 75, 'Peam', 'ពាម', NULL, NULL),
(872, 75, 'Sedthei', 'សេដ្ឋី', NULL, NULL),
(873, 75, 'Svay', 'ស្វាយ', NULL, NULL),
(874, 75, 'Svay Chuk', 'ស្វាយជុក', NULL, NULL),
(875, 75, 'Tbaeng Khpos', 'ត្បែងខ្ពស់', NULL, NULL),
(876, 75, 'Thlok Vien', 'ធ្លកវៀន', NULL, NULL),
(877, 76, 'Chranouk', 'ច្រណូក', NULL, NULL),
(878, 76, 'Dar', 'ដារ', NULL, NULL),
(879, 76, 'Kampong hau', 'កំពង់ហៅ', NULL, NULL),
(880, 76, 'Phlov Tuk', 'ផ្លូវទូក', NULL, NULL),
(881, 76, 'Pou', 'ពោធិ៍', NULL, NULL),
(882, 76, 'Pralay Meas', 'ប្រឡាយមាស', NULL, NULL),
(883, 76, 'Samraong Saen', 'សំរោងសែន', NULL, NULL),
(884, 76, 'Svay Rumpear', 'ស្វាយរំពារ', NULL, NULL),
(885, 76, 'Trangel', 'ត្រងិល', NULL, NULL),
(886, 77, 'Chol Sarg', 'ជលសា', NULL, NULL),
(887, 77, 'Kaoh Thkov', 'កោះថ្កូវ', NULL, NULL),
(888, 77, 'Kampong Os', 'កំពង់អុស', NULL, NULL),
(889, 77, 'Peam Chhkaok', 'ពាមឆ្កោក', NULL, NULL),
(890, 77, 'Prey Kri', 'ព្រៃគ្រី', NULL, NULL),
(891, 78, 'Andoung Snay', 'អណ្តូងស្នាយ', NULL, NULL),
(892, 78, 'Banteay Preal', 'បន្ទាយព្រាល', NULL, NULL),
(893, 78, 'Cheung Kreav', 'ជើងគ្រាវ', NULL, NULL),
(894, 78, 'Chrey Bak', 'ជ្រៃបាក់', NULL, NULL),
(895, 78, 'Kouk Banteay', 'គោកបន្ទាយ', NULL, NULL),
(896, 78, 'Krang Leav', 'ក្រាំងលាវ', NULL, NULL),
(897, 78, 'Pongro', 'ពង្រ', NULL, NULL),
(898, 78, 'Prasneb', 'ប្រស្នឹប', NULL, NULL),
(899, 78, 'Prey Mul', 'ព្រៃមូល', NULL, NULL),
(900, 78, 'Rolea Ba ier', 'រលាប្អៀរ', NULL, NULL),
(901, 78, 'Srae Thmei', 'ស្រែថ្មី', NULL, NULL),
(902, 78, 'Svay Chrum', 'ស្វាយជ្រុំ', NULL, NULL),
(903, 78, 'Tuek Hout', 'ទឹកហូត', NULL, NULL),
(904, 79, 'Akphivoadth ', 'អភិវឌ្ឍន៍', NULL, NULL),
(905, 79, 'Chieb ', 'ជៀប', NULL, NULL),
(906, 79, 'Chaong Maong', 'ចោងម៉ោង', NULL, NULL),
(907, 79, 'Kbal Tuek', 'ក្បាលទឹក', NULL, NULL),
(908, 79, 'Khlong Popok', 'ខ្លុងពពក', NULL, NULL),
(909, 79, 'Krang Skear', 'រាំងស្គារ', NULL, NULL),
(910, 79, 'Tang Krasang', 'តាំងក្រសាំង', NULL, NULL),
(911, 79, 'Tuol Khpos', 'ទួលខ្ពស់', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_long`
--

DROP TABLE IF EXISTS `course_long`;
CREATE TABLE IF NOT EXISTS `course_long` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculties_id` int(11) DEFAULT NULL COMMENT 'Program Main Subject',
  `program_type_id` int(11) DEFAULT NULL COMMENT 'Program Type',
  `overall_fund_id` int(11) DEFAULT NULL COMMENT 'Overall Fund',
  `curriculum_endorsement_id` int(11) DEFAULT NULL COMMENT 'Curriculum Endorsement',
  `curriculum_author_id` int(11) DEFAULT NULL,
  `promotion_start_date` date DEFAULT NULL,
  `academic_year` varchar(250) DEFAULT NULL COMMENT '2018-2019',
  `batch_group` varchar(250) DEFAULT NULL,
  `'updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `register_status` tinyint(4) DEFAULT '1' COMMENT 'i allow to register',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Long Program';

--
-- Dumping data for table `course_long`
--

INSERT INTO `course_long` (`id`, `faculties_id`, `program_type_id`, `overall_fund_id`, `curriculum_endorsement_id`, `curriculum_author_id`, `promotion_start_date`, `academic_year`, `batch_group`, `'updated_at`, `created_at`, `status`, `register_status`) VALUES
(1, 1, 1, 1, 1, 1, '2019-06-23', '4', 'ជាងកំប៉ោ​ ជំនាន់ទី១', NULL, NULL, 1, 1),
(2, 3, 2, 2, 1, 1, '2019-06-23', '4', 'អគ្គិសនី C1 ជំនាន់ទី៦', NULL, NULL, 0, 1),
(3, 2, 5, 4, 2, 1, '2019-07-02', '4', 'assdfcs', NULL, NULL, 0, 1),
(7, 9, 4, 6, 1, 1, '2019-07-02', '1', 'ជាងកំប៉ោ​ ជំនាន់ទី១', NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_long_student`
--

DROP TABLE IF EXISTS `course_long_student`;
CREATE TABLE IF NOT EXISTS `course_long_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_long_id` int(11) NOT NULL,
  `overal_fund_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`course_long_id`,`overal_fund_id`,`student_id`,`institute_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_long_student`
--

INSERT INTO `course_long_student` (`id`, `course_long_id`, `overal_fund_id`, `student_id`, `institute_id`, `created_date`, `updated_date`) VALUES
(1, 1, 6, 20, 1, NULL, NULL),
(2, 1, 3, 16, 1, NULL, NULL),
(6, 1, 1, 19, 1, NULL, NULL),
(7, 1, 1, 14, 1, NULL, NULL),
(8, 1, 1, 13, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_short`
--

DROP TABLE IF EXISTS `course_short`;
CREATE TABLE IF NOT EXISTS `course_short` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) DEFAULT NULL COMMENT 'faculties_id',
  `course_name` varchar(250) DEFAULT NULL,
  `overal_fund_id` int(11) DEFAULT NULL COMMENT 'Overall Fund',
  `total_training_hour` int(11) DEFAULT NULL COMMENT 'Total Training Hour',
  `curriculum_endorsement_id` int(11) DEFAULT NULL COMMENT 'Curriculum Endorsement',
  `curriculum_author_id` int(11) DEFAULT NULL COMMENT 'Curriculum Author',
  `modality_id` int(11) DEFAULT NULL,
  `village` varchar(250) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `commune_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `teacher_course_hour` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `register_status` tinyint(4) DEFAULT '1' COMMENT '1 for allow to register',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Short Course';

--
-- Dumping data for table `course_short`
--

INSERT INTO `course_short` (`id`, `faculty_id`, `course_name`, `overal_fund_id`, `total_training_hour`, `curriculum_endorsement_id`, `curriculum_author_id`, `modality_id`, `village`, `province_id`, `district_id`, `commune_id`, `start_date`, `end_date`, `teacher_course_hour`, `created_at`, `create_date`, `updated_at`, `register_status`) VALUES
(1, 7, 'Reproductive health', 1, 120, 1, 1, 1, 'Mondol3', 4, 34, 297, '2019-07-01', '2019-07-31', 120, '2019-07-27 18:39:42', '2019-07-27 18:39:42', '2019-07-27 18:39:42', 1),
(2, 8, 'Automobile', 2, 150, 2, 2, 3, 'Sorsor Sdam', 4, 32, 281, '2019-06-01', '2019-07-31', 150, '2019-07-27 18:40:38', '2019-07-27 18:40:38', '2019-07-27 18:40:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_short_student`
--

DROP TABLE IF EXISTS `course_short_student`;
CREATE TABLE IF NOT EXISTS `course_short_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_short_id` int(11) NOT NULL,
  `overal_fund_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`course_short_id`,`overal_fund_id`,`student_id`,`institute_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_short_student`
--

INSERT INTO `course_short_student` (`id`, `course_short_id`, `overal_fund_id`, `student_id`, `institute_id`, `created_date`, `updated_date`) VALUES
(1, 1, 1, 1, 1, NULL, NULL),
(2, 1, 6, 2, 1, NULL, NULL),
(3, 1, 1, 3, 1, NULL, NULL),
(4, 1, 4, 4, 1, NULL, NULL),
(5, 1, 1, 5, 1, NULL, NULL),
(6, 2, 2, 8, 1, NULL, NULL),
(7, 2, 2, 9, 1, NULL, NULL),
(8, 2, 2, 10, 1, NULL, NULL),
(9, 2, 2, 21, 1, NULL, NULL),
(11, 1, 6, 7, 1, NULL, NULL),
(12, 1, 1, 8, 1, NULL, NULL),
(13, 1, 1, 9, 1, NULL, NULL),
(14, 1, 1, 15, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_short_teacher`
--

DROP TABLE IF EXISTS `course_short_teacher`;
CREATE TABLE IF NOT EXISTS `course_short_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_short_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `total_hours` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`course_short_id`,`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_short_teacher`
--

INSERT INTO `course_short_teacher` (`id`, `course_short_id`, `staff_id`, `total_hours`) VALUES
(1, 1, 1, 40),
(2, 1, 5, 40),
(3, 1, 8, 40),
(4, 2, 2, 50),
(5, 2, 3, 50),
(6, 2, 3, 50);

-- --------------------------------------------------------

--
-- Table structure for table `course_type`
--

DROP TABLE IF EXISTS `course_type`;
CREATE TABLE IF NOT EXISTS `course_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(250) DEFAULT NULL,
  `title_kh` varchar(250) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  `icon` varchar(250) DEFAULT NULL,
  `images` varchar(250) DEFAULT NULL,
  `note` text,
  `status` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_type`
--

INSERT INTO `course_type` (`id`, `code`, `title_kh`, `title_en`, `icon`, `images`, `note`, `status`) VALUES
(1, '1', 'វគ្គខ្លី', 'Short Course', NULL, NULL, 'គ្រប់គ្រងវគ្គខ្លីទាំងអស់', '1'),
(2, '1', 'វគ្គវែង', 'Long Course', NULL, NULL, 'គ្រប់គ្រងវគ្គវែងទាំងអស់', '1');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_author`
--

DROP TABLE IF EXISTS `curriculum_author`;
CREATE TABLE IF NOT EXISTS `curriculum_author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kh` varchar(250) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Curriculum Author';

--
-- Dumping data for table `curriculum_author`
--

INSERT INTO `curriculum_author` (`id`, `title_kh`, `title_en`, `create_by`, `create_date`) VALUES
(1, 'គ្រឹះស្ថានបង្កើតកម្មវិធីសិក្សាដោយខ្លួនឯង', 'Institution own curriculum', NULL, NULL),
(2, 'NTTI ស្របតាមស្តង់ដារជាតិសមត្ថភាព', 'NTTI based on NCS', NULL, NULL),
(3, 'ILO', 'ILO', NULL, NULL),
(4, 'ផ្សេងៗ', 'Other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_endorsement`
--

DROP TABLE IF EXISTS `curriculum_endorsement`;
CREATE TABLE IF NOT EXISTS `curriculum_endorsement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kh` varchar(250) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Curriculum Endorsement';

--
-- Dumping data for table `curriculum_endorsement`
--

INSERT INTO `curriculum_endorsement` (`id`, `title_kh`, `title_en`, `create_by`, `create_date`) VALUES
(1, 'គ្រឹះស្ថានប្រើប្រាស់កម្មវិធីសិក្សាផ្ទាល់ខ្លួន', 'Institution using own curriculum', 1, NULL),
(2, 'គណៈកម្មាធិការជាតិបណ្តុះបណ្តាល (NTB)', 'NTB (National Training Board)', 1, NULL),
(3, 'គណៈកម្មាធិការទទួលស្គាល់គុណភាពអប់រំនៃកម្ពុជា (ACC)', 'ACC (Accreditation Committee of Cambodia)', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

DROP TABLE IF EXISTS `days`;
CREATE TABLE IF NOT EXISTS `days` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `days_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Sunday', 1),
(2, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Monday', 1),
(3, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Tuesday', 1),
(4, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Wednesday', 1),
(5, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Thursday', 1),
(6, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Friday', 1),
(7, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'Saturday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `province_id` int(11) NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=198 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `province_id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ruessei Kaev', 'ឫស្សីកែវ', NULL, NULL),
(2, 1, 'Saensokh', 'សែនសុខ', NULL, NULL),
(3, 1, 'Por Senchey', 'ពោធិសែនជ័យ', NULL, NULL),
(4, 1, 'Chrouy Changva', 'ជ្រោយចង្វារ', NULL, NULL),
(5, 1, 'Preaek Pnov', 'ព្រែកភ្នៅ', NULL, NULL),
(6, 1, 'Chbar Ampov', 'ច្បារអំពៅ', NULL, NULL),
(7, 1, 'Doun Penh', 'ដូនពេញ', NULL, NULL),
(8, 1, 'Prampir Meakkara', '៧មករា', NULL, NULL),
(9, 1, 'Toul Kouk', 'ទួលគោក', NULL, NULL),
(10, 1, 'Dangkao', 'ដង្កោ', NULL, NULL),
(11, 1, 'Mean Chey', 'មានជ័យ', NULL, NULL),
(12, 1, 'Chamkar Mon', 'ចំការមន', NULL, NULL),
(13, 2, 'Krong Preah Sihanouk', 'ព្រះសីហនុ', NULL, NULL),
(14, 2, 'Prey Nob', 'ព្រៃនប់', NULL, NULL),
(15, 2, 'Stueng Hav Chey', 'ស្ទឹងហាវ', NULL, NULL),
(16, 2, 'Kompong Seila', 'កំពង់សីលា', NULL, NULL),
(17, 3, 'Krong Kampong Cham', 'កំពង់ចាម', NULL, NULL),
(18, 3, 'Kampong Siem', 'កំពង់សៀម', NULL, NULL),
(19, 3, 'KangMeas', 'កងមាស', NULL, NULL),
(20, 3, 'Kaoh Soutin', 'កោះសុទិន', NULL, NULL),
(21, 3, 'Prey Chhor', 'ព្រៃឈរ', NULL, NULL),
(22, 3, 'Srei Santhor', 'ស្រីសន្ធរ', NULL, NULL),
(23, 3, 'Stueng Trang', 'ស្ទឹងត្រង់', NULL, NULL),
(24, 3, 'Batheay', 'បាធាយ', NULL, NULL),
(25, 3, 'Chamkar Leu', 'ចំការលើ', NULL, NULL),
(26, 3, 'Cheung Prey', 'ជើងព្រៃ', NULL, NULL),
(27, 4, 'Angkor Chum', 'អង្គរជុំ', NULL, NULL),
(28, 4, 'Angkor Thom', 'អង្គរធំ', NULL, NULL),
(29, 4, 'Banteay Srey', 'បន្ទាយស្រី', NULL, NULL),
(30, 4, 'Chi Kraeng', 'ជីក្រែង', NULL, NULL),
(31, 4, 'Kralanh', 'ក្រឡាញ់', NULL, NULL),
(32, 4, 'Pouk', 'ពួក', NULL, NULL),
(33, 4, 'Prasat Bakong', 'ប្រាសាទបាគង', NULL, NULL),
(34, 4, 'Krong Siem Reap', 'ក្រុងសៀមរាប', NULL, NULL),
(35, 4, 'Soutr Nikum', 'សុទ្រនិគមន៍', NULL, NULL),
(36, 4, 'Srei Snam', 'ស្រីស្នំ', NULL, NULL),
(37, 4, 'Svay Leu', 'ស្វាយលើ', NULL, NULL),
(38, 4, 'Varin', 'វ៉ារិន', NULL, NULL),
(39, 5, 'Banan', 'បាណន់', NULL, NULL),
(40, 5, 'Thma Koul', 'ថ្មរគោល', NULL, NULL),
(41, 5, 'Krong Battambang', 'ក្រុងបាត់ដំបង', NULL, NULL),
(42, 5, 'Bavel', 'បវេល', NULL, NULL),
(43, 5, 'Aek Phnum', 'ឯកភ្នំ', NULL, NULL),
(44, 5, 'Moung Ruessei', 'មោង រស្សី', NULL, NULL),
(45, 5, 'Rotonak Mondol', 'រតនាមណ្ឌល', NULL, NULL),
(46, 5, 'Sangkae', 'សង្កៃរ', NULL, NULL),
(47, 5, 'Samlout', 'សំឡូត', NULL, NULL),
(48, 5, 'Sampov Lun', 'សំពៅលូន', NULL, NULL),
(49, 5, 'Phnom Proek', 'ភ្នំព្រឹក', NULL, NULL),
(50, 5, 'Kamrieng', 'កំរៀង', NULL, NULL),
(51, 5, 'Koas Krala', 'គាស់ក្រឡ', NULL, NULL),
(52, 5, 'Rukhak Kiri', 'រុក្ខគីរី', NULL, NULL),
(53, 6, 'Kandal Stueng', '', NULL, NULL),
(54, 6, 'Koh Thum', '', NULL, NULL),
(55, 6, 'Mukh Kamphool', '', NULL, NULL),
(56, 6, 'Sa Ang', '', NULL, NULL),
(57, 6, 'Leuk Daek', '', NULL, NULL),
(58, 6, 'Krong Ta Khmau', '', NULL, NULL),
(59, 6, 'Kien Svay', '', NULL, NULL),
(60, 6, 'Ponhea Leu', '', NULL, NULL),
(61, 6, 'Lvea Aem', '', NULL, NULL),
(62, 6, 'Khsach Kandal', '', NULL, NULL),
(63, 7, 'Mongkol Borei', '', NULL, NULL),
(64, 7, 'Preah Netr Preah', '', NULL, NULL),
(65, 7, 'Serei Saophoan', '', NULL, NULL),
(66, 7, 'Svay Chek', '', NULL, NULL),
(67, 7, 'Ou Chrov', '', NULL, NULL),
(68, 7, 'Thma Puok', '', NULL, NULL),
(69, 7, 'Malai', '', NULL, NULL),
(70, 7, 'Ou Chrov', '', NULL, NULL),
(71, 7, 'Phnum Srok', '', NULL, NULL),
(72, 8, 'Baribour', '', NULL, NULL),
(73, 8, 'Kampong Chhnang', '', NULL, NULL),
(74, 8, 'Kampong Tralach', '', NULL, NULL),
(75, 8, 'Sameakki', '', NULL, NULL),
(76, 8, 'Kampong Leaeng', '', NULL, NULL),
(77, 8, 'Chol Kiri', '', NULL, NULL),
(78, 8, 'Rolea B\'ier', '', NULL, NULL),
(79, 8, 'Tuek Phos', '', NULL, NULL),
(80, 9, 'Basedth', '', NULL, NULL),
(81, 9, 'Kong Pisei', '', NULL, NULL),
(82, 9, 'Odongk', '', NULL, NULL),
(83, 9, 'Samraong Tong', '', NULL, NULL),
(84, 9, 'Aoral', '', NULL, NULL),
(85, 9, 'Phnom Sruoch', '', NULL, NULL),
(86, 9, 'Chbar Mon', '', NULL, NULL),
(87, 9, 'Thpong', '', NULL, NULL),
(88, 10, 'Baray', '', NULL, NULL),
(89, 10, 'Stueng Saen', '', NULL, NULL),
(90, 10, 'Sandaan', '', NULL, NULL),
(91, 10, 'Stoung', '', NULL, NULL),
(92, 10, 'Prasat Balangk', '', NULL, NULL),
(93, 10, 'Santuk', '', NULL, NULL),
(94, 10, 'Prasat Sambour', '', NULL, NULL),
(95, 10, 'Kampong Svay', '', NULL, NULL),
(96, 11, 'Angkor Chey', '', NULL, NULL),
(97, 11, 'Chhuk', '', NULL, NULL),
(98, 11, 'Dorng Tong', '', NULL, NULL),
(99, 11, 'Teouk Chhou', '', NULL, NULL),
(100, 11, 'Banteay Meas', '', NULL, NULL),
(101, 11, 'Kampong Trach', '', NULL, NULL),
(102, 11, 'Chum Kiri', '', NULL, NULL),
(103, 11, 'Kampot', '', NULL, NULL),
(104, 12, 'Krong Kep', '', NULL, NULL),
(105, 12, 'Damnak Chang aeur', '', NULL, NULL),
(106, 12, 'Krong Kep', '', NULL, NULL),
(107, 13, 'Botum Sakor', '', NULL, NULL),
(108, 13, 'Koh Kong', '', NULL, NULL),
(109, 13, 'Mondol Seima', '', NULL, NULL),
(110, 13, 'Thma Bang', '', NULL, NULL),
(111, 13, 'Kiri Sakor', '', NULL, NULL),
(112, 13, 'Khemara Phoumin', '', NULL, NULL),
(113, 13, 'Srae Ambel', '', NULL, NULL),
(114, 14, 'Chhlong', '', NULL, NULL),
(115, 14, 'Chitr Borei', '', NULL, NULL),
(116, 14, 'Krong Kratie', '', NULL, NULL),
(117, 14, 'Sombo', '', NULL, NULL),
(118, 14, 'Preaek Prasob', '', NULL, NULL),
(119, 14, 'Snoul', '', NULL, NULL),
(120, 15, 'Kaev Seima', '', NULL, NULL),
(121, 15, 'Ou Reang', '', NULL, NULL),
(122, 15, 'Krong Saen', '', NULL, NULL),
(123, 15, 'Pech Chreada', '', NULL, NULL),
(124, 15, 'Kaoh Nheaek', '', NULL, NULL),
(125, 16, 'Anlong Veaeng', '', NULL, NULL),
(126, 16, 'Banteay Ampil', '', NULL, NULL),
(127, 16, 'Chong Kal', '', NULL, NULL),
(128, 16, 'Krong Samraong', '', NULL, NULL),
(129, 16, 'Trapeang Prasat', '', NULL, NULL),
(130, 17, 'Krong Pailin', '', NULL, NULL),
(131, 17, 'Sala Krau', '', NULL, NULL),
(132, 17, 'Chong Kal', '', NULL, NULL),
(133, 18, 'Chey Saen', '', NULL, NULL),
(134, 18, 'Choam Khsant', '', NULL, NULL),
(135, 18, 'Rovieng', '', NULL, NULL),
(136, 18, 'Sangkom Thmei', '', NULL, NULL),
(137, 18, 'Chhaeb', '', NULL, NULL),
(138, 18, 'Kulen', '', NULL, NULL),
(139, 18, 'Tbaeng Mean Chey', '', NULL, NULL),
(140, 18, 'Krong Preah Vihear', '', NULL, NULL),
(141, 19, 'Ba Phnum', '', NULL, NULL),
(142, 19, 'Kanhchriech', '', NULL, NULL),
(143, 19, 'Peam Ro', '', NULL, NULL),
(144, 19, 'Preah Sdach', '', NULL, NULL),
(145, 19, 'Me Sang', '', NULL, NULL),
(146, 19, 'Pea Reang', '', NULL, NULL),
(147, 19, 'Kamchay Mear', '', NULL, NULL),
(148, 19, 'Prey Veaeng', '', NULL, NULL),
(149, 19, 'Peam Chor', '', NULL, NULL),
(150, 19, 'Kampong Trabaek', '', NULL, NULL),
(151, 19, 'Por Reang', '', NULL, NULL),
(152, 19, 'Svay Ontor', '', NULL, NULL),
(153, 20, 'Bakan', '', NULL, NULL),
(154, 20, 'Krakor', '', NULL, NULL),
(155, 20, 'Krong Pursat', '', NULL, NULL),
(156, 20, 'Kandieng', '', NULL, NULL),
(157, 20, 'Phnum Kravanh', '', NULL, NULL),
(158, 20, 'Veal Veaeng', '', NULL, NULL),
(159, 21, 'Andoung Meas', '', NULL, NULL),
(160, 21, 'Koun Mom', '', NULL, NULL),
(161, 21, 'Ou Chum', '', NULL, NULL),
(162, 21, 'Ta Veaeng', '', NULL, NULL),
(163, 21, 'Krong Banlung', '', NULL, NULL),
(164, 21, 'Lumphat', '', NULL, NULL),
(165, 21, 'Ou Ya Dav', '', NULL, NULL),
(166, 21, 'Bar Kaev', '', NULL, NULL),
(167, 22, 'Sesan', '', NULL, NULL),
(168, 22, 'Siem Bouk', '', NULL, NULL),
(169, 22, 'Siem Pang', '', NULL, NULL),
(170, 22, 'Thala Barivat', '', NULL, NULL),
(171, 22, 'Krong Stung Treng', '', NULL, NULL),
(172, 23, 'Chantrea', '', NULL, NULL),
(173, 23, 'Rumduol', '', NULL, NULL),
(174, 23, 'Svay Chrum', '', NULL, NULL),
(175, 23, 'Svay Teab', '', NULL, NULL),
(176, 23, 'Kampong Rou', '', NULL, NULL),
(177, 23, 'Romeas Haek', '', NULL, NULL),
(178, 23, 'Krong Bavet', '', NULL, NULL),
(179, 23, 'Krong Svay Rieng', '', NULL, NULL),
(180, 24, 'Angkor Borei', '', NULL, NULL),
(181, 24, 'Kiri Vong', '', NULL, NULL),
(182, 24, 'Samraong', '', NULL, NULL),
(183, 24, 'Treang', '', NULL, NULL),
(184, 24, 'Bati', '', NULL, NULL),
(185, 24, 'Krong Doun Kaev', '', NULL, NULL),
(186, 24, 'Kaoh Andaet', '', NULL, NULL),
(187, 24, 'Krong Doun Kaev', '', NULL, NULL),
(188, 24, 'Tram Kak', '', NULL, NULL),
(189, 24, 'Prey Kabbas', '', NULL, NULL),
(190, 24, 'Bourei Cholsar', '', NULL, NULL),
(191, 25, 'Dombae', '', NULL, NULL),
(192, 25, 'Memot', '', NULL, NULL),
(193, 25, 'Ponhea Kraek', '', NULL, NULL),
(194, 25, 'Krouch Chhma', '', NULL, NULL),
(195, 25, 'Tboung Khmum', '', NULL, NULL),
(196, 25, 'Ou Reang Ov', '', NULL, NULL),
(197, 25, 'Krong Suong', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `download_count` int(10) UNSIGNED DEFAULT '0',
  `member_type` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `download_count`, `member_type`, `member_id`, `created_at`, `title`, `file`, `description`, `updated_at`, `created_by`, `last_updated_by`, `status`) VALUES
(1, 1, 'staff', 1, '2019-05-16 13:07:05', 'C++ Programming', 'C++IntroductionSyllabus.pdf', 'Detail C++ Programming', '2019-09-03 07:49:41', 1, NULL, 1),
(2, 3, 'student', 2, '2019-05-16 13:08:38', 'Data Structure and Algorithm', '7056_data-structure-and-algorithm.pdf', NULL, '2019-09-03 07:50:25', 1, NULL, 1),
(3, 0, 'staff', 1, '2019-06-07 01:43:51', 'Learn more website wordpress', '8332_learn-more-website-wordpress.pdf', NULL, '2019-06-07 01:43:51', 1, NULL, 1),
(4, 0, 'staff', 1, '2019-06-07 01:46:58', '0121-oracle-database-11g-sql-fundamentals-course', 'CV.docx', 'Document of Oracle', '2019-08-02 01:15:33', 1, 1, 1),
(5, 0, 'staff', 1, '2019-06-14 02:39:16', 'Learn more website wordpress', 'All Lesson C++ Programming Update 2018.pdf', 'Document C++ Programming', '2019-06-14 02:39:16', 1, NULL, 1),
(6, 1, 'staff', 1, '2019-06-20 12:17:47', 'ដាំបន្លែ', '1-Ch1-Introduction to Databases.pdf', 'សៀវភៅ ដាំដំណាំបន្លែ', '2019-09-03 07:50:03', 1, NULL, 1),
(7, 0, 'staff', 4, '2019-08-02 09:57:33', 'C++ - Using OpenGL in a regular window', '6069_c-using-opengl-in-a-regular-window.pdf', 'C++ - Using OpenGL in a regular window', '2019-08-02 09:57:33', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

DROP TABLE IF EXISTS `downloads`;
CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `semesters_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `file` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `semesters_id`, `title`, `description`, `file`, `status`) VALUES
(1, '2019-03-14 03:23:35', '2019-10-09 16:15:42', 1, 1, NULL, 'C# Programming', 'មេរៀន C# Programming', '9822_c-programming.pdf', 1),
(2, '2019-03-14 03:37:38', '2019-10-09 16:16:49', 1, 1, NULL, 'C++ Programming Update 2018', 'All Lesson C++ Programming Update 2018', '5993_c-programming-update-2018.pdf', 1),
(3, '2019-03-14 03:44:40', '2019-03-14 03:44:40', 1, NULL, 7, 'QuickBook Pro 2016 Full Lesson', 'QuickBook Pro 2016 Full Lesson', '8101_quickbook-pro-2016-full-lesson.pdf', 1),
(4, '2019-06-07 01:40:05', '2019-06-07 01:40:05', 1, NULL, 3, 'Learn more website wordpress', NULL, '7048_learn-more-website-wordpress.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eating_times`
--

DROP TABLE IF EXISTS `eating_times`;
CREATE TABLE IF NOT EXISTS `eating_times` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `eating_times_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eating_times`
--

INSERT INTO `eating_times` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `time`, `status`) VALUES
(1, '2019-07-16 02:37:02', '2019-07-16 02:37:02', 1, NULL, 'ពេលព្រឹក', '07:36:00', 1),
(2, '2019-07-16 02:37:18', '2019-07-16 02:37:18', 1, NULL, 'ពេលថ្ងៃ', '12:37:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

DROP TABLE IF EXISTS `email_settings`;
CREATE TABLE IF NOT EXISTS `email_settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `driver` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encryption` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `exams_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-01-23 15:54:24', '2019-03-17 19:50:33', 1, 1, 'ឆមាសទី១', 1),
(2, '2019-01-23 15:54:37', '2019-03-17 19:50:46', 1, 1, 'ឆមាសទី២', 1),
(3, '2019-03-17 19:51:03', '2019-03-17 19:51:03', 1, NULL, 'ពាក់កណ្តាលឆមាស', 1),
(4, '2019-06-06 16:02:54', '2019-06-06 16:02:54', 1, NULL, 'តេស្តមុនចូលរៀន', 1),
(5, '2019-06-06 16:03:10', '2019-06-06 16:03:31', 1, 1, 'តេស្តពេលរៀនចប់', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_mark_ledgers`
--

DROP TABLE IF EXISTS `exam_mark_ledgers`;
CREATE TABLE IF NOT EXISTS `exam_mark_ledgers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `exam_schedule_id` int(10) UNSIGNED NOT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `obtain_mark_theory` int(11) DEFAULT NULL,
  `absent_theory` tinyint(1) NOT NULL DEFAULT '0',
  `obtain_mark_practical` int(11) DEFAULT NULL,
  `absent_practical` tinyint(1) NOT NULL DEFAULT '0',
  `sorting_order` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_pretest_schedules`
--

DROP TABLE IF EXISTS `exam_pretest_schedules`;
CREATE TABLE IF NOT EXISTS `exam_pretest_schedules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `months_id` int(10) UNSIGNED NOT NULL,
  `exams_id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `semesters_id` int(10) UNSIGNED NOT NULL,
  `subjects_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `full_mark_theory` int(11) DEFAULT NULL,
  `pass_mark_theory` int(11) DEFAULT NULL,
  `full_mark_practical` int(11) DEFAULT NULL,
  `pass_mark_practical` int(11) DEFAULT NULL,
  `sorting_order` int(10) UNSIGNED NOT NULL,
  `publish_status` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedules`
--

DROP TABLE IF EXISTS `exam_schedules`;
CREATE TABLE IF NOT EXISTS `exam_schedules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `months_id` int(10) UNSIGNED NOT NULL,
  `exams_id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `semesters_id` int(10) UNSIGNED NOT NULL,
  `subjects_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `full_mark_theory` int(11) DEFAULT NULL,
  `pass_mark_theory` int(11) DEFAULT NULL,
  `full_mark_practical` int(11) DEFAULT NULL,
  `pass_mark_practical` int(11) DEFAULT NULL,
  `sorting_order` int(10) UNSIGNED NOT NULL,
  `publish_status` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_schedules`
--

INSERT INTO `exam_schedules` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `years_id`, `months_id`, `exams_id`, `faculty_id`, `semesters_id`, `subjects_id`, `date`, `start_time`, `end_time`, `full_mark_theory`, `pass_mark_theory`, `full_mark_practical`, `pass_mark_practical`, `sorting_order`, `publish_status`, `status`) VALUES
(1, '2019-05-10 18:25:58', '2019-07-17 02:17:38', 1, NULL, 2, 5, 3, 6, 3, 4, '2019-05-11 00:00:00', '12:30:00', '14:30:00', 50, 25, 50, 25, 1, 1, 1),
(2, '2019-06-06 16:05:36', '2019-10-09 20:19:29', 1, NULL, 2, 6, 4, 6, 3, 4, '2019-06-07 00:00:00', '13:06:00', '13:30:00', 50, 50, 50, 50, 1, 1, 1),
(3, '2019-08-02 09:35:11', '2019-08-02 09:35:17', 1, NULL, 2, 8, 1, 7, 11, 6, '2019-08-03 00:00:00', '13:00:00', '14:01:00', 50, 50, 50, 50, 1, 1, 1),
(4, '2019-09-03 06:13:00', '2019-09-03 06:13:07', 1, NULL, 2, 9, 2, 7, 11, 6, '2019-09-03 00:00:00', '01:00:00', '02:00:00', 50, 50, 50, 50, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `faculty_code` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_kh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_en` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `course_type_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `faculties_faculty_unique` (`faculty`),
  UNIQUE KEY `faculties_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `faculty_code`, `faculty`, `faculty_kh`, `faculty_en`, `slug`, `status`, `course_type_id`) VALUES
(1, '2019-01-23 16:27:24', '2019-08-02 11:04:58', 1, 1, '1', 'Civil Engineering', 'វិស្វករសំណង់', 'Civil Engineering', 'Civil-Engineering', 1, 2),
(2, '2019-01-23 16:27:34', '2019-08-02 11:04:11', 1, 1, '2', 'Architecture', 'ស្ថាបត្យកម្ម', 'Architecture', 'Architecture', 1, 2),
(3, '2019-03-14 02:51:15', '2019-03-14 02:52:31', 1, 1, '3', 'Electrcity', 'អគ្គិសនី', 'Electrcity', 'ICT-B1', 1, 2),
(4, '2019-03-14 02:51:46', '2019-03-14 02:51:46', 1, NULL, '4', 'Electronic', 'អេឡិចត្រូនិច', 'Electronic', 'EEE-B1', 1, 2),
(5, '2019-04-27 02:47:58', '2019-04-27 02:47:58', 1, NULL, NULL, 'ICT-CUS-B14', 'ICT-CUS-B14', 'ICT-CUS-B14', 'ICT-CUS-B14', 1, 2),
(6, '2019-04-27 02:48:20', '2019-04-27 02:48:20', 1, NULL, NULL, 'ICT-CUS-B15', 'ICT-CUS-B15', 'ICT-CUS-B15', 'ICT-CUS-B15', 1, 2),
(7, '2019-06-07 00:36:52', '2019-06-07 00:36:52', 1, NULL, NULL, 'សុខភាពបន្តពូជ បុរស និង​ស្ត្រី', 'សុខភាពបន្តពូជ បុរស និង​ស្ត្រី', 'Reproductive health', 'សុខភាពបន្តពូជ-បុរស-និង​ស្ត្រី', 1, 1),
(8, '2019-03-14 02:51:46', '2019-08-02 11:05:10', 1, 1, '5', 'Automobile', 'Automobile', 'Automobile', 'Automobile', 1, 1),
(9, '2019-03-14 02:51:46', '2019-08-02 11:05:48', 1, 1, '6', 'Mechanical', 'Mechanical', 'Mechanical', 'Mechanical', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_semester`
--

DROP TABLE IF EXISTS `faculty_semester`;
CREATE TABLE IF NOT EXISTS `faculty_semester` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_semester`
--

INSERT INTO `faculty_semester` (`id`, `created_at`, `updated_at`, `faculty_id`, `semester_id`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 2, 1),
(3, NULL, NULL, 3, 1),
(4, NULL, NULL, 4, 1),
(5, NULL, NULL, 4, 2),
(6, NULL, NULL, 2, 2),
(7, NULL, NULL, 2, 3),
(8, NULL, NULL, 2, 4),
(9, NULL, NULL, 2, 5),
(35, NULL, NULL, 1, 4),
(34, NULL, NULL, 1, 3),
(33, NULL, NULL, 1, 2),
(13, NULL, NULL, 3, 2),
(14, NULL, NULL, 3, 3),
(15, NULL, NULL, 3, 4),
(16, NULL, NULL, 5, 1),
(17, NULL, NULL, 5, 2),
(18, NULL, NULL, 5, 3),
(19, NULL, NULL, 5, 4),
(20, NULL, NULL, 5, 5),
(21, NULL, NULL, 5, 6),
(22, NULL, NULL, 5, 7),
(23, NULL, NULL, 5, 8),
(24, NULL, NULL, 6, 1),
(25, NULL, NULL, 6, 2),
(26, NULL, NULL, 6, 3),
(27, NULL, NULL, 6, 4),
(28, NULL, NULL, 6, 5),
(29, NULL, NULL, 6, 6),
(30, NULL, NULL, 6, 7),
(31, NULL, NULL, 6, 8),
(32, NULL, NULL, 7, 11),
(36, NULL, NULL, 8, 1),
(37, NULL, NULL, 8, 2),
(38, NULL, NULL, 9, 1),
(39, NULL, NULL, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `fee_collections`
--

DROP TABLE IF EXISTS `fee_collections`;
CREATE TABLE IF NOT EXISTS `fee_collections` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `fee_masters_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL,
  `payment_mode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_collections`
--

INSERT INTO `fee_collections` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `students_id`, `fee_masters_id`, `date`, `paid_amount`, `discount`, `fine`, `payment_mode`, `note`, `response`, `status`) VALUES
(1, '2019-08-02 09:46:41', '2019-08-02 09:46:41', 1, NULL, 1, 1, '2019-08-02 00:00:00', 100, 5, 0, 'Cash', 'Discount 5%', NULL, 1),
(3, '2019-08-02 09:49:56', '2019-08-02 09:49:56', 1, NULL, 1, 1, '2019-08-02 00:00:00', 95, 0, 0, 'Cash', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fee_heads`
--

DROP TABLE IF EXISTS `fee_heads`;
CREATE TABLE IF NOT EXISTS `fee_heads` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `fee_head_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `fee_heads_fee_head_title_unique` (`fee_head_title`),
  UNIQUE KEY `fee_heads_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_heads`
--

INSERT INTO `fee_heads` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `fee_head_title`, `slug`, `status`) VALUES
(1, '2019-02-20 23:27:17', '2019-02-20 23:27:17', 1, NULL, 'Fee Head 12-2019', 'Fee-Head-12-2019', 1),
(2, '2019-02-20 23:27:34', '2019-02-20 23:27:34', 1, NULL, 'FREE HEAD 02-2019', 'FREE-HEAD-02-2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fee_masters`
--

DROP TABLE IF EXISTS `fee_masters`;
CREATE TABLE IF NOT EXISTS `fee_masters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `semester` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_head` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_due_date` datetime NOT NULL,
  `fee_amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_masters`
--

INSERT INTO `fee_masters` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `students_id`, `semester`, `fee_head`, `fee_due_date`, `fee_amount`, `status`) VALUES
(1, '2019-08-02 09:45:50', '2019-08-02 09:45:50', 1, NULL, 1, '1', '2', '2019-08-02 00:00:00', 200, 1),
(2, '2019-08-02 09:56:06', '2019-08-02 09:56:06', 1, NULL, 11, '1', '2', '2019-08-02 00:00:00', 250, 1),
(3, '2019-08-02 09:56:06', '2019-08-02 09:56:06', 1, NULL, 12, '1', '2', '2019-08-02 00:00:00', 250, 1),
(4, '2019-08-02 09:56:06', '2019-08-02 09:56:06', 1, NULL, 13, '1', '2', '2019-08-02 00:00:00', 250, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

DROP TABLE IF EXISTS `food_categories`;
CREATE TABLE IF NOT EXISTS `food_categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `food_categories_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-07-16 02:24:59', '2019-07-16 02:24:59', 1, NULL, 'កាហ្វេ', 1),
(2, '2019-07-16 02:25:15', '2019-07-16 02:25:15', 1, NULL, 'អាហារពេលព្រឹក', 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

DROP TABLE IF EXISTS `food_items`;
CREATE TABLE IF NOT EXISTS `food_items` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `foodCategories_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `food_items_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `foodCategories_id`, `title`, `price`, `image`, `description`, `status`) VALUES
(1, '2019-07-16 02:25:49', '2019-07-16 02:25:49', 1, NULL, 1, 'កាហ្វេ១', 2, '8943.png', NULL, 1),
(2, '2019-07-16 02:26:49', '2019-07-16 02:26:49', 1, NULL, 2, 'បាយមាន់', 2, '6975.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_item_food_schedule`
--

DROP TABLE IF EXISTS `food_item_food_schedule`;
CREATE TABLE IF NOT EXISTS `food_item_food_schedule` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `food_schedule_id` int(10) UNSIGNED NOT NULL,
  `food_item_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_item_food_schedule`
--

INSERT INTO `food_item_food_schedule` (`id`, `created_at`, `updated_at`, `food_schedule_id`, `food_item_id`, `status`) VALUES
(4, NULL, NULL, 2, 2, 1),
(3, NULL, NULL, 2, 1, 1),
(5, NULL, NULL, 3, 2, 1),
(6, NULL, NULL, 4, 1, 1),
(7, NULL, NULL, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_schedules`
--

DROP TABLE IF EXISTS `food_schedules`;
CREATE TABLE IF NOT EXISTS `food_schedules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `days_id` int(10) UNSIGNED NOT NULL,
  `eating_times_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_schedules`
--

INSERT INTO `food_schedules` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `hostels_id`, `days_id`, `eating_times_id`, `status`) VALUES
(2, '2019-07-16 02:40:13', '2019-07-16 02:40:13', 1, NULL, 1, 1, 1, 1),
(3, '2019-07-16 02:40:40', '2019-07-16 02:40:59', 1, 1, 1, 1, 2, 1),
(4, '2019-09-18 21:15:23', '2019-09-18 21:15:23', 1, NULL, 1, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
CREATE TABLE IF NOT EXISTS `gender` (
  `id` int(11) NOT NULL,
  `gender_kh` varchar(50) DEFAULT NULL,
  `gender_en` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender_kh`, `gender_en`) VALUES
(1, 'ប្រុស', 'Male'),
(2, 'ស្រី', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `general_education`
--

DROP TABLE IF EXISTS `general_education`;
CREATE TABLE IF NOT EXISTS `general_education` (
  `id` int(11) NOT NULL,
  `general_education_kh` varchar(250) DEFAULT NULL,
  `general_education_en` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_education`
--

INSERT INTO `general_education` (`id`, `general_education_kh`, `general_education_en`) VALUES
(22, 'មិនចេះអក្សរ', 'Illiterate'),
(1, 'ថ្នាក់ទី ១', '1'),
(2, 'ថ្នាក់ទី ២', '2'),
(3, 'ថ្នាក់ទី​ ៣', '3'),
(4, 'ថ្នាក់ទី ៤', '4'),
(5, 'ថ្នាក់ទី ៥', '5'),
(6, 'ថ្នាក់ទី ៦', '6'),
(7, 'ថ្នាក់ទី ៧', '7'),
(8, 'ថ្នាក់ទី ៨', '8'),
(9, 'ថ្នាក់ទី ៩', '9'),
(10, 'ថ្នាក់ទី ១០', '10'),
(11, 'ថ្នាក់ទី ១១', '11'),
(12, 'ថ្នាក់ទី ១២', '12');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

DROP TABLE IF EXISTS `general_settings`;
CREATE TABLE IF NOT EXISTS `general_settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `institute` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salogan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `print_header` text COLLATE utf8mb4_unicode_ci,
  `print_footer` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googlePlus` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsApp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordpress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `institute`, `salogan`, `address`, `phone`, `email`, `website`, `favicon`, `logo`, `print_header`, `print_footer`, `facebook`, `twitter`, `linkedIn`, `youtube`, `googlePlus`, `instagram`, `whatsApp`, `skype`, `pinterest`, `wordpress`, `status`) VALUES
(1, '2019-01-23 16:53:30', '2019-04-03 19:03:32', 1, 1, 'Sourng Edu', 'Learn to Rich', 'SIEM REAP', '092771244', 'info@rpitssr.edu.kh', 'https://www.rpitssr.edu.kh', '5051.png', '8968.png', NULL, 'SourngEdu @2019', '#', NULL, NULL, NULL, '#', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `grading_scales`
--

DROP TABLE IF EXISTS `grading_scales`;
CREATE TABLE IF NOT EXISTS `grading_scales` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `gradingType_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_from` int(11) NOT NULL,
  `percentage_to` int(11) NOT NULL,
  `grade_point` int(11) DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grading_scales`
--

INSERT INTO `grading_scales` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `gradingType_id`, `name`, `percentage_from`, `percentage_to`, `grade_point`, `description`, `status`) VALUES
(1, '2019-01-23 16:16:26', '2019-03-17 20:23:34', 1, 1, 1, 'A', 90, 100, 100, 'Grade A', 1),
(2, '2019-01-23 16:16:26', '2019-03-17 20:23:34', 1, 1, 1, 'B', 80, 90, 90, 'Grade B', 1),
(3, '2019-03-17 19:55:20', '2019-03-17 19:55:20', 1, NULL, 2, 'A', 90, 100, 100, NULL, 1),
(4, '2019-03-17 19:55:20', '2019-03-17 19:55:20', 1, NULL, 2, 'B', 80, 90, 90, NULL, 1),
(5, '2019-03-17 19:55:20', '2019-03-17 19:55:20', 1, NULL, 2, 'C', 70, 80, 80, NULL, 1),
(6, '2019-03-17 20:23:34', '2019-03-17 20:23:34', 1, NULL, 1, 'C', 70, 80, 80, 'Grade C', 1),
(7, '2019-04-27 02:50:11', '2019-04-27 02:50:11', 1, NULL, 3, 'A', 90, 100, 100, NULL, 1),
(8, '2019-04-27 02:59:14', '2019-04-27 02:59:14', 1, NULL, 4, 'A', 90, 100, 100, NULL, 1),
(9, '2019-06-07 00:33:24', '2019-06-07 00:33:24', 1, NULL, 5, 'P', 25, 50, 50, 'Pass', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grading_types`
--

DROP TABLE IF EXISTS `grading_types`;
CREATE TABLE IF NOT EXISTS `grading_types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `grading_types_title_unique` (`title`),
  UNIQUE KEY `grading_types_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grading_types`
--

INSERT INTO `grading_types` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `slug`, `status`) VALUES
(1, '2019-01-23 16:16:26', '2019-03-17 20:23:34', 1, 1, 'ឆ្នាំទី១', 'Year-1', 1),
(2, '2019-03-17 19:55:20', '2019-03-17 19:55:20', 1, NULL, 'ឆ្នាំទី២', 'ឆ្នាំទី២', 1),
(3, '2019-04-27 02:50:11', '2019-04-27 02:50:11', 1, NULL, 'ឆ្នាំទី៣', 'ឆ្នាំទី៣', 1),
(4, '2019-04-27 02:59:14', '2019-04-27 02:59:14', 1, NULL, 'ឆ្នាំទី៤', 'ឆ្នាំទី៤', 1),
(5, '2019-06-07 00:33:24', '2019-06-07 00:33:24', 1, NULL, 'វគ្គខ្លី៤ខែ', 'វគ្គខ្លី៤ខែ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guardian_details`
--

DROP TABLE IF EXISTS `guardian_details`;
CREATE TABLE IF NOT EXISTS `guardian_details` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `guardian_first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_last_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_eligibility` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_occupation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_office` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_office_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_residence_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_relation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_image` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardian_details`
--

INSERT INTO `guardian_details` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `guardian_first_name`, `guardian_middle_name`, `guardian_last_name`, `guardian_eligibility`, `guardian_occupation`, `guardian_office`, `guardian_office_number`, `guardian_residence_number`, `guardian_mobile_1`, `guardian_mobile_2`, `guardian_email`, `guardian_relation`, `guardian_address`, `guardian_image`, `status`) VALUES
(1, '2019-01-24 19:24:03', '2019-08-02 09:38:25', 1, NULL, 'ស្រី', NULL, 'ពៅ', NULL, 'កសិករ', NULL, NULL, NULL, '099887766', NULL, NULL, 'FATHER', 'SIEM REAP', NULL, 1),
(2, '2019-04-27 11:51:12', '2019-04-27 13:05:15', 1, NULL, 'CHEK', NULL, 'YONG', 'NA', 'NA', 'NA', 'NA', NULL, '0977719665', NULL, NULL, 'FATHER', 'SIEM REAP', NULL, 1),
(3, '2019-04-27 12:27:58', '2019-08-03 06:14:20', 1, NULL, 'ឡុញ', NULL, 'ឡាយ', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, '090362079', NULL, NULL, 'FATHER', 'សៀមរាប', NULL, 1),
(4, '2019-04-27 12:37:28', '2019-04-27 12:53:37', 1, NULL, 'តិច ស្រ៊ឺ', NULL, 'TECH SROU', 'NA', 'TEACHER', 'NA', 'NA', 'NA', '092914473', 'NA', 'NA', 'FATHER', 'KRALEANH', NULL, 1),
(5, '2019-04-27 12:37:54', '2019-04-27 13:35:53', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, '017961632', NULL, NULL, 'NA', 'NA', NULL, 1),
(6, '2019-04-27 12:37:59', '2019-04-27 12:42:39', 1, NULL, 'NA', NULL, 'NA', 'NA', 'NA', 'NA', 'Na', 'Na', 'Na', 'Na', 'Na', 'NA', 'NA', NULL, 1),
(7, '2019-04-27 12:48:41', '2019-04-27 12:48:41', 1, NULL, 'ស៊ុន សុំ', NULL, 'SUN  SOM', NULL, 'NA', NULL, NULL, NULL, 'NA', NULL, NULL, 'FATHER', 'SIEM REAP', '', 1),
(8, '2019-04-27 12:49:25', '2019-04-27 13:08:47', 1, NULL, 'POUY', NULL, 'NHIECHFARM', NULL, 'FARM', NULL, '066597805', NULL, '066587805', NULL, NULL, 'FATHER', 'SIEM REAP', NULL, 1),
(9, '2019-04-27 12:55:34', '2019-04-27 12:55:34', 1, NULL, 'អាង សូយ៉ម', NULL, 'ANG SOYOM', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, '0975478853', NULL, NULL, 'FATHER', 'SIEM REAP', '', 1),
(10, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', '', 1),
(11, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', NULL, 1),
(12, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', NULL, 1),
(13, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', NULL, 1),
(14, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', NULL, 1),
(15, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', NULL, 1),
(16, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', NULL, 1),
(17, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', NULL, 1),
(18, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 'NA', NULL, 'NA', NULL, 'NA', NULL, NULL, NULL, 'Na', NULL, NULL, 'NA', 'NA', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

DROP TABLE IF EXISTS `hostels`;
CREATE TABLE IF NOT EXISTS `hostels` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_detail` text COLLATE utf8mb4_unicode_ci,
  `warden` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warden_contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `hostels_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `name`, `type`, `address`, `contact_detail`, `warden`, `warden_contact`, `description`, `status`) VALUES
(1, '2019-07-16 02:30:08', '2019-07-16 02:30:08', 1, NULL, 'អាគារ A', 'Boys', 'សៀមរាប', 'បន្ទប់ជាន់ទី៣', '2019', '2019', 'បន្ទប់ជាន់ទី៣', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_meals`
--

DROP TABLE IF EXISTS `hostel_meals`;
CREATE TABLE IF NOT EXISTS `hostel_meals` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `days_id` int(10) UNSIGNED NOT NULL,
  `foods_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

DROP TABLE IF EXISTS `institute`;
CREATE TABLE IF NOT EXISTS `institute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_kh` varchar(250) DEFAULT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `location` text,
  `logo` varchar(250) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`id`, `name_kh`, `name_en`, `address`, `location`, `logo`, `status`) VALUES
(1, 'វិទ្យាស្ថានពហុបច្ចេកទេសភូមិភាគតេជោសែនសៀមរាប (R.P.I.T.S.S.R)', 'Regional Polytechnic Institute Techo Sen Siem Reap', 'បន្ទាយចាស់, ស្លក្រាម, ក្រុងសៀមរាប, សៀមរាប', NULL, 'rpitssr.png', 1),
(2, 'វិទ្យាស្ថានពហុបច្ចេកទេសខេត្តកំពង់ចាម', 'Polytechnic Institute of Kampong Cham', 'បន្ទាយចាស់, ស្លក្រាម, ក្រុងសៀមរាប, សៀមរាប', NULL, 'rpitssr1.png', 1),
(3, 'វិទ្យាស្ថានពហុបច្ចេកទេសខេត្តកំពង់ចាម 2', 'Polytechnic Institute of Kampong Cham 2', 'បន្ទាយចាស់, ស្លក្រាម, ក្រុងសៀមរាប, សៀមរាប', NULL, 'rpitssr1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'en.png', NULL, NULL),
(2, 'Khmer', 'kh', 'kh.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `library_circulations`
--

DROP TABLE IF EXISTS `library_circulations`;
CREATE TABLE IF NOT EXISTS `library_circulations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_prefix` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_limit_days` int(10) UNSIGNED DEFAULT NULL,
  `issue_limit_books` int(10) UNSIGNED DEFAULT NULL,
  `fine_per_day` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `library_circulations_user_type_unique` (`user_type`),
  UNIQUE KEY `library_circulations_slug_unique` (`slug`),
  UNIQUE KEY `library_circulations_code_prefix_unique` (`code_prefix`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_circulations`
--

INSERT INTO `library_circulations` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `user_type`, `slug`, `code_prefix`, `issue_limit_days`, `issue_limit_books`, `fine_per_day`, `status`) VALUES
(1, '2019-01-23 15:38:07', '2019-08-02 10:09:27', 1, 1, 'Student', 'student', 'STUDLIB', 4, 6, 7, 1),
(2, '2019-01-23 15:38:07', '2019-08-02 10:09:42', 1, 1, 'Staff', 'staff', 'STALIB', 2, 2, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `library_members`
--

DROP TABLE IF EXISTS `library_members`;
CREATE TABLE IF NOT EXISTS `library_members` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `user_type` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_members`
--

INSERT INTO `library_members` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `user_type`, `member_id`, `status`) VALUES
(1, '2019-03-14 04:24:41', '2019-03-14 04:24:41', 1, NULL, 1, 1, 1),
(2, '2019-08-02 10:07:22', '2019-08-02 10:07:22', 1, NULL, 2, 4, 1),
(3, '2019-08-02 10:07:57', '2019-08-02 10:07:57', 1, NULL, 1, 5, 1),
(4, '2019-10-09 16:02:13', '2019-10-09 16:02:13', 1, NULL, 1, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_activities`
--

DROP TABLE IF EXISTS `login_activities`;
CREATE TABLE IF NOT EXISTS `login_activities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `login_activities_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

DROP TABLE IF EXISTS `marital_status`;
CREATE TABLE IF NOT EXISTS `marital_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marital_kh` varchar(250) DEFAULT NULL,
  `marital_en` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Marital Status';

--
-- Dumping data for table `marital_status`
--

INSERT INTO `marital_status` (`id`, `marital_kh`, `marital_en`) VALUES
(1, 'នៅលីវ', 'Single'),
(2, 'រៀបការរួច', 'Married'),
(3, 'លែងលះ', 'Divorced'),
(4, 'មេម៉ាយ ឬ ពោះម៉ាយ', 'Widow');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_06_084909_create_students_table', 1),
(4, '2017_11_06_085106_create_parent_details_table', 1),
(5, '2017_11_06_085135_create_guardian_details_table', 1),
(6, '2017_11_06_085150_create_faculties_table', 1),
(7, '2017_11_06_085202_create_semesters_table', 1),
(8, '2017_11_07_091332_create_faculty_semester_table', 1),
(9, '2017_11_11_120928_create_addressinfos_table', 1),
(10, '2017_11_17_011606_create_documents_table', 1),
(11, '2017_11_18_005300_create_notes_table', 1),
(12, '2017_11_19_055352_create_fee_heads_table', 1),
(13, '2017_11_20_012242_create_fee_masters_table', 1),
(14, '2017_11_21_035458_create_fee_collections_table', 1),
(15, '2017_11_27_010354_create_student_statuses_table', 1),
(16, '2017_11_27_094949_create_book_masters_table', 1),
(17, '2017_11_27_095001_create_books_table', 1),
(18, '2017_11_28_014317_create_book_categories_table', 1),
(19, '2017_11_28_060832_create_book_statuses_table', 1),
(20, '2017_11_29_084116_create_library_circulations_table', 1),
(21, '2017_11_30_015025_create_library_members_table', 1),
(22, '2017_11_30_072329_create_staff_table', 1),
(23, '2017_12_02_010529_create_book_issues_table', 1),
(24, '2017_12_06_005401_create_transaction_heads_table', 1),
(25, '2017_12_06_012542_create_transactions_table', 1),
(26, '2017_12_08_084025_create_payroll_heads_table', 1),
(27, '2017_12_08_090233_create_payroll_masters_table', 1),
(28, '2017_12_08_090813_create_salary_pays_table', 1),
(29, '2017_12_13_084859_create_years_table', 1),
(30, '2017_12_13_084925_create_months_table', 1),
(31, '2017_12_14_062342_create_attendance_masters_table', 1),
(32, '2017_12_14_063449_create_attendances_table', 1),
(33, '2018_02_15_104206_create_settings_table', 1),
(34, '2018_02_18_061426_create_sms_emails_table', 1),
(35, '2018_02_18_061538_create_notices_table', 1),
(36, '2018_03_02_003733_create_grading_types_table', 1),
(37, '2018_03_02_003849_create_grading_scales_table', 1),
(38, '2018_03_02_173947_create_subjects_table', 1),
(39, '2018_03_02_180148_create_semester_subject_table', 1),
(40, '2018_03_03_140508_create_exams_table', 1),
(41, '2018_03_03_140529_create_exam_schedules_table', 1),
(42, '2018_03_03_140543_create_exam_mark_ledgers_table', 1),
(43, '2018_03_08_100236_create_staff_designations_table', 1),
(44, '2018_03_09_155741_create_hostels_table', 1),
(45, '2018_03_10_002019_create_room_types_table', 1),
(46, '2018_03_18_233110_create_rooms_table', 1),
(47, '2018_03_20_175730_create_beds_table', 1),
(48, '2018_03_21_012144_create_bed_statuses_table', 1),
(49, '2018_03_21_181903_create_residents_table', 1),
(50, '2018_03_21_190050_create_resident_histories_table', 1),
(51, '2018_03_26_233817_create_days_table', 1),
(52, '2018_03_27_045931_create_food_categories_table', 1),
(53, '2018_03_27_050051_create_food_items_table', 1),
(54, '2018_03_27_050835_create_hostel_meals_table', 1),
(55, '2018_03_27_223813_create_eating_times_table', 1),
(56, '2018_03_27_225950_create_food_schedules_table', 1),
(57, '2018_03_30_001832_create_food_item_food_schedule_table', 1),
(58, '2018_03_30_234754_create_routes_table', 1),
(59, '2018_03_30_234825_create_vehicles_table', 1),
(60, '2018_03_30_234840_create_route_vehicles_table', 1),
(61, '2018_03_31_000843_create_vehicle_staffs_table', 1),
(62, '2018_04_02_062605_create_general_settings_table', 1),
(63, '2018_04_03_054649_create_email_settings_table', 1),
(64, '2018_04_03_054708_create_sms_settings_table', 1),
(65, '2018_04_03_055400_create_alert_settings_table', 1),
(66, '2018_04_29_234215_create_academic_infos_table', 1),
(67, '2018_05_22_001204_entrust_setup_tables', 1),
(68, '2018_05_28_101725_create_student_guardians_table', 1),
(69, '2018_05_30_141644_create_payment_settings_table', 1),
(70, '2018_06_04_091509_create_transport_users_table', 1),
(71, '2018_06_04_092336_create_transport_histories_table', 1),
(72, '2018_06_06_055405_create_assignments_table', 1),
(73, '2018_06_06_055442_create_assignment_answers_table', 1),
(74, '2018_06_06_055503_create_download_table', 1),
(75, '2018_06_09_094821_create_attendance_statuses_table', 1),
(76, '2019_03_16_153459_create_languages_table', 2),
(77, '2019_07_04_085631_create_subject_quizzes_table', 3),
(78, '2019_07_04_085759_create_questions_table', 3),
(79, '2019_07_04_085848_create_quiz_results_table', 3),
(80, '2019_07_04_085938_create_question_subject_quiz_table', 3),
(81, '2019_07_04_090231_create_options_table', 3),
(82, '2019_07_04_090232_create_answers_table', 3),
(83, '2019_07_07_150338_create_user_answers_table', 3),
(84, '2019_07_07_151531_create_average_scores_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `modality`
--

DROP TABLE IF EXISTS `modality`;
CREATE TABLE IF NOT EXISTS `modality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modality_kh` varchar(250) DEFAULT NULL,
  `modality_en` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modality`
--

INSERT INTO `modality` (`id`, `modality_kh`, `modality_en`) VALUES
(1, 'តាមសហគ្រាស', 'Center Base'),
(2, 'តាមសហគមន៍', 'Interprise Base'),
(3, 'វិទ្យាស្ថាន', 'Institute');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

DROP TABLE IF EXISTS `months`;
CREATE TABLE IF NOT EXISTS `months` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `months_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'January', 1),
(2, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'February', 1),
(3, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'March', 1),
(4, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'April', 1),
(5, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'May', 1),
(6, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'June', 1),
(7, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'July', 1),
(8, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'August', 1),
(9, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'September', 1),
(10, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'October', 1),
(11, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'November', 1),
(12, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, NULL, 'December', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `member_type` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `member_type`, `member_id`, `subject`, `note`, `status`) VALUES
(1, '2019-08-02 09:05:26', '2019-08-02 09:05:26', 1, NULL, 'staff', 4, 'ត្រូវប្រគល់ឯកសារប្រឡងសិស្ស', 'ត្រូវប្រគល់ឯកសារប្រឡងសិស្ស នៅសប្តាហ៍នេះ', 1),
(2, '2019-08-03 06:01:34', '2019-08-03 06:01:34', 5, NULL, 'student', 7, 'សុំច្បាប់', 'សុំច្បាប់២ថ្ងៃ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `display_group` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `message`, `publish_date`, `end_date`, `display_group`, `status`) VALUES
(1, '2019-03-14 05:17:25', '2019-03-14 05:17:25', 2, NULL, 'ត្រូវប្រឡងឆមាស', '<p>ត្រូវប្រឡងឆមាសទី២ សម្រាប់គ្រងមុខវិជ្ជា</p>', '2019-03-17 00:00:00', '2019-03-19 00:00:00', '2,3,4,5,6,7,8', 1),
(2, '2019-08-02 10:13:45', '2019-08-02 10:13:45', 7, NULL, 'បៀវត្ស ខែ មករា', '<p>សូមយកសៀវភៅសងទាំងអស់គ្នា</p>', '2019-08-03 00:00:00', '2019-08-10 00:00:00', '4,5,6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `options_question_id_foreign` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'A', 1, '2019-07-20 08:27:06', '2019-07-20 08:27:06'),
(2, 1, 'B', 1, '2019-07-20 08:27:06', '2019-07-20 08:27:06'),
(3, 1, 'C', 1, '2019-07-20 08:27:06', '2019-07-20 08:27:06'),
(4, 2, 'A', 1, '2019-07-20 08:27:19', '2019-07-20 08:27:19'),
(5, 2, 'B', 1, '2019-07-20 08:27:19', '2019-07-20 08:27:19'),
(6, 2, 'C', 1, '2019-07-20 08:27:19', '2019-07-20 08:27:19'),
(7, 3, 'A', 1, '2019-07-20 08:27:30', '2019-07-20 08:27:30'),
(8, 3, 'B', 1, '2019-07-20 08:27:30', '2019-07-20 08:27:30'),
(9, 3, 'C', 1, '2019-07-20 08:27:30', '2019-07-20 08:27:30'),
(28, 10, 'ប្រដាប់បន្តពូជរបស់បុរសនិងស្រ្តី (1/4)', 1, '2019-10-08 04:57:30', '2019-10-08 04:57:30'),
(29, 10, 'ការរូមភេទនិងការមានគភ៌', 1, '2019-10-08 04:57:30', '2019-10-08 04:57:30'),
(30, 10, 'មធ្យោបាយការពារកំណើតទំនើប', 1, '2019-10-08 04:57:30', '2019-10-08 04:57:30'),
(31, 10, 'ការមានឈាមរដូវចំពោះស្រ្តី', 1, '2019-10-08 04:57:30', '2019-10-08 04:57:30'),
(32, 10, 'ការឆ្លងជម្ងឺកាមរោគដូចជា ធ្លាក់ស នោមមានខ្ទុះ ដំបៅលើប្រដាប់ភេទ..', 1, '2019-10-08 04:57:30', '2019-10-08 04:57:30'),
(33, 10, 'ការឆ្លងមេរោគអេដស៌', 1, '2019-10-08 04:57:30', '2019-10-08 04:57:30'),
(34, 11, 'បុរសចាប់ពី១១ឆ្នាំ', 1, '2019-10-09 13:27:12', '2019-10-09 13:27:12'),
(35, 11, 'ស្រ្តីចាប់ពី ៩ ឆ្នាំ', 1, '2019-10-09 13:27:12', '2019-10-09 13:27:12'),
(36, 11, 'បុរសចាប់ពី១៨ឆ្នាំ', 1, '2019-10-09 13:27:12', '2019-10-09 13:27:12'),
(37, 11, 'ស្រ្តីចាប់ពី ១៦ ឆ្នាំ', 1, '2019-10-09 13:27:12', '2019-10-09 13:27:12'),
(38, 12, '១០ ឆ្នាំដល់ ១៨ ឆ្នាំ', 1, '2019-10-09 14:28:12', '2019-10-09 14:28:12'),
(39, 12, '១០ ឆ្នាំដល់ ២៤ ឆ្នាំ', 1, '2019-10-09 14:28:12', '2019-10-09 14:28:12'),
(40, 12, '១៥ ឆ្នាំដល់ ២៤ ឆ្នាំ', 1, '2019-10-09 14:28:12', '2019-10-09 14:28:12'),
(41, 13, '១០ ឆ្នាំដល់ ១៨ ឆ្នាំ', 1, '2019-10-09 20:21:33', '2019-10-09 20:21:33'),
(42, 13, '១០ ឆ្នាំដល់ ២៤ ឆ្នាំ', 1, '2019-10-09 20:21:33', '2019-10-09 20:21:33'),
(43, 13, '១៥ ឆ្នាំដល់ ២៤ ឆ្នាំ', 1, '2019-10-09 20:21:33', '2019-10-09 20:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `overal_fund`
--

DROP TABLE IF EXISTS `overal_fund`;
CREATE TABLE IF NOT EXISTS `overal_fund` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kh` varchar(250) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Overall Fund';

--
-- Dumping data for table `overal_fund`
--

INSERT INTO `overal_fund` (`id`, `title_kh`, `title_en`, `create_by`, `create_date`) VALUES
(1, 'មូល​និធិ​ជាតិ​បណ្ដុះ​បណ្ដាល (NTF)', 'National Training Fund', NULL, NULL),
(2, 'ថវិកា​ទ្រទ្រង់​គ្រឹះស្ថាន', 'Institution Supporting Fund', NULL, NULL),
(3, 'មូល​និធិ​ពិសេស​របស់​សម្តេច​តេជោ​នាយក​រដ្ឋមន្រ្តី (SF)', 'Special Fund', NULL, NULL),
(4, 'កម្មវិធី​បណ្ដុះ​បណ្ដាល​ជំនាញ​តាម​លិខិត​បញ្ជាក់ (VSTP)', 'Voucher Skill Training Program', NULL, NULL),
(5, 'គម្រោង​សាក​ល្បង​លើ​បច្ចេក​ទេស​ក្រោយ​ប្រមូលផល', 'Japenes Fund Poverty Reduce', NULL, NULL),
(6, 'សិក្សា​បង់ថ្លៃ', 'Tuition Fee', NULL, NULL),
(7, 'ផ្សេងៗ', 'Other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parent_details`
--

DROP TABLE IF EXISTS `parent_details`;
CREATE TABLE IF NOT EXISTS `parent_details` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `grandfather_first_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grandfather_middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grandfather_last_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_last_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_eligibility` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_office` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_office_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_residence_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_last_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_eligibility` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_office` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_office_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_residence_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_image` text COLLATE utf8mb4_unicode_ci,
  `mother_image` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_details`
--

INSERT INTO `parent_details` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `students_id`, `grandfather_first_name`, `grandfather_middle_name`, `grandfather_last_name`, `father_first_name`, `father_middle_name`, `father_last_name`, `father_eligibility`, `father_occupation`, `father_office`, `father_office_number`, `father_residence_number`, `father_mobile_1`, `father_mobile_2`, `father_email`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_eligibility`, `mother_occupation`, `mother_office`, `mother_office_number`, `mother_residence_number`, `mother_mobile_1`, `mother_mobile_2`, `mother_email`, `father_image`, `mother_image`, `status`) VALUES
(1, '2019-01-24 19:24:03', '2019-08-02 09:38:25', 1, NULL, 1, 'សែក', NULL, 'អ៊ាត', 'ស្រី', NULL, 'ពៅ', NULL, 'កសិក', NULL, NULL, NULL, NULL, NULL, NULL, 'ចែ', NULL, 'ពៅ', NULL, 'មេផ្ទះ', NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1),
(2, '2019-04-27 11:51:12', '2019-04-27 13:05:15', 1, NULL, 2, 'PICH', NULL, 'HOL', 'CHEK', NULL, 'YONG', 'NA', 'NA', 'NA', 'NA', NULL, NULL, NULL, NULL, 'ពេជ្រ', NULL, 'អ៊ីស', NULL, 'កសិករ', NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1),
(3, '2019-04-27 12:27:58', '2019-08-03 06:14:20', 1, NULL, 3, NULL, NULL, NULL, 'ឡុញ', NULL, 'ឡាយ', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, NULL, NULL, NULL, 'ឡឹម', NULL, 'មាស', NULL, 'ស្លាប់', NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1),
(4, '2019-04-27 12:37:28', '2019-04-27 12:53:37', 1, NULL, 4, 'NA', NULL, 'NA', 'តិច ស្រ៊ឺ', NULL, 'TECH SROU', 'NA', 'TEACHER', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'លី រដ្ឋា', NULL, 'LY ROTHA', 'NA', 'HOUSE WIFE', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '', '', 1),
(5, '2019-04-27 12:37:54', '2019-04-27 13:35:53', 1, NULL, 5, NULL, NULL, NULL, 'MEANN', NULL, 'SEM', NULL, 'NA', NULL, NULL, NULL, NULL, NULL, NULL, 'SUOM', NULL, 'LOUM', NULL, 'NA', NULL, NULL, NULL, '017961632', NULL, NULL, '', '', 1),
(6, '2019-04-27 12:37:59', '2019-04-27 12:42:39', 1, NULL, 6, 'NA', NULL, NULL, 'SUN', NULL, 'SOM', 'NA', 'NA', 'NA', 'NA', NULL, NULL, NULL, NULL, 'KIM', NULL, 'HON', 'NA', 'NA', 'NA', 'NA', 'Na', 'Na', 'Na', 'Na', '', '', 1),
(7, '2019-04-27 12:48:41', '2019-04-27 12:48:41', 1, NULL, 7, NULL, NULL, NULL, 'ស៊ុន សុំ', NULL, 'SUN  SOM', NULL, 'NA', NULL, NULL, NULL, NULL, NULL, NULL, 'គីម ហុន', NULL, 'KIM HON', NULL, 'កសិករ', NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1),
(8, '2019-04-27 12:49:25', '2019-04-27 13:08:47', 1, NULL, 8, NULL, NULL, NULL, 'POUY', NULL, 'NHIECH', NULL, 'FARM', NULL, NULL, NULL, NULL, NULL, NULL, 'MEK', NULL, 'OUT', NULL, 'FARM', NULL, NULL, NULL, '066597805', NULL, NULL, '', '', 1),
(9, '2019-04-27 12:55:34', '2019-04-27 12:55:34', 1, NULL, 9, NULL, NULL, NULL, 'អាង សូយ៉ម', NULL, 'ANG SOYOM', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, NULL, NULL, NULL, 'ជា អេងជូ', NULL, 'CHEA ENGCHO', NULL, 'មេផ្ទះ', NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1),
(10, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 1, NULL, 10, NULL, NULL, NULL, 'CHUN', NULL, 'HEAP', 'NA', 'NA', 'NA', 'NA', NULL, NULL, NULL, NULL, 'OURN', NULL, 'HENG', NULL, 'NA', NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1),
(11, '2019-01-24 19:24:03', '2019-08-02 09:38:25', 1, NULL, 11, 'សែក', NULL, 'អ៊ាត', 'ស្រី', NULL, 'ពៅ', NULL, 'កសិក', NULL, NULL, NULL, NULL, NULL, NULL, 'ចែ', NULL, 'ពៅ', NULL, 'មេផ្ទះ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, '2019-01-24 19:24:03', '2019-08-02 09:38:25', 1, NULL, 12, 'សែក', NULL, 'អ៊ាត', 'ស្រី', NULL, 'ពៅ', NULL, 'កសិក', NULL, NULL, NULL, NULL, NULL, NULL, 'ចែ', NULL, 'ពៅ', NULL, 'មេផ្ទះ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, '2019-04-27 12:27:58', '2019-08-03 06:14:20', 1, NULL, 13, NULL, NULL, NULL, 'ឡុញ', NULL, 'ឡាយ', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, NULL, NULL, NULL, 'ឡឹម', NULL, 'មាស', NULL, 'ស្លាប់', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, '2019-04-27 12:27:58', '2019-08-03 06:14:20', 1, NULL, 14, NULL, NULL, NULL, 'ឡុញ', NULL, 'ឡាយ', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, NULL, NULL, NULL, 'ឡឹម', NULL, 'មាស', NULL, 'ស្លាប់', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, '2019-04-27 12:27:58', '2019-08-03 06:14:20', 1, NULL, 15, NULL, NULL, NULL, 'ឡុញ', NULL, 'ឡាយ', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, NULL, NULL, NULL, 'ឡឹម', NULL, 'មាស', NULL, 'ស្លាប់', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, '2019-04-27 12:27:58', '2019-08-03 06:14:20', 1, NULL, 16, NULL, NULL, NULL, 'ឡុញ', NULL, 'ឡាយ', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, NULL, NULL, NULL, 'ឡឹម', NULL, 'មាស', NULL, 'ស្លាប់', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, '2019-04-27 12:27:58', '2019-08-03 06:14:20', 1, NULL, 17, NULL, NULL, NULL, 'ឡុញ', NULL, 'ឡាយ', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, NULL, NULL, NULL, 'ឡឹម', NULL, 'មាស', NULL, 'ស្លាប់', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, '2019-04-27 12:27:58', '2019-08-03 06:14:20', 1, NULL, 18, NULL, NULL, NULL, 'ឡុញ', NULL, 'ឡាយ', NULL, 'គ្រូបង្រៀន', NULL, NULL, NULL, NULL, NULL, NULL, 'ឡឹម', NULL, 'មាស', NULL, 'ស្លាប់', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

DROP TABLE IF EXISTS `payment_settings`;
CREATE TABLE IF NOT EXISTS `payment_settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identity` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_settings`
--

INSERT INTO `payment_settings` (`id`, `created_at`, `updated_at`, `identity`, `logo`, `link`, `config`, `status`) VALUES
(1, NULL, NULL, 'Stripe', 'stripe', 'https://stripe.com', '{\"Publishable_Key\":\"\",\"Secret_Key\":\"\"}', 0),
(2, NULL, NULL, 'PayUMoney', 'payumoney', 'https://www.payumoney.com', '{\"Merchant_Key\":\"\",\"Merchant_Salt\":\"\",\"Auth_Header\":\"\"}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payroll_heads`
--

DROP TABLE IF EXISTS `payroll_heads`;
CREATE TABLE IF NOT EXISTS `payroll_heads` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `payroll_heads_title_unique` (`title`),
  UNIQUE KEY `payroll_heads_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payroll_heads`
--

INSERT INTO `payroll_heads` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `slug`, `status`) VALUES
(1, '2019-03-14 03:11:35', '2019-03-14 03:11:35', 1, NULL, 'បរិញ្ញាបត្ររង', 'បរិញ្ញាបត្ររង', 1),
(2, '2019-03-14 03:11:44', '2019-03-14 03:11:44', 1, NULL, 'បរិញ្ញាបត្រ', 'បរិញ្ញាបត្រ', 1),
(3, '2019-08-02 09:53:15', '2019-08-02 09:53:15', 1, NULL, 'បៀវត្ស ខែ មករា', 'បៀវត្ស-ខែ-មករា', 1),
(4, '2019-08-02 09:53:30', '2019-08-02 09:53:30', 1, NULL, 'បៀវត្ស ខែ កុម្ភៈ', 'បៀវត្ស-ខែ-កុម្ភៈ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payroll_masters`
--

DROP TABLE IF EXISTS `payroll_masters`;
CREATE TABLE IF NOT EXISTS `payroll_masters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `tag_line` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payroll_head` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payroll_masters`
--

INSERT INTO `payroll_masters` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `staff_id`, `tag_line`, `payroll_head`, `due_date`, `amount`, `status`) VALUES
(1, '2019-03-14 03:14:38', '2019-03-14 03:14:38', 1, NULL, 1, 'Tag Line 002', '2', '2019-03-15 00:00:00', 250, 1),
(2, '2019-03-14 03:16:28', '2019-03-14 03:16:28', 1, NULL, 1, 'ថ្នាក់ICTជំនាន់៦', '1', '2019-03-12 00:00:00', 300, 1),
(3, '2019-08-02 09:54:47', '2019-08-02 09:54:47', 1, NULL, 1, 'ប្រាក់បង្រៀន Microprocessor ICTB15', '4', '2019-08-02 00:00:00', 225, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=448 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `group`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Menu', 'expand-action-menu', 'Expand Nav Menu', 'Expand Nav Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(2, 'Menu', 'admin-control', 'Admin Control', 'Admin Control Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(3, 'Menu', 'dashboard', 'Dashboard', 'Dashboard Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(4, 'Menu', 'student-staff', 'Student-Staff', 'Student-Staff Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(5, 'Menu', 'account', 'Account', 'Account Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(6, 'Menu', 'library', 'Library', 'Libaray Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(7, 'Menu', 'attendance', 'Attendance', 'Attendance Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(8, 'Menu', 'examination', 'Examination', 'Examination Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(9, 'Menu', 'hostel', 'Hostel', 'Hostel Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(10, 'Menu', 'transport', 'Transport', 'Transport Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(11, 'Menu', 'assignment', 'Assignment', 'Assignment Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(12, 'Menu', 'download', 'Download', 'Download Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(13, 'Menu', 'report', 'Report', 'Report Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(14, 'Menu', 'alert-center', 'Alert Center', 'Alert Center Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(15, 'Menu', 'academic', 'Academic Setup', 'Academic Setup Menu', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(16, 'Role', 'role-index', 'Index', 'Role Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(17, 'Role', 'role-add', 'Add', 'Role Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(18, 'Role', 'role-view', 'View', 'View Role', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(19, 'Role', 'role-edit', 'Edit', 'Edit Role', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(20, 'Role', 'role-delete', 'Delete', 'Delete Role', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(21, 'User', 'user-index', 'Index', 'User Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(22, 'User', 'user-add', 'Add', 'User Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(23, 'User', 'user-edit', 'Edit', 'Edit User', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(24, 'User', 'user-delete', 'Delete', 'Delete User', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(25, 'User', 'user-active', 'Active', 'Active User', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(26, 'User', 'user-in-active', 'In-Active', 'In-Active User', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(27, 'User', 'user-bulk-action', 'Bulk(Active,InActive,Delete)', 'User Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(28, 'General Setting', 'general-setting-index', 'Index', 'General Setting Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(29, 'General Setting', 'general-setting-add', 'Add', 'General Setting Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(30, 'General Setting', 'general-setting-edit', 'Edit', 'Edit General Setting', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(31, 'Alert Setting', 'alert-setting-index', 'Index', 'Alert Setting Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(32, 'Alert Setting', 'alert-setting-add', 'Add', 'Alert Setting Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(33, 'Alert Setting', 'alert-setting-edit', 'Edit', 'Edit Alert Setting', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(34, 'SMS Setting', 'sms-setting-index', 'Index', 'SMS Setting Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(35, 'SMS Setting', 'sms-setting-add', 'Add', 'SMS Setting Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(36, 'SMS Setting', 'sms-setting-edit', 'Edit', 'Edit SMS Setting', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(37, 'SMS Setting', 'sms-setting-active', 'Active', 'Active SMS', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(38, 'SMS Setting', 'sms-setting-in-active', 'In-Active', 'In-Active SMS', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(39, 'Email Setting', 'email-setting-index', 'Index', 'Email Setting Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(40, 'Email Setting', 'email-setting-add', 'Add', 'Email Setting Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(41, 'Email Setting', 'email-setting-edit', 'Edit', 'Edit Email Setting', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(42, 'Email Setting', 'email-setting-status-change', 'Status', 'Change Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(43, 'Payment Gateway Setting', 'payment-gateway-setting-index', 'Index', 'Payment Gateway Setting Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(44, 'Payment Gateway Setting', 'payment-gateway-setting-add', 'Add', 'Payment Gateway Setting Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(45, 'Payment Gateway Setting', 'payment-gateway-setting-edit', 'Edit', 'Edit Payment Gateway Setting', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(46, 'Payment Gateway Setting', 'payment-gateway-active', 'Active', 'Active Payment Gateway', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(47, 'Payment Gateway Setting', 'payment-gateway-in-active', 'In-Active', 'In-Active Payment Gateway', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(48, 'Student', 'student-index', 'Index', 'Student Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(49, 'Student', 'student-registration', 'Registration', 'Student Registration', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(50, 'Student', 'student-view', 'View', 'View Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(51, 'Student', 'student-edit', 'Edit', 'Edit Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(52, 'Student', 'student-delete', 'Delete', 'Delete Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(53, 'Student', 'student-active', 'Active', 'Active Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(54, 'Student', 'student-in-active', 'In-Active', 'In-Active Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(55, 'Student', 'student-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(56, 'Student', 'student-delete-academic-info', 'Delete Academic Info', 'Student Delete Academic Info', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(57, 'Student', 'student-transfer', 'Transfer', 'Transfer Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(58, 'Student Document', 'student-document-index', 'Index', 'Student Document Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(59, 'Student Document', 'student-document-add', 'Add', 'Student Document Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(60, 'Student Document', 'student-document-edit', 'Edit', 'Edit Student Document', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(61, 'Student Document', 'student-document-delete', 'Delete', 'Delete Student Document', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(62, 'Student Document', 'student-document-active', 'Active', 'Active Student Document', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(63, 'Student Document', 'student-document-in-active', 'In-Active', 'In-Active Student Document', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(64, 'Student Document', 'student-document-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Document Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(65, 'Student Note', 'student-note-index', 'Index', 'Student Note Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(66, 'Student Note', 'student-note-add', 'Add', 'Student Note Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(67, 'Student Note', 'student-note-edit', 'Edit', 'Edit Student Note', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(68, 'Student Note', 'student-note-delete', 'Delete', 'Delete Student Note', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(69, 'Student Note', 'student-note-active', 'Active', 'Active Student Note', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(70, 'Student Note', 'student-note-in-active', 'In-Active', 'In-Active Student Note', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(71, 'Student Note', 'student-note-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Note Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(72, 'Staff', 'staff-index', 'Index', 'Staff Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(73, 'Staff', 'staff-add', 'Add', 'Staff Registration', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(74, 'Staff', 'staff-view', 'View', 'View Staff', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(75, 'Staff', 'staff-edit', 'Edit', 'Edit Staff', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(76, 'Staff', 'staff-delete', 'Delete', 'Delete Staff', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(77, 'Staff', 'staff-active', 'Active', 'Active Staff', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(78, 'Staff', 'staff-in-active', 'In-Active', 'In-Active Staff', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(79, 'Staff', 'staff-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(80, 'Staff Document', 'staff-document-index', 'Index', 'Staff Document Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(81, 'Staff Document', 'staff-document-add', 'Add', 'Staff Document Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(82, 'Staff Document', 'staff-document-edit', 'Edit', 'Edit Staff Document', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(83, 'Staff Document', 'staff-document-delete', 'Delete', 'Delete Staff Document', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(84, 'Staff Document', 'staff-document-active', 'Active', 'Active Staff Document', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(85, 'Staff Document', 'staff-document-in-active', 'In-Active', 'In-Active Staff Document', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(86, 'Staff Document', 'staff-document-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Document Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(87, 'Staff Note', 'staff-note-index', 'Index', 'Staff Note Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(88, 'Staff Note', 'staff-note-add', 'Add', 'Staff Note Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(89, 'Staff Note', 'staff-note-edit', 'Edit', 'Edit Staff Note', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(90, 'Staff Note', 'staff-note-delete', 'Delete', 'Delete Staff Note', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(91, 'Staff Note', 'staff-note-active', 'Active', 'Active Staff Note', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(92, 'Staff Note', 'staff-note-in-active', 'In-Active', 'In-Active Staff Note', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(93, 'Staff Note', 'staff-note-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Note Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(94, 'Staff Designation', 'staff-designation-index', 'Index', 'Staff Designation Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(95, 'Staff Designation', 'staff-designation-add', 'Add', 'Staff Designation Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(96, 'Staff Designation', 'staff-designation-edit', 'Edit', 'Edit Staff Designation', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(97, 'Staff Designation', 'staff-designation-delete', 'Delete', 'Delete Staff Designation', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(98, 'Staff Designation', 'staff-designation-active', 'Active', 'Active Staff Designation', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(99, 'Staff Designation', 'staff-designation-in-active', 'In-Active', 'In-Active Staff Designation', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(100, 'Staff Designation', 'staff-designation-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Designation Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(101, 'Fees', 'fees-index', 'Index', 'Student Fees Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(102, 'Fees', 'fees-balance', 'Balance', 'Fees Balance', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(103, 'Fees Head', 'fees-head-index', 'Index', 'Fees Head Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(104, 'Fees Head', 'fees-head-add', 'Add', 'Fees Head Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(105, 'Fees Head', 'fees-head-edit', 'Edit', 'Edit Fees Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(106, 'Fees Head', 'fees-head-delete', 'Delete', 'Delete Fees Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(107, 'Fees Head', 'fees-head-active', 'Active', 'Active Fees Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(108, 'Fees Head', 'fees-head-in-active', 'In-Active', 'In-Active Fees Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(109, 'Fees Head', 'fees-head-bulk-action', 'Bulk(Active,InActive,Delete)', 'Fees Head Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(110, 'Fees Master', 'fees-master-index', 'Index', 'Fees Master Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(111, 'Fees Master', 'fees-master-add', 'Add', 'Fees Master Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(112, 'Fees Master', 'fees-master-edit', 'Edit', 'Edit Fees Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(113, 'Fees Master', 'fees-master-delete', 'Delete', 'Delete Fees Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(114, 'Fees Master', 'fees-master-active', 'Active', 'Active Fees Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(115, 'Fees Master', 'fees-master-in-active', 'In-Active', 'In-Active Fees Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(116, 'Fees Master', 'fees-master-bulk-action', 'Bulk(Active,InActive,Delete)', 'Fees Master Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(117, 'Fees Collection', 'fees-collection-index', 'Index', 'Fees Collection Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(118, 'Fees Collection', 'fees-collection-add', 'Add', 'Fees Collection Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(119, 'Fees Collection', 'fees-collection-view', 'View', 'View Fees Collection', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(120, 'Fees Collection', 'fees-collection-delete', 'Delete', 'Delete Fees Collection', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(121, 'Online Payment', 'fees-payment-stripe-payment', 'Stripe', 'Stripe Payment', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(122, 'Online Payment', 'fees-payment-khalti-payment', 'Khalti', 'Khalti Payment', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(123, 'Online Payment', 'fees-payment-payumoney-payment', 'payUmoney', 'PayUmoney Payment', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(124, 'Payroll', 'payroll-index', 'Index', 'Staff Payroll Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(125, 'Payroll', 'payroll-balance', 'Balance', 'Payroll Balance', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(126, 'Payroll Head', 'payroll-head-index', 'Index', 'Payroll Head Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(127, 'Payroll Head', 'payroll-head-add', 'Add', 'Payroll Head Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(128, 'Payroll Head', 'payroll-head-edit', 'Edit', 'Edit Payroll Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(129, 'Payroll Head', 'payroll-head-delete', 'Delete', 'Delete Payroll Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(130, 'Payroll Head', 'payroll-head-active', 'Active', 'Active Payroll Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(131, 'Payroll Head', 'payroll-head-in-active', 'In-Active', 'In-Active Payroll Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(132, 'Payroll Head', 'payroll-head-bulk-action', 'Bulk(Active,InActive,Delete)', 'Payroll Head Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(133, 'Payroll Master', 'payroll-master-index', 'Index', 'Payroll Master Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(134, 'Payroll Master', 'payroll-master-add', 'Add', 'Payroll Master Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(135, 'Payroll Master', 'payroll-master-edit', 'Edit', 'Edit Payroll Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(136, 'Payroll Master', 'payroll-master-delete', 'Delete', 'Delete Payroll Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(137, 'Payroll Master', 'payroll-master-active', 'Active', 'Active Payroll Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(138, 'Payroll Master', 'payroll-master-in-active', 'In-Active', 'In-Active Payroll Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(139, 'Payroll Master', 'payroll-master-bulk-action', 'Bulk(Active,InActive,Delete)', 'Payroll Master Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(140, 'Salary Pay', 'salary-payment-index', 'Index', 'Salary Pay Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(141, 'Salary Pay', 'salary-payment-add', 'Add', 'Salary Pay Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(142, 'Salary Pay', 'salary-payment-view', 'View', 'View Salary Pay', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(143, 'Salary Pay', 'salary-payment-delete', 'Delete', 'Delete Salary Pay', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(144, 'Transaction Head', 'transaction-head-index', 'Index', 'Transaction Head Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(145, 'Transaction Head', 'transaction-head-add', 'Add', 'Transaction Head Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(146, 'Transaction Head', 'transaction-head-edit', 'Edit', 'Edit Transaction Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(147, 'Transaction Head', 'transaction-head-delete', 'Delete', 'Delete Transaction Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(148, 'Transaction Head', 'transaction-head-active', 'Active', 'Active Transaction Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(149, 'Transaction Head', 'transaction-head-in-active', 'In-Active', 'In-Active Transaction Head', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(150, 'Transaction Head', 'transaction-head-bulk-action', 'Bulk(Active,InActive,Delete)', 'Payroll Head Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(151, 'Transaction', 'transaction-index', 'Index', 'Transaction Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(152, 'Transaction', 'transaction-add', 'Add', 'Transaction Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(153, 'Transaction', 'transaction-edit', 'Edit', 'Edit Transaction', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(154, 'Transaction', 'transaction-delete', 'Delete', 'Delete Transaction', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(155, 'Transaction', 'transaction-active', 'Active', 'Active Transaction', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(156, 'Transaction', 'transaction-in-active', 'In-Active', 'In-Active Transaction', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(157, 'Transaction', 'transaction-bulk-action', 'Bulk(Active,InActive,Delete)', 'Transaction Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(158, 'Account Print', 'fee-print-master', 'Master Slip', 'Fee Master Slip', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(159, 'Account Print', 'fee-print-collection', 'Collection', 'Print Fee Collection', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(160, 'Account Print', 'fee-print-today-receipt', 'Today Short Receipt', 'Print Today Short Receipt', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(161, 'Account Print', 'fee-print-today-detail-receipt', 'Today Detail Receipt', 'Print Today Detail Receip', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(162, 'Account Print', 'fee-print-student-ledger', 'Student Ledger', 'Print Student Ledger', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(163, 'Account Print', 'fee-print-student-due', 'Due Short Slip', 'Print Due Short Slip', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(164, 'Account Print', 'fee-print-student-due-detail', 'Due Detail Slip', 'Print Due Detail Slip', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(165, 'Account Print', 'fee-print-bulk-due-slip', 'Bulk Due Short Slip', 'Print Bulk Due Short Slip', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(166, 'Account Print', 'fee-print-bulk-due-detail-slip', 'Bulk Due Detail SLip', 'Print Bulk Due Detail SLip', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(167, 'Library', 'library-index', 'Index', 'Library Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(168, 'Library', 'library-book-issue', 'Book Issue', 'Book Issue', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(169, 'Library', 'library-book-return', 'Book Return', 'Return Book', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(170, 'Library', 'library-return-over', 'Return Period Over', 'Return Period Over', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(171, 'Library', 'library-issue-history', 'History', 'Issue History', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(172, 'Book', 'book-index', 'Index', 'Book Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(173, 'Book', 'book-add', 'Add', 'Book Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(174, 'Book', 'book-edit', 'Edit', 'Edit Book', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(175, 'Book', 'book-view', 'View', 'View Book', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(176, 'Book', 'book-delete', 'Delete', 'Delete Book', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(177, 'Book', 'book-active', 'Active', 'Active Book', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(178, 'Book', 'book-in-active', 'In-Active', 'In-Active Book', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(179, 'Book', 'book-bulk-action', 'Bulk(Active,InActive,Delete)', 'Book Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(180, 'Book', 'book-add-copies', 'Add Book Copies', 'Add Book Copies', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(181, 'Book', 'book-status', 'Status', 'Book Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(182, 'Book', 'book-bulk-copies-delete', 'Delete Bulk Copies', 'Delete Bulk Copes', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(183, 'Book Category', 'book-category-index', 'Index', 'Book Category Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(184, 'Book Category', 'book-category-add', 'Add', 'Book Category Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(185, 'Book Category', 'book-category-edit', 'Edit', 'Edit Book Category', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(186, 'Book Category', 'book-category-delete', 'Delete', 'Delete Book Category', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(187, 'Book Category', 'book-category-active', 'Active', 'Active Book Category', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(188, 'Book Category', 'book-category-in-active', 'In-Active', 'In-Active Book Category', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(189, 'Book Category', 'book-category-bulk-action', 'Bulk(Active,InActive,Delete)', 'Book Category Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(190, 'Library Circulation', 'library-circulation-index', 'Index', 'Library Circulation Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(191, 'Library Circulation', 'library-circulation-add', 'Add', 'Library Circulation Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(192, 'Library Circulation', 'library-circulation-edit', 'Edit', 'Edit Library Circulation', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(193, 'Library Circulation', 'library-circulation-delete', 'Delete', 'Delete Library Circulation', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(194, 'Library Circulation', 'library-circulation-active', 'Active', 'Active Library Circulation', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(195, 'Library Circulation', 'library-circulation-in-active', 'In-Active', 'In-Active Library Circulation', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(196, 'Library Circulation', 'library-circulation-bulk-action', 'Bulk(Active,InActive,Delete)', 'Library Circulation Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(197, 'Library Member', 'library-member-index', 'Index', 'Library Member Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(198, 'Library Member', 'library-member-add', 'Add', 'Library Member Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(199, 'Library Member', 'library-member-edit', 'Edit', 'Edit Library Member', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(200, 'Library Member', 'library-member-delete', 'Delete', 'Delete Library Member', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(201, 'Library Member', 'library-member-active', 'Active', 'Active Library Member', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(202, 'Library Member', 'library-member-in-active', 'In-Active', 'In-Active Library Member', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(203, 'Library Member', 'library-member-bulk-action', 'Bulk(Active,InActive,Delete)', 'Library Member Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(204, 'Library Member', 'library-member-staff', 'Staff Index', 'Library Member Staff', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(205, 'Library Member', 'library-member-staff-view', 'Staff View', 'Library Member Staff', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(206, 'Library Member', 'library-member-student', 'Student Index', 'Library Member Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(207, 'Library Member', 'library-member-student-view', 'Student View', 'Library Member Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(208, 'Attendance Master', 'attendance-master-index', 'Index', 'Attendance Master Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(209, 'Attendance Master', 'attendance-master-add', 'Add', 'Attendance Master Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(210, 'Attendance Master', 'attendance-master-edit', 'Edit', 'Edit Attendance Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(211, 'Attendance Master', 'attendance-master-delete', 'Delete', 'Delete Attendance Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(212, 'Attendance Master', 'attendance-master-active', 'Active', 'Active Attendance Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(213, 'Attendance Master', 'attendance-master-in-active', 'In-Active', 'In-Active Attendance Master', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(214, 'Attendance Master', 'attendance-master-bulk-action', 'Bulk(Active,InActive,Delete)', 'Attendance Master Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(215, 'Student Attendance', 'student-attendance-index', 'Index', 'Student Attendance Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(216, 'Student Attendance', 'student-attendance-add', 'Add', 'Student Attendance Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(217, 'Student Attendance', 'student-attendance-delete', 'Delete', 'Delete Student Attendance', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(218, 'Student Attendance', 'student-attendance-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Attendance Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(219, 'Staff Attendance', 'staff-attendance-index', 'Index', 'Staff Attendance Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(220, 'Staff Attendance', 'staff-attendance-add', 'Add', 'Staff Attendance Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(221, 'Staff Attendance', 'staff-attendance-delete', 'Delete', 'Delete Staff Attendance', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(222, 'Staff Attendance', 'staff-attendance-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Attendance Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(223, 'Exam', 'exam-index', 'Index', 'Exam Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(224, 'Exam', 'exam-add', 'Add', 'Exam Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(225, 'Exam', 'exam-edit', 'Edit', 'Edit Exam', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(226, 'Exam', 'exam-delete', 'Delete', 'Delete Exam', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(227, 'Exam', 'exam-active', 'Active', 'Active Exam', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(228, 'Exam', 'exam-in-active', 'In-Active', 'In-Active Exam', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(229, 'Exam', 'exam-bulk-action', 'Bulk(Active,InActive,Delete)', 'Exam Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(230, 'Exam', 'exam-admit-card', 'Admit Card', 'Exam Admit Card', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(231, 'Exam', 'exam-exam-routine', 'Routin/Schedule', 'Exam Routine/Schedule', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(232, 'Exam', 'exam-mark-sheet', 'MarkSheet', 'Exam Mark Sheet', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(233, 'Exam', 'exam-result-publish', 'Result Publish', 'Exam Result Publish', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(234, 'Exam', 'exam-result-un-publish', 'Result UnPublish', 'Exam Result UnPublish', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(235, 'Exam Schedule', 'exam-schedule-index', 'Index', 'Exam Schedule Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(236, 'Exam Schedule', 'exam-schedule-add', 'Add', 'Exam Schedule Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(237, 'Exam Schedule', 'exam-schedule-edit', 'Edit', 'Edit Exam Schedule', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(238, 'Exam Schedule', 'exam-schedule-delete', 'Delete', 'Delete Exam Schedule', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(239, 'Exam Schedule', 'exam-schedule-active', 'Active', 'Active Exam Schedule', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(240, 'Exam Schedule', 'exam-schedule-in-active', 'In-Active', 'In-Active Exam Schedule', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(241, 'Exam Mark Ledger', 'exam-mark-ledger-index', 'Index', 'Exam Mark Ledger Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(242, 'Exam Mark Ledger', 'exam-mark-ledger-add', 'Add', 'Exam Mark Ledger Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(243, 'Exam Mark Ledger', 'exam-mark-ledger-edit', 'Edit', 'Edit Exam Mark Ledger', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(244, 'Exam Mark Ledger', 'exam-mark-ledger-delete', 'Delete', 'Delete Exam Mark Ledger', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(245, 'Exam Mark Ledger', 'exam-mark-ledger-active', 'Active', 'Active Exam Mark Ledger', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(246, 'Exam Mark Ledger', 'exam-mark-ledger-in-active', 'In-Active', 'In-Active Exam Mark Ledger', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(247, 'Exam Print', 'exam-print-admitcard', 'Admit Card', 'Exam Admit Card', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(248, 'Exam Print', 'exam-print-routine', 'Routine/Schedule', 'Exam Routine/Schedule', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(249, 'Exam Print', 'exam-print-mark-sheet', 'Mark/Grade Sheet', 'Exam Mark/Grade Sheet', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(250, 'Hostel', 'hostel-index', 'Index', 'Hostel Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(251, 'Hostel', 'hostel-add', 'Add', 'Hostel Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(252, 'Hostel', 'hostel-view', 'view', 'Hostel View', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(253, 'Hostel', 'hostel-edit', 'Edit', 'Edit Hostel', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(254, 'Hostel', 'hostel-delete', 'Delete', 'Delete Hostel', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(255, 'Hostel', 'hostel-active', 'Active', 'Active Hostel', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(256, 'Hostel', 'hostel-in-active', 'In-Active', 'In-Active Hostel', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(257, 'Hostel', 'hostel-bulk-action', 'Bulk(Active,InActive,Delete)', 'Hostel Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(258, 'Room', 'room-add', 'Add', 'Room Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(259, 'Room', 'room-view', 'View', 'Room View', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(260, 'Room', 'room-edit', 'Edit', 'Edit Room', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(261, 'Room', 'room-delete', 'Delete', 'Delete Room', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(262, 'Room', 'room-active', 'Active', 'Active Room', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(263, 'Room', 'room-in-active', 'In-Active', 'In-Active Room', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(264, 'Room', 'room-bulk-action', 'Bulk(Active,InActive,Delete)', 'Room Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(265, 'Bed', 'bed-add', 'Add', 'Bed Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(266, 'Bed', 'bed-status', 'Status', 'Bed Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(267, 'Bed', 'bed-delete', 'Delete', 'Delete Bed', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(268, 'Bed', 'bed-active', 'Active', 'Active Bed', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(269, 'Bed', 'bed-in-active', 'In-Active', 'In-Active Bed', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(270, 'Bed', 'bed-bulk-action', 'Bulk(Active,InActive,Delete)', 'Bed Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(271, 'Room Type', 'room-type-index', 'Index', 'Room Type Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(272, 'Room Type', 'room-type-add', 'Add', 'Room Type Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(273, 'Room Type', 'room-type-edit', 'Edit', 'Edit Room Type', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(274, 'Room Type', 'room-type-delete', 'Delete', 'Delete Room Type', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(275, 'Room Type', 'room-type-active', 'Active', 'Active Room Type', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(276, 'Room Type', 'room-type-in-active', 'In-Active', 'In-Active Room Type', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(277, 'Room Type', 'room-type-bulk-action', 'Bulk(Active,InActive,Delete)', 'Room Type Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(278, 'Resident', 'resident-index', 'Index', 'Resident Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(279, 'Resident', 'resident-add', 'Add', 'Resident Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(280, 'Resident', 'resident-edit', 'Edit', 'Edit Resident', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(281, 'Resident', 'resident-delete', 'Delete', 'Delete Resident', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(282, 'Resident', 'resident-bulk-action', 'Bulk(Active,InActive,Delete)', 'Resident Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(283, 'Resident', 'resident-renew', 'Renew', 'Renew Resident', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(284, 'Resident', 'resident-leave', 'Leave', 'Leave Resident', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(285, 'Resident', 'resident-shift', 'Shift', 'Shift Resident', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(286, 'Resident', 'resident-history', 'History', 'Resident History', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(287, 'Food', 'food-index', 'Index', 'Food Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(288, 'Food', 'food-add', 'Add', 'Food Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(289, 'Food', 'food-edit', 'Edit', 'Edit Food', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(290, 'Food', 'food-delete', 'Delete', 'Delete Food', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(291, 'Food', 'food-active', 'Active', 'Active Food', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(292, 'Food', 'food-in-active', 'In-Active', 'In-Active Food', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(293, 'Food', 'food-bulk-action', 'Bulk(Active,InActive,Delete)', 'Food Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(294, 'Food Category', 'food-category-index', 'Index', 'Food Category Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(295, 'Food Category', 'food-category-add', 'Add', 'Food Category Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(296, 'Food Category', 'food-category-edit', 'Edit', 'Edit Food Category', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(297, 'Food Category', 'food-category-delete', 'Delete', 'Delete Food Category', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(298, 'Food Category', 'food-category-active', 'Active', 'Active Food Category', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(299, 'Food Category', 'food-category-in-active', 'In-Active', 'In-Active Food Category', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(300, 'Food Category', 'food-category-bulk-action', 'Bulk(Active,InActive,Delete)', 'Food Category Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(301, 'Food Item', 'food-item-index', 'Index', 'Food Item Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(302, 'Food Item', 'food-item-add', 'Add', 'Food Item Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(303, 'Food Item', 'food-item-edit', 'Edit', 'Edit Food Item', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(304, 'Food Item', 'food-item-delete', 'Delete', 'Delete Food Item', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(305, 'Food Item', 'food-item-active', 'Active', 'Active Food Item', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(306, 'Food Item', 'food-item-in-active', 'In-Active', 'In-Active Food Item', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(307, 'Food Item', 'food-item-bulk-action', 'Bulk(Active,InActive,Delete)', 'Food Item Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(308, 'Eating Time', 'eating-time-index', 'Index', 'Eating Time Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(309, 'Eating Time', 'eating-time-add', 'Add', 'Eating Time Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(310, 'Eating Time', 'eating-time-edit', 'Edit', 'Edit Eating Time', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(311, 'Eating Time', 'eating-time-delete', 'Delete', 'Delete Eating Time', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(312, 'Eating Time', 'eating-time-active', 'Active', 'Active Eating Time', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(313, 'Eating Time', 'eating-time-in-active', 'In-Active', 'In-Active Eating Time', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(314, 'Eating Time', 'eating-time-bulk-action', 'Bulk(Active,InActive,Delete)', 'Eating Time Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(315, 'Transport Route', 'transport-route-index', 'Index', 'Transport Route Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(316, 'Transport Route', 'transport-route-add', 'Add', 'Transport Route Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(317, 'Transport Route', 'transport-route-edit', 'Edit', 'Edit Transport Route', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(318, 'Transport Route', 'transport-route-delete', 'Delete', 'Delete Transport Route', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(319, 'Transport Route', 'transport-route-active', 'Active', 'Active Transport Route', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(320, 'Transport Route', 'transport-route-in-active', 'In-Active', 'In-Active Transport Route', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(321, 'Transport Route', 'transport-route-bulk-action', 'Bulk(Active,InActive,Delete)', 'Transport Route Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(322, 'Vehicle', 'vehicle-index', 'Index', 'Vehicle Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(323, 'Vehicle', 'vehicle-add', 'Add', 'Vehicle Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(324, 'Vehicle', 'vehicle-edit', 'Edit', 'Edit Vehicle', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(325, 'Vehicle', 'vehicle-delete', 'Delete', 'Delete Vehicle', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(326, 'Vehicle', 'vehicle-active', 'Active', 'Active Vehicle', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(327, 'Vehicle', 'vehicle-in-active', 'In-Active', 'In-Active Vehicle', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(328, 'Vehicle', 'vehicle-bulk-action', 'Bulk(Active,InActive,Delete)', 'Vehicle Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(329, 'Transport User/Traveller', 'transport-user-index', 'Index', 'Transport User/Traveller Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(330, 'Transport User/Traveller', 'transport-user-add', 'Add', 'Transport User/Traveller Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(331, 'Transport User/Traveller', 'transport-user-edit', 'Edit', 'Edit Transport User/Traveller', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(332, 'Transport User/Traveller', 'transport-user-delete', 'Delete', 'Delete Transport User/Traveller', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(333, 'Transport User/Traveller', 'transport-user-bulk-action', 'Bulk(Active,InActive,Delete)', 'Transport User/Traveller Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(334, 'Transport User/Traveller', 'transport-user-renew', 'Renew', 'Renew Transport User/Traveller', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(335, 'Transport User/Traveller', 'transport-user-leave', 'Leave', 'Leave Transport User/Traveller', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(336, 'Transport User/Traveller', 'transport-user-shift', 'Shift', 'Shift Transport User/Traveller', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(337, 'Transport User/Traveller', 'transport-user-history', 'History', 'Resident History', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(338, 'Report', 'student-report', 'Student', 'Student Report', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(339, 'Report', 'staff-report', 'Staff', 'Staff Report', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(340, 'Notice', 'notice-index', 'Index', 'Notice Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(341, 'Notice', 'notice-add', 'Add', 'Notice Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(342, 'Notice', 'notice-edit', 'Edit', 'Edit Notice', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(343, 'Notice', 'notice-delete', 'Delete', 'Delete Notice', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(344, 'SMS/E-Mail', 'sms-email-index', 'Index', 'SMS/E-Mail Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(345, 'SMS/E-Mail', 'sms-email-delete', 'Delete', 'SMS/E-Mail Delete', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(346, 'SMS/E-Mail', 'sms-email-bulk-action', 'Bulk(Active,InActive,Delete)', 'Bulk SMS/E-Mail', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(347, 'SMS/E-Mail', 'sms-email-create', 'Create', 'Create SMS/E-Mail', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(348, 'SMS/E-Mail', 'sms-email-send', 'Send', 'Send SMS/E-Mail', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(349, 'SMS/E-Mail', 'sms-email-student-guardian-send', 'Student & Guardian', 'Student & Guardian SMS/E-Mail', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(350, 'SMS/E-Mail', 'sms-email-staff-send', 'Staff', 'Staff SMS/E-Mail', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(351, 'SMS/E-Mail', 'sms-email-individual-send', 'Individual', 'Individual SMS/E-Mail', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(352, 'SMS/E-Mail', 'sms-email-fee-receipt', 'Fee Receipt', 'Fee ReceiptSMS/E-Mail', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(353, 'SMS/E-Mail', 'sms-email-due-reminder', 'Due Reminder', 'Due Reminder SMS/E-Mail', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(354, 'SMS/E-Mail', 'sms-email-book-return-reminder', 'Book Return Reminder', 'Book Return Reminder', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(355, 'Faculty', 'faculty-index', 'Index', 'Faculty Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(356, 'Faculty', 'faculty-add', 'Add', 'Faculty Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(357, 'Faculty', 'faculty-edit', 'Edit', 'Edit Faculty', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(358, 'Faculty', 'faculty-delete', 'Delete', 'Delete Faculty', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(359, 'Faculty', 'faculty-active', 'Active', 'Active Faculty', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(360, 'Faculty', 'faculty-in-active', 'In-Active', 'In-Active Faculty', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(361, 'Faculty', 'faculty-bulk-action', 'Bulk(Active,InActive,Delete)', 'Faculty Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(362, 'Semester', 'semester-index', 'Index', 'Semester Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(363, 'Semester', 'semester-add', 'Add', 'Semester Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(364, 'Semester', 'semester-edit', 'Edit', 'Edit Semester', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(365, 'Semester', 'semester-delete', 'Delete', 'Delete Semester', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(366, 'Semester', 'semester-active', 'Active', 'Active Semester', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(367, 'Semester', 'semester-in-active', 'In-Active', 'In-Active Semester', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(368, 'Semester', 'semester-bulk-action', 'Bulk(Active,InActive,Delete)', 'Semester Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(369, 'Grading', 'grading-index', 'Index', 'Grading Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(370, 'Grading', 'grading-add', 'Add', 'Grading Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(371, 'Grading', 'grading-edit', 'Edit', 'Edit Grading', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(372, 'Grading', 'grading-delete', 'Delete', 'Delete Grading', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(373, 'Grading', 'grading-active', 'Active', 'Active Grading', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(374, 'Grading', 'grading-in-active', 'In-Active', 'In-Active Grading', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(375, 'Grading', 'grading-bulk-action', 'Bulk(Active,InActive,Delete)', 'Grading Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(376, 'Subject / Course', 'subject-index', 'Index', 'Subject / Course Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(377, 'Subject / Course', 'subject-add', 'Add', 'Subject / Course Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(378, 'Subject / Course', 'subject-edit', 'Edit', 'Edit Subject / Course', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(379, 'Subject / Course', 'subject-delete', 'Delete', 'Delete Subject / Course', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(380, 'Subject / Course', 'subject-active', 'Active', 'Active Subject / Course', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(381, 'Subject / Course', 'subject-in-active', 'In-Active', 'In-Active Subject / Course', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(382, 'Subject / Course', 'subject-bulk-action', 'Bulk(Active,InActive,Delete)', 'Subject / Course Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(383, 'Student Status', 'student-status-index', 'Index', 'Student Status Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(384, 'Student Status', 'student-status-add', 'Add', 'Student Status Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(385, 'Student Status', 'student-status-edit', 'Edit', 'Edit Student Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(386, 'Student Status', 'student-status-delete', 'Delete', 'Delete Student Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(387, 'Student Status', 'student-status-active', 'Active', 'Active Student Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(388, 'Student Status', 'student-status-in-active', 'In-Active', 'In-Active Student Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(389, 'Student Status', 'student-status-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Status Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(390, 'Book Status', 'book-status-index', 'Index', 'Book Status Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(391, 'Book Status', 'book-status-add', 'Add', 'Book Status Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(392, 'Book Status', 'book-status-edit', 'Edit', 'Edit Book Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(393, 'Book Status', 'book-status-delete', 'Delete', 'Delete Book Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(394, 'Book Status', 'book-status-active', 'Active', 'Active Book Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(395, 'Book Status', 'book-status-in-active', 'In-Active', 'In-Active Book Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(396, 'Book Status', 'book-status-bulk-action', 'Bulk(Active,InActive,Delete)', 'Book Status Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(397, 'Bed Status', 'bed-status-index', 'Index', 'Bed Status Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(398, 'Bed Status', 'bed-status-add', 'Add', 'Bed Status Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(399, 'Bed Status', 'bed-status-edit', 'Edit', 'Edit Bed Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(400, 'Bed Status', 'bed-status-delete', 'Delete', 'Delete Bed Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(401, 'Bed Status', 'bed-status-active', 'Active', 'Active Bed Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(402, 'Bed Status', 'bed-status-in-active', 'In-Active', 'In-Active Bed Status', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(403, 'Bed Status', 'bed-status-bulk-action', 'Bulk(Active,InActive,Delete)', 'Bed Status Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(404, 'Year', 'year-index', 'Index', 'Year Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(405, 'Year', 'year-add', 'Add', 'Year Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(406, 'Year', 'year-edit', 'Edit', 'Edit Year', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(407, 'Year', 'year-delete', 'Delete', 'Delete Year', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(408, 'Year', 'year-active', 'Active', 'Active Year', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(409, 'Year', 'year-in-active', 'In-Active', 'In-Active Year', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(410, 'Year', 'year-bulk-action', 'Bulk(Active,InActive,Delete)', 'Year Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(411, 'Year', 'years-active-status', 'Make Active', 'Year Make Active', '2019-01-23 15:38:07', '2019-01-23 15:38:07');
INSERT INTO `permissions` (`id`, `group`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(412, 'Month', 'month-index', 'Index', 'Month Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(413, 'Month', 'month-add', 'Add', 'Month Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(414, 'Month', 'month-edit', 'Edit', 'Edit Month', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(415, 'Month', 'month-delete', 'Delete', 'Delete Month', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(416, 'Month', 'month-active', 'Active', 'Active Month', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(417, 'Month', 'month-in-active', 'In-Active', 'In-Active Month', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(418, 'Month', 'month-bulk-action', 'Bulk(Active,InActive,Delete)', 'Month Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(419, 'Day', 'day-index', 'Index', 'Day Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(420, 'Day', 'day-add', 'Add', 'Day Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(421, 'Day', 'day-edit', 'Edit', 'Edit Day', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(422, 'Day', 'day-delete', 'Delete', 'Delete Day', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(423, 'Day', 'day-active', 'Active', 'Active Day', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(424, 'Day', 'day-in-active', 'In-Active', 'In-Active Day', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(425, 'Day', 'day-bulk-action', 'Bulk(Active,InActive,Delete)', 'Day Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(426, 'Assignment', 'assignment-index', 'Index', 'Assignment Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(427, 'Assignment', 'assignment-add', 'Add', 'Assignment Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(428, 'Assignment', 'assignment-edit', 'Edit', 'Edit Assignment', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(429, 'Assignment', 'assignment-view', 'View', 'View Assignment', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(430, 'Assignment', 'assignment-delete', 'Delete', 'Delete Assignment', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(431, 'Assignment', 'assignment-active', 'Active', 'Active Assignment', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(432, 'Assignment', 'assignment-in-active', 'In-Active', 'In-Active Assignment', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(433, 'Assignment', 'assignment-bulk-action', 'Bulk(Active,InActive,Delete)', 'Assignment Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(434, 'Assignment Answer', 'assignment-answer-view', 'View', 'Assignment Answer View', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(435, 'Assignment Answer', 'assignment-answer-approve', 'Approve', 'Approve Assignment Answer', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(436, 'Assignment Answer', 'assignment-answer-reject', 'Reject', 'Reject Assignment Answer', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(437, 'Assignment Answer', 'assignment-answer-delete', 'Delete', 'Delete Assignment Answer', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(438, 'Assignment Answer', 'assignment-answer-bulk-action', 'Bulk(Approve, Reject,Delete)', 'Assignment Answer Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(439, 'Download', 'download-index', 'Index', 'Download Index', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(440, 'Download', 'download-add', 'Add', 'Download Add', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(441, 'Download', 'download-edit', 'Edit', 'Edit Download', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(442, 'Download', 'download-delete', 'Delete', 'Delete Download', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(443, 'Download', 'download-active', 'Active', 'Active Download', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(444, 'Download', 'download-in-active', 'In-Active', 'In-Active Download', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(445, 'Download', 'download-bulk-action', 'Bulk(Active,InActive,Delete)', 'Download Bulk Action', '2019-01-23 15:38:07', '2019-01-23 15:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 4),
(1, 5),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(2, 1),
(2, 2),
(2, 4),
(2, 5),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(4, 1),
(4, 2),
(4, 4),
(4, 5),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 1),
(5, 2),
(5, 3),
(5, 5),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(6, 1),
(6, 2),
(6, 4),
(6, 5),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(7, 1),
(7, 2),
(7, 5),
(7, 8),
(7, 9),
(7, 10),
(7, 11),
(7, 12),
(8, 1),
(8, 2),
(8, 5),
(8, 8),
(8, 9),
(8, 10),
(8, 11),
(8, 12),
(9, 1),
(9, 2),
(9, 5),
(9, 9),
(9, 10),
(9, 11),
(9, 12),
(10, 1),
(10, 2),
(10, 5),
(10, 9),
(10, 10),
(10, 11),
(10, 12),
(11, 1),
(11, 2),
(11, 5),
(11, 6),
(11, 8),
(11, 9),
(11, 10),
(11, 11),
(11, 12),
(12, 1),
(12, 2),
(12, 5),
(12, 8),
(12, 9),
(12, 10),
(12, 11),
(12, 12),
(13, 1),
(13, 2),
(13, 3),
(13, 5),
(13, 8),
(13, 9),
(13, 10),
(13, 11),
(13, 12),
(14, 1),
(14, 2),
(14, 4),
(14, 5),
(14, 8),
(14, 9),
(14, 10),
(14, 11),
(14, 12),
(15, 1),
(15, 2),
(15, 5),
(15, 9),
(15, 10),
(15, 11),
(15, 12),
(16, 1),
(16, 2),
(16, 6),
(16, 9),
(16, 10),
(16, 11),
(16, 12),
(17, 1),
(17, 2),
(17, 9),
(17, 10),
(17, 11),
(17, 12),
(18, 1),
(18, 2),
(18, 6),
(18, 9),
(18, 10),
(18, 11),
(18, 12),
(19, 1),
(19, 2),
(19, 9),
(19, 10),
(19, 11),
(19, 12),
(20, 1),
(20, 2),
(20, 9),
(20, 10),
(20, 11),
(20, 12),
(21, 1),
(21, 2),
(21, 6),
(21, 9),
(21, 10),
(21, 11),
(21, 12),
(22, 1),
(22, 2),
(22, 9),
(22, 10),
(22, 11),
(22, 12),
(23, 1),
(23, 2),
(23, 6),
(23, 9),
(23, 10),
(23, 11),
(23, 12),
(24, 1),
(24, 2),
(24, 9),
(24, 10),
(24, 11),
(24, 12),
(25, 1),
(25, 2),
(25, 6),
(25, 9),
(25, 10),
(25, 11),
(25, 12),
(26, 1),
(26, 2),
(26, 6),
(26, 9),
(26, 10),
(26, 11),
(26, 12),
(27, 1),
(27, 2),
(27, 6),
(27, 9),
(27, 10),
(27, 11),
(27, 12),
(28, 1),
(28, 2),
(28, 9),
(28, 10),
(28, 11),
(28, 12),
(29, 1),
(29, 2),
(29, 9),
(29, 10),
(29, 11),
(29, 12),
(30, 1),
(30, 2),
(30, 9),
(30, 10),
(30, 11),
(30, 12),
(31, 1),
(31, 2),
(31, 4),
(31, 9),
(31, 10),
(31, 11),
(31, 12),
(32, 1),
(32, 2),
(32, 9),
(32, 10),
(32, 11),
(32, 12),
(33, 1),
(33, 2),
(33, 9),
(33, 10),
(33, 11),
(33, 12),
(34, 1),
(34, 2),
(34, 9),
(34, 10),
(34, 11),
(34, 12),
(35, 1),
(35, 2),
(35, 9),
(35, 10),
(35, 11),
(35, 12),
(36, 1),
(36, 2),
(36, 9),
(36, 10),
(36, 11),
(36, 12),
(37, 1),
(37, 2),
(37, 9),
(37, 10),
(37, 11),
(37, 12),
(38, 1),
(38, 2),
(38, 9),
(38, 10),
(38, 11),
(38, 12),
(39, 1),
(39, 2),
(39, 9),
(39, 10),
(39, 11),
(39, 12),
(40, 1),
(40, 2),
(40, 9),
(40, 10),
(40, 11),
(40, 12),
(41, 1),
(41, 2),
(41, 9),
(41, 10),
(41, 11),
(41, 12),
(42, 1),
(42, 2),
(42, 9),
(42, 10),
(42, 11),
(42, 12),
(43, 1),
(43, 2),
(43, 6),
(43, 9),
(43, 10),
(43, 11),
(43, 12),
(44, 1),
(44, 2),
(44, 9),
(44, 10),
(44, 11),
(44, 12),
(45, 1),
(45, 2),
(45, 9),
(45, 10),
(45, 11),
(45, 12),
(46, 1),
(46, 2),
(46, 6),
(46, 9),
(46, 10),
(46, 11),
(46, 12),
(47, 1),
(47, 2),
(47, 6),
(47, 9),
(47, 10),
(47, 11),
(47, 12),
(48, 1),
(48, 2),
(48, 4),
(48, 5),
(48, 6),
(48, 8),
(48, 9),
(48, 10),
(48, 11),
(48, 12),
(48, 13),
(49, 1),
(49, 2),
(49, 4),
(49, 5),
(49, 6),
(49, 8),
(49, 9),
(49, 10),
(49, 11),
(49, 12),
(49, 13),
(50, 1),
(50, 2),
(50, 4),
(50, 5),
(50, 6),
(50, 8),
(50, 9),
(50, 10),
(50, 11),
(50, 12),
(50, 13),
(51, 1),
(51, 4),
(51, 5),
(51, 8),
(51, 9),
(51, 10),
(51, 11),
(51, 12),
(51, 13),
(52, 1),
(52, 5),
(52, 8),
(52, 9),
(52, 10),
(52, 11),
(52, 12),
(52, 13),
(53, 1),
(53, 2),
(53, 4),
(53, 5),
(53, 6),
(53, 8),
(53, 9),
(53, 10),
(53, 11),
(53, 12),
(53, 13),
(54, 1),
(54, 2),
(54, 4),
(54, 5),
(54, 6),
(54, 8),
(54, 9),
(54, 10),
(54, 11),
(54, 12),
(54, 13),
(55, 1),
(55, 2),
(55, 5),
(55, 6),
(55, 8),
(55, 9),
(55, 10),
(55, 11),
(55, 12),
(55, 13),
(56, 1),
(56, 2),
(56, 5),
(56, 6),
(56, 8),
(56, 9),
(56, 10),
(56, 11),
(56, 12),
(56, 13),
(57, 1),
(57, 2),
(57, 5),
(57, 6),
(57, 8),
(57, 9),
(57, 10),
(57, 11),
(57, 12),
(57, 13),
(58, 1),
(58, 2),
(58, 4),
(58, 6),
(58, 8),
(58, 9),
(58, 10),
(58, 11),
(58, 12),
(58, 13),
(59, 1),
(59, 2),
(59, 8),
(59, 9),
(59, 10),
(59, 11),
(59, 12),
(59, 13),
(60, 1),
(60, 2),
(60, 6),
(60, 8),
(60, 9),
(60, 10),
(60, 11),
(60, 12),
(60, 13),
(61, 1),
(61, 2),
(61, 8),
(61, 9),
(61, 10),
(61, 11),
(61, 12),
(61, 13),
(62, 1),
(62, 2),
(62, 6),
(62, 8),
(62, 9),
(62, 10),
(62, 11),
(62, 12),
(62, 13),
(63, 1),
(63, 2),
(63, 6),
(63, 8),
(63, 9),
(63, 10),
(63, 11),
(63, 12),
(63, 13),
(64, 1),
(64, 2),
(64, 6),
(64, 8),
(64, 9),
(64, 10),
(64, 11),
(64, 12),
(64, 13),
(65, 1),
(65, 2),
(65, 4),
(65, 6),
(65, 9),
(65, 10),
(65, 11),
(65, 12),
(65, 13),
(66, 1),
(66, 2),
(66, 4),
(66, 6),
(66, 9),
(66, 10),
(66, 11),
(66, 12),
(66, 13),
(67, 1),
(67, 2),
(67, 9),
(67, 10),
(67, 11),
(67, 12),
(67, 13),
(68, 1),
(68, 2),
(68, 9),
(68, 10),
(68, 11),
(68, 12),
(68, 13),
(69, 1),
(69, 2),
(69, 6),
(69, 9),
(69, 10),
(69, 11),
(69, 12),
(69, 13),
(70, 1),
(70, 2),
(70, 6),
(70, 9),
(70, 10),
(70, 11),
(70, 12),
(70, 13),
(71, 1),
(71, 2),
(71, 6),
(71, 9),
(71, 10),
(71, 11),
(71, 12),
(71, 13),
(72, 1),
(72, 2),
(72, 4),
(72, 5),
(72, 9),
(72, 10),
(72, 11),
(72, 12),
(73, 1),
(73, 2),
(73, 5),
(73, 9),
(73, 10),
(73, 11),
(73, 12),
(74, 1),
(74, 2),
(74, 5),
(74, 9),
(74, 10),
(74, 11),
(74, 12),
(75, 1),
(75, 5),
(75, 9),
(75, 10),
(75, 11),
(75, 12),
(76, 1),
(76, 5),
(76, 9),
(76, 10),
(76, 11),
(76, 12),
(77, 1),
(77, 2),
(77, 5),
(77, 9),
(77, 10),
(77, 11),
(77, 12),
(78, 1),
(78, 2),
(78, 5),
(78, 9),
(78, 10),
(78, 11),
(78, 12),
(79, 1),
(79, 2),
(79, 5),
(79, 9),
(79, 10),
(79, 11),
(79, 12),
(80, 1),
(80, 2),
(80, 4),
(80, 5),
(80, 9),
(80, 10),
(80, 11),
(80, 12),
(81, 1),
(81, 2),
(81, 5),
(81, 9),
(81, 10),
(81, 11),
(81, 12),
(82, 1),
(82, 2),
(82, 5),
(82, 9),
(82, 10),
(82, 11),
(82, 12),
(83, 1),
(83, 2),
(83, 5),
(83, 9),
(83, 10),
(83, 11),
(83, 12),
(84, 1),
(84, 2),
(84, 5),
(84, 9),
(84, 10),
(84, 11),
(84, 12),
(85, 1),
(85, 2),
(85, 5),
(85, 9),
(85, 10),
(85, 11),
(85, 12),
(86, 1),
(86, 2),
(86, 5),
(86, 9),
(86, 10),
(86, 11),
(86, 12),
(87, 1),
(87, 2),
(87, 4),
(87, 5),
(87, 9),
(87, 10),
(87, 11),
(87, 12),
(88, 1),
(88, 2),
(88, 5),
(88, 9),
(88, 10),
(88, 11),
(88, 12),
(89, 1),
(89, 2),
(89, 5),
(89, 9),
(89, 10),
(89, 11),
(89, 12),
(90, 1),
(90, 2),
(90, 5),
(90, 9),
(90, 10),
(90, 11),
(90, 12),
(91, 1),
(91, 2),
(91, 5),
(91, 9),
(91, 10),
(91, 11),
(91, 12),
(92, 1),
(92, 2),
(92, 5),
(92, 9),
(92, 10),
(92, 11),
(92, 12),
(93, 1),
(93, 2),
(93, 5),
(93, 9),
(93, 10),
(93, 11),
(93, 12),
(94, 1),
(94, 2),
(94, 4),
(94, 5),
(94, 9),
(94, 10),
(94, 11),
(94, 12),
(95, 1),
(95, 2),
(95, 4),
(95, 5),
(95, 9),
(95, 10),
(95, 11),
(95, 12),
(96, 1),
(96, 2),
(96, 4),
(96, 5),
(96, 9),
(96, 10),
(96, 11),
(96, 12),
(97, 1),
(97, 2),
(97, 4),
(97, 5),
(97, 9),
(97, 10),
(97, 11),
(97, 12),
(98, 1),
(98, 2),
(98, 4),
(98, 5),
(98, 9),
(98, 10),
(98, 11),
(98, 12),
(99, 1),
(99, 2),
(99, 4),
(99, 5),
(99, 9),
(99, 10),
(99, 11),
(99, 12),
(100, 1),
(100, 2),
(100, 4),
(100, 5),
(100, 9),
(100, 10),
(100, 11),
(100, 12),
(101, 1),
(101, 2),
(101, 9),
(101, 10),
(101, 11),
(101, 12),
(102, 1),
(102, 2),
(102, 9),
(102, 10),
(102, 11),
(102, 12),
(103, 1),
(103, 2),
(103, 6),
(103, 9),
(103, 10),
(103, 11),
(103, 12),
(104, 1),
(104, 2),
(104, 9),
(104, 10),
(104, 11),
(104, 12),
(105, 1),
(105, 2),
(105, 9),
(105, 10),
(105, 11),
(105, 12),
(106, 1),
(106, 2),
(106, 9),
(106, 10),
(106, 11),
(106, 12),
(107, 1),
(107, 2),
(107, 9),
(107, 10),
(107, 11),
(107, 12),
(108, 1),
(108, 2),
(108, 9),
(108, 10),
(108, 11),
(108, 12),
(109, 1),
(109, 2),
(109, 9),
(109, 10),
(109, 11),
(109, 12),
(110, 1),
(110, 2),
(110, 9),
(110, 10),
(110, 11),
(110, 12),
(111, 1),
(111, 2),
(111, 9),
(111, 10),
(111, 11),
(111, 12),
(112, 1),
(112, 2),
(112, 9),
(112, 10),
(112, 11),
(112, 12),
(113, 1),
(113, 2),
(113, 9),
(113, 10),
(113, 11),
(113, 12),
(114, 1),
(114, 2),
(114, 9),
(114, 10),
(114, 11),
(114, 12),
(115, 1),
(115, 2),
(115, 9),
(115, 10),
(115, 11),
(115, 12),
(116, 1),
(116, 2),
(116, 9),
(116, 10),
(116, 11),
(116, 12),
(117, 1),
(117, 2),
(117, 9),
(117, 10),
(117, 11),
(117, 12),
(118, 1),
(118, 2),
(118, 9),
(118, 10),
(118, 11),
(118, 12),
(119, 1),
(119, 2),
(119, 9),
(119, 10),
(119, 11),
(119, 12),
(120, 1),
(120, 2),
(120, 9),
(120, 10),
(120, 11),
(120, 12),
(121, 1),
(121, 2),
(121, 3),
(121, 6),
(121, 9),
(121, 10),
(121, 11),
(121, 12),
(122, 1),
(122, 2),
(122, 3),
(122, 6),
(122, 9),
(122, 10),
(122, 11),
(122, 12),
(123, 1),
(123, 2),
(123, 3),
(123, 6),
(123, 9),
(123, 10),
(123, 11),
(123, 12),
(124, 1),
(124, 2),
(124, 3),
(124, 5),
(124, 9),
(124, 10),
(124, 11),
(124, 12),
(125, 1),
(125, 2),
(125, 3),
(125, 5),
(125, 9),
(125, 10),
(125, 11),
(125, 12),
(126, 1),
(126, 2),
(126, 3),
(126, 9),
(126, 10),
(126, 11),
(126, 12),
(127, 1),
(127, 2),
(127, 3),
(127, 9),
(127, 10),
(127, 11),
(127, 12),
(128, 1),
(128, 2),
(128, 3),
(128, 9),
(128, 10),
(128, 11),
(128, 12),
(129, 1),
(129, 2),
(129, 3),
(129, 9),
(129, 10),
(129, 11),
(129, 12),
(130, 1),
(130, 2),
(130, 3),
(130, 9),
(130, 10),
(130, 11),
(130, 12),
(131, 1),
(131, 2),
(131, 3),
(131, 9),
(131, 10),
(131, 11),
(131, 12),
(132, 1),
(132, 2),
(132, 3),
(132, 9),
(132, 10),
(132, 11),
(132, 12),
(133, 1),
(133, 2),
(133, 3),
(133, 8),
(133, 9),
(133, 10),
(133, 11),
(133, 12),
(134, 1),
(134, 2),
(134, 3),
(134, 8),
(134, 9),
(134, 10),
(134, 11),
(134, 12),
(135, 1),
(135, 2),
(135, 3),
(135, 8),
(135, 9),
(135, 10),
(135, 11),
(135, 12),
(136, 1),
(136, 2),
(136, 3),
(136, 8),
(136, 9),
(136, 10),
(136, 11),
(136, 12),
(137, 1),
(137, 2),
(137, 3),
(137, 8),
(137, 9),
(137, 10),
(137, 11),
(137, 12),
(138, 1),
(138, 2),
(138, 3),
(138, 8),
(138, 9),
(138, 10),
(138, 11),
(138, 12),
(139, 1),
(139, 2),
(139, 3),
(139, 8),
(139, 9),
(139, 10),
(139, 11),
(139, 12),
(140, 1),
(140, 2),
(140, 3),
(140, 5),
(140, 8),
(140, 9),
(140, 10),
(140, 11),
(140, 12),
(141, 1),
(141, 2),
(141, 3),
(141, 5),
(141, 9),
(141, 10),
(141, 11),
(141, 12),
(142, 1),
(142, 2),
(142, 3),
(142, 5),
(142, 8),
(142, 9),
(142, 10),
(142, 11),
(142, 12),
(143, 1),
(143, 2),
(143, 3),
(143, 5),
(143, 9),
(143, 10),
(143, 11),
(143, 12),
(144, 1),
(144, 2),
(144, 3),
(144, 9),
(144, 10),
(144, 11),
(144, 12),
(145, 1),
(145, 2),
(145, 3),
(145, 9),
(145, 10),
(145, 11),
(145, 12),
(146, 1),
(146, 2),
(146, 3),
(146, 9),
(146, 10),
(146, 11),
(146, 12),
(147, 1),
(147, 2),
(147, 3),
(147, 9),
(147, 10),
(147, 11),
(147, 12),
(148, 1),
(148, 2),
(148, 3),
(148, 9),
(148, 10),
(148, 11),
(148, 12),
(149, 1),
(149, 2),
(149, 3),
(149, 9),
(149, 10),
(149, 11),
(149, 12),
(150, 1),
(150, 2),
(150, 3),
(150, 9),
(150, 10),
(150, 11),
(150, 12),
(151, 1),
(151, 2),
(151, 3),
(151, 9),
(151, 10),
(151, 11),
(151, 12),
(152, 1),
(152, 2),
(152, 3),
(152, 9),
(152, 10),
(152, 11),
(152, 12),
(153, 1),
(153, 2),
(153, 3),
(153, 9),
(153, 10),
(153, 11),
(153, 12),
(154, 1),
(154, 2),
(154, 3),
(154, 9),
(154, 10),
(154, 11),
(154, 12),
(155, 1),
(155, 2),
(155, 3),
(155, 9),
(155, 10),
(155, 11),
(155, 12),
(156, 1),
(156, 2),
(156, 3),
(156, 9),
(156, 10),
(156, 11),
(156, 12),
(157, 1),
(157, 2),
(157, 3),
(157, 9),
(157, 10),
(157, 11),
(157, 12),
(158, 1),
(158, 2),
(158, 3),
(158, 8),
(158, 9),
(158, 10),
(158, 11),
(158, 12),
(159, 1),
(159, 2),
(159, 3),
(159, 8),
(159, 9),
(159, 10),
(159, 11),
(159, 12),
(160, 1),
(160, 2),
(160, 3),
(160, 8),
(160, 9),
(160, 10),
(160, 11),
(160, 12),
(161, 1),
(161, 2),
(161, 3),
(161, 8),
(161, 9),
(161, 10),
(161, 11),
(161, 12),
(162, 1),
(162, 2),
(162, 3),
(162, 8),
(162, 9),
(162, 10),
(162, 11),
(162, 12),
(163, 1),
(163, 2),
(163, 3),
(163, 8),
(163, 9),
(163, 10),
(163, 11),
(163, 12),
(164, 1),
(164, 2),
(164, 3),
(164, 8),
(164, 9),
(164, 10),
(164, 11),
(164, 12),
(165, 1),
(165, 2),
(165, 3),
(165, 8),
(165, 9),
(165, 10),
(165, 11),
(165, 12),
(166, 1),
(166, 2),
(166, 3),
(166, 8),
(166, 9),
(166, 10),
(166, 11),
(166, 12),
(167, 1),
(167, 2),
(167, 4),
(167, 6),
(167, 8),
(167, 9),
(167, 10),
(167, 11),
(167, 12),
(168, 1),
(168, 2),
(168, 4),
(168, 9),
(168, 10),
(168, 11),
(168, 12),
(169, 1),
(169, 2),
(169, 4),
(169, 8),
(169, 9),
(169, 10),
(169, 11),
(169, 12),
(170, 1),
(170, 2),
(170, 4),
(170, 8),
(170, 9),
(170, 10),
(170, 11),
(170, 12),
(171, 1),
(171, 2),
(171, 4),
(171, 8),
(171, 9),
(171, 10),
(171, 11),
(171, 12),
(172, 1),
(172, 2),
(172, 4),
(172, 6),
(172, 8),
(172, 9),
(172, 10),
(172, 11),
(172, 12),
(173, 1),
(173, 2),
(173, 4),
(173, 6),
(173, 8),
(173, 9),
(173, 10),
(173, 11),
(173, 12),
(174, 1),
(174, 2),
(174, 4),
(174, 6),
(174, 9),
(174, 10),
(174, 11),
(174, 12),
(175, 1),
(175, 2),
(175, 4),
(175, 6),
(175, 8),
(175, 9),
(175, 10),
(175, 11),
(175, 12),
(176, 1),
(176, 2),
(176, 4),
(176, 6),
(176, 9),
(176, 10),
(176, 11),
(176, 12),
(177, 1),
(177, 2),
(177, 4),
(177, 6),
(177, 8),
(177, 9),
(177, 10),
(177, 11),
(177, 12),
(178, 1),
(178, 2),
(178, 4),
(178, 6),
(178, 8),
(178, 9),
(178, 10),
(178, 11),
(178, 12),
(179, 1),
(179, 2),
(179, 4),
(179, 6),
(179, 8),
(179, 9),
(179, 10),
(179, 11),
(179, 12),
(180, 1),
(180, 2),
(180, 4),
(180, 6),
(180, 8),
(180, 9),
(180, 10),
(180, 11),
(180, 12),
(181, 1),
(181, 2),
(181, 4),
(181, 6),
(181, 8),
(181, 9),
(181, 10),
(181, 11),
(181, 12),
(182, 1),
(182, 2),
(182, 4),
(182, 6),
(182, 9),
(182, 10),
(182, 11),
(182, 12),
(183, 1),
(183, 2),
(183, 4),
(183, 5),
(183, 6),
(183, 8),
(183, 9),
(183, 10),
(183, 11),
(183, 12),
(184, 1),
(184, 2),
(184, 4),
(184, 5),
(184, 6),
(184, 8),
(184, 9),
(184, 10),
(184, 11),
(184, 12),
(185, 1),
(185, 2),
(185, 4),
(185, 5),
(185, 6),
(185, 9),
(185, 10),
(185, 11),
(185, 12),
(186, 1),
(186, 2),
(186, 4),
(186, 5),
(186, 6),
(186, 9),
(186, 10),
(186, 11),
(186, 12),
(187, 1),
(187, 2),
(187, 4),
(187, 5),
(187, 6),
(187, 8),
(187, 9),
(187, 10),
(187, 11),
(187, 12),
(188, 1),
(188, 2),
(188, 4),
(188, 5),
(188, 6),
(188, 8),
(188, 9),
(188, 10),
(188, 11),
(188, 12),
(189, 1),
(189, 2),
(189, 4),
(189, 5),
(189, 6),
(189, 8),
(189, 9),
(189, 10),
(189, 11),
(189, 12),
(190, 1),
(190, 2),
(190, 4),
(190, 5),
(190, 9),
(190, 10),
(190, 11),
(190, 12),
(191, 1),
(191, 2),
(191, 4),
(191, 5),
(191, 9),
(191, 10),
(191, 11),
(191, 12),
(192, 1),
(192, 2),
(192, 4),
(192, 5),
(192, 9),
(192, 10),
(192, 11),
(192, 12),
(193, 1),
(193, 2),
(193, 4),
(193, 5),
(193, 9),
(193, 10),
(193, 11),
(193, 12),
(194, 1),
(194, 2),
(194, 4),
(194, 5),
(194, 9),
(194, 10),
(194, 11),
(194, 12),
(195, 1),
(195, 2),
(195, 4),
(195, 5),
(195, 9),
(195, 10),
(195, 11),
(195, 12),
(196, 1),
(196, 2),
(196, 4),
(196, 5),
(196, 9),
(196, 10),
(196, 11),
(196, 12),
(197, 1),
(197, 2),
(197, 4),
(197, 5),
(197, 9),
(197, 10),
(197, 11),
(197, 12),
(198, 1),
(198, 2),
(198, 4),
(198, 5),
(198, 9),
(198, 10),
(198, 11),
(198, 12),
(199, 1),
(199, 2),
(199, 4),
(199, 5),
(199, 9),
(199, 10),
(199, 11),
(199, 12),
(200, 1),
(200, 2),
(200, 4),
(200, 5),
(200, 9),
(200, 10),
(200, 11),
(200, 12),
(201, 1),
(201, 2),
(201, 4),
(201, 5),
(201, 9),
(201, 10),
(201, 11),
(201, 12),
(202, 1),
(202, 2),
(202, 4),
(202, 5),
(202, 9),
(202, 10),
(202, 11),
(202, 12),
(203, 1),
(203, 2),
(203, 4),
(203, 5),
(203, 9),
(203, 10),
(203, 11),
(203, 12),
(204, 1),
(204, 2),
(204, 4),
(204, 5),
(204, 9),
(204, 10),
(204, 11),
(204, 12),
(205, 1),
(205, 2),
(205, 4),
(205, 5),
(205, 9),
(205, 10),
(205, 11),
(205, 12),
(206, 1),
(206, 2),
(206, 4),
(206, 5),
(206, 9),
(206, 10),
(206, 11),
(206, 12),
(207, 1),
(207, 2),
(207, 4),
(207, 5),
(207, 9),
(207, 10),
(207, 11),
(207, 12),
(208, 1),
(208, 2),
(208, 8),
(208, 9),
(208, 10),
(208, 11),
(208, 12),
(209, 1),
(209, 2),
(209, 8),
(209, 9),
(209, 10),
(209, 11),
(209, 12),
(210, 1),
(210, 2),
(210, 8),
(210, 9),
(210, 10),
(210, 11),
(210, 12),
(211, 1),
(211, 2),
(211, 8),
(211, 9),
(211, 10),
(211, 11),
(211, 12),
(212, 1),
(212, 2),
(212, 8),
(212, 9),
(212, 10),
(212, 11),
(212, 12),
(213, 1),
(213, 2),
(213, 8),
(213, 9),
(213, 10),
(213, 11),
(213, 12),
(214, 1),
(214, 2),
(214, 8),
(214, 9),
(214, 10),
(214, 11),
(214, 12),
(215, 1),
(215, 2),
(215, 6),
(215, 8),
(215, 9),
(215, 10),
(215, 11),
(215, 12),
(216, 1),
(216, 2),
(216, 8),
(216, 9),
(216, 10),
(216, 11),
(216, 12),
(217, 1),
(217, 2),
(217, 8),
(217, 9),
(217, 10),
(217, 11),
(217, 12),
(218, 1),
(218, 2),
(218, 8),
(218, 9),
(218, 10),
(218, 11),
(218, 12),
(219, 1),
(219, 2),
(219, 5),
(219, 9),
(219, 10),
(219, 11),
(219, 12),
(220, 1),
(220, 2),
(220, 5),
(220, 9),
(220, 10),
(220, 11),
(220, 12),
(221, 1),
(221, 2),
(221, 5),
(221, 9),
(221, 10),
(221, 11),
(221, 12),
(222, 1),
(222, 2),
(222, 5),
(222, 9),
(222, 10),
(222, 11),
(222, 12),
(223, 1),
(223, 2),
(223, 5),
(223, 6),
(223, 8),
(223, 9),
(223, 10),
(223, 11),
(223, 12),
(224, 1),
(224, 2),
(224, 5),
(224, 6),
(224, 8),
(224, 9),
(224, 10),
(224, 11),
(224, 12),
(225, 1),
(225, 2),
(225, 5),
(225, 6),
(225, 8),
(225, 9),
(225, 10),
(225, 11),
(225, 12),
(226, 1),
(226, 2),
(226, 5),
(226, 6),
(226, 8),
(226, 9),
(226, 10),
(226, 11),
(226, 12),
(227, 1),
(227, 2),
(227, 5),
(227, 6),
(227, 8),
(227, 9),
(227, 10),
(227, 11),
(227, 12),
(228, 1),
(228, 2),
(228, 5),
(228, 6),
(228, 8),
(228, 9),
(228, 10),
(228, 11),
(228, 12),
(229, 1),
(229, 2),
(229, 5),
(229, 6),
(229, 8),
(229, 9),
(229, 10),
(229, 11),
(229, 12),
(230, 1),
(230, 2),
(230, 5),
(230, 6),
(230, 8),
(230, 9),
(230, 10),
(230, 11),
(230, 12),
(231, 1),
(231, 2),
(231, 5),
(231, 6),
(231, 8),
(231, 9),
(231, 10),
(231, 11),
(231, 12),
(232, 1),
(232, 2),
(232, 5),
(232, 6),
(232, 8),
(232, 9),
(232, 10),
(232, 11),
(232, 12),
(233, 1),
(233, 2),
(233, 5),
(233, 6),
(233, 8),
(233, 9),
(233, 10),
(233, 11),
(233, 12),
(234, 1),
(234, 2),
(234, 5),
(234, 6),
(234, 8),
(234, 9),
(234, 10),
(234, 11),
(234, 12),
(235, 1),
(235, 2),
(235, 5),
(235, 6),
(235, 8),
(235, 9),
(235, 10),
(235, 11),
(235, 12),
(236, 1),
(236, 2),
(236, 5),
(236, 6),
(236, 8),
(236, 9),
(236, 10),
(236, 11),
(236, 12),
(237, 1),
(237, 2),
(237, 5),
(237, 6),
(237, 8),
(237, 9),
(237, 10),
(237, 11),
(237, 12),
(238, 1),
(238, 2),
(238, 5),
(238, 6),
(238, 8),
(238, 9),
(238, 10),
(238, 11),
(238, 12),
(239, 1),
(239, 2),
(239, 5),
(239, 6),
(239, 8),
(239, 9),
(239, 10),
(239, 11),
(239, 12),
(240, 1),
(240, 2),
(240, 5),
(240, 6),
(240, 8),
(240, 9),
(240, 10),
(240, 11),
(240, 12),
(241, 1),
(241, 2),
(241, 5),
(241, 6),
(241, 8),
(241, 9),
(241, 10),
(241, 11),
(241, 12),
(242, 1),
(242, 2),
(242, 5),
(242, 6),
(242, 8),
(242, 9),
(242, 10),
(242, 11),
(242, 12),
(243, 1),
(243, 2),
(243, 5),
(243, 6),
(243, 8),
(243, 9),
(243, 10),
(243, 11),
(243, 12),
(244, 1),
(244, 2),
(244, 5),
(244, 6),
(244, 8),
(244, 9),
(244, 10),
(244, 11),
(244, 12),
(245, 1),
(245, 2),
(245, 5),
(245, 6),
(245, 8),
(245, 9),
(245, 10),
(245, 11),
(245, 12),
(246, 1),
(246, 2),
(246, 5),
(246, 6),
(246, 8),
(246, 9),
(246, 10),
(246, 11),
(246, 12),
(247, 1),
(247, 2),
(247, 5),
(247, 6),
(247, 8),
(247, 9),
(247, 10),
(247, 11),
(247, 12),
(248, 1),
(248, 2),
(248, 5),
(248, 6),
(248, 8),
(248, 9),
(248, 10),
(248, 11),
(248, 12),
(249, 1),
(249, 2),
(249, 5),
(249, 6),
(249, 8),
(249, 9),
(249, 10),
(249, 11),
(249, 12),
(250, 1),
(250, 2),
(250, 5),
(250, 8),
(250, 9),
(250, 10),
(250, 11),
(250, 12),
(251, 1),
(251, 2),
(251, 5),
(251, 8),
(251, 9),
(251, 10),
(251, 11),
(251, 12),
(252, 1),
(252, 2),
(252, 5),
(252, 8),
(252, 9),
(252, 10),
(252, 11),
(252, 12),
(253, 1),
(253, 2),
(253, 5),
(253, 8),
(253, 9),
(253, 10),
(253, 11),
(253, 12),
(254, 1),
(254, 2),
(254, 5),
(254, 8),
(254, 9),
(254, 10),
(254, 11),
(254, 12),
(255, 1),
(255, 2),
(255, 5),
(255, 8),
(255, 9),
(255, 10),
(255, 11),
(255, 12),
(256, 1),
(256, 2),
(256, 5),
(256, 8),
(256, 9),
(256, 10),
(256, 11),
(256, 12),
(257, 1),
(257, 2),
(257, 5),
(257, 8),
(257, 9),
(257, 10),
(257, 11),
(257, 12),
(258, 1),
(258, 2),
(258, 5),
(258, 8),
(258, 9),
(258, 10),
(258, 11),
(258, 12),
(259, 1),
(259, 2),
(259, 5),
(259, 8),
(259, 9),
(259, 10),
(259, 11),
(259, 12),
(260, 1),
(260, 2),
(260, 5),
(260, 8),
(260, 9),
(260, 10),
(260, 11),
(260, 12),
(261, 1),
(261, 2),
(261, 5),
(261, 8),
(261, 9),
(261, 10),
(261, 11),
(261, 12),
(262, 1),
(262, 2),
(262, 5),
(262, 8),
(262, 9),
(262, 10),
(262, 11),
(262, 12),
(263, 1),
(263, 2),
(263, 5),
(263, 8),
(263, 9),
(263, 10),
(263, 11),
(263, 12),
(264, 1),
(264, 2),
(264, 5),
(264, 8),
(264, 9),
(264, 10),
(264, 11),
(264, 12),
(265, 1),
(265, 2),
(265, 9),
(265, 10),
(265, 11),
(265, 12),
(266, 1),
(266, 2),
(266, 9),
(266, 10),
(266, 11),
(266, 12),
(267, 1),
(267, 2),
(267, 9),
(267, 10),
(267, 11),
(267, 12),
(268, 1),
(268, 2),
(268, 9),
(268, 10),
(268, 11),
(268, 12),
(269, 1),
(269, 2),
(269, 9),
(269, 10),
(269, 11),
(269, 12),
(270, 1),
(270, 2),
(270, 9),
(270, 10),
(270, 11),
(270, 12),
(271, 1),
(271, 2),
(271, 9),
(271, 10),
(271, 11),
(271, 12),
(272, 1),
(272, 2),
(272, 9),
(272, 10),
(272, 11),
(272, 12),
(273, 1),
(273, 2),
(273, 9),
(273, 10),
(273, 11),
(273, 12),
(274, 1),
(274, 2),
(274, 9),
(274, 10),
(274, 11),
(274, 12),
(275, 1),
(275, 2),
(275, 9),
(275, 10),
(275, 11),
(275, 12),
(276, 1),
(276, 2),
(276, 9),
(276, 10),
(276, 11),
(276, 12),
(277, 1),
(277, 2),
(277, 9),
(277, 10),
(277, 11),
(277, 12),
(278, 1),
(278, 2),
(278, 9),
(278, 10),
(278, 11),
(278, 12),
(279, 1),
(279, 2),
(279, 9),
(279, 10),
(279, 11),
(279, 12),
(280, 1),
(280, 2),
(280, 9),
(280, 10),
(280, 11),
(280, 12),
(281, 1),
(281, 2),
(281, 9),
(281, 10),
(281, 11),
(281, 12),
(282, 1),
(282, 2),
(282, 9),
(282, 10),
(282, 11),
(282, 12),
(283, 1),
(283, 2),
(283, 9),
(283, 10),
(283, 11),
(283, 12),
(284, 1),
(284, 2),
(284, 9),
(284, 10),
(284, 11),
(284, 12),
(285, 1),
(285, 2),
(285, 9),
(285, 10),
(285, 11),
(285, 12),
(286, 1),
(286, 2),
(286, 9),
(286, 10),
(286, 11),
(286, 12),
(287, 1),
(287, 2),
(287, 9),
(287, 10),
(287, 11),
(287, 12),
(288, 1),
(288, 2),
(288, 9),
(288, 10),
(288, 11),
(288, 12),
(289, 1),
(289, 2),
(289, 9),
(289, 10),
(289, 11),
(289, 12),
(290, 1),
(290, 2),
(290, 9),
(290, 10),
(290, 11),
(290, 12),
(291, 1),
(291, 2),
(291, 9),
(291, 10),
(291, 11),
(291, 12),
(292, 1),
(292, 2),
(292, 9),
(292, 10),
(292, 11),
(292, 12),
(293, 1),
(293, 2),
(293, 9),
(293, 10),
(293, 11),
(293, 12),
(294, 1),
(294, 2),
(294, 9),
(294, 10),
(294, 11),
(294, 12),
(295, 1),
(295, 2),
(295, 9),
(295, 10),
(295, 11),
(295, 12),
(296, 1),
(296, 2),
(296, 9),
(296, 10),
(296, 11),
(296, 12),
(297, 1),
(297, 2),
(297, 9),
(297, 10),
(297, 11),
(297, 12),
(298, 1),
(298, 2),
(298, 9),
(298, 10),
(298, 11),
(298, 12),
(299, 1),
(299, 2),
(299, 9),
(299, 10),
(299, 11),
(299, 12),
(300, 1),
(300, 2),
(300, 9),
(300, 10),
(300, 11),
(300, 12),
(301, 1),
(301, 2),
(301, 9),
(301, 10),
(301, 11),
(301, 12),
(302, 1),
(302, 2),
(302, 9),
(302, 10),
(302, 11),
(302, 12),
(303, 1),
(303, 2),
(303, 9),
(303, 10),
(303, 11),
(303, 12),
(304, 1),
(304, 2),
(304, 9),
(304, 10),
(304, 11),
(304, 12),
(305, 1),
(305, 2),
(305, 9),
(305, 10),
(305, 11),
(305, 12),
(306, 1),
(306, 2),
(306, 9),
(306, 10),
(306, 11),
(306, 12),
(307, 1),
(307, 2),
(307, 9),
(307, 10),
(307, 11),
(307, 12),
(308, 1),
(308, 2),
(308, 9),
(308, 10),
(308, 11),
(308, 12),
(309, 1),
(309, 2),
(309, 9),
(309, 10),
(309, 11),
(309, 12),
(310, 1),
(310, 2),
(310, 9),
(310, 10),
(310, 11),
(310, 12),
(311, 1),
(311, 2),
(311, 9),
(311, 10),
(311, 11),
(311, 12),
(312, 1),
(312, 2),
(312, 9),
(312, 10),
(312, 11),
(312, 12),
(313, 1),
(313, 2),
(313, 9),
(313, 10),
(313, 11),
(313, 12),
(314, 1),
(314, 2),
(314, 9),
(314, 10),
(314, 11),
(314, 12),
(315, 1),
(315, 2),
(315, 9),
(315, 10),
(315, 11),
(315, 12),
(316, 1),
(316, 2),
(316, 9),
(316, 10),
(316, 11),
(316, 12),
(317, 1),
(317, 2),
(317, 9),
(317, 10),
(317, 11),
(317, 12),
(318, 1),
(318, 2),
(318, 9),
(318, 10),
(318, 11),
(318, 12),
(319, 1),
(319, 2),
(319, 9),
(319, 10),
(319, 11),
(319, 12),
(320, 1),
(320, 2),
(320, 9),
(320, 10),
(320, 11),
(320, 12),
(321, 1),
(321, 2),
(321, 9),
(321, 10),
(321, 11),
(321, 12),
(322, 1),
(322, 2),
(322, 9),
(322, 10),
(322, 11),
(322, 12),
(323, 1),
(323, 2),
(323, 9),
(323, 10),
(323, 11),
(323, 12),
(324, 1),
(324, 2),
(324, 9),
(324, 10),
(324, 11),
(324, 12),
(325, 1),
(325, 2),
(325, 9),
(325, 10),
(325, 11),
(325, 12),
(326, 1),
(326, 2),
(326, 9),
(326, 10),
(326, 11),
(326, 12),
(327, 1),
(327, 2),
(327, 9),
(327, 10),
(327, 11),
(327, 12),
(328, 1),
(328, 2),
(328, 9),
(328, 10),
(328, 11),
(328, 12),
(329, 1),
(329, 2),
(329, 9),
(329, 10),
(329, 11),
(329, 12),
(330, 1),
(330, 2),
(330, 9),
(330, 10),
(330, 11),
(330, 12),
(331, 1),
(331, 2),
(331, 9),
(331, 10),
(331, 11),
(331, 12),
(332, 1),
(332, 2),
(332, 9),
(332, 10),
(332, 11),
(332, 12),
(333, 1),
(333, 2),
(333, 9),
(333, 10),
(333, 11),
(333, 12),
(334, 1),
(334, 2),
(334, 9),
(334, 10),
(334, 11),
(334, 12),
(335, 1),
(335, 2),
(335, 9),
(335, 10),
(335, 11),
(335, 12),
(336, 1),
(336, 2),
(336, 9),
(336, 10),
(336, 11),
(336, 12),
(337, 1),
(337, 2),
(337, 9),
(337, 10),
(337, 11),
(337, 12),
(338, 1),
(338, 2),
(338, 3),
(338, 4),
(338, 5),
(338, 6),
(338, 8),
(338, 9),
(338, 10),
(338, 11),
(338, 12),
(339, 1),
(339, 2),
(339, 3),
(339, 4),
(339, 6),
(339, 8),
(339, 9),
(339, 10),
(339, 11),
(339, 12),
(340, 1),
(340, 2),
(340, 3),
(340, 4),
(340, 5),
(340, 6),
(340, 9),
(340, 10),
(340, 11),
(340, 12),
(341, 1),
(341, 2),
(341, 3),
(341, 4),
(341, 5),
(341, 6),
(341, 9),
(341, 10),
(341, 11),
(341, 12),
(342, 1),
(342, 2),
(342, 3),
(342, 4),
(342, 5),
(342, 6),
(342, 9),
(342, 10),
(342, 11),
(342, 12),
(343, 1),
(343, 2),
(343, 3),
(343, 4),
(343, 5),
(343, 6),
(343, 9),
(343, 10),
(343, 11),
(343, 12),
(344, 1),
(344, 2),
(344, 9),
(344, 10),
(344, 11),
(344, 12),
(345, 1),
(345, 2),
(345, 9),
(345, 10),
(345, 11),
(345, 12),
(346, 1),
(346, 2),
(346, 9),
(346, 10),
(346, 11),
(346, 12),
(347, 1),
(347, 2),
(347, 9),
(347, 10),
(347, 11),
(347, 12),
(348, 1),
(348, 2),
(348, 9),
(348, 10),
(348, 11),
(348, 12),
(349, 1),
(349, 2),
(349, 9),
(349, 10),
(349, 11),
(349, 12),
(350, 1),
(350, 2),
(350, 9),
(350, 10),
(350, 11),
(350, 12),
(351, 1),
(351, 2),
(351, 9),
(351, 10),
(351, 11),
(351, 12),
(352, 1),
(352, 2),
(352, 9),
(352, 10),
(352, 11),
(352, 12),
(353, 1),
(353, 2),
(353, 9),
(353, 10),
(353, 11),
(353, 12),
(354, 1),
(354, 2),
(354, 9),
(354, 10),
(354, 11),
(354, 12),
(355, 1),
(355, 2),
(355, 6),
(355, 9),
(355, 10),
(355, 11),
(355, 12),
(356, 1),
(356, 2),
(356, 9),
(356, 10),
(356, 11),
(356, 12),
(357, 1),
(357, 2),
(357, 9),
(357, 10),
(357, 11),
(357, 12),
(358, 1),
(358, 2),
(358, 9),
(358, 10),
(358, 11),
(358, 12),
(359, 1),
(359, 2),
(359, 9),
(359, 10),
(359, 11),
(359, 12),
(360, 1),
(360, 2),
(360, 9),
(360, 10),
(360, 11),
(360, 12),
(361, 1),
(361, 2),
(361, 9),
(361, 10),
(361, 11),
(361, 12),
(362, 1),
(362, 2),
(362, 6),
(362, 9),
(362, 10),
(362, 11),
(362, 12),
(363, 1),
(363, 2),
(363, 9),
(363, 10),
(363, 11),
(363, 12),
(364, 1),
(364, 2),
(364, 9),
(364, 10),
(364, 11),
(364, 12),
(365, 1),
(365, 2),
(365, 9),
(365, 10),
(365, 11),
(365, 12),
(366, 1),
(366, 2),
(366, 9),
(366, 10),
(366, 11),
(366, 12),
(367, 1),
(367, 2),
(367, 9),
(367, 10),
(367, 11),
(367, 12),
(368, 1),
(368, 2),
(368, 9),
(368, 10),
(368, 11),
(368, 12),
(369, 1),
(369, 2),
(369, 6),
(369, 9),
(369, 10),
(369, 11),
(369, 12),
(370, 1),
(370, 2),
(370, 9),
(370, 10),
(370, 11),
(370, 12),
(371, 1),
(371, 2),
(371, 9),
(371, 10),
(371, 11),
(371, 12),
(372, 1),
(372, 2),
(372, 9),
(372, 10),
(372, 11),
(372, 12),
(373, 1),
(373, 2),
(373, 9),
(373, 10),
(373, 11),
(373, 12),
(374, 1),
(374, 2),
(374, 9),
(374, 10),
(374, 11),
(374, 12),
(375, 1),
(375, 2),
(375, 9),
(375, 10),
(375, 11),
(375, 12),
(376, 1),
(376, 2),
(376, 6),
(376, 9),
(376, 10),
(376, 11),
(376, 12),
(377, 1),
(377, 2),
(377, 6),
(377, 9),
(377, 10),
(377, 11),
(377, 12),
(378, 1),
(378, 2),
(378, 9),
(378, 10),
(378, 11),
(378, 12),
(379, 1),
(379, 2),
(379, 9),
(379, 10),
(379, 11),
(379, 12),
(380, 1),
(380, 2),
(380, 6),
(380, 9),
(380, 10),
(380, 11),
(380, 12),
(381, 1),
(381, 2),
(381, 6),
(381, 9),
(381, 10),
(381, 11),
(381, 12),
(382, 1),
(382, 2),
(382, 6),
(382, 9),
(382, 10),
(382, 11),
(382, 12),
(383, 1),
(383, 2),
(383, 6),
(383, 9),
(383, 10),
(383, 11),
(383, 12),
(384, 1),
(384, 2),
(384, 6),
(384, 9),
(384, 10),
(384, 11),
(384, 12),
(385, 1),
(385, 2),
(385, 9),
(385, 10),
(385, 11),
(385, 12),
(386, 1),
(386, 2),
(386, 9),
(386, 10),
(386, 11),
(386, 12),
(387, 1),
(387, 2),
(387, 6),
(387, 9),
(387, 10),
(387, 11),
(387, 12),
(388, 1),
(388, 2),
(388, 6),
(388, 9),
(388, 10),
(388, 11),
(388, 12),
(389, 1),
(389, 2),
(389, 6),
(389, 9),
(389, 10),
(389, 11),
(389, 12),
(390, 1),
(390, 2),
(390, 9),
(390, 10),
(390, 11),
(390, 12),
(391, 1),
(391, 2),
(391, 9),
(391, 10),
(391, 11),
(391, 12),
(392, 1),
(392, 2),
(392, 9),
(392, 10),
(392, 11),
(392, 12),
(393, 1),
(393, 2),
(393, 9),
(393, 10),
(393, 11),
(393, 12),
(394, 1),
(394, 2),
(394, 9),
(394, 10),
(394, 11),
(394, 12),
(395, 1),
(395, 2),
(395, 9),
(395, 10),
(395, 11),
(395, 12),
(396, 1),
(396, 2),
(396, 9),
(396, 10),
(396, 11),
(396, 12),
(397, 1),
(397, 2),
(397, 9),
(397, 10),
(397, 11),
(397, 12),
(398, 1),
(398, 2),
(398, 9),
(398, 10),
(398, 11),
(398, 12),
(399, 1),
(399, 2),
(399, 9),
(399, 10),
(399, 11),
(399, 12),
(400, 1),
(400, 2),
(400, 9),
(400, 10),
(400, 11),
(400, 12),
(401, 1),
(401, 2),
(401, 9),
(401, 10),
(401, 11),
(401, 12),
(402, 1),
(402, 2),
(402, 9),
(402, 10),
(402, 11),
(402, 12),
(403, 1),
(403, 2),
(403, 9),
(403, 10),
(403, 11),
(403, 12),
(404, 1),
(404, 2),
(404, 9),
(404, 10),
(404, 11),
(404, 12),
(405, 1),
(405, 2),
(405, 9),
(405, 10),
(405, 11),
(405, 12),
(406, 1),
(406, 2),
(406, 9),
(406, 10),
(406, 11),
(406, 12),
(407, 1),
(407, 2),
(407, 9),
(407, 10),
(407, 11),
(407, 12),
(408, 1),
(408, 2),
(408, 9),
(408, 10),
(408, 11),
(408, 12),
(409, 1),
(409, 2),
(409, 9),
(409, 10),
(409, 11),
(409, 12),
(410, 1),
(410, 2),
(410, 9),
(410, 10),
(410, 11),
(410, 12),
(411, 1),
(411, 2),
(411, 9),
(411, 10),
(411, 11),
(411, 12),
(412, 1),
(412, 2),
(412, 6),
(412, 9),
(412, 10),
(412, 11),
(412, 12),
(413, 1),
(413, 2),
(413, 9),
(413, 10),
(413, 11),
(413, 12),
(414, 1),
(414, 2),
(414, 9),
(414, 10),
(414, 11),
(414, 12),
(415, 1),
(415, 2),
(415, 9),
(415, 10),
(415, 11),
(415, 12),
(416, 1),
(416, 2),
(416, 6),
(416, 9),
(416, 10),
(416, 11),
(416, 12),
(417, 1),
(417, 2),
(417, 6),
(417, 9),
(417, 10),
(417, 11),
(417, 12),
(418, 1),
(418, 2),
(418, 6),
(418, 9),
(418, 10),
(418, 11),
(418, 12),
(419, 1),
(419, 2),
(419, 9),
(419, 10),
(419, 11),
(419, 12),
(420, 1),
(420, 2),
(420, 9),
(420, 10),
(420, 11),
(420, 12),
(421, 1),
(421, 2),
(421, 9),
(421, 10),
(421, 11),
(421, 12),
(422, 1),
(422, 2),
(422, 9),
(422, 10),
(422, 11),
(422, 12),
(423, 1),
(423, 2),
(423, 9),
(423, 10),
(423, 11),
(423, 12),
(424, 1),
(424, 2),
(424, 9),
(424, 10),
(424, 11),
(424, 12),
(425, 1),
(425, 2),
(425, 9),
(425, 10),
(425, 11),
(425, 12),
(426, 1),
(426, 2),
(426, 5),
(426, 6),
(426, 8),
(426, 9),
(426, 10),
(426, 11),
(426, 12),
(427, 1),
(427, 2),
(427, 5),
(427, 6),
(427, 8),
(427, 9),
(427, 10),
(427, 11),
(427, 12),
(428, 1),
(428, 2),
(428, 5),
(428, 8),
(428, 9),
(428, 10),
(428, 11),
(428, 12),
(429, 1),
(429, 2),
(429, 5),
(429, 6),
(429, 8),
(429, 9),
(429, 10),
(429, 11),
(429, 12),
(430, 1),
(430, 2),
(430, 5),
(430, 8),
(430, 9),
(430, 10),
(430, 11),
(430, 12),
(431, 1),
(431, 2),
(431, 5),
(431, 6),
(431, 8),
(431, 9),
(431, 10),
(431, 11),
(431, 12),
(432, 1),
(432, 2),
(432, 5),
(432, 6),
(432, 8),
(432, 9),
(432, 10),
(432, 11),
(432, 12),
(433, 1),
(433, 2),
(433, 5),
(433, 6),
(433, 8),
(433, 9),
(433, 10),
(433, 11),
(433, 12),
(434, 1),
(434, 2),
(434, 5),
(434, 6),
(434, 8),
(434, 9),
(434, 10),
(434, 11),
(434, 12),
(435, 1),
(435, 2),
(435, 5),
(435, 6),
(435, 8),
(435, 9),
(435, 10),
(435, 11),
(435, 12),
(436, 1),
(436, 2),
(436, 5),
(436, 6),
(436, 8),
(436, 9),
(436, 10),
(436, 11),
(436, 12),
(437, 1),
(437, 2),
(437, 5),
(437, 6),
(437, 8),
(437, 9),
(437, 10),
(437, 11),
(437, 12),
(438, 1),
(438, 2),
(438, 5),
(438, 6),
(438, 8),
(438, 9),
(438, 10),
(438, 11),
(438, 12),
(439, 1),
(439, 2),
(439, 4),
(439, 5),
(439, 6),
(439, 8),
(439, 9),
(439, 10),
(439, 11),
(439, 12),
(440, 1),
(440, 2),
(440, 4),
(440, 5),
(440, 8),
(440, 9),
(440, 10),
(440, 11),
(440, 12),
(441, 1),
(441, 2),
(441, 4),
(441, 5),
(441, 8),
(441, 9),
(441, 10),
(441, 11),
(441, 12),
(442, 1),
(442, 2),
(442, 4),
(442, 5),
(442, 8),
(442, 9),
(442, 10),
(442, 11),
(442, 12),
(443, 1),
(443, 2),
(443, 4),
(443, 5),
(443, 6),
(443, 8),
(443, 9),
(443, 10),
(443, 11),
(443, 12),
(444, 1),
(444, 2),
(444, 4),
(444, 5),
(444, 6),
(444, 8),
(444, 9),
(444, 10),
(444, 11),
(444, 12),
(445, 1),
(445, 2),
(445, 4),
(445, 5),
(445, 6),
(445, 8),
(445, 9),
(445, 10),
(445, 11),
(445, 12);

-- --------------------------------------------------------

--
-- Table structure for table `program_type`
--

DROP TABLE IF EXISTS `program_type`;
CREATE TABLE IF NOT EXISTS `program_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kh` varchar(250) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program_type`
--

INSERT INTO `program_type` (`id`, `title_kh`, `title_en`, `status`) VALUES
(1, 'ស.ប.វិ ១', 'C1', 1),
(2, 'ស.ប.វិ ២', 'C2', 1),
(3, 'ស.ប.វិ ៣', 'C3', 1),
(4, 'បរិញ្ញាបត្ររង', 'Associate Degree', 1),
(5, 'បរិញ្ញាបត្រ / វិស្វករ', 'Bachelor Degress', 1),
(6, 'អនុបណ្ឌិត', 'Master Degree', 1),
(7, 'បណ្ឌិត', 'PhD Degree', 1),
(8, 'បណ្តុះបណ្តាលគ្រូមធ្យម', 'Teacher Training (Basic)', 1),
(9, 'បណ្តុះបណ្តាលគ្រូឧត្តម', 'Teacher Training (Advanced)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_activities`
--

DROP TABLE IF EXISTS `project_activities`;
CREATE TABLE IF NOT EXISTS `project_activities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `description` text,
  `icon` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_activities`
--

INSERT INTO `project_activities` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `description`, `icon`, `status`) VALUES
(1, '2019-05-23 10:53:09', '2019-05-23 10:53:12', 1, NULL, 'គម្រងភ្លែន', 'គម្រោងសុខភាពបន្តពូជរបស់​អង្គការភ្លែន', 'fa fa-user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_report_analysis`
--

DROP TABLE IF EXISTS `project_report_analysis`;
CREATE TABLE IF NOT EXISTS `project_report_analysis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) DEFAULT NULL,
  `academic_year` varchar(150) DEFAULT NULL,
  `quarter` varchar(150) DEFAULT NULL,
  `Column 5` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
CREATE TABLE IF NOT EXISTS `provinces` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name_en`, `name_kh`, `slug_en`, `slug_kh`, `created_at`, `updated_at`) VALUES
(1, 'Phnom Penh', 'ភ្នំពេញ', 'phnom-penh', '', NULL, NULL),
(2, 'Preah Sihanouk', 'ព្រះសីហនុ', 'preah-sihanouk', '', NULL, NULL),
(3, 'Kampong Cham', 'កំពង់ចាម', 'kampong-cham', '', NULL, NULL),
(4, 'Siem Reap', 'សៀមរាប', 'siem-reap', '', NULL, NULL),
(5, 'Battambang', 'បាត់ដំបង', 'Battambang', '', NULL, NULL),
(6, 'Kandal', 'កណ្តាល', 'Kandal', '', NULL, NULL),
(7, 'Banteay Meanchey', 'បន្ទាយមានជ័យ', 'Banteay-Meanchey', '', NULL, NULL),
(8, 'Kampong Chhnang', 'កំពង់ឆ្នាំង', 'Kampong-Chhnang', '', NULL, NULL),
(9, 'Kampong Speu', 'កំពង់ស្ពឺ', 'Kampong-Speu', '', NULL, NULL),
(10, 'Kampong Thom', 'កំពង់ធំ', 'Kampong-Thom', '', NULL, NULL),
(11, 'Kampot', 'កំពត', 'Kampot', '', NULL, NULL),
(12, 'Kep', 'កែប', 'Kep', '', NULL, NULL),
(13, 'Koh Kong', 'កោះកុង', 'Koh-Kong', '', NULL, NULL),
(14, 'Kratie', 'ក្រចេះ', 'Kratie', '', NULL, NULL),
(15, 'Mondulkiri', 'មណ្ឌលគិរី', 'Mondulkiri', '', NULL, NULL),
(16, 'Oddar Meanchey', 'ឧត្តរមានជ័យ', 'Oddar-Meanchey', '', NULL, NULL),
(17, 'Pailin', 'ប៉ៃលិន', 'Pailin', '', NULL, NULL),
(18, 'Preah Vihear', 'ព្រះវិហារ', 'Preah-Vihear', '', NULL, NULL),
(19, 'Prey Veng', 'ព្រៃវែង', 'Prey-Veng', '', NULL, NULL),
(20, 'Pursat', 'ពោធ៌សាត់', 'Pursat', '', NULL, NULL),
(21, 'Ratanakiri', 'រតនគីរី', 'Ratanakiri', '', NULL, NULL),
(22, 'Stung Treng', 'ស្ទឹងត្រែង', 'Stung-Treng', '', NULL, NULL),
(23, 'Svay Rieng', 'ស្វាយរៀង', 'Svay-Rieng', '', NULL, NULL),
(24, 'Takeo', 'តាកែវ', 'Takeo', '', NULL, NULL),
(25, 'Tboung Khmum', 'ត្បូងឃ្មុំ', 'Tboung-Khmum', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

DROP TABLE IF EXISTS `qualifications`;
CREATE TABLE IF NOT EXISTS `qualifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_exam_id` int(250) DEFAULT NULL COMMENT 'Teacher Exam',
  `passed_competency` tinyint(4) DEFAULT '0' COMMENT 'Passed Competency Assessment',
  `association_id` int(250) DEFAULT NULL COMMENT 'Member of Professional Association',
  `teaching` int(250) DEFAULT NULL COMMENT 'Number of years workign ourside TVET',
  `other` int(250) DEFAULT NULL COMMENT 'Number of years workign ourside TVET',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Qualifications';

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `teacher_exam_id`, `passed_competency`, `association_id`, `teaching`, `other`) VALUES
(1, 2, 0, 1, 2, 3),
(2, 3, 1, 1, 2, 3),
(3, 2, 0, 1, 2, 3),
(4, 2, 0, 1, 2, 3),
(5, 2, 1, 2, 2, 3),
(6, 2, 0, 1, 2, 3),
(7, 2, 0, 1, 2, 3),
(8, 2, 0, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'QQQQQQQQQQ', 'qqqqqqqqqq', 1, '2019-07-20 08:27:06', '2019-07-20 08:27:06'),
(2, 'WWWWWWW', 'wwwwwww', 1, '2019-07-20 08:27:19', '2019-07-20 08:27:19'),
(3, 'EEEEEEEEEEE', 'eeeeeeeeeee', 1, '2019-07-20 08:27:30', '2019-07-20 08:27:30'),
(10, '១. សុខភាពបន្តពូជនិងផ្លូវភេទយុវវយ័និយាយអំពី?  សូមគូសចម្លើយខាងក្រោមណាខ្លះដែលត្រឹមត្រូវ៖ (ពិន្ទុទទួលបាន ៣ )', '១.-សុខភាពបន្តពូជនិងផ្លូវភេទយុវវយ័និយាយអំពី-សូមគូសចម្លើយខាងក្រោមណាខ្លះដែលត្រឹមត្រូវ៖-(ពិន្ទុទទួលបាន-៣-)', 1, '2019-10-08 04:57:29', '2019-10-08 04:57:29'),
(11, '២. បុរសនិងស្រ្តីឈានចូលអាយុពេញវយ័ (ពិន្ទុទទួលបាន២)', '២.-បុរសនិងស្រ្តីឈានចូលអាយុពេញវយ័-(ពិន្ទុទទួលបាន២)', 1, '2019-10-09 13:27:12', '2019-10-09 13:27:12'),
(12, '៣. យុវវយ័មានអាយុចន្លោះពី (ពិន្ទុទទួលបាន១)', '៣.-យុវវយ័មានអាយុចន្លោះពី-(ពិន្ទុទទួលបាន១)', 1, '2019-10-09 14:28:12', '2019-10-09 14:28:12'),
(13, 'យុវវយ័មានអាយុចន្លោះពី (ពិន្ទុទទួលបាន១)', 'យុវវយ័មានអាយុចន្លោះពី-(ពិន្ទុទទួលបាន១)', 1, '2019-10-09 20:21:33', '2019-10-09 20:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `question_subject_quiz`
--

DROP TABLE IF EXISTS `question_subject_quiz`;
CREATE TABLE IF NOT EXISTS `question_subject_quiz` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(10) UNSIGNED NOT NULL,
  `subject_quiz_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_subject_quiz_subject_quiz_id_foreign` (`subject_quiz_id`),
  KEY `question_subject_quiz_question_id_foreign` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_subject_quiz`
--

INSERT INTO `question_subject_quiz` (`id`, `question_id`, `subject_quiz_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, NULL),
(2, 2, 1, 1, NULL, NULL),
(3, 3, 1, 1, NULL, NULL),
(10, 10, 4, 1, NULL, NULL),
(11, 11, 4, 1, NULL, NULL),
(14, 13, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_results`
--

DROP TABLE IF EXISTS `quiz_results`;
CREATE TABLE IF NOT EXISTS `quiz_results` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `test_type_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks_scored` double NOT NULL,
  `result_date` date DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `quarter` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quiz_results_subject_id_foreign` (`subject_id`),
  KEY `quiz_results_user_id_foreign` (`user_id`,`test_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_results`
--

INSERT INTO `quiz_results` (`id`, `user_id`, `subject_id`, `test_type_id`, `user_name`, `marks_scored`, `result_date`, `month`, `quarter`, `year`, `created_at`, `updated_at`) VALUES
(1, 13, 1, 0, 'ផង់ ពុទ្ធី  PHANG PUTHY', 3, '2019-01-04', 1, 1, 2019, NULL, NULL),
(2, 13, 2, 0, 'ផង់ ពុទ្ធី  PHANG PUTHY', 2, '2019-03-04', 3, 1, 2019, NULL, NULL),
(3, 13, 3, 0, 'ផង់ ពុទ្ធី  PHANG PUTHY', 1, '2019-04-05', 4, 2, 2019, NULL, NULL),
(4, 15, 1, 2, 'អ៊ាន ស៊ីណា  EAN SINA', 0, '2019-05-05', 5, 2, 2019, '2019-09-18 08:08:26', '2019-09-18 08:08:26'),
(5, 15, 3, 2, 'អ៊ាន ស៊ីណា  EAN SINA', 1, '2019-06-06', 6, 2, 2019, '2019-09-18 08:10:23', '2019-09-18 08:10:27'),
(6, 15, 1, 1, 'អ៊ាន ស៊ីណា  EAN SINA', 1, '2019-07-06', 7, 3, 2019, '2019-09-18 08:12:21', '2019-09-18 08:12:23'),
(7, 15, 2, 2, 'អ៊ាន ស៊ីណា  EAN SINA', 0, '2019-08-07', 8, 3, 2019, '2019-09-18 08:12:43', '2019-09-18 08:12:43'),
(8, 1, 2, 2, 'Seng Sourng', 2, '2019-08-07', 8, 3, 2019, '2019-09-18 08:16:25', '2019-09-18 08:16:29'),
(9, 1, 1, 1, 'Seng Sourng', 1, '2019-10-08', 10, 4, 2019, '2019-09-18 08:20:33', '2019-09-18 08:20:36'),
(10, 2, 3, 2, 'Long Dara', 1, '2019-10-08', 10, 4, 2019, '2019-10-08 05:01:08', '2019-10-08 05:01:13'),
(11, 2, 1, 1, 'Long Dara', 1, '2019-10-08', 10, 4, 2019, '2019-10-08 06:32:57', '2019-10-08 06:33:13'),
(14, 15, 4, 1, 'អ៊ាន ស៊ីណា  EAN SINA', 2, '2019-10-09', NULL, NULL, NULL, '2019-10-09 14:30:39', '2019-10-09 14:30:46'),
(15, 15, 4, 2, 'អ៊ាន ស៊ីណា  EAN SINA', 3, '2019-10-09', NULL, NULL, NULL, '2019-10-09 14:31:01', '2019-10-09 14:31:14'),
(16, 9, 4, 1, 'ញៀច ញ៉ាន  NHIECH NHEAN', 1, '2019-10-10', NULL, NULL, NULL, '2019-10-09 20:26:37', '2019-10-09 20:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

DROP TABLE IF EXISTS `residents`;
CREATE TABLE IF NOT EXISTS `residents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `rooms_id` int(10) UNSIGNED DEFAULT NULL,
  `beds_id` int(10) UNSIGNED DEFAULT NULL,
  `user_type` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `register_date` datetime NOT NULL,
  `leave_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `hostels_id`, `rooms_id`, `beds_id`, `user_type`, `member_id`, `register_date`, `leave_date`, `status`) VALUES
(1, '2019-09-18 21:34:32', '2019-09-18 21:35:02', 1, NULL, 1, 2, 1, 1, 1, '2019-09-19 04:34:32', NULL, 1),
(2, '2019-09-18 21:38:32', '2019-09-18 21:38:32', 1, NULL, 1, 10, 3, 1, 2, '2019-09-19 04:38:32', NULL, 1),
(3, '2019-09-18 21:39:55', '2019-09-18 21:39:55', 1, NULL, 1, 1, 2, 2, 1, '2019-09-19 04:39:55', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resident_histories`
--

DROP TABLE IF EXISTS `resident_histories`;
CREATE TABLE IF NOT EXISTS `resident_histories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `rooms_id` int(10) UNSIGNED DEFAULT NULL,
  `beds_id` int(10) UNSIGNED DEFAULT NULL,
  `residents_id` int(10) UNSIGNED NOT NULL,
  `history_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_histories`
--

INSERT INTO `resident_histories` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `years_id`, `hostels_id`, `rooms_id`, `beds_id`, `residents_id`, `history_type`, `status`) VALUES
(1, '2019-09-18 21:34:32', '2019-09-18 21:34:32', 1, NULL, 2, 1, 1, 2, 1, 'Registration', 1),
(2, '2019-09-18 21:35:02', '2019-09-18 21:35:02', 1, NULL, 2, 1, 2, 1, 1, 'Shift', 1),
(3, '2019-09-18 21:38:32', '2019-09-18 21:38:32', 1, NULL, 2, 1, 10, 3, 2, 'Registration', 1),
(4, '2019-09-18 21:39:55', '2019-09-18 21:39:55', 1, NULL, 2, 1, 1, 2, 3, 'Registration', 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `time_taken` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `results_user_id_index` (`user_id`),
  KEY `results_subject_id_index` (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'Super Admin', 'Super Admin', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(2, 'admin', 'Administrator', 'Administrator', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(3, 'account', 'Accountant', 'Accountant', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(4, 'library', 'Librarian', 'Librarian', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(5, 'staff', 'Staff', 'Staff', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(6, 'student', 'Student', 'Student', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(7, 'guardian', 'Guardian', 'Guardian', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(8, 'teacher', 'Teacher', 'Teacher', '2019-01-23 15:38:07', '2019-01-23 15:38:07'),
(9, 'project', 'Project Manager', 'Manage all Project', '2019-06-08 19:52:43', '2019-06-08 19:52:43'),
(10, 'teacher-project', 'Teacher Project', 'Teacher for Project', '2019-06-14 01:25:44', '2019-06-14 01:25:44'),
(11, 'student-project', 'Student Project', 'Student for Project', '2019-06-14 01:26:49', '2019-06-14 01:26:49'),
(12, 'user-project', 'User Project', 'User Project', '2019-06-14 01:27:51', '2019-06-14 01:27:51'),
(13, 'admin-project', 'Admin Project', 'Admin for Project', '2019-06-14 01:28:25', '2019-06-14 01:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 6),
(3, 8),
(4, 6),
(5, 2),
(6, 6),
(7, 4),
(8, 6),
(9, 6),
(10, 6),
(11, 11),
(12, 10),
(13, 13),
(14, 5),
(15, 6);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `room_type` int(10) UNSIGNED NOT NULL,
  `room_number` int(11) NOT NULL,
  `rate_perbed` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `hostels_id`, `room_type`, `room_number`, `rate_perbed`, `description`, `status`) VALUES
(1, '2019-07-16 02:30:08', '2019-07-29 00:51:50', 1, NULL, 1, 2, 1, 4, NULL, 1),
(2, '2019-07-16 02:30:08', '2019-07-29 00:49:41', 1, NULL, 1, 1, 2, 2, NULL, 1),
(3, '2019-07-16 02:30:08', '2019-07-16 02:34:19', 1, NULL, 1, 1, 3, 3, NULL, 1),
(4, '2019-07-16 02:30:08', '2019-07-16 02:34:33', 1, NULL, 1, 2, 4, 4, NULL, 1),
(5, '2019-07-16 02:30:08', '2019-07-16 02:30:08', 1, NULL, 1, 1, 5, 0, NULL, 1),
(6, '2019-07-16 02:30:08', '2019-07-16 02:30:08', 1, NULL, 1, 1, 6, 0, NULL, 1),
(7, '2019-07-16 02:30:08', '2019-07-16 02:30:08', 1, NULL, 1, 1, 7, 0, NULL, 1),
(8, '2019-07-16 02:30:08', '2019-07-16 02:30:08', 1, NULL, 1, 1, 8, 0, NULL, 1),
(9, '2019-07-16 02:30:08', '2019-07-16 02:30:08', 1, NULL, 1, 1, 9, 0, NULL, 1),
(10, '2019-07-16 02:30:08', '2019-07-16 02:30:08', 1, NULL, 1, 1, 10, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

DROP TABLE IF EXISTS `room_types`;
CREATE TABLE IF NOT EXISTS `room_types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `room_types_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-07-16 02:27:37', '2019-09-18 21:11:27', 1, 1, 'គ្រែ១ មានបីថ្នាក់', 1),
(2, '2019-07-16 02:28:03', '2019-07-16 02:28:03', 1, NULL, 'គ្រែ១ គេង៣នាក់', 1);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `routes_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `rent`, `description`, `status`) VALUES
(1, '2019-03-15 01:56:27', '2019-03-15 01:56:27', 1, NULL, 'ផ្សារលើ ទៅ ផ្សារចាស់', 2, 'ចេញពីផ្សារលើទៅផ្សារចាស់', 1);

-- --------------------------------------------------------

--
-- Table structure for table `route_vehicles`
--

DROP TABLE IF EXISTS `route_vehicles`;
CREATE TABLE IF NOT EXISTS `route_vehicles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `routes_id` int(10) UNSIGNED NOT NULL,
  `vehicles_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_pays`
--

DROP TABLE IF EXISTS `salary_pays`;
CREATE TABLE IF NOT EXISTS `salary_pays` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `salary_masters_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `allowance` int(11) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL,
  `payment_mode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

DROP TABLE IF EXISTS `semesters`;
CREATE TABLE IF NOT EXISTS `semesters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `semester` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` int(10) UNSIGNED DEFAULT NULL,
  `gradingType_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `semesters_semester_unique` (`semester`),
  UNIQUE KEY `semesters_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `semester`, `slug`, `staff_id`, `gradingType_id`, `status`) VALUES
(1, '2019-01-23 16:21:42', '2019-08-02 10:41:44', 1, 1, 'YEAR I - SEMESTER I', 'YEAR-I---SEMESTER-I', 1, 1, 1),
(2, '2019-01-23 16:21:42', '2019-08-02 10:42:14', 1, 1, 'YEAR I - SEMESTER II', 'YEAR-I---SEMESTER-II', 1, 1, 1),
(3, '2019-01-23 16:21:42', '2019-08-02 10:42:33', 1, 1, 'YEAR II - SEMESTER I', 'YEAR-II---SEMESTER-I', 1, 2, 1),
(4, '2019-01-23 16:21:42', '2019-08-02 10:44:09', 1, 1, 'YEAR II - SEMESTER II', 'YEAR-II---SEMESTER-II', 2, 2, 1),
(5, '2019-01-23 16:21:42', '2019-08-02 10:44:33', 1, 1, 'YEAR III - SEMESTER I', 'YEAR-III---SEMESTER-I', 5, 3, 1),
(6, '2019-01-23 16:21:42', '2019-01-23 16:21:42', 1, NULL, 'Semester VI', 'Semester-VI', 0, 1, 1),
(7, '2019-01-23 16:21:42', '2019-01-23 16:21:42', 1, NULL, 'Semester VII', 'Semester-VII', 0, 1, 1),
(8, '2019-01-23 16:21:42', '2019-01-23 16:21:42', 1, NULL, 'Semester VIII', 'Semester-VIII', 0, 1, 1),
(11, '2019-06-07 00:35:41', '2019-06-07 00:35:41', 1, NULL, 'សុខភាពបន្តពូជ បុរស និង​ស្ត្រី', 'សុខភាពបន្តពូជ-បុរស-និង​ស្ត្រី', 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester_subject`
--

DROP TABLE IF EXISTS `semester_subject`;
CREATE TABLE IF NOT EXISTS `semester_subject` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester_subject`
--

INSERT INTO `semester_subject` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `semester_id`, `subject_id`, `status`) VALUES
(1, NULL, NULL, 1, 1, 1, 1, 0),
(2, NULL, NULL, 1, 1, 2, 4, 0),
(4, NULL, NULL, 1, 1, 3, 4, 0),
(5, NULL, NULL, 1, 1, 3, 2, 0),
(6, NULL, NULL, 1, NULL, 11, 6, 0),
(7, NULL, NULL, 1, 1, 5, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shortcourse_teacher`
--

DROP TABLE IF EXISTS `shortcourse_teacher`;
CREATE TABLE IF NOT EXISTS `shortcourse_teacher` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `shortcourse_id` int(11) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`teacher_id`,`shortcourse_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sms_emails`
--

DROP TABLE IF EXISTS `sms_emails`;
CREATE TABLE IF NOT EXISTS `sms_emails` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms` tinyint(1) NOT NULL DEFAULT '0',
  `email` tinyint(1) NOT NULL DEFAULT '0',
  `group` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_settings`
--

DROP TABLE IF EXISTS `sms_settings`;
CREATE TABLE IF NOT EXISTS `sms_settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identity` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`id`, `created_at`, `updated_at`, `identity`, `logo`, `link`, `config`, `status`) VALUES
(1, NULL, '2019-02-20 23:06:37', 'Sparrow', 'sparrow', 'http://sparrowsms.com', '{\"From\":\"\",\"Token\":\"\"}', 0),
(2, NULL, '2019-02-20 23:06:37', 'Twilio', 'twilio', 'https://www.twilio.com', '{\"SID\":\"\",\"Token\":\"\",\"FromNumber\":\"\"}', 0),
(3, NULL, '2019-02-20 23:06:37', 'MessageBird', 'messagebird', 'https://www.messagebird.com', '{\"Originator\":\"\",\"AcccessKey\":\"\"}', 0),
(4, NULL, '2019-02-20 23:06:37', 'Clickatell', 'clickatell', 'http://clickatell.com', '{\"ApiKey\":\"\"}', 0),
(5, NULL, '2019-02-20 23:06:37', 'Nexmo', 'nexmo', 'https://www.nexmo.com', '{\"From\":\"\",\"API_KEY\":\"\",\"API_SECRET\":\"\"}', 0),
(6, NULL, '2019-02-20 23:06:37', 'smsCountry', 'smscountry', 'https://www.smscountry.com', '{\"UserName\":\"\",\"Password\":\"\",\"SenderId\":\"\",\"Token\":\"\"}', 0),
(7, NULL, '2019-02-20 23:06:52', 'MsgClub', 'msgclub', 'https://www.smscountry.com', '{\"AUTH_KEY\":\"\",\"senderId\":\"\",\"routeId\":\"\",\"Token\":\"\"}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `institute_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `reg_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` datetime NOT NULL,
  `designation` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(215) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(215) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(215) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` datetime NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pob` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Place of Birth',
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `commune_id` int(11) DEFAULT NULL,
  `state` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_state` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_tongue` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_education_id` int(11) DEFAULT NULL,
  `qualification_id` int(10) DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci,
  `experience` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_info` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_info` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_image` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `staff_reg_no_unique` (`reg_no`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `institute_id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `reg_no`, `join_date`, `designation`, `first_name`, `middle_name`, `last_name`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `blood_group`, `nationality`, `pob`, `address`, `province_id`, `district_id`, `commune_id`, `state`, `country`, `temp_address`, `temp_state`, `temp_country`, `home_phone`, `mobile_1`, `mobile_2`, `mother_tongue`, `email`, `general_education_id`, `qualification_id`, `qualification`, `experience`, `experience_info`, `other_info`, `staff_image`, `status`) VALUES
(1, 1, '2019-01-23 16:23:56', '2019-04-05 01:34:58', 1, 1, '856', '2019-01-24 00:00:00', 2, 'សេង ស៊ង់', NULL, 'SENG SOURNG', 'CHUK SONG', 'OUK NGAT', '1983-05-12 00:00:00', '1', 'B+', 'ខ្មែរ', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 4, 28, 298, 'សៀមរាប', 'CAMBODIA', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 'សៀមរាប', 'កម្ពុជា', '092771244', '093771244', NULL, 'ខ្មែរ', 'sengsourng@gmail.com', 12, 1, NULL, '5 YEARS', NULL, NULL, '8057.jpg', 1),
(2, 1, '2019-03-14 04:02:22', '2019-04-05 01:35:14', 1, 1, '4117', '2015-04-01 00:00:00', 2, 'អាន បញ្ញា​', NULL, 'ANN PANHA', 'អាន', NULL, '1988-03-03 00:00:00', '2', 'B+', 'ខ្មែរ', 'ភូមិកោះចំរើន ឃុំកំពង់ភ្នំ ស្រុកលើកដែក', 'ភូមិកោះចំរើន ឃុំកំពង់ភ្នំ ស្រុកលើកដែក', 4, 28, 298, 'ខេត្តកណ្ដាល', 'កម្ពុជា', 'ភូមិកោះចំរើន ឃុំកំពង់ភ្នំ ស្រុកលើកដែក', 'ខេត្តកណ្ដាល', 'កម្ពុជា', '098877665', '098877665', '098877665', 'ខ្មែរ', 'annpanha@gmail.com', 12, 2, NULL, '4', NULL, NULL, '9057.jpg', 1),
(3, 1, '2019-03-14 04:09:04', '2019-03-14 04:09:04', 1, NULL, '4116', '2015-04-01 00:00:00', 2, 'តូ សុផាណារ៉ា', NULL, 'TO SOPHANARA', 'តូ ជីវ៉ាន់ឌី', NULL, '1990-12-20 00:00:00', '1', 'B+', 'ខ្មែរ', 'ភូមិព្រៃស្មាច់ ឃុំរកាត ស្រុកភ្នំក្រវ៉ាញ', 'ភូមិព្រៃស្មាច់ ឃុំរកាត ស្រុកភ្នំក្រវ៉ាញ', 4, 28, 298, 'ខេត្តពោធិ៍សាត់', 'កម្ពុជា', 'ភូមិបន្ទាយចាស់ សង្កាត់ស្លក្រាម ក្រុងសៀមរាប', 'ខេត្តសៀមរាប', 'កម្ពុជា', '០89 483 623', '០89 483 623', '០89 483 623', 'ខ្មែរ', 'sophanara3@gmail.com', 12, 3, NULL, '៣ឆ្នាំ', NULL, NULL, '9057.jpg', 1),
(4, 1, '2019-03-14 04:18:19', '2019-03-14 04:18:19', 1, NULL, '4118', '2015-04-01 00:00:00', 2, 'គិត ​ថៃសេង', NULL, 'KITH​ THAISENG', 'គិត ស៊ីម', NULL, '1990-03-02 00:00:00', '1', 'B+', 'ខ្មែរ', 'ភូមិត្រកៀត ឃុំចំប៉ី ស្រុកបាទី', 'ភូមិត្រកៀត ឃុំចំប៉ី ស្រុកបាទី', 4, 28, 298, 'ខេត្តតាកែវ', 'កម្ពុជា', 'ភូមិបន្ទាយចាស់ សង្កាត់ស្លក្រាម ក្រុងសៀមរាប', 'ខេត្តសៀមរាប', 'កម្ពុជា', '077 779 450', '077 779 450', '077 779 450', 'ខ្មែរ', 'kiththaiseng@gmail.com', 12, 4, NULL, '៣ឆ្នាំ', NULL, NULL, '9057.jpg', 1),
(5, 2, '2019-06-09 19:51:15', '2019-08-05 02:50:16', 1, 1, '23456', '2019-06-10 00:00:00', 1, 'ផង់ ពុទ្ធី', NULL, 'PHANG PUTHY', NULL, NULL, '1960-06-08 00:00:00', '2', 'AB+', 'KHMER', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 4, 34, 298, 'SIEM REAP', 'CAMBODIA', 'SIEM REAP', 'SIEM REAP', 'CAMBODIA', '012778899', '012778899', NULL, 'KHMER', 'phangputhy@gmail.com', 12, 5, NULL, '12', 'គ្រប់គ្រងពាណិជ្ជកម្ម	', 'គ្រប់គ្រងពាណិជ្ជកម្ម	', '9057.jpg', 1),
(6, 1, '2019-06-22 15:02:46', '2019-06-22 15:02:46', 13, NULL, '1233', '2019-06-23 00:00:00', 2, 'សំ រដ្ឋា', NULL, 'SOM RATHA', NULL, NULL, '1988-12-11 00:00:00', '1', 'B+', 'KHMER', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 4, 34, 298, 'CAMBODIA', 'CAMBODIA', 'BATTAMBANG', 'CAMBODIA', 'CAMBODIA', NULL, '099889977', NULL, 'KHMER', 'ratha@gmail.com', 12, 6, NULL, '2 YEARS', NULL, NULL, '9057.jpg', 1),
(7, 2, '2019-06-22 15:05:54', '2019-06-22 15:05:54', 13, NULL, '22456', '2019-06-23 00:00:00', 2, 'សំ រដ្ឋា', NULL, 'SOM RATHA', NULL, NULL, '1988-12-11 00:00:00', '1', 'B+', 'KHMER', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 4, 34, 298, 'CAMBODIA', 'CAMBODIA', 'BATTAMBANG', 'CAMBODIA', 'CAMBODIA', '0977719665', '0964442376', NULL, 'KHMER', 'ratha98@gmail.com', 12, 7, NULL, '2 YEARS', NULL, NULL, '9057.jpg', 1),
(8, 2, '2019-06-22 15:10:11', '2019-06-22 15:10:11', 13, NULL, '8563', '2019-06-23 00:00:00', 2, 'សំណាង', NULL, 'SAMNANG', NULL, NULL, '1988-12-21 00:00:00', '1', 'B+', 'KHMER', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 'ភូមិគោករុន ឃុំមុខប៉ែន ស្រុកពួក', 4, 34, 298, 'CAMBODIA', 'CAMBODIA', 'SIEM REAP, CAMBODIA', 'CAMBODIA', 'CAMBODIA', NULL, '078343143', NULL, 'KHMER', 'applephagna@gmail.com', 12, 8, NULL, '5 YEARS', NULL, NULL, '9057.jpg', 1),
(9, 1, '2019-08-07 00:01:56', '2019-08-07 03:22:41', 1, 1, '658', '2019-08-07 00:00:00', 2, 'សំណាង ឧត្តមប​ញ្ញា', NULL, 'SAMNANG UDAMPHAGNA', 'IM SAMNANG', 'SOK SOMALAY', '2013-05-07 00:00:00', '1', 'B+', 'KHMER', 'MONDOL3 VILLAGE SLORKRAM COMMUNE SIEMREAP DISTRICT SIEMREAP PROVINCE', 'MONDOL3 VILLAGE SLORKRAM COMMUNE SIEMREAP DISTRICT SIEMREAP PROVINCE', 4, 34, 297, NULL, NULL, 'MONDOL3 VILLAGE SLORKRAM COMMUNE SIEMREAP DISTRICT SIEMREAP PROVINCE', NULL, NULL, '078343142', '070393143', NULL, 'KHMER', 'phagnaapple@gmail.com', 5, 2, 'Pass', '10 YEARS', '10 YEARS', '10 YEARS', '9057.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_designations`
--

DROP TABLE IF EXISTS `staff_designations`;
CREATE TABLE IF NOT EXISTS `staff_designations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_kh` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `staff_designations_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_designations`
--

INSERT INTO `staff_designations` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `title_kh`, `status`) VALUES
(1, '2019-01-23 15:52:27', '2019-03-14 02:58:48', 1, 1, 'PRINCIPAL', 'នាយក', 1),
(2, '2019-01-23 15:52:51', '2019-03-14 02:59:14', 1, 1, 'TEACHER', 'គ្រូបច្ចេកទេស', 1),
(3, '2019-03-14 02:59:28', '2019-03-14 03:00:45', 1, 1, 'TEACHER - RESR LITERACY', 'គ្រូបង្រៀន - សៀវភៅប្រវត្តិសាស្រ្ត', 1),
(4, '2019-03-14 03:01:31', '2019-03-14 03:03:23', 1, 1, 'TEACHER - LEARNING SUPPORT', 'គ្រូស្ម័គ្រចិត្ត', 1),
(5, '2019-03-14 03:03:04', '2019-03-14 03:03:04', 1, NULL, 'TEACHER - RESR VISUALLY IMP', 'គ្រូរូបវិទ្យា', 1),
(6, '2019-03-14 04:21:34', '2019-03-14 04:21:34', 1, NULL, 'SECURITY GUARD', 'អ្នកយាម', 1),
(7, '2019-03-14 04:21:46', '2019-03-14 04:21:46', 1, NULL, 'RECEPTION', 'អ្នកទទួលភ្ញៀវ', 1),
(8, '2019-03-14 04:21:57', '2019-03-14 04:21:57', 1, NULL, 'ACCOUNTANT', 'គណនេយ្យករ', 1),
(9, '2019-03-14 04:22:09', '2019-03-14 04:22:09', 1, NULL, 'DRIVER', 'អ្នកបើកប', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `reg_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL,
  `university_reg` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` int(10) UNSIGNED DEFAULT NULL,
  `semester` int(10) UNSIGNED DEFAULT NULL,
  `academic_status` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_tongue` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_info` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_reg_no_unique` (`reg_no`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `institute_id`, `created_by`, `last_updated_by`, `reg_no`, `reg_date`, `university_reg`, `faculty`, `semester`, `academic_status`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `blood_group`, `nationality`, `mother_tongue`, `email`, `extra_info`, `student_image`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 1, NULL, '00001', '2019-01-25 00:00:00', '00001', 2, 1, 1, 'អ៊ាន ស៊ីណា', NULL, 'EAN SINA', '2019-01-10 00:00:00', '1', 'B+', 'ខ្មែរ', 'ខ្មែរ', 'earnsina@gmail.com', NULL, '00001.jpg', '2019-01-24 19:24:03', '2019-08-02 09:38:25', 1),
(2, 1, 1, NULL, 'CUS-B15-01', '2019-04-28 00:00:00', NULL, 6, 3, 2, 'ចេក ប៊ុនយ៉ុង', NULL, 'CHEK BUNYONG', '1982-01-02 00:00:00', '1', 'O+', 'KHMER', 'KHMER', 'chekbunyong@gmail.com', NULL, 'CUS-B15-01.jpg', '2019-04-27 11:51:12', '2019-04-27 13:05:15', 1),
(3, 1, 1, NULL, 'CUS-B15-11', '2019-04-21 00:00:00', NULL, 6, 3, 2, 'ឡុញ សូរិយា', NULL, 'LONH SORIYA', '1983-02-21 00:00:00', '1', 'O+', 'ខ្មែរ', 'ខ្មែរ', 'soriyalonh@yahoo.com', NULL, 'CUS-B15-11.jpg', '2019-04-27 12:27:57', '2019-08-03 06:14:20', 1),
(4, 1, 1, NULL, 'CUS-SR 04', '2019-04-28 00:00:00', NULL, 6, 3, 2, 'តិច តិកឈង់', NULL, 'TECH TIKCHHONG', '1993-08-12 00:00:00', '1', 'O+', 'KHMER', 'KHMER', 'tikchhongtech2@gmail.com', 'NA', 'CUS-SR 04.jpg', '2019-04-27 12:37:28', '2019-04-27 12:53:37', 1),
(5, 1, 1, NULL, 'CUS-B15-08', '2019-04-28 00:00:00', NULL, 6, 3, 2, 'សែម គឹមសាន្ត', NULL, 'SEM KIMSAN', '1995-02-11 00:00:00', '1', 'O+', 'KHMER', NULL, 'kimsansem@gmail.com', NULL, '', '2019-04-27 12:37:54', '2019-04-27 13:35:53', 1),
(6, 1, 1, NULL, 'CUS-B15-07', '2019-04-28 00:00:00', 'CUS007', 8, 1, 2, 'ជា សុធារ៉ា', NULL, 'CHEA SO THEARA', '1995-11-02 00:00:00', '1', 'O+', 'KHMER', 'KHMER', 'sithyort@gmail.com', NULL, '', '2019-04-27 12:48:41', '2019-08-03 06:04:10', 1),
(7, 1, 1, NULL, 'Cus-B15-021', '1995-07-12 00:00:00', NULL, 7, 11, 2, 'ញៀច ញ៉ាន', NULL, 'NHIECH NHEAN', '1995-07-12 00:00:00', '1', 'O+', 'KHMER', 'KHMER', 'Nhiceh nhean08@gmail.com', NULL, 'Cus-B15-021.jpg', '2019-04-27 12:49:25', '2019-06-07 00:38:00', 1),
(8, 1, 1, NULL, 'CUS-B15-012', '2019-04-28 00:00:00', 'CUS0012', 7, 11, 2, 'អាង ខាត់ណា', NULL, 'ANG KHATHNA', '1989-03-12 00:00:00', '2', 'B+', 'KHMER', 'KHMER', 'khathna1990@gmail.com', NULL, '', '2019-04-27 12:55:34', '2019-06-07 00:38:01', 1),
(9, 1, 1, NULL, 'CusB15.06', '2019-04-28 00:00:00', 'Cus', 7, 11, 2, 'ហ៊ាប ហាត', NULL, 'HEAP HAT', '1996-08-06 00:00:00', '1', 'O+', 'KHMER', 'HENG', 'HeapHat1996@gmail.com', 'Na', '', '2019-04-27 12:57:56', '2019-06-07 00:38:01', 1),
(10, 1, 1, NULL, '0004', '2019-05-30 00:00:00', '0004', 1, 1, 1, 'HAN', 'SIEK', 'HENG1', '2019-05-11 00:00:00', '2', 'AB+', 'KHMER', 'KHMER', 'siekheng3@gmail.com', 'Siemreap', NULL, '2019-05-29 19:37:10', '2019-07-29 01:32:09', 1),
(11, 1, 1, NULL, '0007', '2019-05-29 00:00:00', '0005', 1, 1, 1, 'HAN', 'SIEK', 'HENG3', '2019-05-18 00:00:00', '1', NULL, 'KHMER', 'KHMER', 'siekheng3@gmail.com', 'hkhkjkj', NULL, '2019-05-30 22:49:28', '2019-07-29 01:32:02', 1),
(12, 1, 1, NULL, '0008', '2019-05-29 00:00:00', '0005', 1, 1, 1, 'HAN', 'SIEK', 'HENG8', '2019-05-18 00:00:00', '1', NULL, 'KHMER', 'KHMER', 'siekheng3@gmail.com', 'Hello', NULL, '2019-05-30 22:52:58', '2019-07-29 01:31:51', 1),
(13, 1, 1, NULL, '0009', '2019-06-06 00:00:00', '0009', 6, 1, 1, 'ឡុង ដារា', '', 'Long Dara', '1990-07-03 00:00:00', '1', '0', '0', '0', 'siekheng3@gmail.com', 'Siemreap, Cambodia', NULL, '2019-05-30 23:56:40', '2019-05-30 23:56:40', 1),
(14, 1, 1, NULL, '278384', '2019-07-02 00:00:00', '278384', 2, 1, 1, 'លេម ឈា', NULL, 'LEM CHHEA', '1959-07-05 00:00:00', '1', '0', '0', '0', 'lemchhea@gmail.com', 'ភូមិរោងគោ ឃុំរោងគោ ស្រុកក្រឡាញ់ ខេត្តសៀមរាប', NULL, '2019-07-14 23:26:07', '2019-07-14 23:26:07', 1),
(15, 1, 1, NULL, '278385', '2019-07-02 00:00:00', '278385', 2, 1, 1, 'ហ៊ីង សាវួន', NULL, 'Hing Savuon', '2019-07-02 00:00:00', '2', '0', '0', '0', 'hingsavuon@gmail.com', 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក ខេត្តសៀមរាប', NULL, '2019-07-15 00:17:12', '2019-07-15 00:17:12', 1),
(16, 1, 1, NULL, '278388', '2019-07-02 00:00:00', '278388', 2, 1, 1, 'នឿន សុឡាញ់', NULL, 'Noeurn Solanh', '1994-10-03 00:00:00', '2', '0', '0', '0', 'noeurnsalanh@gmail.com', 'ភូមិរោងគោ ឃុំរោងគោ ស្រុកក្រឡាញ់ ខេត្តសៀមរាប', 'lug5J3h2o3Zw5be8.jpg', '2019-07-15 00:56:42', '2019-07-29 01:28:30', 1),
(17, 1, 13, NULL, '278389', '2019-07-02 00:00:00', '278389', 6, 1, 1, 'មាស កែប', NULL, 'Meas Keb', '1948-04-08 00:00:00', '1', '0', '0', '0', NULL, 'ភូមិប្រឡាយ ឃុំខ្នាត ស្រុកពួក ខេត្តសៀមរាប', 'OtPqohttikAqp3t5.jpg', '2019-07-15 01:17:25', '2019-07-29 01:29:51', 1),
(18, 1, 13, NULL, '658225', '2019-07-22 00:00:00', '658225', 6, 1, 1, 'SAMNAGN', NULL, 'IM', '2019-07-22 00:00:00', '1', '0', '0', '0', 'applephagna@gmail.com', 'applephagna@gmail.com', 'uuF8mfMc653hvQZG.jpg', '2019-07-22 07:48:21', '2019-07-22 07:48:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_guardians`
--

DROP TABLE IF EXISTS `student_guardians`;
CREATE TABLE IF NOT EXISTS `student_guardians` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `guardians_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_guardians`
--

INSERT INTO `student_guardians` (`id`, `created_at`, `updated_at`, `students_id`, `guardians_id`) VALUES
(1, '2019-01-24 19:24:03', '2019-01-24 19:24:03', 1, 1),
(2, '2019-04-27 11:51:12', '2019-04-27 11:51:12', 2, 2),
(3, '2019-04-27 12:27:58', '2019-04-27 12:27:58', 3, 3),
(4, '2019-04-27 12:37:28', '2019-04-27 12:37:28', 4, 4),
(5, '2019-04-27 12:37:54', '2019-04-27 12:37:54', 5, 5),
(6, '2019-04-27 12:37:59', '2019-04-27 12:37:59', 6, 6),
(7, '2019-04-27 12:48:41', '2019-04-27 12:48:41', 7, 7),
(8, '2019-04-27 12:49:25', '2019-04-27 12:49:25', 8, 8),
(9, '2019-04-27 12:55:34', '2019-04-27 12:55:34', 9, 9),
(10, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 10, 10),
(11, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 11, 11),
(12, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 12, 12),
(13, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 13, 13),
(14, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 14, 14),
(15, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 15, 15),
(16, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 16, 16),
(17, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 17, 17),
(18, '2019-04-27 12:57:56', '2019-04-27 12:57:56', 18, 18);

-- --------------------------------------------------------

--
-- Table structure for table `student_long_course`
--

DROP TABLE IF EXISTS `student_long_course`;
CREATE TABLE IF NOT EXISTS `student_long_course` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_long_id` int(11) NOT NULL,
  `quarter` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`student_id`,`course_long_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_statuses`
--

DROP TABLE IF EXISTS `student_statuses`;
CREATE TABLE IF NOT EXISTS `student_statuses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_kh` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_statuses_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_statuses`
--

INSERT INTO `student_statuses` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `title_kh`, `status`) VALUES
(1, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, 1, 'New Admission', 'សិស្សថ្មី', 1),
(2, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, 1, 'Continue', 'បន្តការសិក្សា', 1),
(3, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, 1, 'Pass Out', 'ចេញពីសាលា', 1),
(4, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, 1, 'Back Continue', 'ត្រឡប់មកបន្ត', 1),
(5, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, 1, 'Drop Out', 'ឈប់រៀន', 1),
(6, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, 1, 'Transfer in', 'ផ្ទេរចូល', 1),
(7, '2019-01-23 15:38:07', '2019-01-23 15:38:07', 1, 1, 'Transfer Out', 'ផ្ទេរចេញ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

DROP TABLE IF EXISTS `student_subject`;
CREATE TABLE IF NOT EXISTS `student_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `pre_test` tinyint(4) NOT NULL DEFAULT '0',
  `post_test` tinyint(4) NOT NULL DEFAULT '0',
  `score` decimal(10,2) NOT NULL DEFAULT '0.00',
  `percentag` decimal(10,2) NOT NULL DEFAULT '0.00',
  `course_id` int(11) NOT NULL,
  `course_type_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`student_id`,`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`id`, `student_id`, `subject_id`, `pre_test`, `post_test`, `score`, `percentag`, `course_id`, `course_type_id`, `created_date`) VALUES
(1, 15, 2, 0, 0, '0.00', '0.00', 1, 1, '2019-10-10 05:20:03'),
(2, 15, 3, 0, 0, '0.00', '0.00', 1, 1, '2019-10-10 05:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_mark_theory` int(11) DEFAULT NULL,
  `pass_mark_theory` int(11) DEFAULT NULL,
  `full_mark_practical` int(11) DEFAULT NULL,
  `pass_mark_practical` int(11) DEFAULT NULL,
  `credit_hour` int(11) DEFAULT NULL,
  `sub_type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` int(10) UNSIGNED DEFAULT NULL,
  `objective` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `project_id` int(11) DEFAULT NULL,
  `course_type_id` int(11) DEFAULT NULL,
  `icon` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'course.png',
  `color` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT 'dash-card card-blue text-xs-center',
  `subject_fee` decimal(10,2) DEFAULT '0.00',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `project_status` tinyint(1) NOT NULL DEFAULT '1',
  `view_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `created_by`, `last_updated_by`, `title`, `slug`, `code`, `full_mark_theory`, `pass_mark_theory`, `full_mark_practical`, `pass_mark_practical`, `credit_hour`, `sub_type`, `class_type`, `staff_id`, `objective`, `description`, `project_id`, `course_type_id`, `icon`, `image`, `color`, `subject_fee`, `status`, `project_status`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'English', 'english', 'E01', 50, 50, 50, 50, 60, 'Compulsory', 'Theory', 3, NULL, 'English for ICT', 1, 1, NULL, 'c1.jpg', 'dash-card card-softred text-xs-center', '50.00', 1, 1, 2, '2019-01-23 16:17:44', '2019-10-09 07:39:41'),
(2, 1, NULL, 'C++ PROGRAMMING UPDATE 2018', 'c++programmming-update', 'C001', 0, NULL, NULL, NULL, 45, 'Optional', 'Both', 1, NULL, 'C++ PROGRAMMING UPDATE 2018', NULL, 1, NULL, 'c2.jpg', 'dash-card card-sky text-xs-center', '50.00', 1, 0, 13, '2019-03-17 20:41:00', '2019-10-09 16:06:26'),
(3, 1, NULL, 'VB.NET PROGRAMMING', 'vb.net-programming', 'VB01', NULL, NULL, NULL, NULL, 60, 'Compulsory', 'Both', 1, NULL, 'VB.NET PROGRAMMING', NULL, 1, NULL, 'c3.jpg', 'dash-card card-green text-xs-center', '50.00', 1, 0, 11, '2019-03-17 20:42:23', '2019-10-09 14:28:38'),
(4, 1, 1, 'DATA STRUCTURE AND ALGORITHM', 'data-structure-and-algorithm', 'DSA011', 50, 50, 50, 50, 45, 'Compulsory', 'Both', 1, '\r\n<h3>Why Learn Java?</h3>\r\n<p>Java is among the most popular programming languages out there, mainly because of how versatile and compatible it is. Java can be used for a large number of things, including software development, mobile applications, and large systems development. As of 2019, 88% market share of all smartphones run on Android, the mobile operating system written in Java. Knowing Java opens a great deal of doors for you as a developer.</p>\r\n\r\n<h3>Take-Away Skills</h3>\r\n<p>In this course you’ll be exposed to fundamental programming concepts, including object-oriented programming (OOP) using Java. You’ll build 7 Java projects—like a basic calculator—to help you practice along the way.</p>', 'DATA STRUCTURE AND ALGORITHM', NULL, 1, NULL, 'c1.jpg', 'dash-card card-yellow text-xs-center', '250.00', 1, 0, 3, '2019-04-27 02:52:16', '2019-10-09 09:44:48'),
(5, 1, NULL, 'JAVA PROGRAMMING', 'java-programming', 'JAP012', 50, 50, 50, 50, 45, 'Compulsory', 'Both', 1, '\r\n<h3>Why Learn Java?</h3>\r\n<p>Java is among the most popular programming languages out there, mainly because of how versatile and compatible it is. Java can be used for a large number of things, including software development, mobile applications, and large systems development. As of 2019, 88% market share of all smartphones run on Android, the mobile operating system written in Java. Knowing Java opens a great deal of doors for you as a developer.</p>\r\n\r\n<h3>Take-Away Skills</h3>\r\n<p>In this course you’ll be exposed to fundamental programming concepts, including object-oriented programming (OOP) using Java. You’ll build 7 Java projects—like a basic calculator—to help you practice along the way.</p>', 'JAVA PROGRAMMING', NULL, 2, NULL, 'c2.jpg', 'dash-card card-red text-xs-center', '0.00', 1, 1, 6, '2019-04-27 02:53:43', '2019-10-09 18:43:39'),
(6, 1, 1, 'សុខភាពបន្តពូជ បុរស និង​ស្ត្រី', 'សុខភាពបន្តពូជ', 'JAP013', 50, 50, 50, 50, 45, 'Compulsory', 'Both', 2, '\r\n<h3>Why Learn Java?</h3>\r\n<p>Java is among the most popular programming languages out there, mainly because of how versatile and compatible it is. Java can be used for a large number of things, including software development, mobile applications, and large systems development. As of 2019, 88% market share of all smartphones run on Android, the mobile operating system written in Java. Knowing Java opens a great deal of doors for you as a developer.</p>\r\n\r\n<h3>Take-Away Skills</h3>\r\n<p>In this course you’ll be exposed to fundamental programming concepts, including object-oriented programming (OOP) using Java. You’ll build 7 Java projects—like a basic calculator—to help you practice along the way.</p>', 'សុខភាពបន្តពូជ បុរស និង​ស្ត្រី', 1, 1, NULL, 'c3.jpg', 'dash-card card-red text-xs-center', '0.00', 1, 1, 7, '2019-04-27 02:53:43', '2019-10-09 18:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `subject_course_outline`
--

DROP TABLE IF EXISTS `subject_course_outline`;
CREATE TABLE IF NOT EXISTS `subject_course_outline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `detail` longtext,
  `video` text,
  `video_type` set('yt','fb','google','none') DEFAULT NULL,
  `active` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`id`,`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_course_outline`
--

INSERT INTO `subject_course_outline` (`id`, `subject_id`, `title`, `slug`, `detail`, `video`, `video_type`, `active`) VALUES
(1, 5, 'Lesson 01 : Hello, World!', 'hello-world', NULL, NULL, NULL, 'Y'),
(2, 5, 'Lesson 02 Variables and Types', 'variable-and-types', NULL, NULL, NULL, 'Y'),
(3, 5, 'Lesson 03 Conditionals', 'conditionals', NULL, NULL, NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `subject_main_program`
--

DROP TABLE IF EXISTS `subject_main_program`;
CREATE TABLE IF NOT EXISTS `subject_main_program` (
  `id` int(11) NOT NULL,
  `code` varchar(250) DEFAULT NULL,
  `title_kh` varchar(250) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Program_Main Subject';

-- --------------------------------------------------------

--
-- Table structure for table `subject_quizzes`
--

DROP TABLE IF EXISTS `subject_quizzes`;
CREATE TABLE IF NOT EXISTS `subject_quizzes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_attempts` int(11) NOT NULL,
  `pass_percentage` double(8,2) NOT NULL,
  `question_duration` int(11) NOT NULL,
  `per_q_mark` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_quizzes`
--

INSERT INTO `subject_quizzes` (`id`, `title`, `slug`, `reference`, `max_attempts`, `pass_percentage`, `question_duration`, `per_q_mark`, `status`, `created_at`, `updated_at`) VALUES
(1, 'English', 'English', '#79IJSw3l3V', 2, 55.00, 60, 1, 1, '2019-07-20 08:11:47', '2019-07-20 08:11:47'),
(4, 'សុខភាពបន្តពូជ បុរស និង​ស្ត្រី', 'សុខភាពបន្តពូជ-បុរស-និង​ស្ត្រី', '#vl9kR3sm4z', 100, 50.00, 45, 1, 1, '2019-10-08 04:55:30', '2019-10-08 04:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_exam`
--

DROP TABLE IF EXISTS `teacher_exam`;
CREATE TABLE IF NOT EXISTS `teacher_exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_kh` varchar(250) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Teacher Exam';

--
-- Dumping data for table `teacher_exam`
--

INSERT INTO `teacher_exam` (`id`, `title_kh`, `title_en`) VALUES
(1, 'ក្រសួងការងារ មធ្យម', 'MLVT Basic'),
(2, 'ក្រសួងការងារ ឧត្តម', 'MLVT Advanced'),
(3, 'ក្រសួងអប់រំ បឋម', 'MoEYS Primary'),
(4, 'ក្រសួងអប់រំ មធ្យម', 'MoEYS Secondary'),
(5, 'ក្រសួងអប់រំ ឧត្តម', 'MoEYS Advanced'),
(6, 'គ្មាន', 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `tr_head_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `dr_amount` int(11) DEFAULT NULL,
  `cr_amount` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_heads`
--

DROP TABLE IF EXISTS `transaction_heads`;
CREATE TABLE IF NOT EXISTS `transaction_heads` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `tr_head` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_histories`
--

DROP TABLE IF EXISTS `transport_histories`;
CREATE TABLE IF NOT EXISTS `transport_histories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `routes_id` int(10) UNSIGNED DEFAULT NULL,
  `vehicles_id` int(10) UNSIGNED DEFAULT NULL,
  `travellers_id` int(10) UNSIGNED NOT NULL,
  `history_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_tethod`
--

DROP TABLE IF EXISTS `transport_tethod`;
CREATE TABLE IF NOT EXISTS `transport_tethod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transport_kh` varchar(250) DEFAULT NULL,
  `transport_en` varchar(250) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='TransportMethod';

--
-- Dumping data for table `transport_tethod`
--

INSERT INTO `transport_tethod` (`id`, `transport_kh`, `transport_en`, `note`) VALUES
(1, 'ម៉ូតូឌុប(ចំណាយលុយផ្ទាល់ខ្លួន)', 'Moto Taxi at own expense', NULL),
(2, 'ម៉ូតូផ្ទាល់ខ្លួន', 'Own Motorbike', NULL),
(3, 'មធ្យោបាយធ្វើដំណើរសាធារណៈ (ចំណាយ លុយផ្ទាល់ខ្លួន)', 'Public transport at own expense', NULL),
(4, 'កង់', 'Bicycle', NULL),
(5, 'មធ្យោបាយធ្វើដំណើរផ្តល់ដោយគ្រឹះស្ថាន (ឥតគិតថ្លៃ)', 'Transport provided by institution (Free)', NULL),
(6, 'មធ្យោបាយធ្វើដំណើរផ្តល់ដោយសហគមន៍ (ឥតគិតថ្លៃ)', 'Transport provided by commune (Free)', NULL),
(7, 'ថ្មើរជើង', 'Walk', NULL),
(8, 'ផ្សេងៗ', 'Other', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transport_users`
--

DROP TABLE IF EXISTS `transport_users`;
CREATE TABLE IF NOT EXISTS `transport_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `routes_id` int(10) UNSIGNED DEFAULT NULL,
  `vehicles_id` int(10) UNSIGNED DEFAULT NULL,
  `user_type` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `hook_id` int(10) UNSIGNED DEFAULT NULL,
  `institute_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `remember_token`, `last_login_at`, `last_login_ip`, `created_at`, `updated_at`, `contact_number`, `address`, `profile_image`, `role_id`, `hook_id`, `institute_id`, `status`) VALUES
(1, 'Seng Sourng', 'sengsourng@gmail.com', '', '$2y$10$hrczYzGqyGc/Yham6rekXeZFAiumNtAMaOzNCrIRCLVKPhqJZUL4S', 'j6HUhou8gm84uti9Mox4lRk8cV17ZZ2F6g4skIQvZxk4UEnBdaPGlCVWXlCY', '2019-10-09 20:49:40', '::1', NULL, '2019-10-09 20:49:40', '092771244', 'Siem Reap', '4850.jpg', NULL, NULL, 1, 1),
(2, 'Long Dara', 'longdara@gmail.com', '', '$2y$10$fijitJawXyu7Ss3oSX4LLuyJm6DkE9bbeKEVD5O7hFDdYeDgTfl42', 'V2jWdb0pxi3bROLoMgAp2L28jzq8Z4iv5Bn7SvD8NqQvN3ZvglDAorasn64d', '2019-10-08 21:39:11', '::1', '2019-01-23 15:41:11', '2019-10-08 21:39:11', '093771244', 'Siem Reap', '5557.jpg', NULL, 14, 1, 1),
(3, 'សេង ស៊ង់', 'sourng@gmail.com', '', '$2y$10$7wD3wjNsuAu4wStVMDkwXeryolPxjFfNHw1L2wm5VKQb3R.al5sIq', '3GxLHhcfS4b5rwZcbS0lECTShN6awYkXLdPJRMUvox1QMlpA3NlYk6Kn5Jc1', '2019-10-09 17:28:44', '::1', '2019-01-23 16:25:09', '2019-10-09 17:28:44', '092771244', 'SIEM REAP', '9680.png', 5, 1, 1, 1),
(4, 'ឡុញ សូរិយា  LONH SORIYA', 'soriyalonh@yahoo.com', '', '$2y$10$ocF19wyvQXhkQNKCwFBO/eRjfaDoekm9fOUa.X1l2MCbXcjvjhyc.', 'kTbRpluqynAZi4GD3G2m6e2wdLN1XzuIyZHJBSWlcBTg5wE56Sbk1n1inrTC', '2019-04-27 14:08:51', '175.100.52.98', '2019-04-27 13:02:33', '2019-04-27 14:08:51', NULL, NULL, NULL, 6, 3, 1, 0),
(5, 'ចេក ប៊ុនយ៉ុង  CHEK BUNYONG', 'chekbunyong@gmail.com', '', '$2y$10$qva.dR54jwJRZQ1OGhWiqudPXcCa1fjmPx8tZnnBlXsGkXyKNdBki', 'NmRo9lzQVJGqES4jHUepfjt024qGSMsugBOh4pv5R2XJ7cxuAGTosIB64jE9', '2019-08-05 05:39:03', '::1', '2019-04-27 13:15:42', '2019-08-05 05:39:03', '099887766', 'SIEM REAP', '6681.jpg', 2, 2, 1, 1),
(6, 'តិច តិកឈង់  TECH TIKCHHONG', 'tikchhongtech2@gmail.com', '', '$2y$10$/bu/1kWSWbCmPCOWV7FGB.Sw6SMEsPDQ.EEvVrlKvNy7OXMp1y1Eu', NULL, NULL, NULL, '2019-04-27 13:20:03', '2019-04-27 13:20:03', NULL, NULL, NULL, 6, 4, 1, 0),
(7, 'សែម គឹមសាន្ត  SEM KIMSAN', 'kimsansem@gmail.com', '', '$2y$10$OV1GKrzPeyww/eiha5YwbubUiC0ieahm4bNC1EC2p/zs34EZLxXL.', NULL, '2019-08-02 10:11:51', '::1', '2019-04-27 13:20:39', '2019-08-02 10:11:51', '099887788', 'Siem Reap', '8092.jpg', 4, 5, 1, 1),
(8, 'ជា សុធារ៉ា  CHEA SO THEARA', 'sithyort@gmail.com', '', '$2y$10$sfSz/wXNcE3aX0.GPzM4vO8HqENKMUFHCeBDANLjk.W.Gs6xT1dZK', NULL, NULL, NULL, '2019-04-27 13:21:05', '2019-08-03 05:59:13', NULL, NULL, NULL, 6, 7, 1, 0),
(9, 'ញៀច ញ៉ាន  NHIECH NHEAN', 'nhicehnhean08@gmail.com', '', '$2y$10$sEyrByKG24agdBOS/wTC.e0778Z8K8ztq1aWLip39JHv2Y7rqi9Km', NULL, '2019-10-09 20:25:37', '::1', '2019-04-27 13:22:42', '2019-10-09 20:25:37', NULL, NULL, NULL, 6, 8, 1, 0),
(10, 'អាង ខាត់ណា  ANG KHATHNA', 'khathna1990@gmail.com', '', '$2y$10$gPPAcliitVYr2b/arPSvSOLM6p/tWbJYCE/63yuY6Bs06girdcXX6', NULL, NULL, NULL, '2019-04-27 13:23:16', '2019-04-27 13:27:00', NULL, NULL, NULL, 6, 9, 1, 0),
(11, 'ហ៊ាប ហាត  HEAP HAT', 'heaphat1996@gmail.com', '', '$2y$10$ecYS8ekTOKPAbIW8Piq/UOtuz1Kbwxzx52COgqymAE4fpSwgbZYuy', 'KQIvUexUwq0HriucjM1eAhXn4DbaPzXob7LTTE2pzRNnqRHdZEkocB2NCFoq', '2019-10-09 14:59:14', '::1', '2019-04-27 13:28:34', '2019-10-09 14:59:14', '099887766', 'Siem Reap, Cambodia', '9223.png', 6, 10, 1, 1),
(12, 'គិត ​ថៃសេង  KITH​ THAISENG', 'kiththaiseng@gmail.com', '', '$2y$10$ywWeKrryqOn3e/mqGoT.b.nqKxKxPNXtHDazbcjnbjIOBFQlvUm1a', 'TG6EW0I0gkp4Ygnwrndpzkji21BeU854EZizivr0ec3wSShun2JIhN3bKkOE', '2019-06-14 05:18:53', '::1', '2019-06-07 00:42:14', '2019-06-14 05:18:53', '093445566', 'Siem Reap, Cambodia', NULL, 5, 4, 1, 1),
(13, 'ផង់ ពុទ្ធី  PHANG PUTHY', 'phangputhy@gmail.com', '', '$2y$10$Hg1Knz7SFqziY/GJGIPQIu4Bn/oL3T38Q.pfHAUYmp.14DSZ.t6FO', 'Z40ifS5EnB7IbkZENIyv9m4W0DsvpOyL3fAGTPsCzvnxrzk4X8IrkLTF4GSy', '2019-10-09 17:24:51', '::1', '2019-06-09 19:53:50', '2019-10-09 17:24:51', '012667788', 'SIEM REAP', '8948.png', 9, 5, 1, 1),
(14, 'សំ រដ្ឋា  SOM RATHA', 'ratha@gmail.com', '', '$2y$10$B3v1VwBAhuJ3keHYC650Y.YM4m.VEyygvOOERH3Fm45ygd5LQY2jm', NULL, NULL, NULL, '2019-07-29 00:46:56', '2019-07-29 00:46:56', NULL, NULL, NULL, 5, 6, NULL, 0),
(15, 'អ៊ាន ស៊ីណា  EAN SINA', 'earnsina@gmail.com', '', '$2y$10$vmSq893LS02ZLVMHu4LF6OI079QRjUuW9i79L4J5uv7TM8dJ2N0Tq', NULL, '2019-10-09 20:23:06', '::1', '2019-08-02 10:04:16', '2019-10-09 20:23:06', '0126582547', 'Siem Reap', '5119.jpg', 6, 1, NULL, 0),
(16, 'សំណាង ឧត្តមប​ញ្ញា  SAMNANG UDAMPHAGNA', 'phagnaapple@gmail.com', '', '$2y$10$sZw012FMz831TABaAPQi7er9cFOYvpTsj34heP2pjQ0vMR/DXTfZe', NULL, NULL, NULL, '2019-08-07 00:01:56', '2019-08-07 00:01:56', '078343142', 'MONDOL3 VILLAGE SLORKRAM COMMUNE SIEMREAP DISTRICT SIEMREAP PROVINCE', 'default.png', 5, 9, 1, 0),
(18, 'SENG  SOURNG', 'sengsourng1@gmail.com', NULL, '$2y$10$nTS64Jv8oV6DDBTpnF.oneyvjIYHzT3PtyBQNU2GTuQAlo17keQia', NULL, NULL, NULL, '2019-10-04 04:06:45', '2019-10-04 04:06:45', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(19, 'Doctor', '093771244', NULL, '$2y$10$As1R0IIty/OVg9qztQEUbekgHi9s5HSOR5owozEUyaFh7hV/JQutm', NULL, NULL, NULL, '2019-10-04 04:10:03', '2019-10-04 04:10:03', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(20, 'ឡុង ចាន់នា', '099887766', NULL, '$2y$10$rEtRTPKbX7YnqjQTu2BqeOXmKTSWi0rQbsEi98xW/9kORwt0Wxypq', NULL, NULL, NULL, '2019-10-04 04:13:23', '2019-10-04 04:13:23', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(21, 'SourngEdu', 'sengsourng2@gmail.com', '092771244', '$2y$10$iK6maMc8QTMCRajDnb8jxu9xnHZVrhK4k0MitCETQuPqGNJ7.iLb2', NULL, NULL, NULL, '2019-10-04 04:22:50', '2019-10-04 04:22:50', '092771244', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

DROP TABLE IF EXISTS `user_answers`;
CREATE TABLE IF NOT EXISTS `user_answers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `test_type_id` int(10) UNSIGNED NOT NULL,
  `userData_appear_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `user_answer_id` tinyint(4) NOT NULL DEFAULT '0',
  `time_taken` int(11) NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_answers_user_id_foreign` (`user_id`),
  KEY `user_answers_subject_id_foreign` (`subject_id`),
  KEY `user_answers_question_id_foreign` (`question_id`),
  KEY `user_answers_userdata_appear_id_foreign` (`userData_appear_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `user_id`, `test_type_id`, `userData_appear_id`, `subject_id`, `question_id`, `user_answer_id`, `time_taken`, `correct`, `created_at`, `updated_at`) VALUES
(1, 13, 0, 1, 1, 1, 1, 3, 1, '2019-07-20 08:38:32', '2019-07-20 08:38:32'),
(2, 13, 0, 1, 1, 2, 5, 4, 1, '2019-07-20 08:38:37', '2019-07-20 08:38:37'),
(3, 13, 0, 1, 1, 3, 9, 5, 1, '2019-07-20 08:38:43', '2019-07-20 08:38:43'),
(4, 13, 0, 2, 2, 4, 10, 5, 1, '2019-07-20 08:40:16', '2019-07-20 08:40:16'),
(5, 13, 0, 2, 2, 5, 14, 2, 1, '2019-07-20 08:40:20', '2019-07-20 08:40:20'),
(6, 13, 0, 2, 2, 6, 17, 2, 0, '2019-07-20 08:40:24', '2019-07-20 08:40:24'),
(7, 13, 0, 3, 3, 7, 20, 7, 0, '2019-07-20 08:40:51', '2019-07-20 08:40:51'),
(8, 13, 0, 3, 3, 8, 22, 3, 0, '2019-07-20 08:40:55', '2019-07-20 08:40:55'),
(9, 13, 0, 3, 3, 9, 27, 2, 1, '2019-07-20 08:40:59', '2019-07-20 08:40:59'),
(10, 15, 2, 4, 1, 1, 2, 2, 0, '2019-09-18 08:08:26', '2019-09-18 08:08:26'),
(11, 15, 2, 4, 1, 2, 6, 1, 0, '2019-09-18 08:08:29', '2019-09-18 08:08:29'),
(12, 15, 2, 4, 1, 3, 8, 1, 0, '2019-09-18 08:08:31', '2019-09-18 08:08:31'),
(13, 15, 2, 5, 3, 7, 20, 1, 0, '2019-09-18 08:10:23', '2019-09-18 08:10:23'),
(14, 15, 2, 5, 3, 8, 24, 1, 0, '2019-09-18 08:10:25', '2019-09-18 08:10:25'),
(15, 15, 2, 5, 3, 9, 27, 1, 1, '2019-09-18 08:10:27', '2019-09-18 08:10:27'),
(16, 15, 1, 6, 1, 1, 2, 2, 0, '2019-09-18 08:12:21', '2019-09-18 08:12:21'),
(17, 15, 1, 6, 1, 2, 5, 1, 1, '2019-09-18 08:12:23', '2019-09-18 08:12:23'),
(18, 15, 1, 6, 1, 3, 8, 1, 0, '2019-09-18 08:12:25', '2019-09-18 08:12:25'),
(19, 15, 2, 7, 2, 4, 11, 1, 0, '2019-09-18 08:12:43', '2019-09-18 08:12:43'),
(20, 15, 2, 7, 2, 5, 15, 3, 0, '2019-09-18 08:12:47', '2019-09-18 08:12:47'),
(21, 15, 2, 7, 2, 6, 16, 2, 0, '2019-09-18 08:12:57', '2019-09-18 08:12:57'),
(22, 1, 2, 8, 2, 4, 12, 1, 0, '2019-09-18 08:16:25', '2019-09-18 08:16:25'),
(23, 1, 2, 8, 2, 5, 14, 1, 1, '2019-09-18 08:16:27', '2019-09-18 08:16:27'),
(24, 1, 2, 8, 2, 6, 18, 1, 1, '2019-09-18 08:16:29', '2019-09-18 08:16:29'),
(25, 1, 1, 9, 1, 1, 2, 1, 0, '2019-09-18 08:20:34', '2019-09-18 08:20:34'),
(26, 1, 1, 9, 1, 2, 5, 1, 1, '2019-09-18 08:20:36', '2019-09-18 08:20:36'),
(27, 1, 1, 9, 1, 3, 8, 1, 0, '2019-09-18 08:20:38', '2019-09-18 08:20:38'),
(28, 2, 2, 10, 3, 7, 20, 3, 0, '2019-10-08 05:01:08', '2019-10-08 05:01:08'),
(29, 2, 2, 10, 3, 8, 24, 1, 0, '2019-10-08 05:01:10', '2019-10-08 05:01:10'),
(30, 2, 2, 10, 3, 9, 27, 1, 1, '2019-10-08 05:01:13', '2019-10-08 05:01:13'),
(31, 2, 1, 11, 1, 1, 3, 4, 0, '2019-10-08 06:32:58', '2019-10-08 06:32:58'),
(32, 2, 1, 11, 1, 2, 5, 14, 1, '2019-10-08 06:33:13', '2019-10-08 06:33:13'),
(33, 2, 1, 11, 1, 3, 7, 3, 0, '2019-10-08 06:33:18', '2019-10-08 06:33:18'),
(34, 15, 1, 12, 4, 10, 28, 11, 1, '2019-10-09 13:29:26', '2019-10-09 13:29:26'),
(35, 15, 1, 12, 4, 11, 34, 4, 1, '2019-10-09 13:29:32', '2019-10-09 13:29:32'),
(36, 15, 1, 12, 4, 11, 34, 4, 1, '2019-10-09 13:29:36', '2019-10-09 13:29:36'),
(37, 15, 2, 13, 4, 10, 28, 3, 1, '2019-10-09 13:33:14', '2019-10-09 13:33:14'),
(38, 15, 2, 13, 4, 11, 34, 3, 1, '2019-10-09 13:33:18', '2019-10-09 13:33:18'),
(39, 15, 2, 13, 4, 11, 34, 2, 1, '2019-10-09 13:33:21', '2019-10-09 13:33:21'),
(40, 15, 1, 14, 4, 10, 28, 5, 1, '2019-10-09 14:30:39', '2019-10-09 14:30:39'),
(41, 15, 1, 14, 4, 11, 34, 6, 1, '2019-10-09 14:30:46', '2019-10-09 14:30:46'),
(42, 15, 2, 15, 4, 10, 28, 5, 1, '2019-10-09 14:31:01', '2019-10-09 14:31:01'),
(43, 15, 2, 15, 4, 11, 34, 3, 1, '2019-10-09 14:31:05', '2019-10-09 14:31:05'),
(44, 15, 2, 15, 4, 11, 34, 3, 1, '2019-10-09 14:31:14', '2019-10-09 14:31:14'),
(45, 9, 1, 16, 4, 10, 29, 13, 0, '2019-10-09 20:26:37', '2019-10-09 20:26:37'),
(46, 9, 1, 16, 4, 11, 35, 5, 0, '2019-10-09 20:26:44', '2019-10-09 20:26:44'),
(47, 9, 1, 16, 4, 13, 42, 24, 1, '2019-10-09 20:27:10', '2019-10-09 20:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `number` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `vehicles_number_unique` (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `number`, `type`, `model`, `description`, `status`) VALUES
(1, '2019-03-15 01:57:57', '2019-03-15 01:57:57', 1, NULL, 'សរ០០៩៩', 'កាមារី', 'កាមារីសេរី២០១៥', 'ឡានមាកកាមារីឆ្នាំ២០១៥', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_staffs`
--

DROP TABLE IF EXISTS `vehicle_staffs`;
CREATE TABLE IF NOT EXISTS `vehicle_staffs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vehicles_id` int(10) UNSIGNED NOT NULL,
  `staffs_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

DROP TABLE IF EXISTS `years`;
CREATE TABLE IF NOT EXISTS `years` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `years_title_unique` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `active_status`, `status`) VALUES
(1, '2019-01-23 16:11:26', '2019-08-02 09:30:08', 1, NULL, '2018', 0, 1),
(2, '2019-01-23 16:11:34', '2019-08-02 09:30:08', 1, NULL, '2019', 1, 1),
(3, '2019-03-14 02:32:34', '2019-08-02 09:30:08', 1, NULL, '2017', 0, 1),
(4, '2019-03-14 02:32:43', '2019-08-02 09:30:08', 1, NULL, '2016', 0, 1),
(5, '2019-03-14 02:33:03', '2019-08-02 09:30:08', 1, NULL, '2020', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
