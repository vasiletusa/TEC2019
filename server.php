<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$nome    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'progtec');

//REGISTRAZIONE
if (isset($_POST['registrazione_utente'])) {
  // receive all input values from the form
  $nome = mysqli_real_escape_string($db, $_POST['nome']);
  $cognome = mysqli_real_escape_string($db, $_POST['cognome']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['passwordR']);
  $query = "INSERT INTO utenti ( nome, cognome, username, email, password) 
  			  VALUES('$nome','$cognome','$username', '$email', '$password')";
  echo "$username";
  echo "$email";
  echo "$password";
  echo "$password_2";
  echo "$nome";
  	mysqli_query($db, $query);
  	
  }

  //LOGIN
  
  if(isset($_POST['login_utente'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $query= "SELECT * FROM utenti WHERE username=$username AND password=$password";
    $ris=mysqli_query($db, $query);

    
    if (mysqli_num_rows($ris) == 1){
      echo "loggato";}
    else{
    echo "errore";
    echo "$username";
    echo "$password";}

  }
  ?>
