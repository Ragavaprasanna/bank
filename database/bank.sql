-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 06:39 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(25) NOT NULL,
  `password` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('ragav', 1234),
('pravi', 5678),
('ragav', 1234),
('pravi', 5678);

-- --------------------------------------------------------

--
-- Table structure for table `passbook`
--

CREATE TABLE `passbook` (
  `id` int(30) NOT NULL,
  `details` text NOT NULL,
  `amount` bigint(255) NOT NULL,
  `user` varchar(30) NOT NULL,
  `date_transaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passbook`
--

INSERT INTO `passbook` (`id`, `details`, `amount`, `user`, `date_transaction`) VALUES
(0, 'personal', 500, 'ragav', '0000-00-00 00:00:00'),
(0, 'fee', -200, 'ragav', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `passbook1`
--

CREATE TABLE `passbook1` (
  `id` int(30) NOT NULL,
  `details` text NOT NULL,
  `amount` bigint(255) NOT NULL,
  `user` varchar(30) NOT NULL,
  `date_transaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passbook1`
--

INSERT INTO `passbook1` (`id`, `details`, `amount`, `user`, `date_transaction`) VALUES
(0, 'celebrate', 25, 'ragav', '0000-00-00 00:00:00'),
(0, 'bday', 25, 'ragav', '0000-00-00 00:00:00'),
(0, 'bday', 25, 'ragav', '0000-00-00 00:00:00'),
(0, 'fee', -25, 'ragav', '0000-00-00 00:00:00'),
(0, 'celebrate', 25, 'ragav', '0000-00-00 00:00:00'),
(0, 'bday', 25, 'ragav', '0000-00-00 00:00:00'),
(0, 'bday', 25, 'ragav', '0000-00-00 00:00:00'),
(0, 'celebrate', -25, 'ragav', '0000-00-00 00:00:00'),
(0, 'celebrate', 1350, 'ragav', '0000-00-00 00:00:00'),
(0, 'celebrate', -25, 'ragav', '0000-00-00 00:00:00'),
(0, 'celebrate', -140, 'ragav', '0000-00-00 00:00:00'),
(0, 'celebrate', 25, 'ragav', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register1`
--

CREATE TABLE `register1` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register1`
--

INSERT INTO `register1` (`firstname`, `lastname`, `email`, `phone`, `username`, `password`) VALUES
('gopala', 'krishnan', 'krish@gmail.com', 2147483647, 'krish', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `PayeeName` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `BankName` varchar(20) NOT NULL,
  `FromAccount` varchar(30) NOT NULL,
  `TransferAC` varchar(30) NOT NULL,
  `TransferBank` varchar(30) NOT NULL,
  `PhoneNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer1`
--

CREATE TABLE `transfer1` (
  `PayeeName` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `BankName` varchar(20) NOT NULL,
  `FromAccount` varchar(30) NOT NULL,
  `TransferAC` varchar(30) NOT NULL,
  `TransferBank` varchar(30) NOT NULL,
  `PhoneNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer1`
--

INSERT INTO `transfer1` (`PayeeName`, `password`, `address`, `BankName`, `FromAccount`, `TransferAC`, `TransferBank`, `PhoneNo`) VALUES
('ragav', '1234', '      thendral n agar\r\n', 'sbi', '446788999', 'union', '453216789', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `username` varchar(25) NOT NULL,
  `password` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`username`, `password`) VALUES
('ragav', 123),
('pravi', 5678),
('ragav', 123),
('pravi', 5678);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
