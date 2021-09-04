-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2021 at 09:57 AM
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
-- Table structure for table `addmovie`
--

CREATE TABLE `addmovie` (
  `id` int(11) NOT NULL,
  `theatre_id` int(50) NOT NULL,
  `description` text NOT NULL,
  `language` text NOT NULL,
  `launch_date` date NOT NULL,
  `screen_id` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmovie`
--

INSERT INTO `addmovie` (`id`, `theatre_id`, `description`, `language`, `launch_date`, `screen_id`, `city`, `image`) VALUES
(5, 66, ' Amongst multiple heinous airplane hijacks, India was made to face another such challenge in 1984. BellBottom, a RAW agent played by Akshay Kumar sees through the plan and thus, begins India`s first covert operation.\r\n\r\nA story inspired on true events, led by BellBottom, that went on to create one of the most defining moments of the country.\r\n', 'Hindi', '2021-09-18', 1, 'Ahmedabad', 'bell-bottom.jpg'),
(6, 67, ' Dom`s peaceful life with his wife Letty and son Brian is shattered when Dom`s past catches up to him. The gang is up against the most skilled assassin and high-performance driver - his little brother Jakob.', 'English', '2021-09-26', 1, 'mumbai', 'fast-and-furious-9.jpg'),
(7, 73, ' An 80-year-old criminal lawyer along with his friends has a penchant for real-life games. They conduct a mock trial and decide if justice has been served, if not they make sure justice has been served.', 'English', '2021-09-30', 4, 'mumbai', 'chehre-et.jpg'),
(8, 73, 'Aditya Parikh and his father Bipin Chandra Parikh begin to explore the meaning of life as they meet a stranger traveler named Ketki, who takes them on a journey of surprises and realizations that strengthens their bond with every situation that tests their drifting relationship.', 'gujarati', '2021-09-10', 2, 'surat', 'chaal-jeevi-laiye.jpg'),
(9, 67, ' Shang-Chi and The Legend of The Ten Rings features Simu Liu as Shang-Chi, who must confront the past he thought he left behind when he is drawn into the web of the mysterious Ten Rings organization. The film is directed by Destin Daniel Cretton and produced by Kevin Feige and Jonathan Schwartz.', 'English', '2021-09-24', 3, 'mumbai', 'shang-chi-and-the-legend.jpg'),
(10, 66, ' Amongst multiple heinous airplane hijacks, India was made to face another such challenge in 1984. BellBottom, a RAW agent played by Akshay Kumar sees through the plan and thus, begins India`s first covert operation. A story inspired on true events, led by BellBottom, that went on to create one of the most defining moments of the country.	', 'Hindi', '2021-09-19', 2, '2', 'bell-bottom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_theatre`
--

CREATE TABLE `add_theatre` (
  `theatre_id` int(11) NOT NULL,
  `theatre_name` varchar(50) NOT NULL,
  `screen_no` varchar(11) NOT NULL,
  `seat_no` varchar(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `movie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_theatre`
--

INSERT INTO `add_theatre` (`theatre_id`, `theatre_name`, `screen_no`, `seat_no`, `city`, `movie`) VALUES
(64, 'Cinemax', '2', '150', 'Mumbai', 'Bhuj: The Pride Of India'),
(66, 'Cinemax', '2', '100', 'ahmd', 'Bell Bottom'),
(67, 'Cinemax', '3', '150', 'Ahmedabad', 'Gangubai Kathiawadi'),
(72, 'INOX', '2', '100', 'Bangalore', 'Bell Bottom'),
(73, 'INOX', '2', '100', 'Surat', 'Bell Bottom'),
(74, 'PVR', '4', '200', 'Jaipur', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `c_name`) VALUES
(1, 'Ahmedabad'),
(2, 'mumbai'),
(3, 'surat');

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE `screens` (
  `screen_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `screen_name` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL,
  `charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`screen_id`, `t_id`, `screen_name`, `seats`, `charge`) VALUES
(1, 64, 'Screen 1', 60, 70),
(2, 74, 'Screen 2', 70, 100),
(3, 78, 'Screen 1', 60, 80),
(4, 69, 'Screen 1', 70, 100);

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
(266, 'sfdgd', ' dsvgsv', 'Hindi', '2021-08-07', '22:21:00', 45, 'Ahmedabad', 74, 'image3.jpg'),
(268, 'dsfvs', ' dsvsvg', 'English', '2021-08-13', '21:11:00', 1, 'Mumbai', 2, 'image5.jpg'),
(269, 'dsfvs', ' dsvsvg', 'English', '2021-08-13', '21:11:00', 1, 'Mumbai', 2, 'image5.jpg'),
(270, 'dsfvs', ' dsvsvg', 'English', '2021-08-13', '21:11:00', 1, 'Mumbai', 2, 'image5.jpg'),
(271, 'sfdgd', 'dsaqwe ', 'English', '2021-08-06', '23:03:00', 223, 'Ahmedabad', 22, 'image2.jpg'),
(272, 'sfdgd', 'dsaqwe ', 'English', '2021-08-06', '23:03:00', 223, 'Ahmedabad', 22, 'image2.jpg'),
(273, 'fewfr', ' wefrwr', 'English', '2021-08-19', '20:01:00', 52, 'Mumbai', 52, 'image4.jpg'),
(274, 'fewfr', ' wefrwr', 'English', '2021-08-19', '20:01:00', 52, 'Mumbai', 52, 'image4.jpg'),
(275, 'ge', ' thefhyr', 'Hindi', '2021-09-30', '13:03:00', 52, 'Ahmedabad', 11, 'image3.jpg'),
(276, 'ge', ' thefhyr', 'Hindi', '2021-09-30', '13:03:00', 52, 'Ahmedabad', 11, 'image3.jpg'),
(277, 'ge', ' thefhyr', 'Hindi', '2021-09-30', '13:03:00', 52, 'Ahmedabad', 11, 'image3.jpg'),
(278, 'ge', ' thefhyr', 'Hindi', '2021-09-30', '13:03:00', 52, 'Ahmedabad', 11, 'image3.jpg'),
(279, 'fg', ' dfgd', 'Hindi', '2021-09-17', '13:04:00', 52, 'Pune', 44, 'image5.jpg'),
(280, 'fg', ' dfgd', 'Hindi', '2021-09-17', '13:04:00', 52, 'Pune', 44, 'image5.jpg'),
(281, 'fg', ' dfgd', 'Hindi', '2021-09-17', '13:04:00', 52, 'Pune', 44, 'image5.jpg'),
(282, 'ge', ' thefhyr', 'Hindi', '2021-09-30', '13:03:00', 52, 'Ahmedabad', 11, 'image3.jpg'),
(283, 'dswd', 'qwdeq', 'English', '2021-09-25', '14:39:00', 20, 'Ahmedabad', 52, 'image4.jpg'),
(284, 'dswq', ' ewqad', 'Hindi', '2021-10-01', '13:42:00', 52, 'Mumbai', 2, 'image3.jpg'),
(285, 'dswq', ' ewqad', 'Hindi', '2021-10-01', '13:42:00', 52, 'Mumbai', 2, 'image3.jpg'),
(286, 'sfdg', ' HGDHD', 'Hindi', '2021-09-12', '16:03:00', 52, 'mumbai', 52, 'image3.jpg'),
(287, 'TE', ' ETHED', 'Hindi', '2021-09-25', '16:04:00', 52, 'surat', 52, 'image5.jpg'),
(288, 'TE', ' ETHED', 'Hindi', '2021-09-25', '16:04:00', 52, 'surat', 52, 'image5.jpg'),
(289, 'TE', ' ETHED', 'Hindi', '2021-09-25', '16:04:00', 52, 'surat', 52, 'image5.jpg'),
(290, 'TE', ' ETHED', 'Hindi', '2021-09-25', '16:04:00', 52, 'surat', 52, 'image5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmovie`
--
ALTER TABLE `addmovie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_theatre`
--
ALTER TABLE `add_theatre`
  ADD PRIMARY KEY (`theatre_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`screen_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `thester_admin`
--
ALTER TABLE `thester_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmovie`
--
ALTER TABLE `addmovie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_theatre`
--
ALTER TABLE `add_theatre`
  MODIFY `theatre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
  MODIFY `screen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thester_admin`
--
ALTER TABLE `thester_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
