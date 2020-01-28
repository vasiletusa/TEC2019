-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 28, 2020 alle 07:39
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
('amici', 'laura', 'laura@amici.it', 'amici', 'amici'),
('Aperishow', 'Gianluca', 'gianluca@aperishow', 'aperishow', 'aperishow'),
('MotorShow', 'james', 'james@motorshow.it', 'azienda', 'azienda'),
('blended', 'matteo', 'matteo@blended.it', 'blended', 'blended'),
('HotelDanieli', 'danieli', 'danieli@hoteldanieli.it', 'danieli', 'danieli'),
('Garzanti', 'mario', 'mario@garzanti.it', 'garzanti', 'garzanti'),
('iFitness', 'mark', 'mark@ifitness.it', 'ifitness', 'ifitness'),
('Sweet Elderly People', 'orietta', 'orietta@sweetelderlypeople.it', 'sweetelderlypeople', 'sweetelderlypeople'),
('vivipadova', 'davide', 'davide@vivipadova.it', ' vivipadova', 'vivipadova');

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
(1, 'Scopri Giotto', 'Padova &egrave; nota per gli affreschi di Giotto della Cappella degli Scrovegni', 'via Roma 33', 'Padova', '2020-02-20', 'Cultura', 'vivipadova'),
(2, 'Mercoled&igrave; universitario', 'il Mercoled&igrave; universitario &egrave; il giorno preferito dagli studenti di Padova, in quanto possono pensare al divertimento.', 'via Jappelli 9', 'Padova', '2020-03-30', 'Giovani', 'amici'),
(3, 'Hotel&Conoscenza', 'Danieli Hotel &egrave; lieto di presentare \"Soggiorni Autore\", quattro imperdibili appuntamenti con la storia di grandi personaggi.', 'Via Scrovegni 30', 'Venezia', '2020-03-19', 'Cultura', 'danieli'),
(4, 'MotorShow', 'Evento espositivo sui nuovi motori elettrici', 'via Ippolito Nievo 98', 'Verona', '2020-03-15', 'Giovani', 'azienda'),
(5, 'Auto&Moto Epoca', 'Evento espositivo su tutte le oldtimers che hanno fatto la storia automobilistica', 'via Pertini 94', 'Vicenza', '2020-03-18', 'Spettacolo', 'azienda'),
(6, 'Manutenzione Auto', 'Consigli pratici su come fare una corretta manutenzione della propria auto', 'Piazza Vittoria 26', 'Treviso', '2020-03-22', 'Famiglie', 'garzanti'),
(7, 'Presentazione Il Giorgione', 'Presentazione della biografia del Giorgione, celebre pittore di Castelfranco Veneto', 'via Einaudi 44', 'Treviso', '2020-04-01', 'Cultura', 'garzanti'),
(8, 'Zumba', 'Presentazione corso di Zumba per persone della terza età', 'via Cantele 1A', 'Venezia', '2020-04-02', 'Famiglie', 'ifitness'),
(9, 'Bingo', 'Serata Bingo offerta dalla casa di riposo Sweet Elderly People', 'via Locatelli 656', 'Verona', '2020-04-10', 'Famiglie', 'sweetelderlypeople'),
(10, 'Alfa Romeo motorshow', 'Evento dedicato a tutti gli appassionati del celebre Marchio automobilistico', 'via Monte Napoleone 6', 'Belluno', '2020-04-10', 'Spettacolo', 'motorshow'),
(11, 'AperyShow', 'Evento benefico per la raccolta fondi contro la SLA', 'Piazza Mantovani 55', 'Rovigo', '2020-04-11', 'Famiglie', 'aperyshow');

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
('amici', 'amici', 'azienda'),
('asalviato', 'asalviato', 'user'),
('azienda', 'azienda', 'azienda'),
('blended', 'blended', 'azienda'),
('danieli', 'danieli', 'azienda'),
('ifitness', 'ifitness', 'azienda'),
('irizzo', 'irizzo', 'user'),
('motorshow', 'motorshow', 'azienda'),
('sromito', 'sromito', 'user'),
('sweetelderlypeople', 'sweetelderlypeople', 'azienda'),
('user', 'user', 'user'),
('vivipadova', 'vivipadova', 'azienda'),
('vtusa', 'vtusa', 'user');

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
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`Nome`, `Cognome`, `Username`, `Password`, `Email`) VALUES
('Alberto', 'Salviato', 'asalviato', 'asalviato', 'alberto.salviato@studenti.unipd.it'),
('ilaria', 'Rizzo', 'irizzo', 'irizzo', 'ilaria.rizzo.5@studenti.unipd.it'),
('Sara', 'Romito', 'sromito', 'sromito', 'sara.romito@studenti.unipd.it'),
('User', 'User', 'user', 'user', 'user@user'),
('Vasile', 'Tusa', 'vtusa', 'vtusa', 'vasile.tusa@studenti.unipd.it');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
