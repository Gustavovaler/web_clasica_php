<?php
$conn = mysqli_connect("localhost","root","","base1");

if(!$conn){
	echo "Error: no se pudo conectar a la base de datos ". PHP_EOL;
	echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
}
else{
	
}
?>