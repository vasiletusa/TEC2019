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
    <h1>Benvenuto nella tua area personale <?php echo $_SESSION['username']; ?>!</h1>
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

                $outCat.=   "<div class='sfondotour'>
                            
                                <div class='sinistra'>

                                    <p class='titolo'>".$elem['Titolo']."</p>

                                    <p  class='coloret parag' class='descrizione'>".$elem['Citta']."</p>
                                    <p  class='coloret parag' class='descrizione'>".$elem['Data']."</p>
                                
                                    <p class='coloret parag' class='descrizione'>".$elem['Organizzatore']."</p>
                                </div>

                                <div class='sinistra '><input type=\"button\" onclick=\"window.location.href = 'accettazione_tour.php?id=".$elem['Id']."';\" class=\"buttonDettagli\" value=\"DETTAGLI\"/>  
                                </div>
                                <div class='end'/>


                            </div>";
            }
        }}
        else{$outCat.= "<p><h2> Non ci sono tour in attesa di conferma per il momento!.</h2></p>";}
        echo $outCat;
        unset($outCat);
    ?>
</div>
</body>
<?php include('footer.php') ?>