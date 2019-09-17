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

<div class="box1">
    <p class="coloreAP">Benvenuto nella tua area personale <?php echo $_SESSION['username']; ?>!</p>
</div>

<div>
	<h1>Tour in attesa di conferma</h1>
    <?php
        require_once('functions.php');
        $output=getTourInAttesa();
        $outCat="";
        if($_SESSION['tourInAttesa']==true){
        foreach ($output as $elem) {
            if($elem){

                $outCat.=   "<div class='sfondoapa'>
                            
                                <div class='sinap'>

                                    <p class='titolo'>".$elem['Titolo']."</p>

                                    <p  class=' parag' >".$elem['Citta']."</p>
                                    <p  class=' parag' >".$elem['Data']."</p>
                                
                                    <p class=' parag' >".$elem['Organizzatore']."</p>
                                </div>

                                <div class='destra '><input type=\"button\" onclick=\"window.location.href = 'accettazione_tour.php?id=".$elem['Id']."';\" class=\"buttonDettagli\" value=\"DETTAGLI\"/>  
                                </div>
                                <div class='end'></div>


                            </div>";
            }
        }}
        else{$outCat.= "<p><h3> Non ci sono tour in attesa di conferma per il momento!.</h3></p>";}
        echo $outCat;
        unset($outCat);
    ?>
</div>
</body>
<?php getFooter() ?>