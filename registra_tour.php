<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Home");
     ?>        
  </head>

<?php getMenu("registratour");?>
<form method="post" action="registra_tour.php" class="col-9 col-sm-5 col-esm-5">						
						
						<div class="2">
							<label for="Data" class="label data">Data</label>
							<input id="Data" type="text" name="data" class="input data" placeholder="Inserisci data">
						
						</div>
						<div class="3">
							<label for="Citta" class="label citta">Citta</label>
							<input id="Citta" type="text" name="citta" class="input citta" placeholder="Scegli città">
						
						</div>
						<div class="3">
							<label for="Titolo" class="label titolo">Titolo</label>
							<input id="Titolo" type="text" name="titolo" class="input titolo" placeholder="Inserisci Titolo">
						
						</div>
						<div class="4">
							<label for="Descrizione" class="label descrizione">Descrizione</label>
							<input id="Descrizione" type="text" name="descrizione" class="input descrizione" placeholder="Inserisci descrizione">
					
							
						</div>
						
						<button type="submit" class="button" name="registrazione_tour">Invia</button>
					</form>
					<?php include('footer.php') ?>
