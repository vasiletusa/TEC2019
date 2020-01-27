<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">



<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Login");
    ?>      
</head>
<?php getMenu("Login");?>
<?php getBreadcumbs("Login");?>


<div class="pageLogin">

	<div class=" box-login-left" >
		
	

		<form action="login.php" method="post" name="login">
	
		
		<div class="form">
			<form action="login.php" method="post" name="login">
		
			

			<div class="input">
								<label for="Username" class="label username">Username</label>
								<input class="insertBox" id="Username" type="text" name="username" class="input username" placeholder="Inserisci username"
								tabindex="9">
								<p class="error"><?php getUsernameError($errors); ?></p>
			</div>
			<div class="input password">
								<label for="Password" class="label password"> Password</label>
								<input class="insertBox" id="Password" type="password" name="password" class="input password" placeholder="********" tabindex="10">
								
			</div>
			
							<button type="submit" class="bottone-invia selezione" name="Login" tabindex="11" accesskey="p">Login</button>
			</form>
		</div>
	</div>
	

	<div class="box-login-right box-login-descr" >

	<p >Non ancora registrato? Che aspetti? <br></br> Entra nella nostra community per restare aggiornato sugli eventi nelle città del Veneto, non perdere l'occasione di iscriverti ai tuoi avvenimenti preferiti prima che i posti finiscano! Già milioni di utenti utilizzano il nostro servizio e ne sono entusiasti!</p>
	<h1 class="titolo">Registrati <a class="link-parola" href='registrazione_utente.php' tabindex="12" accesskey="s">qui</a></h1>
	</div>


</div>
</body>
<?php getfooter()?>

