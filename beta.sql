-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 11:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beta`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

CREATE TABLE `orderfood` (
  `User_id` int(8) NOT NULL,
  `Steamed_rice` int(8) NOT NULL,
  `Khichuri` int(8) NOT NULL,
  `Chicken` int(8) NOT NULL,
  `Beef` int(8) NOT NULL,
  `Mixed_Veg` int(8) NOT NULL,
  `Spinach` int(8) NOT NULL,
  `Dal` int(8) NOT NULL,
  `Rui_fish` int(8) NOT NULL,
  `Tilapia_fish` int(8) NOT NULL,
  `Shingara` int(8) NOT NULL,
  `Somucha` int(8) NOT NULL,
  `Sandwich` int(8) NOT NULL,
  `Roll` int(8) NOT NULL,
  `Noodle` int(8) NOT NULL,
  `Coffee` int(8) NOT NULL,
  `Cold_drinks` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderfood`
--

INSERT INTO `orderfood` (`User_id`, `Steamed_rice`, `Khichuri`, `Chicken`, `Beef`, `Mixed_Veg`, `Spinach`, `Dal`, `Rui_fish`, `Tilapia_fish`, `Shingara`, `Somucha`, `Sandwich`, `Roll`, `Noodle`, `Coffee`, `Cold_drinks`) VALUES
(1, 1, 2, 3, 4, 5, 5, 4, 1, 1, 3, 3, 4, 4, 3, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(8) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`) VALUES
('01', 'asif', 'asif', 1521227748, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
