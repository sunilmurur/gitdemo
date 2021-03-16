-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 01:38 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `templenews`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `admin_pass`, `created_date`, `phone_number`, `email`, `address`) VALUES
(1, 'admin', 'admin', '2021-02-08 05:58:50', '9876543210', 'admin@gmail.com', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `news_display_tbl`
--

CREATE TABLE `news_display_tbl` (
  `news_display_id` int(11) NOT NULL,
  `news_id` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `deleted` varchar(10) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_display_tbl`
--

INSERT INTO `news_display_tbl` (`news_display_id`, `news_id`, `status`, `deleted`, `created_date`) VALUES
(2, '1', '0', '0', '2021-02-08 06:09:51'),
(3, '3', '0', '0', '2021-02-08 06:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `news_image_tbl`
--

CREATE TABLE `news_image_tbl` (
  `news_image_id` int(11) NOT NULL,
  `news_id` varchar(20) NOT NULL,
  `news_image` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `deleted` varchar(10) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inserted_by_id` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_image_tbl`
--

INSERT INTO `news_image_tbl` (`news_image_id`, `news_id`, `news_image`, `status`, `deleted`, `created_date`, `inserted_by_id`) VALUES
(1, '4', '3841-beautiful-hologram-water-color-frame-png_119551.jpg', '0', '1', '2021-02-10 05:06:29', '1'),
(3, '3', '2187-color-wing-transparent-set_1284-8933.jpg', '0', '1', '2021-02-10 05:10:42', '1'),
(4, '4', '1031-beautiful-hologram-water-color-frame-png_119551.jpg', '0', '1', '2021-02-10 05:11:37', '1'),
(5, '4', '1953-allama-prabhu-ffcf5b27-ca60-4c92-b96a-b53b5eaa9eb-resize-750.jpg', '0', '1', '2021-02-10 05:16:52', '1'),
(6, '1', '284-basavanna.jpg', '0', '1', '2021-02-10 05:34:01', '1'),
(7, '4', '517-Neelagangambike.jpg', '0', '1', '2021-02-10 05:57:08', '1'),
(8, '4', '2833-allama-prabhu-ffcf5b27-ca60-4c92-b96a-b53b5eaa9eb-resize-750.jpg', '0', '1', '2021-02-10 05:57:16', '1'),
(9, '4', '3881-basavanna.jpg', '0', '1', '2021-02-10 05:57:26', '1'),
(10, '4', '123-Neelagangambike.jpg', '0', '1', '2021-02-10 06:07:23', '1'),
(11, '4', '3818-Neelagangambike.jpg', '0', '1', '2021-02-10 06:08:15', '1'),
(12, '4', '309-allama-prabhu-ffcf5b27-ca60-4c92-b96a-b53b5eaa9eb-resize-750.jpg', '0', '1', '2021-02-10 06:08:22', '1'),
(13, '4', '410-89.jpg', '0', '1', '2021-02-10 06:08:29', '1'),
(14, '4', '813-basavanna.jpg', '0', '1', '2021-02-10 06:08:35', '1'),
(15, '4', '716-89.jpg', '0', '1', '2021-02-10 06:16:28', '1'),
(16, '4', '1822-Neelagangambike.jpg', '0', '1', '2021-02-10 06:16:35', '1'),
(17, '4', '988-fashion-news.jpg', '0', '1', '2021-02-10 06:22:27', '1'),
(18, '4', '3328-Fashion-Magazine-August-2013-Demi-Lovato-480x600-c-top.jpg', '0', '1', '2021-02-10 06:23:50', '1'),
(19, '4', '3158-0189ea8cbb2fac52d12f0bf66856d953.jpg', '0', '0', '2021-02-10 06:23:58', '1'),
(20, '1', '2554-gettyimages-1042664572-612x612.jpg', '0', '0', '2021-02-10 07:41:17', '1'),
(21, '1', '917-Murder_571_855.jpg', '0', '0', '2021-02-10 07:42:49', '1'),
(22, '3', '2334-power-amp-politics-ppt-1-638.jpg', '0', '0', '2021-02-10 07:44:36', '1'),
(23, '3', '886-frieden-1600.jpg', '0', '0', '2021-02-10 07:44:46', '1'),
(24, '4', '2716-Fashion-Magazine-August-2013-Demi-Lovato-480x600-c-top.jpg', '0', '0', '2021-02-10 08:21:30', '1'),
(25, '4', '133-frieden-1600.jpg', '0', '1', '2021-02-11 12:37:26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_description` varchar(500) NOT NULL,
  `news_image` varchar(500) NOT NULL,
  `inserted_by_id` varchar(10) NOT NULL DEFAULT '0',
  `updated_by_id` varchar(10) NOT NULL DEFAULT '0',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT '0',
  `deleted` varchar(10) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `news_title`, `news_description`, `news_image`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`, `deleted`, `status`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'Murder', '10 year old boy murdered by his brother', '574-death-5.jpg', '1', '0', '0', '0', '0', '2021-02-08 06:02:45', '2021-02-08 06:02:45', '2021-02-08 06:02:45'),
(2, 'Educational ', 'New Educational rules which is declared by prime minister will be implemented from 2022', '2258-mba_2.jpg', '1', '1', '1', '1', '0', '2021-02-08 06:03:20', '2021-02-08 06:03:20', '2021-02-08 06:03:20'),
(3, 'Political', 'Farmers protest limited to certain areas says Agriculture minister narendra singh tomar', '712-Politics.jpg', '1', '0', '0', '0', '0', '2021-02-08 06:07:16', '2021-02-08 06:07:16', '2021-02-08 06:07:16'),
(4, 'Fashion', 'New Fashion rules are followed by celebrities', '3397-Fashion-News-Kate-Spade.jpg', '1', '0', '0', '0', '0', '2021-02-08 06:07:59', '2021-02-08 06:07:59', '2021-02-08 06:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `news_display_tbl`
--
ALTER TABLE `news_display_tbl`
  ADD PRIMARY KEY (`news_display_id`);

--
-- Indexes for table `news_image_tbl`
--
ALTER TABLE `news_image_tbl`
  ADD PRIMARY KEY (`news_image_id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_display_tbl`
--
ALTER TABLE `news_display_tbl`
  MODIFY `news_display_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_image_tbl`
--
ALTER TABLE `news_image_tbl`
  MODIFY `news_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
