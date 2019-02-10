<?php

$baseUser= 'root';
$host = 'localhost';
$passBase = '';
$baseName = 'base1';

$conn = mysqli_connect($host,$baseUser,$passBase,$baseName);

if(!$conn){
	echo "Error: no se pudo conectar a la base de datos ". PHP_EOL;
	echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
}
else{
	
}
?>