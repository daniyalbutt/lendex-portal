-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2025 at 10:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:27:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"role-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"role-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:9:\"role-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"role-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:4;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:15:\"permission-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:5;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:17:\"permission-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:6;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:15:\"permission-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:7;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:17:\"permission-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:8;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:9:\"user-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:9;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:11:\"user-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:10;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:9:\"user-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:11;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:11:\"user-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:12;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:16:\"application-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:13;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:18:\"application-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:14;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:16:\"application-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:15;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:18:\"application-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:16;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:13:\"user-doc-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:7;}}i:17;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:15:\"user-doc-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:18;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:13:\"user-doc-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:19;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:15:\"user-doc-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:20;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:15:\"user-doc-upload\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}i:21;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:22:\"track-your-application\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}i:22;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:16:\"application-view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}i:23;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:12:\"message-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:24;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:15:\"document-status\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:25;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:12:\"message-view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}i:26;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:14:\"message-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:4:\"User\";s:1:\"c\";s:3:\"web\";}}}', 1740090347);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` longtext DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comments` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `document`, `user_id`, `status`, `created_at`, `updated_at`, `comments`) VALUES
(1, '{\"business_legal_name\":\"Daniell Houston\",\"business_dba\":\"Business DBA\",\"business_phone\":\"Business Phone\",\"mobile_phone\":\"Mobile Phone\",\"business_fax\":\"Business Fax\",\"other_phone\":\"Other Phone\",\"website\":\"Website\",\"email\":\"daniellhouston545@gmail.com\",\"physical_address\":\"Physical Address\",\"physical_city\":\"Physical City\",\"physical_state\":\"Physical State\",\"physical_zip\":\"Physical Zip\",\"mailing_address\":\"Mailing Address\",\"mailing_city\":\"Mailing City\",\"mailing_state\":\"Mailing State\",\"mailing_zip\":\"Mailing Zip\",\"legal_entity\":\"Corportaion\",\"business_start_date\":\"Business Start Date\",\"federal_tax_id\":\"Federal Tax ID\",\"home_based_business\":\"YES\",\"open_judgements\":\"YES\",\"open_bankrupticies\":\"YES\",\"state_of_inc\":\"State Of INC\",\"business_description\":\"Business Description\",\"industry_type\":\"Industry Type\",\"business_rent\":\"Rented\\/Leased\",\"mthly_rent\":\"Mothly Rent\",\"remaining_term_for_rent\":\"Remaining Term For Rent\",\"payment_current\":\"YES\",\"landlord_company_contact\":\"Landlord Company Contact\",\"phone_number\":\"02113515476545\",\"amount_requested\":\"500141\",\"when_are_funds_needed\":\"ASAP\",\"desired_user_of_funding_proceeds\":\"Desired User Of Funding Proceeds\",\"what_kind_of_loan_are_you_looking_for\":\"What kind of Loan are you looking for?\",\"gross_annual_sales\":\"Gross Annual Sales\",\"gross_monthly_sales\":\"Gross Monthly Sales\",\"monthly_credit_card_volume\":\"Monthly Credit Card Volume\",\"current_cash_advance\":\"Current Cash Advance\",\"cash_advance_balance\":\"Cash Advance\\/Loan Balance\",\"current_credit_card_processing_company\":\"Current Credit Card Processing Company\",\"credit_score\":\"Credit Score\",\"account_number\":\"Account Number\",\"first_name\":\"First Name\",\"mi\":\"MI\",\"last_name\":\"Last Name\",\"title\":\"Title\",\"ownership\":\"Ownership\",\"home_address\":\"Home Address\",\"home_city\":\"Home City\",\"home_state\":\"Home State\",\"home_zip\":\"Home Zip\",\"home_phone\":\"Home Phone\",\"home_mobile_phone\":\"Home Mobile Phone\",\"date_of_birth\":\"Date Of Birth\",\"ss#\":\"SS#\",\"owner_first_name\":\"First Name\",\"owner_mi\":\"MI\",\"owner_last_name\":\":Last Name\",\"owner_title\":\"Title\",\"owner_ownership\":\"Ownership\",\"owner_home_address\":\"Home Address\",\"owner_home_city\":\"Home City\",\"owner_home_state\":\"Home State\",\"owner_home_zip\":\"Home Zip\",\"owner_home_phone\":\"Home Phone\",\"owner_home_mobile_phone\":\"Home Mobile Phone\",\"owner_date_of_birth\":\"Date Of Birth\",\"owner_ss#\":\"SS#\",\"owner_signature\":\"Owner Signature\",\"owner_printed_name\":\"Owner Printed Name\",\"owner_date\":\"Owner Date\",\"co_owner_signature\":\"Co-Owner Signature\",\"co_owner_printed_name\":\"Owner Printed Name\",\"co_owner_date\":\"Owner Date\",\"bank_statement\":\"upload\\/files\\/daniellhouston545@gmail.com\\/d21d5ccb20dce5be1e2ebee418e918b4-file-sample_150kB.pdf\"}', 8, 2, '2025-02-19 11:58:58', '2025-02-19 13:54:29', 'Your Application is Approved');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `messages` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `user_id`, `messages`, `created_at`, `updated_at`) VALUES
(1, 8, 0, 'Hello Testing.....', '2025-02-19 18:40:59', '2025-02-19 18:40:59'),
(2, 8, 0, 'Hello Testing....', '2025-02-19 18:41:50', '2025-02-19 18:41:50'),
(3, 8, 0, 'Last message For calling...', '2025-02-19 18:52:19', '2025-02-19 18:52:19'),
(4, 8, 0, 'Please Look into this....', '2025-02-19 18:53:25', '2025-02-19 18:53:25'),
(5, 8, 0, 'hello world testing teiting....', '2025-02-19 18:55:48', '2025-02-19 18:55:48'),
(6, 8, 0, 'Please Message me back.....', '2025-02-19 18:56:55', '2025-02-19 18:56:55');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_22_190808_create_permission_tables', 1),
(5, '2025_01_22_191344_create_products_table', 2),
(6, '2025_01_23_231642_add_image_status_to_products_table', 3),
(7, '2025_01_24_195053_create_pages_table', 4),
(10, '2025_01_27_192151_create_sections_table', 5),
(11, '2025_01_31_230301_add_value_to_sections_table', 6),
(12, '2025_02_06_172219_create_documents_table', 7),
(13, '2025_02_06_173347_create_personal_access_tokens_table', 7),
(14, '2025_02_06_200504_add_comments_to_documents_table', 8),
(15, '2025_02_12_194436_create_user_docs_table', 9),
(16, '2025_02_17_213950_create_messages_table', 10),
(17, '2025_02_19_000227_create_time_lines_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(5, 'App\\Models\\User', 1),
(7, 'App\\Models\\User', 3),
(7, 'App\\Models\\User', 4),
(7, 'App\\Models\\User', 5),
(7, 'App\\Models\\User', 6),
(7, 'App\\Models\\User', 7),
(7, 'App\\Models\\User', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `published_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `seo_title` text DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `seo_descriptions` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `description`, `image`, `published_date`, `status`, `seo_title`, `seo_keywords`, `seo_descriptions`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', 'home-page', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'upload/pages/017d5fcf53ff96cbc40e7212fa65088bser-bg-creation.png', '2025-01-26 19:00:00', 0, 'Home Page', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2025-01-28 06:27:08', '2025-01-31 18:21:42'),
(2, 'About Page', 'about-page', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'upload/pages/017d5fcf53ff96cbc40e7212fa65088bser-bg-creation.png', '2025-01-27 08:00:00', 0, 'Home Page', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2025-01-28 06:27:08', '2025-01-28 06:27:08');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2025-01-23 04:07:32', '2025-01-23 04:07:32'),
(2, 'role-create', 'web', '2025-01-23 04:07:32', '2025-01-23 04:07:32'),
(3, 'role-edit', 'web', '2025-01-23 04:07:32', '2025-01-23 04:07:32'),
(4, 'role-delete', 'web', '2025-01-23 04:07:32', '2025-01-23 04:07:32'),
(9, 'permission-list', 'web', '2025-01-23 18:13:53', '2025-01-23 18:13:59'),
(10, 'permission-create', 'web', '2025-01-23 18:14:01', '2025-01-23 18:14:04'),
(11, 'permission-edit', 'web', '2025-01-23 18:14:06', '2025-01-23 18:14:08'),
(12, 'permission-delete', 'web', '2025-01-23 18:14:11', '2025-01-23 18:14:13'),
(13, 'user-list', 'web', '2025-01-24 04:02:47', '2025-01-24 04:02:47'),
(14, 'user-create', 'web', '2025-01-24 04:03:02', '2025-01-24 04:03:02'),
(15, 'user-edit', 'web', '2025-01-24 04:03:14', '2025-01-24 04:03:14'),
(16, 'user-delete', 'web', '2025-01-24 04:03:26', '2025-01-24 06:33:08'),
(21, 'application-list', 'web', '2025-02-06 13:02:33', '2025-02-06 13:02:33'),
(22, 'application-create', 'web', '2025-02-06 13:02:50', '2025-02-06 13:02:50'),
(23, 'application-edit', 'web', '2025-02-06 13:03:00', '2025-02-06 13:03:00'),
(24, 'application-delete', 'web', '2025-02-06 13:03:18', '2025-02-06 13:03:18'),
(26, 'user-doc-list', 'web', '2025-02-12 19:00:41', '2025-02-12 19:00:41'),
(27, 'user-doc-create', 'web', '2025-02-12 19:01:14', '2025-02-12 19:01:14'),
(28, 'user-doc-edit', 'web', '2025-02-12 19:02:43', '2025-02-12 19:02:43'),
(29, 'user-doc-delete', 'web', '2025-02-12 19:03:02', '2025-02-12 19:03:02'),
(31, 'user-doc-upload', 'web', '2025-02-12 20:04:29', '2025-02-12 20:04:29'),
(32, 'track-your-application', 'web', '2025-02-17 12:17:21', '2025-02-17 12:17:21'),
(33, 'application-view', 'web', '2025-02-17 15:35:21', '2025-02-17 15:35:21'),
(34, 'message-list', 'web', '2025-02-17 16:34:59', '2025-02-17 16:34:59'),
(35, 'document-status', 'web', '2025-02-17 19:15:22', '2025-02-17 19:15:22'),
(36, 'message-view', 'web', '2025-02-19 17:11:15', '2025-02-19 17:11:15'),
(37, 'message-create', 'web', '2025-02-19 17:25:33', '2025-02-19 17:25:33');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`, `image`, `status`) VALUES
(1, 'Testing Product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2025-01-24 07:01:04', '2025-01-24 07:50:14', 'upload/products/e58a4e6c8d0e0101dd6a22ed9c6a0004gethrng1.png', 1),
(2, 'Hello World', 'Hello World', '2025-01-24 07:25:22', '2025-01-24 07:25:22', 'upload/products/1118a715971b82b5d7f4c87e711ad7e0gethrng1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'web', '2025-01-24 03:55:11', '2025-01-24 03:55:11'),
(7, 'User', 'web', '2025-01-24 06:51:28', '2025-01-24 06:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 5),
(16, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(26, 5),
(26, 7),
(27, 5),
(28, 5),
(29, 5),
(31, 7),
(32, 7),
(33, 7),
(34, 5),
(35, 5),
(36, 7),
(37, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `is_repeater` int(191) NOT NULL DEFAULT 0,
  `section_id` int(11) NOT NULL DEFAULT 0,
  `page_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `slug`, `type`, `is_repeater`, `section_id`, `page_id`, `created_at`, `updated_at`, `value`) VALUES
(1, 'Service Box', 'service-box', 3, 0, 0, 1, '2025-01-29 07:39:05', '2025-01-29 07:39:05', NULL),
(2, 'Image', 'image', 2, 1, 1, 1, '2025-01-29 07:39:05', '2025-01-29 07:39:05', NULL),
(3, 'Name', 'name', 0, 1, 1, 1, '2025-01-29 07:39:05', '2025-01-29 07:39:05', NULL),
(4, 'Details', 'details', 1, 1, 1, 1, '2025-01-29 07:39:05', '2025-01-29 07:39:05', '[null,null]'),
(5, 'About Page Section', 'about-page-section', 3, 0, 0, 2, '2025-01-29 07:46:43', '2025-01-29 07:46:43', NULL),
(6, 'About One', 'about-one', 0, 1, 5, 2, '2025-01-29 07:46:43', '2025-01-29 07:46:43', NULL),
(7, 'About Two', 'about-two', 0, 1, 5, 2, '2025-01-29 07:46:43', '2025-01-29 07:46:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3E0mUMgvecpGWASJgzw24ZVxjp6dmifKgHTogxSV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2szV01vOWNyTkwyaVZ2SEFmc25Db3RaZ0owRGpMNHdhc0tiajB3UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1740085371),
('4U4QmO7PGlu74lehBnY4paeKElvp57yaKHvL51GO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicGJzaWU0Nmw4UEhqRlFENnlVa3pCbUdCcDlQU2laOUZmN29CY2d5eiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1740076872),
('8ybvPybzF4cdorbGzUStoDAku7r5rObdBqGN7ynz', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNktjZmJKMk5pRmR0b1hDTk1Cb2NVaU9JOWNqZ1FuNlFlWDRqRGZ4ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZXNzYWdlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3Mzk5ODY3MTQ7fX0=', 1740009437),
('IucfnPvIkOdOtjT1afieTth7gOFM5j5Hl8GmU0LJ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTGxFRkJEeHZ5Z2VFb25GSXRnOTN5S1dEaFNMUVVpVXRMdWd4RmV5YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcHBsaWNhdGlvbnMvMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM5OTgyNjc2O319', 1740009863);

-- --------------------------------------------------------

--
-- Table structure for table `time_lines`
--

CREATE TABLE `time_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `title` longtext DEFAULT NULL,
  `comments` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_lines`
--

INSERT INTO `time_lines` (`id`, `user_id`, `title`, `comments`, `created_at`, `updated_at`) VALUES
(1, 8, 'Daniell Houston submitted an Application', '', '2025-02-19 11:59:04', '2025-02-19 12:01:45'),
(2, 8, 'VISA is required', 'Need Color Scan Copy', '2025-02-19 12:50:56', '2025-02-19 12:50:56'),
(3, 8, 'Daniell Houston upload a document - VISA', NULL, '2025-02-19 12:57:53', '2025-02-19 12:57:53'),
(4, 8, 'VISA - Approved', 'Visa Copy Is approved', '2025-02-19 13:01:49', '2025-02-19 13:01:49'),
(5, 8, 'Passport - Rejected', 'Image not Visible', '2025-02-19 13:08:08', '2025-02-19 13:08:08'),
(6, 8, 'Passport - Rejected', 'Image not Visible', '2025-02-19 13:11:59', '2025-02-19 13:11:59'),
(7, 8, 'Daniell Houston upload a document - Passport', NULL, '2025-02-19 13:13:07', '2025-02-19 13:13:07'),
(8, 8, 'Passport - Approved', 'Image is now clear', '2025-02-19 13:17:11', '2025-02-19 13:17:11'),
(9, 8, 'Daniell Houston upload a document - National ID Card', NULL, '2025-02-19 13:24:39', '2025-02-19 13:24:39'),
(10, 8, 'National ID Card - Resubmission Required', NULL, '2025-02-19 13:25:20', '2025-02-19 13:25:20'),
(11, 8, NULL, 'Your Application is Approved', '2025-02-19 14:00:42', '2025-02-19 14:00:42'),
(12, 8, 'Application - Approved', 'Your Application is Approved', '2025-02-19 14:02:21', '2025-02-19 14:02:21');

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
(1, 'Admin', 'info@admin.com', NULL, '$2y$12$X6RQC4vhdsUAPAQV7UIpgeFWrhwGzM/EAYF23s27K8yrO1/YaqrsW', NULL, '2025-01-23 03:41:23', '2025-01-25 02:40:26'),
(3, 'User', 'info@user.com', NULL, '$2y$12$LWwbSdYXqsmS.sf4hH4EW..Svztiae9OL6.e4Zjq/I9cKuQVwz13S', NULL, '2025-01-24 06:53:49', '2025-01-24 06:53:49'),
(8, 'Daniell Houston', 'daniellhouston545@gmail.com', NULL, '$2y$12$4K98yVCj9pFLVNE28XYHgulgaBZGH5ZQ4AwdaU8UBviXAhgGS6J3.', NULL, '2025-02-19 12:01:44', '2025-02-19 12:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_docs`
--

CREATE TABLE `user_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `comments` longtext DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_docs`
--

INSERT INTO `user_docs` (`id`, `name`, `comments`, `file_path`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Bank Statement', NULL, 'upload/files/daniellhouston545@gmail.com/d21d5ccb20dce5be1e2ebee418e918b4-file-sample_150kB.pdf', 2, 8, '2025-02-19 12:01:45', '2025-02-19 12:01:45'),
(2, 'Passport', 'Image is now clear', 'upload/files/daniellhouston545@gmail.com/73c5316f7cb6bf2b98e0395f0e298f64-one-Step.png', 2, 8, '2025-02-19 12:44:45', '2025-02-19 13:17:01'),
(3, 'National ID Card', NULL, 'upload/files/daniellhouston545@gmail.com/353d97a519886f4ae2dd0953754e36a1-ovitec-logo.jpg', 5, 8, '2025-02-19 12:45:03', '2025-02-19 13:25:17'),
(4, 'VISA', 'Visa Copy Is approved', 'upload/files/daniellhouston545@gmail.com/3a30203613c5f51c7e7fcb0e7788ac09-secure.nmi.com-Direct-Post-API.pdf', 2, 8, '2025-02-19 12:50:53', '2025-02-19 13:01:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `time_lines`
--
ALTER TABLE `time_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_docs`
--
ALTER TABLE `user_docs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `time_lines`
--
ALTER TABLE `time_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_docs`
--
ALTER TABLE `user_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
