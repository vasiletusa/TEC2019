<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">


<head>
	<?php 
        include_once 'functions.php'; 
	    getHead("AreaRiservata");
     ?>        
  </head>

<?php getMenu("AreaRiservata");?>
<?php getBreadcumbs("Area personale");?>

<div class="form">
<p>Benvenuto nella tua area personale <?php echo $_SESSION['username']; ?>!</p>

<a href="logout.php">Logout</a>
</div>
</body>
</html>