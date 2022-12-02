<?php
  pg_connect("host=mysql8-service password=cGFzc3dvcmQK");
  pg_query("create table test(id integer)");
?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>
