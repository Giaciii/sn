-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Dez 2023 um 15:26
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `sn`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `anfrage`
--

CREATE TABLE `anfrage` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `anfrager` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `anfrage`
--

INSERT INTO `anfrage` (`id`, `email`, `anfrager`) VALUES
(8, 'test@gmail.com', 'testset@gmail.com');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nachrichten`
--

CREATE TABLE `nachrichten` (
  `id` int(11) NOT NULL,
  `empfang` varchar(255) NOT NULL,
  `nachricht` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `nachrichten`
--

INSERT INTO `nachrichten` (`id`, `empfang`, `nachricht`) VALUES
(1, 'Eri', 'Hallo'),
(2, 'Eri', 'Hi'),
(3, 'etst', 'setse'),
(4, 'erwe', 'werwer'),
(5, 'Test', 'Hallo'),
(6, 'testset@gmail.com', 'Hallo');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE `personen` (
  `id` int(11) NOT NULL,
  `person1` varchar(255) NOT NULL,
  `person2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`id`, `person1`, `person2`) VALUES
(1, 'test@gmail.com', 'testset@gmail.com'),
(2, 'test@gmail.com', 'HAHAHHAH');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(1000) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'asdasd', 'asdasd', 'Admin', '1234567890'),
(2, 'Gia', 'Eri', 'Gia', '1234567890'),
(3, 'Test', 'tes', 'Admin', '1234567890'),
(4, 'Test', 'test', 'testset@gmail.com', '$2y$10$Z0vLCwt8v1oV.UwpNL5Vy.jKcEonpupQSmu.G7NffJh14/uaj7Th2'),
(5, 'Test', 'Test', 'test@gmail.com', '$2y$10$Qug3qv2ZQIrfFFypzTPEAOIXtJnEfkMLsw7APvue3ryNVmgr37zGm');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `anfrage`
--
ALTER TABLE `anfrage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `anfrager` (`anfrager`);

--
-- Indizes für die Tabelle `nachrichten`
--
ALTER TABLE `nachrichten`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `empfang` (`empfang`),
  ADD KEY `nachricht` (`nachricht`(768));

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person1` (`person1`),
  ADD KEY `person2` (`person2`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fname` (`fname`(768)),
  ADD KEY `lname` (`lname`(768)),
  ADD KEY `email` (`email`(768)),
  ADD KEY `password` (`password`(768));

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `anfrage`
--
ALTER TABLE `anfrage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `nachrichten`
--
ALTER TABLE `nachrichten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
