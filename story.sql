-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 03:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `story`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'moojo ojo', 'mojo@mailinator.com', '1'),
(2, 'moojo ojo', 'mojo@mailinator.coms', '1'),
(3, 'moojo ojo', 'mosjo@mailinator.com', '1'),
(4, 'moojo ojo', 'mojsdo@mailinator.com', '1'),
(5, 'nk', 'nk@gmail.com', '1'),
(6, '', 'df', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `story_cat`
--

CREATE TABLE `story_cat` (
  `story_cat_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story_cat`
--

INSERT INTO `story_cat` (`story_cat_id`, `category`) VALUES
(1, 'Drama'),
(2, 'Romantic'),
(3, 'Horror'),
(4, 'Comedy'),
(5, 'Action'),
(6, 'Thriller'),
(7, 'Mystery'),
(8, 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `upload_stories`
--

CREATE TABLE `upload_stories` (
  `id` int(11) NOT NULL,
  `story_cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `story_title` varchar(100) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `upload_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_stories`
--

INSERT INTO `upload_stories` (`id`, `story_cat_id`, `name`, `email`, `story_title`, `summary`, `upload_path`) VALUES
(1, 1, 'moojo ojo', 'mojo@mailinator.com', 'df', 'cvbv', 'uploads/670421abca.jpg'),
(2, 2, 'moojo ojo', 'mojo@mailinator.com', 'lkjd', 'sdlfk', 'uploads/270703blockchain-background.jpg'),
(3, 2, 'neeraj', 'neerajm3@gmail.com', 'Love', 'sdjlfksdjflsdjfk', 'uploads/2.jpg'),
(4, 1, 'sflj', 'asldkfjl', 'slsfd', 'sldfkjasdlfjksdlfkjsdl', 'uploads/ab.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story_cat`
--
ALTER TABLE `story_cat`
  ADD PRIMARY KEY (`story_cat_id`);

--
-- Indexes for table `upload_stories`
--
ALTER TABLE `upload_stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `story_cat`
--
ALTER TABLE `story_cat`
  MODIFY `story_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `upload_stories`
--
ALTER TABLE `upload_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
