<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Login");
    ?>      
</head>

<?php getMenu("Home");?>
<?php getBreadcumbs("Home");?>



<div class="container-box1">

	<div class="left">
		<h2 class="testo">VENETOTOUR</h2>
		<div>
		<p>VenetotTour si prepone di offrire un servizio interattivo con la possibilità da parte degli utenti di creare e proporre tour turistici nella Regione Veneto e avvalersi della preparazione di una delle guide a noi affigliate.<br>
		<p class="testo">Che aspetti? Mettiti in marcia.</p>
		<br>
		</p>
		</div>
	</div>	

	<div class="grid-container">

		<div class="pic ">
			<img src="img/padova.jpg" alt="foto della città di Padova">
			<div class="link"><a href="Citta/Padova.php">PADOVA</a></div>
		</div>

		<div class="pic">			
			<img src="img/venezia.jpg" alt="foto della città di Venezia">
			<div class="link "><a href="Citta/Venezia.php">VENEZIA</a></div>
		</div>

		<div class="pic">			
			<img src="img/rovigo.jpg" alt="foto della città di Rovigo">
			<div class="link "><a href="Citta/Rovigo.php">ROVIGO</a></div>
		</div>
		<div class="pic">
			<img src="img/vicenza.jpg" alt="foto della città di Vicenza">
			<div class="link "><a href="Citta/Vicenza.php">VICENZA</a></div>
		</div>
		<div class="pic">
			<img src="img/verona.jpg" alt="foto della città di Verona">
			<div class="link "><a href="Citta/Verona.php">VERONA</a></div>
		</div>
		<div class="pic">			
			<img src="img/treviso.jpg" alt="foto della città di Treviso">
			<div class="link "><a href="Citta/Treviso.php">TREVISO</a></div>
		</div>
		<div class="pic">
			<img src="img/belluno.jpg" alt="foto della città di Belluno"> 
			<div class="link "><a  href="Citta/Belluno.php">BELLUNO</a></div>
		</div>

	</div>

</div>

</body>

<?php include('footer.php') ?>    