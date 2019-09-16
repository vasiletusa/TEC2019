-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 16, 2019 alle 15:19
-- Versione del server: 5.6.38
-- Versione PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `progtec`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `città`
--

CREATE TABLE `città` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `città`
--

INSERT INTO `città` (`Id`, `Nome`, `Descrizione`) VALUES
(1, 'Padova', 'Padova è una città del Veneto, in Italia Settentrionale, nota per gli affreschi di Giotto della Cappella degli Scrovegni, del 1303-05, e per la grande Basilica di Sant\'Antonio del XIII secolo. La basilica, caratterizzata da cupole in stile bizantino e pregevoli opere d\'arte, ospita la tomba del santo a cui è intitolata. Nel centro storico della città si trovano strade con portici ed eleganti caffetterie frequentate dagli studenti dell\'Università di Padova, fondata nel 1222.'),
(2, 'Verona', 'Verona è una città della regione Veneto, nel nord Italia. Il suo centro storico, costruito in un\'ansa del fiume Adige, è di epoca medievale. Verona è conosciuta per essere la città di Romeo e Giulietta, i personaggi dell\'opera di Shakespeare, e non a caso ospita un edificio del XVI secolo chiamato \"la casa di Giulietta\", con un delizioso balcone affacciato su un cortile. L\'Arena di Verona, grande anfiteatro romano del primo secolo, ospita concerti e opere liriche.'),
(3, 'Vicenza', 'Vicenza è una città del Veneto, nell\'Italia nord-orientale. È nota per gli eleganti edifici progettati da Andrea Palladio, architetto del XVI secolo. Questi includono la Basilica Palladiana e il Palazzo Chiericati, ora sede di una galleria d\'arte. Nelle vicinanze, sempre di Palladio, il Teatro Olimpico, al coperto, è costruito secondo lo stile un classico teatro all\'aperto. Nella periferia della città, la Villa La Rotonda, in collina, ha 4 facciate identiche.'),
(4, 'Venezia', 'Venezia, il capoluogo della regione Veneto, è adagiata su più di 100 piccole isole all\'interno di una laguna nel mare Adriatico. In questa città non esistono strade ma canali, tra cui il Canal Grande, fiancheggiato da palazzi rinascimentali e gotici. Sulla piazza centrale, piazza San Marco, sorgono la Basilica di San Marco, arricchita da mosaici bizantini, e il campanile di San Marco, da cui si possono ammirare i tetti rossi della città.'),
(5, 'Rovigo', 'l comune di Rovigo si estende tra l\'Adige a nord e il Canalbianco a sud, ad eccezione della frazione di Fenil del Turco, che è situata tra il Canalbianco e lo scolo Zucca; si trova a circa 41 km dalla costa del mare Adriatico.\r\n\r\nIl territorio è estremamente pianeggiante e l\'altitudine varia tra i 5 e gli 8 metri sul livello del mare. È attraversato dall\'Adigetto e da numerosi canali artificiali che servono sia per la bonifica idraulica sia per l\'irrigazione. Tra questi il Ceresolo, il Rezzinella, il Valdentro, l\'Adigetto, il Canalbianco, il Pontecchio, lo Zucca segnano, in alcuni tratti, i confini del comune; il Collettore Padano Polesano attraversa la frazione di Fenil del Turco.\r\n'),
(6, 'Belluno', 'La provincia di Belluno è una provincia italiana del Veneto di 202 589 abitanti. Il territorio totalmente montano si estende per 3 610,20 km² nel settore delle Alpi Orientali, dove sono presenti la maggior parte dei gruppi dolomitici per cui può essere ritenuta la provincia delle Dolomiti.'),
(7, 'Treviso', 'Treviso è una città con molti canali, situata nell\'Italia nordorientale. Nella centrale Piazza dei Signori sorge il Palazzo dei Trecento, con merli e portici a volta. La Fontana delle Tette è una fontana del XVI secolo utilizzata per distribuire il vino. Nelle vicinanze, il Duomo presenta una facciata neoclassica, una cripta romanica e un dipinto di Tiziano. Il Complesso di Santa Caterina, sito principale dei Musei Civici, ha affreschi medievali.');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `città`
--
ALTER TABLE `città`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `città`
--
ALTER TABLE `città`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
