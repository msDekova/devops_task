<?php
  // Create connection
  $con= new mysqli('mysql:host=mysql8-service;port=3306;dbname=db_name', 'root', 'password')or die("Could not connect to mysql".mysqli_error($con));
?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>
