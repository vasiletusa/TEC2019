<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Registrati");
     ?>        
  </head>
<?php getMenu("Registrati");?>

<?php getBreadcumbs("Registrati");?>
<div class="pageRegistrati">
	
	<div class="box-login-left">
		
		<div class="form">
			<form method="post" action="registrazione_utente.php" >						
									
									<div >
										<label for="Nome" class="  label nome">Nome</label>

										<input id="Nome" type="text" name="nome" class=" input nome insertBox" placeholder="Inserisci nome" tabindex="9">
										<p class="error"><?php getNomeError($errors); ?></p>

										
									</div>
									<div >
										<label for="Cognome" class="label cognome">Cognome</label>
										<input id="Cognome" type="text" name="cognome" class="input cognome insertBox" placeholder="Inserisci cognome" tabindex="10">
										<p class="error"><?php getCognomeError($errors); ?></p>

									
									</div>
									<div >
										<label for="email" class="label email">E-Mail</label>
										<input id="email" type="email" required name="email" class="input email insertBox" placeholder="Inserisci E-mail" tabindex="11">
										<p class="error"><?php getEmailError($errors); ?></p>

									
									</div>
									<div>
										<label for="username" class="label username">Username</label>

										<input id="username" type="text" name="username" class="input username insertBox" placeholder="Inserisci Username" tabindex="12">									
										<p class="error"><?php getUsernameError($errors); ?></p>
										<p class="error"><?php getEsistenteError($errors); ?></p>


									</div>
									<div>
										<label for="password" class="label password">Password</label>
										<input id="password" type="password" name="password" class="input passoword insertBox" placeholder="********" tabindex="13">
										<p class="error"><?php getPasswordError($errors); ?></p>

								
										
									</div>
									<div >
										<label for="passwordR" class="label passwordR">Ripeti Password</label>
										<input id="passwordR" type="password" name="passwordR" class="input passwordR insertBox" placeholder="********" tabindex="14">
										<p class="error"><?php getPassword2Error($errors); ?></p>
										<p class="error"><?php getNoPasswordError($errors); ?></p>


										
									</div>
									<button type="submit" class="bottone-invia selezione " name="registrazione_utente" tabindex="15" accesskey="t">Registrati</button>

								</form>
							</div>
								
			</div>


<div class="box-login-right box-login-descr ">
	
		<p> Entra nella nostra community per vedere e partecipare agli eventi </p>
		<p>Se invece sei il proprietario di un'azienda, un locale, bar discoteca, o il referente di un'attività pubblica quale museo o luoghi culturali registra la tua azienda per far conoscere agli utenti della nostra community i tuoi eventi speciali o promozioni.</p>
		<h1 class="titolo"> Registra la tua azienda <a class="link-parola" href="registrazione_azienda.php" tabindex="16" accesskey="p">qui</a>.</h1>
									</div>
</div>
					<?php getfooter() ?>
