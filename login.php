<?php
require("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loguearse</title>
	<link rel="stylesheet" type="text/css" href="css/estilo-form.css">
</head>
<body>
	<div class="container">
	<form method="POST" action="log-auth.php"><br>

		Email:<br>
		<input type="text" name="email"><br>
		Password:<br>
		<input type="password" name="password"><br>
		<input type="submit" name="enviar" value="Ingresar">
		

	</form>
</div>
</body>
</html>
