<!DOCTYPE html>
<html>
<head>

	<?php 
        include_once 'functions.php'; 
	    getHead("Dettagli evento");
     ?>   
          
  </head>

<?php getMenu1("Eventi");?>
<?php getMenu2("Eventi");?>

<?php getBreadcumbs("Eventi");?>


<?php
           
        require_once('functions.php');
        $evento=getEventoDettagli($_GET['id']);
        $_SESSION['idTour']=$_GET['id'];
        
        //$controllo= setIscrivitiButton();
                                
         echo   " <div class=\"box-evento dettagli-evento \">
                                        <div class=\"box-img\">
                                            <img class=\"img-evento\" src=\"img/eventi.jpg\">
                                        </div>
                                        <div class=\"box-titolo box-5\">
                                            <div class=\"box-icona\"></div>
                                                <p class=\"scritte-evento\">".$evento['Titolo']."</p>
                                        </div>
                                        <div class=\"box-categoria box-5\">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\">".$evento['Categoria']."</p>
                                        </div>
                                        <div class=\"box-data box-5\">
                                            <div class=\"box-icona\">
                                                <div id=\"calendario\"></div>
                                            </div>
                                            <div class=\"box-data-evento\">
                                                <p class=\"scritte-evento\">".$evento['Data']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-descr box-10\">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\"> ".$evento['Descrizione']."</p>
                                        </div>
                                        <div class=\"box-luogo box-5\">
                                            <div class=\"box-icona\">
                                                <div id=\"local\"></div>
                                            </div>
                                            <div class=\"box-luogo-evento\">
                                                <p class=\"scritte-evento\">".$evento['Luogo']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-dettagli\">
                                        <div class=\"box-icona\">
                                                
                                            </div>
                                            <div >

                                                <input type=\"button\" onclick=\"window.location.href = 'dettagli_evento.php?id=".$evento['ID']."'\" class=\"scritte-preferiti\" value=\"Salva\"/>  
                                            </div> 
                                            <div >

                                                <input type=\"button\" onclick=\"window.location.href = 'dettagli_evento.php?id=".$evento['ID']."'\" class=\"scritte-iscriviti\" value=\"Iscriviti\"/>  
                                            </div> 
                                        </div>
                                    </div>
                                    ";  
?>


                
                
              
</div>



</body>

<?php getFooter() ?>    