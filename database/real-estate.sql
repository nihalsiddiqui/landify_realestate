-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 12:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real-estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `phone` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `status`, `phone`, `password`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'abdul rehman', 'abdul@gmail.com', 1, 213, '$2y$10$zqSYAqHoq.VY9hyiq/sscu1h8bv1r4AobPhqr9gUF5cGPPLdXCcdq', '32.jpg', '<p>abdul rehman</p>', '2019-03-12 07:00:00', '2021-02-01 01:33:14'),
(5, 'nabeel', 'nabeel@gmail.com', 1, 24151234, '$2y$10$PlGLlkEkpwsEQOii.Qkpauc.9AkQIx7cKcUz6q7WSJSOpkw62IhL2', 't5.jpg', '<p>sfhajkshdfajsdbancb</p>', '2019-03-14 13:59:35', '2019-03-14 17:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`admin_id`, `role_id`) VALUES
(1, 2),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `for_property` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `for_property`) VALUES
(2, 'Office', 'office', '2021-05-20 05:52:13', '2021-05-20 05:52:13', 1),
(3, 'Condo', 'condo', '2021-05-20 07:27:00', '2021-05-20 07:27:00', 1),
(4, 'Townhouse', 'townhouse', '2021-05-20 07:27:19', '2021-05-20 07:27:19', 1),
(5, 'Single Family Home', 'single family home', '2021-05-20 07:27:42', '2021-05-20 07:27:42', 1),
(6, 'REAL ESTATE GRIT', 'REAL ESTATE GRIT', '2021-05-20 09:15:05', '2021-05-20 09:15:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 5, '2021-02-01 07:46:28', '2021-02-01 07:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `generic_id` bigint(20) UNSIGNED NOT NULL,
  `listing_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Property Data Listing Source',
  `builders` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Store json_decode array of Builders',
  `architect` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Store json_decode array of Architects',
  `interior_designers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Store json_decode array of Interior Designers',
  `exterior_designers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Store json_decode array of Exterior Designers',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Detailed Description of the Property',
  `construction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `generic_id`, `listing_source`, `builders`, `architect`, `interior_designers`, `exterior_designers`, `description`, `construction_status`, `created_at`, `updated_at`) VALUES
(21, 25, 'https://www.buzzbuzzhome.com/us/central-park-tower', 'Extell Development Company and SMI USA', 'Adrian Smith + Gordon Gill Architecture', 'Rottet Studio', '2', '<p>Central Park Tower is a new condo development&nbsp;</p>\r\n\r\n<p>by&nbsp;<a href=\"https://www.buzzbuzzhome.com/us/db/extell_development_company1\">Extell Development Company</a>&nbsp;and&nbsp;<a href=\"https://www.buzzbuzzhome.com/us/db/smi_usa\">SMI USA</a>&nbsp;</p>\r\n\r\n<p>at 217 West 57th Street,&nbsp;<a href=\"https://www.buzzbuzzhome.com/us/place/new-york-ny\">New York</a>. The development was completed in 2020. Sales for available units range in price from $8,500,000 to $65,500,000.&nbsp;Central Park Tower has a total of 179 units. Sizes range from 1435 to 7074 square feet.</p>\r\n\r\n<p>This new architectural landmark will rise 1,550 feet<br />\r\nabove New York City, establishing it as the tallest<br />\r\nresidential building in the world.<br />\r\n<br />\r\nElegant and graceful, its strong presence positions<br />\r\nCentral Park Tower is a powerful and poised statement<br />\r\nalong the Manhattan skyline.<br />\r\n<br />\r\nSource: Central Park Tower</p>', 'built', '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(23, 28, 'https://www.buzzbuzzhome.com/us/manhattan-view', 'SCG America', 'Arquitectonica', 'Drake/Anderson , Gabellini Sheppard and Champalimaud', '4', '<p>MANHATTAN&rsquo;S FAR WEST SIDE<br />\r\nManhattan View enables effortless living. These luxury condominiums on Manhattan&rsquo;s Far West Side offer a combination of high-floor residences, superior service, and unrivaled amenities.<br />\r\n<br />\r\nFrom its elegant lobby to its private, landscaped roof top lounge, Manhattan View embodies excellence on every level. Designed by Jamie Drake, the residences are defined by light &mdash; sunny by day, spectacular by night. Its floor-to-ceiling windows frame magnificent views &mdash; of Downtown Manhattan and the World Trade Center, of the iconic Empire State Building, of the Far West Side of Manhattan, and of a seemingly endless horizon with stunning sunsets.<br />\r\n<br />\r\nOf all the luxury condominiums for sale in New York City, Manhattan View has the greatest amount of square footage dedicated to amenities, with places for kids, pets, golfers, billiard players, movie lovers, and theater goers. It even has a regulation-size basketball court. And the service is stellar, as well as around-the-clock, with a fully attended lobby and 24-hour concierge.<br />\r\n<br />\r\nManhattan View connects you to the city&rsquo;s most exciting destinations, affording immediate access to Hudson Yards, the Hudson River waterfront, Hell&rsquo;s Kitchen, and Times Square, whose array of transit options makes every part of the city accessible in minutes.<br />\r\n<br />\r\nAlthough these new Far West Side condos provide a front-row seat to the action, Manhattan View also serves as a safe haven, your personal sanctuary in a city that never sleeps. While merely blocks beyond the very center of it all, it&rsquo;s also just far enough away to afford protective quietude.<br />\r\n<br />\r\nManhattan View embodies excellence on every level.<br />\r\n<br />\r\nSource: Manhattan View</p>', 'built', '2021-05-20 08:25:53', '2021-05-21 06:47:21'),
(24, 29, 'https://www.buzzbuzzhome.com/us/aventura-village', 'Land Developers Group', 'Kaller Architects', NULL, NULL, '<p>Aventura Village is a residential gated community located in Aventura area featuring two-level townhomes, single level garden villas, and open concepts lofts.<br />\r\n<br />\r\nExclusively designed to embrace the Miami lifestyle, residences are designed around a central pool and garden perfect for gathering, cooking and entertainment year-round. From its prime location along 26th Avenue, Aventura Village is located amidst the culture, shopping, business centers and acclaimed public and private schools.<br />\r\n<br />\r\nSource: Aventura Village</p>', 'building', '2021-05-20 08:34:18', '2021-05-20 08:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Facility place Name',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug for Facility URL',
  `distance` double(8,2) DEFAULT NULL COMMENT 'Distance of the Facility from the Property',
  `rating` double(8,2) DEFAULT NULL COMMENT 'Rating of the Facility',
  `min_grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Minimum Grade/Level In Facility',
  `max_grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Maximum Grade/Level In Facility',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Type of Facility (Primary School,Secondary School) or (Women Gym, CO Gym ) etc ',
  `map_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Google Map Location',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `category_id`, `slug`, `distance`, `rating`, `min_grade`, `max_grade`, `type`, `map_location`, `created_at`, `updated_at`) VALUES
(1, 'The Knowledge School', 5, 'the-knowledge-school', 10.00, 5.00, NULL, NULL, 'School', NULL, '2021-02-23 11:41:01', '2021-02-23 12:07:17');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `value` double NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `category_id`, `value`, `code`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Broadband Internet Access', 1, 1, NULL, 'broadband-internet-access', '2021-02-23 09:16:48', '2021-02-23 09:16:48'),
(2, 'Jacuzzi', 3, 2, NULL, 'jacuzzi', '2021-02-23 09:38:46', '2021-02-23 10:46:50'),
(3, 'Swimming Pool', 3, 4, NULL, 'swimming-pool', '2021-02-23 09:39:42', '2021-02-23 09:39:42'),
(5, 'Laundry Room', 4, 8, NULL, 'laundry-room', '2021-02-23 10:52:53', '2021-02-23 10:52:53'),
(6, 'Pool', 4, 16, NULL, 'pool', '2021-05-20 07:31:44', '2021-05-20 07:31:44'),
(7, 'Visitor Parking', 4, 16, NULL, 'visitor-parking', '2021-05-20 07:32:07', '2021-05-20 07:32:07'),
(8, 'Playground', 4, 32, NULL, 'playgroun', '2021-05-20 07:32:19', '2021-05-20 07:32:19'),
(9, 'Recreation Space', 4, 32, NULL, 'recreation-space', '2021-05-20 07:32:36', '2021-05-20 07:32:36'),
(10, 'BBQ Area', 4, 32, NULL, 'bbq-area', '2021-05-20 07:32:43', '2021-05-20 07:32:43'),
(11, 'Valet Parking', 4, 32, NULL, 'valet-parking', '2021-05-20 07:44:40', '2021-05-20 07:44:40'),
(12, 'Private Storage', 4, 64, NULL, 'private-storage', '2021-05-20 07:45:10', '2021-05-20 07:45:10'),
(13, 'Fitness Center', 4, 128, NULL, 'fitness-center', '2021-05-20 07:45:45', '2021-05-20 07:45:45'),
(14, 'Doorman', 4, 256, NULL, 'doorman', '2021-05-20 07:46:34', '2021-05-20 07:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `f_f_categories`
--

CREATE TABLE `f_f_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Code will be auto generated for some Inter Related work',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug added for category URL for searching purpose',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_f_categories`
--

INSERT INTO `f_f_categories` (`id`, `name`, `code`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Business and Communication', NULL, 'business-and-communication', '2021-02-23 08:50:48', '2021-02-23 08:50:48'),
(2, 'Nearby Locations', NULL, 'nearby-locations', '2021-02-23 08:51:09', '2021-02-23 08:51:09'),
(3, 'Healthcare Recreational', NULL, 'healthcare-recreational', '2021-02-23 09:37:48', '2021-02-23 09:37:48'),
(4, 'Amenities', NULL, 'amenities', '2021-02-23 09:45:21', '2021-05-20 07:31:08'),
(5, 'School', NULL, 'school', '2021-02-23 11:34:40', '2021-02-23 11:34:40'),
(6, 'Pharmacy', NULL, 'pharmacy', '2021-02-23 11:35:06', '2021-02-23 11:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `generics`
--

CREATE TABLE `generics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name of the Property',
  `status` int(11) DEFAULT 1 COMMENT 'For Making Drafts or Active Properties',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'For Pretty URL of the Property',
  `summary` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Summary for SEO or Show Summary',
  `built_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Property Built Year',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Actual Address of the Property',
  `postal_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` double(8,2) NOT NULL COMMENT 'Map Longitude of the Property',
  `latitude` double(8,2) NOT NULL COMMENT 'Map Latitude of the Property',
  `square_feet` double(8,2) NOT NULL COMMENT 'Total No of Square Feet of Property',
  `no_of_floors` int(11) NOT NULL COMMENT 'Floors Count of the Property',
  `amount_per_square_feet` double DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `cost_per_sqr_feet` double DEFAULT NULL,
  `installment_per_month` double DEFAULT NULL,
  `no_of_beds` int(11) NOT NULL,
  `no_of_baths` int(11) NOT NULL,
  `no_of_kitchens` int(11) NOT NULL,
  `no_of_living_room` int(11) NOT NULL,
  `no_of_dining_room` int(11) NOT NULL,
  `built_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Property Building Style',
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Sale, Rent',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generics`
--

INSERT INTO `generics` (`id`, `name`, `status`, `slug`, `summary`, `built_year`, `address`, `postal_code`, `longitude`, `latitude`, `square_feet`, `no_of_floors`, `amount_per_square_feet`, `picture`, `price`, `cost_per_sqr_feet`, `installment_per_month`, `no_of_beds`, `no_of_baths`, `no_of_kitchens`, `no_of_living_room`, `no_of_dining_room`, `built_style`, `purpose`, `created_at`, `updated_at`) VALUES
(25, 'Central Park Tower New York', 1, 'central-park-tower', 'Central Park Tower is a new condo development by Extell Development Company and SMI USA at 217 West 57th Street, New York. The development was completed in 2020', '2020-01-19', '217 West 57th Street, New York, NY', '217', 75.00, 45.00, 3901.00, 131, 6030, '1621442933-2016_07_08_11_08_18_manhattan_view_mima_23.jpg', 8500000, NULL, NULL, 25, 37, 14, 14, 25, 'Tower', 'rent', '2021-05-19 11:48:53', '2021-05-21 06:46:11'),
(28, 'Manhattan View', 1, 'manhattan-view', 'Manhattan View is a new condo development by SCG America at 460 West 42nd Street, New York. The development was completed in 2017', '2017-01-01', '460 West 42nd Street, New York, NY', '420', 84.00, 35.00, 2135.00, 63, 2815, '1621517153-2016_07_08_11_08_18_manhattan_view_mima_23.jpg', 6450000, NULL, NULL, 1, 2, 1, 1, 2, 'Condo', 'sale', '2021-05-20 08:25:53', '2021-05-21 06:47:21'),
(29, 'Aventura Village', 1, 'aventura-village', 'Aventura Village is a new condo and townhouse development by Land Developers Group currently under construction at 19380 Northeast 26th Avenue, Miami.', '2025-01-01', '19380 Northeast 26th Avenue, Miami, FL', '19380', 96.00, 36.00, 1534.00, 3, 408, '1621517658-2018_11_02_10_02_04_5-large.jpg', 520000, NULL, NULL, 2, 3, 1, 2, 1, 'Condo and Townhouse', 'sale', '2021-05-20 08:34:18', '2021-05-21 06:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `generic_categories`
--

CREATE TABLE `generic_categories` (
  `generic_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generic_categories`
--

INSERT INTO `generic_categories` (`generic_id`, `category_id`, `created_at`, `updated_at`) VALUES
(28, 3, '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(28, 5, '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(29, 3, '2021-05-20 08:34:18', '2021-05-20 08:34:18'),
(29, 4, '2021-05-20 08:34:18', '2021-05-20 08:34:18'),
(25, 2, '2021-05-21 06:35:41', '2021-05-21 06:35:41'),
(25, 3, '2021-05-21 06:35:41', '2021-05-21 06:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `generic_tags`
--

CREATE TABLE `generic_tags` (
  `generic_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generic_tags`
--

INSERT INTO `generic_tags` (`generic_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(25, 3, '2021-05-21 06:35:41', '2021-05-21 06:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'hashed file name',
  `property_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Media Property ID',
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Extension of the Media File',
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Time at which the Media is being stored',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `property_id`, `extension`, `time`, `created_at`, `updated_at`) VALUES
(3, '1621442933-2017_10_06_09_09_41_extell_central_park_tower_rendering2.jpg', 25, 'jpg', '2021-05-19 16:48:53', '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(4, '1621442933-2018_10_15_10_19_29_screen_shot_2018-10-15_at_10.18.06_am.png', 25, 'png', '2021-05-19 16:48:53', '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(5, '1621442933-2019_01_17_09_24_25_central_park_tower_exterior.jpg', 25, 'jpg', '2021-05-19 16:48:53', '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(6, '1621442933-2019_01_17_09_24_26_central_park_tower_exterior_3.jpg', 25, 'jpg', '2021-05-19 16:48:53', '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(7, '1621442933-2019_01_17_09_24_26_central_park_tower_exterior_4.jpg', 25, 'jpg', '2021-05-19 16:48:53', '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(8, '1621442933-2020_06_03_09_47_25_217-west-57th-street-02.jpg', 25, 'jpg', '2021-05-19 16:48:53', '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(16, '1621517153-2016_07_08_11_08_02_manhattan_view_mima_1.jpg', 28, 'jpg', '2021-05-20 13:25:53', '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(17, '1621517153-2016_07_08_11_08_02_manhattan_view_mima_2.jpg', 28, 'jpg', '2021-05-20 13:25:53', '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(18, '1621517153-2019_02_12_10_23_46_manhattan_view_mima_exterior.jpg', 28, 'jpg', '2021-05-20 13:25:53', '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(19, '1621517153-2019_06_10_03_53_12_manhattan_view_mima_exterior.jpeg', 28, 'jpeg', '2021-05-20 13:25:53', '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(20, '1621517153-2020_10_21_02_30_17_ibrogina.jpeg', 28, 'jpeg', '2021-05-20 13:25:53', '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(21, '1621517153-2020_10_21_02_38_26_xr4fqsra.jpeg', 28, 'jpeg', '2021-05-20 13:25:53', '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(22, '1621517153-2020_10_21_02_40_39_8qzejhga.jpeg', 28, 'jpeg', '2021-05-20 13:25:53', '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(23, '1621517658-2018_11_02_10_02_03_3-large.jpg', 29, 'jpg', '2021-05-20 13:34:18', '2021-05-20 08:34:18', '2021-05-20 08:34:18'),
(24, '1621517658-2018_11_02_10_02_04_1-large.jpg', 29, 'jpg', '2021-05-20 13:34:18', '2021-05-20 08:34:18', '2021-05-20 08:34:18'),
(25, '1621517658-2018_11_02_10_02_05_2-large.jpg', 29, 'jpg', '2021-05-20 13:34:18', '2021-05-20 08:34:18', '2021-05-20 08:34:18'),
(26, '1621517658-2018_11_02_10_02_05_8-large.jpg', 29, 'jpg', '2021-05-20 13:34:18', '2021-05-20 08:34:18', '2021-05-20 08:34:18');

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
(27, '2021_02_20_105403_create_generics_table', 2),
(28, '2021_02_20_112822_create_details_table', 2),
(29, '2021_02_20_122357_create_f_f_categories_table', 2),
(30, '2021_02_20_122551_create_facilities_table', 2),
(31, '2021_02_20_125117_create_features_table', 2),
(32, '2021_02_20_134225_create_media_table', 2),
(33, '2021_04_12_094425_add_columns_to_generics_table', 3),
(37, '2021_05_07_190400_add_foreign_generic_pk_as_fk_to_details', 5),
(40, '2021_05_07_154055_create_property_features_table', 6),
(41, '2021_05_07_154136_create_property_facilities_table', 6),
(42, '2021_05_20_103604_add_column_to_categories_table', 7),
(43, '2021_05_20_103706_add_column_to_tags_table', 7),
(46, '2021_05_20_110405_create_generic_categories_table', 8),
(47, '2021_05_20_110540_create_generic_tags_table', 8);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `for`, `created_at`, `updated_at`) VALUES
(1, 'Post-Create', 'post', '2019-03-12 14:18:25', '2019-03-12 14:18:25'),
(3, 'Post-Update', 'post', '2019-03-12 14:18:42', '2019-03-12 14:18:42'),
(4, 'Post-Delete', 'post', '2019-03-12 14:18:50', '2019-03-12 14:18:50'),
(5, 'Create-User', 'user', '2019-03-12 14:18:58', '2019-03-12 14:18:58'),
(6, 'Update-User', 'user', '2019-03-12 14:19:07', '2019-03-12 14:19:07'),
(7, 'Delete-User', 'user', '2019-03-12 14:19:15', '2019-03-12 14:19:15'),
(8, 'Category-CRUD', 'other', '2019-03-12 14:19:23', '2019-03-12 14:19:23'),
(9, 'Tag-CRUD', 'other', '2019-03-12 14:19:31', '2019-03-12 14:19:31'),
(10, 'Permissions-CRUD', 'other', '2019-03-14 07:59:22', '2019-03-14 07:59:22'),
(11, 'Role-CRUD', 'other', '2019-03-14 07:59:49', '2019-03-14 07:59:49'),
(12, 'View-USERS', 'user', '2019-03-14 08:02:08', '2019-03-14 10:00:33'),
(13, 'Post-View', 'post', '2019-03-14 09:56:39', '2019-03-14 09:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(5, 2),
(6, 2),
(7, 2),
(9, 2),
(1, 2),
(3, 2),
(4, 2),
(8, 2),
(10, 2),
(5, 4),
(8, 4),
(9, 4),
(12, 4),
(13, 3),
(13, 2),
(12, 2),
(11, 2),
(1, 4),
(3, 4),
(4, 4),
(13, 4),
(6, 4),
(7, 4),
(11, 4),
(1, 3),
(3, 3),
(4, 3),
(8, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2019-03-14 13:07:39', '2019-03-14 13:07:39'),
(1, 3, '2019-03-14 13:40:15', '2019-03-14 13:40:15'),
(1, 4, '2019-03-14 14:01:10', '2019-03-14 14:01:10'),
(1, 5, '2021-02-01 07:46:27', '2021-02-01 07:46:27'),
(2, 5, '2021-02-01 07:46:27', '2021-02-01 07:46:27'),
(1, 6, '2021-05-10 11:33:28', '2021-05-10 11:33:28'),
(2, 6, '2021-05-10 11:33:28', '2021-05-10 11:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `property_facilities`
--

CREATE TABLE `property_facilities` (
  `generic_id` bigint(20) UNSIGNED NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_facilities`
--

INSERT INTO `property_facilities` (`generic_id`, `facility_id`, `created_at`, `updated_at`) VALUES
(25, 1, '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(29, 1, '2021-05-20 08:34:18', '2021-05-20 08:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE `property_features` (
  `generic_id` bigint(20) UNSIGNED NOT NULL,
  `features_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_features`
--

INSERT INTO `property_features` (`generic_id`, `features_id`, `created_at`, `updated_at`) VALUES
(25, 1, '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(25, 2, '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(25, 5, '2021-05-19 11:48:53', '2021-05-19 11:48:53'),
(28, 1, '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(28, 2, '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(28, 5, '2021-05-20 08:25:53', '2021-05-20 08:25:53'),
(29, 2, '2021-05-20 08:34:18', '2021-05-20 08:34:18'),
(29, 5, '2021-05-20 08:34:18', '2021-05-20 08:34:18'),
(29, 10, '2021-05-20 08:34:18', '2021-05-20 08:34:18'),
(29, 11, '2021-05-20 08:34:18', '2021-05-20 08:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'super admin', '2019-03-12 14:20:06', '2019-03-14 05:59:11'),
(3, 'author', '2019-03-13 02:21:03', '2019-03-13 02:21:03'),
(4, 'admin', '2019-03-14 09:07:46', '2019-03-14 09:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `for_property` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`, `for_property`) VALUES
(1, 'ismail', 'showviz slug', '2019-03-14 07:49:29', '2019-03-14 07:49:29', 0),
(2, 'Test tag', 'test-tag', '2021-02-01 07:45:10', '2021-02-01 07:45:10', 0),
(3, 'Office', 'office', '2021-05-20 05:53:50', '2021-05-20 05:53:50', 1);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Rehman', 'abdulrehmankhokhar25@gmail.com', NULL, '$2y$10$XA.7.NJ9BPO.YVUjkmd.m.AsIw0VvyVX5umnIoM5LyVNRLsmKwSPu', NULL, '2021-01-31 23:41:57', '2021-01-31 23:41:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD KEY `admin_roles_admin_id_index` (`admin_id`),
  ADD KEY `admin_roles_role_id_index` (`role_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD KEY `category_posts_category_id_index` (`category_id`),
  ADD KEY `category_posts_post_id_index` (`post_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_generic_id_index` (`generic_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facilities_category_id_index` (`category_id`);

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
  ADD KEY `features_category_id_index` (`category_id`);

--
-- Indexes for table `f_f_categories`
--
ALTER TABLE `f_f_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generics`
--
ALTER TABLE `generics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generic_categories`
--
ALTER TABLE `generic_categories`
  ADD KEY `generic_categories_generic_id_index` (`generic_id`),
  ADD KEY `generic_categories_category_id_index` (`category_id`);

--
-- Indexes for table `generic_tags`
--
ALTER TABLE `generic_tags`
  ADD KEY `generic_tags_generic_id_index` (`generic_id`),
  ADD KEY `generic_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_property_id_index` (`property_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_tags_tag_id_index` (`tag_id`),
  ADD KEY `post_tags_post_id_index` (`post_id`);

--
-- Indexes for table `property_facilities`
--
ALTER TABLE `property_facilities`
  ADD KEY `property_facilities_generic_id_index` (`generic_id`),
  ADD KEY `property_facilities_facility_id_index` (`facility_id`);

--
-- Indexes for table `property_features`
--
ALTER TABLE `property_features`
  ADD KEY `property_features_generic_id_index` (`generic_id`),
  ADD KEY `property_features_features_id_index` (`features_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `f_f_categories`
--
ALTER TABLE `f_f_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `generics`
--
ALTER TABLE `generics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_generic_id_foreign` FOREIGN KEY (`generic_id`) REFERENCES `generics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `f_f_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `f_f_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `generic_categories`
--
ALTER TABLE `generic_categories`
  ADD CONSTRAINT `generic_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `generic_categories_generic_id_foreign` FOREIGN KEY (`generic_id`) REFERENCES `generics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `generic_tags`
--
ALTER TABLE `generic_tags`
  ADD CONSTRAINT `generic_tags_generic_id_foreign` FOREIGN KEY (`generic_id`) REFERENCES `generics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `generic_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `generics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_facilities`
--
ALTER TABLE `property_facilities`
  ADD CONSTRAINT `property_facilities_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_facilities_generic_id_foreign` FOREIGN KEY (`generic_id`) REFERENCES `generics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_features`
--
ALTER TABLE `property_features`
  ADD CONSTRAINT `property_features_features_id_foreign` FOREIGN KEY (`features_id`) REFERENCES `features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_features_generic_id_foreign` FOREIGN KEY (`generic_id`) REFERENCES `generics` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
