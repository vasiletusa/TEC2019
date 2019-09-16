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
         $tab=8;
        foreach ($output as $elem) {
            if($elem){
                $outCat.=       "<div class='sfondotour'>\n
                            
                                    \t<div class=' sinistratour'>\t\t <img src='img/padova.jpg' alt='foto della città di Padova' class='imgTour'/> \t</div>
                                        
                                        \t<div id='descrTour' class='sinistratour'>\n
                                            \t<p class='titolo parag'>".$elem['Titolo']."</p>\n
                                            \t<p class='descrizione parag'>".$elem['Citta']."</p>\n
                                            \t<p class='descrizione parag'>".$elem['Data']."</p>\n
                                            \t<p class='descrizione parag'>".$elem['Organizzatore']."</p>\n
                                        \t</div>

                                        <div class='sinistratour '><input type=\"button\" onclick=\"window.location.href = 'dettagliTour.php?id=".$elem['Id']."'\" class=\"buttonDettagli\" value=\"DETTAGLI\"/>  </div> 
                                        <div class='end'></div>\n
                                </div> ";

            }
             $tab=8;
      
        }}

            else{ $outCat.= "<h2 class=\"disponibilita\"> Non ci sono tour al momento</h2>";}
       echo $outCat;

        unset($outCat);
    ?>
</div>

</body>
<?php include('footer.php') ?>