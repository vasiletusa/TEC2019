<!DOCTYPE html>
<html>
<head>

	<?php 
        include_once 'functions.php'; 
	    getHead("Modifica-account");
     ?>   
          
  </head>

<?php getMenu("AreaRiservata");?>

<?php getBreadcumbs("AreaRiservata/Modifica-account");?>


<?php
           
        require_once('functions.php');

        $info=getAccountA();
        
  echo   " <form method='post' action='modifica_azienda.php' >   
                                    
                                    <div >
                                        <label for='Nome' class='label nome'>Nome</label>
                                        <input id='Nome' type='text' name='nome' class='input nome insertBox' value='".$info['Nome']."''>

                                        
                                    </div>
                                    <div >
                                        <label for='Cognome' class='label cognome'>Cognome</label>
                                        <input id='Cognome' type='text' name='nomeR' class='input cognome insertBox' value='".$info['NomeReferente']."''>

                                    
                                    </div>
                                    <div >
                                        <label for='email' class='label email'>E-Mail</label>
                                        <input id='email' type='email' required name='email' class='input email insertBox' value='".$info['EmailReferente']."'>

                                    
                                    </div>
                                    
                                    <button type='submit' class='bottone-invia selezione ' name='modifica_azienda'>Invia</button>

                                </form>
                                    ";  
?>


                
                
              
</div>



</body>

<?php getFooter() ?>    