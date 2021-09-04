-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2021 at 06:41 PM
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
(44, 'fgrg', ' egtygre', 'gujarati', '2021-08-27', '01:00:00', 111, 'Mumbai', 11, 'brain_1629783229.png'),
(47, 'trhyr', ' rtyr', 'Hindi', '2021-08-19', '13:08:00', 1, 'Mumbai', 11, 'brain_1629790441.png'),
(48, 'trhyr', ' rtyr', 'Hindi', '2021-08-19', '13:08:00', 1, 'Mumbai', 11, 'brain_1629790555.png'),
(49, 'trehrdy', ' rtuy6r', 'Hindi', '2021-08-28', '13:09:00', 11, 'Mumbai', 11, 'brain_1629790638.png'),
(50, 'sfdgd', ' rtyr', 'Hindi', '2021-08-20', '16:18:00', 111, 'Mumbai', 1524, 'brain_1629791066.png'),
(51, 'sfdgd', ' rtyr', 'Hindi', '2021-08-20', '16:18:00', 111, 'Mumbai', 1524, 'brain_1629791167.png'),
(52, 'sfdgd', ' rtyr', 'Hindi', '2021-08-20', '16:18:00', 111, 'Mumbai', 1524, 'brain_1629791186.png'),
(53, 'sfdgd', ' rtyr', 'Hindi', '2021-08-20', '16:18:00', 111, 'Mumbai', 1524, 'brain_1629791249.png'),
(54, 'trehrdy', ' rtuy6r', 'Hindi', '2021-08-28', '13:09:00', 11, 'Mumbai', 11, 'brain_1629791343.png'),
(55, 'hello', ' rewr', 'gujarati', '2021-08-06', '16:23:00', 452, 'Ahmedabad', 785, 'brain_1629791384.png'),
(56, 'hello', ' wrewr', 'Hindi', '2021-08-04', '17:20:00', 12, 'Ahmedabad', 1524, 'brain_1629791424.png'),
(57, 'hello', ' wrewr', 'Hindi', '2021-08-04', '17:20:00', 12, 'Ahmedabad', 1524, 'brain_1629791497.png'),
(58, 'hello', ' rewr', 'gujarati', '2021-08-06', '16:23:00', 452, 'Ahmedabad', 785, 'brain_1629791514.png'),
(59, 'hello', ' rewr', 'gujarati', '2021-08-06', '16:23:00', 452, 'Ahmedabad', 785, 'brain_1629791790.png'),
(60, 'hello', ' wrewr', 'Hindi', '2021-08-04', '17:20:00', 12, 'Ahmedabad', 1524, 'brain_1629791803.png'),
(61, 'hello', ' wrewr', 'Hindi', '2021-08-04', '17:20:00', 12, 'Ahmedabad', 1524, 'brain_1629791827.png'),
(62, 'hello', ' wrewr', 'Hindi', '2021-08-04', '17:20:00', 12, 'Ahmedabad', 1524, 'brain_1629791956.png'),
(63, 'hello', ' wrewr', 'Hindi', '2021-08-04', '17:20:00', 12, 'Ahmedabad', 1524, 'brain_1629791961.png'),
(64, 'hello', ' wrewr', 'Hindi', '2021-08-04', '17:20:00', 12, 'Ahmedabad', 1524, 'brain_1629792091.png'),
(65, 'broo', ' trr', 'Hindi', '2021-08-05', '17:35:00', 111, 'Pune', 124, 'brain_1629792133.png'),
(69, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629798161.png'),
(70, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629798197.png'),
(71, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629800972.png'),
(72, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629802130.png'),
(73, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629802383.png'),
(74, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629802443.png'),
(75, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629802822.png'),
(76, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629803238.png'),
(77, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629803490.png'),
(78, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629803493.png'),
(79, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629803543.png'),
(80, 'tret', ' etrey', 'Hindi', '2021-08-27', '16:47:00', 452, 'Ahmedabad', 452, 'brain_1629803800.png'),
(81, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629803884.jpeg'),
(82, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804018.jpeg'),
(83, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804026.jpeg'),
(84, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804082.jpeg'),
(85, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804239.jpeg'),
(86, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804632.jpeg'),
(87, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804698.jpeg'),
(88, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804705.jpeg'),
(89, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804724.jpeg'),
(90, 'rety4', ' 4y564ry', 'Hindi', '2021-08-19', '19:51:00', 1, 'Pune', 10, 'download (5)_1629804759.jpeg'),
(91, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629804789.jpeg'),
(92, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629804836.jpeg'),
(93, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805020.jpeg'),
(94, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805072.jpeg'),
(95, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805180.jpeg'),
(96, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805199.jpeg'),
(97, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805326.jpeg'),
(98, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805383.jpeg'),
(99, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805409.jpeg'),
(100, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805457.jpeg'),
(101, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805480.jpeg'),
(102, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805528.jpeg'),
(103, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805576.jpeg'),
(104, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805614.jpeg'),
(105, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805637.jpeg'),
(106, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805660.jpeg'),
(107, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805678.jpeg'),
(108, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5).jpeg'),
(109, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5).jpeg'),
(110, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5).jpeg'),
(111, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5).jpeg'),
(112, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5).jpeg'),
(113, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5).jpeg'),
(114, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805930.jpeg'),
(115, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629805950.jpeg'),
(116, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629806074.jpeg'),
(117, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629806701.jpeg'),
(118, 'sfdg', ' rwt', 'gujarati', '2021-08-26', '20:05:00', 152, 'Ahmedabad', 145, 'download (5)_1629806722.jpeg'),
(119, 'sfdg', ' dsf', 'Hindi', '2021-08-26', '22:49:00', 4, 'Mumbai', 522, 'download (2)_1629807288.jpeg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
