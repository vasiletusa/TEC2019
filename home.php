<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Home");
    ?>      
</head>
<?php getMenu1("Home");?>
<?php getMenu2("Home");?>
<?php getBreadcumbs("Home");?>
<div class="home">
	<div class="home-pt1">
		
			<div class="img-sfondo" id="homeimg1"></div>
		<p class="titolo-home">Scegli la citt&agrave</p>
		<div class="lista-citta">
			<div class="box-pulsante box1">
					<div class="bottone" id="padova"><a class="citta" href="citta.php?nome=Paodva">PADOVA</a></div>
			</div>
			<div class="box-pulsante box2">
					<div class="bottone" id="verona"><a href="citta.php?nome=Verona">VERONA</a></div>
			</div>
			<div class="box-pulsante box3">
					<div class="bottone" id="vicenza"><a href="citta.php?nome=Vicenza">VICENZA</a></div>
			</div>
			<div class="box-pulsante box4">
					<div class="bottone" id="venezia"><a href="citta.php?nome=Venezia">VENEZIA</a></div>
			</div>
			<div class="box-pulsante box5">
					<div class="bottone" id="treviso"><a href="citta.php?nome=Treviso">TREVISO</a></div>
			</div>
			<div class="box-pulsante box6">
					<div class="bottone" id="belluno"><a href="citta.php?nome=Belluno">BELLUNO</a></div>
			</div>
			<div class="box-pulsante box7">
					<div class="bottone" id="rovigo"><a href="citta.php?nome=Rovigo">ROVIGO</a></div>
			</div>

		</div>
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
                                            <img class=\"img-evento\" src=\"img/eventi.jpg\">
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

                                                <input type=\"button\" onclick=\"window.location.href = 'dettagli_evento.php?id=".$elem['ID']."'\" class=\"scritte-dettagli\" value=\"DETTAGLI\"/>  
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
</div>


	


</body>

<?php getFooter() ?>    