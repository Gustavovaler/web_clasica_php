<?php
require("header.php");
require("conexion.php");

$sql="SELECT * FROM productos";

$resultado = mysqli_query($conn,$sql);
echo "<table class='tabla-productos' border='0' cellspacing='0' cellpadding='0' >
<tr><td></td><td><b>Descripcion</b></td><td><b>Talle</b></td><td><b>color</b></td><td><b>Articulo</b></td><td><b>Jugador</b></td><td><b>Precio</b></td><td><b>Cantidad</b></td>
</tr>";
$count = 0;
while($row=mysqli_fetch_array($resultado)){
	$count++;

if ($count % 2 ==0){

echo "
<tr><td ><a href='item.php?id=".$row['id']."'><img src='imagenes/".$row['nombre_foto']."' width='70'></a><td>".$row["descripcion"]."</td><td>".$row['talle']."</td><td>".$row['color']."</td><td>".$row['nro_art']."</td><td>".$row['jugador']."</td><td>".$row['precio']."</td><td>".$row['cantidad']."
</tr>";
}
else{
echo "
<tr class='gris'><td  ><a href='item.php?id=".$row['id']."'><img src='imagenes/".$row['nombre_foto']."' width='70'></a><td>".$row["descripcion"]."</td><td>".$row['talle']."</td><td>".$row['color']."</td><td>".$row['nro_art']."</td><td>".$row['jugador']."</td><td>".$row['precio']."</td><td>".$row['cantidad']."
</tr>";


}


}


?>