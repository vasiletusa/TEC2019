<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include_once 'server.php'?>

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Gestisci tour");
    ?>      
</head>

<?php getMenu("AreaRiservata");?>
<?php getBreadcumbs("Area Riservata->Gestisci tour");?>

<?php
        require_once('functions.php');
        $tour=tourDaId($_GET['id']);
        $_SESSION['idTour']=$_GET['id'];
        echo   "<div class=\"marginPrincipale\ >
	<h1>".$tour['Titolo']."</h1> 
	<div class=\"sinistra\">
		<img src=\"img/padova.jpg\" alt=\"foto della città di Padova\" class=\"detourimg\" />
		<p>DATA: <label for=\"data\">".$tour['Data']."</label></p>
		<p>ORGANIZZATO DA :<label for=\"organiz\">".$tour['Organizzatore']."</label></p>
		<p>CITTA' :<label for=\"citta\">".$tour['Citta']."</label> </p>

		
	</div>	

	<div class=\"sfondo sinistra\">
		<div id=\"descrTour\">  Descrizione del Tour </div>
		<p>  <label for=\"Descrizione\" id=\"labelTour\">".$tour['Descrizione']."</label> </p>
		<p>STATO :<label for=\"stato\">".$tour['Stato']."</label> </p>
			
	</div>
"              
    ?>



<div class="marginSecondario"> 

	<form action="area_admin.php" method="post">
		    	<input type="submit" name="accetta" value="ACCETTA" />

    	<input type="submit" name="rifiuta" value="RIFIUTA" />
	</form>
	<!--input class="buttonIscrizione" name="rifiuta" type="submit" value="RIFIUTA" /-->

</div>





</body>

<?php include('footer.php') ?>
