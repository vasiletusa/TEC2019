<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Modifica password");
     ?>        
  </head>
<?php getMenu("Area personale");?>

<?php getBreadcumbs("Area personale/Modifica-password");?>
<div class="pageChange">
<div class="box-centrale">
<form method="post" action="modifica_pw.php" >						
						<h1 class="titolo mod-password"> Modifica Password </h1>
						<div >
									<label for="passwordV" class="label passwordV">Vecchia password</label>
									<input id="passwordV" type="text" name="pwV" class="input insertBox" placeholder="Vecchia Password" tabindex="10">
									<p class="error"><?php getPasswordError($errors); ?></p>
									<p class="error"><?php getPasswordError($errors); ?></p>

									
								</div>
	
						<div>
							<label for="password" class="label password">Nuova password</label>
							<input id="password" type="password" name="pwN" class="input insertBox" placeholder="********" tabindex="11">
							<p class="error"><?php getPasswordError($errors); ?></p>

					
							
						</div>
						<div >
							<label for="passwordR" class="label passwordR">Conferma Password</label>
							<input id="passwordR" type="password" name="pwC" class="input insertBox" placeholder="********" tabindex="12">
							<p class="error"><?php getPasswordError($errors); ?></p>
							<p class="error"><?php getPasswordError($errors); ?></p>


							
						</div>
						<button type="submit" class="bottone-invia selezione" name="modifica_pw" tabindex="13" accesskey="t">Invia</button>

					</form>
					
</div>
</div>
					<?php getfooter() ?>


