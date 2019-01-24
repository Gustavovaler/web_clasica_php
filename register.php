<?php
require("header.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo-form.css">
</head>
<body>
	<div class="container">
	<form method="POST" action="auth.php">
		Nombre:<br>
		<input type="text" name="nombre"><br>
		Email:<br>
		<input type="text" name="email"><br>
		Password:<br>
		<input type="password" name="password"><br>
		<input type="submit" name="enviar" value="Registrarme ahora">
		

	</form>
</div>
</body>
</html>
