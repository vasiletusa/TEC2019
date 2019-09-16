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
        $_SESSION['idTour']=$_GET['id'];
        
        $controllo= setIscrivitiButton();
        //echo $_SESSION['id'];
        echo   "<div class=\"marginPrincipale\" >
					<h1>".$tour['Titolo']."</h1> 
					<div class=\"sinistratour\">
					
						<img src=\"img/padova.jpg\" alt=\"foto della città di Padova\" class=\"detourimg\" />
						<div>
							 <div class='sinistraparag'><p class='coloret parag'><label for=\"data\" class='coloret'>DATA:</label></p></div>
							 <div class='sinistraparagr'><p class='coloret parag'>".$tour['Data']."</p></div>
						</div>

						<p class='coloret parag'>ORGANIZZATO DA :<label for=\"organiz\" class='coloret'>".$tour['Organizzatore']."</label></p>
						<p class='coloret parag'>CITTA' :<label for=\"citta\" class='coloret'>".$tour['Citta']."</label> </p>
						
					</div>	

					<div class=\"sfondo sinistra\">
						<div id=\"descrTour\">  Descrizione del Tour </div>
						<p>  <label for=\"Descrizione\" id=\"labelTour\">".$tour['Descrizione']."</label> </p>
							
					</div>

					<div class='end'/>

					<div > ".$controllo."

						
					</div>
				</div>"              
    ?>

</body>

<?php include('footer.php') ?>
