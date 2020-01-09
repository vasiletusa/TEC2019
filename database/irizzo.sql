-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 09, 2020 alle 22:25
-- Versione del server: 10.4.10-MariaDB
-- Versione PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irizzo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aziende`
--

CREATE TABLE `aziende` (
  `Nome` varchar(255) NOT NULL,
  `NomeReferente` varchar(255) NOT NULL,
  `EmailReferente` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aziende`
--

INSERT INTO `aziende` (`Nome`, `NomeReferente`, `EmailReferente`, `Password`, `Username`) VALUES
('e', 'b', 'c', ' d', ' e'),
('bb', 'bb', 'bb@bb', 'bbbb', 'bb'),
('hh', 'hh', 'hh@hh', 'hhhh', 'hhhh');

-- --------------------------------------------------------

--
-- Struttura della tabella `eventi`
--

CREATE TABLE `eventi` (
  `ID` int(11) NOT NULL,
  `Titolo` varchar(255) NOT NULL,
  `Descrizione` varchar(500) NOT NULL,
  `Luogo` varchar(255) NOT NULL,
  `Citta` enum('Venezia','Padova','Verona','Vicenza','Belluno','Treviso','Rovigo') NOT NULL,
  `Data` date NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Azienda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `eventi`
--

INSERT INTO `eventi` (`ID`, `Titolo`, `Descrizione`, `Luogo`, `Citta`, `Data`, `Categoria`, `Azienda`) VALUES
(1, 'aaa', 'aaaaa', 'Padova', 'Venezia', '0000-00-00', 'bbb', 'ff'),
(2, 'dvdvd', 'dvdvd', 'Venezia', 'Venezia', '0000-00-00', 'vdvdv', 'vdvdv'),
(3, 'dvdvd', 'dvdvd', 'Belluno', 'Venezia', '0000-00-00', 'vdvdv', 'vdvdv'),
(4, 'dd', 'dd', 'Verona', 'Venezia', '0000-00-00', 'dd', 'dd\r\n'),
(5, 'dd', 'dd', 'Treviso', 'Venezia', '0000-00-00', 'dd', 'dd\r\n'),
(6, 'ss', 'sssss', 'Treviso', 'Venezia', '0000-00-00', 'Famiglie', 'Array'),
(7, 'hh', 'hhhh', 'Treviso', 'Venezia', '0000-00-00', 'hhhh', 'hhhh'),
(8, 'gg', 'gg', 'Padova', 'Venezia', '0000-00-00', 'gg', 'hhhh'),
(9, 'gg', 'gg', 'Verona', 'Venezia', '0000-00-00', 'gg', 'hhhh'),
(10, 'gg', 'hh', 'Belluno', 'Venezia', '0000-00-00', 'hh', 'hhhh'),
(11, 'hh', 'hh', 'Rovigo', 'Venezia', '0000-00-00', 'hh', 'hhhh'),
(12, 'nn', 'nn', 'Rovigo', 'Venezia', '0000-00-00', 'nn', 'hhhh'),
(13, 'mm', 'mm', 'Rovigo', 'Venezia', '0000-00-00', 'Cultura', 'hhhh'),
(14, 'mm', 'mm', 'Rovigo', 'Venezia', '0000-00-00', 'mm', 'hhhh'),
(15, 'mm', 'mm', 'Rovigo', 'Venezia', '0000-00-00', 'mm', 'hhhh'),
(16, 'mm', 'mm', 'Padova', 'Venezia', '0000-00-00', 'mm', 'hhhh'),
(17, 'aqaqa', 'aqaq', 'aqaq', 'Belluno', '0000-00-00', 'Discoteca', 'hhhh');

-- --------------------------------------------------------

--
-- Struttura della tabella `log`
--

CREATE TABLE `log` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `log`
--

INSERT INTO `log` (`Username`, `Password`, `Tipo`) VALUES
('hhhh', 'hhhh', 'azienda'),
('User', 'user', 'utente');

-- --------------------------------------------------------

--
-- Struttura della tabella `partecipa`
--

CREATE TABLE `partecipa` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `partecipa`
--

INSERT INTO `partecipa` (`ID`, `Username`) VALUES
(3, 'User'),
(5, 'User'),
(9, 'User'),
(11, 'User');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`ID`, `Username`) VALUES
(1, 'User'),
(6, 'User'),
(11, 'User');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ruolo` varchar(255) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`Nome`, `Cognome`, `Username`, `Password`, `Email`, `Ruolo`) VALUES
('Admin', 'Admin', 'Admin', 'admin', 'admin@admin', 'Admin'),
('Alberto', 'Salviato', 'ASalviato', 'ASalviat', 'alberto.salviato@studenti.unipd.it', 'User'),
('ilaria', 'Rizzo', 'IRizzo', 'IRizzo', 'ilaria.rizzo.5@studenti.unipd.it', 'User'),
('Sara', 'Romito', 'SRomito', 'Sromito', 'sara.romito@studenti.unipd.it', 'User'),
('User', 'User', 'User', 'user', 'user@user', 'User'),
('Vasile', 'Tusa', 'VTusa', 'VTusa', 'vasile.tusa@studenti.unipd.it', 'User');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aziende`
--
ALTER TABLE `aziende`
  ADD PRIMARY KEY (`Username`);

--
-- Indici per le tabelle `eventi`
--
ALTER TABLE `eventi`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`Username`,`Password`);

--
-- Indici per le tabelle `partecipa`
--
ALTER TABLE `partecipa`
  ADD PRIMARY KEY (`ID`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`ID`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `eventi`
--
ALTER TABLE `eventi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `partecipa`
--
ALTER TABLE `partecipa`
  ADD CONSTRAINT `partecipa_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `eventi` (`ID`),
  ADD CONSTRAINT `partecipa_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `log` (`Username`);

--
-- Limiti per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  ADD CONSTRAINT `preferiti_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `eventi` (`ID`),
  ADD CONSTRAINT `preferiti_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `log` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
