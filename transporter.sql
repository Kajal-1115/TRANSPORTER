-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 03:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transporter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sl_no` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl_no`, `user_id`, `password`, `first_name`, `last_name`, `date_of_birth`, `e_mail`, `mobile_number`, `photo`) VALUES
(1, 'kajalrtc', 'kkk', 'Kajal', 'Kumari', '11th-Feb-2000', 'kajalrtc@gmail.com', 9709255248, 'Kajal-Pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bid_no` int(11) NOT NULL,
  `consignment_no` int(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `higest_price` varchar(200) NOT NULL,
  `e_mail` varchar(200) NOT NULL,
  `type_of_transport` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date_of_delivery` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_no`, `consignment_no`, `username`, `name`, `higest_price`, `e_mail`, `type_of_transport`, `description`, `date_of_delivery`, `mobile_no`, `status`) VALUES
(2, 1, 'sa', 'asxsz', 'sadx', 'asx@gmail.com', 'sadc', 'sdx,sszdc', '2021-07-30', '8340202996', ''),
(3, 1, 'sa', 'asxsz', 'sadx', 'asx@gmail.com', 'sadc', 'sdx,sszdc', '2021-07-30', '8340202996', ''),
(4, 1, 'sa', 'asxsz', 'sadx', 'asx@gmail.com', 'sadc', 'sdx,sszdc', '2021-07-30', '8340202996', ''),
(5, 1, 'sa', 'asxsz', 'sadx', 'asx@gmail.com', 'sadc', 'sdx,sszdc', '2021-07-30', '8340202996', ''),
(6, 1, 'sa', 'asxsz', 'sadx', 'asx@gmail.com', 'sadc', 'sdx,sszdc', '2021-07-30', '8340202996', ''),
(7, 1, 'sa', 'asxsz', 'sadx', 'asx@gmail.com', 'sadc', 'sdx,sszdc', '2021-07-30', '8340202996', '');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `sl_no` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `present_state` varchar(20) NOT NULL,
  `present_dist` varchar(20) NOT NULL,
  `present_address` varchar(50) NOT NULL,
  `present_pin` int(11) NOT NULL,
  `permanent_state` varchar(20) NOT NULL,
  `permanent_dist` varchar(20) NOT NULL,
  `permanent_address` varchar(20) NOT NULL,
  `permanent_pin` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `language1` varchar(20) NOT NULL,
  `read1` varchar(20) NOT NULL,
  `write1` varchar(20) NOT NULL,
  `speak1` varchar(20) NOT NULL,
  `language2` varchar(20) NOT NULL,
  `read2` varchar(20) NOT NULL,
  `write2` varchar(20) NOT NULL,
  `speak2` varchar(20) NOT NULL,
  `language3` varchar(20) NOT NULL,
  `read3` varchar(20) NOT NULL,
  `write3` varchar(20) NOT NULL,
  `speak3` varchar(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `company_registration` varchar(50) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `company_pin` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `signature` varchar(100) NOT NULL,
  `id_proof` varchar(100) NOT NULL,
  `address_proof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`sl_no`, `user_name`, `password`, `type`, `name`, `fathers_name`, `birth`, `gender`, `nationality`, `present_state`, `present_dist`, `present_address`, `present_pin`, `permanent_state`, `permanent_dist`, `permanent_address`, `permanent_pin`, `mobile`, `email`, `language1`, `read1`, `write1`, `speak1`, `language2`, `read2`, `write2`, `speak2`, `language3`, `read3`, `write3`, `speak3`, `uid`, `company_registration`, `company_address`, `company_pin`, `photo`, `signature`, `id_proof`, `address_proof`) VALUES
(1, 'kajalrtc', 'Kumari', 'CLIENT', 'Kajal Kumari', 'Santosh Kumar', '1998-10-11', 'Female', 'Indian', 'Jharkhand', 'Ranchi', 'Ormanjhi', 835219, 'Jharkhand', 'Garhwa', 'Manjhiaon', 822114, 8340202996, 'kajalrtc@gmail.com', 'English', 'Read', 'Write', 'Speak', 'Hindi', 'Read', 'Write', 'Speak', 'Bhojpuri', 'Read', 'write', 'Speak', 329351289193, 'MCA-2012-2015', 'Ranchi', 835219, 'Kajal.png', 'Kajal.png', 'Kajal.png', 'Kajal.png'),
(2, 'alina', 'naz', 'CLIENT', 'Alina Naz', 'Md.Nesar', '2000-05-05', 'Female', 'Indian', 'Jharkhand', 'Ranchi', 'Muri', 834005, 'Bihaar', 'Bhojpur', 'DHOBARI', 822201, 9504987258, 'alina16ps@gmail.com', 'English', 'Read', 'Write', 'Speak', 'Hindi', 'Read', 'Write', 'Speak', 'Bhojpuri', 'Read', 'write', 'Speak', 682685265256, 'MCA-2012-2015', 'Ranchi', 834001, 'Alina.jpg', 'Kajal.png', 'register.png', 'Kajal.png');

-- --------------------------------------------------------

--
-- Table structure for table `client_company`
--

CREATE TABLE `client_company` (
  `user_name` varchar(200) NOT NULL,
  `company_registration` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `company_pin` varchar(200) NOT NULL,
  `id_proof` varchar(200) NOT NULL,
  `address_proof` varchar(200) NOT NULL,
  `passport_photo` varchar(200) NOT NULL,
  `signature` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `compalin_no` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consignment`
--

CREATE TABLE `consignment` (
  `consignment_no` int(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `type_cons` varchar(50) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `base_price` varchar(11) NOT NULL,
  `date_of_delivery` varchar(20) NOT NULL,
  `place_of_delivery` varchar(20) NOT NULL,
  `delivery_report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consignment`
--

INSERT INTO `consignment` (`consignment_no`, `user_name`, `type_cons`, `weight`, `description`, `base_price`, `date_of_delivery`, `place_of_delivery`, `delivery_report`) VALUES
(1, 'kajalrtc', 'Computer Goods', '2000 KG', 'cpu monitor etc', '15000', '2015-04-06', 'Kanke Semar Toli', ''),
(2, 'alina', 'Electronics Goods', '5000 KG', 'All Electronics Goods', '20000', '12-04-2015', 'Piska More', ''),
(3, 'suresh', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '[value-9]');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `notice` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`notice`) VALUES
('1.Kajal Kumari\r\n2.School\r\n3.Happy\r\n4.College');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notific` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notific`) VALUES
('CS01');

-- --------------------------------------------------------

--
-- Table structure for table `tranporter_vehicle`
--

CREATE TABLE `tranporter_vehicle` (
  `vehcile_no` varchar(200) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `license` varchar(200) NOT NULL,
  `id_proof` varchar(200) NOT NULL,
  `driving_license` varchar(200) NOT NULL,
  `owner_book` varchar(200) NOT NULL,
  `passport_photo` varchar(200) NOT NULL,
  `signature` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tranporter_vehicle`
--

INSERT INTO `tranporter_vehicle` (`vehcile_no`, `e_mail`, `license`, `id_proof`, `driving_license`, `owner_book`, `passport_photo`, `signature`) VALUES
('sdfs', 'kajalrtc1998@gmail.com', 'sdfsf', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transporter_owner`
--

CREATE TABLE `transporter_owner` (
  `sl_no` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `present_state` varchar(20) NOT NULL,
  `present_dist` varchar(20) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `present_pin` int(11) NOT NULL,
  `permanent_state` varchar(20) NOT NULL,
  `permanent_dist` varchar(20) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `permanent_pin` int(11) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `language1` varchar(20) NOT NULL,
  `read1` varchar(20) NOT NULL,
  `write1` varchar(20) NOT NULL,
  `speak1` varchar(20) NOT NULL,
  `language2` varchar(30) NOT NULL,
  `read2` varchar(20) NOT NULL,
  `write2` varchar(20) NOT NULL,
  `speak2` varchar(20) NOT NULL,
  `language3` varchar(30) NOT NULL,
  `read3` varchar(20) NOT NULL,
  `write3` varchar(20) NOT NULL,
  `speak3` varchar(20) NOT NULL,
  `uid_number` int(20) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL,
  `driving_licence_no` varchar(15) NOT NULL,
  `passport_photo` varchar(30) NOT NULL,
  `signature` varchar(30) NOT NULL,
  `id_proof` varchar(30) NOT NULL,
  `driving_licence` varchar(30) NOT NULL,
  `vehicle_owner_book` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transporter_owner`
--

INSERT INTO `transporter_owner` (`sl_no`, `user_name`, `password`, `type`, `name`, `f_name`, `birth`, `gender`, `nationality`, `present_state`, `present_dist`, `present_address`, `present_pin`, `permanent_state`, `permanent_dist`, `permanent_address`, `permanent_pin`, `mobile_no`, `e_mail`, `language1`, `read1`, `write1`, `speak1`, `language2`, `read2`, `write2`, `speak2`, `language3`, `read3`, `write3`, `speak3`, `uid_number`, `vehicle_number`, `driving_licence_no`, `passport_photo`, `signature`, `id_proof`, `driving_licence`, `vehicle_owner_book`) VALUES
(1, 'kajalrtc', 'kkk', 'TRANSPORTER', 'Kajal Kumari', 'Santosh Kumar', '1998-11-10', 'Male', 'Indian', 'Jharkhand', 'Ranchi', 'Ormanjhi', 835219, 'Jharkhand', 'Ranchi', 'CHUTIA', 834001, 9504987258, 'kajalrtc@gmail.com', 'English', 'Read', 'Write', 'Speak', 'Hindi', 'Read', 'Write', 'Speak', 'Bhojpuri', 'Read', 'write', 'Speak', 2147483647, 'JH-01Y-5616', ' 253654', 'Kajal.png', 'Kajal.png', 'Kajal.png', 'Kajal.png', 'Kajal.png'),
(2, 'sa', 'saif', 'TRANSPORTER', 'Saif Ali', 'Jamal Ansari', '1999-11-21', 'Male', 'INDIAN', 'Indian', 'Jharkhand', 'Bhundu', 835204, 'Jharkhand', 'Ranchi', 'Bhundu', 835204, 8877141606, 'starsaifali4@gmail.com', 'ENGLISH', 'Read', 'Write', 'Speak', 'HINDI', 'Read', 'Write', 'Speak', 'Bhojpuri', 'Read', 'write', 'Speak', 21474647, '45152', '5226', 'Saif.jpeg', 'Saif.jpeg', 'Saif.jpeg', 'Saif.jpeg', 'Saif.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_password`
--

CREATE TABLE `user_password` (
  `sl_no` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `e_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_password`
--

INSERT INTO `user_password` (`sl_no`, `user_name`, `password`, `e_mail`) VALUES
(1, 'kajalrtc', 'kkk', 'kajalrtc@gmail.com'),
(2, 'sa', 'saif', 'starsaifali4@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bid_no`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`sl_no`),
  ADD UNIQUE KEY `user_id` (`user_name`),
  ADD UNIQUE KEY `sl_no` (`sl_no`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `photo` (`photo`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `company_pin` (`company_pin`);

--
-- Indexes for table `client_company`
--
ALTER TABLE `client_company`
  ADD PRIMARY KEY (`company_pin`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`compalin_no`);

--
-- Indexes for table `consignment`
--
ALTER TABLE `consignment`
  ADD PRIMARY KEY (`consignment_no`);

--
-- Indexes for table `tranporter_vehicle`
--
ALTER TABLE `tranporter_vehicle`
  ADD PRIMARY KEY (`vehcile_no`);

--
-- Indexes for table `transporter_owner`
--
ALTER TABLE `transporter_owner`
  ADD PRIMARY KEY (`sl_no`),
  ADD UNIQUE KEY `sl_no` (`sl_no`),
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `vehicle_number` (`vehicle_number`),
  ADD UNIQUE KEY `uid_number` (`uid_number`);

--
-- Indexes for table `user_password`
--
ALTER TABLE `user_password`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bid_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `compalin_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consignment`
--
ALTER TABLE `consignment`
  MODIFY `consignment_no` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transporter_owner`
--
ALTER TABLE `transporter_owner`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_password`
--
ALTER TABLE `user_password`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
