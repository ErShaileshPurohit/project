-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2021 at 05:01 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmovie`
--
ALTER TABLE `addmovie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmovie`
--
ALTER TABLE `addmovie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
