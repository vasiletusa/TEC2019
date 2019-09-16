-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 16, 2019 alle 19:34
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
(1, 'Padova', 'Padova &egrave; una citt&agrave; del Veneto, in Italia Settentrionale, nota per gli affreschi di Giotto della Cappella degli Scrovegni, del 1303-05, e per la grande Basilica di Sant\'Antonio del XIII secolo. La basilica, caratterizzata da cupole in stile bizantino e pregevoli opere d\'arte, ospita la tomba del santo a cui &egrave; intitolata. Nel centro storico della citt&agrave; si trovano strade con portici ed eleganti caffetterie frequentate dagli studenti dell\'Universit&agrave; di Padova, fondata nel 1222.'),
(2, 'Verona', 'Verona &egrave; una citt&agrave; della regione Veneto, nel nord Italia. Il suo centro storico, costruito in un\'ansa del fiume Adige, &egrave; di epoca medievale. Verona &egrave; conosciuta per essere la citt&agrave; di Romeo e Giulietta, i personaggi dell\'opera di Shakespeare, e non a caso ospita un edificio del XVI secolo chiamato \"la casa di Giulietta\", con un delizioso balcone affacciato su un cortile. L\'Arena di Verona, grande anfiteatro romano del primo secolo, ospita concerti e opere liriche.'),
(3, 'Vicenza', 'Vicenza &egrave; una citt&agrave; del Veneto, nell\'Italia nord-orientale. &egrave; nota per gli eleganti edifici progettati da Andrea Palladio, architetto del XVI secolo. Questi includono la Basilica Palladiana e il Palazzo Chiericati, ora sede di una galleria d\'arte. Nelle vicinanze, sempre di Palladio, il Teatro Olimpico, al coperto, &egrave; costruito secondo lo stile un classico teatro all\'aperto. Nella periferia della citt, la Villa La Rotonda, in collina, ha 4 facciate identiche.'),
(4, 'Venezia', 'Venezia, il capoluogo della regione Veneto, &egrave; adagiata su più di 100 piccole isole all\'interno di una laguna nel mare Adriatico. In questa citt&agrave; non esistono strade ma canali, tra cui il Canal Grande, fiancheggiato da palazzi rinascimentali e gotici. Sulla piazza centrale, piazza San Marco, sorgono la Basilica di San Marco, arricchita da mosaici bizantini, e il campanile di San Marco, da cui si possono ammirare i tetti rossi della citt&agrave;.'),
(5, 'Rovigo', 'Il comune di Rovigo si estende tra l\'Adige a nord e il Canalbianco a sud, ad eccezione della frazione di Fenil del Turco, che &egrave; situata tra il Canalbianco e lo scolo Zucca; si trova a circa 41 km dalla costa del mare Adriatico.\r\n\r\nIl territorio &egrave; estremamente pianeggiante e l\'altitudine varia tra i 5 e gli 8 metri sul livello del mare. &egrave; attraversato dal\'Adigetto e da numerosi canali artificiali che servono sia per la bonifica idraulica sia per l\'irrigazione. Tra questi il Ceresolo, il Rezzinella, il Valdentro, l\'Adigetto, il Canalbianco, il Pontecchio, lo Zucca segnano, in alcuni tratti, i confini del comune; il Collettore Padano Polesano attraversa la frazione di Fenil del Turco.'),
(6, 'Belluno', 'La provincia di Belluno &egrave; una provincia italiana del Veneto di 202 589 abitanti. Il territorio totalmente montano si estende per 3 610,20 km² nel settore delle Alpi Orientali, dove sono presenti la maggior parte dei gruppi dolomitici per cui può essere ritenuta la provincia delle Dolomiti.'),
(7, 'Treviso', 'Treviso &egrave; una citt&agrave; con molti canali, situata nell\'Italia nordorientale. Nella centrale Piazza dei Signori sorge il Palazzo dei Trecento, con merli e portici a volta. La Fontana delle Tette &egrave; una fontana del XVI secolo utilizzata per distribuire il vino. Nelle vicinanze, il Duomo presenta una facciata neoclassica, una cripta romanica e un dipinto di Tiziano. Il Complesso di Santa Caterina, sito principale dei Musei Civici, ha affreschi medievali.');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
