-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: iun. 23, 2022 la 08:21 PM
-- Versiune server: 5.7.31
-- Versiune PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `shop2021`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=179 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_quantity`, `created_at`, `updated_at`) VALUES
(95, '4', '1', '1', '2022-03-25 19:28:30', '2022-03-25 19:28:30');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Routerele', 'routere', 'Toate tipurile de routere pe care le-ati cauta', 1, 'https://lcdn.altex.ro/resize/media/catalog/product/G/T/2bd48d28d1c32adea0e55139a4e6434a/GT-AC2900-1.jpg', '2022-02-22 14:47:09', '2022-03-31 09:39:03'),
(2, 'Casti', 'casti', 'Casti Wireless/cu fir gaming si surround', 0, 'https://lcdn.altex.ro/resize/media/catalog/product/C/a/2bd48d28d1c32adea0e55139a4e6434a/Casti-Gaming-Logitech-G733-Black-Coperta.jpg', '2022-02-22 14:47:09', '2022-02-22 14:47:09'),
(3, 'Surse Alimentare', 'surse', 'Surse ATX alimentare office/gaming', 0, 'https://m.media-amazon.com/images/I/81u+iAQ4mWL._AC_SL1500_.jpg', '2022-02-22 14:47:09', '2022-02-22 14:47:09'),
(4, 'Cabluri Retea', 'cabluri', 'Cabluri retea cat5e si cat6 (UTP, F/UTP) ', 0, 'https://gomagcdn.ro/domains/conectez.ro/files/product/medium/cablu-internet-lan-cat-8-sstp-cablu-retea-40-gb-s-si-2000-mhz-15-m-99-7942920775429956.jpg', '2022-02-22 14:47:09', '2022-02-22 14:47:09'),
(5, 'Set Mouse+Tastatura', 'set', 'Set Mouse+Tastatura wireless/gaming', 0, 'https://www.xkids.ro/wp-content/uploads/2021/08/01-kit-tastatura-si-mouse-gaming-ck888-400x400.jpg', '2022-02-22 14:47:09', '2022-02-22 14:47:09'),
(6, 'Unitati UPS', 'ups', 'UPS off-line, line-interactive, rackabil', 0, 'https://images.okr.ro/serve/product/51932780bce6d2b69d28919ace6365f6-11261-1000_1000', '2022-02-22 14:47:09', '2022-02-22 14:47:09');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `contact`
--

INSERT INTO `contact` (`id`, `nume`, `email`, `telefon`, `mesaj`, `created_at`, `updated_at`) VALUES
(1, 'tedy', 'tedy@yahoo.com', '2385792386', 'As vrea sa returnez un produs care nu functioneaza...', '2022-03-01 07:44:46', '2022-03-01 07:44:46'),
(2, 'Sergiu', 'sergiu@yahoo.com', '4895734985', 'Salut, merge treaba ?', '2022-03-09 13:39:12', '2022-03-09 13:39:12'),
(3, 'Calin', 'calin@yahoo.om', '0785205148', 'M-ar interesa o oferta la noul mouse asus si durata de livrare a produsului', '2022-04-21 07:41:37', '2022-04-21 07:41:37'),
(4, 'Test', 'test@yahoo.com', '0518957219', 'test', '2022-06-14 15:34:15', '2022-06-14 15:34:15');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 3),
(17, '2014_10_12_100000_create_password_resets_table', 3),
(18, '2019_08_19_000000_create_failed_jobs_table', 3),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(6, '2022_01_10_114627_create_admins_table', 2),
(20, '2021_12_19_113517_create_products_table', 3),
(21, '2022_02_19_113453_create_contact_table', 3),
(22, '2022_02_22_112200_create_categories_table', 3),
(23, '2022_02_22_142640_create_products_table', 4),
(24, '2022_02_22_211724_create_carts_table', 5),
(25, '2022_03_05_115117_create_orders_table', 6),
(26, '2022_03_05_115929_create_order_items_table', 6),
(27, '2022_03_09_202141_create_newsletters_table', 7);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(4, 'calin123@yahoo.com', '2022-03-09 18:50:33', '2022-03-09 18:50:33'),
(5, 'sergiu@yahoo.com', '2022-03-09 18:51:43', '2022-03-09 18:51:43'),
(6, 'mircea@yahoo.com', '2022-06-14 15:32:43', '2022-06-14 15:32:43'),
(7, 'test1@yahoo.com', '2022-06-17 13:04:49', '2022-06-17 13:04:49'),
(8, 'test2@yahoo.com', '2022-06-17 13:08:26', '2022-06-17 13:08:26'),
(9, 'test3@yahoo.com', '2022-06-17 13:09:09', '2022-06-17 13:09:09'),
(10, 'test3@yahoo.com', '2022-06-17 13:10:01', '2022-06-17 13:10:01'),
(11, 'test3@yahoo.com', '2022-06-17 13:10:52', '2022-06-17 13:10:52'),
(12, 'calin@yahoo.com', '2022-06-17 13:11:12', '2022-06-17 13:11:12');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oras` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codpostal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(4) NOT NULL DEFAULT '0',
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `email`, `telefon`, `adresa`, `oras`, `judet`, `codpostal`, `payment_mode`, `status`, `message`, `tracking_no`, `created_at`, `updated_at`) VALUES
(65, '1', 'Calin', 'Cufteac', 'calin.cufteac24@yahoo.com', '0785205148', 'Darstelor 6', 'Sibiu', 'Sibiu', '550196', 'Plata in magazin', 1, NULL, 'calin3223', '2022-06-23 17:09:33', '2022-06-17 17:22:10'),
(67, '1', 'Calin', 'Cufteac', 'calin.cufteac24@yahoo.com', '0785205148', 'Darstelor 6', 'Sibiu', 'Sibiu', '550196', 'Plata la ramburs', 0, NULL, 'calin3910', '2022-06-23 17:03:49', '2022-06-23 17:03:49'),
(71, '1', 'Calin', 'Cufteac', 'calin.cufteac24@yahoo.com', '0785205148', 'Darstelor 6', 'Sibiu', 'Sibiu', '550196', 'Plata la ramburs', 0, NULL, 'calin8198', '2022-06-23 17:15:08', '2022-06-23 17:15:08'),
(64, '1', 'Calin', 'Cufteac', 'calin.cufteac24@yahoo.com', '0785205148', 'Darstelor 6', 'Sibiu', 'Sibiu', '550196', 'Plata in magazin', 0, NULL, 'calin5942', '2022-06-23 17:08:48', '2022-06-17 17:08:48'),
(68, '1', 'Calin', 'Cufteac', 'calin.cufteac24@yahoo.com', '0785205148', 'Darstelor 6', 'Sibiu', 'Sibiu', '550196', 'Plata la ramburs', 0, NULL, 'calin4593', '2022-06-23 17:06:54', '2022-06-23 17:06:54'),
(70, '1', 'Calin', 'Cufteac', 'calin.cufteac24@yahoo.com', '0785205148', 'Darstelor 6', 'Sibiu', 'Sibiu', '550196', 'Plata la ramburs', 0, NULL, 'calin6355', '2022-06-23 20:15:52', '2022-06-23 20:15:52');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `prod_quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '9', '1', '170', '2022-03-22 12:42:59', '2022-03-22 12:42:59'),
(2, '2', '16', '1', '250', '2022-03-25 21:47:02', '2022-03-25 21:47:02'),
(3, '3', '6', '1', '120', '2022-04-20 08:25:30', '2022-04-20 08:25:30'),
(4, '4', '6', '1', '120', '2022-04-20 08:25:47', '2022-04-20 08:25:47'),
(5, '5', '6', '1', '120', '2022-04-20 08:26:19', '2022-04-20 08:26:19'),
(6, '6', '6', '1', '120', '2022-04-20 08:28:01', '2022-04-20 08:28:01'),
(7, '7', '14', '1', '130', '2022-04-20 08:29:40', '2022-04-20 08:29:40'),
(8, '8', '2', '1', '680', '2022-04-20 08:32:40', '2022-04-20 08:32:40'),
(9, '8', '6', '1', '120', '2022-04-20 08:32:40', '2022-04-20 08:32:40'),
(10, '8', '12', '1', '25', '2022-04-20 08:32:40', '2022-04-20 08:32:40'),
(11, '8', '3', '1', '2900', '2022-04-20 08:32:40', '2022-04-20 08:32:40'),
(12, '9', '1', '3', '150', '2022-05-27 17:15:33', '2022-05-27 17:15:33'),
(13, '9', '2', '2', '680', '2022-05-27 17:15:33', '2022-05-27 17:15:33'),
(14, '10', '1', '3', '150', '2022-05-27 17:15:59', '2022-05-27 17:15:59'),
(15, '10', '2', '2', '680', '2022-05-27 17:15:59', '2022-05-27 17:15:59'),
(16, '11', '1', '3', '150', '2022-05-27 17:16:27', '2022-05-27 17:16:27'),
(17, '11', '2', '2', '680', '2022-05-27 17:16:27', '2022-05-27 17:16:27'),
(18, '12', '1', '3', '150', '2022-05-27 17:16:54', '2022-05-27 17:16:54'),
(19, '12', '2', '2', '680', '2022-05-27 17:16:54', '2022-05-27 17:16:54'),
(20, '13', '1', '3', '150', '2022-05-27 17:18:26', '2022-05-27 17:18:26'),
(21, '13', '2', '2', '680', '2022-05-27 17:18:26', '2022-05-27 17:18:26'),
(22, '14', '1', '3', '150', '2022-05-27 17:19:07', '2022-05-27 17:19:07'),
(23, '14', '2', '2', '680', '2022-05-27 17:19:07', '2022-05-27 17:19:07'),
(24, '15', '1', '3', '150', '2022-05-27 17:19:24', '2022-05-27 17:19:24'),
(25, '15', '2', '2', '680', '2022-05-27 17:19:24', '2022-05-27 17:19:24'),
(26, '16', '1', '3', '150', '2022-05-27 17:21:17', '2022-05-27 17:21:17'),
(27, '16', '2', '2', '680', '2022-05-27 17:21:17', '2022-05-27 17:21:17'),
(28, '17', '8', '1', '1', '2022-06-14 15:37:07', '2022-06-14 15:37:07'),
(29, '18', '8', '1', '1', '2022-06-14 15:42:46', '2022-06-14 15:42:46'),
(30, '19', '8', '1', '1', '2022-06-14 15:42:57', '2022-06-14 15:42:57'),
(31, '20', '8', '1', '1', '2022-06-14 15:43:06', '2022-06-14 15:43:06'),
(32, '21', '8', '1', '1', '2022-06-14 15:53:39', '2022-06-14 15:53:39'),
(33, '22', '8', '1', '1', '2022-06-14 15:54:15', '2022-06-14 15:54:15'),
(34, '23', '8', '1', '1', '2022-06-14 15:58:09', '2022-06-14 15:58:09'),
(35, '24', '8', '1', '1', '2022-06-14 15:59:37', '2022-06-14 15:59:37'),
(36, '25', '8', '1', '1', '2022-06-14 16:20:29', '2022-06-14 16:20:29'),
(37, '26', '14', '1', '130', '2022-06-14 16:25:27', '2022-06-14 16:25:27'),
(38, '27', '9', '1', '170', '2022-06-14 16:27:32', '2022-06-14 16:27:32'),
(39, '28', '7', '1', '1600', '2022-06-14 16:38:55', '2022-06-14 16:38:55'),
(40, '29', '2', '1', '680', '2022-06-14 16:51:33', '2022-06-14 16:51:33'),
(41, '30', '2', '1', '680', '2022-06-14 16:51:55', '2022-06-14 16:51:55'),
(42, '31', '2', '1', '680', '2022-06-14 16:52:11', '2022-06-14 16:52:11'),
(43, '32', '1', '1', '150', '2022-06-14 16:54:41', '2022-06-14 16:54:41'),
(44, '33', '2', '1', '680', '2022-06-14 17:00:02', '2022-06-14 17:00:02'),
(45, '34', '14', '1', '130', '2022-06-14 17:04:13', '2022-06-14 17:04:13'),
(46, '35', '2', '1', '680', '2022-06-14 17:06:37', '2022-06-14 17:06:37'),
(47, '36', '2', '1', '680', '2022-06-14 17:08:11', '2022-06-14 17:08:11'),
(48, '37', '2', '1', '680', '2022-06-14 17:08:37', '2022-06-14 17:08:37'),
(49, '38', '2', '1', '680', '2022-06-14 17:09:00', '2022-06-14 17:09:00'),
(50, '39', '2', '1', '680', '2022-06-14 17:13:57', '2022-06-14 17:13:57'),
(51, '40', '2', '1', '680', '2022-06-14 17:14:13', '2022-06-14 17:14:13'),
(52, '41', '2', '1', '680', '2022-06-14 17:15:44', '2022-06-14 17:15:44'),
(53, '42', '2', '1', '680', '2022-06-14 17:16:16', '2022-06-14 17:16:16'),
(54, '43', '2', '1', '680', '2022-06-14 17:17:26', '2022-06-14 17:17:26'),
(55, '44', '1', '1', '150', '2022-06-17 13:27:20', '2022-06-17 13:27:20'),
(56, '45', '12', '1', '25', '2022-06-17 13:32:37', '2022-06-17 13:32:37'),
(57, '49', '2', '1', '680', '2022-06-17 13:36:31', '2022-06-17 13:36:31'),
(58, '50', '4', '1', '650', '2022-06-17 13:41:30', '2022-06-17 13:41:30'),
(59, '51', '15', '1', '400', '2022-06-17 13:49:35', '2022-06-17 13:49:35'),
(60, '52', '1', '1', '150', '2022-06-17 13:51:30', '2022-06-17 13:51:30'),
(61, '53', '2', '1', '680', '2022-06-17 13:52:28', '2022-06-17 13:52:28'),
(62, '54', '6', '1', '120', '2022-06-17 13:55:25', '2022-06-17 13:55:25'),
(63, '56', '1', '1', '150', '2022-06-17 16:32:40', '2022-06-17 16:32:40'),
(64, '57', '2', '1', '680', '2022-06-17 16:34:47', '2022-06-17 16:34:47'),
(65, '58', '15', '1', '400', '2022-06-17 16:36:49', '2022-06-17 16:36:49'),
(66, '59', '2', '1', '680', '2022-06-17 16:57:25', '2022-06-17 16:57:25'),
(67, '60', '1', '1', '150', '2022-06-17 17:02:04', '2022-06-17 17:02:04'),
(68, '61', '2', '1', '680', '2022-06-17 17:04:15', '2022-06-17 17:04:15'),
(69, '62', '1', '1', '150', '2022-06-17 17:05:29', '2022-06-17 17:05:29'),
(70, '63', '1', '1', '150', '2022-06-17 17:08:19', '2022-06-17 17:08:19'),
(71, '64', '15', '1', '400', '2022-06-17 17:08:48', '2022-06-17 17:08:48'),
(72, '65', '2', '1', '680', '2022-06-17 17:09:33', '2022-06-17 17:09:33'),
(73, '66', '2', '1', '680', '2022-06-17 17:16:21', '2022-06-17 17:16:21'),
(74, '67', '1', '1', '150', '2022-06-23 17:03:49', '2022-06-23 17:03:49'),
(75, '68', '10', '1', '150', '2022-06-23 17:06:54', '2022-06-23 17:06:54'),
(76, '69', '1', '1', '150', '2022-06-23 17:09:03', '2022-06-23 17:09:03'),
(77, '70', '4', '1', '650', '2022-06-23 17:12:57', '2022-06-23 17:12:57'),
(78, '71', '1', '1', '150', '2022-06-23 17:15:08', '2022-06-23 17:15:08');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` float NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `quantity`, `status`, `trending`, `created_at`, `updated_at`) VALUES
(1, 1, 'Router TP-LINK', 'Router Wireless Gigabit TP-LINK Archer A6 AC1200', 'Archer A6 creează o rețea fiabilă și rapidă, alimentată de tehnologia Wi-Fi 802.11ac. Banda de 2,4 GHz oferă viteze de până la 300 Mbps pentru sarcinile de zi cu zi, cum ar fi trimiterea de e-mail-uri și navigarea pe web, în timp ce banda de 5 GHz oferă viteze de pana la 867 Mbps, ideală pentru streaming video HD și jocuri online.', '180', 150, 'https://lcdn.altex.ro/resize/media/catalog/product/R/O/2bd48d28d1c32adea0e55139a4e6434a/ROUARCHERA6_1_a3c183f8.jpg', '20', 0, 1, '2022-02-22 14:46:07', '2022-06-23 17:15:08'),
(2, 2, 'Căști Logitech', 'Căști Gaming Wireless LOGITECH G733 LIGHTSPEED RGB, 7.1', 'Căștile gaming LOGITECH G733, dispun de un sunet surround, filtre vocale și iluminat avansat \r\nTehnologia wireless LIGHTSPEED vă oferă o autonomie de peste 29 ore și până la 20m de raza de acțiune, la un volum de 50% și iluminare sporită. Ai libertatea wireless de a te juca încontinuu și să te cufunzi în joc, muzica, film sau orice altceva dorești să asculți.', '750', 680, 'https://lcdn.altex.ro/resize/media/catalog/product/C/a/2bd48d28d1c32adea0e55139a4e6434a/Casti-Gaming-Logitech-G733-Black-Coperta.jpg', '0', 0, 1, NULL, '2022-06-17 17:16:21'),
(3, 6, 'UPS APC', 'APC Smart-UPS 1500VA LCD 230V with SmartConnect\r\n\r\n', 'Putere de incărcare1000 W \r\nPutere de ieșire 1500VA \\n\r\nTensiune de intrare230 V\r\nFrecvența de ieșire50/60 Hz +/- 3 Hz\r\n \r\nTimp de transfer  \\6m\r\n \r\nTimp de reincarcare3 ore\r\n \r\nAlarma audioDA\r\n \r\nMontare in rackNu\r\n \r\nAlteleEcran LCD\r\n \r\nDimensiuni171 x 219 x 439/r/n\r\n \r\nGreutate24.09 Kg', '3200', 2900, 'https://www.flax.ro/static/imagini-produse/ups-apc-smart-ups-c-lcd-1500va-smc1500ic-256200-1.jpg', '6', 0, 0, NULL, '2022-04-20 08:32:40'),
(4, 1, 'Sistem Wireless TP-LINK', 'Mesh TP-LINK Deco S4 AC1200', 'Tehnologia Deco Mesh iți oferă viteze Wi-Fi mai rapide și semnalul Wi-Fi puternic poate acoperi o locuință până la 370 metri pătrați. Unitățile Deco funcționează impreună pentru a forma o singură rețea unificate cu un singur SSID.', '700', 650, 'https://lcdn.altex.ro/resize/media/catalog/product/R/O/2bd48d28d1c32adea0e55139a4e6434a/ROUDECOS43PK-3.jpg', '3', 0, 1, NULL, '2022-06-23 17:12:57'),
(5, 1, 'Router Asus ROG', 'Router Wireless Gigabit ASUS ROG Rapture GT-AC2900', 'Router pentru jocuri WiFi cu banda dubla AC2900, recomandat GeForce NVIDIA, accelerarea jocului la nivel triplu, suport AiMesh WiFi, AiProtection Free Internet Security, Open NAT forwarding port. DUAL-BAND 750 + 2167 MBPS, USB 3.0', '700', 600, 'https://lcdn.altex.ro/resize/media/catalog/product/G/T/2bd48d28d1c32adea0e55139a4e6434a/GT-AC2900-1.jpg', '6', 0, 1, NULL, '2022-03-12 12:07:03'),
(6, 5, 'Tastatură + Mouse Asus', 'Kit Tastatură + Mouse Wireless ASUS W2500, Negru', 'ASUS W2500 este un kit wireless format din tastatură și mouse, proiectate pentru productivitate maximă. Pur și simplu conectați adaptorul 2.4GHz la portul USB de la calculator sau laptop și sunteti gata să lucrați. Tastatura și mouse-ul sunt confortabile chiar și după ore indelungate de utilizare.\r\n', '150', 120, 'https://s13emagst.akamaized.net/products/14903/14902791/images/res_8b1497275e6e6f36ef7820ae663e99f3.jpg?width=450&height=450&hash=B2B946D95E214B3C520C13881F194E62', '7', 1, 1, NULL, '2022-06-17 13:55:25'),
(7, 4, 'Cablu FTP Cat6', 'Cablu FTP cat6 Cupru Tambur 500M SCHRACK', 'Cablu FTP cat6 Cupru Tambur 500M SCHRACK. Cablu FTP cat6, Diam Cu 0.7mm, folie Al, folie PVC, fir metalic ground, fir matase.', '1900', 1600, 'https://a2t.ro/img/1000/800/resize/c/a/cablu-ftp-cat6-cupru-tambur-500m-schrack-768_5.jpg', '9', 0, 0, NULL, '2022-06-14 16:38:55'),
(8, 5, 'Kit gaming', 'Kit gaming A+ M1 tastatura metalica + mouse 3200 DPI', 'Tastatura iți conferă precizie sporită datorită eficienței mișcării degetelor în momentul tastării, iar are o suprafață creată din metal ,ce permite comutarea rapidă a armelor cu un grad ridicat de precizie, fară a-ți aluneca degetul în cele mai nepotrivite momente. ', '140', 120, 'https://s13emagst.akamaized.net/products/14640/14639565/images/res_99caea501ee36dd5f268a214f5be20a7.jpg?width=450&height=450&hash=C708E321DA6D7DA2B11B0F0DC6C21183', '8', 0, 2, NULL, '2022-06-14 16:20:29'),
(9, 5, 'Kit tastatura + mouse Lenovo', 'Kit tastatura și mouse Lenovo 510, US layout, Alb', 'Lenovo 510 Wireless Combo Keyboard & Mouse este o combinație de tastatura și mouse care vă completează biroul cu un design simplu, dar elegant. Mouse-ul wireless care îl însoțește are un design ambidextru și dispune de un senzor optic de 1200 DPI.', '220', 170, 'https://s13emagst.akamaized.net/products/37948/37947887/images/res_cdd7a85e5ba4b17849bb5b0ce9a91af8.jpg?width=450&height=450&hash=FA2689244790FF93DC41AC738B549132', '9', 0, 1, NULL, '2022-06-14 16:27:32'),
(10, 2, 'Căști Gaming Logitech', 'Căști Gaming LOGITECH G332, stereo, multiplatformă, 3.5mm, negru-rosu', 'Difuzoarele de 50 mm produc un sunet complet și expansiv pentru o experiență de joc cat mai placută. Căștile funcționează cu PC, Mac sau cu console de jocuri, inclusiv PlayStation 4, Xbox One, Nintendo Switch și dispozitivele mobile prin cablu de 3,5 mm.', '180', 150, 'https://lcdn.altex.ro/resize/media/catalog/product/C/a/2bd48d28d1c32adea0e55139a4e6434a/Casti_gaming_Logitech_G332_Poza_2_d9a479ea.jpg', '4', 1, 1, NULL, '2022-06-23 17:06:54'),
(11, 2, 'Căști Wireless JBL', 'Căști audio On-Ear JBL Tune 500BT, Wireless, Bluetooth, Pure Bass Sound, Hands-free Call, 16H, Negru', 'Căștile sunt On-Ear cu tehnologie Wireless. Durate de functionare pana la 16 ore, rază de acțiune de 10 m și o impedanță de 32 de Ohm', '270', 220, 'https://www.flanco.ro/media/catalog/product/cache/e53d4628cd85067723e6ea040af871ec/1/3/133366-1.jpg', '7', 0, 1, NULL, '2022-03-14 08:53:19'),
(12, 4, 'Cablu CAT7', 'Cablu internet CAT 7 ,Cablu LAN SSTP - 10 GB / s si 600 MHz ,1m,Vention', 'Cablu LAN Cat 7 cu doi conectori RJ45. Cu acest cablu de rețea obțineți internet de mare viteza. Conectorii sunt placați cu aur, care asigura o transmisie fără a deranja semnalul de internet. Acest cablu Cat 7 este disponibil pana la o lungime de 20 de metri.', '35', 25, 'https://s13emagst.akamaized.net/products/30554/30553107/images/res_0148946d250121401b007642cd2e35fb.jpg?width=450&height=450&hash=F239A1FDE5C3B9644F3F83AC6CEC7F5C', '13', 0, 1, NULL, '2022-06-17 13:32:37'),
(13, 4, 'Cablu Cat5 Utp', 'Cablu de retea UTP Cat 5 TED Rola de 305m', 'Cablu UTP, rolă de 305 m de la TED ELECTRIC. Acest tip, ca si majoritatea cablurilor UTP cat5 (adica de categoria 5), sunt proiectate pentru a oferi consumatorului o fidelitate înaltă a semnalului și sunt utilizate în principal în cablarea rețelelor de date.', '', 200, 'https://a2t.ro/img/1000/800/resize/i/m/imagine-utpcat5ccated-1.jpg', '22', 0, 0, NULL, '2022-03-12 13:20:48'),
(14, 3, 'Sursă alimentare SEGOTEP', 'Sursă de alimentare SEGOTEP SG-500A, 500W, 120mm, 80 PLUS, SG-500AE', 'Sursă de alimentare SEGOTEP SG-500A, 500W, 120mm, 80 PLUS, SG-500AE. Conectori 20+4 Pin ATX x1, 4+4 Pin ATX/EPS x1, 6+2 PCI-E x2, SATA x6, Molex x3, Floppy x1', '150', 130, 'https://lcdn.altex.ro/resize/media/catalog/product/c/s/2bd48d28d1c32adea0e55139a4e6434a/csasg500ae_1.jpg', '0', 0, 0, NULL, '2022-06-14 17:04:13'),
(15, 3, 'Sursă alimentare NJOY', 'Sursă de alimentare NJOY Alpha, 850W, 140mm, 80 PLUS Gold', 'Sursă de alimentare NJOY Alpha, 850W, 140mm, 80 PLUS Gold. Conectori:	1 x 20+4pin; 1 x ATX/EPS 12V; 4 x PCI-E 6+2pin; 6 x SATA; 4 x 4pin Molex', '450', 400, 'https://lcdn.altex.ro/resize/media/catalog/product/P/S/2bd48d28d1c32adea0e55139a4e6434a/PSAT4065A4MCDCO01B-4.jpg', '1', 0, 0, NULL, '2022-06-17 17:08:48'),
(16, 3, 'Sursă alimentare NJOY', 'Sursă de alimentare NJOY Freya 600, 600W, 120mm, 80 PLUS Bronze.', 'Sursă de alimentare NJOY Freya 600, 600W, 120mm, 80 PLUS Bronze,  conectori 	1 x 20+4pin; 1 x ATX/EPS 12V; 2 x PCI-E 6+2pin; 6 x S-ATA si protectii 	OCP / OVP / UVP / SCP / OPP / OTP', '270', 250, 'https://lcdn.altex.ro/resize/media/catalog/product/F/R/2bd48d28d1c32adea0e55139a4e6434a/FREYA_1_f0114797.jpg', '5', 0, 1, NULL, '2022-03-25 21:47:02'),
(18, 2, 'Căști Huawei', 'HUAWEI FreeBuds 4i Red Edition', 'Anularea activă a zgomotului,\r\n 10 ore de redare continuă.\r\nSunet la cea mai bună calitate', '270', 249, 'https://img01.huaweifile.com/eu/ro/huawei/pms/product/6941487212293/800_800_B64856DF88A3BF3FF3972A56180E642A1BB1BD8170CFCAE9mp.png', '5', 1, 1, '2022-04-01 05:29:26', '2022-04-01 05:29:26');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT '0',
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oras` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codpostal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `lname`, `telefon`, `adresa`, `oras`, `judet`, `codpostal`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Calin', 'calin.cufteac24@yahoo.com', NULL, '$2y$10$wP/AAnm8BE2PSm.rqOll1.8PUI10iXzMCPvC9nZZ0weQFf0fS59Hm', 1, 'Cufteac', '0785205148', 'Darstelor 6', 'Sibiu', 'Sibiu', '550196', 'C6iHpUSowgWfB0Rh1uEjhpliyuVEGUE8rJkrn1AWPveMAkbj7Zc7hyZ9RpF8', '2022-02-22 09:37:52', '2022-03-05 10:54:38'),
(2, 'mihai', 'mihai@yahoo.com', NULL, '$2y$10$uBExSeEBMPcVaGfUaYkrouc8oSasCl6VHTGyEjEwhaoPYF9anlVWK', 0, 'pop', '52378598', 'asdajhkj', 'sibiu', 'sibiu', '42341', NULL, '2022-02-25 13:47:00', '2022-03-08 09:37:56'),
(3, 'Sergiu', 'sergiu@yahoo.com', NULL, '$2y$10$GEN2NTuOIR0PGT.qbnPmeO9lTAbSJF0k.FG9glXFz0naxSQ7B2/Xm', 1, 'Cioca', '325235', 'Distrbutieti nr 1', 'Sibiu', 'Sibiu', '329586986', NULL, '2022-03-09 13:46:50', '2022-03-09 18:00:46'),
(4, 'Andrei', 'andrei@yahoo.com', NULL, '$2y$10$zTcgLZmtXKF/f9LrYfkt7.koHoaGQygGC0licCNYOg6FvlzmQGKLO', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-25 19:28:23', '2022-03-25 19:28:23'),
(6, 'testverify', 'testverify@yahoo.com', '2022-06-21 10:58:56', '$2y$10$ETZ55i74zJea5VoODaQFKeU9r99xnm.Ju8htB3gEdag4Zp6vofRnu', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-21 10:15:23', '2022-06-21 10:58:56'),
(7, 'test2', 'test2@yahoo.com', NULL, '$2y$10$66VsUN.EgXCPIKXsVOtwXOhSv7jPmaDFNPRBbxbmMKC19BDHX2E0.', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-21 11:02:57', '2022-06-21 11:02:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
