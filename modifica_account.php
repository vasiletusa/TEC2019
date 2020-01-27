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

        $info=getAccountU();


        
  echo   " <div class='box-centrale'>

                 <form method='post' action='modifica_account.php' >   
                                    
                                    <div >
                                        <label for='Nome' class='label nome'>Nome</label>
                                        <input id='Nome' type='text' name='nome' tabindex='9' class='input nome insertBox' value='".$info['Nome']."' '>

                                        
                                    </div>
                                    <div >
                                        <label for='Cognome' class='label cognome'>Cognome</label>
                                        <input id='Cognome' type='text' name='cognome' tabindex='10' class='input cognome insertBox' value='".$info['Cognome']."''>

                                    
                                    </div>
                                    <div >
                                        <label for='email' class='label email'>E-Mail</label>
                                        <input id='email' type='email' required name='email'  stabindex='11' class='input email insertBox' value='".$info['Email']."'>

                                    
                                    </div>
                                    
                                    <button type='submit' class='bottone-invia selezione ' name='modifica_account' tabindex='12' accesskey='i'>Invia</button>

                </form>
            </div>";  
?>


                
                
              
</div>



</body>

<?php getFooter() ?>    