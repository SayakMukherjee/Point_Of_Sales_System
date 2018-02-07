-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2017 at 11:08 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(100) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `cust_email` varchar(200) DEFAULT NULL,
  `cust_phone` varchar(200) NOT NULL,
  `cust_disc` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_disc`) VALUES
(3, 'Lilly Singh', 'lilly@yahoo.com', '1234567890', 10),
(4, 'Casey Neistat', 'casey@gmail.com', '1234567890', 14);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(100) NOT NULL,
  `pro_code` int(100) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `quantity` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(200) NOT NULL,
  `pro_price` int(100) NOT NULL,
  `sup_id` int(100) NOT NULL,
  `sup_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_code`, `pro_name`, `quantity`, `cat_id`, `cat_title`, `pro_price`, `sup_id`, `sup_name`) VALUES
(7, 112345, 'Laptop', 7, 1, 'Electronics', 56000, 3, 'supplier02'),
(8, 111, 'Shirt', 0, 2, 'Clothing', 450, 2, 'Admin'),
(9, 111, 'Demo', 0, 1, 'Electronics', 4500, 2, 'Admin'),
(10, 123, 'Charger', 20, 1, 'Electronics', 45, 2, 'Admin'),
(11, 147, 'Random', 14, 2, 'Clothing', 47, 2, 'Admin'),
(12, 159, 'Item2', 0, 1, 'Electronics', 98, 2, 'Admin'),
(13, 999, 'This is it', 19, 1, 'Electronics', 50, 2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(100) NOT NULL,
  `createdBy` int(100) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `total` int(100) NOT NULL,
  `received` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `createdBy`, `cust_id`, `cust_name`, `total`, `received`, `date`) VALUES
(8, 2, 0, 'Valued Customer', 513, 513, '2017-07-28'),
(9, 1, 0, 'Valued Customer', 54, 54, '2017-07-28'),
(10, 3, 0, 'Valued Customer', 513, 513, '2017-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sup_id` int(100) NOT NULL,
  `sup_name` varchar(200) NOT NULL,
  `sup_email` varchar(200) NOT NULL,
  `sup_phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sup_id`, `sup_name`, `sup_email`, `sup_phone`) VALUES
(2, 'Admin', 'admin@e.com', '1234567890'),
(3, 'supplier02', 'sup02@d.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `entry_id` int(100) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_price` int(100) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  `invoiceNum` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`entry_id`, `prod_name`, `prod_price`, `pro_id`, `quantity`, `user_id`, `status`, `invoiceNum`) VALUES
(14, 'Shirt', 450, 8, 1, 2, 1, 8),
(16, 'Random', 47, 11, 1, 1, 1, 9),
(17, 'Shirt', 450, 8, 1, 3, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'Admin', 'password', 'admin'),
(2, 'Cashier', 'cashier', 'password', 'cashier'),
(3, 'cashier02', 'cashier02', 'password', 'cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sup_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `entry_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
