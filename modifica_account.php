<!DOCTYPE html>
<html>
<head>

	<?php 
        include_once 'functions.php'; 
	    getHead("Dettagli evento");
     ?>   
          
  </head>

<?php getMenu("Eventi");?>

<?php getBreadcumbs("Eventi");?>


<?php
           
        require_once('functions.php');

        $info=getAccountU();
        
  echo   " <form method='post' action='modifica_account.php' >   
                                    
                                    <div >
                                        <label for='Nome' class='label nome'>Nome</label>
                                        <input id='Nome' type='text' name='nome' class='input nome insertBox' value='".$info['Nome']."''>

                                        
                                    </div>
                                    <div >
                                        <label for='Cognome' class='label cognome'>Cognome</label>
                                        <input id='Cognome' type='text' name='cognome' class='input cognome insertBox' value='".$info['Cognome']."''>

                                    
                                    </div>
                                    <div >
                                        <label for='email' class='label email'>E-Mail</label>
                                        <input id='email' type='email' required name='email' class='input email insertBox' value='".$info['Email']."'>

                                    
                                    </div>
                                    
                                    <button type='submit' class='bottone-invia selezione ' name='modifica_account'>Invia</button>

                                </form>
                                    ";  
?>


                
                
              
</div>



</body>

<?php getFooter() ?>    