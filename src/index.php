<?php
  // Create connection
  $conn = mysqli_connect('mysql:host=mysql8-service;port=3306;dbname=db_name', 'root', 'password');

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>
