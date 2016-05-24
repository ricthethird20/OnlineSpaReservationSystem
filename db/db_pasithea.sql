-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 12:08 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pasithea`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasithea_account`
--

CREATE TABLE `pasithea_account` (
  `acct_id` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasithea_account`
--

INSERT INTO `pasithea_account` (`acct_id`, `userId`, `Lastname`, `FirstName`, `Mobile`) VALUES
(3, 11, 'Ferrancullo III', 'Ricardo', '09269813431'),
(4, 12, 'Ferrancullo', 'Marco Polo', '02384');

-- --------------------------------------------------------

--
-- Table structure for table `pasithea_bookings`
--

CREATE TABLE `pasithea_bookings` (
  `bookId` int(11) NOT NULL,
  `svc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_date` varchar(111) NOT NULL,
  `book_starttime` int(11) NOT NULL,
  `book_endtime` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasithea_bookings`
--

INSERT INTO `pasithea_bookings` (`bookId`, `svc_id`, `user_id`, `book_date`, `book_starttime`, `book_endtime`, `status`) VALUES
(1, 21, 12, '2016-05-23', 12, 13, '2'),
(2, 23, 11, '2016-05-23', 12, 13, 'Pending'),
(3, 23, 11, '2016-05-24', 916, 1016, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pasithea_services`
--

CREATE TABLE `pasithea_services` (
  `id` int(11) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_details` varchar(300) NOT NULL,
  `service_cost` varchar(11) NOT NULL,
  `featured` int(2) NOT NULL,
  `discounted_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasithea_services`
--

INSERT INTO `pasithea_services` (`id`, `image_url`, `service_name`, `service_details`, `service_cost`, `featured`, `discounted_price`) VALUES
(12, 'assets/img/eyelash_extension.jpg', 'Eyelash Extension', 'asd23', '32423', 1, '4323'),
(14, 'assets/img/foot_spa.jpg', 'Foot Spa', 'asd', '53', 0, '6'),
(15, 'assets/img/foot_massage.jpg', 'Foot Massage', 'asd', '34', 1, '54'),
(16, 'assets/img/manicure.jpg', 'Manicure', 'asd', '3', 1, '54'),
(20, 'assets/img/manicure.jpg', 'Pedicure', 'sdf', '34', 1, '5'),
(21, 'assets/img/swedish_massage.jpg', 'Swedish Massage', 'asd', '54', 1, '65'),
(22, 'assets/img/breeze_massage.jpg', 'Breeze Massage', 'asd', '5', 1, '6'),
(23, 'assets/img/deeptissue.jpg', 'Deep Tissue Massage', 'ad', '0', 1, '6');

-- --------------------------------------------------------

--
-- Table structure for table `pasithea_users`
--

CREATE TABLE `pasithea_users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `passWord` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasithea_users`
--

INSERT INTO `pasithea_users` (`userId`, `userName`, `passWord`) VALUES
(11, 'ric', 'e11932155cb6841f4158185db2ce6926'),
(12, 'marco', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasithea_account`
--
ALTER TABLE `pasithea_account`
  ADD PRIMARY KEY (`acct_id`);

--
-- Indexes for table `pasithea_bookings`
--
ALTER TABLE `pasithea_bookings`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `pasithea_services`
--
ALTER TABLE `pasithea_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasithea_users`
--
ALTER TABLE `pasithea_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasithea_account`
--
ALTER TABLE `pasithea_account`
  MODIFY `acct_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pasithea_bookings`
--
ALTER TABLE `pasithea_bookings`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasithea_services`
--
ALTER TABLE `pasithea_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pasithea_users`
--
ALTER TABLE `pasithea_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
