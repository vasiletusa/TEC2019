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
<div class="container-area">
	<div class="container-tour sinistra">
		<div class="item-tour"> <?php getTuoiTour($tuoitour);?></div>



	</div>
	<div class="container-prenotazioni destra">
		<div class="item-prenotazioni">3</div>
		<div class="item-prenotazioni">4</div>
	</div>

</div>
</body>
</html>