<!DOCTYPE html>
<html>
<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Home");
    ?>      
</head>
<?php getMenu("Home");?>
<?php getMenuMobile("Home");?>
<?php getBreadcumbs("Home");?>

<div class="box-centrale">
	<h1 class="titolo">Nuovo evento</h1>
	<form method="post" action="server.php" enctype="multipart/form-data">						
								<div >
									<label for="TitoloEvento" class="label TitoloEvento">Titolo Evento</label>
									<input id="TitoloEvento" type="text" name="TitoloEvento" class="input insertBox" placeholder="Titolo Evento">
									<p class="error"><?php getNomeError($errors); ?></p>
									
								</div>
								<div >
									<label for="Descrizione" class="label Descrizione">Descrizione</label>
									<input id="Descrizione" type="text" name="Descrizione" class="input input-descrizione insertBox" placeholder="Descrizione">
									<p class="error"><?php getNomeError($errors); ?></p>
									

								
								</div>
								<div >
									<label for="Luogo" class="label Luogo">Indirizzo</label>
									<input id="Luogo" type="text" required name="Luogo" class="input insertBox" placeholder="Indirizzo">
									<p class="error"><?php getNomeError($errors); ?></p>
									
								
								</div>
								<div>
									<label for="Data" class="label Data">Data</label>
									<input id="Data" type="data" name="Data" class="input insertBox" placeholder="Data">
									<p class="error"><?php getNomeError($errors); ?></p>
									


								</div>
								<div class="select-categoria">
									<label for="Categoria" class="label Categoria">Categoria</label>
									<select name="selectCategoria" >
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
								
								<div class="select-citta">
									<label for="Citta" class="label Citta">Citta</label>
									<select name="selectCitta">
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

    
    							
    
<input type="file" name="file" id="file"><br><br>


								<button type="submit" class="button bottone-centrale" name="nuovo_evento">Invia</button>

							</form>
						</div>
							
				
		</div></div>

</div>
</div>
</body>
					<?php getfooter() ?>
