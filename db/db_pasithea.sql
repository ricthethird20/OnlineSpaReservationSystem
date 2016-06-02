-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2016 at 06:01 AM
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
(4, 12, 'Ferrancullo', 'Marco Polo', '02384'),
(21, 14, 'Rollon', 'Micoy', '345345'),
(22, 0, 'Amul', 'Marrian Angelica', '092698123123'),
(23, 15, 'amul', 'marrian', '09269813431'),
(24, 16, 'ferrancullo', 'marco', '090'),
(25, 17, 'Rivamonte', 'Karen', '909809');

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
  `status` varchar(20) NOT NULL,
  `client_type` varchar(50) NOT NULL,
  `walkin_lname` varchar(50) NOT NULL,
  `walkin_fname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasithea_bookings`
--

INSERT INTO `pasithea_bookings` (`bookId`, `svc_id`, `user_id`, `book_date`, `book_starttime`, `book_endtime`, `status`, `client_type`, `walkin_lname`, `walkin_fname`) VALUES
(13, 23, 3, '2016-06-02', 1300, 1400, 'Cancelled', 'online', '', ''),
(14, 27, 3, '2016-06-01', 1200, 1300, 'Cancelled', 'online', '', ''),
(15, 23, 3, '2016-06-01', 1200, 1300, 'Cancelled', 'online', '', ''),
(16, 20, 3, '2016-06-01', 1300, 1400, 'Cancelled', 'online', '', ''),
(17, 34, 22, '2016-06-01', 1500, 1600, 'Confirmed', 'Walkin', 'Amul', 'Marrian Angelica'),
(18, 37, 21, '2016-06-01', 0, 100, 'Confirmed', 'Walkin', 'Rollon', 'Micoy'),
(19, 12, 25, '2016-06-02', 1200, 1300, 'Cancelled', 'online', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pasithea_products`
--

CREATE TABLE `pasithea_products` (
  `prodId` int(10) NOT NULL,
  `ProductName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasithea_products`
--

INSERT INTO `pasithea_products` (`prodId`, `ProductName`) VALUES
(3, 'hahah');

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
(20, 'assets/img/manicure.jpg', 'Pedicure', 'sdf', '34', 1, '5'),
(21, 'assets/img/swedish_massage.jpg', 'Swedish Massage', 'asd', '54', 1, '65'),
(23, 'assets/img/deeptissue.jpg', 'Deep Tissue Massage', 'ad', '0', 1, '6'),
(27, 'assets/img/manicure.jpg', 'Manicure', 'asd', '3', 1, '54'),
(35, 'assets/img/foot_massage.jpg', 'Foot Massage', 'asd', '34', 1, '54'),
(37, 'assets/img/breeze_massage.jpg', 'Breeze Massage', 'asd', '5', 1, '6');

-- --------------------------------------------------------

--
-- Table structure for table `pasithea_service_products`
--

CREATE TABLE `pasithea_service_products` (
  `id` int(20) NOT NULL,
  `svcId` int(20) NOT NULL,
  `prodId` int(20) NOT NULL,
  `qty` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasithea_service_products`
--

INSERT INTO `pasithea_service_products` (`id`, `svcId`, `prodId`, `qty`) VALUES
(3, 21, 2, 4),
(5, 26, 1, 1),
(7, 25, 2, 1),
(8, 25, 3, 1),
(9, 25, 2, 1),
(10, 25, 3, 1),
(11, 25, 2, 1),
(12, 28, 1, 6),
(13, 29, 1, 10);

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
(12, 'marco', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'marrian', '3fa5f9ddcb0f4f26bd1e3fdeb66acb26'),
(14, 'micoy', '60fbd5e66c32996df0d93e6149835366'),
(15, 'marrian', '3fa5f9ddcb0f4f26bd1e3fdeb66acb26'),
(16, 'marco', 'b53759f3ce692de7aff1b5779d3964da'),
(17, 'karen', '25d55ad283aa400af464c76d713c07ad');

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
-- Indexes for table `pasithea_products`
--
ALTER TABLE `pasithea_products`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `pasithea_services`
--
ALTER TABLE `pasithea_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasithea_service_products`
--
ALTER TABLE `pasithea_service_products`
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
  MODIFY `acct_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pasithea_bookings`
--
ALTER TABLE `pasithea_bookings`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pasithea_products`
--
ALTER TABLE `pasithea_products`
  MODIFY `prodId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasithea_services`
--
ALTER TABLE `pasithea_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `pasithea_service_products`
--
ALTER TABLE `pasithea_service_products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pasithea_users`
--
ALTER TABLE `pasithea_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
