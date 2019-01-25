<?php
require("conexion.php");

$email= $_REQUEST['email'];
$password=$_REQUEST['password'];
$sql="SELECT * FROM auth_user WHERE email = '$email' AND password = '$password'";
if($resultado = mysqli_query($conn, $sql)){
if (mysqli_num_rows($resultado)==1){
	$row= $resultado->fetch_assoc();	
	session_start();
	$_SESSION['nombre']= $row['nombre'];
	header("location:index.php");
}
}
else{
	echo "error";
}



?>