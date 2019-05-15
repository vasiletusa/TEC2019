<?php
$tuor= require 'connessione.php' ;

// recupero i valori si NOME e INDIRIZZO e li assegno alle variabili $name e $address
$data = $_POST['data'];
$organizzatore = $_POST['organizzatore'];
$citta = $_POST['citta'];
$guida = $_POST['guida'];
$descrizione = $_POST['descrizione'];



//inserting data order
$tour->query("INSERT INTO Tour
			(Organizzatore,Guida,Descrizione)
			VALUES
			(
			'$organizzatore',
			
			'$guida',
			'$descrizione')");

?>


