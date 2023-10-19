-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 05:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `answerdescriptions`
--

CREATE TABLE `answerdescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answerdescriptions`
--

INSERT INTO `answerdescriptions` (`id`, `description`, `status`, `question_id`, `created_at`, `updated_at`) VALUES
(7, NULL, 1, 7, '2022-04-15 11:15:23', '2022-04-15 11:15:23'),
(9, '<p>My name is masum</p>', 1, 9, '2022-04-17 07:02:22', '2022-04-17 07:02:22'),
(10, '<p>my father name is lutfar</p>', 1, 10, '2022-04-17 07:03:28', '2022-04-17 07:03:28'),
(11, NULL, 1, 11, '2022-04-17 07:04:55', '2022-04-17 11:53:59'),
(12, NULL, 1, 12, '2022-04-17 07:06:25', '2022-04-17 11:53:39'),
(13, '<p>all information store</p>', 1, 13, '2022-04-17 07:07:42', '2022-04-17 07:07:42'),
(14, NULL, 1, 14, '2022-04-17 07:08:31', '2022-04-17 07:08:31'),
(15, NULL, 1, 15, '2022-04-17 07:09:11', '2022-04-17 07:09:11'),
(16, NULL, 1, 16, '2022-04-17 07:09:43', '2022-04-17 07:09:43'),
(17, NULL, 1, 17, '2022-04-17 07:12:03', '2022-04-17 07:12:03'),
(18, NULL, 1, 18, '2022-04-17 07:12:22', '2022-04-17 07:12:22'),
(19, NULL, 1, 19, '2022-04-17 07:12:35', '2022-04-17 07:12:35'),
(20, NULL, 1, 20, '2022-04-17 07:12:50', '2022-04-17 07:12:50'),
(21, NULL, 1, 21, '2022-04-17 07:13:07', '2022-04-17 07:13:07'),
(22, NULL, 1, 22, '2022-04-17 07:13:26', '2022-04-17 07:13:26'),
(23, NULL, 1, 23, '2022-04-17 07:23:42', '2022-04-17 07:23:42'),
(24, NULL, 1, 24, '2022-04-17 07:24:01', '2022-04-17 07:24:01'),
(25, NULL, 1, 25, '2022-04-17 07:24:15', '2022-04-17 07:24:15'),
(26, NULL, 1, 26, '2022-04-17 07:24:28', '2022-04-17 07:24:28'),
(27, NULL, 1, 27, '2022-04-17 07:24:56', '2022-04-17 07:24:56'),
(28, NULL, 1, 28, '2022-04-17 11:55:04', '2022-04-17 11:55:04'),
(29, NULL, 1, 29, '2022-04-17 11:55:27', '2022-04-17 11:55:27'),
(30, '<p>sdfsdf asdf asdfasdf asdf asdf asdf asdfasd f</p>', 1, 30, '2022-04-17 12:02:30', '2022-04-17 12:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_ans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `option`, `correct_ans`, `question_id`, `created_at`, `updated_at`) VALUES
(29, '<p>a a</p>', NULL, 7, '2022-04-15 11:15:22', '2022-04-15 12:38:33'),
(30, '<p>b b</p>', 'on', 7, '2022-04-15 11:15:22', '2022-04-15 12:38:33'),
(31, '<p>d d</p>', NULL, 7, '2022-04-15 11:15:22', '2022-04-15 12:38:33'),
(32, '<p>w w</p>', NULL, 7, '2022-04-15 11:15:22', '2022-04-15 12:38:33'),
(37, '<p>a</p>', 'on', 9, '2022-04-17 07:02:22', '2022-04-17 07:02:22'),
(38, '<p>b</p>', NULL, 9, '2022-04-17 07:02:22', '2022-04-17 07:02:22'),
(39, '<p>c</p>', NULL, 9, '2022-04-17 07:02:22', '2022-04-17 07:02:22'),
(40, '<p>Masum</p>', NULL, 9, '2022-04-17 07:02:22', '2022-04-17 07:02:22'),
(41, '<p>Jon</p>', NULL, 10, '2022-04-17 07:03:28', '2022-04-17 07:03:28'),
(42, '<p>lutfar</p>', 'on', 10, '2022-04-17 07:03:28', '2022-04-17 07:03:28'),
(43, '<p>roky</p>', NULL, 10, '2022-04-17 07:03:28', '2022-04-17 07:03:28'),
(44, '<p>lam</p>', NULL, 10, '2022-04-17 07:03:28', '2022-04-17 07:03:28'),
(45, '<p>develop web site</p>', 'on', 11, '2022-04-17 07:04:55', '2022-04-17 11:53:59'),
(46, '<p>drinking</p>', NULL, 11, '2022-04-17 07:04:55', '2022-04-17 07:04:55'),
(47, '<p>nothing</p>', NULL, 11, '2022-04-17 07:04:55', '2022-04-17 07:04:55'),
(48, '<p>walk</p>', NULL, 11, '2022-04-17 07:04:55', '2022-04-17 07:04:55'),
(49, '<p><strong>software system</strong></p>', NULL, 12, '2022-04-17 07:06:25', '2022-04-17 07:06:25'),
(50, '<p><strong>Hardware software&nbsp;</strong></p>', 'on', 12, '2022-04-17 07:06:25', '2022-04-17 11:53:39'),
(51, '<p>set of instruction</p>', NULL, 12, '2022-04-17 07:06:25', '2022-04-17 07:06:25'),
(52, '<p>nothing</p>', NULL, 12, '2022-04-17 07:06:25', '2022-04-17 07:06:25'),
(53, '<p>data store system</p>', 'on', 13, '2022-04-17 07:07:42', '2022-04-17 07:07:42'),
(54, '<p>image store</p>', NULL, 13, '2022-04-17 07:07:42', '2022-04-17 07:07:42'),
(55, '<p>nothing&nbsp;</p>', NULL, 13, '2022-04-17 07:07:42', '2022-04-17 07:07:42'),
(56, '<p>data store and image store and more</p>', NULL, 13, '2022-04-17 07:07:42', '2022-04-17 07:07:42'),
(57, '<p>software</p>', 'on', 14, '2022-04-17 07:08:31', '2022-04-17 11:53:10'),
(58, '<p>hardware</p>', NULL, 14, '2022-04-17 07:08:31', '2022-04-17 07:08:31'),
(59, '<p>kernel</p>', NULL, 14, '2022-04-17 07:08:31', '2022-04-17 07:08:31'),
(60, '<p>nothing</p>', NULL, 14, '2022-04-17 07:08:31', '2022-04-17 07:08:31'),
(61, '<p>the</p>', NULL, 15, '2022-04-17 07:09:10', '2022-04-17 07:09:10'),
(62, '<p>is&nbsp;</p>', 'on', 15, '2022-04-17 07:09:10', '2022-04-17 07:09:10'),
(63, '<p>are&nbsp;</p>', NULL, 15, '2022-04-17 07:09:10', '2022-04-17 07:09:10'),
(64, '<p>it\'s</p>', NULL, 15, '2022-04-17 07:09:10', '2022-04-17 07:09:10'),
(65, '<p>the</p>', 'on', 16, '2022-04-17 07:09:43', '2022-04-17 11:52:32'),
(66, '<p>is&nbsp;</p>', NULL, 16, '2022-04-17 07:09:43', '2022-04-17 07:09:43'),
(67, '<p>an</p>', NULL, 16, '2022-04-17 07:09:43', '2022-04-17 07:09:43'),
(68, '<p>it</p>', NULL, 16, '2022-04-17 07:09:43', '2022-04-17 07:09:43'),
(69, '<p>blue</p>', 'on', 17, '2022-04-17 07:12:03', '2022-04-17 11:48:26'),
(70, '<p>red</p>', NULL, 17, '2022-04-17 07:12:03', '2022-04-17 07:12:03'),
(71, '<p>green</p>', NULL, 17, '2022-04-17 07:12:03', '2022-04-17 07:12:03'),
(72, '<p>yellow</p>', NULL, 17, '2022-04-17 07:12:03', '2022-04-17 07:12:03'),
(73, '<p>a</p>', 'on', 18, '2022-04-17 07:12:21', '2022-04-17 11:52:04'),
(74, '<p>b</p>', NULL, 18, '2022-04-17 07:12:21', '2022-04-17 07:12:21'),
(75, '<p>c</p>', NULL, 18, '2022-04-17 07:12:21', '2022-04-17 07:12:21'),
(76, '<p>d</p>', NULL, 18, '2022-04-17 07:12:22', '2022-04-17 07:12:22'),
(77, '<p>a</p>', NULL, 19, '2022-04-17 07:12:35', '2022-04-17 07:12:35'),
(78, '<p>b</p>', 'on', 19, '2022-04-17 07:12:35', '2022-04-17 07:12:35'),
(79, '<p>c</p>', NULL, 19, '2022-04-17 07:12:35', '2022-04-17 07:12:35'),
(80, '<p>d</p>', NULL, 19, '2022-04-17 07:12:35', '2022-04-17 07:12:35'),
(81, '<p>e</p>', 'on', 20, '2022-04-17 07:12:50', '2022-04-17 07:12:50'),
(82, '<p>r</p>', NULL, 20, '2022-04-17 07:12:50', '2022-04-17 07:12:50'),
(83, '<p>r</p>', NULL, 20, '2022-04-17 07:12:50', '2022-04-17 07:12:50'),
(84, '<p>f</p>', NULL, 20, '2022-04-17 07:12:50', '2022-04-17 07:12:50'),
(85, '<p>e</p>', 'on', 21, '2022-04-17 07:13:07', '2022-04-17 07:13:07'),
(86, '<p>r</p>', NULL, 21, '2022-04-17 07:13:07', '2022-04-17 07:13:07'),
(87, '<p>f</p>', NULL, 21, '2022-04-17 07:13:07', '2022-04-17 07:13:07'),
(88, '<p>qq</p>', NULL, 21, '2022-04-17 07:13:07', '2022-04-17 07:13:07'),
(89, '<p>w</p>', NULL, 22, '2022-04-17 07:13:26', '2022-04-17 07:13:26'),
(90, '<p>e</p>', NULL, 22, '2022-04-17 07:13:26', '2022-04-17 07:13:26'),
(91, '<p>r</p>', 'on', 22, '2022-04-17 07:13:26', '2022-04-17 07:13:26'),
(92, '<p>ry</p>', NULL, 22, '2022-04-17 07:13:26', '2022-04-17 07:13:26'),
(93, '<p>t</p>', 'on', 23, '2022-04-17 07:23:42', '2022-04-17 11:50:56'),
(94, '<p>y</p>', NULL, 23, '2022-04-17 07:23:42', '2022-04-17 07:23:42'),
(95, '<p>u</p>', NULL, 23, '2022-04-17 07:23:42', '2022-04-17 07:23:42'),
(96, '<p>v</p>', NULL, 23, '2022-04-17 07:23:42', '2022-04-17 07:23:42'),
(97, '<p>e</p>', NULL, 24, '2022-04-17 07:24:00', '2022-04-17 07:24:00'),
(98, '<p>qerter</p>', 'on', 24, '2022-04-17 07:24:01', '2022-04-17 07:24:01'),
(99, '<p>w</p>', NULL, 24, '2022-04-17 07:24:01', '2022-04-17 07:24:01'),
(100, '<p>e</p>', NULL, 24, '2022-04-17 07:24:01', '2022-04-17 07:24:01'),
(101, '<p>h</p>', NULL, 25, '2022-04-17 07:24:15', '2022-04-17 07:24:15'),
(102, '<p>k</p>', 'on', 25, '2022-04-17 07:24:15', '2022-04-17 07:24:15'),
(103, '<p>h</p>', NULL, 25, '2022-04-17 07:24:15', '2022-04-17 07:24:15'),
(104, '<p>t</p>', NULL, 25, '2022-04-17 07:24:15', '2022-04-17 07:24:15'),
(105, '<p>n</p>', 'on', 26, '2022-04-17 07:24:28', '2022-04-17 11:50:23'),
(106, '<p>f</p>', NULL, 26, '2022-04-17 07:24:28', '2022-04-17 07:24:28'),
(107, '<p>g</p>', NULL, 26, '2022-04-17 07:24:28', '2022-04-17 07:24:28'),
(108, '<p>e</p>', NULL, 26, '2022-04-17 07:24:28', '2022-04-17 07:24:28'),
(109, '<p>1</p>', 'on', 27, '2022-04-17 07:24:56', '2022-04-17 11:50:04'),
(110, '<p>2</p>', NULL, 27, '2022-04-17 07:24:56', '2022-04-17 07:24:56'),
(111, '<p>3</p>', NULL, 27, '2022-04-17 07:24:56', '2022-04-17 07:24:56'),
(112, '<p>4</p>', NULL, 27, '2022-04-17 07:24:56', '2022-04-17 07:24:56'),
(113, '<p>b</p>', 'on', 28, '2022-04-17 11:55:04', '2022-04-17 12:02:04'),
(114, '<p>c</p>', NULL, 28, '2022-04-17 11:55:04', '2022-04-17 11:55:04'),
(115, '<p>d</p>', NULL, 28, '2022-04-17 11:55:04', '2022-04-17 11:55:04'),
(116, '<p>e</p>', NULL, 28, '2022-04-17 11:55:04', '2022-04-17 11:55:04'),
(117, '<p>e</p>', 'on', 29, '2022-04-17 11:55:27', '2022-04-17 12:01:36'),
(118, '<p>t</p>', NULL, 29, '2022-04-17 11:55:27', '2022-04-17 11:55:27'),
(119, '<p>r</p>', NULL, 29, '2022-04-17 11:55:27', '2022-04-17 11:55:27'),
(120, '<p>b</p>', NULL, 29, '2022-04-17 11:55:27', '2022-04-17 11:55:27'),
(121, '<p>b</p>', 'on', 30, '2022-04-17 12:02:29', '2022-04-17 12:02:29'),
(122, '<p>d</p>', NULL, 30, '2022-04-17 12:02:29', '2022-04-17 12:02:29'),
(123, '<p>s</p>', NULL, 30, '2022-04-17 12:02:29', '2022-04-17 12:02:29'),
(124, '<p>e</p>', NULL, 30, '2022-04-17 12:02:29', '2022-04-17 12:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `created_at`, `updated_at`) VALUES
(1, 'English', '2022-04-14 11:06:54', '2022-04-14 11:06:54'),
(2, 'Bengali', '2022-04-14 11:09:02', '2022-04-14 11:09:02'),
(3, 'Biology', '2022-04-14 11:11:36', '2022-04-14 11:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_13_101326_create_courses_table', 2),
(6, '2022_04_13_101812_create_questions_table', 3),
(7, '2022_04_13_111027_create_courses_table', 4),
(8, '2022_04_13_111223_create_questions_table', 5),
(9, '2022_04_13_113754_create_answers_table', 6),
(10, '2022_04_13_114606_create_turorials_table', 7),
(11, '2022_04_13_115132_create_answerdescriptions_table', 8),
(12, '2022_04_13_120055_create_posts_table', 9),
(13, '2022_04_14_174321_create_tutorials_table', 10),
(14, '2022_04_15_112335_create_answerdescriptions_table', 11),
(15, '2022_04_15_113814_create_answers_table', 12),
(16, '2022_04_15_114505_create_answers_table', 13),
(17, '2022_04_15_114931_create_answers_table', 14),
(18, '2022_04_15_115242_create_answers_table', 15),
(19, '2022_04_15_115507_create_answerdescriptions_table', 16);

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
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post`, `status`, `created_at`, `updated_at`) VALUES
(4, '<h3><strong>Update data into database in laravel 8</strong></h3><p>&nbsp;</p><p>In this tutorial, you will be learning how to edit and update data from database using Eloquent Model in Laravel 8.</p><p>So guys, to edit and update data in laravel, you have to create a laravel project, connect your database in <strong>.env file</strong>, then you need to create you Model, Controller and Migration to insert &amp; fetch data in laravel.</p><p><strong>Step 1:</strong> Fetch data from database in&nbsp;<i><strong>index.blade.php</strong></i> file&nbsp;in the following path:&nbsp;<i><strong>resources/views/student/index.blade.php</strong></i></p><p>Let fetch the data in HTML Table to make edit button in file as follows:</p>', 1, '2022-04-17 12:10:36', '2022-04-17 12:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `course_id`, `created_at`, `updated_at`) VALUES
(7, '<p><strong>What is your name?</strong></p>', 1, '2022-04-15 11:15:22', '2022-04-15 11:15:22'),
(9, '<blockquote><p>What is your name?</p></blockquote>', 1, '2022-04-17 07:02:21', '2022-04-17 07:02:21'),
(10, '<p><i><strong>What is your father name?</strong></i></p>', 1, '2022-04-17 07:03:27', '2022-04-17 07:03:27'),
(11, '<blockquote><p>What are you doing?</p></blockquote>', 1, '2022-04-17 07:04:54', '2022-04-17 07:04:54'),
(12, '<h2>Operating system is a ?</h2>', 1, '2022-04-17 07:06:25', '2022-04-17 07:06:25'),
(13, '<p>Database is a ?</p>', 1, '2022-04-17 07:07:42', '2022-04-17 07:07:42'),
(14, '<p>What is web</p>', 1, '2022-04-17 07:08:31', '2022-04-17 07:08:31'),
(15, '<p>What ----- your name?</p>', 1, '2022-04-17 07:09:10', '2022-04-17 07:09:10'),
(16, '<h2>----- cow?</h2>', 1, '2022-04-17 07:09:43', '2022-04-17 07:09:43'),
(17, '<p>sky is -----?</p>', 1, '2022-04-17 07:12:03', '2022-04-17 07:12:03'),
(18, '<p>a</p>', 1, '2022-04-17 07:12:21', '2022-04-17 07:12:21'),
(19, '<p>b</p>', 1, '2022-04-17 07:12:35', '2022-04-17 07:12:35'),
(20, '<p>f</p>', 1, '2022-04-17 07:12:50', '2022-04-17 07:12:50'),
(21, '<p>q</p>', 1, '2022-04-17 07:13:07', '2022-04-17 07:13:07'),
(22, '<p>r</p>', 1, '2022-04-17 07:13:26', '2022-04-17 07:13:26'),
(23, '<p>t</p>', 1, '2022-04-17 07:23:42', '2022-04-17 07:23:42'),
(24, '<p>qerter</p>', 1, '2022-04-17 07:24:00', '2022-04-17 07:24:00'),
(25, '<p>k</p>', 1, '2022-04-17 07:24:15', '2022-04-17 07:24:15'),
(26, '<p>n</p>', 1, '2022-04-17 07:24:28', '2022-04-17 07:24:28'),
(27, '<p>1</p>', 1, '2022-04-17 07:24:56', '2022-04-17 07:24:56'),
(28, '<p>Bengali is&nbsp;</p>', 2, '2022-04-17 11:55:04', '2022-04-17 11:55:04'),
(29, '<p>e</p>', 2, '2022-04-17 11:55:27', '2022-04-17 11:55:27'),
(30, '<p>b</p>', 3, '2022-04-17 12:02:29', '2022-04-17 12:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_path` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumnail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `title`, `video_path`, `thumnail`, `status`, `course_id`, `created_at`, `updated_at`) VALUES
(2, 'দেখানোর জন্য একটি Video', 'storage/videos/ekAM9PjJDq6AFYSB06nabfXGyYdTGE1b7PvWl5gC.mp4', 'storage/thumbnail/8LLim0WxAkxb6REPUjW4o26w5sc0t9Wlhb0833Al.jpg', 0, 3, '2022-04-14 22:06:34', '2022-04-15 22:43:09'),
(5, 'Demo video', 'storage/videos/DaGBCyvGi8Ie1sG97m0HVliFxnzigr96wgtpr1YO.mp4', 'storage/thumbnail/koEoAQEquDXkN8HLTRnkunJE7JSg2PNnBT3NbAmR.jpg', 1, 1, '2022-04-17 13:38:31', '2022-04-17 13:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'masum', 'masumbillacse@gmail.com', NULL, '$2y$10$Kw6Z4kXqToGruOTJrmfjjel.JN/Wi8FsVDy8rYuRz9Jns1VubsQGC', 'storage/user/D0ns3e2fV52WRdAnEOwo7W4KxTBSBoZbeeQLvVpZ.jpg', 1, NULL, '2022-04-13 10:20:34', '2022-04-15 03:48:08'),
(3, 'masum', 'masum@gmail.com', NULL, '$2y$10$whK0c6xORsvPjWNwvIClJ.HQUza7Y/RQgtkCPsXQXBs7gBdUdysVK', 'storage/user/W1rORvbfdCw0GnN6ySHAKwhr5C3LiVsKJY9p2EBy.webp', 3, NULL, '2022-04-14 03:56:55', '2022-04-14 07:29:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answerdescriptions`
--
ALTER TABLE `answerdescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answerdescriptions_question_id_foreign` (`question_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_course_id_foreign` (`course_id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutorials_course_id_foreign` (`course_id`);

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
-- AUTO_INCREMENT for table `answerdescriptions`
--
ALTER TABLE `answerdescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answerdescriptions`
--
ALTER TABLE `answerdescriptions`
  ADD CONSTRAINT `answerdescriptions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD CONSTRAINT `tutorials_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
