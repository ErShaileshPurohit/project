-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2021 at 10:17 AM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task3`
--

-- --------------------------------------------------------

--
-- Table structure for table `thester_admin`
--

CREATE TABLE `thester_admin` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `language` text NOT NULL,
  `launch_date` date NOT NULL,
  `time` time NOT NULL,
  `screen_no` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thester_admin`
--

INSERT INTO `thester_admin` (`id`, `movie_name`, `description`, `language`, `launch_date`, `time`, `screen_no`, `city`, `amount`, `image`) VALUES
(258, 'saf', ' faf', 'Hindi', '2021-08-15', '19:47:00', 52, 'Mumbai', 52, 'image5.jpg'),
(265, 'dsfw', ' wfgwgfr', 'Hindi', '2021-08-27', '12:00:00', 52, 'Mumbai', 52, 'image2.jpg'),
(266, 'sfdgd', ' dsvgsv', 'Hindi', '2021-08-07', '22:21:00', 45, 'Ahmedabad', 74, 'image3.jpg'),
(267, 'htrj', ' ryjttjy', 'Hindi', '2021-08-11', '20:01:00', 52, 'Ahmedabad', 52, 'image.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thester_admin`
--
ALTER TABLE `thester_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thester_admin`
--
ALTER TABLE `thester_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
