-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 07:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` int(50) NOT NULL,
  `C_Name` varchar(250) NOT NULL,
  `C_Mail` varchar(250) NOT NULL,
  `C_Phone` varchar(250) NOT NULL,
  `C_Password` varchar(250) NOT NULL,
  `C_image` varchar(250) NOT NULL,
  `C_Status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_Name`, `C_Mail`, `C_Phone`, `C_Password`, `C_image`, `C_Status`) VALUES
(1, 'azhar', 'az@gmail.com', '01439012', '123456', '1622652469boy1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `R_ID` int(50) NOT NULL,
  `R_Name` varchar(250) NOT NULL,
  `R_Password` varchar(250) NOT NULL,
  `R_Mail` varchar(250) NOT NULL,
  `R_Phone` varchar(250) NOT NULL,
  `R_LicienseNo` varchar(250) NOT NULL,
  `R_Address` varchar(250) NOT NULL,
  `R_image` varchar(250) NOT NULL,
  `R_AccStatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`R_ID`, `R_Name`, `R_Password`, `R_Mail`, `R_Phone`, `R_LicienseNo`, `R_Address`, `R_image`, `R_AccStatus`) VALUES
(5, 'albin', '123456', 'al@gmail.com', '01982019', 'S345678', 'No 11, Taman Perdana, Kuantan', '1622652935boy5.png', ''),
(6, 'Danial', '12345', 'd@gmail.com', '01809012', 'A1122', 'No 2 Taman Bukit Setongol Kuantan', '1622654121boy3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `S_ID` int(50) NOT NULL,
  `S_Name` varchar(250) NOT NULL,
  `S_Password` varchar(250) NOT NULL,
  `S_Mail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`S_ID`, `S_Name`, `S_Password`, `S_Mail`) VALUES
(1, 'nv', '122', 'nv@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rider`
--
ALTER TABLE `rider`
  MODIFY `R_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `S_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
