-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2021 at 11:38 AM
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
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thester_admin`
--

INSERT INTO `thester_admin` (`id`, `movie_name`, `description`, `language`, `launch_date`, `time`, `screen_no`, `city`, `amount`, `image`) VALUES
(1, 'wq', ' qweq', 'Hindi', '1222-11-10', '10:11:00', 12, 'Mumbai', 222, 'brain_1629711254.png'),
(2, 'rtuy', ' tyutu', 'Hindi', '1111-11-10', '10:11:00', 1, 'Pune', 12, 'brain_1629711817.png'),
(3, 'sfdgd', ' et435', 'Hindi', '1010-11-10', '10:10:00', 1, 'Pune', 141, 'brain_1629714018.png'),
(4, 'sfdgd', ' et435', 'Hindi', '1010-11-10', '10:10:00', 1, 'Pune', 141, 'brain_1629714031.png'),
(5, 'sfdgd', ' 6i', 'Hindi', '0101-11-10', '12:01:00', 12, 'Pune', 1524, 'brain_1629714071.png'),
(6, 'sfdgd', ' 6i', 'Hindi', '0101-11-10', '12:01:00', 12, 'Pune', 1524, 'brain_1629714071.png'),
(7, 'sfdgd', ' 6i', 'Hindi', '0101-11-10', '12:01:00', 12, 'Pune', 1524, 'brain_1629714115.png'),
(8, 'sfdgd', ' 6i', 'Hindi', '0101-11-10', '12:01:00', 12, 'Pune', 1524, 'brain_1629714235.png'),
(9, 'sfdgd', ' 6i', 'Hindi', '0101-11-10', '12:01:00', 12, 'Pune', 1524, 'brain_1629714690.png'),
(10, 'sfdgd', ' 6i', 'Hindi', '0101-11-10', '12:01:00', 12, 'Pune', 1524, 'brain_1629714766.png'),
(11, 'sfdgd', ' 6i', 'Hindi', '0101-11-10', '12:01:00', 12, 'Pune', 1524, 'brain_1629714829.png'),
(12, 'sfdgd', ' 6i', 'Hindi', '0101-11-10', '12:01:00', 12, 'Pune', 1524, 'brain_1629714906.png'),
(13, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629714996.png'),
(14, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629715078.png'),
(15, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629715174.png'),
(16, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain.png'),
(17, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629715936.png'),
(18, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629716140.png'),
(19, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629716241.png'),
(20, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629716323.png'),
(21, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629716359.png'),
(22, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629716430.png'),
(23, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629716443.png'),
(24, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629716478.png'),
(25, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629716569.png'),
(26, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629718112.png'),
(27, 'yarr', ' hiiii', 'gujarati', '1111-10-10', '12:10:00', 12, 'Pune', 12, 'brain_1629718365.png'),
(28, 'sfdgd', ' ewr', 'Hindi', '1111-10-10', '12:01:00', 1, 'Mumbai', 123, 'brain_1629779318.png'),
(29, 'rty', ' rty', 'gujarati', '0101-10-10', '12:12:00', 1, 'Ahmedabad', 0, 'brain_1629779430.png'),
(30, 'rty', ' rty', 'gujarati', '0101-10-10', '12:12:00', 1, 'Ahmedabad', 0, 'brain_1629779529.png'),
(31, 'rty', ' rty', 'gujarati', '0101-10-10', '12:12:00', 1, 'Ahmedabad', 0, 'brain_1629779579.png'),
(32, 'sfdgdfg', ' dfgdgh', 'Hindi', '0111-12-10', '10:12:00', 1, 'Mumbai', 12, 'brain_1629779619.png'),
(33, 'sfdgdfg', ' dfgdgh', 'Hindi', '0111-12-10', '10:12:00', 1, 'Mumbai', 12, 'brain_1629779619.png'),
(34, 'sfdgdfg', ' dfgdgh', 'Hindi', '0111-12-10', '10:12:00', 1, 'Mumbai', 12, 'brain_1629779705.png'),
(35, 'sfdgdfg', ' dfgdgh', 'Hindi', '0111-12-10', '10:12:00', 1, 'Mumbai', 12, 'brain_1629779747.png'),
(36, 'sfdgdfg', ' dfgdgh', 'Hindi', '0111-12-10', '10:12:00', 1, 'Mumbai', 12, 'brain_1629781028.png'),
(37, 'sfdg', 'tyhjt ', 'Hindi', '2021-08-12', '10:01:00', 1, 'Mumbai', 1, 'brain_1629781369.png'),
(38, 'fgrg', ' egtygre', 'gujarati', '2021-08-27', '01:00:00', 111, 'Mumbai', 11, 'brain_1629781427.png'),
(39, 'fgrg', ' egtygre', 'gujarati', '2021-08-27', '01:00:00', 111, 'Mumbai', 11, 'brain_1629781550.png'),
(40, 'fgrg', ' egtygre', 'gujarati', '2021-08-27', '01:00:00', 111, 'Mumbai', 11, 'brain_1629781569.png'),
(41, 'fgrg', ' egtygre', 'gujarati', '2021-08-27', '01:00:00', 111, 'Mumbai', 11, 'brain_1629781586.png'),
(42, 'fgrg', ' egtygre', 'gujarati', '2021-08-27', '01:00:00', 111, 'Mumbai', 11, 'brain_1629781653.png'),
(43, 'fgrg', ' egtygre', 'gujarati', '2021-08-27', '01:00:00', 111, 'Mumbai', 11, 'brain_1629781999.png'),
(44, 'fgrg', ' egtygre', 'gujarati', '2021-08-27', '01:00:00', 111, 'Mumbai', 11, 'brain_1629783229.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
