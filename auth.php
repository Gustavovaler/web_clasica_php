<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];

require('conexion.php');
$sql="INSERT INTO auth_user (nombre,email,password,enable)VALUES('$nombre','$email','$password','1')";
if (mysqli_query($conn,$sql)){
	session_start();
	$_SESSION['nombre']= $nombre;
	header("location:index.php");
}
else{
	echo "hubo un error<br>";
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
mysqli_close($conn);
?>
