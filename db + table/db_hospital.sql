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
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(55) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` double NOT NULL,
  `description` text NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `patient_name`, `age`, `gender`, `address`, `contact`, `description`, `doctor_id`, `created_date`) VALUES
(61, 'thakur subodh', 23, 'Male', 'saptari siraha', 9893475893479, 'i always get wet dreamm at night. I cannot sleep well without watching porn videos. Please consider my problems!!', 78, '2017-06-25 11:02:07'),
(62, 'pandey bhuwan', 29, 'Male', 'mahendranagar , Kanchanpur', 834897589374, 'I am having bad problems of watching porn at night. Please help me out to get rid of this problem!!', 79, '2017-06-25 11:05:52');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `username`, `password`, `status`) VALUES
(1, 'Ramesh Pradhan', 'ramesrest@gmail.com', 'ramesrest', '6fc42c4388ed6f0c5a91257f096fef3c', 1),
(2, 'Bijesh Jung Basnet', 'bijeshjbasnet@gmail.com', 'bijesh', 'bijesh', 0),
(12, 'Subodh Thakur', 'subodhthakur@gamil.com', 'subodhtakur', '2ad4389aaf0ae0ed18a7eb5b759e1167', 1),
(13, 'Bhuwan Pandey', 'bhuwanpandey@gmail.com', 'bhuwanpandey', 'bfb2b1f7d528ce5cc1a6751c5bb81d1c', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_name` (`doctor_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD CONSTRAINT `tbl_appointment_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `tbl_doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
