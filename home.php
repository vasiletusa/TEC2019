<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Home");
    ?>  
</head>



<?php getMenu("Home");?>


<?php getBreadcumbs("Home");?>
<div class="home">
	<div class="home-pt1">
		
			<div class="img-sfondo" id="homeimg1"></div>
		<!--p class="titolo-home">Scegli la citt&agrave</p>
		<div id="contenitore-bottoni" class="lista-citta">

                    
                       
                       
                    
                        <button class="box-pulsante selezione" onclick="filterSelection('Padova')"> PADOVA </button>
                              
                        <button class="box-pulsante selezione" onclick="filterSelection('Verona')">VERONA</button>
                               
                        <button class="box-pulsante selezione" onclick="filterSelection('Vicenza')">VICENZA</button>
                                
                        <button class="box-pulsante selezione" onclick="filterSelection('Venezia')">VENEZIA</button>
                    
                        <button class="box-pulsante selezione" onclick="filterSelection('Treviso')">TREVISO</button>
                               
                        <button class="box-pulsante selezione" onclick="filterSelection('Belluno')">BELLUNO</button>
                                
                        <button class="box-pulsante selezione" onclick="filterSelection('Rovigo')">ROVIGO</button>
                   
                    

        </div-->
	</div>
	<div class="home-pt2">
			<div class="box-img-left">
				
			</div>
			<div class="box-descr-right">
			
					<p class = "descr">
						Veneto Eventi ti propone una raccolta degli eventi disponibili nelle città del Veneto.</br> Registrati per poter partecipare agli eventi con posti limitati e comprare i biglietti. Se sei un locale o un'azienda che vuole proporre il proprio evento registra la tua attività e crea il tuo evento.
					</p>
				
			</div>
	</div>
	<div class="prossimi-eventi">
		<p class="titolo-home">Prossimi eventi</p>
	</div>
	<div class="home-pt3">
			
		<?php
            require_once('functions.php');
            $output=getUltimiEventi();
            $outCat="";
            if($_SESSION['eventi']===true){
            foreach ($output as $elem) {
                if($elem){
                    $outCat.=   "
                                
            
                                    <div class=\"box-evento\">
                                        <div class=\"box-img\">
                                            <img class=\"img-evento\" src=\"".getImg($elem['ID'])."\" alt='immagine evento'>
                                        </div>
                                        <div class=\"box-titolo\">
                                            <div class=\"box-icona\"></div>
                                                <p class=\"scritte-evento\">".$elem['Titolo']."</p>
                                        </div>
                                        <div class=\"box-categoria \">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\">".$elem['Categoria']."</p>
                                        </div>
                                        <div class=\"box-data\">
                                            <div class=\"box-icona\">
                                                <div id=\"calendario\"></div>
                                            </div>
                                            <div class=\"box-data-evento\">
                                                <p class=\"scritte-evento\">".$elem['Data']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-descr\">
                                            <div class=\"box-icona\"></div>
                                            <p class=\"scritte-evento\"> ".$elem['Descrizione']."</p>
                                        </div>
                                        <div class=\"box-luogo \">
                                            <div class=\"box-icona\">
                                                <div id=\"local\"></div>
                                            </div>
                                            <div class=\"box-luogo-evento\">
                                                <p class=\"scritte-evento\">".$elem['Luogo']."</p>
                                            </div>
                                        </div>
                                        <div class=\"box-dettagli\">
                                        <div class=\"box-icona\">
                                                
                                            </div>
                                            <div >
                                                
                                                <button class=\"scritte-dettagli selezione\" onclick=\"location.href = './dettagli_evento.php?id=".$elem['ID']."'\" type=\"button\"> Dettagli </button> 
                                            </div>  
                                             
                                        </div>
                                    </div>
                                    ";
                    }
            }}

            else{$outCat.= "<p> <h3>Non hai ancora registrato eventi. <a href='nuovo_evento.php' class='messageTour' tabindex='1' accesskey='m'> Nuovo evento </a><h3></p>";}
            echo $outCat;
            unset($outCat);
        ?>

	</div>
</div>

<script type="text/javascript">
    function myFunction() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
</script>

</body>

<?php getFooter() ?>    