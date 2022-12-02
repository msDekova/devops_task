<?php
  $con= new mysqli('mysql8-service', 'root', 'password')or die("Could not connect to mysql".mysqli_error($con));
?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>
