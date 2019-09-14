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

<div class="container-box2">
	<div>
		<h1> Nome Tour </h1> 
		<img src="img/padova.jpg" alt="foto della città di Padova"/>
		<div>
		DATA: <label for="data"></label>
		ORGANIZZATO DA :<label for="organiz"> </label>
		CITTA' :<label for="citta" ></label> 
		</div>
	</div>


	<div class="sfondo">
		<div id="descrTour">  Descrizione del Tour </div>
		<p>  <label for="Descrizione" id="labelTour">Il tour jhsaj</label> <p>
		
	</div>

</div>

<div> 
		<input class="buttonIscrizione" name="iscrizione" type="submit" value="ISCRIVITI" />
</div>

</body>

<?php include('footer.php') ?>
