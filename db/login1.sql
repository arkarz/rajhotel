-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2011 at 07:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login1`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `name` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `roomno` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `adult` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`name`, `aadhar`, `category`, `status`, `contact`, `roomno`, `checkin`, `checkout`, `child`, `adult`) VALUES
('sp', '1', 'Single Room', 'Booked', '100', '1', '2021-04-07', '2021-04-10', '1', '2'),
('r', '2', 'Single Room', 'Booked', '12', '2', '2021-04-14', '2021-04-14', '1', '2'),
('rahul', '11', 'Single Room', 'Booked', '123', '1', '2021-04-07', '2021-04-08', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`Name`, `Email`, `Uname`, `Password`) VALUES
('Admin', 'Admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomno` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomno`, `category`, `status`) VALUES
('1', 'Single Room', 'Booked'),
('2', 'Single Room', 'Booked'),
('3', 'Single Room', 'Booked'),
('4', 'Single Room', 'Booked'),
('5', 'Single Room', 'Booked'),
('6', 'Single Room', 'Booked'),
('7', 'Single Room', 'Booked'),
('8', 'Single Room', 'Booked'),
('9', 'Single Room', 'Booked'),
('10', 'Single Room', 'Booked'),

('11', 'Double Room', 'Booked'),
('12', 'Double Room', 'Booked'),
('13', 'Double Room', 'Cleaning'),
('14', 'Double Room', 'Unbooked'),
('15', 'Double Room', 'Unbooked'),
('16', 'Double Room', 'Unbooked'),
('17', 'Double Room', 'Unbooked'),
('18', 'Double Room', 'Unbooked'),
('19', 'Double Room', 'Unbooked'),
('20', 'Double Room', 'Unbooked'),

('21', 'Deluxe Room', 'Unbooked'),
('22', 'Deluxe Room', 'Unbooked'),
('23', 'Deluxe Room', 'Unbooked'),
('24', 'Deluxe Room', 'Unbooked'),
('25', 'Deluxe Room', 'Unbooked'),
('26', 'Deluxe Room', 'Unbooked'),
('27', 'Deluxe Room', 'Unbooked'),
('28', 'Deluxe Room', 'Unbooked'),
('29', 'Deluxe Room', 'Unbooked'),
('30', 'Deluxe Room', 'Unbooked'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
