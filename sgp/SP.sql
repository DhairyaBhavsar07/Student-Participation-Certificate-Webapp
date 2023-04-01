-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2022 at 06:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SP`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `sr` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`sr`, `user`, `pass`, `date`) VALUES
(1, 'yuvraj', '0409', '2022-10-25 01:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sr` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image_1` longblob DEFAULT NULL,
  `ins_1` varchar(255) DEFAULT NULL,
  `d_1` date DEFAULT NULL,
  `desc_1` text DEFAULT NULL,
  `image_2` longblob DEFAULT NULL,
  `ins_2` varchar(255) DEFAULT NULL,
  `d_2` date DEFAULT NULL,
  `desc_2` text DEFAULT NULL,
  `image_3` longblob DEFAULT NULL,
  `ins_3` varchar(255) DEFAULT NULL,
  `d_3` date DEFAULT NULL,
  `desc_3` text DEFAULT NULL,
  `up` varchar(255) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status_1` varchar(255) NOT NULL DEFAULT 'no',
  `status_2` varchar(255) NOT NULL DEFAULT 'no',
  `status_3` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sr`, `user`, `name`, `pass`, `image_1`, `ins_1`, `d_1`, `desc_1`, `image_2`, `ins_2`, `d_2`, `desc_2`, `image_3`, `ins_3`, `d_3`, `desc_3`, `up`, `date`, `status_1`, `status_2`, `status_3`) VALUES
(1, '21cs004', 'Yuvrajsinh', '4', 0x686568652e706e67, 'CHARUSAT', '2022-10-16', 'ME NAHI BATAUNGA', 0x6d61696e2d71696d672d32353363343533353434623133323736633532313835636339373539306139302d6c712e6a706567, 'IIT', '1970-01-01', 'AVCD', 0x686568652e706e67, 'DAIICT', '2003-09-04', 'AHAAAA', '3', '2022-10-24 16:50:55', 'approved', 'approved', 'approved'),
(2, '21cs002', 'Bhavya', '2', 0x686f696969692e706e67, 'CVM', '2021-10-27', 'GOOD', 0x686568652e706e67, 'CVM', '1970-01-01', 'BETTER', 0x686168612e706e67, 'CVM', '1970-01-01', 'competition', '3', '2022-10-27 14:38:05', 'approved', 'approved', 'denied'),
(3, '21cs003', 'Dhairya', '3', 0x78797a2e706e67, 'IIT GUWAHATI', '2018-09-05', 'ONLINE EVENT', 0x79757672616a2e504e47, 'VGEC Chandkheda', '2020-09-04', 'an online workshop', 0x686f696969692e706e67, 'VGEC', '2021-08-20', 'Badminton tournament', '', '2022-10-27 14:38:05', 'approved', 'approved', 'approved'),
(4, '21cs001', 'Khyati', '1', 0x616263642e504e47, 'SVNIT SURAT', '2022-10-13', 'GOOD EVENT', 0x78797a2e706e67, 'SVNIT', '2022-10-14', 'GREAT EVENT', 0x79757672616a2e504e47, 'IIT - KHARAGPUR', '2022-10-15', 'BETTER', '3', '2022-10-27 14:42:41', 'approved', 'approved', 'denied'),
(5, '21cs005', 'Anmol', '5', 0x686f696969692e706e67, 'Mahatma gandhi', '1947-08-15', 'Aazadi ka Amrit mohotsav', 0x686568652e706e67, 'SVMIT', '2021-10-09', 'Offline coding competition', 0x79757672616a2e504e47, 'S&R club GNFC', '2020-12-12', 'Swimming competition', '3', '2022-10-27 14:42:41', 'denied', 'approved', 'denied'),
(6, '21cs006', 'Foram', '6', 0x686168612e706e67, 'IIT Mumbai', '1970-01-01', 'Online workshop', 0x79757672616a2e504e47, 'Rotary club', '1970-01-01', 'cricket', 0x616263642e504e47, 'Red Hat', '1970-01-01', 'Online Certificate Course', '3', '2022-10-27 14:42:41', 'approved', 'approved', 'approved'),
(7, '21cs007', 'Daksh', '7', 0x686f696969692e706e67, 'GEC Dahod', '2018-12-31', 'Hackathon', 0x686568652e706e67, 'Sports club Charusat', '2021-12-12', 'Basketball', 0x686168612e706e67, 'IIT', '1970-01-01', 'Online Lecture Of JAVA', '3', '2022-10-27 14:42:41', 'approved', 'denied', 'approved'),
(8, '21cs008', 'Ikram', '8', 0x616263642e504e47, 'IIM Ahmedabad', '1970-01-01', 'abcdefghijklmnopqrstuvwxyz', 0x79757672616a2e504e47, 'Charusat', '2020-08-31', 'Running competition', 0x686f696969692e706e67, 'GEC Patan', '1970-01-01', 'NPTEL course', '3', '2022-10-27 14:42:41', 'denied', 'approved', 'approved'),
(9, '21cs009', 'Arpit', '9', 0x79757672616a2e504e47, 'lk', '1970-01-01', 'lk', 0x686168612e706e67, 'Charusat', '1970-01-01', 'cricket', 0x686f696969692e706e67, 'IIT', '1970-01-01', 'Online certificate course', '3', '2022-10-27 14:42:41', 'approved', 'approved', 'approved'),
(10, '21cs010', 'Ayush', '10', 0x686568652e706e67, 'Charusat', '1970-01-01', 'techno-tarang', 0x616263642e504e47, 'Charusat', '1970-01-01', 'hide & seek', 0x79757672616a2e504e47, 'IIT', '1970-01-01', 'Python course', '3', '2022-10-27 14:42:41', 'approved', 'approved', 'approved'),
(11, '21cs012', 'Dhairya Gohil', '12', 0x686f696969692e706e67, 'CSPIT', '2022-10-12', 'Hackathon', 0x79757672616a2e504e47, 'Charusat', '1970-01-01', 'Kabaddi', 0x686f696969692e706e67, 'local municipality', '1970-01-01', 'Swachhta Abhiyan', '3', '2022-10-27 14:42:41', 'denied', 'denied', 'denied'),
(12, '21cs013', 'Ayushi', '13', 0x686f696969692e706e67, 'nm', '1970-01-01', 'nm', 0x78797a2e706e67, 'IIT', '2021-09-07', 'ok', 0x79757672616a2e504e47, 'charusat', '1970-01-01', 'event', '3', '2022-10-27 14:42:41', 'approved', 'approved', 'approved'),
(14, '21cs014', 'Shikha', '14', 0x78797a2e706e67, 'IIT ', '2022-09-23', 'jhjh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-10-27 19:06:47', '--', 'no', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `sr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `sr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
