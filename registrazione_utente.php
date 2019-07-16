<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Registrati");
     ?>        
  </head>
<?php setOrganizzaFalse(); ?>
<?php getMenu("Registrati");?>
<?php getBreadcumbs("Registrati");?>
<div class="container box" id="boxlogin">
<form method="post" action="registrazione_utente.php" >						
						<h1> Registrati </h1>
						<div class="1">
							<label for="Nome" class="label nome">Nome</label>
							<input id="Nome" type="text" name="nome" class="input nome" placeholder="Nome">
							<p class="error"><?php getNomeError($errors); ?></p>

							
						</div>
						<div class="2">
							<label for="Cognome" class="label cognome">Cognome</label>
							<input id="Cognome" type="text" name="cognome" class="input cognome" placeholder="Cognome">
							<p class="error"><?php getCognomeError($errors); ?></p>

						
						</div>
						<div class="3">
							<label for="email" class="label email">E-Mail</label>
							<input id="email" type="text" name="email" class="input email" placeholder="E-mail">
							<p class="error"><?php getEmailError($errors); ?></p>

						
						</div>
						<div class="3">
							<label for="username" class="label username">Username</label>
							<input id="username" type="text" name="username" class="input username" placeholder="Username">
							<p class="error"><?php getUsernameError($errors); ?></p>
							<p class="error"><?php getEsistenteError($errors); ?></p>


						</div>
						<div class="4">
							<label for="password" class="label password">Password</label>
							<input id="password" type="password" name="password" class="input passoword" placeholder="********">
							<p class="error"><?php getPasswordError($errors); ?></p>

					
							
						</div>
						<div class="5">
							<label for="passwordR" class="label passwordR">Ripeti Password</label>
							<input id="passwordR" type="password" name="passwordR" class="input passwordR" placeholder="********">
							<p class="error"><?php getPassword2Error($errors); ?></p>
							<p class="error"><?php getNoPasswordError($errors); ?></p>


							
						</div>
						<button type="submit" class="button" name="registrazione_utente">Registrati</button>

					</form>
					<p> Gia registrato?  <a href="login.php">LogIn</a></p>
</div>
					<?php include('footer.php') ?>
