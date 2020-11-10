-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 10:47 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment03`
--

-- --------------------------------------------------------

--
-- Table structure for table `a3`
--

CREATE TABLE `a3` (
  `title` varchar(40) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a3`
--

INSERT INTO `a3` (`title`, `userName`, `password`, `url`) VALUES
('www.hmb.com.pk', '', 'l3QfIdnDHU', 'https://www.hmb.com.pk'),
('www.ubl.com.pk', 'UBL Bank', '$2y$10$ZyhUYwyPoTZCnaqf/JUVFuneHzLZhC5RNK3qp5gxnZo', 'https://www.ubl.com.pk'),
('www.hmb.com.pk', 'UBL Bank', '$2y$10$0ZOGyJUyOIERoZPI4Kg4hubMPw52d7eW0K0uB5L9bjk', 'https://www.hmb.com.pk'),
('www.hmb2.com.pk', 'UBL', '$2y$10$xwbO8cIIgpg3ocwFGCvTb.VUZuVS6oYcTVARlIsBOFN', 'https://www.hmb2.com.pk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
