<!DOCTYPE html>
<html>
<head>

	<?php 
        include_once 'functions.php'; 
	    getHead("Nuovo Evento");
     ?>   
          
  </head>

<?php getMenu1("AreaRiservata");?>
<?php getMenu2("AreaRiservata");?>

<?php getBreadcumbs("Area personale -> Nuovo evento");?>


<div class="box-centrale">
	<h1 class="titolo">Nuovo evento</h1>
	<form method="post" action="nuovo_evento.php" >						
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
									<label for="Luogo" class="label Luogo">Luogo</label>
									<input id="Luogo" type="text" required name="Luogo" class="input insertBox" placeholder="Luogo">
									<p class="error"><?php getNomeError($errors); ?></p>
									
								
								</div>
								<div>
									<label for="Data" class="label Data">Data</label>
									<input id="Data" type="data" name="Data" class="input insertBox" placeholder="Data">
									<p class="error"><?php getNomeError($errors); ?></p>
									


								</div>
								<div>
									<label for="Categoria" class="label Categoria">Categoria</label>
									<input id="Categoria" type="text" name="Categoria" class="input insertBox" placeholder="Categoria">
									<p class="error"><?php getNomeError($errors); ?></p>
								
								</div>
								
								<button type="submit" class="button" name="nuovo_evento">Invia</button>

							</form>
						</div>
							
				
		</div></div>

</div>
</div>
</body>
					<?php getfooter() ?>
