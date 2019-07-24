-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 02:49 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazzar`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rate` int(1) NOT NULL DEFAULT 0,
  `teamName` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `downloadCount` int(11) NOT NULL DEFAULT 0,
  `commentCount` int(11) NOT NULL DEFAULT 0,
  `imageSrc` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `imagesSrc` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `downloadLink` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `version` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `news` text COLLATE utf8_persian_ci NOT NULL,
  `categoryId` int(2) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `name`, `size`, `rate`, `teamName`, `type`, `downloadCount`, `commentCount`, `imageSrc`, `imagesSrc`, `downloadLink`, `version`, `news`, `categoryId`, `created`, `updated`, `description`, `email`, `mobile`) VALUES
(2, 'digikala', '50', 0, 'developerrrrrrrrrradasdasd', 'stratgy', 0, 0, 'salam', 'salam', 'salam', 'salam', 'salam', 2, '0000-00-00', '0000-00-00', 'salamksjanaksjdhasdjkaxcnsl,nzljknlonhqwuioqwj', 'salam@gmail.com', 'salam65454'),
(3, 'digikala', '90', 0, 'developerrrrrrrrrradasdasd', 'stratgy', 0, 0, 'salam', 'salam', 'salam', 'salam', 'salam', 2, '0000-00-00', '0000-00-00', 'salamksjanaksjdhasdjkaxcnsl,nzljknlonhqwuioqwj', 'salam@gmail.com', 'salam65454');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
