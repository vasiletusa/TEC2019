<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Tour");
     ?>        
  </head>

<?php getMenu("Tour");?>
<?php getBreadcumbs("Tour");?>



<h2>Tour disponibili</h2>
<div>
    <?php
        require_once('functions.php');
        $output=getTour();
        $outCat="";
                if($_SESSION['tour']==true){

        foreach ($output as $elem) {
            if($elem){
                $outCat.=   "<div class='cardTour sfondotour'>
                            
                                <div class='container-box2'> 
                                    <div> <img src='img/padova.jpg' alt='foto della città di Padova' class='imgTour' / class='imgTour'> </div>
                                    <div id='descrTour'>
                                        <p class='titolo'><a href='dettagliTour.php?nome=".$elem['Titolo']."'>".$elem['Titolo']."</a></p>
                                        <p class='descrizione'>".$elem['Citta']."</a></p>
                                        <p class='descrizione'>".$elem['Data']."</a></p>
                                        <p class='descrizione'>".$elem['Organizzatore']."</a></p>
                                    </div>
                                </div>

                                <input class='buttonDettagli' name='DETTAGLI' type='submit' value='DETTAGLI' />
                            
                            </div>";
            }
        }}
                else{$outCat.= "<p><h2> Non ci sono tour al momento.</h2></p>";}
        echo $outCat;
        unset($outCat);
    ?>
</div>




</div>
</body>
</html>