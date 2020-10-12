-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 10:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `link` varchar(100) NOT NULL,
  `video` text NOT NULL,
  `trailers` text NOT NULL,
  `Genres` text NOT NULL,
  `mthumb` varchar(100) NOT NULL,
  `vthumb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `link`, `video`, `trailers`, `Genres`, `mthumb`, `vthumb`) VALUES
(2, 'Gone Girl', 'gone girl.jpg', '', '', 'Genre:Thriller/Mystery   Rating:8.1/10        Synopsis: With his wife\'s disappearance having become the focus of an intense media circus, a man sees the spotlight turned on him when it is suspected that he may not be innocent.Director: David Fincher\r\nWriters: Gillian Flynn (screenplay), Gillian Flynn (novel)\r\nStars: Ben Affleck, Rosamund Pike', 'g1.png', 'g2.jpg'),
(3, 'Una', 'una.jpg', '', '', 'Genre:Drama    Rating:6.2/10', '', ''),
(4, 'zodiac', 'zodiac.jpg', 'zodiac.mp4', 'zodiac.mp4', 'Genre:Crime fiction/Thriller   Rating:7.7/10     Synopsis:In the late 1960s/early 1970s, a San Francisco cartoonist becomes an amateur detective obsessed with tracking down the Zodiac Killer, an unidentified individual who terrorizes Northern California with a killing spree.\r\nDirector: David Fincher\r\nWriters: James Vanderbilt (screenplay), Robert Graysmith (book)\r\nStars: Jake Gyllenhaal, Robert Downey Jr., Mark Ruffalo', 'z1.jpeg', 'tz.jpeg'),
(5, 'TGWTDT', 'TGWTDT.jpg', '', '', '', '', ''),
(6, 'Battleship', 'battleship.jpg', '', '', '', '', ''),
(7, 'stoker', 'stoker.jpg', '', '', '', '', ''),
(8, 'blade runner', 'blade runner.jpg', '', '', '', '', ''),
(9, 'good will hunting', 'good will hunting.jpg', '', '', '', '', ''),
(10, 'once upon a time in hollywood', 'once upon a time in hollywood.jpg', '', '', '', '', ''),
(1, 'IO', 'io.jpg', '', 'io trailer.mp4', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `link`) VALUES
(1, 'zodiac', 'zodiac.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `username`) VALUES
(1, 'Nkhila', '123', 'Nikhila123'),
(2, 'Hrithik', '123', 'Hrithik123');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `link`) VALUES
(1, 'Covid', 'covid.mp4'),
(2, 'nature', 'nature.mp4'),
(3, 'ape song', 'Funny Ape Song.mp4'),
(4, 'Teeth Music video', 'Teeth song.mp4\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
