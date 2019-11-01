-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 01:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmovierating`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_rating`
--

CREATE TABLE `movie_rating` (
  `MOVIE_TITLE` varchar(20) NOT NULL,
  `TOT_RAT` int(3) NOT NULL,
  `MIN_RAT` int(2) NOT NULL,
  `MAX_RAT` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_rating`
--

INSERT INTO `movie_rating` (`MOVIE_TITLE`, `TOT_RAT`, `MIN_RAT`, `MAX_RAT`) VALUES
('Gladiator', 13, 2, 4),
('Joker', 9, 2, 4),
('Maleficent', 10, 1, 4),
('Matrix', 16, 2, 5),
('Terminator', 21, 3, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_rating`
--
ALTER TABLE `movie_rating`
  ADD PRIMARY KEY (`MOVIE_TITLE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
