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
        $evento=getEventoDettagli($_GET['id']);
        $_SESSION['idEvento']=$_GET['id'];
        
        $controlloIscrizione= setIscrivitiBottone();
        $controlloPreferiti= setPreferitiBottone();
  echo   " <div class=\"box-evento dettagli-evento \">
                                        <div class=\"box-img img-dettagli\">
                                            <img class=\"img-evento\" src=\"img/eventi.jpg\" alt='immagine evento'>
                                        </div>
                                        <div class=\"box-evento-indettagli \">
                                            <div class=\"box-titolo titolo-dettagli\">
                                               
                                                <input id=\"TitoloEvento\" type=\"text\" name=\"TitoloEvento\" class=\"input insertBox \" value=\"".$evento['Titolo']."\">
                                                    
                                            </div>
                                            <div class=\"box-categoria categoria-dettagli\">
                                               
                                                <input id=\"TitoloEvento\" type=\"text\" name=\"TitoloEvento\" class=\"input insertBox \" value=\"".$evento['Categoria']."\">
                                            </div>
                                            <div class=\"box-data data-dettagli\">
                                                
                                                <div class=\"box-data-evento\">
                                                    <input id=\"TitoloEvento\" type=\"text\" name=\"TitoloEvento\" class=\"input insertBox \" value=\"".$evento['Data']."\">
                                                </div>
                                            </div>
                                            
                                            <div class=\"box-luogo luogo-dettagli\">
                                                
                                                <div class=\"box-luogo-evento\">
                                                    <input id=\"TitoloEvento\" type=\"text\" name=\"TitoloEvento\" class=\"input insertBox \" value=\"".$evento['Luogo']."\">
                                                </div>
                                            </div>
                                        </div>
                                            <div class=\"box-descr descr-dettagli\">
                                                
                                                <input id=\"TitoloEvento\" type=\"text\" name=\"TitoloEvento\" class=\"input insertBox \" value=\"".$evento['Descrizione']."\">
                                            </div>
                                        
                                            <div class=\"box-dettagli prefe-iscrizione\">
                                            
                                                <input type=\"submit\" class=\" selezione\" name=\"modifica_evento\">Modifica</button>
 
                                            </div>
                            </div>
                                    ";  
?>


                
                
              
</div>



</body>

<?php getFooter() ?>    