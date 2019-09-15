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
                $outCat.=  "<div class='sfondotour'>
                            
                                    <div class=' sinistratour'> <img src='img/padova.jpg' alt='foto della città di Padova' class='imgTour' / class='imgTour'> </div>
                                    <div id='descrTour' class='sinistratour'>
                                        <p class='titolo'><a href='dettagliTour.php?nome=".$elem['Titolo']."'>".$elem['Titolo']."</a></p>
                                        <p class='descrizione'>".$elem['Citta']."</a></p>
                                        <p class='descrizione'>".$elem['Data']."</a></p>
                                        <p class='descrizione'>".$elem['Organizzatore']."</a></p>
                                    </div>
<<<<<<< HEAD
                                    <div class='sinistratour '><input type=\"button\" onclick=\"window.location.href = 'dettagliTour.php?id=".$elem['Id']."';\" class=\"buttonDettagli\" value=\"DETTAGLI\"/>  </div>
                                
=======
                                    <div class='sinistratour2'> <input class='buttonDettagli' name='DETTAGLI' type='submit' value='DETTAGLI' /> </div>
                                <div class='end'/>
>>>>>>> master

                            
                            </div>";
            }
        }}
            else{ $outCat.= "<h2 class=\"disponibilita\"> Non ci sono tour al momento</h2>";}
        echo $outCat;
        unset($outCat);
    ?>
</div>


</div>
</body>
</html>