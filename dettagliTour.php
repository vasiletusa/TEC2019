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
        require_once('../../models/funzioni.php');
        $tour=tourDaId($_GET['id']);
        
        echo   "<h1>".$tour['Titolo']"</h1>\n
              
    ?>


<div class="marginPrincipale" >
	<h1> Nome Tour </h1> 
	<div class="sinistra">
		<img src="img/padova.jpg" alt="foto della città di Padova" class="detourimg" />
		<p>DATA: <label for="data"></label></p>
		<p>ORGANIZZATO DA :<label for="organiz"> </label></p>
		<p>CITTA' :<label for="citta" ></label> </p>
		
	</div>	

	<div class="sfondo sinistra">
		<div id="descrTour">  Descrizione del Tour </div>
		<p>  <label for="Descrizione" id="labelTour">Il tour jhsaj</label> </p>
			
	</div>

</div>

<div class="marginSecondario"> 
	<input class="buttonIscrizione" name="iscrizione" type="submit" value="ISCRIVITI" />
</div>





</body>

<?php include('footer.php') ?>
