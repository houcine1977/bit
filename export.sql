-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 jul 2022 om 01:36
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sterrenstelsel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `planeten`
--

CREATE TABLE `planeten` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `diameter` int(11) NOT NULL,
  `afstand` int(11) NOT NULL,
  `massa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `planeten`
--

INSERT INTO `planeten` (`id`, `naam`, `diameter`, `afstand`, `massa`) VALUES
(1, 'Zon', 1392000, 0, 332946),
(2, 'Mercurius', 4880, 57910000, 0),
(3, 'Venus', 12104, 108208930, 1),
(4, 'Aarde', 12756, 149597870, 1),
(5, 'Mars', 6794, 227936640, 0),
(6, 'Teenalp', 6794, 227936640, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `planeten`
--
ALTER TABLE `planeten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `planeten`
--
ALTER TABLE `planeten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
