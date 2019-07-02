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



<?php
$count=1;
$sel_query="Select * from tour ;";
$result = mysqli_query($db,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<p><a href="#" align="center"><?php echo $row["Descrizione"]; ?></a>
<a href="#" align ="center"><?php echo $row["Data"]; ?></a></p>



<?php $count++; } ?>


</div>
</body>
</html>