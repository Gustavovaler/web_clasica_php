<?php
include("header.php");

if(!$_SESSION){
	header("location:login.php");
}

?>
<link rel="stylesheet" type="text/css" href="css/estilo-form.css">
<div class="container-insert">
<form method="POST" action="insert.php">
	Descripcion:<br>
	<input type="text" name="descripcion" required=""><br>
	Numero de articulo:<br>
	<input type="text" name="nro_articulo"><br>
	Talle:<br>
	<input type="text" name="talle" required=""><br>
	Color:<br>
	<input type="text" name="color"><br>
	Fabricante:<br>
	<input type="text" name="fabricante"><br>
	Jugador:<br>
	<input type="text" name="jugador"><br>
	Temporada:<br>
	<input type="text" name="temporada"><br>
	Cantidad:<br>
	<input type="text" name="cantidad"><br>
	Precio:<br>
	<input type="text" name="precio" required=""><br>
	Precio mayorista:<br>
	<input type="text" name="precio_mayorista" required=""><br><br>
	<input type="submit" name="" value="Insertar">


</form>
</div>