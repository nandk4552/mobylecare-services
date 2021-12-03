-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2021 at 02:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobylcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sno` int(12) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(40) NOT NULL,
  `concern` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sno`, `name`, `email`, `concern`, `dt`) VALUES
(1, 'admin', 'dev@test.com', 'hey this is a test', '2021-11-12 20:12:14'),
(2, 'kishore', 'anon@type.com', 'hello', '2021-11-12 20:32:38'),
(3, 'kisor', 'nandk@gmail.com', 'hey', '2021-11-12 20:36:36'),
(4, 'kishore', 'anon@type.com', 'hey', '2021-11-12 21:18:10'),
(5, 'dev', 'dev@test.com', 'hey dev team check', '2021-11-13 11:00:34'),
(6, 'random', 'randy@test.com', 'hey test', '2021-11-13 11:02:36'),
(7, 'random', 'dev@test.com', 'check', '2021-11-13 11:04:08'),
(8, 'hey ', 'hey@test.com', 'het tes', '2021-11-13 11:05:29'),
(9, 'tharun', 'tha@gmail.com', 'thaa tha', '2021-11-13 11:08:22'),
(10, 'Tha ', 'th@test.com', 'hey', '2021-11-13 11:09:24'),
(11, 'hey ', 'dev@test.com', 'kldndsksadksad', '2021-11-13 11:10:25'),
(12, 'Nand Kishore', 'anon@type.com', 'hey', '2021-11-27 19:48:17'),
(13, 'Anon', 'test@test.com', 'hey dev tea, check', '2021-11-27 19:56:37'),
(14, 'aman', 'aman@test.com', 'Hey', '2021-11-27 20:36:35'),
(15, 'Naveen sir', 'naveen@test.com', 'hey i am here to fix bugs', '2021-11-30 19:41:29'),
(16, 'naveen', 'hey@test.com', 'adbdajdb', '2021-12-02 20:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(13, 'a', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(14, 'adad', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(15, 'admin', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(16, 'ndndka', 'bsbsjsbd', '43eb762dc693d20e690e956da03cc482'),
(18, 'ad', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(19, 'ad', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(20, 'addad', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(21, 'asad', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(22, 'adad', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(23, 'dd', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(24, 'kishore', 'k@k.com', '8ccecc8c0895ffdcbfd8e49bdf289960'),
(25, 'sndnsdn', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(26, 'ds', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(27, 'kishore', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(28, 's', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(29, 'adad', 'k@k.com', '8ce4b16b22b58894aa86c421e8759df3'),
(30, 'aman singh', 'aman@dev.com', 'ccda1683d8c97f8f2dff2ea7d649b42c'),
(32, 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(33, 'test', 'testtest', '098f6bcd4621d373cade4e832627b4f6'),
(34, 'dev', 'dev123', '202cb962ac59075b964b07152d234b70'),
(35, 'mobylcare', 'mobylcare', '202cb962ac59075b964b07152d234b70'),
(36, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(37, 'dev', 'dev', 'e77989ed21758e78331b20e477fc5582');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(66, 'Apple', 'brand-Category-5688.jpg', 'Yes', 'Yes'),
(73, 'Google', 'brand-Category-7208.jpg', 'Yes', 'Yes'),
(75, 'Redmi', 'brand-Category-7790.jpg', 'Yes', 'Yes'),
(76, 'One Plus', 'brand-Category-6740.jpg', 'Yes', 'Yes'),
(77, 'Samsung', 'brand-Category-7190.jpg', 'Yes', 'Yes'),
(78, 'Vivo', 'brand-Category-1964.jpg', 'Yes', 'Yes'),
(79, 'Realme', 'brand-Category-4888.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue`
--

CREATE TABLE `tbl_issue` (
  `id` int(10) UNSIGNED NOT NULL,
  `issues` varchar(150) NOT NULL,
  `model_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `featured` varchar(15) NOT NULL,
  `active` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_issue`
--

INSERT INTO `tbl_issue` (`id`, `issues`, `model_id`, `category_id`, `featured`, `active`) VALUES
(3, 'Screen', 66, 17, 'Yes', 'Yes'),
(5, 'Battery', 15, 17, 'Yes', 'Yes'),
(7, 'Charging Jack', 13, 17, 'Yes', 'Yes'),
(8, 'Mic', 14, 73, 'Yes', 'Yes'),
(9, 'Aux Jack', 13, 73, 'Yes', 'Yes'),
(10, 'Speaker', 13, 73, 'Yes', 'Yes'),
(11, 'Proximity Sensor', 13, 73, 'Yes', 'Yes'),
(12, 'Others', 13, 73, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(13, 'Apple Iphone 12 Pro', 'skfbsfk', '12.00', 'Model-Name-8843.jpg', 73, 'Yes', 'Yes'),
(14, 'Apple Iphone 6 Plus', 'Apple iPhone 6 Plus', '3.00', 'Model-Name-1045.png', 73, 'Yes', 'Yes'),
(15, 'Apple Iphone 5', 'Apple Iphone 5', '25.00', 'Model-Name-3846.png', 73, 'Yes', 'Yes'),
(16, 'Apple Iphone SE ', 'Apple Iphone SE', '23.00', 'Model-Name-5911.jpg', 73, 'Yes', 'Yes'),
(17, 'Apple Iphone XS Max', 'D5twt3ICBZ', '20.00', 'Model-Name-5443.png', 73, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `issue` varchar(150) NOT NULL,
  `category` varchar(150) NOT NULL,
  `model` varchar(150) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `issue`, `category`, `model`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(6, 'battery', 'google', 'pixel2', '2021-12-02 19:13:00', 'Ordered', 'kishore', '446466', 'test@test.com', 'bkadbkad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, 'admin@test.com', 'admin', '2021-11-12 13:31:36'),
(2, '1@test.com', '$2y$10$SfJdSuXwPolhKYOUtjm9juWTaYmlca1wpFfOhHXp0lL3BTuX89lIK', '2021-11-12 13:41:10'),
(3, '2@test.com', '$2y$10$GCpsyfGWn3LJKgAcnhUMWuxID4kK.2WBHYNuLKeIz8MdT0avTaeiC', '2021-11-12 13:49:36'),
(4, 'dev@test.com', '$2y$10$5qwTlgAUI1dmX/talm1hGeezzm9J1psc6C83KLlJhmmhxFzIZis2G', '2021-11-12 17:38:16'),
(5, 'k@k.com', '$2y$10$eZBbwjfLyJNCaFi1gC4Ge.qsHRcsaZCpPN/q0yU24YR7X9RStGN5C', '2021-11-12 18:28:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sno` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
