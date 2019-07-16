<?php
include_once 'server.php';

function getHead($current){
echo"

	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<title> $current</title>
	<link rel=\"stylesheet\" href=\"css/stile.css\"/>

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
	 <div class=\"nav-header\">
	   
	  	<class=\"logo\"><a href=\"home.php\"><img src=\"img/logoT.png\" alt=\"Veneto on Tour\"></a>
	  	<div id=\"menu-superiore\">
	   	<nav>
	    	<ul id=\"menu\">
	     	<li ";if($current=="Home"){echo"class=\"active\"";}echo"><a href=\"home.php\">Home</a></li>
	     	<li ";if($current=="Tour"){echo"class=\"active\"";}echo"><a href=\"tour.php\">Tour</a></li>
	     	<li ";if($current=="RegistraTour"){echo"class=\"active\"";}echo"><a href=\"registra_tour.php\">Organizza</a></li>
	     	<li "; if($current=="Registrati"){echo"class=\"active\"";}echo"><a href=\"registrazione_utente.php\">Registrati</a></li>";
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
			<p id=\"breadcumb\" class=\"breadcumb\">Sei in :".$current."</p>
        </div>
  ";
}

function getMessage(){
	if(isset($_SESSION['isOrganize'])){
		echo "
		<p id=\"messaggio\">Per organizzare un tour devi accedere con le tue credenziali,<br> se è la prima volta devi <a href=\"registrazione_utente\">registrati</a href></p>";
	}
}




?>