-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Maj 14, 2023 at 02:00 PM
-- Wersja serwera: 10.3.35-MariaDB
-- Wersja PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s38992`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `id_art` int(11) NOT NULL,
  `Autor` int(11) NOT NULL,
  `zdj` varchar(245) DEFAULT NULL,
  `artykul` varchar(300) NOT NULL,
  `tytul` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_art`, `Autor`, `zdj`, `artykul`, `tytul`) VALUES
(71, 1, 'Photos/643bed60ae0be_12752906.jpg', 'asdadas', 'sdad'),
(72, 1, '', 'dsadasdadas', 'sdad'),
(73, 1, 'Photos/6447a8152e78c_Disparates_05.jpg', 'dsadas', 'dsadas'),
(74, 1, '', 'dsa', 'ada'),
(75, 5, '', 'nxsdadasd', 'rara'),
(76, 5, '', 'Dobry wieczÃ³r paÅ„stwu, mam problem z wytworzeniem barszczu czerwonego, bo gdy dodajÄ™ truskawek, to smakuje nieco inaczej, niÅ¼ w domu. Co polecacie, panowie i panie?', 'Testowy temat'),
(78, 5, '', 'rararararara', 'ererera'),
(80, 5, '', 'reererer', 'rere'),
(82, 1, '', 'ts', 'yes'),
(83, 1, '', 'aaaaaaaaaa', 'aaaaaaaaa'),
(84, 4, '', 'ee', 'ee'),
(85, 1, '', 'www', 'www'),
(86, 4, '', 'ArtykuÅ‚', 'PiÄ™kny tytul'),
(88, 1, '', 'dsad', 'adad');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `imie` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nazwisko` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `haslo` varchar(45) NOT NULL,
  `typ` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `imie`, `nazwisko`, `login`, `haslo`, `typ`) VALUES
(1, 'Jan', 'Kowal', 'maczek', 'maczek', 'm'),
(2, 'Domini', 'Makowiecki', 'dom', 'dom', 'u'),
(3, 'Test', 'test', 'test', 'test', ''),
(4, 'jan', 'kowal', 'jan', 'jan', 'u'),
(5, 'LubisÅ‚aw', 'DuÅ¼y', 'LubisÅ‚aw_DuÅ¼y', '123', 'u'),
(6, 'zurek', 'zurek', 'zurek', 'zurek', 'u'),
(7, 'Kamil', 'jas', 'jas', 'jas', 'u');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `key_idx` (`Autor`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idnew_table_UNIQUE` (`id`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`),
  ADD UNIQUE KEY `haslo_UNIQUE` (`haslo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `key` FOREIGN KEY (`Autor`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
