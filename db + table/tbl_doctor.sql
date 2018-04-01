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
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(55) NOT NULL,
  `doctor_image` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `available_time` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(55) NOT NULL,
  `modified_by` varchar(55) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`id`, `doctor_name`, `doctor_image`, `degree`, `university`, `specialist`, `available_time`, `status`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(49, 'Bijesh', 'IMG_20170618_153608.jpg', 'dsjkh', 'jkhjk', 'hjkh', '09:00:00', 0, 'ram', NULL, '2017-06-24 13:37:09', NULL),
(51, 'HEllo', 'IMG_20170618_153737.jpg', 'jhjkh', 'jhj', 'khjkl', '08:09:00', 0, 'ram', NULL, '2017-06-24 13:38:40', NULL),
(53, 'thakur', 'IMG_20170618_153643.jpg', 'jkhjk', 'hjkh', 'jkhj', '09:09:00', 1, 'ram', NULL, '2017-06-24 13:47:04', NULL),
(72, 'hhh', 'IMG_20170618_153754.jpg', 'hjkhjk', 'hjkhjk', 'hjhjkhk', '14:34:00', 0, 'ramesrest', NULL, '2017-06-25 07:39:40', NULL),
(74, 'wordl', 'IMG_20170618_153745.jpg', 'world', 'world', 'world', '15:29:00', 1, 'ramesrest', NULL, '2017-06-25 07:40:00', NULL),
(76, 'fiiii', '1) login.wmv_snapshot_34.54_[2017.06.16_15.48.07].jpg', 'dsjkjh', 'djkfh', 'dsjfhkj', '09:09:00', 1, 'ramesrest', NULL, '2017-06-25 07:45:06', NULL),
(77, 'dddd', '16463257_1199782403462695_4164789105550727258_o.jpg', 'wedew', 'dsf', 'dsf', '15:23:00', 1, 'ramesrest', NULL, '2017-06-25 08:23:47', NULL),
(78, 'Ramesh Pradhan', 'IMG_20161218_135917.jpg', 'BSC CSIT', 'Tribhuwan University', 'PHP', '12:00:00', 1, 'ramesrest', NULL, '2017-06-25 09:20:59', NULL),
(79, 'Subodh Thakur', '18700352_297617257350195_3708518241341366624_n.jpg', 'BSC CSIT', 'Tribhuwan University', 'Cheating', '12:40:00', 1, 'ramesrest', NULL, '2017-06-25 11:04:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
