<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<?php include_once 'server.php'?>

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Città");
    ?>      
</head>

<?php getMenu("");?>
<?php getBreadcumbs("Home->Città");?>

<?php
        require_once('functions.php');
        $citta=cittaDaNome($_GET['nome']);
                //echo $_SESSION['id'];
        echo   "<div class=\"marginPrincipale\" >
                                            \t<div class=' sinistratour'><img src='".findImg($citta['Nome'].'.jpg','img')."' alt='".$citta['Nome']."' class='imgTour'/>\n \t</div>

					<h1>".$citta['Nome']."</h1>
					<p>".$citta['Descrizione']."</p>
					
				</div>"              
    ?>

    <h2>Tour disponibili</h2>
<div>
    <?php
        require_once('functions.php');
        $output=getTourDaCitta($citta['Nome']);
        $outCat="";
                if($_SESSION['tour']==true){
         $tab=8;
        foreach ($output as $elem) {
            if($elem){
                $outCat.=       "<div class='sfondotour'>\n
                            
                                    \t<div class=' sinistratour'><img src='".findImg($elem['Citta'].'.jpg','img')."' alt='".$elem['Citta']."' class='imgTour'/>\n \t</div>
                                        
                                        \t<div id='descrTour' class='sinistratour'>\n
                                            \t<p class='titolo parag'>".$elem['Titolo']."</p>\n
                                            \t<p class='descrizione parag'>".$elem['Citta']."</p>\n
                                            \t<p class='descrizione parag'>".$elem['Data']."</p>\n
                                            \t<p class='descrizione parag'>".$elem['Organizzatore']."</p>\n
                                        \t</div>

                                        <div class='sinistratour '><input type=\"button\" onclick=\"window.location.href = 'dettagliTour.php?id=".$elem['Id']."'\" class=\"buttonDettagli\" value=\"DETTAGLI\"/>  </div> 
                                        <div class='end'></div>\n
                                </div> ";

            }else{ $outCat.= "<h2 class=\"disponibilita\"> Non ci sono tour al momento <a href=\"registra_tour.php class=\"messageTour\"> Organizzane</a> uno tu!</h2>";}
             $tab=8;
      
        }}

            
       echo $outCat;

        unset($outCat);
    ?>
</div>

</body>

<?php include('footer.php') ?>
