<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
	<?php 
        include_once 'functions.php'; 
        setOrganizza();
	    getHead("Organizza");
     ?>        
  </head>

<?php getMenu("RegistraTour");?>
<?php getBreadcumbs("Organizza tour");?>
<div class="container box" id="boxlogin">
<form method="post" action="registra_tour.php">						
						<p class="coloreAP"> Organizza il tuo tuor</p>
						<div>
							<label for="Data" class="label data">Data</label>
							<input id="Data" type="date" name="data" class="input data" placeholder="gg/mm/aaaa">
                            <p class="error"><?php getDataError($errors); ?></p>
						
						</div>
						<div >
							<label for="Citta" class="label citta">Citta</label>
							<input id="Citta" type="text" name="citta" class="input citta" placeholder="Scegli città">
                            <p class="error"><?php getCittaError($errors); ?></p>
						
						</div>
						<div >
							<label for="Titolo" class="label titolo">Titolo</label>
							<input id="Titolo" type="text" name="titolo" class="input titolo" placeholder="Inserisci Titolo">
                            <p class="error"><?php getTitoloError($errors); ?></p>
						
						</div>
						<div>
							<label for="Descrizione" class="label " >Descrizione</label>
							<input id="Descrizione" type="text" name="descrizione" class="input descrizione" placeholder="Inserisci descrizione" class="dimdescr">
                            <p class="error"><?php getDescrizioneError($errors); ?></p>
					
							
						</div>
						
						<button type="submit" class="button" name="registrazione_tour">Invia</button>
					</form></div>
					<?php getfooter() ?>
