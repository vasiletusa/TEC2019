<?php


// initializing variables
$username = "";
$email    = "";
$nome    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'progtec');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  session_start();
//REGISTRAZIONE
if (isset($_POST['registrazione_utente'])) {
  // receive all input values from the form
  $nome = mysqli_real_escape_string($db, $_POST['nome']);
  $cognome = mysqli_real_escape_string($db, $_POST['cognome']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['passwordR']);
  //controllo se esiste già uno username uguale
          $controllo = "SELECT * FROM `utenti` WHERE Username='$username' ";
          $result = mysqli_query($db,$controllo) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
    $_SESSION['errore']="username";
  }

  elseif($password==$password_2){
          $query = "INSERT INTO utenti ( nome, cognome, username, email, password) 
          			  VALUES('$nome','$cognome','$username', '$email', '$password')";
          	mysqli_query($db, $query);
            $_SESSION['username']=$username;
            $_SESSION['isLogged']=true;
            //reindirizzamento

            header("Location: area_riservata.php");

  }else
        $_SESSION['errore']="password";
  	
  }

  //LOGIN
   
if (isset($_POST['username'])){
     
  $username = stripslashes($_REQUEST['username']);
        
  $username = mysqli_real_escape_string($db,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($db,$password);
  
        $query = "SELECT * FROM `utenti` WHERE Username='$username' and Password='$password'";
  $result = mysqli_query($db,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
          $_SESSION['username'] = $username;
          $_SESSION['isLogged']= true;
                //Reindirizzamento 
          if($_SESSION['isOrganize']==true){
            header("Location: registra_tour.php");
            $SESSION['isOrganize']=false;}
            else{
            header("Location: area_riservata.php");}
          }else{
            echo "<div  class=\"errore\"> <h3>Username o password sbagliato.</h3></div>";
            }
}
  



?>
