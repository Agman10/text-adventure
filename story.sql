-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 06 nov 2018 kl 21:40
-- Serverversion: 10.1.29-MariaDB
-- PHP-version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `story`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `story`
--

CREATE TABLE `story` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text CHARACTER SET latin1 NOT NULL,
  `place` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `story`
--

INSERT INTO `story` (`id`, `text`, `place`) VALUES
(1, 'fest hos violetta', ''),
(2, 'va tråkig', ''),
(3, 'festa', ''),
(4, 'slut', ''),
(5, 'vem är alfredo intresserad i?', ''),
(6, 'pasta alfredo', ''),
(7, 'ok...', ''),
(8, 'ingen', ''),
(9, 'din mamma', ''),
(10, 'det var väl tråkigt', ''),
(11, 'violetta', ''),
(12, 'alfredo frågar henne om hon gillar honom', ''),
(13, 'alfredo är blyg och gör ingenting om det.', ''),
(14, 'vad gör du åt det?', ''),
(15, 'hon gillar alfredo', ''),
(16, 'alfredo frågar henne om hon vill vara med honom resten av sina liv', ''),
(17, 'alfredo bestämmer sig för att inte fråga violetta om hon vill vara med honom', ''),
(18, 'Dem levde lyckliga i alla sina dagar?', '');

-- --------------------------------------------------------

--
-- Tabellstruktur `storylinks`
--

CREATE TABLE `storylinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `storyid` int(10) UNSIGNED NOT NULL,
  `target` int(10) UNSIGNED NOT NULL,
  `text` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `storylinks`
--

INSERT INTO `storylinks` (`id`, `storyid`, `target`, `text`) VALUES
(1, 1, 4, 'va tråkig'),
(2, 1, 5, 'festa'),
(4, 3, 3, 'slut'),
(5, 5, 14, 'Violetta'),
(6, 5, 10, 'din mamma'),
(7, 5, 4, 'ingen'),
(8, 5, 7, 'pasta alfredo'),
(9, 14, 15, 'alfredo frågar henne om hon gillar honom'),
(10, 14, 4, 'alfredo är blyg och gör ingenting om det.'),
(11, 15, 18, 'alfredo frågar henne om hon vill vara med honom resten av sitt liv'),
(12, 15, 4, 'alfredo bestämmer sig för att inte fråga violetta om hon vill vara med honom');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `storylinks`
--
ALTER TABLE `storylinks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storyid` (`storyid`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT för tabell `storylinks`
--
ALTER TABLE `storylinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
