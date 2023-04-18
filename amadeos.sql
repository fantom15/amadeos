-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2023 at 09:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amadeos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `hidden` tinyint(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`, `image`, `phone`, `status`, `hidden`, `created`, `updated`) VALUES
(1, 'david majidi', 'fantom15dm@gmail.com', 'c0433ddabc41160961d2d6dd1973c8f9a3301f4e', 'user.png', '09196628345', 'active', 0, '2022-06-03 00:00:00', '2022-06-03 00:00:00'),
(2, 'david majidi', 'fantom15dm@high.com', 'f09c454f5964cfc4cf300eb30141655b024c76e9', 'user.png', '09196628345', 'active', 0, '0000-00-00 00:00:00', NULL),
(3, 'david majidi 2', 'fantom15dm@hdgh.com', '54820a7331300bbe432619d16615329eaaa525ad', 'user.png', '09196628343', 'active', 1, '2022-08-03 23:00:12', '2022-08-03 23:00:12'),
(4, 'ali test', 'ali@gmal.com', '1e548e44d3c82c1baa079b2e5c2c2a8de1225c2d', 'user.png', '09196628341', 'active', 0, '2022-08-03 23:02:18', '2022-08-03 23:02:18'),
(5, 'ali test', 'ali@gmail.com', 'd1da83b79947960f6db958d3ddde78789c78d995', 'user.png', '09196628344', 'active', 0, '2022-08-03 23:03:29', '2022-08-03 23:03:29'),
(6, 'david fantom', 'fantosm15dm@gmail.com', 'efd8d4528be5bf5f4319d9054b16259b53f6f7b3', 'user.png', '09395191328', 'active', 0, '2022-08-04 00:02:12', '2022-08-04 00:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logins`
--

CREATE TABLE `admin_logins` (
  `login_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `login_time` int(11) NOT NULL,
  `login_ip` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `login_agent` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin_logins`
--

INSERT INTO `admin_logins` (`login_id`, `user_id`, `login_time`, `login_ip`, `login_agent`) VALUES
(42, 1, 1654188008, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36'),
(43, 1, 1654190966, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36'),
(44, 1, 1654191531, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36'),
(45, 1, 1654709723, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36'),
(46, 1, 1654943476, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36'),
(47, 1, 1655106544, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'),
(48, 1, 1655110249, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'),
(49, 1, 1655199422, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'),
(50, 1, 1656350265, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'),
(51, 1, 1656356164, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'),
(52, 1, 1656440451, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'),
(53, 1, 1656509532, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36'),
(54, 1, 1657902471, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(55, 1, 1657907869, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(56, 1, 1657967289, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(57, 1, 1658161089, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(58, 1, 1658231515, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(59, 1, 1658316439, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(60, 1, 1658595919, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(61, 1, 1658680640, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(62, 1, 1658761143, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(63, 1, 1658855482, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(64, 1, 1659007493, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(65, 1, 1659169933, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(66, 1, 1659181012, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(67, 1, 1659204307, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(68, 1, 1659281805, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(69, 1, 1659432593, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(70, 1, 1659463087, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(71, 1, 1659547913, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(72, 1, 1659552286, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(73, 5, 1659552713, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(74, 1, 1659553933, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(75, 5, 1659553952, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(76, 5, 1659554154, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(77, 5, 1659554569, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(78, 1, 1659554581, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(79, 5, 1659554627, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(80, 5, 1659554639, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(81, 1, 1659554712, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(82, 5, 1659554735, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(83, 1, 1659555014, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(84, 1, 1659555499, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(85, 1, 1659776071, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(86, 1, 1660062797, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(87, 1, 1660063841, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(88, 1, 1660213711, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(89, 1, 1660468998, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(90, 1, 1660558032, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(91, 1, 1660634295, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(92, 1, 1661065666, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(93, 1, 1661161778, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(94, 1, 1661243089, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(95, 1, 1661251447, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(96, 1, 1661336506, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(97, 1, 1661419947, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(98, 1, 1661440017, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(99, 1, 1661592962, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(100, 1, 1661603979, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(101, 1, 1663441116, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(102, 1, 1663492390, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(103, 1, 1667940290, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(104, 1, 1668449663, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(105, 1, 1668870056, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(106, 1, 1670182661, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(107, 1, 1671108602, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(108, 1, 1671183388, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(109, 1, 1671572957, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(110, 1, 1675083644, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(111, 1, 1675195552, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(112, 1, 1675538145, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(113, 1, 1675890973, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(114, 1, 1676111864, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(115, 1, 1676723292, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(116, 1, 1679525181, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'),
(117, 1, 1680772668, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permission`
--

CREATE TABLE `admin_permission` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) UNSIGNED NOT NULL,
  `permission_id` int(11) UNSIGNED NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_permission`
--

INSERT INTO `admin_permission` (`id`, `admin_id`, `permission_id`, `created`) VALUES
(59, 5, 4, '2022-08-03 23:03:30'),
(60, 5, 5, '2022-08-03 23:03:30'),
(61, 5, 6, '2022-08-03 23:03:30'),
(62, 2, 1, '2022-08-03 23:11:32'),
(63, 2, 2, '2022-08-03 23:11:32'),
(64, 2, 4, '2022-08-03 23:11:32'),
(65, 2, 5, '2022-08-03 23:11:32'),
(66, 2, 6, '2022-08-03 23:11:32'),
(67, 6, 5, '2022-08-04 00:02:12'),
(68, 6, 6, '2022-08-04 00:02:12'),
(88, 4, 6, '2022-08-04 00:15:11'),
(95, 1, 1, '2022-12-15 13:52:54'),
(96, 1, 2, '2022-12-15 13:52:54'),
(97, 1, 4, '2022-12-15 13:52:54'),
(98, 1, 5, '2022-12-15 13:52:54'),
(99, 1, 6, '2022-12-15 13:52:54'),
(100, 1, 7, '2022-12-15 13:52:54'),
(101, 1, 8, '2022-12-15 13:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1916699ea9860ca50c1056f1758c981421f9924f', '::1', 1676729123, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732393132333b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('22471b02c8eddf34cb5c064b5890900fd6725ff6', '::1', 1675895286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353839353238363b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('247ac6cbefa29818a4655b33555f895084bc03cc', '::1', 1676723896, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732333839363b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('2aed134e670be4e4a5ef582e9605cc3596b500ef', '::1', 1676729645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732393632383b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('342f5f78c0bb1b671726cc8a29a0850cc8a2d4b7', '::1', 1675895535, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353839353238363b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('39681fc0fad0a611cd23f944c836eb0527a57c2f', '::1', 1675204050, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353230343035303b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('3a1cbac6182c08b9d4907d531eaaaccb30d02e13', '::1', 1675197316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353139373331363b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('408218cb8f340472c914e503b5553c50d73bf86e', '::1', 1675893670, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353839333637303b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('44f2cbab8420286ec39d59ecf9805751a920b3bc', '::1', 1675200012, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353230303031323b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('47a6be843cade63f2255f0e4f2c6f5ddeecfed90', '::1', 1675204116, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353230343035303b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('4bc47434207a66f84a56c726880682ae2807b601', '::1', 1675198758, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353139383735383b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('4ddca802dfe31d365772942dfca8f64f74153969', '::1', 1679525511, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637393532353531313b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('5ba8ebf3669a82f6ac93c178a84d8589b890261c', '::1', 1675198116, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353139383131363b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('63a5b81ab1a6e77a45b2f112498c0513ec9675b2', '::1', 1679527554, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637393532373535343b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('6537ce578df8dd56e2ddc335aa49618f5059af25', '::1', 1676111865, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363131313739353b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('66f562e37e95dff8aa7e858ffc3825424bdb850d', '::1', 1679526062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637393532363036323b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('687880d29a76180495cc773754bba4460ae13245', '::1', 1675196510, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353139363531303b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('6f2aa3cfabcabb277de92847cd8d2d604cfc1d16', '::1', 1676728202, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732383230323b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('74fb19e81cc475fe7e3cd3ebb7e2f7b725b4c53d', '::1', 1676726497, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732363439373b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('996b6e3a64004c20d2f155868b7507c52b67a138', '::1', 1676726923, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732363932333b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('99d49ed6cf95b2a4d69b7aa12eb05ddd96a2ad8f', '::1', 1676725888, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732353838383b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('9b7313719b65f9de64d5eb2243bd3b518ce73629', '::1', 1679526497, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637393532363439373b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('9be84ed44f09cc20ff7d6631b04e9da1f26643ad', '::1', 1675891541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353839313534313b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('a103dfcb2cfd66e5f6ffe99e059129a169f2ad21', '::1', 1680772696, 0x5f5f63695f6c6173745f726567656e65726174657c693a313638303737323635383b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('a19fbe2b329440bc6b7e203ea0d5e7163c23a2d9', '::1', 1676724923, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732343932333b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('b0341ad3f605ebb8ee2b320472337b135d031309', '::1', 1679526960, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637393532363936303b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('b17eab67c3ff8d4594e82defeeae577e8de7c2c0', '::1', 1679527818, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637393532373535343b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('c3fe67ee4894d11ce74f0c08ab32cb87ee977ca5', '::1', 1675203343, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353230333334333b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('c4256b08339f1a6db1e6398fb8edba4619472cd3', '::1', 1676729628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732393632383b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('c801b13994f242ddab378f6513561b7d76e13227', '::1', 1675196838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353139363833383b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('dde30c4c43b95b6e67922e1972ec69fe1c251e69', '::1', 1675538265, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353533383134313b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('e1ae6e9dc30fb5360f6135ffc6645789c8442cfd', '::1', 1676728810, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637363732383831303b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('e62f0d52688487fe22e6e897d9e1d2f479816ca9', '::1', 1675198437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353139383433373b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('eb67b7f5e070a9cd896a5a0d129cb471cf22469a', '::1', 1675892453, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353839323435333b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('edda15dbf63458d4cba148b06f9ce4a4aaa08399', '::1', 1675197725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353139373732353b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('f3beca96ce3eca44fb175ad338182f1766ee994d', '::1', 1675200449, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353230303434393b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('f84d478cfcb5c7c49883b9ec70bd7498f508547c', '::1', 1675199683, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353139393638333b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b),
('fe3b38578bc8d9930b2f7435c3e2d0a80b3dc04c', '::1', 1675894809, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637353839343830393b757365725f69647c733a313a2231223b656d61696c7c733a32303a2266616e746f6d3135646d40676d61696c2e636f6d223b);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `code` varchar(100) NOT NULL,
  `expire_date` datetime DEFAULT NULL,
  `percentage` int(11) NOT NULL,
  `private_code` varchar(255) DEFAULT NULL,
  `status` enum('active','deactive') NOT NULL,
  `admin_id` int(11) UNSIGNED NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `package_id`, `code`, `expire_date`, `percentage`, `private_code`, `status`, `admin_id`, `created`) VALUES
(1, NULL, 'uw4hn3e74f', '2022-08-26 00:00:00', 100, NULL, 'active', 1, '2022-08-25 20:18:35'),
(2, NULL, 'cqd59xlf96', NULL, 12, NULL, 'deactive', 1, '2022-08-25 20:47:16'),
(3, NULL, 'ois94y35jb', NULL, 10, NULL, 'deactive', 1, '2022-08-27 17:18:19'),
(4, NULL, 'roeeflae1p', NULL, 12, NULL, 'deactive', 1, '2022-08-27 17:18:55'),
(5, NULL, 'dyf0ut57h9', NULL, 13, NULL, 'deactive', 1, '2022-08-27 17:31:34'),
(6, NULL, 'fbqh45e2cd', NULL, 14, NULL, 'deactive', 1, '2022-08-27 17:32:08'),
(7, NULL, '102zjdho6r', '2022-08-31 00:00:00', 15, NULL, 'deactive', 1, '2022-08-27 17:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `content` text,
  `language_id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `sort` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `title`, `icon`, `content`, `language_id`, `status`, `sort`, `created`, `updated`) VALUES
(2, 'First topic', 'assets/img/svg/svg/21.svg', '<p>From there I would then append the character to a string, and when the enter key is pressed send the string to the server. I&#39;m sorry if my question seemed somewhat cryptic, and the title meaning something almost completely off-topic, it&#39;s early in the morning and I haven&#39;t had breakfast yet</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/amadeos/assets/img/images_list/1658163313-image.jpeg\" style=\"height:590px; width:800px\" /></p>', 1, 'active', 1, '2022-06-11 15:10:57', '2022-06-11 15:10:57'),
(3, 'Second tipic', 'assets/img/svg/svg/36.svg', '<p><strong>sadasdasda</strong></p>\r\n\r\n<p><em>sadasdasda</em></p>\r\n\r\n<p>sadasdasda</p>', 1, 'active', 2, '2022-06-11 15:23:07', '2022-06-11 15:23:07'),
(4, 'Third topic', 'assets/img/svg/svg/8.svg', '<p>asdasdasd</p>', 1, 'active', 3, '2022-06-11 15:23:17', '2022-06-11 15:23:17'),
(5, 'Fourth topic', '', '<p>asdasdasd</p>', 1, 'active', 4, '2022-07-25 23:35:22', '2022-07-25 23:35:22'),
(6, 'First english topic', NULL, NULL, 2, 'active', 1, '2022-07-25 23:35:46', '2022-07-25 23:35:46'),
(7, 'Second english topic', NULL, NULL, 2, 'active', 2, '2022-07-25 23:36:17', '2022-07-25 23:36:17'),
(8, 'تاپیک اول', '', '<p style=\"text-align:right\"><em><s>تاپیک اول</s></em></p>', 3, 'active', 1, '2022-11-19 18:32:08', '2022-11-19 18:32:08'),
(9, 'test', NULL, NULL, 2, 'active', 3, '2023-03-22 23:49:59', '2023-03-22 23:49:59'),
(10, 'test 3', NULL, NULL, 2, 'active', 4, '2023-03-23 00:08:24', '2023-03-23 00:08:24'),
(11, 'test2', NULL, NULL, 1, 'active', 5, '2023-03-23 00:09:16', '2023-03-23 00:09:16'),
(12, 'asd', NULL, NULL, 1, 'active', 6, '2023-03-23 00:10:00', '2023-03-23 00:10:00'),
(13, 'test5', NULL, NULL, 1, 'active', 7, '2023-03-23 00:11:27', '2023-03-23 00:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `images_list`
--

CREATE TABLE `images_list` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `folder` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images_list`
--

INSERT INTO `images_list` (`id`, `image_name`, `folder`, `created`) VALUES
(1, '1658163313-image.jpeg', '3d', '2022-07-18 21:25:13'),
(7, '3d-1675198486-image.jpg', '3d', '2023-01-31 21:54:46'),
(8, 'situation-1675198671-image.png', 'situation', '2023-01-31 21:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `language_name` varchar(100) NOT NULL,
  `en_lang_name` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language_name`, `en_lang_name`, `status`, `created`) VALUES
(1, 'Dutch', 'dutch', 'active', '2022-06-09 00:00:32'),
(2, 'English', 'english', 'active', '2022-06-09 00:00:43'),
(3, 'عربي', 'arabic', 'active', '2022-06-09 00:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'admin_users', 'Admins', 'user-square.svg', '2022-05-03 19:30:00', '2022-05-03 19:30:00'),
(2, 'users', 'Users', 'profile-2user.svg', '2022-05-03 19:30:00', '2022-05-03 19:30:00'),
(4, 'messages', 'Messages', 'sms.svg', '2022-05-03 19:30:00', '2022-05-03 19:30:00'),
(5, 'ebooks', 'Ebooks', 'book.svg', '2022-05-03 19:30:00', '2022-05-03 19:30:00'),
(6, 'questions', 'Questions', 'task-square.svg', '2022-05-03 19:30:00', '2022-05-03 19:30:00'),
(7, 'packages', 'Packages', 'box.svg', '2022-05-03 19:30:00', '2022-05-03 19:30:00'),
(8, 'gallery', 'Gallery', 'box.svg', '2022-05-03 19:30:00', '2022-05-03 19:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `text_message` text NOT NULL,
  `status` enum('unread','read') NOT NULL DEFAULT 'unread',
  `seen` enum('no','yes') NOT NULL DEFAULT 'no',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `admin_id`, `text_message`, `status`, `seen`, `created`) VALUES
(1, 6, NULL, 'hello', 'unread', 'yes', '2022-08-06 21:06:56'),
(2, 7, NULL, 'hello', 'unread', 'yes', '2022-08-06 21:06:56'),
(3, 9, NULL, 'سلام', 'unread', 'no', '2022-08-06 21:53:37'),
(4, 10, NULL, 'asdasdads', 'unread', 'no', '2022-08-06 21:54:02'),
(5, 7, NULL, 'It should be noted that flashdata variables are regular session vars, only marked in a specific way under the ‘__ci_vars’ key (please don’t touch that one, you’ve been warned).', 'unread', 'yes', '2022-08-06 21:59:27'),
(6, 6, NULL, 'It should be noted that flashdata variables are regular session vars, only marked in a specific way under the ‘__ci_vars’ key (please don’t touch that one, you’ve been warned).', 'unread', 'yes', '2022-08-06 21:59:38'),
(7, 9, NULL, 'If you want your benchmark data to be available to the Profiler all of your marked points must be set up in pairs, and each mark point name must end with _start and _end. Each pair of points must otherwise be named identically. Example:', 'unread', 'no', '2022-08-06 22:32:58'),
(8, 6, 1, 'admin- If you want your benchmark data to be available to the Profiler all of your marked points must be set up in pairs, and each mark point name must end with _start and _end. Each pair of points must otherwise be named identically. Example:', 'unread', 'no', '2022-08-21 12:51:56'),
(9, 6, 1, 'admin-It should be noted that flashdata variables are regular session vars, only marked in a specific way under the ‘__ci_vars’ key (please don’t touch that one, you’ve been warned).', 'unread', 'no', '2022-08-21 12:52:05'),
(10, 7, 1, 'admin-It should be noted that flashdata variables are regular session vars, only marked in a specific way under the ‘__ci_vars’ key (please don’t touch that one, you’ve been warned).', 'unread', 'no', '2022-08-21 12:58:30'),
(11, 7, 1, 'admin-If you want your benchmark data to be available to the Profiler all of your marked points must be set up in pairs, and each mark point name must end with _start and _end. Each pair of points must otherwise be named identically. Example:', 'unread', 'no', '2022-08-21 13:03:49'),
(12, 7, 1, 'admin-If you want your benchmark data to be available to the Profiler all of your marked points must be set up in pairs, and each mark point name must end with _start and _end. Each pair of points must otherwise be named identically. Example:', 'unread', 'no', '2022-08-21 13:21:38'),
(13, 6, NULL, 'سلام', 'unread', 'no', '2022-08-23 15:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `period` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `period`, `price`, `discount`, `days`, `status`, `created`, `updated`) VALUES
(1, '1', '44', '44', 30, 'active', '2022-08-22 15:44:33', '2022-08-22 15:44:33'),
(2, '2', '88', '88', 60, 'active', '2022-08-22 15:44:33', '2022-08-22 15:44:33'),
(3, '6', '120', '120', 180, 'active', '2022-08-22 15:44:33', '2022-08-22 15:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `categories` varchar(100) DEFAULT NULL,
  `question_type` varchar(255) DEFAULT NULL,
  `image` text,
  `image_points` text,
  `question` text,
  `answer_option` text,
  `answers` text,
  `description` text,
  `topic_highlighted` text,
  `sort` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic_id`, `language_id`, `categories`, `question_type`, `image`, `image_points`, `question`, `answer_option`, `answers`, `description`, `topic_highlighted`, `sort`, `status`, `created`, `updated`) VALUES
(1, 2, 1, 'two', 'abc', 'http://localhost/amadeos/assets/img/images_list/3d-1675198486-image.jpg', NULL, 'sdasdasdad', '[\"asd\",\"sdf\",\"xzc\"]', 'C', 'asdasda', NULL, 0, 'active', '2023-02-18 13:38:45', '2023-02-18 13:38:45'),
(2, 2, 1, 'one', 'three_answer', 'http://localhost/amadeos/assets/img/images_list/situation-1675198671-image.png', NULL, 'test', '[\"ea\",\"ae\",\"sdf\"]', '1', 'asdasdadad', NULL, 0, 'active', '2023-02-18 14:11:46', '2023-02-18 14:11:46'),
(3, 2, 1, 'two', 'number', 'http://localhost/amadeos/assets/img/images_list/3d-1675198486-image.jpg', NULL, 'asdasdasd', NULL, '4', 'asdasdasd', NULL, 0, 'active', '2023-02-18 14:23:00', '2023-02-18 14:23:00'),
(4, 2, 1, 'two', 'yes_no', 'http://localhost/amadeos/assets/img/images_list/1658163313-image.jpeg', NULL, 'asdasdasd', NULL, 'no', 'asdasdad', NULL, 0, 'active', '2023-02-18 14:24:29', '2023-02-18 14:24:29'),
(5, 2, 1, 'three', 'drag_and_drop', 'http://localhost/amadeos/assets/img/images_list/situation-1675198671-image.png', NULL, 'jhgjshdgjahsgd', NULL, '{\"answer_1\":[\"3\",\"5\"],\"answer_2\":[\"7\",\"11\"],\"answer_3\":[\"7\",\"2\"],\"answer_4\":[\"7\",\"7\"]}', 'asd asdasd', NULL, 0, 'active', '2023-02-18 14:25:18', '2023-02-18 14:25:18'),
(6, 2, 1, 'three', 'drag_and_drop', 'http://localhost/amadeos/assets/img/images_list/3d-1675198486-image.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'active', '2023-02-18 15:14:05', '2023-02-18 15:14:05'),
(7, 2, 1, 'two', 'number', 'http://localhost/amadeos/assets/img/images_list/3d-1675198486-image.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'active', '2023-03-23 00:17:28', '2023-03-23 00:17:28'),
(8, 2, 1, 'one', 'three_answer', 'http://localhost/amadeos/assets/img/images_list/situation-1675198671-image.png', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'active', '2023-03-23 00:28:25', '2023-03-23 00:28:25'),
(9, 5, 1, 'one', 'three_answer', 'http://localhost/amadeos/assets/img/images_list/3d-1675198486-image.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'active', '2023-03-23 00:29:42', '2023-03-23 00:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `birth_date` varchar(20) DEFAULT NULL,
  `address` text,
  `user_language` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `image`, `gender`, `birth_date`, `address`, `user_language`, `status`, `created`, `updated`) VALUES
(6, 'david fantom', 'fantom15dm@gmail.com', 'c0433ddabc41160961d2d6dd1973c8f9a3301f4e', '09395191328', 'user-image-6-1659792910.jpeg', 'male', '1991-02-17', 'Theran', '2', 'active', '2022-08-06 15:07:00', '2022-11-14 19:33:55'),
(7, 'david majidi', 'fantom15dm1@gmail.com', 'c0433ddabc41160961d2d6dd1973c8f9a3301f4e', '09395191329', 'user-image-6-1659792910.jpeg', 'male', '1991-02-18', 'Theran', '2', 'active', '2022-08-06 15:07:00', '2022-08-06 15:42:40'),
(9, 'david majidi', 'fantom15dm1@gmai2.com', 'c0433ddabc41160961d2d6dd1973c8f9a3301f4e', '09395191329', 'user-image-6-1659792910.jpeg', 'male', '1991-02-18', 'Theran', '2', 'active', '2022-08-06 15:07:00', '2022-08-06 15:42:40'),
(10, 'david majidi', 'fantom15dm14@gmail.com', 'c0433ddabc41160961d2d6dd1973c8f9a3301f4e', '09395191329', 'user-image-6-1659792910.jpeg', 'male', '1991-02-18', 'Theran', '2', 'active', '2022-08-06 15:07:00', '2022-08-06 15:42:40'),
(11, 'david fantom', 'a@gmail.com', 'c0433ddabc41160961d2d6dd1973c8f9a3301f4e', '09395191328', NULL, NULL, NULL, NULL, '2', 'active', '2022-11-19 19:40:11', '2022-11-19 19:40:11'),
(12, 'david fantom', 'fa@gmail.com', 'c0433ddabc41160961d2d6dd1973c8f9a3301f4e', '09395191328', NULL, NULL, NULL, NULL, '3', 'active', '2022-11-19 19:43:04', '2022-11-19 19:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_hash` varchar(40) DEFAULT NULL,
  `question_type` varchar(100) DEFAULT NULL,
  `answer` text,
  `status` enum('both','true','false') DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `user_id`, `topic_id`, `question_id`, `question_hash`, `question_type`, `answer`, `status`, `created`, `updated`) VALUES
(1, 6, 2, 8, 'd5785530669f4c220805996bc8b5bc6a', NULL, '2', 'true', '2023-01-30 18:07:00', '2023-01-30 18:07:00'),
(2, 6, 2, 9, 'd5785530669f4c220805996bc8b5bc6a', NULL, 'B', 'true', '2023-01-30 18:07:01', '2023-01-30 18:07:01'),
(5, 6, 2, 10, 'd5785530669f4c220805996bc8b5bc6a', NULL, NULL, '', '2023-01-30 18:08:44', '2023-01-30 18:08:44'),
(6, 6, 2, 11, 'd5785530669f4c220805996bc8b5bc6a', NULL, 'no', 'true', '2023-01-30 18:08:44', '2023-01-30 18:08:44'),
(7, 6, 2, 12, 'd5785530669f4c220805996bc8b5bc6a', NULL, '{\"answer_3\":\"incorrect\",\"answer_2\":\"correct\",\"answer_4\":\"incorrect\",\"answer_1\":\"incorrect\"}', 'both', '2023-01-30 18:08:44', '2023-01-30 18:08:44'),
(8, 6, 2, 13, 'd5785530669f4c220805996bc8b5bc6a', NULL, '{\"answer_3\":\"incorrect\",\"answer_1\":\"incorrect\",\"answer_2\":\"correct\",\"answer_4\":\"incorrect\"}', 'both', '2023-01-30 18:08:44', '2023-01-30 18:08:44'),
(15, 6, 2, 8, '49822e258979fae42edc1149ae783661', NULL, '2', 'true', '2023-01-30 21:50:02', '2023-01-30 21:50:02'),
(16, 6, 2, 12, 'de880e7a81c5be0534104ae1df91423e', NULL, NULL, '', '2023-01-30 21:51:19', '2023-01-30 21:51:19'),
(17, 6, 2, 12, 'af6f2bf6b2505ca6616da67c9e3db736', NULL, NULL, NULL, '2023-01-30 21:53:48', '2023-01-30 21:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers_temp`
--

CREATE TABLE `user_answers_temp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_hash` varchar(40) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `status` enum('not_answered','both','true','false') DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_answers_temp`
--

INSERT INTO `user_answers_temp` (`id`, `user_id`, `topic_id`, `question_id`, `question_hash`, `answer`, `status`, `created`, `updated`) VALUES
(47, 6, 2, 8, '9c2053ed885c36f0b2cad63303b4f841', NULL, 'not_answered', '2022-12-20 22:29:11', NULL),
(48, 6, 2, 9, '9c2053ed885c36f0b2cad63303b4f841', 'B', 'true', '2022-12-20 22:41:18', NULL),
(49, 6, 2, 10, '9c2053ed885c36f0b2cad63303b4f841', '4', 'true', '2022-12-20 23:03:37', NULL),
(50, 6, 2, 11, '9c2053ed885c36f0b2cad63303b4f841', 'yes', 'false', '2022-12-20 23:04:48', NULL),
(51, 6, 2, 12, '9c2053ed885c36f0b2cad63303b4f841', NULL, NULL, '2022-12-20 23:13:46', NULL),
(52, 6, 3, 14, '2238efb8c0b2c8e9658f215ed37d54fa', NULL, NULL, '2022-12-20 23:14:40', NULL),
(53, 6, 2, 8, 'c44c2130722f842913ac23132e8d7b03', '3', 'false', '2022-12-20 23:14:53', NULL),
(54, 6, 2, 9, 'c44c2130722f842913ac23132e8d7b03', 'C', 'false', '2022-12-20 23:15:04', NULL),
(55, 6, 2, 10, 'c44c2130722f842913ac23132e8d7b03', '3', 'false', '2022-12-20 23:16:51', NULL),
(56, 6, 2, 11, 'c44c2130722f842913ac23132e8d7b03', 'yes', 'false', '2022-12-20 23:17:05', NULL),
(57, 6, 2, 12, 'c44c2130722f842913ac23132e8d7b03', NULL, NULL, '2022-12-20 23:19:03', NULL),
(58, 6, 2, 8, '177f079ce2b2374da53e642a8b550eed', '2', 'true', '2022-12-22 15:30:34', NULL),
(59, 6, 2, 9, '177f079ce2b2374da53e642a8b550eed', 'B', 'true', '2022-12-22 15:30:38', NULL),
(60, 6, 2, 10, '177f079ce2b2374da53e642a8b550eed', NULL, NULL, '2022-12-22 15:30:41', NULL),
(61, 6, 2, 8, 'a7a1ec9144afe78af98b1c2fa9f5f589', '1', 'false', '2022-12-24 15:22:10', NULL),
(62, 6, 2, 9, 'a7a1ec9144afe78af98b1c2fa9f5f589', 'C', 'false', '2022-12-24 15:22:39', NULL),
(63, 6, 2, 10, 'a7a1ec9144afe78af98b1c2fa9f5f589', '4', 'true', '2022-12-24 15:23:09', NULL),
(64, 6, 2, 11, 'a7a1ec9144afe78af98b1c2fa9f5f589', 'yes', 'false', '2022-12-24 15:23:16', NULL),
(65, 6, 2, 12, 'a7a1ec9144afe78af98b1c2fa9f5f589', NULL, NULL, '2022-12-24 15:23:19', NULL),
(66, 6, 2, 8, '524f24fe2c6c2484aade1d90d16c527d', '1', 'false', '2022-12-24 22:34:34', NULL),
(67, 6, 2, 9, '524f24fe2c6c2484aade1d90d16c527d', 'B', 'true', '2022-12-24 23:27:20', NULL),
(68, 6, 2, 10, '524f24fe2c6c2484aade1d90d16c527d', '3', 'false', '2022-12-24 23:27:24', NULL),
(69, 6, 2, 11, '524f24fe2c6c2484aade1d90d16c527d', 'no', 'true', '2022-12-24 23:27:30', NULL),
(70, 6, 2, 12, '524f24fe2c6c2484aade1d90d16c527d', NULL, NULL, '2022-12-24 23:27:34', NULL),
(71, 6, 2, 13, '524f24fe2c6c2484aade1d90d16c527d', NULL, NULL, '2022-12-24 23:27:49', NULL),
(77, 6, 2, 8, '464d222ff24a8c5b9b2effd0ffbdcc1a', '1', 'false', '2023-01-30 13:40:22', NULL),
(78, 6, 2, 9, '464d222ff24a8c5b9b2effd0ffbdcc1a', NULL, 'not_answered', '2023-01-30 13:44:29', NULL),
(79, 6, 2, 10, '464d222ff24a8c5b9b2effd0ffbdcc1a', NULL, 'not_answered', '2023-01-30 13:46:15', NULL),
(80, 6, 2, 11, '464d222ff24a8c5b9b2effd0ffbdcc1a', 'yes', 'false', '2023-01-30 13:47:20', NULL),
(81, 6, 2, 12, '464d222ff24a8c5b9b2effd0ffbdcc1a', NULL, NULL, '2023-01-30 13:48:39', NULL),
(83, 6, 2, 13, '464d222ff24a8c5b9b2effd0ffbdcc1a', '{\"answer_4\":\"correct\",\"answer_2\":\"correct\",\"answer_3\":\"incorrect\"}', 'both', '2023-01-30 13:54:16', NULL),
(84, 6, 2, 8, 'd5785530669f4c220805996bc8b5bc6a', '2', 'true', '2023-01-30 16:53:48', NULL),
(85, 6, 2, 9, 'd5785530669f4c220805996bc8b5bc6a', 'B', 'true', '2023-01-30 16:54:03', NULL),
(86, 6, 2, 10, 'd5785530669f4c220805996bc8b5bc6a', NULL, 'not_answered', '2023-01-30 16:54:07', NULL),
(87, 6, 2, 11, 'd5785530669f4c220805996bc8b5bc6a', 'no', 'true', '2023-01-30 16:54:11', NULL),
(88, 6, 2, 12, 'd5785530669f4c220805996bc8b5bc6a', '{\"answer_3\":\"incorrect\",\"answer_2\":\"correct\",\"answer_4\":\"incorrect\",\"answer_1\":\"incorrect\"}', 'both', '2023-01-30 16:54:15', NULL),
(89, 6, 2, 13, 'd5785530669f4c220805996bc8b5bc6a', '{\"answer_3\":\"incorrect\",\"answer_1\":\"incorrect\",\"answer_2\":\"correct\",\"answer_4\":\"incorrect\"}', 'both', '2023-01-30 16:58:41', NULL),
(90, 6, 2, 8, '08579f5065246f3c516d93e7a65b57de', NULL, 'not_answered', '2023-01-30 18:26:22', NULL),
(91, 6, 2, 9, '08579f5065246f3c516d93e7a65b57de', NULL, 'not_answered', '2023-01-30 18:30:29', NULL),
(92, 6, 2, 10, '08579f5065246f3c516d93e7a65b57de', NULL, 'not_answered', '2023-01-30 18:30:29', NULL),
(93, 6, 2, 11, '08579f5065246f3c516d93e7a65b57de', NULL, 'not_answered', '2023-01-30 18:30:30', NULL),
(94, 6, 2, 12, '08579f5065246f3c516d93e7a65b57de', NULL, NULL, '2023-01-30 18:30:30', NULL),
(95, 6, 2, 8, '49822e258979fae42edc1149ae783661', '2', 'true', '2023-01-30 21:47:23', NULL),
(96, 6, 2, 9, '49822e258979fae42edc1149ae783661', 'C', 'false', '2023-01-30 21:48:09', NULL),
(97, 6, 2, 10, '49822e258979fae42edc1149ae783661', NULL, 'not_answered', '2023-01-30 21:48:14', NULL),
(98, 6, 2, 11, '49822e258979fae42edc1149ae783661', 'no', 'true', '2023-01-30 21:48:19', NULL),
(99, 6, 2, 12, '49822e258979fae42edc1149ae783661', NULL, 'not_answered', '2023-01-30 21:48:22', NULL),
(100, 6, 2, 13, '49822e258979fae42edc1149ae783661', NULL, NULL, '2023-01-30 21:49:01', NULL),
(101, 6, 2, 12, 'de880e7a81c5be0534104ae1df91423e', NULL, 'not_answered', '2023-01-30 21:50:07', NULL),
(102, 6, 2, 13, 'de880e7a81c5be0534104ae1df91423e', NULL, NULL, '2023-01-30 21:50:18', NULL),
(103, 6, 2, 12, 'af6f2bf6b2505ca6616da67c9e3db736', NULL, NULL, '2023-01-30 21:51:47', NULL),
(104, 6, 2, 13, 'af6f2bf6b2505ca6616da67c9e3db736', NULL, NULL, '2023-01-30 21:51:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin_logins`
--
ALTER TABLE `admin_logins`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `admin_id` (`user_id`);

--
-- Indexes for table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_permission_ibfk_1` (`admin_id`),
  ADD KEY `admin_permission_ibfk_2` (`permission_id`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `images_list`
--
ALTER TABLE `images_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `questions_ibfk_1` (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answers_temp`
--
ALTER TABLE `user_answers_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_logins`
--
ALTER TABLE `admin_logins`
  MODIFY `login_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `admin_permission`
--
ALTER TABLE `admin_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images_list`
--
ALTER TABLE `images_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_answers_temp`
--
ALTER TABLE `user_answers_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD CONSTRAINT `admin_permission_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_permission_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discount`
--
ALTER TABLE `discount`
  ADD CONSTRAINT `discount_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD CONSTRAINT `ebooks_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `ebooks` (`id`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
