-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Gru 2019, 10:52
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `iiiti`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wpisy`
--

CREATE TABLE `wpisy` (
  `ID_ART` int(11) NOT NULL,
  `Tytul_ART` text NOT NULL,
  `Tresc_ART` text NOT NULL,
  `Data_ART` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wpisy`
--

INSERT INTO `wpisy` (`ID_ART`, `Tytul_ART`, `Tresc_ART`, `Data_ART`) VALUES
(1, 'test', 'test 123', '2019-12-16'),
(2, 'Drugi element', 'test 123', '2019-12-16'),
(3, 'Trzeci wpis', 'Ciekawe czy dziaÅ‚a\r\n', '2019-12-16'),
(4, 'Wpis kolejny', '\r\nTo jest mÃ³j wpis', '2019-12-17');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `wpisy`
--
ALTER TABLE `wpisy`
  ADD PRIMARY KEY (`ID_ART`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `wpisy`
--
ALTER TABLE `wpisy`
  MODIFY `ID_ART` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
