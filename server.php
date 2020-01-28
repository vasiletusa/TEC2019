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

               $controllo = "SELECT * FROM `utenti` WHERE Username='$username' ";
                $result = mysqli_query($db,$controllo) or die(mysql_error());
              $rows = mysqli_num_rows($result);
              if($rows==1){
                  $errors['esistente']="Username non disponibile";
              }
              elseif($password==$password_2){
                      $query = "INSERT INTO utenti ( nome, cognome, username, email, password, ruolo) 
                              VALUES('$nome','$cognome','$username', '$email', '$password', 'user')";
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
                      $_SESSION['pw']=$password;
              
                 
                    if($tipo=='azienda'){
                      
                        $_SESSION['usernameA']=$username;
                        


                       header("Location: area_riservata_azienda.php");
                     }
                      else {
                        $_SESSION['usernameU']=$username;

                        header("Location: area_riservata_utente.php");
                      }
                      
              }
      }      
  }

//modifica account utente
  if(isset($_POST['modifica_account'])){
    $nome = mysqli_real_escape_string($db, $_POST['nome']);
    $cognome = mysqli_real_escape_string($db, $_POST['cognome']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    $usernameU=$_SESSION['usernameU'];
    $query = "UPDATE `utenti` SET Nome = '$nome', Cognome = '$cognome', Email = '$email' WHERE Username = '$usernameU' ";
    mysqli_query($db, $query);
  
    header("Location: area_riservata_utente.php");
  }


  //modifica account azienda
  if(isset($_POST['modifica_azienda'])){
    $nomeA = mysqli_real_escape_string($db, $_POST['nome']);
    $nomeR = mysqli_real_escape_string($db, $_POST['nomeR']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    $usernameA=$_SESSION['usernameA'];
    $query = "UPDATE `aziende` SET Nome = '$nomeA', NomeReferente = '$nomeR', EmailReferente = '$email' WHERE Username = '$usernameA' ";
    mysqli_query($db, $query);
    header("Location: area_riservata_azienda.php");
  }

  //modifica password
  if(isset($_POST['modifica_pw'])){


    $pwV = mysqli_real_escape_string($db, $_POST['pwV']);
    $pwN = mysqli_real_escape_string($db, $_POST['pwN']);
    $pwC = mysqli_real_escape_string($db, $_POST['pwC']);
    $pw=$_SESSION['pw'];
    if($pwN!=$pwC){$errors['password2']="Le password non coincidono";}
      elseif($pwV==$pw){
      
          $usernameU=$_SESSION['usernameU'];
          $query = "UPDATE `utenti` SET Password = '$pwN' WHERE Username = '$usernameU' ";
          mysqli_query($db, $query);
          $query = "UPDATE `log` SET Password = '$pwN' WHERE Username = '$usernameU' ";
          mysqli_query($db, $query);
          $_SESSION['pw']=$pwN;
          header("Location: area_riservata_utente.php");
      }else $errors['passwordE']="Password errata";


  }

  //modifica password azienda
  if(isset($_POST['modifica_pw_a'])){

    $pwV = mysqli_real_escape_string($db, $_POST['pwV']);
    $pwN = mysqli_real_escape_string($db, $_POST['pwN']);
    $pwC = mysqli_real_escape_string($db, $_POST['pwC']);
    if($pwN!=$pwc){$errors['password2']="Le password non coincidono";}
      elseif($pwV==$_SESSION['pw']){
          $usernameA=$_SESSION['usernameA'];

          $query = "UPDATE `aziende` SET Password = '$pwN' WHERE Username = '$usernameA' ";

          mysqli_query($db, $query);
          $query = "UPDATE `log` SET Password = '$pwN' WHERE Username = '$usernameA' ";
          mysqli_query($db, $query);

          header("Location: area_riservata_azienda.php");
      }else $errors['passwordE']="Password errata";
  }

//nuovo evento
  if (isset($_POST['nuovo_evento'])) {

  $titolo = mysqli_real_escape_string($db, $_POST['TitoloEvento']);
  $descrizione = mysqli_real_escape_string($db, $_POST['Descrizione']);
  $luogo = mysqli_real_escape_string($db, $_POST['Luogo']);
  $data = mysqli_real_escape_string($db, $_POST['Data']);
  $categoria = $_POST['selectCategoria'];
  $citta=$_POST['selectCitta'];
  $temp_name  = $_FILES['file']['tmp_name'];


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
  if($categoria=='Seleziona'){
    $errors['Categoria']="Categoria richiesta";
  }
  if($citta=='Seleziona'){
    $errors['Citta']="Citta richiesta";
  }

  
  
    else{
                      $azienda=$_SESSION['usernameA'];
                      $query2 = "INSERT INTO eventi (titolo, descrizione, luogo, citta, data, categoria, azienda ) 
                              VALUES('$titolo','$descrizione', '$luogo', '$citta', '$data', '$categoria', '$azienda')";
                      
                        mysqli_query($db, $query2);
                   
                     
                      $sql = "SELECT ID FROM `eventi` WHERE azienda='$azienda' ORDER BY ID DESC LIMIT 1 ";
                      

                      $result= mysqli_query($db, $sql);
                        $ris=mysqli_fetch_assoc($result);
                      
                      $name = $ris['ID'].'.' . pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);


     
                      if(isset($name)){
                          if(!empty($name)){      
                              $location = 'uploads/';      
                              if(move_uploaded_file($temp_name, $location.$name)){
                                  echo 'File uploaded successfully';

                              }
                          }       
                      }  

                        header("Location: area_riservata_azienda.php");
    }

}


 if(isset($_POST['iscriviti'])){

      $id=$_SESSION['idEvento'];
  
      $username=$_SESSION['usernameU'];
      
        $query = "INSERT INTO partecipa (ID, Username) 
                                VALUES('$id','$username')";
        $result = mysqli_query($db,$query) or die(mysql_error());
    

  }

 if(isset($_POST['disiscriviti'])){

     $id=$_SESSION['idEvento'];
  
      $username=$_SESSION['usernameU'];
      
        $query = "DELETE FROM `partecipa`WHERE ID='$id' AND Username='$username'";
        $result = mysqli_query($db,$query) or die(mysql_error());
  }

if(isset($_POST['preferiti'])){

     $id=$_SESSION['idEvento'];
  
      $username=$_SESSION['usernameU'];
      
        $query = "INSERT INTO preferiti (ID, Username) 
                                VALUES('$id','$username')";
        $result = mysqli_query($db,$query) or die(mysql_error());
        echo $result;
  }
if(isset($_POST['nopreferiti'])){

     $id=$_SESSION['idEvento'];
  
      $username=$_SESSION['usernameU'];
      
        $query = "DELETE FROM `preferiti` WHERE ID='$id' AND Username='$username'";
        $result = mysqli_query($db,$query) or die(mysql_error());
  }


if(isset($_POST['elimina'])){
  $id=$_SESSION['idEvento'];
  $query = "DELETE FROM `eventi` WHERE ID='$id'";
  $result = mysqli_query($db, $query) or die(mysql_error());
  header("Location: area_riservata_azienda.php");


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
function getPasswordE($errors){
  if(isset($errors['passwordE'])){
    echo $errors['passwordE'];
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
  if(isset($errors['Data'])){
      echo $errors['Data'];
    }
}

function getCittaError($errors) { 
  if(isset($errors['Citta'])){
      echo $errors['Citta'];
    }
}

function getTitoloError($errors) { 
  if(isset($errors['TitoloEvento'])){
      echo $errors['TitoloEvento'];
    }
}

function getDescrizioneError($errors) { 
  if(isset($errors['Descrizione'])){
      echo $errors['Descrizione'];
    }
}
function getCategoriaError($errors) { 
  if(isset($errors['Categoria'])){
      echo $errors['Categoria'];
    }
}


 

      
  
?>
