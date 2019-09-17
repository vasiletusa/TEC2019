<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Modifica password");
     ?>        
  </head>
<?php getMenu("Area personale");?>
<?php getBreadcumbs("Area personale->modifica password");?>
<div class="container box" id="boxlogin">
<form method="post" action="modifica_pw.php" >						
						<h1> Modifica Password </h1>
						
	
						<div>
							<label for="username" class="label username">Vecchia password</label>
							<input id="username" type="text" name="pwV" class="input username" placeholder="Username">
							<p class="error"><?php getPasswordError($errors); ?></p>
							<p class="error"><?php getPasswordError($errors); ?></p>

						</div>
						<div>
							<label for="password" class="label password">Nuova password</label>
							<input id="password" type="password" name="pwN" class="input passoword" placeholder="********">
							<p class="error"><?php getPasswordError($errors); ?></p>

					
							
						</div>
						<div >
							<label for="passwordR" class="label passwordR">Conferma Password</label>
							<input id="passwordR" type="password" name="pwC" class="input passwordR" placeholder="********">
							<p class="error"><?php getPasswordError($errors); ?></p>
							<p class="error"><?php getPasswordError($errors); ?></p>


							
						</div>
						<button type="submit" class="button" name="modifica_pw">Invia</button>

					</form>
					
</div>
					<?php getfooter() ?>


