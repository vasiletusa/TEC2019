<?php


// initializing variables
$username = "";
$email    = "";
$nome    = "";
$errors = array();
$tuoitour=array(); 
$isOrganize=false;

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'progtec');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if(!isset($_SESSION)) {
  $_SESSION['isLogged']=NULL;
     session_start();
}

//ACCETTAZIONE TOUR
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['accetta']))
    {
        accetta();
    }
    //RIFIUTA TOUR
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['rifiuta']))
    {
        rifiuta();
    }
    //ISCRIVITI
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['iscriviti']))
    {
        iscriviti();
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['disiscriviti']))
    {
        disiscriviti();
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
                        $_SESSION['username']=$username;
                        $_SESSION['isLogged']=true;
                        //reindirizzamento
                        header("Location: area_riservata.php");
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
        $query = "SELECT * FROM `utenti` WHERE Username='$username' and Password='$password'";
        $result = mysqli_query($db,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
       
        $ris=mysqli_fetch_assoc($result);
        $ruolo=$ris['Ruolo'];
              if($rows==1){
                $_SESSION['username'] = $username;
                $_SESSION['isLogged']= true;
                      //Reindirizzamento 
                if($isOrganize==true){
                  header("Location: registra_tour.php");
                 $isOrganize=false;}
                  else{
                    if($ruolo=='User')
                        header("Location: area_riservata.php");
                      else 
                        header("Location: area_admin.php");
                      }
              }      
  }

}
if(isset($_SESSION['area'])){
  $username=$_SESSION['username'];
  $query = "SELECT * FROM `tour` WHERE Organizzatore='$username' ";
        $result = mysqli_query($db,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

              if($rows==0){
                $tuoitour['vuoto']="Non hai ancora organizzato tour";
               }
                /*else{
                  $count=1;
                  while($row = mysqli_fetch_assoc($result)) { 

                   echo " <p><a href=\"#\" align=\"center\"><".$row['Descrizione']."></a>";
                  $count++; }
                }*/
}



//REGISTRAZIONE TOUR
if (isset($_POST['registrazione_tour'])) {
  // receive all input values from the form
  
  $data = mysqli_real_escape_string($db, $_POST['data']);
  $citta = mysqli_real_escape_string($db, $_POST['citta']);
  $titolo = mysqli_real_escape_string($db, $_POST['titolo']);
  $descrizione = mysqli_real_escape_string($db, $_POST['descrizione']);
  
  if(empty($data)){
    $errors['data']="Data richiesta";
  }
  if(empty($citta)){
    $errors['citta']="Citta' richiesta";
  }
  if(empty($titolo)){
    $errors['titolo']="Titolo richiesto";
  }
  if(empty($descrizione)){
    $errors['descrizione']="Descrizione richiesta";
  }
  
  if(strlen($descrizione)<20){
    $errors['descrizione']="inserire una descrizione di almeno 20 caratteri";
  }
  if (count($errors) == 0) {
    //inserimento del tour nel DB
      $organizzatore=$_SESSION['username'];
        $query = "INSERT INTO tour (data, organizzatore, citta, titolo, descrizione, stato) 
                                VALUES('$data','$organizzatore', '$citta','$titolo', '$descrizione','In attesa')";
                                $result = mysqli_query($db,$query) or die(mysql_error());
    header("Location: area_riservata.php");
  }
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
      $db = mysqli_connect('localhost', 'root', 'root', 'progtec');

        $sql= " UPDATE `tour` SET Stato='Rifiutato' WHERE Id='$id'";
      
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    

    }

  function accetta(){

      $id=$_SESSION['idTour'];
      $db = mysqli_connect('localhost', 'root', 'root', 'progtec');

        $sql= " UPDATE `tour` SET Stato='Approvato' WHERE Id='$id'";
      
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    

  }
    function iscriviti(){

      $id=$_SESSION['idTour'];
      $db = mysqli_connect('localhost', 'root', 'root', 'progtec');
      $username=$_SESSION['username'];
      
        $query = "INSERT INTO partecipa (idTour, Username) 
                                VALUES('$id','$username')";
        $result = mysqli_query($db,$query) or die(mysql_error());
    

  }
  function disiscriviti(){

      $id=$_SESSION['idTour'];
      $db = mysqli_connect('localhost', 'root', 'root', 'progtec');
      $username=$_SESSION['username'];
      
        $query = "DELETE FROM `partecipa`WHERE idTour='$id' AND Username='$username'";
        $result = mysqli_query($db,$query) or die(mysql_error());
    

  }
?>
