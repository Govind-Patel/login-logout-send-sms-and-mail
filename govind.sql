-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 05:54 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govind`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `addresss` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `password`, `addresss`) VALUES
(1, 'anurag', 'singh', 'admin@gmail.com', 'admin', 'zdf'),
(2, 'AK', 'Patil', 'admin11@gmail.com', 'admin', 'lucknow'),
(3, 'AK', 'Patil', 'admin11@gmail.com', 'admin', 'lucknow'),
(4, 'AK', 'Patil', 'admin11@gmail.com', 'admin', 'lucknow'),
(5, 'Raj Kumar', 'Gupta', 'admin123@gmail.com', 'admin', 'gorkhpur'),
(6, 'Raj Kumar', 'Gupta', 'admin123@gmail.com', 'admin', 'gorkhpur'),
(7, 'annu', 'kumar', 'adminq@gmail.com', '12456', 'lucknow'),
(8, 'rajan', 'kumar', 'admina@gmail.com', 'admin', 'lucknow'),
(9, 'rajan', 'kumar', 'admina@gmail.com', 'admin', 'lucknow'),
(10, 'zahir', 'md', 'admin11@gmail.com', 'admin', 'lucknow'),
(16, 'fddg', 'dda', 'admin@gmail.com', 'admin', 'sasssds'),
(17, 'dfsf', 'sdfdf', 'admin@gmail.com', 'admin', 'efwefe'),
(23, 'Annu', 'singh', 'annu@gmail.com', '12345', 'lucknow'),
(24, 'Annu', 'singh', 'rkgupta6391@gmail.com', '', ''),
(25, 'sdcds', '', 'rkgupta6391@gmail.com', 'dscds', ''),
(26, 'Raj ', 'Kumar', 'annu@gmail.com', '12345', 'lucknow'),
(27, 'Govind', 'Patel', 'prasadgovind186@gmail.com', 'prasadgovind186@gmail.com', 'lucknow'),
(28, 'Annu', 'singh', 'ak@gmail.com', '12345', 'ffddf'),
(29, 'vdv', 'dsfsdf', 'sda@gmail.com', '2312312', 'dfs'),
(30, 'govind', 'pppp ', 'r@gmail.com', '123123', 'sadass'),
(31, 'Raj kumar', 'gupta', 'rrr@gmail.com', '123123', 'gorkhpur'),
(32, 'Raj', 'Kumar', 'rkku@gmail.com', '123123', 'sdvds'),
(33, 'Rajan', 'yadav', 'rajkumarbfcsofttech@gmail.com', '12345', 'gorkhpur'),
(34, 'fss', 'dfs', 'rajkumarbfcsofttech@gmail.com', '123123', 'dsfd'),
(35, 'adsa', 'asfs', 'rajkumarbfcsofttech@gmail.com', '123123', 'assf'),
(36, 'fefaf', 'afa', 'rajkumarbfcsofttech@gmail.com', '123123', 'sfaf'),
(37, 'Anurag', 'Madheshiya', 'madhesiaanurag99@gmail.com', '123123', '12'),
(38, 'Annu', 'singh', 'rajkumar1@gmail.com', '124', 'lucknow'),
(39, 'Annu', 'singh', 'admin12@gmail.com', '12344', 'sdd'),
(40, 'Annu', 'singh', 'rajkuma1r@gmail.com', '1234', 'lucknow'),
(41, 'Govind', 'Patel', 'gpp@gmail.com', '12345', 'lucknow'),
(42, 'wdad', 'efee', 'rajkumarfee@gmail.com', 'few', 'fewf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
