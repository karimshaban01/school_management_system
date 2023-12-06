-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2023 at 11:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nin` varchar(30) NOT NULL,
  `refferee` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `proffession` varchar(30) NOT NULL,
  `image` varchar(64) NOT NULL,
  `roles` varchar(50) NOT NULL,
  `disability` varchar(30) NOT NULL,
  `salary` int(9) NOT NULL,
  `paid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `dob`, `contact`, `email`, `nin`, `refferee`, `address`, `proffession`, `image`, `roles`, `disability`, `salary`, `paid`, `password`, `status`) VALUES
(2, 'karim s haruna', '2023-11-22', 8934539, 'karimxh3aban01@gmail.com', '8247827482749', 'jahm lskd', 'mombasa', 'lawyer', '002-article-A003-en.pdf', 'lawyer', 'non', 100000, 'yes', '4983493', ''),
(2, 'karim s haruna', '2023-11-22', 8934539, 'karimxh3aban01@gmail.com', '8247827482749', 'jahm lskd', 'mombasa', 'lawyer', '002-article-A003-en.pdf', 'lawyer', 'non', 100000, 'yes', '4983493', ''),
(32, 'said manda', '2023-11-22', 74847, 'said@gmail.com', '8923892', 'raymond abbas', 'tanga', 'teacher', 'Flutter in Action.pdf', 'headmaster', 'none', 100000, 'no', '672346', 'staff'),
(32, 'said manda', '2023-11-22', 74847, 'said@gmail.com', '8923892', 'raymond abbas', 'tanga', 'teacher', 'Flutter in Action.pdf', 'headmaster', 'none', 100000, 'no', '672346', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` int(15) NOT NULL,
  `birth_doc` varchar(100) NOT NULL,
  `nin` varchar(25) NOT NULL,
  `email` varchar(64) NOT NULL,
  `disability` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `image`, `dob`, `address`, `contact`, `birth_doc`, `nin`, `email`, `disability`, `password`, `status`) VALUES
(1, 'karim shaban', 'Black World Map Wallpaper 8643 Hd Wallpapers in Travel n World.jpg', '2023-10-31', 'njiro', 928492, 'Black World Map Wallpaper 8643 Hd Wallpapers in Travel n World.jpg', '872482472839', 'karimxhaban@gmail.com', 'none', 'p3Fw3', ''),
(1, 'karim shaban', 'Black World Map Wallpaper 8643 Hd Wallpapers in Travel n World.jpg', '2023-10-31', 'njiro', 928492, 'Black World Map Wallpaper 8643 Hd Wallpapers in Travel n World.jpg', '872482472839', 'karimxhaban@gmail.com', 'none', 'p3Fw3', ''),
(1, 'karim shaban', 'Black World Map Wallpaper 8643 Hd Wallpapers in Travel n World.jpg', '2023-10-31', 'njiro', 928492, 'Black World Map Wallpaper 8643 Hd Wallpapers in Travel n World.jpg', '872482472839', 'karimxhaban@gmail.com', 'none', 'p3Fw3', ''),
(2, 'omari majaliwa', '', '2023-10-31', 'kasulu', 12, '', '', '', '', '', 'student'),
(2, 'omari majaliwa', 'CORE JAVA.pdf', '2023-10-31', 'kasulu', 12, 'IFPRI_Tanzania_Brief_062022_shared.pdf', '8743894', 'omary@gmail', 'none', '56235', 'student'),
(1, 'joyce laurent kipara', 'karim_accessKeys.csv', '2023-11-30', 'kasulu', 755291855, 'cert-EUETJMEZ6DSG4NAP6F63JAPXMVVLL6HB(1).pem', '48344892389', 'klajoh@gmail.com', 'none', '1234', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `empno` varchar(10) NOT NULL,
  `edn` varchar(20) NOT NULL,
  `roles` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `skills` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `birthplace` varchar(20) NOT NULL,
  `disability` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contract` varchar(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nin` varchar(30) NOT NULL,
  `attachment` varchar(64) NOT NULL,
  `$status` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `empno`, `edn`, `roles`, `image`, `skills`, `contact`, `birthplace`, `disability`, `dob`, `address`, `contract`, `email`, `password`, `nin`, `attachment`, `$status`, `status`) VALUES
(34534, 'klsafkfa[lsf', '004930', 'phs', 'ssvm', 'Black World Map Wallpaper 8643 Hd Wallpapers in Travel n World.jpg', 'kadjnjvk', 'nvfdkl', 'mmm', 'none', '2023-10-31', 'oiejo', '0493490', 'karimxh3aban014@gmail.com', '4983493', '9834093094', 'IFPRI_Tanzania_Brief_062022_shared.pdf', 'teacher', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
