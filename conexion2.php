<!--
Crear un login y una página para registrar a un nuevo usuario con los siguientes datos:
usuario y contraseña.


(index.html) Login 	  -> Si el usuario existe 	 -> principal.html
(index.html) Login    -> Si el usuario no existe -> (index.html) Login
 registrar.html       -> Nuevo usuario           -> (index.html) Login

El login tendrá la opción para registrar.
Usar "estilos.css" en el ejercicio.

-->

<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test3";

$conn = mysqli_connect($dbhost,$dbuser,$dbpassw,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>