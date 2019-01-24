
	<?php
	$base=$_REQUEST['base'];
	$user=$_REQUEST['usuario'];
	$pass=$_REQUEST['password'];
	
	$sql="CREATE TABLE IF NOT EXISTS auth_user ( id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, nombre VARCHAR(60) NOT NULL , email VARCHAR(150) NOT NULL , password VARCHAR(20) NOT NULL , enable BOOLEAN NOT NULL ) ENGINE = MyISAM  DEFAULT CHARSET=utf8";
	$conn = mysqli_connect('localhost',$user,$pass,$base);
	if(!$conn){

	echo "Error: no se pudo conectar a la base de datos ". PHP_EOL;
	echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		}
	else{
		mysqli_query ($conn, $sql);
		echo "<h1> Configurado correctamente</h1>";

	}

mysqli_close ($conn);

?>
