-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2025 at 10:07 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u263857507_lendex`
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
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:27:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"role-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"role-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:9:\"role-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"role-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:4;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:15:\"permission-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:5;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:17:\"permission-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:6;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:15:\"permission-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:7;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:17:\"permission-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:8;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:9:\"user-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:9;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:11:\"user-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:10;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:9:\"user-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:11;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:11:\"user-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:12;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:16:\"application-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:13;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:18:\"application-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:5;}}i:14;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:16:\"application-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:15;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:18:\"application-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:16;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:13:\"user-doc-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:5;i:1;i:7;i:2;i:8;}}i:17;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:15:\"user-doc-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:18;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:13:\"user-doc-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:19;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:15:\"user-doc-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:20;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:15:\"user-doc-upload\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}i:21;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:22:\"track-your-application\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}i:22;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:16:\"application-view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}i:23;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:12:\"message-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:24;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:15:\"document-status\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:5;i:1;i:8;}}i:25;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:12:\"message-view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:7;}}i:26;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:14:\"message-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:7;i:1;i:8;}}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:8;s:1:\"b\";s:11:\"Super Admin\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:4:\"User\";s:1:\"c\";s:3:\"web\";}}}', 1741119778);

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
(10, '{\"_fluentform_3_fluentformnonce\":\"2f1ab988d7\",\"business_legal_name\":\"Designs365\",\"business_dba\":\"Sed aut reprehenderi\",\"business_phone\":\"+1 (611) 538-6014\",\"mobile_phone\":\"+1 (538) 436-8607\",\"business_fax\":\"+1 (911) 183-4494\",\"other_phone\":\"+1 (222) 363-3048\",\"website\":\"https:\\/\\/www.xifozenerydy.co.uk\",\"email\":\"johnwebking483@gmail.com\",\"physical_address\":\"Ipsum voluptatem O\",\"physical_city\":\"Earum tenetur eos q\",\"physical_state\":\"Nisi eu sint dolor l\",\"physical_zip\":\"62071\",\"mailing_address\":\"Quos voluptatum volu\",\"mailing_city\":\"Tempore illum veri\",\"mailing_state\":\"Dolorum illum ut du\",\"mailing_zip\":\"10575\",\"legal_entity\":\"LLC\",\"business_start_date\":null,\"federal_tax_id\":\"Placeat facilis vol\",\"home_based_business\":\"YES\",\"open_judgements\":\"NO\",\"open_bankrupticies\":\"NO\",\"state_of_inc\":\"Optio ut aliqua Ve\",\"industry_type\":\"Asperiores amet bla\",\"business_description\":\"Veritatis similique\",\"business_rent\":\"Rented\\/Leased\",\"mthly_rent\":\"Et commodo quisquam\",\"remaining_term_for_rent\":\"Nesciunt velit sun\",\"payment_current\":\"NO\",\"landlord_company_contact\":\"Dennis and Turner Traders\",\"phone_number\":\"+1 (341) 154-7387\",\"amount_requested\":\"Odio eos harum tene\",\"when_are_funds_needed\":\"ASAP\",\"desired_user_of_funding_proceeds\":\"Doloribus qui nulla\",\"what_kind_of_loan_are_you_looking_for\":\"Quis cupiditate inci\",\"gross_annual_sales\":\"Alias quia culpa mo\",\"gross_monthly_sales\":\"5\",\"monthly_credit_card_volume\":\"4\",\"current_cash_advance\":\"NO\",\"cash_advance_balance\":\"Anim dolores eiusmod\",\"current_credit_card_processing_company\":\"Chandler and Figueroa Plc\",\"credit_score\":\"Voluptas ut quidem q\",\"account_number\":\"187\",\"first_name\":\"Adrian\",\"mi\":\"Rinah Flynn\",\"last_name\":\"French\",\"input_text\":\"Nostrum pariatur Cu\",\"input_text_1\":\"Dolores aliquid recu\",\"home_address\":\"Quae suscipit eligen\",\"home_city\":\"Non lorem dolor sed\",\"home_state\":\"Et autem qui aliquam\",\"home_zip\":\"69429\",\"home_phone\":\"+1 (485) 892-2829\",\"home_mobile_phone\":\"+1 (889) 607-2697\",\"date_of_birth\":null,\"ss\":\"Ratione eum veniam\",\"owner_first_name\":\"Ivy\",\"owner_mi\":\"Darryl Owen\",\"owner_last_name\":\"Mccarty\",\"owner_title\":\"Et velit amet dolo\",\"owner_ownership\":\"Voluptates debitis N\",\"owner_home_address\":\"Rerum adipisicing ad\",\"owner_home_city\":\"Mollitia ut ex possi\",\"owner_home_state\":\"Enim fugiat modi qu\",\"owner_home_zip\":\"79876\",\"owner_home_phone\":\"+1 (265) 134-8238\",\"owner_home_mobile_phone\":\"+1 (179) 614-3391\",\"owner_date_of_birth\":null,\"owner_ss\":\"Ducimus doloribus a\",\"owner_signature\":\"Quia aliquid odit mi\",\"co_owner_signature\":\"Magna proident pari\",\"owner_printed_name\":\"Vera Fry\",\"co_owner_printed_name\":\"Tyler Manning\",\"owner_date\":null,\"co_owner_date\":null,\"bank_statement\":[\"https:\\/\\/designs365staging.com\\/Lendex\\/wp-content\\/uploads\\/fluentform\\/ff-e80edd1ecd7ed16279585f163926f7f8-ff-Sky-Serenity-6.png\"],\"__submission\":{\"id\":\"10\",\"form_id\":\"3\",\"serial_number\":\"10\",\"source_url\":\"https:\\/\\/designs365staging.com\\/Lendex\\/Lendex\\/application-form\\/\",\"user_id\":\"0\",\"status\":\"unread\",\"is_favourite\":\"0\",\"browser\":\"Chrome\",\"device\":\"Windows\",\"ip\":\"116.90.114.2\",\"created_at\":\"2025-02-24 22:15:30\",\"updated_at\":\"2025-02-24 22:15:30\",\"user_inputs\":{\"business_legal_name\":\"Designs365\",\"business_dba\":\"Sed aut reprehenderi\",\"business_phone\":\"+1 (611) 538-6014\",\"mobile_phone\":\"+1 (538) 436-8607\",\"business_fax\":\"+1 (911) 183-4494\",\"other_phone\":\"+1 (222) 363-3048\",\"website\":\"https:\\/\\/www.xifozenerydy.co.uk\",\"email\":\"johnwebking483@gmail.com\",\"physical_address\":\"Ipsum voluptatem O\",\"physical_city\":\"Earum tenetur eos q\",\"physical_state\":\"Nisi eu sint dolor l\",\"physical_zip\":\"62071\",\"mailing_address\":\"Quos voluptatum volu\",\"mailing_city\":\"Tempore illum veri\",\"mailing_state\":\"Dolorum illum ut du\",\"mailing_zip\":\"10575\",\"legal_entity\":\"LLC\",\"business_start_date\":null,\"federal_tax_id\":\"Placeat facilis vol\",\"home_based_business\":\"YES\",\"open_judgements\":\"NO\",\"open_bankrupticies\":\"NO\",\"state_of_inc\":\"Optio ut aliqua Ve\",\"industry_type\":\"Asperiores amet bla\",\"business_description\":\"Veritatis similique\",\"business_rent\":\"Rented\\/Leased\",\"mthly_rent\":\"Et commodo quisquam\",\"remaining_term_for_rent\":\"Nesciunt velit sun\",\"payment_current\":\"NO\",\"landlord_company_contact\":\"Dennis and Turner Traders\",\"phone_number\":\"+1 (341) 154-7387\",\"amount_requested\":\"Odio eos harum tene\",\"when_are_funds_needed\":\"ASAP\",\"desired_user_of_funding_proceeds\":\"Doloribus qui nulla\",\"what_kind_of_loan_are_you_looking_for\":\"Quis cupiditate inci\",\"gross_annual_sales\":\"Alias quia culpa mo\",\"gross_monthly_sales\":\"5\",\"monthly_credit_card_volume\":\"4\",\"current_cash_advance\":\"NO\",\"cash_advance_balance\":\"Anim dolores eiusmod\",\"current_credit_card_processing_company\":\"Chandler and Figueroa Plc\",\"credit_score\":\"Voluptas ut quidem q\",\"account_number\":\"187\",\"first_name\":\"Adrian\",\"mi\":\"Rinah Flynn\",\"last_name\":\"French\",\"input_text\":\"Nostrum pariatur Cu\",\"input_text_1\":\"Dolores aliquid recu\",\"home_address\":\"Quae suscipit eligen\",\"home_city\":\"Non lorem dolor sed\",\"home_state\":\"Et autem qui aliquam\",\"home_zip\":\"69429\",\"home_phone\":\"+1 (485) 892-2829\",\"home_mobile_phone\":\"+1 (889) 607-2697\",\"date_of_birth\":null,\"ss\":\"Ratione eum veniam\",\"owner_first_name\":\"Ivy\",\"owner_mi\":\"Darryl Owen\",\"owner_last_name\":\"Mccarty\",\"owner_title\":\"Et velit amet dolo\",\"owner_ownership\":\"Voluptates debitis N\",\"owner_home_address\":\"Rerum adipisicing ad\",\"owner_home_city\":\"Mollitia ut ex possi\",\"owner_home_state\":\"Enim fugiat modi qu\",\"owner_home_zip\":\"79876\",\"owner_home_phone\":\"+1 (265) 134-8238\",\"owner_home_mobile_phone\":\"+1 (179) 614-3391\",\"owner_date_of_birth\":null,\"owner_ss\":\"Ducimus doloribus a\",\"owner_signature\":\"Quia aliquid odit mi\",\"co_owner_signature\":\"Magna proident pari\",\"owner_printed_name\":\"Vera Fry\",\"co_owner_printed_name\":\"Tyler Manning\",\"owner_date\":null,\"co_owner_date\":null,\"bank_statement\":\"https:\\/\\/designs365staging.com\\/Lendex\\/wp-content\\/uploads\\/fluentform\\/ff-e80edd1ecd7ed16279585f163926f7f8-ff-Sky-Serenity-6.png\"}},\"bank_statement_path\":\"[\\\"\\\\\\/storage\\\\\\/upload\\\\\\/files\\\\\\/johnwebking483@gmail.com\\\\\\/ff-e80edd1ecd7ed16279585f163926f7f8-ff-Sky-Serenity-6.png\\\"]\"}', 11, 2, '2025-02-24 22:20:20', '2025-02-24 22:29:36', 'Welcome'),
(19, '{\"_fluentform_3_fluentformnonce\":\"aa5a1285ae\",\"business_legal_name\":\"Quin Warner\",\"business_dba\":\"Fugiat mollitia eum\",\"business_phone\":\"+1 (197) 195-3469\",\"mobile_phone\":\"+1 (544) 251-7479\",\"business_fax\":\"+1 (358) 388-1408\",\"other_phone\":\"+1 (894) 271-3396\",\"website\":\"https:\\/\\/www.cyf.tv\",\"email\":\"daniellhouston545@gmail.com\",\"physical_address\":\"Aliquam do amet cum\",\"physical_city\":\"Sunt ut facilis nihi\",\"physical_state\":\"Possimus eiusmod qu\",\"physical_zip\":\"61256\",\"mailing_address\":\"Adipisicing irure ei\",\"mailing_city\":\"Nihil enim voluptas\",\"mailing_state\":\"Elit quae anim comm\",\"mailing_zip\":\"83125\",\"legal_entity\":\"LLC\",\"business_start_date\":null,\"federal_tax_id\":\"Consequatur nemo mi\",\"home_based_business\":\"YES\",\"open_judgements\":\"YES\",\"open_bankrupticies\":\"NO\",\"state_of_inc\":\"Omnis aut obcaecati\",\"industry_type\":\"Lorem illum culpa e\",\"business_description\":\"A eiusmod nobis laud\",\"business_rent\":\"Mortgaged\",\"mthly_rent\":\"Est molestiae enim\",\"remaining_term_for_rent\":\"Temporibus voluptati\",\"payment_current\":\"YES\",\"landlord_company_contact\":\"Bartlett and Hernandez LLC\",\"phone_number\":\"+1 (165) 382-2634\",\"amount_requested\":\"Obcaecati sed simili\",\"when_are_funds_needed\":\"60+ Days\",\"desired_user_of_funding_proceeds\":\"Deserunt et itaque e\",\"what_kind_of_loan_are_you_looking_for\":\"Animi aut perspicia\",\"gross_annual_sales\":\"Qui Nam do quia moll\",\"gross_monthly_sales\":\"3\",\"monthly_credit_card_volume\":\"4\",\"current_cash_advance\":\"NO\",\"cash_advance_balance\":\"Est fuga Incidunt\",\"current_credit_card_processing_company\":\"Byrd Petersen Associates\",\"credit_score\":\"Laboris irure amet\",\"account_number\":\"414\",\"first_name\":\"Chancellor\",\"mi\":\"Michelle Lott\",\"last_name\":\"Wyatt\",\"title\":\"Magnam dignissimos i\",\"ownership\":\"Distinctio Quis do\",\"home_address\":\"Similique eveniet q\",\"home_city\":\"Commodo ut officia s\",\"home_state\":\"Ut rerum id provide\",\"home_zip\":\"78281\",\"home_phone\":\"+1 (331) 876-2475\",\"home_mobile_phone\":\"+1 (516) 882-8349\",\"date_of_birth\":null,\"ss\":\"Est reprehenderit en\",\"owner_first_name\":\"Rebekah\",\"owner_mi\":\"Reagan Ford\",\"owner_last_name\":\"Goff\",\"owner_title\":\"Tempor aperiam eveni\",\"owner_ownership\":\"Delectus qui labore\",\"owner_home_address\":\"Modi iure ad officii\",\"owner_home_city\":\"Laboris anim invento\",\"owner_home_state\":\"Perspiciatis beatae\",\"owner_home_zip\":\"54649\",\"owner_home_phone\":\"+1 (703) 346-1409\",\"owner_home_mobile_phone\":\"+1 (772) 506-2594\",\"owner_date_of_birth\":null,\"owner_ss\":\"Vel fuga Ipsum sae\",\"owner_signature\":\"https:\\/\\/designs365staging.com\\/Lendex\\/wp-content\\/uploads\\/fluentform\\/signatures\\/signature-178169ab1c88c41bba99765d6a8bf1e5.png\",\"owner_printed_name\":\"Marcia Watkins\",\"co_owner_printed_name\":\"Wing Valenzuela\",\"owner_date\":\"01\\/02\\/2025\",\"co_owner_date\":\"01\\/02\\/2025\",\"bank_statement\":[\"https:\\/\\/designs365staging.com\\/Lendex\\/wp-content\\/uploads\\/fluentform\\/ff-008cf63997d002e42606cac633612112-ff-file-sample_150kB.pdf\"],\"__submission\":{\"id\":\"25\",\"form_id\":\"3\",\"serial_number\":\"25\",\"source_url\":\"https:\\/\\/designs365staging.com\\/Lendex\\/Lendex\\/application-form\\/\",\"user_id\":\"1\",\"status\":\"unread\",\"is_favourite\":\"0\",\"browser\":\"Chrome\",\"device\":\"Windows\",\"ip\":\"110.93.228.5\",\"city\":null,\"country\":null,\"payment_status\":null,\"payment_method\":null,\"payment_type\":null,\"currency\":null,\"payment_total\":null,\"total_paid\":null,\"created_at\":\"2025-02-27 22:24:12\",\"updated_at\":\"2025-02-27 22:24:12\",\"user_inputs\":{\"business_legal_name\":\"Quin Warner\",\"business_dba\":\"Fugiat mollitia eum\",\"business_phone\":\"+1 (197) 195-3469\",\"mobile_phone\":\"+1 (544) 251-7479\",\"business_fax\":\"+1 (358) 388-1408\",\"other_phone\":\"+1 (894) 271-3396\",\"website\":\"https:\\/\\/www.cyf.tv\",\"email\":\"daniellhouston545@gmail.com\",\"physical_address\":\"Aliquam do amet cum\",\"physical_city\":\"Sunt ut facilis nihi\",\"physical_state\":\"Possimus eiusmod qu\",\"physical_zip\":\"61256\",\"mailing_address\":\"Adipisicing irure ei\",\"mailing_city\":\"Nihil enim voluptas\",\"mailing_state\":\"Elit quae anim comm\",\"mailing_zip\":\"83125\",\"legal_entity\":\"LLC\",\"business_start_date\":null,\"federal_tax_id\":\"Consequatur nemo mi\",\"home_based_business\":\"YES\",\"open_judgements\":\"YES\",\"open_bankrupticies\":\"NO\",\"state_of_inc\":\"Omnis aut obcaecati\",\"industry_type\":\"Lorem illum culpa e\",\"business_description\":\"A eiusmod nobis laud\",\"business_rent\":\"Mortgaged\",\"mthly_rent\":\"Est molestiae enim\",\"remaining_term_for_rent\":\"Temporibus voluptati\",\"payment_current\":\"YES\",\"landlord_company_contact\":\"Bartlett and Hernandez LLC\",\"phone_number\":\"+1 (165) 382-2634\",\"amount_requested\":\"Obcaecati sed simili\",\"when_are_funds_needed\":\"60+ Days\",\"desired_user_of_funding_proceeds\":\"Deserunt et itaque e\",\"what_kind_of_loan_are_you_looking_for\":\"Animi aut perspicia\",\"gross_annual_sales\":\"Qui Nam do quia moll\",\"gross_monthly_sales\":\"3\",\"monthly_credit_card_volume\":\"4\",\"current_cash_advance\":\"NO\",\"cash_advance_balance\":\"Est fuga Incidunt\",\"current_credit_card_processing_company\":\"Byrd Petersen Associates\",\"credit_score\":\"Laboris irure amet\",\"account_number\":\"414\",\"first_name\":\"Chancellor\",\"mi\":\"Michelle Lott\",\"last_name\":\"Wyatt\",\"title\":\"Magnam dignissimos i\",\"ownership\":\"Distinctio Quis do\",\"home_address\":\"Similique eveniet q\",\"home_city\":\"Commodo ut officia s\",\"home_state\":\"Ut rerum id provide\",\"home_zip\":\"78281\",\"home_phone\":\"+1 (331) 876-2475\",\"home_mobile_phone\":\"+1 (516) 882-8349\",\"date_of_birth\":null,\"ss\":\"Est reprehenderit en\",\"owner_first_name\":\"Rebekah\",\"owner_mi\":\"Reagan Ford\",\"owner_last_name\":\"Goff\",\"owner_title\":\"Tempor aperiam eveni\",\"owner_ownership\":\"Delectus qui labore\",\"owner_home_address\":\"Modi iure ad officii\",\"owner_home_city\":\"Laboris anim invento\",\"owner_home_state\":\"Perspiciatis beatae\",\"owner_home_zip\":\"54649\",\"owner_home_phone\":\"+1 (703) 346-1409\",\"owner_home_mobile_phone\":\"+1 (772) 506-2594\",\"owner_date_of_birth\":null,\"owner_ss\":\"Vel fuga Ipsum sae\",\"owner_signature\":\"<a href=\\\"https:\\/\\/designs365staging.com\\/Lendex\\/wp-content\\/uploads\\/fluentform\\/signatures\\/signature-178169ab1c88c41bba99765d6a8bf1e5.png\\\" target=\\\"_blank\\\"><img style=\\\"max-width:180px\\\" src=\\\"https:\\/\\/designs365staging.com\\/Lendex\\/wp-content\\/uploads\\/fluentform\\/signatures\\/signature-178169ab1c88c41bba99765d6a8bf1e5.png\\\" \\/><\\/a>\",\"owner_printed_name\":\"Marcia Watkins\",\"co_owner_printed_name\":\"Wing Valenzuela\",\"owner_date\":\"01\\/02\\/2025\",\"co_owner_date\":\"01\\/02\\/2025\",\"bank_statement\":\"https:\\/\\/designs365staging.com\\/Lendex\\/wp-content\\/uploads\\/fluentform\\/ff-008cf63997d002e42606cac633612112-ff-file-sample_150kB.pdf\"}},\"owner_signature_path\":\"\\/storage\\/upload\\/files\\/daniellhouston545@gmail.com\\/signature-178169ab1c88c41bba99765d6a8bf1e5.png\",\"bank_statement_path\":\"[\\\"\\\\\\/storage\\\\\\/upload\\\\\\/files\\\\\\/daniellhouston545@gmail.com\\\\\\/ff-008cf63997d002e42606cac633612112-ff-file-sample_150kB.pdf\\\"]\"}', 0, 1, '2025-02-27 22:24:13', '2025-02-27 22:24:13', NULL);

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
(6, 8, 0, 'Please Message me back.....', '2025-02-19 18:56:55', '2025-02-19 18:56:55'),
(7, 10, 0, 'Kindly look into this.', '2025-02-22 00:16:36', '2025-02-22 00:16:36'),
(8, 9, 10, 'Let me work on it...', '2025-02-22 00:16:57', '2025-02-22 00:16:57'),
(9, 11, 0, 'Hey', '2025-02-24 22:28:25', '2025-02-24 22:28:25'),
(10, 9, 11, 'Hey', '2025-02-24 22:28:43', '2025-02-24 22:28:43');

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
(17, '2025_02_19_000227_create_time_lines_table', 10),
(18, '2025_02_25_011755_create_notifications_table', 11);

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
(7, 'App\\Models\\User', 8),
(7, 'App\\Models\\User', 10),
(7, 'App\\Models\\User', 11),
(8, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('9f803d64-0397-4b93-b741-c0dbfb53c55d', 'App\\Notifications\\ApplicationStatus', 'App\\Models\\User', 1, '{\"title\":\"Quin Warner submitted an Application\",\"data\":19,\"image\":\"images\\/status\\/application-pending.png\",\"status\":\"primary\"}', NULL, '2025-02-27 22:24:15', '2025-02-27 22:24:15'),
('f6bb5e65-028b-4a2d-8799-6f743595aa16', 'App\\Notifications\\ApplicationStatus', 'App\\Models\\User', 9, '{\"title\":\"Quin Warner submitted an Application\",\"data\":19,\"image\":\"images\\/status\\/application-pending.png\",\"status\":\"primary\"}', NULL, '2025-02-27 22:24:15', '2025-02-27 22:24:15');

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
(7, 'User', 'web', '2025-01-24 06:51:28', '2025-01-24 06:51:28'),
(8, 'Super Admin', 'web', '2025-02-22 00:07:42', '2025-02-22 00:07:42');

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
(13, 8),
(14, 5),
(15, 5),
(16, 5),
(21, 5),
(21, 8),
(22, 5),
(23, 5),
(23, 8),
(24, 5),
(24, 8),
(26, 5),
(26, 7),
(26, 8),
(27, 5),
(27, 8),
(28, 5),
(28, 8),
(29, 5),
(29, 8),
(31, 7),
(32, 7),
(33, 7),
(34, 5),
(34, 8),
(35, 5),
(35, 8),
(36, 7),
(37, 7),
(37, 8);

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
('27RoYDO1IL0uh9Mgt4dwgmmaI2JWaWz2Q2iFxR9q', NULL, '125.62.90.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMnFSWW54Nmo4dzk3YWdSRjl0U1o5Wm9vQzRaU0ljZWFLNVdEV01RQSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozODoiaHR0cHM6Ly9sZW5kZXguc2FtcGxlbGlua3dlYi5zaXRlL2hvbWUiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozOToiaHR0cHM6Ly9sZW5kZXguc2FtcGxlbGlua3dlYi5zaXRlL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741033654),
('fERAMevgNECg7mxB8RnnUuyDVg0dr8ag3IWz3oTh', NULL, '125.62.90.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWtQV1lHZFd0VHJkYVVtekFta0p2dFg5RzNXeFdmeUxPZzd1aE9VcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vbGVuZGV4LnNhbXBsZWxpbmt3ZWIuc2l0ZS9sb2dpbiI7fX0=', 1741038060),
('XEWBVIcF83sESdktnuhulzgraIaUY3FEhwjmgnDl', NULL, '181.215.182.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmNhNXAzTzJDY1Bra2FOTWl1RUxNcHFUMlJZajN1N1c4Y1kyQVcyUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vbGVuZGV4LnNhbXBsZWxpbmt3ZWIuc2l0ZS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741038033),
('y9QXedM5Owi25jC310CS84VOKQzQbFw1Ly7LbLWc', NULL, '103.244.174.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYWFQZWtkbllGQWsxcEM0UWtwN2VjMW5IVVgwMzVvRm9HWk9TUjZWVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741037791);

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
(12, 8, 'Application - Approved', 'Your Application is Approved', '2025-02-19 14:02:21', '2025-02-19 14:02:21'),
(13, 2, 'Amaya Acevedo submitted an Application', 'documents-2', '2025-02-20 21:52:16', '2025-02-20 21:52:16'),
(14, 3, 'Mercedes Jimenez submitted an Application', 'documents-3', '2025-02-20 21:54:02', '2025-02-20 21:54:02'),
(15, 4, 'Ayanna Wheeler submitted an Application', 'documents-4', '2025-02-20 22:05:00', '2025-02-20 22:05:00'),
(16, 5, 'Quamar Hogan submitted an Application', 'documents-5', '2025-02-20 22:48:30', '2025-02-20 22:48:30'),
(17, 6, 'Randall Fletcher submitted an Application', 'documents-6', '2025-02-20 22:48:34', '2025-02-20 22:48:34'),
(18, 7, 'Ezra Mclean submitted an Application', 'documents-7', '2025-02-20 23:02:29', '2025-02-20 23:02:29'),
(19, 8, 'Lucius Fuller submitted an Application', 'documents-8', '2025-02-21 01:19:44', '2025-02-21 01:19:44'),
(20, 9, 'Roth Sawyer submitted an Application', 'documents-9', '2025-02-22 00:11:33', '2025-02-22 00:11:33'),
(21, 10, 'Application - In Process', 'Your Application is in process.', '2025-02-22 00:13:51', '2025-02-22 00:13:51'),
(22, 10, 'National ID Card is required', NULL, '2025-02-22 00:14:53', '2025-02-22 00:14:53'),
(23, 10, 'Passport is required', NULL, '2025-02-22 00:15:07', '2025-02-22 00:15:07'),
(24, 10, 'Roth Sawyer upload a document - National ID Card', NULL, '2025-02-22 00:15:32', '2025-02-22 00:15:32'),
(25, 10, 'National ID Card - Approved', NULL, '2025-02-22 00:15:58', '2025-02-22 00:15:58'),
(26, 10, 'Designs365 submitted an Application', 'documents-10', '2025-02-24 22:20:22', '2025-02-24 22:20:22'),
(27, 11, 'Application - In Process', 'Welcome', '2025-02-24 22:23:23', '2025-02-24 22:23:23'),
(28, 11, 'Social Security Number is required', 'Please provide your Social Security Number', '2025-02-24 22:25:48', '2025-02-24 22:25:48'),
(29, 11, 'Designs365 upload a document - Social Security Number', NULL, '2025-02-24 22:26:32', '2025-02-24 22:26:32'),
(30, 11, 'Social Security Number - Approved', NULL, '2025-02-24 22:27:07', '2025-02-24 22:27:07'),
(31, 11, 'Bank Statement - Resubmission Required', NULL, '2025-02-24 22:27:08', '2025-02-24 22:27:08'),
(32, 11, 'Bank Statement - Approved', NULL, '2025-02-24 22:27:44', '2025-02-24 22:27:44'),
(33, 11, 'Application - Approved', 'Welcome', '2025-02-24 22:29:36', '2025-02-24 22:29:36'),
(34, 11, 'Quamar Hogan submitted an Application', 'documents-11', '2025-02-27 20:05:42', '2025-02-27 20:05:42'),
(35, 12, ' submitted an Application', 'documents-12', '2025-02-27 20:44:33', '2025-02-27 20:44:33'),
(36, 13, ' submitted an Application', 'documents-13', '2025-02-27 20:51:22', '2025-02-27 20:51:22'),
(37, 14, ' submitted an Application', 'documents-14', '2025-02-27 20:52:37', '2025-02-27 20:52:37'),
(38, 15, 'Kim Curry submitted an Application', 'documents-15', '2025-02-27 21:50:22', '2025-02-27 21:50:22'),
(39, 16, 'Kim Curry submitted an Application', 'documents-16', '2025-02-27 21:54:53', '2025-02-27 21:54:53'),
(40, 17, 'Kim Curry submitted an Application', 'documents-17', '2025-02-27 22:13:14', '2025-02-27 22:13:14'),
(41, 18, 'Kim Curry submitted an Application', 'documents-18', '2025-02-27 22:14:55', '2025-02-27 22:14:55'),
(42, 19, 'Quin Warner submitted an Application', 'documents-19', '2025-02-27 22:24:15', '2025-02-27 22:24:15'),
(43, 11, 'Bank Statement - Rejected', NULL, '2025-03-03 21:38:02', '2025-03-03 21:38:02'),
(44, 11, 'Bank Statement - Approved', NULL, '2025-03-03 21:38:07', '2025-03-03 21:38:07');

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
(9, 'Super Admin', 'info@super.com', NULL, '$2y$12$yIvkCjNYgoYeb1anjWGnyurs0f/.mC2SALrrLqabm.Tr86BDKLG7y', NULL, '2025-02-22 00:08:26', '2025-02-22 00:08:26'),
(11, 'Designs365', 'johnwebking483@gmail.com', NULL, '$2y$12$UUfdQ68JWHJF6fH2evXn3e9J9Pz0VqIJ4xkQn641v3IAM/eB.lCVW', NULL, '2025-02-24 22:23:23', '2025-02-24 22:23:23');

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
(8, 'Bank Statement', NULL, '/storage/upload/files/johnwebking483@gmail.com/ff-e80edd1ecd7ed16279585f163926f7f8-ff-Sky-Serenity-6.png', 2, 11, '2025-02-24 22:23:23', '2025-03-03 21:38:06');

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `time_lines`
--
ALTER TABLE `time_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_docs`
--
ALTER TABLE `user_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
