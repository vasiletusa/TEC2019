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

    <div class="area-titoli">
        <h1 class="titolo">Benvenuto nella tua area personale <?php echo $_SESSION['usernameA']; ?>!</h1>
        <p class="titolo"> Qui troverai gli eventi inseriti dalla tua azienda</p>
    </div>
    <div class="area-bottoni">
        <a class="bottone-area link" href='modifica_pw.php'>
         Cambia password</a>
         <a class="bottone-area link" href='nuovo_evento.php'>
         Nuovo evento</a>
         <a class="bottone-area link" href='modifica_azienda.php'>Modifica dati </a>
    </div>
</div>
<div class="home-pt3">

<?php
            require_once('functions.php');
            $output=getEventiAzienda();
            $outCat="";
            $tab=9;
            if($_SESSION['eventiAzienda']===true){
            foreach ($output as $elem) {
                if($elem){
                    $outCat.=   "
                                
            
                                    <div class='box-evento'>
                                        <div class='box-img'>
                                            <img class='img-evento' src='".getImg($elem['ID'])."' alt='immagine evento'>
                                        </div>
                                        <div class='box-titolo '>
                                            <div class='box-icona'></div>
                                                <p class='scritte-evento'>".$elem['Titolo']."</p>
                                        </div>
                                        <div class='box-categoria '>
                                            <div class='box-icona'></div>
                                            <p class='scritte-evento'>".$elem['Categoria']."</p>
                                        </div>
                                        <div class='box-data '>
                                            <div class='box-icona'>
                                                <div id='calendario'></div>
                                            </div>
                                            <div class='box-data-evento'>
                                                <p class='scritte-evento'>".$elem['Data']."</p>
                                            </div>
                                        </div>
                                        <div class='box-descr '>
                                            <div class='box-icona'></div>
                                            <p class='scritte-evento'> ".$elem['Descrizione']."</p>
                                        </div>
                                        <div class='box-luogo '>
                                            <div class='box-icona'>
                                                <div id='local'></div>
                                            </div>
                                            <div class='box-luogo-evento'>
                                                <p class='scritte-evento'>".$elem['Luogo']."</p>
                                            </div>
                                        </div>
                                        <div class='box-dettagli'>
                                        <div class='box-icona'>
                                                
                                            </div>
                                            <div >
                                                
                                                <a class='scritte-dettagli selezione link' href ='dettagli_evento.php?id=".$elem['ID']."' tabindex='".tabIndex($tab)."'> DETTAGLI </a> 
                                            </div> 
                                        </div>
                                        
                                    </div>
                                    ";
                    }
                    $tab=$tab+1;
            }}


            else{$outCat.= "<p> <h3>Non hai ancora registrato eventi. <a href='nuovo_evento.php' class='messageTour' tabindex='".tabIndex($tab)."' accesskey='n'> Nuovo evento </a><h3></p>";}

            echo $outCat;
            unset($outCat);
        ?>


                
                
              
</div>
</body>
<?php getFooter() ?>