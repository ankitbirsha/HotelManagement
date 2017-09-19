-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2016 at 08:05 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addguest`
--

CREATE TABLE IF NOT EXISTS `addguest` (
  `name` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `adult` varchar(50) NOT NULL,
  `children` varchar(50) NOT NULL,
  `entrydate` varchar(50) NOT NULL,
  `exitdate` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addguest`
--

INSERT INTO `addguest` (`name`, `emailid`, `address`, `adult`, `children`, `entrydate`, `exitdate`, `gender`, `contactno`) VALUES
('asd', 'ankit', '   asasasasasasasasas         ', '5', '2', '2016-12-30', '2016-12-31', 'M', '2323');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`address`) VALUES
('        zzc    ');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `address`, `email`, `phone_no`, `pan_no`, `password`) VALUES
('amarjeet', 'patna', 'amar@gmail.com', '123456', 'qwerty', 'anand'),
('ak', 'ajokjas', 'AKSK', '899', 'AOJSO', 'MC');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `adults` int(10) NOT NULL,
  `child` int(10) NOT NULL,
  `cidate` varchar(10) NOT NULL,
  `codate` varchar(10) NOT NULL,
  `nights` int(10) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE IF NOT EXISTS `room_types` (
  `room_type_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `return_amt` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_type` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`room_type_id`, `status`, `return_amt`, `rent`, `advance`, `room_capacity`, `room_type`) VALUES
(1, 'enabled', 122, 1000, 400, 4, 'delux'),
(2, 'enabled', 300, 1500, 700, 10, 'delux');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `employee_code` int(10) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `salary` int(10) NOT NULL,
  `age` int(5) NOT NULL,
  `position` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`employee_code`, `employee_name`, `address`, `salary`, `age`, `position`, `email`) VALUES
(2323, 'zeus1705', '      yfh', 1000, 25, 'qwerty', 'ankit'),
(12364, 'ankit', 'patna            ', 11111111, 22, 'mgr', 'ankit@ggg');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `visit_password` varchar(100) NOT NULL,
  `visit_adrs` varchar(100) NOT NULL,
  `contact_num` int(20) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`fname`, `lname`, `email_id`, `dob`, `visit_password`, `visit_adrs`, `contact_num`, `mobile_no`, `status`) VALUES
('pk', 'sn', 'po@po.com', '1995-06-09', '123', 'lk', 123455678, 12345678, 'Enabled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addguest`
--
ALTER TABLE `addguest`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`phone_no`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`employee_code`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
