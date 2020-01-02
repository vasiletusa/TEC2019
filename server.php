<?php


// initializing variables
$username = "";
$email    = "";
$nome    = "";
$errors = array();
$tuoitour=array(); 
$isOrganize=false;

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'irizzo');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if(!isset($_SESSION)) {
  $_SESSION['isLogged']=NULL;
     session_start();

}


    
//REGISTRAZIONE DEGLI UTENTI
if (isset($_POST['registrazione_utente'])) {
  // receive all input values from the form
  $nome = mysqli_real_escape_string($db, $_POST['nome']);
  $cognome = mysqli_real_escape_string($db, $_POST['cognome']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['passwordR']);
  if(empty($nome)){
    $errors['nome']="Nome richiesto";
  }
  if(empty($cognome)){
    $errors['cognome']="Cognome richiesto";
  }
  if(empty($username)){
    $errors['username']="Username richiesto";
  }
  if(empty($email)){
    $errors['email']="Email richiesta";
  }
  if(empty($nome)){
    $errors['password']="Password richiesta";
  }
  if(empty($nome)){
    $errors['password2']="Conferma password";
  }
  if($password != $password_2){
    $errors['password']="Le password non corrispondono";
    $errors['password2']="Le password non corrispondono";
  }
  if(strpos($email,'@') == false){
    $errors['email']="Fornire una mail valida";
  }
  
  if(strlen($password)<4){
    $errors['password']="La password deve contenere almeno 4 caratteri";
  }
    else{

        //controllo se esiste già uno username uguale
               $controllo = "SELECT * FROM `utenti` WHERE Username='$username' ";
                $result = mysqli_query($db,$controllo) or die(mysql_error());
              $rows = mysqli_num_rows($result);
              if($rows==1){
                  $errors['esistente']="Username non disponibile";
              }
              elseif($password==$password_2){
                      $query = "INSERT INTO utenti ( nome, cognome, username, email, password, ruolo) 
                      			  VALUES('$nome','$cognome','$username', '$email', '$password', 'User')";
                      	mysqli_query($db, $query);
                        $_SESSION['usernameU']=$username;
                        $_SESSION['isLoggedU']=true;
                        $tipo="utente";
                        $query2 = "INSERT INTO log (username, password, tipo)VALUES('$username','$password', '$tipo')";
                        mysqli_query($db, $query2);
                        //reindirizzamento
                        header("Location: area_riservata_utente.php");
              }else
            $errors['noPassword']="Le password non coincidono";  	
  }
}



//REGISTRAZIONE DELLE AZIENDE
if (isset($_POST['registrazione_azienda'])) {
 
  // receive all input values from the form
  $nomeA = mysqli_real_escape_string($db, $_POST['NomeAzienda']);
  $nomeR = mysqli_real_escape_string($db, $_POST['NomeReferente']);
  $emailR = mysqli_real_escape_string($db, $_POST['EmailReferente']);
  $username = mysqli_real_escape_string($db, $_POST['Username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['passwordR']);
  
  if(empty($nome)){
    $errors['NomeAzienda']="Nome richiesto";
  }
  if(empty($cognome)){
    $errors['NomeReferente']="Cognome richiesto";
  }
  if(empty($username)){
    $errors['EmailReferente']="Email richiesta";
  }
  if(empty($email)){
    $errors['Username']="Username richiesto";
  }
  if(empty($nome)){
    $errors['password']="Password richiesta";
  }
  if(empty($nome)){
    $errors['password2']="Conferma password";
  }
  if($password != $password_2){
    $errors['password']="Le password non corrispondono";
    $errors['password2']="Le password non corrispondono";
  }
  if(strpos($email,'@') == false){
    $errors['EmailReferente']="Fornire una mail valida";
  }
  
  if(strlen($password)<4){
    $errors['password']="La password deve contenere almeno 4 caratteri";
  }
    else{
   

        //controllo se esiste già uno username uguale
              $controllo = "SELECT * FROM `aziende` WHERE username='$username' ";
              $result = mysqli_query($db,$controllo) or die(mysql_error());
              $rows = mysqli_num_rows($result);
              if($rows==1){
             
                  $errors['esistente']="Username non disponibile";
              }
              elseif($password==$password_2){
                echo "$nomeA, $nomeR, $emailR, $password, $username";
                      $query2 = "INSERT INTO aziende (nome, nomereferente, emailreferente, password, username) 
                              VALUES('$nomeA','$nomeR', '$emailR', '$password', '$username')";
                        mysqli_query($db, $query2);
                    
                        $_SESSION['usernameA']=$username;
                       
                        $_SESSION['isLogged']=true;
                        $tipo="azienda";
                     
                      $query3 = "INSERT INTO log (username, password, tipo)VALUES('$username','$password', '$tipo')";
                      mysqli_query($db, $query3);
                        //reindirizzamento
                        header("Location: area_riservata_azienda.php");
              }else
            $errors['noPassword']="Le password non coincidono";   
  }
}

  //LOGIN
   
if (isset($_POST['Login'])){
     
  $username = stripslashes($_REQUEST['username']);
        
  $username = mysqli_real_escape_string($db,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($db,$password);
  if (empty($username)) {
    $errors['username']="Username richiesto";
  }
  if (empty($password)) {
    $errors['password']="Password richiesta";
  }
  if (count($errors) == 0) {
        $query = "SELECT * FROM `log` WHERE Username='$username' and Password='$password'";
        $result = mysqli_query($db,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        $ris=mysqli_fetch_assoc($result);
        $tipo=$ris['Tipo'];
              if($rows==1){
                
                $_SESSION['isLogged']= true;
                      //Reindirizzamento 
              
                 
                    if($tipo=='azienda'){
                      
                        $_SESSION['usernameA']=$username;
                       
                        header("Location: area_riservata_azienda.php");}
                      elseif($tipo=='utente') {
                        $_SESSION['usernameU']=$username;
                        header("Location: area_riservata_utente.php");
                      }
                      else{
                        $_SESSION['usernameAdmin']=$username;
                        header("Location: area_riservata_admin.php");
                      }
              }
      }      
  }


//nuovo evento
  if (isset($_POST['nuovo_evento'])) {
 
  // receive all input values from the form
  $titolo = mysqli_real_escape_string($db, $_POST['TitoloEvento']);
  $descrizione = mysqli_real_escape_string($db, $_POST['Descrizione']);
  $luogo = mysqli_real_escape_string($db, $_POST['Luogo']);
  $data = mysqli_real_escape_string($db, $_POST['Data']);
  $categoria = mysqli_real_escape_string($db, $_POST['Categoria']);
  
  if(empty($titolo)){
    $errors['TitoloEvento']="Titolo richiesto";
  }
  if(empty($descrizione)){
    $errors['Descrizione']="Descrizione richiesta";
  }
  if(empty($luogo)){
    $errors['Luogo']="Luogo richiesto";
  }
  if(empty($data)){
    $errors['Data']="Data richiesta";
  }
  if(empty($categoria)){
    $errors['categoria']="Categoria richiesta";
  }
  
  
    else{
                      $azienda=$_SESSION['usernameA'];
                      $query2 = "INSERT INTO eventi (titolo, descrizione, luogo, categoria, azienda ) 
                              VALUES('$titolo','$descrizione', '$luogo', '$categoria', '$azienda')";
                        mysqli_query($db, $query2);
                    
                        
                     
                      
                        //reindirizzamento
                        header("Location: area_riservata_azienda.php");
    }

}


 if(isset($_POST['iscriviti'])){

      $id=$_SESSION['idEvento'];
  
      $username=$_SESSION['usernameU'];
      
        $query = "INSERT INTO partecipa (ID, Username) 
                                VALUES('$id','$username')";
        $result = mysqli_query($db,$query) or die(mysql_error());
        echo $result;
    

  }

 if(isset($_POST['disiscriviti'])){

     $id=$_SESSION['idEvento'];
  
      $username=$_SESSION['usernameU'];
      
        $query = "DELETE FROM `partecipa`WHERE ID='$id' AND Username='$username'";
        $result = mysqli_query($db,$query) or die(mysql_error());
    

    

  }
function setOrganizza(){
    if(!isset($_SESSION["username"])){
     $_SESSION['isOrganize']=true;
    header("Location: login.php");
    
    exit();}
    else    $isOrganize=false;

  }


function getUsernameError($errors) { 
  if(isset($errors['username'])){
      echo $errors['username'];
    }
}
function getNomeError($errors) { 
  if(isset($errors['nome'])){
      echo $errors['nome'];
    }
}
function getCognomeError($errors) { 
  if(isset($errors['cognome'])){
      echo $errors['cognome'];
    }
}
function getEmailError($errors) { 
  if(isset($errors['email'])){
      echo $errors['email'];
    }
}
function getPasswordError($errors) { 
  if(isset($errors['password'])){
      echo $errors['password'];
    }
}
function getPassword2Error($errors) { 
  if(isset($errors['password2'])){
      echo $errors['password2'];
    }
}
function getEsistenteError($errors) { 
  if(isset($errors['esistente'])){
      echo $errors['esistente'];
    }
}
function getNoPasswordError($errors) { 
  if(isset($errors['noPassword'])){
      echo $errors['noPassword'];
    }
}

function getDataError($errors) { 
  if(isset($errors['data'])){
      echo $errors['data'];
    }
}

function getCittaError($errors) { 
  if(isset($errors['citta'])){
      echo $errors['citta'];
    }
}

function getTitoloError($errors) { 
  if(isset($errors['titolo'])){
      echo $errors['titolo'];
    }
}

function getDescrizioneError($errors) { 
  if(isset($errors['descrizione'])){
      echo $errors['descrizione'];
    }
}



function rifiuta()
    {
      $id=$_SESSION['idTour'];
      $db = mysqli_connect('localhost', 'root', 'root', 'irizzo');

        $sql= " UPDATE `tour` SET Stato='Rifiutato' WHERE Id='$id'";
      
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    

    }

  function accetta(){

      $id=$_SESSION['idTour'];
      $db = mysqli_connect('localhost', 'root', 'root', 'irizzo');

        $sql= " UPDATE `tour` SET Stato='Approvato' WHERE Id='$id'";
      
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    

  }

 

      
  
?>
