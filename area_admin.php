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
	<h1>Tour in attesa di conferma<h2>
    <?php
        require_once('functions.php');
        $output=getTourInAttesa();
        $outCat="";
        if($_SESSION['tourInAttesa']==true){
        foreach ($output as $elem) {
            if($elem){

                $outCat.=   "<div class='cardTour'>
                            

                            <p class='titolo'>".$elem['Titolo']."</p>
                           
                            <p class='descrizione'>".$elem['Descrizione']."</p>

                            <p class='descrizione'>".$elem['Citta']."</p>
                            <p class='descrizione'>".$elem['Data']."</p>
                            <p class='descrizione'>".$elem['Organizzatore']."</p>
                            
                                                                                                   <div class='sinistratour '> <input class='buttonDettagli' name='DETTAGLI' type='submit' value='DETTAGLI' /> </div>



                            </div>";
            }
        }}
        else{$outCat.= "<p><h2> Non ci sono tour in attesa di conferma per il momento!.</h2></p>";}
        echo $outCat;
        unset($outCat);
    ?>
</div>