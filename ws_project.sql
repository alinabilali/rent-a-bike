-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 12:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ws_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `id` int(11) NOT NULL,
  `user` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `ic` text NOT NULL,
  `matric` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `security` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`id`, `user`, `name`, `email`, `ic`, `matric`, `password`, `salt`, `security`) VALUES
(29, 'ai200288', 'Jason', 'ai200288@student.uthm.edu.my', '000607081370', 'ai200288', '$2y$10$Ec/mJOMJ9p5nNtV3bcvW5usggc96nN3MZcZj60P.1O8MYdzcVE.ni', 'Y5V8mEclXcDkGjOh', 'slow'),
(30, 'ai200299', 'Brian', 'ai200299@student.uthm.edu.my', '000607081370', 'ai200299', '$2y$10$HmuBbjQT7txKuw.ZiPIjrO.wRYzyrYBVExPLYlS65jly9Ei6/tX2i', 'I8ueVjQM3jUNY84Y', 'blue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
