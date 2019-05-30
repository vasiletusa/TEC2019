<?php
require('server.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

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