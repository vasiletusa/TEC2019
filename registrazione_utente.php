<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include('head.php') ?>
<?php
include_once 'server.php'?>
<div class="container box" id="boxlogin">
<form method="post" action="registrazione_utente.php" >						
						<h1> Registrati </h1>
						<div class="1">
							<label for="Nome" class="label nome">Nome</label>
							<input id="Nome" type="text" name="nome" class="input nome" placeholder="Nome">
							
						</div>
						<div class="2">
							<label for="Cognome" class="label cognome">Cognome</label>
							<input id="Cognome" type="text" name="cognome" class="input cognome" placeholder="Cognome">
						
						</div>
						<div class="3">
							<label for="email" class="label email">E-Mail</label>
							<input id="email" type="text" name="email" class="input email" placeholder="E-mail">
						
						</div>
						<div class="3">
							<label for="username" class="label username">Username</label>
							<input id="username" type="text" name="username" class="input username" placeholder="Username">
						
						</div>
						<div class="4">
							<label for="password" class="label password">Password</label>
							<input id="password" type="password" name="password" class="input passoword" placeholder="********">
					
							
						</div>
						<div class="5">
							<label for="passwordR" class="label passwordR">Ripeti Password</label>
							<input id="passwordR" type="password" name="passwordR" class="input passwordR" placeholder="********">
							
						</div>
						<button type="submit" class="button" name="registrazione_utente">Registrati</button>

					</form>
					<p> Gia registrato?  <a href="login.php">LogIn</a></p>
</div>
					<?php include('footer.php') ?>
