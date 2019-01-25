<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	
	<header>
		<div class="contenedor-nav">
		<ul class="bar-nav">
			<li>
				<a href="index.php"><img src="imagenes/home.png" class="home-image"></a>
			</li>
			<li>
				<a href="productos.php">Productos</a>
			</li>
			
			<li >
				<a href="contacto.php">Contacto</a>
			</li>
			<?php
			session_start();
			if($_SESSION){	
			if ($_SESSION['nombre']!=''){

					echo '<li><a href="insertar.php">Insertar</a></li>
					<li><a href="logout.php">Salir</a></li> 					
					<li><a href="#" id="bienvenido">Bienvenido '.$_SESSION["nombre"].'</a>
					</li></ul>';	
				}

			else{
				echo '<li><a href="login.php">Ingresar</a></li><li>
				<a href="register.php">Registrarse</a>
				</li></ul>';			
			}}
			else
			{		echo '<li><a href="login.php">Ingresar</a></li><li>
				<a href="register.php">Registrarse</a></li></ul>';			
			}
			?>
		
	</div>
	</header>
<content>
