-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 17, 2017 alle 16:47
-- Versione del server: 10.1.21-MariaDB
-- Versione PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_form`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `info_form`
--

CREATE TABLE `info_form` (
  `Nome` text NOT NULL,
  `Cognome` text NOT NULL,
  `Data_di_nascita` date NOT NULL,
  `Luogo_di_nascita` text NOT NULL,
  `Sesso` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `info_form`
--

INSERT INTO `info_form` (`Nome`, `Cognome`, `Data_di_nascita`, `Luogo_di_nascita`, `Sesso`) VALUES
('Michele', 'D\'Elia', '1996-03-12', 'Foggia', 'M'),
('Daniela', 'Iride', '1996-10-23', 'Cerignola', 'F'),
('Potito', 'De Luca', '1958-01-01', 'Ordona', 'M'),
('Maria', 'D\'Elia', '1997-03-14', 'Orta Nova', 'F'),
('Elena', 'Reddavide', '1998-10-09', 'Cerignola', 'F'),
('Pietro', 'D\'Elia', '1968-01-01', 'Orta Nova', 'M'),
('Mario', 'Rossi', '1988-05-15', 'San Giovanni Rotondo', 'M'),
('Rosa', 'D\'Elia', '1995-09-22', 'Foggia', 'F'),
('Emilia', 'D\'Elia', '1960-01-02', 'Orta Nova', 'F');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
