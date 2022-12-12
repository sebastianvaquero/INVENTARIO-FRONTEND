
<?php
$servidor="localhost";
$user="root";
$password="";
$dbname="inventario";


//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$bus = new mysqli("localhost","root","","inventario"); 


   
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>

