-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 15, 2019 alle 15:55
-- Versione del server: 10.1.39-MariaDB
-- Versione PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progtec`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `partecipa`
--

CREATE TABLE `partecipa` (
  `IdTour` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Titolo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `partecipa`
--

INSERT INTO `partecipa` (`IdTour`, `Username`, `Titolo`) VALUES
(1, 'dio', ''),
(2, 'dio', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `tour`
--

CREATE TABLE `tour` (
  `Id` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Organizzatore` varchar(20) NOT NULL,
  `Citta` enum('Padova','Vicenza','Verona','Rovigo','Belluno','Treviso','Venezia') NOT NULL,
  `Titolo` text NOT NULL,
  `Descrizione` text NOT NULL,
  `Stato` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tour`
--

INSERT INTO `tour` (`Id`, `Data`, `Organizzatore`, `Citta`, `Titolo`, `Descrizione`, `Stato`) VALUES
(1, '2019-06-03', 'rizzo', 'Padova', 'sss', 'aaaaaaaaaa', 'Approvato'),
(2, '2019-07-24', 'lol', 'Rovigo', 'ikuikloi', 'kiklol', 'In Attesa');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ruolo` varchar(255) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`Nome`, `Cognome`, `Username`, `Password`, `Email`, `Ruolo`) VALUES
('', '', '', '', '', 'User'),
('aa', 'aa', 'aa', 'aaaa', 'aa@', 'User'),
('dio', 'cane', 'dio', 'porco', 'cane', 'Admin'),
('Ilaria', 'Rizzo', 'iiii', 'iii', 'ila.clash@gmail.com', 'User'),
('ilaria', 'rizzo', 'ilaila', 'ilaila', 'ilarya9531@gmail.com', 'User'),
('', 'Rizzo', 'ilarya9531', 'aaa', 'ilarya9531@gmail.com', 'User'),
('llll', 'llll', 'llll', 'llll', 'llll', 'User'),
('lol', 'lol', 'lol', 'lol', 'lol', 'User'),
('lollo', 'lollo', 'lollo', 'lollo', 'lollo', 'User'),
('ilaria', 'porcoddue', 'rizzo', 'qoqoqo', 'qopqoqo', 'User'),
('sara', 'romito', 'sarasara', 'sarasara', 'sarasara', 'User'),
('sara', 'romito', 'sasa', 'aaa', 'sararomito', 'User'),
('vasile', '', 'ss', '6uB3trKX', '', 'User');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `partecipa`
--
ALTER TABLE `partecipa`
  ADD PRIMARY KEY (`IdTour`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- Indici per le tabelle `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Organizzatore` (`Organizzatore`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `tour`
--
ALTER TABLE `tour`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `partecipa`
--
ALTER TABLE `partecipa`
  ADD CONSTRAINT `Partecipa_ibfk_1` FOREIGN KEY (`IdTour`) REFERENCES `tour` (`Id`),
  ADD CONSTRAINT `Partecipa_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `utenti` (`Username`);

--
-- Limiti per la tabella `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `Tour_ibfk_2` FOREIGN KEY (`Organizzatore`) REFERENCES `utenti` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
