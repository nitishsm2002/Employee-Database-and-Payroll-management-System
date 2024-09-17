-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 05:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, '1604071', '12345'),
(2, '1604070', 'montu');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Depart_id` int(11) NOT NULL,
  `Depart_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Depart_id`, `Depart_name`) VALUES
(108, 'codsection'),
(109, 'ise'),
(2005, 'ece');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone_no` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Start_date` date NOT NULL,
  `d_birth` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `loan` float NOT NULL,
  `pfund` float NOT NULL,
  `salary` float NOT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `Depart_id` int(11) NOT NULL,
  `managesDepart_id` int(11) NOT NULL,
  `b_accno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `Name`, `Address`, `Phone_no`, `Email`, `Start_date`, `d_birth`, `gender`, `loan`, `pfund`, `salary`, `jobtitle`, `Depart_id`, `managesDepart_id`, `b_accno`) VALUES
(100, 'hanumanthayya', 'raichur', '7899517043', 'abc@gmail.com', '2022-01-27', '2000-11-04', 'male', 0, 2500, 50000, 'executive', 108, 108, 123456789),
(102, 'ARUNA B', ' davangere', '7899517012', 'arunab978@gmail.com', '2022-01-28', '2001-03-15', 'male', 0, 0, 100000, 'manager', 108, 108, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_no` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `accno` int(20) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `absence` int(11) NOT NULL,
  `loan_cut` float NOT NULL,
  `pfund_cut` float NOT NULL,
  `overtime` float NOT NULL,
  `season_bonus` float NOT NULL,
  `other_bonus` float NOT NULL,
  `medi_allow` float NOT NULL,
  `house_allow` float NOT NULL,
  `total_pay` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_no`, `emp_id`, `name`, `accno`, `year`, `month`, `absence`, `loan_cut`, `pfund_cut`, `overtime`, `season_bonus`, `other_bonus`, `medi_allow`, `house_allow`, `total_pay`) VALUES
(1, '160403', '', 0, 2018, 'december', 2, 0, 0, 6, 2000, 0, 0, 0, 3400),
(2, '1604023', 'Rukon', 236954128, 2018, 'december', 2, 0, 1000, 6, 2000, 0, 1200, 3200, 46800),
(3, '100', 'hanumanthayya', 123456789, 2021, 'november', 2, 0, 2500, 10, 1000, 1500, 3000, 8000, 113600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Depart_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_id`),
  ADD KEY `Depart_id` (`Depart_id`),
  ADD KEY `managesDepart_id` (`managesDepart_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Depart_id`) REFERENCES `department` (`Depart_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`managesDepart_id`) REFERENCES `department` (`Depart_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
