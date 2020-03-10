-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 07:23 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_02_05_140551_create_tbl_admin_table', 1),
(2, '2020_02_06_062017_create_tbl_category_table', 2),
(3, '2020_02_08_071353_create_manufacture_table', 3),
(5, '2020_02_09_102251_create_tbl_products_table', 4),
(6, '2020_02_11_170333_create_tbl_slider_table', 5),
(7, '2020_02_16_072417_create_tbl_customer_table', 6),
(8, '2020_02_16_163921_create_tbl_shipping_table', 7),
(9, '2020_02_19_070906_create_tbl_payment_table', 8),
(10, '2020_02_19_071000_create_tbl_order_table', 8),
(11, '2020_02_19_071053_create_tbl_order_details_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'chandan.aece.iu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Chandan Sharma', '01716852802', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(34, 'Men', 'This is men category', '1', NULL, NULL),
(35, 'Women', 'This is women category', '1', NULL, NULL),
(36, 'Child', 'This is child category', '1', NULL, NULL),
(37, 'Electronics', 'This is electronics category', '1', NULL, NULL),
(38, 'Others', 'Others category', '0', NULL, NULL),
(39, 'Furniture', 'This is furniture category', '1', NULL, NULL),
(40, 'Sports', 'This is sports category', '1', NULL, NULL),
(41, 'Cloths', 'This is cloth category', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `password`, `mobile_number`, `created_at`, `updated_at`) VALUES
(1, 'chandan', 'chandan.aece.iu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01716852802', NULL, NULL),
(4, 'sharma', 'sharma@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234', NULL, NULL),
(5, 'akash', 'akash@gmail.com', '01cfcd4f6b8770febfb40cb906715822', '123456789', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `manufacture_id` int(10) UNSIGNED NOT NULL,
  `manufacture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Samsung', 'samsung Brand', 1, NULL, NULL),
(3, 'Xiaomi', 'Chainease Brand', 1, NULL, NULL),
(4, 'Zara', 'Zara brand is popular brand', 1, NULL, NULL),
(5, 'Others', 'its different types of brand', 1, NULL, NULL),
(6, 'Easy', 'Easy brand', 1, NULL, NULL),
(7, 'Ray-Ban', 'Ray-Ban is the most popular brand making good sunglass', 1, NULL, NULL),
(8, 'Yellow', 'sdvwghehrrhver', 1, NULL, NULL),
(10, 'Vivo', 'fcwerertwevvtert', 1, NULL, NULL),
(12, 'Otobi', 'erwerwerwr', 1, NULL, NULL),
(13, 'Yunex', 'asdfsd', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(37, 1, 8, 37, '81,200.00', 'pending', '2020-02-22 08:22:59', NULL),
(38, 5, 9, 38, '3,000.00', 'pending', '2020-02-22 08:24:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(30, '37', '1', 'iphone 8', '80000', '1', NULL, NULL),
(31, '37', '3', 'Baby Frok', '1200', '1', NULL, NULL),
(32, '38', '5', 'Sunglass', '1000', '1', NULL, NULL),
(33, '38', '6', 'Women long shirt', '2000', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(37, 'handcash', 'pending', '2020-02-22 08:22:59', NULL),
(38, 'handcash', 'pending', '2020-02-22 08:24:22', NULL),
(39, 'handcash', 'pending', '2020-02-22 08:25:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `category_id`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `product_size`, `product_color`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'iphone 8', 37, 5, 'wfeceewgcweg', 'wegwcgegw wejhwnieweg', 80000.00, 'image/asO0X6ImE9xiS0hCnnQ8.jpg', 'SL', 'white', 1, NULL, NULL),
(3, 'Baby Frok', 36, 5, 'for girl baby frok', 'asdhasivuansivasdasd', 1200.00, 'image/QUPO4J2UnXqYReuJXbUw.jpg', 'M', 'genarel', 1, NULL, NULL),
(4, 'boys shirt', 34, 6, 'sdfgvfgvgv', 'sgrvghetrherh', 1300.00, 'image/Y2P0vUYc1lPlFANqejQf.jpg', 'M, L, XXL', 'red, green,etc', 1, NULL, NULL),
(5, 'Sunglass', 34, 7, 'hdfv sdfsdf g', 'sdgvggg', 1000.00, 'image/O4xk9HVo7RkjPsbaqRQ2.jpg', 'normal', 'black and gray', 1, NULL, NULL),
(6, 'Women long shirt', 35, 8, 'asdcascfcsff', 'sdfcsfsfscfsdgvrt', 2000.00, 'image/eb6VjEChG6cIw0vvHGUp.jpg', 'M, L, XXL', 'purple', 1, NULL, NULL),
(7, 'Bed', 39, 9, 'aasff', 'cgcfgcrtgfcerfre', 14000.00, 'image/9X6uaNrvk2ruL12bgl8i.jpg', 'single, double', 'different', 1, NULL, NULL),
(8, 'Lapptop', 37, 2, 'adcsrgegregegve', 'vttrhrhbrhrhebryryrye', 60000.00, 'image/l7tfTO5TgGrdfQFFV6gP.jpg', '14 inch', 'white', 1, NULL, NULL),
(9, 'Wordrobe', 39, 12, '<span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">OTOBI is a furniture maker company in Bangladesh</span>', '<span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">OTOBI is a furniture maker company in Bangladesh</span>', 17000.00, 'image/u5YfRxrJBk5jlV9dTNyH.jpg', 'normal Big', 'genarel', 1, NULL, NULL),
(10, 'Dashing Table', 39, 12, 'Good dashing table', 'Color Guarantee', 20000.00, 'image/Eahx9p8Xjj4dxnylw4YO.jpeg', 'normal', 'different', 1, NULL, NULL),
(11, 'Badminton Racket', 40, 13, 'sdfgvttyrtrt', 'ghhrhrehr', 1200.00, 'image/XNNON35DakFaGmu5xkl3.jpg', 'normal', 'different', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_mobile_number` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_email`, `shipping_first_name`, `shipping_last_name`, `shipping_address`, `shipping_mobile_number`, `shipping_city`, `created_at`, `updated_at`) VALUES
(4, 'alok@gmail.com', 'akash', 'roy', 'uttar badda', '01711224466', 'Dhaka', NULL, NULL),
(7, 'chandan.aece.iu@gmail.com', 'chandan', 'sharma', 'uttar badda', '01716852802', 'Dhaka', NULL, NULL),
(8, 'chandan.aece.iu@gmail.com', 'chandan', 'sharma', 'uttar badda', '01716852802', 'Dhaka', NULL, NULL),
(9, 'akash@gmail.com', 'akash', 'khan', 'kushtia', '12345', 'kushtia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'image/jWuT3RT3G0g04KJAoeJN.jpg', '0', NULL, NULL),
(3, 'image/79aAWUJQAVRIK5vPsd4K.png', '1', NULL, NULL),
(4, 'image/ZSpBC1m6rdwqJmZJScof.jpg', '1', NULL, NULL),
(5, 'image/6S4gwhrcqGOPcSkuabPF.jpg', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
