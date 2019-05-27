-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2019 at 09:54 AM
-- Server version: 5.5.62-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `draganan_dragana`
--

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `idgalerija` int(11) NOT NULL,
  `slika` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`idgalerija`, `slika`) VALUES
(1, 'jum1.jpg'),
(2, 'jum2.jpg'),
(3, 'jum3.jpg'),
(4, 'jum4.jpg'),
(5, 'jum5.jpg'),
(6, 'jum6.jpg'),
(7, 'jum7.jpg'),
(8, 'jum8.jpg'),
(9, 'jum9.jpg'),
(10, 'jum10.jpg'),
(11, 'jum11.jpg'),
(12, 'jum12.jpg'),
(13, 'fame.jpg'),
(14, 'fame.jpg'),
(15, 'fame1.jpg'),
(16, 'fame2.jpg'),
(17, 'fame3.jpg'),
(18, 'fame4.jpg'),
(19, 'des1.jpg'),
(20, 'des2.jpg'),
(21, 'des3.jpg'),
(22, 'des4.jpg'),
(23, 'des5.jpg'),
(24, 'des6.jpg'),
(25, 'des7.jpg'),
(26, 'des8.jpg'),
(28, 'cost1.jpg'),
(29, 'cost2.jpg'),
(30, 'cost3.jpg'),
(31, 'cost4.jpg'),
(32, 'cost5.jpg'),
(33, 'cost6.jpg'),
(34, 'cost7.jpg'),
(35, 'cost8.jpg'),
(36, 'cost9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time` time NOT NULL,
  `email` varchar(45) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `text` longtext NOT NULL,
  `idvesti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `name`, `datum`, `time`, `email`, `website`, `text`, `idvesti`) VALUES
(33, 'Michael', '2017-11-23 10:36:03', '00:00:00', 'micael@gmail.com', '', 'Looks Nice', 1),
(34, 'Lora', '2017-11-23 10:36:44', '00:00:00', 'lora@gmail.com', '', 'Graet Article', 2),
(35, 'Nina', '2017-11-23 10:37:32', '00:00:00', 'nina@gamil.com', '', 'Thank you for update', 3),
(36, 'Tamara', '2017-11-23 10:38:03', '00:00:00', 'tamara@tamara', '', 'Dubai is The Best!!!', 5),
(39, 'Pavle', '2017-11-29 18:49:16', '838:59:59', 'pavle@gmail.com', '', 'Great Articlre', 3),
(41, 'pedja', '2018-01-04 14:37:45', '00:00:00', 'pedja@pedja', '', 'Super Je', 5),
(42, 'Filip', '2018-01-05 09:28:55', '838:59:59', 'fica@fica.gmail', '', 'I Like This', 6),
(43, 'Richard', '2018-01-05 14:28:30', '838:59:59', 'richard@gmail.com', '', 'Dubai is The Best', 5),
(44, 'natasa', '2018-01-06 08:20:36', '00:00:00', 'natasa@dbaibloger.com', '', 'Siper Article', 3),
(45, 'James', '2018-02-05 13:18:11', '00:00:00', 'james@gamil.com', '', 'It is very useful for me and I hope I will get a gil soon. Thank you for this article.\r\nJames', 8),
(46, 'Richar', '2018-02-15 10:31:07', '00:00:00', 'richardb@gmail.com', '', 'It is a nice article!!! \r\nThank you for these info.\r\n', 3),
(47, 'Miki', '2018-02-15 13:07:16', '838:59:59', 'miki', '', 'It is a great!!!', 8),
(48, 'jasa seo terbaik', '2018-03-04 15:55:57', '00:00:00', 'wallydahms@fastmail.in', 'http://shaposervice.com/', 'I think this is one of the so much important information for me.\r\nAnd i\'m glad studying your article. But wanna \r\nobservation on some normal issues, The website style is \r\ngreat, the articles is in point of fact nice :D. Just right job, cheers.', 2),
(49, 'Sara', '2018-03-12 13:37:56', '00:00:00', 'sara@sara.com', '', 'This is a usefull!!!', 3),
(50, 'Maiana', '2018-04-03 20:33:03', '00:00:00', 'maina@gmail.com', '', 'Love to have these!!!!!', 9);




--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int(11) NOT NULL,
  `text` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `text`) VALUES
(1, 'DesignTrends'),
(2, 'WelcomeToFame'),
(3, 'Madinat'),
(4, 'News'),
(5, 'CostOfLiving'),
(6, 'Top10'),
(7, 'Instagarm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`idgalerija`);

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `idgalerija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5079;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
