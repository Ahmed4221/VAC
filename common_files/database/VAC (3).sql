-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2020 at 02:04 PM
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
('Uzair', 'rizwan', 'ahmed@abc.com', '1234'),
('Uzair', 'rizwan', 'mufti@abc.com', 'mufti');

-- --------------------------------------------------------

--
-- Table structure for table `DescriptionOptions`
--

CREATE TABLE `DescriptionOptions` (
  `Barcode` varchar(150) NOT NULL,
  `VendorName` varchar(300) NOT NULL,
  `Description_added` varchar(1000) NOT NULL,
  `SubmissionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DescriptionOptions`
--

INSERT INTO `DescriptionOptions` (`Barcode`, `VendorName`, `Description_added`, `SubmissionId`) VALUES
('765', 'ahmed@gmail.com', 'bhai jaan akheer product hae', 1),
('765', 'h@h.com', 'ye to very nice product hae, ye to meri pasand ka product hae', 4);

-- --------------------------------------------------------

--
-- Table structure for table `PictureOptions`
--

CREATE TABLE `PictureOptions` (
  `Barcode` varchar(150) NOT NULL,
  `VendorName` varchar(300) NOT NULL,
  `Picture` varchar(300) NOT NULL,
  `SubmissionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PictureOptions`
--

INSERT INTO `PictureOptions` (`Barcode`, `VendorName`, `Picture`, `SubmissionId`) VALUES
('765', 'ahmed@gmail.com', '/opt/lampp/htdocs/Freelance/vendor_module/products/ahmed@gmail.com_Product_765_index.png', 1),
('765', 'h@h.com', '/opt/lampp/htdocs/Freelance/vendor_module/products/h@h.com_Product_765_1530253344_IMG_577598.jpg', 4);

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
  `Unit` varchar(12) NOT NULL,
  `Approved` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Barcode`, `ImagePath`, `Product_Category`, `productSubCategory`, `Product_Name`, `Brand_Name`, `Description`, `Unit`, `Approved`) VALUES
('1111', 'BulkImage', '-', '-', 'popo', 'popo', 'popo', '4', '0'),
('333', 'BulkImage', '-', '-', 'popo', 'popo', 'popo', '4', '0'),
('765', '/opt/lampp/htdocs/Freelance/vendor_module/products/h@h.com_Product_765_1530253344_IMG_577598.jpg', 'Condiments', 'Artificial Sweeteners', 'Noodles', 'kolson', 'ye to very nice product hae, ye to meri pasand ka product hae', 'Lt', '1');

-- --------------------------------------------------------

--
-- Table structure for table `SaleOnProducts`
--

CREATE TABLE `SaleOnProducts` (
  `Vendor_id` varchar(300) NOT NULL,
  `Barcode` varchar(150) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `DiscountPercentage` int(11) NOT NULL,
  `Approved` int(11) NOT NULL,
  `SaleID` int(11) NOT NULL,
  `UpdatedAmount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('ahmed@abc.com', '1234', 'Client'),
('ahmed@admin.com', 'admin', 'admin'),
('ahmed@gmail.com', 'admin', 'vendor'),
('h@h.com', 'hussain', 'vendor'),
('mufti@abc.com', 'mufti', 'Client');

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
('Haji Yousuf', 'ahmed@gmail.com', 'admin', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/ahmed@gmail.com_TradeLisence_Untitled.jpg', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/ahmed@gmail.com_VAT_Untitled(2).jpg', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/ahmed@gmail.com_PASSPORT_sat.jpg', 1),
('hussain', 'h@h.com', 'hussain', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/h@h.com_TradeLisence_Screenshot_from_2020-03-27_12-29-25.png', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/h@h.com_VAT_Screenshot_from_2020-04-06_20-03-52.png', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/h@h.com_PASSPORT_Screenshot_from_2020-06-17_22-58-59.png', 1),
('sheikh', 'sheikh@vendor.com', 'vendor', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/sheikh@vendor.com_TradeLisence_Screenshot_from_2020-03-20_17-54-42.png', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/sheikh@vendor.com_VAT_Screenshot_from_2020-05-11_16-22-26.png', '/opt/lampp/htdocs/Freelance/vendor_module/uploads/sheikh@vendor.com_PASSPORT_Screenshot_from_2020-08-08_14-21-29.png', -1);

-- --------------------------------------------------------

--
-- Table structure for table `VendorFeedback`
--

CREATE TABLE `VendorFeedback` (
  `CaseID` int(11) NOT NULL,
  `VendorID` varchar(200) NOT NULL,
  `SuggestedEdit` varchar(500) NOT NULL,
  `Resolved` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `VendorProductFeedback`
--

CREATE TABLE `VendorProductFeedback` (
  `CaseID` int(11) NOT NULL,
  `Barcode` varchar(150) NOT NULL,
  `VendorID` varchar(150) NOT NULL,
  `Suggestion` varchar(10000) NOT NULL,
  `Resolved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `VendorProductFeedback`
--

INSERT INTO `VendorProductFeedback` (`CaseID`, `Barcode`, `VendorID`, `Suggestion`, `Resolved`) VALUES
(3, '333', 'ahmed@gmail.com', 'bhai jaan gheyrat ki goli khao', 1);

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
('333', 4, 66, 6, 4, 666, 66, 66, 'America', 'Export', 'ahmed@gmail.com', 0),
('765', 66, 6, 6, 6, 6, 6, 6, 'America', 'Export', 'ahmed@gmail.com', 1),
('765', 88, 88, 8, 8, 8, 8, 8, 'Europe', 'UAE', 'h@h.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `DescriptionOptions`
--
ALTER TABLE `DescriptionOptions`
  ADD PRIMARY KEY (`SubmissionId`);

--
-- Indexes for table `PictureOptions`
--
ALTER TABLE `PictureOptions`
  ADD PRIMARY KEY (`SubmissionId`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Barcode`);

--
-- Indexes for table `SaleOnProducts`
--
ALTER TABLE `SaleOnProducts`
  ADD PRIMARY KEY (`SaleID`);

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
-- Indexes for table `VendorFeedback`
--
ALTER TABLE `VendorFeedback`
  ADD PRIMARY KEY (`CaseID`);

--
-- Indexes for table `VendorProductFeedback`
--
ALTER TABLE `VendorProductFeedback`
  ADD PRIMARY KEY (`CaseID`);

--
-- Indexes for table `Vendors_Products`
--
ALTER TABLE `Vendors_Products`
  ADD PRIMARY KEY (`Barcode`,`Vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DescriptionOptions`
--
ALTER TABLE `DescriptionOptions`
  MODIFY `SubmissionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `PictureOptions`
--
ALTER TABLE `PictureOptions`
  MODIFY `SubmissionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `SaleOnProducts`
--
ALTER TABLE `SaleOnProducts`
  MODIFY `SaleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `VendorFeedback`
--
ALTER TABLE `VendorFeedback`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `VendorProductFeedback`
--
ALTER TABLE `VendorProductFeedback`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
