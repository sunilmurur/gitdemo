-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 06:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
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
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_display_tbl`
--

INSERT INTO `news_display_tbl` (`news_display_id`, `news_id`, `status`, `deleted`, `created_date`) VALUES
(44, '40', '0', '0', '2021-03-12 05:24:08'),
(45, '41', '0', '0', '2021-03-12 05:24:08');

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
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `inserted_by_id` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_image_tbl`
--

INSERT INTO `news_image_tbl` (`news_image_id`, `news_id`, `news_image`, `status`, `deleted`, `created_date`, `inserted_by_id`) VALUES
(38, '40', '336-Penguins.jpg', '0', '0', '2021-03-12 05:24:00', '1');

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
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `news_title`, `news_description`, `news_image`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`, `deleted`, `status`, `created_date`, `updated_date`, `deleted_date`) VALUES
(40, 'abc', 'abc', '2387-Chrysanthemum.jpg', '1', '0', '0', '0', '0', '2021-03-12 05:23:27', '2021-03-12 05:23:27', '2021-03-12 05:23:27'),
(41, 'xyz', 'xyz', '', '1', '0', '0', '0', '0', '2021-03-12 05:23:38', '2021-03-12 05:23:38', '2021-03-12 05:23:38');

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
  MODIFY `news_display_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `news_image_tbl`
--
ALTER TABLE `news_image_tbl`
  MODIFY `news_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
