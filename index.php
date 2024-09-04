<?php
echo "<h1> Creacion de archivo<h1>";
$file = open("logs.txt", "a");
  
fputs($file, "prueba de creacion de archivo");

?>
