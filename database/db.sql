-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 16, 2019 alle 10:39
-- Versione del server: 5.6.38
-- Versione PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `progtec`
--

DELIMITER $$
--
-- Funzioni
--
CREATE DEFINER=`root`@`localhost` FUNCTION `checkUser` (`userin` VARCHAR(20)) RETURNS INT(10) BEGIN
DECLARE num INT(10);
SET num = (SELECT ruoli.User FROM ruoli WHERE ruoli.User=userin AND ((ruoli.Ruolo = "Admin") OR (ruoli.Ruolo = "Guida")));
RETURN num;  
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struttura della tabella `partecipa`
--

CREATE TABLE `partecipa` (
  `IdTour` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `partecipa`
--

INSERT INTO `partecipa` (`IdTour`, `Username`) VALUES
(1, 'admin');

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
  `Stato` enum('Approvato','Non approvato','In attesa') NOT NULL DEFAULT 'In attesa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tour`
--

INSERT INTO `tour` (`Id`, `Data`, `Organizzatore`, `Citta`, `Titolo`, `Descrizione`, `Stato`) VALUES
(1, '2019-06-03', 'rizzo', 'Padova', 'sss', 'aaaaaaaaaa', 'Approvato'),
(3, '2019-09-16', 'admin', 'Verona', 'visita Verona', 'gita a Verona', 'In attesa');

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
  `Ruolo` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`Nome`, `Cognome`, `Username`, `Password`, `Email`, `Ruolo`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin@admin.it', 'Admin'),
('kmkomk', 'jijnj', 'iijhbhu', '00000', 'mkm@', 'User'),
('kk', 'kk', 'jj', '0000', 'kk@', 'User'),
('kkk', 'kkk', 'kkk', '0000', 'll@', 'User'),
('ilaria', 'rizzo', 'rizzo', 'user', 'ilariarizzo@user.com', 'User'),
('sara', 'romito', 'sasa', 'admin', 'sararomito@admin.com', 'Admin'),
('user', 'user', 'user', 'user', 'user@user.com', 'User'),
('vasile', 'tusa', 'vasiletusa', 'user', 'vasiletusa@yahoo.it', 'User');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
