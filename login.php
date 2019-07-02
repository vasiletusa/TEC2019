<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/stileprova.css">
</head>
<?php
include_once('server.php');

    
?>
<div class="form">
<h1 id="login">Log In</h1>
<form action="" method="post" name="login">
	<div class="input">
							<label for="Username" class="col-25 label username">Username</label>
							<input id="Username" type="text" name="username" class="col-75 input username" placeholder="Inserisci username">
	</div>
	<div class="input password">
							<label for="Password" class="col-25 label password"> Password</label>
							<input id="Password" type="password" name="password" class="col-75 input password" placeholder="********">
							
	</div>

<input class="button" name="submit" type="button" value="Login" />
</form>
<p id="notRegistered">Non ancora registrato?<a href='registrazione_utente.php'>Registrati qui</a></p>
</div>

					<?php include('footer.php') ?>
