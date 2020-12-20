-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 07:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoneworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'dung1999', '1999'),
(2, 'amazon', 'forest99'),
(3, 'thuan1999', '1999');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(1, 'Iphone'),
(2, 'Samsung'),
(3, 'Vsmart'),
(4, 'Xiaomi'),
(5, 'Oppo');

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(50) NOT NULL,
  `buyer_address` varchar(100) NOT NULL,
  `buyer_phone` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buy_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `Ram` int(11) NOT NULL,
  `Rom` int(11) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `Pin` int(11) NOT NULL,
  `SIM` varchar(50) NOT NULL,
  `best_seller` char(3) NOT NULL DEFAULT 'No',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `name`, `price`, `Ram`, `Rom`, `CPU`, `Pin`, `SIM`, `best_seller`, `image`) VALUES
(1, 1, 'Iphone 11 128GB', 21990000, 4, 64, 'Apple A13 Bionic 6 nhân', 3110, '1 Nano SIM & 1 eSim', 'Yes', 'uploads/Iphone 11 128GB3281.png'),
(2, 1, 'Iphone Xs Max 256GB', 30990000, 4, 256, 'Apple A12 Bionic 6 nhân', 3174, '1 Nano SIM & 1 eSim', 'Yes', 'uploads/Iphone Xs Max 256GB7.png'),
(3, 1, 'Iphone SE 256GB', 16990000, 3, 256, 'Apple A13 Bionic 6 nhân', 1821, '1 Nano SIM & 1 eSim', 'No', 'uploads/Iphone SE 256GB1580.png'),
(4, 2, 'Samsung Galaxy A21s ', 4690000, 3, 32, 'Exynos 850 8 nhân', 5000, '2 Nano SIM', 'Yes', 'uploads/Samsung Galaxy A21s 3GB_32GB1870.png'),
(5, 2, 'Samsung Galaxy S10 Lite ', 11990000, 8, 128, 'Snapdragon 855 8 nhân', 4500, '2 Nano SIM', 'No', 'uploads/Samsung Galaxy S10 Lite 8GB_128GB1335.jpg'),
(6, 2, 'Samsung Galaxy Z Flip', 36000000, 8, 256, 'Snapdragon 855+ 8 nhân', 3300, '1 Nano SIM & 1 eSim', 'No', 'uploads/Samsung Galaxy Z Flip2929.png'),
(7, 3, 'Vsmart Active 3 6GB_64GB', 3490000, 6, 64, 'MediaTek Helio P60 8 nhân', 4020, '2 Nano SIM', 'Yes', 'uploads/Vsmart Active 3 6GB_64GB2632.jpg'),
(8, 3, 'Vsmart Joy 3 4GB_64GB', 2990000, 4, 64, 'Snapdragon 632 8 nhân', 5000, '2 Nano SIM', 'No', 'uploads/Vsmart Joy 3 4GB_64GB2946.jpg'),
(9, 3, 'Vsmart Live 4GB_64GB', 4390000, 4, 64, 'Snapdragon 675 8 nhân', 4000, '2 Nano SIM', 'No', 'uploads/Vsmart Live 4GB_64GB1337.png'),
(14, 1, 'Iphone 8 Plus 128GB', 16590000, 3, 128, 'Apple A11 Bionic 6 nhân', 2691, '1 Nano SIM', 'No', 'uploads/Iphone 8 Plus 128GB2100.png'),
(15, 2, 'Samsung Galaxy S20 Ultra', 19990000, 12, 128, 'Exynos 990 8 nhân', 5000, '2 Nano SIM hoac 1 Nano SIM & 1 eSIM', 'Yes', 'uploads/Samsung Galaxy S20 Ultra1861.png'),
(16, 3, 'Vsmart Star 4 3GB_32GB', 2050000, 2, 32, 'MediaTek Helio P35 8 nhân', 3500, '2 Nano SIM', 'No', 'uploads/Vsmart Star 4 3GB_32GB1715.jpg'),
(17, 3, 'Vsmart Aris (6GB_64GB)', 5990000, 6, 64, 'Snapdragon 730 8 nhân', 4000, '2 Nano SIM', 'Yes', 'uploads/Vsmart Aris (6GB_64GB)970.jpg'),
(18, 4, 'Xiaomi Redmi 9', 3490000, 4, 64, 'MediaTek Helio G80 8 nhân', 5020, '2 Nano SIM', 'No', 'uploads/Xiaomi Redmi 92848.jpg'),
(30, 4, 'Xiaomi Mi 10T', 12990000, 8, 256, 'Snapdragon 865 8 nhân', 5000, '2 Nano SIM', 'No', 'uploads/Xiaomi Mi 10T939.jpg'),
(31, 4, 'Xiaomi POCO X3 NFC', 6690000, 6, 128, 'Snapdragon 732G 8 nhân', 5160, '2 Nano SIM', 'No', 'uploads/Xiaomi POCO X3 NFC1027.jpg'),
(32, 4, 'Xiaomi Redmi Note 8', 4490000, 4, 64, 'Snapdragon 665 8 nhân', 4000, '2 Nano SIM', 'No', 'uploads/Xiaomi Redmi Note 83997.jpg'),
(33, 4, 'Xiaomi Redmi 9C', 2490000, 2, 32, 'MediaTek Helio G35 8 nhân', 5000, '2 Nano SIM', 'No', 'uploads/Xiaomi Redmi 9C6.jpg'),
(34, 4, 'Xiaomi Redmi Note 9S', 5690000, 6, 128, 'Snapdragon 720G 8 nhân', 5020, '2 Nano SIM', 'No', 'uploads/Xiaomi Redmi Note 9S3586.jpg'),
(35, 5, 'OPPO Reno4', 8490000, 8, 128, 'Snapdragon 720G 8 nhân', 4015, '2 Nano SIM', 'No', 'uploads/OPPO Reno42253.jpg'),
(36, 5, 'OPPO Find X2', 19990000, 12, 256, 'Snapdragon 865 8 nhân', 4200, '2 Nano SIM', 'No', 'uploads/OPPO Find X21460.jpg'),
(37, 5, 'OPPO Reno3 Pro', 8490000, 8, 256, 'MediaTek Helio P95 8 nhân', 4025, '2 Nano SIM', 'No', 'uploads/OPPO Reno3 Pro2087.jpg'),
(38, 5, 'OPPO A92', 5990000, 8, 128, 'Snapdragon 665 8 nhân', 5000, '2 Nano SIM', 'No', 'uploads/OPPO A92382.jpg'),
(39, 5, 'OPPO A53', 4490000, 4, 128, 'Snapdragon 460 8 nhân', 5000, '2 Nano SIM', 'No', 'uploads/OPPO A531192.jpg'),
(40, 5, 'OPPO A15', 3490000, 3, 32, 'MediaTek Helio P35 8 nhân', 4230, '2 Nano SIM', 'No', 'uploads/OPPO A1589.jpg'),
(41, 5, 'OPPO A93', 7490000, 8, 128, 'MediaTek Helio P95 8 nhân', 4000, '2 Nano SIM', 'No', 'uploads/OPPO A931315.jpg'),
(42, 1, 'Iphone 12 Pro', 38990000, 6, 512, 'Apple A14 Bionic 6 nhân', 2815, '1 Nano SIM & 1 eSIM', 'No', 'uploads/Iphone 12 Pro2108.jpg'),
(43, 1, 'Iphone 11 Pro 256GB', 28990000, 4, 256, 'Apple A13 Bionic 6 nhân', 3046, 'Apple A13 Bionic 6 nhân', 'No', 'uploads/Iphone 11 Pro 256GB3805.jpg'),
(44, 1, 'Iphone 12 128GB', 25690000, 4, 128, 'Apple A14 Bionic 6 nhân', 2815, '1 Nano SIM & 1 eSIM', 'No', 'uploads/Iphone 12 128GB370.jpg'),
(45, 1, 'Iphone 12 mini', 21090000, 4, 128, 'Apple A14 Bionic 6 nhân', 2227, '1 Nano SIM & 1 eSIM', 'No', 'uploads/Iphone 12 mini1936.jpg'),
(46, 1, 'Iphone XS 64GB', 17490000, 4, 64, 'Apple A12 Bionic 6 nhân', 2658, '1 Nano SIM & 1 eSIM', 'No', 'uploads/Iphone XS 64GB3174.jpg'),
(47, 2, 'Galaxy Note 20 Ultra', 27990000, 8, 256, 'Exynos 990 8 nhân', 4500, '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM', 'No', 'uploads/Galaxy Note 20 Ultra3953.jpg'),
(48, 2, 'Galaxy Note 20 ', 21990000, 8, 256, 'Exynos 990 8 nhân', 4300, '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM', 'No', 'uploads/Galaxy Note 20 3270.jpg'),
(49, 2, 'Samsung Galaxy S20', 19490000, 8, 128, 'Exynos 990 8 nhân', 4000, '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM', 'No', 'uploads/Samsung Galaxy S2058.jpg'),
(50, 2, 'Galaxy Note 10+', 16490000, 12, 256, 'Exynos 9825 8 nhân', 4300, '2 Nano SIM (SIM 2 chung khe thẻ nhớ)', 'No', 'uploads/Galaxy Note 10+3693.jpg'),
(51, 2, 'Samsung Galaxy A70', 9290000, 6, 128, 'Snapdragon 675 8 nhân', 4500, '2 Nano SIM', 'No', 'uploads/Samsung Galaxy A703918.jpg'),
(52, 2, 'Samsung Galaxy A50s', 6990000, 4, 64, 'Exynos 9610 8 nhân', 4000, '2 Nano SIM', 'No', 'uploads/Samsung Galaxy A50s1981.jpg'),
(53, 2, 'Samsung Galaxy A30s', 6290000, 4, 64, 'Exynos 7904 8 nhân', 4000, '2 Nano SIM', 'No', 'uploads/Samsung Galaxy A30s735.jpg'),
(54, 3, 'Vsmart Live 4 6GB', 4590000, 6, 64, 'Snapdragon 675 8 nhân', 5000, '2 Nano SIM', 'No', 'uploads/Vsmart Live 4 6GB3310.jpg'),
(55, 3, 'Vsmart Aris Pro', 9990000, 8, 128, 'Snapdragon 730 8 nhân', 4000, '2 Nano SIM', 'No', 'uploads/Vsmart Aris Pro1445.jpg'),
(56, 3, 'Vsmart Bee 3', 1590000, 2, 16, 'MediaTek MT6739WW 4 nhân', 3000, '2 Nano SIM', 'No', 'uploads/Vsmart Bee 3114.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Wait'),
(2, 'Ordered');

-- --------------------------------------------------------

--
-- Table structure for table `tableorders`
--

CREATE TABLE `tableorders` (
  `id` int(11) NOT NULL,
  `cartitem_id` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableorders`
--
ALTER TABLE `tableorders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cartitem_id` (`cartitem_id`),
  ADD UNIQUE KEY `cartitem_id_2` (`cartitem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tableorders`
--
ALTER TABLE `tableorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `cartitem_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `cartitem_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);

--
-- Constraints for table `tableorders`
--
ALTER TABLE `tableorders`
  ADD CONSTRAINT `tableorders_ibfk_1` FOREIGN KEY (`cartitem_id`) REFERENCES `cartitem` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
