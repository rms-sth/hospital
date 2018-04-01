-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 02:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `contact_name`, `email`, `message`, `created_date`) VALUES
(55, 'Ramesh Pradhan', 'ramesrest@gmail.com', 'hsdf kjs fjkdsh fjkds kj dskfjhdsjf dsjk fjds fkdsh', '2017-06-25 14:38:49'),
(56, 'Ramesh Pradhan', 'ramesrest@gmail.com', 'hsdf kjs fjkdsh fjkds kj dskfjhdsjf dsjk fjds fkdsh', '2017-06-25 14:39:39'),
(57, 'Ramesh Pradhan', 'ramesrest@gmail.com', 'hsdf kjs fjkdsh fjkds kj dskfjhdsjf dsjk fjds fkdsh', '2017-06-25 14:39:40'),
(58, 'dsjkfh ', 'hfdsjk@gmail.com', 'hdsfjk ', '2017-06-25 14:39:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
