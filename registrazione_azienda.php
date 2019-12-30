<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Registrati");
     ?>        
  </head>
<?php getMenu1("Registrati");?>
<?php getMenu2("Registrati");?>
<?php getBreadcumbs("Registrati");?>
<div class="pageRegistrati">
	
	
		
										


<div class="boxLeft">
	
	<form method="post" action="registrazione_azienda.php" >						
								<div >
									<label for="NomeAzienda" class="label NomeAzienda">Nome azienda</label>
									<input id="NomeAzienda" type="text" name="NomeAzienda" class="input insertBox" placeholder="Nome azienda">
									<p class="error"><?php getNomeError($errors); ?></p>

									
								</div>
								<div >
									<label for="NomeReferente" class="label NomeReferente">Nome referente</label>
									<input id="NomeReferente" type="text" name="NomeReferente" class="input insertBox" placeholder="Nome referente">
									<p class="error"><?php getCognomeError($errors); ?></p>

								
								</div>
								<div >
									<label for="EmailReferente" class="label EmailReferente">E-Mail referente</label>
									<input id="EmailReferente" type="email" required name="EmailReferente" class="input insertBox" placeholder="E-mail referente">
									<p class="error"><?php getEmailError($errors); ?></p>

								
								</div>
								<div>
									<label for="pi" class="label pi">Partita IVA</label>
									<input id="pi" type="text" name="pi" class="input pi insertBox" placeholder="Partita IVA">
									<p class="error"><?php getUsernameError($errors); ?></p>
									<p class="error"><?php getEsistenteError($errors); ?></p>


								</div>
								<div>
									<label for="password" class="label password">Password</label>
									<input id="password" type="password" name="password" class="input passoword insertBox" placeholder="********">
									<p class="error"><?php getPasswordError($errors); ?></p>

							
									
								</div>
								<div >
									<label for="passwordR" class="label passwordR">Ripeti Password</label>
									<input id="passwordR" type="password" name="passwordR" class="input passwordR insertBox" placeholder="********">
									<p class="error"><?php getPassword2Error($errors); ?></p>
									<p class="error"><?php getNoPasswordError($errors); ?></p>


									
								</div>
								<button type="submit" class="button" name="registrazione_azienda">Registrati</button>

							</form>
						</div>
							
				<div class="boxRight ">
			<img class="imgBoxRight" src="img/calendario.jpg" alt="foto di un calendario">
		</div></div>

</div>
</div>
					<?php getfooter() ?>
