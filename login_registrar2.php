

<?php

include("conexion2.php");

$nombre = $_POST["proyec"];
$passw   = $_POST["pass"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM int WHERE proyec = '$nombre' AND password='$passw'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $nombre'); window.location='Inicio.html' </script>";
	}else
	{
		echo "<script> alert('proyec no existe'); window.location='int.html' </script>";
	}
}

//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO int(proyec,password) values ('$nombre','$passw')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Proyecto publicado con exito: $nombre'); window.location='Inicio.html' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
}


?>