-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2025 at 03:39 PM
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
-- Database: `u423292006_frames`
--

-- --------------------------------------------------------

--
-- Table structure for table `additionalHistory`
--

CREATE TABLE `additionalHistory` (
  `id` int(10) UNSIGNED NOT NULL,
  `vId` varchar(255) DEFAULT NULL,
  `vname` varchar(500) NOT NULL DEFAULT ' ',
  `totalLoss` varchar(555) NOT NULL DEFAULT ' ',
  `totalLossOwners` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `structuredDamage` varchar(500) NOT NULL DEFAULT ' ',
  `structuredDamageOwners` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `airBagDeployment` varchar(500) NOT NULL DEFAULT ' ',
  `airBagDeploymentOwners` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `odoMeterCheck` varchar(500) NOT NULL DEFAULT ' ',
  `odoMeterCheckOwners` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `accidentDamage` varchar(500) NOT NULL DEFAULT '',
  `accidentDamageOwners` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `manufacturerRecall` varchar(500) NOT NULL DEFAULT ' ',
  `manufacturerRecallOwners` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `basicWarranty` varchar(500) NOT NULL DEFAULT ' ',
  `basicWarrantyOwners` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `additionalHistory`
--

INSERT INTO `additionalHistory` (`id`, `vId`, `vname`, `totalLoss`, `totalLossOwners`, `structuredDamage`, `structuredDamageOwners`, `airBagDeployment`, `airBagDeploymentOwners`, `odoMeterCheck`, `odoMeterCheckOwners`, `accidentDamage`, `accidentDamageOwners`, `manufacturerRecall`, `manufacturerRecallOwners`, `basicWarranty`, `basicWarrantyOwners`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a786', ' ', 'No total loss reported to CARFAX.', '[\"No issues reported\",\"No issues reported\",\"No issues reported\",\"No issues reported\"]', 'No structural damage reported to CARFAX.', '[\"No issues reported\",\"No issues reported\",\"No issues reported\",\"No issues reported\"]', 'No airbag deployment reported to CARFAX.', '[\"No issues reported\",\"No issues reported\",\"No issues reported\",\"No issues reported\"]', 'No indication of an odometer rollback.', '[\"No issues reported\",\"No issues reported\",\"No issues reported\",\"No issues reported\"]', 'No accidents or damage reported to CARFAX.', '[\"No issues reported\",\"No issues reported\",\"No issues reported\",\"No issues reported\"]', 'At least 1 manufacturer recall requires repair.', '[\"No issues reported\",\"No issues reported\",\"No issues reported\",\"No issues reported\"]', 'Original warranty estimated to have expired.', '[\"Warranty Expired.\",\"Warranty Expired.\",\"Warranty Expired.\",\"Warranty Expired.\"]', '2024-11-27 13:22:45', '2024-11-27 13:22:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 0, 13, 'Admin', 'icon-water', NULL, NULL, NULL, '2024-12-11 13:18:08', NULL),
(3, 2, 15, 'Admin Users', 'icon-users', 'auth/users', NULL, NULL, '2024-12-11 13:18:08', NULL),
(4, 2, 16, 'Roles', 'icon-user', 'auth/roles', NULL, NULL, '2024-12-11 13:18:08', NULL),
(55, 73, 8, 'Contact Us', 'icon-user-clock', 'contactus', NULL, '2024-11-26 04:50:04', '2024-12-10 16:41:08', NULL),
(58, 0, 9, 'Uploaded Media', 'icon-file-image', 'media?path=%2Ffiles&view=list&select=0&fn=selectFile', NULL, '2024-11-26 09:03:02', '2024-12-11 00:29:16', NULL),
(68, 0, 11, 'App Settings', 'icon-cogs', 'app-settings', NULL, '2024-11-28 16:30:31', '2024-12-17 16:23:54', NULL),
(69, 73, 4, 'Subscriptions Settings', 'icon-folder-plus', 'subscriptions-settings', NULL, '2024-11-28 17:00:10', '2024-12-10 16:41:08', NULL),
(70, 73, 5, 'Notifications', 'icon-bell', 'notifies', NULL, '2024-11-28 17:38:19', '2024-12-10 16:41:08', NULL),
(71, 73, 2, 'App Users', 'icon-users', 'app-users', NULL, '2024-11-29 01:15:47', '2024-12-10 16:41:08', NULL),
(72, 73, 3, 'Cloud Storage', 'icon-cloud-download-alt', 'cloudstorages', NULL, '2024-11-29 04:58:33', '2024-12-10 16:41:08', NULL),
(73, 0, 1, 'App Side', 'icon-user-friends', NULL, NULL, '2024-11-29 11:45:09', '2024-12-10 16:41:08', NULL),
(75, 73, 6, 'Orders', 'icon-crop-alt', 'orders', NULL, '2024-11-29 13:30:24', '2024-12-10 16:41:08', NULL),
(76, 73, 7, 'Transactions History', 'icon-hand-holding-usd', 'transaction-histories', NULL, '2024-12-10 08:58:07', '2024-12-10 16:41:08', NULL),
(86, 2, 14, 'Menu', 'icon-align-left', 'auth/menu', NULL, '2024-12-10 16:55:18', '2024-12-11 13:18:08', NULL),
(92, 0, 12, 'Send Emails', 'icon-mail-bulk', 'send-emails', NULL, '2024-12-11 01:00:24', '2024-12-11 13:18:39', NULL),
(98, 0, 10, 'Frames', 'icon-draw-polygon', 'frames', NULL, '2024-12-11 12:02:01', '2024-12-17 16:23:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_operation_log`
--

CREATE TABLE `admin_operation_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `method` varchar(10) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `input` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_operation_log`
--

INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(10150, 2, 'admin/auth/menu', 'GET', '154.81.246.253', '[]', '2024-12-16 14:46:46', '2024-12-16 14:46:46'),
(10151, 2, 'admin/auth/menu/84', 'DELETE', '154.81.246.253', '{\"_method\":\"delete\",\"_token\":\"GxbQeWwknwciLCbiVtuzuaQ4UmjNufc3VArEwtGi\"}', '2024-12-16 14:46:51', '2024-12-16 14:46:51'),
(10152, 2, 'admin/auth/menu', 'GET', '154.81.246.253', '[]', '2024-12-16 14:46:52', '2024-12-16 14:46:52'),
(10153, 2, 'admin/auth/menu', 'GET', '154.81.246.253', '[]', '2024-12-16 14:47:02', '2024-12-16 14:47:02'),
(10154, 2, 'admin/app-users', 'GET', '154.81.246.253', '[]', '2024-12-16 15:24:49', '2024-12-16 15:24:49'),
(10155, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:03:21', '2024-12-16 18:03:21'),
(10156, 1, 'admin/app-users', 'GET', '154.81.246.253', '[]', '2024-12-16 18:03:42', '2024-12-16 18:03:42'),
(10157, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-16 18:03:43', '2024-12-16 18:03:43'),
(10158, 2, 'admin/subscriptions-settings', 'GET', '182.185.156.16', '[]', '2024-12-16 18:04:00', '2024-12-16 18:04:00'),
(10159, 2, 'admin/notifies', 'GET', '182.185.156.16', '[]', '2024-12-16 18:04:03', '2024-12-16 18:04:03'),
(10160, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-16 18:04:05', '2024-12-16 18:04:05'),
(10161, 2, 'admin/transaction-histories', 'GET', '182.185.156.16', '[]', '2024-12-16 18:04:22', '2024-12-16 18:04:22'),
(10162, 2, 'admin/auth/users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:04:27', '2024-12-16 18:04:27'),
(10163, 2, 'admin/transaction-histories', 'GET', '182.185.156.16', '[]', '2024-12-16 18:04:36', '2024-12-16 18:04:36'),
(10164, 2, 'admin/auth/roles', 'GET', '182.185.156.16', '[]', '2024-12-16 18:04:39', '2024-12-16 18:04:39'),
(10165, 2, 'admin/auth/roles/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:04:44', '2024-12-16 18:04:44'),
(10166, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:05:12', '2024-12-16 18:05:12'),
(10167, 2, 'admin/send-emails/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:05:17', '2024-12-16 18:05:17'),
(10168, 2, 'admin/send-emails', 'POST', '182.185.156.16', '{\"options\":\"1\",\"email\":\"umair@gmail.com\",\"search_terms\":null,\"subject\":\"aye hAYE\",\"body\":\"jbh\",\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:06:59', '2024-12-16 18:06:59'),
(10169, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:07:02', '2024-12-16 18:07:02'),
(10170, 2, 'admin/send-emails/10/edit', 'GET', '182.185.156.16', '[]', '2024-12-16 18:07:25', '2024-12-16 18:07:25'),
(10171, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:07:32', '2024-12-16 18:07:32'),
(10172, 2, 'admin/app-users/11/edit', 'GET', '182.185.156.16', '[]', '2024-12-16 18:07:39', '2024-12-16 18:07:39'),
(10173, 2, 'admin/app-users/11', 'PUT', '182.185.156.16', '{\"isActive\":\"0\",\"name\":\"umair\",\"email\":\"mohammadumaiiir@gmail.com\",\"phone\":null,\"password\":\"*****-filtered-out-*****\",\"address\":null,\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\",\"_method\":\"PUT\"}', '2024-12-16 18:07:56', '2024-12-16 18:07:56'),
(10174, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:07:57', '2024-12-16 18:07:57'),
(10175, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:08:05', '2024-12-16 18:08:05'),
(10176, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:08:09', '2024-12-16 18:08:09'),
(10177, 2, 'admin/send-emails/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:08:15', '2024-12-16 18:08:15'),
(10178, 2, 'admin/send-emails', 'POST', '182.185.156.16', '{\"options\":\"1\",\"email\":\"mohammadumaiiir@gmail.com\",\"search_terms\":null,\"subject\":\"nn,\",\"body\":\"bj mj,,\",\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:08:24', '2024-12-16 18:08:24'),
(10179, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:08:26', '2024-12-16 18:08:26'),
(10180, 2, 'admin/contactus', 'GET', '182.185.156.16', '[]', '2024-12-16 18:12:13', '2024-12-16 18:12:13'),
(10181, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-16 18:12:23', '2024-12-16 18:12:23'),
(10182, 2, 'admin/transaction-histories', 'GET', '182.185.156.16', '[]', '2024-12-16 18:12:39', '2024-12-16 18:12:39'),
(10183, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-16 18:13:10', '2024-12-16 18:13:10'),
(10184, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:13:12', '2024-12-16 18:13:12'),
(10185, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-16 18:13:18', '2024-12-16 18:13:18'),
(10186, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:13:41', '2024-12-16 18:13:41'),
(10187, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-16 18:13:46', '2024-12-16 18:13:46'),
(10188, 2, 'admin/orders/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:13:48', '2024-12-16 18:13:48'),
(10189, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-16 18:14:29', '2024-12-16 18:14:29'),
(10190, 2, 'admin/cloudstorages/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:14:36', '2024-12-16 18:14:36'),
(10191, 2, 'admin/transaction-histories', 'GET', '182.185.156.16', '[]', '2024-12-16 18:15:16', '2024-12-16 18:15:16'),
(10192, 2, 'admin/transaction-histories/1', 'PUT', '182.185.156.16', '{\"_method\":\"PUT\",\"isPay\":\"off\",\"after-save\":\"exit\"}', '2024-12-16 18:15:43', '2024-12-16 18:15:43'),
(10193, 2, 'admin/transaction-histories/1', 'PUT', '182.185.156.16', '{\"_method\":\"PUT\",\"isPay\":\"on\",\"after-save\":\"exit\"}', '2024-12-16 18:15:46', '2024-12-16 18:15:46'),
(10194, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-16 18:16:59', '2024-12-16 18:16:59'),
(10195, 2, 'admin/frames', 'GET', '182.185.156.16', '[]', '2024-12-16 18:17:01', '2024-12-16 18:17:01'),
(10196, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-16 18:17:10', '2024-12-16 18:17:10'),
(10197, 2, 'admin/app-settings', 'GET', '182.185.156.16', '[]', '2024-12-16 18:17:13', '2024-12-16 18:17:13'),
(10198, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-16 18:17:18', '2024-12-16 18:17:18'),
(10199, 2, 'admin/orders/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:17:23', '2024-12-16 18:17:23'),
(10200, 2, 'admin/orders', 'POST', '182.185.156.16', '{\"uid\":\"10\",\"search_terms\":null,\"status\":\"completed\",\"price\":null,\"isPay\":null,\"trId\":\"abc\",\"desc\":null,\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:18:00', '2024-12-16 18:18:00'),
(10201, 2, 'admin/orders/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:18:00', '2024-12-16 18:18:00'),
(10202, 2, 'admin/orders', 'POST', '182.185.156.16', '{\"uid\":\"10\",\"search_terms\":null,\"status\":\"completed\",\"price\":null,\"isPay\":null,\"trId\":\"abc\",\"desc\":null,\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:19:07', '2024-12-16 18:19:07'),
(10203, 2, 'admin/orders/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:19:08', '2024-12-16 18:19:08'),
(10204, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-16 18:19:12', '2024-12-16 18:19:12'),
(10205, 2, 'admin/app-settings', 'GET', '182.185.156.16', '[]', '2024-12-16 18:19:17', '2024-12-16 18:19:17'),
(10206, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-16 18:19:23', '2024-12-16 18:19:23'),
(10207, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:19:28', '2024-12-16 18:19:28'),
(10208, 2, 'admin/subscriptions-settings', 'GET', '182.185.156.16', '[]', '2024-12-16 18:19:35', '2024-12-16 18:19:35'),
(10209, 2, 'admin/notifies', 'GET', '182.185.156.16', '[]', '2024-12-16 18:19:39', '2024-12-16 18:19:39'),
(10210, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-16 18:19:43', '2024-12-16 18:19:43'),
(10211, 2, 'admin/orders/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:19:57', '2024-12-16 18:19:57'),
(10212, 2, 'admin/transaction-histories', 'GET', '182.185.156.16', '[]', '2024-12-16 18:20:45', '2024-12-16 18:20:45'),
(10213, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:21:02', '2024-12-16 18:21:02'),
(10214, 2, 'admin/frames', 'GET', '182.185.156.16', '[]', '2024-12-16 18:21:03', '2024-12-16 18:21:03'),
(10215, 2, 'admin/frames/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:21:10', '2024-12-16 18:21:10'),
(10216, 2, 'admin/frames', 'GET', '182.185.156.16', '[]', '2024-12-16 18:21:37', '2024-12-16 18:21:37'),
(10217, 2, 'admin/notifies', 'GET', '182.185.156.16', '[]', '2024-12-16 18:21:56', '2024-12-16 18:21:56'),
(10218, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:22:41', '2024-12-16 18:22:41'),
(10219, 2, 'admin/send-emails/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:22:45', '2024-12-16 18:22:45'),
(10220, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:22:48', '2024-12-16 18:22:48'),
(10221, 2, 'admin/send-emails/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:22:57', '2024-12-16 18:22:57'),
(10222, 2, 'admin/send-emails', 'POST', '182.185.156.16', '{\"options\":\"1\",\"email\":\"mohammadumaiiir@gmail.com\",\"search_terms\":null,\"subject\":\"hbknjnkn\",\"body\":\"jnkljl\",\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:23:14', '2024-12-16 18:23:14'),
(10223, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:23:17', '2024-12-16 18:23:17'),
(10224, 2, 'admin/auth/menu', 'GET', '182.185.156.16', '[]', '2024-12-16 18:24:17', '2024-12-16 18:24:17'),
(10225, 1, 'admin/send-emails', 'GET', '154.81.246.253', '[]', '2024-12-16 18:24:25', '2024-12-16 18:24:25'),
(10226, 1, 'admin/send-emails', 'GET', '154.81.246.253', '[]', '2024-12-16 18:24:28', '2024-12-16 18:24:28'),
(10227, 1, 'admin/send-emails/1/edit', 'GET', '154.81.246.253', '[]', '2024-12-16 18:24:39', '2024-12-16 18:24:39'),
(10228, 1, 'admin/send-emails/1', 'PUT', '154.81.246.253', '{\"options\":\"1\",\"email\":\"hasanameer386@gmail.com\",\"search_terms\":null,\"subject\":\"login now\",\"body\":\"hy hasan \\r\\nyou can login\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 18:24:45', '2024-12-16 18:24:45'),
(10229, 1, 'admin/send-emails', 'GET', '154.81.246.253', '[]', '2024-12-16 18:24:47', '2024-12-16 18:24:47'),
(10230, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:26:02', '2024-12-16 18:26:02'),
(10231, 2, 'admin/send-emails/1', 'DELETE', '182.185.156.16', '{\"_method\":\"delete\",\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:26:47', '2024-12-16 18:26:47'),
(10232, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:26:48', '2024-12-16 18:26:48'),
(10233, 2, 'admin/send-emails/10', 'DELETE', '182.185.156.16', '{\"_method\":\"delete\",\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:26:52', '2024-12-16 18:26:52'),
(10234, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:26:53', '2024-12-16 18:26:53'),
(10235, 2, 'admin/send-emails/11', 'DELETE', '182.185.156.16', '{\"_method\":\"delete\",\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:26:58', '2024-12-16 18:26:58'),
(10236, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:26:58', '2024-12-16 18:26:58'),
(10237, 2, 'admin/send-emails/12', 'DELETE', '182.185.156.16', '{\"_method\":\"delete\",\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:27:03', '2024-12-16 18:27:03'),
(10238, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:27:04', '2024-12-16 18:27:04'),
(10239, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:27:16', '2024-12-16 18:27:16'),
(10240, 2, 'admin/frames', 'GET', '182.185.156.16', '[]', '2024-12-16 18:27:31', '2024-12-16 18:27:31'),
(10241, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:27:33', '2024-12-16 18:27:33'),
(10242, 2, 'admin/send-emails/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:27:36', '2024-12-16 18:27:36'),
(10243, 2, 'admin/send-emails', 'POST', '182.185.156.16', '{\"options\":\"1\",\"email\":\"mohammadumaiiir@gmail.com\",\"search_terms\":null,\"subject\":\"dfghjkl\",\"body\":\"lnlkjkm\",\"_token\":\"fx6lkW1b6RthxFJkkfoB8o4GqKD97lTk6PrfWP08\"}', '2024-12-16 18:27:47', '2024-12-16 18:27:47'),
(10244, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:27:50', '2024-12-16 18:27:50'),
(10245, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-16 18:30:54', '2024-12-16 18:30:54'),
(10246, 2, 'admin/app-settings', 'GET', '182.185.156.16', '[]', '2024-12-16 18:31:06', '2024-12-16 18:31:06'),
(10247, 2, 'admin/frames', 'GET', '182.185.156.16', '[]', '2024-12-16 18:31:09', '2024-12-16 18:31:09'),
(10248, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:31:10', '2024-12-16 18:31:10'),
(10249, 2, 'admin/send-emails/create', 'GET', '182.185.156.16', '[]', '2024-12-16 18:31:16', '2024-12-16 18:31:16'),
(10250, 2, 'admin/send-emails', 'POST', '182.185.156.16', '{\"email\":null,\"subject\":null,\"body\":null,\"_token\":\"btLKpRvZSATDzzQHpsiSDZ9J7f9j1PGb7GXBmZnK\",\"after-save\":\"continue_editing\"}', '2024-12-16 18:31:26', '2024-12-16 18:31:26'),
(10251, 2, 'admin/send-emails/14/edit', 'GET', '182.185.156.16', '[]', '2024-12-16 18:31:28', '2024-12-16 18:31:28'),
(10252, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-16 18:31:34', '2024-12-16 18:31:34'),
(10253, 2, 'admin/send-emails/14/edit', 'GET', '182.185.156.16', '[]', '2024-12-16 18:31:40', '2024-12-16 18:31:40'),
(10254, 1, 'admin/app-users', 'GET', '154.81.246.253', '[]', '2024-12-16 18:36:46', '2024-12-16 18:36:46'),
(10255, 1, 'admin/app-users', 'GET', '154.81.246.253', '[]', '2024-12-16 18:36:47', '2024-12-16 18:36:47'),
(10256, 1, 'admin/frames', 'GET', '154.81.246.253', '[]', '2024-12-16 18:46:11', '2024-12-16 18:46:11'),
(10257, 1, 'admin/frames', 'GET', '154.81.246.253', '[]', '2024-12-16 18:47:45', '2024-12-16 18:47:45'),
(10258, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:43:17', '2024-12-16 19:43:17'),
(10259, 1, 'admin/orders/1/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 19:43:25', '2024-12-16 19:43:25'),
(10260, 1, 'admin/orders/1', 'PUT', '154.80.104.32', '{\"uid\":\"1\",\"search_terms\":null,\"status\":\"progress\",\"frames\":[\"1\",null],\"price\":\"20\",\"isPay\":\"1\",\"isPay_cb\":\"on\",\"trId\":\"pm_123\",\"desc\":\"make amazing\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 19:43:31', '2024-12-16 19:43:31'),
(10261, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:43:32', '2024-12-16 19:43:32'),
(10262, 1, 'admin/orders/2/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 19:43:35', '2024-12-16 19:43:35'),
(10263, 1, 'admin/orders/2', 'PUT', '154.80.104.32', '{\"uid\":\"9\",\"search_terms\":null,\"status\":\"progress\",\"frames\":[\"1\",null],\"price\":\"20\",\"isPay\":\"0\",\"trId\":\"abc\",\"desc\":\"something\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 19:43:41', '2024-12-16 19:43:41'),
(10264, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:43:42', '2024-12-16 19:43:42'),
(10265, 1, 'admin/orders/10/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 19:43:46', '2024-12-16 19:43:46'),
(10266, 1, 'admin/orders/10', 'PUT', '154.80.104.32', '{\"uid\":\"9\",\"search_terms\":null,\"status\":\"pending\",\"frames\":[\"1\",null],\"price\":\"100\",\"isPay\":\"1\",\"isPay_cb\":\"on\",\"trId\":\"pm_1\",\"desc\":\"something\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 19:43:52', '2024-12-16 19:43:52'),
(10267, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:43:53', '2024-12-16 19:43:53'),
(10268, 1, 'admin/orders/11/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 19:43:56', '2024-12-16 19:43:56'),
(10269, 1, 'admin/orders/11', 'PUT', '154.80.104.32', '{\"uid\":\"9\",\"search_terms\":null,\"status\":\"pending\",\"frames\":[\"1\",null],\"price\":\"100\",\"isPay\":\"1\",\"isPay_cb\":\"on\",\"trId\":\"pm_1\",\"desc\":\"something\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 19:44:01', '2024-12-16 19:44:01'),
(10270, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:02', '2024-12-16 19:44:02'),
(10271, 1, 'admin/orders/13/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:06', '2024-12-16 19:44:06'),
(10272, 1, 'admin/orders/13', 'PUT', '154.80.104.32', '{\"uid\":\"9\",\"search_terms\":null,\"status\":\"pending\",\"frames\":[\"1\",null],\"price\":\"100\",\"isPay\":\"1\",\"isPay_cb\":\"on\",\"trId\":\"pm_1\",\"desc\":\"something\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 19:44:10', '2024-12-16 19:44:10'),
(10273, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:11', '2024-12-16 19:44:11'),
(10274, 1, 'admin/orders/12/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:18', '2024-12-16 19:44:18'),
(10275, 1, 'admin/orders/12', 'PUT', '154.80.104.32', '{\"uid\":\"9\",\"search_terms\":null,\"status\":\"pending\",\"frames\":[\"1\",null],\"price\":\"100\",\"isPay\":\"1\",\"isPay_cb\":\"on\",\"trId\":\"pm_1\",\"desc\":\"something\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 19:44:25', '2024-12-16 19:44:25'),
(10276, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:26', '2024-12-16 19:44:26'),
(10277, 1, 'admin/frames/1', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:30', '2024-12-16 19:44:30'),
(10278, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:33', '2024-12-16 19:44:33'),
(10279, 1, 'admin/frames', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:38', '2024-12-16 19:44:38'),
(10280, 1, 'admin/frames/create', 'GET', '154.80.104.32', '[]', '2024-12-16 19:44:41', '2024-12-16 19:44:41'),
(10281, 1, 'admin/frames', 'POST', '154.80.104.32', '{\"show\":\"on\",\"show_cb\":\"on\",\"name\":\"black frame\",\"price\":\"14\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 19:44:59', '2024-12-16 19:44:59'),
(10282, 1, 'admin/frames', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:01', '2024-12-16 19:45:01'),
(10283, 1, 'admin/frames/create', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:05', '2024-12-16 19:45:05'),
(10284, 1, 'admin/frames', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:05', '2024-12-16 19:45:05'),
(10285, 1, 'admin/auth/login', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:07', '2024-12-16 19:45:07'),
(10286, 1, 'admin/app-users', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:09', '2024-12-16 19:45:09'),
(10287, 1, 'admin/app-users', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:10', '2024-12-16 19:45:10'),
(10288, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:17', '2024-12-16 19:45:17'),
(10289, 1, 'admin/orders/10', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:21', '2024-12-16 19:45:21'),
(10290, 1, 'admin/frames/1', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:27', '2024-12-16 19:45:27'),
(10291, 1, 'admin/orders/10', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:30', '2024-12-16 19:45:30'),
(10292, 1, 'admin/orders/10/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:32', '2024-12-16 19:45:32'),
(10293, 1, 'admin/orders/10', 'PUT', '154.80.104.32', '{\"uid\":\"9\",\"search_terms\":null,\"status\":\"pending\",\"frames\":[\"1\",\"2\",null],\"price\":\"100\",\"isPay\":\"1\",\"isPay_cb\":\"on\",\"trId\":\"pm_1\",\"desc\":\"something\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 19:45:37', '2024-12-16 19:45:37'),
(10294, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:45:38', '2024-12-16 19:45:38'),
(10295, 1, 'admin/orders', 'GET', '154.80.104.32', '[]', '2024-12-16 19:47:14', '2024-12-16 19:47:14'),
(10296, 1, 'admin/frames', 'GET', '154.80.104.32', '[]', '2024-12-16 19:47:22', '2024-12-16 19:47:22'),
(10297, 1, 'admin/app-settings', 'GET', '154.80.104.32', '[]', '2024-12-16 19:47:27', '2024-12-16 19:47:27'),
(10298, 1, 'admin/transaction-histories', 'GET', '154.80.104.32', '[]', '2024-12-16 19:47:38', '2024-12-16 19:47:38'),
(10299, 1, 'admin/frames', 'GET', '154.80.104.32', '[]', '2024-12-16 19:47:48', '2024-12-16 19:47:48'),
(10300, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 19:49:28', '2024-12-16 19:49:28'),
(10301, 1, 'admin/send-emails/create', 'GET', '154.80.104.32', '[]', '2024-12-16 19:49:52', '2024-12-16 19:49:52'),
(10302, 1, 'admin/send-emails', 'POST', '154.80.104.32', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"password changed\",\"body\":\"new password is: ancv\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 19:50:24', '2024-12-16 19:50:24'),
(10303, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 19:50:28', '2024-12-16 19:50:28'),
(10304, 1, 'admin/send-emails/14', 'DELETE', '154.80.104.32', '{\"_method\":\"delete\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 20:05:17', '2024-12-16 20:05:17'),
(10305, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:05:18', '2024-12-16 20:05:18'),
(10306, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:05:28', '2024-12-16 20:05:28'),
(10307, 1, 'admin/send-emails/create', 'GET', '154.80.104.32', '[]', '2024-12-16 20:05:33', '2024-12-16 20:05:33'),
(10308, 1, 'admin/send-emails', 'POST', '154.80.104.32', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"password changed\",\"body\":\"new password: hjkj\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 20:06:10', '2024-12-16 20:06:10'),
(10309, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:06:13', '2024-12-16 20:06:13'),
(10310, 1, 'admin/send-emails/create', 'GET', '154.80.104.32', '[]', '2024-12-16 20:12:33', '2024-12-16 20:12:33'),
(10311, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:12:35', '2024-12-16 20:12:35'),
(10312, 1, 'admin/send-emails/16/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 20:12:40', '2024-12-16 20:12:40'),
(10313, 1, 'admin/send-emails/16', 'PUT', '154.80.104.32', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"password changed\",\"body\":\"new password: hjkj\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 20:12:46', '2024-12-16 20:12:46'),
(10314, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:12:49', '2024-12-16 20:12:49'),
(10315, 1, 'admin/send-emails/create', 'GET', '154.80.104.32', '[]', '2024-12-16 20:13:10', '2024-12-16 20:13:10'),
(10316, 1, 'admin/send-emails', 'POST', '154.80.104.32', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"can login\",\"body\":\"login now\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 20:13:30', '2024-12-16 20:13:30'),
(10317, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:13:33', '2024-12-16 20:13:33'),
(10318, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:16:57', '2024-12-16 20:16:57'),
(10319, 1, 'admin/send-emails/create', 'GET', '154.80.104.32', '[]', '2024-12-16 20:17:01', '2024-12-16 20:17:01'),
(10320, 1, 'admin/send-emails', 'POST', '154.80.104.32', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"can login\",\"body\":\"login now.\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 20:17:20', '2024-12-16 20:17:20'),
(10321, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:17:23', '2024-12-16 20:17:23'),
(10322, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:19:07', '2024-12-16 20:19:07'),
(10323, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:19:39', '2024-12-16 20:19:39'),
(10324, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:19:43', '2024-12-16 20:19:43'),
(10325, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:20:11', '2024-12-16 20:20:11'),
(10326, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:20:15', '2024-12-16 20:20:15'),
(10327, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:20:35', '2024-12-16 20:20:35'),
(10328, 1, 'admin/send-emails/create', 'GET', '154.80.104.32', '[]', '2024-12-16 20:21:14', '2024-12-16 20:21:14'),
(10329, 1, 'admin/send-emails', 'POST', '154.80.104.32', '{\"options\":\"2\",\"email\":\"maarkhoor5@gmail.com\",\"subject\":\"can login\",\"body\":\"login now\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 20:21:39', '2024-12-16 20:21:39'),
(10330, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:21:43', '2024-12-16 20:21:43'),
(10331, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:22:55', '2024-12-16 20:22:55'),
(10332, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:23:10', '2024-12-16 20:23:10'),
(10333, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:23:16', '2024-12-16 20:23:16'),
(10334, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:23:25', '2024-12-16 20:23:25'),
(10335, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:23:37', '2024-12-16 20:23:37'),
(10336, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:24:04', '2024-12-16 20:24:04'),
(10337, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:24:24', '2024-12-16 20:24:24'),
(10338, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:24:25', '2024-12-16 20:24:25'),
(10339, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:24:30', '2024-12-16 20:24:30'),
(10340, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:24:49', '2024-12-16 20:24:49'),
(10341, 1, 'admin/send-emails/create', 'GET', '154.80.104.32', '[]', '2024-12-16 20:25:34', '2024-12-16 20:25:34'),
(10342, 1, 'admin/send-emails', 'POST', '154.80.104.32', '{\"options\":\"2\",\"email\":\"clienstjobs@gmail.com\",\"subject\":\"can login\",\"body\":\"login now ..\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 20:26:11', '2024-12-16 20:26:11'),
(10343, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:26:15', '2024-12-16 20:26:15'),
(10344, 1, 'admin/send-emails/13/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 20:27:00', '2024-12-16 20:27:00'),
(10345, 1, 'admin/send-emails/13', 'PUT', '154.80.104.32', '{\"options\":\"1\",\"email\":\"mohammadumaiiir@gmail.com\",\"search_terms\":null,\"subject\":\"dfghjkl\",\"body\":\"lnlkjkm\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\",\"_method\":\"PUT\"}', '2024-12-16 20:27:04', '2024-12-16 20:27:04'),
(10346, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:27:06', '2024-12-16 20:27:06'),
(10347, 1, 'admin/send-emails/15/edit', 'GET', '154.80.104.32', '[]', '2024-12-16 20:27:20', '2024-12-16 20:27:20'),
(10348, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:27:26', '2024-12-16 20:27:26'),
(10349, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:27:41', '2024-12-16 20:27:41'),
(10350, 1, 'admin/_handle_action_', 'POST', '154.80.104.32', '{\"_model\":\"App_Models_SendEmails\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"16,17,18,19,20\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 20:27:51', '2024-12-16 20:27:51'),
(10351, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:27:53', '2024-12-16 20:27:53'),
(10352, 1, 'admin/send-emails/16,17,18,19,20', 'DELETE', '154.80.104.32', '{\"_method\":\"delete\",\"_token\":\"yEcTQCnILQAUSinZJCdunnONmtuu1LByRzJFdsDU\"}', '2024-12-16 20:27:53', '2024-12-16 20:27:53'),
(10353, 1, 'admin/send-emails', 'GET', '154.80.104.32', '[]', '2024-12-16 20:27:54', '2024-12-16 20:27:54'),
(10354, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 15:56:03', '2024-12-17 15:56:03'),
(10355, 2, 'admin/auth/logout', 'GET', '182.185.156.16', '[]', '2024-12-17 15:59:17', '2024-12-17 15:59:17'),
(10356, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 15:59:38', '2024-12-17 15:59:38'),
(10357, 2, 'admin/app-users/2', 'PUT', '182.185.156.16', '{\"_method\":\"PUT\",\"isActive\":\"on\",\"after-save\":\"exit\"}', '2024-12-17 16:00:00', '2024-12-17 16:00:00'),
(10358, 2, 'admin/app-users/3', 'PUT', '182.185.156.16', '{\"_method\":\"PUT\",\"isActive\":\"on\",\"after-save\":\"exit\"}', '2024-12-17 16:00:06', '2024-12-17 16:00:06'),
(10359, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:00:15', '2024-12-17 16:00:15'),
(10360, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:00:46', '2024-12-17 16:00:46'),
(10361, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:00:49', '2024-12-17 16:00:49'),
(10362, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:00:51', '2024-12-17 16:00:51'),
(10363, 2, 'admin/app-users/1', 'PUT', '182.185.156.16', '{\"_method\":\"PUT\",\"isActive\":\"off\",\"after-save\":\"exit\"}', '2024-12-17 16:01:21', '2024-12-17 16:01:21'),
(10364, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:02:29', '2024-12-17 16:02:29'),
(10365, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:02:43', '2024-12-17 16:02:43'),
(10366, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:02:50', '2024-12-17 16:02:50'),
(10367, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:02:56', '2024-12-17 16:02:56'),
(10368, 2, 'admin/cloudstorages/create', 'GET', '182.185.156.16', '[]', '2024-12-17 16:03:24', '2024-12-17 16:03:24'),
(10369, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:03:47', '2024-12-17 16:03:47'),
(10370, 2, 'admin/cloudstorages/1/edit', 'GET', '182.185.156.16', '[]', '2024-12-17 16:05:00', '2024-12-17 16:05:00'),
(10371, 2, 'admin/cloudstorages/1', 'PUT', '182.185.156.16', '{\"uid\":\"9\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"Events one\",\"shared\":[\"1\",\"2\",null],\"_token\":\"UvlB1lBa7xjhyatsJgxgKQlmyTRNX7EiwesDniuG\",\"_method\":\"PUT\"}', '2024-12-17 16:05:47', '2024-12-17 16:05:47'),
(10372, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:05:48', '2024-12-17 16:05:48'),
(10373, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:05:56', '2024-12-17 16:05:56'),
(10374, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:06:02', '2024-12-17 16:06:02'),
(10375, 2, 'admin/cloudstorages/1/edit', 'GET', '182.185.156.16', '[]', '2024-12-17 16:06:11', '2024-12-17 16:06:11'),
(10376, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:08:39', '2024-12-17 16:08:39'),
(10377, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:08:56', '2024-12-17 16:08:56'),
(10378, 2, 'admin/cloudstorages/create', 'GET', '182.185.156.16', '[]', '2024-12-17 16:08:56', '2024-12-17 16:08:56'),
(10379, 2, 'admin/cloudstorages/create', 'GET', '182.185.156.16', '[]', '2024-12-17 16:09:12', '2024-12-17 16:09:12'),
(10380, 2, 'admin/cloudstorages', 'POST', '182.185.156.16', '{\"uid\":\"10\",\"search_terms\":null,\"subscription\":\"1\",\"folderName\":\"Demo\",\"shared\":[\"2\",\"3\",null],\"_token\":\"UvlB1lBa7xjhyatsJgxgKQlmyTRNX7EiwesDniuG\"}', '2024-12-17 16:11:30', '2024-12-17 16:11:30'),
(10381, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:11:31', '2024-12-17 16:11:31'),
(10382, 2, 'admin/subscriptions-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:12:12', '2024-12-17 16:12:12'),
(10383, 2, 'admin/frames', 'GET', '182.185.156.16', '[]', '2024-12-17 16:12:41', '2024-12-17 16:12:41'),
(10384, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-17 16:12:59', '2024-12-17 16:12:59'),
(10385, 2, 'admin/subscriptions-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:13:04', '2024-12-17 16:13:04'),
(10386, 2, 'admin/subscriptions-settings/create', 'GET', '182.185.156.16', '[]', '2024-12-17 16:13:08', '2024-12-17 16:13:08'),
(10387, 2, 'admin/subscriptions-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:13:15', '2024-12-17 16:13:15'),
(10388, 2, 'admin/notifies', 'GET', '182.185.156.16', '[]', '2024-12-17 16:13:53', '2024-12-17 16:13:53'),
(10389, 2, 'admin/notifies/create', 'GET', '182.185.156.16', '[]', '2024-12-17 16:14:05', '2024-12-17 16:14:05'),
(10390, 2, 'admin/notifies', 'POST', '182.185.156.16', '{\"uid\":\"1\",\"search_terms\":null,\"title\":\"chrismis gift\",\"desc\":\"cjhdbjagdkhadk\",\"_token\":\"UvlB1lBa7xjhyatsJgxgKQlmyTRNX7EiwesDniuG\"}', '2024-12-17 16:14:27', '2024-12-17 16:14:27'),
(10391, 2, 'admin/notifies', 'GET', '182.185.156.16', '[]', '2024-12-17 16:14:28', '2024-12-17 16:14:28'),
(10392, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-17 16:14:49', '2024-12-17 16:14:49'),
(10393, 2, 'admin/orders/1/edit', 'GET', '182.185.156.16', '[]', '2024-12-17 16:15:48', '2024-12-17 16:15:48'),
(10394, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-17 16:16:34', '2024-12-17 16:16:34'),
(10395, 2, 'admin/transaction-histories', 'GET', '182.185.156.16', '[]', '2024-12-17 16:17:08', '2024-12-17 16:17:08'),
(10396, 2, 'admin/contactus', 'GET', '182.185.156.16', '[]', '2024-12-17 16:18:20', '2024-12-17 16:18:20'),
(10397, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-17 16:19:26', '2024-12-17 16:19:26'),
(10398, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-17 16:21:05', '2024-12-17 16:21:05'),
(10399, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-17 16:21:14', '2024-12-17 16:21:14'),
(10400, 2, 'admin/app-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:21:29', '2024-12-17 16:21:29'),
(10401, 2, 'admin/frames', 'GET', '182.185.156.16', '[]', '2024-12-17 16:22:07', '2024-12-17 16:22:07'),
(10402, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-17 16:22:23', '2024-12-17 16:22:23'),
(10403, 2, 'admin/send-emails/create', 'GET', '182.185.156.16', '[]', '2024-12-17 16:22:31', '2024-12-17 16:22:31'),
(10404, 2, 'admin/auth/menu', 'GET', '182.185.156.16', '[]', '2024-12-17 16:22:59', '2024-12-17 16:22:59'),
(10405, 2, 'admin/auth/menu/73/edit', 'GET', '182.185.156.16', '[]', '2024-12-17 16:23:12', '2024-12-17 16:23:12'),
(10406, 2, 'admin/auth/menu', 'GET', '182.185.156.16', '[]', '2024-12-17 16:23:14', '2024-12-17 16:23:14'),
(10407, 2, 'admin/auth/menu', 'GET', '182.185.156.16', '[]', '2024-12-17 16:23:33', '2024-12-17 16:23:33'),
(10408, 2, 'admin/auth/menu', 'GET', '182.185.156.16', '[]', '2024-12-17 16:23:38', '2024-12-17 16:23:38'),
(10409, 2, 'admin/auth/menu', 'POST', '182.185.156.16', '{\"_order\":\"[{\\\"id\\\":\\\"73\\\",\\\"children\\\":[{\\\"id\\\":\\\"71\\\"},{\\\"id\\\":\\\"72\\\"},{\\\"id\\\":\\\"69\\\"},{\\\"id\\\":\\\"70\\\"},{\\\"id\\\":\\\"75\\\"},{\\\"id\\\":\\\"76\\\"},{\\\"id\\\":\\\"55\\\"}]},{\\\"id\\\":\\\"58\\\"},{\\\"id\\\":\\\"98\\\"},{\\\"id\\\":\\\"68\\\"},{\\\"id\\\":\\\"92\\\"},{\\\"id\\\":\\\"2\\\",\\\"children\\\":[{\\\"id\\\":\\\"86\\\"},{\\\"id\\\":\\\"3\\\"},{\\\"id\\\":\\\"4\\\"}]}]\",\"_token\":\"UvlB1lBa7xjhyatsJgxgKQlmyTRNX7EiwesDniuG\"}', '2024-12-17 16:23:53', '2024-12-17 16:23:53'),
(10410, 2, 'admin/auth/menu', 'GET', '182.185.156.16', '[]', '2024-12-17 16:23:55', '2024-12-17 16:23:55'),
(10411, 2, 'admin/auth/menu', 'GET', '182.185.156.16', '[]', '2024-12-17 16:24:02', '2024-12-17 16:24:02'),
(10412, 2, 'admin/auth/users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:24:12', '2024-12-17 16:24:12'),
(10413, 2, 'admin/auth/users/create', 'GET', '182.185.156.16', '[]', '2024-12-17 16:24:31', '2024-12-17 16:24:31'),
(10414, 2, 'admin/auth/roles', 'GET', '182.185.156.16', '[]', '2024-12-17 16:24:59', '2024-12-17 16:24:59'),
(10415, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:26:05', '2024-12-17 16:26:05'),
(10416, 2, 'admin/auth/logout', 'GET', '182.185.156.16', '[]', '2024-12-17 16:26:10', '2024-12-17 16:26:10'),
(10417, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:41:14', '2024-12-17 16:41:14'),
(10418, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:41:51', '2024-12-17 16:41:51'),
(10419, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:41:56', '2024-12-17 16:41:56'),
(10420, 2, 'admin/cloudstorages/1/edit', 'GET', '182.185.156.16', '[]', '2024-12-17 16:42:13', '2024-12-17 16:42:13'),
(10421, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:42:30', '2024-12-17 16:42:30'),
(10422, 2, 'admin/cloudstorages/1/edit', 'GET', '182.185.156.16', '[]', '2024-12-17 16:45:39', '2024-12-17 16:45:39'),
(10423, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:45:53', '2024-12-17 16:45:53'),
(10424, 2, 'admin/subscriptions-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:46:00', '2024-12-17 16:46:00'),
(10425, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:46:03', '2024-12-17 16:46:03'),
(10426, 2, 'admin/app-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:50:19', '2024-12-17 16:50:19'),
(10427, 2, 'admin/frames', 'GET', '182.185.156.16', '[]', '2024-12-17 16:50:22', '2024-12-17 16:50:22'),
(10428, 2, 'admin/media', 'GET', '182.185.156.16', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-17 16:50:24', '2024-12-17 16:50:24'),
(10429, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:50:29', '2024-12-17 16:50:29'),
(10430, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-17 16:50:32', '2024-12-17 16:50:32'),
(10431, 2, 'admin/orders/1/edit', 'GET', '182.185.156.16', '[]', '2024-12-17 16:51:45', '2024-12-17 16:51:45'),
(10432, 2, 'admin/orders/1', 'PUT', '182.185.156.16', '{\"uid\":\"1\",\"search_terms\":null,\"status\":\"completed\",\"frames\":[\"1\",null],\"price\":\"20\",\"isPay\":\"1\",\"isPay_cb\":\"on\",\"trId\":\"pm_123\",\"desc\":\"make amazing\",\"_token\":\"07vIEqiQ9zqPBx3lWIah4hvlxtIm0qskRR2pqsMG\",\"_method\":\"PUT\"}', '2024-12-17 16:51:55', '2024-12-17 16:51:55'),
(10433, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-17 16:51:56', '2024-12-17 16:51:56'),
(10434, 2, 'admin/transaction-histories', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:03', '2024-12-17 16:52:03'),
(10435, 2, 'admin/subscriptions-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:09', '2024-12-17 16:52:09'),
(10436, 2, 'admin/app-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:13', '2024-12-17 16:52:13'),
(10437, 2, 'admin/auth/users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:16', '2024-12-17 16:52:16'),
(10438, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:23', '2024-12-17 16:52:23'),
(10439, 2, 'admin/app-users/4', 'DELETE', '182.185.156.16', '{\"_method\":\"delete\",\"_token\":\"07vIEqiQ9zqPBx3lWIah4hvlxtIm0qskRR2pqsMG\"}', '2024-12-17 16:52:32', '2024-12-17 16:52:32'),
(10440, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:33', '2024-12-17 16:52:33'),
(10441, 2, 'admin/app-users/10', 'DELETE', '182.185.156.16', '{\"_method\":\"delete\",\"_token\":\"07vIEqiQ9zqPBx3lWIah4hvlxtIm0qskRR2pqsMG\"}', '2024-12-17 16:52:42', '2024-12-17 16:52:42'),
(10442, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:43', '2024-12-17 16:52:43'),
(10443, 2, 'admin/app-users/1', 'DELETE', '182.185.156.16', '{\"_method\":\"delete\",\"_token\":\"07vIEqiQ9zqPBx3lWIah4hvlxtIm0qskRR2pqsMG\"}', '2024-12-17 16:52:46', '2024-12-17 16:52:46'),
(10444, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:47', '2024-12-17 16:52:47'),
(10445, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:52:50', '2024-12-17 16:52:50'),
(10446, 2, 'admin/orders', 'GET', '182.185.156.16', '[]', '2024-12-17 16:53:04', '2024-12-17 16:53:04'),
(10447, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-17 16:53:11', '2024-12-17 16:53:11'),
(10448, 2, 'admin/cloudstorages', 'GET', '182.185.156.16', '[]', '2024-12-17 16:58:22', '2024-12-17 16:58:22'),
(10449, 2, 'admin/subscriptions-settings', 'GET', '182.185.156.16', '[]', '2024-12-17 16:59:13', '2024-12-17 16:59:13'),
(10450, 2, 'admin/auth/setting', 'GET', '182.185.156.16', '[]', '2024-12-17 17:13:22', '2024-12-17 17:13:22'),
(10451, 2, 'admin/app-users', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-17 21:36:30', '2024-12-17 21:36:30'),
(10452, 2, 'admin/app-users', 'GET', '98.203.166.202', '[]', '2024-12-18 23:13:13', '2024-12-18 23:13:13'),
(10453, 2, 'admin/app-users', 'GET', '98.203.166.202', '[]', '2024-12-18 23:13:20', '2024-12-18 23:13:20'),
(10454, 2, 'admin/app-users/create', 'GET', '98.203.166.202', '[]', '2024-12-18 23:13:26', '2024-12-18 23:13:26'),
(10455, 2, 'admin/app-users', 'POST', '98.203.166.202', '{\"isActive\":null,\"name\":\"Jeff Reynolds\",\"email\":\"JefRey.RPConsulting@gmail.com\",\"phone\":\"15094355066\",\"password\":\"*****-filtered-out-*****\",\"address\":\"5112 S Hogan Ln\\r\\nSpokane  WA  99223  USA\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:15:36', '2024-12-18 23:15:36'),
(10456, 2, 'admin/app-users', 'GET', '98.203.166.202', '[]', '2024-12-18 23:15:37', '2024-12-18 23:15:37'),
(10457, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:19:56', '2024-12-18 23:19:56'),
(10458, 2, 'admin/subscriptions-settings/1/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:20:02', '2024-12-18 23:20:02'),
(10459, 2, 'admin/subscriptions-settings/1', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"40 GB\",\"desc\":[\"can upload and share files\",\"store media data\",\"secure and encrypted\",\"unlimited access and sharing\"],\"price\":\"49\",\"storage\":\"40\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:20:42', '2024-12-18 23:20:42'),
(10460, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:20:43', '2024-12-18 23:20:43'),
(10461, 2, 'admin/subscriptions-settings/1/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:20:57', '2024-12-18 23:20:57'),
(10462, 2, 'admin/subscriptions-settings/1', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"40 GB\",\"desc\":[\"upload and share files\",\"share link via App or Text with anyone\",\"secure and encrypted\",\"Cloud Storage 90 days\"],\"price\":\"49\",\"storage\":\"40\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:22:06', '2024-12-18 23:22:06'),
(10463, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:22:06', '2024-12-18 23:22:06'),
(10464, 2, 'admin/subscriptions-settings/2/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:22:35', '2024-12-18 23:22:35'),
(10465, 2, 'admin/subscriptions-settings/2', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"100 GB\",\"desc\":[\"can upload and share files\",\"store media data\",\"secure and encrypted\",\"unlimited access and sharing\"],\"price\":\"69\",\"storage\":\"100\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:22:56', '2024-12-18 23:22:56'),
(10466, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:22:56', '2024-12-18 23:22:56'),
(10467, 2, 'admin/subscriptions-settings/1/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:23:04', '2024-12-18 23:23:04'),
(10468, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:23:12', '2024-12-18 23:23:12'),
(10469, 2, 'admin/subscriptions-settings/2/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:23:15', '2024-12-18 23:23:15'),
(10470, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:23:23', '2024-12-18 23:23:23'),
(10471, 2, 'admin/subscriptions-settings/2/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:23:33', '2024-12-18 23:23:33'),
(10472, 2, 'admin/subscriptions-settings/2', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"100 GB\",\"desc\":[\"can upload and share files\",\"share link via App or Text with anyone\",\"secure and encrypted\",\"unlimited access and sharing\"],\"price\":\"69\",\"storage\":\"100\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:23:41', '2024-12-18 23:23:41'),
(10473, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:23:41', '2024-12-18 23:23:41'),
(10474, 2, 'admin/subscriptions-settings/2/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:23:54', '2024-12-18 23:23:54'),
(10475, 2, 'admin/subscriptions-settings/2', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"100 GB\",\"desc\":[\"can upload and share files\",\"share link via App or Text with anyone\",\"secure and encrypted\",\"Cloud Storage 90 days\"],\"price\":\"69\",\"storage\":\"100\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:23:58', '2024-12-18 23:23:58'),
(10476, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:23:58', '2024-12-18 23:23:58'),
(10477, 2, 'admin/subscriptions-settings/3/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:24:04', '2024-12-18 23:24:04'),
(10478, 2, 'admin/subscriptions-settings/3', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"300 GB\",\"desc\":[\"upload and share files\",\"store media data\",\"secure and encrypted\",\"Cloud Storage 90 days\"],\"price\":\"129\",\"storage\":\"300\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:24:43', '2024-12-18 23:24:43'),
(10479, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:24:43', '2024-12-18 23:24:43'),
(10480, 2, 'admin/subscriptions-settings/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:24:51', '2024-12-18 23:24:51'),
(10481, 2, 'admin/subscriptions-settings', 'POST', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"500GB\",\"desc\":[null,null],\"price\":\"159\",\"storage\":\"500\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:25:29', '2024-12-18 23:25:29'),
(10482, 2, 'admin/subscriptions-settings/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:25:29', '2024-12-18 23:25:29'),
(10483, 2, 'admin/subscriptions-settings', 'POST', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"500GB\",\"desc\":[null,null],\"price\":\"159\",\"storage\":\"500\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:25:32', '2024-12-18 23:25:32'),
(10484, 2, 'admin/subscriptions-settings/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:25:32', '2024-12-18 23:25:32'),
(10485, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:25:39', '2024-12-18 23:25:39'),
(10486, 2, 'admin/subscriptions-settings/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:25:50', '2024-12-18 23:25:50'),
(10487, 2, 'admin/subscriptions-settings', 'POST', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"500 GB\",\"desc\":[\"upload and share files\"],\"price\":\"159\",\"storage\":\"500\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:26:08', '2024-12-18 23:26:08'),
(10488, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:26:08', '2024-12-18 23:26:08'),
(10489, 2, 'admin/subscriptions-settings/4/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:26:17', '2024-12-18 23:26:17'),
(10490, 2, 'admin/subscriptions-settings/4', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"500 GB\",\"desc\":[\"upload and share files\",\"store media data\"],\"price\":\"159\",\"storage\":\"500\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:26:22', '2024-12-18 23:26:22'),
(10491, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:26:22', '2024-12-18 23:26:22'),
(10492, 2, 'admin/subscriptions-settings/4/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:26:30', '2024-12-18 23:26:30'),
(10493, 2, 'admin/subscriptions-settings/4', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"500 GB\",\"desc\":[\"upload and share files\",\"store media data\",\"secure and encrypted\"],\"price\":\"159\",\"storage\":\"500\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:26:35', '2024-12-18 23:26:35'),
(10494, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:26:36', '2024-12-18 23:26:36'),
(10495, 2, 'admin/subscriptions-settings/4/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:26:43', '2024-12-18 23:26:43');
INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(10496, 2, 'admin/subscriptions-settings/4', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"title\":\"500 GB\",\"desc\":[\"upload and share files\",\"store media data\",\"secure and encrypted\",\"Cloud Storage 90 days\"],\"price\":\"159\",\"storage\":\"500\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:26:49', '2024-12-18 23:26:49'),
(10497, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:26:49', '2024-12-18 23:26:49'),
(10498, 2, 'admin/frames', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:27:08', '2024-12-18 23:27:08'),
(10499, 2, 'admin/frames/1/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:29:07', '2024-12-18 23:29:07'),
(10500, 2, 'admin/frames/1', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"show\":\"1\",\"show_cb\":\"on\",\"name\":\"10 Inch Video Frame\",\"image_file_del_\":\"images\\/frame.png,\",\"price\":\"79\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:32:03', '2024-12-18 23:32:03'),
(10501, 2, 'admin/frames', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:32:04', '2024-12-18 23:32:04'),
(10502, 2, 'admin/frames/1/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:32:10', '2024-12-18 23:32:10'),
(10503, 2, 'admin/frames/1', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"show\":\"1\",\"show_cb\":\"on\",\"name\":\"10 Inch Video Frame\",\"price\":\"79\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:32:25', '2024-12-18 23:32:25'),
(10504, 2, 'admin/frames', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:32:25', '2024-12-18 23:32:25'),
(10505, 2, 'admin/frames/1/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:34:42', '2024-12-18 23:34:42'),
(10506, 2, 'admin/frames/1', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"show\":\"1\",\"show_cb\":\"on\",\"name\":\"10 Inch Video Frame\",\"price\":\"69\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:34:53', '2024-12-18 23:34:53'),
(10507, 2, 'admin/frames', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:34:53', '2024-12-18 23:34:53'),
(10508, 2, 'admin/frames/2/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:34:57', '2024-12-18 23:34:57'),
(10509, 2, 'admin/frames/2', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"show\":\"1\",\"show_cb\":\"on\",\"name\":\"15.6 Inch Video Frame\",\"image_file_del_\":\"images\\/frame2.png,\",\"price\":\"139\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:36:45', '2024-12-18 23:36:45'),
(10510, 2, 'admin/frames', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:36:45', '2024-12-18 23:36:45'),
(10511, 2, 'admin/frames/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:38:06', '2024-12-18 23:38:06'),
(10512, 2, 'admin/frames', 'POST', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"show\":\"on\",\"show_cb\":\"on\",\"name\":\"18.5 Inch Video Frame\",\"price\":\"199\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:39:03', '2024-12-18 23:39:03'),
(10513, 2, 'admin/frames', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:39:03', '2024-12-18 23:39:03'),
(10514, 2, 'admin/frames/2/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:39:10', '2024-12-18 23:39:10'),
(10515, 2, 'admin/frames/2', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"show\":\"1\",\"show_cb\":\"on\",\"name\":\"15.6 Inch Video Frame\",\"price\":\"139\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:39:17', '2024-12-18 23:39:17'),
(10516, 2, 'admin/frames', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:39:18', '2024-12-18 23:39:18'),
(10517, 2, 'admin/media', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-18 23:39:23', '2024-12-18 23:39:23'),
(10518, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:39:48', '2024-12-18 23:39:48'),
(10519, 2, 'admin/app-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:39:57', '2024-12-18 23:39:57'),
(10520, 2, 'admin/app-settings/1/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:40:05', '2024-12-18 23:40:05'),
(10521, 2, 'admin/app-settings/1', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"appName\":\"Stories4Generations\",\"appLogo_file_del_\":\"images\\/lion_2.png,\",\"showEmail\":\"0\",\"email\":\"admin@gmail.com\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:42:32', '2024-12-18 23:42:32'),
(10522, 2, 'admin/app-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:42:32', '2024-12-18 23:42:32'),
(10523, 2, 'admin/app-settings/1/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:42:37', '2024-12-18 23:42:37'),
(10524, 2, 'admin/app-settings/1', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"appName\":\"Stories4Generations\",\"showEmail\":\"0\",\"email\":\"admin@gmail.com\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:42:47', '2024-12-18 23:42:47'),
(10525, 2, 'admin/app-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:42:47', '2024-12-18 23:42:47'),
(10526, 2, 'admin/frames', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:42:54', '2024-12-18 23:42:54'),
(10527, 2, 'admin/media', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2024-12-18 23:42:57', '2024-12-18 23:42:57'),
(10528, 2, 'admin/cloudstorages', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:43:04', '2024-12-18 23:43:04'),
(10529, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:43:07', '2024-12-18 23:43:07'),
(10530, 2, 'admin/notifies', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:43:09', '2024-12-18 23:43:09'),
(10531, 2, 'admin/notifies/3/edit', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:43:14', '2024-12-18 23:43:14'),
(10532, 2, 'admin/notifies/3', 'PUT', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"uid\":\"14\",\"search_terms\":null,\"title\":\"Christmas Giftcard\",\"desc\":\"$100 GiftCard\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\",\"_method\":\"PUT\"}', '2024-12-18 23:43:56', '2024-12-18 23:43:56'),
(10533, 2, 'admin/notifies', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:43:56', '2024-12-18 23:43:56'),
(10534, 2, 'admin/app-users', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:44:05', '2024-12-18 23:44:05'),
(10535, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:44:17', '2024-12-18 23:44:17'),
(10536, 2, 'admin/orders/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:44:20', '2024-12-18 23:44:20'),
(10537, 2, 'admin/app-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:00', '2024-12-18 23:48:00'),
(10538, 2, 'admin/auth/menu', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:07', '2024-12-18 23:48:07'),
(10539, 2, 'admin/transaction-histories', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:23', '2024-12-18 23:48:23'),
(10540, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:24', '2024-12-18 23:48:24'),
(10541, 2, 'admin/notifies', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:27', '2024-12-18 23:48:27'),
(10542, 2, 'admin/subscriptions-settings', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:28', '2024-12-18 23:48:28'),
(10543, 2, 'admin/cloudstorages', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:30', '2024-12-18 23:48:30'),
(10544, 2, 'admin/app-users', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:32', '2024-12-18 23:48:32'),
(10545, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:36', '2024-12-18 23:48:36'),
(10546, 2, 'admin/orders/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:48:38', '2024-12-18 23:48:38'),
(10547, 2, 'admin/orders', 'POST', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"uid\":\"14\",\"search_terms\":null,\"status\":\"pending\",\"frames\":[\"1\",null],\"price\":null,\"isPay\":null,\"trId\":\"abc\",\"desc\":null,\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:50:34', '2024-12-18 23:50:34'),
(10548, 2, 'admin/orders/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:50:34', '2024-12-18 23:50:34'),
(10549, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:50:40', '2024-12-18 23:50:40'),
(10550, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:50:54', '2024-12-18 23:50:54'),
(10551, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:50:55', '2024-12-18 23:50:55'),
(10552, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:50:56', '2024-12-18 23:50:56'),
(10553, 2, 'admin/orders/create', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:50:58', '2024-12-18 23:50:58'),
(10554, 2, 'admin/orders', 'POST', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"uid\":\"14\",\"search_terms\":null,\"status\":\"progress\",\"frames\":[\"2\",null],\"price\":\"100\",\"isPay\":null,\"trId\":\"abc\",\"desc\":\"Jeff Test Upload\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:51:43', '2024-12-18 23:51:43'),
(10555, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:51:43', '2024-12-18 23:51:43'),
(10556, 2, 'admin/orders', 'POST', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"uid\":\"14\",\"search_terms\":null,\"status\":\"progress\",\"frames\":[\"2\",null],\"price\":\"100\",\"isPay\":null,\"trId\":\"abc\",\"desc\":\"Jeff Test Upload\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:51:48', '2024-12-18 23:51:48'),
(10557, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:51:48', '2024-12-18 23:51:48'),
(10558, 2, 'admin/orders', 'POST', '2607:ff28:a006:3:797:2a8:956c:22f2', '{\"uid\":\"14\",\"search_terms\":null,\"status\":\"progress\",\"frames\":[\"2\",null],\"price\":\"100\",\"isPay\":null,\"trId\":\"abc\",\"desc\":\"Jeff Test Upload\",\"_token\":\"vHuphKFu7iBOXudV8EF3M1Z1VyBS8CFKX3OPY8jV\"}', '2024-12-18 23:51:48', '2024-12-18 23:51:48'),
(10559, 2, 'admin/orders', 'GET', '2607:ff28:a006:3:797:2a8:956c:22f2', '[]', '2024-12-18 23:51:49', '2024-12-18 23:51:49'),
(10560, 2, 'admin/app-users', 'GET', '154.80.73.113', '[]', '2024-12-21 08:05:35', '2024-12-21 08:05:35'),
(10561, 2, 'admin/subscriptions-settings', 'GET', '154.80.73.113', '[]', '2024-12-21 08:06:09', '2024-12-21 08:06:09'),
(10562, 2, 'admin/subscriptions-settings/1/edit', 'GET', '154.80.73.113', '[]', '2024-12-21 08:06:51', '2024-12-21 08:06:51'),
(10563, 2, 'admin/subscriptions-settings', 'GET', '154.80.73.113', '[]', '2024-12-21 08:06:54', '2024-12-21 08:06:54'),
(10564, 2, 'admin/subscriptions-settings/4/edit', 'GET', '154.80.73.113', '[]', '2024-12-21 08:06:58', '2024-12-21 08:06:58'),
(10565, 2, 'admin/subscriptions-settings/4', 'PUT', '154.80.73.113', '{\"title\":\"550 GB\",\"desc\":[\"upload and share files\",\"store media data\",\"secure and encrypted\",\"Cloud Storage 90 days\"],\"price\":\"159\",\"storage\":\"500\",\"_token\":\"cDFU3sL4KVlD3kHOvFt2Q8DAY0fm0TUip19FpdM6\",\"_method\":\"PUT\"}', '2024-12-21 08:07:09', '2024-12-21 08:07:09'),
(10566, 2, 'admin/subscriptions-settings', 'GET', '154.80.73.113', '[]', '2024-12-21 08:07:10', '2024-12-21 08:07:10'),
(10567, 2, 'admin/subscriptions-settings/4/edit', 'GET', '154.80.73.113', '[]', '2024-12-21 08:07:47', '2024-12-21 08:07:47'),
(10568, 2, 'admin/subscriptions-settings/4', 'PUT', '154.80.73.113', '{\"title\":\"550 GB\",\"desc\":[\"upload and share files\",\"store media data\",\"secure and encrypted\",\"Cloud Storage 90 days\"],\"price\":\"159\",\"storage\":\"550\",\"_token\":\"cDFU3sL4KVlD3kHOvFt2Q8DAY0fm0TUip19FpdM6\",\"_method\":\"PUT\"}', '2024-12-21 08:07:56', '2024-12-21 08:07:56'),
(10569, 2, 'admin/subscriptions-settings', 'GET', '154.80.73.113', '[]', '2024-12-21 08:07:57', '2024-12-21 08:07:57'),
(10570, 2, 'admin/app-users', 'GET', '154.80.73.113', '[]', '2024-12-21 08:08:23', '2024-12-21 08:08:23'),
(10571, 2, 'admin/app-users/2', 'PUT', '154.80.73.113', '{\"_method\":\"PUT\",\"isActive\":\"off\",\"after-save\":\"exit\"}', '2024-12-21 08:10:39', '2024-12-21 08:10:39'),
(10572, 2, 'admin/app-users/2', 'PUT', '154.80.73.113', '{\"_method\":\"PUT\",\"isActive\":\"on\",\"after-save\":\"exit\"}', '2024-12-21 08:10:47', '2024-12-21 08:10:47'),
(10573, 2, 'admin/contactus', 'GET', '154.80.73.113', '[]', '2024-12-21 08:11:34', '2024-12-21 08:11:34'),
(10574, 2, 'admin/app-users', 'GET', '154.80.73.113', '[]', '2024-12-21 08:11:54', '2024-12-21 08:11:54'),
(10575, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-21 10:35:57', '2024-12-21 10:35:57'),
(10576, 2, 'admin/send-emails', 'GET', '182.185.156.16', '[]', '2024-12-21 10:36:36', '2024-12-21 10:36:36'),
(10577, 2, 'admin/app-settings', 'GET', '182.185.156.16', '[]', '2024-12-21 10:36:42', '2024-12-21 10:36:42'),
(10578, 2, 'admin/app-users', 'GET', '154.80.64.0', '[]', '2024-12-21 15:48:09', '2024-12-21 15:48:09'),
(10579, 2, 'admin/app-users', 'GET', '154.80.64.0', '[]', '2024-12-22 06:27:26', '2024-12-22 06:27:26'),
(10580, 2, 'admin/orders', 'GET', '154.80.64.0', '[]', '2024-12-22 06:27:33', '2024-12-22 06:27:33'),
(10581, 2, 'admin/auth/login', 'GET', '182.185.156.16', '[]', '2024-12-28 17:22:00', '2024-12-28 17:22:00'),
(10582, 2, 'admin/app-users', 'GET', '182.185.156.16', '[]', '2024-12-28 17:22:02', '2024-12-28 17:22:02'),
(10583, 2, 'admin/app-users', 'GET', '98.203.166.202', '[]', '2024-12-28 17:51:06', '2024-12-28 17:51:06'),
(10584, 2, 'admin/frames', 'GET', '98.203.166.202', '[]', '2024-12-28 17:51:20', '2024-12-28 17:51:20'),
(10585, 2, 'admin/subscriptions-settings', 'GET', '98.203.166.202', '[]', '2024-12-28 17:51:29', '2024-12-28 17:51:29'),
(10586, 2, 'admin/app-users', 'GET', '98.203.166.202', '[]', '2024-12-28 18:13:18', '2024-12-28 18:13:18'),
(10587, 2, 'admin/orders', 'GET', '98.203.166.202', '[]', '2024-12-28 18:14:38', '2024-12-28 18:14:38'),
(10588, 2, 'admin/orders/1/edit', 'GET', '98.203.166.202', '[]', '2024-12-28 18:15:14', '2024-12-28 18:15:14'),
(10589, 2, 'admin/orders', 'GET', '98.203.166.202', '[]', '2024-12-28 18:15:41', '2024-12-28 18:15:41'),
(10590, 2, 'admin/orders/14/edit', 'GET', '98.203.166.202', '[]', '2024-12-28 18:18:38', '2024-12-28 18:18:38'),
(10591, 2, 'admin/orders/14', 'PUT', '98.203.166.202', '{\"uid\":\"14\",\"search_terms\":null,\"status\":\"pending\",\"frames\":[\"2\",null],\"price\":\"100\",\"isPay\":\"0\",\"trId\":\"abc\",\"desc\":\"Jeff Test Upload\",\"_token\":\"4WIDaasWpw51Xa2cmH94GH88wRPt536BwqLnqSPW\",\"_method\":\"PUT\"}', '2024-12-28 18:18:47', '2024-12-28 18:18:47'),
(10592, 2, 'admin/orders', 'GET', '98.203.166.202', '[]', '2024-12-28 18:18:47', '2024-12-28 18:18:47'),
(10593, 2, 'admin/orders/15', 'DELETE', '98.203.166.202', '{\"_method\":\"delete\",\"_token\":\"4WIDaasWpw51Xa2cmH94GH88wRPt536BwqLnqSPW\"}', '2024-12-28 18:19:07', '2024-12-28 18:19:07'),
(10594, 2, 'admin/orders', 'GET', '98.203.166.202', '[]', '2024-12-28 18:19:07', '2024-12-28 18:19:07'),
(10595, 2, 'admin/orders/16', 'DELETE', '98.203.166.202', '{\"_method\":\"delete\",\"_token\":\"4WIDaasWpw51Xa2cmH94GH88wRPt536BwqLnqSPW\"}', '2024-12-28 18:19:15', '2024-12-28 18:19:15'),
(10596, 2, 'admin/orders', 'GET', '98.203.166.202', '[]', '2024-12-28 18:19:15', '2024-12-28 18:19:15'),
(10597, 2, 'admin/frames', 'GET', '98.203.166.202', '[]', '2024-12-28 18:28:55', '2024-12-28 18:28:55'),
(10598, 2, 'admin/app-users', 'GET', '154.80.124.238', '[]', '2025-01-01 12:38:19', '2025-01-01 12:38:19'),
(10599, 2, 'admin/send-emails', 'GET', '154.80.124.238', '[]', '2025-01-01 12:51:58', '2025-01-01 12:51:58'),
(10600, 2, 'admin/send-emails/create', 'GET', '154.80.124.238', '[]', '2025-01-01 12:52:01', '2025-01-01 12:52:01'),
(10601, 2, 'admin/app-users', 'GET', '154.80.124.238', '[]', '2025-01-01 12:52:23', '2025-01-01 12:52:23'),
(10602, 2, 'admin/send-emails', 'GET', '154.80.124.238', '[]', '2025-01-01 12:52:38', '2025-01-01 12:52:38'),
(10603, 2, 'admin/send-emails/create', 'GET', '154.80.124.238', '[]', '2025-01-01 12:52:41', '2025-01-01 12:52:41'),
(10604, 2, 'admin/send-emails', 'POST', '154.80.124.238', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"test\",\"body\":\"body msg is .\",\"_token\":\"0REWlV72yGrA4TcnE6ShvjtX9zV7qNv4JjeV6gJc\"}', '2025-01-01 12:53:10', '2025-01-01 12:53:10'),
(10605, 2, 'admin/send-emails', 'GET', '154.80.124.238', '[]', '2025-01-01 12:53:15', '2025-01-01 12:53:15'),
(10606, 2, 'admin/app-users', 'GET', '119.160.56.82', '[]', '2025-01-03 12:15:27', '2025-01-03 12:15:27'),
(10607, 2, 'admin/app-users', 'GET', '154.81.244.179', '[]', '2025-01-04 18:28:18', '2025-01-04 18:28:18'),
(10608, 2, 'admin/cloudstorages', 'GET', '154.81.244.179', '[]', '2025-01-04 18:28:27', '2025-01-04 18:28:27'),
(10609, 2, 'admin/cloudstorages', 'GET', '154.81.244.179', '[]', '2025-01-04 18:54:48', '2025-01-04 18:54:48'),
(10610, 2, 'admin/app-users', 'GET', '182.185.179.245', '[]', '2025-01-04 21:13:39', '2025-01-04 21:13:39'),
(10611, 2, 'admin/app-users', 'GET', '182.185.179.245', '[]', '2025-01-04 21:13:56', '2025-01-04 21:13:56'),
(10612, 2, 'admin/app-users/11/edit', 'GET', '182.185.179.245', '[]', '2025-01-04 21:14:04', '2025-01-04 21:14:04'),
(10613, 2, 'admin/app-users/11', 'GET', '182.185.179.245', '[]', '2025-01-04 21:14:09', '2025-01-04 21:14:09'),
(10614, 2, 'admin/app-users/11/edit', 'GET', '182.185.179.245', '[]', '2025-01-04 21:14:13', '2025-01-04 21:14:13'),
(10615, 2, 'admin/app-users', 'GET', '182.185.179.245', '[]', '2025-01-04 21:14:29', '2025-01-04 21:14:29'),
(10616, 2, 'admin/app-users', 'GET', '39.37.132.5', '[]', '2025-01-12 16:47:04', '2025-01-12 16:47:04'),
(10617, 2, 'admin/orders', 'GET', '39.37.132.5', '[]', '2025-01-12 16:47:28', '2025-01-12 16:47:28'),
(10618, 2, 'admin/cloudstorages', 'GET', '39.37.132.5', '[]', '2025-01-12 16:47:29', '2025-01-12 16:47:29'),
(10619, 2, 'admin/app-users', 'GET', '39.37.132.5', '[]', '2025-01-12 16:48:42', '2025-01-12 16:48:42'),
(10620, 2, 'admin/cloudstorages', 'GET', '39.37.132.5', '[]', '2025-01-12 16:48:52', '2025-01-12 16:48:52'),
(10621, 2, 'admin/cloudstorages/1/edit', 'GET', '39.37.132.5', '[]', '2025-01-12 16:49:01', '2025-01-12 16:49:01'),
(10622, 2, 'admin/cloudstorages/1', 'PUT', '39.37.132.5', '{\"uid\":\"9\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"Events one\",\"shared\":[\"2\",\"19\",null],\"_token\":\"6RtCaVVUiiwrM689ujFHheOszwFA7Dh5dW7gFuBJ\",\"_method\":\"PUT\"}', '2025-01-12 16:49:18', '2025-01-12 16:49:18'),
(10623, 2, 'admin/cloudstorages', 'GET', '39.37.132.5', '[]', '2025-01-12 16:49:19', '2025-01-12 16:49:19'),
(10624, 2, 'admin/cloudstorages', 'GET', '39.37.132.5', '[]', '2025-01-12 16:52:37', '2025-01-12 16:52:37'),
(10625, 2, 'admin/cloudstorages', 'GET', '39.37.132.5', '[]', '2025-01-12 16:57:46', '2025-01-12 16:57:46'),
(10626, 2, 'admin/orders', 'GET', '39.37.132.5', '[]', '2025-01-12 17:04:32', '2025-01-12 17:04:32'),
(10627, 2, 'admin/cloudstorages', 'GET', '39.37.132.5', '[]', '2025-01-12 17:05:49', '2025-01-12 17:05:49'),
(10628, 2, 'admin/app-settings', 'GET', '39.37.132.5', '[]', '2025-01-12 17:10:32', '2025-01-12 17:10:32'),
(10629, 2, 'admin/app-users', 'GET', '39.37.132.5', '[]', '2025-01-12 17:12:12', '2025-01-12 17:12:12'),
(10630, 2, 'admin/app-users', 'GET', '39.34.187.119', '[]', '2025-01-18 12:22:35', '2025-01-18 12:22:35'),
(10631, 2, 'admin', 'GET', '154.80.89.52', '[]', '2025-01-23 17:09:34', '2025-01-23 17:09:34'),
(10632, 2, 'admin/media', 'GET', '154.80.89.52', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-23 17:09:51', '2025-01-23 17:09:51'),
(10633, 2, 'admin/auth/menu', 'GET', '154.80.89.52', '[]', '2025-01-23 17:14:03', '2025-01-23 17:14:03'),
(10634, 2, 'admin/auth/menu', 'GET', '154.80.89.52', '[]', '2025-01-23 17:14:24', '2025-01-23 17:14:24'),
(10635, 2, 'admin/helpers/scaffold', 'GET', '154.80.89.52', '[]', '2025-01-23 17:21:46', '2025-01-23 17:21:46'),
(10636, 2, 'admin/orders', 'GET', '154.80.89.52', '[]', '2025-01-23 17:22:39', '2025-01-23 17:22:39'),
(10637, 2, 'admin/frames/1', 'GET', '154.80.89.52', '[]', '2025-01-23 17:22:49', '2025-01-23 17:22:49'),
(10638, 2, 'admin/orders', 'GET', '154.80.89.52', '[]', '2025-01-23 17:22:54', '2025-01-23 17:22:54'),
(10639, 2, 'admin/frames/1', 'GET', '154.80.89.52', '[]', '2025-01-23 17:23:51', '2025-01-23 17:23:51'),
(10640, 2, 'admin/orders', 'GET', '154.80.89.52', '[]', '2025-01-23 17:23:53', '2025-01-23 17:23:53'),
(10641, 2, 'admin/orders/1', 'GET', '154.80.89.52', '[]', '2025-01-23 17:23:56', '2025-01-23 17:23:56'),
(10642, 2, 'admin/frames/1', 'GET', '154.80.89.52', '[]', '2025-01-23 17:23:59', '2025-01-23 17:23:59'),
(10643, 2, 'admin/orders/1', 'GET', '154.80.89.52', '[]', '2025-01-23 17:24:03', '2025-01-23 17:24:03'),
(10644, 2, 'admin/orders', 'GET', '154.80.89.52', '[]', '2025-01-23 17:24:06', '2025-01-23 17:24:06'),
(10645, 2, 'admin/orders/1/edit', 'GET', '154.80.89.52', '[]', '2025-01-23 17:24:22', '2025-01-23 17:24:22'),
(10646, 2, 'admin/orders/1/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 17:25:46', '2025-01-23 17:25:46'),
(10647, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 17:28:53', '2025-01-23 17:28:53'),
(10648, 2, 'admin/auth/menu', 'GET', '154.80.72.146', '[]', '2025-01-23 17:28:55', '2025-01-23 17:28:55'),
(10649, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 17:28:59', '2025-01-23 17:28:59'),
(10650, 2, 'admin/orders/1/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 17:29:14', '2025-01-23 17:29:14'),
(10651, 2, 'admin/orders/1', 'PUT', '154.80.72.146', '{\"uid\":\"17\",\"search_terms\":null,\"status\":\"completed\",\"frames\":[\"1\",\"2\",null],\"price\":\"20\",\"isPay\":\"1\",\"isPay_cb\":\"on\",\"trId\":\"pm_123\",\"desc\":\"make amazing\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 17:31:38', '2025-01-23 17:31:38'),
(10652, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 17:31:39', '2025-01-23 17:31:39'),
(10653, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 17:33:47', '2025-01-23 17:33:47'),
(10654, 2, 'admin/helpers/scaffold', 'GET', '154.80.72.146', '[]', '2025-01-23 17:37:33', '2025-01-23 17:37:33'),
(10655, 2, 'admin/auth/login', 'GET', '154.80.72.146', '[]', '2025-01-23 17:37:45', '2025-01-23 17:37:45'),
(10656, 2, 'admin', 'GET', '154.80.72.146', '[]', '2025-01-23 17:37:46', '2025-01-23 17:37:46'),
(10657, 2, 'admin/helpers/scaffold', 'GET', '154.80.72.146', '[]', '2025-01-23 17:37:58', '2025-01-23 17:37:58'),
(10658, 2, 'admin/auth/login', 'GET', '154.80.72.146', '[]', '2025-01-23 17:38:05', '2025-01-23 17:38:05'),
(10659, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 17:38:06', '2025-01-23 17:38:06'),
(10660, 2, 'admin', 'GET', '154.80.72.146', '[]', '2025-01-23 17:38:06', '2025-01-23 17:38:06'),
(10661, 2, 'admin/contactus', 'GET', '154.80.72.146', '[]', '2025-01-23 17:38:13', '2025-01-23 17:38:13'),
(10662, 2, 'admin/helpers/scaffold', 'POST', '154.80.72.146', '{\"table_name\":\"TransactionHistory\",\"model_name\":\"App\\\\Models\\\\TransactionHistory\",\"controller_name\":\"App\\\\Admin\\\\Controllers\\\\TransactionHistoryController\",\"create\":[\"migration\",\"model\",\"controller\",\"migrate\",\"menu_item\"],\"fields\":{\"0\":{\"name\":\"uid\",\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":\"0\",\"comment\":\"user i\"},\"1\":{\"name\":\"status\",\"type\":\"boolean\",\"nullable\":\"on\",\"key\":null,\"default\":\"0\",\"comment\":\"paid unpaid\"},\"2\":{\"name\":\"payfor\",\"type\":\"integer\",\"nullable\":\"on\",\"key\":null,\"default\":\"0\",\"comment\":\"0 for folder and 1 for frames\"},\"5\":{\"name\":\"folderorframe\",\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":null,\"comment\":\"storage or fame  id\"},\"4\":{\"name\":\"price\",\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":null,\"comment\":\"amount\"},\"3\":{\"name\":\"trid\",\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":null,\"comment\":\"Transaction Id\"}},\"timestamps\":\"on\",\"soft_deletes\":\"on\",\"primary_key\":\"id\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 17:45:22', '2025-01-23 17:45:22'),
(10663, 2, 'admin/helpers/scaffold', 'GET', '154.80.72.146', '[]', '2025-01-23 17:45:23', '2025-01-23 17:45:23'),
(10664, 2, 'admin/helpers/scaffold', 'POST', '154.80.72.146', '{\"table_name\":\"TransactionHistory\",\"model_name\":\"App\\\\Models\\\\TransactionHistory\",\"controller_name\":\"App\\\\Admin\\\\Controllers\\\\TransactionHistoryController\",\"create\":[\"migration\",\"model\",\"controller\",\"migrate\",\"menu_item\"],\"fields\":{\"0\":{\"name\":\"uid\",\"type\":\"integer\",\"nullable\":\"on\",\"key\":null,\"default\":\"0\",\"comment\":\"user i\"},\"1\":{\"name\":\"status\",\"type\":\"boolean\",\"nullable\":\"on\",\"key\":null,\"default\":\"0\",\"comment\":\"paid unpaid\"},\"2\":{\"name\":\"payfor\",\"type\":\"integer\",\"nullable\":\"on\",\"key\":null,\"default\":\"0\",\"comment\":\"0 for folder and 1 for frames\"},\"5\":{\"name\":\"folderorframe\",\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":null,\"comment\":\"storage or fame  id\"},\"4\":{\"name\":\"price\",\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":null,\"comment\":\"amount\"},\"3\":{\"name\":\"trid\",\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":null,\"comment\":\"Transaction Id\"}},\"timestamps\":\"on\",\"soft_deletes\":\"on\",\"primary_key\":\"id\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 17:48:02', '2025-01-23 17:48:02'),
(10665, 2, 'admin/helpers/scaffold', 'GET', '154.80.72.146', '[]', '2025-01-23 17:48:03', '2025-01-23 17:48:03'),
(10666, 2, 'admin', 'GET', '154.80.72.146', '[]', '2025-01-23 17:48:47', '2025-01-23 17:48:47'),
(10667, 2, 'admin/media', 'GET', '154.80.72.146', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-23 17:48:59', '2025-01-23 17:48:59'),
(10668, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 17:49:05', '2025-01-23 17:49:05'),
(10669, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 17:50:10', '2025-01-23 17:50:10'),
(10670, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 17:54:30', '2025-01-23 17:54:30'),
(10671, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 17:54:34', '2025-01-23 17:54:34'),
(10672, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 18:10:54', '2025-01-23 18:10:54'),
(10673, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:11:04', '2025-01-23 18:11:04'),
(10674, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:12:21', '2025-01-23 18:12:21'),
(10675, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"13\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"14\",\"frameid\":[\"1\",\"2\",null],\"price\":\"10\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 18:13:09', '2025-01-23 18:13:09'),
(10676, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:13:11', '2025-01-23 18:13:11'),
(10677, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:13:48', '2025-01-23 18:13:48'),
(10678, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:14:54', '2025-01-23 18:14:54'),
(10679, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:15:14', '2025-01-23 18:15:14'),
(10680, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:17:32', '2025-01-23 18:17:32'),
(10681, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"13\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"5\",\"frameid\":[\"1\",\"2\",null],\"price\":\"11\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 18:18:09', '2025-01-23 18:18:09'),
(10682, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:18:13', '2025-01-23 18:18:13'),
(10683, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:24:31', '2025-01-23 18:24:31'),
(10684, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":null,\"frameid\":[\"1\",\"2\",null],\"price\":\"11\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 18:24:46', '2025-01-23 18:24:46'),
(10685, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:24:47', '2025-01-23 18:24:47'),
(10686, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"1\",\"frameid\":[\"1\",\"2\",null],\"price\":\"11\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 18:25:11', '2025-01-23 18:25:11'),
(10687, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:25:12', '2025-01-23 18:25:12'),
(10688, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"2\",\"frameid\":[\"1\",\"2\",null],\"price\":\"11\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 18:27:21', '2025-01-23 18:27:21'),
(10689, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:27:22', '2025-01-23 18:27:22'),
(10690, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"2\",\"frameid\":[\"1\",\"2\",null],\"price\":\"11\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 18:28:46', '2025-01-23 18:28:46'),
(10691, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 18:28:47', '2025-01-23 18:28:47'),
(10692, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 19:01:25', '2025-01-23 19:01:25'),
(10693, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"13\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"3\",\"frameid\":[\"2\",\"1\",null],\"price\":\"11\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 19:01:40', '2025-01-23 19:01:40'),
(10694, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 19:01:41', '2025-01-23 19:01:41'),
(10695, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 19:14:17', '2025-01-23 19:14:17'),
(10696, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"13\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"2\",\"frameid\":[\"2\",\"3\",null],\"price\":\"11\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 19:14:30', '2025-01-23 19:14:30'),
(10697, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:14:33', '2025-01-23 19:14:33'),
(10698, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:17:17', '2025-01-23 19:17:17'),
(10699, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 19:17:38', '2025-01-23 19:17:38'),
(10700, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:17:40', '2025-01-23 19:17:40'),
(10701, 2, 'admin/transaction-histories/1', 'PUT', '154.80.72.146', '{\"_method\":\"PUT\",\"status\":\"on\",\"after-save\":\"exit\"}', '2025-01-23 19:17:44', '2025-01-23 19:17:44'),
(10702, 2, 'admin/transaction-histories/1', 'PUT', '154.80.72.146', '{\"_method\":\"PUT\",\"status\":\"off\",\"after-save\":\"exit\"}', '2025-01-23 19:17:46', '2025-01-23 19:17:46'),
(10703, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:22:46', '2025-01-23 19:22:46'),
(10704, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:22:58', '2025-01-23 19:22:58'),
(10705, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:23:03', '2025-01-23 19:23:03'),
(10706, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:23:06', '2025-01-23 19:23:06'),
(10707, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:23:07', '2025-01-23 19:23:07'),
(10708, 2, 'admin/transaction-histories/1/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 19:23:10', '2025-01-23 19:23:10'),
(10709, 2, 'admin/transaction-histories/1', 'PUT', '154.80.72.146', '{\"uid\":\"13\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"2\",\"frameid\":[\"2\",\"1\",null],\"price\":\"11\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 19:23:19', '2025-01-23 19:23:19'),
(10710, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:23:20', '2025-01-23 19:23:20'),
(10711, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:24:47', '2025-01-23 19:24:47'),
(10712, 2, 'admin/transaction-histories/1/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:17', '2025-01-23 19:25:17'),
(10713, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:28', '2025-01-23 19:25:28'),
(10714, 2, 'admin/transaction-histories/1/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:31', '2025-01-23 19:25:31'),
(10715, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:34', '2025-01-23 19:25:34'),
(10716, 2, 'admin/transaction-histories/1/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:36', '2025-01-23 19:25:36'),
(10717, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:38', '2025-01-23 19:25:38'),
(10718, 2, 'admin/app-users/13', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:47', '2025-01-23 19:25:47'),
(10719, 2, 'admin/frames/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:55', '2025-01-23 19:25:55'),
(10720, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:25:57', '2025-01-23 19:25:57'),
(10721, 2, 'admin/frames/2', 'GET', '154.80.72.146', '[]', '2025-01-23 19:26:01', '2025-01-23 19:26:01'),
(10722, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:26:06', '2025-01-23 19:26:06'),
(10723, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:28:02', '2025-01-23 19:28:02'),
(10724, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 19:28:47', '2025-01-23 19:28:47'),
(10725, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:28:52', '2025-01-23 19:28:52'),
(10726, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 19:29:42', '2025-01-23 19:29:42'),
(10727, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 19:32:31', '2025-01-23 19:32:31'),
(10728, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:32:36', '2025-01-23 19:32:36'),
(10729, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 19:32:55', '2025-01-23 19:32:55'),
(10730, 2, 'admin/orders/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:32:58', '2025-01-23 19:32:58'),
(10731, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:35:32', '2025-01-23 19:35:32'),
(10732, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:35:34', '2025-01-23 19:35:34'),
(10733, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:39:03', '2025-01-23 19:39:03'),
(10734, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 19:39:25', '2025-01-23 19:39:25'),
(10735, 2, 'admin/cloudstorages/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:39:31', '2025-01-23 19:39:31'),
(10736, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 19:43:08', '2025-01-23 19:43:08'),
(10737, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:43:11', '2025-01-23 19:43:11'),
(10738, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:44:59', '2025-01-23 19:44:59'),
(10739, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:45:39', '2025-01-23 19:45:39'),
(10740, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:45:52', '2025-01-23 19:45:52'),
(10741, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:48:35', '2025-01-23 19:48:35'),
(10742, 2, 'admin/auth/menu', 'GET', '154.80.72.146', '[]', '2025-01-23 19:48:56', '2025-01-23 19:48:56'),
(10743, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:53:37', '2025-01-23 19:53:37'),
(10744, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:55:20', '2025-01-23 19:55:20'),
(10745, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:56:35', '2025-01-23 19:56:35'),
(10746, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:58:49', '2025-01-23 19:58:49'),
(10747, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:59:38', '2025-01-23 19:59:38'),
(10748, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 19:59:39', '2025-01-23 19:59:39'),
(10749, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 20:00:25', '2025-01-23 20:00:25'),
(10750, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 20:02:35', '2025-01-23 20:02:35'),
(10751, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 20:02:39', '2025-01-23 20:02:39'),
(10752, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:02:51', '2025-01-23 20:02:51'),
(10753, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:02:57', '2025-01-23 20:02:57'),
(10754, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"15\",\"search_terms\":null,\"Payfor\":\"1\",\"folderstorage\":\"12\",\"frameid\":[\"2\",\"3\",null],\"price\":\"12\",\"trid\":\"abc2\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 20:03:16', '2025-01-23 20:03:16'),
(10755, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:03:17', '2025-01-23 20:03:17'),
(10756, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:03:26', '2025-01-23 20:03:26'),
(10757, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:04:46', '2025-01-23 20:04:46'),
(10758, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:04:49', '2025-01-23 20:04:49'),
(10759, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":\"2\",\"frameid\":[null],\"price\":\"10\",\"trid\":\"abc3\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 20:05:12', '2025-01-23 20:05:12'),
(10760, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:05:13', '2025-01-23 20:05:13'),
(10761, 2, 'admin/transaction-histories/3', 'GET', '154.80.72.146', '[]', '2025-01-23 20:05:25', '2025-01-23 20:05:25'),
(10762, 2, 'admin/transaction-histories/3', 'GET', '154.80.72.146', '[]', '2025-01-23 20:06:35', '2025-01-23 20:06:35'),
(10763, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:06:40', '2025-01-23 20:06:40'),
(10764, 2, 'admin/transaction-histories/2/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 20:06:44', '2025-01-23 20:06:44'),
(10765, 2, 'admin/transaction-histories/2', 'PUT', '154.80.72.146', '{\"uid\":\"15\",\"search_terms\":null,\"Payfor\":\"0\",\"folderstorage\":null,\"frameid\":[\"2\",\"3\",null],\"price\":\"12\",\"trid\":\"abc2\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 20:06:57', '2025-01-23 20:06:57'),
(10766, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:06:59', '2025-01-23 20:06:59'),
(10767, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:07:04', '2025-01-23 20:07:04'),
(10768, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:07:54', '2025-01-23 20:07:54'),
(10769, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:08:30', '2025-01-23 20:08:30'),
(10770, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:08:44', '2025-01-23 20:08:44'),
(10771, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:08:49', '2025-01-23 20:08:49'),
(10772, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:12:19', '2025-01-23 20:12:19'),
(10773, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:12:30', '2025-01-23 20:12:30'),
(10774, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:12:34', '2025-01-23 20:12:34'),
(10775, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:12:42', '2025-01-23 20:12:42'),
(10776, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:13:13', '2025-01-23 20:13:13'),
(10777, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:13:18', '2025-01-23 20:13:18'),
(10778, 2, 'admin/transaction-histories/3', 'GET', '154.80.72.146', '[]', '2025-01-23 20:13:23', '2025-01-23 20:13:23'),
(10779, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:13:45', '2025-01-23 20:13:45'),
(10780, 2, 'admin/transaction-histories/3', 'GET', '154.80.72.146', '[]', '2025-01-23 20:13:48', '2025-01-23 20:13:48'),
(10781, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:13:51', '2025-01-23 20:13:51'),
(10782, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:13:57', '2025-01-23 20:13:57'),
(10783, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:14:01', '2025-01-23 20:14:01'),
(10784, 2, 'admin/transaction-histories/2/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 20:14:09', '2025-01-23 20:14:09'),
(10785, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:14:12', '2025-01-23 20:14:12'),
(10786, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:15:13', '2025-01-23 20:15:13'),
(10787, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:16:35', '2025-01-23 20:16:35'),
(10788, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:16:39', '2025-01-23 20:16:39'),
(10789, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:17:31', '2025-01-23 20:17:31'),
(10790, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:20:37', '2025-01-23 20:20:37'),
(10791, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:21:44', '2025-01-23 20:21:44'),
(10792, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:22:54', '2025-01-23 20:22:54'),
(10793, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"payfor\":\"1\",\"frameid\":[\"2\",\"3\",null],\"price\":\"11\",\"trid\":\"abcc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 20:23:09', '2025-01-23 20:23:09'),
(10794, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:23:10', '2025-01-23 20:23:10'),
(10795, 2, 'admin/transaction-histories/4', 'GET', '154.80.72.146', '[]', '2025-01-23 20:23:17', '2025-01-23 20:23:17'),
(10796, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:23:24', '2025-01-23 20:23:24'),
(10797, 2, 'admin/transaction-histories/4/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 20:23:28', '2025-01-23 20:23:28'),
(10798, 2, 'admin/transaction-histories/4', 'PUT', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"payfor\":\"0\",\"foldername\":\"abc\",\"folderstorage\":\"11\",\"frameid\":[\"2\",\"3\"],\"price\":\"11\",\"trid\":\"abcc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 20:23:40', '2025-01-23 20:23:40'),
(10799, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:23:41', '2025-01-23 20:23:41'),
(10800, 2, 'admin/transaction-histories/4/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 20:23:51', '2025-01-23 20:23:51'),
(10801, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:04', '2025-01-23 20:24:04'),
(10802, 2, 'admin/transaction-histories/4', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:06', '2025-01-23 20:24:06'),
(10803, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:20', '2025-01-23 20:24:20'),
(10804, 2, 'admin/transaction-histories/4', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:24', '2025-01-23 20:24:24'),
(10805, 2, 'admin/transaction-histories/4/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:25', '2025-01-23 20:24:25'),
(10806, 2, 'admin/transaction-histories/4/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:26', '2025-01-23 20:24:26'),
(10807, 2, 'admin/transaction-histories/4', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:28', '2025-01-23 20:24:28'),
(10808, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:30', '2025-01-23 20:24:30'),
(10809, 2, 'admin/transaction-histories/4/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:33', '2025-01-23 20:24:33'),
(10810, 2, 'admin/transaction-histories/4', 'PUT', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"payfor\":\"0\",\"foldername\":\"abc\",\"folderstorage\":\"17\",\"frameid\":[\"2\",\"3\"],\"price\":\"11\",\"trid\":\"abcc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 20:24:40', '2025-01-23 20:24:40'),
(10811, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:41', '2025-01-23 20:24:41'),
(10812, 2, 'admin/transaction-histories/4', 'GET', '154.80.72.146', '[]', '2025-01-23 20:24:46', '2025-01-23 20:24:46'),
(10813, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:25:13', '2025-01-23 20:25:13'),
(10814, 2, 'admin/transaction-histories/4/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 20:25:22', '2025-01-23 20:25:22'),
(10815, 2, 'admin/transaction-histories/4', 'PUT', '154.80.72.146', '{\"uid\":\"14\",\"search_terms\":null,\"payfor\":\"1\",\"frameid\":[\"2\",\"3\",null],\"price\":\"11\",\"trid\":\"abcc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 20:25:26', '2025-01-23 20:25:26'),
(10816, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:25:26', '2025-01-23 20:25:26'),
(10817, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:27:26', '2025-01-23 20:27:26'),
(10818, 2, 'admin/transaction-histories/4', 'GET', '154.80.72.146', '[]', '2025-01-23 20:27:35', '2025-01-23 20:27:35'),
(10819, 2, 'admin/transaction-histories/4', 'GET', '154.80.72.146', '[]', '2025-01-23 20:28:01', '2025-01-23 20:28:01'),
(10820, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:28:08', '2025-01-23 20:28:08'),
(10821, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:28:11', '2025-01-23 20:28:11'),
(10822, 2, 'admin/transaction-histories/2', 'GET', '154.80.72.146', '[]', '2025-01-23 20:29:26', '2025-01-23 20:29:26'),
(10823, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:29:29', '2025-01-23 20:29:29'),
(10824, 2, 'admin/transaction-histories/4', 'GET', '154.80.72.146', '[]', '2025-01-23 20:29:32', '2025-01-23 20:29:32'),
(10825, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:29:34', '2025-01-23 20:29:34'),
(10826, 2, 'admin/transaction-histories/1', 'GET', '154.80.72.146', '[]', '2025-01-23 20:29:38', '2025-01-23 20:29:38'),
(10827, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:29:56', '2025-01-23 20:29:56'),
(10828, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:32:28', '2025-01-23 20:32:28'),
(10829, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:34:13', '2025-01-23 20:34:13'),
(10830, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:35:04', '2025-01-23 20:35:04'),
(10831, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:35:16', '2025-01-23 20:35:16'),
(10832, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:37:38', '2025-01-23 20:37:38'),
(10833, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:38:01', '2025-01-23 20:38:01'),
(10834, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:39:24', '2025-01-23 20:39:24');
INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(10835, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:39:43', '2025-01-23 20:39:43'),
(10836, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:41:43', '2025-01-23 20:41:43'),
(10837, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:41:47', '2025-01-23 20:41:47'),
(10838, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:42:16', '2025-01-23 20:42:16'),
(10839, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:43:10', '2025-01-23 20:43:10'),
(10840, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:43:19', '2025-01-23 20:43:19'),
(10841, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:43:35', '2025-01-23 20:43:35'),
(10842, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:43:39', '2025-01-23 20:43:39'),
(10843, 2, 'admin/_handle_action_', 'POST', '154.80.72.146', '{\"_model\":\"App_Models_TransactionHistory\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"1,2,3,4\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 20:44:03', '2025-01-23 20:44:03'),
(10844, 2, 'admin/transaction-histories/1,2,3,4', 'DELETE', '154.80.72.146', '{\"_method\":\"delete\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 20:44:04', '2025-01-23 20:44:04'),
(10845, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:44:04', '2025-01-23 20:44:04'),
(10846, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:44:05', '2025-01-23 20:44:05'),
(10847, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:44:08', '2025-01-23 20:44:08'),
(10848, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:46:14', '2025-01-23 20:46:14'),
(10849, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"13\",\"search_terms\":null,\"payfor\":\"0\",\"foldername\":\"indian event\",\"folderstorage\":\"20\",\"price\":\"50\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 20:46:50', '2025-01-23 20:46:50'),
(10850, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:46:51', '2025-01-23 20:46:51'),
(10851, 2, 'admin/transaction-histories/create', 'GET', '154.80.72.146', '[]', '2025-01-23 20:47:11', '2025-01-23 20:47:11'),
(10852, 2, 'admin/transaction-histories', 'POST', '154.80.72.146', '{\"uid\":\"19\",\"search_terms\":null,\"payfor\":\"1\",\"frameid\":[\"1\",\"2\",null],\"price\":\"80\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 20:47:34', '2025-01-23 20:47:34'),
(10853, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:47:35', '2025-01-23 20:47:35'),
(10854, 2, 'admin/transaction-histories/6', 'GET', '154.80.72.146', '[]', '2025-01-23 20:47:50', '2025-01-23 20:47:50'),
(10855, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:47:57', '2025-01-23 20:47:57'),
(10856, 2, 'admin/transaction-histories/5', 'GET', '154.80.72.146', '[]', '2025-01-23 20:48:00', '2025-01-23 20:48:00'),
(10857, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:48:02', '2025-01-23 20:48:02'),
(10858, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 20:50:17', '2025-01-23 20:50:17'),
(10859, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 20:51:19', '2025-01-23 20:51:19'),
(10860, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 20:51:31', '2025-01-23 20:51:31'),
(10861, 2, 'admin/frames', 'GET', '154.80.72.146', '[]', '2025-01-23 20:51:46', '2025-01-23 20:51:46'),
(10862, 2, 'admin/app-users', 'GET', '154.80.72.146', '[]', '2025-01-23 20:52:08', '2025-01-23 20:52:08'),
(10863, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 20:52:29', '2025-01-23 20:52:29'),
(10864, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:32:59', '2025-01-23 21:32:59'),
(10865, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:00', '2025-01-23 21:33:00'),
(10866, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:01', '2025-01-23 21:33:01'),
(10867, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:02', '2025-01-23 21:33:02'),
(10868, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:03', '2025-01-23 21:33:03'),
(10869, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:04', '2025-01-23 21:33:04'),
(10870, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:05', '2025-01-23 21:33:05'),
(10871, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:06', '2025-01-23 21:33:06'),
(10872, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:07', '2025-01-23 21:33:07'),
(10873, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:08', '2025-01-23 21:33:08'),
(10874, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:09', '2025-01-23 21:33:09'),
(10875, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:10', '2025-01-23 21:33:10'),
(10876, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:11', '2025-01-23 21:33:11'),
(10877, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:12', '2025-01-23 21:33:12'),
(10878, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:13', '2025-01-23 21:33:13'),
(10879, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:15', '2025-01-23 21:33:15'),
(10880, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:16', '2025-01-23 21:33:16'),
(10881, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:17', '2025-01-23 21:33:17'),
(10882, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:18', '2025-01-23 21:33:18'),
(10883, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:19', '2025-01-23 21:33:19'),
(10884, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:20', '2025-01-23 21:33:20'),
(10885, 2, 'admin/frames', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:20', '2025-01-23 21:33:20'),
(10886, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:41', '2025-01-23 21:33:41'),
(10887, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:43', '2025-01-23 21:33:43'),
(10888, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:44', '2025-01-23 21:33:44'),
(10889, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:45', '2025-01-23 21:33:45'),
(10890, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:46', '2025-01-23 21:33:46'),
(10891, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:47', '2025-01-23 21:33:47'),
(10892, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:48', '2025-01-23 21:33:48'),
(10893, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:49', '2025-01-23 21:33:49'),
(10894, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:50', '2025-01-23 21:33:50'),
(10895, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:51', '2025-01-23 21:33:51'),
(10896, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:52', '2025-01-23 21:33:52'),
(10897, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:54', '2025-01-23 21:33:54'),
(10898, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:33:54', '2025-01-23 21:33:54'),
(10899, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:34:11', '2025-01-23 21:34:11'),
(10900, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:37:43', '2025-01-23 21:37:43'),
(10901, 2, 'admin/transaction-histories/8/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 21:38:09', '2025-01-23 21:38:09'),
(10902, 2, 'admin/transaction-histories/8', 'PUT', '154.80.72.146', '{\"uid\":\"9\",\"search_terms\":null,\"payfor\":\"1\",\"frameid\":[\"1\",null],\"price\":\"20\",\"trid\":\"abc\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 21:38:13', '2025-01-23 21:38:13'),
(10903, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:38:14', '2025-01-23 21:38:14'),
(10904, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-23 21:38:35', '2025-01-23 21:38:35'),
(10905, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 21:42:10', '2025-01-23 21:42:10'),
(10906, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 21:42:34', '2025-01-23 21:42:34'),
(10907, 2, 'admin/orders', 'GET', '154.80.72.146', '[]', '2025-01-23 21:44:25', '2025-01-23 21:44:25'),
(10908, 2, 'admin/contactus', 'GET', '154.80.72.146', '[]', '2025-01-23 21:45:45', '2025-01-23 21:45:45'),
(10909, 2, 'admin/contactus', 'GET', '154.80.72.146', '[]', '2025-01-23 21:47:57', '2025-01-23 21:47:57'),
(10910, 2, 'admin/contactus', 'GET', '154.80.72.146', '[]', '2025-01-23 21:48:24', '2025-01-23 21:48:24'),
(10911, 2, 'admin/notifies', 'GET', '154.80.72.146', '[]', '2025-01-23 21:48:37', '2025-01-23 21:48:37'),
(10912, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 22:11:26', '2025-01-23 22:11:26'),
(10913, 2, 'admin/subscriptions-settings', 'GET', '154.80.72.146', '[]', '2025-01-23 22:16:16', '2025-01-23 22:16:16'),
(10914, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 22:16:52', '2025-01-23 22:16:52'),
(10915, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 22:19:00', '2025-01-23 22:19:00'),
(10916, 2, 'admin/notifies', 'GET', '154.80.72.146', '[]', '2025-01-23 22:20:35', '2025-01-23 22:20:35'),
(10917, 2, 'admin/notifies/1', 'DELETE', '154.80.72.146', '{\"_method\":\"delete\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-23 22:20:43', '2025-01-23 22:20:43'),
(10918, 2, 'admin/notifies', 'GET', '154.80.72.146', '[]', '2025-01-23 22:20:45', '2025-01-23 22:20:45'),
(10919, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 22:20:52', '2025-01-23 22:20:52'),
(10920, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 22:52:01', '2025-01-23 22:52:01'),
(10921, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 22:52:39', '2025-01-23 22:52:39'),
(10922, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 22:56:37', '2025-01-23 22:56:37'),
(10923, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:04:10', '2025-01-23 23:04:10'),
(10924, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:11:10', '2025-01-23 23:11:10'),
(10925, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:11:22', '2025-01-23 23:11:22'),
(10926, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:11:29', '2025-01-23 23:11:29'),
(10927, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:17:21', '2025-01-23 23:17:21'),
(10928, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:17:28', '2025-01-23 23:17:28'),
(10929, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:17:29', '2025-01-23 23:17:29'),
(10930, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:18:50', '2025-01-23 23:18:50'),
(10931, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:18:57', '2025-01-23 23:18:57'),
(10932, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:18:57', '2025-01-23 23:18:57'),
(10933, 2, 'admin/cloudstorages/3', 'GET', '154.80.72.146', '[]', '2025-01-23 23:21:34', '2025-01-23 23:21:34'),
(10934, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:21:35', '2025-01-23 23:21:35'),
(10935, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:21:43', '2025-01-23 23:21:43'),
(10936, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:21:44', '2025-01-23 23:21:44'),
(10937, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:25', '2025-01-23 23:23:25'),
(10938, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:27', '2025-01-23 23:23:27'),
(10939, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:28', '2025-01-23 23:23:28'),
(10940, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:29', '2025-01-23 23:23:29'),
(10941, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:30', '2025-01-23 23:23:30'),
(10942, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:31', '2025-01-23 23:23:31'),
(10943, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:32', '2025-01-23 23:23:32'),
(10944, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:33', '2025-01-23 23:23:33'),
(10945, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:34', '2025-01-23 23:23:34'),
(10946, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:36', '2025-01-23 23:23:36'),
(10947, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:37', '2025-01-23 23:23:37'),
(10948, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:38', '2025-01-23 23:23:38'),
(10949, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:40', '2025-01-23 23:23:40'),
(10950, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:41', '2025-01-23 23:23:41'),
(10951, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:42', '2025-01-23 23:23:42'),
(10952, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:43', '2025-01-23 23:23:43'),
(10953, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:45', '2025-01-23 23:23:45'),
(10954, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:47', '2025-01-23 23:23:47'),
(10955, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:48', '2025-01-23 23:23:48'),
(10956, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:49', '2025-01-23 23:23:49'),
(10957, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:51', '2025-01-23 23:23:51'),
(10958, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:52', '2025-01-23 23:23:52'),
(10959, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:53', '2025-01-23 23:23:53'),
(10960, 2, 'admin/cloudstorages/3', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:53', '2025-01-23 23:23:53'),
(10961, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:54', '2025-01-23 23:23:54'),
(10962, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:55', '2025-01-23 23:23:55'),
(10963, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:56', '2025-01-23 23:23:56'),
(10964, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:57', '2025-01-23 23:23:57'),
(10965, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:58', '2025-01-23 23:23:58'),
(10966, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:23:59', '2025-01-23 23:23:59'),
(10967, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:00', '2025-01-23 23:24:00'),
(10968, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:01', '2025-01-23 23:24:01'),
(10969, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:02', '2025-01-23 23:24:02'),
(10970, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:03', '2025-01-23 23:24:03'),
(10971, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:04', '2025-01-23 23:24:04'),
(10972, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:06', '2025-01-23 23:24:06'),
(10973, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:07', '2025-01-23 23:24:07'),
(10974, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:08', '2025-01-23 23:24:08'),
(10975, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:09', '2025-01-23 23:24:09'),
(10976, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:10', '2025-01-23 23:24:10'),
(10977, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:12', '2025-01-23 23:24:12'),
(10978, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:13', '2025-01-23 23:24:13'),
(10979, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:14', '2025-01-23 23:24:14'),
(10980, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:15', '2025-01-23 23:24:15'),
(10981, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:17', '2025-01-23 23:24:17'),
(10982, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:18', '2025-01-23 23:24:18'),
(10983, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:19', '2025-01-23 23:24:19'),
(10984, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:20', '2025-01-23 23:24:20'),
(10985, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:21', '2025-01-23 23:24:21'),
(10986, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:23', '2025-01-23 23:24:23'),
(10987, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:24', '2025-01-23 23:24:24'),
(10988, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:25', '2025-01-23 23:24:25'),
(10989, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:26', '2025-01-23 23:24:26'),
(10990, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:27', '2025-01-23 23:24:27'),
(10991, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:28', '2025-01-23 23:24:28'),
(10992, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:29', '2025-01-23 23:24:29'),
(10993, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:30', '2025-01-23 23:24:30'),
(10994, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:31', '2025-01-23 23:24:31'),
(10995, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:33', '2025-01-23 23:24:33'),
(10996, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:35', '2025-01-23 23:24:35'),
(10997, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:37', '2025-01-23 23:24:37'),
(10998, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:39', '2025-01-23 23:24:39'),
(10999, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:41', '2025-01-23 23:24:41'),
(11000, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:42', '2025-01-23 23:24:42'),
(11001, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:43', '2025-01-23 23:24:43'),
(11002, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:44', '2025-01-23 23:24:44'),
(11003, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:46', '2025-01-23 23:24:46'),
(11004, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:47', '2025-01-23 23:24:47'),
(11005, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:48', '2025-01-23 23:24:48'),
(11006, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:49', '2025-01-23 23:24:49'),
(11007, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:50', '2025-01-23 23:24:50'),
(11008, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:52', '2025-01-23 23:24:52'),
(11009, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:53', '2025-01-23 23:24:53'),
(11010, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:54', '2025-01-23 23:24:54'),
(11011, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:55', '2025-01-23 23:24:55'),
(11012, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:56', '2025-01-23 23:24:56'),
(11013, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:57', '2025-01-23 23:24:57'),
(11014, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:24:59', '2025-01-23 23:24:59'),
(11015, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:25:00', '2025-01-23 23:25:00'),
(11016, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:25:01', '2025-01-23 23:25:01'),
(11017, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:25:02', '2025-01-23 23:25:02'),
(11018, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:25:03', '2025-01-23 23:25:03'),
(11019, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:25:05', '2025-01-23 23:25:05'),
(11020, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:25:06', '2025-01-23 23:25:06'),
(11021, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:25:07', '2025-01-23 23:25:07'),
(11022, 2, 'admin/cloudstorages/3', 'GET', '154.80.72.146', '[]', '2025-01-23 23:38:07', '2025-01-23 23:38:07'),
(11023, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:38:12', '2025-01-23 23:38:12'),
(11024, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"4\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:38:20', '2025-01-23 23:38:20'),
(11025, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:38:21', '2025-01-23 23:38:21'),
(11026, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:40:55', '2025-01-23 23:40:55'),
(11027, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:40:58', '2025-01-23 23:40:58'),
(11028, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:41:04', '2025-01-23 23:41:04'),
(11029, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:41:05', '2025-01-23 23:41:05'),
(11030, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:43:09', '2025-01-23 23:43:09'),
(11031, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"4\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:43:15', '2025-01-23 23:43:15'),
(11032, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:43:16', '2025-01-23 23:43:16'),
(11033, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:44:12', '2025-01-23 23:44:12'),
(11034, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:44:17', '2025-01-23 23:44:17'),
(11035, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:44:18', '2025-01-23 23:44:18'),
(11036, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:45:08', '2025-01-23 23:45:08'),
(11037, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:45:13', '2025-01-23 23:45:13'),
(11038, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:45:14', '2025-01-23 23:45:14'),
(11039, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:48:27', '2025-01-23 23:48:27'),
(11040, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:48:32', '2025-01-23 23:48:32'),
(11041, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:48:33', '2025-01-23 23:48:33'),
(11042, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:50:25', '2025-01-23 23:50:25'),
(11043, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:50:32', '2025-01-23 23:50:32'),
(11044, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:50:33', '2025-01-23 23:50:33'),
(11045, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:52:17', '2025-01-23 23:52:17'),
(11046, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:52:24', '2025-01-23 23:52:24'),
(11047, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"1\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:52:30', '2025-01-23 23:52:30'),
(11048, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:52:31', '2025-01-23 23:52:31'),
(11049, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:53:01', '2025-01-23 23:53:01'),
(11050, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:53:06', '2025-01-23 23:53:06'),
(11051, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:53:14', '2025-01-23 23:53:14'),
(11052, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:54:46', '2025-01-23 23:54:46'),
(11053, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:54:47', '2025-01-23 23:54:47'),
(11054, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:55:22', '2025-01-23 23:55:22'),
(11055, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:56:56', '2025-01-23 23:56:56'),
(11056, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:57:02', '2025-01-23 23:57:02'),
(11057, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:57:03', '2025-01-23 23:57:03'),
(11058, 2, 'admin/subscriptions-settings', 'GET', '154.80.72.146', '[]', '2025-01-23 23:57:32', '2025-01-23 23:57:32'),
(11059, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:58:42', '2025-01-23 23:58:42'),
(11060, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:58:48', '2025-01-23 23:58:48'),
(11061, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:58:50', '2025-01-23 23:58:50'),
(11062, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:59:03', '2025-01-23 23:59:03'),
(11063, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"1\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:59:10', '2025-01-23 23:59:10'),
(11064, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:59:11', '2025-01-23 23:59:11'),
(11065, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:59:27', '2025-01-23 23:59:27'),
(11066, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"1\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:59:33', '2025-01-23 23:59:33'),
(11067, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:59:34', '2025-01-23 23:59:34'),
(11068, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-23 23:59:47', '2025-01-23 23:59:47'),
(11069, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"1\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-23 23:59:52', '2025-01-23 23:59:52'),
(11070, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-23 23:59:53', '2025-01-23 23:59:53'),
(11071, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:00:34', '2025-01-24 00:00:34'),
(11072, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:00:41', '2025-01-24 00:00:41'),
(11073, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:00:42', '2025-01-24 00:00:42'),
(11074, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:00:54', '2025-01-24 00:00:54'),
(11075, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"1\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:00:59', '2025-01-24 00:00:59'),
(11076, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:01:00', '2025-01-24 00:01:00'),
(11077, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"4\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:01:27', '2025-01-24 00:01:27'),
(11078, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:01:28', '2025-01-24 00:01:28'),
(11079, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:01:42', '2025-01-24 00:01:42'),
(11080, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:01:43', '2025-01-24 00:01:43'),
(11081, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:03:33', '2025-01-24 00:03:33'),
(11082, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"4\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:03:41', '2025-01-24 00:03:41'),
(11083, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:03:42', '2025-01-24 00:03:42'),
(11084, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:04:07', '2025-01-24 00:04:07'),
(11085, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:04:12', '2025-01-24 00:04:12'),
(11086, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:04:14', '2025-01-24 00:04:14'),
(11087, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:06:59', '2025-01-24 00:06:59'),
(11088, 2, 'admin/cloudstorages/7/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:07:11', '2025-01-24 00:07:11'),
(11089, 2, 'admin/cloudstorages/7', 'PUT', '154.80.72.146', '{\"uid\":\"13\",\"search_terms\":null,\"subscription\":\"1\",\"folderName\":\"Demo\",\"shared\":[\"2\",\"3\",null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:07:26', '2025-01-24 00:07:26'),
(11090, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:07:27', '2025-01-24 00:07:27'),
(11091, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:07:59', '2025-01-24 00:07:59'),
(11092, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:08:04', '2025-01-24 00:08:04'),
(11093, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:08:05', '2025-01-24 00:08:05'),
(11094, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:08:25', '2025-01-24 00:08:25'),
(11095, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:08:34', '2025-01-24 00:08:34'),
(11096, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:08:36', '2025-01-24 00:08:36'),
(11097, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:08:59', '2025-01-24 00:08:59'),
(11098, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:09:09', '2025-01-24 00:09:09'),
(11099, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:09:10', '2025-01-24 00:09:10'),
(11100, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:09:50', '2025-01-24 00:09:50'),
(11101, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"subscription\":\"2\",\"folderName\":\"renamed1\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:10:00', '2025-01-24 00:10:00'),
(11102, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:10:00', '2025-01-24 00:10:00'),
(11103, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:10:52', '2025-01-24 00:10:52'),
(11104, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"folderName\":\"renamed1\",\"shared\":[null],\"subscription\":\"3\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:11:02', '2025-01-24 00:11:02'),
(11105, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:11:03', '2025-01-24 00:11:03'),
(11106, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:11:22', '2025-01-24 00:11:22'),
(11107, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"folderName\":\"renamed1\",\"shared\":[null],\"subscription\":\"4\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:11:34', '2025-01-24 00:11:34'),
(11108, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:11:35', '2025-01-24 00:11:35'),
(11109, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:12:42', '2025-01-24 00:12:42'),
(11110, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"folderName\":\"renamed1\",\"shared\":[null],\"subscription\":\"1\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:12:57', '2025-01-24 00:12:57'),
(11111, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:12:58', '2025-01-24 00:12:58'),
(11112, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:15:44', '2025-01-24 00:15:44'),
(11113, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"folderName\":\"renamed1\",\"shared\":[null],\"subscription\":\"4\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:15:50', '2025-01-24 00:15:50'),
(11114, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:15:51', '2025-01-24 00:15:51'),
(11115, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:16:10', '2025-01-24 00:16:10'),
(11116, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"folderName\":\"renamed1\",\"shared\":[null],\"subscription\":\"2\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:16:15', '2025-01-24 00:16:15'),
(11117, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:16:16', '2025-01-24 00:16:16'),
(11118, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:17:57', '2025-01-24 00:17:57'),
(11119, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"folderName\":\"renamed1\",\"shared\":[null],\"subscription\":\"4\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:18:04', '2025-01-24 00:18:04'),
(11120, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:18:05', '2025-01-24 00:18:05'),
(11121, 2, 'admin/cloudstorages/3/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:18:31', '2025-01-24 00:18:31'),
(11122, 2, 'admin/cloudstorages/3', 'PUT', '154.80.72.146', '{\"uid\":\"2\",\"search_terms\":null,\"folderName\":\"renamed1\",\"shared\":[null],\"subscription\":\"3\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:19:12', '2025-01-24 00:19:12'),
(11123, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:19:13', '2025-01-24 00:19:13'),
(11124, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:19:59', '2025-01-24 00:19:59'),
(11125, 2, 'admin/cloudstorages/5/edit', 'GET', '154.80.72.146', '[]', '2025-01-24 00:20:06', '2025-01-24 00:20:06'),
(11126, 2, 'admin/cloudstorages/5', 'PUT', '154.80.72.146', '{\"uid\":\"9\",\"search_terms\":null,\"subscription\":\"1\",\"folderName\":\"apifolder\",\"shared\":[null],\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\",\"_method\":\"PUT\"}', '2025-01-24 00:20:12', '2025-01-24 00:20:12'),
(11127, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:20:13', '2025-01-24 00:20:13'),
(11128, 2, 'admin/cloudstorages', 'GET', '154.80.72.146', '[]', '2025-01-24 00:43:23', '2025-01-24 00:43:23'),
(11129, 2, 'admin/notifies', 'GET', '154.80.72.146', '[]', '2025-01-24 00:51:51', '2025-01-24 00:51:51'),
(11130, 2, 'admin/notifies', 'GET', '154.80.72.146', '[]', '2025-01-24 00:57:28', '2025-01-24 00:57:28'),
(11131, 2, 'admin/notifies', 'GET', '154.80.72.146', '[]', '2025-01-24 00:57:48', '2025-01-24 00:57:48'),
(11132, 2, 'admin/notifies/4', 'DELETE', '154.80.72.146', '{\"_method\":\"delete\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-24 00:57:54', '2025-01-24 00:57:54'),
(11133, 2, 'admin/notifies', 'GET', '154.80.72.146', '[]', '2025-01-24 00:57:55', '2025-01-24 00:57:55'),
(11134, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-24 02:03:20', '2025-01-24 02:03:20'),
(11135, 2, 'admin/transaction-histories', 'GET', '154.80.72.146', '[]', '2025-01-24 02:03:28', '2025-01-24 02:03:28'),
(11136, 2, 'admin/auth/menu', 'GET', '154.80.72.146', '[]', '2025-01-24 02:03:37', '2025-01-24 02:03:37'),
(11137, 2, 'admin/auth/menu/104', 'DELETE', '154.80.72.146', '{\"_method\":\"delete\",\"_token\":\"S4F4SpVSzfe5uWV2qL9Ocu1Nmn5UJZmTOAZKPye8\"}', '2025-01-24 02:03:42', '2025-01-24 02:03:42'),
(11138, 2, 'admin/auth/menu', 'GET', '154.80.72.146', '[]', '2025-01-24 02:03:43', '2025-01-24 02:03:43'),
(11139, 2, 'admin/send-emails', 'GET', '154.80.72.146', '[]', '2025-01-24 02:03:54', '2025-01-24 02:03:54'),
(11140, 2, 'admin', 'GET', '119.160.58.127', '[]', '2025-01-24 09:59:33', '2025-01-24 09:59:33'),
(11141, 2, 'admin/send-emails', 'GET', '154.80.72.197', '[]', '2025-01-24 11:02:09', '2025-01-24 11:02:09'),
(11142, 2, 'admin/send-emails/create', 'GET', '154.80.72.197', '[]', '2025-01-24 11:02:18', '2025-01-24 11:02:18'),
(11143, 2, 'admin/send-emails', 'POST', '154.80.72.197', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"password requested\",\"body\":\"new password is created\",\"_token\":\"YQ2xQthZMAfsh7FGCLmqOx4q6NdEK63aZjLSI7IR\"}', '2025-01-24 11:02:59', '2025-01-24 11:02:59'),
(11144, 2, 'admin/send-emails', 'GET', '154.80.72.197', '[]', '2025-01-24 11:03:02', '2025-01-24 11:03:02'),
(11145, 2, 'admin', 'GET', '154.80.72.197', '[]', '2025-01-24 15:41:03', '2025-01-24 15:41:03'),
(11146, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 15:41:12', '2025-01-24 15:41:12'),
(11147, 2, 'admin/app-users/9/edit', 'GET', '154.80.72.197', '[]', '2025-01-24 15:41:27', '2025-01-24 15:41:27'),
(11148, 2, 'admin/app-users/9', 'PUT', '154.80.72.197', '{\"isActive\":\"0\",\"name\":\"John\'s\",\"email\":\"hasanameer386@gmail.com\",\"phone\":\"03012______\",\"password\":\"*****-filtered-out-*****\",\"address\":\"kp\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\",\"_method\":\"PUT\"}', '2025-01-24 15:41:44', '2025-01-24 15:41:44'),
(11149, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 15:41:46', '2025-01-24 15:41:46'),
(11150, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 17:18:52', '2025-01-24 17:18:52'),
(11151, 2, 'admin/_handle_action_', 'POST', '154.80.72.197', '{\"_model\":\"App_Models_notify\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"6,7,8,9\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 17:19:21', '2025-01-24 17:19:21'),
(11152, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 17:19:22', '2025-01-24 17:19:22'),
(11153, 2, 'admin/notifies/6,7,8,9', 'DELETE', '154.80.72.197', '{\"_method\":\"delete\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 17:19:22', '2025-01-24 17:19:22'),
(11154, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 17:19:23', '2025-01-24 17:19:23'),
(11155, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 17:21:02', '2025-01-24 17:21:02'),
(11156, 2, 'admin/app-users/26', 'GET', '154.80.72.197', '[]', '2025-01-24 17:22:00', '2025-01-24 17:22:00'),
(11157, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 17:22:15', '2025-01-24 17:22:15'),
(11158, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 17:26:55', '2025-01-24 17:26:55'),
(11159, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 17:30:42', '2025-01-24 17:30:42'),
(11160, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 17:31:04', '2025-01-24 17:31:04'),
(11161, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 17:31:26', '2025-01-24 17:31:26'),
(11162, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 17:33:01', '2025-01-24 17:33:01'),
(11163, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 18:11:42', '2025-01-24 18:11:42'),
(11164, 2, 'admin/app-users/13', 'GET', '154.80.72.197', '[]', '2025-01-24 18:11:50', '2025-01-24 18:11:50'),
(11165, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 18:12:02', '2025-01-24 18:12:02'),
(11166, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 18:12:13', '2025-01-24 18:12:13'),
(11167, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 18:23:49', '2025-01-24 18:23:49'),
(11168, 2, 'admin/cloudstorages/1', 'GET', '154.80.72.197', '[]', '2025-01-24 18:23:54', '2025-01-24 18:23:54'),
(11169, 2, 'admin/app-users/26', 'GET', '154.80.72.197', '[]', '2025-01-24 18:23:59', '2025-01-24 18:23:59'),
(11170, 2, 'admin/app-users/26/edit', 'GET', '154.80.72.197', '[]', '2025-01-24 18:24:02', '2025-01-24 18:24:02'),
(11171, 2, 'admin/app-users/26', 'GET', '154.80.72.197', '[]', '2025-01-24 18:24:06', '2025-01-24 18:24:06'),
(11172, 2, 'admin/cloudstorages/1', 'GET', '154.80.72.197', '[]', '2025-01-24 18:24:08', '2025-01-24 18:24:08'),
(11173, 2, 'admin/cloudstorages/1/edit', 'GET', '154.80.72.197', '[]', '2025-01-24 18:24:13', '2025-01-24 18:24:13'),
(11174, 2, 'admin/cloudstorages/1', 'PUT', '154.80.72.197', '{\"uid\":\"9\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"Events one\",\"shared\":[\"19\",\"2\",null],\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\",\"_method\":\"PUT\"}', '2025-01-24 18:24:18', '2025-01-24 18:24:18'),
(11175, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 18:24:20', '2025-01-24 18:24:20'),
(11176, 2, 'admin/cloudstorages/1/edit', 'GET', '154.80.72.197', '[]', '2025-01-24 18:29:55', '2025-01-24 18:29:55'),
(11177, 2, 'admin/cloudstorages/1', 'PUT', '154.80.72.197', '{\"uid\":\"9\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"Events one\",\"shared\":[\"19\",\"2\",null],\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\",\"_method\":\"PUT\"}', '2025-01-24 18:30:01', '2025-01-24 18:30:01'),
(11178, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 18:30:02', '2025-01-24 18:30:02'),
(11179, 2, 'admin/cloudstorages/1/edit', 'GET', '154.80.72.197', '[]', '2025-01-24 18:31:07', '2025-01-24 18:31:07'),
(11180, 2, 'admin/cloudstorages/1', 'PUT', '154.80.72.197', '{\"uid\":\"9\",\"search_terms\":null,\"subscription\":\"3\",\"folderName\":\"Events one\",\"shared\":[\"19\",\"2\",null],\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\",\"_method\":\"PUT\"}', '2025-01-24 18:31:12', '2025-01-24 18:31:12'),
(11181, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 18:31:13', '2025-01-24 18:31:13'),
(11182, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 18:54:30', '2025-01-24 18:54:30'),
(11183, 2, 'admin/_handle_action_', 'POST', '154.80.72.197', '{\"_model\":\"App_Models_notify\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"2,3,5,10,11,12,13,14,15,16,17\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:15:57', '2025-01-24 19:15:57'),
(11184, 2, 'admin/notifies/2,3,5,10,11,12,13,14,15,16,17', 'DELETE', '154.80.72.197', '{\"_method\":\"delete\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:15:58', '2025-01-24 19:15:58'),
(11185, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 19:15:59', '2025-01-24 19:15:59'),
(11186, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:00', '2025-01-24 19:16:00'),
(11187, 2, 'admin/_handle_action_', 'POST', '154.80.72.197', '{\"_model\":\"App_Models_notify\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"18,19,20,21\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:16:05', '2025-01-24 19:16:05'),
(11188, 2, 'admin/notifies/18,19,20,21', 'DELETE', '154.80.72.197', '{\"_method\":\"delete\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:16:05', '2025-01-24 19:16:05'),
(11189, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:06', '2025-01-24 19:16:06'),
(11190, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:07', '2025-01-24 19:16:07'),
(11191, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:10', '2025-01-24 19:16:10'),
(11192, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:36', '2025-01-24 19:16:36');
INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(11193, 2, 'admin/_handle_action_', 'POST', '154.80.72.197', '{\"_model\":\"App_Models_appUsers\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"2,9,11,12,13,14,17,19,20,26,27,28,29,30\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:16:41', '2025-01-24 19:16:41'),
(11194, 2, 'admin/app-users/2,9,11,12,13,14,17,19,20,26,27,28,29,30', 'DELETE', '154.80.72.197', '{\"_method\":\"delete\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:16:42', '2025-01-24 19:16:42'),
(11195, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:42', '2025-01-24 19:16:42'),
(11196, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:43', '2025-01-24 19:16:43'),
(11197, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:49', '2025-01-24 19:16:49'),
(11198, 2, 'admin/_handle_action_', 'POST', '154.80.72.197', '{\"_model\":\"App_Models_cloudstorage\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"1,2,3,5,7,11,13,15,17,18,19,20,21,22,23\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:16:58', '2025-01-24 19:16:58'),
(11199, 2, 'admin/cloudstorages/1,2,3,5,7,11,13,15,17,18,19,20,21,22,23', 'DELETE', '154.80.72.197', '{\"_method\":\"delete\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:16:59', '2025-01-24 19:16:59'),
(11200, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 19:16:59', '2025-01-24 19:16:59'),
(11201, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:00', '2025-01-24 19:17:00'),
(11202, 2, 'admin/subscriptions-settings', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:03', '2025-01-24 19:17:03'),
(11203, 2, 'admin/notifies', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:05', '2025-01-24 19:17:05'),
(11204, 2, 'admin/orders', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:06', '2025-01-24 19:17:06'),
(11205, 2, 'admin/_handle_action_', 'POST', '154.80.72.197', '{\"_model\":\"App_Models_orders\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"1,2,10,11,12,13,14,17,18,19,20,21,22,23,24,25,26\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:17:14', '2025-01-24 19:17:14'),
(11206, 2, 'admin/orders/1,2,10,11,12,13,14,17,18,19,20,21,22,23,24,25,26', 'DELETE', '154.80.72.197', '{\"_method\":\"delete\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(11207, 2, 'admin/orders', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(11208, 2, 'admin/orders', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:17', '2025-01-24 19:17:17'),
(11209, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:20', '2025-01-24 19:17:20'),
(11210, 2, 'admin/contactus', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:29', '2025-01-24 19:17:29'),
(11211, 2, 'admin/_handle_action_', 'POST', '154.80.72.197', '{\"_model\":\"App_Models_contactUs\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:17:34', '2025-01-24 19:17:34'),
(11212, 2, 'admin/contactus', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:35', '2025-01-24 19:17:35'),
(11213, 2, 'admin/contactus/1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'DELETE', '154.80.72.197', '{\"_method\":\"delete\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:17:35', '2025-01-24 19:17:35'),
(11214, 2, 'admin/contactus', 'GET', '154.80.72.197', '[]', '2025-01-24 19:17:36', '2025-01-24 19:17:36'),
(11215, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:17:40', '2025-01-24 19:17:40'),
(11216, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"view\":\"table\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:18:16', '2025-01-24 19:18:16'),
(11217, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:18:21', '2025-01-24 19:18:21'),
(11218, 2, 'admin/media', 'GET', '154.80.72.197', '{\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:18:26', '2025-01-24 19:18:26'),
(11219, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/videos\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:18:32', '2025-01-24 19:18:32'),
(11220, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/videos\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:18:33', '2025-01-24 19:18:33'),
(11221, 2, 'admin/media/download', 'GET', '154.80.72.197', '{\"file\":\"videos\\/1733928868.mp4\"}', '2025-01-24 19:18:36', '2025-01-24 19:18:36'),
(11222, 2, 'admin/media/delete', 'DELETE', '154.80.72.197', '{\"files\":[\"videos\\/1733928868.mp4\"]}', '2025-01-24 19:18:51', '2025-01-24 19:18:51'),
(11223, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/videos\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:18:53', '2025-01-24 19:18:53'),
(11224, 2, 'admin/media', 'GET', '154.80.72.197', '{\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:18:55', '2025-01-24 19:18:55'),
(11225, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/images\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:18:58', '2025-01-24 19:18:58'),
(11226, 2, 'admin/media/download', 'GET', '154.80.72.197', '{\"file\":\"images\\/1734803396.jpg\"}', '2025-01-24 19:19:23', '2025-01-24 19:19:23'),
(11227, 2, 'admin/media/delete', 'DELETE', '154.80.72.197', '{\"files\":[\"images\\/1733919939.png\",\"images\\/1733920151.png\",\"images\\/1733920167.png\",\"images\\/1733920194.png\",\"images\\/1733920233.png\",\"images\\/1734803142.jpg\",\"images\\/1734803396.jpg\",\"images\\/alcohol.png\",\"images\\/bikevanlogo.jpeg\",\"images\\/splash.jpeg\",\"images\\/splash_1.jpeg\"]}', '2025-01-24 19:19:41', '2025-01-24 19:19:41'),
(11228, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/images\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:19:41', '2025-01-24 19:19:41'),
(11229, 2, 'admin/media/delete', 'DELETE', '154.80.72.197', '{\"files\":[\"images\\/1736701922.jpg\",\"images\\/1737400257.png\"]}', '2025-01-24 19:19:54', '2025-01-24 19:19:54'),
(11230, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/images\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:19:55', '2025-01-24 19:19:55'),
(11231, 2, 'admin/media', 'GET', '154.80.72.197', '{\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:20:00', '2025-01-24 19:20:00'),
(11232, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:20:05', '2025-01-24 19:20:05'),
(11233, 2, 'admin/media/delete', 'DELETE', '154.80.72.197', '{\"files\":[\"files\\/1733928056.png\",\"files\\/1733928130.png\",\"files\\/1733928156.png\",\"files\\/1733928328.png\",\"files\\/1733928419.png\",\"files\\/1733928456.png\",\"files\\/1733928739.jpeg\",\"files\\/1733928739.png\",\"files\\/1733928868.jpeg\",\"files\\/1733928868.png\",\"files\\/bikevanlogo_1.jpeg\",\"files\\/bikevanlogo_2.jpeg\",\"files\\/dart.png\",\"files\\/img_7439.png\",\"files\\/img_7439_1.png\",\"files\\/img_7439_2.png\",\"files\\/img_7439_3.png\",\"files\\/sale offer (1) (1).jpg\",\"files\\/sale offer (1).jpg\",\"files\\/ultrapod.png\"]}', '2025-01-24 19:20:53', '2025-01-24 19:20:53'),
(11234, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:20:54', '2025-01-24 19:20:54'),
(11235, 2, 'admin/media/delete', 'DELETE', '154.80.72.197', '{\"files\":[\"files\\/1733928968.jpeg\",\"files\\/1733928968.png\",\"files\\/1733932691.jpg\",\"files\\/1733932691.png\",\"files\\/1733932838.jpg\",\"files\\/1733932838.png\",\"files\\/1733932914.jpg\",\"files\\/1733932914.png\",\"files\\/1733932926.jpg\",\"files\\/1733932926.png\",\"files\\/1733932937.jpg\",\"files\\/1733932937.png\",\"files\\/1733938393.jpg\",\"files\\/1733938393.png\",\"files\\/1733938413.jpg\",\"files\\/1733938413.png\",\"files\\/1733938427.jpg\",\"files\\/1733938427.png\",\"files\\/1733938556.jpg\",\"files\\/1733938841.png\",\"files\\/1733938966.png\",\"files\\/1733939438.jpg\",\"files\\/1733940534.png\",\"files\\/1733940628.jpg\",\"files\\/1733941087.jpg\",\"files\\/1733941347.png\",\"files\\/1733941428.jpg\",\"files\\/1733941632.png\",\"files\\/1733941636.jpg\",\"files\\/1733942352.jpg\",\"files\\/1733942445.png\",\"files\\/1733942740.jpg\",\"files\\/1733943012.png\",\"files\\/1733943607.png\",\"files\\/1733943645.jpg\",\"files\\/1733944005.png\",\"files\\/1733944864.jpg\",\"files\\/1733945076.png\"]}', '2025-01-24 19:21:55', '2025-01-24 19:21:55'),
(11236, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:21:57', '2025-01-24 19:21:57'),
(11237, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 19:27:04', '2025-01-24 19:27:04'),
(11238, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 19:27:16', '2025-01-24 19:27:16'),
(11239, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:27:45', '2025-01-24 19:27:45'),
(11240, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:27:50', '2025-01-24 19:27:50'),
(11241, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:27:53', '2025-01-24 19:27:53'),
(11242, 2, 'admin/frames', 'GET', '154.80.72.197', '[]', '2025-01-24 19:27:56', '2025-01-24 19:27:56'),
(11243, 2, 'admin', 'GET', '154.80.72.197', '[]', '2025-01-24 19:28:03', '2025-01-24 19:28:03'),
(11244, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-24 19:28:07', '2025-01-24 19:28:07'),
(11245, 2, 'admin/frames', 'GET', '154.80.72.197', '[]', '2025-01-24 19:28:11', '2025-01-24 19:28:11'),
(11246, 2, 'admin/app-settings', 'GET', '154.80.72.197', '[]', '2025-01-24 19:28:14', '2025-01-24 19:28:14'),
(11247, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-24 19:28:42', '2025-01-24 19:28:42'),
(11248, 2, 'admin/subscriptions-settings', 'GET', '154.80.72.197', '[]', '2025-01-24 19:28:46', '2025-01-24 19:28:46'),
(11249, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 19:33:15', '2025-01-24 19:33:15'),
(11250, 2, 'admin/send-emails', 'GET', '154.80.72.197', '[]', '2025-01-24 19:34:31', '2025-01-24 19:34:31'),
(11251, 2, 'admin/send-emails/create', 'GET', '154.80.72.197', '[]', '2025-01-24 19:34:33', '2025-01-24 19:34:33'),
(11252, 2, 'admin/send-emails', 'POST', '154.80.72.197', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"password is changed\",\"body\":\"new password is 7860\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:35:46', '2025-01-24 19:35:46'),
(11253, 2, 'admin/send-emails', 'GET', '154.80.72.197', '[]', '2025-01-24 19:35:49', '2025-01-24 19:35:49'),
(11254, 2, 'admin/send-emails/create', 'GET', '154.80.72.197', '[]', '2025-01-24 19:43:23', '2025-01-24 19:43:23'),
(11255, 2, 'admin/send-emails', 'POST', '154.80.72.197', '{\"options\":\"2\",\"email\":\"hasanameer386@gmail.com\",\"subject\":\"new passsord\",\"body\":\"new passoword s 7966\",\"_token\":\"rhqdQFfnEFZGrmp332nUYttV60BfyQQ9jxEBxOct\"}', '2025-01-24 19:43:51', '2025-01-24 19:43:51'),
(11256, 2, 'admin/send-emails', 'GET', '154.80.72.197', '[]', '2025-01-24 19:43:54', '2025-01-24 19:43:54'),
(11257, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-24 19:50:49', '2025-01-24 19:50:49'),
(11258, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-25 05:23:47', '2025-01-25 05:23:47'),
(11259, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-25 09:31:26', '2025-01-25 09:31:26'),
(11260, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-25 09:31:49', '2025-01-25 09:31:49'),
(11261, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-25 09:32:39', '2025-01-25 09:32:39'),
(11262, 2, 'admin/subscriptions-settings', 'GET', '154.80.72.197', '[]', '2025-01-25 09:59:08', '2025-01-25 09:59:08'),
(11263, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 09:59:11', '2025-01-25 09:59:11'),
(11264, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-25 10:50:55', '2025-01-25 10:50:55'),
(11265, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:23:24', '2025-01-25 12:23:24'),
(11266, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:28:42', '2025-01-25 12:28:42'),
(11267, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:29:04', '2025-01-25 12:29:04'),
(11268, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:34:45', '2025-01-25 12:34:45'),
(11269, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:36:56', '2025-01-25 12:36:56'),
(11270, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:37:59', '2025-01-25 12:37:59'),
(11271, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:46:31', '2025-01-25 12:46:31'),
(11272, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-25 12:47:04', '2025-01-25 12:47:04'),
(11273, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-25 12:48:36', '2025-01-25 12:48:36'),
(11274, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:48:41', '2025-01-25 12:48:41'),
(11275, 2, 'admin/transaction-histories/22/edit', 'GET', '154.80.72.197', '[]', '2025-01-25 12:48:57', '2025-01-25 12:48:57'),
(11276, 2, 'admin/transaction-histories/22', 'PUT', '154.80.72.197', '{\"uid\":\"32\",\"search_terms\":null,\"payfor\":\"1\",\"frameid\":[null],\"price\":\"69\",\"trid\":\"pi_3Ql8kCDPiaFCF9z81HJZ2qX0\",\"_token\":\"NmCeOHMINZTjnqgX6uzdYrLVpAKP5JmgVM44YIK0\",\"_method\":\"PUT\"}', '2025-01-25 12:49:07', '2025-01-25 12:49:07'),
(11277, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:49:08', '2025-01-25 12:49:08'),
(11278, 2, 'admin/transaction-histories/22/edit', 'GET', '154.80.72.197', '[]', '2025-01-25 12:49:22', '2025-01-25 12:49:22'),
(11279, 2, 'admin/transaction-histories/22', 'PUT', '154.80.72.197', '{\"uid\":\"32\",\"search_terms\":null,\"payfor\":\"0\",\"foldername\":\"event1\",\"folderstorage\":\"100\",\"price\":\"69\",\"trid\":\"pi_3Ql8kCDPiaFCF9z81HJZ2qX0\",\"_token\":\"NmCeOHMINZTjnqgX6uzdYrLVpAKP5JmgVM44YIK0\",\"_method\":\"PUT\"}', '2025-01-25 12:49:34', '2025-01-25 12:49:34'),
(11280, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:49:35', '2025-01-25 12:49:35'),
(11281, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 12:51:00', '2025-01-25 12:51:00'),
(11282, 2, 'admin/subscriptions-settings', 'GET', '154.80.72.197', '[]', '2025-01-25 12:51:03', '2025-01-25 12:51:03'),
(11283, 2, 'admin/cloudstorages', 'GET', '154.80.72.197', '[]', '2025-01-25 12:51:06', '2025-01-25 12:51:06'),
(11284, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 13:01:49', '2025-01-25 13:01:49'),
(11285, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 13:01:54', '2025-01-25 13:01:54'),
(11286, 2, 'admin/transaction-histories', 'GET', '154.80.72.197', '[]', '2025-01-25 13:22:03', '2025-01-25 13:22:03'),
(11287, 2, 'admin/media', 'GET', '154.80.72.197', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-25 13:22:43', '2025-01-25 13:22:43'),
(11288, 2, 'admin/app-users', 'GET', '154.80.72.197', '[]', '2025-01-25 13:22:47', '2025-01-25 13:22:47'),
(11289, 2, 'admin/app-users', 'GET', '154.80.113.200', '[]', '2025-01-25 15:06:42', '2025-01-25 15:06:42'),
(11290, 2, 'admin/subscriptions-settings', 'GET', '154.80.113.200', '[]', '2025-01-25 15:28:23', '2025-01-25 15:28:23'),
(11291, 2, 'admin/cloudstorages', 'GET', '154.80.113.200', '[]', '2025-01-25 15:28:23', '2025-01-25 15:28:23'),
(11292, 2, 'admin/cloudstorages', 'GET', '154.80.113.200', '[]', '2025-01-25 15:28:27', '2025-01-25 15:28:27'),
(11293, 2, 'admin/transaction-histories', 'GET', '154.80.113.200', '[]', '2025-01-25 15:38:07', '2025-01-25 15:38:07'),
(11294, 2, 'admin/media', 'GET', '154.80.113.200', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-25 15:38:07', '2025-01-25 15:38:07'),
(11295, 2, 'admin/media', 'GET', '154.80.113.200', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-25 15:38:28', '2025-01-25 15:38:28'),
(11296, 2, 'admin/media', 'GET', '154.80.113.200', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-01-25 16:01:53', '2025-01-25 16:01:53'),
(11297, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 17:40:38', '2025-01-25 17:40:38'),
(11298, 2, 'admin/frames/3', 'GET', '154.80.113.200', '[]', '2025-01-25 17:41:15', '2025-01-25 17:41:15'),
(11299, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 17:41:19', '2025-01-25 17:41:19'),
(11300, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 18:03:53', '2025-01-25 18:03:53'),
(11301, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 18:08:19', '2025-01-25 18:08:19'),
(11302, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:05:15', '2025-01-25 19:05:15'),
(11303, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:09:18', '2025-01-25 19:09:18'),
(11304, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:16:57', '2025-01-25 19:16:57'),
(11305, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:20:12', '2025-01-25 19:20:12'),
(11306, 2, 'admin/_handle_action_', 'POST', '154.80.113.200', '{\"_model\":\"App_Models_orders\",\"_action\":\"OpenAdmin_Admin_Grid_Tools_BatchDelete\",\"_key\":\"27,28,29,30,31\",\"_token\":\"NmCeOHMINZTjnqgX6uzdYrLVpAKP5JmgVM44YIK0\"}', '2025-01-25 19:20:53', '2025-01-25 19:20:53'),
(11307, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:20:54', '2025-01-25 19:20:54'),
(11308, 2, 'admin/orders/27,28,29,30,31', 'DELETE', '154.80.113.200', '{\"_method\":\"delete\",\"_token\":\"NmCeOHMINZTjnqgX6uzdYrLVpAKP5JmgVM44YIK0\"}', '2025-01-25 19:20:54', '2025-01-25 19:20:54'),
(11309, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:20:55', '2025-01-25 19:20:55'),
(11310, 2, 'admin/frames/1', 'GET', '154.80.113.200', '[]', '2025-01-25 19:21:21', '2025-01-25 19:21:21'),
(11311, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:21:27', '2025-01-25 19:21:27'),
(11312, 2, 'admin/orders/33/edit', 'GET', '154.80.113.200', '[]', '2025-01-25 19:22:29', '2025-01-25 19:22:29'),
(11313, 2, 'admin/orders/33', 'PUT', '154.80.113.200', '{\"uid\":\"32\",\"search_terms\":null,\"status\":\"progress\",\"frames\":[\"1\",null],\"desc\":\"n=only 14 inches frames should be attach\",\"_token\":\"NmCeOHMINZTjnqgX6uzdYrLVpAKP5JmgVM44YIK0\",\"_method\":\"PUT\"}', '2025-01-25 19:22:37', '2025-01-25 19:22:37'),
(11314, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:22:38', '2025-01-25 19:22:38'),
(11315, 2, 'admin/orders/32/edit', 'GET', '154.80.113.200', '[]', '2025-01-25 19:37:08', '2025-01-25 19:37:08'),
(11316, 2, 'admin/orders/32', 'PUT', '154.80.113.200', '{\"uid\":\"32\",\"search_terms\":null,\"status\":\"completed\",\"frames\":[\"1\",\"3\",null],\"desc\":\"ass\",\"_token\":\"NmCeOHMINZTjnqgX6uzdYrLVpAKP5JmgVM44YIK0\",\"_method\":\"PUT\"}', '2025-01-25 19:37:13', '2025-01-25 19:37:13'),
(11317, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:37:14', '2025-01-25 19:37:14'),
(11318, 2, 'admin/orders/33/edit', 'GET', '154.80.113.200', '[]', '2025-01-25 19:44:15', '2025-01-25 19:44:15'),
(11319, 2, 'admin/orders/33', 'PUT', '154.80.113.200', '{\"uid\":\"32\",\"search_terms\":null,\"status\":\"pending\",\"frames\":[\"1\",null],\"desc\":\"n=only 14 inches frames should be attach\",\"_token\":\"NmCeOHMINZTjnqgX6uzdYrLVpAKP5JmgVM44YIK0\",\"_method\":\"PUT\"}', '2025-01-25 19:44:20', '2025-01-25 19:44:20'),
(11320, 2, 'admin/orders', 'GET', '154.80.113.200', '[]', '2025-01-25 19:44:21', '2025-01-25 19:44:21'),
(11321, 2, 'admin/cloudstorages', 'GET', '154.80.69.129', '[]', '2025-01-25 21:34:27', '2025-01-25 21:34:27'),
(11322, 2, 'admin/cloudstorages', 'GET', '154.80.69.129', '[]', '2025-01-25 22:05:24', '2025-01-25 22:05:24'),
(11323, 2, 'admin/cloudstorages', 'GET', '154.80.69.129', '[]', '2025-01-25 22:48:07', '2025-01-25 22:48:07'),
(11324, 2, 'admin/app-users', 'GET', '223.123.2.44', '[]', '2025-01-27 17:27:50', '2025-01-27 17:27:50'),
(11325, 2, 'admin/subscriptions-settings', 'GET', '223.123.2.44', '[]', '2025-01-27 17:28:23', '2025-01-27 17:28:23'),
(11326, 2, 'admin/subscriptions-settings', 'GET', '223.123.2.44', '[]', '2025-01-27 17:28:25', '2025-01-27 17:28:25'),
(11327, 2, 'admin/orders', 'GET', '223.123.2.44', '[]', '2025-01-27 17:28:37', '2025-01-27 17:28:37'),
(11328, 2, 'admin/transaction-histories', 'GET', '223.123.2.44', '[]', '2025-01-27 17:28:42', '2025-01-27 17:28:42'),
(11329, 2, 'admin/send-emails', 'GET', '223.123.2.44', '[]', '2025-01-27 17:29:39', '2025-01-27 17:29:39'),
(11330, 2, 'admin/app-users', 'GET', '223.123.2.44', '[]', '2025-01-27 17:31:39', '2025-01-27 17:31:39'),
(11331, 2, 'admin/app-users/create', 'GET', '223.123.2.44', '[]', '2025-01-27 17:31:47', '2025-01-27 17:31:47'),
(11332, 2, 'admin/app-users', 'GET', '223.123.2.44', '[]', '2025-01-27 17:31:56', '2025-01-27 17:31:56'),
(11333, 2, 'admin/app-users', 'GET', '39.37.166.147', '[]', '2025-02-01 07:40:19', '2025-02-01 07:40:19'),
(11334, 2, 'admin/app-users', 'GET', '154.81.246.105', '[]', '2025-02-01 07:40:46', '2025-02-01 07:40:46'),
(11335, 2, 'admin/app-users/33/edit', 'GET', '154.81.246.105', '[]', '2025-02-01 07:40:57', '2025-02-01 07:40:57'),
(11336, 2, 'admin/app-users', 'GET', '154.81.246.105', '[]', '2025-02-01 07:41:14', '2025-02-01 07:41:14'),
(11337, 2, 'admin/orders', 'GET', '154.81.246.105', '[]', '2025-02-01 07:52:55', '2025-02-01 07:52:55'),
(11338, 2, 'admin/orders', 'GET', '154.81.246.105', '[]', '2025-02-01 07:53:05', '2025-02-01 07:53:05'),
(11339, 2, 'admin/app-users', 'GET', '154.80.92.127', '[]', '2025-02-03 22:10:47', '2025-02-03 22:10:47'),
(11340, 2, 'admin/auth/menu', 'GET', '154.80.92.127', '[]', '2025-02-03 22:10:58', '2025-02-03 22:10:58'),
(11341, 2, 'admin/app-users', 'GET', '154.80.66.173', '[]', '2025-02-22 17:22:03', '2025-02-22 17:22:03'),
(11342, 2, 'admin/cloudstorages', 'GET', '154.80.66.173', '[]', '2025-02-22 17:22:22', '2025-02-22 17:22:22'),
(11343, 2, 'admin/app-users', 'GET', '154.80.66.173', '[]', '2025-02-22 17:22:28', '2025-02-22 17:22:28'),
(11344, 2, 'admin/app-users/31', 'DELETE', '154.80.66.173', '{\"_method\":\"delete\",\"_token\":\"A2bSeJfr6SivoRZTwX47oOPg5VeaDVvetNPhLZ6Z\"}', '2025-02-22 17:22:32', '2025-02-22 17:22:32'),
(11345, 2, 'admin/app-users', 'GET', '154.80.66.173', '[]', '2025-02-22 17:22:33', '2025-02-22 17:22:33'),
(11346, 2, 'admin/media', 'GET', '154.80.66.173', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-02-22 17:25:22', '2025-02-22 17:25:22'),
(11347, 2, 'admin/media/download', 'GET', '154.80.66.173', '{\"file\":\"files\\/1737892798.jpg\"}', '2025-02-22 17:25:47', '2025-02-22 17:25:47'),
(11348, 2, 'admin/cloudstorages', 'GET', '154.80.66.173', '[]', '2025-02-22 17:26:13', '2025-02-22 17:26:13'),
(11349, 2, 'admin/cloudstorages/41', 'GET', '154.80.66.173', '[]', '2025-02-22 17:26:24', '2025-02-22 17:26:24'),
(11350, 2, 'admin/media', 'GET', '154.80.66.173', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-02-22 17:27:18', '2025-02-22 17:27:18'),
(11351, 2, 'admin/app-users', 'GET', '154.80.66.173', '[]', '2025-02-22 17:37:31', '2025-02-22 17:37:31'),
(11352, 2, 'admin/app-users', 'GET', '223.123.23.124', '[]', '2025-02-22 17:44:16', '2025-02-22 17:44:16'),
(11353, 2, 'admin/auth/logout', 'GET', '223.123.23.124', '[]', '2025-02-22 17:44:27', '2025-02-22 17:44:27'),
(11354, 2, 'admin/auth/logout', 'GET', '154.80.66.173', '[]', '2025-02-22 17:44:33', '2025-02-22 17:44:33'),
(11355, 2, 'admin/app-users', 'GET', '223.123.23.124', '[]', '2025-02-22 17:44:40', '2025-02-22 17:44:40'),
(11356, 2, 'admin/app-users', 'GET', '154.80.66.173', '[]', '2025-02-22 17:47:33', '2025-02-22 17:47:33'),
(11357, 2, 'admin/auth/menu', 'GET', '154.80.66.173', '[]', '2025-02-22 17:50:40', '2025-02-22 17:50:40'),
(11358, 2, 'admin/app-settings', 'GET', '154.80.66.173', '[]', '2025-02-22 17:50:45', '2025-02-22 17:50:45'),
(11359, 2, 'admin/app-settings/1/edit', 'GET', '154.80.66.173', '[]', '2025-02-22 17:50:54', '2025-02-22 17:50:54'),
(11360, 2, 'admin/app-settings/1', 'PUT', '154.80.66.173', '{\"appName\":\"S4G\",\"showEmail\":\"0\",\"email\":\"admin@gmail.com\",\"_token\":\"cV8GYrj4ke1d8IWZst2MsNaR1gD4n6xRQw0QOLLQ\",\"_method\":\"PUT\"}', '2025-02-22 17:51:07', '2025-02-22 17:51:07'),
(11361, 2, 'admin/app-settings', 'GET', '154.80.66.173', '[]', '2025-02-22 17:51:08', '2025-02-22 17:51:08'),
(11362, 2, 'admin/app-users', 'GET', '223.123.23.124', '[]', '2025-02-22 18:46:00', '2025-02-22 18:46:00'),
(11363, 2, 'admin/send-emails', 'GET', '223.123.23.124', '[]', '2025-02-22 18:46:49', '2025-02-22 18:46:49'),
(11364, 2, 'admin/send-emails', 'GET', '223.123.23.124', '[]', '2025-02-22 18:46:51', '2025-02-22 18:46:51'),
(11365, 2, 'admin/app-users', 'GET', '223.123.23.124', '[]', '2025-02-22 18:52:31', '2025-02-22 18:52:31'),
(11366, 2, 'admin/app-users', 'GET', '154.81.247.235', '[]', '2025-02-25 18:37:27', '2025-02-25 18:37:27'),
(11367, 2, 'admin/app-settings', 'GET', '154.81.247.235', '[]', '2025-02-25 18:37:34', '2025-02-25 18:37:34'),
(11368, 2, 'admin/app-users', 'GET', '182.185.168.130', '[]', '2025-03-07 15:54:26', '2025-03-07 15:54:26'),
(11369, 2, 'admin/notifies', 'GET', '182.185.168.130', '[]', '2025-03-07 15:56:30', '2025-03-07 15:56:30'),
(11370, 2, 'admin/notifies', 'GET', '182.185.168.130', '{\"_export_\":\"all\"}', '2025-03-07 16:04:26', '2025-03-07 16:04:26'),
(11371, 2, 'admin/app-users/32', 'GET', '182.185.168.130', '[]', '2025-03-07 16:04:46', '2025-03-07 16:04:46'),
(11372, 2, 'admin/app-users', 'GET', '119.160.56.37', '[]', '2025-03-09 14:19:35', '2025-03-09 14:19:35'),
(11373, 2, 'admin/cloudstorages', 'GET', '154.80.125.139', '[]', '2025-03-09 15:06:51', '2025-03-09 15:06:51'),
(11374, 2, 'admin/subscriptions-settings', 'GET', '154.80.125.139', '[]', '2025-03-09 15:07:25', '2025-03-09 15:07:25'),
(11375, 2, 'admin/notifies', 'GET', '154.80.125.139', '[]', '2025-03-09 15:07:33', '2025-03-09 15:07:33'),
(11376, 2, 'admin/media', 'GET', '154.80.125.139', '{\"path\":\"\\/files\",\"view\":\"list\",\"select\":\"0\",\"fn\":\"selectFile\"}', '2025-03-09 15:07:39', '2025-03-09 15:07:39'),
(11377, 2, 'admin/frames', 'GET', '154.80.125.139', '[]', '2025-03-09 15:07:49', '2025-03-09 15:07:49'),
(11378, 2, 'admin/frames', 'GET', '154.80.125.139', '[]', '2025-03-09 15:07:50', '2025-03-09 15:07:50'),
(11379, 2, 'admin/app-settings', 'GET', '154.80.125.139', '[]', '2025-03-09 15:07:57', '2025-03-09 15:07:57'),
(11380, 2, 'admin/send-emails', 'GET', '154.80.125.139', '[]', '2025-03-09 15:08:01', '2025-03-09 15:08:01'),
(11381, 2, 'admin/auth/menu', 'GET', '154.80.125.139', '[]', '2025-03-09 15:08:07', '2025-03-09 15:08:07'),
(11382, 2, 'admin/auth/users', 'GET', '154.80.125.139', '[]', '2025-03-09 15:08:14', '2025-03-09 15:08:14'),
(11383, 2, 'admin/auth/roles', 'GET', '154.80.125.139', '[]', '2025-03-09 15:08:19', '2025-03-09 15:08:19'),
(11384, 2, 'admin/app-settings', 'GET', '154.80.125.139', '[]', '2025-03-09 15:08:23', '2025-03-09 15:08:23'),
(11385, 2, 'admin/frames', 'GET', '154.80.125.139', '[]', '2025-03-09 15:08:26', '2025-03-09 15:08:26'),
(11386, 2, 'admin/transaction-histories', 'GET', '154.80.125.139', '[]', '2025-03-09 15:08:46', '2025-03-09 15:08:46'),
(11387, 2, 'admin/orders', 'GET', '154.80.125.139', '[]', '2025-03-09 15:09:00', '2025-03-09 15:09:00'),
(11388, 2, 'admin/cloudstorages', 'GET', '154.80.125.139', '[]', '2025-03-09 15:14:50', '2025-03-09 15:14:50'),
(11389, 2, 'admin/orders', 'GET', '154.80.125.139', '[]', '2025-03-09 15:15:10', '2025-03-09 15:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `http_method` varchar(255) DEFAULT NULL,
  `http_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
(1, 'All permission', '*', '', '*', NULL, NULL),
(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, '2024-11-29 12:12:06'),
(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL),
(6, 'Admin helpers', 'ext.helpers', '', '/helpers/*', '2024-09-30 05:46:43', '2024-09-30 05:46:43'),
(7, 'Media manager', 'ext.media-manager', '', '/media*', '2024-09-30 06:13:59', '2024-09-30 06:13:59'),
(8, 'home', '/', 'GET', '/app-users', '2024-11-29 12:08:34', '2024-11-29 12:08:57'),
(10, 'App Users', 'app-users', '', '/app-users', '2024-12-10 16:45:28', '2024-12-10 16:45:38'),
(14, 'Cloud Storage', 'cloudstorages', '', '/cloudstorages', '2024-12-16 02:15:03', '2024-12-16 02:15:03'),
(15, 'Subscriptions', 'subscriptions-settings', '', '/subscriptions-settings', '2024-12-16 02:15:36', '2024-12-16 02:15:36'),
(16, 'Notifications', 'notifies', '', '/notifies', '2024-12-16 02:16:08', '2024-12-16 02:16:08'),
(17, 'Orders', 'orders', '', '/orders', '2024-12-16 02:16:31', '2024-12-16 02:16:31'),
(18, 'Transaction History', 'transaction-histories', '', '/transaction-histories', '2024-12-16 02:17:38', '2024-12-16 02:17:38'),
(19, 'Contact US', 'contactus', '', '/contactus', '2024-12-16 02:18:08', '2024-12-16 02:18:08'),
(20, 'User Media Files', 'media', '', '/media', '2024-12-16 02:19:20', '2024-12-16 02:19:20'),
(21, 'App Settings', 'app-settings', '', '/app-settings', '2024-12-16 02:20:02', '2024-12-16 02:20:02'),
(22, 'Frames', 'frames', '', '/frames', '2024-12-16 02:20:37', '2024-12-16 02:20:37'),
(23, 'Sending Emails', 'send-emails', '', '/send-emails', '2024-12-16 02:21:05', '2024-12-16 02:21:05'),
(24, 'Menu', 'auth/menu', '', '/auth/menu', '2024-12-16 02:22:03', '2024-12-16 02:22:03'),
(25, 'Users By Admin', 'auth/users', '', '/auth/users', '2024-12-16 02:22:39', '2024-12-16 14:45:11'),
(26, 'By Admin Roles', 'auth/roles', '', '/auth/roles', '2024-12-16 02:23:19', '2024-12-16 02:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2024-09-30 05:46:13', '2024-09-30 05:46:13'),
(2, 'editor', 'editor', '2024-10-18 17:08:23', '2024-10-18 17:08:23'),
(3, 'Only App Users', 'users', '2024-12-10 16:46:33', '2024-12-10 16:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_permissions`
--

CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_permissions`
--

INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 3, NULL, NULL),
(2, 4, NULL, NULL),
(2, 5, NULL, NULL),
(2, 7, NULL, NULL),
(1, 1, NULL, NULL),
(2, 3, NULL, NULL),
(2, 4, NULL, NULL),
(2, 5, NULL, NULL),
(2, 7, NULL, NULL),
(3, 10, NULL, NULL),
(3, 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_users`
--

CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_users`
--

INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(190) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `subscription` varchar(500) NOT NULL DEFAULT '',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `subscription`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dev', '$2y$12$kubQmshzMV48ybp1csZg5.TZW33oBki59eKrROVKWw1zaWIDxHk9S', 'dev', 'images/alcohol.png', '', NULL, '2024-09-30 05:46:13', '2024-12-10 11:39:08', NULL),
(2, 'admin', '$2y$12$B5ITlPflFIBjrpLYXkKhvOMN.i85LLenVE3ltmzlq/jtVGshb.idW', 'admin', 'images/lion.png', '', 'qusioUURCupB6Cy12n4iFZbf03bMD36WHLy8dNw1cuh9KhDB7BsikH6Tfzuj', '2024-10-18 17:06:22', '2024-12-10 13:21:00', NULL),
(3, 'demo', '$2y$12$w4KXbmknxRNSnuXdcFS0K.bwLxYpGfC/wqBLD4S6TJq.8fXvrUKfG', 'demo', 'images/bikevanlogo.jpeg', '', NULL, '2024-12-10 16:47:21', '2024-12-10 16:47:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_permissions`
--

CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_user_permissions`
--

INSERT INTO `admin_user_permissions` (`user_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(2, 4, NULL, NULL),
(2, 3, NULL, NULL),
(2, 4, NULL, NULL),
(2, 3, NULL, NULL),
(2, 1, NULL, NULL),
(1, 1, NULL, NULL),
(2, 6, NULL, NULL),
(2, 5, NULL, NULL),
(2, 8, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(3, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appSettings`
--

CREATE TABLE `appSettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `appName` varchar(255) NOT NULL DEFAULT 'sahredapp',
  `appLogo` varchar(255) NOT NULL DEFAULT 'https://cdn.vectorstock.com/i/1000v/42/96/gold-crown-laurel-wreath-winner-frame-isolated-vector-19624296.jpg',
  `shareEmailToUsers` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT 'admin@gmail.com',
  `showEmail` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appSettings`
--

INSERT INTO `appSettings` (`id`, `appName`, `appLogo`, `shareEmailToUsers`, `email`, `showEmail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'S4G', 'images/logo-33.png', '1', 'admin@gmail.com', 0, '2024-11-29 12:39:55', '2025-02-22 17:51:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appUsers`
--

CREATE TABLE `appUsers` (
  `id` int(10) UNSIGNED NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(255) DEFAULT 'images/profile.png',
  `name` varchar(255) DEFAULT ' ',
  `email` varchar(255) NOT NULL DEFAULT ' ',
  `password` text DEFAULT '\'1234\'',
  `phone` varchar(255) DEFAULT ' ',
  `subscription` int(255) DEFAULT 0,
  `totalStorage` varchar(255) DEFAULT '20' COMMENT 'GB',
  `remaingStorage` varchar(255) DEFAULT '10' COMMENT 'GB',
  `address` varchar(2000) DEFAULT '  ',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appUsers`
--

INSERT INTO `appUsers` (`id`, `isActive`, `img`, `name`, `email`, `password`, `phone`, `subscription`, `totalStorage`, `remaingStorage`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(32, 1, 'images/profile.png', 'clients jobs', 'clienstjobs@gmail.com', '$2y$12$UqOoXXZtmu/dMA72Hb.a.uZPUinHqtU1.FmQy5yzCLgpXVZfedo3S', '0301', 0, '20', '10', 'usa', '2025-01-25 09:32:35', '2025-01-25 09:32:35', NULL),
(33, 1, 'images/profile.png', 'Mohammad Umair', 'mohammadumaiiir@gmail.com', '$2y$12$rBiCMAZBBNvnO8v29qxkou0guOwaqKM70hzkGK6AK/5XzfmUR07cG', '', 0, '20', '10', '', '2025-02-01 07:45:30', '2025-02-01 07:45:30', NULL),
(34, 1, 'images/profile.png', 'Mohammad Umair', 'Mohammad0989umaiiir@gmail.com', '$2y$12$/S1CgDLQDcqYDvvrOwu13.DcjFgENAKXRuhGFrC16cZSzAK6j7X3C', '03204143801', 0, '20', '10', 'house#121C shadab colony', '2025-02-01 07:40:54', '2025-02-01 07:40:54', NULL),
(35, 1, 'images/profile.png', 'JR', 'JRPhi50@mac.com', '$2y$12$gubGD9WAd521FPrsQSNY7ubbqjeENGEGSnxoOIuMFb1OeCNteGIIG', '+15098799699', 0, '20', '10', '111 hogan', '2025-02-18 00:19:36', '2025-02-18 00:19:36', NULL),
(38, 1, 'images/profile.png', 'SteveJobs', 'somewhatbest@gmail.com', '$2y$12$9.Avet3UyXOdip3K82UHSOfuiT5oy5bX7cnf4.4Hd74w1qzuJ7gRu', '03012345678', 0, '20', '10', 'abc, CD, Efg', '2025-02-25 07:45:53', '2025-02-25 07:45:53', NULL),
(39, 1, 'images/profile.png', 'Abdul Basit Bhatti', 'basitbhattee@gmail.com', '$2y$12$R7j1QW3pNdueA9zAAzWG2Ok2EvKJUhBWvOqBs8YNpASQj0PBfZTfq', '+9231234567', 0, '20', '10', 'Address', '2025-03-02 08:06:24', '2025-03-02 08:06:24', NULL),
(40, 1, 'images/profile.png', 'yuy', 'itsbasitbhatti@gmail.com', '$2y$12$6KCCLklRblFsILW3jrFACO9W6vB021SBHuLaMW91jgeqCaLnH4ggm', '+9231234567', 0, '20', '10', 'Address', '2025-03-02 07:46:30', '2025-03-02 07:46:30', NULL),
(41, 1, 'images/profile.png', 'Abdul Basit Bhatti', 'itsbasitbhattii@gmail.com', '$2y$12$QgFiuPi41t/GLMnzu/9ixeBxRaA5m6jdQZlSPere8LABOAjUAp8AO', '+9231234567', 0, '20', '10', 'Address', '2025-03-03 05:26:19', '2025-03-03 05:26:19', NULL),
(42, 1, 'images/profile.png', 'Abdul Basit Bhatti', 'basitbhatteee@gmail.com', '$2y$12$vdTuqS29h/Hy2F31t2GkVOjGisRCwjCqIspH8UL.ITcGnR/S3EJce', '+9231234567', 0, '20', '10', 'Address', '2025-03-03 05:30:48', '2025-03-03 05:30:48', NULL),
(43, 1, 'images/profile.png', 'Abdul Basit Bhatti', 'itsbasitbhattti@gmail.com', '$2y$12$jzXcs0l4/GaD1bjQcRy3l.na0YWokJkAa5kaqgAXNPKJg.1In5G06', '+9231234567', 0, '20', '10', 'Address', '2025-03-03 05:59:40', '2025-03-03 05:59:40', NULL),
(44, 1, 'images/profile.png', 'Abdul Basit Bhatti', 'itsbasitbbhattti@gmail.com', '$2y$12$udirG3cDsWDVzP321DsuBu3XXu82WpZHjjL0pmLw8bgwWFJDTXD5C', '+9231234567', 0, '20', '10', 'Address', '2025-03-03 06:21:01', '2025-03-03 06:21:01', NULL),
(45, 1, 'images/profile.png', 'Mohammad Umair', 'mohammadumai5iir@gmail.com', '$2y$12$/Rx2Ofg.v/irFSZh3f.wPepF.G/pxnSEScIHhICG/O/dWmZR5bNWS', '+9231234567', 0, '20', '10', 'Address', '2025-03-03 07:41:33', '2025-03-03 07:41:33', NULL),
(46, 1, 'images/profile.png', 'Mohammad Umair', 'mehta@gmail.com', '$2y$12$5uGs0GufqfIYGl6/z.AAhuxI5hKbBgNDaPmZtEL6zzZYEAsTzP8hK', '+9231234567', 0, '20', '10', 'Address', '2025-03-03 07:42:16', '2025-03-03 07:42:16', NULL),
(47, 1, 'images/profile.png', 'mohammadumai5iir@gmail.com', 'maliiumair06@gmail.com', '$2y$12$76PM1MX1rjDIEBwlohqPp.yuzNrr4aQd.PEBDuE7AFIDA4Uou4MlW', '+9231234567', 0, '20', '10', 'Address', '2025-03-03 13:01:21', '2025-03-03 13:01:21', NULL),
(48, 1, 'images/profile.png', 'Mohammad Umair', 'Mohammadasumaiiir@gmail.com', '$2y$12$p/rJRitkccM33ntVrxvXGucV//I66PVTGE2Vue36uSGfvs1VHywvm', '+9231234567', 0, '20', '10', 'Address', '2025-03-07 15:58:20', '2025-03-07 15:58:20', NULL),
(49, 1, 'images/profile.png', '563', '6malik32@gmail.com', '$2y$12$./UdWUxgALTWPq5ymMONkO.nuT8llehOGYjBvXp4733JjPeMjG1HS', '', 0, '20', '10', 'abc', '2025-03-07 16:14:17', '2025-03-07 16:14:17', NULL),
(50, 1, 'images/profile.png', 'Umair', '7malik@gmail.com', '$2y$12$oau8JCWI1RG4NeWJlpJux.jBi3dqaX68J0sUQG0iIhANvrLGjhOCu', '', 0, '20', '10', '', '2025-03-08 14:11:35', '2025-03-08 14:11:35', NULL),
(51, 1, 'images/profile.png', 'Umair', '67malik@gmail.com', '$2y$12$z3EDo8mSsHTVI6rX/tbj5uGvObrkMwcsZ187jrUKR2x9Ob26n.jhK', '', 0, '20', '10', '', '2025-03-08 14:12:38', '2025-03-08 14:12:38', NULL),
(52, 1, 'images/profile.png', 'umairChinta', '03113@gmail.com', '$2y$12$e.yNZXaHvuctrS7VKjn0SuT1cJQL7nk7pC/xWlRlqkAZJcTAMT/2q', '', 0, '20', '10', '', '2025-03-08 21:51:07', '2025-03-08 21:51:07', NULL),
(53, 1, 'images/profile.png', 'umairChinta', '036113@gmail.com', '$2y$12$pAT4M4o8b1BkJ7Llz6.8luVgE3lx1BPmSWlbTMMDUPq4Jmw8kc7um', '', 0, '20', '10', '', '2025-03-08 21:56:15', '2025-03-08 21:56:15', NULL),
(54, 1, 'images/profile.png', 'umairChinta', '0361613@gmail.com', '$2y$12$V7kGBC00w7UiYflhE.M6M.d4QyyhUADdp.WJuNUhJZgWMIJkm.hRu', '', 0, '20', '10', '', '2025-03-08 21:58:24', '2025-03-08 21:58:24', NULL),
(55, 1, 'images/profile.png', 'umairChinta', '03461613@gmail.com', '$2y$12$npl9c.QP2fuLKMc/ADYWXOvNppwAFb4dzc2FYJ8DwKbJlKop0ANei', '', 0, '20', '10', '', '2025-03-08 22:02:23', '2025-03-08 22:02:23', NULL),
(56, 1, 'images/profile.png', 'umairChinta', '036163313@gmail.com', '$2y$12$/5DklYphZwaJ44UgXKfNhOgGPo2D.863AS..KlQNP4zGhaa2MkHQi', '', 0, '20', '10', '', '2025-03-08 22:06:30', '2025-03-08 22:06:30', NULL),
(57, 1, 'images/profile.png', 'umairChinta', '0361636313@gmail.com', '$2y$12$8.p4V4onBpOxPecR6.0qvOQoHT4Tf8b9n/YHiUfXA9VT4Xa7BctBK', '', 0, '20', '10', '', '2025-03-08 22:15:49', '2025-03-08 22:15:49', NULL),
(58, 1, 'images/profile.png', '563', '69malik32@gmail.com', '$2y$12$XsVDc5FkRDxezQPCzC44v.QQAXN07UcQEMT73KEouV.gKUiIIUy9e', '', 0, '20', '10', 'abc', '2025-03-08 22:42:15', '2025-03-08 22:42:15', NULL),
(59, 1, 'images/profile.png', 'umairChinta', 'baza@gmail.com', '$2y$12$p/MVuyDnP49J1nYMFSqlO.sHS3z7XemAZWDP9ZDr4wbrGzHGUbtCW', '', 0, '20', '10', '', '2025-03-08 23:20:38', '2025-03-08 23:20:38', NULL),
(60, 1, 'images/profile.png', 'Umair', 'Malikg1@gmail.com', '$2y$12$H/wuWjlAh0CZQNVaL1Hf6Oe0rKpusCa7zwx.jiTfj2ebpkqv6XTSq', '', 0, '20', '10', '', '2025-03-09 12:39:02', '2025-03-09 12:39:02', NULL),
(61, 1, 'images/profile.png', 'See', 'Skjshk@gmail.com', '$2y$12$7.TbLSVJEbN5h.WCUfnVyuJjtNX4Pl5oCY04M761eSX.y9AzjjpOK', '', 0, '20', '10', '', '2025-03-09 14:54:24', '2025-03-09 14:54:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cloudstorage`
--

CREATE TABLE `cloudstorage` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` varchar(255) NOT NULL DEFAULT '0' COMMENT 'user id',
  `subscription` int(111) DEFAULT 1,
  `folderId` varchar(255) NOT NULL DEFAULT 'abc' COMMENT 'generated',
  `folderName` varchar(255) NOT NULL DEFAULT ' ',
  `totalsize` int(111) NOT NULL DEFAULT 1 COMMENT 'in MB Size',
  `usedsize` int(255) NOT NULL DEFAULT 0 COMMENT 'in MB Size',
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `shared` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cloudstorage`
--

INSERT INTO `cloudstorage` (`id`, `uid`, `subscription`, `folderId`, `folderName`, `totalsize`, `usedsize`, `items`, `shared`, `created_at`, `updated_at`, `deleted_at`) VALUES
(39, '32', 2, 'j5oIPbhw', 'event1', 102400, 87, '[\"files\\/1737815757.jpg\",\"files\\/1737818929.jpg\",\"files\\/1737826886.jpg\",\"files\\/1737829387.jpg\",\"files\\/1737821934.jpg\",\"files\\/1737822696.jpg\",\"files\\/1737823493.jpg\",\"files\\/1737830464.jpg\",\"files\\/1737825171.jpg\",\"files\\/1737827576.jpg\",\"files\\/1737830513.jpg\",\"files\\/1737827296.jpg\",\"files\\/1737825715.jpg\",\"files\\/1737829061.jpg\",\"files\\/1737826493.jpg\",\"files\\/1737829861.jpg\",\"files\\/1737820867.jpg\",\"files\\/1737826901.jpg\",\"files\\/1737825308.jpg\",\"files\\/1737829407.jpg\",\"files\\/1737827277.jpg\",\"files\\/1737825358.jpg\",\"files\\/1737830624.jpg\",\"files\\/1737825683.jpg\",\"files\\/1737826567.jpg\",\"files\\/1737823784.jpg\",\"files\\/1737829869.jpg\",\"files\\/1737828810.jpg\",\"files\\/1737827955.jpg\",\"files\\/1737824531.jpg\",\"files\\/1737824133.jpg\",\"files\\/1737821562.jpg\",\"files\\/1737821690.jpg\",\"files\\/1737828202.jpg\",\"files\\/1737827917.jpg\",\"files\\/1737826260.jpg\",\"files\\/1737822316.jpg\",\"files\\/1737821089.jpg\",\"files\\/1737829478.jpg\",\"files\\/1737826083.jpg\",\"files\\/1737823523.jpg\",\"files\\/1737824707.jpg\",\"files\\/1737823986.jpg\",\"files\\/1737830955.jpg\",\"files\\/1737822897.jpg\",\"files\\/1737825426.jpg\",\"files\\/1737822199.jpg\",\"files\\/1737826357.jpg\",\"files\\/1737828620.jpg\",\"files\\/1737825426.jpg\",\"files\\/1737827741.jpg\",\"files\\/1737828803.jpg\",\"files\\/1737826761.jpg\",\"files\\/1737826717.jpg\",\"files\\/1737822589.jpg\",\"files\\/1737827631.jpg\",\"files\\/1737828565.jpg\",\"files\\/1737827525.jpg\",\"files\\/1737822719.jpg\",\"files\\/1737823124.jpg\",\"files\\/1737830305.jpg\",\"files\\/1737828644.jpg\",\"files\\/1737823202.jpg\",\"files\\/1737828659.jpg\",\"files\\/1737829004.jpg\",\"files\\/1737827320.jpg\",\"files\\/1737822996.jpg\",\"files\\/1737826117.jpg\",\"files\\/1737827886.jpg\",\"files\\/1737829073.jpg\",\"files\\/1737830600.jpg\",\"files\\/1737822004.jpg\",\"files\\/1737829717.jpg\",\"files\\/1737827466.jpg\",\"files\\/1737822448.jpg\",\"files\\/1737825898.jpg\",\"files\\/1737830348.jpg\",\"files\\/1737828917.jpg\",\"files\\/1737823098.jpg\",\"files\\/1737824166.jpg\",\"files\\/1737823040.jpg\",\"files\\/1737830069.jpg\",\"files\\/1737825278.jpg\",\"files\\/1737822801.jpg\",\"files\\/1737828224.jpg\",\"files\\/1737822567.jpg\",\"files\\/1737828196.jpg\"]', '[\"1\",\"10\",\"2\",\"31\"]', '2025-01-25 12:46:17', '2025-01-25 22:42:54', NULL),
(40, '32', 3, '6tyxNWSK', 'night club', 307200, 17, '[\"files\\/1737819708.jpg\",\"files\\/1737817467.jpg\",\"files\\/1737823214.jpg\",\"files\\/1737821573.jpg\",\"files\\/1737824041.jpg\",\"files\\/1737818911.jpg\",\"files\\/1737823233.jpg\",\"files\\/1737827796.jpg\",\"files\\/1737818418.jpg\",\"files\\/1737820951.jpg\",\"files\\/1737823925.jpg\",\"files\\/1737823131.jpg\",\"files\\/1737820585.jpg\",\"files\\/1737822265.jpg\",\"files\\/1737827725.jpg\",\"files\\/1737821009.jpg\",\"files\\/1737825965.jpg\"]', '[\"31\"]', '2025-01-25 12:48:22', '2025-01-25 22:01:00', '2025-01-25 22:01:00'),
(41, '33', 1, 'Njj4AaXy', 'Asad\'s wedding', 40960, 3, '[\"files\\/1737891881.jpg\",\"files\\/1737892798.jpg\",\"files\\/1738404004.jpg\"]', '[]', '2025-01-26 11:03:07', '2025-02-01 07:56:14', NULL),
(42, '32', 1, 'He3DMg2H', 'events', 40960, 0, '[]', '[]', '2025-02-22 18:38:17', '2025-02-22 18:38:17', NULL),
(43, '32', 2, 'IxnPxg7I', 'night club', 102400, 0, '[]', '[]', '2025-02-22 18:46:41', '2025-02-22 18:46:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactUs`
--

CREATE TABLE `contactUs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT 'username' COMMENT 'username',
  `email` varchar(255) DEFAULT 'user@gmail.com' COMMENT 'useremail',
  `message` varchar(255) DEFAULT 'Empty' COMMENT 'usermsg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactUs`
--

INSERT INTO `contactUs` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(17, 'Mohammad Umair', 'mohammadumaiiir@gmail.com', 'Hello Aood', '2025-02-01 07:54:57', '2025-02-01 07:54:57');

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
-- Table structure for table `frames`
--

CREATE TABLE `frames` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT '10',
  `uids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '[]' COMMENT 'purchased' CHECK (json_valid(`uids`)),
  `show` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frames`
--

INSERT INTO `frames` (`id`, `name`, `image`, `price`, `uids`, `show`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '10 Inch Video Frame', 'images/Frameo 10.1.png', '69', '[32,33]', 1, '2024-12-11 12:08:19', '2025-01-26 11:04:36', NULL),
(2, '15.6 Inch Video Frame', 'images/Frameo 15.6.png', '139', '[]', 1, '2024-12-16 19:44:59', '2025-01-25 14:09:36', NULL),
(3, '18.5 Inch Video Frame', 'images/Frameo 18.5.png', '199', '[32]', 1, '2024-12-18 23:39:03', '2025-01-25 14:16:28', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2016_01_04_173148_create_admin_tables', 2),
(6, '2024_09_30_104856_create_catg_table', 3),
(7, '2024_09_30_105235_create_categories_table', 4),
(8, '2024_09_30_105445_create_productcatg_table', 5),
(9, '2024_09_30_110242_create_categories_table', 6),
(10, '2024_09_30_123738_create_products_table', 7),
(11, '2024_09_30_143530_create_products_table', 8),
(12, '2024_09_30_154701_create_products_table', 9),
(13, '2024_09_30_160329_create_contactUs_table', 10),
(14, '2024_09_30_162455_create_settings_table', 11),
(15, '2024_09_30_163533_create_bannerImagesOnly_table', 12),
(16, '2024_09_30_165122_create_PromotionBanner_table', 13),
(17, '2024_09_30_165532_create_bannerDesign_table', 14),
(18, '2024_10_02_163251_create_topSlideText_table', 15),
(19, '2024_10_02_171013_create_toastMessage_table', 16),
(24, '2024_10_02_230150_create_designCodeList_table', 17),
(25, '2024_10_04_152746_create_ColorsVariations_table', 18),
(26, '2024_10_04_165057_create_sizeVariations_table', 19),
(27, '2024_10_04_182745_create_PagesDesign_table', 20),
(28, '2024_10_04_191723_create_ContactUsMessages_table', 21),
(29, '2024_10_04_193700_create_Orders_table', 22),
(30, '2024_10_06_112959_create_reviewsProducts_table', 23),
(31, '2024_10_09_144823_create_rentalUsers_table', 24),
(32, '2024_10_09_145347_create_rentalUsers_table', 25),
(33, '2024_10_09_145446_create_rentalUsers_table', 26),
(34, '2024_10_09_145644_create_rentalUsers_table', 27),
(35, '2024_10_15_103851_create_UsersFavorite_table', 28),
(36, '2024_10_15_114018_create_Blogs_table', 29),
(37, '2024_10_17_181725_create_Msgs_table', 30),
(38, '2024_10_18_203516_create_usersNotifications_table', 31),
(39, '2024_10_18_213713_create_Notifications_table', 32),
(40, '2024_10_22_230307_create_FAQ_table', 33),
(41, '2024_10_22_231953_create_HowItsWork_table', 34),
(42, '2024_10_22_232524_create_StepCards_table', 35),
(43, '2024_10_23_000914_create_SEO_table', 36),
(44, '2024_11_26_095004_create_contactUs_table', 37),
(45, '2024_11_26_134400_create_downloadedDoc_table', 38),
(46, '2024_11_26_140813_create_vehicleHistoryReports_table', 39),
(47, '2024_11_27_034534_create_additionalHistory_table', 40),
(48, '2024_11_27_084718_create_titleHistory_table', 41),
(49, '2024_11_27_114012_create_ownershipHistory_table', 42),
(50, '2024_11_27_151336_create_ownersList_table', 43),
(51, '2024_11_27_165016_create_glossary_table', 44),
(52, '2024_11_27_170655_create_reportSetting_table', 45),
(53, '2024_11_28_213030_create_appSettings_table', 46),
(54, '2024_11_28_220009_create_subscriptionsSetting_table', 47),
(55, '2024_11_28_223819_create_notify_table', 48),
(56, '2024_11_29_061546_create_appUsers_table', 49),
(57, '2024_11_29_095833_create_cloudstorage_table', 50),
(58, '2024_11_29_183024_create_orders_table', 51),
(59, '2024_12_10_135807_create_TransactionHistory_table', 52),
(60, '2024_12_11_060024_create_SendEmails_table', 53),
(61, '2024_12_11_170200_create_frames_table', 54),
(62, '2025_01_23_174802_create_TransactionHistory_table', 55);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(111) UNSIGNED NOT NULL,
  `uid` varchar(255) NOT NULL DEFAULT '00',
  `title` varchar(255) NOT NULL DEFAULT ' ',
  `desc` varchar(2000) NOT NULL DEFAULT ' ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `uid`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(53, '32', 'Pyment Created', '️💸Amount :139 Transaction id:pi_3Ql9SWDPiaFCF9z80tl0vDAK', '2025-01-25 13:32:11', '2025-01-25 13:32:11'),
(54, '32', 'Pyment Created', '️💸Amount :139 Transaction id:pi_3Ql9YQDPiaFCF9z82cu9mPOh', '2025-01-25 13:38:10', '2025-01-25 13:38:10'),
(55, '32', 'Pyment Created', '️💸Amount :139 Transaction id:pi_3Ql9bvDPiaFCF9z80MlHwtt8', '2025-01-25 13:41:58', '2025-01-25 13:41:58'),
(56, '32', 'Frame Purchased', '🖼️ Frame Id:3', '2025-01-25 14:02:44', '2025-01-25 14:02:44'),
(57, '32', 'Frame Purchased', '🖼️ Frame Id:2', '2025-01-25 14:09:36', '2025-01-25 14:09:36'),
(58, '32', 'Pyment Created', '️💸Amount :139 Transaction id:pi_3QlA2EDPiaFCF9z81REcPw3V', '2025-01-25 14:09:39', '2025-01-25 14:09:39'),
(59, '32', 'Frame Purchased', '🖼️ Frame Id:1', '2025-01-25 14:14:01', '2025-01-25 14:14:01'),
(60, '32', 'Pyment Created', '️💸Amount :69 Transaction id:pi_3QlA75DPiaFCF9z80MyYyXvb', '2025-01-25 14:14:09', '2025-01-25 14:14:09'),
(61, '32', 'Frame Purchased', '🖼️ Frame Id:3', '2025-01-25 14:16:28', '2025-01-25 14:16:28'),
(62, '32', 'Pyment Created', '️💸Amount :199 Transaction id:pi_3QlA8lDPiaFCF9z82xIo0y5Z', '2025-01-25 14:16:31', '2025-01-25 14:16:31'),
(63, '32', 'Order Created', '🛍️ Order id:27', '2025-01-25 17:39:05', '2025-01-25 17:39:05'),
(64, '32', 'Order Created', '🛍️ Order id:28', '2025-01-25 18:03:27', '2025-01-25 18:03:27'),
(65, '32', 'Order Created', '🛍️ Order id:29', '2025-01-25 18:08:08', '2025-01-25 18:08:08'),
(66, '32', 'Order Created', '🛍️ Order id:30', '2025-01-25 19:05:04', '2025-01-25 19:05:04'),
(67, '32', 'Order Created', '🛍️ Order id:31', '2025-01-25 19:08:36', '2025-01-25 19:08:36'),
(68, '32', 'Order Created', '🛍️ Order id:32', '2025-01-25 19:16:37', '2025-01-25 19:16:37'),
(69, '32', 'Order Created', '🛍️ Order id:33', '2025-01-25 19:19:46', '2025-01-25 19:19:46'),
(70, '32', 'New Participents', '🤝 New Participents with event1', '2025-01-25 19:58:37', '2025-01-25 19:58:37'),
(71, '32', 'New Participents', '🤝 New Participents with night club', '2025-01-25 21:50:14', '2025-01-25 21:50:14'),
(72, '31', 'Folder deleted', '🚮 night club: Folder is deleted successfully', '2025-01-25 22:01:00', '2025-01-25 22:01:00'),
(73, '32', 'New Participents', '🤝 New Participents with event1', '2025-01-25 22:05:41', '2025-01-25 22:05:41'),
(74, '33', 'Account Created', '🔑 Your Account is Created successfully', '2025-01-26 11:02:13', '2025-01-26 11:02:13'),
(75, '33', 'Pyment Created', '️💸Amount :49 Transaction id:pi_3QlTc7DPiaFCF9z811NBgGZY', '2025-01-26 11:03:06', '2025-01-26 11:03:06'),
(76, '33', 'Folder Created', '📂 Asad\'s wedding: Folder Created successfully', '2025-01-26 11:03:07', '2025-01-26 11:03:07'),
(77, '33', 'Frame Purchased', '🖼️ Frame Id:1', '2025-01-26 11:04:36', '2025-01-26 11:04:36'),
(78, '33', 'Pyment Created', '️💸Amount :69 Transaction id:pi_3QlTdUDPiaFCF9z801xuuD3I', '2025-01-26 11:04:38', '2025-01-26 11:04:38'),
(79, '33', 'Order Created', '🛍️ Order id:34', '2025-01-26 11:05:32', '2025-01-26 11:05:32'),
(80, '33', 'New Participents', '🤝 New Participents with Asad\'s wedding', '2025-01-26 14:05:12', '2025-01-26 14:05:12'),
(81, '33', 'Password Updated', '🔑 New Password Created successfully', '2025-01-26 14:12:05', '2025-01-26 14:12:05'),
(82, '34', 'Account Created', '🔑 Your Account is Created successfully', '2025-02-01 07:40:54', '2025-02-01 07:40:54'),
(83, '33', 'Password Updated', '🔑 New Password Created successfully', '2025-02-01 07:45:30', '2025-02-01 07:45:30'),
(84, '33', 'Order Created', '🛍️ Order id:35', '2025-02-01 07:52:57', '2025-02-01 07:52:57'),
(85, '35', 'Account Created', '🔑 Your Account is Created successfully', '2025-02-18 00:19:36', '2025-02-18 00:19:36'),
(86, '36', 'Account Created', '🔑 Your Account is Created successfully', '2025-02-22 17:38:37', '2025-02-22 17:38:37'),
(87, '37', 'Account Created', '🔑 Your Account is Created successfully', '2025-02-22 17:38:37', '2025-02-22 17:38:37'),
(88, '32', 'Pyment Created', '️💸Amount :49 Transaction id:pi_3QvNa7DPiaFCF9z810NEdhOm', '2025-02-22 18:38:16', '2025-02-22 18:38:16'),
(89, '32', 'Folder Created', '📂 events: Folder Created successfully', '2025-02-22 18:38:17', '2025-02-22 18:38:17'),
(90, '32', 'Pyment Created', '️💸Amount :69 Transaction id:pi_3QvNiDDPiaFCF9z82Xf7Sxti', '2025-02-22 18:46:40', '2025-02-22 18:46:40'),
(91, '32', 'Folder Created', '📂 night club: Folder Created successfully', '2025-02-22 18:46:41', '2025-02-22 18:46:41'),
(92, '38', 'Account Created', '🔑 Your Account is Created successfully', '2025-02-25 07:43:13', '2025-02-25 07:43:13'),
(93, '38', 'Password Updated', '🔑 New Password Created successfully', '2025-02-25 07:45:40', '2025-02-25 07:45:40'),
(94, '38', 'Password Updated', '🔑 New Password Created successfully', '2025-02-25 07:45:53', '2025-02-25 07:45:53'),
(95, '39', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-02 07:30:32', '2025-03-02 07:30:32'),
(96, '40', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-02 07:46:30', '2025-03-02 07:46:30'),
(97, '39', 'Password Updated', '🔑 New Password Created successfully', '2025-03-02 08:06:24', '2025-03-02 08:06:24'),
(98, '41', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-03 05:26:19', '2025-03-03 05:26:19'),
(99, '42', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-03 05:30:48', '2025-03-03 05:30:48'),
(100, '43', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-03 05:59:40', '2025-03-03 05:59:40'),
(101, '44', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-03 06:21:01', '2025-03-03 06:21:01'),
(102, '45', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-03 07:41:33', '2025-03-03 07:41:33'),
(103, '46', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-03 07:42:16', '2025-03-03 07:42:16'),
(104, '47', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-03 13:01:21', '2025-03-03 13:01:21'),
(105, '48', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-07 15:58:20', '2025-03-07 15:58:20'),
(106, '49', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-07 16:14:17', '2025-03-07 16:14:17'),
(107, '50', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-07 16:15:57', '2025-03-07 16:15:57'),
(108, '50', 'Password Updated', '🔑 New Password Created successfully', '2025-03-07 16:39:18', '2025-03-07 16:39:18'),
(109, '50', 'Password Updated', '🔑 New Password Created successfully', '2025-03-08 14:11:35', '2025-03-08 14:11:35'),
(110, '51', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 14:12:38', '2025-03-08 14:12:38'),
(111, '52', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 21:51:07', '2025-03-08 21:51:07'),
(112, '53', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 21:56:15', '2025-03-08 21:56:15'),
(113, '54', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 21:58:24', '2025-03-08 21:58:24'),
(114, '55', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 22:02:23', '2025-03-08 22:02:23'),
(115, '56', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 22:06:30', '2025-03-08 22:06:30'),
(116, '57', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 22:15:49', '2025-03-08 22:15:49'),
(117, '58', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 22:42:15', '2025-03-08 22:42:15'),
(118, '59', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-08 23:20:38', '2025-03-08 23:20:38'),
(119, '60', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-09 12:39:02', '2025-03-09 12:39:02'),
(120, '61', 'Account Created', '🔑 Your Account is Created successfully', '2025-03-09 14:54:24', '2025-03-09 14:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` varchar(255) NOT NULL DEFAULT '00',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `slides` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `frames` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `price` varchar(255) NOT NULL DEFAULT '0',
  `isPay` tinyint(1) NOT NULL DEFAULT 0,
  `trId` varchar(255) NOT NULL DEFAULT 'abc',
  `desc` varchar(255) NOT NULL DEFAULT ' ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `status`, `images`, `slides`, `frames`, `price`, `isPay`, `trId`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '17', 'completed', '[\"files\\/sale offer (1).jpg\",\"files\\/bikevanlogo_1.jpeg\",\"files\\/ac.png\",\"files\\/alcohol.png\"]', '[\"files\\/ultrapod.png\"]', '[\"1\",\"2\"]', '20', 1, 'pm_123', 'make amazing', '2024-11-29 14:02:52', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(2, '9', 'progress', '[\"files\\/bikevanlogo_2.jpeg\"]', ' ', '[\"1\"]', '20', 0, 'abc', 'something', '2024-12-11 08:05:46', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(3, '9', 'pending', '[]', '[]', '[]', '100', 1, 'pm_1', 'something', '2024-12-11 08:33:04', '2024-12-11 09:51:18', '2024-12-11 09:51:18'),
(4, '9', 'pending', '[]', '[]', '[]', '100', 1, 'pm_1', 'something', '2024-12-11 08:44:05', '2024-12-11 09:51:18', '2024-12-11 09:51:18'),
(5, '9', 'pending', '[]', '[]', '[]', '100', 1, 'pm_1', 'something', '2024-12-11 08:45:30', '2024-12-11 09:51:18', '2024-12-11 09:51:18'),
(6, '9', 'pending', '[\"images\\/1733928156.png\"]', ' ', ' ', '100', 1, 'pm_1', 'something', '2024-12-11 09:42:36', '2024-12-11 09:51:18', '2024-12-11 09:51:18'),
(7, '9', 'pending', '[\"files\\/1733928328.png\"]', ' ', ' ', '100', 1, 'pm_1', 'something', '2024-12-11 09:45:28', '2024-12-11 09:51:18', '2024-12-11 09:51:18'),
(8, '9', 'pending', '[\"files\\/1733928419.png\"]', ' ', ' ', '100', 1, 'pm_1', 'something', '2024-12-11 09:46:59', '2024-12-11 09:51:18', '2024-12-11 09:51:18'),
(9, '9', 'pending', '[\"files\\/1733928456.png\"]', ' ', ' ', '100', 1, 'pm_1', 'something', '2024-12-11 09:47:36', '2024-12-11 09:51:18', '2024-12-11 09:51:18'),
(10, '9', 'pending', '[\"files\\/1733928739.png\",\"files\\/1733928739.jpeg\",\"files\\/1733928739.png\"]', '[\"files\\/1733928739.png\",\"files\\/1733928739.jpeg\"]', '[\"1\",\"2\"]', '100', 1, 'pm_1', 'something', '2024-12-11 09:52:19', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(11, '9', 'pending', '[\"files\\/1733928868.png\",\"files\\/1733928868.jpeg\",\"files\\/1733928868.png\"]', '[\"files\\/1733928868.png\",\"files\\/1733928868.jpeg\",\"videos\\/1733928868.mp4\"]', '[\"1\"]', '100', 1, 'pm_1', 'something', '2024-12-11 09:54:28', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(12, '9', 'pending', '[\"files\\/1733928968.png\",\"files\\/1733928968.jpeg\",\"files\\/1733928968.png\"]', '[\"files\\/1733928968.png\",\"files\\/1733928968.jpeg\",\"videos\\/1733928968.mp4\"]', '[\"1\"]', '100', 1, 'pm_1', 'something', '2024-12-11 09:56:08', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(13, '9', 'pending', '[]', '[]', '[\"1\"]', '100', 1, 'pm_1', 'something', '2024-12-16 14:32:27', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(14, '14', 'pending', '[\"files\\/Assissi_1.jpeg\",\"files\\/AssissiFoodShop_1.jpeg\",\"files\\/Florence2_1.jpeg\",\"files\\/img_7439_1.png\",\"files\\/Italy Moonlight_1.jpeg\",\"files\\/Janet-John Orvieto_1.jpeg\",\"files\\/John Beer Hoarder_1.jpeg\",\"files\\/John-Carol Orvietto_1.jpeg\",\"files\\/John-no, I\'m good_1.jpeg\",\"files\\/Just the right amount_1.jpeg\",\"files\\/MeatMarketLunch-Assisi_1.jpeg\",\"files\\/Morning in Florence_1.jpeg\",\"files\\/Pontevecchio_1.jpeg\"]', ' ', '[\"2\"]', '100', 0, 'abc', 'Jeff Test Upload', '2024-12-18 23:51:43', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(15, '14', 'progress', '[\"files\\/Assissi_2.jpeg\",\"files\\/AssissiFoodShop_2.jpeg\",\"files\\/Florence2_2.jpeg\",\"files\\/img_7439_2.png\",\"files\\/Italy Moonlight_2.jpeg\",\"files\\/Janet-John Orvieto_2.jpeg\",\"files\\/John Beer Hoarder_2.jpeg\",\"files\\/John-Carol Orvietto_2.jpeg\",\"files\\/John-no, I\'m good_2.jpeg\",\"files\\/Just the right amount_2.jpeg\",\"files\\/MeatMarketLunch-Assisi_2.jpeg\",\"files\\/Morning in Florence_2.jpeg\",\"files\\/Pontevecchio_2.jpeg\"]', ' ', '[\"2\"]', '100', 0, 'abc', 'Jeff Test Upload', '2024-12-18 23:51:48', '2024-12-28 18:19:07', '2024-12-28 18:19:07'),
(16, '14', 'progress', '[\"files\\/Assissi_3.jpeg\",\"files\\/AssissiFoodShop_3.jpeg\",\"files\\/Florence2_3.jpeg\",\"files\\/img_7439_3.png\",\"files\\/Italy Moonlight_3.jpeg\",\"files\\/Janet-John Orvieto_3.jpeg\",\"files\\/John Beer Hoarder_3.jpeg\",\"files\\/John-Carol Orvietto_3.jpeg\",\"files\\/John-no, I\'m good_3.jpeg\",\"files\\/Just the right amount_3.jpeg\",\"files\\/MeatMarketLunch-Assisi_3.jpeg\",\"files\\/Morning in Florence_3.jpeg\",\"files\\/Pontevecchio_3.jpeg\"]', ' ', '[\"2\"]', '100', 0, 'abc', 'Jeff Test Upload', '2024-12-18 23:51:48', '2024-12-28 18:19:15', '2024-12-28 18:19:15'),
(17, '9', 'pending', '[]', '[]', '[\"1\\n2\"]', '0', 0, 'abc', 'something', '2025-01-23 21:42:19', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(18, '9', 'pending', '[]', '[]', '[\"2\"]', '0', 0, 'abc', 'something', '2025-01-23 21:43:03', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(19, '9', 'pending', '[]', '[]', '[\"\'2\',\'4\',\"]', '0', 0, 'abc', 'something', '2025-01-23 21:43:25', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(20, '9', 'pending', '[]', '[]', '[\"1,2\"]', '0', 0, 'abc', 'something', '2025-01-23 21:43:38', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(21, '26', 'pending', '[]', '[]', '[]', '0', 0, 'abc', 'something', '2025-01-24 18:52:27', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(22, '26', 'pending', '[]', '[]', '[]', '0', 0, 'abc', 'something', '2025-01-24 18:52:52', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(23, '26', 'pending', '[]', '[]', '[]', '0', 0, 'abc', 'something', '2025-01-24 18:55:23', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(24, '26', 'pending', '[]', '[]', '[]', '0', 0, 'abc', 'something', '2025-01-24 18:55:45', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(25, '26', 'pending', '[]', '[]', '[]', '0', 0, 'abc', 'something', '2025-01-24 18:58:02', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(26, '26', 'pending', '[\"files\\/1737745228.png\"]', '[\"files\\/1737745228.png\"]', '[]', '0', 0, 'abc', 'something', '2025-01-24 19:00:28', '2025-01-24 19:17:15', '2025-01-24 19:17:15'),
(27, '32', 'pending', '[\"files\\/1737815757.jpg\",\"files\\/1737826886.jpg\"]', '[\"files\\/1737826745.jpg\",\"files\\/1737826745.jpg\"]', '[\"3\"]', '0', 0, 'abc', 'something', '2025-01-25 17:39:05', '2025-01-25 19:20:54', '2025-01-25 19:20:54'),
(28, '32', 'pending', '[\"files\\/1737826886.jpg\",\"files\\/1737822696.jpg\"]', '[\"files\\/1737828207.jpg\",\"files\\/1737828207.jpg\"]', '[\"1\",\"3\"]', '0', 0, 'abc', 'nothing', '2025-01-25 18:03:27', '2025-01-25 19:20:54', '2025-01-25 19:20:54'),
(29, '32', 'pending', '[\"files\\/1737821934.jpg\",\"files\\/1737830464.jpg\"]', '[\"files\\/1737828488.jpg\",\"files\\/1737828488.jpg\"]', '[\"1\",\"3\"]', '0', 0, 'abc', 'need only 15 inches frame', '2025-01-25 18:08:08', '2025-01-25 19:20:54', '2025-01-25 19:20:54'),
(30, '32', 'pending', '[\"files\\/1737824041.jpg\",\"files\\/1737818911.jpg\"]', '[\"files\\/1737831904.jpg\",\"files\\/1737831904.jpg\"]', '[\"1\",\"1\"]', '0', 0, 'abc', 'qw', '2025-01-25 19:05:04', '2025-01-25 19:20:54', '2025-01-25 19:20:54'),
(31, '32', 'pending', '[\"files\\/1737824041.jpg\",\"files\\/1737818911.jpg\",\"files\\/1737827796.jpg\"]', '[\"files\\/1737832116.jpg\",\"files\\/1737832116.jpg\",\"files\\/1737832116.jpg\"]', '[\"1\",\"3\",\"3\"]', '0', 0, 'abc', 'asaa', '2025-01-25 19:08:36', '2025-01-25 19:20:54', '2025-01-25 19:20:54'),
(32, '32', 'completed', '[\"files\\/1737824041.jpg\",\"files\\/1737818911.jpg\",\"files\\/1737827796.jpg\"]', '[\"files\\/1737844958.jpg\",\"files\\/1737842240.jpg\",\"files\\/1737845467.jpg\"]', '[\"1\",\"3\"]', '0', 0, 'abc', 'ass', '2025-01-25 19:16:37', '2025-01-25 19:37:13', NULL),
(33, '32', 'pending', '[\"files\\/1737824041.jpg\",\"files\\/1737818911.jpg\",\"files\\/1737827796.jpg\",\"files\\/1737818418.jpg\"]', '[\"files\\/1737852500.jpg\",\"files\\/1737840736.jpg\",\"files\\/1737851322.jpg\",\"files\\/1737837319.jpg\"]', '[\"1\"]', '0', 0, 'abc', 'n=only 14 inches frames should be attach', '2025-01-25 19:19:46', '2025-01-25 19:44:20', NULL),
(34, '33', 'pending', '[\"files\\/1737891881.jpg\",\"files\\/1737892798.jpg\"]', '[\"files\\/1737902550.jpg\",\"files\\/1737901316.jpg\"]', '[\"1\",\"1\"]', '0', 0, 'abc', 'bbbanssb', '2025-01-26 11:05:32', '2025-01-26 11:05:32', NULL),
(35, '33', 'pending', '[\"files\\/1738404004.jpg\",\"files\\/1737892798.jpg\",\"files\\/1737891881.jpg\"]', '[\"files\\/1738405766.jpg\",\"files\\/1738404281.jpg\",\"files\\/1738398731.jpg\"]', '[\"1\",\"1\",\"1\"]', '0', 0, 'abc', 'My first order', '2025-02-01 07:52:57', '2025-02-01 07:52:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `PagesDesign`
--

CREATE TABLE `PagesDesign` (
  `id` int(10) UNSIGNED NOT NULL,
  `privacyPolicy` longtext DEFAULT ' ' COMMENT 'privacyPolicy',
  `shippingPolicy` longtext DEFAULT ' ' COMMENT 'returnPolicy',
  `returnRefundPolicy` longtext DEFAULT ' ' COMMENT 'refundPolicy',
  `termsCondition` longtext DEFAULT ' ' COMMENT 'termsCondition',
  `contactUs` longtext NOT NULL DEFAULT ' ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `PagesDesign`
--

INSERT INTO `PagesDesign` (`id`, `privacyPolicy`, `shippingPolicy`, `returnRefundPolicy`, `termsCondition`, `contactUs`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"shopify-policy__title page-header__text-wrapper\" style=\"max-width:850px; text-align:center; margin-top:68px; margin-bottom:68px\">\r\n<h1><strong>Privacy Policy</strong></h1>\r\n\r\n<p>Welcome to vistavin.com, provided by&nbsp;<b>Digital Core Tech Limited</b>&nbsp;(&ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;<b>Digital Core Tech Limited</b>&ldquo;).&nbsp;<b>Digital Core Tech Limited</b>, together with its affiliates and subsidiaries, has created this Policy to apply to all users and clients of our website (https://vistavin.com) and the associated products, services, data, information, and materials offered therein (collectively, the &ldquo;Services&rdquo;).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This Privacy Policy (&ldquo;Policy&rdquo;) applies to your use of the Services and is part of and supplements the Vista Vin Terms of Service (the &ldquo;Terms&rdquo;), available here: https://vistavin.com/terms-of-service.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PLEASE CAREFULLY READ THIS POLICY. YOUR USE OF THE SERVICES CONSTITUTES YOUR CONSENT TO THIS POLICY. DO NOT USE THE SERVICES IF YOU ARE UNWILLING OR UNABLE TO CONSENT TO THIS POLICY.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We may revise this Policy at any time and such revision shall be posted here and accessible via this link: https://vistavin.com/privacy-policy. Any revision and/or addition to this Policy shall become effective and binding on you when you continue to use the Services on or after the effective date of such revision and/or addition.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If you are a resident of California, Virginia, Colorado, Connecticut, or Utah, you may be entitled to certain individual rights under the California Consumer Privacy Act of 2018 (as amended by the California Privacy Rights Act of 2020 (&ldquo;CPRA&rdquo;)) (collectively, &ldquo;CCPA&rdquo;), Virginia Consumer Data Protection Act (&ldquo;VCDPA&rdquo;), Colorado Privacy Act (&ldquo;CPA&rdquo;), Connecticut Act Concerning Personal Data Privacy and Online Monitoring (&ldquo;CTDPA&rdquo;), or Utah Consumer Privacy Act (&ldquo;UCPA&rdquo;). Please see the Notice to Certain Residents of Data Subject Rights Section of our Privacy Policy for your rights and how to exercise them for users located in California, Virginia, Colorado, Connecticut, and Utah only.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>1. Information We Collect</h2>\r\n\r\n<p>When you use the Services, we may collect the following categories of personal information about you, which are described in more detail below: (A) personal information we request from you; (B) personal information we automatically collect; and (C) personal information we may receive from third parties. All of the information listed in (A)-(C) above, is detailed below, and hereinafter referred to as &ldquo;Information&rdquo;.</p>\r\n\r\n<h3>A. Information You Provide</h3>\r\n\r\n<p>In using our Services, you may provide us with Information, including, without limitation:</p>\r\n\r\n<ul>\r\n	<li aria-level=\"1\">Individual identifiers such as name, email address, physical billing address, phone number, business name, demographic information you choose to provide such as age or date of birth, a photograph of you when you choose to upload it, or information about your vehicle, including your Vehicle Identification Number (VIN);</li>\r\n	<li aria-level=\"1\">Payment and transaction information such as credit card number, name, CVV code, and&nbsp; date of expiration;</li>\r\n	<li aria-level=\"1\">Communications with us, preferences, and other Information you provide to us such as any messages, opinions, and feedback that you provide to us, your user preferences (such as in receiving updates or marketing information), and other Information that you share with us when you contact us directly (such as for customer support services); and</li>\r\n	<li aria-level=\"1\">Additional Information as otherwise described to you at the point of collection or according to your consent.</li>\r\n</ul>\r\n\r\n<h3>B. Information We May Automatically Collect About You</h3>\r\n\r\n<p>Our Services may automatically collect certain personal Information about you. We use this personal Information to help us design our Services to better suit our users&rsquo; needs. This personal Information may include:</p>\r\n\r\n<ul>\r\n	<li aria-level=\"1\">IP address, which is the number associated with the service through which you access the Internet, like your ISP (Internet service provider);</li>\r\n	<li aria-level=\"1\">Date and time of your visit or use of our Services;</li>\r\n	<li aria-level=\"1\">Domain server from which you are using our Services;</li>\r\n	<li aria-level=\"1\">Type of computer, web browsers, search engine used, operating system, or platform you use;</li>\r\n	<li aria-level=\"1\">Data identifying the web pages you visited prior to and after visiting our website or use of our Services;</li>\r\n	<li aria-level=\"1\">Your movement and activity within the website, which is aggregated with other information;</li>\r\n	<li aria-level=\"1\">Geographic data such as country or region; and</li>\r\n	<li aria-level=\"1\">Mobile device information, including the type of device you use, operating system version, and the device identifier (or &ldquo;UDID&rdquo;).</li>\r\n</ul>\r\n</div>', NULL, '<h1>Refund policy</h1>\r\n\r\n<p>REFUND &amp; CANCELLATION POLICY<br />\r\nThank you for purchasing our information retrieval services. We want to ensure you have a smooth and satisfactory experience with our platform. Here&rsquo;s our policy on refunds and cancellations.</p>\r\n\r\n<p>REFUNDS<br />\r\nWe offer a 48-hour money-back guarantee. If for any reason you are not completely satisfied with our services, you can contact us within 48 hours 2 days of your purchase to request a refund.</p>\r\n\r\n<p>The 48-hour period starts on the day the service is purchased, irrespective of when you start using it.</p>\r\n\r\n<p>To request a refund, please send us an email at support@vistavin.com with the subject &ldquo;Refund Request.&rdquo; In the body of the email, include your full name, the email address used to purchase the service, your order number, and the reason for your refund request.</p>\r\n\r\n<p>After we receive your refund request, our team will review it and process the refund if the request is approved. This can take up to 7 business days, but under normal circumstances should only take 2 business days. The refund will be made via the original payment method used for the purchase.</p>\r\n\r\n<p>Please note that if you have violated any terms of service, such as by filing a chargeback, or if the service has been used inappropriately, you may not be eligible for a refund.</p>\r\n\r\n<p>SUBSCRIPTIONS AND CANCELLATIONS<br />\r\nWe offer various subscription membership packages, and you are free to cancel your subscription at any time. To cancel your subscription, simply log into your account and navigate to the &lsquo;My Account&rsquo; section on your dashboard. Follow the prompts to cancel your subscription.</p>\r\n\r\n<p>No penalty or fee will be charged for cancellations.</p>\r\n\r\n<p>After cancellation, you will continue to have access to the services until the end of your current billing period. Once the subscription period ends, your account will no longer be billed, and access to the subscription services will be revoked.</p>\r\n\r\n<p>You will be responsible for all charges incurred for any services used before the effective cancellation date.</p>\r\n\r\n<p>CHANGES TO THIS POLICY<br />\r\nWe reserve the right to revise our Refund and Cancellation Policy at any time. Changes will not be retroactive. The most current version of the policy will govern our processing of refunds and cancellations and will be available on this page. If you have any questions or concerns regarding our refund and cancellation policy, please reach out to us via our Contact Us page or at support@vistavin.com. We value your business and strive to ensure you are satisfied with our services. Thank you for choosing our information retrieval services.</p>\r\n\r\n<p>&copy; Copyright 2023 Vista Vin, All rights reserved.</p>', '<h1>Terms of service</h1>\r\n\r\n<p>Welcome to vistavin.com, provided to users by&nbsp;DIGITAL CORE TECH LIMITED.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>(&ldquo;we,&rdquo; &ldquo;us,&rdquo; or&nbsp;DIGITAL CORE TECH LIMITED).&nbsp;DIGITAL CORE TECH LIMITED&nbsp;created these Terms of Service (&ldquo;Terms&rdquo;) to govern how we operate and offer, and how you access and use, our website (https://vistavin.com/), and the associated products, Vista Vin services, data, information, content, and materials thereon (collectively, the &ldquo;Services&rdquo;). If you are accepting these Terms of Service on behalf of a legal entity other than yourself as an individual, including a business or a government, you represent and warrant that you have full legal authority to bind such entity to these Terms of Service.</p>\r\n\r\n<p>PLEASE CAREFULLY READ THESE TERMS. YOUR USE OF THE SERVICES CONSTITUTES YOUR ACCEPTANCE OF THESE TERMS. DO NOT USE THE SERVICES IF YOU ARE UNWILLING OR UNABLE TO BE BOUND BY THE TERMS.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By using or visiting our Services, you agree to be bound by the Terms &amp; Conditions, including the Binding Arbitration Clause and Class Action Waiver described in Section 20, and the Privacy Policy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We reserve the right to change, modify, add to, or otherwise alter these Terms of Service at any time. Changes, modifications, additions, or deletions to these Terms of Service shall be effective immediately upon their posting on the Services. You agree to review these Terms of Service periodically to be aware of such revisions. Your use of the Services after we post such changes, modifications, additions, or deletions constitutes your acceptance of such changes, modifications, additions, or deletions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>1. Services</h2>\r\n\r\n<p>Our Services allow users to search our vast database for vehicle information. When performing vehicle searches, users may be able to perform recall lookups, learn a vehicle&rsquo;s fair market value, or purchase vehicle history reports.</p>\r\n\r\n<p>We grant you a personal, limited, nonexclusive license to access and use the Services, for your personal, individual, non-commercial, and non-automated use only. You may not access or use the Services except for these express purposes and as expressly allowed by these Terms of Services.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>2. Registration</h2>\r\n\r\n<p>You will need to create an account with us to use the Services (&ldquo;Account&rdquo;). You must be 18 years of age or older to use the Services and purchase any services. Any sale offers are only intended for individuals eighteen (18) years of age or older. By using the Services or purchasing services, you affirm that you are eighteen (18) years of age or older.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You agree to provide true, current, complete, and accurate information as requested, and to update that information as soon as possible after any information on such registration changes. You are responsible for maintaining the confidentiality of your password and for all of your activities and those of any third party that occurs through your account, whether or not authorized by you. You agree to immediately notify. of any suspected or actual unauthorized use of your account. You agree that we will not under any circumstances be liable for any cost, loss, damages, or expenses arising out of a failure by you to maintain the security of your password.</p>', '<h1>Contact information</h1>\r\n\r\n<p><strong>Contact Biike Van</strong></p>\r\n\r\n<p>If you have any questions or need assistance, feel free to reach out to us. We&rsquo;re here to help!</p>\r\n\r\n<p><strong>Contact Us:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Phone:</strong>&nbsp;+92 301</li>\r\n	<li><strong>Email: bikevan</strong>@gmail.com</li>\r\n	<li><strong>Hours:</strong>&nbsp;09:00 AM - 06:00 PM PKT (Monday to Friday)</li>\r\n	<li><strong>Address:</strong>&nbsp;Lahore</li>\r\n</ul>\r\n\r\n<p><strong>Follow Us:</strong></p>\r\n\r\n<p>Stay connected with us on social media:</p>\r\n\r\n<ul>\r\n	<li><strong>Facebook:</strong>&nbsp;</li>\r\n	<li><strong>Instagram:</strong>&nbsp;</li>\r\n</ul>', '2024-10-04 13:49:31', '2024-11-27 14:26:26');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '7a11eef79417abedda5380c4cd7bda284462128f11e215cf12c8af24885b5874', '[\"*\"]', '2024-12-11 13:16:43', NULL, '2024-12-11 06:44:04', '2024-12-11 13:16:43'),
(4, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '71790630f653a8a83c130db8de324e4015c387f254218d772e051c223e06895f', '[\"*\"]', '2024-12-21 10:20:57', NULL, '2024-12-16 14:31:33', '2024-12-21 10:20:57'),
(5, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'f3869d54db7165f408cf7e6ea4718159063547fa0cc22e9b15a3a3763c3801d6', '[\"*\"]', NULL, NULL, '2024-12-17 09:26:06', '2024-12-17 09:26:06'),
(6, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'e502e9384e07ba8a0a3c521638889244834ec5cc3b9ac23f4670bfb1c1113a3a', '[\"*\"]', NULL, NULL, '2024-12-17 09:30:30', '2024-12-17 09:30:30'),
(7, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'f96e006bdd78cd4142099eac0d25128e9f60da3333eb14fa5dc537788dac85fa', '[\"*\"]', NULL, NULL, '2024-12-17 09:32:13', '2024-12-17 09:32:13'),
(8, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '228fd01e7804fcd2191fc3701587aa1e47d0b91e758597643c1585c3e3b80cbf', '[\"*\"]', NULL, NULL, '2024-12-21 09:28:20', '2024-12-21 09:28:20'),
(9, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '4b7208d63cb5376fdab1d71c36a247b6ba6941818a7bfdfd9e71849789351254', '[\"*\"]', '2024-12-25 06:57:16', NULL, '2024-12-21 10:23:19', '2024-12-25 06:57:16'),
(10, 'App\\Models\\appUsers', 15, 'john@gmail.com', '26c1a3b8be7655d439f10457e9782151326f4085daa9c3730658bf12888ec4f3', '[\"*\"]', NULL, NULL, '2024-12-21 15:17:48', '2024-12-21 15:17:48'),
(11, 'App\\Models\\appUsers', 15, 'john@gmail.com', '27d61d3b92076cf549906c27a840589bda674100cb14b81a992c70b584574253', '[\"*\"]', NULL, NULL, '2024-12-21 15:20:18', '2024-12-21 15:20:18'),
(12, 'App\\Models\\appUsers', 15, 'john@gmail.com', 'de3f37bf3e97881583b45244e6c0a86b39e1c93995d9661a1456f45234275b7b', '[\"*\"]', NULL, NULL, '2024-12-21 15:20:18', '2024-12-21 15:20:18'),
(13, 'App\\Models\\appUsers', 15, 'john@gmail.com', 'dc7a87a13fe93dce3748ef525762ec0092ed17376e86d32930ed1f91f44c4589', '[\"*\"]', NULL, NULL, '2024-12-21 15:21:10', '2024-12-21 15:21:10'),
(14, 'App\\Models\\appUsers', 15, 'john@gmail.com', '4453c38e8901477cbcb1c88ef326a850ca04c481109446c7f68a078fe141cae9', '[\"*\"]', NULL, NULL, '2024-12-21 15:23:58', '2024-12-21 15:23:58'),
(15, 'App\\Models\\appUsers', 15, 'john@gmail.com', 'c7066d349d173f2e03fc3f3e6e8949c85e1ba4f4807640a857a2bb79e6a22d98', '[\"*\"]', NULL, NULL, '2024-12-21 16:04:57', '2024-12-21 16:04:57'),
(16, 'App\\Models\\appUsers', 15, 'john@gmail.com', '75ce06b748e1e398c9aac9dfceb26666eacf85847b8c49411251db708eb4f045', '[\"*\"]', NULL, NULL, '2024-12-21 16:40:32', '2024-12-21 16:40:32'),
(17, 'App\\Models\\appUsers', 15, 'john@gmail.com', '167f5c491e26bb220f11a61feae8f5142d6af70a8e6a9ecfca9b852617cf8880', '[\"*\"]', NULL, NULL, '2024-12-21 16:41:38', '2024-12-21 16:41:38'),
(18, 'App\\Models\\appUsers', 15, 'john@gmail.com', '24a9b3bf5f4edaed10b7e4ecd6c4cfda300e779d6ccf1593052ae8adadbc947a', '[\"*\"]', NULL, NULL, '2024-12-21 17:17:07', '2024-12-21 17:17:07'),
(19, 'App\\Models\\appUsers', 15, 'john@gmail.com', '2ce7b7aaa6fb425832360912402c44cb897fe661a185b4861a92a54043135a7b', '[\"*\"]', '2024-12-21 17:32:55', NULL, '2024-12-21 17:21:26', '2024-12-21 17:32:55'),
(20, 'App\\Models\\appUsers', 15, 'john@gmail.com', '508a65ae30aa061efec2d6616db8a33556208144bf043abb6b366df27a3f0126', '[\"*\"]', '2024-12-21 17:53:15', NULL, '2024-12-21 17:34:44', '2024-12-21 17:53:15'),
(21, 'App\\Models\\appUsers', 15, 'john@gmail.com', '82d7acbb0f3d521b2337e7d3957ca2aff89b5899b2486ce41da620529e6cc272', '[\"*\"]', NULL, NULL, '2024-12-21 18:41:11', '2024-12-21 18:41:11'),
(23, 'App\\Models\\appUsers', 15, 'john@gmail.com', '15e3fc3f84b935233b17b607a7bc9415f6df6b02615b52882d04bb6361f22047', '[\"*\"]', NULL, NULL, '2024-12-22 04:54:03', '2024-12-22 04:54:03'),
(24, 'App\\Models\\appUsers', 15, 'john@gmail.com', 'd153aa188fec90209619aa707de39a365cddba241debe1075e41dfc742a223d8', '[\"*\"]', NULL, NULL, '2024-12-22 05:05:30', '2024-12-22 05:05:30'),
(25, 'App\\Models\\appUsers', 15, 'john@gmail.com', 'ab69d881b38ccb6d1643c14418f6c9954bc3d5515369ffcebaafdf5032c7ffed', '[\"*\"]', NULL, NULL, '2024-12-22 05:05:31', '2024-12-22 05:05:31'),
(27, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '408bed0e1f07e1aeb6de92da444eecd0cca255e9157604879ccbb2ecb4728542', '[\"*\"]', '2024-12-22 07:03:42', NULL, '2024-12-22 05:16:28', '2024-12-22 07:03:42'),
(30, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '56fe228d394f4b9d7ffad93a41cd53856df98e5893503205db9b7262affc827c', '[\"*\"]', '2024-12-25 08:19:03', NULL, '2024-12-25 07:26:41', '2024-12-25 08:19:03'),
(31, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'f7e09eb2de65730443ec9cdb049d6dc25ecb85e37010bc3906d4315cb957f984', '[\"*\"]', '2024-12-25 08:57:42', NULL, '2024-12-25 08:54:20', '2024-12-25 08:57:42'),
(32, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '23b07b05897de0e8b2bb54f18da283f073e79e5283a13314eb9c776226fa3c1c', '[\"*\"]', '2024-12-25 11:41:02', NULL, '2024-12-25 09:51:54', '2024-12-25 11:41:02'),
(33, 'App\\Models\\appUsers', 15, 'john@gmail.com', '447423979394eb66d42856a5260b88023bf2c26ae02d324f40e62f336096854d', '[\"*\"]', '2024-12-25 13:16:58', NULL, '2024-12-25 12:47:48', '2024-12-25 13:16:58'),
(34, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '33bfa6d262d28b17ac51d740c603c97bab09823a3842cb7aafb10b66d2a779f3', '[\"*\"]', '2024-12-26 17:32:13', NULL, '2024-12-25 14:02:58', '2024-12-26 17:32:13'),
(35, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'af8c8e684121aae5bd47dcc880e4be9bb1e85b2659026d2f58bc270da1aa2d09', '[\"*\"]', '2024-12-26 06:11:25', NULL, '2024-12-26 04:26:17', '2024-12-26 06:11:25'),
(36, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'd6105e60a9378066a197a619704ca0b15732be1174a30bf5488a06d86053ba86', '[\"*\"]', '2024-12-26 06:18:02', NULL, '2024-12-26 06:18:00', '2024-12-26 06:18:02'),
(37, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'cbad6358c3dfe3949cf51a081b4731eea46398189fc7ef227f5e95177d0044c9', '[\"*\"]', '2024-12-26 14:08:15', NULL, '2024-12-26 12:48:21', '2024-12-26 14:08:15'),
(38, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'f97f63425308e89a27abbb569bae86e1d5e516839e7e75f388f40a4e40cb2a39', '[\"*\"]', NULL, NULL, '2024-12-26 12:48:21', '2024-12-26 12:48:21'),
(40, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '822ba78d34253784230063703ca38a4ed75ea8c228e777c2d4edd2cb710ab97d', '[\"*\"]', '2024-12-27 13:52:51', NULL, '2024-12-27 13:46:14', '2024-12-27 13:52:51'),
(41, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '2e2997dc377d02ab963affa3da09743fd3607a9e8cad4268ed3a7b4b9a509794', '[\"*\"]', '2024-12-27 14:16:29', NULL, '2024-12-27 14:16:27', '2024-12-27 14:16:29'),
(42, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'c4901367e35e5d365e58f10288b3e6620ff4322bf5752f1b93dd00f3ac01a094', '[\"*\"]', '2024-12-27 14:34:12', NULL, '2024-12-27 14:20:23', '2024-12-27 14:34:12'),
(43, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'af3931621c3c941761d59d715665b58f81dcb253359de0ed9940ab82d86de9e7', '[\"*\"]', NULL, NULL, '2024-12-29 13:19:30', '2024-12-29 13:19:30'),
(44, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'd8495b54025af81a3b5793392352036a0ca67e00a880745d42b134c37cc901af', '[\"*\"]', '2025-01-04 17:08:19', NULL, '2025-01-01 17:19:07', '2025-01-04 17:08:19'),
(45, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '164434c121109afb13e0ee462cc50abcac83f213e47145ad68afc2d68a39f463', '[\"*\"]', '2025-01-01 18:02:11', NULL, '2025-01-01 17:48:56', '2025-01-01 18:02:11'),
(46, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'f19ab7d7a3d22ddfb9aa9124afabbe32788d52928801379ecbfa5f28e7d759b9', '[\"*\"]', NULL, NULL, '2025-01-02 11:49:55', '2025-01-02 11:49:55'),
(47, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '22538e008f92c6e0a9e350d03de7bcdb4b02b186e0ba6fe2f2423c4c471ad51d', '[\"*\"]', '2025-01-03 11:37:55', NULL, '2025-01-02 12:02:55', '2025-01-03 11:37:55'),
(48, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '72e09cacbf6a476e628f21c8f110b7ced91db636dbb11179f166f46e1e5afdc7', '[\"*\"]', '2025-01-03 20:12:43', NULL, '2025-01-03 13:30:17', '2025-01-03 20:12:43'),
(49, 'App\\Models\\appUsers', 11, 'Mohammadumaiiir@gmail.com', 'de5671598780af0caf87c98bc2d69c00d043c9cf5b720762d781b422c5ac8623', '[\"*\"]', '2025-01-03 21:24:31', NULL, '2025-01-03 21:24:12', '2025-01-03 21:24:31'),
(50, 'App\\Models\\appUsers', 11, 'Mohammadumaiiir@gmail.com', 'ec5d56f6223de1035e03720f13b18227973da975746087296742135f84b0ec61', '[\"*\"]', '2025-01-03 21:29:27', NULL, '2025-01-03 21:24:40', '2025-01-03 21:29:27'),
(51, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '9a21ca532fa6c46e474f85eaca913d1cd51c1ec6a735d75b6ebfe04afeff8416', '[\"*\"]', '2025-01-04 11:02:35', NULL, '2025-01-04 06:25:48', '2025-01-04 11:02:35'),
(52, 'App\\Models\\appUsers', 18, 'test@gmail.com', '0429a1824cfaa6498e96322818751df3db3676d12b0c9f2b2b022f3f78d7fdf3', '[\"*\"]', '2025-01-04 07:51:08', NULL, '2025-01-04 07:46:47', '2025-01-04 07:51:08'),
(53, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '3e602927e293a1535bbe999363651d35f4830561fdb079c1320491c75003236a', '[\"*\"]', '2025-01-04 17:48:17', NULL, '2025-01-04 14:34:11', '2025-01-04 17:48:17'),
(54, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '8667eb9a0c5b8cc6111d77b834f068f220759df24f5b23a128cf0772a8353680', '[\"*\"]', '2025-01-04 18:24:30', NULL, '2025-01-04 18:03:45', '2025-01-04 18:24:30'),
(55, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'cc764f94fa7f5a197557bbc1bb5e2e8a63e3e083d480d5660ad49913f01faffc', '[\"*\"]', '2025-01-04 18:32:46', NULL, '2025-01-04 18:25:41', '2025-01-04 18:32:46'),
(56, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '570445c204ee5becf2416415d7d8329498fcc0545a380bec7aa2b61c0ae222fd', '[\"*\"]', '2025-01-04 19:28:14', NULL, '2025-01-04 18:47:45', '2025-01-04 19:28:14'),
(58, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'dcc80ee8b08f580ccd000b26188464e398358bd3469cb0595350f6edfb71dd0d', '[\"*\"]', '2025-01-04 19:56:38', NULL, '2025-01-04 19:56:36', '2025-01-04 19:56:38'),
(60, 'App\\Models\\appUsers', 19, 'maliiumair06@gmail.com', '40db088aff1d8193ff3187d516f7a76690819618090c608d3e7b96a03f95470e', '[\"*\"]', '2025-01-12 16:42:30', NULL, '2025-01-12 16:40:42', '2025-01-12 16:42:30'),
(61, 'App\\Models\\appUsers', 19, 'maliiumair06@gmail.com', '9112eaeda77d1a78d269222aeb00fe0f37ab7a8b0273629932503396ec1b304a', '[\"*\"]', '2025-01-12 16:45:41', NULL, '2025-01-12 16:43:18', '2025-01-12 16:45:41'),
(62, 'App\\Models\\appUsers', 19, 'maliiumair06@gmail.com', 'ae2c69dcd0b1c9cc06a19844eb4a6f17c1dc6ef57897997050521f3758a51ede', '[\"*\"]', '2025-01-12 16:47:17', NULL, '2025-01-12 16:47:15', '2025-01-12 16:47:17'),
(64, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '9e5a1fbe634598550d694a451223e6860ae796d88cf61566040c43fc9ca754cf', '[\"*\"]', '2025-01-12 17:10:40', NULL, '2025-01-12 17:05:27', '2025-01-12 17:10:40'),
(65, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '411a2cfe674c3ec857a6e8cc99dc1e7f0f7f47ea25aecb41cbbb23c6e840e29c', '[\"*\"]', '2025-01-12 17:10:48', NULL, '2025-01-12 17:10:47', '2025-01-12 17:10:48'),
(66, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'd0bd93e72d076a6f847febc570f33e2b526bdc7990bcf286267c9abf6b0500a0', '[\"*\"]', '2025-01-12 17:12:02', NULL, '2025-01-12 17:10:47', '2025-01-12 17:12:02'),
(67, 'App\\Models\\appUsers', 11, 'Mohammadumaiiir@gmail.com', '031bb3159671a2eb18eddeac068a890b64a71a94cf4671647b48a043eb634ea6', '[\"*\"]', '2025-01-14 08:52:37', NULL, '2025-01-14 08:49:00', '2025-01-14 08:52:37'),
(68, 'App\\Models\\appUsers', 11, 'Mohammadumaiiir@gmail.com', 'a8681f88dd7189c10288c9c0c820cbb63c93a5315e4d42306ad456d28d564df6', '[\"*\"]', '2025-01-14 08:52:42', NULL, '2025-01-14 08:52:40', '2025-01-14 08:52:42'),
(69, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '40add60258da903dc19b4134875eb12b337f5ff59842582bc1647739a80cec64', '[\"*\"]', '2025-01-14 16:54:21', NULL, '2025-01-14 13:41:46', '2025-01-14 16:54:21'),
(70, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '6e8a380af9d1aa762d3635631bc11caf9e7d139f056d715523c73db26fdc1101', '[\"*\"]', '2025-01-14 17:40:29', NULL, '2025-01-14 17:34:33', '2025-01-14 17:40:29'),
(73, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '0078e3384adb152350070f7fe4e82030dfbe636daf3576da731ee0fa961728f4', '[\"*\"]', '2025-01-20 19:11:34', NULL, '2025-01-20 19:08:20', '2025-01-20 19:11:34'),
(74, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '9dbddc815e8b595d2f66fa1bf8dd9979872ac402fdd4a77d6724f65aa59494e3', '[\"*\"]', '2025-01-21 11:23:16', NULL, '2025-01-21 11:22:54', '2025-01-21 11:23:16'),
(75, 'App\\Models\\appUsers', 9, 'user5@gmail.com', '8363d056228c91523fc53b7d0d5ef491490d5f77d1a53b80bd7dd996153d3235', '[\"*\"]', '2025-01-23 16:59:54', NULL, '2025-01-23 16:58:42', '2025-01-23 16:59:54'),
(76, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'dfdf16a3d0323fa89fe30402d75df68911355d9faa03c0f930f99fe15068a104', '[\"*\"]', NULL, NULL, '2025-01-23 21:19:53', '2025-01-23 21:19:53'),
(77, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'a531233babca0d43325b6c976aa75f5faae6eb238fc11392b754255ed8b848f2', '[\"*\"]', NULL, NULL, '2025-01-23 21:22:33', '2025-01-23 21:22:33'),
(78, 'App\\Models\\appUsers', 9, 'user5@gmail.com', 'af96611ff967c8263d1d0b3fdaff6cdffaaf425449b96d8b8979b61297c61dc6', '[\"*\"]', '2025-01-24 00:57:45', NULL, '2025-01-23 21:26:35', '2025-01-24 00:57:45'),
(79, 'App\\Models\\appUsers', 26, 'clienstjobs@gmail.com', '2f3fc00bfe31d90892e4dacb2d860fe52dfc168b0badaf6cb174d064c4168864', '[\"*\"]', '2025-01-24 19:00:28', NULL, '2025-01-24 18:14:08', '2025-01-24 19:00:28'),
(80, 'App\\Models\\appUsers', 32, 'clienstjobs@gmail.com', '888feec9887c4e515afbb1241a22d0394c51991fb228491dd5850b5cf455bede', '[\"*\"]', '2025-01-25 20:13:43', NULL, '2025-01-25 09:31:42', '2025-01-25 20:13:43'),
(81, 'App\\Models\\appUsers', 32, 'clienstjobs@gmail.com', '972b3540293aa82ead726622c2d5fdabb00b291361ce12cc9f1523bee41b1616', '[\"*\"]', '2025-01-25 20:05:12', NULL, '2025-01-25 09:38:41', '2025-01-25 20:05:12'),
(85, 'App\\Models\\appUsers', 32, 'clienstjobs@gmail.com', '71243f484d257c9a8389d350f426408cbac5434158beaeaec22c3ddd24a0b33e', '[\"*\"]', '2025-01-25 22:43:05', NULL, '2025-01-25 22:24:46', '2025-01-25 22:43:05'),
(90, 'App\\Models\\appUsers', 31, 'hasanameer386@gmail.com', '5159818f46f36002e7c6c9c51ec3f97342a0212ecc987cdf2f57155d81fe8067', '[\"*\"]', '2025-02-05 14:48:32', NULL, '2025-02-05 14:46:13', '2025-02-05 14:48:32'),
(91, 'App\\Models\\appUsers', 35, 'JRPhi50@mac.com', '1828cc9777d56b14348d82095d621f4d89f18d15c04c4d4b07c16759ae639358', '[\"*\"]', '2025-02-18 00:51:54', NULL, '2025-02-18 00:30:54', '2025-02-18 00:51:54'),
(92, 'App\\Models\\appUsers', 35, 'JRPhi50@mac.com', '4f72cd3b7932632258a23dd839e29036dd8349493aa713ff403484d41249304a', '[\"*\"]', '2025-02-18 01:00:30', NULL, '2025-02-18 01:00:21', '2025-02-18 01:00:30'),
(93, 'App\\Models\\appUsers', 36, 'hasanameer386@gmail.com', '7f612ce128d602c83217f997388f5e78a29b44357fc27dde86ded89341ddaaae', '[\"*\"]', NULL, NULL, '2025-02-22 17:38:40', '2025-02-22 17:38:40'),
(94, 'App\\Models\\appUsers', 36, 'hasanameer386@gmail.com', '8566459be255f0b5729bdb103b384a77ca21af1f5ab8bc5b226134ee264e89a0', '[\"*\"]', '2025-02-22 17:39:05', NULL, '2025-02-22 17:38:40', '2025-02-22 17:39:05'),
(95, 'App\\Models\\appUsers', 32, 'clienstjobs@gmail.com', '1afaa058ccfca45a8fd86a90c48128429c70f80408e57441c9f77ef26a036a44', '[\"*\"]', '2025-02-22 18:51:58', NULL, '2025-02-22 18:03:33', '2025-02-22 18:51:58'),
(96, 'App\\Models\\appUsers', 38, 'somewhatbest@gmail.com', '1b6107714e35c4050e94d7ab2e89a1326c1a2cad8e89696dbb0fc3a71de22218', '[\"*\"]', NULL, NULL, '2025-02-25 07:44:43', '2025-02-25 07:44:43'),
(98, 'App\\Models\\appUsers', 39, 'basitbhattee@gmail.com', 'd826f8501e5ea5a7d3fe9ca8d493faf83a1734ca5ea5eb878881a02753b0d464', '[\"*\"]', NULL, NULL, '2025-03-02 07:31:45', '2025-03-02 07:31:45'),
(99, 'App\\Models\\appUsers', 39, 'basitbhattee@gmail.com', '44a5e95d457e424528ca3678ad576c9f98bf96e467cac8a2c5053ef8848a9aff', '[\"*\"]', NULL, NULL, '2025-03-02 07:33:09', '2025-03-02 07:33:09'),
(100, 'App\\Models\\appUsers', 39, 'basitbhattee@gmail.com', '9593230424aaf81ebdcc93a985a0d5f30fc9f1aed5d37a1315166a716b9a983d', '[\"*\"]', NULL, NULL, '2025-03-02 07:47:30', '2025-03-02 07:47:30'),
(101, 'App\\Models\\appUsers', 40, 'itsbasitbhatti@gmail.com', '3d70cddc5fc7799817efb68612c3909c5cd670550fbc5d41f9193e2b306c90cc', '[\"*\"]', NULL, NULL, '2025-03-02 08:02:55', '2025-03-02 08:02:55'),
(102, 'App\\Models\\appUsers', 39, 'basitbhattee@gmail.com', 'b2929df392e06b779b7c11ff1b5368d2a42e0deb3747ed76a94f691ff07aa3ca', '[\"*\"]', NULL, NULL, '2025-03-02 08:05:44', '2025-03-02 08:05:44'),
(103, 'App\\Models\\appUsers', 39, 'basitbhattee@gmail.com', '96a13f0a69f9c1ab131af9d1e704260c9b8c1a2b9b57cf5a829464d10d2955be', '[\"*\"]', NULL, NULL, '2025-03-03 05:31:24', '2025-03-03 05:31:24'),
(104, 'App\\Models\\appUsers', 40, 'itsbasitbhatti@gmail.com', '962d5357d724313b4ffbccab6f572b18c83275e98ba52bb432a3c1ce11038e77', '[\"*\"]', NULL, NULL, '2025-03-03 05:59:55', '2025-03-03 05:59:55'),
(105, 'App\\Models\\appUsers', 43, 'itsbasitbhattti@gmail.com', '9e1b971cea646f60e1132c36c5fb83dd9f326b6c11fc849224cb10f18ae17e2e', '[\"*\"]', NULL, NULL, '2025-03-03 06:21:14', '2025-03-03 06:21:14'),
(106, 'App\\Models\\appUsers', 46, 'mehta@gmail.com', '8da444c6ae09074fec7d793fab6ef0a12a84a71ad5dae12cf1a96d6d8de505c4', '[\"*\"]', NULL, NULL, '2025-03-03 07:42:30', '2025-03-03 07:42:30'),
(107, 'App\\Models\\appUsers', 50, '7malik@gmail.com', '52f7d7317ef25b5ee830a10c1364994c183a137f1e4585c62f79aab62ef18b85', '[\"*\"]', NULL, NULL, '2025-03-07 16:16:36', '2025-03-07 16:16:36'),
(108, 'App\\Models\\appUsers', 50, '7malik@gmail.com', '6628d25d125f52364cdec0c316e2737fb06381b6608adb8d892da81f52b0de8f', '[\"*\"]', NULL, NULL, '2025-03-07 16:16:45', '2025-03-07 16:16:45'),
(109, 'App\\Models\\appUsers', 58, '69malik32@gmail.com', '703f8adfa36fe3d53dc51971170f1a3e8555f7453748411d19515fa830fe5975', '[\"*\"]', NULL, NULL, '2025-03-08 22:46:58', '2025-03-08 22:46:58'),
(110, 'App\\Models\\appUsers', 59, 'baza@gmail.com', '35852859d104865f534921880503820770b5580908f4599bf30a3eaa7e976760', '[\"*\"]', NULL, NULL, '2025-03-08 23:23:40', '2025-03-08 23:23:40'),
(111, 'App\\Models\\appUsers', 59, 'baza@gmail.com', 'c9196443769cc80f79455297e7ac38fabedb6261f636afa87fb564c54167fc1a', '[\"*\"]', NULL, NULL, '2025-03-09 10:30:37', '2025-03-09 10:30:37'),
(112, 'App\\Models\\appUsers', 59, 'baza@gmail.com', '1ccb2682e5b70df41fa1394af99186b7abf31a2ea444dd00e9c926dcfa2b43bd', '[\"*\"]', NULL, NULL, '2025-03-09 11:28:51', '2025-03-09 11:28:51'),
(113, 'App\\Models\\appUsers', 59, 'baza@gmail.com', 'b2a04f3d4cc77afbb00c9f175091d0c49bbb95b26d6b6848b3b9af5177fa97e5', '[\"*\"]', NULL, NULL, '2025-03-09 11:28:51', '2025-03-09 11:28:51'),
(114, 'App\\Models\\appUsers', 59, 'baza@gmail.com', '15a737c425d2f055d8d1895311bace73d7d355841f4ac58a3551a158a3b82ddc', '[\"*\"]', NULL, NULL, '2025-03-09 11:28:53', '2025-03-09 11:28:53'),
(115, 'App\\Models\\appUsers', 60, 'Malikg1@gmail.com', '87bb808f130be8c43a1cf3a09e7b71162c8848fef4c2ca9b9b94a02495009b73', '[\"*\"]', NULL, NULL, '2025-03-09 12:40:03', '2025-03-09 12:40:03'),
(116, 'App\\Models\\appUsers', 60, 'Malikg1@gmail.com', '100eccb8dc346ac6fc0d27808850c94c8bbb24d655652303c49ad95119035711', '[\"*\"]', NULL, NULL, '2025-03-09 12:40:09', '2025-03-09 12:40:09'),
(117, 'App\\Models\\appUsers', 32, 'clienstjobs@gmail.com', '84430fd6c6d00eca31ab82e0e4b03aa3e3fcf7f1b5f0b99c5429fe534214d849', '[\"*\"]', '2025-03-09 14:31:18', NULL, '2025-03-09 14:25:50', '2025-03-09 14:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `SendEmails`
--

CREATE TABLE `SendEmails` (
  `id` int(10) UNSIGNED NOT NULL,
  `options` varchar(255) DEFAULT '1',
  `uid` varchar(500) DEFAULT ' ',
  `email` varchar(255) DEFAULT '@gmail.com',
  `subject` varchar(255) DEFAULT 'subject',
  `body` varchar(255) DEFAULT 'body',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `SendEmails`
--

INSERT INTO `SendEmails` (`id`, `options`, `uid`, `email`, `subject`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, '2', '', 'hasanameer386@gmail.com', 'password is changed', 'new password is 7860', '2025-01-24 19:35:48', '2025-01-24 19:35:48', NULL),
(24, '2', '', 'hasanameer386@gmail.com', 'new passsord', 'new passoword s 7966', '2025-01-24 19:43:53', '2025-01-24 19:43:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionsSetting`
--

CREATE TABLE `subscriptionsSetting` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`desc`)),
  `price` varchar(255) NOT NULL DEFAULT '100',
  `storage` int(11) NOT NULL DEFAULT 20,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptionsSetting`
--

INSERT INTO `subscriptionsSetting` (`id`, `title`, `desc`, `price`, `storage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '40 GB', '[\"upload and share files\",\"share link via App or Text with anyone\",\"secure and encrypted\",\"Cloud Storage 90 days\"]', '49', 40, '2024-11-28 17:10:30', '2024-12-18 23:22:06', NULL),
(2, '100 GB', '[\"can upload and share files\",\"share link via App or Text with anyone\",\"secure and encrypted\",\"Cloud Storage 90 days\"]', '69', 100, '2024-11-28 17:17:40', '2024-12-18 23:23:58', NULL),
(3, '300 GB', '[\"upload and share files\",\"store media data\",\"secure and encrypted\",\"Cloud Storage 90 days\"]', '129', 300, '2024-11-28 17:18:56', '2024-12-18 23:24:43', NULL),
(4, '550 GB', '[\"upload and share files\",\"store media data\",\"secure and encrypted\",\"Cloud Storage 90 days\"]', '159', 550, '2024-12-18 23:26:08', '2024-12-21 08:07:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `TransactionHistory`
--

CREATE TABLE `TransactionHistory` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(11) DEFAULT NULL COMMENT 'user i',
  `status` tinyint(1) DEFAULT NULL COMMENT 'paid unpaid',
  `plantype` int(111) DEFAULT 1 COMMENT 'if folder buying',
  `payfor` int(11) DEFAULT NULL COMMENT '0 for folder and 1 for frames',
  `folderstorage` int(255) DEFAULT NULL COMMENT 'folder storage',
  `foldername` varchar(250) DEFAULT ' ' COMMENT 'folder name',
  `frameid` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '[]' COMMENT 'frame id can be multiple',
  `price` varchar(255) DEFAULT NULL COMMENT 'amount',
  `trid` varchar(255) DEFAULT NULL COMMENT 'Transaction Id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `TransactionHistory`
--

INSERT INTO `TransactionHistory` (`id`, `uid`, `status`, `plantype`, `payfor`, `folderstorage`, `foldername`, `frameid`, `price`, `trid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 32, NULL, 0, 0, 100, 'event1', '[]', '69', 'pi_3Ql8kCDPiaFCF9z81HJZ2qX0', '2025-01-25 12:46:16', '2025-01-25 12:49:34', NULL),
(23, 32, NULL, 0, 0, 300, 'night club', '[]', '129', 'pi_3Ql8m6DPiaFCF9z824gM4k0n', '2025-01-25 12:48:21', '2025-01-25 12:48:21', NULL),
(26, 32, NULL, 0, 1, 0, '', '[\"2\"]', '139', 'pi_3Ql9SWDPiaFCF9z80tl0vDAK', '2025-01-25 13:32:11', '2025-01-25 13:32:11', NULL),
(27, 32, NULL, 0, 1, 0, '', '[\"2\"]', '139', 'pi_3Ql9YQDPiaFCF9z82cu9mPOh', '2025-01-25 13:38:10', '2025-01-25 13:38:10', NULL),
(28, 32, NULL, 0, 1, 0, '', '[\"2\"]', '139', 'pi_3Ql9bvDPiaFCF9z80MlHwtt8', '2025-01-25 13:41:58', '2025-01-25 13:41:58', NULL),
(29, 32, NULL, 0, 1, 0, '', '[\"2\"]', '139', 'pi_3QlA2EDPiaFCF9z81REcPw3V', '2025-01-25 14:09:39', '2025-01-25 14:09:39', NULL),
(30, 32, NULL, 0, 1, 0, '', '[\"1\"]', '69', 'pi_3QlA75DPiaFCF9z80MyYyXvb', '2025-01-25 14:14:09', '2025-01-25 14:14:09', NULL),
(31, 32, NULL, 0, 1, 0, '', '[\"3\"]', '199', 'pi_3QlA8lDPiaFCF9z82xIo0y5Z', '2025-01-25 14:16:31', '2025-01-25 14:16:31', NULL),
(32, 33, NULL, 0, 0, 40, 'Asad\'s wedding', '[]', '49', 'pi_3QlTc7DPiaFCF9z811NBgGZY', '2025-01-26 11:03:06', '2025-01-26 11:03:06', NULL),
(33, 33, NULL, 0, 1, 0, '', '[\"1\"]', '69', 'pi_3QlTdUDPiaFCF9z801xuuD3I', '2025-01-26 11:04:38', '2025-01-26 11:04:38', NULL),
(34, 32, NULL, 0, 0, 40, 'events', '[]', '49', 'pi_3QvNa7DPiaFCF9z810NEdhOm', '2025-02-22 18:38:16', '2025-02-22 18:38:16', NULL),
(35, 32, NULL, 0, 0, 100, 'night club', '[]', '69', 'pi_3QvNiDDPiaFCF9z82Xf7Sxti', '2025-02-22 18:46:40', '2025-02-22 18:46:40', NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `additionalHistory`
--
ALTER TABLE `additionalHistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_operation_log_user_id_index` (`user_id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permissions_name_unique` (`name`),
  ADD UNIQUE KEY `admin_permissions_slug_unique` (`slug`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_roles_name_unique` (`name`),
  ADD UNIQUE KEY `admin_roles_slug_unique` (`slug`);

--
-- Indexes for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`);

--
-- Indexes for table `admin_role_permissions`
--
ALTER TABLE `admin_role_permissions`
  ADD KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`);

--
-- Indexes for table `admin_role_users`
--
ALTER TABLE `admin_role_users`
  ADD KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- Indexes for table `admin_user_permissions`
--
ALTER TABLE `admin_user_permissions`
  ADD KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`);

--
-- Indexes for table `appSettings`
--
ALTER TABLE `appSettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appUsers`
--
ALTER TABLE `appUsers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloudstorage`
--
ALTER TABLE `cloudstorage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactUs`
--
ALTER TABLE `contactUs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frames`
--
ALTER TABLE `frames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PagesDesign`
--
ALTER TABLE `PagesDesign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `SendEmails`
--
ALTER TABLE `SendEmails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptionsSetting`
--
ALTER TABLE `subscriptionsSetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TransactionHistory`
--
ALTER TABLE `TransactionHistory`
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
-- AUTO_INCREMENT for table `additionalHistory`
--
ALTER TABLE `additionalHistory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11390;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appSettings`
--
ALTER TABLE `appSettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appUsers`
--
ALTER TABLE `appUsers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `cloudstorage`
--
ALTER TABLE `cloudstorage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contactUs`
--
ALTER TABLE `contactUs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frames`
--
ALTER TABLE `frames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `PagesDesign`
--
ALTER TABLE `PagesDesign`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `SendEmails`
--
ALTER TABLE `SendEmails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subscriptionsSetting`
--
ALTER TABLE `subscriptionsSetting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `TransactionHistory`
--
ALTER TABLE `TransactionHistory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
