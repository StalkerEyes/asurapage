<?php
echo "<h1> Creacion de archivo<h1>";

if(!is_dir("logs")){
	mkdir("logs", 0777, true);
}

$file = fopen("logs/logs.txt", "a");
  
fputs($file, "prueba de creacion de archivo");

?>
