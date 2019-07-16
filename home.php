<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<link rel="stylesheet" href="stile.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("Login");
<<<<<<< HEAD
     ?>        
  </head>
  
<?php setOrganizzaFalse(); ?>
=======
     ?>  

	<link rel="stylesheet" href="stile.css">      
</head>

>>>>>>> master
<?php getMenu("Home");?>
<?php getBreadcumbs("Home");?>

<body>

<div id="boxes">
<div class="left">
	<h2>Curiosità</h2>
	<p>Sapevi che...</p>
</div>	

<div id="mid">

<div class="pic">
	<img src="img/padova.jpg" alt="foto della città di Padova">
	<div class="link"><a href="Citta/Padova.php">PADOVA</a></div>
</div>

<div class="pic">			
	<img src="img/venezia.jpg" alt="foto della città di Venezia">
	<div class="link"><a href="Citta/Venezia.php">VENEZIA</a></div>
</div>
<div class="pic">			
	<img src="img/rovigo.jpg" alt="foto della città di Rovigo">
	<div class="link"><a href="Citta/Rovigo.php">ROVIGO</a></div>
</div>
<div class="pic">
	<img src="img/vicenza.jpg" alt="foto della città di Vicenza">
	<div class="link"><a href="Citta/Vicenza.php">VICENZA</a></div>
</div>
<div class="pic">
	<img src="img/verona.jpg" alt="foto della città di Verona">
	<div class="link"><a href="Citta/Verona.php">VERONA</a></div>
</div>
<div class="pic">			
	<img src="img/treviso.jpg" alt="foto della città di Treviso">
	<div class="link"><a href="Citta/Treviso.php">TREVISO</a></div>
</div>
<div class="pic">
<img src="img/belluno.jpg" alt="foto della città di Belluno">
	<div class="link"><a href="Citta/Belluno.php">BELLUNO</a></div>
</div>

</div>

<div class="right">
	<h2>VENETOTOUR</h2>
	<div class="testo">
	<p>Venetetour si prepone di offrire un servizio interattivo con la possibilità da parte degli utenti di creare e proporre tour turistici nella Regione Veneto e avvalersi della preparazione di una delle guide a noi affigliate.<br>
	Che aspetti? mettiti in marcia.
	</p>
	</div>
</div>			
</div>

</body>

<?php include('footer.php') ?>