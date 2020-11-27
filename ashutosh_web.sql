-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 07:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashutosh_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `phone`, `message`) VALUES
('9956048907', '', 0, 'fgguuggu'),
('9956048907', '', 0, 'fgguuggu'),
('9956048907', '', 0, 'fgguuggu'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 2147483647, 'hello'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 2147483647, 'hello'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'hello'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'hello'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'hello'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'hello'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'hello'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new'),
('Puneet Dixit', 'puneetdixit576@gmail.com', 9956048907, 'new');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
