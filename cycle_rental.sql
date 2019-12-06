-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Gru 2019, 18:50
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cycle_rental`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mountain_bikes`
--

CREATE TABLE `mountain_bikes` (
  `id` int(10) NOT NULL,
  `Rowery` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `6h` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `24h` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `48h` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `72h` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Piec_dni` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Tydzień` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Zaliczka` varchar(15) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `mountain_bikes`
--

INSERT INTO `mountain_bikes` (`id`, `Rowery`, `6h`, `24h`, `48h`, `72h`, `Piec_dni`, `Tydzień`, `Zaliczka`) VALUES
(1, 'Kross', '50 zł', '80 zł', '130 zł', '180 zł', '250 zł', '350 zł', '100 zł');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `ID` int(10) NOT NULL,
  `Imie` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Wiek` int(4) NOT NULL,
  `Telefon` int(10) NOT NULL,
  `Email` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `Rower` varchar(25) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`ID`, `Imie`, `Nazwisko`, `Wiek`, `Telefon`, `Email`, `Rower`) VALUES
(1, 'Kamil', 'Borkowski', 21, 837363633, 'kamil2000-22@o2.pl', 'Specialized');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `mountain_bikes`
--
ALTER TABLE `mountain_bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `mountain_bikes`
--
ALTER TABLE `mountain_bikes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
