<?php
include_once 'server.php';


function getHead($current){
echo"

	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	

	<title>$current</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

	<link rel=\"stylesheet\" href=\"css/style.css\"/>
	<link rel=\"icon\" 
      type=\"image/png\" 
      href=\"img/destination.png\">
	
";
}function getFooter(){echo"
<footer id=\"footer\" class=\"footer\">
    <div class=\"container\">     
        <div>&copy; 2019 <span lang=\"en\">Veneto-on-Tour</span> | Via Dante Alighieri 123 - 30035 Mirano (<span lang=\"en\">Italy</span>)
        </div>
        <div> email: venetontour@gmail.com </div>
        <div> tel: +39 04145678910 </div>

        <div class=\"back-up\">   
        <a href=\"#\">TORNA SU</a>
        </div>
    </div>  
</footer></div>



</body>
</html>";
}

function getMenu($current){
	  	
echo"
<body>
	<header id=\"header-section\">
     <div class=\"header\"class=\"logo\">
        <a href=\"home.php\"><img src=\"img/logoT.png\" alt=\"Veneto on Tour\"></a>
        <div class=\"header-right\">
        
           <a href=\"home.php\"  ";if($current=="Home"){echo"class=\"active\"";}echo">Home</a>
           <a href=\"info.php\"  ";if($current=="Info"){echo"class=\"active\"";}echo">Come Funziona</a>
           <a href=\"tour.php\"  ";if($current=="Tour"){echo"class=\"active\"";}echo">Tour</a>
           <a href=\"registra_tour.php\"  ";if($current=="RegistraTour"){echo"class=\"active\"";}echo">Organizza</a>";
	     	if(isset($_SESSION['isLogged'])){
	     		$username=$_SESSION['username'];
                $db = mysqli_connect('localhost', 'root', 'root', 'progtec');

        	   $query = "SELECT * FROM `utenti` WHERE Username='$username'";
                $result = mysqli_query($db,$query) or die(mysql_error());      
                $ris=mysqli_fetch_assoc($result);
                $ruolo=$ris['Ruolo'];
	     		echo"<a href=";if($ruolo=="User"){echo"\"area_riservata.php\"";} else {echo"\"area_admin.php\"";}if($current=="AreaRiservata"){echo"class=\"active\"";}echo">Area personale</a>
	     			<a href=\"logout.php\">Logout</a>";}
	     	else{
	     		
	     		
	     	
	     	echo "<a href=\"login.php\"  ";if($current=="Login"){echo"class=\"active\"";}echo">Login</a>";}

	     	echo"
	     	</ul>
	   	</nav>
	  	</div>
      	</div>
        <div id='contPrincipale'>
      </header>

";

}
function getBreadcumbs($current){
echo "<div class=\"contenitore\">
			<p id=\"breadcumb\">Sei in : ".$current."</p>
        </div>
  ";
}

function getMessage(){
	if(isset($_SESSION['isOrganize'])){
		echo "
		<p id=\"messaggio\">Per organizzare un tour devi accedere con le tue credenziali,<br> se è la prima volta devi prima <a href=\"registrazione_utente.php\">registrati</a href></p>";
	}
}
function tourDaId($id){
      $db = mysqli_connect('localhost', 'root', 'root', 'progtec');

    $sql = "SELECT * FROM `tour` WHERE Id='$id'";
    $ris = mysqli_query($db,$sql)or DIE("tourDaId: ".mysqli_error($db));
    $output = mysqli_fetch_assoc($ris);
    return $output;
}
function getTourInAttesa(){
    $db = mysqli_connect('localhost', 'root', 'root', 'progtec');
    $sql = "SELECT * FROM `tour` WHERE Stato='In Attesa'";
    $ris = mysqli_query($db,$sql);
    $errore = array();
    if(mysqli_num_rows($ris)==0){
       $_SESSION['tourInAttesa']=false;

        //array_push($errore,"Errore della query: " . $sql);
    }else{$_SESSION['tourInAttesa']=true;}
    $output = array();
    while ($row = mysqli_fetch_assoc($ris)) {
        array_push($output,$row);
    }
    array_push($output,$errore);
    return $output;
}
   function getTour(){
    $db = mysqli_connect('localhost', 'root', 'root', 'progtec');
    $sql = "SELECT * FROM `tour` WHERE Stato='Approvato'";
    $ris = mysqli_query($db,$sql);
    $errore = array();
    if(mysqli_num_rows($ris)==0){
       $_SESSION['tour']=false;

        //array_push($errore,"Errore della query: " . $sql);
    }else{$_SESSION['tour']=true;}
    $output = array();
    while ($row = mysqli_fetch_assoc($ris)) {
        array_push($output,$row);
    }
    array_push($output,$errore);
    return $output;
}
  function getTuoiTourOrganizzati(){
  	$username=$_SESSION['username'];
    $db = mysqli_connect('localhost', 'root', 'root', 'progtec');
    $sql = "SELECT * FROM `tour` WHERE Organizzatore='$username' ";
    $ris = mysqli_query($db,$sql);
    $errore = array();
    if(mysqli_num_rows($ris)==0){
    	$_SESSION['tuoiTour']=false;
        //array_push($errore,"Errore della query: " . $sql);
    }else {$_SESSION['tuoiTour']=true;}
    $output = array();
    while ($row = mysqli_fetch_assoc($ris)) {
        array_push($output,$row);
    }
    array_push($output,$errore);
    return $output;
}
 function getTuoiTourPartecipi(){
  	$username=$_SESSION['username'];
    $db = mysqli_connect('localhost', 'root', 'root', 'progtec');
    $sql = "SELECT * FROM `partecipa` WHERE Username='$username' ";
    $ris = mysqli_query($db,$sql);
    $errore = array();
    if(mysqli_num_rows($ris)==0){
    	$_SESSION['tuoiTour']=false;
        //array_push($errore,"Errore della query: " . $sql);
    }else {$_SESSION['tuoiTour']=true;}
	    $output = array();
	    while ($row = mysqli_fetch_assoc($ris)) {
	        array_push($output,$row);
	    }
		  
		 
    return $output;
}

function setIscrivitiButton(){
    $idTour= $_SESSION['idTour'];
    if(($_SESSION['isLogged']===true)){
        $username= $_SESSION['username'];
            $db = mysqli_connect('localhost', 'root', 'root', 'progtec');
    

    $sql = "SELECT * FROM `partecipa` WHERE idTour='$idTour' AND Username='$username' ";

    $ris= mysqli_query($db, $sql);
    
    if(mysqli_num_rows($ris)==0){
        $output= "<form action='tour.php' method='post'>
                                    <input type='submit' name='iscriviti' value='ISCRIVITI'  class='buttonIscrizione' />

                </form>";
                       }
        else{
            $output="<form action='tour.php' method='post'>
                                    <input type='submit' name='disiscriviti' value='DISISCRIVITI'  class='buttonIscrizione' />

                </form>";
        }
    
    }else
                 $output="<p style='color:red'> *per iscriverti a un tour devi prima accedere <a href='login.php' style='color:red'>Login</a></p>";
        return  $output;
}
function findImg($nome, $directory){
    $dir=getcwd();

    chdir("./".$directory);
    $filenames = glob("*.jpg");
    foreach($filenames as $filename){
        if($filename==$nome){
            chdir($dir);
            return "./".$directory."/".$nome;

        }
    }
    chdir($dir);
    return "./".$directory."/default.png";
}
function cittaDaNome($nome){
      $db = mysqli_connect('localhost', 'root', 'root', 'progtec');

    $sql = "SELECT * FROM `citta` WHERE Nome='$nome'";
    $ris = mysqli_query($db,$sql)or DIE("cittaDaNome: ".mysqli_error($db));
    $output = mysqli_fetch_assoc($ris);
    return $output;
}

function getTourDaCitta($citta){
    $db = mysqli_connect('localhost', 'root', 'root', 'progtec');
    $sql = "SELECT * FROM `tour` WHERE Stato='Approvato'";
    $ris = mysqli_query($db,$sql);
    $errore = array();
    $_SESSION['tourD']=false;
    $output = array();
    while ($row = mysqli_fetch_assoc($ris)) {
        if($row['Citta']==$citta){
                $_SESSION['tourD']=true;
                array_push($output,$row);
        }
    }
 
    array_push($output,$errore);
    return $output;
}
?>