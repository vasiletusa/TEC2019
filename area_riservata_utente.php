<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">


<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("AreaRiservata");
	    $_SESSION['area']=true;
     ?>        
  </head>
<?php getMenu("AreaRiservata");?>

<?php getBreadcumbs("Area personale");?>
<div class="pageArea">

<div class="box1">
    
    <div class="area-titoli">
        <h1 class="titolo ">Benvenuto nella tua area personale <?php echo $_SESSION['usernameU']; ?>!</h1>
        <p class="titolo "> Qui troverai gli eventi salvati e quelli a cui sei iscritto</p>
    </div>
    <div class="area-bottoni">
        <a class="bottone-area link" href="modifica_pw.php'">
         Cambia password</a>
    </div>
</div>
<div class="box-left-area preferiti" >
<?php
            require_once('functions.php');
            $tuoiTour=getEventiPrefe();
            $tour=getEventiTutti();
            $outCat="";
            if($_SESSION['eventiPrefe']===true){
                $outCat.="<h1 class=\"titolo\"> Preferiti</h1>";

            foreach ($tuoiTour as $elem) {
              
                if($_SESSION['eventi']===true){
                foreach ($tour as $key) {
                    
                    if($key&&$elem){
                    if($elem['ID']==$key['ID']){
                       
                    $outCat.=   "<div class=\"evento-1 box-evento piccolo\">
                                        <div class=\"box-img\">
                                            <img class=\"img-evento\" src=\"".getImg($key['ID'])."\" alt=\"immagine evento\">
                                        </div>
                                        <div class=\"box-titolo\">
                                            <div class=\"box-icona\"></div>
                                                <p class=\"scritte-evento\">".$key['Titolo']."</p>
                                        </div>
                                        <div class=\"box-categoria \">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\">".$key['Categoria']."</p>
                                        </div>
                                        <div class=\"box-data\">
                                            <div class=\"box-icona\">
                                                <div id=\"calendario\"></div>
                                            </div>
                                            <div class=\"box-data-evento\">
                                                <p class=\"scritte-evento\">".$key['Data']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-descr\">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\"> ".$key['Descrizione']."</p>
                                        </div>
                                        <div class=\"box-luogo \">
                                            <div class=\"box-icona\">
                                                <div id=\"local\"></div>
                                            </div>
                                            <div class=\"box-luogo-evento\">
                                                <p class=\"scritte-evento\">".$key['Luogo']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-dettagli\">
                                        <div class=\"box-icona\">
                                                
                                        </div>
                                            <div >

                                                <a href=\"dettagli_evento.php?id=".$key['ID']."\" class=\"scritte-dettagli selezione link\">DETTAGLI</a>
                                                
                                            </div> 
                                             
                                        </div>
                                    </div>";
                                break;
                }}
             
        }}
        

    }}  else{$outCat.= "<div><h3> Non ci sono tour a cui partecipi. <a href='tour.php' class='messageTour' tabindex='1' accesskey='s'> Iscriviti </a>al tuo primo tour!</h3></div>";}
        echo $outCat;
        unset($outCat);
    ?>
        
    </div>
    <div class="box-right-area iscrizioni">

    <?php
            require_once('functions.php');
            $tuoiTour=getEventiIscritto();
            $tour=getEventiTutti();
            $outCat="";
            if($_SESSION['eventiIscritto']===true){
                $outCat.="<h1 class=\"titolo\"> Iscrizioni</h1>";

            foreach ($tuoiTour as $elem) {
              
                if($_SESSION['eventi']===true){
                foreach ($tour as $key) {
                    
                    if($key&&$elem){
                    if($elem['ID']==$key['ID']){
                       
                    $outCat.=   "
                                    <div class=\"evento-1 box-evento piccolo\">
                                        <div class=\"box-img\">
                                            <img class=\"img-evento\" src=\"".getImg($key['ID'])."\" alt=\"immagine evento\">
                                        </div>
                                        <div class=\"box-titolo\">
                                            <div class=\"box-icona\"></div>
                                                <p class=\"scritte-evento\">".$key['Titolo']."</p>
                                        </div>
                                        <div class=\"box-categoria \">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\">".$key['Categoria']."</p>
                                        </div>
                                        <div class=\"box-data\">
                                            <div class=\"box-icona\">
                                                <div id=\"calendario\"></div>
                                            </div>
                                            <div class=\"box-data-evento\">
                                                <p class=\"scritte-evento\">".$key['Data']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-descr\">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\"> ".$key['Descrizione']."</p>
                                        </div>
                                        <div class=\"box-luogo \">
                                            <div class=\"box-icona\">
                                                <div id=\"local\"></div>
                                            </div>
                                            <div class=\"box-luogo-evento\">
                                                <p class=\"scritte-evento\">".$key['Luogo']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-dettagli\">
                                        <div class=\"box-icona\">
                                                
                                        </div>
                                            <div >
                                                
                                            
                                                <a href=\"dettagli_evento.php?id=".$key['ID']."\" class=\"scritte-dettagli selezione link\">DETTAGLI</a>
                                            </div> 
                                             
                                        </div>
                                    </div>";
                                break;
                }}
             
        }}
        

    }}  else{$outCat.= "<div><h3> Non ci sono tour a cui partecipi. <a href='tour.php' class='messageTour' tabindex='1' accesskey='s'> Iscriviti </a>al tuo primo tour!</h3></div>";}
        echo $outCat;
        unset($outCat);
    ?>
            
    
</div>
</div>
</body>
<?php getFooter() ?>