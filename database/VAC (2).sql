-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2020 at 01:39 PM
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
('', '', '', ''),
('hafiz', 'gandu', 'a@b.c', '111111111'),
('Ahmed', 'Abdullah', 'ahmed@abdullah.com', '12345'),
('dada', 'dada', 'dad1a@dada.com', 'asasas'),
('dada', 'dada', 'dada@dada.com', 'dada'),
('hafiz', 'Abdullah', 'dadaa@dada.com', '1122'),
('hafiz', 'gandu', 'ha111fiz@gandu.com', 'asas'),
('hafiz', 'gandu', 'hafiz@ga1ndsu.com', 'sasasa'),
('hafiz', 'gandu', 'hafiz@ga1ndu.com', 'asasassaasasasasa'),
('hafiz', 'gandu', 'hafiz@gandu.com', 'asasa'),
('hafiz', 'gandu', 'hafiz@gandurrrrrrrrrrr.com', 'cdcdc'),
('hafiz', 'dada', 'hafizaaaa@gandu.com', 'sasasa');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Barcode` varchar(300) NOT NULL,
  `ImagePath` varchar(300) NOT NULL,
  `Product_Category` varchar(300) NOT NULL,
  `productSubCategory` varchar(150) NOT NULL,
  `Product_Name` varchar(300) NOT NULL,
  `Brand_Name` varchar(300) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Unit` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Barcode`, `ImagePath`, `Product_Category`, `productSubCategory`, `Product_Name`, `Brand_Name`, `Description`, `Unit`) VALUES
('62', 'BulkImage', 'Bevrages', 'softdrink', 'dada', 'ACHA', 'na leyna ye wala', 'kg'),
('69', 'BulkImage', 'Bevrages', 'softdrink', 'popo', 'ACHA', 'ye leylo', 'kg'),
('888', '/opt/lampp/htdocs/Freelance/products/ahmedabdullah64221@gmail.com_Product_888_Screenshot from 2020-01-16 15-24-05.png', 'Condiments', 'Spices', 'acha dalda', 'dalda', 'asasa', 'Lt');

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
('a@b.c', '111111111', 'Client'),
('ahmedabdullah64221@gmail.com', 'admin', 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `Value_Metrics`
--

CREATE TABLE `Value_Metrics` (
  `ValueName` varchar(21) NOT NULL,
  `Symbol` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Value_Metrics`
--

INSERT INTO `Value_Metrics` (`ValueName`, `Symbol`) VALUES
('Kilogram', 'Kg'),
('Litre', 'Lt');

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
('sherlock', 'sherlock@gmail.com', 'hello', '/opt/lampp/htdocs/Freelance/uploads/sherlock@gmail.com_TradeLisence_Screenshot from 2020-01-16 15-24-05.png', '/opt/lampp/htdocs/Freelance/uploads/sherlock@gmail.com_VAT_Screenshot from 2020-02-17 11-45-02.png', '/opt/lampp/htdocs/Freelance/uploads/sherlock@gmail.com_PASSPORT_Screenshot from 2020-03-26 23-05-47.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Vendors_Products`
--

CREATE TABLE `Vendors_Products` (
  `Barcode` varchar(300) NOT NULL,
  `price_per_ctn` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `per_ctn_quantity` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `product_region` varchar(200) NOT NULL,
  `UAE_ALL` varchar(11) NOT NULL,
  `Vendor_id` varchar(300) NOT NULL,
  `Approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Vendors_Products`
--

INSERT INTO `Vendors_Products` (`Barcode`, `price_per_ctn`, `weight`, `Quantity`, `per_ctn_quantity`, `length`, `width`, `height`, `product_region`, `UAE_ALL`, `Vendor_id`, `Approved`) VALUES
('62', 21, 22, 150, 21, 22, 22, 22, 'Africa', 'UAE', 'ahmedabdullah64221@gmail.com', 0),
('69', 21, 22, 16, 21, 22, 22, 22, 'Africa', 'UAE', 'ahmedabdullah64221@gmail.com', -1),
('888', 12, 8, 8, 8, 8, 8, 8, 'America', 'UAE', 'ahmedabdullah64221@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Barcode`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `Value_Metrics`
--
ALTER TABLE `Value_Metrics`
  ADD PRIMARY KEY (`ValueName`);

--
-- Indexes for table `Vendor`
--
ALTER TABLE `Vendor`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `Vendors_Products`
--
ALTER TABLE `Vendors_Products`
  ADD PRIMARY KEY (`Barcode`,`Vendor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
