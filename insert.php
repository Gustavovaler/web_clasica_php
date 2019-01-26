<?php
require("conexion.php");
$descripcion=$_POST['descripcion'];
$nro_art=$_POST['nro_art'];
$talle=$_POST['talle'];
$color=$_POST['color'];
$fabricante=$_POST['fabricante'];
$jugador=$_POST['jugador'];
$temporada=$_POST['temporada'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];
$precio_mayor=$_POST['precio_mayor'];
$nombre_foto =$_FILES['imagen']['name'];


$sql2="INSERT INTO productos (descripcion,nro_art,talle,color,fabricante,jugador,temporada,cantidad,precio,precio_mayor)VALUES ('$descripcion','$nro_art','$talle','$color','$fabricante','$jugador','$temporada','$cantidad','$precio','$precio_mayor')";

if(mysqli_query($conn,$sql2)){
	echo "guardado con exito";
}
else{
	echo mysqli_error($conn);
}




?>