-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 10:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `staffID` int(30) NOT NULL,
  `clientID` int(11) NOT NULL,
  `exportDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `staffID`, `clientID`, `exportDate`) VALUES
(1, 1, 1, '2022-06-10'),
(2, 2, 2, '2022-08-10'),
(3, 3, 3, '2022-02-10'),
(4, 2, 4, '2022-04-10'),
(5, 3, 5, '2022-09-10'),
(6, 1, 6, '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `address`, `phone`) VALUES
(1, 'Bùi Bá Hồng', 'TPHCM', 909522702),
(2, 'Bùi Hoàng Lệ Diễm', 'TPHCM', 909522702),
(3, 'Bùi Duy Khương', 'TPHCM', 903734355),
(4, 'Bùi Kim Anh', 'HN', 989991211),
(5, 'Lương Anh Phụng', 'Hậu Giang', 909051951),
(6, 'Hoàng Trung Chính', 'CẦN THƠ', 909522702);

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(10) NOT NULL,
  `nameTB` varchar(30) NOT NULL,
  `parameter` varchar(255) NOT NULL,
  `typeCode` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `producerID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `nameTB`, `parameter`, `typeCode`, `price`, `supplierID`, `producerID`, `image`) VALUES
(252, 'redmi', 'redmi', 0, 110000, 0, 1, ' ./image/upload/redmi note 10.jpg'),
(253, 'redmi', 'redmi', 0, 110000, 0, 1, ' ./image/upload/redmi note 10.jpg'),
(256, 'redmi', 'redmi', 0, 110000, 1, 0, ' ./image/upload/redmi note 10.jpg'),
(257, 'redmi', 'redmi', 0, 110000, 1, 0, ' ./image/upload/redmi note 10.jpg'),
(258, 'redmi', 'redmi', 0, 110000, 1, 0, ' ./image/upload/redmi note 10.jpg'),
(259, 'redmi', 'redmi', 0, 110000, 1, 0, ' ./image/upload/redmi note 10.jpg'),
(263, 'nokia', 'không có', 3, 110000, 1, 1, ' ./image/upload/nokia.jpg'),
(264, 'iphone', '123', 2, 3000000, 2, 4, ' ./image/upload/iphone-11-pro-didongviet.jpg'),
(267, 'samsung', 'samsung', 1, 25000000, 3, 2, ' ./image/upload/samsung.jpn.jpeg'),
(268, 'Xiaomi Mi11T Pro', 'Xiaomi Mi11T Pro', 1, 22500000, 2, 6, ' ./image/upload/xiaomi-mi-11-pro.jpg'),
(270, 'Xiaomi Mi10T Pro', 'chưa có', 1, 500000, 0, 0, ' ./image/upload/xiaomi-mi-10t-600jpg-600x600.jpg'),
(271, 'Xiaomi Mi10T Pro', 'chưa có', 1, 500000, 0, 0, ' ./image/upload/xiaomi-mi-10t-600jpg-600x600.jpg'),
(273, 'xiaomi', '112', 1, 200000, 1, 1, ' ./image/upload/xiaomi-mi-10t-600jpg-600x600.jpg'),
(283, 'redmi', '123', 1, 2100000, 1, 1, ' ./image/upload/redmi note 10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `entercoupon`
--

CREATE TABLE `entercoupon` (
  `id` int(10) NOT NULL,
  `staffID` int(30) NOT NULL,
  `supplierID` int(10) NOT NULL,
  `dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entercoupon`
--

INSERT INTO `entercoupon` (`id`, `staffID`, `supplierID`, `dateAdded`) VALUES
(1, 1, 1, '2022-06-08'),
(2, 2, 2, '2022-06-30'),
(3, 3, 3, '2022-06-20'),
(4, 1, 2, '2022-06-30'),
(5, 4, 4, '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` int(11) NOT NULL,
  `nameSX` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `nameSX`, `nation`) VALUES
(1, 'Asus', 'Đài Loan'),
(2, 'Samsung', 'Hàn Quốc'),
(3, 'LG', 'Hàn Quốc'),
(4, 'Apple', 'Mỹ'),
(5, 'Panasonic', 'Nhật Bản'),
(6, 'Xiaomi', 'Trung Quốc'),
(7, 'Lenovo', 'Trung Quốc'),
(8, 'Viettel', 'Việt Nam');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `birthday`, `phone`) VALUES
(1, 'Đoàn Bá Thước', '2022-06-01', 915348926),
(2, 'Hồ Thị Thanh Nguyên', '2022-06-02', 985611888),
(3, 'Lê Đức Dũng', '2022-06-04', 913863395),
(4, 'Mai Văn Quỳnh', '2022-07-04', 912637399);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nameCC` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nameCC`, `address`, `phone`) VALUES
(1, 'Công Ty TNHH TSmobile', 'Hà Nội', 24224137),
(2, 'Công Ty TNHH Một THành Viên Thương Mại Và Dịch Vụ LIFECOM', 'Quảng Trị', 23336705),
(3, ' Công Ty TNHH Thế Giới Di Động', 'Tp. Hồ Chí Minh', 2835100),
(4, ' Công Ty TNHH Tin Học Mai Phương', 'Đồng Nai', 2516290);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `unit`, `note`) VALUES
(1, 'Android', 'cái', 'chưa cập nhật'),
(2, 'IOS\r\n', 'cái', 'chưa cập nhật'),
(3, 'Điện thoại phổ thông', 'cái', 'chưa cập nhật');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'vinh', 'vinh@gmail.com', '123'),
(2, 'vinh1', 'vinh1@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientID` (`clientID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplierID` (`supplierID`),
  ADD KEY `producerID` (`producerID`);

--
-- Indexes for table `entercoupon`
--
ALTER TABLE `entercoupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffID` (`staffID`),
  ADD KEY `supplierID` (`supplierID`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `entercoupon`
--
ALTER TABLE `entercoupon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `staff` (`id`);

--
-- Constraints for table `entercoupon`
--
ALTER TABLE `entercoupon`
  ADD CONSTRAINT `entercoupon_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `entercoupon_ibfk_2` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
