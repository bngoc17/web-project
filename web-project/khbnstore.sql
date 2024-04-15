-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 09:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khbnstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`ID`, `name`, `description`, `price`, `image_url`) VALUES
(1, 'Tai nghe Bluetooth', 'Tai nghe Bluetooth không dây chất lượng cao', 39.99, 'https://example.com/tai-nghe-bluetooth.jpg'),
(2, 'Balo thời trang', 'Balo thời trang phong cách trẻ trung', 29.99, 'https://example.com/balo-thoi-trang.jpg'),
(3, 'Chuột không dây', 'Chuột không dây tiện lợi cho làm việc và giải trí', 19.99, 'https://example.com/chuot-khong-day.jpg'),
(4, 'Thẻ nhớ 64GB', 'Thẻ nhớ 64GB Class 10 cho lưu trữ dữ liệu nhanh chóng', 14.99, 'https://example.com/the-nho-64gb.jpg'),
(5, 'Ổ cứng di động 1TB', 'Ổ cứng di động 1TB dễ dàng mang theo mọi nơi', 79.99, 'https://example.com/o-cung-di-dong-1tb.jpg'),
(6, 'Bàn phím cơ', 'Bàn phím cơ chất lượng cao với đèn LED đa màu', 49.99, 'https://example.com/ban-phim-co.jpg'),
(7, 'Miếng lót chuột gaming', 'Miếng lót chuột gaming chống trơn trượt', 9.99, 'https://example.com/mieng-lot-chuot-gaming.jpg'),
(8, 'Thiết bị chuyển đổi USB-C sang HDMI', 'Thiết bị chuyển đổi USB-C sang HDMI cho việc kết nối màn hình', 24.99, 'https://example.com/chuyen-doi-usb-c-hdmi.jpg'),
(9, 'Gậy tự sướng thông minh', 'Gậy tự sướng thông minh có chân đế chống rung', 12.99, 'https://example.com/gay-tu-suong.jpg'),
(10, 'Máy in phun màu', 'Máy in phun màu đa năng cho công việc và học tập', 89.99, 'https://example.com/may-in-phun-mau.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `username`, `password`) VALUES
(1, 'bn', 'bn'),
(2, 'kh', 'kh');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `category_id`, `price`, `description`, `image_url`) VALUES
(3, 'ipad pro', 2, 2000.00, 'an ipad pro', 'https://cdn0.vox-cdn.com/hermano/verge/product/image/9587/vpavic_210512_4592_0195.jpg'),
(4, 'mac pro', 3, 4500.00, 'a mac', 'https://www.apple.com/newsroom/images/product/mac/standard/Apple-MacBook-Pro-M2-Pro-and-M2-Max-hero-230117_Full-Bleed-Image.jpg.large.jpg'),
(6, 'iphone 7', 1, 500.00, 'iphone?', 'https://cdn.mos.cms.futurecdn.net/258a076ba6f903e9969ed8f882d9c1f4-768-80.jpg.webp'),
(7, 'iphone 8', 1, 500.00, 'iphone?', 'https://cdn.mos.cms.futurecdn.net/6Q8eHN6YoNZUPRAjp6zF4T-1024-80.jpg.webp'),
(8, 'iphone 12', 1, 1500.00, 'iphone mới về, giá mềm', 'https://cafefcdn.com/203337114487263232/2023/12/22/img-195011zon-1703246141596-17032461427531047893721.png'),
(31, 'iphone 9', 1, 1700.00, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`ID`, `name`) VALUES
(1, 'iphone'),
(2, 'ipad'),
(3, 'mac'),
(4, 'watch'),
(5, 'tv'),
(6, 'airpod');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
