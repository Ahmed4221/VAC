-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 10:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `VAC`
--

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `FirstName` varchar(300) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`FirstName`, `LastName`, `Email`, `Password`) VALUES
('dada', 'dada', 'dad1a@dada.com', 'asasas'),
('dada', 'dada', 'dada@dada.com', 'dada'),
('hafiz', 'gandu', 'ha111fiz@gandu.com', 'asas'),
('hafiz', 'gandu', 'hafiz@ga1ndsu.com', 'sasasa'),
('hafiz', 'gandu', 'hafiz@ga1ndu.com', 'asasassaasasasasa'),
('hafiz', 'gandu', 'hafiz@gandu.com', 'asasa'),
('hafiz', 'gandu', 'hafiz@gandurrrrrrrrrrr.com', 'cdcdc'),
('hafiz', 'dada', 'hafizaaaa@gandu.com', 'sasasa');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Email` varchar(300) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `UserType` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Email`, `Password`, `UserType`) VALUES
('ahmedabdullah64221@gmail.com', 'admin', 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `Vendor`
--

CREATE TABLE `Vendor` (
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Trade_Lisence` varchar(200) NOT NULL,
  `VATForm` varchar(200) NOT NULL,
  `Passport/Emirateid` varchar(200) NOT NULL,
  `Approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Vendor`
--

INSERT INTO `Vendor` (`Name`, `Email`, `Password`, `Trade_Lisence`, `VATForm`, `Passport/Emirateid`, `Approved`) VALUES
('sherlock', 'sherlock@gmail.com', 'hello', '/opt/lampp/htdocs/Freelance/uploads/sherlock@gmail.com_TradeLisence_Screenshot from 2020-01-16 15-24-05.png', '/opt/lampp/htdocs/Freelance/uploads/sherlock@gmail.com_VAT_Screenshot from 2020-02-17 11-45-02.png', '/opt/lampp/htdocs/Freelance/uploads/sherlock@gmail.com_PASSPORT_Screenshot from 2020-03-26 23-05-47.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `Vendor`
--
ALTER TABLE `Vendor`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
