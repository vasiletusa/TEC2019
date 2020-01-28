<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Nuovo-evento");
    ?>      
</head>
<?php getMenu("AreaRiservata");?>
<?php getBreadcumbs("Area Personale/Nuovo-evento");?>

<div class="box-centrale">
	<h1 class="titolo">Nuovo evento</h1>
	<form method="post" action="server.php" enctype="multipart/form-data">						
		<div >
			<label for="TitoloEvento" class="label TitoloEvento">Titolo Evento</label>
			<input id="TitoloEvento" type="text" required name="TitoloEvento" class="input insertBox" placeholder="Inserire titolo Evento"  tabindex="10">
			<p class="error"><?php getTitoloError($errors); ?></p>
			
		</div>
		<div >
			<label for="Descrizione" class="label Descrizione">Descrizione</label>
			<textarea rows="50" cols="100" id="Descrizione" type="text" required name="Descrizione" class="input input-descrizione insertBox" placeholder="Inserire Descrizione"tabindex="11"></textarea>
			<p class="error"><?php getDescrError($errors); ?></p>
			

		
		</div>
		<div >
			<label for="Luogo" class="label Luogo">Indirizzo</label>
			<input id="Luogo" type="text" required name="Luogo" class="input insertBox"  placeholder="Inserire Indirizzo" tabindex="12">
			<p class="error"><?php getLuogoError($errors); ?></p>
			
		
		</div>
		<div>
			<label for="Data" class="label Data">Data</label>
			<input id="Data" type="data" required name="Data" class="input insertBox" placeholder="Inserire data: YYYY-MM-DD" tabindex="13">
			<p class="error"><?php getDataError($errors); ?></p>
			


		</div>
		<div class="select-categoria" >
			<label for="Categoria" class="label Categoria">Categoria</label>
			<select required name="selectCategoria" tabindex="14">
			<option name="Seleziona" value="Seleziona">Seleziona categoria</option>

			  <option name="Concerto" value="Concerto">Concerto
			  </option>
			  <option name="Famiglie" value="Famiglie">Famiglie</option>
			  <option name="Giovani" value="Giovani">Giovani</option>
			  <option name="Cultura" value="Cultura">Cultura</option>
			  <option name="Spettacolo" value="Spettacolo">Spettacolo</option>
			  <option name="Locale" value="Locale">Locale</option>
			  <option name="Discoteca" value="Discoteca">Discoteca</option>
			  <option name="Aperto" value="Aperto">All'aperto</option>
			 
			</select>
			<p class="error"><?php getCategoriaError($errors); ?></p>

		</div>

		<div class="end"></div>
		
		<div class="select-citta ">
			<label for="Citta" class="label Citta">Citta</label>
			<select name="selectCitta" tabindex="15">
			  <option name="Seleziona" value="Seleziona">Seleziona citt&agrave</option>
			  <option name="Padova" value="Padova">Padova</option>
			  <option name="Venezia" value="Venezia">Venezia</option>
			  <option name="Vicenza" value="Vicenza">Vicenza</option>
			  <option name="Verona" value="Verona">Verona</option>
			  <option name="Treviso" value="Treviso">Treviso</option>
			  <option name="Belluno" value="Belluno">Belluno</option>
			  <option name="Rovigo" value="Rovigo">Rovigo</option>
			 
			</select>
			<p class="error"><?php getCittaError($errors);?></p>
		</div>


		

		<input type="file" name="file" id="file" tabindex="16"><br><br>


		<button type="submit" class="bottone-invia selezione" name="nuovo_evento" tabindex="17" accesskey="i">Invia</button>

	</form>
</div>
							
				
		</div></div>

</div>
</div>
</body>
					<?php getfooter() ?>
