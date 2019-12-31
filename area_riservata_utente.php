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

<div class="box1">
    
    <div class="bottone modifica-pw"><a href="modifica_pw.php" style="color:black;">Cambia password </a>  </div>
    <h1 class="titolo benvenuto">Benvenuto nella tua area personale <?php echo $_SESSION['usernameU']; ?>!</h1>
    <p class="titolo descrizione"> Qui troverai gli eventi salvati e quelli a cui sei iscritto</p>
</div>

<div class="box-left-area preferiti" >
    <h1 class="titolo"> Preferiti</h1>
    <div class="evento-1 box-evento piccolo">
                <div class="box-img">
                    <img class="img-evento" src="img/eventi.jpg">

                </div>
                <div class="box-titolo box-5">
                    <div class="box-icona"></div>
                    <p class="scritte-evento"> La fabbrica di Babbo Natale</p>
                </div>
                <div class="box-categoria box-5">
                    <div class="box-icona"></div>
                    <p class="scritte-evento">Famiglie</p>
                </div>
                <div class="box-data box-5">
                    <div class="box-icona">
                        <div id="calendario"></div>
                    </div>
                    <div class="box-data-evento">
                        <p class="scritte-evento"> 23 Novembre 2019</p>
                    </div>
                </div>
                <div class="box-descr box-10">
                    <div class="box-icona"></div>
                    <p class="scritte-evento"> Apre la fabbrica di babbo natale con le casette in legno in cui trovare tante idee regalo e sorprese per grandi e piccini!
                </div>
                <div class="box-luogo box-5">
                    <div class="box-icona">
                        <div id="local"></div>
                    </div>
                    <div class="box-luogo-evento">
                        <p class="scritte-evento"> 23 Piazza Eremitani</p>
                    </div>
                </div>
            </div>
</div>
<div class="box-right-area iscrizioni">
    <h1 class="titolo"> Iscrizioni</h1>
    <div class="evento-1 box-evento piccolo">
                <div class="box-img">
                    <img class="img-evento" src="img/eventi.jpg">

                </div>
                <div class="box-titolo box-5">
                    <div class="box-icona"></div>
                    <p class="scritte-evento"> La fabbrica di Babbo Natale</p>
                </div>
                <div class="box-categoria box-5">
                    <div class="box-icona"></div>
                    <p class="scritte-evento">Famiglie</p>
                </div>
                <div class="box-data box-5">
                    <div class="box-icona">
                        <div id="calendario"></div>
                    </div>
                    <div class="box-data-evento">
                        <p class="scritte-evento"> 23 Novembre 2019</p>
                    </div>
                </div>
                <div class="box-descr box-10">
                    <div class="box-icona"></div>
                    <p class="scritte-evento"> Apre la fabbrica di babbo natale con le casette in legno in cui trovare tante idee regalo e sorprese per grandi e piccini!
                </div>
                <div class="box-luogo box-5">
                    <div class="box-icona">
                        <div id="local"></div>
                    </div>
                    <div class="box-luogo-evento">
                        <p class="scritte-evento"> 23 Piazza Eremitani</p>
                    </div>
                </div>
            </div>
    
</div>
</div>
</body>
<?php getFooter() ?>