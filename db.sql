-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 07:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_table`
--

CREATE DATABASE IF NOT EXISTS db;
USE db;
CREATE TABLE `business_table` (
  `bus_id` int(11) NOT NULL,
  `bus_name` varchar(45) DEFAULT NULL,
  `bus_address` varchar(100) DEFAULT NULL,
  `bus_contact_num` varchar(45) DEFAULT NULL,
  `bus_email` varchar(45) DEFAULT NULL,
  `admin_username` varchar(45) DEFAULT NULL,
  `admin_password` varchar(45) DEFAULT NULL,
  `bus_valet` varchar(45) DEFAULT NULL,
  `verified` varchar(45) DEFAULT NULL,
  `parking_rate` int(11) DEFAULT NULL,
  `bus_type` varchar(30) NOT NULL,
  `AdminRemark` varchar(50) NOT NULL,
  `verified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bustype_id` int(11) NOT NULL,
  `num_floor` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_table`
--

INSERT INTO `business_table` (`bus_id`, `bus_name`, `bus_address`, `bus_contact_num`, `bus_email`, `admin_username`, `admin_password`, `bus_valet`, `verified`, `parking_rate`, `bus_type`, `AdminRemark`, `verified_date`, `bustype_id`, `num_floor`) VALUES
(1, 'SWAPNIL Agrawal', 'swapnil home 2', '9885242988', 'swapnil@gmail.com', 'swapnil_1', 'swapnil', 'on', '1', 20, 'theatre', 'first remark', '2020-11-19 06:00:28', 1, 1),
(2, 'shourya', '', '', 'shourya@gmail.com', 'shourya1', 'shourya', 'on', '1', NULL, 'theatre', 'last one', '2020-11-13 10:56:26', 2, 0),
(3, 'Hotel Del Luna', ' 1st Block 1st Cross, Rammurthy nagar', '', 'delluna@gmail.com', 'delluna_1', 'password', 'on', '1', 50, 'Hotel', '', '2020-11-19 06:33:11', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `business_type`
--

CREATE TABLE `business_type` (
  `bustype_id` int(30) NOT NULL,
  `bustype_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_type`
--

INSERT INTO `business_type` (`bustype_id`, `bustype_name`) VALUES
(1, 'hotel'),
(2, 'theatre');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `cust_id` int(11) NOT NULL,
  `cust_username` varchar(45) DEFAULT NULL,
  `cust_password` varchar(45) DEFAULT NULL,
  `cust_email` varchar(45) DEFAULT NULL,
  `cust_contact_num` int(11) DEFAULT NULL,
  `cust_vehicle_num1` varchar(45) DEFAULT NULL,
  `cust_vehicle_num2` varchar(45) DEFAULT NULL,
  `p_book` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`cust_id`, `cust_username`, `cust_password`, `cust_email`, `cust_contact_num`, `cust_vehicle_num1`, `cust_vehicle_num2`, `p_book`) VALUES
(1, 'shourya', 'shourya1', 'shourya@gmail.com', 12234, 'AP215682', NULL, 0),
(2, 'hulk1', 'swapnil', 'hulk@gmail.com', 123456, 'TS123869', NULL, 0),
(3, 'ironman1', 'password', 'ironman@gmail.com', 123456, 'UP185223', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `emp_id` int(11) NOT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `emp_name` varchar(45) DEFAULT NULL,
  `emp_username` varchar(45) DEFAULT NULL,
  `emp_password` varchar(45) DEFAULT NULL,
  `emp_contact_num` varchar(45) DEFAULT NULL,
  `emp_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`emp_id`, `bus_id`, `emp_name`, `emp_username`, `emp_password`, `emp_contact_num`, `emp_email`) VALUES
(2, 2, 'beta', 'beta2', '5f4dcc3b5aa765d61d8327deb882cf99', 'beta@gmail.com', '0'),
(3, 2, 'gama', 'gama1', '5f4dcc3b5aa765d61d8327deb882cf99', 'gama@gmail.com', '0'),
(15, 1, 'swapnil1', 'swapnil1', 'password', '1234567089', 'swapnil1@gmail.com'),
(16, 1, 'swapnil2', 'swapnil2', 'password', '0987654321', 'swapnil2@gmail.com'),
(17, 1, 'swapnil3', 'swapnil_3', 'password', '0987654123', 'swapnil3@gmail.com'),
(18, 1, 'swapnil4', 'swapnil4', 'password', '2314567809', 'swapnil4@gmail.com'),
(19, 1, 'swapnil6', 'swapnil6', 'password', '3421567890', 'swapnil6@gmail.comn'),
(20, 1, 'swapnil7', 'swapnil7', 'password', '1234677890', 'swapnil7@gmail.com'),
(21, 1, 'swapnil8', 'swapnil8', 'password', '4532167098', 'swapnil8@gmail.com'),
(22, 3, 'abishek', 'abishek', 'password1', '9852345222', 'abishek@gmail.com'),
(23, 3, 'shourya', 'shourya_1', 'password', '9885232988', 'shourya@gmail.com'),
(24, 3, 'swapnil', 'swapnil', 'password', '9838425233', 'swapnil@gmail.com'),
(25, 3, 'amruth', 'amruth_1', 'password', '9859426788', 'amruth@gmail.com'),
(26, 3, 'aryan', 'aryan', 'password', '9872556689', 'aryan@gmail.com'),
(27, 3, 'shanmukh', 'shanmukh_1', 'password', '8872456377', 'shanmukh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `history_table`
--

CREATE TABLE `history_table` (
  `hist_id` int(11) NOT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `floor_num` int(11) DEFAULT NULL,
  `lot_num` int(11) DEFAULT NULL,
  `vehicle_num` varchar(10) DEFAULT NULL,
  `entering_time` datetime DEFAULT NULL,
  `exiting_time` datetime DEFAULT NULL,
  `valet` varchar(5) DEFAULT NULL,
  `parking_status` varchar(5) DEFAULT NULL,
  `pre_booking` varchar(5) DEFAULT NULL,
  `bill` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_table`
--

INSERT INTO `history_table` (`hist_id`, `bus_id`, `floor_num`, `lot_num`, `vehicle_num`, `entering_time`, `exiting_time`, `valet`, `parking_status`, `pre_booking`, `bill`) VALUES
(1, 1, 1, 1, '12345', '2020-11-15 02:05:03', '2020-11-18 17:12:25', NULL, NULL, 'no', NULL),
(2, 1, 1, 9, 'TN568442', '2020-11-18 15:46:50', '2020-11-18 17:17:12', NULL, NULL, 'no', NULL),
(3, 3, 1, 2, 'AP215682', '2020-11-18 12:50:00', '2020-11-19 11:41:08', NULL, NULL, 'no', NULL),
(4, 3, 1, 2, 'AP215682', '2020-11-19 11:54:00', '2020-11-19 11:54:06', NULL, NULL, 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parking_lot_table`
--

CREATE TABLE `parking_lot_table` (
  `lot_id` int(11) NOT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `floor_num` int(11) DEFAULT NULL,
  `lot_num` int(11) DEFAULT NULL,
  `vehicle_num` varchar(10) DEFAULT NULL,
  `entering_time` datetime DEFAULT NULL,
  `exiting_time` datetime DEFAULT NULL,
  `valet` varchar(5) DEFAULT NULL,
  `parking_status` varchar(5) DEFAULT NULL,
  `pre_booking` varchar(5) DEFAULT NULL,
  `bill` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking_lot_table`
--

INSERT INTO `parking_lot_table` (`lot_id`, `bus_id`, `floor_num`, `lot_num`, `vehicle_num`, `entering_time`, `exiting_time`, `valet`, `parking_status`, `pre_booking`, `bill`) VALUES
(1, 1, 1, 1, NULL, NULL, '0000-00-00 00:00:00', 'yes', 'no', 'no', 0),
(2, 1, 1, 2, 'KR185272', '2020-11-19 00:38:57', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(3, 1, 1, 3, '1234', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(4, 1, 1, 4, '1236', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(5, 1, 1, 5, '1238', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(6, 1, 1, 6, '1239', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(7, 1, 1, 7, '1230', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(8, 1, 1, 8, '12388', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(9, 1, 1, 9, NULL, NULL, NULL, 'no', 'no', 'no', 0),
(10, 3, 1, 1, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(12, 3, 1, 2, NULL, NULL, NULL, 'yes', 'no', 'no', 0),
(13, 3, 1, 3, '123488', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(14, 3, 1, 4, '123655', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(15, 3, 1, 5, '123833', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(16, 3, 1, 6, '123911', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(17, 3, 1, 7, '1234', '2020-11-18 12:45:00', NULL, 'no', 'yes', 'no', 0),
(18, 3, 1, 8, 'UP185223', '2020-11-18 13:05:00', NULL, 'no', 'yes', 'no', 0),
(19, 3, 2, 1, '100', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(20, 3, 2, 2, '200', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'no', 'no', 0),
(21, 3, 2, 3, '12348800', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(22, 3, 2, 4, '12365500', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(23, 3, 2, 5, '12383300', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'yes', 'yes', 'no', 0),
(24, 3, 2, 6, NULL, NULL, NULL, 'no', 'no', 'no', 0),
(25, 3, 2, 7, NULL, NULL, NULL, 'no', 'no', 'no', 0),
(26, 3, 2, 8, NULL, NULL, NULL, 'no', 'no', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pre_booking_table`
--

CREATE TABLE `pre_booking_table` (
  `pre_book_id` int(11) NOT NULL,
  `lot_id` int(11) DEFAULT NULL,
  `booked_by` varchar(45) DEFAULT NULL,
  `book_start` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `total_lot_table`
--

CREATE TABLE `total_lot_table` (
  `total_lot_id` int(11) NOT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `floor_num` int(11) DEFAULT NULL,
  `total_lot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_lot_table`
--

INSERT INTO `total_lot_table` (`total_lot_id`, `bus_id`, `floor_num`, `total_lot`) VALUES
(1, NULL, 1, 9),
(2, NULL, 2, 15),
(3, NULL, 2, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_table`
--
ALTER TABLE `business_table`
  ADD PRIMARY KEY (`bus_id`),
  ADD KEY `bustype_id` (`bustype_id`);

--
-- Indexes for table `business_type`
--
ALTER TABLE `business_type`
  ADD PRIMARY KEY (`bustype_id`),
  ADD UNIQUE KEY `bustype_name` (`bustype_name`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `history_table`
--
ALTER TABLE `history_table`
  ADD PRIMARY KEY (`hist_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `parking_lot_table`
--
ALTER TABLE `parking_lot_table`
  ADD PRIMARY KEY (`lot_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `pre_booking_table`
--
ALTER TABLE `pre_booking_table`
  ADD PRIMARY KEY (`pre_book_id`),
  ADD KEY `lot_id` (`lot_id`);

--
-- Indexes for table `total_lot_table`
--
ALTER TABLE `total_lot_table`
  ADD PRIMARY KEY (`total_lot_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_table`
--
ALTER TABLE `business_table`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `history_table`
--
ALTER TABLE `history_table`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parking_lot_table`
--
ALTER TABLE `parking_lot_table`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pre_booking_table`
--
ALTER TABLE `pre_booking_table`
  MODIFY `pre_book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `total_lot_table`
--
ALTER TABLE `total_lot_table`
  MODIFY `total_lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD CONSTRAINT `employee_table_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `business_table` (`bus_id`);

--
-- Constraints for table `history_table`
--
ALTER TABLE `history_table`
  ADD CONSTRAINT `history_table_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `business_table` (`bus_id`);

--
-- Constraints for table `parking_lot_table`
--
ALTER TABLE `parking_lot_table`
  ADD CONSTRAINT `parking_lot_table_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `business_table` (`bus_id`);

--
-- Constraints for table `pre_booking_table`
--
ALTER TABLE `pre_booking_table`
  ADD CONSTRAINT `pre_booking_table_ibfk_1` FOREIGN KEY (`lot_id`) REFERENCES `parking_lot_table` (`lot_id`);

--
-- Constraints for table `total_lot_table`
--
ALTER TABLE `total_lot_table`
  ADD CONSTRAINT `total_lot_table_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `business_table` (`bus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
