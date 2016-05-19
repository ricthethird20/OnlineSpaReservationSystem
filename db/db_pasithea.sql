-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 10:33 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
-- AUTO_INCREMENT for table `pasithea_users`
--
ALTER TABLE `pasithea_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
