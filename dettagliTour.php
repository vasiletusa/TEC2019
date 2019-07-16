<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include('head.php') ?>
<?php
include_once 'server.php'?>
<div  class="sfondo">
	<h1 id="titolo"> Titolo </h1> 
	<div class="sinistra">
		DATA: <label for="data">0000-00-00</label>
	</div>
	<div class="destra">
		ORGANIZZATO DA :<label for="organiz">organizzatore </label>
		
	</div>
	
	<div id="testo">
		<div> <label for="citta" >CITTA</label> </div>
		<div> <p> descrizione </p> </div>
		<div> <input class="button" name="iscrizione" type="submit" value="ISCRIVITI" /></div>
	</div>
</div>

<?php include('footer.php') ?>
