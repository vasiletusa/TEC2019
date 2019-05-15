<?php
$conn= require 'connessione.php' ;

// recupero i valori si NOME e INDIRIZZO e li assegno alle variabili $name e $address
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


//inserting data order
$conn->query("INSERT INTO utenti
			(Nome, Cognome)
			VALUES
			('$firstname',
			'$lastname')");

?>