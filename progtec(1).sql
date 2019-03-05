-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mar 05, 2019 alle 14:15
-- Versione del server: 10.1.37-MariaDB
-- Versione PHP: 7.3.1

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
-- Struttura della tabella `Commenti`
--

CREATE TABLE `Commenti` (
  `IdComm` int(11) NOT NULL,
  `IdTour` int(11) NOT NULL,
  `UserUtente` varchar(20) NOT NULL,
  `Commento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Partecipa`
--

CREATE TABLE `Partecipa` (
  `IdTour` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Ruoli`
--

CREATE TABLE `Ruoli` (
  `User` varchar(20) NOT NULL,
  `Ruolo` enum('Admin','Normale','Moderatore','Guida') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Tour`
--

CREATE TABLE `Tour` (
  `Id` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Organizzatore` varchar(20) NOT NULL,
  `Citta` enum('Padova','Vicenza','Verona','Rovigo','Belluno','Treviso','Venezia') NOT NULL,
  `Guida` varchar(20) NOT NULL,
  `Descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Valutazioni`
--

CREATE TABLE `Valutazioni` (
  `Recensore` varchar(20) NOT NULL,
  `Guida` varchar(20) NOT NULL,
  `Voto` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Commenti`
--
ALTER TABLE `Commenti`
  ADD PRIMARY KEY (`IdComm`),
  ADD KEY `UserUtente` (`UserUtente`),
  ADD KEY `IdTour` (`IdTour`);

--
-- Indici per le tabelle `Partecipa`
--
ALTER TABLE `Partecipa`
  ADD PRIMARY KEY (`IdTour`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- Indici per le tabelle `Ruoli`
--
ALTER TABLE `Ruoli`
  ADD PRIMARY KEY (`User`);

--
-- Indici per le tabelle `Tour`
--
ALTER TABLE `Tour`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Guida` (`Guida`),
  ADD KEY `Organizzatore` (`Organizzatore`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`Username`);

--
-- Indici per le tabelle `Valutazioni`
--
ALTER TABLE `Valutazioni`
  ADD PRIMARY KEY (`Recensore`,`Guida`),
  ADD KEY `Guida` (`Guida`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Commenti`
--
ALTER TABLE `Commenti`
  MODIFY `IdComm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Tour`
--
ALTER TABLE `Tour`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Commenti`
--
ALTER TABLE `Commenti`
  ADD CONSTRAINT `Commenti_ibfk_1` FOREIGN KEY (`UserUtente`) REFERENCES `utenti` (`Username`),
  ADD CONSTRAINT `Commenti_ibfk_2` FOREIGN KEY (`IdTour`) REFERENCES `Tour` (`Id`);

--
-- Limiti per la tabella `Partecipa`
--
ALTER TABLE `Partecipa`
  ADD CONSTRAINT `Partecipa_ibfk_1` FOREIGN KEY (`IdTour`) REFERENCES `Tour` (`Id`),
  ADD CONSTRAINT `Partecipa_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `utenti` (`Username`);

--
-- Limiti per la tabella `Ruoli`
--
ALTER TABLE `Ruoli`
  ADD CONSTRAINT `Ruoli_ibfk_1` FOREIGN KEY (`User`) REFERENCES `utenti` (`Username`);

--
-- Limiti per la tabella `Tour`
--
ALTER TABLE `Tour`
  ADD CONSTRAINT `Tour_ibfk_1` FOREIGN KEY (`Guida`) REFERENCES `utenti` (`Username`),
  ADD CONSTRAINT `Tour_ibfk_2` FOREIGN KEY (`Organizzatore`) REFERENCES `utenti` (`Username`);

--
-- Limiti per la tabella `Valutazioni`
--
ALTER TABLE `Valutazioni`
  ADD CONSTRAINT `Valutazioni_ibfk_1` FOREIGN KEY (`Recensore`) REFERENCES `utenti` (`Username`),
  ADD CONSTRAINT `Valutazioni_ibfk_2` FOREIGN KEY (`Guida`) REFERENCES `utenti` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
