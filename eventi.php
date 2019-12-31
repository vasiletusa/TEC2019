<!DOCTYPE html>
<html>
<head>

	<?php 
        include_once 'functions.php'; 
	    getHead("Eventi");
     ?>   
          
  </head>

<?php getMenu1("Eventi");?>
<?php getMenu2("Eventi");?>

<?php getBreadcumbs("Login");?>
<p class="titolo-home">Prossimi eventi</p>
	<div class="home-pt3">

<?php
            require_once('functions.php');
            $output=getEventiTutti();
            $outCat="";
            if($_SESSION['eventi']===true){
            foreach ($output as $elem) {
                if($elem){
                    $outCat.=   "
                                
            
                                    <div class=\"box-evento\">
                                        <div class=\"box-img\">
                                            <img class=\"img-evento\" src=\"img/eventi.jpg\">
                                        </div>
                                        <div class=\"box-titolo box-5\">
                                            <div class=\"box-icona\"></div>
                                                <p class=\"scritte-evento\">".$elem['Titolo']."</p>
                                        </div>
                                        <div class=\"box-categoria box-5\">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\">".$elem['Categoria']."</p>
                                        </div>
                                        <div class=\"box-data box-5\">
                                            <div class=\"box-icona\">
                                                <div id=\"calendario\"></div>
                                            </div>
                                            <div class=\"box-data-evento\">
                                                <p class=\"scritte-evento\">".$elem['Data']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-descr box-10\">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\"> ".$elem['Descrizione']."</p>
                                        </div>
                                        <div class=\"box-luogo box-5\">
                                            <div class=\"box-icona\">
                                                <div id=\"local\"></div>
                                            </div>
                                            <div class=\"box-luogo-evento\">
                                                <p class=\"scritte-evento\">".$elem['Luogo']."</p>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                    }
            }}

            else{$outCat.= "<p> <h3>Non hai ancora registrato eventi. <a href='nuovo_evento.php' class='messageTour'> Nuovo evento </a><h3></p>";}
            echo $outCat;
            unset($outCat);
        ?>


                
                
              
</div>



</body>

<?php getFooter() ?>    