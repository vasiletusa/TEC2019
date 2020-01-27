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
        
  echo   "  <div class='box-centrale'>
            <form method='post' action='modifica_azienda.php' >   
                                    
                                    <div >
                                        <label for='Nome' class='label nome'>Nome azienda</label>
                                        <input id='Nome' type='text' name='nome' class='input nome insertBox' value='".$info['Nome']."'' tabindex='9'>

                                        
                                    </div>
                                    <div >
                                        <label for='Cognome' class='label cognome'>Referente</label>
                                        <input id='Cognome' type='text' name='nomeR' class='input cognome insertBox' value='".$info['NomeReferente']."'' tabindex='10'>

                                    
                                    </div>
                                    <div >
                                        <label for='email' class='label email'>E-Mail referente</label>
                                        <input id='email' type='email' required name='email' class='input email insertBox' value='".$info['EmailReferente']."' tabindex='11'>

                                    
                                    </div>
                                    
                                    <button type='submit' class='bottone-invia selezione ' name='modifica_azienda' tabindex='12' accesskey='i'>Invia</button>

                                </form>
                            </div>
                                    ";  
?>


                
                
              
</div>



</body>

<?php getFooter() ?>    