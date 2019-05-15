<?php
$conn= require 'connessione.php' ;


$username= $_POST['username'];
$password= $_POST['password'];






$statement= $conn->prepare("SELECT * FROM utenti WHERE Username= :username and Password=:password");
$statement->bindParam(':username', $username, PDO::PARAM_STR);
$statement->bindParam(':password', $password, PDO::PARAM_STR);
$statement->execute();
$row=$statement->fetch();
	

if($row)
	echo "si";
else
	echo "no";
?>