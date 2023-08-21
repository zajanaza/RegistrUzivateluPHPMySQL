-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 21. srp 2023, 14:18
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `janazadrazil3423`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatele`
--
USE `janazadrazil3423`;
CREATE TABLE `uzivatele` (
  `id_uzivatele` int(11) NOT NULL,
  `jmeno` varchar(50) NOT NULL,
  `prijmeni` varchar(50) NOT NULL,
  `prihl_jmeno` varchar(50) NOT NULL,
  `heslo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatele`
--

INSERT INTO `uzivatele` (`id_uzivatele`, `jmeno`, `prijmeni`, `prihl_jmeno`, `heslo`) VALUES
(5, 'Jana', 'Zadražilová', 'janazadrazilova', 'heslo1'),
(7, 'Josef', 'Novák', 'josefnovak', 'heslo2'),
(8, 'Anna', 'Novákova', 'annanovakova', 'heslo3'),
(10, 'Petr', 'Fiala', 'petrfiala', 'heslo4'),
(11, 'Oliver', 'Šára', 'oliversara', 'heslo5'),
(12, 'Jiří', 'Čech', 'jiricech', 'heslo6'),
(14, 'Daniel', 'Čáp', 'danielcap', 'heslo7'),
(15, 'Hana', 'Malá', 'hanamala', 'heslo8'),
(17, 'Silvia', 'Arias Garcia', 'silviaariasgarcia', 'heslo9');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  ADD PRIMARY KEY (`id_uzivatele`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  MODIFY `id_uzivatele` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
