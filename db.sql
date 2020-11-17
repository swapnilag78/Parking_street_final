-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 06:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create database db;
use db;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `ad_id` int(11) NOT NULL,
  `ad_username` varchar(45) DEFAULT NULL,
  `ad_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`ad_id`, `ad_username`, `ad_password`) VALUES
(1, 'admin1', 'password1'),
(2, 'admin2', 'password2'),
(3, 'admin3', 'password3');

-- --------------------------------------------------------

--
-- Table structure for table `business_table`
--

CREATE TABLE `business_table` (
  `bus_id` int(11) NOT NULL,
  `bus_name` varchar(45) DEFAULT NULL,
  `bus_address` varchar(45) DEFAULT NULL,
  `bus_contact_num` varchar(45) DEFAULT NULL,
  `bus_email` varchar(45) DEFAULT NULL,
  `admin_username` varchar(45) DEFAULT NULL,
  `admin_password` varchar(45) DEFAULT NULL,
  `bus_valet` varchar(45) DEFAULT NULL,
  `verified` varchar(45) DEFAULT NULL,
  `parking_rate` int(11) DEFAULT NULL,
  `bus_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_table`
--

INSERT INTO `business_table` (`bus_id`, `bus_name`, `bus_address`, `bus_contact_num`, `bus_email`, `admin_username`, `admin_password`, `bus_valet`, `verified`, `parking_rate`, `bus_type`) VALUES
(1, 'testing_2', 'LIG 219\r\nGOVINDPUR, NEAR GOVINDPUR POLICE CHO', '32423423423', 'test@gmail.com', 'test@1', 'test@123', 'on', NULL, NULL, 1);

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
  `cust_vehicle_num2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`cust_id`, `cust_username`, `cust_password`, `cust_email`, `cust_contact_num`, `cust_vehicle_num1`, `cust_vehicle_num2`) VALUES
(1, 'demo@2', 'f702c1502be8e55f4208d69419f50d0a', 'test@gmail.com', 2147483647, '3230-32323-3223', NULL),
(2, 'swapnil@1', 'b39a5005f03f16e882a911cd34f86043', 'swapnil@gmail.com', 2147483647, '3230-32323-3223', NULL),
(3, 'swapnil@2', 'swapnil', 'E19CSE233@denked.com', 2147483647, '3230-32323-3223', NULL),
(4, 'demo@3', 'demo@123', 'test@gmail.com', 2147483647, '3230-32323-3223', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `emp_id` int(11) NOT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `emp_name` varchar(45) DEFAULT NULL,
  `emp_username` varchar(45) DEFAULT NULL,
  `emp_email` varchar(45) DEFAULT NULL,
  `emp_password` varchar(45) DEFAULT NULL,
  `emp_contact_num` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`emp_id`, `bus_id`, `emp_name`, `emp_username`, `emp_email`, `emp_password`, `emp_contact_num`) VALUES
(2, 1, 'employee 2', 'emp_2', 'bablu@gmail.com', 'swapnil@12', '4363657686');

-- --------------------------------------------------------

--
-- Table structure for table `history_table`
--

CREATE TABLE `history_table` (
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
(1, 1, 1, 1, '2133123', NULL, NULL, 'yes', 'yes', 'no', 0),
(2, 1, 1, 2, '42342', NULL, NULL, 'yes', 'yes', 'no', 1),
(3, 1, 1, 3, '3423', NULL, NULL, 'yes', 'yes', 'no', 0),
(4, 1, 1, 4, '31231', NULL, NULL, 'yes', 'yes', 'no', 0),
(5, 1, 1, 5, '1312', NULL, NULL, 'yes', 'no', 'no', 0);

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
(1, 1, 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `business_table`
--
ALTER TABLE `business_table`
  ADD PRIMARY KEY (`bus_id`);

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
  ADD PRIMARY KEY (`lot_id`),
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
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_table`
--
ALTER TABLE `business_table`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_table`
--
ALTER TABLE `history_table`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_lot_table`
--
ALTER TABLE `parking_lot_table`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pre_booking_table`
--
ALTER TABLE `pre_booking_table`
  MODIFY `pre_book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `total_lot_table`
--
ALTER TABLE `total_lot_table`
  MODIFY `total_lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
