<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">


<head>
    <?php 
        include_once 'functions.php'; 
        getHead("AreaRiservata");
        $_SESSION['area']=true;
     ?>        
  </head>
<?php getMenu1("AreaRiservata");?>
<?php getMenu2("AreaRiservata");?>

<?php getBreadcumbs("Area personale");?>
<div class="pageArea">

    <div class="area-titoli">
        <h1 class="titolo">Benvenuto nella tua area personale <?php echo $_SESSION['usernameA']; ?>!</h1>
        <p class="titolo"> Qui troverai gli eventi inseriti dalla tua azienda</p>
    </div>
    <div class="area-bottoni">
        <div class="bottone bottone-area"><a href="modifica_pw.php" style="color:black;">Cambia password </a>  </div>
        <div class="bottone bottone-area nuovo-evento"><a href="nuovo_evento.php" style="color:black;">Nuovo evento</a>  </div>
    </div>
</div>
<div class="home-pt3">

<?php
            require_once('functions.php');
            $output=getEventiAzienda();
            $outCat="";
            if($_SESSION['eventiAzienda']===true){
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