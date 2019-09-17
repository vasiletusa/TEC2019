<!DOCTYPE html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include_once 'server.php'?>

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Dettagli Tour");
    ?>      
</head>

<?php getMenu("Dettagli Tour");?>
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
					
						<img src=\"img/padova.jpg\" alt=\"foto della città di ".$tour['Data']." class=\"detourimg\" />
						<div>
							 <div class='sinistraparag'><label for=\"data\" class='coloret '>DATA:</label></div>
							 <div class='sinistraparagr'><p class='coloret '>".$tour['Data']."</p></div>
							 <div class='end'></div>
						</div>


						<div>
                          <div class='sinistraparag'><label for=\"organiz\"class='coloret '>ORGANIZZATO DA :</label></div>
                          <div class='sinistraparagr'><p class='coloret '>".$tour['Organizzatore']."</p></div>
                          <div class='end'></div>
                        </div>

						<div>
                          <div class='sinistraparag'><label for=\"citta\" class='coloret '>CITTA' :</label></div>
                          <div class='sinistraparagr'><p class='coloret '>".$tour['Citta']."</p> </div>
                          <div class='end'></div>
                        </div>
						
					</div>	

					<div class=\"sfondo sinistra\">
						<div id=\"descrTour\">  Descrizione del Tour </div>
						<p>".$tour['Descrizione']."</p>
							
					</div>

					<div class='end'/>

					<div > ".$controllo."

						
					</div>
				</div>"              
    ?>

</body>

<?php getfooter()?>
