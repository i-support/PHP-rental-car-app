-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 19 Maj 2016, 10:13
-- Wersja serwera: 5.5.21-log
-- Wersja PHP: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `mgr`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE IF NOT EXISTS `klienci` (
  `id_klienta` int(6) NOT NULL AUTO_INCREMENT,
  `nazwisko` varchar(16) NOT NULL,
  `imie` varchar(16) NOT NULL,
  `pesel` int(11) NOT NULL,
  `miasto` varchar(16) NOT NULL,
  `ulica` varchar(16) NOT NULL,
  `kod_pocztowy` int(6) NOT NULL,
  `telefon` int(9) NOT NULL,
  `komentarz` varchar(300) NOT NULL,
  PRIMARY KEY (`id_klienta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `nazwisko`, `imie`, `pesel`, `miasto`, `ulica`, `kod_pocztowy`, `telefon`, `komentarz`) VALUES
(9, 'Kiepski', 'Ferdynand ', 2147483647, 'Kielce', 'Duza ', 12321, 12312312, 'brak komentarza');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE IF NOT EXISTS `samochody` (
  `nr_rejestracyjny` varchar(9) NOT NULL,
  `marka` varchar(9) NOT NULL,
  `model` varchar(9) NOT NULL,
  `rok` int(4) NOT NULL,
  `pojemnosc` int(4) NOT NULL,
  `paliwo` varchar(8) NOT NULL,
  `moc` int(4) NOT NULL,
  `cena` int(4) NOT NULL,
  `komentarz` varchar(300) NOT NULL,
  `wypozyczenie` varchar(3) NOT NULL,
  PRIMARY KEY (`nr_rejestracyjny`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`nr_rejestracyjny`, `marka`, `model`, `rok`, `pojemnosc`, `paliwo`, `moc`, `cena`, `komentarz`, `wypozyczenie`) VALUES
('KR4221', 'Fords', 'Focus', 2005, 1500, 'Benzyna', 101, 300, 'bobry', 'Tak'),
('KR42212', 'Fords', 'Focus0', 23123, 21313, 'Benzyna', 2131, 3213, 'brak', 'Tak'),
('tsa2131', 'Ferrari', 'Focus1', 2002, 1233, 'Benzyna', 213, 100, '', 'Tak');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE IF NOT EXISTS `zamowienie` (
  `id_zamowienia` int(6) NOT NULL AUTO_INCREMENT,
  `id_klienta` int(6) NOT NULL,
  `count_cena` int(5) NOT NULL,
  `id_zaplaty` int(1) NOT NULL,
  `data_start` date NOT NULL,
  `data_koniec` date NOT NULL,
  `nr_rejestracyjny` varchar(9) NOT NULL,
  PRIMARY KEY (`id_zamowienia`),
  KEY `id_klienta` (`id_klienta`),
  KEY `nr_rejestracyjny` (`nr_rejestracyjny`),
  KEY `id_zaplaty` (`id_zaplaty`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Zrzut danych tabeli `zamowienie`
--

INSERT INTO `zamowienie` (`id_zamowienia`, `id_klienta`, `count_cena`, `id_zaplaty`, `data_start`, `data_koniec`, `nr_rejestracyjny`) VALUES
(10, 9, 100, 1, '2016-05-09', '2016-05-10', 'tsa2131'),
(11, 9, 300, 1, '2016-05-09', '2016-05-10', 'KR4221'),
(12, 9, 3213, 1, '2016-05-11', '2016-05-12', 'KR42212');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zaplata`
--

CREATE TABLE IF NOT EXISTS `zaplata` (
  `id_zaplaty` int(1) NOT NULL,
  `typ` varchar(16) NOT NULL,
  PRIMARY KEY (`id_zaplaty`),
  KEY `id_zaplaty` (`id_zaplaty`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zaplata`
--

INSERT INTO `zaplata` (`id_zaplaty`, `typ`) VALUES
(1, 'Gotowka'),
(2, 'Karta platnicza');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `zamowienie_ibfk_1` FOREIGN KEY (`id_klienta`) REFERENCES `klienci` (`id_klienta`),
  ADD CONSTRAINT `zamowienie_ibfk_2` FOREIGN KEY (`id_zaplaty`) REFERENCES `zaplata` (`id_zaplaty`),
  ADD CONSTRAINT `zamowienie_ibfk_3` FOREIGN KEY (`nr_rejestracyjny`) REFERENCES `samochody` (`nr_rejestracyjny`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
