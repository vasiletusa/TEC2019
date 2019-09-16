<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include_once 'server.php'?>

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Dettagli Tour");
    ?>      
</head>

<?php getMenu("");?>
<?php getBreadcumbs("Tour->Dettagli Tour");?>

<?php
        require_once('functions.php');
        $tour=tourDaId($_GET['id']);
        $_SESSION['idTour']= $_GET['id'];
        echo   "<div class=\"marginPrincipale\" >
					<h1>".$tour['Titolo']."</h1> 
					<div class=\"sinistratour\">
						<img src=\"img/padova.jpg\" alt=\"foto della città di Padova\" class=\"detourimg\" />
						<p class='coloret parag'>DATA: <label for=\"data\" class='coloret'>".$tour['Data']."</label></p>
						<p class='coloret parag'>ORGANIZZATO DA :<label for=\"organiz\" class='coloret'>".$tour['Organizzatore']."</label></p>
						<p class='coloret parag'>CITTA' :<label for=\"citta\" class='coloret'>".$tour['Citta']."</label> </p>
						
					</div>	

					<div class=\"sfondo sinistra\">
						<div id=\"descrTour\">  Descrizione del Tour </div>
						<p>  <label for=\"Descrizione\" id=\"labelTour\">".$tour['Descrizione']."</label> </p>
							
					</div>

					<div class='end'/>

					<div > 

						<form action='tour.php' method='post'>
							    	<input type='submit' name='iscriviti' value='ISCRIVITI'  class='buttonIscrizione' />

						</form>
					</div>
				</div>"              
    ?>

</body>

<?php include('footer.php') ?>
