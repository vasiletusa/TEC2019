<?php
include_once 'server.php';


function getHead($current){
echo"

	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	

	<title>$current</title>
	<link rel=\"stylesheet\" href=\"css/style.css\"/>
	<link rel=\"icon\" 
      type=\"image/png\" 
      href=\"img/destination.png\">
	
";
}

function getMenu($current){
echo"
<body>
	<header id=\"header-section\">
	 <div class=\"nav-header\"class=\"logo\">
	 	<a href=\"home.php\"><img src=\"img/logoT.png\" alt=\"Veneto on Tour\"></a>
	  	<div id=\"menu-superiore\">
	   	<nav>
	    	<ul id=\"menu\">
	     	<li ";if($current=="Home"){echo"class=\"active\"";}echo"><a href=\"home.php\">Home</a></li>
	     	<li ";if($current=="Tour"){echo"class=\"active\"";}echo"><a href=\"tour.php\">Tour</a></li>
	     	<li ";if($current=="RegistraTour"){echo"class=\"active\"";}echo"><a href=\"registra_tour.php\">Organizza</a></li>";
	     	if(isset($_SESSION['isLogged'])){
	     		echo"<li ";if($current=="AreaRiservata"){echo"class=\"active\"";}echo"><a href=\"area_riservata.php\">Area personale</a></li>
	     			<li><a href=\"logout.php\">Logout</a></li>";}
	     	else{
	     		
	     		
	     	
	     	echo "<li "; if($current=="Login"){echo"class=\"active\"";}echo"><a href=\"login.php\">Login</a></li>";}

	     	echo"
	     	</ul>
	   	</nav>
	  	</div>
      	</div>
      </header>";

}
function getBreadcumbs($current){
echo "<div class=\"contenitore\">
			<p id=\"breadcumb\">Sei in :".$current."</p>
        </div>
  ";
}

function getMessage(){
	if(isset($_SESSION['isOrganize'])){
		echo "
		<p id=\"messaggio\">Per organizzare un tour devi accedere con le tue credenziali,<br> se è la prima volta devi prima <a href=\"registrazione_utente.php\">registrati</a href></p>";
	}
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
    }else {$_SESSION['tuoiTour']=true;
	    $output = array();
	    while ($row = mysqli_fetch_assoc($ris)) {
	        array_push($output,$row);
	    }
		  
		 }
    return $output;
}

?>