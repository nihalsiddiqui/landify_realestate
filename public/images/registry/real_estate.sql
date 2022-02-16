-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 01:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `city_id`, `name`, `email`, `phone`, `status`, `image`, `description`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Talha Maqsood', 'talha@admin.com', '03164331952', 1, 'xperson_3.jpg.pagespeed.ic.H_984h31ut.jpg', NULL, NULL, '$2y$10$5BuD2YowPbA4EQbdRiqv4OBjydYmyF43K8XufGgqkLQtuwcOQmnJG', NULL, '2021-08-05 06:50:21', '2021-10-11 16:56:33'),
(2, NULL, 'anawillaims', 'anawillaims@admin.com', '03204576875', 1, 'xperson_1.jpg.pagespeed.ic.7C7JZaqMVd.jpg', '<p>super-admin</p>\r\n\r\n<p>&nbsp;</p>', NULL, '$2y$10$QnfZ/rFXppI02ozrMe184eGaF.aTZSCvzts4f2eAqTlgDOtIKhXTC', NULL, '2021-08-05 09:08:56', '2021-10-11 16:56:47'),
(3, NULL, 'Faisal', 'faisal@agent.com', '03208526456', 1, '8k-watch-dogs-2-4k-season-pass-wallpaper-preview.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder&nbsp;</p>', NULL, '$2y$10$yivvTDkCypJ4e1UmQpg84OFtJg3ESmaMUk0ZQm5IDdvelR088j2rq', NULL, '2021-08-30 01:39:25', '2021-08-30 01:39:25'),
(4, NULL, 'nihal', 'nihal@agent.com', '03207456856', 1, 'xperson_5.jpg.pagespeed.ic.39yhJ27sgq.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder&nbsp;</p>', NULL, '$2y$10$QsdS30e3BICHH54vjLrfg.WuumsGj3JfjVeAKLxZ6GOjUdI26F11K', NULL, '2021-08-30 01:41:33', '2021-10-11 16:57:00'),
(5, NULL, 'moiz', 'chiri@agent.com', '03456545657', 1, 'fourth.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder&nbsp;</p>', NULL, '$2y$10$hoYVhTOcqp2GR5uVs1os0ONrRK1JXowZZoQHEgwUV3x29jRG9OLHe', NULL, '2021-08-30 01:43:15', '2021-10-21 20:15:52'),
(8, '12', 'junaid', 'junaidagent@gmail.com', '03213348502', 1, 'DSC_7449.JPG', '<p>This is&nbsp;junaid Agent&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae turpis velit. Ut venenatis urna vel odio tempus, quis scelerisque nulla dictum. Aenean vel eros sed sapien vestibulum fringilla sit amet sit amet neque. Mauris sit amet pharetra leo. Ut tortor velit, ultrices non enim a, tempor mollis massa. Integer ipsum diam, auctor quis ornare ut, eleifend molestie ligula. Aliquam erat volutpat. Sed ornare, elit a rutrum elementum, metus nibh lobortis velit, nec bibendum elit ante ut leo. Suspendisse fermentum mi velit, in egestas diam ornare non. Pellentesque ligula odio, pharetra eu ex in, dictum eleifend tortor. Nullam vitae lorem facilisis, efficitur magna non, imperdiet tellus.</p>\r\n\r\n<p>Maecenas ac blandit metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum est et nulla mattis, ac sagittis enim posuere. Aenean urna turpis, ullamcorper vel lobortis eget, imperdiet sit amet lacus. Sed ultrices orci libero, eu blandit lorem lacinia ut. Quisque vel tellus ac tortor sodales efficitur vel eget ipsum. Phasellus rhoncus tincidunt ex sit amet molestie. Suspendisse pharetra, neque at varius facilisis, sem nulla varius leo, sed malesuada nunc risus vel orci. Cras consequat, quam fringilla venenatis bibendum, arcu elit convallis massa, non posuere odio purus et ligula. Suspendisse laoreet nulla a orci tempus, sed vestibulum nunc finibus. Aliquam consectetur ex id ipsum pharetra ullamcorper.</p>\r\n\r\n<p>Integer eget condimentum mi. Proin malesuada egestas magna, non volutpat lorem rhoncus vitae. Maecenas nec fringilla odio. Nullam auctor cursus odio, nec rhoncus ipsum tincidunt sed. Quisque blandit finibus elit quis volutpat. Quisque tortor neque, malesuada at mi et, rhoncus laoreet est. Cras sagittis ligula sem, nec tempor risus porta a. Duis sed dui venenatis, tempus diam sed, scelerisque nulla. Cras id suscipit libero. Sed nunc elit, dapibus at pharetra eu, facilisis et elit. Donec feugiat fringilla lacus, pellentesque convallis neque dapibus suscipit. Proin facilisis vulputate eros, a fermentum sapien aliquam eu.</p>', NULL, '$2y$10$aQP3Hg8GWwLHCh4un4osRudLsdGYNaBxCl5Qyx9SFsnZvwb4TBjgq', NULL, '2021-10-12 15:48:04', '2021-10-12 15:55:34'),
(9, NULL, 'danish', 'danishagent@gmail.com', '03213348502', 1, 'second.jpg', '<p>this danish agent&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae turpis velit. Ut venenatis urna vel odio tempus, quis scelerisque nulla dictum. Aenean vel eros sed sapien vestibulum fringilla sit amet sit amet neque. Mauris sit amet pharetra leo. Ut tortor velit, ultrices non enim a, tempor mollis massa. Integer ipsum diam, auctor quis ornare ut, eleifend molestie ligula. Aliquam erat volutpat. Sed ornare, elit a rutrum elementum, metus nibh lobortis velit, nec bibendum elit ante ut leo. Suspendisse fermentum mi velit, in egestas diam ornare non. Pellentesque ligula odio, pharetra eu ex in, dictum eleifend tortor. Nullam vitae lorem facilisis, efficitur magna non, imperdiet tellus.</p>\r\n\r\n<p>Maecenas ac blandit metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum est et nulla mattis, ac sagittis enim posuere. Aenean urna turpis, ullamcorper vel lobortis eget, imperdiet sit amet lacus. Sed ultrices orci libero, eu blandit lorem lacinia ut. Quisque vel tellus ac tortor sodales efficitur vel eget ipsum. Phasellus rhoncus tincidunt ex sit amet molestie. Suspendisse pharetra, neque at varius facilisis, sem nulla varius leo, sed malesuada nunc risus vel orci. Cras consequat, quam fringilla venenatis bibendum, arcu elit convallis massa, non posuere odio purus et ligula. Suspendisse laoreet nulla a orci tempus, sed vestibulum nunc finibus. Aliquam consectetur ex id ipsum pharetra ullamcorper.</p>', NULL, '$2y$10$4AIG9DRsdofxPPNSYX83gOdkKy0Aw7aUWvjAXhzYjQu48/K/UQNiq', NULL, '2021-10-12 15:56:37', '2021-10-21 20:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`id`, `admin_id`, `user_id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'AC', 'ac', 'this is ac', '2021-08-16 09:20:18', '2021-08-16 09:20:18'),
(2, 1, NULL, 'Refrigerator', 'refrigerator', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(3, 1, NULL, 'Microwave', 'microwave', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(4, 1, NULL, 'Stove', 'stove', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(5, 1, NULL, 'Washing Machine', 'washing-machine', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(6, 1, NULL, 'TV', 'tv', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(7, 1, NULL, 'CD Player', 'cd-player', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(8, 1, NULL, 'Hair Dryer', 'hair-dryer', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(9, 1, NULL, 'Cleaning Service', 'cleaning-service', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(10, 1, NULL, 'Oven', 'oven', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(11, 1, NULL, 'Dishwasher', 'dishwasher', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(12, 1, NULL, 'Dishes', 'dishes', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(13, 1, NULL, 'Satellite', 'satellite', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(14, 1, NULL, 'Telephone', 'telephone', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(15, 1, NULL, 'Towels', 'towels', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(16, 1, NULL, 'Hot Tub', 'hot-tub', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(17, 1, NULL, 'Iron', 'iron', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41'),
(18, 1, NULL, 'Internet', 'internet', NULL, '2021-09-04 12:00:41', '2021-09-04 12:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `book_showing_email`
--

CREATE TABLE `book_showing_email` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preference` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_and_last_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_approved` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favourites` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_views` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shares` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `book_showing_email`
--

INSERT INTO `book_showing_email` (`id`, `firstname`, `lastname`, `email`, `phone_no`, `message`, `preference`, `date`, `time`, `first_and_last_name`, `pre_approved`, `visits`, `favourites`, `photo_views`, `shares`, `created_at`, `updated_at`) VALUES
(3, 'Ahsan', 'iftikhar', 'iftikharahsan94@gmail.com', '03174849114', 'I am Ahsan Iftikhar', 'First Time Buyer', '2022-01-18', 'Morning', 'Ahsan Iftikhar', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-19 08:48:58', '2022-01-19 08:48:58'),
(4, 'Ahsan', 'iftikhar', 'iftikharahsan94@gmail.com', '03174849114', 'i am Ahsan iftikhar', 'Seller', '2022-01-18', 'Morning', 'Ahsan Iftikhar', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-19 09:36:39', '2022-01-19 09:36:39'),
(5, 'Ahsan', 'iftikhar', 'iftikharahsan94@gmail.com', '03174849114', 'i am Ahsan iftikhar', 'Seller', '2022-01-18', 'Morning', 'Ahsan Iftikhar', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-19 09:38:44', '2022-01-19 09:38:44'),
(6, 'Ahsan', 'iftikhar', 'iftikharahsan94@gmail.com', '03174849114', 'i  am ahsan', 'First Time Buyer', '2022-01-11', 'Afternoon', 'Ahsan Iftikhar', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-19 10:42:43', '2022-01-19 10:42:43'),
(7, 'talha', 'Ahmad', 'talha@admin.com', '03174849114', 'I am talha', 'Repeat Buyer', '2022-01-18', 'Morning', 'Talha Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-19 10:50:34', '2022-01-19 10:50:34'),
(8, 'danish', 'Batool', 'danishagent@gmail.com', '03174849114', 'I am Danish', 'First Time Buyer', '2022-01-17', 'Evening', 'Danish Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-19 10:56:17', '2022-01-19 10:56:17'),
(9, 'Talha ahmad', 'Batool', 'talha@admin.com', '03174849114', 'Talha Ahmad', 'Repeat Buyer', '2022-01-17', 'Morning', 'Talha Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-19 11:12:39', '2022-01-19 11:12:39'),
(10, 'Ahsan', 'Batool', 'iftikharahsan94@gmail.com', '03174849114', 'i am ahsan', 'Repeat Buyer', '2022-01-18', 'Morning', 'Ahsan Iftikhar', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:29:13', '2022-01-20 05:29:13'),
(11, 'Ahsan', 'Batool', 'iftikharahsan94@gmail.com', '03174849114', 'i am ahsan', 'Repeat Buyer', '2022-01-18', 'Morning', 'Ahsan Iftikhar', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:31:13', '2022-01-20 05:31:13'),
(12, 'danish', 'Batool', 'danishagent@gmail.com', '03174849114', 'asdadas', 'First Time Buyer', '2022-01-19', 'Morning', 'Danish Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:34:23', '2022-01-20 05:34:23'),
(13, 'danish', 'Batool', 'danishagent@gmail.com', '03174849114', 'asdadas', 'First Time Buyer', '2022-01-19', 'Morning', 'Danish Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:44:21', '2022-01-20 05:44:21'),
(14, 'danish', 'Batool', 'danishagent@gmail.com', '03174849114', 'asdadas', 'First Time Buyer', '2022-01-19', 'Morning', 'Danish Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:44:44', '2022-01-20 05:44:44'),
(15, 'danish', 'Batool', 'danishagent@gmail.com', '03174849114', 'asdadas', 'First Time Buyer', '2022-01-19', 'Morning', 'Danish Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:45:31', '2022-01-20 05:45:31'),
(16, 'Talha ahmad', 'Ahmad', 'talha@admin.com', '03174849114', 'I am Talha Ahmad', 'Repeat Buyer', '2022-01-19', 'Morning', 'Talha Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:50:53', '2022-01-20 05:50:53'),
(17, 'Talha ahmad', 'Ahmad', 'talha@admin.com', '03174849114', 'I am Talha Ahmad', 'Repeat Buyer', '2022-01-19', 'Morning', 'Talha Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:51:16', '2022-01-20 05:51:16'),
(18, 'Talha ahmad', 'Ahmad', 'talha@admin.com', '03174849114', 'I am Talha Ahmad', 'Repeat Buyer', '2022-01-19', 'Morning', 'Talha Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:52:06', '2022-01-20 05:52:06'),
(19, 'nihal', 'Ahmad', 'nihal@user.com', '03174849114', 'nihal', 'Repeat Buyer', '2022-01-19', 'Afternoon', 'Nihal', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:54:19', '2022-01-20 05:54:19'),
(20, 'nihal', 'Ahmad', 'nihal@user.com', '03174849114', 'nihal', 'Repeat Buyer', '2022-01-19', 'Afternoon', 'Nihal', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:54:37', '2022-01-20 05:54:37'),
(21, 'saboor', 'Malik', 'saboor.malik@gmail.com', '03174849114', 'Saboor Malik', 'Repeat Buyer', '2022-01-19', 'Morning', 'saboor', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:58:42', '2022-01-20 05:58:42'),
(22, 'saboor', 'Malik', 'saboor.malik@gmail.com', '03174849114', 'Saboor Malik', 'Repeat Buyer', '2022-01-19', 'Morning', 'saboor', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 05:59:01', '2022-01-20 05:59:01'),
(23, 'farooq', 'Ahmad', 'farooq@gamil.com', '03174849114', 'i am farooq', 'Seller', '2022-01-19', 'Morning', 'Farooq', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 06:04:18', '2022-01-20 06:04:18'),
(24, 'farooq', 'Ahmad', 'farooq@gamil.com', '03174849114', 'i am farooq', 'Seller', '2022-01-19', 'Morning', 'Farooq', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 06:05:27', '2022-01-20 06:05:27'),
(25, 'farooq', 'Ahmad', 'farooq@gamil.com', '03174849114', 'i am farooq', 'Seller', '2022-01-19', 'Morning', 'Farooq', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 06:05:44', '2022-01-20 06:05:44'),
(26, 'farooq', 'Ahmad', 'farooq@gamil.com', '03174849114', 'i am farooq', 'Seller', '2022-01-19', 'Morning', 'Farooq', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 06:06:03', '2022-01-20 06:06:03'),
(27, 'farooq', 'Ahmad', 'farooq@gamil.com', '03174849114', 'i am farooq', 'Seller', '2022-01-19', 'Morning', 'Farooq', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 06:07:47', '2022-01-20 06:07:47'),
(28, 'farooq', 'Ahmad', 'farooq@gamil.com', '03174849114', 'i am farooq', 'Seller', '2022-01-19', 'Morning', 'Farooq', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 06:09:28', '2022-01-20 06:09:28'),
(29, 'farooq', 'Ahmad', 'farooq@gamil.com', '03174849114', 'i am farooq', 'Seller', '2022-01-19', 'Morning', 'Farooq', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 06:09:43', '2022-01-20 06:09:43'),
(30, 'farooq', 'Ahmad', 'farooq@gamil.com', '03174849114', 'i am farooq', 'Seller', '2022-01-19', 'Morning', 'Farooq', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 06:10:03', '2022-01-20 06:10:03'),
(31, 'nihal', 'Ahmad', 'nihal@user.com', '03174849114', 'I am Nihal', 'Repeat Buyer', '2022-01-19', 'Afternoon', 'Nihal', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 12:14:09', '2022-01-20 12:14:09'),
(32, 'Ahsan', 'iftikhar', 'ahsaniftikhar@gmail.com', '03174849114', 'I am Ahsan', 'First Time Buyer', '2022-01-19', 'Morning', 'Ahsan Iftikhar', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 12:16:56', '2022-01-20 12:16:56'),
(33, 'danish', 'Ahmad', 'danishagent@gmail.com', '03174849114', 'i am Danish', 'Repeat Buyer', '2022-01-19', 'Morning', 'Danish Ahmad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 12:26:54', '2022-01-20 12:26:54'),
(34, 'Ahsan', 'iftikhar', 'iftikharahsan94@gmail.com', '03174849114', 'i am ahsan', 'Repeat Buyer', '2022-01-19', 'Morning', 'Ahsan Iftikhar', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-20 12:28:54', '2022-01-20 12:28:54'),
(35, NULL, NULL, NULL, NULL, NULL, 'First Time Buyer', '2022-01-20', 'Evening', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 07:48:13', '2022-01-21 07:48:13'),
(36, 'Muhammad Ahmad', 'Ali', 'Mian14603@gmail.com', '03071430054', 'dsads', 'First Time Buyer', '2022-01-20', 'Evening', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 07:51:50', '2022-01-21 07:51:50'),
(37, 'Muhammad Ahmad', 'Ali', 'mian14603@gmail.com', '03071430054', 'dsada', 'First Time Buyer', '2022-01-06', 'Morning', NULL, 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-21 07:52:41', '2022-01-21 07:52:41'),
(38, 'Muhammad Ahmad', 'Ali', 'mian14603@gmail.com', '03071430054', 'dsada', 'First Time Buyer', '2022-01-06', 'Morning', NULL, 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-21 07:53:36', '2022-01-21 07:53:36'),
(39, 'Muhammad Ahmad', 'Ali', 'mian14603@gmail.com', '03071430054', 'dsd', 'First Time Buyer', '2022-01-07', 'Any Time', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 07:54:45', '2022-01-21 07:54:45'),
(40, 'Muhammad Ahmad', 'Ali', 'mian14603@gmail.com', '03071430054', 'zsdasd', 'First Time Buyer', '2022-01-21', 'Morning', 'asdsad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-21 07:58:25', '2022-01-21 07:58:25'),
(41, 'Muhammad Ahmad', 'Ali', 'Mian14603@gmail.com', '03071430054', 'sdfsad', 'Seller', '2022-01-21', 'Morning', 'asdsad', 'pre_approved', NULL, NULL, NULL, NULL, '2022-01-21 08:01:18', '2022-01-21 08:01:18'),
(42, 'ionic', 'Ali', 'mian14603@gmail.com', '03071430054', 'sasa', NULL, '2022-02-04', 'Any Time', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 08:02:32', '2022-01-21 08:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_property` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `admin_id`, `name`, `slug`, `for_property`, `created_at`, `updated_at`, `parent_id`) VALUES
(1, NULL, 'commercial For Sale', 'commercial for sale', 1, '2021-08-05 06:50:21', '2021-11-03 23:19:04', NULL),
(2, NULL, 'Residential For Sale', 'residential for sale', 1, '2021-08-05 06:50:21', '2021-11-03 23:19:32', NULL),
(3, NULL, 'commercial For Rent', 'commercial for rent', 1, '2021-08-05 06:50:21', '2021-11-08 16:54:11', NULL),
(10, 1, 'Residential For Rent', 'residential for rent', 1, '2021-10-13 16:09:37', '2021-11-08 16:55:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`id`, `category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '2021-09-01 05:38:52', '2021-09-01 05:38:52'),
(2, NULL, 2, '2021-09-06 07:15:17', '2021-09-06 07:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `admin_id`, `name`, `description`, `state_id`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Lahore', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(4, NULL, 'Faisalabad', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(5, NULL, 'Multan', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(6, NULL, 'Islamabad', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(7, NULL, 'Rawalpindi', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(8, NULL, 'Murree', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(9, NULL, 'Gujranwala', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(10, NULL, 'Sheikhpura', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(11, NULL, 'Sialkot', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(12, NULL, 'Bahawalpur', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(13, NULL, 'Narowal', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(14, NULL, 'Sargodha', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(15, NULL, 'Gujrat', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(16, NULL, 'Jhang', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(17, NULL, 'Kasur', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(18, NULL, 'Okara', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(19, NULL, 'Rahim Yar Khan', NULL, 4, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(20, NULL, 'pashawar', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(21, NULL, 'Mardan', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(22, NULL, 'Kohat', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(23, NULL, 'Abbottabad', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(24, NULL, 'Bannu', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(25, NULL, 'Dera Ismail Khan', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(26, NULL, 'Manshera', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(27, NULL, 'Nowshera', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(28, NULL, 'Swabi', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(29, NULL, 'Chitral', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(30, NULL, 'Swat', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(31, NULL, 'Mingora', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(32, NULL, 'Swabi', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(33, NULL, 'Naran', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(34, NULL, 'Nathiagali', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(35, NULL, 'Balakot', NULL, 5, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(36, NULL, 'Muzaffarabad', NULL, 6, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(37, NULL, 'Bhimber', NULL, 6, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(38, NULL, 'Kotli', NULL, 6, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(39, NULL, 'Rawalkot', NULL, 6, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(40, NULL, 'Hajira', NULL, 6, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(41, NULL, 'Dhirkot', NULL, 6, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(42, NULL, 'Sharda', NULL, 6, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(43, NULL, 'Leepa', NULL, 6, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(44, NULL, 'Karachi', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(45, NULL, 'Hyderabad', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(46, NULL, 'Sukkur', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(47, NULL, 'Larkana', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(48, NULL, 'Khairpur', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(49, NULL, 'Thatta', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(50, NULL, 'Mirpurkhas', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(51, NULL, 'Badin', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(52, NULL, 'RCW Rohri', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(53, NULL, 'Ghotki', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(54, NULL, 'Sanghar', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(55, NULL, 'Nawabshah', NULL, 7, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(56, NULL, 'Quetta', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(57, NULL, 'Gawadar', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(58, NULL, 'Turbat', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(59, NULL, 'Chaman', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(60, NULL, 'Khuzdar', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(61, NULL, 'Sibi', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(62, NULL, 'Dera Allah Yar', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(63, NULL, 'Loralai', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(64, NULL, 'Hub', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(65, NULL, 'Surab', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(66, NULL, 'Ziarat', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(67, NULL, 'Harnai', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(68, NULL, 'Gaddani', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(69, NULL, 'Awaran', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(70, NULL, 'Kohlu', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(71, NULL, 'Muslim Bagh', NULL, 8, '2021-09-04 12:00:55', '2021-09-04 12:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town_id` bigint(20) UNSIGNED NOT NULL,
  `address_line_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `town_id`, `address_line_1`, `address_line_2`, `company_role_id`, `created_at`, `updated_at`) VALUES
(1, 'ithad', 'sdf', 1, 'lahore pakistan', 'ww', 1, '2021-08-05 07:22:28', '2021-08-05 07:22:28'),
(2, 'usman builders', 'usman builders', 1, 'lahore pakistan', '33', 1, '2021-08-05 07:24:04', '2021-08-05 07:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `company_projects`
--

CREATE TABLE `company_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `company_projects`
--

INSERT INTO `company_projects` (`id`, `company_id`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_roles`
--

CREATE TABLE `company_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `company_roles`
--

INSERT INTO `company_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'construction', 'construction', '2021-08-05 07:21:52', '2021-08-05 07:21:52'),
(2, 'designer', 'designer', '2021-08-05 07:22:51', '2021-08-05 07:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Pakistan', NULL, '2021-09-04 12:00:54', '2021-09-04 12:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `admin_id`, `user_id`, `type`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Clinics pharmacy', 'pharmacy', '2021-08-05 07:08:24', '2021-08-20 09:34:45'),
(2, 1, NULL, 'Gym', 'gym', '2021-08-05 07:08:41', '2021-08-20 09:35:13'),
(3, 1, NULL, 'Gillani Park', 'park', '2021-08-05 07:08:55', '2021-08-20 09:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `admin_id`, `user_id`, `name`, `slug`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'gurage', 'gurage', 3, '2021-08-05 07:07:07', '2021-08-05 07:07:07'),
(2, 1, NULL, 'swimming pool', 'swimming-pool', 2, '2021-08-05 07:07:40', '2021-08-05 07:07:40'),
(3, 1, NULL, 'Loan', 'loan', 1, '2021-08-05 07:08:02', '2021-08-05 07:08:02'),
(4, 1, NULL, 'Pool', 'pool', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(5, 1, NULL, 'Heating System', 'heating-system', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(6, 1, NULL, 'Jacuzzi', 'jacuzzi', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(7, 1, NULL, 'Cooling System', 'cooling-system', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(8, 1, NULL, 'Elevator', 'elevator', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(9, 1, NULL, 'Garden', 'garden', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(10, 1, NULL, 'Balcony', 'balcony', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(11, 1, NULL, 'Basement', 'basement', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(12, 1, NULL, 'Fence', 'fence', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(13, 1, NULL, 'View', 'view', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(14, 1, NULL, 'Pet Policy', 'pet-policy', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(15, 1, NULL, 'Kitchen', 'kitchen', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(16, 1, NULL, 'Steam', 'steam', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(17, 1, NULL, 'Gymnasium', 'gymnasium', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(18, 1, NULL, 'Fireplace', 'fireplace', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(19, 1, NULL, 'Security', 'security', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(20, 1, NULL, 'Patio', 'patio', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(21, 1, NULL, 'Roof Deck', 'roof-deck', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(22, 1, NULL, 'High Ceiling', 'high-ceiling', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(23, 1, NULL, 'Storage', 'storage', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(24, 1, NULL, 'Parking', 'parking', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(25, 1, NULL, 'Furnished', 'furnished', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(26, 1, NULL, 'Air Conditioning', 'air-conditioning', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(27, 1, NULL, 'Lot Irregularities', 'lot-irregularities', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(28, 1, NULL, 'Water', 'water', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(29, 1, NULL, 'Exterior', 'exterior', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(30, 1, NULL, 'Garage Type', 'garage-type', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(31, 1, NULL, 'Water Included', 'water-included', NULL, '2021-09-04 12:00:23', '2021-09-04 12:00:23'),
(34, 1, NULL, 'Electricity', 'electricity', 3, '2021-10-13 14:46:58', '2021-10-13 14:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_id` bigint(20) UNSIGNED NOT NULL,
  `price` double UNSIGNED DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide_address` tinyint(1) DEFAULT 0,
  `no_of_rooms` int(11) DEFAULT NULL,
  `no_of_beds` int(11) DEFAULT NULL,
  `no_of_baths` int(11) DEFAULT NULL,
  `no_of_kitchens` int(11) DEFAULT NULL,
  `no_of_living_rooms` int(11) DEFAULT NULL,
  `no_of_dinning_rooms` int(11) DEFAULT NULL,
  `no_of_laundry_rooms` int(11) DEFAULT NULL,
  `no_of_garages` int(11) DEFAULT NULL,
  `square_feats` double DEFAULT NULL,
  `area_type` enum('marla','kanal','acre','gaj','murabba') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `built_year` date DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `no_of_floors` int(11) DEFAULT NULL,
  `amount_per_square_feet` double DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_per_square_feet` double DEFAULT NULL,
  `installment_per_month` double DEFAULT NULL,
  `built_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose` enum('sale','rent','for_lease','mortgage','sold','listing_only') COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `constructions_status` enum('foundation','grey_structure','under_construction','semi_finished','constructed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registry_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registry` enum('yes','no','under_process') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mutation` enum('yes','no','under_process') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npls_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_approval` enum('yes','no','under_process') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `hot_offer` tinyint(1) NOT NULL DEFAULT 0,
  `open_house` tinyint(1) NOT NULL DEFAULT 0,
  `foreclosure` tinyint(1) NOT NULL DEFAULT 0,
  `count` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `admin_id`, `sub_category_id`, `user_id`, `name`, `slug`, `status`, `town_id`, `price`, `address`, `address_two`, `hide_address`, `no_of_rooms`, `no_of_beds`, `no_of_baths`, `no_of_kitchens`, `no_of_living_rooms`, `no_of_dinning_rooms`, `no_of_laundry_rooms`, `no_of_garages`, `square_feats`, `area_type`, `summary`, `built_year`, `postal_code`, `latitude`, `longitude`, `no_of_floors`, `amount_per_square_feet`, `thumbnail`, `images`, `cost_per_square_feet`, `installment_per_month`, `built_style`, `purpose`, `listing_source`, `constructions_status`, `description`, `registry_file`, `registry`, `mutation`, `npls_number`, `city_approval`, `video_description`, `video_title`, `video_link`, `meta_tag`, `featured`, `hot_offer`, `open_house`, `foreclosure`, `count`, `created_at`, `updated_at`) VALUES
(31, 1, NULL, NULL, 'liberty', 'liberty', 'Active', 2, 80000000, 'Lahore, Pakistan', NULL, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 'marla', 'this is Pricing Area', '2021-12-22', NULL, 31.5203696, 74.35874729999999, 2, NULL, 'images/thumbnail/join.jpg', '\"[]\"', NULL, NULL, '2', 'sale', '2', 'foundation', 'liberty', NULL, 'yes', 'yes', 'IS2088', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 322, '2021-12-29 12:46:40', '2022-01-21 08:01:24'),
(32, 1, NULL, NULL, 'emporium mall', 'mall', 'Active', 3, 234567, 'Lahore, Pakistan', NULL, 0, 3, 3, 3, 3, 3, 3, 3, 3, 4, 'marla', 'dsg', '2021-12-29', 5400, 31.5203696, 74.35874729999999, 3, NULL, 'images/thumbnail/4.jpg', '\"[\\\"\\\\\\/images\\\\\\/thumbnail\\\\\\/2.jpg\\\"]\"', NULL, NULL, 'lvl', 'rent', '3', 'foundation', 'sdfd dfd df', 'images/registry/2.jpg', 'yes', 'yes', 'LA7085', NULL, 'loremipsum', 'real estate', 'https://www.youtube.com/watch?v=tAzfH3CVXhQ', 'sff', 0, 1, 0, 0, 3, '2021-12-30 12:25:31', '2022-01-21 08:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `listing_appliances`
--

CREATE TABLE `listing_appliances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `count` bigint(20) NOT NULL DEFAULT 1,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `appliance_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `listing_appliances`
--

INSERT INTO `listing_appliances` (`id`, `count`, `description`, `listing_id`, `appliance_id`, `created_at`, `updated_at`) VALUES
(66, 2, 'Appliance', 31, 2, '2021-12-29 12:46:41', '2021-12-29 12:46:41'),
(67, 3, 'sdfd dfd df', 32, 1, '2021-12-30 12:25:31', '2021-12-30 12:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `listing_category`
--

CREATE TABLE `listing_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `listing_category`
--

INSERT INTO `listing_category` (`id`, `listing_id`, `category_id`, `created_at`, `updated_at`) VALUES
(125, 31, 2, '2021-12-29 12:46:40', '2021-12-29 12:46:40'),
(126, 32, 1, '2021-12-30 12:25:31', '2021-12-30 12:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `listing_facilities`
--

CREATE TABLE `listing_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` double DEFAULT NULL,
  `min_grade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_grade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `listing_facilities`
--

INSERT INTO `listing_facilities` (`id`, `name`, `distance`, `min_grade`, `max_grade`, `rating`, `lng`, `lat`, `map_location`, `listing_id`, `facility_id`, `created_at`, `updated_at`) VALUES
(97, 'liberty', 2, '231', '12323', '2', '74.35874729999999', '31.5203696', 'Lahore, Pakistan', 31, 2, '2021-12-29 12:46:40', '2021-12-29 12:46:40'),
(98, '3', 3, '2', '3', '2', '74.30873869999999', '31.5438442', 'clínica', 32, 1, '2021-12-30 12:25:31', '2021-12-30 12:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `listing_features`
--

CREATE TABLE `listing_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `count` bigint(20) NOT NULL DEFAULT 1,
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `listing_features`
--

INSERT INTO `listing_features` (`id`, `count`, `listing_id`, `feature_id`, `created_at`, `updated_at`) VALUES
(125, 2, 31, 3, '2021-12-29 12:46:40', '2021-12-29 12:46:40'),
(126, 3, 32, 1, '2021-12-30 12:25:31', '2021-12-30 12:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_10_100526_create_admins_table', 1),
(5, '2021_06_10_101526_create_tags_table', 1),
(6, '2021_06_10_101550_create_categories_table', 1),
(7, '2021_06_10_101600_create_posts_table', 1),
(8, '2021_06_10_101700_create_category_posts_table', 1),
(9, '2021_06_10_101800_create_post_tags_table', 1),
(10, '2021_06_10_131203_create_countries_table', 1),
(11, '2021_06_10_131516_create_states_table', 1),
(12, '2021_06_10_131519_create_cities_table', 1),
(13, '2021_06_10_131526_create_towns_table', 1),
(14, '2021_06_10_131602_create_company_roles_table', 1),
(15, '2021_06_10_131611_create_companies_table', 1),
(16, '2021_06_10_131636_create_projects_table', 1),
(17, '2021_06_10_131637_create_company_projects_table', 1),
(18, '2021_06_10_131638_create_project_types_table', 1),
(19, '2021_06_10_131738_create_properties_table', 1),
(20, '2021_06_10_131739_create_property_projects_table', 1),
(21, '2021_06_10_132835_create_listings_table', 1),
(22, '2021_06_10_132920_create_property_listings_table', 1),
(23, '2021_06_10_132939_create_features_table', 1),
(24, '2021_06_10_132955_create_listing_features_table', 1),
(25, '2021_06_10_133022_create_facilities_table', 1),
(26, '2021_06_10_133129_create_listing_facilities_table', 1),
(27, '2021_06_10_170633_create_property_features_table', 1),
(28, '2021_06_10_170644_create_property_facilities_table', 1),
(29, '2021_06_10_171310_add_new_recursive_relation_column_to_categories_table', 1),
(30, '2021_07_13_144312_create_listing_category_table', 1),
(31, '2021_07_17_125457_create_permission_tables', 1),
(32, '2021_07_26_103830_add_registry_to_listings_table', 1),
(33, '2021_07_29_103627_add_project_type_to_projects_table', 1),
(34, '2021_07_30_132411_add_admin_id_to_features_table', 1),
(35, '2021_07_30_132426_add_admin_id_to_facilities_table', 1),
(36, '2021_07_30_140421_add_admin_id_to_listings_table', 1),
(37, '2021_07_31_131007_add_admin_id_to_properties_table', 1),
(38, '2021_07_31_133500_add_admin_id_to_cities_table', 1),
(39, '2021_07_31_133616_add_admin_id_to_towns_table', 1),
(40, '2021_07_31_154621_add_admin_id_to_categories_table', 1),
(41, '2021_07_31_154630_add_admin_id_to_tags_table', 1),
(42, '2021_08_06_143424_add_images_to_listings_table', 2),
(43, '2021_08_10_132758_add_lat_long_to_facilities_table', 3),
(44, '2021_08_11_143959_add_mutation_to_listings_table', 3),
(45, '2021_08_11_144212_add_npls_number_to_listings_table', 3),
(46, '2021_08_11_144249_add_video_to_listings_table', 3),
(47, '2021_08_11_164003_add_meta_tag_to_listings_table', 3),
(48, '2021_08_13_122548_add_hide_address_to_listings_table', 4),
(49, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(50, '2021_08_12_135802_create_appliances_table', 5),
(51, '2021_08_12_140601_create_listing_appliances_table', 5),
(52, '2021_08_13_140446_add_admin_id_to_appliances_table', 5),
(53, '2021_08_16_151056_add_city_approval_to_listings_table', 6),
(54, '2021_08_20_101206_add_user_id_to_listings_table', 7),
(55, '2021_08_20_125820_add_user_id_to_facilities_table', 7),
(56, '2021_08_20_160515_add_user_id_to_features_table', 7),
(57, '2021_08_20_163018_add_count_to_listings_table', 7),
(58, '2021_08_20_163031_add_count_to_projects_table', 7),
(59, '2021_08_20_163045_add_count_to_properties_table', 7),
(60, '2021_08_20_170301_add_user_id_to_appliances_table', 7),
(61, '2021_08_23_130714_remove_lat_lng_from_facilities_table', 8),
(62, '2021_08_23_130758_add_lat_lng_to_listing_facilities_table', 8),
(63, '2021_08_26_124732_add_phone_to_users_table', 8),
(64, '2021_08_26_130643_add_status_to_users_table', 8),
(65, '2021_08_26_130818_add_image_to_users_table', 8),
(66, '2021_08_26_130843_add_description_to_users_table', 8),
(67, '2021_09_04_120535_add_area_type_to_listings_table', 9),
(68, '2021_09_06_105131_add_specialities_to_listings_table', 10),
(69, '2021_10_01_010924_add_city_id_to_admin_table', 11),
(70, '2021_10_29_072045_create_sub_categories_table', 12),
(71, '2021_10_30_075958_add_sub_category_id_to_listings_table', 13),
(72, '2021_12_30_100236_add_address_two_to_listings_table', 13),
(76, '2022_01_14_022547_create_book_showing_email_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\admin', 1),
(2, 'App\\Models\\admin', 2),
(2, 'App\\Models\\admin', 3),
(2, 'App\\Models\\admin', 4),
(2, 'App\\Models\\admin', 5),
(2, 'App\\Models\\admin', 8),
(2, 'App\\Models\\admin', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'post-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(2, 'post-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(3, 'post-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(4, 'post-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(5, 'category-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(6, 'category-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(7, 'category-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(8, 'category-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(9, 'tag-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(10, 'tag-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(11, 'tag-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(12, 'tag-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(13, 'user-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(14, 'user-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(15, 'user-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(16, 'user-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(17, 'role-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(18, 'role-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(19, 'role-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(20, 'role-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(21, 'country-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(22, 'country-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(23, 'country-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(24, 'country-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(25, 'state-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(26, 'state-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(27, 'state-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(28, 'state-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(29, 'city-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(30, 'city-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(31, 'city-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(32, 'city-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(33, 'town-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(34, 'town-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(35, 'town-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(36, 'town-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(37, 'company-role-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(38, 'company-role-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(39, 'company-role-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(40, 'company-role-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(41, 'company-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(42, 'company-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(43, 'company-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(44, 'company-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(45, 'project-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(46, 'project-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(47, 'project-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(48, 'project-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(49, 'project-type-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(50, 'project-type-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(51, 'project-type-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(52, 'project-type-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(53, 'property-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(54, 'property-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(55, 'property-edit', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(56, 'property-delete', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(57, 'listing-list', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(58, 'listing-create', 'admin', '2021-08-05 06:50:20', '2021-08-05 06:50:20'),
(59, 'listing-edit', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(60, 'listing-delete', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(61, 'facility-list', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(62, 'facility-create', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(63, 'facility-edit', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(64, 'facility-delete', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(65, 'feature-list', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(66, 'feature-create', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(67, 'feature-edit', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(68, 'feature-delete', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(69, 'subcategory-list', 'admin', '2021-11-03 15:49:46', '2021-11-03 15:49:46'),
(70, 'subcategory-create', 'admin', '2021-11-03 15:49:46', '2021-11-03 15:49:46'),
(71, 'subcategory-edit', 'admin', '2021-11-03 15:49:46', '2021-11-03 15:49:46'),
(72, 'subcategory-delete', 'admin', '2021-11-03 15:49:47', '2021-11-03 15:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `posted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `body`, `image`, `status`, `like`, `dislike`, `posted_by`, `created_at`, `updated_at`) VALUES
(2, 'T4post547', 'T4post547', 'post@slug', '<p><strong>Lorem ipsum dolor </strong>sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. Non est ista, inquam, Piso, magna dissensio. Quae duo sunt, unum facit. Equidem etiam Epicurum, in <strong>physicis </strong>quidem, Democriteum puto. Illa tamen simplicia, vestra versuta.&nbsp;</p>\r\n\r\n<p>Cyrenaici quidem non <strong>recusant</strong>; Haec dicuntur fortasse ieiunius; Sed fortuna fortis; Aliter homines, aliter philosophos loqui putas oportere? Contineo me ab exemplis. Etiam beatissimum?</p>', 'download.png', 1, NULL, NULL, 1, '2021-09-06 07:15:17', '2021-10-11 17:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, '2021-09-01 05:38:52', '2021-09-01 05:38:52'),
(2, 2, 2, '2021-09-06 07:15:17', '2021-09-06 07:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_type_id`, `name`, `slug`, `start_date`, `end_date`, `description`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, 'npls atlas', 'npls-atlas', '2021-08-05', '2021-08-12', 'dfdfg', NULL, '2021-08-05 07:26:10', '2021-08-05 07:26:10'),
(2, 1, 'npls nature', 'npls-nature', '2021-08-12', '2021-08-31', 'wdwfr', NULL, '2021-08-05 07:27:59', '2021-08-05 07:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `project_property`
--

CREATE TABLE `project_property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `project_property`
--

INSERT INTO `project_property` (`id`, `property_id`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-08-05 07:29:24', '2021-08-05 07:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `project_types`
--

CREATE TABLE `project_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `project_types`
--

INSERT INTO `project_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'construction', 'the state builders', '2021-08-05 07:02:02', '2021-08-05 07:02:02'),
(2, 'construction', 'wew', '2021-08-05 07:28:25', '2021-08-05 07:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_floors` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_price` double DEFAULT NULL,
  `max_price` double DEFAULT NULL,
  `address_line_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `radius` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'for storing the area in google maps of the property',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `town_id` bigint(20) UNSIGNED NOT NULL,
  `count` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `admin_id`, `title`, `slug`, `no_of_floors`, `description`, `min_price`, `max_price`, `address_line_1`, `address_line_2`, `latitude`, `longitude`, `radius`, `category_id`, `sub_category_id`, `town_id`, `count`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'avenu', 'avenu', 2, 'dwdwd', 32, 23, 'dha phase 6', '3e', 3, 3, '2', 1, NULL, 1, NULL, 1, NULL, '2021-08-05 07:29:24', '2021-08-05 07:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `property_facilities`
--

CREATE TABLE `property_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE `property_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `property_listings`
--

CREATE TABLE `property_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `property_listings`
--

INSERT INTO `property_listings` (`id`, `property_id`, `listing_id`, `created_at`, `updated_at`) VALUES
(27, 1, 31, NULL, NULL),
(28, 1, 32, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21'),
(2, 'agent', 'admin', '2021-08-05 06:50:21', '2021-08-05 06:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `description`, `country_id`, `created_at`, `updated_at`) VALUES
(4, 'Punjab', NULL, 3, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(5, 'KPK', NULL, 3, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(6, 'Kashmir', NULL, 3, '2021-09-04 12:00:54', '2021-09-04 12:00:54'),
(7, 'Sindh', NULL, 3, '2021-09-04 12:00:55', '2021-09-04 12:00:55'),
(8, 'Blochistan', NULL, 3, '2021-09-04 12:00:55', '2021-09-04 12:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(45, 'Any', 'Any', 2, '2021-11-03 22:43:06', '2021-11-08 16:56:48'),
(46, 'Residential', 'Residential', 2, '2021-11-03 22:43:06', '2021-11-08 16:56:55'),
(47, 'Apartment/Condo', 'Apartment/Condo', 2, '2021-11-03 22:43:06', '2021-11-08 16:57:00'),
(48, 'House', 'House', 2, '2021-11-03 22:43:07', '2021-11-08 16:57:07'),
(49, 'Farmhouse', 'Farmhouse', 2, '2021-11-03 22:43:07', '2021-11-08 16:57:14'),
(50, 'Parking', 'Parking', 2, '2021-11-03 22:43:07', '2021-11-08 16:57:22'),
(51, 'Plot/Vacant Land', 'Plot/Vacant Land', 2, '2021-11-03 22:43:07', '2021-11-08 16:57:29'),
(52, 'Plot file/Form', 'Plot file/Form', 2, '2021-11-03 22:43:07', '2021-11-08 16:57:37'),
(53, 'Other', 'Other', 2, '2021-11-03 22:43:07', '2021-11-08 16:57:45'),
(54, 'All commercial', 'All commercial', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(55, 'Business', 'Business', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(56, 'Retail/Shop', 'Retail/Shop', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(57, 'Office', 'Office', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(58, 'Agriculture', 'Agriculture', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(59, 'Hospitality', 'Hospitality', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(60, 'Institutional', 'Institutional', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(61, 'All Residential', 'All Residential', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(62, 'Upper Unit', 'Upper Unit', 1, '2021-11-03 22:43:08', '2021-11-03 22:43:08'),
(63, 'Lower Unit', 'Lower Unit', 1, '2021-11-03 22:43:09', '2021-11-03 22:43:09'),
(64, 'Room', 'Room', 1, '2021-11-03 22:43:09', '2021-11-03 22:43:09'),
(65, 'Recreational', 'Recreational', 1, '2021-11-03 22:43:09', '2021-11-03 22:43:09'),
(66, 'Agricultural', 'Agricultural', 1, '2021-11-03 22:43:09', '2021-11-03 22:43:09'),
(67, 'Industrial', 'Industrial', 1, '2021-11-03 22:43:09', '2021-11-03 22:43:09'),
(68, 'Recrational', 'Recrational', 1, '2021-11-03 22:43:09', '2021-11-03 22:43:09'),
(69, 'Archietecture and Floor plan', 'ArchietectureandFloor plan', 2, '2021-12-30 12:06:32', '2021-12-30 12:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `for_property` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `admin_id`, `name`, `slug`, `for_property`, `created_at`, `updated_at`) VALUES
(1, 1, 'designer', 'designer', 1, '2021-08-05 06:56:05', '2021-08-05 06:56:05'),
(2, 1, 'posttag', 'posttag@slug', 0, '2021-09-01 05:36:50', '2021-09-01 05:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `admin_id`, `name`, `description`, `latitude`, `longitude`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'harbansbura', 'harbanspura', 1112, 1113, 3, '2021-08-05 07:00:28', '2021-09-04 12:03:08'),
(2, 1, 'Bahria Town', 'Bahria Town', 2222, 3333, 6, '2021-08-05 07:01:16', '2021-10-28 22:47:38'),
(3, 1, 'mughalpura', 'etert', 3, 3, 3, '2021-12-30 12:15:21', '2021-12-30 12:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `status`, `image`, `description`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nihal', 'nihal@user.com', NULL, 0, NULL, NULL, NULL, '$2y$10$ZLtKSN0Mm7/8fXx4WrBEk.CPm4hE8ZEZ/2GrgI/Uc.o7C2/ec1VKm', NULL, '2021-08-20 13:09:15', '2021-08-20 13:09:15'),
(2, 'Ahsan', 'ahsan@admin.com', NULL, 0, NULL, NULL, NULL, '$2y$10$XJdwyChNvLmnRGnDxR.5F.5ds2Nu.jw9K6ZFEdqABpp8b0bQHWE5m', NULL, '2021-09-01 08:12:46', '2021-09-01 08:12:46'),
(3, 'talha', 'talhauser@gmail.com', NULL, 0, NULL, NULL, NULL, '$2y$10$nw5Bg201aVQWoMHSUOA0QOfY9x1LXmE92ZZGhqdPQ7XurnFHr5P5i', NULL, '2021-09-02 07:55:49', '2021-09-02 07:55:49'),
(4, 'Talha User', 'talha@admin.com', '03071430054', 0, NULL, '<p>dssfd</p>', '2021-10-14 16:21:01', '$2y$10$3Jij4Rmx8sJQpqrNVi1Trui.leY5bA1Gzeb/OOewEDS0pnIMjzEYi', 'F7Uo2QryhY5PujL0Hk4ye7dnPpwUhuxJuzSeosNTRyneybsTbDYzHBI105rq', '2021-09-02 08:32:03', '2022-01-28 09:38:13'),
(5, 'danish', 'danishagent@gmail.com', NULL, 0, NULL, NULL, '2021-10-11 17:53:49', '$2y$10$c4nw2gaf6prN1seTdB2UROkNgmBEwDhDHd6j4GAS/9pj0DRmvSoba', NULL, '2021-10-11 17:22:19', '2021-10-11 17:53:49'),
(6, 'tahmoor', 'tahmoorUser@gmail.com', NULL, 0, NULL, NULL, '2021-10-12 15:43:57', '$2y$10$waLlZGsmLDLFbzE18oLaL.V5XVKl8K83VBRNHuSVHdEpxJisJmEge', NULL, '2021-10-12 15:43:35', '2021-10-12 15:43:57'),
(7, 'Ahmad', 'ahmad1122@gmail.com', NULL, 0, NULL, NULL, '2021-12-28 05:13:38', '$2y$10$o.GEmxsrHXZ58lif4Zh4eeptQOy/ZvWqiHGZB6AI.LP1V6bt7i0zG', '1HSxxInlTVVJQTNq4YfPW0zKtvEEbSQCYF2rDlytMnxBVClCWcN8366Rkfru', '2021-12-28 05:11:48', '2021-12-28 05:13:38'),
(8, 'Bilal', 'bilal@gmail.com', NULL, 0, NULL, NULL, '2021-12-28 05:21:10', '$2y$10$xfnN83Z9oisCKfeTenFdb.H0erU.LB5Yb0bg4e495kHh09TTtumyq', 'DJdfDMxJljjW6qlMGQmIg8QKU3YWMOMB4EmhPV2Mb7XK5iYcWA1mADfvBOCN', '2021-12-28 05:15:51', '2021-12-28 05:21:10');

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
-- Indexes for table `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appliances_slug_unique` (`slug`),
  ADD KEY `appliances_admin_id_index` (`admin_id`),
  ADD KEY `appliances_user_id_index` (`user_id`);

--
-- Indexes for table `book_showing_email`
--
ALTER TABLE `book_showing_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_index` (`parent_id`),
  ADD KEY `categories_admin_id_index` (`admin_id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_posts_category_id_index` (`category_id`),
  ADD KEY `category_posts_post_id_index` (`post_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_index` (`state_id`),
  ADD KEY `cities_admin_id_index` (`admin_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_town_id_index` (`town_id`),
  ADD KEY `companies_company_role_id_index` (`company_role_id`);

--
-- Indexes for table `company_projects`
--
ALTER TABLE `company_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_projects_company_id_index` (`company_id`),
  ADD KEY `company_projects_project_id_index` (`project_id`);

--
-- Indexes for table `company_roles`
--
ALTER TABLE `company_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `facilities_slug_unique` (`slug`),
  ADD KEY `facilities_admin_id_index` (`admin_id`),
  ADD KEY `facilities_user_id_index` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `features_slug_unique` (`slug`),
  ADD KEY `features_admin_id_index` (`admin_id`),
  ADD KEY `features_user_id_index` (`user_id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `listings_slug_unique` (`slug`),
  ADD KEY `listings_town_id_index` (`town_id`),
  ADD KEY `listings_admin_id_index` (`admin_id`),
  ADD KEY `listings_user_id_index` (`user_id`),
  ADD KEY `listings_sub_category_id_index` (`sub_category_id`);

--
-- Indexes for table `listing_appliances`
--
ALTER TABLE `listing_appliances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listing_appliances_listing_id_index` (`listing_id`),
  ADD KEY `listing_appliances_appliance_id_index` (`appliance_id`);

--
-- Indexes for table `listing_category`
--
ALTER TABLE `listing_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listing_category_listing_id_index` (`listing_id`),
  ADD KEY `listing_category_category_id_index` (`category_id`);

--
-- Indexes for table `listing_facilities`
--
ALTER TABLE `listing_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listing_facilities_listing_id_index` (`listing_id`),
  ADD KEY `listing_facilities_facility_id_index` (`facility_id`);

--
-- Indexes for table `listing_features`
--
ALTER TABLE `listing_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listing_features_listing_id_index` (`listing_id`),
  ADD KEY `listing_features_feature_id_index` (`feature_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tags_tag_id_index` (`tag_id`),
  ADD KEY `post_tags_post_id_index` (`post_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`),
  ADD KEY `projects_project_type_id_index` (`project_type_id`);

--
-- Indexes for table `project_property`
--
ALTER TABLE `project_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_property_property_id_index` (`property_id`),
  ADD KEY `project_property_project_id_index` (`project_id`);

--
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `properties_slug_unique` (`slug`),
  ADD KEY `properties_category_id_index` (`category_id`),
  ADD KEY `properties_sub_category_id_index` (`sub_category_id`),
  ADD KEY `properties_town_id_index` (`town_id`),
  ADD KEY `properties_created_by_index` (`created_by`),
  ADD KEY `properties_updated_by_index` (`updated_by`),
  ADD KEY `properties_admin_id_index` (`admin_id`);

--
-- Indexes for table `property_facilities`
--
ALTER TABLE `property_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_facilities_property_id_index` (`property_id`),
  ADD KEY `property_facilities_facility_id_index` (`facility_id`);

--
-- Indexes for table `property_features`
--
ALTER TABLE `property_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_features_property_id_index` (`property_id`),
  ADD KEY `property_features_feature_id_index` (`feature_id`);

--
-- Indexes for table `property_listings`
--
ALTER TABLE `property_listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_listings_property_id_index` (`property_id`),
  ADD KEY `property_listings_listing_id_index` (`listing_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_index` (`country_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_index` (`category_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`),
  ADD KEY `tags_admin_id_index` (`admin_id`);

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `towns_city_id_index` (`city_id`),
  ADD KEY `towns_admin_id_index` (`admin_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appliances`
--
ALTER TABLE `appliances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `book_showing_email`
--
ALTER TABLE `book_showing_email`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_projects`
--
ALTER TABLE `company_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_roles`
--
ALTER TABLE `company_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `listing_appliances`
--
ALTER TABLE `listing_appliances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `listing_category`
--
ALTER TABLE `listing_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `listing_facilities`
--
ALTER TABLE `listing_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `listing_features`
--
ALTER TABLE `listing_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_property`
--
ALTER TABLE `project_property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_facilities`
--
ALTER TABLE `property_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_features`
--
ALTER TABLE `property_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_listings`
--
ALTER TABLE `property_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `towns`
--
ALTER TABLE `towns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appliances`
--
ALTER TABLE `appliances`
  ADD CONSTRAINT `appliances_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `appliances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD CONSTRAINT `category_posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_company_role_id_foreign` FOREIGN KEY (`company_role_id`) REFERENCES `company_roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `companies_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_projects`
--
ALTER TABLE `company_projects`
  ADD CONSTRAINT `company_projects_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `company_projects_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `facilities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `features_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `listings_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `listings_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `listing_appliances`
--
ALTER TABLE `listing_appliances`
  ADD CONSTRAINT `listing_appliances_appliance_id_foreign` FOREIGN KEY (`appliance_id`) REFERENCES `appliances` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `listing_appliances_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `listing_category`
--
ALTER TABLE `listing_category`
  ADD CONSTRAINT `listing_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `listing_category_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `listing_facilities`
--
ALTER TABLE `listing_facilities`
  ADD CONSTRAINT `listing_facilities_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `listing_facilities_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `listing_features`
--
ALTER TABLE `listing_features`
  ADD CONSTRAINT `listing_features_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `listing_features_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `post_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_project_type_id_foreign` FOREIGN KEY (`project_type_id`) REFERENCES `project_types` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `project_property`
--
ALTER TABLE `project_property`
  ADD CONSTRAINT `project_property_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_property_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `properties_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `properties_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `properties_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`),
  ADD CONSTRAINT `properties_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_facilities`
--
ALTER TABLE `property_facilities`
  ADD CONSTRAINT `property_facilities_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_facilities_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_features`
--
ALTER TABLE `property_features`
  ADD CONSTRAINT `property_features_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_features_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_listings`
--
ALTER TABLE `property_listings`
  ADD CONSTRAINT `property_listings_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_listings_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `towns`
--
ALTER TABLE `towns`
  ADD CONSTRAINT `towns_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `towns_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
