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
                            
                                    \t<div class=' sinistratour sinistraparagmob'><img src='".findImg($elem['Citta'].'.jpg','img')."' alt='".$elem['Citta']."' class='imgTour'/>\n \t</div>
                                        
                                        \t<div id='descrTour' class='sinistratour sinistraparagmob'>\n
                                            \t<p class='titolo parag'>".$elem['Titolo']."</p>\n
                                            \t<p class=' parag'>".$elem['Citta']."</p>\n
                                            \t<p class=' parag'>".$elem['Data']."</p>\n
                                            \t<p class='parag'>".$elem['Organizzatore']."</p>\n
                                        \t</div>

                                        <div class='sinistratour '><input type=\"button\" onclick=\"window.location.href = 'dettagliTour.php?id=".$elem['Id']."'\" class=\"buttonDettagli\" value=\"DETTAGLI\"/>  </div> 
                                        <div class='end'></div>\n
                                </div> ";

            }
             $tab=8;
      
        }}

            else{ $outCat.= "<h2 class=\"disponibilita\"> Non ci sono tour al momento <a href=\"registra_tour.php\" class=\"messageTour\"> Organizzane</a> uno tu!</h2>";}
       echo $outCat;

        unset($outCat);
    ?>
</div>

</body>
<?php getfooter() ?>