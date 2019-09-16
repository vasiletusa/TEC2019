-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 16, 2019 alle 23:10
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
-- Database: `irizzo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `citta`
--

CREATE TABLE `citta` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `citta`
--

INSERT INTO `citta` (`Id`, `Nome`, `Descrizione`) VALUES
(1, 'Padova', 'Padova è una citta del Veneto, in Italia Settentrionale, nota per gli affreschi di Giotto della Cappella degli Scrovegni, del 1303-05, e per la grande Basilica di Sant\'Antonio del XIII secolo. La basilica, caratterizzata da cupole in stile bizantino e pregevoli opere d\'arte, ospita la tomba del santo a cui è intitolata. Nel centro storico della citta si trovano strade con portici ed eleganti caffetterie frequentate dagli studenti dell\'Università di Padova, fondata nel 1222.'),
(2, 'Verona', 'Verona è una citta della regione Veneto, nel nord Italia. Il suo centro storico, costruito in un\'ansa del fiume Adige, è di epoca medievale. Verona è conosciuta per essere la citta di Romeo e Giulietta, i personaggi dell\'opera di Shakespeare, e non a caso ospita un edificio del XVI secolo chiamato \"la casa di Giulietta\", con un delizioso balcone affacciato su un cortile. L\'Arena di Verona, grande anfiteatro romano del primo secolo, ospita concerti e opere liriche.'),
(3, 'Vicenza', 'orientale. È nota per gli eleganti edifici progettati da Andrea Palladio, architetto del XVI secolo. Questi includono la Basilica Palladiana e il Palazzo Chiericati, ora sede di una galleria d\'arte. Nelle vicinanze, sempre di Palladio, il Teatro Olimpico, al coperto, è costruito secondo lo stile un classico teatro all\'aperto. Nella periferia della citta, la Villa La Rotonda, in collina, ha 4 facciate identiche.'),
(4, 'Venezia', 'Venezia, il capoluogo della regione Veneto, è adagiata su più di 100 piccole isole all\'interno di una laguna nel mare Adriatico. In questa citta non esistono strade ma canali, tra cui il Canal Grande, fiancheggiato da palazzi rinascimentali e gotici. Sulla piazza centrale, piazza San Marco, sorgono la Basilica di San Marco, arricchita da mosaici bizantini, e il campanile di San Marco, da cui si possono ammirare i tetti rossi della citta.'),
(5, 'Rovigo', 'l comune di Rovigo si estende tra l\'Adige a nord e il Canalbianco a sud, ad eccezione della frazione di Fenil del Turco, che è situata tra il Canalbianco e lo scolo Zucca; si trova a circa 41 km dalla costa del mare Adriatico.\r\n\r\nIl territorio è estremamente pianeggiante e l\'altitudine varia tra i 5 e gli 8 metri sul livello del mare. È attraversato dall\'Adigetto e da numerosi canali artificiali che servono sia per la bonifica idraulica sia per l\'irrigazione. Tra questi il Ceresolo, il Rezzinella, il Valdentro, l\'Adigetto, il Canalbianco, il Pontecchio, lo Zucca segnano, in alcuni tratti, i confini del comune; il Collettore Padano Polesano attraversa la frazione di Fenil del Turco.\r\n'),
(6, 'Belluno', 'La provincia di Belluno è una provincia italiana del Veneto di 202 589 abitanti. Il territorio totalmente montano si estende per 3 610,20 km² nel settore delle Alpi Orientali, dove sono presenti la maggior parte dei gruppi dolomitici per cui può essere ritenuta la provincia delle Dolomiti.'),
(7, 'Treviso', 'Treviso è una citta con molti canali, situata nell\'Italia nordorientale. Nella centrale Piazza dei Signori sorge il Palazzo dei Trecento, con merli e portici a volta. La Fontana delle Tette è una fontana del XVI secolo utilizzata per distribuire il vino. Nelle vicinanze, il Duomo presenta una facciata neoclassica, una cripta romanica e un dipinto di Tiziano. Il Complesso di Santa Caterina, sito principale dei Musei Civici, ha affreschi medievali.');

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
(5, 'SRomito', '');

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
(5, '2019-09-20', 'IRizzo', 'Padova', 'Gita all\'orto botanico', 'Partenza alle 8.00 con ritrovo in Prato della Valle. Si procede a piedi verso l\'orto botanico in via Orto Botanico 15. I biglietto ha un costo di 10 euro (dai 26 anni ai 64 anni), 8 euro (dai 65 anni), 5 euro (dai 13 ai 25 anni) e gratuito per gli studenti universitari. Se raggiungiamo un gruppo di almeno 10 persone il biglietto ottiene un costo ridotto di 7 euro. Dopo la visita si torna in Prato della Valle per un giro della piazza e un aperitivo tutti insieme.', 'Approvato');

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
-- Indici per le tabelle `citta`
--
ALTER TABLE `citta`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT per la tabella `citta`
--
ALTER TABLE `citta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `tour`
--
ALTER TABLE `tour`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
