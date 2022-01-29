-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 01:06 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `productnumber` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(253) NOT NULL,
  `productdetails` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `username`, `phonenumber`, `productnumber`, `date`, `address`, `productdetails`) VALUES
(1, 'reaj ', '01630630899', '', '2021-11-08', '', 'milk-1liter'),
(5, 'reaj ', '01630630899', '4', '2021-11-08', 'mirpur-2', 'cal-5kg, dal-1kg'),
(6, 'Saiful', '01407005002', '2', '2021-11-08', 'watertank, mirpur-2', 'cock-2 liter'),
(8, 'g', '5', '5', '2021-11-08', '5', '5'),
(9, 'd', '5', '3', '2021-11-08', 'sd', 'sd'),
(10, 'f', '4', '6', '0000-00-00', '', ''),
(11, 'df', '44', '4', '0000-00-00', 'wr', 'wrw4'),
(12, 'ds', '3', '3', '0000-00-00', 'dsf', 'eg'),
(13, 'sdf', '4', '4', '0000-00-00', 'sxf', 'sdf'),
(14, 'dsfg', '4', '4', '0000-00-00', 'df', 'df'),
(15, 'rejakazi02@gmail.com', '4', '5', '2021-11-08', 'dg', 'rtret'),
(16, '', '', '', '0000-00-00', '', ''),
(17, 'hg', '6556', '55', '0000-00-00', '', ''),
(18, 's', '3', '3', '2021-11-10', 'sf', 'sf'),
(19, 'da', '54', '45', '0000-00-00', '', ''),
(20, '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` varchar(254) NOT NULL,
  `productweight` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `productname`, `productprice`, `productweight`, `image`) VALUES
(10, 'hjg', '45', 'gh', 'rsz_pp.jpg'),
(11, 'sds', '7', 'dsfgdg', 's-01.jpg'),
(12, 'hjg', '7', 'gh', '4-removebg-preview.png'),
(14, 'sd', '4', '44', 'klipartz.com.png'),
(16, 'kjn', '65', '65', 'jh1.png'),
(18, 'test', '100', '200gm', '1-7.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
