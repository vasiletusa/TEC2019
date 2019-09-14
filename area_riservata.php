<?php
//include auth.php file on all secure pages
include("auth.php");
?>
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

<div class="box">
<h1>Benvenuto nella tua area personale <?php echo $_SESSION['username']; ?>!</h1>

</div>
<div>
	<h1>I tour che hai organizzato<h2>
    <?php
        require_once('functions.php');
        $output=getTuoiTourOrganizzati();
        $outCat="";
        if($_SESSION['tuoiTour']==true){
        foreach ($output as $elem) {
            if($elem){
                $outCat.=   "<div class='cardTour'>
                            

                            <p class='titolo'><a href='dettagliTour.php?nome=".$elem['Titolo']."'>".$elem['Titolo']."</a></p>
                           
                            <p class='descrizione'>".$elem['Descrizione']."</a></p>

                            <p class='descrizione'>".$elem['Citta']."</a></p>
                            <p class='descrizione'>".$elem['Data']."</a></p>
                            <p class='descrizione'>".$elem['Organizzatore']."</a></p>
                            
                            
                            </div>";
            }
        }}
        else{$outCat.= "<p><h2> Non hai ancora organizzato tour.</h2></p>";}
        echo $outCat;
        unset($outCat);
    ?>
</div>
<div>
	<h1>I tour a cui sei iscritto<h2>
    <?php
        require_once('functions.php');
        $tuoiTour=getTuoiTourPartecipi();
        $tour=getTour();
        $outCat="";
        if($_SESSION['tuoiTour']==true){
        foreach ($tour as $key) {
        	foreach ($tuoiTour as $elem) {
        		echo "a  ";
        		if($elem['IdTour']==$key['Id']){
        			echo "conta";
                $outCat.=   "<div class='cardTour'>
                            

                            <p class='titolo'>".$key['Id']."</a></p>
                           
                            <p class='descrizione'>".$key['Titolo']."</a></p>

                            
                            
                            </div>";
            }
        }}}
        else{$outCat.= "<p><h2> Non ci sono tour a cui partecipi</h2></p>";}
        echo $outCat;
        unset($outCat);
    ?>
</div>

</div>
</body>
</html>