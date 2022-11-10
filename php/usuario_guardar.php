<!DOCTYPE html>
<html lang="en">

<head>

		<title>Registrar Categorias</title>
<!-- Required meta tags -->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="/INVENTARIO-FRONTEND/vistas/css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<!-- También puede utilizar dropdowns en su barra de navegación. Los dropdowns requieren un elemento de ajuste para el 
			posicionamiento, así que asegúrese de usar elementos separados y anidados para .nav-item y .nav-link como se muestra 
			a continuación. 
		-->
		<header>
	<div class="contenedor-principal">
		<nav class="navbar navbar-expand-lg " style="background:#39A900;">
			<a href="http://localhost/INVENTARIO-FRONTEND/index.php?vista=home">
			<img src="/INVENTARIO-FRONTEND/img/logosena.JPG">
			</a>
	
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			
							
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					
					<li class="nav-item active">
						<div class="menunavegacion">
					<li class="nav-item dropdown" img src="/INVENTARIO-FRONTEND/img/logosena.JPG">
							
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 	
							<a class="dropdown-item" href="../../INVENTARIO-FRONTEND/vistas/registrar.php?vista=user_new">Nuevo</a>
							<a class="dropdown-item" href="../../INVENTARIO-FRONTEND/vistas/listas.php?vista=user_list">Lista</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/buscar.php">Buscar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/cate_nuevo.php">Nuevo</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listascatego.php">Lista</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/buscarcategoria.php">Buscar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/nuevoproducto.php">Nuevo</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/listaproductos.php">Lista</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/productocategoria.php">Por categoria</a>
							<a class="dropdown-item" href="/INVENTARIO-FRONTEND/vistas/buscarproductos.php">Buscar</a>

			
						</div>
					</li>
				</ul>
			</div>

	
			<div class="row">
				<div class="col">
				<a href="../vistas/actualizar.php?;?>" <button type="button" class="  btn btn-primary" style=" margin-top:-5px; margin-right:100px; "> Mi Cuenta </a> </button>
				</div>
			</div>
			<a href="../index.php" <button type="button" class="btn btn-secondary" style=" margin-top:-5px; margin-right:100px; ">Cerrar sesi&oacute;n </a></button>
	</div>
	</div>
	</div>
	</div>
	</nav>
</header>
<?php
    
    require_once "/xampp/htdocs/INVENTARIO-FRONTEND/php/main.php";
	//error de array en l a validacion
/* if (isset($usuario_nombre) || isset($usuario_apellido) || isset($usuario_usuario) || isset($usuario_email) 
|| isset($usuario_clave_1)|| isset($usuario_clave_2)){ */

   /*== Almacenando datos ==*/
   $nombre=limpiar_cadena($_POST['usuario_nombre']);
   $apellido=limpiar_cadena($_POST['usuario_apellido']);

   $usuario=limpiar_cadena($_POST['usuario_usuario']);
   $email=limpiar_cadena($_POST['usuario_email']);

   $clave_1=limpiar_cadena($_POST['usuario_clave_1']);
   $clave_2=limpiar_cadena($_POST['usuario_clave_2']);


   /*== Verificando campos obligatorios ==*/
   if($nombre=="" || $apellido=="" || $usuario=="" || $clave_1=="" || $clave_2==""){
	   echo '
		   <div class="notification is-danger is-light">
			   <strong>¡Ocurrio un error inesperado!</strong><br>
			   No has llenado todos los campos que son obligatorios
		   </div>
	   ';
	   exit();
   }


   /*== Verificando integridad de los datos ==*/
   if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$nombre)){
	   echo '
		   <div class="notification is-danger is-light">
			   <strong>¡Ocurrio un error inesperado!</strong><br>
			   El NOMBRE no coincide con el formato solicitado
		   </div>
	   ';
	   exit();
   }

   if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$apellido)){
	   echo '
		   <div class="notification is-danger is-light">
			   <strong>¡Ocurrio un error inesperado!</strong><br>
			   El APELLIDO no coincide con el formato solicitado
		   </div>
	   ';
	   exit();
   }

   if(verificar_datos("[a-zA-Z0-9]{4,20}",$usuario)){
	   echo '
		   <div class="notification is-danger is-light">
			   <strong>¡Ocurrio un error inesperado!</strong><br>
			   El USUARIO no coincide con el formato solicitado
		   </div>
	   ';
	   exit();
   }

   if(verificar_datos("[a-zA-Z0-9$@.-]{7,100}",$clave_1) || verificar_datos("[a-zA-Z0-9$@.-]{7,100}",$clave_2)){
	   echo '
		   <div class="notification is-danger is-light">
			   <strong>¡Ocurrio un error inesperado!</strong><br>
			   Las CLAVES no coinciden con el formato solicitado
		   </div>
	   ';
	   exit();
   }


   /*== Verificando email ==*/
   if($email!=""){
	   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		   $check_email=conexion();
		   $check_email=$check_email->query("SELECT usuario_email FROM usuario WHERE usuario_email='$email'");
		   if($check_email->rowCount()>0){
			   echo '
				   <div class="notification is-danger is-light">
					   <strong>¡Ocurrio un error inesperado!</strong><br>
					   El correo electrónico ingresado ya se encuentra registrado, por favor elija otro
				   </div>
			   ';
			   exit();
		   }
		   $check_email=null;
	   }else{
		   echo '
			   <div class="notification is-danger is-light">
				   <strong>¡Ocurrio un error inesperado!</strong><br>
				   Ha ingresado un correo electrónico no valido
			   </div>
		   ';
		   exit();
	   } 
   }


   /*== Verificando usuario ==*/
   $check_usuario=conexion();
   $check_usuario=$check_usuario->query("SELECT usuario_usuario FROM usuario WHERE usuario_usuario='$usuario'");
   if($check_usuario->rowCount()>0){
	   echo '
		   <div class="notification is-danger is-light">
			   <strong>¡Ocurrio un error inesperado!</strong><br>
			   El USUARIO ingresado ya se encuentra registrado, por favor elija otro
		   </div>
	   ';
	   exit();
   }
   $check_usuario=null;


   /*== Verificando claves ==*/
   if($clave_1!=$clave_2){
	   echo '
		   <div class="notification is-danger is-light">
			   <strong>¡Ocurrio un error inesperado!</strong><br>
			   Las CLAVES que ha ingresado no coinciden
		   </div>
	   ';
	   exit();
   }else{
	   $clave=password_hash($clave_1,PASSWORD_BCRYPT,["cost"=>10]);
   }


   /*== Guardando datos ==*/
   $guardar_usuario=conexion();
   $guardar_usuario=$guardar_usuario->prepare("INSERT INTO usuario(usuario_nombre,usuario_apellido,usuario_usuario,usuario_clave,usuario_email) VALUES(:nombre,:apellido,:usuario,:clave,:email)");

   $marcadores=[
	   ":nombre"=>$nombre,
	   ":apellido"=>$apellido,
	   ":usuario"=>$usuario,
	   ":clave"=>$clave,
	   ":email"=>$email
   ];

   $guardar_usuario->execute($marcadores);

   if($guardar_usuario->rowCount()==1){
	   echo '
	   <script type="text/javascript">alert("¡USUARIO REGISTRADO!")</script>
		
	   '

	   ;
	   echo "<script> window.location.href = '/INVENTARIO-FRONTEND/';</script>"; 
	   ;
   }else{
	   echo '
		   <div class="notification is-danger is-light">
			   <strong>¡Ocurrio un error inesperado!</strong><br>
			   No se pudo registrar el usuario, por favor intente nuevamente
		   </div>
	   ';
   }
   $guardar_usuario=null;

