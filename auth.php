<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];

require('conexion.php');
$sql="INSERT INTO auth_user (nombre,email,password,enable)VALUES('$nombre','$email','$password','0')";
if (mysqli_query($conn,$sql)){
	session_start();
	$_SESSION['nombre']= $nombre;
	header("location:index.php");
}
else{
	if( mysqli_error($conn)=='Duplicate entry '."'".$email."'".' for key '."'".'email'."'"){
		echo "<script type='text/javascript'>alert('Esa cuenta de mail ya se encuentra registrada');</script>";
		echo "<a href='javascript:history.back(1)'>Reintentar</a>";


		
		
	}
	//echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
mysqli_close($conn);
?>
