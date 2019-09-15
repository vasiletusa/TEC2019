<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include_once 'server.php'?>

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Login");
    ?>      
</head>

<?php getMenu("");?>
<?php getBreadcumbs("Dettagli Tour");?>

<?php
        require_once('functions.php');
        $tour=tourDaId($_GET['id']);
        
        echo   "<div class=\"marginPrincipale\" >
					<h1>".$tour['Titolo']."</h1> 
					<div class=\"sinistra\">
						<img src=\"img/padova.jpg\" alt=\"foto della città di Padova\" class=\"detourimg\" />
						<p class='coloret'>DATA: <label for=\"data\" class='coloret'>".$tour['Data']."</label></p>
						<p class='coloret'>ORGANIZZATO DA :<label for=\"organiz\" class='coloret'>".$tour['Organizzatore']."</label></p>
						<p class='coloret'>CITTA' :<label for=\"citta\" class='coloret'>".$tour['Citta']."</label> </p>
						
					</div>	

					<div class=\"sfondo destra\">
						<div id=\"descrTour\">  Descrizione del Tour </div>
						<p>  <label for=\"Descrizione\" id=\"labelTour\">".$tour['Descrizione']."</label> </p>
							
					</div>

					<div class='marginSecondario'> 
						<input class='buttonIscrizione' name='iscrizione' type='submit' value='ISCRIVITI' />
					</div>

				</div>"              
    ?>



</body>

<?php include('footer.php') ?>
