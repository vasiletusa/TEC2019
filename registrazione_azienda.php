<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Registrati");
     ?>        
  </head>
<?php getMenu("Home");?>
<?php getBreadcumbs("Registrati/Registrazione-azienda");?>
<div class="pageRegistrati">
	
	
		
										


<div class="box-centrale">
	
	<form method="post" action="registrazione_azienda.php" >						
								<div >
									<label for="NomeAzienda" class="label NomeAzienda">Nome azienda</label>

									<input id="NomeAzienda" type="text" name="NomeAzienda" class="input insertBox" placeholder="Inserire nome azienda">
									<p class="error"  tabindex="9"><?php getNomeError($errors); ?></p>


									
								</div>
								<div >
									<label for="NomeReferente" class="label NomeReferente">Nome referente</label>

									<input id="NomeReferente" type="text" name="NomeReferente" class="input insertBox" placeholder="Inserire nome referente" tabindex="10">

									
									<p class="error"><?php getCognomeError($errors); ?></p>

								
								</div>
								<div >
									<label for="EmailReferente" class="label EmailReferente">E-Mail referente</label>

									<input id="EmailReferente" type="email" required name="EmailReferente" class="input insertBox" placeholder="Inserire E-mail referente" tabindex="11">

									<p class="error"><?php getEmailError($errors); ?></p>

								
								</div>
								<div>
									<label for="Username" class="label Username">Username</label>

									<input id="Username" type="text" name="Username" class="input username insertBox" placeholder="Inserire Username"tabindex="12">

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
								<button type="submit" class="bottone-invia selezione" name="registrazione_azienda" tabindex="15" accesskey="t" >Registrati</button>

							</form>
						</div>
							
				
		</div></div>

</div>
</div>
</body>
<?php getfooter() ?>
