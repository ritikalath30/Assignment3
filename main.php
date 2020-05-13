<?php
session_start();
$cityname=$_GET['cityname'];
$_SESSION["cityname"]=$cityname;
/*$countryname=$_GET['countryname'];
$_SESSION["countryname"]=$countryname;
$statename=$_GET['statename'];
$_SESSION["statename"]=$statename; */
?>
 <html>
 <head>
   <title>Place order</title>
 </head>
 <body>
   <h1>Your Choice</h1>
   <h2 align="center">Country: <?php echo $_SESSION["countryname"]; ?> </h2>
   <h2 align ="center">State: <?php echo $_SESSION["statename"]; ?></h2>
   <h2 align = "center">City: <?php echo $_SESSION["cityname"]; ?></h2>
 </body>
 </html>
