-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 02:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gaga`
--

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE IF NOT EXISTS `galerija` (
  `idgalerija` int(11) NOT NULL AUTO_INCREMENT,
  `slika` varchar(45) NOT NULL,
  PRIMARY KEY (`idgalerija`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`idgalerija`, `slika`) VALUES
(1, 'ispodNaslovne2.jpg'),
(2, 'ispodNaslovne3.jpg'),
(3, 'ispodNaslovne4.jpg'),
(4, 'ispodNaslovne5.jpg'),
(5, 'office1.jpg'),
(6, 'office2.jpg'),
(7, 'office3.jpg'),
(8, 'office4.jpg'),
(9, 'office5.jpg'),
(10, 'office6.jpg'),
(11, 'office7.jpg'),
(12, 'office1.jpg'),
(13, 'office3.jpg'),
(14, 'office4.jpg'),
(15, 'office5.jpg'),
(16, 'office6.jpg'),
(17, 'office7.jpg'),
(18, 'office7.jpg'),
(19, 'office1.jpg'),
(20, 'office4.jpg'),
(21, 'office7.jpg'),
(22, 'office7.jpg'),
(23, 'office7.jpg'),
(24, 'office7.jpg'),
(25, 'office7.jpg'),
(26, 'office7.jpg'),
(27, 'office7.jpg'),
(28, 'office7.jpg'),
(29, 'office7.jpg'),
(30, 'office7.jpg'),
(31, 'coco1.jpg'),
(32, 'coco1.jpg'),
(33, 'coco2.jpg'),
(34, 'coco1.jpg'),
(35, 'coco3.jpg'),
(36, 'coco1.jpg'),
(37, 'coco5.jpg'),
(38, 'coco1.jpg'),
(39, 'coco3.jpg'),
(40, 'coco1.jpg'),
(41, 'office7.jpg'),
(42, 'office6.jpg'),
(43, 'office5.jpg'),
(44, 'office7.jpg'),
(45, 'jeans2.jpg'),
(46, 'jeans4.jpg'),
(47, 'jeans5.jpg'),
(48, 'jeans2.jpg'),
(49, 'jeans6.jpg'),
(50, 'jeans3.jpg'),
(51, 'jeans5.jpg'),
(52, 'jeans2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `idkomentar` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(45) NOT NULL,
  `website` varchar(45) DEFAULT 'NISTA',
  `text` longtext NOT NULL,
  `idvesti` int(11) NOT NULL,
  PRIMARY KEY (`idkomentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`idkomentar`, `name`, `datum`, `time`, `email`, `website`, `text`, `idvesti`) VALUES
(1, 'Pera', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'afaf@ss', 'NISTA', '545sssss', 1),
(60, 'dfgd', '2017-11-21 10:58:30', '0000-00-00 00:00:00', 'fgdf@dsf', '', 'sdfsdf', 2),
(61, 'ddd', '2017-11-21 11:00:14', '0000-00-00 00:00:00', 'ddd@ddd', '', 'ddd', 3),
(62, 'sss', '2017-11-21 11:01:32', '0000-00-00 00:00:00', 'sss@dsf', '', 'sfdsf', 1),
(63, 'dasd', '2017-11-21 11:42:14', '2015-11-26 08:34:00', 'asd@sdfd', '', 'sfsdf', 3),
(64, 'dfsd', '2017-11-21 12:01:46', '2015-11-26 20:06:00', 'fsd@sdfsd', '', 'fsdfd', 2),
(65, 'asdasd', '2017-11-21 12:57:52', '0000-00-00 00:00:00', 'as@sdfsd', '', 'fame', 2),
(66, 'sdas', '2017-11-21 13:08:25', '0000-00-00 00:00:00', 'das@dfds', '', 'Cost', 5),
(67, 'ghjgh', '2017-11-21 13:16:36', '0000-00-00 00:00:00', 'jghj@xcv', '', 'coct cost', 5),
(68, 'sdfsdf', '2017-11-21 13:17:20', '0000-00-00 00:00:00', 'sdf@dsf', '', 'sdajopet', 5),
(69, 'dasd', '2017-11-21 13:20:34', '0000-00-00 00:00:00', 'asd@dadasd', '', '10', 6);

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE IF NOT EXISTS `vesti` (
  `idvesti` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(200) DEFAULT NULL,
  `slika1` varchar(10) DEFAULT NULL,
  `slika2` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idvesti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`idvesti`, `text`, `slika1`, `slika2`) VALUES
(1, 'DesignTrends', '0', '0'),
(2, 'WelcomeToFame', '0', '0'),
(3, 'Madinat', NULL, NULL),
(4, 'News', NULL, NULL),
(5, 'CostOfLiving', NULL, NULL),
(6, 'Top10', NULL, NULL),
(7, 'Instagarm', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
