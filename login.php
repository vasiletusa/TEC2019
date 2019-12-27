<!DOCTYPE html>
<html>
<head>

	<?php 
        include_once 'functions.php'; 
	    getHead("Login");
     ?>   
          
  </head>

<?php getMenu("Login");?>
<?php getBreadcumbs("Login");?>


<div class="pageLogin">
	<?php getMessage();?>
	<div class="boxLeft" >
		
		<p> Iscrizione come privato per partecipare agli eventi</p>
		<p id="login" class="coloreAP">Log In</p>
	<form action="login.php" method="post" name="login">
		
			

			<div class="input">
								<label for="Username" class="label username">Username</label>
								<input id="Username" type="text" name="username" class="input username" placeholder="Inserisci username">
								<p class="error"><?php getUsernameError($errors); ?></p>
			</div>
		<div class="input password">
								<label for="Password" class="label password"> Password</label>
								<input id="Password" type="password" name="password" class="input password" placeholder="********">
								
		</div>
							<button type="submit" class="button" name="Login">Login</button>
	</form>
	<p id="notRegistered">Non ancora registrato?  <a href='registrazione_utente.php'>Registrati qui</a></p>
	</div>

	<div class="boxRight" >
<p> Iscrizione come azienda per proporre eventi</p>		
		<p id="login" class="coloreAP">Log In</p>
	<form action="login.php" method="post" name="login">
		
			

			<div class="input">
								<label for="Username" class="label username">Username</label>
								<input id="Username" type="text" name="username" class="input username" placeholder="Inserisci username">
								<p class="error"><?php getUsernameError($errors); ?></p>
			</div>
		<div class="input password">
								<label for="Password" class="label password"> Password</label>
								<input id="Password" type="password" name="password" class="input password" placeholder="********">
								
		</div>
							<button type="submit" class="button" name="Login">Login</button>
	</form>
	<p id="notRegistered">Non ancora registrato?  <a href='registrazione_utente.php'>Registrati qui</a></p>
	</div>
</div>

<?php getfooter()?>

