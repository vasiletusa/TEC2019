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



<div class="container box" id="boxlogin">
	<?php getMessage();?>
	
	<h1 id="login">Log In</h1>
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
<?php include('footer.php') ?>
