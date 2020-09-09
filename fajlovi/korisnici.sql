-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 06:20 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int NOT NULL,
  `email` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `ime` tinytext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `sifra` longtext CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `godine` text CHARACTER SET utf16le COLLATE utf16le_bin NOT NULL,
  `ovlascenje` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `email`, `ime`, `sifra`, `godine`, `ovlascenje`) VALUES
(4, 'm慪橵湪畬慶杵獴䁧浡楬⹣潭', '慮潮祭潵獶敧慮', '␲礤㄰⑮潹䙐稶圸㙶焯灃癡獯祣佒牣煏晁煈䍬佧敪扣偕味橰癖歩摬稲', '㜱', 'a摭楮'),
(12, '浡汯汥瑮楫䁧浡楬⹣潭', '浡汯汥瑮楫', '␲礤㄰⑴杈卡䱊䵺晃礸歐䱨⽵䥖畑桢煔睯䩚戵穁塮ㅈ祩䵃灍䠮畵偧䥗', 'ㄱ', '潢楣慮'),
(13, 'p畮潬整慮䁧浡楬⹣潭', 'p畮潬整慮', '␲礤㄰␵㙤噘䕩䍸䕂䍬渵䅏㙡牲⹚湉㝲瑡畎栶婚䵸唹ㅅ偫湳䌲䍇伮礶', '㠱', '潢楣慮'),
(14, 'd敳慮歡䁧浡楬⹣潭', 'd敳慮歡', '␲礤㄰⑦⹷伱偸ㄮ偒䉁歨爯獪⹰⸵摈㕮湊坊瑺乳灗䤱婑偁牉潎䑴摍穡', '〳', '潢楣慮');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
