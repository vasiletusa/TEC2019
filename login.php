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



<div class=" box" >
	<?php getMessage();?>
	
<p id="login" class="coloreAP">Login</p>
<form action="login.php" method="post" name="login">
	
		

	<div class="input">
						<label for="Username" class="label">Username</label>
						<input  type="text" name="username" class="dati" placeholder="Inserisci username">
						<p class="error"><?php getUsernameError($errors); ?></p>
	</div>
	<div class="input password">
							<label for="Password" class="label"> Password</label>
							<input type="password" name="password" class="dati password" placeholder="********">
							
	</div>
	<button type="submit" class="button" name="Login">Login</button>

</form>
<p id="notRegistered">Non ancora registrato?  <a href='registrazione_utente.php'>Registrati qui</a></p>
</div>

<?php getfooter()?>

