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
        $_SESSION['idEvento']=$_GET['id'];
        
        $controlloIscrizione= setIscrivitiBottone();
        $controlloPreferiti= setPreferitiBottone();
                                
         echo   " <div class=\"box-evento dettagli-evento \">
                                        <div class=\"box-img img-dettagli\">
                                            <img class=\"img-evento\" src=\"img/eventi.jpg\">
                                        </div>
                                        <div class=\"box-evento-indettagli \">
                                            <div class=\"box-titolo titolo-dettagli\">
                                                <div class=\"box-icona\"></div>
                                                    <p class=\"scritte-evento\">".$evento['Titolo']."</p>
                                            </div>
                                            <div class=\"box-categoria categoria-dettagli\">
                                                <div class=\"box-icona\"></div>
                                                <p class=\"scritte-evento\">".$evento['Categoria']."</p>
                                            </div>
                                            <div class=\"box-data data-dettagli\">
                                                <div class=\"box-icona\">
                                                    <div id=\"calendario\"></div>
                                                </div>
                                                <div class=\"box-data-evento\">
                                                    <p class=\"scritte-evento\">".$evento['Data']."</p>
                                                </div>
                                            </div>
                                            
                                            <div class=\"box-luogo luogo-dettagli\">
                                                <div class=\"box-icona\">
                                                    <div id=\"local\"></div>
                                                </div>
                                                <div class=\"box-luogo-evento\">
                                                    <p class=\"scritte-evento\">".$evento['Luogo']."</p>
                                                </div>
                                            </div>
                                        </div>
                                            <div class=\"box-descr descr-dettagli\">
                                                <div class=\"box-icona\"></div>
                                                <p class=\"scritte-evento\"> ".$evento['Descrizione']."</p>
                                            </div>
                                        
                                            <div class=\"box-dettagli prefe-iscrizione\">
                                            
                                                <div >

                                                    ".$controlloPreferiti."
                                                </div> 
                                                <div >

                                                    ".$controlloIscrizione."  
                                                </div> 
                                            </div>
                            </div>
                                    ";  
?>


                
                
              
</div>



</body>

<?php getFooter() ?>    